<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
<style>
	body{
		background-image:url('/public/images/320.jpg');
		background-attachment: fixed;
		background-repeat: no-repeat;
		
}
</style>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>晋中市公安局城区分局后台</title>
</head>
<body>
<h3 align="center">图片展示添加
</h3>
	<form name="frm" method="post" action="/admin.php/Rotation/add.html" enctype="multipart/form-data" onsubmit="return checkAdd()">
        <table class="addNewsTb" bgcolor="#DCDCDC" border="1" align="center"  height="150" width="700" style="text-content:center;">
         
          <tr>
            <td>文章图片：</td>
            <td><input type="file" name="myFile" size="20"></td>
          </tr>
	      <tr>
	            
	            <td colspan="2" align="center">
	              <input type="submit" value="添加" class="btn2">
	              &nbsp;&nbsp;&nbsp;
	              <input type="reset" value="取消" class="btn2">
	            </td>
	      </tr>
        </table>
        </form>
</body>
</html>