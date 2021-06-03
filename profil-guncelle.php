<?php
include_once "config.php";
session_start();
ob_start();
$uye = new uyelik();
if($_SESSION["kontrol"] != "yes") {

    echo '<script>location.href="/"</script>';
}

require_once "class/ResimGd/ThumbLib.inc.php";

function resimuzanticek($deger) {     $exp = explode(".",$deger);    return end($exp); }

$id = $_POST["users_id"];
unset($_POST["users_id"]);

$dizin = "assets/img/profile/";

$uzanti = strtolower(resimuzanticek($_FILES['foto']['name']));

$ResimAdi = Uniqid().".".$uzanti;


if(!empty($_FILES["foto"]["name"])){

    $sil = $uye->tekli_cek("users","users_iD",$id);

    unlink($dizin.$sil["foto"]);

}

if(move_uploaded_file($_FILES['foto']['tmp_name'], $dizin.$ResimAdi)) {

    $thumb = PhpThumbFactory::create($dizin.$ResimAdi);

    $thumb->adaptiveResize(200, 200);

    $thumb->save($dizin.$ResimAdi, $uzanti);



    $_POST["foto"]= $ResimAdi;

}

if($_POST["sifre"]){
    $_POST["sifre"] = md5($_POST["sifre"]);
}else{
    unset($_POST["sifre"]);
}


$ver = $uye->guncelle("users",$_POST,"users_iD",$id);
header('Location: '.$_SERVER['HTTP_REFERER']);
ob_end_flush();

?>