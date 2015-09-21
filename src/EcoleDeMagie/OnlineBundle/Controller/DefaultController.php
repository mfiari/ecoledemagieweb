<?php

namespace EcoleDeMagie\OnlineBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('EcoleDeMagieOnlineBundle:Default:index.html.twig', array('name' => $name));
    }
}
