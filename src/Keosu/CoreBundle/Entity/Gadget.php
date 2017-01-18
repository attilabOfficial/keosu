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
namespace Keosu\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

use Keosu\CoreBundle\Service\PackageManager;

/**
 * Gadget
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Keosu\CoreBundle\Entity\GadgetRepository")
 * @ORM\Table(name="Gadget")
 */
class Gadget {
	/**
	 * @var integer
	 *
	 * @ORM\Column(name="id", type="integer")
	 * @ORM\Id
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	private $id;

	/**
	 * @var string
	 *
	 * @ORM\Column(name="name", type="string", length=255)
	 */
	private $name;
	
	/**
	 * @var boolean
	 *
	 * @ORM\Column(name="shared", type="boolean")
	 * Shared gadget with all the pages
	 */
	private $shared;

	/**
	 * @ORM\ManyToOne(targetEntity="Keosu\CoreBundle\Entity\Page")
	 * @ORM\JoinColumn(nullable=false)
	 */
	private $page;

	/**
	 * @var string
	 *
	 * @ORM\Column(name="zone", type="string", length=255)
	 */
	private $zone;

	/**
	 * @var array
	 *
	 * @ORM\Column(name="config", type="array")
	 */
	private $config;

	/**
	 * @var string
	 *
	 * @ORM\Column(name="template", type="string", length=255)
	 */
	private $template;
	
	public function __construct() {
		$this->template = PackageManager::DEFAULT_TEMPLATE_GADGET_NAME;
		$this->config = array();
	}
	
	
	/**
	 * Get id
	 *
	 * @return integer 
	 */
	public function getId() {
		return $this->id;
	}

	public function setName($name) {
		$this->name = $name;
		return $this;
	}

	public function getName() {
		return $this->name;
	}

	public function setTemplate($name) {
		$this->template = $name;
		return $this;
	}

	public function getTemplate() {
		return $this->template;
	}

	/**
	 * Set page
	 *
	 * @param string $page
	 * @return Gadget
	 */
	public function setPage($page) {
		$this->page = $page;
		return $this;
	}

	/**
	 * Get page
	 *
	 * @return string 
	 */
	public function getPage() {
		return $this->page;
	}

	/**
	 * Set zone
	 *
	 * @param string $zone
	 * @return Gadget
	 */
	public function setZone($zone) {
		$this->zone = $zone;

		return $this;
	}

	/**
	 * Get zone
	 *
	 * @return string 
	 */
	public function getZone() {
		return $this->zone;
	}

	/**
	 * Set config
	 *
	 * @param array $config
	 * @return Gadget
	 */
	public function setConfig($config) {
		$this->config = $config;

		return $this;
	}

	/**
	 * Get config
	 *
	 * @return array 
	 */
	public function getConfig() {
		return $this->config;
	}

	public function setShared($shared) {
		$this->shared = $shared;
	
		return $this;
	}
	
	public function isShared() {
		return $this->shared;
	}

}
