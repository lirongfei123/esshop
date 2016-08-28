<?php
class MessageAction extends Action{
	//判断是否登录
	public function before(){
		if(!isset($_SESSION["username"])){
			$this->sendRedirect("?login!login.html");
		}{
			$this->smarty->assign("username",$_SESSION["username"]);
		}
	}
	public function message(){
		$smarty=$this->smarty;
		$username=$_SESSION["username"];
		$mmessage=new UsermessageModel();
		$messages=$mmessage->where("receiver='$username'")->select();
		$smarty->assign("messages",$messages);
		$this->display("message.html");
	}
	public function message_del(){
		$smarty=$this->smarty;
		$ids=explode(",",$_GET["ids"]);
		$ids=array_slice($ids,0,-1);
		$whereid="";
		foreach ($ids as $value){
			$whereid.="id=$value or ";
		}
		$whereid=substr($whereid,0,-4);
		$username=$_SESSION["username"];
		$mmessage=new UsermessageModel();
		echo $messages=$mmessage->where("receiver='$username' and $whereid")->delete();
	}
	public function already_message(){
		$smarty=$this->smarty;
		$ids=explode(",",$_GET["ids"]);
		$ids=array_slice($ids,0,-1);
		$whereid="";
		foreach ($ids as $value){
			$whereid.="id=$value or ";
		}
		$whereid=substr($whereid,0,-4);
		$username=$_SESSION["username"];
		$mmessage=new UsermessageModel();
		echo $messages=$mmessage->where("receiver='$username' and $whereid")->update(array("state"=>1));
	}
	public function message_detail(){
		$id=$_GET["id"];
		$smarty=$this->smarty;
		$username=$_SESSION["username"];
		$mmessage=new UsermessageModel();
		$message=$mmessage->where("receiver='$username' and id = $id")->select();
		$mmessage->where("receiver='$username' and id = $id")->update(array("state"=>1));
		$smarty->assign("message",$message[0]);
		$this->display("message_detail.html");
	}
	public function message_new(){
		$id=$_GET["id"];
		$smarty=$this->smarty;
		$username=$_SESSION["username"];
		$mmessage=new UsermessageModel();
		$message=$mmessage->where("receiver='$username' and id = $id")->select();
		$smarty->assign("message",$message[0]);
		$this->display("message_new.html");
	}
}