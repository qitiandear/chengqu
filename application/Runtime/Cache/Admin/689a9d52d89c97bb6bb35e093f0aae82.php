<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>Document</title>
  <style>
  body{
    background-image:url('/public/images/320.jpg');
    background-attachment: fixed;
    background-repeat: no-repeat;
    
}
</style>
	 <script type="text/javascript" src="/library/kindeditor/kindeditor.js"></script>
   <script type="text/javascript" src="/library/js/jquery-1.4.js"></script>
<script>
function checkAdd(){
  var n = document.getElementById('name');
    var f = document.getElementById('fname');
      var b = document.getElementById('bname');
      var z = document.getElementById('zname');
  var d = document.getElementById('date');
  if (n.value=="") {
    alert("请输入局领导值班人！");
    return false;
  }
  if (n.value=="") {
    alert("请输入总值班值班人！");
    return false;
  }
   if (f.value=="") {
    alert("请输入法治室值班人！");
    return false;
  }
   if (b.value=="") {
    alert("请输入办公室值班人！");
    return false;
  }
   if (d.value=="") {
    alert("请输入日期！")
    return false;
  }
}
</script>
</head>
<body>
<h3 align="center">添加值班表</h3>
	<form name="frm" method="post" action="/admin.php/Duty/addduty.html" onsubmit="return checkAdd()">
        <table class="addNewsTb" bgcolor="#DCDCDC" border="0" align="center" width="700">          
          <tr>
            <td>局领导：</td>
            <td><input type="text" name="name" size="50" id="name"></td>
          </tr>
           <tr>
            <td>总值班：</td>
            <td><input type="text" name="zname" size="50" id="zname"></td>
          </tr>
          <tr>
            <td>法治室：</td>
            <td><input type="text" name="fname" size="50" id="fname"></td>
          </tr>
          <tr>
            <td>办公室：</td>
            <td><input type="text" name="bname" size="50" id="bname"></td>
          </tr>
          <tr>
            <td>值班日期：</td>
            <td><input type="date" name="date" size="50" id="date"></td>
          </tr>
        
          <tr>
            <td>&nbsp;</td>
            <td>
              <input type="submit" value="添加" class="btn2">
              &nbsp;&nbsp;&nbsp;
              <input type="reset" value="取消" class="btn2">
            </td>
          </tr>
        </table>
        </form>
     
</body>
</html>