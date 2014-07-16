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

use Keosu\CoreBundle\Util\StringUtil;

class PackageManager {

	// TODO find, add, remove, new

	const ROOT_DIR_PACKAGE = __DIR__."/../../../../app/Resources/packages/";

	const TYPE_PACKAGE_LIB = "lib";
	const TYPE_PACKAGE_GADGET = "gadget";
	const TYPE_PACKAGE_PLUGIN = "plugin";

	private $doctrine;

	private $container;

	public function __construct($doctrine,$container) {
		$this->doctrine = $doctrine;
		$this->container = $container;
	}
	
	/**
	 * Return the list of package for the $type requested
	 * @param $type (optionnal) TYPE_PACKAGE_GADGET or TYPE_PACKAGE_LIB or TYPE_PACKAGE_PLUGIN
	 * @return array
	 */
	public function getList($type = null) {
	
		if($type != null
			and $type != $this::TYPE_PACKAGE_GADGET
				and $type != $this::TYPE_PACKAGE_LIB
					and $type != $this::TYPE_PACKAGE_PLUGIN)
			throw new \LogicException("Wrong parameter for getList");

		$this->checkAllPackages();

		$ret = array();
		$dir = scandir($this::ROOT_DIR_PACKAGE);
		foreach($dir as $folder) {
			if($folder === "." or $folder === "..")
				continue;

			$config = \json_decode(\file_get_contents($this::ROOT_DIR_PACKAGE.$folder."/package.json"),true);

			if($type === $config["type"] or $type === null)
				$ret[] = $config["name"];

		}
		return $ret;
	}
	
	/**
	 * Check all packages throw logicException if it's not the case
	 * @return void
	 */
	public function checkAllPackages() {
		$dir = scandir($this::ROOT_DIR_PACKAGE);
		foreach($dir as $folder) {
			if($folder === "." or $folder === "..")
				continue;
			
			$this->checkPackage($this::ROOT_DIR_PACKAGE.$folder);
		}
	}
	
	/**
	 * Check a package integrity
	 * @param $packageLocation path to the package
	 * @return boolean
	 */
	public function checkPackage($packageLocation) {
		// TODO lock php execution
		// TODO test json
	
		// check package.json existance
		if(!is_file($packageLocation."/package.json"))
			throw new \LogicException("package.json not found for ".$packageLocation);
		
		$config = \json_decode(\file_get_contents($packageLocation."/package.json"),true);
		
		$requiredKeys = array("name","description","version","type");
		$optionnalKeys = array("param","require","configCordova","libJs","appParam");
		
		// check required fields
		foreach($requiredKeys as $k)
			if(!isset($config[$k]))
				throw new \LogicException("You have to give a ".$k." to your package ".$packageLocation);
				
		$packageName = $config["name"];
		
		// check type allowed
		if($config["type"] != $this::TYPE_PACKAGE_LIB 
			and $config["type"] != $this::TYPE_PACKAGE_GADGET
				and $config["type"] != $this::TYPE_PACKAGE_PLUGIN)
			throw new \LogicException("The type of your package can only be gadget, plugin or lib
										for your package ".$packageName." located at ".$packageLocation);
										
		if(preg_match("/\\s/",$config["name"]))
			throw new \LogicException("Space aren't allowed in name for your package ".$packageName." located at ".$packageLocation);

		// check type gadget
		if($config["type"] == $this::TYPE_PACKAGE_GADGET) {
			if(!is_dir($packageLocation."/templates"))
				throw new \LogicException("There is not templates folder for gadget ".$packageName." located at ".$packageLocation);
			
			$templates = scandir($packageLocation."/templates");
			foreach($templates as $t) {
				if($t == "." or $t == "..")
					continue;
				if($t != "default.html" and StringUtil::endsWith($t,".html") and array_search($t.".png",$templates) === false)
					throw new \LogicException("Missing previsualisation for template ".$t." to your gadget ".$packageName." located at ".$packageLocation);
			}
		}
	}
}
?>
