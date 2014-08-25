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
namespace Keosu\Reader\IcsReaderBundle\Controller;

use Keosu\CoreBundle\Entity\Reader;
use Keosu\Reader\IcsReaderBundle\IcsReader;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class EditController extends Controller {

	public function addAction() {
		$commonReader = new Reader();
		$icsReader = new IcsReader();
		return $this->editReader($icsReader, $commonReader);
	}

	public function editAction($id) {
		$commonReader = $this->get('doctrine')->getManager()
				->getRepository('KeosuCoreBundle:Reader')->find($id);

		$icsReader = icsReader::constructfromReader($commonReader);
		return $this->editReader($icsReader, $commonReader);
	}

	private function editReader($icsReader, $commonReader) {
		$formBuilder = $this->createFormBuilder($icsReader);
		$this->buildReaderForm($formBuilder);
		$form = $formBuilder->getForm();
		$request = $this->get('request');

		//If we are in POST method, form is submit
		if ($request->getMethod() == 'POST') {
			$form->bind($request);

			if ($form->isValid()) {
				$icsReader->convertAsExistingCommonReader($commonReader);
				$em = $this->get('doctrine')->getManager();
				$em->persist($commonReader);
				$em->flush();
				return $this
						->redirect(
								$this
										->generateUrl(
												'keosu_ReaderManager_manage'));
			}
		}
		return $this
				->render('KeosuReadericsReaderBundle:Edit:edit.html.twig',
						array('form' => $form->createView()));

	}

	private function buildReaderForm($formBuilder) {
		$formBuilder->add('name', 'text')
			->add('feed_url', 'text')
			->add('allowupdate', 'checkbox',array('label'=>false , 'required'=>false));
	}

}
