<?php

namespace Keosu\Gadget\PushNotificationBundle\Controller;

use Keosu\Gadget\PushNotificationBundle\Entity\Devices;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class ServiceController extends Controller
{
	public function registerDeviceAction($type,Request $request)
	{
		$deviceToken = $request->request->get('token');
		$em = $this->get('doctrine')->getManager();
		$allreadyIn = $em->getRepository('KeosuGadgetPushNotificationBundle:Devices')->findBy(array(
							'type' => $type,
							'token' => $deviceToken
		));
		if(!$allreadyIn && $request->getMethod() === 'POST' && $deviceToken !== null &&
				($type === Devices::TYPE_ANDROID || $type === Devices::TYPE_APPLE)) {
			$device = new Devices();
			$device->setToken($deviceToken);
			$device->setType($type);
			$em->persist($device);
			$em->flush();
		}
		
		return new JsonResponse(array(
			'success' => true
		));
	}
}
