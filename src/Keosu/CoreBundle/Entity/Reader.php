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

/**
 * Keosu\ReaderManagerBundle\Entity\Reader
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Keosu\CoreBundle\Entity\ReaderRepository")
 * @ORM\Table(name="Reader")
 */
class Reader {
	/**
	 * @var integer $id
	 *
	 * @ORM\Column(name="id", type="integer")
	 * @ORM\Id
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	private $id;

	/**
	 * @var string $name
	 *
	 * @ORM\Column(name="name", type="string", length=255)
	 */
	private $name;

	/**
	 * @var string $service
	 * Type of the reader (rss, wordpress, etc...)
	 * @ORM\Column(name="service", type="string", length=255)
	 */
	private $service;

	/**
	 * @var array $config
	 *
	 * @ORM\Column(name="config", type="array")
	 */
	private $config;

	/**
	 * @var boolean $allowupdate
	 * If allowupdate is true, the content can be overrided in
	 * the next synchronisation but you can't modify it after import
	 * @ORM\Column(name="allowupdate", type="boolean" , nullable=true)
	 */
	private $allowupdate;
	/**
	 * @var string $linkedEntity
	 * Entity linked with reader
	 * @ORM\Column(name="linkedEntity", type="string", length=255)
	 */
	private $linkedEntity;
	/**
	 * Get id
	 *
	 * @return integer 
	 */
	public function getId() {
		return $this->id;
	}

	/**
	 * Set name
	 *
	 * @param string $name
	 * @return Reader
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
	 * Set service
	 *
	 * @param string $service
	 * @return Reader
	 */
	public function setService($service) {
		$this->service = $service;

		return $this;
	}

	/**
	 * Get service
	 *
	 * @return string 
	 */
	public function getService() {
		return $this->service;
	}

	/**
	 * Set config
	 *
	 * @param array $config
	 * @return Reader
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
	/**
	 * Set allowupdate
	 *
	 * @param boolean allowupdate
	 * @return Reader
	 */
	public function setAllowupdate($allowupdate) {
		$this->allowupdate = $allowupdate;
	
		return $this;
	}
	
	/**
	 * Get allowupdate
	 *
	 * @return array
	 */
	public function getAllowupdate() {
		return $this->allowupdate;
	}
	/**
	 * Set linkedEntity
	 *
	 */
	public function setLinkedEntity($linkedEntity) {
		$this->linkedEntity = $linkedEntity;
	
		return $this;
	}
	
	/**
	 * Get linledEntity

	 */
	public function getLinkedEntity() {
		return $this->linkedEntity;
	}
}
