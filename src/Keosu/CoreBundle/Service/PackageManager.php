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
along with this program.  If not, see <http://www.gnu.org/licenses,.
************************************************************************/
namespace Keosu\CoreBundle\Service;

class PackageManager {

	const ROOT_DIR_PACKAGE = __DIR__."/../../../../app/Resources/packages/";

	const TYPE_PACKAGE_LIB = 1;
	const TYPE_PACKAGE_GADGET = 2;

	private $doctrine;

	private $container;

	public function __construct($doctrine,$container) {
		$this->doctrine = $doctrine;
		$this->container = $container;
	}
	
	/**
	 * Return the list of package for the $type requested
	 * @param $type TYPE_PACKAGE_GADGET or TYPE_PACKAGE_LIB
	 * @return array
	 */
	public function getList($type) {
		$ret = array();
		$dir = scandir($this::ROOT_DIR_PACKAGE);
		foreach($dir as $folder) {
			if($folder === "." or $folder === "..")
				continue;
			if($type == $this::TYPE_PACKAGE_GADGET && preg_match("/-/i",$folder))
				$ret[] = $folder;
			if($type == $this::TYPE_PACKAGE_LIB && !preg_match("/-/i",$folder))
				$ret[] = $folder;
		}
		return $ret;
	}
}
?>
