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
namespace Keosu\CoreBundle\Util;

class TemplateUtil {

	protected static function getTemplateDir() {
		return "keosu/templates/";
	}


	protected static function getGadgetTemplateSuffix() {
		return "gadget-template.html";
	}

	/**
	 * Delete line return
	 * Escape '
	 * @param unknown $templateString
	 * @return mixed
	 */
	public static function formatTemplateString($templateString) {
		$templateString = str_replace("\n", "", $templateString);
		$templateString = str_replace("\r\n", "", $templateString);
		$templateString = str_replace("\r", "", $templateString);
		$templateString = str_replace("'", "\'", $templateString);
		return $templateString;
	}

	
	public static function getTemplateGadgetList($gadgetName) {
		$fileList = scandir(TemplateUtil::getGadgetAbsolutePath() . $gadgetName);
		$templateList = Array();

		//Filter
		foreach ($fileList as $file) {
			if (StringUtil::endsWith($file,
					TemplateUtil::getGadgetTemplateSuffix())) {
				$templateList[$file] = $file;
			}
		}
		return $templateList;
	}
	public static function getTemplatePath($gadgetName){
		return TemplateUtil::getWebPath() .'gadget/'. $gadgetName;
	}

	public static function getAbsolutePath() {
		return null === TemplateUtil::getTemplateDir() ? null
				: TemplateUtil::getUploadRootDir() . '/'
						. TemplateUtil::getTemplateDir();
	}

	public static function getGadgetAbsolutePath() {
		return TemplateUtil::getAbsolutePath() . '/gadget/';
	}

	public static function getWebPath() {
		return null === TemplateUtil::getTemplateDir() ? null
				: TemplateUtil::getTemplateDir();
	}

	public static function getUploadRootDir() {
		return __DIR__ . '/../../../../web/';
	}

}
