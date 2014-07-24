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


class ExporterUtil {
	public static function getExportPath() {
		return "keosu/export";
	}

	public static function getAbsolutePath() {
		return null === ExporterUtil::getExportPath() ? null
				: PathUtil::getRootDir() 
						. ExporterUtil::getExportPath();
	}

	public static function getWebPath() {
		return null === ExporterUtil::getExportPath() ? null
				: '/web/' . ExporterUtil::getExportPath();
	}
	
	public static function boolToString($bool){
		//return $bool;
		return var_export($bool, true);
	}

	public static function getSplashsIconesDir($appId){
		return PathUtil::getRootDir().'keosu/res/'.$appId."/";
	}
}
