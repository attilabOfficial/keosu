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
namespace Keosu\Gadget\PictureGadgetBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;

/**
 * REST Service controller dedicated to the current gadget
 * @author jdequeant
 *
 */
class ServiceController extends Controller {

	public function viewOneAction($gadgetId)
	{
		$em = $this->get('doctrine')->getManager();
		$baseurl = $this->container->getParameter('url_base');
		$gadget = $em->getRepository('KeosuCoreBundle:Gadget')->find($gadgetId);
		$gadgetConfig = $gadget->getConfig();
		$picture = $em->getRepository('KeosuDataModelPictureModelBundle:Picture')->find($gadgetConfig["pictureId"]);

		return new JsonResponse(array(
			"id" => $picture->getId(),
			"dataModelObjectName" => $picture->getDataModelObjectName(),
			"name" => $picture->getName(),
			"description" => $picture->getDescription(),
			"path" => $baseurl.$picture->getWebPath(),
			"thumbpath" => $baseurl.$picture->getThumbWebPath(),
			"enableComments" => $picture->getEnableComments()
		));
	}
}

