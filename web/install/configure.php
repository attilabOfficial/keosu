<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Keosu configuration </title>

	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
	<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>

</head>
<body>
<?php
$error=@$_GET["error"];
?>
	<div class="col-md-2"></div>
	<div class="wellcustom col-md-8">
		<h1>Configuring your installation</h1>
		<?php if($error!=null){?>
			<p class="alert alert-danger">
				<?php if($error=="param"){?>
					Parameters can't be null
				<?php }?>
				<?php if($error=="already"){?>
					Your installation is already done. If you want to modify it please edit app/config/parameters.yml file
				<?php }?>
				<?php if($error=="bdd"){?>
					Can't connect to your database. Check your parameters. <br/>
					Try to create your database manually (with phpmyadmin or an other client) and try again.
				<?php }?>
				<?php if($error=="bdd_already"){?>
					Your database name already exist, please choose a new name
				<?php }?>
			</p>
		<?php }?>
		<form action="installdb.php" method="post" onsubmit="return validateForm()">
			<div class="col-lg-3 configurelabel">
				Language (fr or en)
			</div>
			<input class="form-control input-box" id="language" type="text" name="language" placeholder="fr or en">
			<br/>
			<div class="col-lg-3 configurelabel">
				Database Host
			</div>
			<br/>
			<input class="form-control input-box" id="dbhost" type="text" name="dbhost" placeholder="Host of your database, 127.0.0.1 for exemple (note: do not use localhost)">
			<br/>
			<div class="col-lg-3 configurelabel">
				Database Name
			</div>
			<input class="form-control input-box" id="dbname" type="text" name="dbname" placeholder="Choose a name without space and without special characters">
			<br/>
			<div class="col-lg-3 configurelabel">
				Database Port
			</div>
			<input class="form-control input-box" id="dbport" type="text" name="dbport" placeholder="Default port for Mysql is 3306">
			<br/>
			<div class="col-lg-3 configurelabel">
				Database Username
			</div>
			<input class="form-control input-box" id="dbusername" type="text" name="dbusername" placeholder="The username you use to connect to your database (must be able to create a new database)">
			<br/>
			<div class="col-lg-3 configurelabel">
				Database Password
			</div>
			<input class="form-control input-box" id="dbpassword" type="password" name="dbpassword" placeholder="The password you use to connect to your database (leave blank if there is no password)">
			<br/>
			<div class="col-lg-3 configurelabel">
				Keosu Admin password
			</div>
			<input class="form-control input-box" id="adminpassword" type="password" name="adminpassword" placeholder="Create a password for Keosu">
			<br/>
			<div class="col-lg-3 configurelabel">
				Retype Keosu admin password
			</div>
			<input class="form-control input-box" id="adminpassword1" type="password" name="adminpassword1" placeholder="Create a password for Keosu">
			<br/>

			<button class="btn btn-success standard-button2 ladda-button" type="submit" style="float:right" id="submit" name="submit" data-style="expand-left">Start installation</button>

		</form>
	</div>
	<div class="col-md-2"></div>

<script>
	function validateForm() {
		var dbhost = $("#dbhost").val();
		var dbport = $("#dbport").val();
		var dbname = $("#dbname").val();
		var dbusername = $("#dbusername").val();
		var dbpassword = $("#dbpassword").val();
		var adminpassword = $("#adminpassword").val();
		var adminpassword1 = $("#adminpassword1").val();


		if(dbhost.indexOf(" ") > -1
			|| dbport.indexOf(" ") > -1
			|| dbname.indexOf(" ") > -1
			|| dbusername.indexOf(" ") > -1
			|| dbpassword.indexOf(" ") > -1
			|| adminpassword.indexOf(" ") > -1 ){

			alert("Your values can't contain space");
			return false;
		}
		if(adminpassword!=adminpassword1){
			alert("Your two admin passwords are not the same");
			return false;
		}

		if((dbhost.length < 3)
			|| (dbname.length < 3)
			|| (dbusername.length < 3)
			|| (adminpassword.lenght<3)){
			alert("Your values must have at least 3 caracteres");
			return false;

		}
		return true;
	};
</script>

</body>