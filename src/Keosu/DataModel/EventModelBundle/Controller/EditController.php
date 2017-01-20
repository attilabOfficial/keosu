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
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TimeType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\HttpFoundation\Request;


/**
 * Controller to edit an Event element
 * @author flavien-lecuyer
 *
 */

class EditController extends Controller {
	/**
	 * add Event object action
	 */
	public function addAction(Request $request) {
		$article = new Event();
		return $this->editEvent($article, $request);
	}

	/**
	 * Edit Event object action
	 */
	public function editAction($id, Request $request) {
		$em = $this->get('doctrine')->getManager();
		$event = $em->getRepository('KeosuDataModelEventModelBundle:Event')->find($id);
		return $this->editEvent($event, $request);
	}

	/**
	 * delete Event object action
	 */
	public function deleteAction($id) {
		$em = $this->get('doctrine')->getManager();
		$event = $em->getRepository('KeosuDataModelEventModelBundle:Event')->find($id);

		if ($event->getReader() === null || $event->getReader()->allowupdate !== false) {
			$em->remove($event);
			$em->flush();
		}
		return $this->redirect($this->generateUrl('keosu_event_viewlist'));
	}

	/**
	 * Common function to edit/add a event
	 * Manage form and store object in database
	 */
	private function editEvent($event, $request) {
		$form = $this->getEventForm($event);

		//If we are in POST method, form is submit
		$form->handleRequest($request);
		if ($form->isSubmitted() && $form->isValid()) {
			$em = $this->get('doctrine')->getManager();
			$em->persist($event);
			$em->flush();
			return $this->redirect($this->generateUrl('keosu_event_viewlist'));
		}
		return $this->render('KeosuDataModelEventModelBundle:Edit:edit.html.twig',array(
									'form' => $form->createView(),
									'eventid' => $event->getId()
				));

	}

	/**
	 * Build Event specific form
	 */
	private function getEventForm($event) {
		return $this->createFormBuilder($event)
				->add('title', TextType::class)
				->add('description', TextareaType::class, array(
						'attr' => array('class' => 'tinymce')
				))
				->add('file', FileType::class, array(
					'required'   => false,
					'image_path' => 'webPath',
					'label'      => false,
					'attr'       => array(
						'accept' => 'image/*'
					)))
				->add('location', TextType::class)
				->add('color', TextType::class, array(
					'label' => 'Color (html notation ex :#ff0000)','required' => false))
				->add('start', DateType::class, array(
						'input'  => 'datetime',
						'widget' => 'single_text',
						'format' => 'dd-MM-yy',
						'attr'   => array('class' => 'date'),
				))
				->add('startHour', TimeType::class, array(
					'label' => 'Start Hour (HH:MM)'
				))
				->add('end', DateType::class, array(
					'input'  => 'datetime',
					'widget' => 'single_text',
					'format' => 'dd-MM-yy',
					'attr'   => array('class' => 'date'),
				))
				->add('endHour', TimeType::class, array(
					'label' => 'End Hour (HH:MM)'
				))
				->add('enableComments',CheckboxType::class, array(
						'required' => false,
				))
				->getForm();
	}
}
