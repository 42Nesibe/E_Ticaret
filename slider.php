<!-- Slider başlangıç -->
<section class="tezno-slider-area ptb-100">
    <div class="tezno-slider-wrap owl-theme owl-carousel" data-slider-id="1">
        <?php
        $veri = $uye->veri_al("slider where durum=1 order by siralama asc");
        foreach ($veri as $yaz):
            $urun_cek = $uye->tekli_cek("urunler","urunler_iD",$yaz["urun_id"]);

        ?>
        <div class="tezno-slider-item">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="tezno-slider-text one">
                            <?php
                            if($urun_cek["indirim_yuzdesi"]){
                                $indirim = $urun_cek["indirim_yuzdesi"];
                                echo '<span class="offer">'.$indirim.'% İndirim</span>';
                            }
                            ?>
                            <h1><?php echo $urun_cek["baslik"];?></h1>
                            <p><?php echo strip_tags($uye->yazi_kisalt($urun_cek["icerik"],200));?></p>
                            <div class="slider-btn">
                                <span class="price"><?php echo $urun_cek["fiyat"];?> ₺</span>
                                <a href="/?urun-ekle/<?php echo $urun_cek["urunler_iD"];?>" class="default-btn">
                                    Sepete Ekle
                                    <i class="flaticon-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="slider-img">
                            <img src="/assets/img/urunler/<?php echo $urun_cek["foto"];?>" alt="<?php echo $urun_cek["baslik"];?>">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php endforeach;?>
    </div>

    <!-- Slider sayfaları -->
    <div class="owl-thumbs tezno-slider-thumb" data-slider-id="1">
        <?php
        $veri = $uye->veri_al("slider where durum=1 order by siralama asc");
        foreach ($veri as $key => $yaz):
            if($key >= 9){
                $deger = "";
            }else{
                $deger = 0;
            }
            $k = $key + 1
        ?>
        <div class="owl-thumb-item">
            <span><?php echo  $deger." ".$k;?></span>
        </div>
        <?php endforeach;?>
    </div>
    <!-- Slider alt foto -->
    <div class="slider-bottom-shape">
        <img src="assets/img/demo-watch/slider/slider-bottom-shape.png" alt="Image">
    </div>
    <div class="lines">
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
    </div>
</section>
<!-- slider bitiş -->