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

namespace Keosu\DataModel\ArticleModelBundle\Controller;
use Keosu\DataModel\ArticleModelBundle\Form\ArticleAttachmentType;
use Keosu\DataModel\ArticleModelBundle\Form\ArticleTagsType;

use Keosu\DataModel\ArticleModelBundle\Entity\ArticleBody;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;

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
		$em = $this->get('doctrine')->getManager();
		$repo = $em->getRepository('KeosuDataModelArticleModelBundle:ArticleBody');

		$article = $repo->find($id);

		if ($article->getReader() === null || $article->getReader()->getAllowupdate() === false) {
			$em->remove($article);
			$em->flush();
		}
		return $this
			->redirect($this->generateUrl('keosu_article_viewlist'));
	}

	/**
	 * Edit article action
	 */
	public function editAction($id, Request $request) {
		$repo = $this->get('doctrine')->getManager()
			->getRepository(
				'KeosuDataModelArticleModelBundle:ArticleBody');
		$article = $repo->find($id);

		$listPict = $article->getAttachments();
		$article->setAttachments(new ArrayCollection());
		foreach($listPict as $attach){
			$article->addAttachment($attach);
		}

		$listTags = $article->getTags();
		$article->setTags(new ArrayCollection());
		foreach($listTags as $tag){
			$article->addTag($tag);
		}


		return $this->editArticle($article,  $request);

	}
	/**
	 * Add article action
	 */
	public function addAction(Request $request) {
		$article = new ArticleBody();
		$article->setIdext("0");
		$article->setVersion("1.0");
		return $this->editArticle($article, $request);
	}
	/**
	 * Manage and store
	 */
	private function editArticle($article, Request $request) {

		//Get tags list from database
		$em = $this->get('doctrine')->getManager();
		$query = $em->createQuery('SELECT DISTINCT u.tagName FROM Keosu\DataModel\ArticleModelBundle\Entity\ArticleTags u');
		$tagsResult = $query->getResult();
		$tagsList=array();
		foreach ($tagsResult as $tag){
			$tagsList[]=$tag['tagName'];
		}

		$formBuilder = $this->createFormBuilder($article);
		$this->buildArticleForm($formBuilder);
		$form = $formBuilder->getForm();
		//List of original attachment / tag
		$originalAttachments = array();
		$originalTags = array();
		foreach ($article->getAttachments() as $attachment) $originalAttachments[] = $attachment;
		foreach ($article->getTags() as $tag) $originalTags[] = $tag;

		$form->handleRequest($request);
		if ($form->isSubmitted() && $form->isValid()) {
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

				//Identify tags to delete
				foreach ($article->getTags() as $tag) {
					foreach ($originalTags as $key => $toDel) {
						if ($toDel->getId() === $tag->getId()) {
							unset($originalTags[$key]);
						}
					}
				}
				//Deleting tag from article and database
				foreach ($originalTags as $tag) {
					$tag->getArticleBody()->removeTag($tag);
					$em->remove($tag);
				}

				//Enable html tags
				$article->setBody(html_entity_decode($article->getBody()));

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
					'articleid' => $article->getId(),
					'tagsList'=> $tagsList));
	}
	/**
	 * Specific form
	 */
	private function buildArticleForm($formBuilder) {
		$formBuilder->add('title', TextType::class)
			->add('body', TextareaType::class ,array(
				'required'     => false,
			))
			->add('author', TextType::class)
			->add('date', DateType::class, array(
				'input'  => 'datetime',
				'widget' => 'single_text',
				'format' => 'dd-MM-yy',
				'attr'   => array('class' => 'date')
			))
			->add('attachments', CollectionType::class, array(
				'entry_type'         =>  ArticleAttachmentType::class,
				'allow_add'    => true,
				'allow_delete' => true,
				'by_reference' => false,
				'required'     => false,
				'label'        => false
			))
			->add('tags', CollectionType::class, array(
				'entry_type'         => ArticleTagsType::class,
				'allow_add'    => true,
				'allow_delete' => true,
				'by_reference' => false,
				'required'     => false,
				'label'        => false
			))
			->add('enableComments', CheckboxType::class ,array(
				'required' => false,
			))
			->add('shareUrl', TextType::class ,array(
				'required' => false,
				'label'        => 'Share url'
			));

	}
}
