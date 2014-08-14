<?php

namespace Keosu\CoreBundle\Event;

use Keosu\CoreBundle\Model\Url;

use Symfony\Component\EventDispatcher\Event;

class PackageSideMenuEvent extends Event
{

	private $listOfLink;

	public function __construct()
	{
		$this->listOfLink = array();
	}

	/**
	 * @param $name name of the link
	 * @param $href href of the link
	 * @return PackageSideMenuEvent
	 */
	public function addUrl($name,$href)
	{
		$this->listOfLink[] = new Url($name,$href);
		return $this;
	}

	public function getUrl()
	{
		return $this->listOfLink;
	}
}
