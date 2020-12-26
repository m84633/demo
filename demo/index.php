<?php 
include("../connection/cnn.php");
$sql_query = "SELECT * FROM user WHERE active='1'";
$stmt = $link->prepare($sql_query);
	if($stmt->execute()){
		while($result = $stmt -> fetch()){ ?>
			<tr>
				<td><?php echo $result['id']  ?></td>
				<td><?php echo $result['name']  ?></td>
				<td><?php  
					if($result['sex'] == '1'){
						echo "男";
					}else{
						echo "女";									
					}
				?></td>
				<td><?php echo $result['phone']  ?></td>
				<td><?php echo $result['address']  ?></td>
				<td><?php echo $result['email']  ?></td>
				<td><a href="update.php?id=<?php echo $result['id'] ?>"><button>修改</button></a></td>
				<td><a onclick="return del()" href="delete.php?id=<?php echo $result['id'] ?>"><button>刪除</button></a></td>
			</tr>
	<?php	}
} ?>