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

use Keosu\CoreBundle\Util\TemplateUtil;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ServiceController extends Controller {

	public function viewListAction($gadgetId, $format, $offset) {
		$gadget = $this->get('doctrine')->getManager()
				->getRepository('KeosuCoreBundle:Gadget')->find($gadgetId);
		$gadgetConfig = $gadget->getConfig();
		$eventsperpage=$gadgetConfig['events-per-page'];

		$qb = $this->get('doctrine')->getManager()->createQueryBuilder();
		$qb->add('select', 'p')
				->add('from',
						'Keosu\DataModel\EventModelBundle\Entity\Event p')
				->add('orderBy', 'p.date DESC')
				->setFirstResult($offset)
				->setMaxResults(15);
		//max result 15?
		$query = $qb->getQuery();
		$eventsList = $query->execute();

		
		$queryCount = $this->get('doctrine')->getManager()->createQuery("SELECT COUNT(p.id) FROM Keosu\DataModel\EventModelBundle\Entity\Event p");
		$count = $queryCount->getSingleScalarResult();
	
		return $this
				->render(
						'KeosuGadgetCalendarGadgetBundle:Service:viewlist.'
								. $format . '.twig',
						array('events' => $eventsList, 'eventsperpage' => $eventsperpage));
	}
	
	public function viewOneAction($eventid,$format){
		$repo = $this->get('doctrine')->getManager()
			->getRepository('KeosuDataModelEventModelBundle:Event');
		$event = $repo->find($eventid);
		return $this
			->render(
				'KeosuGadgetCalendarGadgetBundle:service:view.'
				. $format . '.twig',
				array('event' => $event));
	}
		
	public function viewTableAction($gadgetId, $format) {
		//$gadget = $this->get('doctrine')->getManager()
		//		->getRepository('KeosuCoreBundle:Gadget')->find($gadgetId);
		//$gadgetConfig = $gadget->getConfig();
		//$eventsperpage=$gadgetConfig['events-per-page'];

		$qb = $this->get('doctrine')->getManager()->createQueryBuilder();
		$qb->add('select', 'p')
				->add('from',
						'Keosu\DataModel\EventModelBundle\Entity\Event p')
				->add('orderBy', 'p.date DESC');
		$query = $qb->getQuery();
		$eventsList = $query->execute();

		
		$queryCount = $this->get('doctrine')->getManager()->createQuery("SELECT COUNT(p.id) FROM Keosu\DataModel\EventModelBundle\Entity\Event p");
		$count = $queryCount->getSingleScalarResult();
	
		return $this
				->render(
						'KeosuGadgetCalendarGadgetBundle:Service:viewtable.'
								. $format . '.twig',
						array('events' => $eventsList));
	}
	
}

?>