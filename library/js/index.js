// 晋中城区分局首页
// 层级轮播全局变量
var t11 = n =0, count;

function showAuto(){
n = n >=(count -1)?0:++n;
$("#cj_banner li").eq(n).trigger('click');
}
$(document).ready(function(){
	// 公安要闻
	$(".lrc_jue").click(function(){
		var index=$(this).index()
		$(".lrc_jue").css({"borderRight":"1px solid #e5e5e5","fontSize":"20px","color":"#333"}).eq(index).css({"borderRight":0,"fontSize":"14px","color":"#0058a4"})
		$(".oneright2right").css("display","none").eq(index).css("display","block")
	})
	// 通知通报
	$(".lrc_tz").click(function(){
		var index=$(this).index()
		$(".lrc_tz").css({"background":"#e5e5e5","fontSize":"18px","color":"#333"}).eq(index).css({"background":"#ffffff","fontSize":"20px","color":"#0058a4"})
		$(".lrc_tz01").css("display","none").eq(index).css("display","block")
	})
	$(".bao").click(function(){
		var index=$(this).index()
		$(".bao").attr("src","../../public/images/bao_2.png")
		
		$(".tong").attr("src","../../public/images/tong_2.png")
	})
	$(".tong").click(function(){
		var index=$(this).index()
		$(".tong").attr("src","../../public/images/tong_1.png")
		
		$(".bao").attr("src","../../public/images/bao_1.png")
	})
	$(".mei").click(function(){
		var index=$(this).index()
		$(".mei").attr("src","../../public/images/mei_1.png")
		
		$(".jing").attr("src","../../public/images/jing_1.png")
	})
	$(".jing").click(function(){
		var index=$(this).index()
		$(".jing").attr("src","../../public/images/jing_2.png")
		
		$(".mei").attr("src","../../public/images/mei_2.png")
	})
	$(".suo").click(function(){
		var index=$(this).index()
		$(".suo").attr("src","../../public/images/suo_1.png")
		
		$(".gong").attr("src","../../public/images/gong_1.png")
	})
	$(".gong").click(function(){
		var index=$(this).index()
		$(".gong").attr("src","../../public/images/gong_2.png")
		
		$(".suo").attr("src","../../public/images/suo_2.png")
	})
	$(".men").click(function(){
		var index=$(this).index()
		$(".men").attr("src","../../public/images/men_01.png")
		
		$(".zhong").attr("src","../../public/images/zhong_1.png")
	})
	$(".zhong").click(function(){
		var index=$(this).index()
		$(".zhong").attr("src","../../public/images/zhong_2.png")
		
		$(".men").attr("src","../../public/images/men_2.png")
	})
	$(".zheng").click(function(){
		var index=$(this).index()
		$(".zheng").attr("src","../../public/images/zheng_1.png")
		
		$(".dang").attr("src","../../public/images/dang_1.png")
	})
	$(".dang").click(function(){
		var index=$(this).index()
		$(".dang").attr("src","../../public/images/dang——2.png")
		
		$(".zheng").attr("src","../../public/images/zheng_2.png")
	})	
	$(".zhi").click(function(){
		var index=$(this).index()
		$(".zhi").attr("src","../../public/images/zhi_1.png")
		
		$(".an").attr("src","../../public/images/an_1.png")
	})
	$(".an").click(function(){
		var index=$(this).index()
		$(".an").attr("src","../../public/images/an_2.png")
		
		$(".zhi").attr("src","../../public/images/zhi_2.png")
	})
	$(".ling").click(function(){
		var index=$(this).index()
		$(".ling").attr("src","../../public/images/ling_1.png")
		
		$(".xue").attr("src","../../public/images/xue_1.png")
	})
	$(".xue").click(function(){
		var index=$(this).index()
		$(".xue").attr("src","../../public/images/xue_2.png")
		
		$(".ling").attr("src","../../public/images/ling_2.png")
	})
	$(".ying").click(function(){
		var index=$(this).index()
		$(".ying").attr("src","../../public/images/ying_1.png")
		
		$(".wen").attr("src","../../public/images/wen_1.png")
	})
	$(".wen").click(function(){
		var index=$(this).index()
		$(".wen").attr("src","../../public/images/wen_2.png")
		
		$(".ying").attr("src","../../public/images/ying_2.png")
	})
	// 警情分析
	$(".lrc_jq").click(function(){
		var index=$(this).index()
		$(".lrc_jq").css({"background":"#e5e5e5","fontSize":"18px","color":"#333"}).eq(index).css({"background":"#ffffff","fontSize":"20px","color":"#0058a4"})
		$(".lrc_tz02").css("display","none").eq(index).css("display","block")
	})
	//基层动态
	$(".lrc_sdjl").click(function(){
		var index=$(this).index()
		$(".lrc_sdjl").css({"background":"#e5e5e5","fontSize":"18px","color":"#333"}).eq(index).css({"background":"#ffffff","fontSize":"20px","color":"#0058a4"})
		$(".lrc_tz03").css("display","none").eq(index).css("display","block")
	})
	//信息简报
	 $(".lrc_xxjb").click(function(){
		var index=$(this).index()
		$(".lrc_xxjb").css({"background":"#e5e5e5","fontSize":"18px","color":"#333"}).eq(index).css({"background":"#ffffff","fontSize":"20px","color":"#0058a4"})
		$(".lrc_tz04").css("display","none").eq(index).css("display","block")
	})
	//队伍建设
	$(".lrc_dwjs").click(function(){
		var index=$(this).index()
		$(".lrc_dwjs").css({"background":"#e5e5e5","fontSize":"18px","color":"#333"}).eq(index).css({"background":"#ffffff","fontSize":"20px","color":"#0058a4"})
		$(".lrc_tz05").css("display","none").eq(index).css("display","block")
	})
	// 指导服务
	$(".lrc_zdfw").click(function(){
		var index=$(this).index()
		$(".lrc_zdfw").css({"background":"#e5e5e5","fontSize":"18px","color":"#333"}).eq(index).css({"background":"#ffffff","fontSize":"20px","color":"#0058a4"})
		$(".lrc_tz06").css("display","none").eq(index).css("display","block")
	})
	// 警营驿站
	$(".lrc_jqyz").click(function(){
		var index=$(this).index()
		$(".lrc_jqyz").css({"background":"#e5e5e5","fontSize":"18px","color":"#333"}).eq(index).css({"background":"#ffffff","fontSize":"20px","color":"#0058a4"})
		$(".lrc_tz07").css("display","none").eq(index).css("display","block")
	})
	// 指导服务
	$(".lrc_ldjh").click(function(){
		var index=$(this).index()
		$(".lrc_ldjh").css({"background":"#e5e5e5","fontSize":"18px","color":"#333"}).eq(index).css({"background":"#ffffff","fontSize":"20px","color":"#0058a4"})
		$(".lrc_tz09").css("display","none").eq(index).css("display","block")
	})
	// 警营驿站
	$(".lrc_xwzx").click(function(){
		var index=$(this).index()
		$(".lrc_xwzx").css({"background":"#e5e5e5","fontSize":"18px","color":"#333"}).eq(index).css({"background":"#ffffff","fontSize":"20px","color":"#0058a4"})
		$(".lrc_tz10").css("display","none").eq(index).css("display","block")
	})
	// 友情链接部分
	$(".lrc_yqljbf").click(function(){
		var index=$(this).index() - 1;
		$(".lrc_yqljbf").css({"background":"#e5e5e5","fontSize":"18px","color":"#333"}).eq(index).css({"background":"#ffffff","fontSize":"20px","color":"#0058a4"})
		$(".lrc_tz08").css("display","none").eq(index).css("display","block")
	})
	// 层级轮播部分开始
	count=$("#cj_banner_list a").length;
	$("#cj_banner_list a:not(:first-child)").hide();
	$("#cj_banner_info").html($("#cj_banner_list a:first-child").find("img").attr('alt'));
	$("#cj_banner_info").click(function(){window.open($("#cj_banner_list a:first-child").attr('href'), "_blank")});
	$("#cj_banner li").click(function() {
	var i = $(this).text() -1;//获取Li元素内的值，即1，2，3，4
	n = i;
	if (i >= count) return;
	$("#cj_banner_info").html($("#cj_banner_list a").eq(i).find("img").attr('alt'));
	$("#cj_banner_info").unbind().click(function(){window.open($("#cj_banner_list a").eq(i).attr('href'), "_blank")})
	$("#cj_banner_list a").filter(":visible").fadeOut(500).parent().children().eq(i).fadeIn(1000);
	document.getElementById("cj_banner").style.background="";
	$(this).toggleClass("cj_on");
	$(this).siblings().removeAttr("class");
	});
	t11 = setInterval("showAuto()", 4000);
	$("#cj_banner").hover(function(){clearInterval(t11)}, function(){t11 = setInterval("showAuto()", 4000);});
	// 层级轮播结束
	// 左右轮播图部分
	var allbtn=$(".btn")
    var allimg=$(".banneritem")
    var nowbtn=$(".btn:first")
    var nowimg=$(".banneritem:first")
    var t=setInterval(banner,5000)
    var num=0;
    var z=5;
    function banner(){
        num++;
        if(num==allbtn.length){
            num=0;
        }
        allbtn.filter(nowbtn).removeClass("active").end().eq(num).addClass("active")
        nowimg.animate({left:-490},500,"linear").parent().children().eq(num).css({left:490,zIndex:z++}).animate({left:0},500,"linear",function(){
            flag=true;
        })
        nowbtn=allbtn.eq(num)
        nowimg=allimg.eq(num)
    }
    $(".bannerbox").hover(function(){
        clearInterval(t)
        // $(".arrow").show(300)
        $(".arrow").fadeIn(300)
    },function(){
        t=setInterval(banner,5000)
        // $(".arrow").hide(300)
        $(".arrow").fadeOut(300)
    })
    var flag=true;
    $(".next").click(function(){
        if(flag){
            flag=false;
            banner()
        }
    }).mousedown(function(e){
        e.preventDefault()
        e.returnValue=false;   //阻止浏览器默认行为
    })
    var flag2=true;
    $(".prev").click(function(){
        if(flag2){
            flag2=false;
            num--;
            if(num==-1){
                num=allbtn.length-1;
            }
            allbtn.filter(nowbtn).removeClass("active").end().eq(num).addClass("active")
            nowimg.animate({left:490},500,"linear")
                .parent().children().eq(num).css({left:-490,zIndex:z--})
                .animate({left:0},500,"linear",function(){
                    flag2=true;
                })
            nowbtn=allbtn.eq(num)
            nowimg=allimg.eq(num)
        }
    }).mousedown(function(e){
        e.preventDefault()
        e.returnValue=false;   //阻止浏览器默认行为
    })
    allbtn.click(function(){
        nowbtn.removeClass("active");
        $(this).addClass("active")
        nowbtn=$(this);
        var now=nowimg.index();  //当前显示的图片
        var next=$(this).index();  //将要点击 要显示的图片
        if(next>now){
            nowimg.animate({left:-490},500,"linear");
            allimg.eq(next).css({left:490,zIndex:z++}).animate({left:0})
        }else if(next<now){
            nowimg.animate({left:490},500,"linear");
            allimg.eq(next).css({left:-490,zIndex:z++}).animate({left:0})
        }
        num=next;  //点击后继续从当前播
        nowimg=allimg.eq(next)
    })
    // 二级页面下拉菜单
    $(".lrc_div2").click(function(){ 
			$(this).next("div").slideToggle("slow")  
			.siblings(".lrc_div3:visible").slideUp("slow");
      $(this).toggleClass("huantu")
		});
    

    // 后加轮播图
    var hj_innerbox=$(".hj_itembox");
		var hj_container=$(".hj_lun");
		var hj_movet=setInterval(hj_move,2000);
		function hj_move(){
			hj_innerbox.animate({marginLeft:-320},600,"linear",function(){
				$(".hj_item").first().before($(".hj_item"))
				hj_innerbox.css("marginLeft","0")
				hj_flag1=true;
			})
		}
		hj_container.hover(function(){
			clearInterval(hj_movet);
		},function(){
			hj_movet=setInterval(hj_move,2000);
		})
		var hj_flag1=true;
		$(".hj_next").click(function(){
			if (hj_flag1) {
				hj_flag1=false;
				hj_move()
			};
		})
		var hj_flag2=true;
		$(".hj_prev").click(function(){
			if (hj_flag2) {
				hj_flag2=false;
				$(".hj_item").last().insertBefore($(".hj_item").first());
				hj_innerbox.css("marginLeft","-320px")
				.animate({marginLeft:0},500,"linear",function(){
					hj_flag2=true;
				})
			}
		})
})