<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>晋中市公安局城区分局后台</title>
<link href="/chengqu/public/css/reset.css" type="text/css" rel="stylesheet" />
<style>
  body{
    background-image:url('/chengqu/public/images/320.jpg');
    background-attachment: fixed;
    background-repeat: no-repeat;
    
}
</style>
</head>
<body>
<br>
<h3 align="center">文章列表</h3>
<br>
<!-- 	<form name="frm" method="post" action="/chengqu/admin.php/AddNews/search.html">
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
        <table border="1" align="center" width="700" cellpadding="0" class="box" cellspacing="0">
          <tr height="30" style="font-weight:bold;">
            <td>文章编号</td>
            <td>文章类型</td>
            <td>发表时间</td>
            <td>文章标题</td>
            
            <td>&nbsp;</td>
          </tr>
          <?php if(is_array($newsInfo)): $i = 0; $__LIST__ = $newsInfo;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><tr height="25">
            <td><?php echo ($v["id"]); ?></td>
            <td><?php echo ($v["typeName"]); ?></td>
            <td><?php echo ($v["dateandtime"]); ?></td>
            <td align="left"><a href="/chengqu/admin.php/AddNews/index/articleId/<?php echo ($v['id']); ?>"><?php echo ($v["title"]); ?></a></td>

            <td><a href="#" onclick="delNews(<?php echo ($v["id"]); ?>)">删除</a></td>
          </tr><?php endforeach; endif; else: echo "" ;endif; ?>
          <tr>
        	<td colspan="6" align="center" class="pagelist">
         		 <?php echo ($pageList); ?>
        	</td>
     	 </tr>
        </table>
            <script type="text/javascript">
	//删除新闻
	function delNews(articleId){
		if (confirm("是否删除该文章")) {
			window.location = "/chengqu/admin.php/AddNews/Recycling/articleId/"+articleId;
		}
	}
    </script>
</body>
</html>