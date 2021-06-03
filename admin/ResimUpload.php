<?php
//include_once 'Login/Control.php';
function resimuzanticek($r2) { $r2=explode(".",$r2); return end($r2); }

$dizin = $_SERVER['DOCUMENT_ROOT'].'/images/urunler/matbaa/';
$uzanti = strtolower(resimuzanticek($_FILES['Dosya']['name']));
$ResimAdi = Uniqid().".".$uzanti;

if($uzanti == "jpg" || $uzanti=="png" || $uzanti=="jpeg") {

	if(move_uploaded_file($_FILES['Dosya']['tmp_name'], $dizin.$ResimAdi))
	{
		require_once $_SERVER['DOCUMENT_ROOT']."/class/ResimGd/ThumbLib.inc.php";
		$thumb = PhpThumbFactory::create($dizin.$ResimAdi);
		$thumb->resize(370,200);
		$thumb->save($dizin.$ResimAdi,$uzanti);
        $cikti = array("success"=> true, "Resim"=>$ResimAdi, "msg"=>"Resim Yüklendi");
	}
	else
	{
		$cikti = array("success"=> false, "Resim"=>"ResimAdi", "msg"=>"hata : Resim Yüklenemedi");
	}
} else {
	$cikti = array("success"=> false, "msg"=>"hata : .{$uzanti} Uzantısı Güvenlik İhlali Oluşturdugundan Yüklenemedi. ");
}

echo json_encode($cikti);



?>