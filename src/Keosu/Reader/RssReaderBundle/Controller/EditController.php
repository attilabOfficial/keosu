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
namespace Keosu\Reader\RssReaderBundle\Controller;

use Keosu\Reader\RssReaderBundle\RssReader;

use Keosu\CoreBundle\Form\ReaderType;

use Keosu\CoreBundle\Entity\Reader;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class EditController extends Controller {

	public function addAction() {
		$commonReader = new Reader();
		$rssReader = new RssReader();
		return $this->editReader($rssReader, $commonReader);
	}

	public function editAction($id) {
		$commonReader = $this->get('doctrine')->getManager()
				->getRepository('KeosuCoreBundle:Reader')->find($id);

		$rssReader = RssReader::constructfromReader($commonReader);
		return $this->editReader($rssReader, $commonReader);
	}

	private function editReader($rssReader, $commonReader) {
		$formBuilder = $this->createFormBuilder($rssReader);
		$this->buildReaderForm($formBuilder);
		$form = $formBuilder->getForm();
		$request = $this->get('request');

		//If we are in POST method, form is submit
		if ($request->getMethod() == 'POST') {
			$form->bind($request);

			if ($form->isValid()) {
				$rssReader->convertAsExistingCommonReader($commonReader);
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
				->render('KeosuReaderRssReaderBundle:Edit:edit.html.twig',
						array('form' => $form->createView()));

	}

	private function buildReaderForm($formBuilder) {
		$formBuilder->add('name', 'text')
			->add('feed_url', 'text')
			->add('striphtml', 'checkbox', array('required'=>false))
			->add('allowupdate', 'checkbox',array('label'=>false , 'required'=>false));
	}

}
