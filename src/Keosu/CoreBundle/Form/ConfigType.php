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

use Symfony\Component\EventDispatcher\ContainerAwareEventDispatcher;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\HttpFoundation\Request;

class ConfigType extends AbstractType {

	private $dispatcher;

	private $request;

	private $gadget;

	public function __construct(ContainerAwareEventDispatcher $dispatcher,Request $request,Gadget $gadget) {
		$this->dispatcher = $dispatcher;
		$this->request = $request;
		$this->gadget = $gadget;
	}

	public function buildForm(FormBuilderInterface $builder, array $options) {

		$event = new GadgetFormBuilderEvent($builder,$this->request,$this->gadget);
		$this->dispatcher->dispatch(KeosuEvents::GADGET_CONF_BUILD.$this->gadget->getName(),$event);

	}

	public function getName() {
		return 'Keosu_CoreBundle_configtype';
	}
}
