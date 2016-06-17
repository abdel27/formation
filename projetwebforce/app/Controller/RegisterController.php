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


    // Affichage de la page de login
    public function login()
    {
      $this->show('default/login');
    }

    // Affichage de la page d'inscription
    public function register()
    {
      $this->show('default/register');
    }


    // Action du formulaire de connexion
     public function loginaction() {

      if(!empty($_POST['submit'])) {
      // protection XSS
        $username  = trim(strip_tags($_POST['username']));
        $password  = trim(strip_tags($_POST['password']));

        $validation         = new Validation();
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



    //Methode d'inscription d'un membre, securite et validation des champs, insertion dans BDD
    public function registeraction()
    {
      if(!empty($_POST['submit'])) {

        // protection XSS
        $nom         = trim(strip_tags($_POST['nom']));
        $prenom      = trim(strip_tags($_POST['prenom']));
        $username    = trim(strip_tags($_POST['username']));
        $departement = trim(strip_tags($_POST['departement']));
        $email       = trim(strip_tags($_POST['email']));
        $password    = trim(strip_tags($_POST['password']));
        $password2   = trim(strip_tags($_POST['password2']));
        $model       = new UserModel();

            if(!$model->usernameExists($username) OR !$model->emailExists($email) ){
                //Validation des champs
                $validation = new Validation();
                //Generation d'un token de maniere aleatoire
                $token = $validation->generateRandomString(50);

                $error['nom']          = $validation->checkValidation($username,'nom',3,40);
                $error['prenom']       = $validation->checkValidation($username,'prenom',3,40);
                $error['email']        = $validation->validateMail($email,80);
                $error['username']     = $validation->checkValidation($username,'username',3,40);
                $error['departement']  = $validation->checkValidation($departement,'departement',1,100);
                $error['prenom']       = $validation->checkValidation($username,'prenom',3,40);
                $error['password']     = $validation->testPassword($password,$password2,8);
                //Si pas d'erreur
                if ($validation->isValide($error)){
                    //Instanciation de la class AuthenticationModel
                    $AuthentificationModel = new AuthentificationModel();
                    //Hassage du mot de passe
                    $passhach = $AuthentificationModel->hashPassword($password);
                    $data = array('nom'             => $nom ,
                                  'prenom'          => $prenom ,
                                  'username'        => $username ,
                                  'date_naissance'  => date('Y-m-d') ,
                                  'email'           => $email ,
                                  'password'        => $passhach ,
                                  'token'           => $token ,
                                  'ip'              => $_SERVER['REMOTE_ADDR'],
                                  'created_at'      => date('Y-m-d'),
                                  'departement'     => $departement,
                                  'role'            => 'user',
                                  'active'          => 'no',
                                  'last_connection' => date('Y-m-d'));

                        //print_r($data);

                        //Insertion en BDD
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

    // Page de déconnexion
    public function logout()
    {
      $logout = new AuthentificationModel();
      $logout->logUserOut() ;
      $this->redirectToRoute('login');
    }

}
