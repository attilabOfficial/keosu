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

namespace Keosu\DataModel\MenuModelBundle\Controller;

use Keosu\DataModel\MenuModelBundle\Entity\Menu;
use Keosu\DataModel\MenuModelBundle\Entity\MenuEntry;
use Keosu\DataModel\MenuModelBundle\Form\MenuPartType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


/**
 * Controller to edit an Menu entry
 * @author vleborgne
 *
 */
class EditController extends Controller {
	/**
	 * Delete action
	 */
	public function deleteAction($id) {
		$em = $this->get('doctrine')->getManager();
		$repo = $em->getRepository('KeosuDataModelMenuModelBundle:MenuEntry');

		$Menu = $repo->find($id);

		$em->remove($Menu);
		$em->flush();
		return $this
				->redirect($this->generateUrl('keosu_menu_viewlist'));
	}

	/**
	 * Edit Menu action
	 */
	public function editAction($id) {
		$repo = $this->get('doctrine')->getManager()
				->getRepository(
						'KeosuDataModelMenuModelBundle:MenuEntry');
		$Menu = $repo->find($id);

		return $this->editMenu($Menu);

	}
	/**
	 * Add Menu action
	 */
	public function addAction() {
		$appid = $this->get('keosu_core.curapp')->getCurApp();
		$menu = new MenuEntry();
		$menu->setAppId($appid);
		return $this->editMenu($menu);
	}
	/**
	 * Manage and store
	 */
	private function editMenu($menu) {

		//Get tags list from database
		$em = $this->get('doctrine')->getManager();
		
		$formBuilder = $this->createFormBuilder($menu);
		$this->buildMenuForm($formBuilder);
		$form = $formBuilder->getForm();
		//List of original parts
		$originalParts = array();
		foreach ($menu->getParts() as $part) $originalParts[] = $part;

		$request = $this->get('request');
		//If we are in POST method, form is submit
		if ($request->getMethod() == 'POST') {
			$form->bind($request);
			if ($form->isValid()) {
				foreach ($menu->getParts() as $part) {
					foreach ($originalParts as $key => $toDel) {
						if ($toDel->getId() === $part->getId()) {
							unset($originalParts[$key]);
						}
					}
				}
				//Deleting part from Menu and database
				foreach ($originalParts as $part) {
					$part->getMenuEntry()->removePart($part);
					$em->remove($part);
				}
				$em->persist($menu);
				$em->flush();
				return $this
						->redirect(
								$this
										->generateUrl(
												'keosu_menu_viewlist'));
			}
		}
		return $this
				->render(
						'KeosuDataModelMenuModelBundle:Edit:edit.html.twig',
						array('form' => $form->createView(),
								'menuid' => $menu->getId()));
	}
	/**
	 * Specific form
	 */
	private function buildMenuForm($formBuilder) {
		$logger = $this->get('logger');
		$em = $this->get('doctrine')->getManager();
		$appid = $this->get('keosu_core.curapp')->getCurApp();

		$pages = $em->getRepository('KeosuCoreBundle:Page')->findByAppId($appid);
		$pageList = array();
		foreach ($pages as $page) {
			$pageList[$page->getId()] = $page->getName();
		}

		$formBuilder->add('title', 'text')
			->add('parts', 'collection', array(
					'type'         => new MenuPartType($pageList),
					'allow_add'    => true,
					'allow_delete' => true,
					'by_reference' => false,
					'required'     => false,
					'label'        => false
				)
			);

	}
}
