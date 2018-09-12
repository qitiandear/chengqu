<?php
namespace Home\Controller;
class IndexController extends BaseController {
    public function index(){
        $this->display();
    }
   public function contion(){
    $arr = M()->query("select * from placard order by id desc limit 0,1");
    $this->assign("arr",$arr);
    $this->display();
   }
    public function indexr(){
        $date = date("Y-m-d H:i:s");
        $this->assign("date",$date);
        //值班表
        $duty = M()->query("select * from duty order by id desc limit 0,1");
        $this->assign("duty",$duty);
        //飘窗 管理
        $pcgl1 = M("tanchu")->where("id=1")->find();
        $this->assign("pcgl1",$pcgl1);
        $pcgl2 = M("tanchu")->where("id=2")->find();
        $this->assign("pcgl2",$pcgl2);
        $pcgl3 = M("tanchu")->where("id=3")->find();
        $this->assign("pcgl3",$pcgl3);
    	//二级联动带连接
    	$cd = M("system");
    	$rjld3 = $cd->where("fid=1")->select();
    	$rjld4 = $cd->where("fid=2")->select();
    	$this->assign("rjld3",$rjld3);
    	$this->assign("rjld4",$rjld4);
    	//调取三级联动
    	$ob=M('trend');
    	$sjld = $ob->where("fid=40")->select();//quanguo
        $sjld1 = $ob->where("fid=41")->select();//quan省
        $sjld2 = $ob->where("fid=42")->select();//quan省
        $this->assign("sjld",$sjld);
        $this->assign("sjld1",$sjld1);
    	$this->assign("sjld2",$sjld2);
        //专项图片
        $zxtp = M("tanchu")->field("imagepath")->where("id=4")->find();
        $this->assign("zxtp",$zxtp);
    	//图片要闻
    	$tpyw = M()->query("select DATE_ADD(dateandtime,INTERVAL 1 Week) as time,id,title,imagepath from articles where typeId=2  and state<9 order by date desc limit 0,5");
    	$this->assign("tpyw",$tpyw);
    	//公安要闻
    	$gayw = M()->query("select DATE_ADD(dateandtime,INTERVAL 1 Week) as time,id,title from articles where typeId=2  and state<9 order by date desc limit 0,5");
    	$this->assign("gayw",$gayw);
    	//战果速递
    	$zgsd = M()->query("select DATE_ADD(dateandtime,INTERVAL 1 Week) as time,id,title from articles where typeId=3 and state<9  order by date desc limit 0,5");
    	$this->assign("zgsd",$zgsd);
    	//会议通知
    	$hytz = M()->query("select DATE_ADD(dateandtime,INTERVAL 1 Week) as time,id,title from articles where typeId=4 and state<9  order by date desc limit 0,5");
    	$this->assign("hytz",$hytz);
    	//重点关注
    	$zdgz = M()->query("select id,imagepath from articles where state=8 order by date desc limit 0,3");
    	$this->assign("zdgz",$zdgz);
    	//通知
        
    	$tz = M()->query("select DATE_ADD(dateandtime,INTERVAL 1 Week) as time,id,title,date from articles where typeId=5 and state<9 order by date desc limit 0,6");
        
    	$this->assign("tz",$tz);
    	//通报
    	$tb = M()->query("select DATE_ADD(dateandtime,INTERVAL 1 Week) as time,id,title,date from articles where typeId=6 and state<9  and state<9 order by date desc limit 0,6");
    	$this->assign("tb",$tb);
    	//每日警情
    	$mrjq = M()->query("select DATE_ADD(dateandtime,INTERVAL 1 Week) as time,id,title,date from articles where typeId=7 and state<9  order by date desc limit 0,6");
    	$this->assign("mrjq",$mrjq);
    	//警情研判
    	$jqyp = M()->query("select DATE_ADD(dateandtime,INTERVAL 1 Week) as time,id,title,date from articles where typeId=8 and state<9  order by date desc limit 0,6");
    	$this->assign("jqyp",$jqyp);
    	//所对动态
    	$sdgt = M()->query("select DATE_ADD(dateandtime,INTERVAL 1 Week) as time,id,title,date from articles where typeId=9 and state<9 order by date desc limit 0,6");
    	$this->assign("sdgt",$sdgt);
    	//工作交流
    	$gzjl = M()->query("select DATE_ADD(dateandtime,INTERVAL 1 Week) as time,id,title,date from articles where typeId=10 and state<9 order by date desc limit 0,6");
    	$this->assign("gzjl",$gzjl);
    	//信息简报
    	$xxjb = M()->query("select DATE_ADD(dateandtime,INTERVAL 1 Week) as time,id,title,date from articles where typeId=11 and state<9 order by date desc limit 0,6");
    	$this->assign("xxjb",$xxjb);
    	//部门动态
    	$bmdt = M()->query("select DATE_ADD(dateandtime,INTERVAL 1 Week) as time,id,title,date from articles where typeId=13 and state<9 order by date desc limit 0,6");
    	$this->assign("bmdt",$bmdt);
    	//重点工作
    	$zds = M()->query("select DATE_ADD(dateandtime,INTERVAL 1 Week) as time,id,title,date from articles where typeId=14  and state<9 order by date desc limit 0,6");
    	$this->assign("zds",$zds);
    	//政工之窗
    	$zgzc = M()->query("select DATE_ADD(dateandtime,INTERVAL 1 Week) as time,id,title,date from articles where typeId=17 and state<9 order by date desc limit 0,6");
    	$this->assign("zgzc",$zgzc);
    	//党风廉政
    	$dflz = M()->query("select DATE_ADD(dateandtime,INTERVAL 1 Week) as time,id,title,date from articles where typeId=18 and state<9 order by date desc limit 0,6");
    	$this->assign("dflz",$dflz);
    	//执法指导
    	$zfzd= M()->query("select DATE_ADD(dateandtime,INTERVAL 1 Week) as time,id,title,date from articles where typeId=15 and state<9 order by date desc limit 0,6");
    	$this->assign("zfzd",$zfzd);
    	//案件评查 
    	$ajpc = M()->query("select DATE_ADD(dateandtime,INTERVAL 1 Week) as time,id,title,date from articles where typeId=16 and state<9 order by date desc limit 0,6");
    	$this->assign("ajpc",$ajpc);
    	//领导讲话
    	$ldjh = M()->query("select DATE_ADD(dateandtime,INTERVAL 1 Week) as time,id,title,date from articles where typeId=20 and state<9 order by date desc limit 0,6");
    	$this->assign("ldjh",$ldjh);
    	//学习园地
    	$xxyd = M()->query("select DATE_ADD(dateandtime,INTERVAL 1 Week) as time,id,title,date from articles where typeId=21  and state<9 order by date desc limit 0,6");
    	$this->assign("xxyd",$xxyd);
    	//警营驿站
    	$jyyz = M()->query("select DATE_ADD(dateandtime,INTERVAL 1 Week) as time,id,title,date from articles where typeId=22  and state<9 order by date desc limit 0,6");
    	$this->assign("jyyz",$jyyz);
    	//新闻资讯
    	$xwzx = M()->query("select DATE_ADD(dateandtime,INTERVAL 1 Week) as time,id,title,date from articles where typeId=23  and state<9 order by date desc limit 0,6");
    	$this->assign("xwzx",$xwzx);
    	//图片展示
    	$tpzs = M()->query("select id,imagepath,date from articles where typeId=24 and state<9 order by id desc limit 0,6");

    	$this->assign("tpzs",$tpzs);
    	//城区之星
    	$cqzx = M()->query("select id,imagepath,date from articles where typeId=19  and state<9 order by id desc limit 0,1");
    	
    	$this->assign("cqzx",$cqzx);
    	//专项活动
    	$zxhd = M()->query("select id,imagepath,date from articles where typeId=25 and state<9  order by date desc limit 0,4");
    	$this->assign("zxhd",$zxhd);
    	$this->display();	
    
    }
   
    
   }