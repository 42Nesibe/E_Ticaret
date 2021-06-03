<?php
include_once "config.php";
$data = $_POST;
function users($data)

	{

        $db = new uyelik();

		try

		{

		    $veri = $db->tekli_cek("users","k_adi",$data["k_adi"]);


			if(!is_array($veri)) {

				unset($_POST["sifre_tekrar"]);
				$_POST["ip"] = $db->GetIP();
				$_POST["sifre"] = md5($_POST["sifre"]);
				$sorgu = $db->Kaydet("users",$_POST);


				$cikti = array("durum"=>true, "msg" => ('Kayıt Başarılı...'));


			} else {

				$cikti = array("durum"=>false, "msg" => ('Bu kullanıcı daha önce oluşturulmuş...'));

			}

			return $cikti;



		} catch(PDOException $ex)

		{

			return array("durum" => false, "msg" => $ex->getMessage());

		}

	}


	$cikti = users($data);
	echo json_encode($cikti);

?>
