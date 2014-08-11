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

use Keosu\CoreBundle\Model\Package;

use Keosu\CoreBundle\Util\StringUtil;

class PackageManager {

	// TODO find, add, remove, new
	// TODO add package theme support

	const ROOT_DIR_PACKAGE = '/Resources/packages/';
	const ROOT_DIR_TEMPLATE = '/../web/keosu/templates/gadget/';

	const TYPE_PACKAGE_LIB = 'lib';
	const TYPE_PACKAGE_GADGET = 'gadget';
	const TYPE_PACKAGE_PLUGIN = 'plugin';
	const TYPE_PACKAGE_BASE = 'base';

	const DEFAULT_TEMPLATE_GADGET_NAME = 'default.html';

	private $container;

	/**
	 * array of Package of all installed packages
	 */
	private $cachePackage = array();

	public function __construct($container)
	{
		$this->container = $container;
		$this->generateListOfPackage(true);
	}

	/**
	 * This function generate the list of package
	 * @param boolean $forceReload force the reload
	 */
	private function generateListOfPackage($forceReload = false)
	{
		$session = $this->container->get('session');
		$kernel = $this->container->get('kernel');
		if(!$session->has('cachePackage') || $forceReload) {
			$dir = scandir($kernel->getRootDir().$this::ROOT_DIR_PACKAGE);
			foreach($dir as $folder) {
				if($folder === '.' || $folder === '..')
					continue;
			
				$this->checkPackage($kernel->getRootDir().$this::ROOT_DIR_PACKAGE.$folder);
				$config = $this->getConfigPackage($kernel->getRootDir().$this::ROOT_DIR_PACKAGE.$folder);
				$this->cachePackage[] = new Package($config['name'],$config['type'],$config['version'],$kernel->getRootDir().$this::ROOT_DIR_PACKAGE.$folder);
			}
			$session->set('cachePackage',$this->cachePackage);
		} else {
			$this->cachePackage = $session->get('cachePackage');
		}
	}

	/**
	 * Return the list of package for the $type requested
	 * @param $type (optionnal) TYPE_PACKAGE_GADGET or TYPE_PACKAGE_LIB or TYPE_PACKAGE_PLUGIN
	 * @return array of Package
	 */
	public function getPackageList($type = null)
	{
		if($type != null
			&& $type != $this::TYPE_PACKAGE_GADGET
				&& $type != $this::TYPE_PACKAGE_LIB
					&& $type != $this::TYPE_PACKAGE_PLUGIN
						&& $type != $this::TYPE_PACKAGE_BASE)
			throw new \LogicException('Wrong parameter for getList');

		$listPackage = array();
		if($type === null) {
			$listPackage = $this->cachePackage;
		} else {
			foreach($this->cachePackage as $p) {
				if($p->getType() == $type)
					$listPackage[] = $p;
			}
		}
		return $listPackage;
	}

	/**
	 * Allow to retrieve package information form a package name
	 * @param string $name name of the package
	 * @return package
	 */
	public function findPackage($name)
	{
		$package = null;
		foreach($this->cachePackage as $p) {
			if($p->getName() == $name) {
				$package = $p;
			}
		}
		if($package === null)
			throw new \LogicException('The package '.$name.' cannot be found');

		return $package;
	}

	/**
	 * Check all packages throw logicException if it's not the case
	 * @return void
	 */
	public function checkAllPackages()
	{
		foreach($this->cachePackage as $package)
			$this->checkPackage($package->getPath());
	}

