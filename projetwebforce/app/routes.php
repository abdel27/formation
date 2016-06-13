<?php
	
	$w_routes = array(
		['GET', '/', 'Default#home', 'default_home'],



    ['GET','/layoutback','Viewt#layoutback', 'layoutback'],
    ['GET','/dashboard','Default#dashboard', 'dashboard'],

    ['GET','/newannonce','Default#newannonce', 'newannonce'],
    ['POST','/newannonce','Default#newannonceaction', 'newannonceaction'],

    
    


    ['GET','/login','Default#login', 'login'],
    ['POST','/login','Default#loginaction', 'loginaction'],

    ['GET','/register','Default#register', 'register'],
    ['POST','/register','Default#registeraction', 'registeraction'],


    ['GET','/forget','Default#forget', 'forget'],
    ['POST','/forget','Default#forgetaction', 'forgetaction'],

    
    ['GET','/logout','Default#logout', 'logout'],
    

	);