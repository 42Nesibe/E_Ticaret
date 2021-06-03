
<!-- Start Footer Top Area -->
<footer class="footer-top-area pt-100 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="single-widget">
                    <img src="/assets/img/demo-watch/logo.png" alt="Image">
                    <p>
                        Okumanın mutluluk kaynağı olduğuna inanıyor ve çeyrek asırdır bu inancımızı sürdürerek müşterilerimize en uygun fiyatla en kaliteli yayınları sağlamanın gururunu yaşıyoruz.
                        Bizi tercih ettiğiniz için teşekkür eder, keyifli okumalar dileriz.
                        Sorunlarınızla ilgili destek almak için sitemiz üzerinden 7/24 bizlerle iletişime geçebilirsiniz.
                    </p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="single-widget">
                    <h3>İletişim Bilgilerimiz</h3>
                    <ul>
                        <li>
                            <?php echo $iletisim["adres"];?>
                        </li>
                        <li>
                            <a href="tel:<?php echo $iletisim["mobile"];?>"><span>Telefon:</span> <?php echo $iletisim["mobile"];?></a>
                        </li>
                        <li>
                            <a href="mailto:<?php echo $iletisim["email"];?>"><span>Email:</span> <?php echo $iletisim["email"];?></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="single-widget">
                    <h3>Kategoriler</h3>
                    <ul>
                        <?php
                        $veri = $uye->veri_al("kategori where durum=1");
                        foreach ($veri as $yaz):
                            ?>
                            <li class="nav-item">
                                <a href="/kategori/<?php echo $yaz["seo"];?>" class="nav-link"><?php echo $yaz["baslik"];?></a>
                            </li>
                        <?php endforeach;?>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="single-widget">
                    <h3>About Tezno</h3>
                    <ul>
                        <li>
                            <a href="/">
                                <i class="flaticon-right-arrow"></i>
                                Anasayfa
                            </a>
                        </li>
                        <li>
                            <a href="/cok-satanlar">
                                <i class="flaticon-right-arrow"></i>
                                Çok Satılanlar
                            </a>
                        </li>
                        <li>
                            <a href="/son-eklenenler">
                                <i class="flaticon-right-arrow"></i>
                                Son Eklenenler
                            </a>
                        </li>
                        <li>
                            <a href="/iletisim">
                                <i class="flaticon-right-arrow"></i>
                                İletişim
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- End Footer Top Area -->

<!-- Start Footer Bottom Area -->
<footer class="footer-bottom-area">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-4">
                <div class="social-area">
                    <ul>
                        <li>
                            <a href="<?php echo $iletisim["facebook"];?>"><i class="bx bxl-facebook"></i></a>
                        </li>
                        <li>
                            <a href="<?php echo $iletisim["twitter"];?>"><i class="bx bxl-twitter"></i></a>
                        </li>
                        <li>
                            <a href="<?php echo $iletisim["google"];?>"><i class="bx bxl-google"></i></a>
                        </li>
                        <li>
                            <a href="<?php echo $iletisim["instagram"];?>"><i class="bx bxl-instagram"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="copy-right">
                    <p>©2020 Kitap Alış Veriş Sitesi Tüm hakları saklıdır. <a href="/" target="blank">Şirin TOPRAK</a></p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="payment-method">
                    <ul>
                        <li>
                            <a href="#" target="blank">
                                <img src="/assets/img/demo-watch/payment-card/1.png" alt="Image">
                            </a>
                        </li>
                        <li>
                            <a href="#" target="blank">
                                <img src="/assets/img/demo-watch/payment-card/2.png" alt="Image">
                            </a>
                        </li>
                        <li>
                            <a href="#" target="blank">
                                <img src="/assets/img/demo-watch/payment-card/3.png" alt="Image">
                            </a>
                        </li>
                        <li>
                            <a href="#" target="blank">
                                <img src="/assets/img/demo-watch/payment-card/4.png" alt="Image">
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- End Footer Bottom Area -->