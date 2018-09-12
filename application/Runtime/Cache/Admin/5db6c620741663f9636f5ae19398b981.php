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
<link href="/public/css/reset.css" type="text/css" rel="stylesheet" />
<script type="text/javascript" src="/library/js/jquery-1.4.js"></script>
	 <script type="text/javascript">
      function checkAdd()
      {
    	  $("#userTd").html("");
    	  $("#pwdTd").html("");
    	  $("#checkPwdTd").html("");
          if(document.frm.pwd.value == "")
          {
              $("#userTd").html("请输入旧密码！");
              document.frm.password.focus();
              return false;
          }
          else if(document.frm.password.value == "")
          {
              $("#pwdTd").html("请输入密码！");
              document.frm.password.focus();
              return false;
          }
          else if(document.frm.checkPwd.value != document.frm.password.value)
          {
              $("#checkPwdTd").html("两次输入的密码不一致！");
              document.frm.checkPwd.focus();
              return false;
          }
          
      }
    //ajax 无刷新校验用户名
	  function checkpwd(){
		//获取被校验的用户名信息
		var nm = document.getElementById("pwd").value;
		if(nm != ""){
		//ajax 抓取到用户名传递给服务器端的校验
		var xhr = new XMLHttpRequest();
		xhr.onreadystatechange = function(){
			if(xhr.readyState==4){
				document.getElementById('userTd').innerHTML= xhr.responseText;
			}
		}
		//tp框架使用模式：分组、控制器/操作方法
		xhr.open('get','/admin.php/User/checkNM/pwd/'+nm);
		xhr.send(null);
	}
	}
    </script>
</head>
<body>
	<h3 align="center">密码重置</h3>
	<br/>
	 <form name="frm" method="post" action="/admin.php/User/save.html" onsubmit="return checkAdd()">
        <table border="0" align="center" width="470" bgcolor="#DCDCDC">
          <tr>
            <td align="left" width="100">旧密码</td>
            <td width="170"><input type="password" id="pwd" name="pwd" size="20" onblur="checkpwd()"></td>
            <td id="userTd" style="color:red;" width="170" align="left">&nbsp;</td>
          </tr>
          <tr>
            <td align="left">新密码</td>
            <td><input type="password" name="password" size="20"></td>
            <td id="pwdTd" style="color:red;" align="left">&nbsp;</td>
          </tr>
          <tr>
            <td align="left">确认密码</td>
            <td><input type="password" name="checkPwd" size="20"></td>
            <td id="checkPwdTd" style="color:red;" align="left">&nbsp;</td>
          </tr>
        
         
          <tr>
            <td>&nbsp;</td>
            <td align="center">
              <input type="submit" value="提交" class="btn1">
              &nbsp;&nbsp;&nbsp;
              <input type="reset" value="取消" class="btn1">
            </td>
            <td>&nbsp;</td>
          </tr>
        </table>
        </form>
</body>
</html>