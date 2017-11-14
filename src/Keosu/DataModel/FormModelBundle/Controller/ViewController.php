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

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Keosu\DataModel\FormModelBundle\Entity\FormField;

/**
 * Controller to view form entries
 */
class ViewController extends Controller {

	public function viewAction() {

		$em = $this->get('doctrine')->getManager();
		$repo = $em->getRepository('KeosuDataModelFormModelBundle:Form');

		$appid = (method_exists($this->container->get('keosu_core.curapp'), 'getCurSubApp')) ? $this->get('keosu_core.curapp')->getCurSubApp() : null;
		$forms = $repo->findBySubAppId($appid);

		return $this->render('KeosuDataModelFormModelBundle:View:view.html.twig',
			array('forms' => $forms)
		);

	}

}
