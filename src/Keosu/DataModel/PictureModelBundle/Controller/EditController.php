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
namespace Keosu\DataModel\PictureModelBundle\Controller;

use Keosu\DataModel\PictureModelBundle\Entity\Picture;
use Keosu\DataModel\PictureModelBundle\Entity\pictureTag;
use Keosu\DataModel\PictureModelBundle\Form\PictureTagsType;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


/**
 * Controller to edit a picture
 * @author jdequeant
 *
 */
class EditController extends Controller {
	/**
	 * Delete action
	 */
	public function deleteAction($id) {
		$em = $this->get('doctrine')->getManager();
		$picture = $em->getRepository('KeosuDataModelPictureModelBundle:Picture')->find($id);

		if ($picture->getReader() === null) {
			$em->remove($picture);
			$em->flush();
		}
		return $this->redirect($this->generateUrl('keosu_picture_viewlist'));
	}

	/**
	 * Edit picture action
	 */
	public function editAction($id) {
		$em = $this->get('doctrine')->getManager();
		$picture = $em->getRepository('KeosuDataModelPictureModelBundle:Picture')->find($id);
		return $this->editPicture($picture);
	}
	/**
	 * Add picture action
	 */
	public function addAction() {
		$picture = new Picture();
		$picture->setIdext("0");
		return $this->editPicture($picture);
	}
	/**
	 * Manage and store
	 */
	private function editPicture($picture) {
		$em = $this->get('doctrine')->getManager();
		
		//get tags
		$query = $em->createQuery('SELECT DISTINCT u.tagName FROM Keosu\DataModel\PictureModelBundle\Entity\pictureTag u');
		$tagsResult = $query->getResult();
		$tagsList=array();
		foreach ($tagsResult as $tag){
			$tagsList[]=$tag['tagName'];
		}

		$formBuilder = $this->createFormBuilder($picture);
		$this->buildPictureForm($formBuilder);
		$form = $formBuilder->getForm();
		$originalTags = array();
		if ($picture->getTags() != [])
			foreach ($picture->getTags() as $tmpp)
				$originalTags[] = $tmpp;
		
		$request = $this->get('request');
		//If we are in POST method, form is submit
		if ($request->getMethod() == 'POST') {
			$form->bind($request);
			if ($form->isValid()) {
				/**/

				if($picture->getTags()!=null){
					//Identify tags to delete
					foreach ($picture->getTags() as $tag) {
						foreach ($originalTags as $key => $toDel) {
							if ($toDel->getId() === $tag->getId()) {
								unset($originalTags[$key]);
							}
						}
					}
					//Deleting tag from picture and database
					foreach ($originalTags as $tag) {
						$tag->getPicture()->removeTag($tag);
						$em->remove($tag);
					}
				}
				/**/
				$em->persist($picture);
				$em->flush();
				return $this->redirect($this->generateUrl('keosu_picture_viewlist'));
			}
		}
		return $this->render('KeosuDataModelPictureModelBundle:Edit:edit.html.twig',array(
									'form' => $form->createView(),
									'pictureid' => $picture->getId(),
									'tagsList'=> $tagsList
							));
	}
	/**
	 * Specific form
	 */
	private function buildPictureForm($formBuilder) {
		$formBuilder->add('name', 'text')
					->add('description', 'textarea')
					->add('enableComments','checkbox',array(
							'required' => false,
					))
					->add('tags', 'collection', array(
							'type'         => new PictureTagsType(),
							'allow_add'    => true,
							'allow_delete' => true,
							'by_reference' => false,
							'required'     => false,
							'label'        => false
					))
					->add('file', 'file', array(
							'required'   => false, 
							'image_path' => 'webPath',
							'label'      => false,
							'attr'       => array(
							'accept' => 'image/*'
					)));

	}
}
