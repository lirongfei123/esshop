<?php
class WantedadminAction extends Action{
	//判断是否登录
	public function before(){
		if(!isset($_SESSION["username"])){
			$this->sendRedirect("?login!login.html");
		}{
			$this->smarty->assign("username",$_SESSION["username"]);
		}
	}
	public function current_wanted(){
		$mwanted=new WantedbuyModel();
		$username=$_SESSION["username"];
		$wanteds=$mwanted->where("wanted_ower='$username'")->select();
		$this->smarty->assign("wanteds",$wanteds);
		$this->display("current_wanted.html");
	}
	public function current_mark(){
		$id=$_GET["id"];
		$mwanted=new WantedbuyModel();
		echo $mwanted->where("wanted_id = '$id'")->update(array("disabled"=>1));
	}
	public function del_wanted(){
		$id=$_GET["id"];
		$mwanted=new WantedbuyModel();
		echo $mwanted->where("wanted_id = '$id'")->delete();
	}
	public function old_wanted(){
		$username=$_SESSION["username"];
		$mwanted=new WantedbuyModel();
		$final_result=array();
		$mwanted->query("CREATE VIEW old_wanted as select *,SUBSTRING(wanted_time,1,7) mouth_time from wantedbuy where wanted_ower = '$username'");
		$result=$mwanted->query("select * from old_wanted group by mouth_time");
		foreach ($result as $temp){
			$temp_result=array();
			$time=$temp["mouth_time"];
			$result=$mwanted->query("select * from old_wanted where mouth_time = '$time'");
			$temp_result["mouth"]=$time;
			$temp_result["result"]=$result;
			array_push($final_result, $temp_result);
		}
		$mwanted->query("DROP VIEW old_wanted");
		$this->smarty->assign("final_result",$final_result);
		$this->display("old_wanted.html");
	}
}