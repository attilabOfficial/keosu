<?php

namespace Keosu\Gadget\PushNotificationBundle\Controller;

use RMS\PushNotificationsBundle\Message\AndroidMessage;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
	public function PushAction()
	{
		$message = new AndroidMessage();
		$message->setGCM(true);
		$message->setMessage('Oh my! A push notification!');
		$message->setDeviceIdentifier('test012fasdf482asdfd63f6d7bc6d4293aedd5fb448fe505eb4asdfef8595a7');
		$this->container->get('rms_push_notifications')->send($message);
		return $this->render('KeosuGadgetPushNotificationBundle:Default:index.html.twig', array('name' => 'patate'));
	}
}
