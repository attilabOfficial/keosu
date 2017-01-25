<?php
/************************************************************************
 Keosu is an open source CMS for mobile app
Copyright (C) 2014  Vincent Le Borgne

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

namespace Keosu\Gadget\CalendarGadgetBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Serializer\Encoder\JsonEncode;
use Symfony\Component\Serializer\Normalizer\GetSetMethodNormalizer;
use Symfony\Component\Serializer\Serializer;

class ServiceController extends Controller {

	public function viewListAction($gadgetId) {
		$em = $this->get('doctrine')->getManager();
	
		$gadget = $em->getRepository('KeosuCoreBundle:Gadget')->find($gadgetId);
		$eventsperpage = 300;

        // Get the events
		$qb = $em->createQueryBuilder();
		$qb->add('select', 'p')
				->add('from','Keosu\DataModel\EventModelBundle\Entity\Event p')
				->add('orderBy', 'p.start DESC')
				->setMaxResults($eventsperpage);
		$query = $qb->getQuery();
		$eventsList = $query->execute();

		$encoders = array(new JsonEncode());

		$normalizer = new GetSetMethodNormalizer();
		$callback = function ($dateTime) {
			return $dateTime instanceof \DateTime
				? $dateTime->format(\DateTime::ISO8601)
				: '';
		};
		$webPah = function ($path) {
			return $this->container->getParameter('url_base') . $path;
		};
		$normalizer->setCallbacks(array('start' => $callback, 'end' => $callback, 'webPath'=>$webPah));

		$serializer = new Serializer(array($normalizer), $encoders);

		return new Response($serializer->serialize($eventsList, 'json'));
	}
	
}

?>
