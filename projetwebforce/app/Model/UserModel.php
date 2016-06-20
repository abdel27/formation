<?php


namespace Model;
use \W\Model\UsersModel  as BaseUser;
use \W\Model\ConnectionModel;



class UserModel extends BaseUser 

{
  

private $email;
private $password;
private $token;



//Pour stocker les messages d'erreurs
private $error;








//Fonction pour recuperer le mail et le token

public function findEmailToken() {

  $app = getApp();
  $dbh = ConnectionModel::getDbh();


  $sql = "SELECT email, token FROM user WHERE email = $email";

          $sth = $dbh->prepare($sql);
          if($sth->execute()){
          $user = $sth->fetchAll();
          if($user){
          return $user;
      }
    }

    return false;
          

}

//Fonction qui comptabilise le nombre d'utilisateur inscrit

public function countUser() {

  $sql = "SELECT COUNT(*) FROM ab_user";
          $stmt = $dbh->prepare($sql);
          $stmt->execute();
          $count = $stmt->fetch();
          return $count; 
}

//Fontion qui comptabilise le nombre d'utilisateur bloqué

public function countbanUser() {

  $sql = "SELECT COUNT(*) FROM ab_user WHERE active = 'no'";
          $stmt = $dbh->prepare($sql);
          $stmt->execute();
          $count = $stmt->fetch();
          return $count;
}


//Fonction qui test si l'utilisateur est bloqué return true si oui

public function banUser() {

  $user = $model->findAll();


}



}



