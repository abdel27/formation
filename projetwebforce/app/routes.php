<?php

	$w_routes = array(

// Front
	['GET', '/', 'Default#home', 'default_home'],

	// Connexion
  ['GET','/login','Default#login', 'login'],
  ['POST','/login','Default#loginaction', 'loginaction'],

	// Inscription
	['GET','/register','Default#register', 'register'],
	['POST','/register','Default#registeraction', 'registeraction'],

	// Déconnexion
	['GET','/logout','Default#logout', 'logout'],

	// Ajouter une annonce
  ['GET','/newannonce','Default#newannonce', 'newannonce'],
  ['POST','/newannonce','Default#newannonceaction', 'newannonceaction'],

	// Mot de passe oublié
	['GET','/forget','Default#forget', 'forget'],
	['POST','/forget','Default#forgetaction', 'forgetaction'],

	// Modifier le mot de passe
	['GET','/passwordmodif','Default#passwordmodif', 'passwordmodif'],
	['POST','/passwordmodif','Default#passwordmodifaction', 'passwordmodifaction'],

	// Regénérer le mot de passe
	['GET','/lienspassword','Default#lienspassword', 'lienspassword'],
	['POST','/lienspassword','Default#lienspasswordaction', 'lienspasswordaction'],

	// Page annonce unique
	['GET','/detail','Default#detail', 'detail'],

	//Page profil utilisateur
	['GET','/profil','Default#profiluser', 'profiluser'],

	// Page contact
	['GET','/contact','Default#contact', 'contact'],

	//Page delete annonce
	['GET','/deleteannonce/[:id]','Default#deleteannonce', 'deleteannonce'],

	//Récupérer une annonce
	['GET','/manageannonce','Default#manageannonce', 'manageannonce'],


// Back
  ['GET','/layoutback','View#layoutback', 'layoutback'],

	// Accueil dashboard
	['GET','/dashboard','Default#dashboard', 'dashboard'],

	// Gestion des utilisateurs
  ['GET','/manageuser','Default#manageuser', 'manageuser'],


  ['GET','/edituser/[:id]','Default#edituser', 'edituser'],
  ['POST','/edituser','Default#edituseraction', 'edituseraction'],
  
  ['GET','/deleteuser/[:id]','Default#deleteuser', 'deleteuser'],

  





);
