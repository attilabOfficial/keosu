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
namespace Keosu\Reader\icsReaderBundle\Controller;
use Keosu\DataModel\EventModelBundle\Entity\Event;

use Keosu\Reader\icsReaderBundle\icsReader;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\DomCrawler\Crawler;

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
	
	function dist($lat,$lng){
		$current_lat = 48.117266;
		$current_lng = -1.6777926;
		return ($lat-$current_lat)*($lat-$current_lat)+($lng-$current_lng)*($lng-$current_lng);
	}
	
	function cmpByDist($a,$b){
		if ( $this->dist($a['geometry']['location']['lat'],$a['geometry']['location']['lng'])
		== $this->dist($b['geometry']['location']['lat'],$b['geometry']['location']['lng']) ) {
			return 0;
		}
		return ($this->dist($a['geometry']['location']['lat'],$a['geometry']['location']['lng'])
				< $this->dist($b['geometry']['location']['lat'],$b['geometry']['location']['lng'])) ? -1 : 1;
	}
	
	public function syncAction($id) {
		/**
		 * Init Keosu (local) connection and managers
		 */
		$Keosu_manager = $this->get('doctrine')->getManager();
		$Keosu_repository_article = $Keosu_manager
				->getRepository(
						'KeosuDataModelEventModelBundle:Event');
		
		$reader = $Keosu_manager->getRepository('KeosuCoreBundle:Reader')
		->find($id);
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
					$where = substr($buffer,9);
					/*$res = json_decode(file_get_contents('https://maps.googleapis.com/maps/api/geocode/json?address='.str_replace(' ','_',$where).'&sensor=false'),true);
					if ($res['status']=='OVER_QUERY_LIMIT'){
						$where = $where.' (location can not found)';
					} else if ($res['results']!=[]){
						$res=$res['results'];
						if (sizeof($res)==1){
							$lat = $res[0]['geometry']['location']['lat'];
							$lng = $res[0]['geometry']['location']['lng'];
						} else {
							$max_links = 0;
							$final_res = [];
							foreach($res as $a_result){
								$links = 0;
								foreach($a_result['address_components'] as $address_part){
									if (stristr($name,$address_part['long_name'])!='') $links++;
									if (stristr($desc,$address_part['long_name'])!='') $links++;
									if (stristr($name,$address_part['short_name'])!='') $links++;
									if (stristr($desc,$address_part['short_name'])!='') $links++;
								}
								if ($links == $max_links){
									$final_res[] = $a_result;
								} else if ($links > $max_links) {
									$final_res = array($a_result);
								}
							}
							if (sizeof($final_res)>1){
								usort($res,array($this,'cmpByDist'));
							}
							$lat = $res[0]['geometry']['location']['lat'];
							$lng = $res[0]['geometry']['location']['lng'];
						}
					} else {
						$where = $where.' (location can not be found)';
					}
					// It would be the lines to find the location with Google Maps API
					 * To make it work, we should save the number of events we read, and then, when we
					 * spent to much time, we would refresh without using the first events
					*/
					$where = $where.' (location can not be found)';
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
		$event = $this->get('doctrine')->getManager()
		->getRepository(
				'KeosuDataModelEventModelBundle:Event')
				->findOneByName($name);		
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
		$this->get('doctrine')->getManager('default')->persist($event);
		$this->get('doctrine')->getManager('default')->flush();
	
	
	}

	private function downloadFile($url, $path) {

		$newfname = $path + "/temp";
		$file = fopen($url, "rb");
		if ($file) {
			$newf = fopen($newfname, "wb");

			if ($newf)
				while (!feof($file)) {
					fwrite($newf, fread($file, 1024 * 8), 1024 * 8);
				}
		}

		if ($file) {
			fclose($file);
		}

		if ($newf) {
			fclose($newf);
		}
		return $file;
	}

}
