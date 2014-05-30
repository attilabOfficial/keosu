<?php

namespace PockeIt\DataModel\EventModelBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('PockeItDataModelEventModelBundle:Default:index.html.twig', array('name' => $name));
    }
}
