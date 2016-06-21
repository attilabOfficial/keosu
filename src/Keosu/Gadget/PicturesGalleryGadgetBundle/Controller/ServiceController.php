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
namespace Keosu\Gadget\PicturesGalleryGadgetBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * REST Service controller dedicated to the current gadget
 * @author jdequeant
 *
 */
class ServiceController extends Controller {

	public function viewListAction($gadgetId, $format, $offset) {
		$em = $this->get('doctrine')->getManager();
		$gadget = $em->getRepository('KeosuCoreBundle:Gadget')->find($gadgetId);
		$gadgetConfig = $gadget->getConfig();
		$picturesperpage = $gadgetConfig['picturesPerPage'];
		if(isset($gadgetConfig['tag'])){
			$tag = $gadgetConfig['tag'];
			$qb = $em->createQueryBuilder();
			$qb->add('select', 'p')
				->add('from', 'Keosu\DataModel\PictureModelBundle\Entity\Picture p, Keosu\DataModel\PictureModelBundle\Entity\pictureTag t')
				->add('where', 'p.id = t.picture and t.tagName=?1 ')
				->add('orderBy', 'p.id DESC')
				->setFirstResult($offset)
				->setMaxResults(100);
			$qb->setParameter(1,$tag);
		}
		else{
			$qb = $em->createQueryBuilder();
			$qb->add('select', 'p')
				->add('from', 'Keosu\DataModel\PictureModelBundle\Entity\Picture p')
				->add('orderBy', 'p.id DESC')
				->setFirstResult($offset)
				->setMaxResults(100);
		}
		$query = $qb->getQuery();
		$picturesList = $query->execute();
	
		return $this
				->render(
						'KeosuGadgetPicturesGalleryGadgetBundle:Service:viewlist.'
								. $format . '.twig',
						array('pictures' => $picturesList, 'picturesperpage' => $picturesperpage));
	}
}

?>
