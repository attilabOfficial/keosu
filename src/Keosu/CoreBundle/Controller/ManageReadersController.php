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
namespace Keosu\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Keosu\CoreBundle\KeosuExtension;

class ManageReadersController extends Controller {

	/**
	 * Create a form to choose the type of reader we want to add
	 */
	public function addAction() {
		//Reader list
		$contents = $this->get('doctrine')->getManager()
				->getRepository('KeosuCoreBundle:Reader')->findAll();

		$formBuilder = $this->createFormBuilder();
		$formBuilder
				->add('readertype', 'choice',
						array('choices' => KeosuExtension::$readerList,
								'required' => true,));
		$form = $formBuilder->getForm();
		$request = $this->get('request');
		//If we are in POST method, form is submit
		if ($request->getMethod() == 'POST') {
			$form->bind($request);
			if ($form->isValid()) {
				$data = $form->getData();
				$readerType = $data['readertype'];
				//We redirect to the choosen Reader Edit action 
				return $this
						->redirect(
							$this
								->generateUrl(
									'keosu_ReaderManager_'
										. $readerType . '_add'));
			}
		}

		return $this
				->render('KeosuCoreBundle:Reader:manage.html.twig',
						array('contents' => $contents,
								'form' => $form->createView()));
	}

	/**
	 * Delete a reader
	 */
	public function deleteAction($id) {
		$repo = $this->get('doctrine')->getManager()
				->getRepository('KeosuCoreBundle:Reader');

		$reader = $repo->find($id);
		
		$repoarticle = $this->get('doctrine')->getManager()
			->getRepository($reader->getLinkedEntity());
		$linkedArticles=$repoarticle->findByReader($reader->getId());
		$em = $this->get('doctrine')->getManager();
		foreach ($linkedArticles as $article){
			$article->setReader(null);
			$em->persist($article);
		}
        $em->flush();
		$this->get('doctrine')->getManager()->remove($reader);
		$this->get('doctrine')->getManager()->flush();
		return $this
				->redirect($this->generateUrl('keosu_ReaderManager_manage'));
	}

}
