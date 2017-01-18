<?php

namespace Keosu\Gadget\PushNotificationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Devices
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Keosu\Gadget\PushNotificationBundle\Entity\DevicesRepository")
 * @ORM\Table(name="Devices")
 */
class Devices
{
    const TYPE_APPLE = 1;
    const TYPE_ANDROID = 2;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="type", type="integer")
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="token", type="text")
     */
    private $token;


    /**
     * Get id.
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set type.
     *
     * @param integer $type
     *
     * @return Devices
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type.
     *
     * @return integer
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set token.
     *
     * @param string $token
     *
     * @return Devices
     */
    public function setToken($token)
    {
        $this->token = $token;

        return $this;
    }

    /**
     * Get token.
     *
     * @return string
     */
    public function getToken()
    {
        return $this->token;
    }
}

