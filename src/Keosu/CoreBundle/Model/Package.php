<?php

namespace Keosu\CoreBundle\Model;

/**
 * Package
 */
class Package
{

    private $path;

    private $name;

    private $version;

    private $type;

    /**
     * Contructor of package
     * @param string $name name of the package
     * @param string $type type of the package
     * @param string $version version of the package
     * @param string $path path of the package
     */
    public function __construct($name,$type,$version,$path)
    {
        $this->name = $name;
        $this->type = $type;
        $this->version = $version;
        $this->path = $path;
    }


    /**
     * Set path
     *
     * @param string $path
     * @return Package
     */
    public function setPath($path)
    {
        $this->path = $path;
    
        return $this;
    }

    /**
     * Get path
     *
     * @return string 
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Package
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
     * Set version
     *
     * @param string $version
     * @return Package
     */
    public function setVersion($version)
    {
        $this->version = $version;
    
        return $this;
    }

    /**
     * Get version
     *
     * @return string 
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Set type
     *
     * @param string $type
     * @return Package
     */
    public function setType($type)
    {
        $this->type = $type;
    
        return $this;
    }

    /**
     * Get type
     *
     * @return string 
     */
    public function getType()
    {
        return $this->type;
    }
}
