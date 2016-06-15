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


Class RegisterController extends Controller {



    public function login()
    {
    $this->show('default/login');
    }


    public function register()
    {
    $this->show('default/register');
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


public function logout() {


     $logout = new AuthentificationModel();
     $logout->logUserOut() ;
     $this->redirectToRoute('login');

    }

}
