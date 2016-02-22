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
namespace Keosu\Gadget\QuizzGadgetBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Keosu\DataModel\QuizzModelBundle\Entity\QuizzResult;
use Symfony\Component\Validator\Constraints\DateTime;

/**
 * REST Service controller dedicated to the curent gadget
 */
class ServiceController extends Controller {

	public function viewOneAction($gadgetId) {
		$em = $this->get('doctrine')->getManager();
		$gadget = $em->getRepository('KeosuCoreBundle:Gadget')->find($gadgetId);
		$gadgetConfig = $gadget->getConfig();

		$quizz = $em->getRepository('KeosuDataModelQuizzModelBundle:Quizz')->find($gadgetConfig["quizz-id"]);
		$result = array(
				'id' => $quizz->getId(),
				'dataModelObjectName' => $quizz->getDataModelObjectName(),
				'title' => $quizz->getTitle(),
		);
		$questions = $quizz->getQuestions();
		if (count($questions) > 0){
			foreach ($questions as $q=>$question){
				$result['questions'][$q] =  array(
					'id' => $question->getId(),
					'type' => $question->getType(),
					'text' => $question->getText(),
				);
				foreach ($question->getAnswers() as $a=>$answer){
					$result['questions'][$q]['answers'][$a] =  array(
						'id' => $answer->getId(),
						'type' => $answer->getType(),
						'text' => $answer->getText(),
					);
				}
			}
		}
		return new JsonResponse($result);
	}

	public function submitAction($quizzId) {
		$em = $this->get('doctrine')->getManager();
		$quizz = $em->getRepository('KeosuDataModelQuizzModelBundle:Quizz')->find($quizzId);

		$result = new QuizzResult();
		$result->setQuizz($quizz);
		$result->setDate(new \DateTime('now'));
		$responses = json_decode($this->get('request')->request->get('responses'), true);
		$result->setResponses($responses);
		$em->persist($result);
		$em->flush();

		return new JsonResponse(array('success' => true));
	}
}

?>
