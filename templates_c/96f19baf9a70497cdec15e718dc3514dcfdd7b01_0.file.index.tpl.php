<?php
/* Smarty version 3.1.36, created on 2020-12-26 00:38:07
  from 'D:\xampp\htdocs\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5fe6156f66fc86_72955828',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '96f19baf9a70497cdec15e718dc3514dcfdd7b01' => 
    array (
      0 => 'D:\\xampp\\htdocs\\templates\\index.tpl',
      1 => 1608914273,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fe6156f66fc86_72955828 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
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
			<?php echo $_smarty_tpl->tpl_vars['data']->value;?>

			<tr>
				<td colspan="8" ><button style="float: right;margin: 5px"><a style="text-decoration: none" href="add.php">新增</a></button></td>
			</tr>
		</tbody>
	</table>
	<?php echo '<script'; ?>
>
		function del(){
			if(confirm(msg)){
				return true
			}else{
				return false
			}
		}
		var msg = "確定要刪除資料?";
	<?php echo '</script'; ?>
>
</body>
</html><?php }
}
