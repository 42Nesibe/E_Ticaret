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
<?php
$seo = @$uye->komut_istek(1);
$veri1 = $uye->tekli_cek("kategori","seo",$seo);
?>
<!-- Start Page Title Area -->
<div class="page-title-area">
    <div class="container">
        <div class="page-title-content">
            <h2><?php echo $veri1["baslik"];?></h2>
            <ul>
                <li>
                    <a href="/">
                        Anasayfa
                    </a>
                </li>
                <li>Kategori</li>
            </ul>
        </div>
    </div>
</div>
<!-- End Page Title Area -->

<!-- Start Discover Products Area -->
<section class="ptb-100">
    <div class="container">
        <div class="row">

            <?php
            $adet_cek = $uye->veri_al("urunler where durum=1 and kat_seo='".$seo."'");
            $topl = count($adet_cek);
            $sayfalama= new Sayfalama_galeri();
            $sayfalama->sayfa=& $uye->komut_istek(3);
            $sayfalama->sayfa_basina=1; // kac satır gosterilecek. icinde kac tane ürün gösterilecegi
            $sayfalama->url='/kategori/'.$veri1["seo"].'/sayfa/%d'; // %d degeri sayfa numarasını alır sayısal degeri alir. orası sabittir.
            $sayfalama->degisken='sayfa'; // get degiskeni url deki sayfa= degiskeni olur..
            $sayfalama->baslangic = "0"; // sabitir. 0 dan baslar burasi...
            $sayfalama->toplam=$topl;
            $sayfalama->hazirla();

            $veri = $uye->veri_al("urunler where durum=1 and kat_seo='".$seo."' limit $sayfalama->baslangic,$sayfalama->sayfa_basina");
            foreach ($veri as $key=>$yaz):
                $kat = $uye->tekli_cek("kategori","kategori_iD",$yaz["kat_id"]);
                ?>

                <div class="col-lg-4 col-sm-6">
                    <div class="single-discover-products">
                        <div class="product-img">
                            <div class="product-img-1">
                                <img src="/assets/img/urunler/<?php echo $yaz["foto"];?>" alt="Kitap Alışveriş Stitesi">
                                <div class="product-img-2">
                                    <img src="/assets/img/urunler/<?php echo $yaz["foto"];?>" alt="Kitap Alışveriş Stitesi">
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
                                    <a href="#product-view-one" data-toggle="modal">
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


            <div class="col-lg-12">
                <div class="page-navigation-area">
                    <nav aria-label="Page navigation example text-center">
                        <?php
                        if($topl > $sayfalama->sayfa_basina) {
                            echo $sayfalama->sayfala();
                        }
                        ?>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Discover Products Area -->


<?php include_once "footer.php";?>
<?php include_once "urun-modal.php";?>
<?php include_once "js.php";?>
</body>
</html>