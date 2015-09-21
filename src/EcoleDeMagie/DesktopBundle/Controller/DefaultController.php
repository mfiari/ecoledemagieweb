<?php

namespace EcoleDeMagie\DesktopBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('EcoleDeMagieDesktopBundle:Default:index.html.twig', array('name' => $name));
    }
}
