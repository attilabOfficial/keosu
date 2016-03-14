<?php

namespace Keosu\CoreBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class SplashscreensType extends AbstractType
{
    
	public function buildForm(FormBuilderInterface $builder, array $options)
	{
		$builder
		->add('splashscreenA320x436',FileType::class,array(
				'required'	=>false,
				'label'		=> false,
				'attr'      => array(
						'accept' => 'image/*'
		)))		
		->add('splashscreenA320x470',FileType::class,array(
				'required'=>false,
				'label'		=> false,
				'attr'      => array(
						'accept' => 'image/*'
		)))							
		->add('splashscreenA640x480',FileType::class,array(
				'required'=>false,
				'label'		=> false,
				'attr'      => array(
						'accept' => 'image/*'
		)))							
		->add('splashscreenA960x720',FileType::class,array(
				'required'=>false,
				'label'		=> false,
				'attr'      => array(
						'accept' => 'image/*'
		)))							
		->add('splashscreenI320x480',FileType::class,array(
				'required'=>false,
				'label'		=> false,
				'attr'      => array(
						'accept' => 'image/*'
		)))							
		->add('splashscreenI640x960',FileType::class,array(
				'required'=>false,
				'label'		=> false,
				'attr'      => array(
						'accept' => 'image/*'
		)))							
		->add('splashscreenI640x1136',FileType::class,array(
				'required'=>false,
				'label'		=> false,
				'attr'      => array(
						'accept' => 'image/*'
		)))							
		->add('splashscreenI1024x768',FileType::class,array(
				'required'=>false,
				'label'		=> false,
				'attr'      => array(
						'accept' => 'image/*'
		)))							
		->add('splashscreenI768x1024',FileType::class,array(
				'required'=>false,
				'label'		=> false,
				'attr'      => array(
						'accept' => 'image/*'
		)))							
		->add('splashscreenI2048x1536',FileType::class,array(
				'required'=>false,
				'label'		=> false,
				'attr'      => array(
						'accept' => 'image/*'
		)))							
		->add('splashscreenI1536x2048',FileType::class,array(
				'required'=>false,
				'label'		=> false,
				'attr'      => array(
						'accept' => 'image/*'
		)))
		->add('splashscreenI750x1334',FileType::class,array(
			'required'=>false,
			'label'		=> false,
			'attr'      => array(
				'accept' => 'image/*'
		)))
		->add('splashscreenI1242x2208',FileType::class,array(
			'required'=>false,
			'label'		=> false,
			'attr'      => array(
				'accept' => 'image/*'
			)))
		->add('splashscreenI2208x1242',FileType::class,array(
			'required'=>false,
			'label'		=> false,
			'attr'      => array(
				'accept' => 'image/*'
			)))
		;
	
	}
	
	

	
	
	
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function configureOptions(OptionsResolver $resolver){
        $resolver->setDefaults(array(
            'data_class' => 'Keosu\CoreBundle\Model\Splashscreens'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'keosu_corebundle_splashscreens';
    }
}

