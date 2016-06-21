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

class FilesUtil {

	public static function deleteDir($dir) {
		if (is_dir($dir)) {
			$dir_content = scandir($dir);
			if($dir_content !== FALSE){
				foreach ($dir_content as $entry)
				{
					if(!in_array($entry, array('.','..'))){
						$entry = $dir . '/' . $entry;
						if(!is_dir($entry)){
							unlink($entry);
						}
						else{
							self::deleteDir($entry);
						}
					}
				}
			}
			rmdir($dir);
		}
	}

	public static function copyFolder($source, $dest) {
	
		if(!is_dir($dest)) {
			@mkdir($dest);
		}

		foreach ($iterator = new \RecursiveIteratorIterator(
				new \RecursiveDirectoryIterator($source,
						\RecursiveDirectoryIterator::SKIP_DOTS),
				\RecursiveIteratorIterator::SELF_FIRST) as $item) {
			if ($item->isDir()) {
				@mkdir($dest . DIRECTORY_SEPARATOR . $iterator->getSubPathName());
			} else {
				copy($item,
						$dest . DIRECTORY_SEPARATOR
								. $iterator->getSubPathName());
			}
		}
	}

	public static function  copyContent($string, $file) {
		$file = fopen ($file, "w");
		fwrite($file, $string);
		fclose ($file);
	}
	

}
