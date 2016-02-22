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
namespace Keosu\DataModel\QuizzModelBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Keosu\DataModel\QuizzModelBundle\Entity\QuizzQuestion;

/**
 * Keosu\DataModel\QuizzModelBundle\Entity\QuizzAnswer
 *
 * @ORM\Table()
 * @ORM\Entity()
 */
class QuizzAnswer {

	const PREDEFINED = 'predefined';
	const FREE_TEXT  = 'freeText';

	/**
	 * @var integer $id
	 *
	 * @ORM\Column(name="id", type="integer")
	 * @ORM\Id
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	private $id;

	/**
	 * @var string $type
	 *
	 * @ORM\Column(name="type", type="string", length=12, nullable=false)
	 */
	private $type;

	/**
	 * @var string $text
	 *
	 * @ORM\Column(name="text", type="string", length=255, nullable=true)
	 */
	private $text;

	/**
	 * @var QuizzQuestion $question
	 *
	 * @ORM\ManyToOne(targetEntity="QuizzQuestion", inversedBy="answers")
	 * @ORM\JoinColumn(name="questionId", referencedColumnName="id", nullable=false)
	 */
	private $question;

	/**
	 * Get id
	 *
	 * @return integer 
	 */
	public function getId() {
		return $this->id;
	}

	/**
	 * Get type
	 *
	 * @return string
	 */
	public function getType() {
		return $this->type;
	}

	/**
	 * Set type
	 *
	 * @param string $type
	 */
	public function setType($type) {
		$this->type = $type;
	}

	/**
	 * Set text
	 *
	 * @param string $text

	 */
	public function setText($text) {
		$this->text = $text;
	}

	/**
	 * Get text
	 *
	 * @return string 
	 */
	public function getText() {
		return $this->text;
	}

	/**
	 * Get question
	 *
	 * @return QuizzQuestion
	 */
	public function getQuestion() {
		return $this->question;
	}

	/**
	 * Set question
	 *
	 * @param QuizzQuestion $question
	 */
	public function setQuestion($question) {
		$this->question = $question;
	}

}
