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


Class PasswordController extends Controller {

      //Lien vers la page changement de mot de passe
      public function passwordmodif()
      {
        $this->show('default/passwordmodif');
      }

      //Methode pour modifier le mot de passe
      public function passwormodifaction()
      {
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


      //Lien vers la page mot de passe oublié
      public function forget()
      {
          $this->show('default/forget');
      }


      //Saisi d'un email et verification si present dans la base et recupere le token associé
      public function forgetaction()
      {
          if(!empty($_POST['submit'])) {
              //Protevtion XXS
              $email          = trim(strip_tags($_POST['email']));
              //Validation du email
              $validation     = new Validation();
              $error['email'] = $validation->validateMail($email,80);
              if($validation->isValide($error)){
                  //Instance da la class UserModel
                  $model = new UserModel();
                  $user  = $model->findEmailToken();
                  //print_r($user);
                  //die();
                  $this->show('default/lienspassword', array('error' =>$error));
                }
            }
        }








}
