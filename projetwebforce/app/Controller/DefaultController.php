<?php

namespace Controller;

use \Controller\Controller;
use \Controller\AnnonceController;
use \W\Security\AuthentificationModel;
use \Model\AnnonceModel;
use \Model\UserModel;

use \Security\Validation;
use \Tools\Tool;



use \Services\Flash\FlashBags;

class DefaultController extends Controller
{

	/**s
	 * Page d'accueil par défaut
	 */
	public function home()
	 {

    $flashBag = new FlashBags();

    $flashBag->setFlash('info', "Test de message");

		$this->show('default/home');
	 }


  public function login()
    {
    $this->show('default/login');
    }

    public function profiluser()
    {
    $this->show('default/profiluser');
    }

	public function detail()
		{
		$this->show('default/detail');
		}


    public function register()
    {
    $this->show('default/register');
    }

    //Methode pour aller chercher tout les enregistrements de la table
    public function dashboard()
    {

    $all = new AnnonceModel();
    $annonce = $all->findAll();
    $this->show('default/dashboard' , array('annonce' => $annonce));
  }



  public function loginaction() {

      if(!empty($_POST['submit'])) {
      // protection XSS
        $username    = trim(strip_tags($_POST['username']));
        $password  = trim(strip_tags($_POST['password']));

        $validation = new Validation();
        $error['username']  = $validation->checkValidation($username,'username',3,40);
        $error['password']  = $validation->checkValidation($password,'password',8,40);

        if ($validation->isValide($error)){

          $AuthentificationModel = new AuthentificationModel();

          $user = $AuthentificationModel->isValidLoginInfo($username, $password);

          //$user = new UsersModel();
          // $poste = $user->find();


           if(!empty($user)) {

             $AuthentificationModel->logUserIn($user);
          //   $AuthentificationModel->getLoggedUser();
          //   //$AuthentificationModel->refreshUser();

             $this->redirectToRoute('dashboard');
          }


        } else {
            // show formulaire de connexion avec les error
             $this->show('default/login' , array('error' => $error));
        }

      }
    }

     public function logout() {


     $logout = new AuthentificationModel();
     $logout->logUserOut() ;
     $this->redirectToRoute('login');

    }

     public function registeraction() {

      if(!empty($_POST['submit'])) {

  // protection XSS

      $nom = trim(strip_tags($_POST['nom']));
      $prenom = trim(strip_tags($_POST['prenom']));
      $username = trim(strip_tags($_POST['username']));
      $departement = trim(strip_tags($_POST['departement']));
      $email  = trim(strip_tags($_POST['email']));
      $password  = trim(strip_tags($_POST['password']));
      $password2  = trim(strip_tags($_POST['password2']));



      $model = new UserModel();

      if(!$model->usernameExists($username) OR !$model->emailExists($email) ){

        $validation = new Validation();
        $token = $validation->generateRandomString(50);

        $error['username']  = $validation->checkValidation($username,'username',3,40);
        $error['email']   = $validation->validateMail($email,80);
        $error['password'] = $validation->testPassword($password,$password2,8);

      if ($validation->isValide($error)){
        $AuthentificationModel = new AuthentificationModel();
        $passhach = $AuthentificationModel->hashPassword($password);

        $data = array('nom' =>$nom ,
                         'prenom' =>$prenom ,
                         'username' => $username ,
                         'date_naissance' => date('Y-m-d') ,
                         'email' => $email ,
                         'password' => $passhach ,
                         'token' => $token ,
                         'ip' => $_SERVER['REMOTE_ADDR'],
                         'created_at' => date('Y-m-d'),
                         'departement' => $departement,
                         'role' => 'user'  ,
                         'active' => 'no' ,
                         'last_connection' => date('Y-m-d'));

          print_r($data);

          //$model = new UsersModel();
          $model->insert($data);

                // redirection vers le listing admin des articles
                $this->redirectToRoute('login');

            } else {
                // show formulaire avec les error
                $this->show('default/register' , array('error' => $error));
            }
      }
  }
}

public function newannonce()
  {

    $this->show('default/newannonce');

  }


public function newannonceaction()

  {

      if ( !empty($_POST['submitnewpost']) ) {

      $nom = trim(strip_tags($_POST['nom']));
      $espece = trim(strip_tags($_POST['espece']));
      $race = trim(strip_tags($_POST['race']));
      $age = trim(strip_tags($_POST['age']));
      $sexe = trim(strip_tags($_POST['sexe']));
      $lof = trim(strip_tags($_POST['lof']));
      $qualite = trim(strip_tags($_POST['qualite']));
      $description = trim(strip_tags($_POST['description']));

      $validation = new Validation();

      $error['nom']  = $validation->checkValidation($nom,'nom',3,40);
      $error['espece']  = $validation->checkValidation($espece,'espece',3,40);
      $error['race']  = $validation->checkValidation($race,'race',3,40);
      $error['age']  = $validation->checkValidation($age,'age',3,40);
      $error['sexe']  = $validation->checkValidation($sexe,'sexe',3,40);
      $error['lof']  = $validation->checkValidation($lof,'lof',3,40);
      $error['qualite']  = $validation->checkValidation($qualite,'qualite',3,40);
      $error['description']   = $validation->checkValidation($description,'description',3,220);


         if ($validation->isValide($error)){
           $tool = New Tool();
           $slug = $tool->slugify($title);
           $data = array('nom' => $nom ,
                         'espece' => $espece ,
                         'race' => $race ,
                         'age' => $age ,
                         'sexe' => $sexe,
                         'lof' => $lof ,
                         'qualite' => $qualite ,
                         'description' =>$description,
                         'active' => 'yes');

            print_r($data);
            // insertion
            $model = new AnnonceModel();
            $model->insert($data);

                // redirection vers le listing admin des articles
                $this->dashboard();
            } else {
                // show formulaire avec les error
                $this->show('default/newannonce' , array('error' => $error));
            }
  }
}




public function forget() {

$this->show('default/forget');

}


public function forgetaction() {

  if(!empty($_POST['submit'])) {

    $validation = new Validation();
    $error['email']   = $validation->validateMail($email,80);
    if ($validation->isValide($error)){
    $model = new UserModel();
    $user = $model->findMailToken();
    $this->show('default/lienspassword', array('user' =>$users));

    }
  }

}






public function manageuser() {
    $all = new UserModel();
    $users = $all->findAll();

  $this->show('default/manageuser', array('users' =>$users));

}


public function edituser($id) {

  $model = new UserModel();
  $user = $model->find($id);
  $this->show('default/edituser' , ['id' => $id]);


}



public function deleteuser($id) {

  $model = new UserModel();
  $user = $model->delete($id);
  $this->show('default/deleteuser' , ['id' => $id]);
}



public function passwordmodif() {

  $this->show('default/passwordmodif');
}


public function passwormodifaction() {

  if(!empty($_POST['submit'])) {

    $password1  = trim(strip_tags($_POST['newpassword']));
    $password2  = trim(strip_tags($_POST['newpassword2']));
    $validation = new Validation();
    $token = $validation->generateRandomString(50);
    $error['password'] = $validation->testPassword($password1,$password2,8);

    if ($validation->isValide($error)){
      $AuthentificationModel = new AuthentificationModel();
      $passhach = $AuthentificationModel->hashPassword($password1);

      $model = new UserModel();






    }
  }
}

}
