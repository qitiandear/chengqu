<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link href="/public/css/reset.css" type="text/css" rel="stylesheet" />
<script src="/library/js/guanli.js"></script>
<title>晋中市公安局城区分局后台</title>
<style>
  body{
    background-image:url('/public/images/320.jpg');
    background-attachment: fixed;
    background-repeat: no-repeat;
    
}
</style>
<script>
//删除图片
function del(id){
	if(confirm("是否删除该记录")){
		window.location = '/admin.php/Trend/deleteded/id/'+id;
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
         window.location = '/admin.php/Trend/deletedd/id/'+vals;
        }
  
  }
</script>
</head>
<body>
<h3 align="center">系统管理</h3>
	<table width="80%" border="1px soild #ccc" align="center" style="text-align:center;" cellspacing="0" cellpadding="0">
    <tr>
        <th>名称</th>
        <th>操作</th>
        <th>批量操作</th>
    </tr>
    <?php if(is_array($arr)): foreach($arr as $key=>$v): ?><tr>
			<td><?php echo ($v["tname"]); ?></td>
			<td>
					<a href="/admin.php/Trend/updated/id/<?php echo ($v["id"]); ?>">修改</a>
					&nbsp;&nbsp;&nbsp;
					<a  href="javascript:void(0)" onclick="del(<?php echo ($v["id"]); ?>)">删除</a>					
			</td>
			<td><input type="checkbox" name="ids[]" id="<?php echo ($v["id"]); ?>" value="<?php echo ($v["id"]); ?>"/></td> 
		</tr><?php endforeach; endif; ?>
		<tr>
			<td colspan="2">&nbsp;</td>
			<td colspan="1" align="center" style="cursor:pointer">
    <a href="javascript:selectAll()">全选</a>&nbsp;|&nbsp;<a href="javascript:fselectAll()">反选</a>&nbsp;|&nbsp;<a href="javascript:determine();">确定所选</a>
     </td>
		</tr>
</table>
</body>
</html>