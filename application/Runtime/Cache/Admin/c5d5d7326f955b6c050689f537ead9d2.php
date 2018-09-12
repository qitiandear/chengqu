<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Insert title here</title>
<link href="/chengqu/public/css/reset.css" type="text/css" rel="stylesheet" />
<script src="/chengqu/library/js/guanli.js"></script>
<style>
	body{
		background-image:url('/chengqu/public/images/320.jpg');
		background-attachment: fixed;
		background-repeat: no-repeat;
		
}
</style>
<script>
//删除图片
function delImg(id){
	if(confirm("是否删除该记录")){
		window.location = '/chengqu/admin.php/Tanchu/delete/id/'+id;
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
         window.location = '/chengqu/admin.php/Tanchu/deleted/id/'+vals;
        }
  
  }
</script>
</head>
<body>
<h3 align="center">管理飘窗</h3><br>
	<table width="90%" border="1" align="center" style="text-align: center">
							<tr>
								<th>类型</th>
								<th>飘窗</th>
								<th>操作</th>
								
							</tr>
							<?php if(is_array($info)): foreach($info as $k=>$v): ?><tr style="background-color:<?php echo $k%2==NULL?'#FFFFFF':'#F1F5FE';?>">
								<td><?php echo ($v["typeName"]); ?></td>
								<td><img src="/chengqu/public/<?php echo ($v["imagepath"]); ?>" width="110" height="80"/></td>
								<td>
								<a href="/chengqu/admin.php/Tanchu/update/id/<?php echo ($v["id"]); ?>">修改</a>
								</td>
								
							</tr><?php endforeach; endif; ?>
						
						</table>
</body>
</html>