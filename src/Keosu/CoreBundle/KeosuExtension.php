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
namespace Keosu\CoreBundle;

class KeosuExtension {

	public static $gadgetList = array(
			'article_gadget' => 'article_gadget',
			'last_article_gadget' => 'last_article_gadget',
			'chrono_gadget' => 'chrono_gadget',
			'map_gadget' => 'map_gadget',
			'menu_gadget' => 'menu_gadget',
			'picture_gadget' => 'picture_gadget',
			'pictures_gallery_gadget' => 'pictures_gallery_gadget',
			'aroundme_gadget'=>'aroundme_gadget',
			'calendar_gadget'=>'calendar_gadget',
	);

	
	public static $readerList = array(
			'RssReader' => 'RSS',
			'RssEventReader' => 'Event RSS',
			'icsReader' => 'iCalendar',
	);
	
	public static $dataModelList = array(
			'article' => 'article',
			'map'=>'map',
			'picture' => 'picture',
			'event' => 'event',
	);
}
