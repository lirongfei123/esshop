<?php
class GoodsSearchAction extends Action{
	public function before(){
		$this->smarty->assign("fenlei_in","?goodsSearch!withtype.html");
	}
	public function withtype(){
		$type=$_GET["type"];
		$smarty=$this->smarty;
		$mgoods=new GoodsModel();
		if(isset($_GET["nums"])){
			$nums=$_GET["nums"];
			$result=$mgoods->where("goods_type=$type")->orderby("create_time")->limit("$nums,10")->select();
			echo json_encode($result);
			return null;
		}else{
			$result=$mgoods->where("goods_type=$type")->orderby("create_time")->limit("0,10")->select();
		}
		$smarty->assign("goods",$result);
		//最近浏览
		recentScan($mgoods,$smarty);
		$smarty->display("goods_search.html");
	}
	public function index_more(){
		$order=$_GET["order"];
		switch ($order){
			case "price":{
				$order="price asc,create_time";
				break;
			}
			case "scan_num":{
				$order="scan_num desc,create_time";
				break;
			}
		}
		$smarty=$this->smarty;
		$mgoods=new GoodsModel();
		if(isset($_GET["nums"])){
			$nums=$_GET["nums"];
			$result=$mgoods->orderby("$order")->limit("$nums,10")->select();
			echo json_encode($result);
			return null;
		}else{
			$result=$mgoods->orderby("$order")->limit("0,10")->select();
		}
		$smarty->assign("goods",$result);
		//最近浏览
		recentScan($mgoods,$smarty);
		
		$smarty->display("goods_search.html");
	}
}