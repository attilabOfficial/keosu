<?php

namespace Keosu\CoreBundle\Entity\Model;

use Doctrine\ORM\Mapping as ORM;
use \ZipArchive;

/**
 * @ORM\MappedSuperclass
 */
abstract class ThemeDataModel {
	const THEME = 'themes';
	const TEMPLATES = 'templates';
	const PAGE = 'page-template';
	const NONE = '';
	private $file;
	public function getUploadRootDir($where) {
		return __DIR__ . '/../../../../../web/' . $this->getUploadDir ( $where );
	}
	protected function getUploadDir($where) {
		return 'keosu/' . $where;
	}
	
	/**
	 * Move temp file to upload dir and save it in database
	 *
	 * @param unknown $file        	
	 */
	function zipFileErrMsg($errno) {
		$errorCode = array (
				ZipArchive::ER_EXISTS => 'File already exists.',
				ZipArchive::ER_INCONS => 'Zip archive inconsistent.',
				ZipArchive::ER_INVAL => 'Invalid argument.',
				ZipArchive::ER_MEMORY => 'Malloc failure',
				ZipArchive::ER_NOENT => 'No Such file.',
				ZipArchive::ER_NOZIP => 'Not a zip archive.',
				ZipArchive::ER_OPEN => 'Can\'t open file.',
				ZipArchive::ER_READ => 'Read error.',
				ZipArchive::ER_SEEK => 'Seek error' 
		);
		foreach ( $errorCode as $errorNum => $errorString ) {
			if ($errorNum == $errno) {
				return $errorString;
			}
		}
		return 'Error. You must change the variable "upload_max_filesize" in php.ini file';
	}
	public function setFile($file) {
		$this->file = $file;
		return $file;
	}
	public function getFile() {
		return $this->file;
	}
	public function upload() {
		$zip = new ZipArchive ();
		$j = 0;
		if ($this->file === null)
			return "You must upload a zip archive or cancel.";
		if (($unzip = $zip->open ( $this->file )) === TRUE) {
			for($i = 0; $i < $zip->numFiles; $i ++) {
				if (substr ( ($nameIndex = $zip->getNameIndex ( $i )), 0, 7 ) === self::THEME . '/' || substr ( $zip->getNameIndex ( $i ), 0, 14 ) === self::PAGE . '/') {
					if (substr ( $zip->getNameIndex ( $i ), 0, 7 ) === self::THEME . '/' && count ( ($array = explode ( '/', $nameIndex )) ) === 3 && file_exists ( $this->getUploadRootDir ( self::NONE ) . $nameIndex ) && $array [2] [0] !== '.') {
						for($j = 1; file_exists ( $this->getUploadRootDir ( self::THEME ) . '/' . $array [1] . '--' . $j ); $j ++) {
						}
					} else if (substr ( $zip->getNameIndex ( $i ), 0, 7 ) === self::THEME . '/' && count ( explode ( '/', $nameIndex ) ) === 3 && ! file_exists ( $this->getUploadRootDir ( self::NONE ) . $nameIndex ) && $array [2] [0] !== '.')
						$j = 0;
					if ($j !== 0)
						$zip->renameName ( $zip->getNameIndex ( $i ), str_replace ( $array [1], $array [1] . '--' . $j, $nameIndex ) );
					$zip->extractTo ( $this->getUploadRootDir ( (substr ( $zip->getNameIndex ( $i ), 0, 14 ) === self::PAGE . '/') ? self::TEMPLATES . '/' : self::NONE ), $zip->getNameIndex ( $i ) );
				}
			}
			$zip->close ();
			return null;
		} else {
			return $this->zipFileErrMsg ( $unzip );
		}
	}
}
