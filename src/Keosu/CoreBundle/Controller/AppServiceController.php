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

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AppServiceController extends Controller {

	/**
	 * REST service returning the list of all pages
	 */
	public function listAction($format) {
		$appid = $this->get('keosu_core.curapp')->getCurApp();
		$em = $this->get('doctrine')->getManager();
		if($appid==0 || $appid==null){
			return null;
		}
		$curAppName = $em->getRepository('KeosuCoreBundle:App')->find($appid)->getName();
		$contents = $em->getRepository('KeosuCoreBundle:App')->findAll();
		return $this->render('KeosuCoreBundle:App/Service:list.'.$format.'.twig', array(
								'contents' => $contents,
								'curapp'   => $curAppName
		));
	}
}
