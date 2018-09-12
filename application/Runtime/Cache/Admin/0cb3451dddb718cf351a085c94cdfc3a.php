<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
  <head>
    <title>后台管理系统</title>
    <meta http-equiv="content-type" content="text/html;charset=utf-8">
    <link href="/public/css/admin.css" type="text/css" rel="stylesheet" />
    <script type="text/javascript" src="/library/jquery/jquery-1.4.js"></script>
    <script type="text/javascript" src="/library/kindeditor/kindeditor.js"></script>
    <style>
  body{
    background-image:url('/public/images/320.jpg');
    background-attachment: fixed;
    background-repeat: no-repeat;
    
}
</style>
    <script type="text/javascript">
      var editor;
      KindEditor.ready(function(e){
          editor = e.create("[name=content]",{
              width:"700px",
              height:"260px"
          });
      });
      //表单验证
      function checkAdd()
      {
    	  if(document.frm.title.value == "")
          {
              alert("请输入新闻标题！");
              document.frm.title.focus();
              return false;
          }
    	  else if(editor.html() == "")
          {
              alert("请输入新闻内容！");
              editor.focus();
              return false;
          }
      }
    </script>
  </head>
  <body>
    <h3 align="center">修改</h3>
        <form name="frm" method="post" action="/admin.php/Tanchu/updatederd/articleId/<?php echo ($new["id"]); ?>" enctype="multipart/form-data" onsubmit="return checkAdd()">
        <table class="addNewsTb" bgcolor="#DCDCDC" border="0" align="center" width="700">
          <tr>
            <td>标题：</td>
            <td><input type="text" name="title" size="50" value="<?php echo ($new["title"]); ?>"></td>
          </tr>
          <tr>
            <td>类型：</td>
            <td>
            <input type="text" value="<?php echo ($new["typeName"]); ?>" size="6"/>
             
            </td>
          </tr>
          
          <tr>
            <td colspan="2"><textarea name="content"><?php echo ($new["content"]); ?></textarea></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>
              <input type="submit" value="修改" class="btn2">
              &nbsp;&nbsp;&nbsp;
             <input type="reset" value="重置" class="btn2">
            </td>
          </tr>
        </table>
        </form>
      </div>
    </div>
  </body>
</html>