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

use Keosu\CoreBundle\Util\ThemeUtil;

use Keosu\CoreBundle\Model\ZoneModel;

use Keosu\CoreBundle\KeosuExtension;

use Keosu\CoreBundle\Util\TemplateUtil;

use Keosu\CoreBundle\Entity\Page;
use Symfony\Component\DomCrawler\Crawler;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PageStudioController extends Controller {

	/**
	 * Display a page in studio and allow to add/edit gadget
	 */
	public function viewAction($id) {
		//Curent app id
		$appid = $this->container->get('keosu_core.curapp')
			->getCurApp($this->get('doctrine')->getManager(),
				$this->get("session"));
		//Get Curent theme
		$repo = $this->get('doctrine')->getManager()
			->getRepository('KeosuCoreBundle:App');
		$theme = $repo->find($appid);
		//Get the page we want to edit
		$content = $this->get('doctrine')->getManager()
				->getRepository('KeosuCoreBundle:Page')->find($id);
		//Page Template content as String
		$templateHtml = 
				file_get_contents(
					TemplateUtil::getPageTemplateAbsolutePath()
						. $content->getTemplateId());
		//Get all the elements of class "zone" in template dom
		$crawler = new Crawler($templateHtml);
		$zones = $crawler->filter('.zone')->extract(array('id'));
		
		//List of all available gadgets
		$gadgets = KeosuExtension::$gadgetList;
		//Initiate an Array to store all gadgets in page
		$gadgetModelList = Array();
		$gadgetRepo = $this->get('doctrine')->getManager()
				->getRepository('KeosuCoreBundle:Gadget');
		
		foreach ($zones as $zone) {
			//Look if there is a shared gadget in this zone
			$gadget=$gadgetRepo->findSharedByZoneAndApp($zone,$appid);
			//If there is no share gadget we try to find the specific one
			if($gadget==null){
				//Find the gadget associated with page and zone
				$gadget = $gadgetRepo
						->findOneBy(array('zone' => $zone, 'page' => $id));
			}
			//ZoneModel will be used to render the studio page
			$zoneModel = new ZoneModel();
			if ($gadget != null) {
				//Html template of gadget (to put in zone)
				$gadgetTemplateHtml = file_get_contents(
						TemplateUtil::getGadgetAbsolutePath() . '/'
								. $gadget->getGadgetName() . '/'
								. $gadget->getGadgetTemplate());
				//$configString = json_encode($gadget->getConfig());
				//$configString = str_replace('"', '\"', $configString);

				$zoneModel->setGadgetName($gadget->getGadgetName());
				$zoneModel
						->setTemplate(
								TemplateUtil::formatTemplateString(
										$gadgetTemplateHtml));
				$zoneModel->setZoneId($zone);
			} else {
				$zoneModel->setZoneId($zone);
			}
			$gadgetModelList[] = $zoneModel;
		}

		return $this
				->render('KeosuCoreBundle:Page:studio.html.twig',
						array('content' => $content,
								'zones' => $gadgetModelList,
								'templatehtml' => $templateHtml,
								'gadgets' => $gadgets));
	}

}
