<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>晋中市公安局城区分局后台</title>
<link href="/public/css/reset.css" type="text/css" rel="stylesheet" />
<script src="/library/js/guanli.js"></script>
<script>
  function delImg(id){
  if(confirm("是否删除该记录")){
    window.location = '/admin.php/User/deleteded/id/'+id;
  }
}
</script>
<script>
//确定所选
  function determine(){
    var valArr = new Array; 
    for(var i=0;i<iobj.length;i++){
      //判断每一个iobj[i]的checked属性
      if(iobj[i].checked==true){
        var id = iobj[i].value; 
        valArr.push(id);
      }
    }
    var vals = valArr.join('.');//转换为逗号隔开的字符串
    console.log(vals);
    
      if(confirm("是否删除")){
        // document.getElementById("taken_").innerHTML = "<span style='color:green;'>已还书</span>";
         window.location = '/admin.php/User/deletedded/id/'+vals;
        }
  
  }
</script>
</head>
<body>
<br/><br/>
 <h3 align="center">权限管理</h3>
      <form action="/admin.php/User/saves" name="frm" method="post" onsubmit="return checkAdd();">
          <table border="1" cellpadding="0" cellspacing="0" align="center" width="90%" style="text-align: center;">
              <tr>
                <td>角色名称</td>
                <td>操作</td>
                <td>批量操作</td>
              </tr>
              <?php if(is_array($arr)): $i = 0; $__LIST__ = $arr;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><tr>
                <td><?php echo ($v["jiaose"]); ?></td>
                <td><a href="javascript:void(0)" onclick="delImg(<?php echo ($v["id"]); ?>)">删除</a></td>
                <td><input type="checkbox" name="ids[]" id="<?php echo ($v["id"]); ?>" value="<?php echo ($v["id"]); ?>"/></td>
              </tr><?php endforeach; endif; else: echo "" ;endif; ?>
              <tr>
                <td colspan="2" align="center" class="pagelist">&nbsp;</td>
                <td colspan="1" align="center" style="cursor:pointer">
    <a href="javascript:selectAll()">全选</a>&nbsp;|&nbsp;<a href="javascript:fselectAll()">反选</a>&nbsp;|&nbsp;<a href="javascript:determine();">确定所选</a>
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