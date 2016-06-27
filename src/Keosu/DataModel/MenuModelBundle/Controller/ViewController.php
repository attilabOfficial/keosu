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

namespace Keosu\DataModel\MenuModelBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Controller to view edit menu entry
 * @author vleborgne
 *
 */
class ViewController extends Controller {

	public function viewAction() {
		$repo = $this->get('doctrine')->getManager()
			->getRepository(
				'KeosuDataModelMenuModelBundle:MenuEntry');
		$appid = $this->get('keosu_core.curapp')->getCurApp();
		$entries = $repo->findByAppId($appid);
		return $this
				->render(
						'KeosuDataModelMenuModelBundle:View:view.html.twig',
						array('entries' => $entries));
	}
	public function viewTableAction() {
		$repo = $this->get('doctrine')->getManager()
			->getRepository(
					'KeosuDataModelMenuModelBundle:MenuEntry');
		$appid = $this->get('keosu_core.curapp')->getCurApp();

		$entries = $repo->findByAppId($appid);
		return $this
			->render(
				'KeosuDataModelMenuModelBundle:View:view-table.html.twig',
				array('entries' => $entries));
	}
	
}
