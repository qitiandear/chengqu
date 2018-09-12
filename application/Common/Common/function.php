<?php 
 //ip屏蔽
function getIP() {  
    return $_SERVER['REMOTE_ADDR'];  
}

function check_ip(){  
    $ALLOWED_IP=array('10.97,145.*','10.97.146.*','10.97.147.*','10.97.148.*','127.0.0.1','192.168.130.2','192.168.8.223');  
    $IP=getIP(); 
    
    $check_ip_arr= explode('.',$IP);//要检测的ip拆分成数组  
    #限制IP  
    if(!in_array($IP,$ALLOWED_IP)) {  
        foreach ($ALLOWED_IP as $val){  
            if(strpos($val,'*')!==false){//发现有*号替代符  
                 $arr=array();//  
                 $arr=explode('.', $val);  
                 $bl=true;//用于记录循环检测中是否有匹配成功的  
                 for($i=0;$i<4;$i++){  
                    if($arr[$i]!='*'){//不等于*  就要进来检测，如果为*符号替代符就不检查  
                        if($arr[$i]!=$check_ip_arr[$i]){  
                            $bl=false;  
                            break;//终止检查本个ip 继续检查下一个ip  
                        }  
                    }  
                 }//end for   
                 if($bl){//如果是true则找到有一个匹配成功的就返回  
                    return;  
                    die;  
                 }  
            }  
        }//end foreach  
        header("location:".__APP__."/News/error.html"); 

        die;  
    }  
    
} 
//应用系统和 信息查询系统
function getTypes($fid=0,$indentNum=0){
	$Type=M('system');	
	$arr=$Type->where("fid=$fid and state<9")->select();
	$optionStr="";
	//产生缩进字符串
	$indentStr=str_repeat("—", $indentNum);
	$indentNum++;
	foreach($arr as $v){
		$optionStr.="<option value='{$v['id']}'>{$indentStr}{$v['tname']}</option>";
		//获取子集  
		$sStr=getTypes($v['id'],$indentNum);
		$optionStr.=$sStr;
	}
	return $optionStr;
}
function getTypeByArrd($fid=0,$indentNum=0){
	$arr = M("system")->where("fid=$fid and state< 9")->select();

	static $reArr = array();
	//产生缩进字符串
	$indentStr = str_repeat("——", $indentNum);
	$indentNum++;
	foreach ($arr as $v){
		$reArr[] = array('id'=>$v['id'],'tname'=>$indentStr.$v['tname']);
		getTypeByArrd($v['id'],$indentNum);
	}
	return $reArr;
}
//获取分类
function getTypen($fid=0,$num=0){
	$ob=M('trend');
	$arr=$ob->where("fid=$fid and state=0")->select();
	$gangStr=str_repeat("&nbsp;—",$num);
	$num++;
	$optionStr="";
	foreach($arr as $v){
		$optionStr.="<option value='{$v['id']}'>{$gangStr}{$v['tname']}</option>";
		$sStr=getTypen($v['id'],$num);
		$optionStr.=$sStr;
	}
	return $optionStr;
}
//获取分类er
/* //获取分类
function getTypes($fid=0){
	$ob=M('trend');
	$arr=$ob->where("fid=$fid and state=0")->select();
	//$gangStr=str_repeat("&nbsp;—",$num);
	//$num++;
	$optionStr="";
	foreach($arr as $v){
		$optionStr.="<ul id=\"nav\">
  <li class=\"mainli\">{$v['tname']}
        <ul class=\"firstChild\">
            <li>菜单
                    <ul class=\"secondChild\">
                        <li>子菜单</li>
                        <li>子菜单</li>
                        <li>子菜单</li>
                    </ul>
            </li>
            <li>菜单
                    <ul class=\"secondChild\">
                        <li>子菜单</li>
                        <li>子菜单</li>
                        <li>子菜单</li>
              </ul>
    </li>
            <li>菜单
                    <ul class=\"secondChild\">
                        <li>子菜单</li>
                        <li>子菜单</li>
                        <li>子菜单</li>
                    </ul>
          </li>
        </ul>
  </li>\"
  </ul>;";
		$sStr=getTypes($v['id']);
		$optionStr.=$sStr;
	}
	return $optionStr;
} */
function getTypeByArr($fid=0,$indentNum=0){
	$arr = M("trend")->where("fid=$fid and state< 9")->select();

	static $reArr = array();
	//产生缩进字符串
	$indentStr = str_repeat("——", $indentNum);
	$indentNum++;
	foreach ($arr as $v){
		$reArr[] = array('id'=>$v['id'],'tname'=>$indentStr.$v['tname']);
		getTypeByArr($v['id'],$indentNum);
	}
	return $reArr;
}


function http_post_json($url, $jsonStr)
{
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_POST, 1);
  curl_setopt($ch, CURLOPT_URL, $url);
  curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonStr);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_HTTPHEADER, array(
      'Content-Type: application/json; charset=utf-8',
      'Content-Length: ' . strlen($jsonStr)
    )
  );
  $response = curl_exec($ch);
  $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
  return array($httpCode, $response);
}
function send_post($url, $post_data) {
  
  $postdata = http_build_query($post_data);
  $options = array(
  'http' => array(
  'method' => 'POST',//or GET
  'header' => 'Content-type:application/x-www-form-urlencoded',
  'content' => $postdata,
  'timeout' => 15 * 60 // 超时时间（单位:s）
  )
  );
  $context = stream_context_create($options);
  $result = file_get_contents($url, false, $context);
  return $result;
  }
