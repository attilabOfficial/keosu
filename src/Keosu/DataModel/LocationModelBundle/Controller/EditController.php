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

namespace Keosu\DataModel\LocationModelBundle\Controller;

use Keosu\DataModel\LocationModelBundle\Entity\Location;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Controller to edit an Location element
 * @author vleborgne
 *
 */
class EditController extends Controller {

	/**
	 * add Location object action
	 */
	public function addAction() {
		$poi = new Location();
		$poi->setLat(48.117266);
		$poi->setLng(-1.6777925999999752);
		return $this->editLocation($poi);
	}

	/**
	 * Edit Location object action
	 */
	public function editAction($id) {
		$em = $this->getDoctrine()->getManager();
		$poi = $em->getRepository('KeosuDataModelLocationModelBundle:Location')->find($id);
		return $this->editLocation($poi);
	}
	/**
	 * delete Location object action
	 */
	public function deleteAction($id) {
		$em = $this->getDoctrine()->getManager();
		$poi = $em->getRepository('KeosuDataModelLocationModelBundle:Location')->find($id);

		if ($poi->getReader() === null) {
			$em->remove($poi);
			$em->flush();
		}
		return $this->redirect($this->generateUrl('keosu_location_viewlist'));
	}

	/**
	 * Common function to edit/add a poi
	 * Manage form and store object in database
	 */
	private function editLocation($poi) {
		$form = $this->getLocationForm($poi);

		$request = $this->get('request');

		//If we are in POST method, form is submit
		if ($request->getMethod() == 'POST') {
			$form->bind($request);

			if ($form->isValid()) {
				$em = $this->get('doctrine')->getManager();
				$em->persist($poi);
				$em->flush();
				return $this->redirect(
							$this->generateUrl('keosu_location_viewlist'));
			}
		}
		return $this
				->render('KeosuDataModelLocationModelBundle:Edit:edit.html.twig',
						array('form' => $form->createView(),
								'poiid' => $poi->getId(),
								'poilat' => $poi->getLat(),
								'poilng' => $poi->getLng()));
	}

	/**
	 * Build POI specific form
	 */
	private function getLocationForm($poi) {
		return $this->createFormBuilder($poi)
				->add('name', 'text')
				->add('description', 'text')
				->add('lat', 'text')
				->add('lng', 'text')
				->add('enableComments','checkbox',array(
						'required' => false,
				))
				->getForm();
	}
}
