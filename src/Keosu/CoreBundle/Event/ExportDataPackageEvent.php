<?php

namespace Keosu\CoreBundle\Event;

use Symfony\Component\EventDispatcher\Event;

class ExportDataPackageEvent extends Event
{

	private $appId;
	private $data;

	public function __construct($appId)
	{
		$this->appId = $appId;
		$this->data = null;
	}

	/**
	 * @return array
	 */
	public function getAppId() {
		return $this->appId;
	}

	/**
	 * @return array
	 */
	public function setData($data) {
		$this->data = $data;
	}
	
	public function getData() {
		return $this->data;
	}

}
