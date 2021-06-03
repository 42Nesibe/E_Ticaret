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
            <h2>Sepettinizde bulunan ürünler</h2>
            <ul>
                <li>
                    <a href="/">
                        Anasayfa
                    </a>
                </li>
                <li>sepet</li>
            </ul>
        </div>
    </div>
</div>
<!-- End Page Title Area -->

<!-- Start Cart Area -->
<section class="cart-area ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <form>
                    <div class="cart-wraps">
                        <div class="cart-table table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th scope="col">Kitap</th>
                                    <th scope="col">İsim</th>
                                    <th scope="col">Fiyat</th>
                                    <th scope="col">Adet</th>
                                    <th scope="col">Toplam</th>
                                </tr>
                                </thead>

                                <tbody>

                                <?php
                                if($_COOKIE["urun"]){
                                $fiyat ="";
                                foreach ($_COOKIE["urun"] as $key => $val):
                                @$veri = $uye->tekli_cek("urunler","urunler_iD",$val);

                                ?>

                                <tr>
                                    <td class="product-thumbnail">
                                        <a href="#">
                                            <img src="/assets/img/urunler/<?php echo $veri["foto"];?>" alt="<?php echo $veri["baslik"];?>">
                                        </a>
                                    </td>

                                    <td class="product-name">
                                        <a href="#"><?php echo $veri["baslik"];?></a>
                                    </td>

                                    <td class="product-price">
                                        <span id="fiyat-<?php echo $veri["urunler_iD"];?>" class="unit-amount"><?php echo $veri["fiyat"];?></span>
                                    </td>

                                    <td class="product-quantity">
                                        <div class="input-counter">
														<span class="minus-btn" onclick="cikar('<?php echo $veri["urunler_iD"];?>');">
															<i class='bx bx-minus'></i>
														</span>
                                            <input type="text" id="deger-<?php echo $veri["urunler_iD"];?>" value="1">
                                            <span class="plus-btn" onclick="topla('<?php echo $veri["urunler_iD"];?>');">
															<i class='bx bx-plus'></i>
														</span>
                                        </div>
                                    </td>

                                    <td class="product-subtotal">
                                        <span class="subtotal-amount" id="toplam-<?php echo $veri["urunler_iD"];?>"><?php echo $veri["fiyat"];?> ₺</span>

                                        <a href="/?urun-sil/<?php echo $veri["urunler_iD"];?>" class="remove">
                                            <i class='bx bx-trash'></i>
                                        </a>
                                    </td>
                                </tr>

                                <?php  endforeach;}?>
                                </tbody>
                            </table>
                        </div>

                        <div class="cart-buttons">
                            <div class="row align-items-center">
                                <div class="col-lg-7 col-sm-7 col-md-7">
                                    <div class="continue-shopping-box">
                                        <a href="/" class="default-btn page-btn">
                                            Alışverişe devam
                                        </a>
                                    </div>
                                </div>

                                <div class="col-lg-5 col-sm-5 col-md-5 text-right">
                                    <a href="/sepeten-satis" class=" default-btn page-btn">
                                        Sepetten satış
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- End Cart Area -->


<?php include_once "footer.php";?>
<?php include_once "urun-modal.php";?>


<?php include_once "js.php";?>
<script type="text/javascript">

function topla(id) {

    var deger = parseInt($('#deger-'+ id).val());
    var sayi2 = 1;
    var toplam1=(deger+sayi2);
    var fiyat = $("#fiyat-"+ id).text();
    var toplam = toplam1 * fiyat;
    $('#toplam-'+ id).text(toplam + ' ₺');

}
function cikar(id) {

    var deger = parseInt($('#deger-'+ id).val());
    var sayi2 = -1;
    var toplam1=(deger+sayi2);
    var fiyat = $("#fiyat-"+ id).text();
    var toplam = toplam1 * fiyat;
    $('#toplam-'+ id).text(toplam + ' ₺');

}
</script>
</body>
</html>