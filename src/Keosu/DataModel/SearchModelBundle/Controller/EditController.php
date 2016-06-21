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

namespace Keosu\DataModel\SearchModelBundle\Controller;

use Keosu\DataModel\SearchModelBundle\Entity\Search;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\HttpFoundation\Request;


/**
 * Controller to edit an search entry
 * @author vleborgne
 *
 */
class EditController extends Controller {
	/**
	 * Delete action
	 */
	public function deleteAction($id) {
		$em = $this->get('doctrine')->getManager();
		$repo = $em->getRepository('KeosuDataModelSearchModelBundle:Search');

		$search = $repo->find($id);

		$em->remove($search);
		$em->flush();
		return $this
				->redirect($this->generateUrl('keosu_search_viewlist'));
	}

	/**
	 * Edit search action
	 */
	public function editAction($id, Request $request) {
		$repo = $this->get('doctrine')->getManager()
				->getRepository(
						'KeosuDataModelSearchModelBundle:Search');
		$search = $repo->find($id);

		return $this->editSearch($search, $request);

	}
	/**
	 * Add search action
	 */
	public function addAction(Request $request) {
		$search = new Search();
		return $this->editSearch($search , $request);
	}
	/**
	 * Manage and store
	 */
	private function editSearch($search, $request) {

		//Get tags list from database
		$em = $this->get('doctrine')->getManager();
		
		$formBuilder = $this->createFormBuilder($search);
		$this->buildSearchForm($formBuilder);
		$form = $formBuilder->getForm();
		//List of original attachment / tag

		$form->handleRequest($request);
		if ($form->isSubmitted() && $form->isValid()) {
			$page = $em->getRepository('KeosuCoreBundle:Page')->find($search->getTarget());
			$appid = $this->get('keosu_core.curapp')->getCurApp();
			$search->setTargetName($page->getName());
			$search->setAppId($appid);
			$em->persist($search);
			$em->flush();
			return $this
					->redirect(
							$this
									->generateUrl(
											'keosu_search_viewlist'));
		}
		return $this
				->render(
						'KeosuDataModelSearchModelBundle:Edit:edit.html.twig',
						array('form' => $form->createView(),
								'searchid' => $search->getId()));
	}
	/**
	 * Specific form
	 */
	private function buildSearchForm($formBuilder) {
		$logger = $this->get('logger');
		$appid = $this->get('keosu_core.curapp')->getCurApp();
		$em = $this->get('doctrine')->getManager();
		$pages = $em->getRepository('KeosuCoreBundle:Page')->findByAppId($appid);

		$pageList = array();
		foreach ($pages as $page) {
			$pageList[$page->getName()] = $page->getId();
		}
		$formBuilder->add('keyValue')
				->add('target', ChoiceType::class ,array(
						'choices' => $pageList,
						'label'   => false,

				));

	}
}
