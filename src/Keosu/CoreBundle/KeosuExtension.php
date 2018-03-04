<?php
/************************************************************************
 * Keosu is an open source CMS for mobile app
 * Copyright (C) 2016  Pockeit
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as
 * published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 ************************************************************************/
namespace Keosu\CoreBundle;

class KeosuExtension
{

    public static $readerList = array(
        'RSS' => 'RssReader',
        'Event RSS' => 'RssEventReader',
        'iCalendar' => 'icsReader',
    );

    public static $dataModelList = array(
        'article' => array('KeosuDataModelArticleModelBundle:ArticleBody', 'pushpin'),
        'location' => array('KeosuDataModelLocationModelBundle:Location', 'map-marker'),
        'picture' => array('KeosuDataModelPictureModelBundle:Picture', 'picture'),
        'event' => array('KeosuDataModelEventModelBundle:Event', 'calendar'),
        'menu' => array('KeosuDataModelMenuModelBundle:MenuEntry', 'list'),
        'search' => array('KeosuDataModelSearchModelBundle:Search', 'search'),
        'form' => array('KeosuDataModelFormModelBundle:Form', 'font')
    );
}
