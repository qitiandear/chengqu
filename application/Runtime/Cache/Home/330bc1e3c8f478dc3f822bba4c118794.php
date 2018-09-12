<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
<style>
	table,tr,td{
	border:1px solid #95A098;
	}
.ui-popup-guanbi{height:20px;width: 20px;margin-top:-10px;margin-left:390px;
		background:url('/chengqu/public/images/close21.png');cursor:pointer;}
.key{
			float:right;
			margin:-2.8% 0.5% 0px 0px;
			background:url(/chengqu/public/images/sousuo.png) no-repeat;
			border:hidden;
			width:165px;
			    height: 25px;
		}
</style>
<title>晋中市公安局城区分局</title>
</head>
<body style="background-color: #FFFACD;">
	<table width="100%" style="border:1px solid #95A098; text-align:center;" cellspacing="0" cellpadding="0">
		<tr>
			<td colspan="6" align="center"><?php echo ($ifo['title']); ?></td>
		</tr>
		<tr>
			<td>签收单位</td>
			<td>签收状况</td>
			<td>签收人</td>
			<td>签收时间</td>
			<td>签收IP</td>
			<td>操作</td>
		</tr>
		<?php if(is_array($arr)): $k = 0; $__LIST__ = $arr;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($k % 2 );++$k;?><tr style="background-color:<?php echo $k%2==NULL?'#F1F5FE':'#CCE8CF';?>">
			<td><?php echo ($v["fname"]); ?></td>

			<td>
			<?php if($v["username"] == NULL ): ?><span  style="color:red;">未签收</span>

			<?php else: ?>
			<span  style="color:blue;">已签收</span><?php endif; ?>
			</td>
			<td><?php echo ($v["username"]); ?></td>
			<td><?php echo ($v["dateandtime"]); ?></td>
			<td><?php echo ($v["ip"]); ?></td>
			<td>
			<?php if($v["userid"] == NULL ): ?><button style="color:red;cursor:pointer;" >未签收</button>

			<?php else: ?>
			<button style="color:#AFC6E2;cursor:pointer;" >已签收</button><?php endif; ?>
			


			</td>
		</tr><?php endforeach; endif; else: echo "" ;endif; ?>
	</table>
</body>
</html>