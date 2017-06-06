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


use Doctrine\ORM\Mapping as ORM;
use Keosu\CoreBundle\Entity\Model\MediaDataModel;
use Symfony\Component\Validator\Constraints as Assert;



/**
 * Keosu\DataModel\EventModelBundle\Entity\Event
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Keosu\DataModel\EventModelBundle\Entity\EventRepository")
 * @ORM\Table(name="Event")
 */
class Event extends MediaDataModel {
	 /**
	 * @var string
	 *
	 * @ORM\Column(name="title", type="string", length=255)
	 */
	 private $title;

	 /**
	  * @var \DateTime
	  * 
	  * @ORM\Column(name="start", type="datetime")
	  */
	 private $start;

	/**
	 * @var \DateTime
	 *
	 * @ORM\Column(name="end", type="datetime")
	 */
	private $end;

	   
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
	 private $location;

	/**
	 * @var string
	 *
	 * @ORM\Column(name="color", type="string", nullable=true)
	 */
	 private $color;
	 
	 /**
	  * @ORM\Column(name="enableComments", type="boolean")
	  */
	 private $enableComments;
	 
	 private $startHour;
	 private $endHour;
	 
	 public function __construct() {
	 	$this->enableComments = false;
	 }

	/**
	 * @return string
	 */
	public function getTitle()
	{
		return $this->title;
	}

	/**
	 * @param string $title
	 */
	public function setTitle($title)
	{
		$this->title = $title;
	}

	/**
	 * @return \DateTime
	 */
	public function getStart()
	{
		return $this->start;
	}

	/**
	 * @param \DateTime $start
	 */
	public function setStart($start)
	{
		$this->start = $start;
	}

	/**
	 * @return \DateTime
	 */
	public function getEnd()
	{
		return $this->end;
	}

	/**
	 * @param \DateTime $end
	 */
	public function setEnd($end)
	{
		$this->end = $end;
	}


	public function getStartHour()
	{
		return $this->startHour;
	}
	 /**
	  * Set hour
	  *
	  * @param \DateTime $hours
	  * @return string
	  */
	 public function setStartHour($hour){
	 	$hours = date_format($hour,'H');
	 	$minutes = date_format($hour,'i');
	 	date_time_set($this->start,$hours,$minutes);
	 	return $this;
	 }
	public function getEndHour()
	{
		return $this->endHour;
	}
	/**
	 * Set hour
	 *
	 * @param \DateTime $hours
	 * @return string
	 */
	public function setEndHour($hour){
		$hours = date_format($hour,'H');
		$minutes = date_format($hour,'i');
		date_time_set($this->end,$hours,$minutes);
		return $this;
	}
	 
	 
	 /**
	  * Get date (string format)
	  *
	  * @return string
	  */
	 public function getDateString(){
	 	return date_format($this->start,'d-m-y H:i');
	 }
	 
	 /**
	  * Get date (ms)
	  *
	  * @return string
	  */
	 public function getDateMs(){
	 	return strtotime(date_format($this->start,'d M y h:i:s A'))*1000;
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
	 public function getLocation(){
	 	return $this->location;
	 }
	 
	 /**
	  * Set lieu
	  *
	  * @param string $lieu
	  * @return Event
	  */
	 public function setLocation($location){
	 	$this->location = $location;
	 	
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
	 * @return string
	 */
	public function getColor()
	{
		return $this->color;
	}

	/**
	 * @param string $eventColor
	 */
	public function setColor($eventColor)
	{
		$this->color = $eventColor;
	}
	
	/**
	 * Set enableComments
	 *
	 * @param boolean $enableComments
	 * @return
	 */
	public function setEnableComments($enableComments) {
		$this->enableComments = $enableComments;

		return $this;
	}
	
	
	 
}
