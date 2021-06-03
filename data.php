<?php

session_start();

$dir = $_SERVER["DOCUMENT_ROOT"];

include_once 'config.php';

$uye = new uyelik();

$_POST["user"] = htmlentities(strip_tags($_POST["k_adi"])); // guvenlikten geçiyor htmlnt html kodlarını temzlio strip özel işareleir kaldırıo

$_POST["pass"] = htmlentities(strip_tags($_POST["sifre"]));

$_POST["pass"] = md5($_POST["pass"]); // burda md5 kriptolama

$cikti = $uye->users($_POST); // burdada uyelik classının users fonksiyonunu çalıştırıyor

echo json_encode($cikti); // burası da dönen değer

?>