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
namespace Keosu\Reader\RssReaderBundle;

use Keosu\CoreBundle\Entity\Reader;
use Keosu\CoreBundle\ReaderInterface;

//Custom properties stecific to this reader
class RssReader implements ReaderInterface {
	public $name;
	private $service = "RssReader";
	public $feed_url; //Url of RSS feed
	public $striphtml;
	public $tags;
	public $allowupdate;
	public $linkedEntity="KeosuDataModelArticleModelBundle:ArticleBody";

	//Constructor to create a RssReader from a common Reader
	public function __construct() {
		$this->config = array();
		$this->allowupdate =false;
		$this->striphtml=true;
	}

	//Constructor to create a RssReader from a common Reader
	public static function constructfromReader($reader) {
		$instance = new self();
		if (is_a($reader, 'Keosu\CoreBundle\Entity\Reader')
				&& $reader->getService() == $instance->getService()) {
			$instance->name = $reader->getName();
			$readerConfig = $reader->getConfig();
			$instance->striphtml = $readerConfig['striphtml'];
			$instance->feed_url = $readerConfig['feed_url'];
			$instance->allowupdate = $reader->getAllowupdate();
			$instance->tags = $readerConfig['tags'];;

		}
		return $instance;
	}

	//Convert a RssReader to a Keosu\ReaderManagerBundle\Entity\Reader
	public function getAsCommonReader() {
		$commonReader = new Reader();

		//name and feed url can't be null
		if ($this->name != null && $this->feed_url != null) {
			$config = array();
			$config['feed_url'] = $this->feed_url;
			$config['striphtml'] = $this->striphtml;
			$config['tags'] = $this->tags;

			$commonReader->setName($this->name);
			$commonReader->setService($this->service);
			$commonReader->setConfig($config);
			$commonReader->setAllowupdate($this->allowupdate);
			$commonReader->setLinkedEntity($this->linkedEntity);

			return $commonReader;
		}
	}

	//Convert a RssReader to a Keosu\ReaderManagerBundle\Entity\Reader
	public function convertAsExistingCommonReader($commonReader) {
		//user and password can be null
		if ($this->name != null && $this->feed_url != null) {
			$config = array();
			$config['feed_url'] = $this->feed_url;
			$config['striphtml'] = $this->striphtml;
			$config['tags'] = $this->tags;
			$commonReader->setName($this->name);
			$commonReader->setService($this->service);
			$commonReader->setConfig($config);
			$commonReader->setAllowupdate($this->allowupdate);
			$commonReader->setLinkedEntity($this->linkedEntity);
		}
	}

	public function getService() {
		return $this->service;
	}

}
