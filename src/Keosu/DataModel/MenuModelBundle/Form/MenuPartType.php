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

namespace Keosu\DataModel\MenuModelBundle\Form;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class MenuPartType extends AbstractType {
	private $listPage;

	function __construct($pageList) {
		$this->listPage = $pageList;
	}

	public function buildForm(FormBuilderInterface $builder, array $options) {
		$builder
			->add('name')
			->add('css','text', array('required'  => false))
			->add('file','file',array(
							'image_path' => 'webPath',
							'required'  => false,
							"attr" => array(
                						"accept" => "image/*"
									)
							)

				)
			->add('fileActive','file',array(
					'image_path' => 'webPath',
					'required'  => false,
					"attr" => array(
						"accept" => "image/*"
					)
				)
			)
			->add('target' ,'choice', array(
				'choices'   => $this->listPage,
				'required'  => true,
			));
	}

	public function setDefaultOptions(OptionsResolverInterface $resolver) {
		$resolver
				->setDefaults(
						array(
								'data_class' => 'Keosu\DataModel\MenuModelBundle\Entity\MenuPart'));
	}

	public function getName() {
		return 'Keosu_MenuModelBundle_menuparttype';
	}
}
