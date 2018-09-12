<?php
namespace Home\Controller;
use Think\Page;//导入分页
class ListtypeController extends BaseController {
	public function index(){
		//类型
		 $listtype= M("types")->where("fid=0")->select();
		 foreach ($listtype as $k=>$v){
		 	$v['types'] = M("types")->where("fid={$v["typeId"]}")->select();
		 	
		 	$listtype[$k]=$v;
		 }
		$this->assign("listtype",$listtype);
		$typeId = $_GET['typeId']?$_GET['typeId']:5;
		
		//获得类型下的总记录数
		$totalRow = M("articles")->where("state<9 and typeId={$typeId}")->count();
		
		//实例化分页类
		$page = new Page($totalRow,20);
		
		$lists = M("articles")->where("typeId={$typeId}")->order("date desc")->limit($page->firstRow,$page->listRows)->select();
		$this->assign("pageList",$page->show());//分页栏
		$this->assign("lists",$lists);
		//当前显示类型
		$type = M("types")->where("typeId=$typeId")->find();
		$this->assign("type",$type);
		$fid = $type['fid'];
		//显示位置

		$tpz = M("types")->where("typeId=$fid")->find();
		
		$this->assign("tpz",$tpz);
		$this->display();
	}
	//查询
	public function search($keyword=""){
		//类型
		$listtype= M("types")->where("fid=0")->select();
		foreach ($listtype as $k=>$v){
			$v['types'] = M("types")->where("fid={$v["typeId"]}")->select();
		
			$listtype[$k]=$v;
		}
		$this->assign("listtype",$listtype);
		//获得搜索的总记录数
		$totalRow = M("articles")->where("state<9 and title like '%{$keyword}%'")->count();
		
		//实例化分页类
		$page = new Page($totalRow,20);
		$keyword = str_replace("%","\%",$keyword);
		$keyword = str_replace("_","\_",$keyword);
		
	    $info =	M()->query("SELECT id,title,date from articles where title like '%{$keyword}%' limit $page->firstRow,$page->listRows");
		$this->assign("info",$info);
		$this->assign("pageList",$page->show());//分页栏
		$this->display();
	} 
}