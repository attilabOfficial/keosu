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

namespace Keosu\DataModel\EventModelBundle\Entity;

use Keosu\CoreBundle\Entity\Model\DataModel;

use Doctrine\ORM\Mapping as ORM;

/**
 * Keosu\DataModel\EventModelBundle\Entity\Event
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Keosu\DataModel\EventModelBundle\Entity\EventRepository")
 */
class Event extends DataModel{
	 /**
	 * @var string
	 *
	 * @ORM\Column(name="name", type="string", length=255)
	 */
	 private $name;
	  
	 /**
	  * @var \DateTime
	  * 
	  * @ORM\Column(name="date", type="datetime")
	  */
	 private $date;
	   
	 /**
	  * @var string
	  *
	  * @ORM\Column(name="description", type="text", nullable=true)
	  */
	 private $description;
	 
	 
	 /**
	  * @var string
	  * 
	  * @ORM\Column(name="location", type="string")
	  */
	 private $lieu;
	 
	 /**
	  * @var float
	  *
	  * @ORM\Column(name="latitude", type="float")
	  */
	 private $latitude;
	 
	 /**
	  * @var float
	  *
	  * @ORM\Column(name="longitude", type="float")
	  */
	 private $longitude;
	 
	 /**
	  * @ORM\Column(name="enableComments", type="boolean")
	  */
	 private $enableComments;
	 
	 public function __construct() {
	 	$this->enableComments = false;
	 }

	 /**
	  * Get name
	  *
	  * @return string
	  */
	 public function getName(){
	 	return $this->name;
	 }
	 
	 /**
	  * Set name
	  *
	  * @param string $name
	  * @return Event
	  */
	 public function setName($name){
	 	$this->name = $name;
	 	
	 	return $this;
	 }
	 
	 /**
	  * Get date
	  *
	  * @return \DateTime
	  */
	 public function getDate(){
	 	return $this->date;
	 }
	 
	 
	 /**
	  * Get hour
	  *
	  * @return \DateTime
	  */
	 public function getHour(){
	 	return $this->date;
	 }
	 
	 /**
	  * Set hour
	  *
	  * @param \DateTime $hours
	  * @return string
	  */
	 public function setHour($hour){
	 	$hours = date_format($hour,'H');
	 	$minutes = date_format($hour,'i');
	 	date_time_set($this->date,$hours,$minutes);
	 	return $this;
	 }
	 
	 
	 /**
	  * Get date (string format)
	  *
	  * @return string
	  */
	 public function getDateString(){
	 	return date_format($this->date,'d-m-y H:i');
	 }
	 
	 /**
	  * Get date (ms)
	  *
	  * @return string
	  */
	 public function getDateMs(){
	 	return strtotime(date_format($this->date,'d M y h:i:s A'))*1000;
	 }
	 
	 /**
	  * Set date
	  *
	  * @param \DateTime $date
	  * @return Event
	  */
	 public function setDate($date){
	 	$this->date = $date;
	 	
	 	return $this;
	 }
	 
	 /**
	  * Get description
	  *
	  * @return string
	  */
	 public function getDescription(){
	 	return $this->description;
	 }
	 
	 /**
	  * Set description
	  *
	  * @param string $desc
	  * @return Event
	  */
	 public function setDescription($desc){
	 	$this->description = $desc;
	 	
	 	return $this;
	 }
	 
	 
	 /**
	  * Get lieu
	  *
	  * @return string
	  */
	 public function getLieu(){
	 	return $this->lieu;
	 }
	 
	 /**
	  * Set lieu
	  *
	  * @param string $lieu
	  * @return Event
	  */
	 public function setLieu($lieu){
	 	$this->lieu = $lieu;
	 	
	 	return $this;
	 }
	 
	 /**
	  * Get latitude
	  *
	  * @return float
	  */
	 public function getLatitude(){
	 	return $this->latitude;
	 }
	 
	 /**
	  * Set latitude
	  *
	  * @param float $lat
	  * @return Event
	  */
	 public function setLatitude($lat){
	 	$this->latitude = $lat;
	 	
	 	return $this;
	 }

	 /**
	  * Get longitude
	  *
	  * @return float
	  */
	 public function getLongitude(){
	 	return $this->longitude;
	 }
	 
	 /**
	  * Set longitude
	  *
	  * @param float $long
	  * @return Event
	  */
	 public function setLongitude($long){
	 	$this->longitude = $long;
	 	
	 	return $this;
	 }
	 
	public function getDataModelObjectName() {
		return 'event';
	}
	 	/**
	 * Get enableComments
	 *
	 * @return boolean 
	 */
	public function getEnableComments() {
		return $this->enableComments;
	}
	
	/**
	 * Set enableComments
	 *
	 * @param boolean $enableComments
	 * @return ArticleBody
	 */
	public function setEnableComments($enableComments) {
		$this->enableComments = $enableComments;

		return $this;
	}
	 
}
