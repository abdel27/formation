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
  ['GET','/newannonce','Annonce#newannonce', 'newannonce'],
  ['POST','/newannonce','Annonce#newannonceaction', 'newannonceaction'],

	// Mot de passe oublié
	['GET','/forget','Password#forget', 'forget'],
	['POST','/forget','Password#forgetaction', 'forgetaction'],

	// Modifier le mot de passe
	['GET','/passwordmodif/[:email]/[:token]','Password#passwordmodif', 'passwordmodif'],
	['POST','/passwordmodif','Password#passwordmodifaction', 'passwordmodifaction'],

	// Regénérer le mot de passe
	['GET','/lienspassword/[:id]','Password#lienspassword', 'lienspassword'],


	// Page annonce unique
	['GET','/detail/[:id]','Annonce#detail', 'detail'],

	//Page profil utilisateur
	['GET','/profil','User#profiluser', 'profiluser'],

	// Page contact
	['GET','/contact','Contact#contact', 'contact'],

	//Page delete annonce
	['GET','/deleteannonce/[:id]','Annonce#deleteannonce', 'deleteannonce'],

	//Récupérer une annonce
	['GET','/manageannonce','Annonce#manageannonce', 'manageannonce'],


// Back
  ['GET','/layoutback','View#layoutback', 'layoutback'],

	// Accueil dashboard
	['GET','/dashboard','Dashboard#dashboard', 'dashboard'],

	// Gestion des utilisateurs
  ['GET','/manageuser','User#manageuser', 'manageuser'],


  ['GET','/edituser/[:id]','User#edituser', 'edituser'],
  ['POST','/edituser','User#edituseraction', 'edituseraction'],

  ['GET','/deleteuser/[:id]','User#deleteuser', 'deleteuser'],


);
