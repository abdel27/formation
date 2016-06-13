<?php
	
	$w_routes = array(
		['GET', '/', 'Default#home', 'default_home'],



    ['GET','/layoutback','View#layoutback', 'layoutback'],
    ['GET','/dashboard','Default#dashboard', 'dashboard'],

    ['GET','/newannonce','Default#newannonce', 'newannonce'],
    ['POST','/newannonce','Default#newannonceaction', 'newannonceaction'],

    
    


    ['GET','/login','Default#login', 'login'],
    ['POST','/login','Default#loginaction', 'loginaction'],

    ['GET','/register','Default#register', 'register'],
    ['POST','/register','Default#registeraction', 'registeraction'],


    ['GET','/forget','Default#forget', 'forget'],
    ['POST','/forget','Default#forgetaction', 'forgetaction'],

    ['GET','/manageuser','Default#manageuser', 'manageuser'],
    ['GET','/edituser','Default#edituser', 'edituser'],
    
    ['GET','/logout','Default#logout', 'logout'],
    

	);