<?php
$array_url = explode("/", $_SERVER['SCRIPT_NAME']);

array_pop($array_url);

$array_url = implode("/", $array_url);

define('ROOT_URL', $array_url);

function page_number($dem, $so)
{
    $so_chia = $dem / 3;
    require_once("./mvc/view/block/page_number.php");
}
?>