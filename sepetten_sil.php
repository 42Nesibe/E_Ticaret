<?php
ob_start();
$veri = new uyelik();
$al = $veri->komut_istek(1);
setcookie('urun['.$al.']',$al,time() - 3600);
print_r($_COOKIE["urun"]);
header("Location:".$_SERVER["HTTP_REFERER"]);
?>