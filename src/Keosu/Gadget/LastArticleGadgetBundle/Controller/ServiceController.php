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
		$queryArticle = $em->createQueryBuilder();
		$queryCount = $em->createQueryBuilder();
		$queryArticle->add('select', 'a');
		$queryCount->add('select', 'count(DISTINCT a.id)');
		if($tag!=""){
			$where = 'a.id = t.articleBody and t.tagName= ?1 ';
			$queryCount->add('from', 'Keosu\DataModel\ArticleModelBundle\Entity\ArticleBody a, Keosu\DataModel\ArticleModelBundle\Entity\ArticleTags t') 
						->add('where', $where);
			$queryCount->setParameter(1,$tag);
			$queryArticle->add('from', 'Keosu\DataModel\ArticleModelBundle\Entity\ArticleBody a, Keosu\DataModel\ArticleModelBundle\Entity\ArticleTags t')
				->add('where', $where)
				->setParameter(1,$tag);
		}else{
			$queryCount->add('from', 'Keosu\DataModel\ArticleModelBundle\Entity\ArticleBody a');
			$queryArticle->add('from','Keosu\DataModel\ArticleModelBundle\Entity\ArticleBody a');
		}	
		$queryArticle->add('orderBy', 'a.date DESC')
				->setFirstResult($page*$articlesperpage)
				->setMaxResults($articlesperpage);
		
		//Execution of queries
		$count = $queryCount->getQuery()->execute();
		$count = $count[0][1];
		$articleList = $queryArticle->getQuery()->execute();
		foreach ($articleList as $article){
			$article->setBody(TemplateUtil::formatTemplateString($article->getBody()));
		}

		//Prepare data result
		$data=array();
		foreach($articleList as $key=>$article){
			$data[$key]['id'] = $article->getId();
			$data[$key]['title'] = $article->getTitle();
			$data[$key]['content'] = $article->getBody();
			$data[$key]['dataModelObjectName'] = $article->getDataModelObjectName();
			$data[$key]['shareUrl'] = $article->getShareUrl();
			$data[$key]['enableComments'] = $article->getEnableComments();
			
			$attachments = $article->getAttachments();
			if (count($attachments) > 0){
				foreach ($attachments as $k=>$attachment){
					$data[$key]['attachments'][$k]['path'] =  $this->container->getParameter('url_base') . $attachment->getWebPath();
					$data[$key]['attachments'][$k]['thumbpath'] =  $this->container->getParameter('url_base') . $attachment->getThumbWebPath();
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
