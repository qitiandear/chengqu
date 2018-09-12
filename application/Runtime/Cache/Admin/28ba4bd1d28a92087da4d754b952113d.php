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
	 <script type="text/javascript" src="/library/js/jquery-1.4.js"></script>
   <script src="/library/js/guanli.js"></script>
	 <script type="text/javascript">
      function checkAdd()
      {
          if(document.frm.userName.value == "")
          {
             alert("请输入用户名！");
              document.frm.userName.focus();
              return false;
          }
          else if(document.frm.password.value == "")
          {
            alert("请输入密码！");
              document.frm.password.focus();
              return false;
          }
          else if(document.frm.checkPwd.value != document.frm.password.value)
          {
              alert("两次输入的密码不一致！");
              document.frm.checkPwd.focus();
              return false;
          }/*else if(document.frm.tel.value == ""){
        	alert("请输入电话！");
        	  document.frm.tel.focus();
              return false;
          }*/
          
      }
    </script>
</head>
<body>
<br/><br/>
<h3 align="center">用户添加</h3>
	        <form name="frm" method="post" action="/admin.php/User/adur.html" onsubmit="return checkAdd()">
        <table border="0" align="center" width="80%" bgcolor="#DCDCDC">
          <tr>
            <td align="left" width="100">用户名</td>
            <td width="170"><input type="text" name="userName" size="20"></td>
          </tr>
          <tr>
            <td align="left">密码</td>
            <td><input type="password" name="password" size="20"></td>
          </tr>
          <tr>
            <td align="left">确认密码</td>
            <td><input type="password" name="checkPwd" size="20"></td>
          </tr>
           <tr>
            <td align="left">所属单位</td>
            <td>
              <select name="typeId">
              <?php if(is_array($arr)): $i = 0; $__LIST__ = $arr;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><option value="<?php echo ($v["id"]); ?>"><?php echo ($v["fname"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
              </select>
            </td>
          </tr>
          <tr>
            <td align="left">电话</td>
            <td><input type="text" name="tel" size="20"></td>
            <td id="tel" style="color:red;" align="left">&nbsp;</td>
          </tr>
           <tr>
            <td align="left">分配角色</td>
            <td style="width: 80%" id="fuxuan">
            <?php if(is_array($types)): $i = 0; $__LIST__ = $types;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><input type="checkbox"  name="ids[]" id="<?php echo ($v["id"]); ?>" value="<?php echo ($v["typeId"]); ?>"/>&nbsp;<span style="display:inline-block;min-width: 80px;"><?php echo ($v["typeName"]); ?></span>&nbsp;<?php endforeach; endif; else: echo "" ;endif; ?>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="javascript:selectAll()">全选</a>&nbsp;|&nbsp;<a href="javascript:fselectAll()">反选</a>&nbsp;
            </td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td align="center">
              <input type="submit" value="添加" class="btn1">
              &nbsp;&nbsp;&nbsp;
              <input type="reset" value="取消" class="btn1">
            </td>
            <td>&nbsp;</td>
          </tr>
        </table>
        </form>
        
   
</body>
</html>