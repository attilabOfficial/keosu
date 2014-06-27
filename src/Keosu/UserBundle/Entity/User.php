<?php
// src/Keosu/UserBundle/Entity/User.php

namespace Keosu\UserBundle\Entity;
use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class User extends BaseUser {
	/**
	 * @ORM\Id
	 * @ORM\Column(type="integer")
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	protected $id;
	
	/**
	 * @var string
	 * possible value are keosu, facebook and google
	 * @ORM\Column(name="accountType", type="string", length=255)
	 */
	private $accountType;

	public function __construct() {
		parent::__construct();
		// your own logic
	}
	
	/**
	 * We only allow the user to user an email adress
	 * @see https://stackoverflow.com/questions/10314932/fosuserbundle-login-with-email-symfony2
	 */
	public function setEmail($email)
	{
		$this->setUsername($email);
		return parent::setEmail($email);
	}
	
	public function setAccountType($accountType) {
		$this->accountType = $accountType;
		return $this;
	}
	
	public function getAccountType() {
		return $this->accountType;
	}

}

?>
