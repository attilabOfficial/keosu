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
namespace Keosu\Reader\RssReaderBundle\Controller;

use Keosu\Reader\RssReaderBundle\RssReader;

use Keosu\CoreBundle\Entity\Reader;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;

class EditController extends Controller {

	public function addAction(Request $request) {
		$commonReader = new Reader();
		$rssReader = new RssReader();
		return $this->editReader($rssReader, $commonReader, $request);
	}

	public function editAction($id, Request $request) {
		$commonReader = $this->get('doctrine')->getManager()
				->getRepository('KeosuCoreBundle:Reader')->find($id);

		$rssReader = RssReader::constructfromReader($commonReader);
		return $this->editReader($rssReader, $commonReader, $request);
	}

	private function editReader($rssReader, $commonReader, Request $request) {
		$formBuilder = $this->createFormBuilder($rssReader);
		$this->buildReaderForm($formBuilder);
		$form = $formBuilder->getForm();

		$form->handleRequest($request);
		if ($form->isSubmitted() && $form->isValid()) {

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
		return $this
				->render('KeosuReaderRssReaderBundle:Edit:edit.html.twig',
						array('form' => $form->createView()));

	}

	private function buildReaderForm($formBuilder) {
		$formBuilder->add('name', TextType::class)
			->add('feed_url', TextType::class)
			->add('striphtml', CheckBoxType::class, array('required'=>false))
			->add('allowupdate', CheckboxType::class,array('label'=>false , 'required'=>false))
			->add('tags', TextType::class,array('required'=>false));
	}

}
