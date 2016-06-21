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
namespace Keosu\CoreBundle\Util;

class ThemeUtil {

	public static function getThemeDir() {
		return "keosu/themes/";
	}

	/**
	 * Scan the $THEME_PATH dir and return the list of file finished by $TEMPLATE_SUFFIX
	 * @return multitype:unknown
	 */

	public static function getThemeList() {
		$fileList = scandir(ThemeUtil::getAbsolutePath());
		$templateList = Array();

		//Filter
		foreach ($fileList as $file) {
			if (is_dir(ThemeUtil::getAbsolutePath() . $file) && $file != "."
					&& $file != "..") {
				$templateList[$file] = $file;
			}
		}
		return $templateList;

	}

    public static function getIconList($themeName) {
        $themeDir = ThemeUtil::getAbsolutePath().$themeName.'/style/icons/';
        $fileList = scandir($themeDir);
        $iconList = array();

        foreach ($fileList as $file) {
            if ($file != 'active' && $file != "." && $file != '..' && $file != 'LICENSE') {
                $iconList[$file] = 'keosu/themes/'.$themeName.'/style/icons/'.$file;
            }
        }

        return $iconList;
    }


	public static function getAbsolutePath() {
		return null === ThemeUtil::getThemeDir() ? null
				: ThemeUtil::getUploadRootDir() . '/'
						. ThemeUtil::getThemeDir();
	}

	public static function getWebPath() {
		return null === ThemeUtil::getThemeDir() ? null
				: ThemeUtil::getThemeDir();
	}

	public static function getUploadRootDir() {
		return __DIR__ . '/../../../../web/';
	}

}
