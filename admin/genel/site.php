<?php
/**
 * Created by PhpStorm.
 * User: cihan
 * Date: 2.07.2016
 * Time: 15:32
 */
$dir = $_SERVER["DOCUMENT_ROOT"];
?>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
    <?php include(dirname(dirname(__FILE__))."/include/header.php");?>
    <?php include($dir."/$conf->admin_path/include/sidebar.php");?>


    <!-------------------------------------İçerik sayfası kodları buraya gelecek----------------------------------------->
    <div class="content-wrapper">
        <!-------------------------------------İçerik sayfası Üst kodları buraya gelecek--------------------------------->
        <section class="content-header">
            <h1>
                Site ayarları
                <small>Kontrol paneli</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="/<?php echo $conf->admin_path;?>/index.php"><i class="fa fa-dashboard"></i> Anasayfa</a></li>
                <li class="active">Site ayarları kontrol paneli</li>
            </ol>
        </section>
        <!-------------------------------------İçerik sayfası Üst kodları burda bitecek---------------------------------->
        <!-------------------------------------İçerik sayfası içerik kodları buraya gelecek------------------------------>
        <section class="content">
            <div class="row">
                <div class="col-md-7">
                    <!-- Kullanıcı denetimi -->
                    <div class="box box-info center">

                        <div class="box-header">
                            <h3 class="box-title">Site ayarları kontrol paneli</h3>
                        </div>
                        <?php $site = $uye->tekli_cek("site_ayar","site_ayar_iD",1);?>
                        <!-------------------kullanıcı kaydetme ve load dosyası üzerinden düzenleme divi--------------->
                        <div class="box-body" id="duzenle_load">
                            <form class="form-group" id="veriyi_guncelle" method="post" action="" enctype="multipart/form-data">

                                <label>Başlık :</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-list-alt"></i></span>
                                    <input type="text" name="baslik" class="form-control" value="<?php echo $site["baslik"];?>">
                                </div>

                                <label>Telefon :</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                                    <input type="text" name="telefon" class="form-control" value="<?php echo $site["telefon"];?>">
                                </div>

                                <label>Fax :</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-fax"></i></span>
                                    <input type="text" name="fax" class="form-control" value="<?php echo $site["fax"];?>">
                                </div>

                                <label>Mobil Telefon :</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-mobile-phone"></i></span>
                                    <input type="text" name="mobile" class="form-control" value="<?php echo $site["mobile"];?>">
                                </div>

                                <label>Adres yeri :</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
                                    <input type="text" name="adres" class="form-control" value="<?php echo $site["adres"];?>">
                                </div>

                                <label>Web adres :</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-at"></i></span>
                                    <input type="text" name="url" class="form-control" value="<?php echo $site["url"];?>">
                                </div>

                                <label>E-mail :</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                    <input type="text" name="email" class="form-control" value="<?php echo $site["email"];?>">
                                </div>

                                <label>Enlem :</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-location-arrow"></i></span>
                                    <input type="text" name="enlem" class="form-control" value="<?php echo $site["enlem"];?>">
                                </div>

                                <label>Boylam :</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-location-arrow"></i></span>
                                    <input type="text" name="boylam" class="form-control" value="<?php echo $site["boylam"];?>">
                                </div>

                                <label>SMTP E-mail host  :</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-envelope-o"></i></span>
                                    <input type="text" name="email_host" class="form-control" value="<?php echo $site["email_host"];?>">
                                </div>

                                <label>E-mail adresi  :</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                    <input type="text" name="email_user" class="form-control" value="<?php echo $site["email_user"];?>">
                                </div>

                                <label>E-mail şifresi  :</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-key"></i></span>
                                    <input type="password" name="email_pass" class="form-control" value="<?php echo $site["email_pass"];?>">
                                </div>

                                <label>Facebook :</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-facebook"></i></span>
                                    <input type="text" name="facebook" class="form-control" value="<?php echo $site["facebook"];?>">
                                </div>

                                <label>Twitter :</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-twitter"></i></span>
                                    <input type="text" name="twitter" class="form-control" value="<?php echo $site["twitter"];?>">
                                </div>

                                <label>İnstagram :</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-instagram"></i></span>
                                    <input type="text" name="instagram" class="form-control" value="<?php echo $site["instagram"];?>">
                                </div>

                                <label>Google+ :</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-google-plus"></i></span>
                                    <input type="text" name="google" class="form-control" value="<?php echo $site["google"];?>">
                                </div>

                                <label>Google Analytics :</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-google"></i></span>
                                    <input type="text" name="analistik" class="form-control" value="<?php echo $site["analistik"];?>">
                                </div>

                                <label>Firma logosu :</label>
                                <div class="input-group">
                                    <input type="file" class="form-control" name="logo">
                                </div>
                                <br>
                                <button class="btn  btn-primary pull-right" onclick="veri_guncelle('<?php echo $conf->admin_path ?>','site',1);" type="submit">Güncelle</button>
                            </form>

                        </div>
                    </div>
                    <!-- Kullanıcı denetimi bitiş -->
                </div>
                <div class="col-md-5">
                    <!-- Kullanıcı denetimi -->
                    <div class="box box-info center">

                        <div class="box-header">
                            <h3 class="box-title">Site ayarları</h3>
                        </div>
                        <!-------------------kullanıcı kaydetme ve load dosyası üzerinden düzenleme divi--------------->
                        <div class="box-body">
                            <label style="height: 25px;"></label>
                            <div class="input-group">
                                <p><i style="color: red;" class="fa fa-arrow-right"></i>  Site başlığının ekleneceği alan.</p>
                            </div>
                            <label style="height: 25px;"></label>
                            <div class="input-group">
                                <p><i style="color: red;" class="fa fa-arrow-right"></i>  Firma telefonun eklendiği alan.</p>
                            </div>
                            <label style="height: 24px;"></label>
                            <div class="input-group">
                                <p><i style="color: red;" class="fa fa-arrow-right"></i>  Fax numarasının eklendiği alan.</p>
                            </div>
                            <label style="height: 23px;"></label>
                            <div class="input-group">
                                <p><i style="color: red;" class="fa fa-arrow-right"></i>  GSM numarasının eklendiği alan.</p>
                            </div>
                            <label style="height: 23px;"></label>
                            <div class="input-group">
                                <p><i style="color: red;" class="fa fa-arrow-right"></i>  Firma adresinin eklendiği alan.</p>
                            </div>
                            <label style="height: 24px;"></label>
                            <div class="input-group">
                                <p><i style="color: red;" class="fa fa-arrow-right"></i>  Firma internet adresinin eklendiği alan.</p>
                            </div>
                            <label style="height: 24px;"></label>
                            <div class="input-group">
                                <p><i style="color: red;" class="fa fa-arrow-right"></i>  Firma e-mail adresinin eklendiği alan.</p>
                            </div>
                            <label style="height: 24px;"></label>
                            <div class="input-group">
                                <p><i style="color: red;" class="fa fa-arrow-right"></i>  Google harita enlem ( <strong>latitude</strong> ) kordinati eklendiği alan.</p>
                            </div>
                            <label style="height: 23px;"></label>
                            <div class="input-group">
                                <p><i style="color: red;" class="fa fa-arrow-right"></i>  Google harita boylam ( <strong>longitude</strong> ) kordinati eklendiği alan.</p>
                            </div>
                            <label style="height: 24px;"></label>
                            <div class="input-group">
                                <p><i style="color: red;" class="fa fa-arrow-right"></i>  E-mail gönderim alımları için email host bilgisinin eklendiği alan.</p>
                            </div>
                            <label style="height: 24px;"></label>
                            <div class="input-group">
                                <p><i style="color: red;" class="fa fa-arrow-right"></i>  E-mail gönderim alımları için email kullanıcı adı eklendiği alan.</p>
                            </div>
                            <label style="height: 24px;"></label>
                            <div class="input-group">
                                <p><i style="color: red;" class="fa fa-arrow-right"></i>  E-mail gönderim alımları için email şifresi bilgisinin eklendiği alan.</p>
                            </div>
                            <label style="height: 25px;"></label>
                            <div class="input-group">
                                <p><i style="color: red;" class="fa fa-arrow-right"></i>  Firmaya ait facebook adresi varsa buraya eklenecek.</p>
                            </div>
                            <label style="height: 25px;"></label>
                            <div class="input-group">
                                <p><i style="color: red;" class="fa fa-arrow-right"></i>  Firmaya ait twitter adresi varsa buraya eklenecek.</p>
                            </div>
                            <label style="height: 23px;"></label>
                            <div class="input-group">
                                <p><i style="color: red;" class="fa fa-arrow-right"></i>  Firmaya ait instagram adresi varsa buraya eklenecek.</p>
                            </div>
                            <label style="height: 23px;"></label>
                            <div class="input-group">
                                <p><i style="color: red;" class="fa fa-arrow-right"></i>  Firmaya ait google plus adresi varsa buraya eklenecek.</p>
                            </div>
                            <label style="height: 23px;"></label>
                            <div class="input-group">
                                <p><i style="color: red;" class="fa fa-arrow-right"></i>  Site analizi için google analytics kodunun ekleneceği alan.</p>
                            </div>
                            <label style="height: 23px;"></label>
                            <div class="input-group">
                                <p><i style="color: red;" class="fa fa-arrow-right"></i>  Firmanın logosu burdan eklenecek.</p>
                            </div>
                            <label style="height: 23px;"></label>
                            <div class="input-group">
                                <p><i style="color: red;" class="fa fa-arrow-right"></i>  Güncelle butonu ile bilgiler güncellenecektir.</p>
                            </div>
                        </div>

                    </div>
                    <!-- Kullanıcı denetimi bitiş -->
                </div>

            </div>
        </section>
        <!-------------------------------------İçerik sayfası içerik kodları burda bitecek------------------------------>
    </div>
    <?php include($dir."/$conf->admin_path/include/footer.php");?>
    <?php include($dir."/$conf->admin_path/include/alt_sidebar.php");?>
    <?php include($dir."/$conf->admin_path/include/js.php");?>
</body>
</html>
