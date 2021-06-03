<?php
@session_start();

$dir = $_SERVER["DOCUMENT_ROOT"];
include_once $dir.'/config.php';


if($_SESSION["Giris"] != "OK")
{

    echo '<script>location.href="/'.$conf->admin_path.'/giris"</script>';
    exit;

}


?>