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
namespace Keosu\CoreBundle\Model;

use Symfony\Component\HttpFoundation\File\File;

/**
 * Icons
 */
class Icons {

    // Android
    private $iconA36;
    private $iconA48;
    private $iconA72;
    private $iconA96;

    // IOS
    private $iconI57;
    private $iconI72;
    private $iconI114;
    private $iconI120;
    private $iconI76;
    private $iconI152;
    private $iconI144;


    public function getAbsolutePath($os) {
        return $this->getUploadRootDir($os) . '/';
    }

    public function getWebPath() {
        return '/' . $this->getUploadDir() . '/';
    }

    public function getUploadRootDir($os) {
        // the absolute directory path where uploaded
        // documents should be saved
        return __DIR__ .'/../../../../web/' . $this->getUploadDir($os);
    }

    protected function getUploadDir($os) {
        // get rid of the __DIR__ so it doesn't screw up
        // when displaying uploaded doc/image in the view.
        return 'keosu/res/tmp/icons/'.$os;
    }


    /**
     * Set iconA36
     *
     * @param file $iconA36
     * @return Icons
     */
    public function setIconA36(File $iconA36)
    {
        $iconA36->move($this->getUploadRootDir("android"), "iconA36.png");
    
        return $this;
    }

    /**
     * Get iconA36
     *
     * @return file 
     */
    public function getIconA36()
    {
        return $this->iconA36;
    }

    /**
     * Set iconA48
     *
     * @param file $iconA48
     * @return Icons
     */
    public function setIconA48(File $iconA48)
    {
        $iconA48->move($this->getUploadRootDir("android"), "iconA48.png");
    
        return $this;
    }

    /**
     * Get iconA48
     *
     * @return file 
     */
    public function getIconA48()
    {
        return $this->iconA48;
    }

    /**
     * Set iconA72
     *
     * @param file $iconA72
     * @return Icons
     */
    public function setIconA72(File $iconA72)
    {
        $iconA72->move($this->getUploadRootDir("android"), "iconA72.png");
    
        return $this;
    }

    /**
     * Get iconA72
     *
     * @return file 
     */
    public function getIconA72()
    {
        return $this->iconA72;
    }

    /**
     * Set iconA96
     *
     * @param file $iconA96
     * @return Icons
     */
    public function setIconA96(File $iconA96)
    {
        $iconA96->move($this->getUploadRootDir("android"), "iconA96.png");
    
        return $this;
    }

    /**
     * Get iconA96
     *
     * @return file 
     */
    public function getIconA96()
    {
        return $this->iconA96;
    }

    /**
     * Set iconI57
     *
     * @param file $iconI57
     * @return Icons
     */
    public function setIconI57(File $iconI57)
    {
        $iconI57->move($this->getUploadRootDir("ios"), "iconI57.png");
    
        return $this;
    }

    /**
     * Get iconI57
     *
     * @return file 
     */
    public function getIconI57()
    {
        return $this->iconI57;
    }

    /**
     * Set iconI72
     *
     * @param file $iconI72
     * @return Icons
     */
    public function setIconI72(File $iconI72)
    {
        $iconI72->move($this->getUploadRootDir("ios"), "iconI72.png");
    
        return $this;
    }

    /**
     * Get iconI72
     *
     * @return file 
     */
    public function getIconI72()
    {
        return $this->iconI72;
    }

    /**
     * Set iconI114
     *
     * @param file $iconI114
     * @return Icons
     */
    public function setIconI114(File $iconI114)
    {
        $iconI114->move($this->getUploadRootDir("ios"), "iconI114.png");
    
        return $this;
    }

    /**
     * Get iconI114
     *
     * @return file 
     */
    public function getIconI114()
    {
        return $this->iconI114;
    }

    /**
     * Set iconI120
     *
     * @param file $iconI120
     * @return Icons
     */
    public function setIconI120(File $iconI120)
    {
        $iconI120->move($this->getUploadRootDir("ios"), "iconI120.png");
    
        return $this;
    }

    /**
     * Get iconI120
     *
     * @return file 
     */
    public function getIconI120()
    {
        return $this->iconI120;
    }

    /**
     * Set iconI152
     *
     * @param file $iconI152
     * @return Icons
     */
    public function setIconI152(File $iconI152)
    {
        $iconI152->move($this->getUploadRootDir("ios"), "iconI152.png");
    
        return $this;
    }

    /**
     * Get iconI152
     *
     * @return file 
     */
    public function getIconI152()
    {
        return $this->iconI152;
    }

    /**
     * Set iconI76
     *
     * @param file $iconI76
     * @return Icons
     */
    public function setIconI76(File $iconI76)
    {
        $iconI76->move($this->getUploadRootDir("ios"), "iconI76.png");
    
        return $this;
    }

    /**
     * Get iconI76
     *
     * @return file 
     */
    public function getIconI76()
    {
        return $this->iconI76;
    }

    /**
     * Set iconI144
     *
     * @param file $iconI144
     * @return Icons
     */
    public function setIconI144(File $iconI144)
    {
        $iconI144->move($this->getUploadRootDir("ios"), "iconI144.png");
    
        return $this;
    }

    /**
     * Get iconI144
     *
     * @return file 
     */
    public function getIconI144()
    {
        return $this->iconI144;
    }
}
