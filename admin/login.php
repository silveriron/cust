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

	<link href="src/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
	<!-- Ionicons -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
	<!-- Theme style -->
	<link rel="stylesheet" href="src/css/AdminLTE.min.css">	
	<!-- iCheck -->
	<link rel="stylesheet" href="src/plugins/iCheck/square/blue.css">	
</head>

<body class="hold-transition login-page">
	<div class="login-box">
	    <div class="login-logo">
	        <a href="../../index2.html"><b>Admin</b>Panel</a>
	    </div>
	    <!-- /.login-logo -->
	    <div class="login-box-body">
	        <p class="login-box-msg">Melden Sie sich an, um Ihre Sitzung zu starten</p>
	        <form action="index.php" method="post">
	            <div class="form-group <?php echo (isset($_SESSION['aErr'])) ? 'has-error': 'has-feedback';?>">
					<?php
						if (isset($_SESSION['aErr'])) {
							echo '<label class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i> Benutzername oder Passwort stimmen nicht &uuml;berein!</label>';							
						}
					?>	            	
	                <input type="text" class="form-control" id="adminUsername" name="adminUsername" required title="Benutzername" placeholder="Benutzername">
	                <span class="glyphicon glyphicon-user form-control-feedback"></span>
	            </div>
	            <div class="form-group <?php echo (isset($_SESSION['aErr'])) ? 'has-error': 'has-feedback';?>">
	                <input type="password" class="form-control" id="adminPassword" name="adminPassword" required title="Passwort" placeholder="Passwort">
	                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
	            </div>
	            <div class="row">
	                <div class="col-xs-8">
	                    <div class="checkbox icheck">
	                        <label>
	                        <input type="checkbox"> Erinnere dich an mich
	                        </label>
	                    </div>
	                </div>
	                <!-- /.col -->
	                <div class="col-xs-4">
	                    <button type="submit" id="submitAdminLogin" name="submitAdminLogin" class="btn btn-primary btn-block btn-flat">Einloggen</button>
	                </div>
	                <!-- /.col -->
	            </div>
	        </form>
	        <?php 
		        if (isset($_SESSION['aErr'])) {
		        	unset($_SESSION['aErr']);
		        }
	        ?>
	    </div>
	    <!-- /.login-box-body -->
	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script src="src/js/bootstrap.min.js"></script>
	<!-- iCheck -->
	<script src="src/plugins/iCheck/icheck.min.js"></script>	

	<script>
		$(function () {
			$('input').iCheck({
				checkboxClass: 'icheckbox_square-blue',
				radioClass: 'iradio_square-blue',
				increaseArea: '20%' // optional
			});
		});
	</script>
</body>
</html>