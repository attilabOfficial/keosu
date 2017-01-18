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

namespace Keosu\DataModel\ArticleModelBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Keosu\CoreBundle\Entity\Model\MediaDataModel;

/**
 * Keosu\DataModel\ArticleModelBundle\Entity\ArticleAttachment
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Keosu\DataModel\ArticleModelBundle\Entity\ArticleAttachmentRepository")
 * @ORM\Table(name="ArticleAttachment")
 */
class ArticleAttachment extends MediaDataModel{
	
	//By default remote is false
	public function __construct() {
		$this->remote = false;
	}

	/**
	 * @var string $name
	 *
	 * @ORM\Column(name="name", type="string", length=255)
	 */
	private $name;

	/**
	 * @var boolean $remote
	 * is the file store locally, if remote == true path is the full uri to get the file
	 *
	 * @ORM\Column(name="remote", type="boolean")
	 */
	private $remote;

	/**
	 * @ORM\ManyToOne(targetEntity="Keosu\DataModel\ArticleModelBundle\Entity\ArticleBody", inversedBy="attachments", cascade={"remove"})
	 * @ORM\JoinColumn(nullable=false)
	 */

	private $articleBody;

	/**
	 * @var string $idext
	 *
	 * @ORM\Column(name="idext", type="string", length=255, nullable=true)
	 */
	private $idext;

	/**
	 * Set name
	 *
	 * @param string $name
	 * @return ArticleAttachment
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

	public function setRemote($remote) {
		$this->remote = $remote;

		return $this;
	}
	public function getRemote() {
		return $this->remote;
	}

	/**
	 * Set articleBody
	 *
	 * @param Keosu\DataModel\ArticleModelBundle\Entity\ArticleBody $articleBody
	 * @return ArticleAttachment
	 */
	public function setArticleBody(
			\Keosu\DataModel\ArticleModelBundle\Entity\ArticleBody $articleBody) {
		$this->articleBody = $articleBody;

		return $this;
	}

	/**
	 * Get articleBody
	 *
	 * @return Keosu\DataModel\ArticleModelBundle\Entity\ArticleBody 
	 */
	public function getArticleBody() {
		return $this->articleBody;
	}

	/**
	 * Set idext
	 *
	 * @param string $idext
	 * @return ArticleBody
	 */
	public function setIdext($idext) {
		$this->idext = $idext;

		return $this;
	}
	/**
	 * Get idext
	 *
	 * @return string
	 */
	public function getIdext() {
		return $this->idext;
	}
	
	public function getDataModelObjectName() {
		return "articleattachment";
	}

}
