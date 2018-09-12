<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
<link href="/chengqu/public/css/reset.css" type="text/css" rel="stylesheet" />
<script src="/chengqu/library/js/guanli.js"></script>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>Document</title>
  <style>
  body{
    background-image:url('/chengqu/public/images/320.jpg');
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
         window.location = '/chengqu/admin.php/AddNews/deleterd/id/'+vals;
        }
  
  }
</script>
<h3 align="center">回收站</h3>
	<!-- <form name="frm" method="post" action="/chengqu/admin.php/ModNews/modnews.html">
        <input type="hidden" name="currentPage" value="1">
        <table border="0" align="center" width="700" cellpadding="0" cellspacing="0">
          <tr>
            <td align="left">
              &nbsp;文章搜索：<input type="text" name="keyword" size="30" value="">
              <select name="searchType">
                <option value="title">标题</option>
                <option value="content" selected>内容</option>
              </select>
              <input type="submit" value="搜索">
            </td>
          </tr>
        </table>
        </form> -->
        <br>
        <table border="1" align="center" width="90%" cellpadding="0" cellspacing="0" style="text-align: center">
          <tr height="30" style="font-weight:bold;">
            <td>文章编号</td>
            <td>文章类型</td>
            <td>发表时间</td>
            <td>文章标题</td>
            <td>操作</td>
            <td>批量操作</td>
          </tr>
          <?php if(is_array($newsInfo)): $i = 0; $__LIST__ = $newsInfo;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><tr height="25">
            <td><?php echo ($v["id"]); ?></td>
            <td><?php echo ($v["typeName"]); ?></td>
            <td><?php echo ($v["dateandtime"]); ?></td>
            <td align="left"><a href="/chengqu/admin.php/AddNews/index/articleId/<?php echo ($v['id']); ?>"><?php echo ($v["title"]); ?></a></td>
            
            <td><a href="/chengqu/admin.php/AddNews/huanyuan/id/<?php echo ($v['id']); ?>">还原</a> &nbsp;
            <a href="/chengqu/admin.php/AddNews/index/articleId/<?php echo ($v['id']); ?>">修改</a>&nbsp;
            <a href="#" onclick="delNews(<?php echo ($v["id"]); ?>)">删除</a></td>
             <td><input type="checkbox" name="ids[]" id="<?php echo ($v["id"]); ?>" value="<?php echo ($v["id"]); ?>"/></td> 
          </tr><?php endforeach; endif; else: echo "" ;endif; ?>
          <tr>
        	<td colspan="5" align="center" class="pagelist"><?php echo ($pageList); ?></td>
    <td colspan="1" align="center" style="cursor:pointer">
    <a href="javascript:selectAll()">全选</a>&nbsp;|&nbsp;<a href="javascript:fselectAll()">反选</a>&nbsp;|&nbsp;<a href="javascript:determine();">确定所选</a>
     </td>
     	 </tr>
        </table>
            <script type="text/javascript">
	//删除新闻
	function delNews(articleId){
		if (confirm("是否删除该文章")) {
			window.location = "/chengqu/admin.php/AddNews/delete/articleId/"+articleId;
		}
	}
    </script>
</body>
</html>