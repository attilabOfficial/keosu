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

namespace Keosu\DataModel\FormModelBundle\Controller;

use Keosu\DataModel\FormModelBundle\Entity\Form;
use Keosu\DataModel\FormModelBundle\Entity\FormField;
use Keosu\DataModel\FormModelBundle\Form\FormFieldType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;

/**
 * Controller to edit a Form entry
 */

class EditController extends Controller {

	/**
	 * Delete form action
	 */

	public function deleteAction($id) {

		$em = $this->get('doctrine')->getManager();
		$repo = $em->getRepository('KeosuDataModelFormModelBundle:Form');

		$form = $repo->find($id);
		$em->remove($form);
		$em->flush();

		return $this->redirect($this->generateUrl('keosu_form_viewlist'));

	}

	/**
	 * Edit form action
	 */
	public function editAction($id) {

		$em = $this->get('doctrine')->getManager();
		$repo = $em->getRepository('KeosuDataModelFormModelBundle:Form');

		$form = $repo->find($id);

		return $this->editForm($form);

	}
	/**
	 * Add form action
	 */
	public function addAction() {

		$form = new Form();

		// In case we are in a subapp
		if(method_exists($this->container->get('keosu_core.curapp'), 'getCurSubApp'))
			$form->setSubAppId($this->get('keosu_core.curapp')->getCurSubApp());

		return $this->editForm($form);

	}
	/**
	 * Manage and store form
	 */
	private function editForm($form) {

		$em = $this->get('doctrine')->getManager();

		$formBuilder = $this->createFormBuilder($form);
		$this->buildFormForm($formBuilder);
		$f = $formBuilder->getForm();

		$request = Request::createFromGlobals();
		$f->handleRequest($request);

		if ($f->isSubmitted() && $f->isValid()) {

			foreach($form->getFields() as $field) $field->setForm($form);

			$em->persist($form);
			$em->flush();

			return $this->redirect($this->generateUrl('keosu_form_viewlist'));

		}

		return $this->render('KeosuDataModelFormModelBundle:Edit:edit.html.twig',
			array(
				'form' => $f->createView()
			)
		);
	}

	/**
	 * Specific form
	 */
	private function buildFormForm($formBuilder) {
		$formBuilder
			->add('name', TextType::class)
			->add('mailFrom', TextType::class)
			->add('mailTo', TextType::class)
			->add('fields', CollectionType::class, array(
				'entry_type'   => FormFieldType::class,
				'allow_add'    => true,
				'allow_delete' => true,
				'by_reference' => true,
				'required'     => true,
				'label'        => false
			))
		;
	}
}
