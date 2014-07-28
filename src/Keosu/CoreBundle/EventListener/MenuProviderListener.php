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
namespace Keosu\CoreBundle\EventListener;

use Keosu\CoreBundle\Controller\MenuProviderController;
use Keosu\CoreBundle\KeosuExtension;
use Symfony\Component\HttpKernel\Event\FilterControllerEvent;

class MenuProviderListener{
	public function onKernelController(FilterControllerEvent $event){
		$controller = $event->getController();

		if (!is_array($controller)) {
			return;
		}
		$menuController = $controller[0];
		//Storing in session all the left menu
		if ($controller[0] instanceof MenuProviderController) {
			$appid=$menuController->get('keosu_core.curapp')->getCurApp();
			//App list in menu
			if ($menuController->get('session')->get('applist') === null) {
				$apps=$menuController->get('doctrine')->getManager()
					->getRepository('KeosuCoreBundle:App')->findAll();
				$menuController->get('session')->set('applist', $apps);
			}
			//Current App name
			if ($menuController->get('session')->get('curapp_name') === null) {
				$curAppName = $menuController->get('doctrine')->getManager()
					->getRepository('KeosuCoreBundle:App')->find($appid)->getName();
				$menuController->get('session')->set('curapp_name', $curAppName);
			}
			//List of available data model
			if ($menuController->get('session')->get('datamodel') === null) {
				$menuController->get('session')->set('datamodel', array_keys(KeosuExtension::$dataModelList));
			}
			//List of pages
			if ($menuController->get('session')->get('pages') === null) {
				$pages = $menuController->get('doctrine')->getManager()
					->getRepository('KeosuCoreBundle:Page')->findByAppId($appid);
				$menuController->get('session')->set('pages', $pages);
			}
		}
	}
}

