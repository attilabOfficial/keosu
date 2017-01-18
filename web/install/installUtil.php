<?php
	function create_database($link,$dbname){
		//Creating database
		$sql = 'CREATE DATABASE '.$dbname;
		mysqli_query($link,$sql);
	}
	function import_dump($link,$dbname){
		//Import mysql dump file
		$templine = '';
		mysqli_select_db($link,$dbname);
		$lines = file(__DIR__ . '/sql/dump.sql');
		foreach ($lines as $line){
			// Skip it if it's a comment
			if (substr($line, 0, 2) == '--' || $line == '')
				continue;
			// Add this line to the current segment
			$templine .= $line;
			// If it has a semicolon at the end, it's the end of the query
			if (substr(trim($line), -1, 1) == ';'){
				// Perform the query
				if (!mysqli_query($link,$templine)) {
					header("Location: configure.php?error=bdd");
					exit;
				}
				// Reset temp variable to empty
				$templine = '';
			}
		}
	}
	function generateParameters($dbhost, $dbport,$dbname,$dbusername,$dbpassword,$adminpassword, $locale){
		$currentUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
		$lastSlach = strrpos($currentUrl, "/");
		$currentUrl = substr($currentUrl,0,$lastSlach );
		$lastSlach = strrpos($currentUrl, "/");
		$currentUrl = substr($currentUrl,0,$lastSlach );
		$url_param='/app_dev.php/';

		$content =
			'parameters:' . PHP_EOL .
			'    database_driver: pdo_mysql' . PHP_EOL .
			'    database_host: ' . $dbhost . PHP_EOL .
			'    database_port: ' . $dbport . PHP_EOL .
			'    database_name: ' . $dbname . PHP_EOL .
			'    database_user: ' . $dbusername . PHP_EOL .
			'    database_password: ' . $dbpassword . PHP_EOL .
			'    database_path: ~' . PHP_EOL.
			'    url_base: ' . $currentUrl . PHP_EOL .
			'    url_param: ' . $url_param . PHP_EOL.
			'    mailer_transport: smtp' . PHP_EOL.
			'    mailer_host: localhost' . PHP_EOL.
			'    mailer_user: ~'  . PHP_EOL.
			'    mailer_password: ~' . PHP_EOL.
			'    admin_password: ' .$adminpassword. PHP_EOL.
			'    locale: ' .$locale.  PHP_EOL.
			'    secret: '.generateRandomString() .  PHP_EOL.
			'    installer: false' .  PHP_EOL;

		writeFile($content, 'parameters.yml');
		header("Location: ".$currentUrl.$url_param);
		exit;
	}
	function writeFile($content, $fileName){
		$fileName = __DIR__ . '/../../app/config/' . $fileName;
		if (file_exists($fileName)) {
			unlink($fileName);
		}
		$file = fopen($fileName, "x+");
		fwrite($file, $content);
		fclose($file);
	}
	function generateRandomString($length = 20) {
		return substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, $length);
	}
	function test_input($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}

?>