<?php
/************************************************************************
 Keosu is an open source CMS for mobile app
Copyright (C) 2016  Pockeit

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

use Keosu\CoreBundle\Form\ConfigPackageValueType;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\OptionsResolver\OptionsResolver;

/**
 * This class allow to personalize the configuration of a package in a app
 */
class ConfigPackageType extends AbstractType {

	private $container;

	private $request;

	private $typeMapping = array();


	public function buildForm(FormBuilderInterface $builder, array $options) {

		$this->request = $options['request'];
		$this->container = $options['container'];
		$packageManager = $this->container->get('keosu_core.package_manager');
		$packages = $packageManager->getPackageList();

		foreach($packages as $p) {
			$config = $packageManager->getConfigPackage($p->getPath());
			if(isset($config['appParam']) && count($config['appParam']))
				$builder->add($p->getName(), ConfigPackageValueType::class, array(
								'label' => false,
								'request' => $this->request,
								'config' => $config['appParam'],
								'container' => $this->container,
					            'package' => $p
						));
		}
	}

	public function configureOptions(OptionsResolver $resolver){
		$resolver->setDefined(array('request'));
		$resolver->setDefined(array('container'));
		$resolver
			->setDefaults(
				array(
					'request' => null,
					'container' => null));
	}

	public function getName() {
		return 'Keosu_CoreBundle_configpackagetype';
	}
}
