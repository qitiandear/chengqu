<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>公告</title>
<style>
	body{background-color: #0099FF;
		font-color:	#F8F8FF}
	center{font-size: 30px;color: red;font-weight: bold;}
	.dashed{border-bottom: dashed 3px;padding-top: 4%;width: 90%;margin: 0 auto;}
	.fabuzhe{font-size: 14px;color: red;}
	.fabuzhe p{ float: left;margin-left: 11%;}
	.fabuzhe a{color: red;float: right;margin-right: 11%;text-decoration: none;margin-top: 13px;}
	.con{width: 90%;margin: 0 auto;margin-top: 50px;}
	.title{font-size: 25px;color: red;font-weight: bold;margin-top: 15px;}
	.con p{font-size: 18px;}
	.con span{font-weight: bold;color: red;}
	.clearfix{clear: both;}
</style>
</head>

<body>
<center><?php echo ($arr["0"]["title"]); ?></center>
<div class="dashed"></div>
<div class="fabuzhe"><br>
	<p>发布者：<?php echo ($arr["0"]["writer"]); ?></p>
	<a href="#">时间：<?php echo ($arr["0"]["dateandtime"]); ?></a>
	<div class="clearfix"></div>
</div>	
<div class="con">
<?php echo ($arr["0"]["content"]); ?>

</div>

</body>
</html>