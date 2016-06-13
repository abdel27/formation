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



}