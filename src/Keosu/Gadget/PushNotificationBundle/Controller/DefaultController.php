<?php

namespace Keosu\Gadget\PushNotificationBundle\Controller;

use Keosu\Gadget\PushNotificationBundle\Entity\Devices;

use RMS\PushNotificationsBundle\Message\AndroidMessage;
use RMS\PushNotificationsBundle\Message\AppleMessage;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;


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
			try {
				$pushService = $this->container->get('keosu.plugin.push.notification.service');
				$devices = $em->getRepository('KeosuGadgetPushNotificationBundle:Devices')->findAll();

				$androidMessage = new AndroidMessage();
				$androidMessage->setGCM(true);
				$androidMessage->setMessage($form['message']->getData());

				$appleMessage = new AppleMessage();
				$appleMessage->setMessage($form['message']->getData());
				$appleMessage->setAPSBadge(1);
				$appleMessage->setAPSSound('default');



				foreach ($devices as $device) {
					if ($device->getType() === Devices::TYPE_APPLE) {
						$appleMessage->setDeviceIdentifier($device->getToken());
						$pushService->send($appleMessage);
					} else if ($device->getType() === Devices::TYPE_ANDROID) {
						$androidMessage->addGCMIdentifier($device->getToken());
					}
				}
				$pushService->send($androidMessage);
				$valid = true;
			} catch (\Exception $e) {
				$error = $e->getMessage();
			}

		}
		return $this->render('KeosuGadgetPushNotificationBundle:Default:index.html.twig', array(
			'form' => $form->createView(),
			'error' => $error,
			'valid' => $valid
		));
	}
}
