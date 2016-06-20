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


Class ContactController extends Controller 
{






  public function contact()
  {
    $this->show('default/contact');
  }

}