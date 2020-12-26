<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<table border="1" style="margin-left: 500px;margin-top: 50px;text-align: center">
		<thead>
			<tr>
				<td>編號</td>
				<td>姓名</td>
				<td>性別</td>
				<td>電話</td>
				<td>地址</td>
				<td>E-mail</td>
				<td>修改</td>
				<td>刪除</td>
			</tr>
		</thead>
		<tbody>
			{$data}
			<tr>
				<td colspan="8" ><button style="float: right;margin: 5px"><a style="text-decoration: none" href="add.php">新增</a></button></td>
			</tr>
		</tbody>
	</table>
	<script>
		function del(){
			if(confirm(msg)){
				return true
			}else{
				return false
			}
		}
		var msg = "確定要刪除資料?";
	</script>
</body>
</html>