<?php
class WantedbuySearchAction extends Action{
	public function before(){
		$this->smarty->assign("fenlei_in","?wantedbuySearch!withtype.html");
	}
	public function withtype(){
		$smarty=$this->smarty;
		$type=$_GET["type"];
		$mwantedbuy=new WantedbuyModel();
		if(isset($_GET["nums"])){
			$nums=$_GET["nums"];
			$result=$mwantedbuy->where("wanted_type = $type")->orderby("wanted_time")->limit("$nums,15")->select();
			echo json_encode($result);
			return null;
		}else{
			$result=$mwantedbuy->where("wanted_type = $type")->orderby("wanted_time")->limit("15")->select();
		}
		$smarty->assign("result",$result);
		$this->display("wantedbuy_search.html");
	}
	public function index_more(){
		$smarty=$this->smarty;
		$mwantedbuy=new WantedbuyModel();
		if(isset($_GET["nums"])){
			$nums=$_GET["nums"];
			$result=$mwantedbuy->orderby("wanted_time")->limit("$nums,15")->select();
			echo json_encode($result);
			return null;
		}else{
			$result=$mwantedbuy->orderby("wanted_time")->limit("15")->select();
		}
		$smarty->assign("result",$result);
		$this->display("wantedbuy_search.html");
	}
}