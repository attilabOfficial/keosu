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

namespace Keosu\DataModel\QuizzModelBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Keosu\DataModel\QuizzModelBundle\Entity\QuizzQuestion;

class QuizzQuestionType extends AbstractType {

	public function buildForm(FormBuilderInterface $builder, array $options) {
		$builder
			->add('type' ,'choice', array(
				'choices' => array(
					QuizzQuestion::SINGLE_CHOICE => 'Single choice',
					QuizzQuestion::MULTIPLE_CHOICE => 'Multiple choice',
					QuizzQuestion::FREE_TEXT => 'Free text'
				)
			))
			->add('text', 'text')
			->add('answers', 'collection', array(
				'type'         => new QuizzAnswerType(),
				'allow_add'    => true,
				'allow_delete' => true,
				'by_reference' => false,
				'required'     => true,
				'label'        => false
			))
		;
	}

	public function setDefaultOptions(OptionsResolverInterface $resolver) {
		$resolver->setDefaults(
			array(
				'data_class' => 'Keosu\DataModel\QuizzModelBundle\Entity\QuizzQuestion'
			)
		);
	}

	public function getName() {
		return 'keosu_quizzmodelbundle_quizzquestion';
	}
}
