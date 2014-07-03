<?php

namespace Keosu\Gadget\CommentGadgetBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('KeosuGadgetCommentGadgetBundle:Default:index.html.twig', array('name' => $name));
    }
}
