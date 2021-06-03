<?php 
function __autoload($classname)
{
    $include = dirname(__FILE__)."/{$classname}.php";
    if (file_exists($include))
    {
        include_once($include);
    }
    else
    {
		return array("durum" => false, "msg" => $classname.' sınıfı yüklenemedi.'."\n <br />".$include);
        exit();
    }
}
?>