<?php
include("connection/cnn.php");
	if($_POST['id']){
		$data = array(':name'=>$_POST['name'],':sex'=>$_POST['sex'],':phone'=>$_POST['phone'],':address'=>$_POST['address'],':email'=>$_POST['email'] );
		$sql_query = "UPDATE user SET name=:name,sex =:sex,phone=:phone,address=:address,email=:email WHERE id={$_POST['id']}";
		$stmt = $link -> prepare($sql_query);
		$stmt -> execute($data);
		header("Location:http://demo.airkim.tw/index.php");
	}
 ?>