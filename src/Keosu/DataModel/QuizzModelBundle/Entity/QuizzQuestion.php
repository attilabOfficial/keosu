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
use Doctrine\Common\Collections\ArrayCollection;
use Keosu\DataModel\QuizzModelBundle\Entity\Quizz;
use Keosu\DataModel\QuizzModelBundle\Entity\QuizzAnswer;

/**
 * Keosu\DataModel\QuizzModelBundle\Entity\QuizzQuestion
 *
 * @ORM\Table()
 * @ORM\Entity()
 */
class QuizzQuestion {

	const SINGLE_CHOICE = 'singleChoice';
	const MULTIPLE_CHOICE = 'multipleChoice';
	const FREE_TEXT = 'freeText';

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
	 * @ORM\Column(name="type", type="string", length=15, nullable=false)
	 */
	private $type;

	/**
	 * @var string $text
	 *
	 * @ORM\Column(name="text", type="string", length=255, nullable=false)
	 */
	private $text;

	/**
	 * @var string $quizz
	 *
	 * @ORM\ManyToOne(targetEntity="Quizz", inversedBy="questions")
	 * @ORM\JoinColumn(name="quizzId", referencedColumnName="id", nullable=false)
	 */
	private $quizz;

	/**
	 * @var ArrayCollection $answers
	 *
	 * @ORM\OneToMany(targetEntity="QuizzAnswer", mappedBy="question", cascade={"persist", "remove"}, orphanRemoval=true)
	 */
	private $answers;

	/**
	 * Constructor
	 */
	public function __construct() {
		$this->answers = new ArrayCollection();
	}

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
	 * Get text
	 *
	 * @return string
	 */
	public function getText() {
		return $this->text;
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
	 * Get quizz
	 *
	 * @return Quizz
	 */
	public function getQuizz() {
		return $this->quizz;
	}

	/**
	 * Set quizz
	 *
	 * @param Quizz $quizz
	 */
	public function setQuizz($quizz) {
		$this->quizz = $quizz;
	}

	/**
	 * Get answers
	 *
	 * @return array
	 */
	public function getAnswers() {
		return $this->answers;
	}

	/**
	 * Set answers
	 *
	 * @param ArrayCollection $answers
	 * @return array
	 */
	public function setAnswers($answers) {
		return $this->answers = $answers;
	}

	/**
	 * Add an answer
	 *
	 * @param QuizzAnswer $answer
	 */
	public function addAnswer($answer) {
		$this->answers->add($answer);
	}

	/**
	 * Remove an answer
	 *
	 * @param QuizzAnswer $answer
	 */
	public function removeAnswer($answer) {
		$this->answers->removeElement($answer);
	}

}
