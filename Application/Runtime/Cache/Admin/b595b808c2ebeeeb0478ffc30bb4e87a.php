<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8" />
		<title>后台管理系统</title>
		<!--头部-->
<meta name="author" content="大传">
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
</head>

	<body class="page">
		<!--content-->
		<div class="admin-con">
			<!--header-->
			<header class="admin-head">
				<div class="admin-status">
					<a href="<?php echo U('Admin/Index/change');?>" class="pull-right font-white">修改密码</a>
					欢迎你！<span class="font-white"><?php echo ($admin); ?> | [超级管理员]</span>|
					<a class="font-white" href="<?php echo U('Admin/Index/logout');?>">[退出]</a>
					<a href="<?php echo U('Home/Index/index');?>" class="font-white">浏览站点</a>
				</div>
				<nav class="admin-nav">
					<!--
                    	作者：423822728@qq.com
                    	时间：2017-02-20
                    	描述：nav a 
                    -->
					<a class="active" href="#side01">昊广官网</a>
					<a  href="#side02">二级页面</a>
					<!--
                    	作者：423822728@qq.com
                    	时间：2017-02-20
                    	描述：nav a end
                    -->
				</nav>
			</header>
			<div class="admin-side">
				<a class="admin-side-btn"></a>
				<ul class="admin-side-ul active" id="side01">
					<!--side a -->
					<li class="admin-side-item "><a href="<?php echo U('Admin/Index/header');?>">
						首页
					</a></li>
					<li class="admin-side-item "><a href="<?php echo U('Admin/Index/case');?>">
						产品案例
					</a></li>
					<li class="admin-side-item "><a href="<?php echo U('Admin/Index/introduce');?>">
						公司介绍
					</a></li>
					<li class="admin-side-item "><a href="<?php echo U('Admin/Index/cooper');?>">
						合作伙伴
					</a></li>
					<li class="admin-side-item "><a href="<?php echo U('Admin/Index/api');?>">
						产品接口
					</a></li>
					<li class="admin-side-item "><a href="<?php echo U('Admin/Index/call');?>">
						联系我们
					</a></li>
					<!-- side a end-->
				</ul>
				<ul class="admin-side-ul" id="side02">
					<!--side a -->
					<li class="admin-side-item "><a href="https://www.baidu.com/">
						点击打开页面
					</a></li>
					<li class="admin-side-item "><a href="a">
						点击打开页面
					</a></li>
					<li class="admin-side-item "><a href="a">
						点击打开页面
					</a></li>
					<!-- side a end-->
				</ul>
			</div>
			<!--content main-->
			<div class="admin-page">
				
				<iframe ></iframe>
			
			</div>
		</div>
	
<script src="/haoguang/Public/admin/lib/jquery.js"></script>
<script src="/haoguang/Public/admin/js/common.js"></script>
</body>

</html>