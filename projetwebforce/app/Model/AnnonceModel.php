<?php /* app/Model/AnnonceModel.php */

   
namespace Model;



use \W\Model\ConnectionModel;







class AnnonceModel extends \W\Model\Model 
 {

//Les champs de la table :
private $id;
private $iduser;
private $nom;
private $idespece;
private $idrace;
private $age;
private $sexe;
private $lof;
private $description;
private $qualites;
private $active;


  //Fonction qui comptabilise le nombre d'annonce

public function countAnnonce() {

  $sql = "SELECT COUNT() FROM annonce ";
        $stmt = $dbh->prepare($sql);
        $stmt = execute();
        $count = $stmt->fetch();
        return $count;

}

  //Fonction qui comptabilise les annonces en attentes
public function countAttente() {
  $sql = "SELECT COUNT() FROM annonce WHERE active='no'";
        $stmt = $dbh->prepare($sql);
        $stmt = execute();
        $count = $stmt->fetch();
        return $count;

}



}