<?php
	include("../connection/cnn.php");
	$sql_query = "SELECT * FROM user WHERE id = {$_GET['id']}";
	$stmt = $link -> prepare($sql_query);
	$stmt -> execute();
	$result = $stmt -> fetch();
?>
	<form action="update_treat.php" method="POST">
		<table style="margin-left: 600px;margin-top: 50px;text-align: center" border="1">
			<tr>
				<td>姓名:</td>
				<td><input name="name" id="name" type="text" value="<?php echo $result['name'] ?>"></td>
			</tr>
			<tr>
				<td>性別:</td>
				<td>
					<select id="sex"  style="float: left;" name="sex" >
						<option value=" ">請選擇</option>
						<option value="1" <?php
							if($result['sex'] == 1){
								echo "selected";
							}
						 ?>>男</option>
						<option value="0" <?php
							if($result['sex'] == 0){
								echo "selected";
							}
						 ?>>女</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>電話:</td>
				<td><input id="phone" name="phone" type="text" value=<?php echo $result['phone'] ?> ></td>
			</tr>
			<tr>
				<td>地址:</td>
				<td><input id="address" name="address" type="text" value=<?php echo $result['address'];  ?> ></td>
			</tr>
			<tr>
				<td>E-mail</td>
				<td><input id="email" name="email" type="text" value=<?php echo $result['email'] ?> ></td>
			</tr>
			<input name="id" style="display: none" type="text" value=<?php echo $result['id'] ?> readonly >
			<tr>
				<td><button  id="submit">提交</button></td>
				<td></td>
			</tr>
		</table>	
	</form>