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
        <div id="durum"></div>
        <section class="content-header">

            <h1>

                Çok satılanlar

                <small>Kontrol paneli</small>

            </h1>

            <ol class="breadcrumb">

                <li><a href="/<?php echo $conf->admin_path;?>/index.php"><i class="fa fa-dashboard"></i> Anasayfa</a></li>

                <li class="active">Çok satılanlar kontrol paneli</li>

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

                            <h3 class="box-title">Çok satılanlar İşlem paneli</h3>

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

                                $veri = $uye->veri_al("urunler");

                                foreach ($veri as $yaz):

                                    ?>

                                    <tr>

                                        <td><?php echo $yaz["baslik"];?></td>

                                        <td>
                                            <?php
                                            $dur = $uye->veri_al("cok_satilan where urun_id={$yaz["urunler_iD"]}");


                                                if($dur){
                                                    ?>
                                                    <button onclick="Silme('<?php echo $conf->admin_path ?>','cok_satilan',<?php echo $yaz["urunler_iD"];?>);" class="btn btn-danger">Sil</button>
                                            <?php
                                                }else{
                                                    ?>
                                                    <button onclick="Ekle('<?php echo $conf->admin_path ?>','cok_satilan',<?php echo $yaz["urunler_iD"];?>);" class="btn btn-success">Ekle</button>
                                            <?php
                                                }

                                            ?>


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

