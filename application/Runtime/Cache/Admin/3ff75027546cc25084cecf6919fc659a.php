<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>晋中市公安局城区分局后台</title>
  <style>
  body{
    background-image:url('/chengqu/public/images/320.jpg');
    background-attachment: fixed;
    background-repeat: no-repeat;
    
}
</style>
	<script>
			 //表单验证
      function checkAdd()
      {
    	  if(document.frm.fname.value == "")
          {
              alert("请输入单位名称！");
              document.frm.fname.focus();
              return false;
          }
    	
      }
	</script>
</head>
<body>
<h3 align="center">修改单位
</h3>
	<form name="frm" method="post" action="/chengqu/admin.php/Chengqu/saves/id/<?php echo ($arr["id"]); ?>" enctype="multipart/form-data" onsubmit="return checkAdd()">
        <table class="addNewsTb" border="1" align="center"  height="150" width="700" style="text-content:center;">
         
          <tr>
            <td>单位名称</td>
            <td><input type="text" name="fname" value="<?php echo ($arr["fname"]); ?>"  size="20"></td>
          </tr>
	      <tr>
	            
	            <td colspan="2" align="center">
	              <input type="submit" value="修改" class="btn2">
	              &nbsp;&nbsp;&nbsp;
	              <input type="reset" value="取消" class="btn2">
	            </td>
	      </tr>
        </table>
        </form>
</body>
</html>