<?php

namespace Keosu\Gadget\PictureGadgetBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PictureTags
 *
 * @ORM\Table()
 * @ORM\Entity
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
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
}

