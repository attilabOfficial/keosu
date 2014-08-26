<?php

namespace Keosu\Gadget\LastArticleGadgetBundle\EventListener;

use Keosu\CoreBundle\KeosuEvents;
use Keosu\CoreBundle\Event\GadgetFormBuilderEvent;

use Keosu\Gadget\LastArticleGadgetBundle\KeosuGadgetLastArticleGadgetBundle;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
 * Listener responsible to gadget action
 */
class GadgetListener implements EventSubscriberInterface
{

	private $container;

	public function __construct($container)
	{
		$this->container = $container;
	}

	/**
	 * {@inheritDoc}
	 */
	public static function getSubscribedEvents()
	{
		return array(
			KeosuEvents::GADGET_CONF_FORM_BUILD.KeosuGadgetLastArticleGadgetBundle::PACKAGE_NAME => 'onGadgetConfFormBuild',
		);
	}

	public function onGadgetConfFormBuild(GadgetFormBuilderEvent $event)
	{
		$event->setOverrideForm(true);
		$em = $this->container->get('doctrine')->getManager();
		
		//Get list of tag
		$queryTagList = $em->createQueryBuilder();
		$queryTagList->add('select','DISTINCT t.tagName')
						->add('from', 'Keosu\DataModel\ArticleModelBundle\Entity\ArticleTags t');
		$tagListTmp=$queryTagList->getQuery()->execute();

		//Prepare the list of tag for the form
		$tagList=array();
		foreach($tagListTmp as $tag){
			$tagList[$tag['tagName']]=$tag['tagName'];
		}
		
		
		//Overide form
		$builder = $event->getFormBuilder();
		$builder->add('articlesPerPage','choice',array(
					'choices'	=> array("3" => 3 ,"5" => 5, "10" => 10, "50" => 50, "100" => 100)
				))
				->add('tag','choice',array(
					'choices'	=> $tagList,
					'required'	=> false
		));
		
	}
}

