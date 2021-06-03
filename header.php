<!-- Start Heder Area -->
<?php
$veri = new uyelik();
$iletisim = $veri->tekli_cek("site_ayar","site_ayar_iD",1);
?>
<header class="header-area">
    <div class="top-header-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6">
                    <ul class="header-content-left">
                        <li>
                            <a href="/kullanici-giris">
                                <i class="bx bx-user"></i>
                                Kullanıcı girişi
                            </a>
                        </li>
                        <li>
                            <a href="tel:<?php echo $iletisim["mobile"];?>">
                                <i class="bx bx-phone-call"></i>
                                <?php echo $iletisim["mobile"];?>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="header-content-right">
                        <p>
                            <a href="#">7/24</a>
                            Haftanın tüm günleri sizlere hizmet için burdayız!
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Start Tezno Navbar Area -->
    <div class="tezno-nav-style">
        <div class="navbar-area">
            <!-- Menu For Mobile Device -->
            <div class="mobile-nav">
                <a href="/" class="logo">
                    <img src="/assets/img/demo-watch/logo.png" alt="<?php echo $conf->baslik;?>">
                </a>
            </div>
            <!-- Menu For Desktop Device -->
            <div class="main-nav">
                <nav class="navbar navbar-expand-md navbar-light">
                    <div class="container">
                        <a class="navbar-brand" href="/">
                            <img src="/assets/img/demo-watch/logo.png" alt="<?php echo $conf->baslik;?>">
                        </a>
                        <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                            <ul class="navbar-nav m-auto">
                                <li class="nav-item">
                                    <a href="/" class="nav-link">Anasayfa</a>
                                </li>
                                <li class="nav-item">
                                    <a href="/cok-satanlar" class="nav-link">Çok Satılanlar</a>
                                </li>
                                <li class="nav-item">
                                    <a href="/son-eklenenler" class="nav-link">Son Eklenenler</a>
                                </li>

                                <li class="nav-item">
                                    <a href="#" class="nav-link dropdown-toggle">
                                        Kategoriler
                                        <i class='bx bx-chevron-down'></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <?php
                                        $veri = $uye->veri_al("kategori where durum=1");
                                        foreach ($veri as $yaz):
                                        ?>
                                        <li class="nav-item">
                                            <a href="/kategori/<?php echo $yaz["seo"];?>" class="nav-link"><?php echo $yaz["baslik"];?></a>
                                        </li>
                                        <?php endforeach;?>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="/iletisim" class="nav-link">İletişim</a>
                                </li>
                                <?php
                                if($_SESSION["kontrol"] == "yes")

                                {
                                    ?>
                                    <li class="nav-item">
                                        <a href="/users-profile" class="nav-link">Profil</a>
                                    </li>
                                <?php

                                }
                                ?>
                            </ul>
                            <!-- Start Other Option -->
                            <div class="others-option">
                                <div class="cart-wrap">
                                    <a class="cart-icon" href="/" onclick="return false">
                                        <i class='bx bx-cart-alt'></i>
                                        <span>
                                            <?php
                                            $adet = count($_COOKIE["urun"]);
                                            echo $adet;
                                            ?>
                                        </span>
                                    </a>
                                    <div id="hoverShow1">
                                        <div class="gizli"></div>
                                        <div class="dropdown-cart-products urun-ekle">

                                            <?php
                                            if($_COOKIE["urun"]){
                                                $fiyat ="";
                                                foreach ($_COOKIE["urun"] as $key => $val):
                                                    @$veri = $uye->tekli_cek("urunler","urunler_iD",$val);
                                                    $fiyat = ($fiyat + $veri["fiyat"]);
                                                ?>
                                                <div class="product">
                                                    <div class="product-details">
                                                        <h6 class="product-title">
                                                            <a href="#"><?php echo $veri["baslik"];?></a>
                                                        </h6>

                                                        <span class="cart-product-info">
                                                             <?php echo $veri["fiyat"]?> ₺
                                                        </span>
                                                    </div><!-- End .product-details -->

                                                    <figure class="product-image-container">
                                                        <a href="#" class="product-image">
                                                            <img src="/assets/img/urunler/<?php echo $veri["foto"];?>" alt="<?php echo $veri["baslik"];?>">
                                                        </a>
                                                        <a href="/?urun-sil/<?php echo $veri["urunler_iD"];?>" class="btn-remove" title="Ürünü Sil"><i class="bx bx-x"></i></a>
                                                    </figure>

                                                </div>

                                            <?php
                                            endforeach;
                                            ?>
                                            <div class="dropdown-cart-total">
                                                <span>Toplam</span>

                                                <span class="cart-total-price">
                                                    <?php echo $fiyat;?> ₺
                                                </span>
                                            </div>
                                            <div class="dropdown-cart-action">
                                                <a href="/cart-sepet" class="btn btn-block">Sepete Git</a>
                                            </div>
                                            <?php
                                            }else{
                                                ?>
                                                <div class="product">
                                                    Sepetinizde Ürün Bulunmamaktadır.
                                                </div>
                                            <?php
                                            }
                                            ?>


                                        </div>
                                    </div>
                                </div>
                                <div class="search-wrap">
                                    <div class="other-option">
                                        <div class="search-box-item">
                                            <i class="search-btn bx bx-search"></i>
                                            <i class="close-btn bx bx-x"></i>
                                            <div class="search-overlay search-popup">
                                                <div class="search-box">
                                                    <form class="search-form">
                                                        <input class="search-input" name="search" placeholder="Ara" type="text">
                                                        <button class="search-button" type="submit">
                                                            <i class="bx bx-search"></i>
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Other Option -->
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- End Tezno Navbar Area -->
</header>
<!-- End Heder Area -->