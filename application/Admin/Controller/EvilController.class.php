<?php 
	namespace Admin\Controller;
	use Think\Upload;//导入上传类
	use Think\Page;//导入分页
class EvilController extends BaseController{
	//搜索功能
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
			$Info = M('evil')->where("{$search} like '%{$keyword}%'")->join("eviltype on eviltype.typeId=evil.typeId")->order("evil.id desc")->select();
			$totalRow = count($Info);
			$page = new Page($totalRow,10);
			$newsInfo = M('evil')->where("{$search} like '%{$keyword}%'")->join("eviltype on eviltype.typeId=evil.typeId")->order("evil.id desc")->limit($page->firstRow,$page->listRows)->select();
				
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
	public function addevil()
	{
		$type = M("eviltype")->select();
		$this->assign("type",$type);
		$this->display();
	}
	//扫黑进行修改
	public function update()
		{
			//获取表单提交的数据
			$articleId = $_GET['articleId'];
			$content = $_POST['content'];//新闻正文
			$title = $_POST['title'];//新闻标题
			$writer = $_POST['writer'];//新闻作者
			$date = $_POST['date'];//新闻日期
			$result = M()->execute("update evil set title='{$title}',content='{$content}',writer='{$writer}',date='{$date}' where id='{$articleId}'");
			if($result > 0)
			{
				$this->success("修改扫黑成功",__ROOT__."/admin.php/Evil/listevil");
				exit;
			}else
			{
				$this->success("修改扫黑失败",__ROOT__."/admin.php/Evil/index/articleId/{$articleId}");
				exit;
			}
		}
	//修改页面
	public function index()
		{	
			$articleId = $_GET['articleId'];
			$new =	M()->query("select * from evil  a inner join eviltype b where id={$articleId} and a.typeId=b.typeId");
			
			$this->assign("new",$new);
			$this->display();
		}
	//批量删除扫黑文章
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
		$arr = M()->execute("delete from evil   where $str");
		
		if($arr>0){
			$this->success("删除文章成功",__ROOT__."/admin.php/Evil/listevil.html");
			exit;
		}
		
		
		}
	//删除扫黑单个文章
	public function Recycling($articleId)
		{
			$sql = M()->execute("delete from evil where id={$articleId}");
			
			
			 if($sql>0){
			/*$url = "http://10.97.81.26:8000/supp/suppNotify/del";
			$http = new \HttpClient("http://10.97.81.26:8000");
			$del = '{"appEntityId":"'.$articleId.'"}';
			$del ="appEntityId=".$del;
  			$con =  $http->quickPost($url,$del);*/
  			
				$this->success("删除文章成功",__ROOT__."/admin.php/Evil/listevil");	
			}else{
				
				$this->success("删除文章失败",__ROOT__."/admin.php/Evil/listevil");
				
			} 
		}
	//扫黑列表
	public function listevil()
	{
		//获得总记录数
	    $totalRow = M("evil")->where("state<9")->count();
			//实例化分页类
	    $page = new Page($totalRow,10);	
	   $newsInfo = M("evil")->where("evil.state<9")->join("eviltype on eviltype.typeId=evil.typeId")->order("evil.id desc")->limit($page->firstRow,$page->listRows)->select();
	   
		$this->assign("pageList",$page->show());//分页栏
		$this->assign("newsInfo",$newsInfo);
		
		$this->display();
	}
	//添加扫黑
public function  addnew($content='',$title='',$typeId='',$writer='',$userName='',$date="")
		{
			//获取表单提交的数据
			$content = $_POST['content'];//文章正文
			$title = $_POST['title'];//文章标题
			$typeId = $_POST['typeId'];
			$writer = $_POST['writer'];//文章作者
			//$source = $_POST['source'];//文章来源
			$date = $_POST['date'];//文章时间
			$time = date("Y-m-d H:i:s");
			//$state = $_POST['state'];//是否重点关注
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
				$result = M()->execute("insert into evil(content,title,typeId,userId,writer,imagepath,date,cqId,time)	value  ('{$content}','{$title}','{$typeId}','{$userId}','{$writer}','newspicture/{$Path['savename']}','{$date}','{$cqId}','{$time}')");

			}else if($imagepath==NULL)
			{
				$result = M()->execute("insert into evil(content,title,typeId,userId,writer,date,cqId,time) value  ('{$content}','{$title}','{$typeId}','{$userId}','{$writer}','{$date}','{$cqId}','{$time}')");
			}
		if($result > 0){
			$this->success("添加扫黑成功",__ROOT__."/admin.php/Evil/addevil");
				exit;
		}else{
			$this->success("添加扫黑失败",__ROOT__."/admin.php/Evil/addevil");
				exit;
		}	
		
	}
}