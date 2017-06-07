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
namespace Keosu\DataModel\PictureModelBundle\Entity;

use Keosu\CoreBundle\Entity\Model\MediaDataModel;
use Doctrine\ORM\Mapping as ORM;

/**
 * Picture
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Keosu\DataModel\PictureModelBundle\Entity\PictureRepository")
 * @ORM\Table(name="Picture")
 */
class Picture extends MediaDataModel
{
    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="idext", type="string", length=255)
     */
    private $idext;
    
    /**
     * @ORM\Column(name="enableComments", type="boolean")
     */
    private $enableComments;

    /**
     * @ORM\OneToMany(targetEntity="Keosu\DataModel\PictureModelBundle\Entity\PictureTags", mappedBy="picture", cascade={"persist","remove"})
     */
    private $tags;
    
    //By default remote is false
    public function __construct() {
    	$this->remote = false;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Picture
     */
    public function setName($name)
    {
        $this->name = $name;
    
        return $this;
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
     * Set description
     *
     * @param string $description
     * @return Picture
     */
    public function setDescription($description)
    {
        $this->description = $description;
    
        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set idext
     *
     * @param string $idext
     * @return Picture
     */
    public function setIdext($idext)
    {
        $this->idext = $idext;
    
        return $this;
    }

    /**
     * Get idext
     *
     * @return string 
     */
    public function getIdext()
    {
        return $this->idext;
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
     * @return Picture
     */
    public function setEnableComments($enableComments) {
        $this->enableComments = $enableComments;

        return $this;
    }

    public function getDataModelObjectName() {
        return 'picture';
    }

    /**
     * Add tags
     *
     * @param \Keosu\DataModel\PictureModelBundle\Entity\PictureTags $tags
     * @return Picture
     */
    public function addTag(\Keosu\DataModel\PictureModelBundle\Entity\PictureTags $tags) {
        $this->tags[] = $tags;
        $tags->setPicture($this);
    
        return $this;
    }
    
    /**
     * Remove tags
     *
     * @param \Keosu\DataModel\PictureModelBundle\Entity\PictureTags $tags
     */
    public function removeTag( \Keosu\DataModel\PictureModelBundle\Entity\PictureTags $tag) {
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
