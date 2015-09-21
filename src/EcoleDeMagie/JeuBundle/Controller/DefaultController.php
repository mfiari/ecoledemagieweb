<?php

namespace EcoleDeMagie\JeuBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller {
	
    public function indexAction() {
        return $this->render('EcoleDeMagieJeuBundle:Default:index.html.twig', array('name' => "index"));
    }
	
    public function helloWorldAction($name) {
        return $this->render('EcoleDeMagieJeuBundle:Default:index.html.twig', array('name' => $name));
    }
}
