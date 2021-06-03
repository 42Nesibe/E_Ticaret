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
            <h2>Sepeten Satış</h2>
            <ul>
                <li>
                    <a href="/">
                        Anasayfa
                    </a>
                </li>
                <li>satis</li>
            </ul>
        </div>
    </div>
</div>
<!-- End Page Title Area -->


<!-- Start Checkout Area -->
<section class="checkout-area ptb-100">
    <div class="container">
        <?php
        if($_SESSION["kontrol"] != "yes")

        {


        ?>
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="user-actions">
                    <i class='bx bx-log-in-circle'></i>
                    <span>Satış işlemini gerçekleştirmek için <a href="/kullanici-giris">Lütfen giriş yapınız</a></span>
                </div>
            </div>
        </div>
        <?php



        }
        ?>
        <?php
        if(!$_COOKIE["urun"]) // burası sepete urun yoksa anaysafaya yöneldiriyor

        {


            echo '<script>location.href="/"</script>';

            exit;



        }
        ?>
        <?php
        if($_SESSION["kontrol"] == "yes") // burası da üye değilsen giriş yap diyo

        {


            ?>
            <form id="satis" method="post" action="satis-ok.php">
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <div class="billing-details">
                            <h3 class="title">Fatura Bilgileri</h3>

                            <div class="row">

                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label>Adınız <span class="required">*</span></label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label>Soyadınız <span class="required">*</span></label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-6">
                                    <div class="form-group">
                                        <label>Adres <span class="required">*</span></label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-6">
                                    <div class="form-group">
                                        <label>İlçe <span class="required">*</span></label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label>Şehir <span class="required">*</span></label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label>Posta kodu <span class="required">*</span></label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label>Email Adres <span class="required">*</span></label>
                                        <input type="email" class="form-control">
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label>Telefon <span class="required">*</span></label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>


                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <textarea name="notes" id="notes" cols="30" rows="5" placeholder="Not ekle" class="form-control"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-12">
                        <div class="order-details">
                            <div class="order-table table-responsive">
                                <h3 class="title">Alışveriş Listeniz</h3>
                                <table class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th scope="col">İsim</th>
                                        <th scope="col">Fiyat</th>
                                    </tr>
                                    </thead>

                                    <tbody>
                                    <input type="hidden" name="users_id" value="<?php echo $_SESSION["users"]["users_iD"]?>">
                                    <?php

                                    $fiyat ="";
                                    $indirim ="";
                                    foreach ($_COOKIE["urun"] as $key => $val):// urunleri burda listeliyo
                                    @$veri = $uye->tekli_cek("urunler","urunler_iD",$val);
                                    $fiyat = ($fiyat + $veri["fiyat"]); // burd toplam fiyatı tutuyo

                                    if($veri["indirim"]==1){ // burda eğer ürünün indirimi varsa 1 ise var demektir
                                        $indirim1 = $veri["fiyat"] * $veri["indirim_yuzdesi"] / 100; // burda yüzdeliği alıy
                                        $indirim = $indirim + $indirim1; // bura da toplam indirim alıyor

                                    }
                                    ?>


                                    <tr>
                                        <td class="product-name">
                                            <a href="#"><?php echo $veri["baslik"];?></a>
                                        </td>

                                        <td class="product-total">
                                            <span class="subtotal-amount"><?php echo $veri["fiyat"];?> ₺</span>
                                        </td>
                                        <input type="hidden" name="urun_id[]" value="<?php echo $veri["urunler_iD"];?>">
                                    </tr>
                                    <?php endforeach;?>

                                    <tr>
                                        <td class="order-subtotal">
                                            <span>Toplam tutar</span>
                                        </td>

                                        <td class="order-subtotal-price">
                                            <span class="order-subtotal-amount"><?php echo $fiyat;?></span>
                                            <input type="hidden" name="toplam_harcama" value="<?php echo $fiyat;?>">
                                        </td>

                                    </tr>

                                    <tr>
                                        <td class="order-shipping">
                                            <span>İndirim</span>
                                        </td>

                                        <td class="shipping-price">
                                            <span><?php echo $indirim;?> ₺</span>
                                            <input type="hidden" name="toplam_indirim" value="<?php echo $indirim;?>">
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="total-price">
                                            <span>Kalan tutar</span>
                                        </td>
                                        <?php
                                        $kalan = $fiyat - $indirim; // toplam fiyatan indirimi düşüyoruz kalan net
                                        ?>
                                        <td class="product-subtotal">
                                            <span class="subtotal-amount"><?php echo $kalan;?> ₺</span>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>

                            <div class="order-table table-responsive" style="text-align: center;">
                                <?php
                                $rand = substr(md5(microtime()),rand(0,26),6);// satış kimliği oluştuyuryo
                                ?>
                                <h3 class="title">Sipariş Kimliği : <span style="color:green;"><?php echo $rand;?></span></h3>
                            </div>

                            <div class="payment-box">
                                <div class="payment-method">
                                    <p>
                                        <input type="radio" id="direct-bank-transfer" name="radio-group" checked="">
                                        <label for="direct-bank-transfer">Banka EFT/Havale</label>

                                        Ödemenizi doğrudan banka hesabımıza yapın. Ödeme referansı olarak lütfen Sipariş Kimliğinizi kullanın. Siparişiniz, ödeme yapılana kadar gönderilmeyecek.
                                    </p>
                                    <p>
                                        <input type="radio" id="paypal" name="radio-group">
                                        <label for="paypal">PayPal</label>
                                    </p>
                                    <p>
                                        <input type="radio" id="cash-on-delivery" name="radio-group">
                                        <label for="cash-on-delivery">Kapıda ödeme</label>
                                    </p>
                                </div>

                                <button class="default-btn" type="submit">
                                    Satın al
                                    <i class="flaticon-right"></i>
                                </button>
                                <div class="form-box box box-solid bg-green" style="padding:10px; display:none;" id="Msg">

                                    <span class=" glyphicon glyphicon-check"></span> <span id="MesajKutu"></span>

                                </div>

                                <div class="form-box box box-solid bg-red" style="padding:10px; display:none;" id="MsgH">

                                    <span class=" glyphicon glyphicon-remove"></span> <span id="MesajKutuHata"></span>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>

            <?php



        }
        ?>

    </div>
</section>
<!-- End Checkout Area -->



<?php include_once "footer.php";?>
<?php include_once "urun-modal.php";?>
<?php include_once "js.php";?>

<script>

    $("form#satis").submit(function () { // buda formu gönderen jquery (javascript) kodu

        $("#Msg,#MsgH").hide();

        $.post($(this).attr("action"), $(this).serialize(), function (sonuc) {

            if (sonuc.durum) {

                $("#avatar").addClass("tada");

                $("#MesajKutu").html(sonuc.msg);

                $("#Msg").show();

                setTimeout(function () {

                    location.href = "/sepeten-satis";

                }, '2000');

            } else {


                $("#MsgH").show();

                $("#MesajKutuHata").html(sonuc.msg);

            }

            console.log(sonuc);

        }, 'JSON').error(function(bir,ik,uc) {

            console.log(bir);

            console.log(ik);

            console.log(uc);

        });



        return false;

    });

</script>

</body>
</html>