	/**
	 * Check a package integrity
	 * @param $packageLocation path to the package
	 * @return boolean
	 */
	public function checkPackage($packageLocation)
	{
		$config = $this->getConfigPackage($packageLocation);
		
		$requiredKeys = array('name','description','version','type');
		$optionnalKeys = array('param','require','configCordova','libJs','appParam');
		
		// check required fields
		foreach($requiredKeys as $k)
			if(!isset($config[$k]))
				throw new \LogicException('You have to give a '.$k.' to your package '.$packageLocation);
				
		$packageName = $config['name'];
		
		// check type allowed
		if($config['type'] != $this::TYPE_PACKAGE_LIB 
			&& $config['type'] != $this::TYPE_PACKAGE_GADGET
				&& $config['type'] != $this::TYPE_PACKAGE_PLUGIN
					&& $config['type'] != $this::TYPE_PACKAGE_BASE)
			throw new \LogicException('The type of your package can only be gadget, plugin, lib or base
										for your package '.$packageName.' located at '.$packageLocation);
										
		if(preg_match('/\\s/',$config['name']))
			throw new \LogicException('Space aren\'t allowed in name for your package '.$packageName.' located at '.$packageLocation);

		// check type gadget
		if($config['type'] == $this::TYPE_PACKAGE_GADGET) {
			if(!is_dir($packageLocation.'/templates'))
				throw new \LogicException('There is not templates folder for gadget '.$packageName.' located at '.$packageLocation);
			
			$templates = scandir($packageLocation.'/templates');
			foreach($templates as $t) {
				if($t == '.' || $t == '..')
					continue;
				if($t != $this::DEFAULT_TEMPLATE_GADGET_NAME && StringUtil::endsWith($t,'.html') && array_search($t.'.png',$templates) === false)
					throw new \LogicException('Missing previsualisation for template '.$t.' to your gadget '.$packageName.' located at '.$packageLocation);
			}
		}
	}

	/**
	 * Return the config of a package
	 * @param $packageNameOrLocation name or location of the package
	 * @return config of the package in an array.
	 */
	public function getConfigPackage($packageNameOrLocation)
	{
		// TODO lock php execution
		// TODO test json

		// not a path
		if(!strstr($packageNameOrLocation,DIRECTORY_SEPARATOR)) {
			$package = $this->findPackage($packageNameOrLocation);
			if($package !== null)
				$packageLocation = $package->getPath();
			else
				throw new \LogicException('package.json not found for package '.$packageNameOrLocation);
		}

		// check package.json existance
		if(strstr($packageNameOrLocation,DIRECTORY_SEPARATOR)) {
			if(!is_file($packageNameOrLocation.'/package.json'))
				throw new \LogicException('package.json not found for '.$packageNameOrLocation);
			else
				$packageLocation = $packageNameOrLocation;
		}
		
		return \json_decode(\file_get_contents($packageLocation.'/package.json'),true);
	}

	/**
	 * Return the path of the package
	 * @param $packageName name of the package
	 * @return string
	 */
	private function getPath($packageName)
	{
		// TODO change to cache
		$kernel = $this->container->get('kernel');
		$dir = scandir($kernel->getRootDir().$this::ROOT_DIR_PACKAGE);
		foreach($dir as $folder) {
			if($folder === '.' || $folder === '..')
				continue;

			$config = \json_decode(\file_get_contents($kernel->getRootDir().$this::ROOT_DIR_PACKAGE.$folder.'/package.json'),true);

			if($packageName === $config['name'])
				return $kernel->getRootDir().$this::ROOT_DIR_PACKAGE.'/'.$folder;

		}
		throw new \LogicException('Package '.$packageName.' not found');
	}

	/**
	 * install a new package
	 * @param $pathTopackage path where to find the package
	 * @return void
	 *
	public function install($pathToPackage)
	{
		// TODO make all step to install a package
		// TODO manage update
		// TODO manage version
		// TODO moveTo good destination
		
		$this->checkPackage($pathToPackage);
		$config = $this->getConfigPackage($pathToPackage);

		$em = $this->doctrine->getManager();
		
		$allReadyInstalled = $em->getRepository('KeosuCoreBundle:Package')->findOneBy(array(
											'name' => $config['name']
							));

		if($allReadyInstalled !== null)
			throw new \LogicException('The package '.$config['name'].' is allReadyInstalled');

		$package = new Package();
		$package->setName($config['name']);
		$package->setPath($pathToPackage); // TODO mv + name generation
		$package->setVersion($config['version']);
		$package->setType($config['type']);

		$em->persist($package);
		$em->flush();
		
		// install template
		if($package->getType() === $this::TYPE_PACKAGE_GADGET) {
			$templates = $this->getListTemplateForGadget($package->getName());
			foreach($templates as $t) {
				if($t !== $this::DEFAULT_TEMPLATE_GADGET_NAME) {
					copy($pathToPackage.'/templates/'.$t.'.png',$this::ROOT_DIR_TEMPLATE.$package->getName().'/'.$t.'.png');
					// unlink($pathToPackage.'/templates/'.$t.'.png'); TODO in final version
				}
			}
		}
	}*/

	/**
	 * This work for gadget only
	 * @param $gadgetName name of the gadget
	 * @return array with list of html template
	 */
	public function getListTemplateForGadget($gadgetName)
	{
		$pathToGadget = $this->getPath($gadgetName);
		$kernel = $this->container->get('kernel');
		
		// test good gadget type
		$config = $this->getConfigPackage($pathToGadget);
		if($config['type'] !== $this::TYPE_PACKAGE_GADGET)
			throw new \LogicException('This action works only on gadget type package');

		// get list of template
		$ret = array();
		$templates = scandir($pathToGadget.'/templates');
		$templatesGadgetFolder = $kernel->getRootDir().$this::ROOT_DIR_TEMPLATE.'/'.$gadgetName.'/';
		if(!is_dir($templatesGadgetFolder))
			mkdir($templatesGadgetFolder);

		foreach($templates as $t) {
			if($t == '.' || $t == '..')
				continue;
			if(StringUtil::endsWith($t,'.html')) {
				$ret[$t] = $t;
			}
		}
		return $ret;
	}

	/**
	 * @param name of the gadget
	 * @return boolean true if the gadget exist
	 */
	public function isGadgetExist($gadgetName)
	{
		$gadget = null;
		foreach($this->cachePackage as $p) {
			if($p->getName() === $gadgetName && $p->getType() === $this::TYPE_PACKAGE_GADGET)
				$gadget = $p;
		}
		return $gadget !== null;
	}
}
?>
