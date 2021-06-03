<!-- Start Weekly Specials Area -->
<section class="weekly-specials-area pb-100">
    <div class="container">
        <div class="weekly-specials-wrap">
            <div class="section-title watch-section-title">
                <h2>Haftanın özeti</h2>
                <p>Son bir haftalık analiz</p>
            </div>
            <div class="tab">
                <ul class="tabs">
                    <li>
                        <a href="#">
                            Son Eklenen
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            Çok Satanlar
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            İndirimdekiler
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            Haftanın ürünü
                        </a>
                    </li>
                </ul>
                <div class="tab_content">


                    <!-- Son eklenen-->
                    <div class="tabs_item">
                        <div class="weekly-specials-slider-wrap owl-theme owl-carousel">
                            <?php
                            $veri = $uye->veri_al("urunler where durum=1 order by urunler_iD desc limit 6");
                            foreach ($veri as $yaz):
                            $kat = $uye->tekli_cek("kategori","kategori_iD",$yaz["kat_id"]);
                            ?>
                            <div class="single-discover-products">
                                <div class="product-img">
                                    <div class="product-img-1">
                                        <img src="/assets/img/urunler/<?php echo $yaz["foto"];?>" alt="Image">
                                        <div class="product-img-2">
                                            <img src="/assets/img/urunler/<?php echo $yaz["foto"];?>" alt="Image">
                                        </div>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <span class="title"><?php echo $kat["baslik"];?></span>
                                    <h3><?php echo $yaz["baslik"];?></h3>
                                    <span class="price"><?php echo $yaz["fiyat"];?> ₺</span>
                                </div>
                                <div class="purchase-bar">
                                    <ul>
                                        <li>
                                            <a href="#product-view-one" onclick="onizleme('<?php echo $yaz["urunler_iD"];?>');" data-toggle="modal">
                                                <i class="flaticon-search"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="flaticon-heart"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="flaticon-loading"></i>
                                            </a>
                                        </li>
                                    </ul>
                                    <a href="/?urun-ekle/<?php echo $yaz["urunler_iD"];?>" class="default-btn">
                                        Sepete Ekle
                                        <i class="flaticon-right"></i>
                                    </a>
                                </div>
                            </div>
                            <?php endforeach;?>
                        </div>
                    </div>

                    <!-- Çok satanlar -->
                    <div class="tabs_item">
                        <div class="weekly-specials-slider-wrap owl-theme owl-carousel">
                            <?php
                            $veri1 = $uye->veri_al("cok_satilan limit 10");
                            foreach ($veri1 as $yaz1):
                                $veri = $uye->veri_al("urunler where durum=1 and urunler_iD={$yaz1["urun_id"]}");
                            foreach ($veri as $yaz):
                                $kat = $uye->tekli_cek("kategori","kategori_iD",$yaz["kat_id"]);
                                ?>
                                <div class="single-discover-products">
                                    <div class="product-img">
                                        <div class="product-img-1">
                                            <img src="/assets/img/urunler/<?php echo $yaz["foto"];?>" alt="Image">
                                            <div class="product-img-2">
                                                <img src="/assets/img/urunler/<?php echo $yaz["foto"];?>" alt="Image">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <span class="title"><?php echo $kat["baslik"];?></span>
                                        <h3><?php echo $yaz["baslik"];?></h3>
                                        <span class="price"><?php echo $yaz["fiyat"];?> ₺</span>
                                    </div>
                                    <div class="purchase-bar">
                                        <ul>
                                            <li>
                                                <a href="#product-view-one" onclick="onizleme('<?php echo $yaz["urunler_iD"];?>');" data-toggle="modal">
                                                    <i class="flaticon-search"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="flaticon-heart"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="flaticon-loading"></i>
                                                </a>
                                            </li>
                                        </ul>
                                        <a href="/?urun-ekle/<?php echo $yaz["urunler_iD"];?>" class="default-btn">
                                            Sepete Ekle
                                            <i class="flaticon-right"></i>
                                        </a>
                                    </div>
                                </div>
                            <?php endforeach;?>
                            <?php endforeach;?>
                        </div>
                    </div>

                    <!-- İndirimdekiler -->
                    <div class="tabs_item">
                        <div class="weekly-specials-slider-wrap owl-theme owl-carousel">
                            <?php
                            $veri = $uye->veri_al("urunler where durum=1 and indirim=1 order by urunler_iD desc limit 10");
                            foreach ($veri as $yaz):
                                $kat = $uye->tekli_cek("kategori","kategori_iD",$yaz["kat_id"]);
                                ?>
                                <div class="single-discover-products">
                                    <div class="product-img">
                                        <div class="product-img-1">
                                            <img src="/assets/img/urunler/<?php echo $yaz["foto"];?>" alt="Image">
                                            <div class="product-img-2">
                                                <img src="/assets/img/urunler/<?php echo $yaz["foto"];?>" alt="Image">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <span class="title"><?php echo $kat["baslik"];?></span>
                                        <h3><?php echo $yaz["baslik"];?></h3>
                                        <span class="price"><?php echo $yaz["fiyat"];?> ₺</span>
                                    </div>
                                    <div class="purchase-bar">
                                        <ul>
                                            <li>
                                                <a href="#product-view-one" onclick="onizleme('<?php echo $yaz["urunler_iD"];?>');" data-toggle="modal">
                                                    <i class="flaticon-search"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="flaticon-heart"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="flaticon-loading"></i>
                                                </a>
                                            </li>
                                        </ul>
                                        <a href="/?urun-ekle/<?php echo $yaz["urunler_iD"];?>" class="default-btn">
                                            Sepete Ekle
                                            <i class="flaticon-right"></i>
                                        </a>
                                    </div>
                                </div>
                            <?php endforeach;?>
                        </div>
                    </div>


                    <!-- Haftanın ürünü -->
                    <div class="tabs_item">
                        <div class="weekly-specials-slider-wrap owl-theme owl-carousel">
                            <?php
                            $veri = $uye->veri_al("urunler where durum=1 and hafta=1 order by urunler_iD desc limit 10");
                            foreach ($veri as $yaz):
                                $kat = $uye->tekli_cek("kategori","kategori_iD",$yaz["kat_id"]);
                                ?>
                                <div class="single-discover-products">
                                    <div class="product-img">
                                        <div class="product-img-1">
                                            <img src="/assets/img/urunler/<?php echo $yaz["foto"];?>" alt="Image">
                                            <div class="product-img-2">
                                                <img src="/assets/img/urunler/<?php echo $yaz["foto"];?>" alt="Image">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <span class="title"><?php echo $kat["baslik"];?></span>
                                        <h3><?php echo $yaz["baslik"];?></h3>
                                        <span class="price"><?php echo $yaz["fiyat"];?> ₺</span>
                                    </div>
                                    <div class="purchase-bar">
                                        <ul>
                                            <li>
                                                <a href="#product-view-one" onclick="onizleme('<?php echo $yaz["urunler_iD"];?>');" data-toggle="modal">
                                                    <i class="flaticon-search"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="flaticon-heart"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="flaticon-loading"></i>
                                                </a>
                                            </li>
                                        </ul>
                                        <a href="/?urun-ekle/<?php echo $yaz["urunler_iD"];?>" class="default-btn">
                                            Sepete Ekle
                                            <i class="flaticon-right"></i>
                                        </a>
                                    </div>
                                </div>
                            <?php endforeach;?>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Weekly Specials Area -->
