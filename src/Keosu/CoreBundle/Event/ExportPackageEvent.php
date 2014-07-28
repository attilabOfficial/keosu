<?php

namespace Keosu\CoreBundle\Event;

use Symfony\Component\EventDispatcher\Event;

class ExportPackageEvent extends Event
{
	private $indexDocument;
	private $configXml;
	private $jsInit;
	private $jsCore;
	private $jsEnd;

	public function __construct(&$indexDocument,&$configXml)
	{
		$this->indexDocument = $indexDocument;
		$this->configXml = $configXml;
		$this->jsInit = null;
		$this->jsCore = null;
		$this->jsEnd = null;
	}

	/**
	 * @return &DOMDocument
	 */
	public function getIndexDocument() {
		return $this->indexDocument;
	}

	/**
	 * @return &DOMDocument
	 */
	public function getConfigXml() {
		return $this->configXml;
	}

	/**
	 * @param string $value
	 */
	public function addToJsInit($value) {
		return $this->jsInit = $value;;
	}

	/**
	 * @return string
	 */
	public function getJsInit() {
		return $this->jsInit;
	}

	/**
	 * @param string $value
	 */
	public function addToJsCore($value) {
		return $this->jsCore = $value;
	}

	/**
	 * @return string
	 */
	public function getJsCore() {
		return $this->jsCore;
	}

	/**
	 * @param string value
	 */
	public function addToJsEnd($value) {
		$this->jsEnd = $value;
	}

	/**
	 * @return string
	 */
	public function getJsEnd() {
		return $this->jsEnd;
	}
}
