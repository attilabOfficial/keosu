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
		$type = intval($type);
		$em = $this->get('doctrine')->getManager();
		$allreadyIn = $em->getRepository('KeosuGadgetPushNotificationBundle:Devices')->findOneBy(array(
							'type' => $type,
							'token' => $deviceToken
		));

		if($allreadyIn === null && $request->getMethod() === 'POST' && $deviceToken !== null &&
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
