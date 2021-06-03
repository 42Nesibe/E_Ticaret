<!doctype html>
<html lang="tr">
<?php include_once "head.php";?>
<body>
<?php ob_start();?>
<!-- Start Preloader Area -->
<div class="preloader">
    <div class="lds-ripple">
        <div></div>
        <div></div>
    </div>
</div>
<!-- End Preloader Area -->

<?php include_once "header.php";?>

<!-- Start Page Title Area -->
<div class="page-title-area">
    <div class="container">
        <div class="page-title-content">
            <h2>Üyelik girişi</h2>
            <ul>
                <li>
                    <a href="/">
                        Anasayfa
                    </a>
                </li>
                <li>giriş</li>
            </ul>
        </div>
    </div>
</div>
<!-- End Page Title Area -->

<!-- Start Log In Area -->
<section class="user-area-all-style log-in-area ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="contact-form-action">
                    <div class="form-heading text-center">
                        <h3 class="form-title">Hesabınıza giriş yapın!</h3>
                    </div>
                    <form method="post" id="users" action="data.php">
                        <div class="row">

                            <div class="col-12">
                                <div class="form-group">
                                    <input class="form-control" type="text" name="k_adi" placeholder="Kullanıcı adı">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <input class="form-control" type="password" name="sifre" placeholder="Şifre">
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6 form-condition">
                                <div class="agree-label">
                                    <input type="checkbox" id="chb1">
                                    <label for="chb1">
                                        Beni hatırla
                                    </label>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6">
                                <a class="forget" href="/sifremi-unuttum">Şifrenizi mi unuttunuz?</a>
                            </div>
                            <div class="col-12">
                                <button class="default-btn btn-two" type="submit">
                                    Giriş Yap
                                </button>
                            </div>
                            <div class="col-12" style="padding-top: 30px;">
                                <div class="alert alert-success" style="padding:10px; display:none;" id="Msg">

                                    <span class=" glyphicon glyphicon-check"></span> <span id="MesajKutu"></span>

                                </div>

                                <div class="alert alert-danger" style="padding:10px; display:none;text-align: center;" id="MsgH">

                                    <span class=" glyphicon glyphicon-remove"></span> <span id="MesajKutuHata"></span>

                                </div>
                            </div>
                            <div class="col-12">
                                <p class="account-desc">
                                    Üye değilmisiniz?
                                    <a href="/uyelik">Üye ol</a>
                                </p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Log In Area -->


<?php include_once "footer.php";?>
<?php include_once "urun-modal.php";?>
<?php include_once "js.php";?>
<script>

    $("form#users").submit(function () { /*burası form gönderilince çalışan fonksiyondur*/

        $("#Msg,#MsgH").hide();

        $.post($(this).attr("action"), $(this).serialize(), function (sonuc) {

            if (sonuc.durum) {

                $("#avatar").addClass("tada");

                $("#MesajKutu").html(sonuc.msg);

                $("#Msg").show();
                <?php
                $gelen_link = $_SERVER['HTTP_REFERER'];
                $exp = explode("/",$gelen_link);
                $uri = end($exp);
                $link = "sepeten-satis";
                if($link==$uri){
                    $gonder = "/sepeten-satis";
                }else{
                    $gonder = "/users-profile";
                }
                ?>
                setTimeout(function () {

                    location.href = "<?php echo $gonder;?>";

                }, '1500');

            } else {


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

</script>
</body>
</html>