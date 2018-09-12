<?php
namespace Home\Controller;
class EvilController extends BaseController {
	public function index()
	{
		//专项通知
		$zxtz = M("evil")->where("typeId=1 and state<9")->order("id desc")->limit("0,5")->select();
		$this->assign("zxtz",$zxtz);
		//情况通报
		$qktb = M("evil")->where("typeId=2 and state<9")->order("id desc")->limit("0,5")->select();
		$this->assign("qktb",$qktb);
		//工作动态
		$gzdt = M("evil")->where("typeId=3 and state<9")->order("id desc")->limit("0,5")->select();
		$this->assign("gzdt",$gzdt);
		//专刊简报
		$zkjb = M("evil")->where("typeId=4 and state<9")->order("id desc")->limit("0,5")->select();
		$this->assign("zkjb",$zkjb);
		//经验交流
		$jyjl = M("evil")->where("typeId=5 and state<9")->order("id desc")->limit("0,5")->select();
		$this->assign("jyjl",$jyjl);
		//法律法规
		$flfg = M("evil")->where("typeId=6 and state<9")->order("id desc")->limit("0,5")->select();
		$this->assign("flfg",$flfg);
		//工作展示
		$gzzs = M("evil")->where("typeId=7 and state<9")->order("id desc")->limit("0,5")->select();
		$this->assign("gzzs",$gzzs);
		$this->display();
	}
}
