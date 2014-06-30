<?php

namespace Demo\PlaylistBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('PlayListBundle:Default:index.html.twig', array('name' => $name));
    }
}
