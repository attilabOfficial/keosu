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

namespace Keosu\DataModel\CommentModelBundle\Controller;

use Keosu\DataModel\CommentModelBundle\Entity\Comment;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Controller to edit an article
 * @author vleborgne
 *
 */
class EditController extends Controller {

	/**
	 * Delete comment action
	 */
	public function deleteAction($id) {
		$em = $this->get('doctrine')->getManager();
		$comment = $em->getRepository('KeosuDataModelCommentModelBundle:Comment')->find($id);

		if ($comment === null) {
			$em->remove($comment);
			$em->flush();
		}
		return $this>redirect($this->generateUrl('keosu_comment_viewlist'));
	}

	/**
	 * Edit comment action
	 */
	public function editAction($id) {
		$em = $this->get('doctrine')->getManager();
		$comment = $em->getRepository('KeosuDataModelCommentModelBundle:Comment')->find($id);
		return $this->editComment($comment);
	}

	/**
	 * Add comment action
	 */
	public function addAction() {
		$comment = new Comment();
		return $this->editComment($comment);
	}

	/**
	 * Manage and store
	 */
	private function editComment($comment) {

		$em = $this->get('doctrine')->getManager();
		$request = $this->get('request');

		$formBuilder = $this->createFormBuilder($comment);
		$this->buildCommentForm($formBuilder);
		$form = $formBuilder->getForm();

		if ($request->getMethod() == 'POST') {

			$form->bind($request);
			if ($form->isValid()) {
			
				// the comment is made by current user
				$comment->setUser($this->get('security.context')->getToken()->getUser());
				
				$em->persist($comment);
				$em->flush();
				return $this->redirect($this->generateUrl('keosu_comment_viewlist'));
			}
		}
		return $this->render('KeosuDataModelCommentModelBundle::edit.html.twig',array(
							'form' => $form->createView(),
							'commentid' => $comment->getId()));
	}

	/**
	 * Specific form
	 */
	private function buildCommentForm($formBuilder) {
		$formBuilder->add('message', 'textarea', array(
						'attr' => array('class' => 'tinymce')));

	}
}
