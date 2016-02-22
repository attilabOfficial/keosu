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

use Keosu\DataModel\QuizzModelBundle\Entity\Quizz;
use Keosu\DataModel\QuizzModelBundle\Form\QuizzQuestionType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


/**
 * Controller to edit an Quizz entry
 */
class EditController extends Controller {
	/**
	 * Delete quizz action
	 */
	public function deleteAction($id) {
		$em = $this->get('doctrine')->getManager();
		$repo = $em->getRepository('KeosuDataModelQuizzModelBundle:Quizz');

		$quizz = $repo->find($id);
		$em->remove($quizz);
		$em->flush();

		return $this->redirect($this->generateUrl('keosu_quizz_viewlist'));
	}

	/**
	 * Delete quizz results action
	 */
	public function deleteResultsAction($id) {
		$em = $this->get('doctrine')->getManager();
		$quizz = $em->getRepository('KeosuDataModelQuizzModelBundle:Quizz')->find($id);
		$results = $em->getRepository('KeosuDataModelQuizzModelBundle:QuizzResult')->findByQuizz($quizz);

		foreach($results as $result) {
			$em->remove($result);
		}
		$em->flush();

		return $this->redirect($this->generateUrl('keosu_quizz_results_viewlist', array('id' => $id)));
	}

	/**
	 * Delete quizz result action
	 */
	public function deleteResultAction($id) {
		$em = $this->get('doctrine')->getManager();
		$result = $em->getRepository('KeosuDataModelQuizzModelBundle:QuizzResult')->find($id);
		$quizz = $result->getQuizz();

		$em->remove($result);
		$em->flush();

		return $this->redirect($this->generateUrl('keosu_quizz_results_viewlist', array('id' => $quizz->getId())));
	}

	/**
	 * Edit quizz action
	 */
	public function editAction($id) {
		$em = $this->get('doctrine')->getManager();
		$repo = $em->getRepository('KeosuDataModelQuizzModelBundle:Quizz');

		$quizz = $repo->find($id);

		return $this->editQuizz($quizz);
	}
	/**
	 * Add quizz action
	 */
	public function addAction() {
		$quizz = new Quizz();
		return $this->editQuizz($quizz);
	}
	/**
	 * Manage and store quizz
	 */
	private function editQuizz($quizz) {

		$em = $this->get('doctrine')->getManager();

		$formBuilder = $this->createFormBuilder($quizz);
		$this->buildQuizzForm($formBuilder);
		$form = $formBuilder->getForm();

		$request = $this->get('request');
		//If we are in POST method, form is submit
		if ($request->getMethod() == 'POST') {
			$form->bind($request);
			if ($form->isValid()) {
				foreach ($quizz->getQuestions() as $question) {
					$question->setQuizz($quizz);
					foreach($question->getAnswers() as $answer) {
						$answer->setQuestion($question);
					}
				}
				$em->persist($quizz);
				$em->flush();
				return $this->redirect($this->generateUrl('keosu_quizz_viewlist'));
			}
		}
		return $this->render('KeosuDataModelQuizzModelBundle:Edit:edit.html.twig',
			array(
				'form' => $form->createView()
			)
		);
	}
	/**
	 * Specific form
	 */
	private function buildQuizzForm($formBuilder) {
		$formBuilder
			->add('title', 'text')
			->add('questions', 'collection', array(
				'type'         => new QuizzQuestionType(),
				'allow_add'    => true,
				'allow_delete' => true,
				'by_reference' => false,
				'required'     => true,
				'label'        => false
			))
		;
	}
}
