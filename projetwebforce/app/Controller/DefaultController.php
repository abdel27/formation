<?php

namespace Controller;

use \Controller\Controller;
use \W\Security\AuthentificationModel;
use \Model\AnnonceModel;
use \Model\UserModel;
use \Security\Validation;
use \Tools\Tool;
use \Services\Flash\FlashBags;
use \Model\DepartementModel;



class DefaultController extends Controller
{


  //Page d'accueil par défaut
  public function home()
  {

        $flashBag = new FlashBags();

         $flashBag->setFlash('info', "Test de message");

    $this->show('default/home');
  }




    public function profiluser()
    {
    $this->show('default/profiluser');
    }

		public function contact()
		{
		$this->show('default/contact');
		}


    //Methode pour aller chercher tout les enregistrements de la table
    public function dashboard()
    {
        //Instance de la class AnnonceModel
        $all = new AnnonceModel();
        $annonces = $all->findAll();
        $this->show('default/dashboard' , array('annonces' => $annonces));

        // Instance de la classe UsersModel
        $all = new UsersModel();
        $users = $all->findAll();
        $this->show('default/dashboard' , array('users' => $users));

    }



    //Methode qui permet d'aller vers page une nouvelle annonce
    public function newannonce()
    {

        $this->show('default/newannonce');

    }


    //Creation d'une nouvelle annonce enregistrée sur la BDD
    public function newannonceaction()

