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
    <script type="text/javascript">
      var editor;
      KindEditor.ready(function(e){
          editor = e.create("[name=content]",{
              width:"1000px",
              height:"200px"
          });
      });
      //表单验证
      function checkAdd()
      {
        if(document.frm.title.value == "")
          {
              alert("请输入标题！");
              document.frm.title.focus();
              return false;
          }else if(document.frm.edit.value == ""){
            alert("请输入发布者！");
              document.frm.title.focus();
              return false;
          }
        else if(editor.html() == "")
          {
              alert("请输入内容！");
              editor.focus();
              return false;
          }
      }
    </script>
</head>
<body>
<h3 align="center">发表文章</h3>
  <form name="frm" method="post" action="/admin.php/Tanchu/addnew.html" enctype="multipart/form-data" onsubmit="return checkAdd()">
        <table class="addNewsTb" bgcolor="#DCDCDC" border="0" align="center" width="700">
          <tr>
            <td>标题：</td>
            <td><input type="text" name="title" size="50"></td>
          </tr>
          <tr>
            <td>类型：</td>
            <td>
              <select name="typeId">
              <?php if(is_array($newsType)): $i = 0; $__LIST__ = $newsType;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><option value="<?php echo ($v["id"]); ?>"><?php echo ($v["typeName"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
              </select>
            </td>
          </tr>
          <tr>
            <td>日期：</td>
            <td><input type="date" name="date" size="20"></td>
          </tr>
          <tr>
            <td>发布者：</td>
            <td><input type="text" name="edit" size="20"></td>
          </tr>
          <tr>
            <td>图片：</td>
            <td><input type="file" name="myFile" size="20"></td>
          </tr>
         
          <tr>
            <td colspan="2"><textarea name="content"></textarea></td>
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