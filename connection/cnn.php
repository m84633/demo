<?php 
header("Content-Type:text/html ; charset=utf-8");
$hostname = "localhost";
$database = "demo";
$username = "root";
$password = "";
$charset = "utf8";
$dsn = "mysql:host=$hostname;dbname=$database;charset=$charset";
$link = new PDO($dsn, $username, $password);
$link->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$link->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
$link->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
date_default_timezone_set("Asia/Taipei");
?>