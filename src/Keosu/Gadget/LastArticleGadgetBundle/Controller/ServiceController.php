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
namespace Keosu\Gadget\LastArticleGadgetBundle\Controller;

use Keosu\CoreBundle\Util\TemplateUtil;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * REST Service controller dedicated to the curent gadget
 * @author vleborgne
 *
 */
class ServiceController extends Controller {

	public function viewListAction($gadgetId, $format, $offset) {
		$gadget = $this->get('doctrine')->getManager()
				->getRepository('KeosuCoreBundle:Gadget')->find($gadgetId);
		$gadgetConfig = $gadget->getConfig();
		$articlesperpage=$gadgetConfig['articles-per-page'];

		$queryCount = $this->get('doctrine')->getManager()->createQuery('SELECT COUNT(u.id) FROM Keosu\DataModel\ArticleModelBundle\Entity\ArticleBody u');
		$count = $queryCount->getSingleScalarResult();
		
		$qb = $this->get('doctrine')->getManager()->createQueryBuilder();
		$qb->add('select', 'a')
				->add('from',
						'Keosu\DataModel\ArticleModelBundle\Entity\ArticleBody a')
				->add('orderBy', 'a.date DESC')
				->setFirstResult($offset)
				->setMaxResults($count);
		
		$query = $qb->getQuery();
		$articleList = $query->execute();
		foreach ($articleList as $article){
			$article
			->setBody(
					TemplateUtil::formatTemplateString($article->getBody()));
		}
		
		//$article->setBody(TemplateUtil::formatTemplateString($article->getBody()));
		return $this
				->render(
						'KeosuGadgetLastArticleGadgetBundle:Service:viewlist.'
								. $format . '.twig',
						array('articles' => $articleList, 'articleperpage' => $articlesperpage));
	}
}

?>
