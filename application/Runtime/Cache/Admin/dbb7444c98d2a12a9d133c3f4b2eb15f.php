<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>晋中市公安局城区分局后台</title>
</head>
<frameset rows="80,*" framespacing="0" border="0">
	<frame src="/chengqu/admin.php/Putong/top.html" frameborder="0" scrolling="no" noresize="noresize"/>
	<frameset cols="200,*">
		<frame src="/chengqu/admin.php/Putong/menu.html" scrolling="no"   />
		<frame src="/chengqu/admin.php/Putong/welcome"   name="mainFrame" />
	</frameset>
	
</frameset>
<script>
			//退出登录
			function logout(){
				if(confirm("是否退出后台")){
					window.location = '/chengqu/admin.php/Base/logout';
				}
			}
		</script>
</html>