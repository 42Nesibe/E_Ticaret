<?php include(dirname(dirname(__FILE__))."/genel/surukle.php");?>
<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper" xmlns="http://www.w3.org/1999/html">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Ana sayfa
            <small>Kontrol paneli</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="/<?php echo $conf->admin_path;?>"><i class="fa fa-dashboard"></i> Ana sayfa</a></li>
            <li class="active">Kontrol paneli</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row">
        


        </div>
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
            <!-- Left col -->
            <section class="col-lg-7 connectedSortable">



                <!-- TO DO List -->
                <div class="box box-primary">
                    <div class="box-header">
                        <i class="ion ion-camera"></i>

                        <h3 class="box-title">Slider Ekleme ve Düzenleme</h3>

                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <ul class="todo-list" id="arrangableNodes">
                            <input type="hidden" value="slider" id="deger">
                            <?php
                            $veri = $uye->veri_al("slider order by siralama asc");
                            foreach ($veri as $yaz):
                                $urun = $uye->tekli_cek("urunler","urunler_iD",$yaz["urun_id"]);
                            ?>
                            <li id="<?php echo $yaz["slider_iD"];?>">
                                <!-- drag handle -->
                                <span class="handle">
                                    <i class="fa fa-ellipsis-v"></i>
                                    <i class="fa fa-ellipsis-v"></i>
                                </span>
                                <!-- todo text -->
                                <span class="text"><?php echo $urun["baslik"];?></span>
                                <!-- Emphasis label -->
                                <small class="label label-danger">
                                    <i class="fa fa-clock-o"></i> <?php echo $uye->tarih($yaz["tarih"]);?>
                                </small>
                                <!-- General tools such as edit or delete-->
                                <div class="tools">
                                    <i class="fa fa-edit" onclick="slider_duzenle('<?php echo $conf->admin_path ?>','slider','<?php echo $yaz["slider_iD"];?>')"></i>
                                    <i class="fa fa-trash-o" onclick="Sil('<?php echo $conf->admin_path ?>','slider',<?php echo $yaz["slider_iD"];?>);"></i>
                                </div>
                            </li>
                            <?php endforeach;?>
                        </ul>

                    </div>
                    <!-- /.box-body -->

                    <div class="box-footer clearfix no-border col-md-6">
                        <button type="button" class="btn btn-success pull-left" onclick="saveArrangableNodes();">
                            <i class="fa fa-list"></i> Sıralamayı Kaydet
                        </button>
                    </div>

                    <div class="box-footer clearfix no-border col-md-6">
                        <button type="button" class="btn btn-danger pull-right" onclick="return false" data-toggle="modal" data-target="#slider">
                            <i class="fa fa-plus"></i> Yeni Slider Ekle
                        </button>
                    </div>
                </div>
                <!-- /.box -->


            </section>
            <!-- /.Left col -->
            <!-- right col (We are only adding the ID to make the widgets sortable)-->
            <section class="col-lg-5 connectedSortable">






            </section>
            <!-- right col -->
        </div>
        <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<!-- Modal -->
<div class="modal fade" id="slider" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Yeni Slider Ekleme</h4>
            </div>
            <div class="modal-body">
                <form class="form-group" id="kaydet" method="post" action="" enctype="multipart/form-data">
                    <label>Slider eklemek istediğiniz kategoriyi seçin :</label>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-info"></i></span>
                        <select name="kat_id" id="kategori_id" class="form-control" required>
                            <option value="">Seçiniz</option>
                            <?php
                            $veri = $uye->veri_al("kategori");
                            foreach ($veri as $yaz):
                                ?>
                                <option value="<?php echo $yaz["kategori_iD"];?>"><?php echo $yaz["baslik"];?></option>
                            <?php endforeach;?>
                        </select>
                    </div>
                    <div id="slider_load">
                        <label>Slider eklemek istediğiniz kitabı seçin :</label>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-info"></i></span>
                            <select name="urun_id" id="" class="form-control" required>
                                <option value="">Seçiniz</option>
                            </select>
                        </div>
                    </div>
                    <label>Durum :</label>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-info"></i></span>
                        <select name="durum" id="" class="form-control" required>
                            <option value="">Seçiniz</option>
                            <option value="1">Aktif</option>
                            <option value="0">Pasif</option>
                        </select>
                    </div>
                    <br>
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%"></div>
                    </div>

                    <div id="status"></div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Kapat</button>
                <button type="submit"  onclick="Kaydet('<?php echo $conf->admin_path ?>','slider',null);" class="btn btn-primary">Kaydet</button>
            </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal Slider Düzenle -->
<div class="modal fade" id="slider_duzenle" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Slider Düzenleme</h4>
            </div>
            <div class="modal-body">
                <form class="form-group" id="veriyi_guncelle" method="post" action="" enctype="multipart/form-data">
                    <div id="slider_duzenleme">

                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Kapat</button>
                <button type="submit"  onclick="veri_guncelle('<?php echo $conf->admin_path ?>','slider',null);" class="btn btn-primary">Kaydet</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Slider silme modülü-->
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
<script src="/<?php echo $conf->admin_path;?>/ckeditor/ckeditor.js"></script>
<script>

    CKEDITOR.replace( 'icerik' );

</script>