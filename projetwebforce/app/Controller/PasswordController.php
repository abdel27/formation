<?php

namespace Controller;

use \Controller\Controller;

use \W\Security\AuthentificationModel;
use \Model\AnnonceModel;
use \Model\UserModel;
use \W\Security\AuthorizationModel;
use \Security\Validation;
use \Tools\Tool;
use \Model\DepartementModel;
use \Services\Flash\FlashBags;


Class PasswordController extends Controller {




//Lien vers la page mot de passe oublié
    public function forget() 
    {
        $this->show('default/forget');
    }

    //Saisi d'un email et verification si present dans la base et recupere le token associé
    public function forgetaction($id) 
    {
        if(!empty($_POST['submit'])) {
            //Protevtion XXS
            $email  = trim(strip_tags($_POST['email']));
            //Validation du email
            $validation = new Validation();
            $error['email']   = $validation->validateMail($email,80);
            //tester si l'email est present dans la base de données
            $model = new UserModel();
            $user = $model->find($id);
            $model->emailExists($email);
         

            if($validation->isValide($error)){
                //Si email bien present dans BDD
                if($model->emailExists($email)){
                    $model = New UserModel();
                    $user = $model->findEmailToken($email);
                    $this->redirectToRoute('lienspassword' , ['user' => $user]);
                                           
                } 
            } else {
                    $error['email'] = 'Votre email est inconnu , veuillez saisir un email correst';
                    $this->show('default/forget' , array('error' => $error));
                }
        }

    }

    //Methode qui renvoi vers la page liens password
    public function lienspassword($id) {
        $model = New UserModel();
        $user = $model->find($id);
         
        $this->show('default/lienspassword' , array('user' => $user));


    }

    //Lien vers la page changement de mot de passe
    public function passwordmodif() {
  
        $this->show('default/passwordmodif'); 
    }

    //Methode pour modifier le mot de passe
    public function passwordmodifaction($id) {

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
                //Generation d'un nouveau token
                $validation = new Validation();
                $token = $validation->generateRandomString(50);
                $data = array(                                                                    
                         'password' => $passhach ,
                         'token' => $token ,
                         );
                $model = new UserModel();
                $change = $model->update($data,$id);
                $this->redirectToRoute('home');


            }
        }
    }



  
}