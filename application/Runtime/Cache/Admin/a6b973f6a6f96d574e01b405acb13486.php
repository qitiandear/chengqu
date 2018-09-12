<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>晋中市公安局城区分局后台</title>
</head>
<body>
	<h3 align="center">当前操作：修改系统分类</h3>
	<form action="/admin.php/Trend/usaved" method="post">
		<table>
			<tr>
				<td>分类名</td>
				<td>
				<input type="hidden" name="id" value="<?php echo ($_GET['id']); ?>"/>
				<input type="text" name="tname" value="<?php echo ($arr["tname"]); ?>"/>
				</td>
			</tr>
			<tr>
				<td>父分类：</td>
				<td>
					<select name="fid" id="fid" >
						<option value="0">顶级</option>
						<?php echo ($str); ?>
					</select>
				</td>
			</tr>
				<tr>
		<td>链接地址</td>
		<td><input type="text" name="attach" placeholder="链接地址" value="<?php echo ($arr["attach"]); ?>"></td>
	</tr>
			<tr>
				<td colspan="2"> <input type="submit" value="修改"/></td>
			</tr>
		</table>
	</form>
</body>
</html>