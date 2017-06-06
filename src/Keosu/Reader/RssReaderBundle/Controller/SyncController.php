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

use Doctrine\Common\Collections\ArrayCollection;
use Keosu\DataModel\ArticleModelBundle\Entity\ArticleTags;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;

use Keosu\DataModel\ArticleModelBundle\Entity\ArticleAttachment;
use Keosu\Reader\RssReaderBundle\RssReader;
use Keosu\DataModel\ArticleModelBundle\Entity\ArticleBody;


/**
 * Synchronise a RSS feed with Article data model
 * @author vleborgne
 *
 */
class SyncController extends Controller {
    /**
     * Synchronise RSS remote contents with articles
     * @param $id of the curent reader
     */
    public function syncAction($id)
    {
        $em = $this->get('doctrine')->getManager();
        $reader = $em->getRepository('KeosuCoreBundle:Reader')->find($id);

        //Convert it to a RssReader
        $rssReader = RssReader::constructfromReader($reader);
        //geting the feed as a string
        $rssUrl=$rssReader->feed_url;

        $feed = $this->get('fkr_simple_pie.rss');
        $feed->set_feed_url($rssUrl);
        $feed->init();
        $items = $feed->get_items();
        foreach ($items as $item) {
            $this->parseAndImportArticle($item, $reader, $rssReader->striphtml, $rssReader->tags);
        }
		$this->denyAccessUnlessGranted('ROLE_ADMIN', null, 'Unable to access this page!');

		if ($this->get('security.authorization_checker')->isGranted('ROLE_ADMIN')) {
			return $this->redirect($this->generateUrl('keosu_article_viewlist'));
		} else {
			return new JsonResponse(array(
				'status' => 'OK',
				'message' => 'The reader ' . $reader->getName() . ' has been successfully synchronized.'
			));
		}
	}

	/**
	 * Synchronise all RSS remote contents with articles
	 */
	public function syncAllAction()
	{
		$em = $this->get('doctrine')->getManager();
		$readers = $em->getRepository('KeosuCoreBundle:Reader')->findBy(
			array('service' => 'RssReader')
		);

		foreach ($readers as $reader) {
			//Convert it to a RssReader
			$rssReader = RssReader::constructfromReader($reader);
			//geting the feed as a string
			$rssUrl=$rssReader->feed_url;

			$feed = $this->get('fkr_simple_pie.rss');
			$feed->set_feed_url($rssUrl);
			$feed->init();
			$items = $feed->get_items();
			foreach ($items as $item) {
				$this->parseAndImportArticle($item, $reader, $rssReader->striphtml, $rssReader->tags);
			}
		}

		if ($this->get('security.authorization_checker')->isGranted('ROLE_ADMIN')) {
			return $this->redirect($this->generateUrl('keosu_article_viewlist'));
		} else {
			return new JsonResponse(array(
				'status' => 'OK',
				'message' => 'All RSS readers have been successfully synchronized.'
			));
		}
	}

    private function parseAndImportArticle($item, $reader, $stripHtml, $tags)
    {
        $title  = ($item->get_title()       ? $item->get_title()                  : '');
        $body   = ($item->get_description() ? $item->get_description()            : '');
        $id     = ($item->get_id()          ? $item->get_id()                     : '');
        $author = ($item->get_authors()     ? $item->get_authors()[0]->get_name() : '');

        if ($item->get_content())
            $body = $item->get_content();
        if ($stripHtml)
            $body = strip_tags($body);

        if ($item->get_enclosure() && $item->get_enclosure()->get_link())
            $img = $item->get_enclosure()->get_link();
        else
            $img = '';
        $images = $item->get_item_tags('', 'image');
        if (count($images) > 0)
            $img = $images[0]['data'];

        if ($item->get_date() != null) {
            $dateString = $item->get_date(\DateTime::RFC2822);
            //Converting datestring to DateTime Object
            $date = \DateTime::createFromFormat(\DateTime::RFC2822, $dateString);
        } else {
            $date = new \DateTime('now');
        }

        //Store in database
        $this->storeArticle($title, $body, $date, $id, $img, $author,$tags, $reader);
    }

    private function storeArticle($title, $body, $date, $idext, $img, $author,$tags,$reader)
    {
        $em = $this->get('doctrine')->getManager();
        $article = $em->getRepository('KeosuDataModelArticleModelBundle:ArticleBody')->findOneByIdext($idext);

        //Create a new article if we can't find one in database
        if ($article == null) {
            $article = new ArticleBody();
            //If article exist and allowpdate is false we quit
        } else if($reader->getAllowupdate()==false){
            return;
        }

        $article->setAuthor($author);
        $article->setBody($body);
        $article->setDate($date);
        $article->setReader($reader);
        $article->setTitle($title);
        $article->setIdext($idext);
        $article->setVersion("1.0");

        if($tags != null){

            foreach ($article->getTags() as $existingTag) {
                $em->remove($existingTag);
                $article->removeTag($existingTag);
            }
            $em->flush();

            $tag = new ArticleTags();
            $tag->setTagName($tags);

            $article->setTags(new ArrayCollection());
            $tag->setArticleBody($article);
            $article->addTag($tag);
        }


        //RSS attachment
        if($img!=null){
            $attachment = new ArticleAttachment();
            $filePath = $this->downloadFile($img,$attachment->getUploadRootDir());
            $baseName = basename($img);
            $attachment->setName($baseName);
            $attachment->setPath($baseName);
			$attachment->createThumb($filePath);
			$attachment->setOrientation($filePath);
            $article->addAttachment($attachment);
        }

        $article->setDate($date);

        $em->persist($article);
        $em->flush();

    }

    private function downloadFile($url, $path) {
        file_put_contents( $path.'/'.basename($url), fopen($url, 'r'));
        return $path.'/'.basename($url);
    }

}