<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

	<head>
		<meta charset="UTF-8">
		<title></title>
		<!--头部-->
<meta name="author" content="昊广">
<meta name="Keywords" content="后台管理系统">
<meta name="description" content="后台管理系统">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<!--<link href="logo.ico" rel="shortcut icon" type="image/x-icon">-->
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="http://cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->	
    <link rel="stylesheet" href="/haoguang/Public/admin/css/style.css" />
    <link rel="stylesheet" href="/haoguang/Public/admin/css/login.css" />
</head>

	<body>
		<div class="admin-login">
			<h1 class="text-center title font-normal">昊广后台管理系统</h1>
			<ul class="list">
				<form action="<?php echo U('Admin/Index/login');?>" method="post" class="form">
					<li class="font-red tip"></li><!--提示-->
					<li>
						<input type="text" class="user" required maxlength="" placeholder="用户名" />
					<li>
						<input type="password" class="pw" required maxlength="" placeholder="密码" />
					</li>
					<li>
						<button type="button" class="login-btn">登录</button>
					</li>
					
				</form>
			</ul>
		</div>	
<script src="/haoguang/Public/admin/lib/jquery.js"></script>
<script src="/haoguang/Public/admin/js/common.js"></script>
<script>
			$(function(){
				//回车
				$(".admin-login input").on("keydown",function(e){
					if(e.keyCode == 13){
						//触发提交
						$(".login-btn").trigger("click");
					}
				})
				//提交
				$(".login-btn").on("click",function(e){
					var user = $(".user").val();
					var pw =  $(".pw").val();
					var $tip = $(".tip");
					if(user&&pw){
						//提交
						$('.form').submit();
						tipShow();//等待中 提示
						
					}else if(!user){
						$tip.text("用户名不能为空！")
					}else if(!pw){
						$tip.text("密码不能为空！")
					}
					
				})
				
			})
		</script>
</body>

</html>