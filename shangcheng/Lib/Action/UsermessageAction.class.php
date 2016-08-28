<?php
class UsermessageAction extends Action{
	public function before(){
		$this->smarty->registerPlugin("block","auto_login","index_login");
	}
	//查看个人消息
	public function user(){
		$smarty=$this->smarty;
		if(!isset($_GET["user"])){
			exit("非法");
		}
		$user=$_GET["user"];
		$muser=new UsersModel();
		$result=$muser->field("username")->where("username='$user'")->select();
		if(count($result)>0){
			$smarty->assign("username",$result[0]["username"]);
		}else{
			exit("非法");
		}
		$this->display("user.html");
	}
	//接受发给个人的消息
	public function receive_message(){
		if(isset($_POST["sender"])){
			$data["sender"]=$_POST["sender"];
			$data["receiver"]=$_POST["receiver"];
			$data["subject"]=$_POST["subject"];
			$data["message"]=$_POST["message"];
			$mmessage=new UsermessageModel();
			$data["time"]="now()";
			$mmessage->save($data);
			echo "ok";
		}else{
			exit("非法");
		}
	}
	//查看是否登录
	public function login_sure(){
		if(isset($_SESSION["username"])){
			echo $_SESSION["username"];
		}else{
			echo 0;
		}
	}
}
?>