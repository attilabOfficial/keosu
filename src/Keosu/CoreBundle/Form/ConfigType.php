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
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ConfigType extends AbstractType {

	private $container;

	private $gadget;

	public function __construct($container,$gadget) {
		$this->container = $container;
		$this->gadget = $gadget;
	}

	public function buildForm(FormBuilderInterface $builder, array $options) {


		$appid = $this->container->get('keosu_core.curapp')->getCurApp();

		$em = $this->container->get('doctrine')->getManager();
		$pages = $em->getRepository('KeosuCoreBundle:Page')->findByAppId($appid);

		$pageList = array();
		foreach ($pages as $page) {
			$pageList[$page->getId()] = $page->getName();
		}

		$builder->add('page', 'collection',array(
						'type'         => 'choice',
						'required'     => false,
						'label'        => "Choose a page",
						'allow_add'    => true,
						'allow_delete' => true,
						'by_reference' => true,
						'options'      => array(
							'choices' => $pageList,
							'label'   => false,
						)
				));
	}

	public function getName() {
		return 'Keosu_CoreBundle_configtype';
	}
}
