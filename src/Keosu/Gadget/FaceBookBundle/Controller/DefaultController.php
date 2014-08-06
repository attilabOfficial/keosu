<?php

namespace Keosu\Gadget\FaceBookBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('KeosuGadgetFaceBookBundle:Default:index.html.twig', array('name' => $name));
    }
}
