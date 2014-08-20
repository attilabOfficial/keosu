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
use Symfony\Component\HttpFoundation\JsonResponse;

/**
 * REST Service controller dedicated to the curent gadget
 * @author vleborgne
 *
 */
class ServiceController extends Controller {

	public function viewListAction($gadgetId, $page, $format) {
		$em = $this->get('doctrine')->getManager();
		$gadget = $em->getRepository('KeosuCoreBundle:Gadget')->find($gadgetId);
		$gadgetConfig = $gadget->getConfig();
		$articlesperpage=$gadgetConfig['articlesPerPage'];
		$tag=$gadgetConfig['tag'];
	
		//Preparation of queries count and listArticle
		$qb = $this->get('doctrine')->getManager()->createQueryBuilder();
		
		$qb->add('select', 'a');
		
		if($tag!=""){
			$where = "a.id = t.articleBody and t.tagName='".$tag."'";
			$queryCount = $em->createQuery('SELECT COUNT(DISTINCT a.id) 
					FROM Keosu\DataModel\ArticleModelBundle\Entity\ArticleBody a, Keosu\DataModel\ArticleModelBundle\Entity\ArticleTags t
					WHERE '.$where);
			$qb->add('from', 'Keosu\DataModel\ArticleModelBundle\Entity\ArticleBody a, Keosu\DataModel\ArticleModelBundle\Entity\ArticleTags t')
				->add('where', $where);
		}else{
			$queryCount = $em->createQuery('SELECT COUNT(u.id) FROM Keosu\DataModel\ArticleModelBundle\Entity\ArticleBody u');
			$qb->add('from',
						'Keosu\DataModel\ArticleModelBundle\Entity\ArticleBody a');
		}	
		$qb->add('orderBy', 'a.date DESC')
				->setFirstResult($page*$articlesperpage)
				->setMaxResults($articlesperpage);
		
		$query = $qb->getQuery();
		
		//Execution of queries
		$count = $queryCount->getSingleScalarResult();
		$articleList = $query->execute();
		foreach ($articleList as $article){
			$article->setBody(TemplateUtil::formatTemplateString($article->getBody()));
		}

		$data=array();
		foreach($articleList as $key=>$article){
			$data[$key]['id'] = $article->getId();
			$data[$key]['title'] = $article->getTitle();
			$data[$key]['content'] = $article->getBody();
			$data[$key]['dataModelObjectName'] = $article->getDataModelObjectName();
			$data[$key]['enableComments'] = $article->getEnableComments();
			
			$attachments = $article->getAttachments();
			if (count($attachments) > 0){
				foreach ($attachments as $k=>$attachment){
					$data[$key]['attachments'][$k]['path'] =  $this->container->getParameter('url_base') . $attachment->getWebPath();
				}
			}
		}	
		$ret= array('data'=>$data);
		$isFirst = false;
		if($page == 0){
			$isFirst = true;
		}
		$isLast = false;
		if(($page+1)*$articlesperpage >= $count){
			$isLast = true;
		}
		$ret['isFirst'] = $isFirst;
		$ret['isLast'] = $isLast;
		return new JsonResponse($ret);
	}
}

?>
