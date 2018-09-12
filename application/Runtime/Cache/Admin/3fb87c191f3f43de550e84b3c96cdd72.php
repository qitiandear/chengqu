<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Insert title here</title>
<link href="/public/css/reset.css" type="text/css" rel="stylesheet" />
<script src="/library/js/guanli.js"></script>
<style>
	body{
		background-image:url('/public/images/320.jpg');
		background-attachment: fixed;
		background-repeat: no-repeat;
		
}
</style>
<script>
//删除图片
function delImg(id){
	if(confirm("是否删除该记录")){
		window.location = '/admin.php/Rotation/delete/id/'+id;
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
         window.location = '/admin.php/Rotation/deleted/id/'+vals;
        }
  
  }
</script>
</head>
<body><br><br>
<h3 style="text-align: center;">图片展示</h3><br>
	<table width="90%" border="1" align="center" style="text-align: center">
							<tr>
								<th>图片</th>
								<th>操作</th>
								<th>批量操作</th>
							</tr>
							<?php if(is_array($Img)): foreach($Img as $k=>$v): ?><tr style="background-color:<?php echo $k%2==NULL?'#FFFFFF':'#F1F5FE';?>">
								<td><img src="/public/<?php echo ($v["imagepath"]); ?>" width="110" height="80"/></td>
								<td><a href="javascript:void(0)" onclick="delImg(<?php echo ($v["id"]); ?>)">删除</a></td>
								<td><input type="checkbox" name="ids[]" id="<?php echo ($v["id"]); ?>" value="<?php echo ($v["id"]); ?>"/></td> 
							</tr><?php endforeach; endif; ?>
							<tr>
								<td colspan="2" align="center" class="pagelist"><?php echo ($pageList); ?></td>
								<td colspan="1" align="center" style="cursor:pointer">
    <a href="javascript:selectAll()">全选</a>&nbsp;|&nbsp;<a href="javascript:fselectAll()">反选</a>&nbsp;|&nbsp;<a href="javascript:determine();">确定所选</a>
     </td>
							</tr>
						</table>
</body>
</html>