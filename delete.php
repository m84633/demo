<?php
	include("connection/cnn.php");
	if($_GET['id']){
		$data = array(":id"=>$_GET['id']);
		$sql_query = "UPDATE user SET active='0' WHERE id=:id";
		$stmt = $link -> prepare($sql_query);
		$stmt -> execute($data);
		// header("Location:http://localhost/index.php");
		header("Location:http://demo.airkim.tw/index.php");
	}
 ?>