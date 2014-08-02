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
namespace Keosu\CoreBundle\Model;

class ConfigureModel {
	private $databaseHost;
	private $databaseName;
	private $databasePort;
	private $databaseUsername;
	private $databasePassword;
	private $urlBase;
	private $urlParam;
	
	public function __construct() {
		$this->databaseHost ='localhost';
		$this->databaseName='keosu';
		$this->databasePort='3306';
		$this->databaseUsername='root';
		
	}
	
	public function getDatabaseType() {
		return 'pdo_mysql';
	}
	public function getDatabaseHost() {
		return $this->databaseHost;
	}
	public function setDatabaseHost($databaseHost) {
		$this->databaseHost = $databaseHost;
	}
	public function getDatabaseName() {
		return $this->databaseName;
	}
	public function setDatabaseName($databaseName) {
		$this->databaseName = $databaseName;
	}
	public function getDatabasePort() {
		return $this->databasePort;
	}
	public function setDatabasePort($databasePort) {
		$this->databasePort = $databasePort;
	}
	public function getDatabaseUsername() {
		return $this->databaseUsername;
	}
	public function setDatabaseUsername($databaseUsername) {
		$this->databaseUsername = $databaseUsername;
	}
	public function getDatabasePassword() {
		return $this->databasePassword;
	}
	public function setDatabasePassword($databasePassword) {
		$this->databasePassword = $databasePassword;
	}
	public function getUrlBase() {
		return $this->urlBase;
	}
	public function setUrlBase($urlBase) {
		$this->urlBase = $urlBase;
	}
	public function getUrlParam() {
		return $this->urlParam;
	}
	public function setUrlParam($urlParam) {
		$this->urlParam = $urlParam;
	}
}
