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
use Keosu\CoreBundle\Util\TemplateUtil;

/**
 * Keosu\CoreBundle\Entity\Page
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Keosu\CoreBundle\Entity\PageRepository")
 * @ORM\Table(name="Page")
 */
class Page {

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
	 * @var string $isMain
	 *
	 * @ORM\Column(name="isMain", type="boolean")
	 */
	private $isMain;
	
	/**
	 * @var int $appId
	 *
	 * @ORM\Column(name="appId", type="integer")
	 */
	private $appId;

	/**
	 * @var string $templateId
	 *
	 * @ORM\Column(name="templateId", type="string", length=255)
	 */
	private $templateId;
	
	/**
	 * Set default data for the form.
	 */
	public function __construct(){
		$this->templateId = array_keys(TemplateUtil::getTemplateList())[0];
	}

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
	 * @return page name
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

	public function setIsMain($name) {
		$this->isMain = $name;
		return $this;
	}
	public function getIsMain() {
		return $this->isMain;
	}
	
	public function setAppId($id) {
		$this->appId = $id;
		return $this;
	}
	public function getAppId() {
		return $this->appId;
	}
	
	/**
	 * Set templateId
	 *
	 * @param string $templateId
	 * @return Page
	 */
	public function setTemplateId($templateId) {
		$this->templateId = $templateId;

		return $this;
	}

	/**
	 * Get templateId
	 *
	 * @return string 
	 */
	public function getTemplateId() {
		return $this->templateId;
	}
	
	/**
	 * Get formated Name
	 *
	 * @return string
	 */
	public function getFileName() {
		$fileName = $this->getId() . '.html';
		$fileName = str_replace(" ", "", $fileName);
		return $fileName;
	}

	public function __toString()
	{
		return $this->getName();
	}
}
