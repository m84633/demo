<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
</head>
<body>
	<table style="margin-left: 600px;margin-top: 50px;text-align: center" border="1">
		<tr>
			<td>姓名:</td>
			<td><input id="name" type="text"></td>
		</tr>
		<tr>
			<td>性別:</td>
			<td>
				<select  style="float: left;" id="sex">
					<option value=''>請選擇</option>
					<option value="1">男</option>
					<option value="0">女</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>電話:</td>
			<td><input id="phone" type="text"></td>
		</tr>
		<tr>
			<td>地址:</td>
			<td><input id="address" type="text"></td>
		</tr>
		<tr>
			<td>E-mail</td>
			<td><input id="email" type="text"></td>
		</tr>
		<tr>
			<td><button disabled='1' id="submit">提交</button></td>
			<td></td>
		</tr>
	</table>
	<span style="color: red;margin-left: 600px" id="alert"></span>
	<script>
		var name = 0
		var sex = 0
		var phone = 0
		var address = 0
		var email = 0
		//validate
		function validate(){
			if(phone == 1 && sex ==1 && phone == 1 && address == 1 && email == 1){
				$("#submit").prop('disabled',false)
			}
		}
		//姓名
		$("#name").on("change",function(){
			if($("#name").val().trim() != ''){
				$("#alert").text('')
				name = 1
				validate()
			}else{
				$("#alert").text('請輸入姓名')
				name = 0
				$("#submit").prop('disabled',true)
			}
		})
		//地址
		$("#address").on("change",function(){
			if($("#address").val().trim() != ''){
				address = 1
				$("#alert").text('')
				validate()
			}else{
				$("#alert").text('請輸入地址')
				address = 0
				$("#submit").prop('disabled',true)
			}
		})
		//性別
		$("#sex").on("change",function(){
			if($("#sex").val().trim() != ''){
				sex = 1
				$("#alert").text('')
				validate()
			}else{
				$("#alert").text('請選擇性別')
				sex = 0
				$("#submit").prop('disabled',true)
			}
		})
		//電話
		$("#phone").on("change",function(){
			var reg = /^09[0-9]{2}-[0-9]{6}$/
			var result = reg.test($("#phone").val())
			if(!result){
				$("#alert").text('手機格式錯誤:09XX-XXXXXX')
				phone = 0
				$("#submit").prop('disabled',true)
			}else{
				$("#alert").text('')
				phone = 1
				validate()
			}
		})
		//E-mail
		$("#email").on("change",function(){
			var reg = /^\w+((-\w+)|(\.\w+))*\@[A-Za-z0-9]+((\.|-)[A-Za-z0-9]+)*\.[A-Za-z]+$/
			var result = reg.test($("#email").val())
			if(!result){
				$("#alert").text('E-mail格式錯誤')
				email = 0
				$("#submit").prop('disabled',true)
			}else{
				$("#alert").text('')
				email = 1
				validate()
			}
		})
		//傳送ajax
		$("#submit").on("click",function(){
			var name = $("#name").val()
			var address = $("#address").val()
			var sex = $("#sex").val()
			var phone = $("#phone").val()
			var email = $("#email").val()
			$.ajax({
				url : "add_treat.php",
				data : "&name="+name+"&address="+address+"&sex="+sex+"&phone="+phone+"&email="+email,
				type : "POST",
				dataType : 'JSON',
				error : function(error){
					console.log(error)
				},
				success : function(response){
					console.log(response)
					if(response['status'] == "ok"){
						location.href = 'http://demo.airkim.tw/index.php';
					}

				}
			})
		})
	</script>
</body>
</html>