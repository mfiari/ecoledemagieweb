<?php

namespace Ecoledemagie\IndexBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('EcoledemagieIndexBundle:Default:index.html.twig');
    }
}
