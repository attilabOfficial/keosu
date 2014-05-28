<?php

namespace Keosu\Gadget\CalendarGadgetBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('KeosuGadgetCalendarGadgetBundle:Default:index.html.twig', array('name' => $name));
    }
}
