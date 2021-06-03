<!-- Start Seasons Area -->
<section class="seasons-area">
    <div class="container-fluid">
        <?php
        $veri = $uye->tekli_cek("urunler","hafta",1);
        ?>
        <div class="row">
            <div class="col-lg-6 pl-0">
                <div class="seasons-wrap">
                    <span class="price">Haftanın</span>
                    <span class="pricing">Kitabı</span>
                    <h2><?php echo $veri["baslik"];?></h2>
                    <a href="/?urun-ekle/<?php echo $veri["urunler_iD"];?>" class="default-btn">
                        Satın al
                        <i class="flaticon-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-6 pr-0">
                <div class="seasons-wrap seasons-off-wrap">
                    <div class="seasons-off-content">
                        <img src="assets/img/demo-watch/indirimli-urunler.png" alt="Image">
                        <span class="seasons-off">30% 'a varan </span>
                        <h2>İndirimli kitaplar</h2>
                        <a href="/indirimli-kitaplar" class="default-btn">
                            Tüm İndirimli Kitaplar
                            <i class="flaticon-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Seasons Area -->