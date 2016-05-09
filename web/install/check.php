<?php
	$phpversion = phpversion();
	$isPhpVersion = version_compare(phpversion(), '5.5', '>=');
	$isCurlInstall = function_exists('curl_version');
	$isJsonInstall = phpversion('json');
	$isCtypeInstall = function_exists('ctype_print');
	$isTimeZoneSet = (date_default_timezone_get() != null);
?>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Keosu Check configuration </title>


	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
	<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>

</head>

</head>
<body>
	<div class="col-md-2"></div>
	<div class="wellcustom col-md-8">
		<h1>Checking your installation</h1>
		<?php if ($isPhpVersion){?>
			<p class="alert alert-success">
				Php version installed : <?php echo($phpversion);?>
			</p>
		<?php }else{?>
			<p class="alert alert-danger">
				Php version installed : <?php echo($phpversion);?><br/>
				Upgrade to php 5.5 or upper to use Keosu
			</p>
		<?php }?>
		<?php if ($isCurlInstall){?>
			<p class="alert alert-success">
				CURL is installed
			</p>
		<?php }else{?>
			<p class="alert alert-danger">
				Activate CURL to your PHP installation
			</p>
		<?php }?>
		<?php if ($isJsonInstall){?>
			<p class="alert alert-success">
				JSON is installed
			</p>
		<?php }else{?>
			<p class="alert alert-danger">
				Activate JSON to your PHP installation
			</p>
		<?php }?>
		<?php if ($isCtypeInstall){?>
			<p class="alert alert-success">
				CTYPE is installed
			</p>
		<?php }else{?>
		<p class="alert alert-danger">
			Activate CTYPE to your PHP installation
		</p>
		<?php }?>

		<?php if ($isTimeZoneSet){?>
			<p class="alert alert-success">
				TimeZone is set
			</p>
		<?php }else{?>
			<p class="alert alert-danger">
				Set your date.timezone property in your php.ini file <br/>
				For exemple: <br/>
				date.timezone = "Europe/Paris"
			</p>
		<?php }?>
		<?php if ($isCtypeInstall && $isCurlInstall && $isJsonInstall && $isPhpVersion && $isTimeZoneSet){?>
			<a href="configure.php" style="float:right" type="button" class="btn btn-success">
				Next : configure
			</a>
		<?php }?>

	</div>
	<div class="col-md-2"></div>
</body>
