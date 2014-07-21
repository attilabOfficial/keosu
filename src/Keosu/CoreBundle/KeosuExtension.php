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

	// TODO deprecated ?
	/*
	public static $gadgetList = array(
			'article_gadget'          => 'Keosu\Gadget\ArticleGadgetBundle\ArticleGadget',
			'last_article_gadget'     => 'Keosu\Gadget\LastArticleGadgetBundle\LastArticleGadget',
			'chrono_gadget'           => 'Keosu\Gadget\ChronoGadgetBundle\ChronoGadget',
			'map_gadget'              => 'Keosu\Gadget\MapGadgetBundle\MapGadget',
			'menu_gadget'             => 'Keosu\Gadget\MenuGadgetBundle\MenuGadget',
			'picture_gadget'          => 'Keosu\Gadget\PictureGadgetBundle\PictureGadget',
			'pictures_gallery_gadget' => 'Keosu\Gadget\PicturesGalleryGadgetBundle\PicturesGalleryGadget',
			'aroundme_gadget'         => 'Keosu\Gadget\AroundMeGadgetBundle\AroundMeGadget',
			'calendar_gadget'         => 'Keosu\Gadget\CalendarGadgetBundle\CalendarGadget',
			'authentication_gadget'   => 'Keosu\Gadget\AuthenticationGadgetBundle\AuthenticationGadget',
			'my_account_gadget'       => 'Keosu\Gadget\MyAccountGadgetBundle\MyAccountGadget',
	);*/

	public static $readerList = array(
			'RssReader'      => 'RSS',
			'RssEventReader' => 'Event RSS',
			'icsReader'      => 'iCalendar',
	);
	
	public static $dataModelList = array(
			'article'  => 'KeosuDataModelArticleModelBundle:ArticleBody',
			'location' => 'KeosuDataModelMapModelBundle:PointOfInterest',
			'picture'  => 'KeosuDataModelPictureModelBundle:Picture',
			'event'    => 'KeosuDataModelEventModelBundle:Event',
	);
}
