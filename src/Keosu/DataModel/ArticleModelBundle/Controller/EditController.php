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

namespace Keosu\DataModel\ArticleModelBundle\Controller;
use Keosu\DataModel\ArticleModelBundle\Form\ArticleAttachmentType;

use Keosu\DataModel\ArticleModelBundle\Entity\ArticleBody;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


/**
 * Controller to edit an article
 * @author vleborgne
 *
 */
class EditController extends Controller {
	/**
	 * Delete action
	 */
	public function deleteAction($id) {
		$repo = $this->get('doctrine')->getManager()
				->getRepository(
						'KeosuDataModelArticleModelBundle:ArticleBody');

		$article = $repo->find($id);

		if ($article->getReader() === null || $article->getReader()->allowupdate !== false) {
			$this->get('doctrine')->getManager()->remove($article);
			$this->get('doctrine')->getManager()->flush();
		}
		return $this
				->redirect($this->generateUrl('keosu_article_viewlist'));
	}

	/**
	 * Edit article action
	 */
	public function editAction($id) {
		$repo = $this->get('doctrine')->getManager()
				->getRepository(
						'KeosuDataModelArticleModelBundle:ArticleBody');
		$article = $repo->find($id);

		return $this->editArticle($article);

	}
	/**
	 * Add article action
	 */
	public function addAction() {
		$article = new ArticleBody();
		$article->setIdext("0");
		$article->setVersion("1.0");
		return $this->editArticle($article);
	}
	/**
	 * Manage and store
	 */
	private function editArticle($article) {
		$formBuilder = $this->createFormBuilder($article);
		$this->buildArticleForm($formBuilder);
		$form = $formBuilder->getForm();
		//List of original attachment
		$originalAttachments = array();
		foreach ($article->getAttachments() as $attachment) $originalAttachments[] = $attachment;
		$request = $this->get('request');
		//If we are in POST method, form is submit
		if ($request->getMethod() == 'POST') {
			$form->bind($request);
			$em = $this->get('doctrine')->getManager();
			if ($form->isValid()) {
				//Identify attachments to delete
				foreach ($article->getAttachments() as $attachment) {
					foreach ($originalAttachments as $key => $toDel) {
						if ($toDel->getId() === $attachment->getId()) {
							unset($originalAttachments[$key]);
						}
					}
				}
				//Deleting attachment from article and database
				foreach ($originalAttachments as $attachment) {
					$attachment->getArticleBody()->removeAttachment($attachment);
					$em->remove($attachment);
				}
				
				$em->persist($article);
				$em->flush();
				return $this
						->redirect(
								$this
										->generateUrl(
												'keosu_article_viewlist'));
			}
		}
		return $this
				->render(
						'KeosuDataModelArticleModelBundle:Edit:edit.html.twig',
						array('form' => $form->createView(),
								'articleid' => $article->getId()));
	}
	/**
	 * Specific form
	 */
	private function buildArticleForm($formBuilder) {
		$formBuilder->add('title', 'text')
					->add('body', 'textarea', array(
							'attr' => array('class' => 'tinymce')
					))
					->add('author', 'text')
					->add('date', 'date', array(
							'input'  => 'datetime',
							'widget' => 'single_text',
							'format' => 'dd-MM-yy',
							'attr'   => array('class' => 'date')
					))
					->add('attachments', 'collection', array(
							'type'         => new ArticleAttachmentType(),
							'allow_add'    => true, 
							'allow_delete' => true,
							'by_reference' => false, 
							'required'     => false,
							'label'        => false
					))
					->add('enableComments','checkbox',array(
							'required' => false,
					));

	}
}
