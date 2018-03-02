<?php
	session_start();
	
	require_once("admin_config.php");

	if (isset($_SESSION['adminlogin']) && isset($_SESSION['adminUsername']) && isset($_SESSION['adminPassword'])) {
		if ($_SESSION['adminUsername'] == $adminUsername && $_SESSION['adminPassword'] == $adminPassword) {
			header("Location: " . $adminPanel);
		}
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="ISO-8859-1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="src/img/favicon.ico">

	<title>Admin Panel Login</title>

	<link href="src/css/bootstrap.css" rel="stylesheet">
	<link href="src/css/bootstrap-theme.css" rel="stylesheet">
</head>

<body>
	<div class="container theme-showcase" role="main">	
		<div class="panel panel-default" style="margin: 10px auto;background-color:transparent;width:50%;margin-bottom:30px">
			<div class="panel-heading">
				<h3 class="panel-title">Login</h3>
			</div>
			<div class="panel-body">
				<form role="form" action="index.php" method="post">
					<?php
						if (isset($_SESSION['aErr'])) {
							echo '<p class="err">Benutzername oder Passwort stimmen nicht &uuml;berein!</p></br>';
							unset($_SESSION['aErr']);
						}
					?>
				
					<div class="form-group">
						<label for="adminUsername">Benutzername</label>
						<input type="text" class="form-control" id="adminUsername" name="adminUsername" required title="Benutzername" placeholder="Benutzername">
					</div>
					
					<div class="form-group">
						<label for="adminPassword">Passwort</label>
						<input type="password" class="form-control" id="adminPassword" name="adminPassword" required title="Passwort" placeholder="Passwort">
					</div>

					<button type="submit" id="submitAdminLogin" name="submitAdminLogin" class="btn btn-primary" style="float:right;width:200px"><span class="glyphicon glyphicon-ok"></span>&nbsp; Einloggen</button>
				</form>
			</div>
		</div>		
	</div> 

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script src="src/js/bootstrap.min.js"></script>
</body>
</html>