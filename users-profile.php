<!doctype html>
<html lang="tr">
<?php include_once "head.php";?>
<body>
<?php ob_start();?>
<?php session_start();?>
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
if($_SESSION["kontrol"] != "yes")

{


    echo '<script>location.href="/"</script>';

    exit;



}
?>
<!-- Start Page Title Area -->
<div class="page-title-area">
    <div class="container">
        <div class="page-title-content">
            <h2>Hoş Geldiniz <?php echo $_SESSION["users"]["ad"]." ".$_SESSION["users"]["soyad"];?></h2>
            <ul>
                <li>
                    <a href="/">
                        Anasayfa
                    </a>
                </li>
                <li>Kullanıcı paneli</li>
            </ul>
        </div>
    </div>
</div>
<!-- End Page Title Area -->

<!-- Start News Details Area -->
<section class="news-details-area ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-12">

                <aside class="widget-area" id="secondary">



                    <section class="widget widget_categories">
                        <h3 class="widget-title">Menü</h3>
                        <div class="post-wrap">
                            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-anasayfa" role="tab" aria-controls="v-pills-anasayfa" aria-selected="true">Anasayfa</a>
                                <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-satin-alinanlar" role="tab" aria-controls="v-pills-satin-alinanlar" aria-selected="false">Satın alınanlar</a>
                                <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profil" role="tab" aria-controls="v-pills-profil" aria-selected="false">Profil</a>
                                <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-ayarlar" role="tab" aria-controls="v-pills-ayarlar" aria-selected="false">Ayarlar</a>
                                <a class="nav-link" href="/cikis-yap">Çıkış</a>
                            </div>
                        </div>
                    </section>


                </aside>
            </div>

            <div class="col-lg-8 col-md-12">
                <div class="blog-details-desc">
                    <div class="row">

                        <div class="col-lg-12 col-md-6">
                            <div class="tab-content" id="v-pills-tabContent">
                                <div class="tab-pane fade show active" id="v-pills-anasayfa" role="tabpanel" aria-labelledby="v-pills-anasayfa-tab">
                                    <?php $veri = $uye->tekli_cek("users","users_iD",$_SESSION["users"]["users_iD"]); ?>
                                    <div class="row login_box">
                                        <div class="col-md-12 col-xs-12" align="center">
                                            <div class="line"><h3 id="timestamp"></h3></div>
                                            <div class="outter"><img src="assets/img/profile/<?php echo $veri["foto"];?>" class="image-circle"/></div>
                                            <h1>Merhaba <?php echo $veri["ad"];?></h1>
                                            <span>Hoşgeldin</span>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4 col-sm-6 col-xs-12">
                                            <div class="info-box widget widget_categories">
                                                <span class="info-box-icon bg-aqua"><i class="bx bx-cart-alt"></i></span>
                                                <?php
                                                $k_id = $_SESSION["users"]["users_iD"];
                                                $veri = $uye->coklu_coklu("satilanlar","kullanici_id",$k_id);
                                                $veri_toplam = count($veri);
                                                ?>
                                                <div class="info-box-content">
                                                    <span class="info-box-text">Kitap aldınız.</span>
                                                    <span class="info-box-number"><?php echo $veri_toplam;?></span>
                                                </div>
                                                <!-- /.info-box-content -->
                                            </div>
                                            <!-- /.info-box -->
                                        </div>
                                        <!-- /.col -->

                                        <?php
                                        $k_id = $_SESSION["users"]["users_iD"];
                                        $veri = $uye->tekli_cek("ozet","users_id",$k_id);
                                        ?>
                                        <!-- fix for small devices only -->
                                        <div class="clearfix visible-sm-block"></div>


                                        <div class="col-md-4 col-sm-6 col-xs-12">
                                            <div class="info-box">
                                                <span class="info-box-icon bg-green"><i class="bx bxl-bitcoin"></i></span>

                                                <div class="info-box-content">
                                                    <span class="info-box-text">Harcanan para</span>
                                                    <span class="info-box-number"><?php echo $veri["toplam_harcama"];?> ₺</span>
                                                </div>
                                                <!-- /.info-box-content -->
                                            </div>
                                            <!-- /.info-box -->
                                        </div>
                                        <!-- /.col -->
                                        <div class="col-md-4 col-sm-6 col-xs-12">
                                            <div class="info-box">
                                                <span class="info-box-icon bg-yellow"><i class="bx bx-arrow-to-bottom"></i></span>

                                                <div class="info-box-content">
                                                    <span class="info-box-text">Toplam indirim</span>
                                                    <span class="info-box-number"><?php echo $veri["toplam_indirim"];?> ₺</span>
                                                </div>
                                                <!-- /.info-box-content -->
                                            </div>
                                            <!-- /.info-box -->
                                        </div>
                                        <!-- /.col -->
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="v-pills-satin-alinanlar" role="tabpanel" aria-labelledby="v-pills-satin-alinanlar-tab">
                                    <table class="table ">
                                        <thead>
                                        <tr>
                                            <th scope="col">Adet</th>
                                            <th scope="col">İsim</th>
                                            <th scope="col">Kategori</th>
                                            <th scope="col">Fiyat</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                        $id = $_SESSION["users"]["users_iD"];
                                        $veri = $uye->veri_al("satilanlar where kullanici_id={$id}");

                                        foreach ($veri as $key => $yaz):
                                        $tek = $uye->tekli_cek("urunler","urunler_iD",$yaz["urun_id"]);
                                        $kat = $uye->tekli_cek("kategori","kategori_iD",$tek["kat_id"]);
                                        ?>
                                        <tr>
                                            <th scope="row"><?php echo $key + 1;?></th>
                                            <td><?php echo $tek["baslik"];?></td>
                                            <td><?php echo $kat["baslik"];?></td>
                                            <td><?php echo $tek["fiyat"];?> ₺</td>
                                        </tr>
                                        <?php endforeach;?>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="tab-pane fade" id="v-pills-profil" role="tabpanel" aria-labelledby="v-pills-profil-tab">
                                    <div class="box-body">

                                        <?php

                                        $veri = $uye->tekli_cek("users","users_iD",$_SESSION["users"]["users_iD"])

                                        ?>

                                        <form class="form-group" id="profil" method="post" action="/profil-guncelle" enctype="multipart/form-data">




                                            <label>Adı :</label>

                                            <div class="input-group">

                                                <span class="input-group-addon"><i class="fa fa-user"></i></span>

                                                <input type="text" name="ad" class="form-control" value="<?php echo $veri["ad"];?>">

                                            </div>



                                            <label>Soyadı :</label>

                                            <div class="input-group">

                                                <span class="input-group-addon"><i class="fa fa-user"></i></span>

                                                <input type="text" name="soyad" class="form-control" value="<?php echo $veri["soyad"];?>">

                                            </div>


                                            <label>Kullanıcı adı :</label>

                                            <div class="input-group">

                                                <span class="input-group-addon"><i class="fa fa-user"></i></span>

                                                <input type="text" name="k_adi" class="form-control" value="<?php echo $veri["k_adi"];?>">

                                            </div>



                                            <label>Şifre :</label>

                                            <div class="input-group">

                                                <span class="input-group-addon"><i class="fa fa-asterisk"></i></span>

                                                <input type="password" name="sifre" class="form-control" placeholder="Şifre">

                                            </div>





                                            <label>Email :</label>

                                            <div class="input-group">

                                                <span class="input-group-addon">@</span>

                                                <input type="email" name="email" class="form-control" value="<?php echo $veri["email"];?>">

                                            </div>





                                            <label>Foto :</label>

                                            <div class="input-group">

                                                <span class="input-group-addon"><i class="fa fa-camera"></i></span>

                                                <input type="file" name="foto" class="form-control">

                                            </div>



                                            <label>Facebook :</label>

                                            <div class="input-group">

                                                <span class="input-group-addon"><i class="fa fa-facebook"></i></span>

                                                <input name="facebook"  class="form-control" value="<?php echo $veri["facebook"];?>">

                                            </div>

                                            <label>Twitter :</label>

                                            <div class="input-group">

                                                <span class="input-group-addon"><i class="fa fa-twitter"></i></span>

                                                <input name="twitter" class="form-control" value="<?php echo $veri["twitter"];?>">

                                            </div>

                                            <label>Google + :</label>

                                            <div class="input-group">

                                                <span class="input-group-addon"><i class="fa fa-google-plus"></i></span>

                                                <input name="google" class="form-control" value="<?php echo $veri["google"];?>">

                                            </div>


                                            <label>İnstagram :</label>

                                            <div class="input-group">

                                                <span class="input-group-addon"><i class="fa fa-instagram"></i></span>

                                                <input name="instagram" class="form-control" value="<?php echo $veri["instagram"];?>">
                                                <input name="users_id" type="hidden" class="form-control" value="<?php echo $veri["users_iD"];?>">

                                            </div>

                                            <br>

                                            <button class="btn btn-primary pull-right"  type="submit">Kaydet</button>

                                        </form>



                                    </div>
                                </div>
                                <div class="tab-pane fade" id="v-pills-ayarlar" role="tabpanel" aria-labelledby="v-pills-ayarlar-tab">...</div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End News Details Area -->



<?php include_once "footer.php";?>
<?php include_once "urun-modal.php";?>
<?php include_once "js.php";?>
<script>
    $(document).ready(function() {
        setInterval(timestamp, 1000);
    });

    function timestamp() {
        $.ajax({
            url: 'saat.php',
            success: function(data) {
                $('#timestamp').html(data);
            },
        });
    }
</script>
</body>
</html>