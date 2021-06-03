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

                Kategori

                <small>Kontrol paneli</small>

            </h1>

            <ol class="breadcrumb">

                <li><a href="/<?php echo $conf->admin_path;?>/index.php"><i class="fa fa-dashboard"></i> Anasayfa</a></li>

                <li class="active">Kategori kontrol paneli</li>

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

                            <h3 class="box-title">Kategori kontrol paneli</h3>

                        </div>

                        <!-------------------kullanıcı kaydetme ve load dosyası üzerinden düzenleme divi--------------->

                        <div class="box-body" id="duzenle_load">

                            <form class="form-group" id="kaydet" method="post" action="" enctype="multipart/form-data">



                                <label>Başlık :</label>

                                <div class="input-group">

                                    <span class="input-group-addon"><i class="fa fa-user"></i></span>

                                    <input type="text" name="baslik" class="form-control" placeholder="Başlık">

                                </div>

                                <label>Durum :</label>

                                <div class="input-group">

                                    <span class="input-group-addon"><i class="fa fa-check"></i></span>
                                    <select name="durum" id="" class="form-control" required>
                                        <option value="">Seçiniz</option>
                                        <option value="1">Aktif</option>
                                        <option value="0">Pasif</option>
                                    </select>
                                </div>


                                <br>

                                <button class="btn  btn-primary pull-right" onclick="Kaydet('<?php echo $conf->admin_path ?>','kategori',null);" type="submit">Kaydet</button>

                            </form>



                        </div>

                    </div>

                    <!-- Kullanıcı denetimi bitiş -->

                </div>

                <div class="col-md-6">

                    <!-- Kullanıcı denetimi -->

                    <div class="box box-info center">



                        <div class="box-header">

                            <h3 class="box-title">Kategori İşlem paneli</h3>

                        </div>

                        <!-------------------kullanıcı kaydetme ve load dosyası üzerinden düzenleme divi--------------->

                        <div class="box-body">

                            <table class="table">

                                <thead class="alert alert-success">

                                <tr>

                                    <td class="col-md-8">Başlık</td>

                                    <td class="col-md-4">İşlem</td>

                                </tr>

                                </thead>

                                <tbody>

                                <?php

                                $veri = $uye->veri_al("kategori");

                                foreach ($veri as $yaz):

                                    ?>

                                    <tr>

                                        <td><?php echo $yaz["baslik"];?></td>

                                        <td>

                                            <button onclick="Duzenle('<?php echo $conf->admin_path ?>','kategori',<?php echo $yaz["kategori_iD"];?>);" class="btn btn-success">Düzenle</button>

                                            <button onclick="Sil('<?php echo $conf->admin_path ?>','kategori',<?php echo $yaz["kategori_iD"];?>);" class="btn btn-danger">Sil</button>

                                        </td>

                                    </tr>

                                <?php endforeach;;?>

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

    <script type="text/javascript" src="/<?php echo $conf->admin_path ?>/ckeditor/ckeditor.js"></script>


</body>

</html>

