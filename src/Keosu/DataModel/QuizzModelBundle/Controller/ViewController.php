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

namespace Keosu\DataModel\QuizzModelBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Keosu\DataModel\QuizzModelBundle\Entity\QuizzQuestion;
use Keosu\DataModel\QuizzModelBundle\Entity\QuizzAnswer;

/**
 * Controller to view edit quizz entry
 */
class ViewController extends Controller {

	public function viewAction() {
		$em = $this->get('doctrine')->getManager();
		$repo = $em->getRepository('KeosuDataModelQuizzModelBundle:Quizz');
		$quizzes = $repo->findAll();
		return $this->render('KeosuDataModelQuizzModelBundle:View:view.html.twig',
			array('quizzes' => $quizzes)
		);
	}

	public function viewResultsAction($id) {
		$em = $this->get('doctrine')->getManager();
		$quizz = $em->getRepository('KeosuDataModelQuizzModelBundle:Quizz')->find($id);
		$results = $em->getRepository('KeosuDataModelQuizzModelBundle:QuizzResult')->findByQuizz($quizz);

		return $this->render('KeosuDataModelQuizzModelBundle:View:viewResults.html.twig',
			array(
				'quizz' => $quizz,
				'results' => $results
			)
		);
	}

	public function viewResultAction($id) {
		$em = $this->get('doctrine')->getManager();
		$result = $em->getRepository('KeosuDataModelQuizzModelBundle:QuizzResult')->find($id);
		$questions = $result->getQuizz()->getQuestions();
		$responses = $result->getResponses();
		$displayResults = array();

		for ($i = 0; $i < $questions->count(); $i++) {
			$question = $questions->get($i);
			$questionResult = array(
				'question' => $question
			);
			if ($question->getType() === QuizzQuestion::FREE_TEXT) {
				$questionResult['userText'] = $responses[$i]['userText'];
			} elseif ($question->getType() === QuizzQuestion::SINGLE_CHOICE) {
				$questionResult['answers'] = $this->getSingleChoiceResult($question->getAnswers(), $responses[$i]);
			} else {
				$questionResult['answers'] = $this->getMultipleChoiceResult($question->getAnswers(), $responses[$i]);;
			}
			$displayResults[] = $questionResult;
		}

		return $this->render('KeosuDataModelQuizzModelBundle:View:viewResult.html.twig',
			array(
				'results' => $displayResults,
				'quizz' => $result->getQuizz(),
				'date' => $result->getDate()
			)
		);
	}

	private function getSingleChoiceResult($answers, $response){
		$answersResult = array();
		foreach ($answers as $answer) {
			$answerResult = array(
				'answer' => $answer
			);
			if ($answer->getId() == $response['selectedAnswer']) {
				$answerResult['selected'] = true;
				if ($answer->getType() == QuizzAnswer::FREE_TEXT) {
					$answerResult['userText'] = $response['userText'];
				}
			} else {
				$answerResult['selected'] = false;
			}
			$answersResult[] = $answerResult;
		}
		return $answersResult;
	}

	private function getMultipleChoiceResult($answers, $response) {
		$answersResult = array();
		foreach ($answers as $answer) {
			$answerResult = array(
				'answer' => $answer
			);
			if ($this->isSelected($answer->getId(), $response['selectedAnswers'])) {
				$answerResult['selected'] = true;
				if ($answer->getType() == QuizzAnswer::FREE_TEXT) {
					$answerResult['userText'] = $this->getUserText($answer->getId(), $response['selectedAnswers']);
				}
			} else {
				$answerResult['selected'] = false;
			}
			$answersResult[] = $answerResult;
		}
		return $answersResult;
	}

	private function isSelected($answerId, $selectedAnswers) {
		foreach($selectedAnswers as $answer) {
			if ($answer['answer'] == $answerId) {
				return true;
			}
		}
		return false;
	}

	private function getUserText($answerId, $selectedAnswers) {
		foreach($selectedAnswers as $answer) {
			if ($answer['answer'] == $answerId) {
				return $answer['userText'];
			}
		}
		return null;
	}

}
