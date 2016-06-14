<?php


namespace Model;
use \W\Model\UsersModel  as BaseUser;
use \W\Model\ConnectionModel;



class UserModel extends BaseUser 

{
  
private $id;
private $nom;
private $prenom;
private $username;
private $date_naissance;
private $email;
private $password;
private $token;
private $ip;
private $created_at;
private $departement;
private $role;
private $active;
private $last_connection;
private $situation;
private $adresse;
private $codepostal;
private $tel;
private $city;


//Pour stocker les messages d'erreurs
private $error;


//Fonction pour recuperer le mail et le token

public function findEmailToken() {

  $sql = "SELECT email, token FROM user WHERE email = :email";

          $stmt = $dbh->prepare($sql);
          $stmt->bindValue(':email',$email, PDO::PARAM_STR);
          $stmt->execute();
          $user = $stmt->fetch();
          return $user;

}

//Fonction qui comptabilise le nombre d'utilisateur inscrit

public function countUser() {

  $sql = "SELECT COUNT() FROM user";
          $stmt = $dbh->prepare($sql);
          $stmt->execute();
          $count = $stmt->fetch();
          return $count; 
}

//Fontion qui comptabilise le nombre d'utilisateur bloqué

public function banUser() {

  $sql = "SELECT COUNT() FROM user WHERE active = 'no'";
          $stmt = $dbh->prepare($sql);
          $stmt->execute();
          $count = $stmt->fetch();
          return $count;
}

}



