<?php

namespace Keosu\Gadget\PushNotificationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Mcfedr\AwsPushBundle\Message\Message;


class DefaultController extends Controller
{
	public function sendPushNotificationAction(Request $request)
	{
		$em = $this->get('doctrine')->getManager();
		$error = '';
		$valid = false;

		$formBuilder = $this->createFormBuilder();
		$formBuilder->add('message', TextareaType::class, array(
			'attr' => array('maxlength' => 64)
		));

		$form = $formBuilder->getForm();

		$form->handleRequest($request);
		if ($form->isValid()) {
			$message = new Message($form['message']->getData());
			$this->get('mcfedr_aws_push.topics')->broadcast($message, $this->getParameter('aws_topic'));
		}
		return $this->render('KeosuGadgetPushNotificationBundle:Default:index.html.twig', array(
			'form' => $form->createView(),
			'error' => $error,
			'valid' => $valid
		));
	}
}
