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



public function forget() {

$this->show('default/forget');

}

public function forgetaction() {

  if(!empty($_POST['submit'])) {

    $email  = trim(strip_tags($_POST['email']));

    $validation = new Validation();
    $error['email']   = $validation->validateMail($email,80);
    if ($validation->isValide($error)){
    $model = new UserModel();
    $user = $model->findEmailToken();
    //print_r($user);
    //die();
    $this->show('default/lienspassword', array('error' =>$error));

    }
  }

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