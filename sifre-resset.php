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
            <h2>Şifre Sıfırlama</h2>
            <ul>
                <li>
                    <a href="/">
                        Anasayfa
                    </a>
                </li>
                <li>Şifremi unuttum</li>
            </ul>
        </div>
    </div>
</div>
<!-- End Page Title Area -->

<!-- Start Recover Password Area -->
<section class="user-area-all-style recover-password-area ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="contact-form-action">
                    <div class="form-heading text-center">
                        <h3 class="form-title">Şifre Sıfırlama!</h3>
                        <p class="reset-desc">
                            Şifrenizi sıfırlamak için kullanıcı adınızı giriniz. Ardından şifrenizi sıfırlamak için bir e-posta bağlantısı alacaksınız. Şifre sıfırlama ile ilgili herhangi bir sorunuz varsa bize ulaşın.</a></p>
                    </div>
                    <form method="post">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <input class="form-control" type="text" name="name" placeholder="Kullanıcı adınızı giriniz">
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <a class="now-log-in font-q" href="/kullanici-giris">Giriş yap</a>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <p class="now-register">
                                    Üye değilmisiniz?
                                    <a class="font-q" href="/uyelik">Üye ol</a>
                                </p>
                            </div>
                            <div class="col-12">
                                <button class="default-btn btn-two" type="submit">
                                    Şifremi sıfırla
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Recover Password Area -->


<?php include_once "footer.php";?>
<?php include_once "urun-modal.php";?>
<?php include_once "js.php";?>
</body>
</html>