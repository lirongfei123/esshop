<?php
class CenterAction extends Action{
	//判断是否登录
	public function before(){
		if(!isset($_SESSION["username"])){
			$this->sendRedirect("?login!login.html");
		}{
			$this->smarty->assign("username",$_SESSION["username"]);
		}
	}
	public function person_center(){
		$frame=isset($_GET["frame"])?$_GET["frame"]:"?center-message!message.html";
		$this->smarty->assign("frame",$frame);
		$this->display("person_center.html");
	}
	public function newproduce_action(){
		$mgoods=new GoodsModel();
		$data=array();
		$username=$_SESSION["username"];
		$data["goods_id"]=md5(time().mt_rand(1,1000000));
		$data["face"]=$_POST["produce_face"];
		$data["name"]=$_POST["goods_name"];
		$data["onesay"]=$_POST["onesay"];
		$data["goods_type"]=$_POST["goods_type"];
		$data["price"]=$_POST["price"];
		$data["miaoshu"]=$_POST["kind_textarea"];
		$data["create_time"]="now()";
		$data["create_user"]=$username;
		echo $mgoods->save($data);
	}
	//创建一个新的求购
	public function newbuy_action(){
		$username=$_SESSION["username"];
		$mwantedbuy=new WantedbuyModel();
		$data=array();
		$data["wanted_id"]=md5(time().mt_rand(1,1000000));
		$data["wanted_ower"]=$username;
		$data["wanted_name"]=$_GET["wanted_name"];
		$data["wanted_time"]="now()";
		$data["wanted_type"]=$_GET["wanted_type"];
		$data["wanted_price"]=$_GET["wanted_price"];
		$data["miaoshu"]=$_GET["kind_textarea"];
		echo $mwantedbuy->save($data);
	}
	/**
	 * 修改资料
	 */
	public function modify_info(){
		$modify_type=array("info"=>"block","psd"=>"none");
		$smarty=$this->smarty;
		$muser=new UsersModel();
		$username=$_SESSION["username"];
		$result=$muser->where("username = '$username'")->select();
		$smarty->assign("user",$result[0]);
		$smarty->assign("type","修改资料");
		$smarty->assign("modify_type",$modify_type);
		$smarty->display("center/modification.html");
	}
	public function modify_psd(){
		$modify_type=array("info"=>"none","psd"=>"block");
		$smarty=$this->smarty;
		$smarty->assign("type","修改密码");
		$smarty->assign("modify_type",$modify_type);
		$smarty->display("center/modification.html");
	}
}
?>