<?php

namespace pidev\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('pidevUserBundle:Default:index.html.twig');
    }
    public function homeAction()
    {
        return $this->render('pidevUserBundle:Default:home.html.twig');
    }
    public function contactAction()
    {
        return $this->render('pidevUserBundle:Default:contact.html.twig');
    }
}
