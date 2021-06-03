<?php
session_start();
$dir = $_SERVER["DOCUMENT_ROOT"];
include_once $dir.'/config.php';
$uye = new uyelik();
$_POST["user"] = htmlentities(strip_tags($_POST["user"]));
$_POST["pass"] = htmlentities(strip_tags($_POST["pass"]));
$_POST["pass"] = md5($_POST["pass"]);
$cikti = $uye->login($_POST);
echo json_encode($cikti);
?>