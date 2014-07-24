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
namespace Keosu\CoreBundle\Controller;

use Keosu\CoreBundle\Entity\Page;

use Keosu\CoreBundle\KeosuExtension;

use Keosu\CoreBundle\Service\PackageManager;

use Keosu\CoreBundle\Util\ThemeUtil;
use Keosu\CoreBundle\Util\TemplateUtil;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\DomCrawler\Crawler;


class PageStudioController extends Controller {

	/**
	 * Display a page in studio and allow to add/edit gadget
	 */
	public function viewAction($id) {
		//Curent app id
		$appid = $this->container->get('keosu_core.curapp')->getCurApp();
		$em = $this->get('doctrine')->getManager();

		//Get the page we want to edit
		$page = $em->getRepository('KeosuCoreBundle:Page')->find($id);
		
		//Page Template content as String
		$templateHtml = 
				file_get_contents(
					TemplateUtil::getPageTemplateAbsolutePath()
						. $page->getTemplateId());
		//Get all the elements of class "zone" in template dom
		$crawler = new Crawler($templateHtml);
		$zones = $crawler->filter('.zone')->extract(array('id'));
		
		//Initiate an Array to store all zone in page
		$zoneModelList = array();
		
		foreach ($zones as $zone) {
			//Look if there is a shared gadget in this zone
			$gadget = $em->getRepository('KeosuCoreBundle:Gadget')->findSharedByZoneAndApp($zone,$appid);
			//If there is no share gadget we try to find the specific one
			if($gadget == null){
				//Find the gadget associated with page and zone
				$gadget = $em->getRepository('KeosuCoreBundle:Gadget')->findOneBy(array('zone' => $zone, 'page' => $id));
			}

			$zoneModel = array();
			$zoneModel['gadget'] = $gadget;
			$zoneModel['zoneId'] = $zone;
			$zoneModelList[] = $zoneModel;
		}

		$gadgetList = $this->get('keosu_core.package_manager')->getPackageList(PackageManager::TYPE_PACKAGE_GADGET);

		return $this->render('KeosuCoreBundle:Page:studio.html.twig',
						array('page'         => $page,
							  'zones'        => $zoneModelList,
							  'templatehtml' => $templateHtml,
							  'gadgets'      => $gadgetList));
	}

}
