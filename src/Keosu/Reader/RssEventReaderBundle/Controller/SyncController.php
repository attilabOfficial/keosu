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
namespace Keosu\Reader\RssEventReaderBundle\Controller;
use Keosu\DataModel\EventModelBundle\Entity\Event;

use Keosu\Reader\RssEventReaderBundle\RssEventReader;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\DomCrawler\Crawler;

/**
 * Synchronise a RSS feed with Article data model
 * @author flavien-lecuyer
 *
 */
class SyncController extends Controller {
	/**
	 * Synchronise RSS remote contents with articles
	 * @param $id of the curent reader
	 */
	public function syncAction($id)
	{
		$em = $this->get('doctrine')->getManager();
		$reader = $em->getRepository('KeosuCoreBundle:Reader')->find($id);
		//Convert it to a RssReader
		$rssReader = RssEventReader::constructfromReader($reader);
		//geting the feed as a string
		$rssurl = $rssReader->feed_url;
		$curl = curl_init($rssurl);
		curl_setopt($curl, CURLOPT_HTTPHEADER,
					array('Content-Type: text/xml',
					'User-Agent: Keosu-UA'));
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
		$feedstring = utf8_decode(curl_exec($curl));
		curl_close($curl);
		//Parse feed to get all elements
		$craw = new Crawler($feedstring);
		$entries = $craw->filter('item');//Item tag is an entry
		foreach ($entries as $entry) {
			$this->parseAndImportEvent($entry, $reader);
		}
		return $this->redirect($this->generateUrl('keosu_event_viewlist'));
	}
	private function parseAndImportEvent($entry, $reader) {
		//Seting default value to avoid doctrine errors
		$name="";
		$desc="";
		$date=new \DateTime("now");
		$where = "(not found)";
		$lat = 0; $lng = 0;
		
		$is_Event = false;
		
		//Getting all elements from entry (DOMElement) object
		if($entry->getElementsByTagName("title")->item(0)!=null)
			$name=$entry->getElementsByTagName("title")->item(0)->nodeValue;
		if($entry->getElementsByTagName("description")->item(0)!=null)
			$desc='<p>'.$entry->getElementsByTagName("description")->item(0)->nodeValue.'</p>';
		
		if($entry->getElementsByTagName("date")->item(0)!=null){
			$dateString = $entry->getElementsByTagName("date")->item(0)->nodeValue;
			//Converting datestring to DateTime Object
			$date=\DateTime::createFromFormat('Y-m-d\TH:iP',$dateString);	
			$is_Event = true;
		}
			
		if($entry->getElementsByTagName("point")->item(0)!=null) {
			$latAndlng = $entry->getElementsByTagName("point")->item(0)->nodeValue;
			$lat = substr($latAndlng,0,strrpos($latAndlng,' '));
			$lng = substr($latAndlng,strrpos($latAndlng,' ')+1);

			$where = json_decode(file_get_contents('https://maps.googleapis.com/maps/api/geocode/json?latlng='.$lat.','.$lng),true);
			$where=$where['results'];
			if ($where!=[]){
				foreach ($where[0]['address_components'] as $address_part){
					if (array_search('locality',$address_part['types'])!=[]) $locality = $address_part['long_name'];
					if (array_search('country',$address_part['types'])!=[]) $country = $address_part['long_name'];
				}
				$where = $locality.', '.$country;
			} else {
				$where = '(location can not be found)';
			}
			$is_Event = true;
		}
		//Store in database if it is an event
		if ($is_Event){
			$this->storeEvent($name, $desc, $date, $where, $lat, $lng, $reader);
		}
		
	}
	
	private function storeEvent($name, $desc, $date, $where, $lat, $lng, $reader) {
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
		$event->setDate($date);
		$event->setReader($reader);
		$event->setLieu($where);
		$event->setLatitude($lat);
		$event->setLongitude($lng);
		$event->setDate($date);
		$em->persist($event);
		$em->flush();
	
	}

}

