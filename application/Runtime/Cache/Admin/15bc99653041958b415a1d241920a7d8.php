<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>晋中市公安局城区分局后台</title>
</head>
<body>
<br/><br/>
 <h3 align="center">角色管理</h3>
      <form action="/admin.php/User/saves" name="frm" method="post" onsubmit="return checkAdd();">
          <table border="1" cellpadding="0" cellspacing="0" align="center">
              <tr>
                <td>角色名称</td>
                <td><input type="text" name="jiaose" id="name" style="width: 99%;"></td>
              </tr>
              <tr>
                <td>分配菜单</td>
                <td>
              <input type="checkbox" name="lovely[]" value="1" checked="checked"/>文章管理
              <input type="checkbox" name="lovely[]" value="2"/>用户管理
            <input type="checkbox" name="lovely[]" value="3"/>角色管理
            <input type="checkbox" name="lovely[]" value="4"/>动态链接管理
            <input type="checkbox" name="lovely[]" value="5"/>签收管理
            <input type="checkbox" name="lovely[]" value="6"/>显示签收管理
                </td>
              </tr>
              <tr>
                  <td colspan="2" align="center">
                  <input type="submit" value="提交">&nbsp;
                  <input type="reset" value="重置">      
                  </td>
              </tr>
          </table>
      </form>
      <script>
      		function checkAdd(){
      			 if(document.frm.jiaose.value == "")
      	          {
      	             alert("请输入角色名称")
      	              document.frm.jiaose.focus();
      	              return false;
      	          }
      	        
      		}
      </script>
</body>
</html>