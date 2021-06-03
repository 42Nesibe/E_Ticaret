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
            <h2>Sitemize üye olun</h2>
            <ul>
                <li>
                    <a href="/">
                        Anasayfa
                    </a>
                </li>
                <li>üyelik</li>
            </ul>
        </div>
    </div>
</div>
<!-- End Page Title Area -->

<!-- Start Sign Up Area -->
<section class="user-area-all-style sign-up-area ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="contact-form-action">
                    <div class="form-heading text-center">
                        <h3 class="form-title">Hesap oluştur!</h3>
                    </div>
                    <form method="post" id="uyeol" action="uyeol.php">
                        <div class="row">

                            <div class="col-md-12 col-sm-12">
                                <div class="form-group">
                                    <input class="form-control" type="text" name="ad" placeholder="Adınız">
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12 ">
                                <div class="form-group">
                                    <input class="form-control" type="text" name="soyad" placeholder="Soyadınız">
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12">
                                <div class="form-group">
                                    <input class="form-control" type="text" name="k_adi" placeholder="Kullanıcı adı">
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12">
                                <div class="form-group">
                                    <input class="form-control" type="email" name="email" placeholder="Email adresiniz">
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12">
                                <div class="form-group">
                                    <input class="form-control" type="text" name="sifre" placeholder="Şifre">
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12 ">
                                <div class="form-group">
                                    <input class="form-control" type="text" name="sifre_tekrar" placeholder="Şifre tekrar">
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="default-btn btn-two" id="giris" type="button">
                                    Hesap oluştur
                                </button>
                            </div>
                            <div class="col-12">
                                <p class="account-desc">
                                    Zaten hesabım var
                                    <a href="/kullanici-giris"> Giriş yap</a>
                                </p>
                            </div>
                            <div class="col-12">
                                <div class="form-box box box-solid bg-green" style="padding:10px; display:none;" id="Msg">

                                    <span class=" glyphicon glyphicon-check"></span> <span id="MesajKutu"></span>

                                </div>

                                <div class="form-box box box-solid bg-red" style="padding:10px; display:none;" id="MsgH">

                                    <span class=" glyphicon glyphicon-remove"></span> <span id="MesajKutuHata"></span>

                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Sign Up Area -->

<?php include_once "footer.php";?>
<?php include_once "urun-modal.php";?>
<?php include_once "js.php";?>
<script>

    $(document).ready(function () {
        $('#giris').click(function () {
            var sifre = $('input[name="sifre"]').val();
            var sifre1 = $('input[name="sifre_tekrar"]').val();
            var kullanici = $('input[name="k_adi"]').val();
            if(kullanici == ""){
                alert("Lütfen kullanıcı adınızı boş geçmeyiniz !");
                exit();
            }
            if(sifre == ""){
                alert("Şifre kısmı boş geçilemez");
                $('input[name="sifre"]').focus();
            }else{


                if (sifre === sifre1){

                    var sayi = sifre.length;
                    if (sayi >= 6) {

                        $("#Msg,#MsgH").hide();

                        $.post($('#uyeol').attr("action"), $('#uyeol').serialize(), function (sonuc) {

                            if (sonuc.durum) {

                                $("#avatar").addClass("tada");

                                $("#MesajKutu").html(sonuc.msg);

                                $("#Msg").show();

                                setTimeout(function () {

                                    location.href = "/kullanici-giris";

                                }, '1500');

                            } else {

                                $("#MsgH").show();

                                $("#MesajKutuHata").html(sonuc.msg);

                            }

                            console.log(sonuc);

                        }, 'JSON').error(function(bir) {

                            console.log(bir);



                        });



                        return false;


                    }else{
                        alert("Şifreniz en az 6 karakterden oluşmalıdır !");
                    }

                }else{
                    alert("Şifreleriniz uyuşmuyor !");
                    $('input[name="sifre_tekrar"]').focus();
                }


            }

        });
    });

</script>
</body>
</html>