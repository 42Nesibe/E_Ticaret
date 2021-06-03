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
    <style>
        .td{
            font-size: 12px;
        }
        .content-wrapper{
            min-height: 680px !important;
        }
    </style>
    <?php include($dir."/$conf->admin_path/include/sidebar.php");?>


    <!-------------------------------------İçerik sayfası kodları buraya gelecek----------------------------------------->
    <div class="content-wrapper">
        <!-------------------------------------İçerik sayfası Üst kodları buraya gelecek--------------------------------->
        <section class="content-header">
            <h1>
                Loglar
                <small>Yapılan İşlemler paneli (Log Tutma)</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="/<?php echo $conf->admin_path;?>/index.php"><i class="fa fa-dashboard"></i> Anasayfa</a></li>
                <li class="active">Loglar</li>
            </ol>
        </section>
        <!-------------------------------------İçerik sayfası Üst kodları burda bitecek---------------------------------->
        <!-------------------------------------İçerik sayfası içerik kodları buraya gelecek------------------------------>


        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-xs-12">

                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">Tutulan log kayıtları</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <table id="example_log" class="table table-hover table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>id</th>
                                    <th>Yapılan İşlem</th>
                                    <th>İşlemi Yapan</th>
                                    <th>Tarih</th>
                                    <th>İp Numarası</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                $uye = new uyelik();
                                $veri = $uye->veri_al("log");
                                foreach ($veri as $veri_yaz):
                                ?>
                                <tr>
                                    <td class="td col-sm-1"><?php echo $veri_yaz["log_iD"];?></td>
                                    <td class="td col-sm-5"><?php echo $veri_yaz["islem"];?></td>
                                    <td class="td col-sm-3"><?php echo $veri_yaz["islemi_yapan"];?></td>
                                    <td class="td col-sm-2"><?php echo $veri_yaz["log.tarih"];?></td>
                                    <td class="td col-sm-2"><?php echo $veri_yaz["islem_yapilan_ip"];?></td>
                                </tr>
                                <?php endforeach;?>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </section>
        <!-- /.content -->
        <!-------------------------------------İçerik sayfası içerik kodları burda bitecek------------------------------>
    </div>
    <?php include(dirname(dirname(__FILE__))."/include/footer.php");?>
    <?php include(dirname(dirname(__FILE__))."/include/alt_sidebar.php");?>
    <!-- jQuery 2.2.3 -->
    <script src="/<?php echo $conf->admin_path;?>/plugins/jQuery/jquery-2.2.3.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button);
    </script>
    <!-- Bootstrap 3.3.6 -->
    <script src="/<?php echo $conf->admin_path;?>/bootstrap/js/bootstrap.min.js"></script>
    <!-- DataTables -->
    <script src="/<?php echo $conf->admin_path;?>/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="/<?php echo $conf->admin_path;?>/plugins/datatables/dataTables.bootstrap.min.js"></script>
    <!-- SlimScroll -->
    <script src="/<?php echo $conf->admin_path;?>/plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="/<?php echo $conf->admin_path;?>/plugins/fastclick/fastclick.js"></script>
    <!-- AdminLTE App -->
    <script src="/<?php echo $conf->admin_path;?>/dist/js/app.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="/<?php echo $conf->admin_path;?>/dist/js/demo.js"></script>
    <!-- page script -->
    <script>
        $(function () {
            $('#example_log').DataTable({
                "order": [[ 0, "desc" ]],
                "paging": true,
                "lengthChange": true,
                "searching": true,
                "ordering": true,
                "info": true,
                "autoWidth": true,
                "language": {
                    "sDecimal":        ",",
                    "sEmptyTable":     "Tabloda herhangi bir veri mevcut değil",
                    "sInfo":           "_TOTAL_ kayıttan _START_ - _END_ arasındaki kayıtlar gösteriliyor",
                    "sInfoEmpty":      "Kayıt yok",
                    "sInfoFiltered":   "(_MAX_ kayıt içerisinden bulunan)",
                    "sInfoPostFix":    "",
                    "sInfoThousands":  ".",
                    "sLengthMenu":     "Sayfada _MENU_ kayıt göster",
                    "sLoadingRecords": "Yükleniyor...",
                    "sProcessing":     "İşleniyor...",
                    "sSearch":         "Ara:",
                    "sZeroRecords":    "Eşleşen kayıt bulunamadı",
                    "oPaginate": {
                        "sFirst":    "İlk",
                        "sLast":     "Son",
                        "sNext":     "Sonraki",
                        "sPrevious": "Önceki"
                    },
                    "oAria": {
                        "sSortAscending":  ": artan sütun sıralamasını aktifleştir",
                        "sSortDescending": ": azalan sütun soralamasını aktifleştir"
                    }
                }
            });
        });
    </script>
</body>
</html>
