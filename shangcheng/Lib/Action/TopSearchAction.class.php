<?php
class TopSearchAction extends Action{
	public function search(){
		$smarty=$this->smarty;
		$q=$_GET["q"];
		$type=$_GET["type"];
		$nums=isset($_GET["nums"])?$_GET["nums"]:0;
		if($type=="good"){
			$mgood=new GoodsModel();
			$result=$mgood->where("name like '%$q%'")->orderby("create_time")->limit("$nums,15")->select();
			if(isset($_GET["nums"])){
				echo json_encode($result);
				return null;
			}
			$smarty->assign("goods",$result);
			recentScan($mgood,$smarty);
			$smarty->assign("fenlei_in","?goodsSearch!withtype.html");
			$smarty->display("goods_search.html");
		}else if($type=="wanted"){
			$mwantedbuy=new WantedbuyModel();
			$result=$mwantedbuy->where("wanted_name like '%$q%'")->orderby("wanted_time")->limit("$nums,15")->select();
			if(isset($_GET["nums"])){
				echo json_encode($result);
				return null;
			}
			$smarty->assign("result",$result);
			$this->display("wantedbuy_search.html");
		}else{
			$this->sendRedirect("index.php");
		}
	}
}