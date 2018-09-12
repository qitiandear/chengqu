<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>城区之星</title>
	<link rel="stylesheet" href="/chengqu/public/css/index.css">
</head>
<body>
	<div class="cqzxda">
		<div class="cqzx1">
			<div class="juti">
				<div class="xuxiank">
					<span>当前位置:</span>
					<a href="/chengqu/index.php/" style="margin-left:10px">主页></a>
					<a href="/chengqu/index.php/Listtype/index/typeId/19">城区之星></a>
					
					<div class="baisenr">
						<h4><?php echo ($news["title"]); ?></h4>
						<div class="laiyuanlan">
							<span>来源:</span>
							<span class="wzz"><?php echo ($news["source"]); ?></span>
							<span class="wzz">发布时间:</span>
							<span class="wzz"><?php echo ($news["date"]); ?></span>
							
							<span class="wzz">阅读人次<span><?php echo ($news["hint"]); ?></span><span>次</span></span>
						</div>
						
						<div class="duanluoqu">
							<?php if($news["imagepath"] != NULL ): ?><img src="/chengqu/public/<?php echo ($news["imagepath"]); ?>" width="600"  ><?php endif; ?>
							<?php echo ($news["content"]); ?>
						</div>
					</div>
					
					
					
				</div>
			</div>
		</div>
	</div>
</body>
</html>