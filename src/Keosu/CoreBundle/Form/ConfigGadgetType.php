<?php
/************************************************************************
 Keosu is an open source CMS for mobile app
Copyright (C) 2014  Vincent Le Borgne, Pockeit

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU Affero General Public License as
published by the Free Software Foundation, either version 3 of the
License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU Affero General Public License for more details.

You should have received a copy of the GNU Affero General Public License
along with this program.  If not, see <http://www.gnu.org/licenses/>.
************************************************************************/

namespace Keosu\CoreBundle\Form;

use Keosu\CoreBundle\KeosuEvents;
use Keosu\CoreBundle\Entity\Gadget;
use Keosu\CoreBundle\Event\GadgetFormBuilderEvent;
use Keosu\CoreBundle\Service\PackageManager;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\HttpFoundation\Request;

/**
 * This class allow to personalise the config of a gadget
 */
class ConfigGadgetType extends AbstractType {

	private $dispatcher;

	private $request;

	private $gadget;

	private $packageManager;

	public function __construct($dispatcher,Request $request,PackageManager $packageManager,Gadget $gadget)
	{
		$this->dispatcher = $dispatcher;
		$this->request = $request;
		$this->packageManager = $packageManager;
		$this->gadget = $gadget;
	}

	public function buildForm(FormBuilderInterface $builder, array $options)
	{
		$event = new GadgetFormBuilderEvent($builder,$this->request,$this->gadget);
		$this->dispatcher->dispatch(KeosuEvents::GADGET_CONF_FORM_BUILD.$this->gadget->getName(),$event);
		if(!$event->isOverrideForm()) {
			$config = $this->packageManager->getConfigPackage($this->gadget->getName());
			if(isset($config['param'])) {
				$params = $config['param'];
				foreach($params as $p) {
					if($builder->has($p['name']))
						throw new \LogicException('The property '.$p['name'].' already exists, maybe you forgot to enable overrideForm ?');
				
					if(isset($p['options']))
						$builder->add($p['name'],$p['type'],$p['options']);
					else
						$builder->add($p['name'],$p['type']);
				}
			}
		}
	}

	public function getName()
	{
		return 'Keosu_CoreBundle_configgadgettype';
	}
}
