<?php

namespace Keosu\CoreBundle\Event;

use Symfony\Component\EventDispatcher\Event;

class ExportConfigPackageEvent extends Event
{

	private $currentConfig;
	private $newConfig;

	public function __construct($currentConfig)
	{
		$this->currentConfig = $currentConfig;
		$this->newConfig = null;
	}

	/**
	 * @return array
	 */
	public function getCurrentConfig() {
		return $this->currentConfig;
	}

	/**
	 * @return array
	 */
	public function setNewConfig($newConfig) {
		$this->newConfig = $newConfig;
	}
	
	public function getNewConfig() {
		return $this->newConfig;
	}

}
