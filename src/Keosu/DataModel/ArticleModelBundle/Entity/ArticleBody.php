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

namespace Keosu\DataModel\ArticleModelBundle\Entity;
use Keosu\CoreBundle\Entity\Model\DataModel;

use Doctrine\ORM\Mapping as ORM;

/**
 * Keosu\DataModel\ArticleModelBundle\Entity\ArticleBody
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Keosu\DataModel\ArticleModelBundle\Entity\ArticleBodyRepository")
 */
class ArticleBody extends DataModel {
	/**
	 * @var integer $id
	 *
	 * @ORM\Column(name="id", type="integer")
	 * @ORM\Id
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	private $id;

	/**
	 * @var string $idext
	 *
	 * @ORM\Column(name="idext", type="string", length=255)
	 */
	private $idext;

	/**
	 * @var int $likes
	 *
	 * @ORM\Column(name="likes", type="integer", nullable=true)
	 */
	private $likes;

	/**
	 * @var string $title
	 *
	 * @ORM\Column(name="title", type="string", length=255)
	 */
	private $title;

	/**
	 * @var string $body
	 *
	 * @ORM\Column(name="body", type="text", nullable=true)
	 */
	private $body;

	/**
	 * @var string $author
	 *
	 * @ORM\Column(name="author", type="string", length=255)
	 */
	private $author;

	/**
	 * @var \DateTime $date
	 *
	 * @ORM\Column(name="date", type="datetime")
	 */
	private $date;

	/**
	 * @var float $version
	 *
	 * @ORM\Column(name="version", type="float")
	 */
	private $version;

	/**
	 * @ORM\OneToMany(targetEntity="Keosu\DataModel\ArticleModelBundle\Entity\ArticleAttachment", mappedBy="articleBody", cascade={"persist","remove"})
	 */
	private $attachments;

	/**
	 * Get id
	 *
	 * @return integer 
	 */
	public function getId() {
		return $this->id;
	}

	/**
	 * Set title
	 *
	 * @param string $title
	 * @return ArticleBody
	 */
	public function setTitle($title) {
		$this->title = $title;

		return $this;
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

	/**
	 * Set idext
	 *
	 * @param string $idext
	 * @return ArticleBody
	 */
	public function setLikes($likes) {
		$this->likes = $likes;

		return $this;
	}
	/**
	 * Get likes
	 *
	 * @return string
	 */
	public function getLikes() {
		return $this->likes;
	}

	/**
	 * Get title
	 *
	 * @return string 
	 */
	public function getTitle() {
		return $this->title;
	}

	/**
	 * Set body
	 *
	 * @param string $body
	 * @return ArticleBody
	 */
	public function setBody($body) {
		$body=str_replace("'", "&rsquo;", $body);
		$this->body = $body;

		return $this;
	}

	/**
	 * Get body
	 *
	 * @return string 
	 */
	public function getBody() {
		return $this->body;
	}

	/**
	 * Set author
	 *
	 * @param string $author
	 * @return ArticleBody
	 */
	public function setAuthor($author) {
		$this->author = $author;

		return $this;
	}

	/**
	 * Get author
	 *
	 * @return string 
	 */
	public function getAuthor() {
		return $this->author;
	}


	/**
	 * Set date
	 *
	 * @param \DateTime $date
	 * @return ArticleBody
	 */
	public function setDate($date) {
		$this->date = $date;

		return $this;
	}

	/**
	 * Get date
	 *
	 * @return \DateTime 
	 */
	public function getDate() {
		return $this->date;
	}

	/**
	 * Set version
	 *
	 * @param float $version
	 * @return ArticleBody
	 */
	public function setVersion($version) {
		$this->version = $version;

		return $this;
	}

	/**
	 * Get version
	 *
	 * @return float 
	 */
	public function getVersion() {
		return $this->version;
	}
	/**
	 * Constructor
	 */
	public function __construct() {
		$this->attachments = new \Doctrine\Common\Collections\ArrayCollection();
	}

	/**
	 * Add attachments
	 *
	 * @param Keosu\DataModel\ArticleModelBundle\Entity\ArticleAttachment $attachments
	 * @return ArticleBody
	 */
	public function addAttachment(
			\Keosu\DataModel\ArticleModelBundle\Entity\ArticleAttachment $attachments) {
		$this->attachments[] = $attachments;
		$attachments->setArticleBody($this);

		return $this;
	}

	/**
	 * Remove attachments
	 *
	 * @param Keosu\DataModel\ArticleModelBundle\Entity\ArticleAttachment $attachments
	 */
	public function removeAttachment(
			\Keosu\DataModel\ArticleModelBundle\Entity\ArticleAttachment $attachment) {
		$this->attachments->removeElement($attachment);
	}

	/**
	 * Get attachments
	 *
	 * @return Doctrine\Common\Collections\Collection 
	 */
	public function getAttachments() {
		return $this->attachments;
	}
}
