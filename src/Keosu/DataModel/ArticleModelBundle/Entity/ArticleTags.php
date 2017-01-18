<?php
/************************************************************************
 Keosu is an open source CMS for mobile app
Copyright (C) 2016  Pockeit

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
namespace Keosu\DataModel\ArticleModelBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ArticleTags
 *
 * @ORM\Table()
 * @ORM\Entity
 * @ORM\Table(name="ArticleTags")
 */
class ArticleTags
{

	/**
	 * @var integer $id
	 *
	 * @ORM\Column(name="id", type="integer")
	 * @ORM\Id
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	private $id;
	
	/**
	 * @ORM\ManyToOne(targetEntity="Keosu\DataModel\ArticleModelBundle\Entity\ArticleBody", inversedBy="tags", cascade={"remove"})
	 * @ORM\JoinColumn(nullable=false)
	 */
	private $articleBody;
	
	/**
	 * @var string
	 *
	 * @ORM\Column(name="tagName", type="string", length=255)
	 * @ORM\JoinColumn(nullable=false)
	 */
	private $tagName;
	
	/**
	 * Get id.
	 *
	 * @return integer
	 */
	public function getID()
	{
		return $this->id;
	}
	
	/**
	 * Set articleBody
	 *
	 * @param Keosu\DataModel\ArticleModelBundle\Entity\ArticleBody $articleBody
	 * @return ArticleAttachment
	 */
	public function setArticleBody(
			\Keosu\DataModel\ArticleModelBundle\Entity\ArticleBody $articleBody) {
		$this->articleBody = $articleBody;
	
		return $this;
	}
	
	/**
	 * Get articleBody
	 *
	 * @return Keosu\DataModel\ArticleModelBundle\Entity\ArticleBody
	 */
	public function getArticleBody() {
		return $this->articleBody;
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
}
