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
                Kullanıcı
                <small>Kontrol paneli</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="/<?php echo $conf->admin_path;?>/index.php"><i class="fa fa-dashboard"></i> Anasayfa</a></li>
                <li class="active">Kullanıcı kontrol paneli</li>
            </ol>
        </section>
        <!-------------------------------------İçerik sayfası Üst kodları burda bitecek---------------------------------->
        <!-------------------------------------İçerik sayfası içerik kodları buraya gelecek------------------------------>
        <section class="content">
            <div class="row">
                <div class="col-md-6">
                    <!-- Kullanıcı denetimi -->
                    <div class="box box-info center">

                        <div class="box-header">
                            <h3 class="box-title">Yeni kullanıcı oluştur.</h3>
                        </div>
                        <!-------------------kullanıcı kaydetme ve load dosyası üzerinden düzenleme divi--------------->
                        <div class="box-body" id="duzenle_load">

                            <form class="form-group" id="kaydet" method="post" action="" enctype="multipart/form-data">

                                <label>Kullanıcı adı :</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                    <input type="text" name="k_adi" class="form-control" placeholder="Kullanıcı adı" required>
                                </div>

                                <label>Adı :</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                    <input type="text" name="adi" class="form-control" placeholder="Adı" required>
                                </div>

                                <label>Soyadı :</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                    <input type="text" name="soyadi" class="form-control" placeholder="Soyadı" required>
                                </div>

                                <label>Şifre :</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-asterisk"></i></span>
                                    <input type="password" name="pass" class="form-control" placeholder="Şifre" required>
                                </div>


                                <label>Email :</label>
                                <div class="input-group">
                                    <span class="input-group-addon">@</span>
                                    <input type="email" name="email" class="form-control" placeholder="E-mail" required>
                                </div>
                                

                                <label>Foto :</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-camera"></i></span>
                                    <input type="file" name="foto" class="form-control" required>
                                </div>

                                <label>Durum :</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-info"></i></span>
                                    <select name="durum" class="form-control" required>
                                        <option value="">Seçiniz</option>
                                        <option value="1">Aktif</option>
                                        <option value="0">Pasif</option>
                                    </select>
                                </div>

                                <label>Statu :</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-info"></i></span>
                                    <select name="statu" class="form-control" required>
                                        <option value="">Seçiniz</option>
                                        <option value="yonetici">Yönetici</option>
                                        <option value="admin">Admin</option>
                                        <option value="normal">Kullanıcı</option>
                                    </select>
                                </div>
                                <label>Facebook :</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-facebook"></i></span>
                                    <input name="facebook" class="form-control" placeholder="Facebook">
                                </div>
                                <label>Twitter :</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-twitter"></i></span>
                                    <input name="twitter" class="form-control" placeholder="Twitter">
                                </div>
                                <label>Google plus :</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-google-plus"></i></span>
                                    <input name="google" class="form-control" placeholder="Google +">
                                </div>
                                <br>
                                <button class="btn btn-primary pull-right" onclick="Kaydet('<?php echo $conf->admin_path ?>','yonetici',null);" type="submit">Kaydet</button>
                            </form>

                        </div>
                    </div>
                    <!-- Kullanıcı denetimi bitiş -->
                </div>
                <div class="col-md-6">
                    <!-- Kullanıcı denetimi -->
                    <div class="box box-info center">

                        <div class="box-header">
                            <h3 class="box-title">Kullanıcı düzenle.</h3>
                        </div>

                        <div class="box-body">
                            <table class="table table-hover">
                                <thead class="alert alert-success">
                                    <th class="col-md-4">Kullanıcı Adı</th><th class="col-md-4">Kullanıcı Statüsü</th><th class="col-md-4">İşlem</th>
                                </thead>
                                <tbody>
                                <?php
                                $veri = $uye->veri_al("admin_panel");
                                foreach ($veri as $yaz):
                                ?>
                                <tr>
                                    <td><?php echo $yaz["k_adi"];?></td>
                                    <td><?php echo $yaz["statu"];?></td>
                                    <td>
                                        <button onclick="Duzenle('<?php echo $conf->admin_path ?>','yonetici',<?php echo $yaz["admin_panel_iD"];?>);" class="btn btn-success">Düzenle</button>
                                        <button onclick="Sil('<?php echo $conf->admin_path ?>','yonetici',<?php echo $yaz["admin_panel_iD"];?>);" class="btn btn-danger">Sil</button>
                                    </td>
                                </tr>
                                <?php endforeach;?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- Kullanıcı denetimi bitiş -->
                </div>
                <!-- Kullanıcı silme modülü-->
                <div class="example-modal">
                    <div class="modal modal-danger" id="modalSil">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title">Silme modülü</h4>
                                </div>
                                <div class="modal-body">
                                    <p id="load_uyari"> </p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Kapat</button>
                                    <form action="" method="post" id="veriyi_sil">
                                        <button type="submit" class="btn btn-outline">Sil</button>
                                    </form>
                                </div>
                            </div>
                            <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                    </div>
                    <!-- /.modal -->
                </div>
                <!-- Kullanıcı silme modülü bitiş -->
                
            </div>
        </section>
        <!-------------------------------------İçerik sayfası içerik kodları burda bitecek------------------------------>
    </div>
    <?php include($dir."/$conf->admin_path/include/footer.php");?>
    <?php include($dir."/$conf->admin_path/include/alt_sidebar.php");?>
    <?php include($dir."/$conf->admin_path/include/js.php");?>
</body>
</html>
