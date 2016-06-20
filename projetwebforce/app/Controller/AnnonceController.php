<?php


namespace Controller;

use \Controller\Controller;
use \W\Security\AuthentificationModel;
use \Model\AnnonceModel;
use \Model\UserModel;
use \W\Security\AuthorizationModel;
use \Model\DepartementModel;
use \Security\Validation;
use \Services\Flash\FlashBags;

class AnnonceController extends Controller
{




  //Méthode pour supprimer une annonce
    public function deleteannonce($id)
    {
        //Instancier la class AnnonceModel
        $model = new AnnonceModel();
        $annonce = $model->delete($id);
        $this->show('default/deleteannonce' , ['id' => $id]);
    }


    //Méthode pour récupérer tous les détails d'une annonce
    public function detail($id) {
        //Instancier la classe AnnonceModel
        $all = new AnnonceModel();
        $details = $all->find($id);
        $this->show('default/detail', array('details' => $details));

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

    
   


}