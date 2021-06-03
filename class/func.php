<?php

function htmlsil($ka) 
{
$ka = str_replace(".html","",$ka);
$ka = str_replace(".htm","",$ka);
$ka = str_replace(".php","",$ka);
return $ka;
}

function komut_istek($komd) {
	$istekURI = explode("/", $_SERVER['REQUEST_URI']);
	$istekBetikAdi = explode("/", $_SERVER['SCRIPT_NAME']);
	for ($i = 0; $i < sizeof($istekBetikAdi); $i++) {
		if ($istekURI[$i] == $istekBetikAdi[$i]) {
			unset($istekURI[$i]);
		}
		$komut = array_values($istekURI);
	}

	if (strlen(htmlsil($komut[0])) > 0) {
		$kls = $komut[$komd];
		$cikti = $kls;//htmlsil($kls);
	} else {
		$cikti = "index";
	}
	return $cikti;
}


?>