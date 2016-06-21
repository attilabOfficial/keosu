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
namespace Keosu\CoreBundle\Form\Extension;

use Symfony\Component\Form\AbstractTypeExtension;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\FormView;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\PropertyAccess\PropertyAccess;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ImageTypeExtension extends AbstractTypeExtension
{
    /**
     * The name of the type we extend
     *
     * @return string
     */

	public function getExtendedType()
	{
		return FileType::class;
	}

    public function configureOptions(OptionsResolver $resolver){
		$resolver->setDefined(array('image_path'));
    }
    
    /**
     * Give image url to the view
     *
     * @param \Symfony\Component\Form\FormView $view
     * @param \Symfony\Component\Form\FormInterface $form
     * @param array $options
     */
    public function buildView(FormView $view, FormInterface $form, array $options){
    	if (array_key_exists('image_path', $options)) {
    		$parentData = $form->getParent()->getData();
    
    		if (null !== $parentData) {
    			$accessor = PropertyAccess::createPropertyAccessor();
    			$imageUrl = $accessor->getValue($parentData, $options['image_path']);
    		} else {
    			$imageUrl = null;
    		}    
    		$view->vars['image_url'] = $imageUrl;
    	}
    }
}
