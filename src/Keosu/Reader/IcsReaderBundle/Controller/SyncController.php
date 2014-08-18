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
namespace Keosu\Reader\IcsReaderBundle\Controller;

use Keosu\DataModel\EventModelBundle\Entity\Event;
use Keosu\Reader\IcsReaderBundle\icsReader;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Synchronise a ics feed with Event data model
 * @author flavien-lecuyer
 *
 */
class SyncController extends Controller {
	/**
	 * Synchronise ics remote contents with articles
	 * @param $id of the curent reader
	 */
	
	public function syncAction($id)
	{
		$em = $this->get('doctrine')->getManager();
		$reader = $em->getRepository('KeosuCoreBundle:Reader')->find($id);
		//Convert it to a RssReader
		$icsReader = icsReader::constructfromReader($reader);
		
		//geting the feed as a string
		$icsurl=$icsReader->feed_url;
		
		$handle = @fopen($icsurl, "r");
		if ($handle) {
			while (($buffer = fgets($handle, 4096)) !== false) {
				if (strstr($buffer, 'BEGIN:VEVENT')!=''){
					$year = 0; $month = 0; $day = 0; $hour = 0; $minute = 0;
					$where = ''; $lat = 0; $lng = 0;
					$desc = ''; $name = '';
					set_time_limit(10);
				}  else if (strstr($buffer, "LOCATION:")!=''){
					$where = substr($buffer,9).' (location can not be found)';
				} else if (strstr($buffer, "DTSTART:")!=''){
					$dateStr = substr($buffer,8);
					$year = substr($dateStr,0,4);
					$month = substr($dateStr,4,2);
					$day = substr($dateStr,6,2);
					$hour = substr($dateStr,9,2);
					$minute = substr($dateStr,11,2);
					$date=new \DateTime($year.'/'.$month.'/'.$day.' '.$hour.':'.$minute.':00+0000');
				} else if (strstr($buffer, "SUMMARY:")!=''){
					$name = str_replace( "\n", '', substr($buffer,8));
				} else if (strstr($buffer, "DESCRIPTION:")!=''){
					$desc = '<p>'.str_replace( "\n", '<br />', substr($buffer,12)).'</p>';
				} else if (strstr($buffer, 'END:VEVENT')!=''){
					$this->storeEvent($date,$name,$desc,$where,$lat,$lng,$reader);
				}
			}
			fclose($handle);
		}
		
		return $this
				->redirect($this->generateUrl('keosu_event_viewlist'));
	}
	
	
	private function storeEvent($date,$name,$desc,$where,$lat,$lng,$reader) {
		//Test if event already exist (same name)
		$em = $this->get('doctrine')->getManager();
		$event = $em->getRepository('KeosuDataModelEventModelBundle:Event')->findOneByName($name);
		//Create a new article if we can't find one in database
		if ($event == null) {
			$event = new Event();
			//If article exist and allowpdate is false we quit
		} else if($reader->getAllowupdate()==false){
			return;
		}
		$event->setName($name);
		$event->setDescription($desc);
		$event->setReader($reader);
		$event->setLieu($where);
		$event->setLatitude($lat);
		$event->setLongitude($lng);	
		$event->setDate($date);
		$em->persist($event);
		$em->flush();
	}
}

