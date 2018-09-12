<?php
	namespace Admin\Controller;
	use Think\Upload;//导入上传类
	use Think\Page;
	class RotationController extends BaseController{
		//批量删除
		public function deleted()
		{
					//接收id
		$id=$_GET['id'];
		
		$word = explode('.',$id);

		for($i = 0;$i<count($word);$i++){
			$str .= "or id=". $word[$i]." ";
			
		}
		$str = substr($str, 2);
		
		//修改表 state=9
		$arr = M("articles")->where("$str")->delete();
		
		if($arr>0){
			$this->success("彻底删除图片成功",__ROOT__."/admin.php/Rotation/listRota.html");
			exit;
		}
		}
		//专项活动
		public function zhuanxiang(){
			$zx = M("tanchu")->field("imagepath,id")->where("id=4")->find();
			$this->assign("zx",$zx);
			$this->display();
		}
		//修改专项活动
		public function update(){
			$id = $_GET['id'];
			$this->assign("id",$id);
			$this->display();
		}
		//进行修改
		public function saves(){
			//上传图片
			$upload=new \Think\Upload();
			//设置
			$upload->mimes=array('image/png','image/gif','image/jpeg');
			$upload->autoSub=false;
			$upload->rootPath="./public/";
			$upload->savePath="show/";
			$upload->saveName=array('uniqid',array(mt_rand(1000,9999),true));
			//保存图片
			$imageRe=$upload->upload();
			
			$image=$imageRe['myFile']['savename'];
			// $result = $model->where()->save(一维关联数组);
			$result = M()->execute("update tanchu set imagepath='show/".$image."' where id=4");
			if($result>0){
				$this->success("修改专项活动成功",__ROOT__."/admin.php/Rotation/zhuanxiang");
				exit;
			}else{
				$this->success("添加专项活动失败",__ROOT__."/admin.php/Rotation/zhuanxiang");
				exit;
			}
			
		}
		//添加前台轮播图
		public function addRotation()
		{
			$this->display();
		}
		public function add(){

			$imagepath = "";//图片展示
			//上传图片
			$upload=new \Think\Upload();
			//设置
			$upload->mimes=array('image/png','image/gif','image/jpeg');
			$upload->autoSub=false;
			//设置保存路径的根目录
			$upload->rootPath = "./";
			//保存路径
			$upload->savePath = "public/show/";
			$upload->saveName=array('uniqid',array(mt_rand(1000,9999),true));
				
			//上传文件
			$myFile = $_FILES["myFile"];
			$Path = $upload->uploadOne($myFile);
			if ($Path) {
				$result = M()->execute("insert into articles(imagepath,typeId)	value  ('show/{$Path['savename']}',24)");
			}
			if($result > 0)
			{
				M()->execute("update types set articleNum=articleNum+1 where typeId=24");
				$this->success("添加图片展示成功",__ROOT__."/admin.php/Rotation/addRotation");
				exit;
			}else
			{
				$this->success("添加图片展示失败",__ROOT__."/admin.php/Rotation/addRotation");
				exit;
			}
		} 
		//图片展示
		public function listRota(){
			//获取总记录数
			$totalRow=M("articles")->where("typeId=24")->count();
			//实例化分页类
			$page = new Page($totalRow,4);
			$Img = M("articles")->where("typeId=24")->limit("$page->firstRow,$page->listRows")->select();
			$this->assign("Img",$Img);
			$this->assign("pageList",$page->show());//分页栏
			$this->display();
		}
		//删除图片
		public function delete()
		{
			$id=$_GET['id'];
			
			$re = M(articles)->where("id=$id")->delete();
			if($re>0){
				M()->execute("update types set articleNum=articleNum-1 where typeId=24");
				
				$this->success("删除成功",U("Admin/Rotation/listRota"));
			}else{
				
				$this->success("删除失败",U("Admin/Rotation/listRota"));
			}
		}
	}	