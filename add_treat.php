<?php
	include("connection/cnn.php");
	if($_POST["name"]){
		$data = array(':name'=>$_POST['name'],':sex'=>$_POST['sex'],':phone'=>$_POST['phone'],':address'=>$_POST['address'],':email'=>$_POST['email']);
		$sql_query = "INSERT INTO user (name,sex,phone,address,email) values (:name,:sex,:phone,:address,:email)";
		$stmt = $link -> prepare($sql_query);
		$stmt ->execute($data);
		$link = null;
		$response = array("status" => "ok");
		echo json_encode($response);
	}else{
		return false;
	}
 ?>