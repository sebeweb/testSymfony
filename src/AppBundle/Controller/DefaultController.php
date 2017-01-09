<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     * @Template("::base.html.twig")
     */
    public function indexAction()
    {
        
    }
    /**
     * @Route("/competence", name="comp")
     * @Template("::competence.html.twig")
     */
    public function getCompetence()
    {

    }
    /**
     * @Route("/exp", name="exp")
     * @Template("::exp.html.twig")
     */
    public function getExp()
    {

    }
    /**
     * @Route("/loisir", name="loisir")
     * @Template("::loisir.html.twig")
     */
    public function getLoisir()
    {

    }
    /**
     * @Route("/diplome", name="dip")
     * @Template("::diplome.html.twig")
     */
    public function getDiplome()
    {

    }
}
