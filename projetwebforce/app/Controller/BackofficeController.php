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


Class BackOffice extends Controller {

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




  
}