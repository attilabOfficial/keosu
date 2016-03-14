<?php

namespace Keosu\CoreBundle\Event;

use Keosu\CoreBundle\Model\Package;

use Symfony\Component\EventDispatcher\Event;
use Symfony\Component\Form\FormBuilder;
use Symfony\Component\HttpFoundation\Request;

class PackageFormBuilderEvent extends Event
{
	private $formBuilder;
	private $package;
	private $overrideForm;

	public function __construct(FormBuilder $formBuilder, Package $package)
	{
		$this->formBuilder = $formBuilder;
		$this->package = $package;
		$this->overrideForm = false;
	}

	/**
	 * @return FormBuilder
	 */
	public function getFormBuilder()
	{
		return $this->formBuilder;
	}

	/**
	 * @return Request
	 */
	public function getRequest()
	{
		return $this->request;
	}
	
	/**
	 * @return Package
	 */
	public function getPackage()
	{
		return $this->package;
	}
	
	/**
	 * @return boolean
	 */
	public function isOverrideForm()
	{
		return $this->overrideForm;
	}
	
	/**
	 * set true if you don't want the form to be automatiquely generated
	 */
	public function setOverrideForm($value)
	{
		$this->overrideForm = !!$value;
	}
}
