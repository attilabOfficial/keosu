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
		$repo = $this->get('doctrine')->getManager()
				->getRepository(
						'KeosuDataModelPictureModelBundle:Picture');

		$picture = $repo->find($id);

		if ($picture->getReader() === null) {
			$this->get('doctrine')->getManager()->remove($picture);
			$this->get('doctrine')->getManager()->flush();
		}
		return $this
				->redirect($this->generateUrl('keosu_picture_viewlist'));
	}

	/**
	 * Edit picture action
	 */
	public function editAction($id) {
		$repo = $this->get('doctrine')->getManager()
				->getRepository(
						'KeosuDataModelPictureModelBundle:Picture');
		$picture = $repo->find($id);

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
		$formBuilder = $this->createFormBuilder($picture);
		$this->buildPictureForm($formBuilder);
		$form = $formBuilder->getForm();
		$request = $this->get('request');
		//If we are in POST method, form is submit
		if ($request->getMethod() == 'POST') {
			$form->bind($request);
			if ($form->isValid()) {
				//$picture->upload();
				$em = $this->get('doctrine')->getManager();
				$em->persist($picture);
				$em->flush();
				return $this
						->redirect(
								$this
									->generateUrl(
										'keosu_picture_viewlist'));
			}
		}
		return $this
				->render(
						'KeosuDataModelPictureModelBundle:Edit:edit.html.twig',
						array('form' => $form->createView(),
								'pictureid' => $picture->getId()));
	}
	/**
	 * Specific form
	 */
	private function buildPictureForm($formBuilder) {
		$formBuilder->add('name', 'text')
					->add('description', 'textarea')
					->add('file', 'file', array('required'=>false, 
												'image_path' => 'webPath',
												'label'=>false,
												"attr" => array(
                									"accept" => "image/*"
												))
		);

	}
}
