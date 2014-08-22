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
namespace Keosu\Gadget\AroundMeGadgetBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ServiceController extends Controller {

	public function viewListAction($gadgetId, $format, $offset, $limit, $lat, $lng) {
		$em = $this->get('doctrine')->getManager();
			
		$queryString = 'SELECT DISTINCT a.id,';
		$queryString = $queryString.'( 6355 * acos(cos(radians(' . $lat . '))' .
				'* cos( radians( a.lat ) )' .
				'* cos( radians( a.lng )' .
				'- radians(' . $lng . ') )' .
				'+ sin( radians(' . $lat . ') )' .
				'* sin( radians( a.lat ) ) ) ) as distance';
		$queryString = $queryString.' FROM Keosu\DataModel\LocationModelBundle\Entity\Location a';
		$queryString = $queryString.' ORDER BY distance';
		
		$query = $em->createQuery($queryString);
		$query->setFirstResult( $offset);
		$query->setMaxResults( 10 );
		$poisORM = Array();
		$poisORM = $query->execute();
		
		//TODO fix this
		$pois = Array();
		foreach($poisORM as $poiORM) {
			$poi = $em->getRepository('KeosuDataModelLocationModelBundle:Location')->find($poiORM['id']);
			$poi->setDistance($poiORM['distance']);
			$pois[] = $poi;
		}

		return $this->render(
						'KeosuGadgetAroundMeGadgetBundle:service:viewlist.'
								. $format . '.twig',
						array('pois' => $pois));
	}
	
	public function viewOneAction($poiid,$format){
		$em = $this->get('doctrine')->getManager();
		$poi = $em->getRepository('KeosuDataModelLocationModelBundle:Location')->find($poiid);
		return $this
			->render(
				'KeosuGadgetAroundMeGadgetBundle:service:view.'
				. $format . '.twig',
				array('poi' => $poi));
	}
}

?>