<?php
/**
 * Created by PhpStorm.
 * User: cihan
 * Date: 2.07.2016
 * Time: 15:32
 */
ob_start();
$dir = $_SERVER["DOCUMENT_ROOT"];
include_once $dir .'/config.php';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo $conf->admin_baslik;?></title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="/<?php echo $conf->admin_path?>/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="/<?php echo $conf->admin_path?>/dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="/<?php echo $conf->admin_path?>/dist/css/skins/_all-skins.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="/<?php echo $conf->admin_path?>/plugins/iCheck/flat/blue.css">
    <!-- Morris chart -->
    <link rel="stylesheet" href="/<?php echo $conf->admin_path?>/plugins/morris/morris.css">
    <!-- jvectormap -->
    <link rel="stylesheet" href="/<?php echo $conf->admin_path?>/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
    <!-- Date Picker -->
    <link rel="stylesheet" href="/<?php echo $conf->admin_path?>/plugins/datepicker/datepicker3.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="/<?php echo $conf->admin_path?>/plugins/daterangepicker/daterangepicker.css">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="/<?php echo $conf->admin_path?>/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
    <link rel="stylesheet" href="/<?php echo $conf->admin_path?>/dist/css/login.css"/>
    <link rel="stylesheet" href="/<?php echo $conf->admin_path?>/dist/css/animate.css"/>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body class="">

<div id="background-carousel">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="item active" style="background-image:url('/<?php echo $conf->admin_path ?>/giris/img/4.jpg')"></div>
            <div class="item" style="background-image:url('/<?php echo $conf->admin_path ?>/giris/img/3.jpg')"></div>
            <div class="item" style="background-image:url('/<?php echo $conf->admin_path ?>/giris/img/2.jpg')"></div>
            <div class="item" style="background-image:url('/<?php echo $conf->admin_path ?>/giris/img/1.jpg')"></div>
        </div>
    </div>
</div>

<div id="content-wrapper">
    <div id="login-box">
        <div class="form-box animated flash" id="">
            <div class="header"> <span class="fa fa-users"></span> <?php echo ('Yönetici Giriş Paneli') ?></div>
            <form action="/<?php echo $conf->admin_path?>/giris/data.php" method="post" id="Giris">
                <div class="body bg-gray">
                    <div class="form-group text-center">
                        <img src="/<?php echo $conf->admin_path?>/dist/img/avatar.png" id="avatar" class="animated sedo img-circle img-thumbnail" style="width:96px; height:96px;" />
                    </div>

                    <div class="form-group">
                        <input type="text" name="user" class="form-control" value="admin" required="true"/>
                    </div>
                    <div class="form-group">
                        <input type="password" name="pass" class="form-control" placeholder="<?php echo ('Şifreniz') ?>" required="true"/>
                    </div>
                    <!--    <div class="form-group">
                            <input type="checkbox" name="remember_me"/> Beni Bu Bilgisayarda Hatırla
                        </div> -->
                </div>
                <div class="footer clearfix">
                    <button type="submit" class="btn btn-success pull-right"><i class="glyphicon glyphicon-check"></i>  <?php echo ('Oturum Aç') ?></button>

                    <button type="button" class="btn btn-danger" onclick="SifremiUnuttum()"><i class="glyphicon glyphicon-lock"></i> <?php echo ('Şifremi Unuttum') ?></button>
                </div>
            </form>
        </div>
    </div>

    <div class="form-box animated fadeIn" id="SifremiUnuttum">
        <div class="header"> <span class="fa fa-lock"></span> <?php echo ('Şifre Hatırlatma') ?></div>

        <form action="#" method="post" id="Form1">
            <div class="body bg-gray">
                <div class="form-group">
                    <input type="text" name="userid" class="form-control" value="admin" />
                </div>
            </div>
            <div class="footer clearfix">
                <button type="button" class="btn btn-success pull-right"  onclick="sifre_resset()"><i class="glyphicon glyphicon-check"></i>  <?php echo ('Şifremi Hatırlat') ?></button>

                <button type="button" class="btn btn-danger" onclick="GirisPaneli()"><i class="glyphicon glyphicon-lock"></i> <?php echo ('Geri Dön') ?></button>
            </div>
        </form>
        <div class="sifre_sonuc">
        </div>
    </div>


    <div class="form-box box box-solid bg-green" style="padding:10px; display:none;" id="Msg">
        <span class=" glyphicon glyphicon-check"></span> <span id="MesajKutu"></span>
    </div>
    <div class="form-box box box-solid bg-red" style="padding:10px; display:none;" id="MsgH">
        <span class=" glyphicon glyphicon-remove"></span> <span id="MesajKutuHata"></span>
    </div>

    <!--
           <div style="position:absolute;z-index:5;right:30px; top:50px;">
           <a href="http://www.datatime.com.tr/" target="_blank"> <img src="/<?php echo $conf->admin_path?>/Tema/img/logolar/datatime.png" class="img-thumbnail img-circle pull-left" style="margin-right:5px" /> </div>
           </div> -->

</div>

<script src="/<?php echo $conf->admin_path; ?>/plugins/jQuery/jquery-2.2.3.min.js"></script>
<script src="/<?php echo $conf->admin_path; ?>/bootstrap/js/bootstrap.js" type="text/javascript"></script>
<script src="/<?php echo $conf->admin_path; ?>/dist/js/araclar.js"></script>
<script>
    $(document).ready(function () {
        /* Additional Javascript (required) */
        $('#myCarousel').carousel({
            pause: 'none'
        })
    });


    function sifre_resset()
    {

        var userid= $('#userid').val();
        var data = getData('/<?php echo $conf->admin_path; ?>/genel/data.php?islem=sifre_unutum&email='+userid);
        console.log(data);
        alert(data.msg);
    }

    function testAnim(x) {
        $('#login-box').removeClass().addClass(x + ' animated').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
            $(this).removeClass();
        });
    };


    $("#SifremiUnuttum").hide();
    function SifremiUnuttum() {
        //  $("#login-box").removeClass("flash").addClass("bounceOut");
        $("#login-box").hide();
        $("#SifremiUnuttum").show();
    }
    function GirisPaneli() {
        $("#login-box").show();
        $("#SifremiUnuttum").hide();
    }

    $("form#Giris").submit(function () {
        $("#Msg,#MsgH").hide();
        $.post($(this).attr("action"), $(this).serialize(), function (sonuc) {
            if (sonuc.durum) {
                $("#avatar").addClass("tada");
                $("#MesajKutu").html(sonuc.msg);
                $("#Msg").show();
                testAnim("bounceOut");
                setTimeout(function () {
                    location.href = "/<?php echo $conf->admin_path?>/";
                }, '1500');
            } else {
                testAnim("shake");
                $("#MsgH").show();
                $("#MesajKutuHata").html(sonuc.msg);
            }
            console.log(sonuc);
        }, 'JSON').error(function(bir,ik,uc) {
            console.log(bir);
            console.log(ik);
            console.log(uc);
        });

        return false;
    });


    $(document).ready(function () {
        $('input[name="pass"]').focus();
    });


</script>
</body>
</html>