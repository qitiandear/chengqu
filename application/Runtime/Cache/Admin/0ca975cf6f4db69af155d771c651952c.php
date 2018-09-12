<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<style>
	body{
		background-image:url('/public/images/320.jpg');
		background-attachment: fixed;
		background-repeat: no-repeat;
		
}
</style>
	<title>晋中市公安局城区分局后台</title>
</head>
<body>
	
	<h3 style="text-align: center;">专项活动</h3> 
	<table width="100%" border="1">
							<tr>
								<th>图片</th>
								<th>操作</th>
							</tr>
							
							<tr>
								<td><img src="/public/<?php echo ($zx["imagepath"]); ?>" width="160" height="50"/></td>
								<td><a href="/admin.php/Rotation/update/id/<?php echo ($zx["id"]); ?>">修改</a></td>
							</tr>
							
							
						</table>
</body>
</html>