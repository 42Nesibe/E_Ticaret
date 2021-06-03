<?php
/**
 * Created by PhpStorm.
 * User: cihan
 * Date: 05.05.2017
 * Time: 00:32
 */
?>
<!DOCTYPE html>
<html>
<?php
$dir = $_SERVER["DOCUMENT_ROOT"];
include("../config.php");
include($dir."/".$conf->admin_path."/include/head.php");
?>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
    <?php include("../$conf->admin_path/include/header.php");?>
    <?php include("../$conf->admin_path/include/sidebar.php");?>
    <?php include("../$conf->admin_path/include/icerik.php");?>
    <?php include("../$conf->admin_path/include/footer.php");?>
    <?php include("../$conf->admin_path/include/alt_sidebar.php");?>
    <?php include("../$conf->admin_path/include/js.php");?>
</div>
</body>
</html>


