<?php

namespace Keosu\CoreBundle\Entity\Model;

use Doctrine\ORM\Mapping as ORM;	
use \ZipArchive;
use Symfony\Component\Validator\Constraints\Length;

/**
 * @ORM\MappedSuperclass
 */
abstract class ThemeDataModel{
	const THEME = 'themes';
	const TEMPLATES = 'templates';
	const PAGE = 'page-template';
	const NONE = '';
	
	/**
	 *
	 * @var string $path
	 *     
	 *      @ORM\Column(name="path", type="string", length=255)
	 */
	private $path;
	
	/**
	 * Set path
	 *
	 * @param string $path        	
	 * @return ArticleAttachment
	 */
	public 

	function setPath($path) {
		$this->path = $path;
		
		return $this;
	}
	
	/**
	 * Get path
	 *
	 * @return string
	 */
	public function getPath() {
		return $this->path;
	}
	private $file;
	public function getAbsolutePath() {
		return null === $this->path ? null : $this->getUploadRootDir () . '/' . $this->path;
	}
	public function getWebPath($where) {
		return null === $this->path ? null : '/' . $this->getUploadDir ( $where ) . '/' . $this->path;
	}
	public function getUploadRootDir($where) {
		// the absolute directory path where uploaded
		// documents should be saved
		return __DIR__ . '/../../../../../web/' . $this->getUploadDir ( $where );
	}
	protected function getUploadDir($where) {
		// get rid of the __DIR__ so it doesn't screw up
		// when displaying uploaded doc/image in the view.
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
				return 'Zip File Function error : ' . $errorString;
			}
		}
		return 'Zip File Function error : unknown';
	}
	public function setFile($file) {
		$zip = new ZipArchive ();
		$j = 0;
		if (($unzip = $zip->open ( $file )) === TRUE) {
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
		} else if ($unzip !== TRUE) {
			$zip->close ();
			die ( $this->zipFileErrMsg ( $unzip ) );
		} else {
			$zip->close ();
			die ( 'The theme already  exists ' );
		}
		$this->path = $file->getClientOriginalName ();
	}
	public function getFile() {
		return $this->file;
	}
}


/*if (strpos ( $array [1], '--' ) === TRUE && $array [1][count($array [1]) - 2] >= '0' && $array [1][count($array [1]) - 2] <= '9')
							$replaceIndex = str_replace('--' . substr(strrchr($array [1], "-"), 1), '--' . strval(intval(substr(strrchr($array [1], "-"), 1)) + 1),  $nameIndex );
							
						else
							$replaceIndex = str_replace ( $array [1], $array [1] . '--1', $nameIndex );
							$zip->renameName ( $zip->getNameIndex ( $i ), $replaceIndex); */