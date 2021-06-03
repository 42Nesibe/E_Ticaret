<?php
include_once "config.php";
include_once "class/uyelik.php";
$uye = new uyelik();
$id = $_GET["id"];
$veri = $uye->tekli_cek("urunler","urunler_iD",$id);
?>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">
							<i class="bx bx-x"></i>
						</span>
</button>
<div class="row align-items-center">
    <div class="col-lg-6 col-md-6">
        <div class="product-view-one-image">
            <div class="outer">
                <div id="big">

                    <div class="item">
                        <img src="/assets/img/urunler/<?php echo $veri["foto"];?>" alt="<?php echo $veri["baslik"];?>">
                    </div>

                </div>

            </div>
        </div>
    </div>

    <div class="col-lg-6 col-md-6">
        <div class="product-content">
            <h3>
                <a href="#"><?php echo $veri["baslik"];?></a>
            </h3>
            <div class="price">
                <?php
                if($veri["indirim"]==1){
                    $indirim = $veri["fiyat"] * $veri["indirim_yuzdesi"] / 100;
                    $kalan = $veri["fiyat"] - $indirim;
                    echo '<span class="new-price">'.$kalan.' ₺</span> <del>'.$veri["fiyat"].' ₺</del>';
                }else{
                    echo '<span class="new-price">'.$veri["fiyat"].' ₺</span>';
                }
                ?>
            </div>
            <div class="product-review">

            </div>
            <ul class="product-info">
                <li>
                    <?php echo $veri["icerik"];?>
                </li>
                <li>
                    <?php
                    if($veri["stok"]==1){
                        $deger = "Var";
                    }else{
                        $deger = "Yok";
                    }
                    ?>
                    <span>Stok durumu:</span> <a href="#" onclick="return false"> <?php echo $deger;?></a>
                </li>
                <li>
                    <?php
                    if($veri["hafta"]==1){
                        $deger = "Evet";
                    }else{
                        $deger = "Hayır";
                    }
                    ?>
                    <span>Haftanın ürünü:</span> <a href="#" onclick="return false"><?php echo $deger;?></a>
                </li>
            </ul>
            <div class="product-color-switch">

            </div>
            <div class="product-add-to-cart">

                <a href="/?urun-ekle/<?php echo $veri["urunler_iD"];?>" class="default-btn">
                    Sepete Ekle
                    <i class="flaticon-right"></i>
                </a>
            </div>
            <div class="share-this-product">
                <h3>Sosyal medya'da paylaş</h3>
                <ul>
                    <li>
                        <a href="#">
                            <i class="bx bxl-facebook"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="bx bxl-twitter"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="bx bxl-instagram"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="bx bxl-google"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>