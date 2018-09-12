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

<br>
<h3 align="center">值班列表</h3>

        <br>
        <table border="1" align="center" width="90%" cellpadding="0" class="box" cellspacing="0" style="text-align:center;">
          <tr height="30" style="font-weight:bold;">
          
            <td>局领导值班人</td>
            <td>总值班</td>
            <td>法治室值班人</td>
            <td>办公室值班人</td>
            <td>值班日期</td>
            
            <td>操作</td>
            
          </tr>
          <?php if(is_array($dutyInfo)): $i = 0; $__LIST__ = $dutyInfo;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><tr height="25">
            <td><?php echo ($v["name"]); ?></td>
            <td><?php echo ($v["zname"]); ?></td>
            <td><?php echo ($v["fname"]); ?></td>
            <td><?php echo ($v["bname"]); ?></td>
            <td><?php echo ($v["date"]); ?></td>
          
              
            <td>
            <a href="#" onclick="delNews(<?php echo ($v["id"]); ?>)">删除</a></td>
            

          </tr><?php endforeach; endif; else: echo "" ;endif; ?>
          
 
        </table>
            <script type="text/javascript">
	//删除新闻
	function delNews(articleId){
		if (confirm("是否删除该名单")) {
			window.location = "/admin.php/Duty/delete/Id/"+articleId;
		}
	}
    </script>
</body>
</html>