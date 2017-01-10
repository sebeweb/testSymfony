<?php

namespace TestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/projet/home")
     */
    public function indexAction()
    {
        return $this->render('TestBundle::home.html.twig');
    }
}
