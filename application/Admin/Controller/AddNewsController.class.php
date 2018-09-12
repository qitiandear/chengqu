<?php
	namespace Admin\Controller;
	use Think\Upload;//导入上传类
	use Think\Page;//导入分页
	import("Think.HttpClient");


	class AddNewsController extends BaseController{
		//彻底删除
		public function deleterd()
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
			$this->success("彻底删除文章成功",__ROOT__."/admin.php/AddNews/listrecycle.html");
			exit;
		}else{
			$this->success("彻底删除文章失败",__ROOT__."/admin.php/AddNews/listrecycle.html");
			exit;
		}
		}
		//删除
		public  function deleted()
		{
			//接收id
		$id=$_GET['id'];
		
		$word = explode('.',$id);

		for($i = 0;$i<count($word);$i++){
			$str .= "or id=". $word[$i]." ";
			
		}
		$str = substr($str, 2);
		
		//修改表 state=9
		$arr = M()->execute("update articles set state=9  where $str");
		
		if($arr>0){
			$this->success("删除文章成功",__ROOT__."/admin.php/AddNews/listnews.html");
			exit;
		}
		
		
		
		}
		//huanyuan
		public function  huanyuan(){
			$id = $_GET['id'];
			
			$re = M()->execute("update articles set state=0 where id={$id}");
			if($re > 0){
				$this->success("还原文章成功",__ROOT__."/admin.php/AddNews/listrecycle.html");
				exit;
			}else{
				$this->success("还原文章失败",__ROOT__."/admin.php/AddNews/listrecycle.html");
				exit;
			}
		}
		//搜索
		public function search($search='',$keyword=''){
		
		$keyword=I('get.keyword');
		$str=trim($keyword);
		$str=strip_tags($keyword);
		$str=stripslashes($keyword);
		$str=addslashes($keyword);
		$str=rawurldecode($keyword);
		$str=quotemeta($keyword);
		$str=htmlspecialchars($keyword);
		$keyword=preg_replace("/\+|\*|\`|\/|\-|\$|\#|\^|\!|\@|\%|\&|\~|\^|\[|\]|\'|\"/", "", $str);//去除特殊符号+*`/-$#^~!@#$%&[]'"
		if($keyword)
		{
			
			//$res=M('classroom')->where( "title like '%{$search}%' or content like '%{$search}%'")->select();
			$Info = M('articles')->where("{$search} like '%{$keyword}%'")->join("types on types.typeId=articles.typeId")->order("articles.id desc")->select();
			$totalRow = count($Info);
			$page = new Page($totalRow,10);
			$newsInfo = M('articles')->where("{$search} like '%{$keyword}%'")->join("types on types.typeId=articles.typeId")->order("articles.id desc")->limit($page->firstRow,$page->listRows)->select();
				
			$this->assign("pageList",$page->show());//分页栏
			$this->assign("newsInfo",$newsInfo);
			$this ->display();
		}
		else
		{
			$newsInfo='';
			$this->assign("newsInfo",$newsInfo);
			$this ->display();
		}
		}
		
		//发表文章
		public function addnews(){
			$id = $_GET['id'];
			/*echo $id;*/
			if($id){
				$str = M()->query("select * from articles order by id desc limit 0,1");
					$titles = base64_encode($str['0']['title']);

					/*echo $title.'<br/>';*/ 
					$content = base64_encode($str['0']['content']);
					/*echo $content.'<br/>';*/
					$id = $str['0']['id'];
					$imagepath = $str['0']['imagepath'];
				/*	echo $imagepath.'<br/>';*/
					$time = $str['0']['date'];
					/*echo $time.'<br/>'; */
					$typeId = $str['0']['typeId'];
					if($typeId==2||$typeId==3||$typeId==1){
						$category="公安要闻";
					}else if($typeId==9||$typeId==10||$typeId==19||$typeId==13||$typeId==14||$typeId==13||$typeId==14){
						$category="工作动态";
					}else if($typeId==5||$typeId==6||$typeId==7||$typeId==8||$typeId==15||$typeId==16){
							$category="通知通报";
					}else{
						$category="专题专栏";
					}

			/*	foreach ($str as $k => $v) {
					$v['types']= M("types")->where("typeId={$v['typeId']}")->select();
					$str[$k]=$v;
				}*/
			}
			$this->assign("id",$id);
			$this->assign("titles",$titles);
			$this->assign("content",$content);
			$this->assign("time",$time);
			$this->assign("imagepath",$imagepath);
			$this->assign("category",$category);
		    $role = $_SESSION['user']['qxId'];

		    $newsType = explode(",", $role);

			foreach ($newsType as $k=>$v){
				$arr[] = M('types')->where(array('typeId'=>$v))->select();
			}
		

   	 $t1=strstr($role,',4');
   	 $t2=strstr($role,',5');
   	 $t3=strstr($role,',6');

			$unit = M("chengqu")->select();
			$this->assign("unit",$unit);
			$this->assign("str",$str);
		
			$this->assign("t1",$t1);
			$this->assign("t2",$t2);
			$this->assign("t3",$t3);
			$this->assign("arr",$arr);
			$this->display();
		}
		//添加文章
		public function  addnew($content='',$title='',$typeId='',$state='',$writer='',$source='',$userName='',$date="")
		{
			

				$role = $_POST['ids'];

			//获取表单提交的数据
			$content = $_POST['content'];//文章正文
			$title = $_POST['title'];//文章标题
			$typeId = $_POST['typeId'];
			$writer = $_POST['writer'];//文章作者
			$source = $_POST['source'];//文章来源
			$date = $_POST['date'];//文章时间
			
			$state = $_POST['state'];//是否重点关注
			$userId = $_SESSION['user']['id'];//用户ID
			$cqId  = $_SESSION['user']['cid'];//单位ID
			
			$imagepath = "";//文章图片
			 
			//上传图片
			$upload=new \Think\Upload();
			//设置
			$upload->mimes=array('image/png','image/gif','image/jpeg');
			$upload->autoSub=false;
			//设置保存路径的根目录
		    $upload->rootPath = "./";
		    //保存路径
		    $upload->savePath = "public/newspicture/";
			$upload->saveName=array('uniqid');
			
			 //上传文件
		    $myFile = $_FILES["myFile"];
		    $Path = $upload->uploadOne($myFile);
			if ($Path) {
				$result = M()->execute("insert into articles(content,title,typeId,userId,writer,source,imagepath,state,date,cqId)	value  ('{$content}','{$title}','{$typeId}','{$userId}','{$writer}','{$source}','newspicture/{$Path['savename']}','{$state}','{$date}','{$cqId}')");


			

		 
			}else if ($imagepath==NULL)
			{
				$result = M()->execute("insert into articles(content,title,typeId,userId,writer,source,state,date,cqId) value  ('{$content}','{$title}','{$typeId}','{$userId}','{$writer}','{$source}','{$state}','{$date}','{$cqId}')");
			}
			
			if($result > 0)
			{
				$str = M("articles")->field("id")->order("id desc")->limit("1")->find();
				
				foreach ($role as $key => $v) {
				$sql = M()->execute("insert into sidgin(aid,cid) values ('{$str['id']}','$v')");
			}
			
			
			/*$tit =  base64_encode ( $title);
			$cont = base64_encode($content);
			$path = $Path['savename'];
			$str = M()->query("select * from articles order by id desc limit 0,1");
			$id = $str['0']['id'];
			if($typeId==2||$typeId==3||$typeId==1){
						$category="公安要闻";
			}else if($typeId==9||$typeId==10||$typeId==19||$typeId==13||$typeId==14||$typeId==13||$typeId==14){
						$category="工作动态";
					}else if($typeId==5||$typeId==6||$typeId==7||$typeId==8||$typeId==15||$typeId==16){
							$category="通知通报";
					}else{
						$category="专题专栏";
					}
					$serverUrl = 'http://10.97.145.188:8080';
					$imgUrl = 'http://10.97.145.188:8080/public/newspicture/'.$path;*/
	/*	$post_data = array(
  		 'title' => "$tit",
  		 'serviceServer' => 'JZCQGAXXW',
          "serverUrl "=>"$serverUrl", 
          "category "=>"$category",
           "appEntityId "=>"$id",
           "appTime "=>"$date",
            "content "=>"$cont",
            "createId "=>"晋中市城区分局",
            "imgUrl "=>"$imgUrl"
			  
  		);*/
  		/*$date = str_replace("-", "/", $date);
  		$post_data = '{
  		 "title":"'.$tit.'",
  		 "serviceServer":"JZCQGAXXW",
          "serverUrl":"'.$serverUrl.'", 
          "category":"'.$category.'",
           "appEntityId":"'.$id.'",
           "appTime":"'.$date.'",
            "content":"'.$cont.'",
            "createId":"晋中市城区分局",
            "imgUrl":"'.$imgUrl.'"}';
			  

  $url = "http://10.97.81.26:8000/supp/suppNotify/create";

$haha = new \HttpClient("http://10.97.81.26:8000");

$post_data = str_replace("\\/", "/", $post_data);
$post_data = str_replace("+", "%2B", $post_data);
$post_data = str_replace("\r", "", $post_data);
$post_data = str_replace("\n", "", $post_data);
$post_data ="json=".$post_data;
  	$con =  $haha->quickPost($url,$post_data);*/
/*  echo $post_data."<br/><br/>";
  		echo $con;
   		exit;*/

			

				M()->execute("update types set articleNum=articleNum+1 where typeId={$typeId}");
				$this->success("添加文章成功",__ROOT__."/admin.php/AddNews/addnews/id/1");
				exit;
			}else
			{
				$this->success("添加文章失败",__ROOT__."/admin.php/AddNews/addnews");
				exit;
			}
		}
		//文章列表
		public function listnews(){
			//获得总记录数
			$totalRow = M("articles")->where("state<9")->count();
			//实例化分页类
			$page = new Page($totalRow,10);	
			$newsInfo = M("articles")->where("state<9")->join("types on types.typeId=articles.typeId")->order("articles.id desc")->limit($page->firstRow,$page->listRows)->select();
			$this->assign("pageList",$page->show());//分页栏
			$this->assign("newsInfo",$newsInfo);
			$this->display();
		
		}
		//删除文章将state设置为9
		public function Recycling($articleId)
		{
			$sql = M()->execute("update articles set state=9 where id={$articleId}");
			
			
			 if($sql>0){
			$url = "http://10.97.81.26:8000/supp/suppNotify/del";
			$http = new \HttpClient("http://10.97.81.26:8000");
			$del = '{"appEntityId":"'.$articleId.'"}';
			$del ="appEntityId=".$del;
  			$con =  $http->quickPost($url,$del);
  			
				$this->success("删除文章成功",__ROOT__."/admin.php/AddNews/listnews");	
			}else{
				
				$this->success("删除文章失败",__ROOT__."/admin.php/AddNews/listnews");
				
			} 
		}
		//文章回收站
		public function listrecycle(){
			//获得总记录数
			$totalRow = M("articles")->where("state=9")->count();
			//实例化分页类
			$page = new Page($totalRow,10);
			$newsInfo = M("articles")->where("state=9")->join("types on types.typeId=articles.typeId")->order("articles.id asc")->limit($page->firstRow,$page->listRows)->select();
			$this->assign("pageList",$page->show());//分页栏
			$this->assign("newsInfo",$newsInfo);
			$this->display();
		}
		//彻底删除文章
		public function delete($articleId)
		{
			$sql2 = M()->execute("delete from articles where id={$articleId}");
			if($sql2 > 0)
			{	
				$q = M("articles")->where("id={$articleId}")->find();
				M()->execute("update types set articleNum=articleNum-1 where typeId={$q['typeId']}");
				$this->success("彻底删除文章成功",__ROOT__."/admin.php/AddNews/listnews");
				
			}else
			{
				$this->success("彻底删除文章成功",__ROOT__."/admin.php/AddNews/listnews");
				
			}
		
		}
		//文章修改页
		public function index()
		{	
			$articleId = $_GET['articleId'];
			$new =	M()->query("select * from articles  a inner join types b where id={$articleId} and a.typeId=b.typeId");
			$this->assign("new",$new);
			$this->display();
		}
		//修改新闻
		public function update()
		{
			//获取表单提交的数据
			$articleId = $_GET['articleId'];
			$content = $_POST['content'];//新闻正文
			$title = $_POST['title'];//新闻标题
			$writer = $_POST['writer'];//新闻作者
			$source = $_POST['source'];//新闻来源
			$result = M()->execute("update articles set title='{$title}',content='{$content}',writer='{$writer}',source='{$source}' where id='{$articleId}'");
			if($result > 0)
			{
				$this->success("修改新闻成功",__ROOT__."/admin.php/AddNews/listnews");
				exit;
			}else
			{
				$this->success("修改新闻失败",__ROOT__."/admin.php/AddNews/index/articleId/{$articleId}");
				exit;
			}
		}
	}