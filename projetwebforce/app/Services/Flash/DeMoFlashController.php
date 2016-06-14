<?php

namespace Controller;

use \Controller\AppController;
use \Services\Flash\FlashBags;

class DefaultController extends AppController
{

	/**
	 * Page d'accueil par défaut
	 */
	public function home()
	{
			$flashBag = new FlashBags();
		
			$flashBag->setFlash('info', "Test de message");
			

  		$this->show('default/contact');
  }

}
