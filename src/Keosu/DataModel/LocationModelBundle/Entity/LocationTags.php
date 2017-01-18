<?php

namespace Keosu\DataModel\LocationModelBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LocationTags
 *
 * @ORM\Table()
 * @ORM\Entity
 * @ORM\Table(name="LocationTags")
 */
class LocationTags
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
     * @ORM\ManyToOne(targetEntity="Keosu\DataModel\LocationModelBundle\Entity\Location", inversedBy="tags", cascade={"remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $Location;
    
    /**
     * @var string
     *
     * @ORM\Column(name="tagName", type="string", length=255)
     * @ORM\JoinColumn(nullable=false)
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
     * Set Location
     *
     * @param Keosu\DataModel\LocationModelBundle\Entity\Location $Location
     * @return LocationTags
     */

    public function setLocation(
            \Keosu\DataModel\LocationModelBundle\Entity\Location $newLocation) {
        $this->Location = $newLocation;
    
        return $this;
    }
    
    /**
     * Get Location
     *
     * @return Keosu\DataModel\LocationModelBundle\Entity\Location
     */
    public function getLocation() {
        return $this->Location;
    }

    /**
     * Set tagName.
     *
     * @param string $tagName
     * @return LocationTags
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
}

