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
use Keosu\UserBundle\Entity\User;
use Keosu\DataModel\QuizzModelBundle\Entity\Quizz;

/**
 * Keosu\DataModel\QuizzModelBundle\Entity\QuizzResult
 *
 * @ORM\Table()
 * @ORM\Entity()
 */
class QuizzResult {

	/**
	 * @var integer $id
	 *
	 * @ORM\Column(name="id", type="integer")
	 * @ORM\Id
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	private $id;

	/**
	 * @var Quizz $quizz
	 *
	 * @ORM\ManyToOne(targetEntity="Quizz")
	 * @ORM\JoinColumn(name="quizzId", referencedColumnName="id")
	 */
	private $quizz;

	/**
	 * @var \DateTime
	 *
	 * @ORM\Column(name="date", type="datetime")
	 */
	private $date;

	/**
	 * @var array $responses
	 *
	 * @ORM\Column(name="responses", type="json_array")
	 */
	private $responses;

	/**
	 * Get id
	 *
	 * @return integer 
	 */
	public function getId() {
		return $this->id;
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
	 * Get quizz
	 *
	 * @return Quizz
	 */
	public function getQuizz() {
		return $this->quizz;
	}

	/**
	 * @return \DateTime
	 */
	public function getDate() {
		return $this->date;
	}

	/**
	 * @param \DateTime $date
	 */
	public function setDate($date) {
		$this->date = $date;
	}

	/**
	 * Set responses
	 *
	 * @param array $responses
	 */
	public function setResponses($responses) {
		$this->responses = $responses;
	}

	/**
	 * Get responses
	 *
	 * @return array
	 */
	public function getResponses() {
		return $this->responses;
	}

}
