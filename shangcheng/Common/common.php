<?php
// 函数块
function index_login($params, $content, $smarty)
{
  if (isset($content)) {
  	if(isset($_SESSION["username"])){
  		 $content="<a style='color:#333' href='?center-center!person_center.html'>".$_SESSION["username"]."</a><a style='margin:0 10px' href='javascript:common_loginout()'>注销</a>";
  	}
    return $content;
  }
}
//计算数组长度
function tpl_count($val){
	return count($val);
}
//最近浏览逻辑
function addRecent($id){
	if(isset($_SESSION["username"])){
		$muser=new UsersModel();
		$user=$_SESSION["username"];
		$result=$muser->field("recent_scan")->where("username='$user'")->select();
		$recent_scan=$result[0]["recent_scan"];
		if(empty($recent_scan)){
			$recent_scan=isset($_COOKIE["recentScan"])?$_COOKIE["recentScan"]:"";
		}
		$now=";".$id.$recent_scan;
		$muser->where("username='$user'")->update(array("recent_scan"=>$now));
	}else{
		$current_cookie=isset($_COOKIE["recentScan"])?$_COOKIE["recentScan"]:"";
		setcookie("recentScan",";".$id.$current_cookie,3600*24*14+time());
	}
}
function readRecent(){
	$returnArray=array();
	$chushi=array("1","2");
	if(isset($_SESSION["username"])){
		$muser=new UsersModel();
		$user=$_SESSION["username"];
		$result=$muser->field("recent_scan")->where("username='$user'")->select();
		$returnArray=explode(";",$result[0]["recent_scan"]);
	}else{
		$current_cookie=isset($_COOKIE["recentScan"])?$_COOKIE["recentScan"]:"";
		$returnArray=explode(";",$current_cookie);
	}
	$returnArray=array_merge($returnArray,$chushi);
	$returnArray=array_slice($returnArray,1,15);
	return $returnArray;
}
//最近浏览
function recentScan($mgoods,$smarty){
	//最近浏览
	$recentArray=readRecent();
	$where="";
	foreach ($recentArray as $item){
		$where.="goods_id= '$item' or ";
	}
	$where =substr($where, 0,-3);
	$result=$mgoods->field("name,goods_id")->where($where)->select();
	$smarty->assign("recentScan",$result);
	return $result;
}
?>