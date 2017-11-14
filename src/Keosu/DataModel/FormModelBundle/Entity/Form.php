<?php
/************************************************************************
 Keosu is an open source CMS for mobile app
Copyright (C) 2014  Vincent Le Borgne, Pockeit

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
namespace Keosu\DataModel\FormModelBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Keosu\CoreBundle\Entity\SubApp;
use Keosu\CoreBundle\Entity\Model\DataModel;
use Keosu\DataModel\FormModelBundle\Entity\FormField;
use Symfony\Component\Validator\Constraints\Date;


/**
 * Form
 *
 * @ORM\Table()
 * @ORM\Entity()
 */
class Form extends DataModel {

	/**
	 * @var string $name
	 *
	 * @ORM\Column(name="name", type="string", length=255)
	 */
	private $name;

	/**
	 * @ORM\OneToMany(targetEntity="Keosu\DataModel\FormModelBundle\Entity\FormField", mappedBy="form", cascade={"persist", "remove"}, orphanRemoval=true)
	 */
	private $fields;

	/**
	 * @var int $subappId
	 *
	 * @ORM\Column(name="subAppId", type="integer", nullable=true)
	 */
	private $subAppId;
	
	/**
	 * @var string $mailFrom
	 *
	 * @ORM\Column(name="mailFrom", type="string", length=255)
	 */
	private $mailFrom;

	/**
	 * @var string $mailTo
	 *
	 * @ORM\Column(name="mailTo", type="string", length=255)
	 */
	private $mailTo;

	/**
	 * Constructor
	 */
	public function __construct() {
		$this->fields = new \Doctrine\Common\Collections\ArrayCollection();
	}

	/**
	 * Set name
	 *
	 * @param string $name
	 */
	public function setName($name) {
		$this->name = $name;
	}

	/**
	 * Get name
	 *
	 * @return string
	 */
	public function getTitle() {
		return $this->name;
	}

	/**
	 * Get fields
	 *
	 * @return string
	 */
	public function getFields() {
		return $this->fields;
	}

	/**
	 * Set fields
	 *
	 * @param ArrayCollection $fields
	 */
	public function setFields($fields) {
		$this->fields = $fields;
	}

	/**
	 * Add a field
	 *
	 * @param FormField $field
	 */
	public function addField(\Keosu\DataModel\FormModelBundle\Entity\FormField $field) {
		$this->fields->add($field);
	}

	/**
	 * Remove a field
	 *
	 * @param FormField $field
	 */
	public function removeField(\Keosu\DataModel\FormModelBundle\Entity\FormField $field) {
		$this->fields->removeElement($field);
	}

	public function getDataModelObjectName() {
		return 'form';
	}

	/**
	 * Get subAppId
	 *
	 * @return SubAppId
	 */
	public function getSubAppId() {
		return $this->subAppId;
	}

	/**
	 * Set SupAppId
	 *
	 * @param int $subAppId
	 */
	public function setSubAppId($subAppId) {
		$this->subAppId = $subAppId;
	}

  /**
   * Get name
   *
   * @return string
   */
  public function getName()
  {
      return $this->name;
  }

	/**
   * Get mailFrom
   *
   * @return string
   */
  public function getMailFrom()
  {
      return $this->mailFrom;
  }

	/**
   * Set mailFrom
   *
   * @param boolean $mailFrom
   */
  public function setMailFrom($mailFrom)
  {
      $this->mailFrom = $mailFrom;
  }

	/**
   * Get mailTo
   *
   * @return string
   */
  public function getMailTo()
  {
      return $this->mailTo;
  }

	/**
   * Set mailTo
   *
   * @param boolean $mailTo
   */
  public function setMailTo($mailTo)
  {
      $this->mailTo = $mailTo;
  }

}
