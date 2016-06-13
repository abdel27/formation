<?php


namespace Model;
use \W\Model\UsersModel  as BaseUser;
use \W\Model\ConnectionModel;



class UserModel extends BaseUser 


{

//Proprieté de la class

private $id;
private $nom;
private $prenom;
private $pseudo;
private $date_naissance;
private $email;
private $password;
private $token;
private $ip;
private $created_at;
private $departement;
private $role;
private $active;




//Stokage des messages d'erreurs
private $error;


}
