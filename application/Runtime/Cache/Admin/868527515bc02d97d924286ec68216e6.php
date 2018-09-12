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
	<script type="text/javascript" src="/chengqu/library/js/jquery-1.4.js"></script>
	 <script type="text/javascript">
      function checkAdd()
      {
    	  $("#userTd").html("");
    	  $("#pwdTd").html("");
    	  $("#userTypeTd").html("");
          if(document.frm.userName.value == "")
          {
              $("#userTd").html("请输入用户名！");
              document.frm.userName.focus();
              return false;
          }
          else if(document.frm.password.value == "")
          {
              $("#pwdTd").html("请输入密码！");
              document.frm.password.focus();
              return false;
          }
          else if(document.frm.tel.value == ""){
        	  $("#tel").html("请输入电话！");
        	  document.frm.tel.focus();
              return false;
          }
          
      }
    </script>
</head>
<body>
	<h3 align="center">用户修改</h3>
	        <form name="frm" method="get" action="/chengqu/admin.php/User/upade/id/<?php echo ($arr["id"]); ?>.html" onsubmit="return checkAdd()">
        <table border="0" align="center" width="500" bgcolor="#6599FF">
          <tr>
            <td align="left" width="100">用户名</td>
            <td width="170"><input type="text" name="userName" value="<?php echo ($arr["username"]); ?>" size="20"></td>
            <td id="userTd" style="color:red;" width="170" align="left">&nbsp;</td>
          </tr>
          <tr>
            <td align="left">密码</td>
            <td><input type="password" name="password" value="<?php echo ($arr["password"]); ?>" size="20"></td>
            <td id="pwdTd" style="color:red;" align="left">&nbsp;</td>
          </tr>
           <tr>
            <td align="left">所属单位</td>
            <td>
              <select name="typeId">
              <?php if(is_array($info)): $i = 0; $__LIST__ = $info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><option value="<?php echo ($v["id"]); ?>"><?php echo ($v["fname"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
              </select>
            </td>
          </tr>
          <tr>
            <td align="left">电话</td>
            <td><input type="text" name="tel" size="20" value="<?php echo ($arr["tel"]); ?>"></td>
            <td id="tel" style="color:red;" align="left">&nbsp;</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td align="center">
              <input type="submit" value="修改" class="btn1">
              &nbsp;&nbsp;&nbsp;
              <input type="reset" value="取消" class="btn1">
            </td>
            <td>&nbsp;</td>
          </tr>
        </table>
        </form>
        
</body>
</html>