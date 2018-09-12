<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
  <title>晋中市公安局城区分局后台</title>
  <link href="/public/css/reset.css" type="text/css" rel="stylesheet" />
<script src="/library/js/guanli.js"></script>
<style>
  body{
    background-image:url('/public/images/320.jpg');
    background-attachment: fixed;
    background-repeat: no-repeat;
    
}
</style>
</head>
<body>
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
         window.location = '/admin.php/User/deleted/id/'+vals;
        }
  
  }
</script>
<br/><br/>
	<h3 align="center">用户列表</h3>
       <br>
        <table border="1" align="center" width="90%" cellpadding="0" class="box" cellspacing="0" style="text-align: center;">
          <tr height="30" style="font-weight:bold;">
            <td>姓名</td>
            <td>电话</td>
           
            <td>单位</td>
            <td>操作</td>
            <td>批量操作</td>
          </tr>
          <?php if(is_array($arr)): $i = 0; $__LIST__ = $arr;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><tr height="25">
            <td><?php echo ($v["username"]); ?></td>
            <td><?php echo ($v["tel"]); ?></td>
          
            <td><?php echo ($v["fname"]); ?></td>
            <td><a href="/admin.php/User/update/id/<?php echo ($v["id"]); ?>">修改</a>&nbsp;&nbsp;<a href="#" onclick="delNews(<?php echo ($v["id"]); ?>)">删除</a></td>
             <td><input type="checkbox" name="ids[]" id="<?php echo ($v["id"]); ?>" value="<?php echo ($v["id"]); ?>"/></td> 
          </tr><?php endforeach; endif; else: echo "" ;endif; ?>
          <tr>
        	  <tr>
    <td colspan="4" align="center" class="pagelist"><?php echo ($pageList); ?></td>
    <td colspan="1" align="center" style="cursor:pointer">
    <a href="javascript:selectAll()">全选</a>&nbsp;|&nbsp;<a href="javascript:fselectAll()">反选</a>&nbsp;|&nbsp;<a href="javascript:determine();">确定所选</a>
     </td>

       </tr>
     	 </tr>
        </table>
 <script type="text/javascript">
	//删除新闻
	function delNews(articleId){
		if (confirm("是否删除该用户")) {
			window.location = "/admin.php/User/delete/Id/"+articleId;
		}
	}
    </script>
</body>
</html>