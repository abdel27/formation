<?php

namespace Controller;

use \Controller\Controller;
use \W\Security\AuthentificationModel;
use \Model\AnnonceModel;
use \Model\UserModel;
use \Model\DepartementModel;
use \Security\Validation;
use \Tools\Tool;
use \Services\Flash\FlashBags;


Class DashboardController extends Controller {

 

//Methode pour aller chercher tout les enregistrements de la table
    public function dashboard()
    {
        //Insatnce de la class AnnonceModel
        $all = new AnnonceModel();
        $annonce = $all->findAll();
        $this->show('default/dashboard' , array('annonce' => $annonce));
    }


  
}