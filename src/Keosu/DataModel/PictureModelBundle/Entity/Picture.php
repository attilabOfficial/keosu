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
namespace Keosu\DataModel\PictureModelBundle\Entity;
use Keosu\CoreBundle\Entity\Model\MediaDataModel;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Picture
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Keosu\DataModel\PictureModelBundle\Entity\PictureRepository")
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
    
    public function getDataModelObjectName() {
        return 'picture';
    }
}
