<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="/public/reset.css"/>
	<link rel="stylesheet" type="text/css" href="/public/common.css"/>
	<style type="text/css">
	.top-body{
		background:url(/public/images/top_bg.gif);
	} 
	.top-body .subject{
		font-size:36px;
		line-height: 42px;
		color: #fff;	
	}
	.top-body span{
		float:right;
		font-size:14px;
	}
	.top-body b{
		margin-right:10px;
	}
	.top-body a{
		margin-left:10px;
		color:#fff;
	}
	</style>
</head>
<body class="top-body">
	<div class="wrap">
		<h1 class="subject">榆次城区分局CMS系统V1.0<span><b>下午好，<?php echo ($_SESSION['user']['username']); ?></b><!-- |<a href="#" onclick="logout()" >退出登录</a> --></span></h1>
	</div>
	<script>
			//退出登录
			function logout(){
				if(confirm("是否退出后台")){
					window.location = '/admin.php/Index/logout';
				}
			}
		</script>
</body>
</html>