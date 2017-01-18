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

namespace Keosu\DataModel\LocationModelBundle\Entity;

use Keosu\CoreBundle\Entity\Model\DataModel;

use Doctrine\ORM\Mapping as ORM;

/**
 * Keosu\DataModel\LocationModelBundle\Entity\Location
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Keosu\DataModel\LocationModelBundle\Entity\LocationRepository")
 * @ORM\Table(name="Location")
 */
class Location extends DataModel{
	/**
	 * @var string
	 *
	 * @ORM\Column(name="name", type="string", length=255)
	 */
	private $name;

	/**
	 * @var string
	 *
	 * @ORM\Column(name="description", type="text", nullable=true)
	 */
	private $description;

	/**
	 * @var float
	 *
	 * @ORM\Column(name="lat", type="float")
	 */
	private $lat;

	/**
	 * @var float
	 *
	 * @ORM\Column(name="lng", type="float")
	 */
	private $lng;

	/**
	 * @ORM\Column(name="enableComments", type="boolean")
	 */
	private $enableComments;

	/**
	 * @ORM\OneToMany(targetEntity="Keosu\DataModel\LocationModelBundle\Entity\LocationTags", mappedBy="Location", cascade={"persist","remove"})
	 */
	private $tags;

	/**
	 * Set name
	 *
	 * @param string $name
	 * @return Location
	 */
	public function setName($name) {
		$this->name = $name;

		return $this;
	}

	/**
	 * Get name
	 *
	 * @return string 
	 */
	public function getName() {
		return $this->name;
	}

	/**
	 * Set description
	 *
	 * @param string $description
	 * @return Location
	 */
	public function setDescription($description) {
		$this->description = $description;

		return $this;
	}

	/**
	 * Get description
	 *
	 * @return string 
	 */
	public function getDescription() {
		return $this->description;
	}

	/**
	 * Set lat
	 *
	 * @param float $lat
	 * @return Location
	 */
	public function setLat($lat) {
		$this->lat = $lat;

		return $this;
	}

	/**
	 * Get lat
	 *
	 * @return float 
	 */
	public function getLat() {
		return $this->lat;
	}

	/**
	 * Set lng
	 *
	 * @param float $lng
	 * @return Location
	 */
	public function setLng($lng) {
		$this->lng = $lng;

		return $this;
	}

	/**
	 * Get lng
	 *
	 * @return float 
	 */
	public function getLng() {
		return $this->lng;
	}
	
	private $distance;
	public function getDistance()
	{
		return $this->distance;
	}
	public function setDistance($dist)
	{
		$this->distance =$dist;
		return $this;;
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
	
	public function getDataModelObjectName() {
		return "location";
	}
	/**
	 * Add tags
	 *
	 * @param \Keosu\DataModel\LocationModelBundle\Entity\LocationTags $tags
	 * @return Location
	 */
	public function addTag(
			\Keosu\DataModel\LocationModelBundle\Entity\LocationTags $tags) {
		$this->tags[] = $tags;
		$tags->setLocation($this);
	
		return $this;
	}
	
	/**
	 * Remove tags
	 *
	 * @param \Keosu\DataModel\LocationModelBundle\Entity\LocationTags $tags
	 */
	public function removeTag(
			\Keosu\DataModel\LocationModelBundle\Entity\LocationTags $tag) {
		$this->tags->removeElement($tag);
	}
	
	/**
	 * Get tags
	 *
	 * @return Doctrine\Common\Collections\Collection
	 */
	public function getTags() {
		return $this->tags;
	}
	
	public function setTags(\Doctrine\Common\Collections\ArrayCollection $tags)
	{
		$this->tags = $tags;
	}
}