    {

      if ( !empty($_POST['submitnewpost']) ) {
        //Protection XXS
        $nom = trim(strip_tags($_POST['nom']));
        $espece = trim(strip_tags($_POST['espece']));
        $race = trim(strip_tags($_POST['race']));
        $age = trim(strip_tags($_POST['age']));
        $sexe = trim(strip_tags($_POST['sexe']));
        $lof = trim(strip_tags($_POST['lof']));
        $qualite = trim(strip_tags($_POST['qualite']));
        $description = trim(strip_tags($_POST['description']));
        //Validation des champs
        $validation = new Validation();
        //Gestion des erreurs
        $error['nom']  = $validation->checkValidation($nom,'nom',3,40);
        $error['espece']  = $validation->checkValidation($espece,'espece',3,40);
        $error['race']  = $validation->checkValidation($race,'race',3,40);
        $error['age']  = $validation->checkValidation($age,'age',3,40);
        $error['sexe']  = $validation->checkValidation($sexe,'sexe',3,40);
        $error['lof']  = $validation->checkValidation($lof,'lof',3,40);
        $error['qualite']  = $validation->checkValidation($qualite,'qualite',3,40);
        $error['description']   = $validation->checkValidation($description,'description',3,220);

            //Si pas d'erreur
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

                //print_r($data);
                // insertion
                //Insertion dans la base de donnee
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

    //Methode qui recupere tout les membres
     public function manageuser() {
        $all = new UserModel();
        $users = $all->findAll();
        $this->show('default/manageuser', array('users' =>$users));

    }

    //Methode qui permet de recuperer un membre en fonction de son ID
    public function edituser($id) {
        //Instance de la class USerModel
        $model = new UserModel();
        $user = $model->find($id);
        //debug($user);
        //$this->show('default/edituser');
        //$this->show('default/edituser' , ['id' => $id]);
        //$this->show('default/edituser' , array('user' => $user));
        //Instance de la class Departement
        $all = new DepartementModel();
        $departements = $all->findAll();

        //debug($departements);

        $this->show('default/edituser' , array(
            'departements' => $departements,
            'user' => $user
        ));


    }


    //Methode qui permet de supprimer un membre
    public function deleteuser($id) {
        //Instance de la class USerModel
        $model = new UserModel();
        $user = $model->delete($id);
        $this->show('default/deleteuser' , ['id' => $id]);
    }


    //Methode qui recupere toutes les annonces
     public function manageannonce() {
        $all = new AnnonceModel();
        $annonces = $all->findAll();
        $this->show('default/manageannonce', array('annonces' =>$annonces));
    }


    //Methode qui recupere toutes les annonces
     public function postannonce() {
        $all = new AnnonceModel();
        $annonces = $all->findAll();
        $this->show('default/postannonce', array('annonces' =>$annonces));
    }


    //Lien vers la page mot de passe oublié
    public function forget() {

        $this->show('default/forget');

    }

    //Saisi d'un email et verification si present dans la base et recupere le token associé
    public function forgetaction() {

        if(!empty($_POST['submit'])) {
            //Protevtion XXS
            $email  = trim(strip_tags($_POST['email']));
            //Validation du email
            $validation = new Validation();
            $error['email']   = $validation->validateMail($email,80);
            if($validation->isValide($error)){
                //Instance da la class UserModel
                $model = new UserModel();
                $user = $model->findEmailToken();
                //print_r($user);
                //die();
                $this->show('default/lienspassword', array('error' =>$error));

    }
  }

}



    //Lien vers la page changement de mot de passe
    public function passwordmodif() {

        $this->show('default/passwordmodif');
    }

    //Methode pour modifier le mot de passe
    public function passwormodifaction() {

        if(!empty($_POST['submit'])) {
            //Protection XXS
            $password1  = trim(strip_tags($_POST['newpassword']));
            $password2  = trim(strip_tags($_POST['newpassword2']));
            $validation = new Validation();
            //On genere un nouveau token
            $token = $validation->generateRandomString(50);
            $error['password'] = $validation->testPassword($password1,$password2,8);
            //Si pas d'erreur
            if ($validation->isValide($error)){
                //Instance de la class AuthentificationModel
                $AuthentificationModel = new AuthentificationModel();
                //Hachage du mot de passe
                $passhach = $AuthentificationModel->hashPassword($password1);
                $model = new UserModel();
            }
        }
    }

    //Lien vers la page se logger
    public function login()
    {
        $this->show('default/login');
    }

    //Lien vers la page d'inscription
    public function register()
    {
        //Instance de la class Departement
        $all = new DepartementModel();
        $departements = $all->findAll();

        //Envoi les donnees a la vue

        $this->show('default/register' , array('departements' => $departements));

    }


    //Methode pour se logger, sécurité et validation des champs, authentification
     public function loginaction() {

        if(!empty($_POST['submit'])) {
            // protection XSS
            $username    = trim(strip_tags($_POST['username']));
            $password  = trim(strip_tags($_POST['password']));
            $validation = new Validation();
            $error['username']  = $validation->checkValidation($username,'username',3,40);
            $error['password']  = $validation->checkValidation($password,'password',8,40);

            //Si pas d'erreur
            if ($validation->isValide($error)){

                //Instanciation de la class AuthenticationModel
                $AuthentificationModel = new AuthentificationModel();
                $user = $AuthentificationModel->isValidLoginInfo($username, $password);
                if(!empty($user)) {

                    //Methode pour se loggger
                    $AuthentificationModel->logUserIn($user);

                    //Si connexion OK redirection
                    $this->redirectToRoute('dashboard');
                }
            } else {
                // Sinon redirection vers formulaire de connexion avec les error
                $this->show('default/login' , array('error' => $error));
            }
        }
    }


    //Methode d'inscription d'un membre, securite et validation des champs, insertion dans BDD
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
                //Validation des champs
                $validation = new Validation();
                //Generation d'un token de maniere aleatoire
                $token = $validation->generateRandomString(50);

                $error['username']  = $validation->checkValidation($username,'username',3,40);
                $error['email']   = $validation->validateMail($email,80);
                $error['password'] = $validation->testPassword($password,$password2,8);
                //Si pas d'erreur
                if ($validation->isValide($error)){
                    //Instanciation de la class AuthenticationModel
                    $AuthentificationModel = new AuthentificationModel();
                    //Hassage du mot de passe
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

                        //print_r($data);

                        //Insertion en base de donnees
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

    //Methode de deconnexion du memnbre
    public function logout()
    {
        $logout = new AuthentificationModel();
        $logout->logUserOut() ;
        $this->redirectToRoute('login');
    }

    public function edituseraction() {

        if(!empty($_POST['submit'])) {

        // protection XSS

        $nom =              trim(strip_tags($_POST['nom']));
        $prenom =           trim(strip_tags($_POST['prenom']));
        $username =         trim(strip_tags($_POST['username']));
        $departement =      trim(strip_tags($_POST['departement']));
        $email  =           trim(strip_tags($_POST['email']));
        $date_naissance  =  trim(strip_tags($_POST['date_naissance']));
        $role =             trim(strip_tags($_POST['role']));
        $active =         trim(strip_tags($_POST['active']));
        $situation =        trim(strip_tags($_POST['situation']));
        $adresse =          trim(strip_tags($_POST['adresse']));
        $codepostal =       trim(strip_tags($_POST['code_postal']));
        $tel =              trim(strip_tags($_POST['tel']));
        $city =             trim(strip_tags($_POST['city']));

    }




}



}
