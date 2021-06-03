<?php
include_once 'Login/Control.php';

$dizin = dirname(dirname(__FILE__)).'/'.$_GET["Yol"].'/'.$_FILES["Dosya"]["name"];



	if(move_uploaded_file($_FILES['Dosya']['tmp_name'], $dizin))
	{
        $cikti = array("success"=> true);
	}
	else
	{
		$cikti = array("success"=> false);
	}

echo json_encode($cikti);



?>