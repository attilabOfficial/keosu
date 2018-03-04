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

namespace Keosu\DataModel\FormModelBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

use Keosu\DataModel\FormModelBundle\Entity\FormField;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class FormFieldType extends AbstractType {

	public function buildForm(FormBuilderInterface $builder, array $options) {
		$builder
			->add('type' , ChoiceType::class, array(
				'choices' => array(
					'Texte long' => FormField::LONG_TEXT,
					'Texte court' => FormField::SHORT_TEXT,
					'Photo' => FormField::PHOTO
				)
			))
			->add('text', TextType::class, array(
				'label' => 'Name'
			))
			->add('required', CheckboxType::class, array(
				'label' => 'Required ?',
				'required' => false
			))
		;
	}

	public function configureOptions(OptionsResolver $resolver){
		$resolver->setDefaults(
			array(
				'data_class' => 'Keosu\DataModel\FormModelBundle\Entity\FormField'
			)
		);
	}

	public function getName() {
		return 'Keosu_MenuModelBundle_FormFieldType';
	}
}
