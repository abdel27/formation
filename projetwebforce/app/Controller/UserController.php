<?php

namespace Controller;
use \Controller\Controller;
use \W\Security\AuthentificationModel;
use \Model\AnnonceModel;
use \Model\DepartementModel;
use \Model\UserModel;
use \Security\Validation;
use \Services\Flash\FlashBags;
use \W\Security\AuthorizationModel;



Class UserController extends Controller 

{




public function profiluser()
{
        $all = new AnnonceModel();
        $annonces = $all->findAll();
        $all = new UserModel();
        $users = $all->findAll();
        $this->show('default/profiluser', array('annonces' =>$annonces , 'users' => $users));
}


//Methode qui permet de supprimer un membre
public function deleteuser($id) 
{
        //Instance de la class UserModel
        $model = new UserModel();
        $user = $model->delete($id);
        $this->show('default/deleteuser' , ['id' => $id]);  
}




public function edituseraction($id) 
{

        if(!empty($_POST['submit'])) {

        // protection XSS des champs
 
            $id                 = trim(strip_tags($_POST['id']));
            $role               = trim(strip_tags($_POST['role']));
            $active             = trim(strip_tags($_POST['active']));

            $validation = new Validation();

            $all = new DepartementModel();
            $departements = $all->findAll();


            $error['role']    = $validation->checkValidation($role,'role',3,5);
            $error['active']  = $validation->checkValidation($active,'active',2,3);

            $model = new UserModel();

            //Si pas d'erreur
            if ($validation->isValide($error)){
                $data = array(
                         'id' => $id,
                         
                         'role' => $role,
                         'active' => $active ,
                         
                         );
              
                //Insertion en base de donnees
                $model->update($data , $id);

                // redirection vers le listing admin des articles 
                //$this->redirectToRoute('dashboard');
                $this->show('default/edituser', array('departements' => $departements));
            } else {

                // show formulaire avec les error
                //$this->show('default/dashboard' , array('error' => $error));
                //$this->redirectToRoute('dashboard');
                //$this->show('default/edituser'); 
                $this->redirectToRoute('dashboard');
            }
        }
}

 //Methode qui permet de recuperer un membre et un departement en fonction de son ID
public function edituser($id) 
{
        //Instance de la class USerModel
        $model = new UserModel();
        $user = $model->find($id);
        //debug($user);
        //$this->show('default/edituser');
        //$this->show('default/edituser' , );
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


//Methode qui recupere tout les membres
public function manageuser() 
{

        $all = new UserModel();
        $users = $all->findAll();
        $this->show('default/manageuser', array('users' =>$users));

}




}