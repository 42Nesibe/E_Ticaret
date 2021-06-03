<?php

ob_start();

$dir = $_SERVER["DOCUMENT_ROOT"];

$yol = dirname(__FILE__);

include_once $dir.'/kullanici/giris/kontrol.php';

include_once $dir .'/config.php';

$uye = new uyelik();

?>

<head>

    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title><?php echo $conf->baslik;?></title>

    <!-- Tell the browser to be responsive to screen width -->

    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <!-- Bootstrap 3.3.6 -->

    <link rel="stylesheet" href="/<?php echo $conf->k_path;?>/bootstrap/css/bootstrap.min.css">

    <!-- Font Awesome -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">

    <!-- Ionicons -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">

    <!-- Theme style -->

    <link rel="stylesheet" href="/<?php echo $conf->k_path;?>/dist/css/AdminLTE.min.css">

    <link rel="stylesheet" href="/<?php echo $conf->k_path;?>/dist/css/dropzone.css">
    <link rel="stylesheet" href="/<?php echo $conf->k_path;?>/dist/css/flaticon.css">

    <!-- AdminLTE Skins. Choose a skin from the css/skins

         folder instead of downloading all of them to reduce the load. -->

    <link rel="stylesheet" href="/<?php echo $conf->k_path;?>/dist/css/skins/_all-skins.min.css">

    <!-- iCheck -->

    <link rel="stylesheet" href="/<?php echo $conf->k_path;?>/plugins/iCheck/flat/blue.css">

    <!-- Morris chart -->

    <link rel="stylesheet" href="/<?php echo $conf->k_path;?>/plugins/morris/morris.css">

    <!-- jvectormap -->

    <link rel="stylesheet" href="/<?php echo $conf->k_path;?>/plugins/jvectormap/jquery-jvectormap-1.2.2.css">

    <!-- Date Picker -->

    <link rel="stylesheet" href="/<?php echo $conf->k_path;?>/plugins/datepicker/datepicker3.css">

    <!-- Daterange picker -->

    <link rel="stylesheet" href="/<?php echo $conf->k_path;?>/plugins/daterangepicker/daterangepicker.css">

    <!-- bootstrap wysihtml5 - text editor -->

    <link rel="stylesheet" href="/<?php echo $conf->k_path;?>/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
    <link rel="stylesheet" href="/<?php echo $conf->k_path;?>/bootstrap/css/bootstrap-select.min.css">



    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->

    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

    <!--[if lt IE 9]>

    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>

    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

    <![endif]-->

</head>