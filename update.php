<?php 
require_once("libs/Smarty.class.php");
$smarty = new Smarty();
// $url = "http://localhost/demo/update.php?id=".$_GET['id'];
$url = "http://demo.airkim.tw/demo/update.php?id=".$_GET['id'];
$smarty -> assign('data',file_get_contents($url));
$smarty -> display('update.tpl');
?>