<?php

namespace EcoleDeMagie\DownloadBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('EcoleDeMagieDownloadBundle:Default:index.html.twig', array('name' => $name));
    }
}
