<?php

namespace Keosu\Gadget\PushNotificationBundle\Service;

use RMS\PushNotificationsBundle\Message\AppleMessage;
use RMS\PushNotificationsBundle\Message\AndroidMessage;
use RMS\PushNotificationsBundle\Message\MessageInterface;

class PushNotification {

	private $androidNotification;

	private $appleNotification;

	public function __construct(AndroidGCMNotification $androidNotification,AppleNotification $appleNotification)
	{
		$this->androidNotification = $androidNotification;
		$this->appleNotification = $appleNotification;
	}

	public function send(MessageInterface $message)
	{
		if($message instanceof AndroidMessage) {
			$this->androidNotification->send($message);
			return $this->androidNotification->getResponses();
		} else if($message instanceof AppleMessage) {
			$this->appleNotification->send($message);
			return $this->appleNotification->getResponses();
		} else {
			throw new \Exception('Unable to send your message because there is only android GCM and Apple whith are supported by this service');
		}
	}
}
