<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>晋中市公安局城区分局后台</title>
  <style>
  body{
    background-image:url('/public/images/320.jpg');
    background-attachment: fixed;
    background-repeat: no-repeat;
    
}
</style>
		<script>
			 //表单验证
      function checkAdd()
      {
    	  if(document.frm.title.value == "")
          {
              alert("请输入飘窗类型！");
              document.frm.title.focus();
              return false;
          }
    	
      }
	</script>
</head>
<body>
<h3 align="center">添加飘窗
</h3>
	<form name="frm" method="post" action="/admin.php/Tanchu/adds.html" enctype="multipart/form-data" onsubmit="return checkAdd()">
        <table class="addNewsTb" border="1" align="center"  height="150" width="700" style="text-content:center;">
         
          <tr>
            <td>飘窗类型</td>
            <td><input type="text" name="title" size="20"></td>
          </tr>
	      <tr>
	           <tr>
            <td>飘窗图片</td>
            <td><input type="file" name="myFile"></td>
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