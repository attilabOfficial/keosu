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

use Keosu\CoreBundle\Service\Exporter;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Display the main pages
 * Similator is a simple redirection to ripple
 * @author vleborgne
 *
 */
class MainViewsController extends Controller{
	
	/**
	 * Display the Configuration page
	 */
	public function configurationAction() {
		if($this->checkNoApp()){
			return $this->redirect(
					$this->generateUrl('keosu_core_app_manage_add'));
		}
		return $this->render('KeosuCoreBundle:MainViews:configuration.html.twig');
	}
	
	
	/**
	 * Display the Content page
	 */
	public function contentAction() {
		if($this->checkNoApp()){
			return $this->redirect(
					$this->generateUrl('keosu_core_app_manage_add'));
		}
		return $this->render('KeosuCoreBundle:MainViews:content.html.twig');
	}

	/**
	 * Display the page page
	 */
	public function pageAction() {
		if($this->checkNoApp()){
			return $this->redirect(
					$this->generateUrl('keosu_core_app_manage_add'));
		}
		$appid = $this->get('keosu_core.curapp')->getCurApp();
		$pages = $this->get('doctrine')->getManager()
			->getRepository('KeosuCoreBundle:Page')->findByAppId($appid);
		return $this->render('KeosuCoreBundle:MainViews:page.html.twig', array('pages' => $pages));
	
	}
	/**
	 * Display the publish page
	 */
   public function publishAction() {
	   	if($this->checkNoApp()){
	   		return $this->redirect(
	   				$this->generateUrl('keosu_core_app_manage_add'));
	   	}
		//URL to dowload zip file
		$url = Exporter::EXPORT_WEB_PATH.'export.zip';
		return $this
				->render('KeosuCoreBundle:MainViews:publish.html.twig',
						array('downloadurl' => $url));
	}
	
	private function checkNoApp(){
		$apps = $this->get('doctrine')->getManager()
			->getRepository('KeosuCoreBundle:App')->findAll();
		
		return $apps==null;
		
	}
}
