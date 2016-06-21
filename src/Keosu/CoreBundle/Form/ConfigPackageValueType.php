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

use Keosu\CoreBundle\KeosuEvents;

use Keosu\CoreBundle\Event\PackageFormBuilderEvent;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\OptionsResolver\OptionsResolver;

/**
 * This class allow to personalize the config of a package
 */
class ConfigPackageValueType extends AbstractType {

	private $request;

	private $config;

	private $package;

	private $container;


	private $typeMapping = array();
	public function __construct()
	{
		$this->typeMapping['choice'] = ChoiceType::class;
		$this->typeMapping['text'] = TextType::class;
		$this->typeMapping['textarea'] = TextareaType::class;
		$this->typeMapping['checkbox'] = CheckboxType::class;
		$this->typeMapping['file'] = FileType::class;
		$this->typeMapping['password'] = PasswordType::class;


	}

	public function buildForm(FormBuilderInterface $builder, array $options)
	{
		$this->request = $options['request'];
		$this->config = $options['config'];
		$this->package = $options['package'];
		$this->container = $options['container'];

		$eventDispather = $this->container->get('event_dispatcher');
		$event = new PackageFormBuilderEvent($builder,$this->package);
		$eventDispather->dispatch(KeosuEvents::PACKAGE_GLOBAL_CONFIG_BUILD_FORM.$this->package->getName(),$event);

		if(!$event->isOverrideForm()) {
			foreach($this->config as $c)
				if(isset($c['options']))
					$builder->add($c['name'],$this->typeMapping[$c['type']],$c['options']);
				else
					$builder->add($c['name'],$this->typeMapping[$c['type']]);
		}
	}

	public function configureOptions(OptionsResolver $resolver){


		$resolver->setDefined(array('request'));
		$resolver->setDefined(array('config'));
		$resolver->setDefined(array('package'));
		$resolver->setDefined(array('container'));
		$resolver
			->setDefaults(
				array(
					'request' => null,
					'config' => null,
					'package' => null,
					'container'=>null));
	}
	public function getName()
	{
		return 'Keosu_CoreBundle_configpackagevaluetype';
	}
}
