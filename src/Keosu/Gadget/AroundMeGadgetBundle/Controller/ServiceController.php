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
namespace Keosu\Gadget\AroundMeGadgetBundle\Controller;

use Keosu\CoreBundle\Util\TemplateUtil;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ServiceController extends Controller {

	public function viewListAction($gadgetId, $format, $offset, $limit, $lat, $lng) {

		//get Tag
		$em = $this->get('doctrine')->getManager();
		$gadget = $em->getRepository('KeosuCoreBundle:Gadget')->find($gadgetId);
		$gadgetConfig = $gadget->getConfig();
		$tag=$gadgetConfig['tag'];

		$queryString = 'SELECT DISTINCT a.id,';
		$queryString = $queryString.'( 6355 * acos(cos(radians(' . $lat . '))' .
				'* cos( radians( a.lat ) )' .
				'* cos( radians( a.lng )' .
				'- radians(' . $lng . ') )' .
				'+ sin( radians(' . $lat . ') )' .
				'* sin( radians( a.lat ) ) ) ) as distance';
		$queryString = $queryString.' FROM Keosu\DataModel\LocationModelBundle\Entity\Location a';
		if ($tag!=""){
			$queryString = $queryString.', Keosu\DataModel\LocationModelBundle\Entity\LocationTags t';
			$queryString = $queryString.' where a.id=t.Location and t.tagName= :mytag ';
		}
		$queryString = $queryString.' ORDER BY distance';
		
		$query = $em->createQuery($queryString);
		if ($tag!="")
			$query->setParameter('mytag', $tag);

		$query->setFirstResult( $offset);
		$query->setMaxResults( 100 );
		$poisORM = Array();
		$poisORM = $query->execute();
		
		//TODO fix this
		$pois = Array();
		foreach($poisORM as $poiORM) {
			$poi = $em->getRepository('KeosuDataModelLocationModelBundle:Location')->find($poiORM['id']);
			$poi->setDistance($poiORM['distance']);
			$poi->setDescription(TemplateUtil::formatTemplateString($poi->getDescription()));
			$pois[] = $poi;
		}
		//return new JsonRespons`($pois);
		return $this->render(
						'KeosuGadgetAroundMeGadgetBundle:service:viewlist.'
								. $format . '.twig',
						array('pois' => $pois));
	}

}
