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
use Keosu\CoreBundle\Entity\Model\DataModel;

use Doctrine\ORM\Mapping as ORM;

/**
 * Keosu\DataModel\ArticleModelBundle\Entity\ArticleBody
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Keosu\DataModel\ArticleModelBundle\Entity\ArticleBodyRepository")
 * @ORM\Table(name="ArticleBody")
 */
class ArticleBody extends DataModel {

	/**
	 * @var string $idext
	 *
	 * @ORM\Column(name="idext", type="string", length=255)
	 */
	private $idext;

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
	 * @ORM\OneToMany(targetEntity="Keosu\DataModel\ArticleModelBundle\Entity\ArticleTags", mappedBy="articleBody", cascade={"persist","remove"})
	 */
	private $tags;
	
	/**
	 * @ORM\Column(name="enableComments", type="boolean")
	 */
	private $enableComments;

	/**
	 * @var string
	 *
	 * @ORM\Column(name="shareUrl", type="string", length=255, nullable=true)
	 */
	private $shareUrl;

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

	/**
	 * Set shareUrl
	 *
	 * @param string $shareUrl
	 * @return ArticleBody
	 */
	public function setShareUrl($shareUrl)
	{
		$this->shareUrl = $shareUrl;

		return $this;
	}

	/**
	 * Get shareUrl
	 *
	 * @return string
	 */
	public function getShareUrl()
	{
		return $this->shareUrl;
	}

	/**
	 * Constructor
	 */
	public function __construct() {
		$this->attachments = new \Doctrine\Common\Collections\ArrayCollection();
		$this->tags = new \Doctrine\Common\Collections\ArrayCollection();
		$this->enableComments = false;
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

	/**
	 * @param mixed $attachments
	 */
	public function setAttachments($attachments)
	{
		$this->attachments = $attachments;
	}


	/**
	 * Add tags
	 *
	 * @param \Keosu\DataModel\ArticleModelBundle\Entity\ArticleTags $tags
	 * @return ArticleBody
	 */
	public function addTag(
		\Keosu\DataModel\ArticleModelBundle\Entity\ArticleTags $tags) {
		$this->tags[] = $tags;
		$tags->setArticleBody($this);

		return $this;
	}

	/**
	 * Remove tags
	 *
	 * @param \Keosu\DataModel\ArticleModelBundle\Entity\ArticleTags $tags
	 */
	public function removeTag(
		\Keosu\DataModel\ArticleModelBundle\Entity\ArticleTags $tag) {
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

	public function getDataModelObjectName() {
		return 'article';
	}

}
