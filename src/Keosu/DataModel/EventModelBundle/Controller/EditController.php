<?php
/************************************************************************
Keosu is an open source CMS for mobile app
Copyright (C) 2014  Vincent Le Borgne

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

namespace Keosu\DataModel\EventModelBundle\Controller;
use Keosu\DataModel\EventModelBundle\Entity\Event;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Controller to edit an Event element
 * @author flavien-lecuyer
 *
 */

class EditController extends Controller {
	/**
	 * add Event object action
	 */
	public function addAction() {
		$article = new Event();
		return $this->editEvent($article);
	}

	/**
	 * Edit Event object action
	 */
	public function editAction($id) {
		$repo = $this->get('doctrine')->getManager()
				->getRepository(
						'KeosuDataModelEventModelBundle:Event');
		$event = $repo->find($id);

		return $this->editEvent($event);

	}
	/**
	 * delete Event object action
	 */
	public function deleteAction($id) {
		$repo = $this->get('doctrine')->getManager()
				->getRepository(
						'KeosuDataModelEventModelBundle:Event');

		$event = $repo->find($id);

		if ($event->getReader() === null || $event->getReader()->allowupdate !== false) {
			$this->get('doctrine')->getManager()->remove($event);
			$this->get('doctrine')->getManager()->flush();
		}
		return $this->redirect($this->generateUrl('keosu_event_viewlist'));
	}

	/**
	 * Common function to edit/add a event
	 * Manage form and store object in database
	 */
	private function editEvent($event) {
		$form = $this->getEventForm($event);

		$request = $this->get('request');

		//If we are in POST method, form is submit
		if ($request->getMethod() == 'POST') {
			$form->bind($request);

			if ($form->isValid()) {
				$em = $this->get('doctrine')->getManager();
				$em->persist($event);
				$em->flush();
				return $this
						->redirect($this->generateUrl('keosu_event_viewlist'));
			}
		}
		return $this
				->render('KeosuDataModelEventModelBundle:Edit:edit.html.twig',
						array('form' => $form->createView(),
								'eventid' => $event->getId()));

	}

	/**
	 * Build Event specific form
	 */
	private function getEventForm($event) {
		return $this->createFormBuilder($event)
				->add('name', 'text')
				->add('description', 'textarea', array('attr' => array('class' => 'tinymce')))
				->add('lieu', 'text')
				->add('latitude','hidden')
				->add('longitude','hidden')
				->add('date', 'date', 
					array(
						'input' => 'datetime',
						'widget' => 'single_text',
						'format' => 'dd-MM-yy',
						'attr' => array('class' => 'date')
					))
				->add('hour', 'time', array('label'=>'Hour (HH:MM)'))
				->getForm();
	}
}