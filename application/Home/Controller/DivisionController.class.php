<?php
namespace Home\Controller;
use Think\Page;//导入分页
class DivisionController extends BaseController {
/*    public function index(){
    	$last['first'] = date("Y-m-d", mktime(24, 0, 0, date("m"), 0, date("Y")));
    	
    	$last['end'] =  date("Y-m-d", mktime(0, 0, 0, date("y") + 1, 0, date("Y")));
    	//获取所有单位  所对应的所有的文章
    	$arr = M("chengqu")->select();
    	foreach ($arr as $k=>$v)
    	{
    		$v['count'] = M()->query("select count(cqId) from articles where cqId='{$v['id']}' and  dateandtime>'{$last['first']}' and dateandtime<'{$last['end']}' and typeId=9");
    		$arr[$k]=$v;
    	}
    	$this->assign("arr",$arr);
    	$this->display();
    	
    }*/
        public function index(){
        $last['first'] = date("Y-m-d", mktime(24, 0, 0, date("m"), 0, date("Y")));
        
        $last['end'] =  date("Y-m-d", mktime(0, 0, 0, date("y") + 1, 0, date("Y")));
        //获取所有单位  所对应的所有的文章
         /*$arr = M()->query("select a.id,a.username,count(b.userId) as count from admin a,articles b where a.id = b.userId and b.state<9  GROUP by b.userId");*/
       $arr = M()->query("
SELECT id,username, CAST(SUM(IFNULL(userId,0))/id AS SIGNED INTEGER) AS c FROM(
SELECT a.id,a.username,
  b.userId FROM admin AS a LEFT OUTER JOIN articles AS b
ON a.id = b.userId)T
GROUP BY id
ORDER BY c DESC");
     
        $this->assign("arr",$arr);
       
      
         $this->display();
    }
    public function liste(){
    	$id = $_GET['id'];
    	$last['first'] = date("Y-m-d", mktime(24, 0, 0, date("m"), 0, date("Y")));
    	 
    	$last['end'] =  date("Y-m-d", mktime(0, 0, 0, date("y") + 1, 0, date("Y")));
    	 
    	$totalRow = M("articles")->where("state<9 and userId={$id} and typeId=9 ")->count();
    	//实例化分页类
    	$page = new Page($totalRow,15);
    	$arr = M()->query("select id,title,date from articles where userId='{$id}' and state<9 and typeId=9 and dateandtime>'{$last['first']}' and dateandtime<'{$last['end']}'  limit $page->firstRow,$page->listRows");
    	$this->assign("pageList",$page->show());//分页栏
    	$this->assign("arr",$arr);
    	$this->display();
    }
}