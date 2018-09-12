<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">

<head>

	<script src="/library/js/jquery.min.js"></script>

<script>
setTimeout("focus();window.showModelessDialog('/index.php/Index/contion.html','','scroll:1;dialogleft:10;dialogtop:50;status:1;help:1;toolbar=1;resizable:1;dialogWidth:700px;dialogHeight:500px')",0)
</script>
<style>
#flashvideocontainer { color:#fff; }
.flashvideocontainer-a, .flashvideocontainer-a:link, .flashvideocontainer-a:visited { color:#eabb19; text-decoration:underline; background-color:none; }
.flashvideocontainer-a:active, .flashvideocontainer-a:hover, .flashvideocontainer-a:focus { color:#fff; text-decoration:none; background-color:#eabb19; }
.foot { padding:15px 76px 0 76px; background:url(images/ptv_11.jpg) 50% 0 no-repeat; height:50px; text-align:center; }
.index_nav_ie{
	
	height:20px!important;
	background: #e51f1f;
	position: relative;
	margin-top: 10px; width: 1000px;
	margin:0 auto;
}
</style>
<script>
var browser=navigator.appName 
var b_version=navigator.appVersion 
var version=b_version.split(";"); 
var trim_Version=version[1].replace(/[ ]/g,""); 

if(browser=="Microsoft Internet Explorer" && trim_Version=="MSIE6.0") 
{ 
	//document.getElementById('index_navnei_ie').className = 'index_nav_ie';
	
	console.log($('#index_navnei_ie'))
	$(function(){
		$('#index_navnei_ie').height("1000px").css("padding-top","10px")
	})
	
	
} 
$(function(){

	//$('#index_navnei_ie').height("60px").css("padding-top","10px")
})
</script>
<script src="/library/js/html5media.min.js"></script>
<script type="text/javascript" src="/library/js/setplayer.js"></script>

	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>晋中公安局城区分局</title>
	<link rel="stylesheet" href="/public/css/quchumr.css">
	<link rel="stylesheet" href="/public/css/video-js.min.css">

	<link rel="stylesheet" href="/public/css/index.css">
	<script src="/library/js/index.js"></script>
	<script src="/library/js/video.min.js"></script>
	<script src="/library/js/videojs-ie8.js"></script>
	
<script src="/library/js/h5.js"></script>
	<script src="/library/js/html5.js"></script>

	<style>

.rjld5{
	background-color: #EDEDED; width: 100%;position:absolute;
	display: none;
}
.rjld6{
	background-color: #EDEDED; width: 100%;position:absolute;
	display: block;
}
	.ui-popup-guanbi{height:20px;width: 20px;margin-top:-10px;margin-left:390px;
		background:url('/public/images/close21.png');cursor:pointer;}
		.key{
			float:right;
			margin:-2.8% 0.5% 0px 0px;
			background:url(/public/images/sousuo.png) no-repeat;
			border:hidden;
			width:165px;
			height: 25px;
		}

	</style>
	<!--   <img src="/public/images/sousuo.png" class="img"> -->
</head>
<body>
	<!-- 第一个飘窗 -->
	  <div id="float_icon"> 
			<img src="/public/<?php echo ($pcgl1["imagepath"]); ?>" onclick="imag1();">

	   <div class="close">X </div>
	</div>
	 <script>
 	   	function imag1(){
 	    window.open("/index.php/Tanchu/pcone.html");
 	
 	   	}
 	 
 	   </script>
<!-- 		第二个飘窗
 	<div id="float_icon2"> 
 	   <img src="/public/<?php echo ($pcgl2["imagepath"]); ?>" onclick="imag2();">
 	   <div class="close2">X</div> 
 	   <script>
 	   	function imag1(){
 	    window.open("/index.php/Tanchu/pcone.html");
 	
 	   	}
 	   	function imag2(){
 	    window.open("/index.php/Tanchu/pctwo.html");
 	
 	   	}
 	   </script>
 	</div> --> 
	<script type="text/javascript">
									setplayer('flashvideocontainer', 586, 476);
</script>
	 <!-- 代码部分begin -->
	<div id="floatright" style="position: absolute; z-index: 10; "></div>

	<!-- 晋中城区分局首页开始 -->
	<!-- 顶部内容 -->
	<div class="index_header" style="height:200px;">
	   <param name="movie" value="/public/vivo/cqdh.swf">
   <param name="wmode" value="opaque">
   <param name="quality" value="high" />
		<embed height="200" width="100%" src="/public/vivo/cqdh.swf" type="application/x-shockwave-flash" >
	<!-- 	<img src="/public/images/index_logo.jpg" alt="">
	<img src="/public/images/index_logo.jpg" alt=""> -->
	</div>
	<!-- 导航栏 -->
	<div class="index_nav"  style="margin-top: 10px; width: 1000px;margin:0 auto;" id="index_navnei_ie">
		<div class="index_navnei" style="margin-top: 10px;" >
			<a href="/index.php" class="index_lianjie" >网站首页</a>
			<a href="/index.php/Listtype/index" class="index_lianjie" >分局动态</a>
			<a href="/index.php/Listtype/index/typeId/5" class="index_lianjie" >通知通报</a>
			<a href="http://gwcs.gat.sx/ " class="index_lianjie" >公文传输</a>
			<a href="http://10.94.64.47//ASJGL/index_shanxi.jsp" class="index_lianjie" >警综平台</a>
			<a href="/index.php/Listtype/index/typeId/11" class="index_lianjie" >信息简报</a>
			<a href="http://10.97.145.188/"  class="index_lianjie">进入旧版</a>
			<!-- <a href="" class="index_lianjie">值班表</a>  -->
		  	<form  name="frm" action="/index.php/Listtype/search.html" method="post" onsubmit="return checkSearch()" >
			<input type="text" placeholder="" required="required" name="keyword" size="25px"  class="key">           
			   <input type="submit" value="提交" style="display:none"/>
            </form>
            &nbsp;&nbsp;&nbsp;
         
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
			
			</script>
		
		</div>
	</div>
	<!-- 天气预报d02800 --> 
			<div style="margin-top: 5px;"></div>
	<div  style="background-color: #e51f1f; height: 30px;width: 1000px;margin:0 auto;" >
<div id="tianqinei" style="border-color: 1px solid red; margin: 0px auto; height: 30px; line-height: 30px; font-family: sans-serif;color: #fff;" >
	今日值班表 &nbsp;&nbsp;&nbsp;日期:<?php echo ($duty["0"]["date"]); ?> &nbsp; &nbsp; &nbsp;&nbsp;局领导:<?php echo ($duty["0"]["name"]); ?>  &nbsp;&nbsp;&nbsp;总值班:<?php echo ($duty["0"]["zname"]); ?>&nbsp;&nbsp;&nbsp;&nbsp;法治室:<?php echo ($duty["0"]["fname"]); ?>  &nbsp;&nbsp;&nbsp;办公室:<?php echo ($duty["0"]["bname"]); ?>	
</div>

</div> 

	<!-- 内容部分 -->
	<div class="index_content" style="background-color: #fff;">
		<div class="index_contentnei">
		<!-- 层级轮播部分开始 -->
		 			<!-- <div id="cj_banner_list"> 
				  		<img src="/public/images/cov.png" height="60px" width="1000px">
				    </div> -->
			
		<!-- 层级轮播部分结束 -->
		<div class="countent">
		<!-- 第一部分 -->
			<div class="index_one" style="height: 490px;">
				<div class="index_oneleft">
					<div class="onelefttop">
					
						<span class="index_tpyw2"><img src="/public/images/tupian.png"></span>
						
					</div>
					<!-- 左右切换轮播图 -->
					<div class="oneleftbottom">
						<div class="bannerbox">
							<div class="innerbanner">
						
							<?php if(is_array($tpyw)): $i = 0; $__LIST__ = $tpyw;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><a href="/index.php/News/index/id/<?php echo ($v["id"]); ?>" class="banneritem" style="z-index:2">
									<img src="/public/<?php echo ($v["imagepath"]); ?>" alt="">
									
								</a><?php endforeach; endif; else: echo "" ;endif; ?>
							</div>
							<div class="btnbox">
								<div class="btn active">1</div>
								<div class="btn">2</div>
								<div class="btn">3</div>
								<div class="btn">4</div>
								<div class="btn">5</div>
							</div>
							<div class="prev arrow">
								&lt;
							</div>
							<div class="next arrow">
								&gt;
							</div>
						</div>
					</div>
				</div>
				
				
			</div>
	
		<div style="width: 120px;margin-left: 67%;height: 480px;margin-top: -48%;" >

							<?php if(is_array($tpyw)): $i = 0; $__LIST__ = $tpyw;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><a href="/index.php/News/index/id/<?php echo ($v["id"]); ?>" style="margin-top: 5px;" ><img src="/public/<?php echo ($v["imagepath"]); ?>" width="110px" height="80px" style="margin-top: 12px;border: 1px solid red;"></a><?php endforeach; endif; else: echo "" ;endif; ?>
				</div>
				
				
				<div style="width:200px;height: 480px; float: right;margin-top: -48%;"> 
				<img src="/public/images/20170801_06.jpg" alt="公安要闻">
					
					
				
								<?php if(is_array($gayw)): $i = 0; $__LIST__ = $gayw;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><div class="indexycxx">
									<a href="/index.php/News/index/id/<?php echo ($v["id"]); ?>" class="iewei">
										
										<span class="ycxx02"><?php echo (msubstr($v["title"],0,10)); ?></span>
										<span style="float: right;"> <?php if($date <= $v['time']): ?><img src="/public/vivo/new3.gif" alt="" /><?php endif; ?>	</span>
									</a>					
								</div><?php endforeach; endif; else: echo "" ;endif; ?>
				<img src="/public/images/20170801_11.jpg" alt="公安要闻">
					
					
				
								<?php if(is_array($zgsd)): $i = 0; $__LIST__ = $zgsd;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><div class="indexycxx">
									<a href="/index.php/News/index/id/<?php echo ($v["id"]); ?>" class="iewei">
										
										<span class="ycxx02"><?php echo (msubstr($v["title"],0,10)); ?></span>
								<span style="float: right;"> <?php if($date <= $v['time']): ?><img src="/public/vivo/new3.gif" alt="" /><?php endif; ?>	</span>	
									</a>					
								</div><?php endforeach; endif; else: echo "" ;endif; ?>
				<img src="/public/images/20170801_15.jpg" alt="公安要闻">
								
								<?php if(is_array($hytz)): $i = 0; $__LIST__ = $hytz;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><div class="indexycxx">
									<a href="/index.php/News/index/id/<?php echo ($v["id"]); ?>" class="iewei">
										
										<span class="ycxx02"><?php echo (msubstr($v["title"],0,10)); ?></span>
										<span style="float: right;"> <?php if($date <= $v['time']): ?><img src="/public/vivo/new3.gif" alt="" /><?php endif; ?>	</span>	
									</a>	

						
								</div><?php endforeach; endif; else: echo "" ;endif; ?>
								</div>
								<div style="clear:both"></div>

				<div id="cj_banner_list"> 
				  		<img src="/public/images/cov.png" height="60px" width="1000px">
				    </div>
				
			<!-- <embed height="129px"  width="1000px" src="/public/vivo/wzby.swf" type="application/x-shockwave-flash" ></embed> -->
			<div class="index_four">
				<div class="index_fourleft">
					<div class="foutlefttop">
						<div class="foutlefttopz">
							<img src="/public/images/20170801_19.jpg" alt="">
						</div>
						<div>
							<img src="/public/images/tong_1.png"   class="tong lrc_tz" style="margin-top: 10px;" alt="通知">
							<img src="/public/images/bao_1.png"  class="bao lrc_tz" style="margin-top: 10px;margin-left: 10px;">
						   <a href="/index.php/Listtype/index/typeId/5"></a>
 						   	

						</div>
						<div style="clear:both"></div>
					</div>
					<!-- 定位内容 -->
					<div class="fbottoom">
						<div class="lfoutleftbottom lrc_tz01" style="display:block">
						<!-- 通知 -->
						<?php if(is_array($tz)): $i = 0; $__LIST__ = $tz;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><div class="tztbcontent">
							
							<div class="sanjiaorighr">
								<a href="/index.php/News/index/id/<?php echo ($v["id"]); ?>"><?php echo (msubstr($v["title"],0,10)); ?> 
								</a>
                     <!--  <span style="float: right;"><?php echo ($v["date"]); ?></span> -->
							
							 	
							</div>
							
							<div class="index_date">

							<div style="display: inline;"><?php echo ($v["date"]); ?>&nbsp;&nbsp;&nbsp;&nbsp;
							 <?php if($date <= $v['time']): ?><img src="/public/vivo/new3.gif" alt="" /><?php endif; ?></div>
				
				</div>
						</div><?php endforeach; endif; else: echo "" ;endif; ?>
						</div>
						<div class="foutleftbottom lrc_tz01">
						<!--通报  -->
						<?php if(is_array($tb)): $i = 0; $__LIST__ = $tb;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><div class="tztbcontent">
							<div ></div>
							<div class="sanjiaorighr">
								<a href="/index.php/News/index/id/<?php echo ($v["id"]); ?>"><?php echo (msubstr($v["title"],0,10)); ?> 
								</a>
                     

							</div>
							
							<div class="index_date">

							<div style="display: inline;"><?php echo ($v["date"]); ?>&nbsp;&nbsp;&nbsp;&nbsp;
							 <?php if($date <= $v['time']): ?><img src="/public/vivo/new3.gif" alt="" /><?php endif; ?></div>
				
				</div>
							
						</div><?php endforeach; endif; else: echo "" ;endif; ?>
						
						
						
						
						</div>
					</div>	
					<!-- 定位内容 -->
				</div>
				<div class="index_fourright">
					<div class="foutlefttop">
						<div class="foutlefttopz">
							<img src="/public/images/20170801_21.jpg" alt="">
						</div>
						<div>
							<img src="/public/images/mei_1.png" class="mei lrc_jq" style="margin-top: 10px;" alt="通知">
							<img src="/public/images/jing_1.png" class="jing lrc_jq" style="margin-top: 10px;margin-left: 10px;">
						   <a href="/index.php/Listtype/index/typeId/7"></a>
							
						</div>
						<div style="clear:both"></div>		
					</div>
					<!-- 定位内容 -->
					<div class="fbottoom">
						<div class="foutleftbottom lrc_tz02" style="display:block">
						<!-- 每日警情 -->
						<?php if(is_array($mrjq)): $i = 0; $__LIST__ = $mrjq;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><div class="tztbcontent">
							<div ></div>
							<div class="sanjiaorighr">
								<a href="/index.php/News/index/id/<?php echo ($v["id"]); ?>"><?php echo (msubstr($v["title"],0,10)); ?> 
								</a>
                    
							

							</div>
								
							<div class="index_date">

							<div style="display: inline;"><?php echo ($v["date"]); ?>&nbsp;&nbsp;&nbsp;&nbsp;
							 <?php if($date <= $v['time']): ?><img src="/public/vivo/new3.gif" alt="" /><?php endif; ?></div>
				
				</div>
							
						</div><?php endforeach; endif; else: echo "" ;endif; ?>
					
						</div>
						<div class="foutleftbottom lrc_tz02">
						<?php if(is_array($jqyp)): $i = 0; $__LIST__ = $jqyp;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><div class="tztbcontent">
							<div ></div>
							<div class="sanjiaorighr">
								<a href="/index.php/News/index/id/<?php echo ($v["id"]); ?>"><?php echo (msubstr($v["title"],0,10)); ?> 
								</a>
                    		

							</div>
								
							<div class="index_date">

							<div style="display: inline;"><?php echo ($v["date"]); ?>&nbsp;&nbsp;&nbsp;&nbsp;
							 <?php if($date <= $v['time']): ?><img src="/public/vivo/new3.gif" alt="" /><?php endif; ?></div>
				
				</div>
							
						</div><?php endforeach; endif; else: echo "" ;endif; ?>
						</div>
					</div>
					<!-- 定位内容 -->
				</div>
			</div>
		<!-- 第五部分 -->
			<div class="index_four" style="margin-top:20px">
				<div class="index_fourleft">
					<div class="foutlefttop">
						<div class="foutlefttopz">
							<img src="/public/images/20170801_25.jpg" alt="">
						</div>
						<div>
						<img src="/public/images/suo_1.png" class="suo lrc_sdjl" style="margin-top: 10px;" alt="通知">
							<img src="/public/images/gong_1.png" class="gong lrc_sdjl" style="margin-top: 10px;margin-left: 10px;">
						   <a href="/index.php/Listtype/index/typeId/9"></a>
						
						</div>
						<div style="clear:both"></div>
					</div>
					<!-- 定位内容 -->
					<div class="fbottoom">
						<div class="foutleftbottom lrc_tz03" style="display:block">
						<!--所队动态  -->
						<?php if(is_array($sdgt)): $i = 0; $__LIST__ = $sdgt;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><div class="tztbcontent">
							<div ></div>
							<div class="sanjiaorighr">
								<a href="/index.php/News/index/id/<?php echo ($v["id"]); ?>"><?php echo (msubstr($v["title"],0,10)); ?> 
								</a>
                    
							

							</div>
								
							<div class="index_date">

							<div style="display: inline;"><?php echo ($v["date"]); ?>&nbsp;&nbsp;&nbsp;&nbsp;
							 <?php if($date <= $v['time']): ?><img src="/public/vivo/new3.gif" alt="" /><?php endif; ?></div>
				
				</div>
							
						</div><?php endforeach; endif; else: echo "" ;endif; ?>
						</div>
						<div class="foutleftbottom lrc_tz03">
						<!-- 工作交流 -->
						<?php if(is_array($gzjl)): $i = 0; $__LIST__ = $gzjl;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><div class="tztbcontent">
							<div ></div>
							<div class="sanjiaorighr">
								<a href="/index.php/News/index/id/<?php echo ($v["id"]); ?>"><?php echo (msubstr($v["title"],0,10)); ?> 
								</a>
                     

							</div>
								
							<div class="index_date">

							<div style="display: inline;"><?php echo ($v["date"]); ?>&nbsp;&nbsp;&nbsp;&nbsp;
							 <?php if($date <= $v['time']): ?><img src="/public/vivo/new3.gif" alt="" /><?php endif; ?></div>
				
				</div>
							
						</div><?php endforeach; endif; else: echo "" ;endif; ?>
						</div>
					</div>
					<!-- 定位内容 -->
				</div>
				<div class="index_fourright">
					<div class="foutlefttop">
						<div class="foutlefttopz">
							<img src="/public/images/20170801_27.jpg" alt="">
						</div>
						<div>
						<img src="/public/images/xin_1.png"  class=" lrc_xxjb" style="margin-top: 10px;" alt="通知">
							<a href="/index.php/Division/index/"><img src="/public/images/bu_1.png"  style="margin-top: 10px;margin-left: 10px;"></a>
						   <a href="/index.php/Listtype/index/typeId/11"></a>
							
						</div>
						<div style="clear:both"></div>		
					</div>
					<!-- 定位内容 -->
					<div class="fbottoom">
						<div class="foutleftbottom lrc_tz04" style="display:block">
						<!-- 信息简报 -->
						<?php if(is_array($xxjb)): $i = 0; $__LIST__ = $xxjb;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><div class="tztbcontent">
							<div ></div>
							<div class="sanjiaorighr">
								<a href="/index.php/News/index/id/<?php echo ($v["id"]); ?>"><?php echo (msubstr($v["title"],0,10)); ?> 
								</a>
                      

							</div>
								
							<div class="index_date">

							<div style="display: inline;"><?php echo ($v["date"]); ?>&nbsp;&nbsp;&nbsp;&nbsp;
							 <?php if($date <= $v['time']): ?><img src="/public/vivo/new3.gif" alt="" /><?php endif; ?></div>
				
				</div>
							
						</div><?php endforeach; endif; else: echo "" ;endif; ?>
						</div>

					</div>
					<!-- 定位内容 -->
				</div>
			</div>
			<!-- 第六部分 -->
			<div class="index_four" style="margin-top:20px">
				<div class="index_fourleft">
					<div class="foutlefttop">
						<div class="foutlefttopz">
							<img src="/public/images/20170801_30.jpg" alt="">
						</div>
						<div>
						<img src="/public/images/men_01.png" class="men lrc_dwjs" style="margin-top: 10px;" alt="通知">
							<img src="/public/images/zhong_1.png" class="zhong lrc_dwjs" style="margin-top: 10px;margin-left: 10px;">
						   <a href="/index.php/Listtype/index/typeId/13"></a>
							
						</div>
						<div style="clear:both"></div>
					</div>
					<!-- 定位内容 -->
					<div class="fbottoom">
						<div class="foutleftbottom lrc_tz05" style="display:block">
						<!--部门动态  -->
						<?php if(is_array($bmdt)): $i = 0; $__LIST__ = $bmdt;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><div class="tztbcontent">
							<div ></div>
							<div class="sanjiaorighr">
								<a href="/index.php/News/index/id/<?php echo ($v["id"]); ?>"><?php echo (msubstr($v["title"],0,10)); ?> 
								</a>
                      
							

							</div>
								
							<div class="index_date">

							<div style="display: inline;"><?php echo ($v["date"]); ?>&nbsp;&nbsp;&nbsp;&nbsp;
							 <?php if($date <= $v['time']): ?><img src="/public/vivo/new3.gif" alt="" /><?php endif; ?></div>
				
				</div>
							
						</div><?php endforeach; endif; else: echo "" ;endif; ?>
						</div>
						<div class="foutleftbottom lrc_tz05">
						<!-- 重点工作 -->
						<?php if(is_array($zds)): $i = 0; $__LIST__ = $zds;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><div class="tztbcontent">
							<div ></div>
							<div class="sanjiaorighr">
								<a href="/index.php/News/index/id/<?php echo ($v["id"]); ?>"><?php echo (msubstr($v["title"],0,10)); ?> 
								</a>
                   
							

							</div>
								
							<div class="index_date">

							<div style="display: inline;"><?php echo ($v["date"]); ?>&nbsp;&nbsp;&nbsp;&nbsp;
							 <?php if($date <= $v['time']): ?><img src="/public/vivo/new3.gif" alt="" /><?php endif; ?></div>
				
				</div>
							
						</div><?php endforeach; endif; else: echo "" ;endif; ?>
						</div>
					</div>
					<!-- 定位内容 -->
				</div>
				 <div class="index_fourright">
					<div class="foutlefttop">
						<div class="foutlefttopz">
							<img src="/public/images/20170801_36.jpg" alt="">
						</div>
						<div>
						
						  <a href="/index.php/Listtype/index/typeId/19"> <img src="/public/images/more1.png" style="margin-left: 215px;margin-top: 25px;"></a>
							
						</div>
						<div style="clear:both"></div>		
					</div>
				<!-- 	定位内容 -->
					<div class="foutleftbottom01">
					
						<img src="/public/images/cqzxbj.jpg" alt="" style=" opacity: 0.2;">
					
						<div class="index_ding">
						
						<a href="/index.php/News/cqzx/id/<?php echo ($cqzx["0"]["id"]); ?>"><img src="/public/<?php echo ($cqzx["0"]["imagepath"]); ?>" alt=""></a>
						</div>
						
					</div>
					
					<!-- 定位内容 -->
				</div> 
			</div>
			<br />
			<embed height="129px"  width="1000px" src="/public/vivo/wzby.swf" type="application/x-shockwave-flash" ></embed>
			<!-- 第七部分 -->
			<div class="index_four" style="margin-top:20px"> 
				<div class="index_fourleft">
					<div class="foutlefttop">
						<div class="foutlefttopz">
							<img src="/public/images/20170801_35.jpg" alt="">
						</div>
						<div>
					<img src="/public/images/zheng_1.png" class="zheng lrc_zdfw" style="margin-top: 10px;" alt="通知">
							<img src="/public/images/dang_1.png" class="dang lrc_zdfw" style="margin-top: 10px;margin-left: 10px;">
						   <a href="/index.php/Listtype/index/typeId/17"></a>
							
						</div>
						<div style="clear:both"></div>
					</div>
					<!-- 定位内容 -->
					<div class="fbottoom">
						<div class="foutleftbottom lrc_tz06" style="display:block">
						<!-- 政工之窗 -->
						<?php if(is_array($zgzc)): $i = 0; $__LIST__ = $zgzc;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><div class="tztbcontent">
							<div ></div>
							<div class="sanjiaorighr">
								<a href="/index.php/News/index/id/<?php echo ($v["id"]); ?>"><?php echo (msubstr($v["title"],0,10)); ?> 
								</a>
                   
							

							</div>
								
							<div class="index_date">

							<div style="display: inline;"><?php echo ($v["date"]); ?>&nbsp;&nbsp;&nbsp;&nbsp;
							 <?php if($date <= $v['time']): ?><img src="/public/vivo/new3.gif" alt="" /><?php endif; ?></div>
				
				</div>
							
						</div><?php endforeach; endif; else: echo "" ;endif; ?>
						</div>
						<div class="foutleftbottom lrc_tz06">
						<!-- 党风廉政 -->
						<?php if(is_array($dflz)): $i = 0; $__LIST__ = $dflz;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><div class="tztbcontent">
							<div ></div>
							<div class="sanjiaorighr">
								<a href="/index.php/News/index/id/<?php echo ($v["id"]); ?>"><?php echo (msubstr($v["title"],0,10)); ?> 
								</a>
                      

							</div>
								
							<div class="index_date">

							<div style="display: inline;"><?php echo ($v["date"]); ?>&nbsp;&nbsp;&nbsp;&nbsp;
							 <?php if($date <= $v['time']): ?><img src="/public/vivo/new3.gif" alt="" /><?php endif; ?></div>
				
				</div>
							
						</div><?php endforeach; endif; else: echo "" ;endif; ?>
						</div>
					</div>
					<!-- 定位内容 -->
				</div>
				<div class="index_fourright">
					<div class="foutlefttop">
						<div class="foutlefttopz">
							<img src="/public/images/20170801_31.jpg" alt="">
						</div>
						<div>
						<img src="/public/images/zhi_1.png" class="zhi lrc_jqyz" style="margin-top: 10px;" alt="通知">
							<img src="/public/images/an_1.png" class="an lrc_jqyz" style="margin-top: 10px;margin-left: 10px;">
						   <a href="/index.php/Listtype/index/typeId/15"></a>
							
						</div>
						<div style="clear:both"></div>		
					</div>
					<!-- 定位内容 -->
					<div class="fbottoom">
						<div class="foutleftbottom lrc_tz07" style="display:block">
						<!-- 执法指导 -->
						<?php if(is_array($zfzd)): $i = 0; $__LIST__ = $zfzd;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><div class="tztbcontent">
							<div ></div>
							<div class="sanjiaorighr">
								<a href="/index.php/News/index/id/<?php echo ($v["id"]); ?>"><?php echo (msubstr($v["title"],0,10)); ?> 
								</a>
                     
							

							
							<div class="index_date">

							<div style="display: inline;"><?php echo ($v["date"]); ?>&nbsp;&nbsp;&nbsp;&nbsp;
							 <?php if($date <= $v['time']): ?><img src="/public/vivo/new3.gif" alt="" /><?php endif; ?></div>
				
				</div>
							
						</div><?php endforeach; endif; else: echo "" ;endif; ?>
						</div>
						<div class="foutleftbottom lrc_tz07">
						<!-- 案件评查 -->
						<?php if(is_array($ajpc)): $i = 0; $__LIST__ = $ajpc;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><div class="tztbcontent">
							<div ></div>
							<div class="sanjiaorighr">
								<a href="/index.php/News/index/id/<?php echo ($v["id"]); ?>"><?php echo (msubstr($v["title"],0,10)); ?> 
								</a>
                     
							

							</div>
								
							<div class="index_date">

							<div style="display: inline;"><?php echo ($v["date"]); ?>&nbsp;&nbsp;&nbsp;&nbsp;
							 <?php if($date <= $v['time']): ?><img src="/public/vivo/new3.gif" alt="" /><?php endif; ?></div>
				
				</div>
						</div><?php endforeach; endif; else: echo "" ;endif; ?>
						</div>
					</div>
					<!-- 定位内容 -->
				</div>
			</div>
				<div class="index_four" style="margin-top:20px"> 
				<div class="index_fourleft">
					<div class="foutlefttop">
						<div class="foutlefttopz">
							<img src="/public/images/20170801_39.jpg" alt="">
						</div>
						<div>
					<img src="/public/images/ling_1.png" class="ling lrc_ldjh" style="margin-top: 10px;" alt="通知">
							<img src="/public/images/xue_1.png" class="xue lrc_ldjh" style="margin-top: 10px;margin-left: 10px;">
						 <a href="/index.php/Listtype/index/typeId/20">  </a>
							
						</div>
						<div style="clear:both"></div>
					</div>
					<!-- 定位内容 -->
					<div class="fbottoom">
						<div class="foutleftbottom lrc_tz09" style="display:block">
						<!--领导讲话  -->
						<?php if(is_array($ldjh)): $i = 0; $__LIST__ = $ldjh;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><div class="tztbcontent">
							<div ></div>
							<div class="sanjiaorighr">
								<a href="/index.php/News/index/id/<?php echo ($v["id"]); ?>"><?php echo (msubstr($v["title"],0,10)); ?> 
								</a>
                     
							

							</div>
							
							<div class="index_date">

							<div style="display: inline;"><?php echo ($v["date"]); ?>&nbsp;&nbsp;&nbsp;&nbsp;
							 <?php if($date <= $v['time']): ?><img src="/public/vivo/new3.gif" alt="" /><?php endif; ?></div>
				
				</div>
							
						</div><?php endforeach; endif; else: echo "" ;endif; ?>
						
						</div>
						<div class="foutleftbottom lrc_tz09">
						<!-- 学习园地 -->
						<?php if(is_array($xxyd)): $i = 0; $__LIST__ = $xxyd;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><div class="tztbcontent">
							<div ></div>
							<div class="sanjiaorighr">
								<a href="/index.php/News/index/id/<?php echo ($v["id"]); ?>"><?php echo (msubstr($v["title"],0,10)); ?> 
								</a>
                    
							

							</div>
							
							<div class="index_date">

							<div style="display: inline;"><?php echo ($v["date"]); ?>&nbsp;&nbsp;&nbsp;&nbsp;
							 <?php if($date <= $v['time']): ?><img src="/public/vivo/new3.gif" alt="" /><?php endif; ?></div>
				
				</div>
							
						</div><?php endforeach; endif; else: echo "" ;endif; ?>
						</div>
					</div>
					<!-- 定位内容 -->
				</div>
				<div class="index_fourright">
					<div class="foutlefttop">
						<div class="foutlefttopz">
							<img src="/public/images/20170801_40.jpg" alt="">
						</div>
						<div>
						<img src="/public/images/ying_1.png" class="ying lrc_xwzx" style="margin-top: 10px;" alt="通知">
							<img src="/public/images/wen_1.png"  class="wen lrc_xwzx" style="margin-top: 10px;margin-left: 10px;">
						   <a href="/index.php/Listtype/index/typeId/22"></a>
							
						</div>
						<div style="clear:both"></div>		
					</div>
					<!-- 定位内容 -->
					<div class="fbottoom">
						<div class="foutleftbottom lrc_tz10" style="display:block">
						<!-- 警营驿站  -->
						<?php if(is_array($jyyz)): $i = 0; $__LIST__ = $jyyz;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><div class="tztbcontent">
							<div ></div>
							<div class="sanjiaorighr">
								<a href="/index.php/News/index/id/<?php echo ($v["id"]); ?>"><?php echo (msubstr($v["title"],0,10)); ?> 
								</a>
                     
							

							</div>
								
							<div class="index_date">

							<div style="display: inline;"><?php echo ($v["date"]); ?>&nbsp;&nbsp;&nbsp;&nbsp;
							 <?php if($date <= $v['time']): ?><img src="/public/vivo/new3.gif" alt="" /><?php endif; ?></div>
				
				</div>
							
						</div><?php endforeach; endif; else: echo "" ;endif; ?>
						</div>
						<div class="foutleftbottom lrc_tz10">
						<!-- 新闻资讯 -->
						<?php if(is_array($xwzx)): $i = 0; $__LIST__ = $xwzx;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><div class="tztbcontent">
							<div ></div>
							<div class="sanjiaorighr">
								<a href="/index.php/News/index/id/<?php echo ($v["id"]); ?>"><?php echo (msubstr($v["title"],0,10)); ?> 
								</a>
                      
							

							</div>
								
							<div class="index_date">

							<div style="display: inline;"><?php echo ($v["date"]); ?>&nbsp;&nbsp;&nbsp;&nbsp;
							 <?php if($date <= $v['time']): ?><img src="/public/vivo/new3.gif" alt="" /><?php endif; ?></div>
				
				</div>
						</div><?php endforeach; endif; else: echo "" ;endif; ?>
						</div>
					</div>
					<!-- 定位内容 -->
				</div>
			</div>
		
	
		<br />
							<div class="zhuanxiang" >
		<img src="/public/<?php echo ($zxtp["imagepath"]); ?>">&nbsp;&nbsp;&nbsp;
	 <a href="/index.php/Listtype/index/typeId/35"><img src="/public/vivo/jywh1.png" alt=""  />&nbsp;&nbsp;&nbsp;</a>
	<a href="/index.php/Listtype/index/typeId/36"><img src="/public/vivo/lxyz1.png" alt="" /> &nbsp;&nbsp;&nbsp;</a>
	<a href="/index.php/Listtype/index/typeId/37"><img src="/public/vivo/sqjw1.png" alt="" /> &nbsp;&nbsp;&nbsp;</a>
	<a href="/index.php/Listtype/index/typeId/38"><img src="/public/vivo/zfgf1.png" alt="" /> &nbsp;&nbsp;&nbsp;</a>
	<a href="/index.php/Listtype/index/typeId/18"><img src="/public/vivo/dflz1.png" alt="" /> &nbsp;&nbsp;&nbsp;</a>
	<a href="/index.php/Listtype/index/typeId/40"><img src="/public/vivo/xdzt1.png" alt="" /> </a>
	
		</div>
			
		<hr style="height:2px; background-color:red; color:red;">
	
			<!-- 后加轮播图 -->
			<!-- <div class="zhanshi">
				<img src="/public/images/20170801_45.jpg">
				
			</div>
			<div class="xian2"></div> -->
			
			
			
			
			
			<div class="hjlb">
				
				<div class="hj_lun">
		<div class="hj_itembox">
			
			<?php if(is_array($tpzs)): $i = 0; $__LIST__ = $tpzs;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><div class="hj_item">
				<a href="/index.php/News/index/id/<?php echo ($v["id"]); ?>" class="hj_item1">
					<img src="/public/<?php echo ($v["imagepath"]); ?>" alt="">
				</a>
			</div><?php endforeach; endif; else: echo "" ;endif; ?>
		</div>
		<div class="hj_prev">&lt</div>
		<div class="hj_next">&gt</div>
	</div>
			</div>
			
		
		<!-- 视频 -->
		<div class="zhanshi">
				<img src="/public/images/2017.jpg">
				
			</div>
			<!-- <div class="xian2"></div> -->
			
		<hr style="height:2px; background-color:red;color:red;">
	
			
			
			
			
			<div class="hlb" style="margin-left:1.5%;">
				<a href="#"><div style=" width:30%;height:200px;margin:0px 1%; float: left; border: 1px solid #ccc;" id="flashvideocontainer"> 
					<img src="/public/images/191.jpg" alt="" width="100%" height="100%" onclick="bofang();" />
			
					</div>	
						</a>
				<a href="#"><div style="width:30%;margin:0px 1%; height:200px; float: left; border: 1px solid #ccc;" >
				<img src="/public/images/192.jpg" alt=""  width="100%" height="100%" onclick="bofangs();" />
					
					</div>
</a>
					<a href="#">
					<div style=" width:30%;margin:0px 1%;height:200px; float: left; border: 1px solid #ccc;" >
					<img src="/public/images/193.jpg" alt="" width="100%" height="100%" onclick="bofangd();" />
					</div>
					</a>	
			</div><br />
			<script>
				function bofang(){
					window.location.href="/index.php/News/bofang";
				}
				function bofangs(){
					window.location.href="/index.php/News/bofangs";
				}
				function bofangd(){
					window.location.href="/index.php/News/bofangd";
				}
			</script>

		
	  <div class="div" style="width: 100%;">
			<div class="ttl"  >
                    <ul id="tltt">

                        <li onmousemove="ttlOn(0);" class="default">常用信息查询</li>
                        <li onmousemove="ttlOn(1);" class="default">应用系统</li>
                        <li onmousemove="ttlOn(2);" class="default">全国导航</li>
                        <li onmousemove="ttlOn(3);" class="default">全省导航</li>
                        <li onmousemove="ttlOn(4);" class="default">全市导航</li>
                        <li onmousemove="ttlOn(5);" class="default">本局导航</li> 
                    </ul>
                </div>
                <div style="clear: both; font-size: 0; line-height: 0;width: 100%;" ></div>
                <div style="height: 240px;width: 99.4%;" id="ctn" >
                    <div class="titt_now">

                        <ul class="gxjzxxBottom1">
                        <?php if(is_array($rjld3)): $i = 0; $__LIST__ = $rjld3;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><a href="<?php echo ($v["attach"]); ?>" target="_blank" title="<?php echo ($v["tname"]); ?>"><li><?php echo ($v["tname"]); ?></li></a><?php endforeach; endif; else: echo "" ;endif; ?>
                        </ul>
                    </div>
					  <div>

                        <ul class="gxjzxxBottom1">
                        <?php if(is_array($rjld4)): $i = 0; $__LIST__ = $rjld4;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><a href="<?php echo ($v["attach"]); ?>" target="_blank" title="<?php echo ($v["tname"]); ?>"><li><?php echo ($v["tname"]); ?></li></a><?php endforeach; endif; else: echo "" ;endif; ?>
                        </ul>
                    </div>
                	<div>

                        <ul class="gxjzxxBottom2">
                        <?php if(is_array($sjld)): $i = 0; $__LIST__ = $sjld;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><a href="<?php echo ($v["attach"]); ?>" target="_blank" title="<?php echo ($v["tname"]); ?>"> <li><?php echo ($v["tname"]); ?></li></a><?php endforeach; endif; else: echo "" ;endif; ?>
                        </ul>
                    </div>
                    <div>

                        <ul class="gxjzxxBottom2">
                        <?php if(is_array($sjld1)): $i = 0; $__LIST__ = $sjld1;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><a href="<?php echo ($v["attach"]); ?>" target="_blank" title="<?php echo ($v["tname"]); ?>"><li><?php echo ($v["tname"]); ?></li></a><?php endforeach; endif; else: echo "" ;endif; ?>
                        </ul>
                    </div>
                    <div>

                        <ul class="gxjzxxBottom2">
                        <?php if(is_array($sjld2)): $i = 0; $__LIST__ = $sjld2;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><a href="<?php echo ($v["attach"]); ?>" target="_blank" title="<?php echo ($v["tname"]); ?>"><li><?php echo ($v["tname"]); ?></li></a><?php endforeach; endif; else: echo "" ;endif; ?>
                        </ul>
                    </div>
                    </div>
       <script>
       		var lobj = document.getElementById('tltt').getElementsByTagName('li');
       		var dobj = document.getElementById('ctn').getElementsByTagName('div');
       		function ttlOn(id){
       			for(var i=0;i<=lobj.length;i++){
       				if(i==id){
       					lobj[i].className="tid";
       					dobj[i].className="titt_now"
       				}else{
       					lobj[i].className="now";
       					dobj[i].className="now";
       				}
       			}
       		}
       </script>
	  </div>
	 
</div>


<!-- 	<div class="zhuanxiang" style="margin-top: 15px;">
	<img src="/public/<?php echo ($zxtp["imagepath"]); ?>">&nbsp;&nbsp;&nbsp;
 <img src="/public/vivo/jywh1.png" alt="" />&nbsp;&nbsp;&nbsp;
<img src="/public/vivo/lxyz1.png" alt="" />&nbsp;&nbsp;&nbsp;
<img src="/public/vivo/sqjw1.png" alt="" />&nbsp;&nbsp;&nbsp;
<img src="/public/vivo/zfgf1.png" alt="" />&nbsp;&nbsp;&nbsp;
<img src="/public/vivo/dflz1.png" alt="" />&nbsp;&nbsp;&nbsp;
<img src="/public/vivo/xdzt1.png" alt="" />

	</div>	 -->

	
<!-- 	<div class="huodong_tu"><br />
//专项活动	
<?php if(is_array($zxhd)): $i = 0; $__LIST__ = $zxhd;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><a href="/index.php/News/index/id/<?php echo ($v["id"]); ?>">
 <img src="/public/<?php echo ($v["imagepath"]); ?>" width="240" height="200" style="margin-left:4px;"></a><?php endforeach; endif; else: echo "" ;endif; ?>
</div>	 -->
	<div class="huixian">
		<hr style="height:2px; color:#e51f1f;">
	</div>	 
				
					
			<script src="/library/js/jquery-1.11.3.min.js"></script>
<script src="/library/js/Popt.js"></script>
<script src="/library/js/cityJson.js"></script>
<script src="/library/js/citySet.js"></script>			

	<!-- 底部部分 -->
	<div class="index_bottom">
	
	晋中市管理城区分局 网站技术支持：指挥中心 信息维护：办公室 联系电话：0354-2416590<a href="/admin.php">网站后台登陆</a> 
		 
		
	</div>
	<br />
	<!-- 晋中城区分局首页结束 -->
	</div>
</div>
		</div>

	<!-- 视频 -->
	
<!-- 	<img src="/public/images/xinxiziyuan.png" style="width:100%">
  --> 
 <!-- 	<span class="xitong1"><a href="#">常用信息查询系统</a></span>
	<span class="xitong2"><a href="#">应用系统</a></span>
	<span class="xitong3"><a href="javascript:vivo(0)"  id="city">网际导航</a></span>
	 -->

	 <script>
  $(function(){
	var mainMenu = $("#nav>li");
	var firstMenu = $("ul.firstChild>li")
	var firstChild = $("ul.firstChild");
	var firstChilde = $("ul.firstChilde");
	var secondChild = $("ul.secondChild");
	mainMenu.hover(function(){
		$(this).children(firstChild).stop(true,true).slideDown();					
	},function(){
		$(this).children(firstChild).stop(true,true).slideUp();
	})
	firstMenu.hover(function(){
		$(this).children(secondChild).stop(true,true).slideDown();					
	},function(){
		$(this).children(secondChild).stop(true,true).slideUp();
	})
})  
</script>

</body>
</html>
<script>
	// 第一个飘窗
var dirX =1,dirY =1;
var posX =0,posY =0;
document.getElementById("float_icon").style.top =0;
document.getElementById("float_icon").style.left =0;
float_icon.style.visibility ="visible";
var tingzhi=window.setInterval("moveIcon()",50);
function moveIcon(){
	posX +=(2 *dirX);posY +=(2 *dirY);
	$("#float_icon").css("top",posY);$("#float_icon").css("left",posX);
	if(posX < 1 ||posX + document.getElementById("float_icon").offsetWidth >$(window).width()){
			dirX =-dirX;
		}
	if(posY < 1 ||posY + document.getElementById("float_icon").offsetHeight+5 >$(window).height()){
			dirY =-dirY;
		} 
	}
	$("#float_icon").mouseover(function(){
		 clearInterval(tingzhi)
	})
	$("#float_icon").mouseout(function(){
		 tingzhi=window.setInterval("moveIcon()",50);
	})
	$(".close").click(function(){
		$("#float_icon").remove()
	})
// 第二个飘窗
var dirX2 =1,dirY2 =1;
var posX2 =0,posY2 =0;
document.getElementById("float_icon2").style.top =0;
document.getElementById("float_icon2").style.right =0;
float_icon2.style.visibility ="visible";
var tingzhi2=window.setInterval("moveIcon2()",80);
function moveIcon2(){
	posX2 +=(2 *dirX2);posY2 +=(2 *dirY2);
	$("#float_icon2").css("top",posY2);
	$("#float_icon2").css("right",posX2);
	if(posX2 < 1 ||posX2 + document.getElementById("float_icon2").offsetWidth >$(window).width()){
			dirX2 =-dirX2;
		}
	if(posY2 < 1 ||posY2 + document.getElementById("float_icon2").offsetHeight+5 >$(window).height()){
			dirY2 =-dirY2;
		} 
	}
	$("#float_icon2").mouseover(function(){
		 clearInterval(tingzhi2)
	})
	$("#float_icon2").mouseout(function(){
		 tingzhi2=window.setInterval("moveIcon2()",50);
	})
	$(".close2").click(function(){
		$("#float_icon2").remove()
	})
</script>
<script src="/library/js/pc.js"></script>
<script src="/library/js/hls.min.js"></script>
<script src="/library/js/sw.js"></script>
<script src="/library/js/player.js"></script>
<script src="/library/js/swf.js"></script>
<script src="/library/js/flash.js"></script>
<script>
function lefttu(obj,x,y,src){
	var ad2 = new FloatAd({
nodeLink : src,
floatObj : obj,
x : x,
y : y,
locate : obj
});
ad2.play();
}
lefttu("left",10,386,"<a href='/index.php/Evil/index.html'><img src='/public/images/1519.jpg' border=0 /></a>");
lefttu("right",10,386,"<a href=\"/index.php/Tanchu/pctwo.html\"'><img src='/public/<?php echo ($pcgl2["imagepath"]); ?>' border=0 /></a>");
</script>