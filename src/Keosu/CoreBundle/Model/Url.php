<?php

namespace Keosu\CoreBundle\Model;

/**
 * Url
 */
class Url
{

    private $href;
    private $name;

    /**
     * Contructor of url
     * @param string $name name of the url
     * @param string $href href of the url
     */
    public function __construct($name,$href)
    {
        $this->name = $name;
        $this->href = $href;
    }


    /**
     * Set href
     *
     * @param string $href
     * @return Url
     */
    public function setHref($href)
    {
        $this->href = $href;
        return $this;
    }

    /**
     * Get href
     *
     * @return string 
     */
    public function getHref()
    {
        return $this->href;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Url
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
}
