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
namespace Keosu\Reader\RssReaderBundle\Controller;
use Keosu\DataModel\ArticleModelBundle\Entity\ArticleAttachment;

use Keosu\Reader\RssReaderBundle\RssReader;
use Symfony\Component\HttpFoundation\File\UploadedFile;

use Keosu\DataModel\ArticleModelBundle\Entity\ArticleBody;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\DomCrawler\Crawler;

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
	public function syncAction($id) {

		/**
		 * Init Keosu (local) connection and managers
		 */
		$Keosu_manager = $this->get('doctrine')->getManager();
		$Keosu_repository_article = $Keosu_manager
				->getRepository(
						'KeosuDataModelArticleModelBundle:ArticleBody');
		
		/**
		 * Get the curent reader to initialize  connection
		 */
		$reader = $Keosu_manager->getRepository('KeosuCoreBundle:Reader')
				->find($id);
		//Convert it to a RssReader
		$rssReader = RssReader::constructfromReader($reader);
		
		//geting the feed as a string
		$rssurl=$rssReader->feed_url;
		$curl = curl_init($rssurl);
		curl_setopt($curl, CURLOPT_HTTPHEADER,
					array('Content-Type: text/xml',
					'User-Agent: Keosu-UA'));
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
		$feedstring = utf8_decode(curl_exec($curl));
		curl_close($curl);
		
		//Parse feed to get all elements
		$craw = new Crawler($feedstring);
		$entries = $craw->filter('item');//Item tag is an entry
		foreach ($entries as $entry) {
			$this
				->parseAndImportArticle($entry, $reader,$rssReader->striphtml);
		}
		//return $this
			//	->render('KeosuCoreBundle:Reader:debug.html.twig'
				//		);
		return $this
				->redirect($this->generateUrl('keosu_article_viewlist'));
	}
	private function parseAndImportArticle($entry, $reader, $striphtml) {
		//Seting default value to avoid doctrine errors
		$title="";
		$body="";
		$date=new \DateTime("now");
		$idext="";
		$img="";
		$author="";

		//Getting all elements from entry (DOMElement) object
		if($entry->getElementsByTagName("title")->item(0)!=null)
			$title=$entry->getElementsByTagName("title")->item(0)->nodeValue;
		if($entry->getElementsByTagName("description")->item(0)!=null){
			$body=$entry->getElementsByTagName("description")->item(0)->nodeValue;
			if($striphtml){
				$body = strip_tags($body);
			}
		}
		
		if($entry->getElementsByTagName("pubdate")->item(0)!=null){
			$dateString = $entry->getElementsByTagName("pubdate")->item(0)->nodeValue;
			//Converting datestring to DateTime Object
			$date=\DateTime::createFromFormat(\DateTime::RFC2822,$dateString );	
		}
		if($entry->getElementsByTagName("guid")->item(0)!=null)
			$idext=$entry->getElementsByTagName("guid")->item(0)->nodeValue;
		if($entry->getElementsByTagName("enclosure")->item(0)!=null){
			$img=$entry->getElementsByTagName("enclosure")->item(0)->getAttribute('url');
		}
		if($entry->getElementsByTagName("dc:creator")->item(0)!=null)
			$author=$entry->getElementsByTagName("dc:creator")->item(0)->nodeValue;
		
		print("hello2");
		//Store in database
		$this->storeArticle($title, $body, $date, $idext, $img, $author,
			$reader);
		
	}
	
	private function storeArticle($title, $body, $date, $idext, $img, $author,
			$reader) {
		print("hello");
		//Test if article already exist
		$article = $this->get('doctrine')->getManager()
			->getRepository(
				'KeosuDataModelArticleModelBundle:ArticleBody')
				->findOneByIdext($idext);
	
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
		//RSS attachment
		if($img!=null){
			$attachment = new ArticleAttachment();
			$filePath=$this->downloadFile($img,$attachment->getUploadRootDir());
			$baseName=basename($img);
			$file=new UploadedFile($filePath,$baseName);
			$attachment->setName($baseName);		
			$attachment->setPath($baseName);
			$article->addAttachment($attachment);
		}
		
		$article->setDate($date);
		$this->get('doctrine')->getManager('default')->persist($article);
		$this->get('doctrine')->getManager('default')->flush();
	
	}

	private function downloadFile($url, $path) {
		file_put_contents( $path.'/'.basename($url), fopen($url, 'r'));
		return $path.'/'.basename($url);
	}

}
