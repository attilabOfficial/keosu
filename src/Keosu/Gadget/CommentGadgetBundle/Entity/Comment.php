<?php

namespace Keosu\Gadget\CommentGadgetBundle\Entity;

use Keosu\CoreBundle\Entity\Model\DataModel;
use Keosu\UserBundle\Entity\User;

use Doctrine\ORM\Mapping as ORM;

/**
 * Keosu\DataModel\CommentModelBundle\Entity\Comment
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Keosu\Gadget\CommentGadgetBundle\Entity\CommentRepository")
 * @ORM\Table(name="Comment")
 */
class Comment extends DataModel
{
    /**
     * @var string
     *
     * @ORM\Column(name="message", type="text")
     */
    private $message;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;

    /**
     * @var integer
     *
     * @ORM\Column(name="idDataModel", unique=false, type="integer")
     **/
    private $idDataModel;
    
    /**
     * @var string
     *
     * @ORM\Column(name="dataModelObject", type="string", length=255)
     */
    private $dataModelObject;
    
    /**
     * @ORM\ManyToOne(targetEntity="Keosu\UserBundle\Entity\User")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    private $user;
    
    public function __construct() {
        // set default date to now
        $this->setDate(new \DateTime());
    }

    /**
     * Set message
     *
     * @param string $message
     * @return Comment
     */
    public function setMessage($message)
    {
        $this->message = $message;
    
        return $this;
    }

    /**
     * Get message
     *
     * @return string 
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return Comment
     */
    public function setDate($date)
    {
        $this->date = $date;
    
        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }
    
    /**
     * Set idDataModel
     *
     * @param integer $idDataModel
     * @return Comment
     */
    public function setIdDataModel($idDataModel)
    {
        $this->idDataModel = $idDataModel;
    
        return $this;
    }

    /**
     * Get idDataModel
     *
     * @return integer 
     */
    public function getIdDataModel()
    {
        return $this->idDataModel;
    }
    
    /**
     * Set dataModelObject
     *
     * @param string $dataModelObject
     * @return Comment
     */
    public function setDataModelObject($dataModelObject)
    {
        $this->dataModelObject = $dataModelObject;
    
        return $this;
    }

    /**
     * Get dataModelObject
     *
     * @return string 
     */
    public function getDataModelObject()
    {
        return $this->dataModelObject;
    }
    
        /**
     * Set user
     *
     * @param User $user
     * @return Comment
     */
    public function setUser(User $user)
    {
        $this->user = $user;
        return $this;
    }

    /**
     * Get user
     *
     * @return User
     */
    public function getUser()
    {
        return $this->user;
    }
    
    public function getDataModelObjectName() {
        return "Comment";
    }
}
