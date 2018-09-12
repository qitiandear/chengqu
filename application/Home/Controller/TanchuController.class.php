<?php
namespace Home\Controller;
use Think\Page;//导入分页
class TanchuController extends BaseController {
	//右侧飘窗的详细页面
	public function article(){
			//类型
		$listtype= M("types")->where("fid=0")->select();
		foreach ($listtype as $k=>$v){
			$v['types'] = M("types")->where("fid={$v["typeId"]}")->select();
		
			$listtype[$k]=$v;
		}
		$this->assign("listtype",$listtype);
		$id = $_GET['id'];
		M()->execute("update bless set hint=hint+1 where id={$id} ");
		$news = M("bless")->where("id=$id")->find();
		$this->assign("news",$news);
		$this->display();
	}

	public function pcthere()
	{
		//类型
		 $listtype= M("types")->where("fid=0")->select();
		 foreach ($listtype as $k=>$v){
		 	$v['types'] = M("types")->where("fid={$v["typeId"]}")->select();
		 	
		 	$listtype[$k]=$v;
		 }

		$this->assign("listtype",$listtype);
//获得类型下的总记录数
		$totalRow = M("bless")->where("tcId=3")->count();
		
		//实例化分页类
		$page = new Page($totalRow,20);
		
		$lists = M("bless")->where("tcId=3")->order("id desc")->limit($page->firstRow,$page->listRows)->select();
		$this->assign("pageList",$page->show());//分页栏
		$this->assign("lists",$lists);
		$this->display();
	}
	//列表
	
	public function index()
	{//类型
		 $listtype= M("types")->where("fid=0")->select();
		 foreach ($listtype as $k=>$v){
		 	$v['types'] = M("types")->where("fid={$v["typeId"]}")->select();
		 	
		 	$listtype[$k]=$v;
		 }
		$this->assign("listtype",$listtype);
		$id = $_GET['id'];
		if($id){
		M()->execute("update bless set hint=hint+1 where id={$id} ");
		//获取文章
		$news = M("bless")->where("id=$id")->find();
		$this->assign("news",$news);
		
		$this->display();
		}
	}
	public function pcone(){
		//类型
		 $listtype= M("types")->where("fid=0")->select();
		 foreach ($listtype as $k=>$v){
		 	$v['types'] = M("types")->where("fid={$v["typeId"]}")->select();
		 	
		 	$listtype[$k]=$v;
		 }

		$this->assign("listtype",$listtype);
//获得类型下的总记录数
		$totalRow = M("bless")->where("tcId=1")->count();
		
		//实例化分页类
		$page = new Page($totalRow,20);
		
		$lists = M("bless")->where("tcId=1")->order("id desc")->limit($page->firstRow,$page->listRows)->select();
		$this->assign("pageList",$page->show());//分页栏
		$this->assign("lists",$lists);
		$this->display();

	}
	public function pctwo(){
		//类型
		 $listtype= M("types")->where("fid=0")->select();
		 foreach ($listtype as $k=>$v){
		 	$v['types'] = M("types")->where("fid={$v["typeId"]}")->select();
		 	
		 	$listtype[$k]=$v;
		 }
		$this->assign("listtype",$listtype);
		//获得类型下的总记录数
		$totalRow = M("bless")->where("tcId=3")->count();
		
		//实例化分页类
		$page = new Page($totalRow,20);
		
		$lists = M("bless")->where("tcId=3")->order("id desc")->limit($page->firstRow,$page->listRows)->select();
		$this->assign("pageList",$page->show());//分页栏
		$this->assign("lists",$lists);
		$this->display();
		
	}
}