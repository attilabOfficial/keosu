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

namespace Keosu\DataModel\MapModelBundle\Controller;
use Keosu\DataModel\MapModelBundle\Entity\PointOfInterest;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Controller to edit an map element
 * @author vleborgne
 *
 */
class EditController extends Controller {

	/**
	 * add map object action
	 */
	public function addAction() {
		$article = new PointOfInterest();
		return $this->editPointOfInterest($article);
	}

	/**
	 * Edit amp object action
	 */
	public function editAction($id) {
		$repo = $this->get('doctrine')->getManager()
				->getRepository(
						'KeosuDataModelMapModelBundle:PointOfInterest');
		$poi = $repo->find($id);

		return $this->editPointOfInterest($poi);

	}
	/**
	 * delete map object action
	 */
	public function deleteAction($id) {
		$repo = $this->get('doctrine')->getManager()
				->getRepository(
						'KeosuDataModelMapModelBundle:PointOfInterest');

		$poi = $repo->find($id);

		if ($poi->getReader() === null) {
			$this->get('doctrine')->getManager()->remove($poi);
			$this->get('doctrine')->getManager()->flush();
		}
		return $this->redirect($this->generateUrl('keosu_map_viewlist'));
	}

	/**
	 * Common function to edit/add a poi
	 * Manage form and store object in database
	 */
	private function editPointOfInterest($poi) {
		$form = $this->getPointOfInterestForm($poi);

		$request = $this->get('request');

		//If we are in POST method, form is submit
		if ($request->getMethod() == 'POST') {
			$form->bind($request);

			if ($form->isValid()) {
				$em = $this->get('doctrine')->getManager();
				$em->persist($poi);
				$em->flush();
				return $this
						->redirect($this->generateUrl('keosu_map_viewlist'));
			}
		}
		return $this
				->render('KeosuDataModelMapModelBundle:Edit:edit.html.twig',
						array('form' => $form->createView(),
								'poiid' => $poi->getId()));

	}

	/**
	 * Build POI specific form
	 */
	private function getPointOfInterestForm($poi) {
		return $this->createFormBuilder($poi)
				->add('name', 'text')
				->add('description', 'text')
				->add('lat', 'text')
				->add('lng', 'text')
				->getForm();
	}
}
