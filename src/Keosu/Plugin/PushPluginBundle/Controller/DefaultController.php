<?php

namespace Keosu\Plugin\PushPluginBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('KeosuPluginPushPluginBundle:Default:index.html.twig', array('name' => $name));
    }
}
