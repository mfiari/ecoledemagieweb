<?php

namespace EcoleDeMagie\OnlineBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('EcoleDeMagieOnlineBundle:Default:index.html.twig');
    }
}
