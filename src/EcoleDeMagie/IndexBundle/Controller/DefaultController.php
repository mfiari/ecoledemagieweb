<?php

namespace EcoleDeMagie\IndexBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('EcoleDeMagieIndexBundle:Default:index.html.twig');
    }
}
