<?php
class GoodadminAction extends Action{
	//判断是否登录
	public function before(){
		if(!isset($_SESSION["username"])){
			$this->sendRedirect("?login!login.html");
		}{
			$this->smarty->assign("username",$_SESSION["username"]);
		}
	}
	public function current_produce(){
		$mgood=new GoodsModel();
		$username=$_SESSION["username"];
		$goods=$mgood->where("create_user='$username'")->select();
		$this->smarty->assign("goods",$goods);
		$this->display("current_produce.html");
	}
	public function current_mark(){
		$id=$_GET["id"];
		$mgood=new GoodsModel();
		echo $goods=$mgood->where("goods_id = '$id'")->update(array("disabled"=>1));
	}
	public function del_good(){
		$id=$_GET["id"];
		$mgood=new GoodsModel();
		echo $goods=$mgood->where("goods_id = '$id'",null)->delete();
	}
	public function old_produce(){
		$username=$_SESSION["username"];
		$mgood=new GoodsModel();
		$final_result=array();
		$mgood->query("CREATE VIEW oldproduce as select *,SUBSTRING(create_time,1,7) mouth_time from goods where create_user = '$username'");
		$result=$mgood->query("select * from oldproduce group by mouth_time");
		if(count($result)>0){
			foreach ($result as $temp){
				$temp_result=array();
				$time=$temp["mouth_time"];
				$result=$mgood->query("select * from oldproduce where mouth_time = '$time'");
				$temp_result["mouth"]=$time;
				$temp_result["result"]=$result;
				array_push($final_result, $temp_result);
			}
		}
		$mgood->query("DROP VIEW oldproduce");
		$this->smarty->assign("final_result",$final_result);
		$this->display("old_produce.html");
	}
}