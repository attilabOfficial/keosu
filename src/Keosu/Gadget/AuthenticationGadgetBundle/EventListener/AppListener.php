<?php
namespace Keosu\Gadget\AuthenticationGadgetBundle\EventListener;

use Keosu\CoreBundle\KeosuEvents;

use Keosu\CoreBundle\Entity\Gadget;
use Keosu\CoreBundle\Entity\Page;

use Keosu\CoreBundle\Event\PackageSaveAppEvent;

use Keosu\CoreBundle\Util\TemplateUtil;

use Keosu\Gadget\AuthenticationGadgetBundle\KeosuGadgetAuthenticationGadgetBundle;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;

use Symfony\Component\DomCrawler\Crawler;

/**
 * Listener responsible to create the private app in keosu
 * The listener create a special page when the app is private
 */
class AppListener implements EventSubscriberInterface
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
			KeosuEvents::PACKAGE_GLOBAL_CONFIG_SAV_FORM.KeosuGadgetAuthenticationGadgetBundle::PACKAGE_NAME => 'onAppSaveData',
		);
	}

	public function onAppSaveData(PackageSaveAppEvent $event)
	{
		$em = $this->container->get('doctrine')->getManager();
		$packageManager = $this->container->get('keosu_core.package_manager');
		$app = $event->getApp();
		$appPrivate = !!$app->getConfigPackages()[KeosuGadgetAuthenticationGadgetBundle::PACKAGE_NAME]['privateApp'];
	
		// if the app is private we have to add an authentication page
		$authenticationPage = $em->getRepository('KeosuCoreBundle:Page')->findOneBy(array(
			'appId'     => $app->getId(),
			'templateId'=> KeosuGadgetAuthenticationGadgetBundle::AUTHENTICATION_TEMPLATE_ID,
			'name'      => KeosuGadgetAuthenticationGadgetBundle::AUTHENTICATION_PAGE_NAME));
		
		if($authenticationPage == null && $appPrivate) {
				// remove other main
				$pagesMain = $em->getRepository('KeosuCoreBundle:Page')->findBy(array(
						'appId'  => $app->getId(),
						'isMain' => true));
				foreach($pagesMain as $pageMain) {
					$pageMain->setIsMain(false);
					$em->persist($pageMain);
				}
			
				$page = new Page();
				$page->setIcon('glyphicon-lock');
				$page->setTemplateId(KeosuGadgetAuthenticationGadgetBundle::AUTHENTICATION_TEMPLATE_ID);
				$page->setName(KeosuGadgetAuthenticationGadgetBundle::AUTHENTICATION_PAGE_NAME);
				$page->setAppId($app->getId());
				
				// the authentication become main
				$page->setIsMain(true);
				$em->persist($page);

				$gadget = new Gadget();
				$gadget->setShared(false);
				$listTemplate = $packageManager->getListTemplateForGadget(KeosuGadgetAuthenticationGadgetBundle::PACKAGE_NAME);
				$keys = array_keys($listTemplate);
				$gadget->setName(KeosuGadgetAuthenticationGadgetBundle::PACKAGE_NAME);
				$gadget->setTemplate($listTemplate[$keys[0]]); // 0 by default
				$gadget->setPage($page);
				
				// there is only one zone on this template
				$templateHtml = 
						file_get_contents(
							TemplateUtil::getPageTemplateAbsolutePath()
								. KeosuGadgetAuthenticationGadgetBundle::AUTHENTICATION_TEMPLATE_ID);
				//Get all the elements of class "zone" in template dom
				$crawler = new Crawler($templateHtml);
				$zones = $crawler->filter('.zone')->extract(array('id'));
				$gadget->setZone($zones[0]);

				$em->persist($gadget);
		} else {

			if(!$appPrivate && $authenticationPage != null) {
				$gadgets = $em->getRepository('KeosuCoreBundle:Gadget')->findByPage($authenticationPage->getId());
				//First delete manually all its gadget
				foreach ($gadgets as $gadget) {
					$em->remove($gadget);
				}
				$em->remove($authenticationPage);
			}
		}
		$em->flush();
	}
}
