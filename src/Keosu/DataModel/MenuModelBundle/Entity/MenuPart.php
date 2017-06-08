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

use Doctrine\ORM\Mapping as ORM;
use Keosu\CoreBundle\Entity\Model\DataModel;
use Keosu\CoreBundle\Util\PathUtil;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Table()
 * @ORM\Entity
 * @ORM\Table(name="MenuPart")
 */
class MenuPart extends DataModel{

	/**
	 * @var string $name
	 * @ORM\Column(name="name", type="string", length=255)
	 * @Assert\NotNull()
	 *
	 */
	private $name;

	/**
	 * @var string $css
	 *
	 * @ORM\Column(name="css", type="string", length=255, nullable=true)
	 */
	private $css;

	/**
	 * @ORM\ManyToOne(targetEntity="Keosu\DataModel\MenuModelBundle\Entity\MenuEntry", inversedBy="parts")
	 * @ORM\JoinColumn(nullable=false)
	 */
	private $menuEntry;

	/**
	 * Target page
	 * @ORM\Column(name="target", type="integer", nullable=true)
	 */
	private $target;

	/**
	 * Target page
	 * @ORM\Column(name="externalLink", type="string", length=255, nullable=true)
	 */
	private $externalLink;

	/**
	 * Target page
	 * @ORM\Column(name="isExternal", type="boolean", nullable=true)
	 */
	private $isExternal;

	/**
	 * @var string $path
	 *
	 * @ORM\Column(name="path", type="string", length=255, nullable=true)
	 */
	private $path;

	/**
	 * @Assert\Image(
	 *     minWidth = 64,
	 *     maxWidth = 1024,
	 *     minHeight = 64,
	 *     maxHeight = 1024
	 * )
	 */
	private $file;
	/**
	 * @var string $path
	 *
	 * @ORM\Column(name="pathActive", type="string", length=255, nullable=true)
	 */
	private $pathActive;

	/**
	 * @Assert\Image(
	 *     minWidth = 64,
	 *     maxWidth = 1024,
	 *     minHeight = 64,
	 *     maxHeight = 1024
	 * )
	 */
	private $fileActive;


	/**
	 * Set path
	 *
	 * @param string $path
	 * @return ArticleAttachment
	 */
	public function setPath($path) {
		$this->path=$path;
		return $this;
	}
	public function setPathActive($path) {
		$this->pathActive=$path;
		return $this;
	}

	/**
	 * Get path
	 *
	 * @return string
	 */
	public function getPath() {
		return $this->path;
	}
	public function getPathActive() {
		return $this->pathActive;
	}

	public function getAbsolutePath() {
		return null === $this->path ? null
			: PathUtil::getRootDir() . '/' . $this->path;
	}
	public function getAbsolutePathActive() {
		return null === $this->pathActive ? null
			: PathUtil::getRootDir() . '/' . $this->pathActive;
	}

	public function getWebPath() {
		return null === $this->path ? null
			: '/' . $this->getUploadDir() . '/' . $this->path;
	}
	public function getWebPathActive() {
		return null === $this->pathActive ? null
			: '/' . $this->getUploadDir() . '/' . $this->pathActive;
	}

	public function getUploadRootDir() {
		return PathUtil::getRootDir() . $this->getUploadDir();
	}

	protected function getUploadDir() {
		return 'uploads/documents';
	}

	/**
	 * Move temp file to upload dir and save it in database
	 * @param unknown $file
	 */
	public function setFile($file) {
		$time = time();
		$this->path = $time."_".$file->getClientOriginalName();
		$file->move($this->getUploadRootDir(), $time."_".$file->getClientOriginalName());
	}

	public function getFile() {
		return $this->file;
	}
	public function setFileActive($fileActive) {
		$time = time();
		$this->pathActive = $time."_".$fileActive->getClientOriginalName();
		$fileActive->move($this->getUploadRootDir(), $time."_".$fileActive->getClientOriginalName());
	}

	public function getFileActive() {
		return $this->fileActive;
	}


	/**
	 * @param mixed $menuEntry
	 */
	public function setMenuEntry($menuEntry)
	{
		$this->menuEntry = $menuEntry;
	}

	/**
	 * @return mixed
	 */
	public function getMenuEntry()
	{
		return $this->menuEntry;
	}

	/**
	 * @param string $name
	 */
	public function setName($name)
	{
		$this->name = $name;
	}

	/**
	 * @return string
	 */
	public function getName()
	{
		return $this->name;
	}

	/**
	 * @param mixed $target
	 */
	public function setTarget($target)
	{
		$this->target = $target;
	}

	/**
	 * @return mixed
	 */
	public function getTarget()
	{
		return $this->target;
	}

	/**
	 * @param string $css
	 */
	public function setCss($css)
	{
		$this->css = $css;
	}

	/**
	 * @return string
	 */
	public function getCss()
	{
		return $this->css;
	}

	/**
	 * @return mixed
	 */
	public function getExternalLink()
	{
		return $this->externalLink;
	}

	/**
	 * @param mixed $externalLink
	 */
	public function setExternalLink($externalLink)
	{
		$this->externalLink = $externalLink;
	}


	public function getDataModelObjectName() {
		return "menu-part";
	}

	/**
	 * @return mixed
	 */
	public function getIsExternal()
	{
		return $this->isExternal;
	}

	/**
	 * @param mixed $isExternal
	 */
	public function setIsExternal($isExternal)
	{
		$this->isExternal = $isExternal;
	}

}
