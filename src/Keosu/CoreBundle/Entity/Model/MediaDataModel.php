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
namespace Keosu\CoreBundle\Entity\Model;

use Doctrine\ORM\Mapping as ORM;

use Keosu\CoreBundle\Entity\Model\DataModel;
use Keosu\CoreBundle\Util\PathUtil;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\MappedSuperclass
 */
abstract class MediaDataModel extends DataModel
{
	/**
	 * @var string $path
	 *
	 * @ORM\Column(name="path", type="string", length=255)
	 */
	private $path;

	/**
     * @Assert\Image(
     *     minWidth = 200,
     *     maxWidth = 1000,
     *     minHeight = 200,
     *     maxHeight = 1000
     * )
     */
	private $file;


	/**
	 * Set path
	 *
	 * @param string $path
	 * @return ArticleAttachment
	 */
	public function setPath($path) {
		$this->path=$path;
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

	public function getAbsolutePath() {
		return null === $this->path ? null
				: PathUtil::getRootDir() . '/' . $this->path;;
	}

	public function getWebPath() {
		return null === $this->path ? null
				: '/' . $this->getUploadDir() . '/' . $this->path;
	}
	public function getThumbWebPath() {
		return null === $this->path ? null
			: '/' . $this->getUploadDir() . '/min.' . $this->path;
	}

	public function getUploadRootDir() {
		// the absolute directory path where uploaded
		// documents should be saved
		return PathUtil::getRootDir() . $this->getUploadDir();
	}

	protected function getUploadDir() {
		// get rid of the __DIR__ so it doesn't screw up
		// when displaying uploaded doc/image in the view.
		return 'uploads/documents';
	}

	/**
	 * Move temp file to upload dir and save it in database
	 * @param unknown $file
	 */
	public function setFile($file) {
		$time = time();
		$this->path = $time."_".$file->getClientOriginalName();
		$this->createThumb($file);
		$file->move($this->getUploadRootDir(), $time."_".$file->getClientOriginalName());
	}
	public function getFile() {
		return $this->file;
	}

	public function createThumb($file){
		$size = getimagesize($file);
		if ($size['mime'] == 'image/jpeg'){
			$ratio = $size[0]/$size[1]; // width/height
			if( $ratio > 1) {
				$width = 100;
				$height = 100/$ratio;
			}
			else {
				$width = 100*$ratio;
				$height = 100;
			}
			$src = imagecreatefromstring(file_get_contents($file));
			$dst = imagecreatetruecolor($width,$height);
			imagecopyresampled($dst,$src,0,0,0,0,$width,$height,$size[0],$size[1]);
			imagedestroy($src);
			imagejpeg($dst,$this->getUploadRootDir()."/min.".$this->path);
		}else{
			copy($file,$this->getUploadRootDir()."/min.".$this->pathŒ);
		}

	}

}
