<?php

namespace Keosu\DataModel\SearchModelBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Search
 *
 * @ORM\Table()
 * @ORM\Entity
 * @ORM\Table(name="Search")
 */
class Search
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
     * @var keyValue
     *
     * @ORM\Column(name="keyValue", type="string", length=255)
     */
    private $keyValue;

	/**
	 * @ORM\Column(name="target", type="integer")
	 */
	private $target;

	/**
	 * @var targetName
	 *
	 * @ORM\Column(name="targetName", type="string", length=255)
	 */
	private $targetName;

	/**
	 * @var int $appId
	 *
	 * @ORM\Column(name="appId", type="integer")
	 */
	private $appId;


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
     * Set key
     *
     * @param key $string
     *
     * @return Search
     */
    public function setKeyValue($key)
    {
        $this->keyValue = $key;

        return $this;
    }

    /**
     * Get key
     *
     * @return string
     */
    public function getKeyValue()
    {
        return $this->keyValue;
    }
	/**
	 * Set Target
	 *
	 * @param target $target
	 *
	 * @return Search
	 */
	public function setTarget($target)
	{
		$this->target = $target;

		return $this;
	}

	/**
	 * Get key
	 *
	 * @return string
	 */
	public function getTarget()
	{
		return $this->target;
	}
	/**
	 * Set Target
	 *
	 * @param target $target
	 *
	 * @return Search
	 */
	public function setTargetName($target)
	{
		$this->targetName = $target;

		return $this;
	}

	/**
	 * Get key
	 *
	 * @return string
	 */
	public function getTargetName()
	{
		return $this->targetName;
	}

	public function setAppId($id) {
		$this->appId = $id;
		return $this;
	}
	public function getAppId() {
		return $this->appId;
	}
}

