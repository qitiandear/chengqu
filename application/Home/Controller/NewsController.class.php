<?php
namespace Home\Controller;

class NewsController extends BaseController {
	//错误页面
	public function error()
	{
		$this->display();
	}
	//城区之星
		public function cqzx(){
		$id = $_GET['id'];
		M()->execute("update articles set hint=hint+1 where id={$id} ");
		$news = M("articles")->where("id=$id")->find();
		$this->assign("news",$news);
		$this->display();
	}
	//播放
	 public function bofang(){

	 		//类型
		$listtype= M("types")->where("fid=0")->select();
		foreach ($listtype as $k=>$v){
			$v['types'] = M("types")->where("fid={$v["typeId"]}")->select();
		
			$listtype[$k]=$v;
		}
		$this->assign("listtype",$listtype);
        $this->display();
    }
     public function bofangs(){
     		//类型
		$listtype= M("types")->where("fid=0")->select();
		foreach ($listtype as $k=>$v){
			$v['types'] = M("types")->where("fid={$v["typeId"]}")->select();
		
			$listtype[$k]=$v;
		}
		$this->assign("listtype",$listtype);
        $this->display();
    }
     public function bofangd(){
     		//类型
		$listtype= M("types")->where("fid=0")->select();
		foreach ($listtype as $k=>$v){
			$v['types'] = M("types")->where("fid={$v["typeId"]}")->select();
		
			$listtype[$k]=$v;
		}
		$this->assign("listtype",$listtype);
        $this->display();
    }
	//显示签收明细
	public function signed(){
		$id = $_GET['id'];
		
		$ifo = M("articles")->where("id=$id")->find();
		

		if($ifo['typeId']==4 || $ifo['typeId']==5 || $ifo['typeId']==6 ){
			$sql = "select s.*,c.* from sidgin s left join chengqu c on s.cid=c.id where aid={$id}";
			
		
			$arr = M()->query($sql);

			$this->assign("arr",$arr);
			$this->display();
		}
	}
	//签收验证
	public function sig()
	{
		$id = $_GET['id'];
		if($_POST){
			$username = $_POST['username'];
			$password = $_POST['password'];
			$info = M("admin")->where("username='{$username}' and password='{$password}'")->find();
			if($info){
				
				/* $ip =  $_SERVER['REMOTE_ADDR']; */
				
			$username = $_POST['qianshouren'];
		
		$ifo = M("articles")->where("id=$id")->find();
		if($ifo['typeId']==4 || $ifo['typeId']==5 || $ifo['typeId']==6 ){
		
		$ip =  $_SERVER['REMOTE_ADDR'];
		$cid = $info['cid'];
		$userID = $info['id'];
		$username = $_POST['qianshouren'];
		$ars = M("sidgin")->where("aid={$id} and cid={$cid}")->find();
		if($ars['ip']!="" && $ars['userid']!=""){
		  $this->success("已签收",__APP__."/News/index/id/$id");
			}else{
				$ino = M()->execute("update sidgin set username='{$username}',userid='{$userID}',ip='{$ip}' where id={$ars['id']}");
				if($ino > 0){
					$this->success("签收成功",__APP__."/News/index/id/$id");
					exit;
				}else{
					$this->success("签收失败",__APP__."/News/index/id/$id");
					exit;
				}
			}
		}else{
			$this->success("你没有此权限",__APP__."/News/index/id/$id");
		}
	}else{
		$this->success(" 用户名或密码错误",__APP__."/News/index/id/$id");
		exit;
	}
			}
		
		
	}
	//登录验证
	public function login(){
		if($_POST){
			$username = $_POST['username'];
			$password = $_POST['password'];
			$info = M("admin")->where("username='{$username}' and password='{$password}'")->find();
			if($info){
				$_SESSION['user'] = $info;
				/* $ip =  $_SERVER['REMOTE_ADDR']; */
				$this->success("登录成功",__APP__);
				
			}
		}
	}
/* 	//签约页面
	public function signed(){
	
		if ($_SESSION['state']==0) {
			$arr = M("chengqu")->select();
			foreach ($arr as $k=>$v){
				$v['sg']=M()->query("select * from sidgin s join admin a on s.userid=a.id where s.cid={$v['id']}");
				$arr[$k]=$v;
			}
			$this->assign("arr",$arr);
			$this->display();
		}else{
			$this->success("你没有此权限",__APP__."/News/index/id/45");
				
		}
		
	} */
/* 	//登录签阅
	public function login(){

		$id = $_GET['id'];
		$_SESSION['aid']= $id; 
		$ifo = M("articles")->where("id=$id")->find();
		if($ifo['typeId']==4 || $ifo['typeId']==5 || $ifo['typeId']==6 ){
		if($_POST){
		//验证登录
		$username = $_POST['username'];
		$password = $_POST['password'];
		$info = M("admin")->where("username='{$username}' and password='{$password}'")->find();
		
		if($info==null){
			$this->success("用户名或密码错误",__APP__."/News/index/id/$id");
			
		}else if($info['state']==0){
			$_SESSION['user'] = $info;
			$ip =  $_SERVER['REMOTE_ADDR'];
			$cid = $_SESSION['user']['cid'];
			$userid = $_SESSION['user']['id'];
			$yz = M("sidgin")->select();
			$aid =$_SESSION['aid'];
			$ars = M("sidgin")->where("aid={$id} and cid={$cid}")->find();
			if($ars){
			  $this->success("已签收",__APP__."/News/signed");
			}else{
				$ino = M()->query("insert into sidgin(aid,cid,userid,ip) value ('{$id}','{$cid}','{$userid}','{$ip}')");
			if($ino > 0){
				$this->success("签收成功",__APP__."/News/signed");
				exit;
			}else{
				$this->success("签收失败",__APP__."/News/index/id/$id");
				exit;
			}	
		  }
			 
			if($yz==NULL){
				
				$ino = M()->query("insert into sidgin(aid,cid,userid,ip) value ('{$id}','{$cid}','{$userid}','{$ip}')");
				if($ino > 0){
					$this->success("签收成功",__APP__."/News/signed");
					exit;
				}else{
					$this->success("签收失败",__APP__."/News/index/id/$id");
					exit;
				}
			}
				
		}else{
			$this->success("您暂时没有此权限",__APP__."/News/index/id/$id");
			exit;
		}
	
		}
		
		}else{
			$this->success("此文章不用签收",__APP__."/News/index/id/$id");
			exit;
		}
	} */
	public function index(){
		$id = $_GET['id']?$_GET['id']:1;
		if($id){
			//判断类型
		$a = M("articles")->where("id=$id")->field("typeId")->find();
		// echo $a['typeId'];
		 if ($a['typeId']!=20 && $a['typeId']!=21 &&$a['typeId']!=22&&$a['typeId']!=23 &&$a['typeId']!=17 && $a['typeId']!=18 && $a['typeId']!=19 &&$a['typeId']!=11) {
			/*check_ip();*/
			$listtype= M("types")->where("fid=0")->select();
		foreach ($listtype as $k=>$v){
			$v['types'] = M("types")->where("fid={$v["typeId"]}")->select();
		
			$listtype[$k]=$v;
		}
		$this->assign("listtype",$listtype);
		
		//阅读量
	
		//进行IP判断
		 $news = M("articles")->where("id=$id")->find();
		
		//获取文章
		M()->execute("update articles set hint=hint+1 where id={$id} ");
		$snew = M("articles")->where("id<$id")->order("id desc")->limit(0,1)->find();
		$xnew = M("articles")->where("id>$id")->limit(0,1)->find();
		
		//匹配用户表  去找所属分局
		$ty = M()->query("select a.username,c.fname from admin as a join chengqu as c on a.cid=c.id where a.id='{$news['userId']}'");
		
	
		$news['username'] = $ty['0']['username'];
		$news['fenju'] = $ty['0']['fname'];
		$typeId = $news['typeId'];
		$this->assign("news",$news);
		$this->assign("snew",$snew);
		$this->assign("xnew",$xnew);
		//当前显示类型
		$type = M("types")->where("typeId=$typeId")->find();
		$this->assign("type",$type);
		$fid = $type['fid'];
		if($fid==0){
			$tpz = M("types")->where("typeId=$typeId")->find();
		}else{
		//显示位置
		$tpz = M("types")->where("typeId=$fid")->find();
		}
		$this->assign("tpz",$tpz);
		$this->display();
		 }else{
		// exit;
		//类型
		$listtype= M("types")->where("fid=0")->select();
		foreach ($listtype as $k=>$v){
			$v['types'] = M("types")->where("fid={$v["typeId"]}")->select();
		
			$listtype[$k]=$v;
		}
		$this->assign("listtype",$listtype);
		
		//阅读量
	
		//进行IP判断
		 $news = M("articles")->where("id=$id")->find();
		
		//获取文章
		M()->execute("update articles set hint=hint+1 where id={$id} ");
		$snew = M("articles")->where("id<$id")->order("id desc")->limit(0,1)->find();
		$xnew = M("articles")->where("id>$id")->limit(0,1)->find();
		
		//匹配用户表  去找所属分局
		$ty = M()->query("select a.username,c.fname from admin as a join chengqu as c on a.cid=c.id where a.id='{$news['userId']}'");
		
	
		$news['username'] = $ty['0']['username'];
		$news['fenju'] = $ty['0']['fname'];
		$typeId = $news['typeId'];
		$this->assign("news",$news);
		$this->assign("snew",$snew);
		$this->assign("xnew",$xnew);
		//当前显示类型
		$type = M("types")->where("typeId=$typeId")->find();
		$this->assign("type",$type);
		$fid = $type['fid'];
		if($fid==0){
			$tpz = M("types")->where("typeId=$typeId")->find();
		}else{
		//显示位置
		$tpz = M("types")->where("typeId=$fid")->find();
		}
		$this->assign("tpz",$tpz);
		$this->display();
		}
	}
	}
}