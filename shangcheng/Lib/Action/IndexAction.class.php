<?php
class IndexAction extends Action{
	public function before(){
		$this->smarty->registerPlugin("block","auto_login","index_login");
	}
	//显示主页
	public function index(){
		$smarty=$this->smarty;
		//显示最新求购信息
		$mwantedbuy=new WantedbuyModel();
		$result=$mwantedbuy->where("disabled=0")->orderby("wanted_time")->limit("10") ->select();
		$smarty->assign("wantedbuy",$result);
		//显示各类商品信息
		$result_array=array();
		$mgoods=new GoodsModel();
		$temp_array=array();
		$temp_array["title"]="刚刚发布";
		$temp_array["more_href"]="?goodsSearch!index_more.html?order=create_time";
		$result=$mgoods->where("disabled=0")->orderby("create_time")->limit("7")->select();
		$temp_array["detail_list"]=$result;
		array_push($result_array, $temp_array);
		
		$temp_array=array();
		$temp_array["title"]="低价秒杀";
		$temp_array["more_href"]="?goodsSearch!index_more.html?order=price";
		$result=$mgoods->where("disabled=0")->orderby("price asc,create_time")->limit("7")->select();
		$temp_array["detail_list"]=$result;
		array_push($result_array, $temp_array);
		
		$temp_array=array();
		$temp_array["title"]="精品二手";
		$temp_array["more_href"]="?goodsSearch!index_more.html?order=scan_num";
		$result=$mgoods->where("disabled=0")->orderby("scan_num desc,create_time")->limit("7")->select();
		$temp_array["detail_list"]=$result;
		array_push($result_array, $temp_array);
		
		$smarty->assign("result_array",$result_array);
		$smarty->display("index.html");
	}
	//显示主页
	public function top_logo(){
		$smarty=$this->smarty;
		$smarty->display("top_logo.html");
	}
	public function send(){
		$this->sendRedirect("?index!index.html");
	}
	//换一种表情
	public function choose_face(){
		$type=$_GET["type"];
		$filepath=ROOT_PATH."/public/images/$type";
		if(!is_dir($filepath)){
			exit("false");
		}
		$imgs=array();
		$dir=dir($filepath);
		while ($img=$dir->read()) {
			if($img!="."&&$img!=".."){
				array_push($imgs,$img);
			}
		}
		echo json_encode($imgs);
	}
	//储存消息
	public function save_info(){
		$data=array();
		$data["message"]=$_GET["message"];
		$data["time"]=$_GET["time"];
		$data["user"]=isset($_SESSION["username"])?$_SESSION["username"]:"校友";
		$m=new ChatmessageModel();
		if($m->save($data)>0){
			echo "ok";
		}
	}
	//初始化消息
	public function init_info(){
		$m=new ChatmessageModel();
		$messages=$m->orderby("time")->limit(20)->select();
		$messages=array_reverse($messages);
		echo json_encode($messages);
	}
	//读取消息
	public function read_info(){
		$lastInfo=$_GET["lastInfo"];
		$messages=array();
		$m=new ChatmessageModel();
		$result=$m->where("time='$lastInfo'")->select();
		$id=$result[0]["id"];
		$messages=$m->where("id >$id")->select();
		echo json_encode($messages);
	}
	//反馈建议
	public function jianyi_action(){
		$data=array();
		$user=$_GET["user"];
		$detail=$_GET["detail"];
		$data["user"]=$user;
		$data["detail"]=$detail;
		if(empty($user)&&empty($detail)){
			echo "ok";
			return null;
		}
		$jianyi=new JianyiModel();
		$jianyi->save($data);
		echo "ok";
	}
}
?>