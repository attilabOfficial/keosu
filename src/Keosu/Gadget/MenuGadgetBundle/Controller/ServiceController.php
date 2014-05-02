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
namespace Keosu\Gadget\MenuGadgetBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * REST Service controller dedicated to the curent gadget
 * @author vleborgne
 *
 */
class ServiceController extends Controller {

	public function viewOneAction($gadgetId, $format) {
		$gadget = $this->get('doctrine')->getManager()
				->getRepository('KeosuCoreBundle:Gadget')->find($gadgetId);
		$gadgetConfig = $gadget->getConfig();
		$pages = array();
		if (array_key_exists('page1', $gadgetConfig))
			$pages[]=
		 		$this->get('doctrine')->getManager()
					->getRepository('KeosuCoreBundle:Page')
					->find($gadgetConfig["page1"]);
		if (array_key_exists('page2', $gadgetConfig))
			$pages[]=
				$this->get('doctrine')->getManager()
				->getRepository('KeosuCoreBundle:Page')
				->find($gadgetConfig["page2"]);
		if (array_key_exists('page3', $gadgetConfig))
			$pages[]=
				$this->get('doctrine')->getManager()
				->getRepository('KeosuCoreBundle:Page')
				->find($gadgetConfig["page3"]);
		if (array_key_exists('page4', $gadgetConfig))
			$pages[]=
				$this->get('doctrine')->getManager()
				->getRepository('KeosuCoreBundle:Page')
				->find($gadgetConfig["page4"]);
		if (array_key_exists('page5', $gadgetConfig))
			$pages[]=
				$this->get('doctrine')->getManager()
				->getRepository('KeosuCoreBundle:Page')
				->find($gadgetConfig["page5"]);
		if (array_key_exists('page6', $gadgetConfig))
			$pages[]=
			$this->get('doctrine')->getManager()
			->getRepository('KeosuCoreBundle:Page')
			->find($gadgetConfig["page6"]);
		return $this
				->render(
						'KeosuGadgetMenuGadgetBundle:Service:viewone.' . $format
								. '.twig', array('pages' => $pages));
	}
}

?>
