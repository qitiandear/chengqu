<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>生日快乐</title>
	<link rel="stylesheet" href="/public/css/quchumr.css">
	<link rel="stylesheet" href="/public/css/index.css">
	<script src="library/js/jquery.min.js"></script>
	<script src="library/js/index.js"></script>
</head>
<body>
	<div id="srkl">
		<div id="srkl2">
			<div class="kongxs"></div>
			<span class="yfwx">一份温馨的</span><span class="zhufu">祝福</span>
			<span class="sming">成就生命的<span class="sming1">灿烂</span>与精彩</span>
			<div class="srklneirong">
				<div class="srklneirong1">
					<img src="/public/images/zti14.jpg" alt="">
					<div class="srklzi">生日快乐</div>
					<div class="baiseneir">
						<h1><?php echo ($news["title"]); ?></h1>
						<div class="dierlan1">
							<i>发布时间:</i>
							<span><?php echo ($news["date"]); ?></span>
							<i style="margin-left:20px">发布者:</i>
							<span><?php echo ($news["edit"]); ?></span>
							<i style="margin-left:20px">阅读人数:</i>
							<span><?php echo ($news["hint"]); ?></span>
						</div>
						<div  style="width: 100%; ">
							<?php if($news["imagepath"] != NULL ): ?><img src="/public/<?php echo ($news["imagepath"]); ?>" width="600"  ><?php endif; ?>
		           <?php echo ($news["content"]); ?>
		            </div>

						
					</div>

				</div>
			</div>
		<div>
	</div>
</body>
</html>