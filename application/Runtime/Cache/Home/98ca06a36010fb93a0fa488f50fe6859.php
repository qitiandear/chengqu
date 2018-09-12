<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>晋中公安局城区分局</title>
<link rel="stylesheet" href="/chengqu/public/css/quchumr.css">
	<link rel="stylesheet" href="/chengqu/public/css/index.css">
	<link rel="stylesheet" href="/chengqu/public/css/reset.css">
	<script src="/chengqu/library/js/jquery.min.js"></script>
	<script src="/chengqu/library/js/index.js"></script>
	<script src="/chengqu/library/js/html5.js"></script>
	<style>
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
	<!--   <img src="/chengqu/public/images/sousuo.png" class="img"> -->
</head>
<body>
	<!-- 第一个飘窗
	 <div id="float_icon"> 
		<a href="listsrkl-category.html"><img src="images/pc1.jpg"></a>
	    <div class="close">X</div>
	 </div>
	第二个飘窗
	 <div id="float_icon2"> 
	    <img src="images/pc2.jpg">
	    <div class="close2">X</div> 
	 </div> -->
	 <!-- 代码部分begin -->
	<div id="floatright" style="position: absolute; z-index: 10; "></div>

	<!-- 晋中城区分局首页开始 -->
	<!-- 顶部内容 -->
	<div class="index_header">
	   <param name="movie" value="/chengqu/public/vivo/cqdh.swf"><!--文件路径--> 
   <param name="wmode" value="opaque"><!--透明（transparent）与不透明(opaque)-->
   <param name="quality" value="high" /><!--可用可以不用，品质高低。不用，则默认自动高品质--> 
		<embed height="200" width="100%" src="/chengqu/public/vivo/cqdh.swf" type="application/x-shockwave-flash" ></embed>
	</div>
	<!-- 导航栏 -->
	<div class="index_nav"  style="margin-top: 10px;">
		<div class="index_navnei"  style="margin-top: 20px;">
			<a href="/chengqu/index.php" class="index_lianjie" >网站首页</a>
			<a href="/chengqu/index.php/Listtype/index" class="index_lianjie" >分局动态</a>
			<a href="/chengqu/index.php/Listtype/index/typeId/5" class="index_lianjie" >通知通报</a>
			<a href="http://gwcs.gat.sx/ " class="index_lianjie" >公文传输</a>
			<a href="http://10.94.64.47//ASJGL/index_shanxi.jsp" class="index_lianjie" >警综平台</a>
			<a href="/chengqu/index.php/Listtype/index/typeId/11" class="index_lianjie" >信息简报</a>
			<a href="http://10.97.145.188"  class="index_lianjie">进入旧版</a>
			<!-- <a href="" class="index_lianjie">值班表</a>  -->
		  	<form  name="frm" action="/chengqu/index.php/Listtype/search.html" method="post" onsubmit="return checkSearch()" >
			<input type="text" placeholder="请输入查询标题..." required="required" name="keyword" size="25px"  class="key">           
			   <input type="submit" value="提交" style="display:none"/>
            </form>
            &nbsp;&nbsp;&nbsp;
            <!-- <?php if($headerIsLogin == 1): ?><div style="position: absolute;right: 6%;top: 24%; color:write">欢迎[<?php echo ($_SESSION['user']['username']); ?>]光临&nbsp;&nbsp;&nbsp;
            				  <a href="/chengqu/index.php/Base/tuichu.html" style="color:black;">退出</a></div>
            				 <?php else: ?> 
            				  	<div class="login_qt" onclick="log();">登录</div><?php endif; ?> -->
            <script>
            //显示

            		function log(){
            		
                		var cobj = document.getElementById("clink");
                		var dobj = document.getElementById("dlink");
            			dobj.style.display="block";
                    	cobj.style.display="block";
                }
            	
            //消失
            function out(){
        		var cobj = document.getElementById("clink");
            	cobj.style.display="none";

			var dobj = document.getElementById("dlink");
			dobj.style.display="none";
		}
             //搜索
				function checkSearch(){
					  if(document.frm.keyword.value == "")
						  {
							  alert("搜索关键字不能为空！");
							  document.frm.keyword.focus();
							  return false;
						  }
				}
				/* //表单验证图
			    function checkAdd()
			    {
			      var uobj = document.getElementById('username');
			      var pobj = document.getElementById('password');
			  	  if(uobj.value == "")
			        {
			            alert("请输入用户名！");
			            uobj.focus();
			            return false;
			        }
			  	  else if(pobj.value == "")
			        {
			            alert("请输入密码！");
			            pobj.focus();
			            return false;
			        }
			    }*/
			</script>
		</div>
	</div>
	<!-- 天气预报 -->
	<!-- <div id="tianqi">
		<div id="tianqinei">
			<iframe width="960" scrolling="no" height="25" frameborder="1px solid #fff" allowtransparency="true" src="http://i.tianqi.com/index.php?c=code&id=1&color=%23FF0000&bgc=%23FFFFFF&bdc=%23&icon=3&wind=1&num=2"></iframe>
		</div>
	</div> -->
	<br><br>
<!-- 	<form name="frm" name="myform" action="/chengqu/index.php/News/login" style="font-weight: bold;" method="post" onsubmit="return checkAdd()">
<div class="ui-modal" id="dlink">
<div class="ui-popup" id="clink">
	<div class="ui-popup-guanbi" onclick="out();"></div>
	
	<div class="ui_biaoti">登录</div>
	<br/><br/>
	<div class="ui-popup-shouji"><input type="text" name="username" id="username" placeholder="用户名"></div>
	
	<div class="ui-popup-mima"><input type="password" name="password" id="password" placeholder="密码"></div>
	<div class="ui_popup_btn"><input type="submit" value="登录"></div>	
</div>
</div>
</form> -->

<br/>
	<table width="960"  cellpadding="1" cellspacing="0" style="margin-left:16.5%;" align="center">
	<?php if(is_array($arr)): $k = 0; $__LIST__ = $arr;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($k % 2 );++$k;?><tr style="background-color:<?php echo $k%2==NULL?'#FFFFFF':'#F1F5FE';?>">
		<td><a href="/chengqu/index.php/News/index/id/<?php echo ($v["id"]); ?>"><?php echo ($v["title"]); ?></a></td>
		<td><a href="/chengqu/index.php/News/index/id/<?php echo ($v["id"]); ?>"><?php echo ($v["date"]); ?></a></td>
	</tr><?php endforeach; endif; else: echo "" ;endif; ?>
	<tr>
		<td class="pagelist"><?php echo ($pageList); ?></td>
	</tr>
</table>
<br/><br/>
</body>
</html>