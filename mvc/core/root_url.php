<?php
// function ROOT_URL()
// {
//     $array_url = explode("/", $_SERVER['SCRIPT_NAME']);
//     array_pop($array_url);
//     $array_url = implode("/", $array_url);
//     echo $array_url;
// }

$array_url = explode("/", $_SERVER['SCRIPT_NAME']);
array_pop($array_url);
$array_url = implode("/", $array_url);
define('ROOT_URL', $array_url);
?>