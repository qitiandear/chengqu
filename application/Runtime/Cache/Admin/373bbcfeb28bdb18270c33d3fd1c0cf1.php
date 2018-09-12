<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="/public/css/reset.css"/>
	<link rel="stylesheet" type="text/css" href="/public/css/common.css"/>
	<style type="text/css">
		html,body{
			height: 100%; 
		}
		body{
			
			background:#0B4E9D url(/public/images/4bf26d8d5a34e095b4b2b5005b943e3265e1d4d0.png)  no-repeat left bottom;
			border-right: 3px solid #055992;

		}
		#nav-tree dl {
			margin-bottom:5px;
			padding-bottom: 5px;
			border-bottom:1px dotted #fff;
		}
		#nav-tree dt {
			position: relative;
			padding-left: 50px;
			margin-bottom: 2px;
			line-height: 22px;
			height: 22px;			
			overflow: hidden;
			cursor: pointer;
			color: #fff;
			font-weight: bold;
		}
		#nav-tree dd {			
			padding-left: 50px;
			line-height: 22px;
			
		}
		#nav-tree dd a{
			color: #fff;			
		}
		span.icon {
			position: absolute;
			left: 20px;
			top: 0;
			width: 28px;
			height: 22px;
			overflow: hidden;
		}
		span.user {
			background-position: 0 0;
		}
		span.role {
			background-position: 0 -24px;
		}
		span.catelog {
			background-position: 0 -48px;
		}
		span.article {
			background-position: 0 -72px;
		}
		span.member {
			background-position: 0 -96px;
		}
		span.ad {
			background-position: 0 -120px;
		}
		span.friendlink {
			background-position: 0 -144px;
		}
		span.database {
			background-position: 0 -168px;
		}
		span.system {
			background-position: 0 -192px;
		}
	</style>
	
</head>
<body>
	<div class="wrap">
		<div id="nav-tree">
			<dl>
				<dt><span class="icon article"></span>文章管理</dt>
				<dd><a href="/admin.php/AddNews/addnews" target="mainFrame">发布文章</a></dd>
				<dd><a href="/admin.php/AddNews/listnews" target="mainFrame">文章列表</a></dd>

				<dd><a href="/admin.php/AddNews/listrecycle" target="mainFrame">回收站</a></dd>				
			</dl>
			<dl>
				<dt><span class="icon article"></span>扫黑除恶</dt>
				<dd><a href="/admin.php/Evil/addevil" target="mainFrame">发布扫黑</a></dd>
				<dd><a href="/admin.php/Evil/listevil" target="mainFrame">扫黑列表</a></dd>

				                                                                                                                                                                                                                                                                                                                                                                                                     				
			</dl>
			<dl>
				<dt><span class="icon user"></span>图片展示</dt>
				<dd><a href="/admin.php/Rotation/addRotation" target="mainFrame">添加图片</a></dd>
				<dd><a href="/admin.php/Rotation/listRota" target="mainFrame">图片展示</a></dd>
				<dd><a href="/admin.php/Rotation/zhuanxiang" target="mainFrame">专项活动</a></dd>

			</dl>	
			<dl>
				<dt><span class="icon user"></span>用户管理</dt>
				<dd><a href="/admin.php/User/add" target="mainFrame">用户添加</a></dd>
				<dd><a href="/admin.php/User/lister" target="mainFrame">用户列表</a></dd>
				<dd><a href="/admin.php/User/reseter" target="mainFrame">密码重置</a></dd>
				<!-- <dd><a href="/admin.php/User/quanxian" target="mainFrame">添加管理</a></dd>
				<dd><a href="/admin.php/User/guanli" target="mainFrame">权限管理</a></dd> -->
			</dl>
			<dl>
				<dt><span class="icon user"></span>动态链接</dt>
				 <dd><a href="/admin.php/Trend/add" target="mainFrame">添加导航</a></dd> 
				<dd><a href="/admin.php/Trend/oper" target="mainFrame">管理导航</a></dd>
				<dd><a href="/admin.php/Trend/system" target="mainFrame">添加系统</a></dd>
				<dd><a href="/admin.php/Trend/systemoper" target="mainFrame">管理系统</a></dd>
						
			</dl>
			<dl>
				<dt><span class="icon user"></span>单位管理</dt>
				<dd><a href="/admin.php/Chengqu/add" target="mainFrame">添加单位</a></dd>
				<dd><a href="/admin.php/Chengqu/oper" target="mainFrame">管理单位</a></dd>
			</dl>
			<dl>
				<dt><span class="icon user"></span>飘窗管理</dt>
				<!-- <dd><a href="/admin.php/Tanchu/add" target="mainFrame">添加飘窗</a></dd> -->
				<dd><a href="/admin.php/Tanchu/oper" target="mainFrame">
				管理飘窗</a></dd>
				<dd><a href="/admin.php/Tanchu/adder" target="mainFrame">添加信息</a></dd>
			   <dd><a href="/admin.php/Tanchu/operer" target="mainFrame">
				管理信息</a></dd>
				 <dd><a href="/admin.php/Fair/index" target="mainFrame">
				工作公告</a></dd>
			</dl>
			<dl>
				<dt><span class="icon article"></span>值班表</dt>
				<dd><a href="/admin.php/Duty/addty" target="mainFrame">添加值日</a></dd>
				<dd><a href="/admin.php/Duty/listty" target="mainFrame">值日列表</a></dd>
							
			</dl>
		</div>
	</div>
</body>
</html>