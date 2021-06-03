<?php

session_start();

include_once 'config.php';

$uye = new uyelik();

$array = $_POST["urun_id"]; // burası düşen urunlerin idsi

foreach ($array as $key => $val){ // burası satışa geçilince sepeti boşaltıyo
    setcookie('urun['.$val.']',$val, time() - 3600);
}



function kayit($veri)

{
    $uye = new uyelik();
    $_POST = $veri;
    try

    {

        foreach ($_POST["urun_id"] as $key => $val):
            $veri = array("urun_id"=>$val,"kullanici_id"=>$_POST["users_id"]);
            $sorgu = $uye->Kaydet("satilanlar",$veri);
        endforeach;

        $ozet_cek = $uye->tekli_cek("ozet","ozet_iD",$_POST["users_id"]);

        if (is_array($ozet_cek)){
            $toplam_harcama = $ozet_cek["toplam_harcama"] + $_POST["toplam_harcama"];
            $toplam_indirim = $ozet_cek["toplam_indirim"] + $_POST["toplam_indirim"];
            $ozet = array("toplam_harcama"=>$toplam_harcama,"toplam_indirim"=>$toplam_indirim,"users_id"=>$_POST["users_id"]);
            $uye->guncelle("ozet",$ozet,"users_id",$_POST["users_id"]);
        }else{
            $toplam_harcama = $ozet_cek["toplam_harcama"] + $_POST["toplam_harcama"];
            $toplam_indirim = $ozet_cek["toplam_indirim"] + $_POST["toplam_indirim"];
            $ozet = array("toplam_harcama"=>$toplam_harcama,"toplam_indirim"=>$toplam_indirim,"users_id"=>$_POST["users_id"]);
            $uye->Kaydet("ozet",$ozet);
        }

        if(is_array($sorgu)) {


            $cikti = array("durum"=>true, "msg" => ('Satış gerçekleşti...'));


        } else {

            $cikti = array("durum"=>false, "msg" => ('Satış yapılırken hata oluştu'));

        }

        return $cikti;



    } catch(PDOException $ex)

    {

        return array("durum" => false, "msg" => $ex->getMessage());

    }

}

$cikti = kayit($_POST);

echo json_encode($cikti);
?>