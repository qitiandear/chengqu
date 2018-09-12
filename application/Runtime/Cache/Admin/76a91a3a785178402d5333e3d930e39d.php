<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>Document</title>
  <style>
  body{
    background-image:url('/chengqu/public/images/320.jpg');
    background-attachment: fixed;
    background-repeat: no-repeat;
    
}
.futd input{margin-left:27px;}
input[type="checkbox"]:nth-child(1){margin-left:0px;}
input[type="checkbox"]:nth-child(30){margin-left:0px;}
.futext{display:inline-block;min-width:86px;}
</style>
	 <script type="text/javascript" src="/chengqu/library/kindeditor/kindeditor.js"></script>
   <script type="text/javascript" src="/chengqu/library/js/jquery-1.4.js"></script>
   <script src="/chengqu/library/js/guanli.js"></script>
    <script type="text/javascript">
      var editor;
      KindEditor.ready(function(e){
          editor = e.create("[name=content]",{
              width:"1000px",
              height:"200px",
            cssData:'body{font-family:"微软雅黑";font-size:"14px"}'

          });
      });
      //表单验证
      function checkAdd()
      {
    	  if(document.frm.title.value == "")
          {
              alert("请输入文章标题！");
              document.frm.title.focus();
              return false;
          }
    	  else if(editor.html() == "")
          {
              alert("请输入文章内容！");
              editor.focus();
              return false;
          }
      }
    </script>
</head>
<body>
<h3 align="center">发表文章</h3>
	<form name="frm" method="post" action="/chengqu/admin.php/AddNews/addnew.html" enctype="multipart/form-data" onsubmit="return checkAdd()">
        <table class="addNewsTb" bgcolor="#DCDCDC" border="0" align="center" width="70%">
          <tr>
            <td width="100">文章标题：</td>
            <td><input type="text" name="title" size="50"></td>
            <td></td>
          </tr>
          <tr>
            <td>文章类型：</td>
            <td>
              <select name="typeId">
              <?php if(is_array($arr)): $i = 0; $__LIST__ = $arr;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i; if(is_array($v)): $i = 0; $__LIST__ = $v;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vv): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vv["typeId"]); ?>"><?php echo ($vv["typeName"]); ?></option><?php endforeach; endif; else: echo "" ;endif; endforeach; endif; else: echo "" ;endif; ?>
              </select>
            </td>
          </tr>
          
          <tr>
            <td>文章作者：</td>
            <td><input type="text" name="writer" size="50"></td>
          </tr>
          <tr>
            <td>文章日期：</td>
            <td><input type="date" name="date" size="50"></td>
          </tr>
          <tr>
            <td>文章来源：</td>
            <td><input type="text" name="source" size="50"></td>
          </tr>
          <tr>
            <td>文章图片：</td>
            <td><input type="file" name="myFile" size="20"></td>
          </tr>
          <?php if($t1 != NULL || $t2 != NULL || $t3 != NULL): ?><tr>
            <td>签收单位:</td>
            <td class="futd" style="width:80%" >
                <?php if(is_array($unit)): $i = 0; $__LIST__ = $unit;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><input  type="checkbox" name="ids[]" id="<?php echo ($v["id"]); ?>" value="<?php echo ($v["id"]); ?>"/><span class="futext"><?php echo ($v["fname"]); ?></span><?php endforeach; endif; else: echo "" ;endif; ?>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="javascript:selectAll()">全选</a>&nbsp;|&nbsp;<a href="javascript:fselectAll()">反选</a>&nbsp;
            </td>
          </tr><?php endif; ?>
          <tr>
            <td colspan="2"><textarea name="content"></textarea></td>
          </tr>
          <tr>
            <td colspan="3" align="center">
              <input type="submit" value="添加" class="btn2">
              &nbsp;&nbsp;&nbsp;
              <input type="reset" value="取消" class="btn2">
            </td>
          </tr>
        </table>
        </form>
     
</body>
</html>