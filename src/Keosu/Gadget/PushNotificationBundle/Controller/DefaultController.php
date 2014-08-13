<?php

namespace Keosu\Gadget\PushNotificationBundle\Controller;

use RMS\PushNotificationsBundle\Message\AndroidMessage;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
	public function pushAction()
	{
		$message = new AndroidMessage();
		$message->setGCM(true);
		$message->setMessage('Ça va chier !!!');
		$message->addGCMIdentifier('APA91bHXz-kwdpa5byUQlkFaqEWjrmZWtCnLqe2Dy9N5rOz8Uak5YPtRHoiIb5s5tegFMm5N8c6LXcTyQ8lg8kRNCZbjQ5e9XYHJaOHiM4e1vsgCoHdzuaoYb-Y4sOYWL35MU7IxfqgFInVl5eiUtHTzM3LAYOV74g');
	/*	echo $this->container->get('keosu.plugin.push.android.push')->send($message);
		echo '<pre>';
		print_r($this->container->get('keosu.plugin.push.android.push')->getResponses());
		echo '</pre>';*/
		$message->addGCMIdentifier('APA91bGr6YrmBwBlD_7UHDXFymq1Kx3wKg7jHahv6bZW68sOMoA7OrdastLixqcxNryLYoyC79G4J4K0AeKhe501noZpFE0DlKG9WJYKvvzXzdZ_LNzoSUiYFXmv7ejgpGXP7v0kHcoIylFYMW30XZUnQMm59GPpBQ');
		print_r($this->container->get('keosu.plugin.push.notification.service')->send($message));
		return $this->render('KeosuGadgetPushNotificationBundle:Default:index.html.twig', array('name' => 'patate'));
	}
}
