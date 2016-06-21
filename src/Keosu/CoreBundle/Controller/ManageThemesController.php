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

use Keosu\CoreBundle\Entity\Theme;
use Keosu\CoreBundle\Util\ThemeUtil;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\HttpFoundation\Request;

class ManageThemesController extends Controller {
	/**
	 * "Manage Themes" page
	 * We can set add/delete new themes
	 */
	private function themeExists($theme, $themesData, $isArray) {
		foreach ( $themesData as $themeData ) {
			if ($isArray === FALSE && $theme === $themeData->getName ())
				return TRUE;
			if ($isArray === TRUE && $theme->getName () === $themeData)
				return TRUE;
		}
		return FALSE;
	}
	public function viewAction() {
		/**
		 * List of pages we display them in a array after
		 */
		$em = $this->get('doctrine')->getManager();
		$themesData = $em->getRepository ('KeosuCoreBundle:Theme')->findAll();
		$themes = ThemeUtil::getThemeList ();
		foreach ( $themes as $theme ) {
			if ($this->themeExists($theme,$themesData, FALSE ) === FALSE) {
				$theme_tmp = new Theme ();
				$theme_tmp->setName ( $theme );
				$em->persist($theme_tmp);
				
			}
		}
		foreach ( $themesData as $theme ) {
			if ($this->themeExists ( $theme, $themes, TRUE ) === FALSE) {
				$em->remove($theme);
			}
		}
		$em->flush();
		$themesData = $em->getRepository('KeosuCoreBundle:Theme')->findAll();
		return $this->render ( 'KeosuCoreBundle:Theme:manage.html.twig', array (
				'themes' => $themesData,
				'msg' => null
		) );
	}
	
	/**
	 * Add a new page
	 */
	public function addAction(Request $request) {
		$theme = new Theme ();
		$theme->setName ('tmp');
		// Form and store action are shared with editAction
		return $this->editTheme ( $theme , $request);
	}
	
	/**
	 * Edit an existing page
	 */
	public function editAction($id, Request $request) {
		$repo = $this->get ( 'doctrine' )->getManager ()->getRepository ( 'KeosuCoreBundle:Theme' );
		$theme = $repo->find ( $id );
		// Form and store action are shared with editAction
		return $this->editTheme ( $theme, $request );
	}
	
	/**
	 * Shared function to edit/add an app
	 */
	private function editTheme($theme, $request) {
		// Find existing app to know if it's the first one
		$error = null;
		$em = $this->get('doctrine')->getManager();
		
		// page edit form
		$formBuilder = $this->createFormBuilder ( $theme, array (
				'label' => 'Edit Theme' 
		) );
		$this->buildThemeForm ( $formBuilder );
		$form = $formBuilder->getForm ();
		$form->handleRequest($request);
		if ($form->isSubmitted() && $form->isValid()) {
				// Storing pag
				if (($error = $theme->upload()) !== null)
					return $this->render ( 'KeosuCoreBundle:Theme:edit.html.twig', array (
							'form' => $form->createView (),
							'theme' => $theme,
							'error' => $error
					) );
				$themesData = $em->getRepository ( 'KeosuCoreBundle:Theme' )->findAll ();
				$themes = ThemeUtil::getThemeList ();
				foreach ( $themes as $themetmp ) {
					if ($this->themeExists ( $themetmp, $themesData, FALSE ) === FALSE) {
						$theme->setName ( $themetmp );
						$session = $this->get ( "session" );
						$session->set ( "themeid", $theme->getId () );
						$em->persist ($theme);
						
					}
				}
				$em->flush();
				$themesData = $em->getRepository ( 'KeosuCoreBundle:Theme' )->findAll ();
				return $this->render ( 'KeosuCoreBundle:Theme:manage.html.twig', array (
						'themes' => $themesData,
						'msg' => "Your upload succeeded.") );
				

		}
		return $this->render ( 'KeosuCoreBundle:Theme:edit.html.twig', array (
				'form' => $form->createView (),
				'theme' => $theme,
				'error' => $error
		) );
	}
	
	/**
	 * Edit App form
	 */
	private function buildThemeForm($formBuilder) {
		$formBuilder->add ( 'file', FileType::class, array (
				'required' => true 
		) );
	}
}
