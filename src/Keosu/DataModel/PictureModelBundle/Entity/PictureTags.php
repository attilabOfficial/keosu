<?php

namespace Keosu\DataModel\PictureModelBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PictureTags
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Keosu/DataModel\PictureModelBundle\Entity\PictureRepository")
 * @ORM\Table(name="PictureTags")
 */
class PictureTags
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

     /**
     * @ORM\ManyToOne(targetEntity="Keosu\DataModel\PictureModelBundle\Entity\Picture", inversedBy="tags", cascade={"remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $picture;

    /**
     * @var string
     *
     * @ORM\Column(name="tagName", type="string", length=255)
     * @ORM\JoinColumn(nullable=true)
	 * 
     */
    private $tagName;

    public function __construct() {
    $this->tagName = [];   
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * Set tagName.
     *
     * @param string $tagName
     * @return ArticlesTags
     */
    public function setTagName($tagName)
    {
        $this->tagName = $tagName;
    
        return $this;
    }

    /**
     * Get tagName.
     *
     * @return string
     */
    public function getTagName()
    {
        return $this->tagName;
    }

    public function setPicture($newPicture)
    {
        $this->picture = $newPicture;
    
        return $this;
    }

    public function getPicture()
    {
        return $this->picture;
    }

}

