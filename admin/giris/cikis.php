<?php
@session_start();
include_once "../../config.php";
$db = new helper();
$str = "".$_SESSION["K"]["k_adi"]." kullanıcısı çıkış yaptı.";
$user = $_SESSION["K"]["k_adi"];
$ip = $db->GetIP();
$veri = array('islem'=>$str,"islemi_yapan"=>$user,"islem_yapilan_ip"=>$ip);
$log = $db->insert("log",$veri);
unset($_SESSION["Giris"]);
unset($_SESSION["K"]);
echo '<script>location.href="index.php"</script>';
?>