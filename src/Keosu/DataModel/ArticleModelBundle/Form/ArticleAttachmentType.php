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

namespace Keosu\DataModel\ArticleModelBundle\Form;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ArticleAttachmentType extends AbstractType {
	public function buildForm(FormBuilderInterface $builder, array $options) {
		$builder
			->add('name')
			->add('file','file',array(
							'image_path' => 'webPath',
							"attr" => array(
                						"accept" => "image/*"
									)
							)
				);
	}

	public function setDefaultOptions(OptionsResolverInterface $resolver) {
		$resolver
				->setDefaults(
						array(
								'data_class' => 'Keosu\DataModel\ArticleModelBundle\Entity\ArticleAttachment'));
	}

	public function getName() {
		return 'Keosu_ArticleModelBundle_articleattachmenttype';
	}
}
