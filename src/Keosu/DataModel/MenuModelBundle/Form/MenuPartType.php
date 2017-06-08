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

namespace Keosu\DataModel\MenuModelBundle\Form;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class MenuPartType extends AbstractType {
	private $listPage;


	public function buildForm(FormBuilderInterface $builder, array $options) {

		$this->listPage = $options['page_list'];
		$builder
			->add('name',TextType::class)
			->add('css',TextType::class, array('required'  => false))
			->add('file',FileType::class ,array(
							'image_path' => 'webPath',
							'required'  => true,
							"attr" => array(
                						"accept" => "image/jpeg"
									)
							)

				)
			->add('fileActive',FileType::class,array(
					'image_path' => 'webPath',
					'required'  => true,
					"attr" => array(
						"accept" => "image/jpeg"
					)
				)
			)
			->add('isExternal' ,CheckboxType::class )
			->add('target' ,ChoiceType::class, array(
				'choices'   => $this->listPage,
				'required'  => true,
			))
			->add('externalLink' ,TextType::class, array('required'  => false));

	}

	public function configureOptions(OptionsResolver $resolver){
		$resolver->setDefined(array('page_list'));
		$resolver
				->setDefaults(
						array(
							'data_class' => 'Keosu\DataModel\MenuModelBundle\Entity\MenuPart',
							'page_list' => null));
	}

	public function getName() {
		return 'Keosu_MenuModelBundle_menuparttype';
	}

	/**
	 * @param mixed $listPage
	 */
	public function setListPage($listPage)
	{
		$this->listPage = $listPage;
	}

	/**
	 * @return mixed
	 */
	public function getListPage()
	{
		return $this->listPage;
	}


}
