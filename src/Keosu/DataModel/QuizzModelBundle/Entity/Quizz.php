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
use Keosu\CoreBundle\Entity\Model\DataModel;
use Keosu\DataModel\QuizzModelBundle\Entity\QuizzQuestion;


/**
 * Keosu\DataModel\QuizzModelBundle\Entity\Quizz
 *
 * @ORM\Table()
 * @ORM\Entity()
 */
class Quizz extends DataModel {

	/**
	 * @var string $title
	 *
	 * @ORM\Column(name="title", type="string", length=255)
	 */
	private $title;

	/**
	 * @var ArrayCollection $questions
	 *
	 * @ORM\OneToMany(targetEntity="QuizzQuestion", mappedBy="quizz", cascade={"persist", "remove"}, orphanRemoval=true)
	 */
	private $questions;

	/**
	 * @var ArrayCollection $results
	 *
	 * @ORM\OneToMany(targetEntity="QuizzResult", mappedBy="quizz", cascade={"persist", "remove"}, orphanRemoval=true)
	 */
	private $results;

	/**
	 * Constructor
	 */
	public function __construct() {
		$this->questions = new ArrayCollection();
		$this->results = new ArrayCollection();
	}

	/**
	 * Set title
	 *
	 * @param string $title
	 */
	public function setTitle($title) {
		$this->title = $title;
	}

	/**
	 * Get title
	 *
	 * @return string 
	 */
	public function getTitle() {
		return $this->title;
	}

	/**
	 * Get questions
	 *
	 * @return ArrayCollection
	 */
	public function getQuestions() {
		return $this->questions;
	}

	/**
	 * Set questions
	 *
	 * @param ArrayCollection $questions
	 */
	public function setQuestions($questions) {
		$this->questions = $questions;
	}

	/**
	 * Add a question
	 *
	 * @param QuizzQuestion $question
	 */
	public function addQuestion($question) {
		$this->questions->add($question);
	}

	/**
	 * Remove a question
	 *
	 * @param QuizzQuestion $question
	 */
	public function removeQuestion($question) {
		$this->questions->removeElement($question);
	}

	/**
	 * Get results
	 *
	 * @return ArrayCollection
	 */
	public function getResults() {
		return $this->results;
	}

	/**
	 * Set results
	 *
	 * @param ArrayCollection $results
	 */
	public function setResults($results) {
		$this->results = $results;
	}

	/**
	 * Add a result
	 *
	 * @param QuizzResult $result
	 */
	public function addResult($result) {
		$this->results->add($result);
	}

	/**
	 * Remove a result
	 *
	 * @param QuizzResult $result
	 */
	public function removeResult($result) {
		$this->results->removeElement($result);
	}

	public function getDataModelObjectName() {
		return 'quizz';
	}

}
