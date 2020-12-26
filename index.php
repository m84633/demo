<?php 
require_once("libs/Smarty.class.php");
$smarty = new Smarty();
// $smarty -> assign('data',file_get_contents("http://localhost/demo/index.php"));
$smarty -> assign('data',file_get_contents("http://demo.airkim.tw/demo/index.php"));
$smarty -> display('index.tpl');
?>