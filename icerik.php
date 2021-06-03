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
<?php include_once "slider.php";?>
<?php include_once "vitrin.php";?>
<?php include_once "kampanya.php";?>
<?php include_once "listeleme.php";?>
<?php include_once "e-bulten.php";?>
<?php include_once "footer.php";?>
<?php include_once "urun-modal.php";?>


<?php include_once "js.php";?>
<script>
    function onizleme(id) {
        $('#product-view-one-ac').modal('show');
        $.ajax({

            url: '/modal-cek.php?id='+id,

            type: 'GET',

            success: function (e) {

                $('#modala-gonder').html(e);

            }

        });
    }
</script>
</body>
</html>