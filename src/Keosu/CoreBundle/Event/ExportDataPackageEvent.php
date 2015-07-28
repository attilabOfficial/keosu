<?php

namespace Keosu\CoreBundle\Event;

use Symfony\Component\EventDispatcher\Event;

class ExportDataPackageEvent extends Event
{

	private $appId;
	private $data;
	private $fileName;
	private $config;


	public function __construct($appId, $config)
	{
		$this->appId = $appId;
		$this->data = null;
		$this->fileName = null;
		$this->config = $config;
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
	public function setFileName($data) {
		$this->fileName = $data;
	}

	public function getFileName() {
		return $this->fileName;
	}
	public function getConfig() {
		return $this->config;
	}


}
