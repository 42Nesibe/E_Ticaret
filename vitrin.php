<!-- Start Discover Products Area -->
<section class="discover-products-area pb-100">
    <div class="container">
        <div class="section-title watch-section-title">
            <h2>Sitemize Eklenen Son Kitaplar</h2>
            <p>Okumak Özgürlüktür..</p>
        </div>
        <div class="row">

            <?php
            $ver = $uye->veri_al("urunler where durum=1");
            foreach ($ver as $yaz):
            $kat = $uye->tekli_cek("kategori","kategori_iD",$yaz["kat_id"]);
            ?>

            <div class="col-lg-4 col-sm-6">
                <div class="single-discover-products">
                    <div class="product-img">
                        <div class="product-img-1">
                            <img src="/assets/img/urunler/<?php echo $yaz["foto"];?>" alt="<?php echo $yaz["baslik"];?>">
                            <div class="product-img-2">
                                <img src="/assets/img/urunler/<?php echo $yaz["foto"];?>" alt="<?php echo $yaz["baslik"];?>">
                            </div>
                        </div>
                    </div>
                    <div class="product-content">
                        <span class="title"><?php echo $kat["baslik"];?></span>
                        <h3><?php echo $yaz["baslik"];?></h3>
                        <span class="price"><?php echo $yaz["fiyat"];?></span>
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
            </div>


            <?php endforeach;?>
            <div class="col-12">
                <div class="view-all text-center">
                    <a href="/son-eklenenler" class="default-btn">
                        Son Eklenenler
                        <i class="flaticon-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
