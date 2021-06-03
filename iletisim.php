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
            <h2>İletişim Bilgilerimiz</h2>
            <ul>
                <li>
                    <a href="/">
                        Anasayfa
                    </a>
                </li>
                <li>İletişim</li>
            </ul>
        </div>
    </div>
</div>
<!-- End Page Title Area -->



<!-- Start Map Area  -->
<div class="map-area">
    <div id="map"></div>
</div>
<!-- End Map Area -->

<!-- Start Contact Info Area -->
<section class="contact-info-area mt-minus-70 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-sm-6">
                <div class="single-contact-info">
                    <i class="bx bx-envelope"></i>
                    <h3>E-mail:</h3>
                    <a href="mailto:<?php echo $iletisim["email"];?>"><?php echo $iletisim["email"];?></a>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="single-contact-info">
                    <i class="bx bx-phone-call"></i>
                    <h3>Telefon:</h3>
                    <a href="tel:<?php echo $iletisim["mobile"];?>"><?php echo $iletisim["mobile"];?></a>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="single-contact-info">
                    <i class="bx bx-location-plus"></i>
                    <h3>Adres:</h3>
                    <a href="#" onclick="return false"><?php echo $iletisim["adres"];?></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Contact Info Area -->

<!-- Start Contact Area -->
<section class="main-contact-area pb-100">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="contact-wrap contact-pages mb-0">
                    <div class="contact-form">
                        <div class="section-title">
                            <h2>Soru ve görüşlerinizi bizimle paylaşabilirsiniz.</h2>
                        </div>
                        <form id="contactForm">
                            <div class="row">
                                <div class="col-lg-6 col-sm-6">
                                    <div class="form-group">
                                        <input type="text" name="name" id="name" class="form-control" required="" data-error="Lütfen adınızı giriniz..." placeholder="Adınız">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-sm-6">
                                    <div class="form-group">
                                        <input type="email" name="email" id="email" class="form-control" required="" data-error="Lütfen e-mail adresinizi giriniz..." placeholder="E-mail">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-sm-6">
                                    <div class="form-group">
                                        <input type="text" name="phone_number" id="phone_number" required="" data-error="Lütfen telefon numaranızı giriniz..." class="form-control" placeholder="Telefon">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-sm-6">
                                    <div class="form-group">
                                        <input type="text" name="msg_subject" id="msg_subject" class="form-control" required="" data-error="Lütfen konu giriniz..." placeholder="Konu">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <textarea name="message" class="form-control" id="message" cols="30" rows="5" required="" data-error="Açıklama giriniz..." placeholder="Açıklama"></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12">
                                    <button type="submit" class="default-btn page-btn">
                                        Gönder
                                    </button>
                                    <div id="msgSubmit" class="h3 text-center hidden"></div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Contact Area -->


<?php include_once "footer.php";?>
<?php include_once "urun-modal.php";?>
<?php include_once "js.php";?>
</body>
</html>