<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>晋中市公安局城区分局后台</title>
<style>
	body{
		background-image:url('/public/images/320.jpg');
		background-attachment: fixed;
		background-repeat: no-repeat;
		
}
</style>
</head>
<body>
	<h3 align="center">当前操作：添加系统</h3>
<form action="/admin.php/Trend/saves" method="post">
<table  width="50%" border="1" cellspacing="0" cellpadding="0" align="center">
	<tr>
		<td>名称：</td>
		<td><input type="text" name="tname"/></td>
	</tr>
	<tr>
		<td>父分类：</td>
		<td><select name="fid">
		<option value="0">顶级</option>
		<?php echo ($optionStr); ?>
		</select></td>
	</tr>
	<tr>
		<td>链接地址</td>
		<td><input type="text" name="attach" placeholder="链接地址"></td>
	</tr>
	<tr>
		<td colspan="2" align="center"><input type="submit" value="提交"/>
			&nbsp;&nbsp;
			<input type="reset" value="取消"/>
		</td>
	</tr>
</table>
</form>
</body>
</html>