<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
</head>
<body>
	{$data}
	<span style="color: red;margin-left: 600px" id="alert"></span>
	<script>
		var name = 1
		var sex = 1
		var phone = 1
		var address = 1
		var email = 1
		//validate
		function validate(){
			if(phone == 1 && sex ==1 && phone == 1 && address == 1 && email == 1){
				$("#submit").attr('disabled',false)
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
				$("#submit").attr('disabled',true)
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
				$("#submit").attr('disabled',true)
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
				$("#submit").attr('disabled',true)
			}
		})
		//電話
		$("#phone").on("change",function(){
			var reg = /^09[0-9]{2}-[0-9]{6}/
			var result = reg.test($("#phone").val())
			if(!result){
				$("#alert").text('手機格式錯誤:09XX-XXXXXX')
				phone = 0
				$("#submit").attr('disabled',true)
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
				$("#submit").attr('disabled',true)
			}else{
				$("#alert").text('')
				email = 1
				validate()
			}
		})
	</script>
</body>
</html>