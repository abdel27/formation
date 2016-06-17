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


  //Methode pour aller chercher tout les enregistrements de la table
  // Page d'accueil du Dashboard
  public function dashboard()
  {
      //Instance de la class AnnonceModel
      $all = new AnnonceModel();
      $annonce = $all->findAll();
      $this->show('default/dashboard' , array('annonce' => $annonce));

      // Instance de la classe UsersModel
      $all = new UsersModel();
      $users = $all->findAll();
      $this->show('default/dashboard' , array('users' => $users));
  }




}
