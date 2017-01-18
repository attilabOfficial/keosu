<?php
	include 'installUtil.php';
	$locale=test_input($_POST['language']);
	$dbhost=test_input($_POST['dbhost']);
	$dbport=test_input($_POST['dbport']);
	$dbname=test_input($_POST['dbname']);
	$dbusername=test_input($_POST['dbusername']);
	$dbpassword=test_input($_POST['dbpassword']);
	$adminpassword=test_input($_POST['adminpassword']);
	if($dbport==null){
		$dbport="3306";
	}

	if($dbhost==null || $dbname==null || $dbusername ==null || $adminpassword==null){
		header("Location: configure.php?error=param");
		exit;
	}

	if (file_exists(__DIR__ . '/../../app/config/parameters.yml')) {
		header("Location: configure.php?error=already");
		exit;
	}
	//Testing mysql connection
	$link = mysqli_connect($dbhost, $dbusername, $dbpassword,null,$dbport);
	if (!$link) {
		header("Location: configure.php?error=bdd");
		exit;
	}
	create_database($link,$dbname);
	import_dump($link,$dbname);
	mysqli_close($link);

	//Generating parameter.yml file
	generateParameters($dbhost, $dbport,$dbname,$dbusername,$dbpassword,$adminpassword, $locale);



?>