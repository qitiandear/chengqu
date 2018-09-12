<?php
	namespace Admin\Controller;
	class DutyController extends BaseController{
		public function addty(){
			$this->display();
			
		}
		public function addduty(){
			$name = $_POST['name'];
			$date = $_POST['date'];
			$result = M("Duty")->add($_POST);
			if($result){
				$this->success("添加值班成功",__ROOT__."/admin.php/Duty/addty.html");
			  exit;
			}else{
				$this->success("添加值班失败",__ROOT__."/admin.php/Duty/addty.html");
			  exit;
			}
		}
		public function listty(){
			$dutyInfo = M("duty")->select();
			$this->assign("dutyInfo",$dutyInfo);
			$this->display();
		}
		//删除
		public function delete(){
			$id = $_GET['Id'];
			$ret = M("duty")->where("id = '{$id}'")->delete();
			if($ret){
				$this->success("删除值班成功",__ROOT__."/admin.php/Duty/listty.html");
			  exit;
			}else{
				$this->success("删除值班失败",__ROOT__."/admin.php/Duty/listty.html");
			  exit;
			}
		}
	}