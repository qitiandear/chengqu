<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>

<script type="text/javascript" src="/chengqu/library/js/jquery.js"></script>
<style>
    .error{background:url(/chengqu/public/images/404.png) no-repeat; width:490px; margin-top:75px;padding-top:65px;}
.error h2{font-size:22px; padding-left:154px;}
.error p{padding-left:154px; line-height:35px;color:#717678;}
.reindex{padding-left:154px;}
.reindex a{width:115px; height:35px; font-size:14px; font-weight:bold; color:#fff; background:#3c95c8; display:block; line-height:35px; text-align:center;border-radius: 3px; margin-top:20px;}

</style>
<script language="javascript">
	$(function(){
    $('.error').css({'position':'absolute','left':($(window).width()-490)/2});
	$(window).resize(function(){  
    $('.error').css({'position':'absolute','left':($(window).width()-490)/2});
    })  
});  
</script> 


</head>


<body style="background:#edf6fa;">
<!-- 
    <div class="place">
    <span>位置：</span>
    <ul class="placeul">
    <li><a href="#">首页</a></li>
    <li><a href="#">404错误提示</a></li>
    </ul>
    </div>
     -->
    <div class="error">
    
    <h2>非常遗憾，您访问的页面不存在！</h2>
    <p>看到这个提示，就自认倒霉吧!</p>
    <div class="reindex"><a href="/chengqu/index.php/Index/indexr.html" target="_parent">返回首页</a></div>
    
    </div>
</body>
</html>