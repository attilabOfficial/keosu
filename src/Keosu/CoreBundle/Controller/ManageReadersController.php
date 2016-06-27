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
namespace Keosu\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Keosu\CoreBundle\KeosuExtension;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\HttpFoundation\Request;

class ManageReadersController extends Controller {

	/**
	 * Create a form to choose the type of reader we want to add
	 */
	public function addAction(Request $request)
	{
	
		//Reader list
		$em = $this->get('doctrine')->getManager();
		$readers = $em->getRepository('KeosuCoreBundle:Reader')->findAll();
	
		$formBuilder = $this->createFormBuilder();
		$formBuilder->add('readertype', ChoiceType::class, array(
								'choices' => KeosuExtension::$readerList,
								'required' => true,
						));
		$form = $formBuilder->getForm();
		$form->handleRequest($request);
		if ($form->isSubmitted() && $form->isValid()) {
				$data = $form->getData();
				$readerType = $data['readertype'];
				//We redirect to the choosen Reader Edit action 
				return $this->redirect(
							$this->generateUrl('keosu_ReaderManager_'. $readerType . '_add'));
		}

		return $this
				->render('KeosuCoreBundle:Reader:manage.html.twig',
						array('contents' => $readers,
								'form' => $form->createView()));
	}

	/**
	 * Delete a reader
	 */
	public function deleteAction($id)
	{
		$em = $this->get('doctrine')->getManager();

		$reader = $em->getRepository('KeosuCoreBundle:Reader')->find($id);

		$linkedArticles = $em->getRepository($reader->getLinkedEntity())->findByReader($reader->getId());
		foreach ($linkedArticles as $article){
			$article->setReader(null);
			$em->persist($article);
		}
		$em->remove($reader);
		$em->flush();
		return $this->redirect($this->generateUrl('keosu_ReaderManager_manage'));
	}

}
