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

namespace Keosu\DataModel\MenuModelBundle\Entity;
use Keosu\CoreBundle\Entity\Model\DataModel;
use Symfony\Component\Validator\Constraints as Assert;


use Doctrine\ORM\Mapping as ORM;

/**
 *
 * @ORM\Table()
 * @ORM\Entity
 * @ORM\Table(name="MenuEntry")
 */
class MenuEntry extends DataModel {

	/**
	 * @var string $title
	 *
	 * @ORM\Column(name="title", type="string", length=255)
	 */
	private $title;

	/**
	 * @ORM\OneToMany(targetEntity="Keosu\DataModel\MenuModelBundle\Entity\MenuPart", mappedBy="menuEntry", cascade={"persist","remove"})
	 *
	 * @Assert\Valid
	 */

	private $parts;

	/**
	 * @var int $appId
	 *
	 * @ORM\Column(name="appId", type="integer")
	 */
	private $appId;

	/**
	 * Add menu part
	 *
	 * @return Menu
	 */
	public function addPart(
		\Keosu\DataModel\MenuModelBundle\Entity\MenuPart $part) {
		$this->parts[] = $part;
		$part->setMenuEntry($this);
		return $this;
	}

	/**
	 * Remove part
	 *
	 */
	public function removePart(
		\Keosu\DataModel\MenuModelBundle\Entity\MenuPart $part) {
		$this->parts->removeElement($part);
	}

	/**
	 * @param mixed $parts
	 */
	public function setParts($parts)
	{
		$this->parts = $parts;
	}

	/**
	 * @return mixed
	 */
	public function getParts()
	{
		return $this->parts;
	}

	/**
	 * @param string $title
	 */
	public function setTitle($title)
	{
		$this->title = $title;
	}

	/**
	 * @return string
	 */
	public function getTitle()
	{
		return $this->title;
	}

	/**
	 * @param int $appId
	 */
	public function setAppId($appId)
	{
		$this->appId = $appId;
	}

	/**
	 * @return int
	 */
	public function getAppId()
	{
		return $this->appId;
	}


	/**
	 * Constructor
	 */
	public function __construct() {
		$this->parts = new \Doctrine\Common\Collections\ArrayCollection();
	}
	public function getDataModelObjectName() {
		return 'menu';
	}

}
