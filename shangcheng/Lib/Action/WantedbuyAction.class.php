<?php
class WantedbuyAction extends Action{
	private $pagenum=10;
	public function before(){
		$this->smarty->assign("fenlei_in","?wantedbuySearch!withtype.html");
	}
	public function wantedbuy(){
		$mwantedbuy=new WantedbuyModel();
		$resultjson=array();
		$temp=array();
		$result=$mwantedbuy->where("wanted_type = 1")->select();
		$temp[0]=intval(count($result)/$this->pagenum);
		$temp[1]=array_slice($result,0,10);
		$resultjson["one"] =$temp;
		$result=$mwantedbuy->where("wanted_type = 2")->select();
		$temp[0]=intval(count($result)/$this->pagenum);
		$temp[1]=array_slice($result,0,10);
		$resultjson["two"] = $temp;
		$result=$mwantedbuy->where("wanted_type = 3")->select();
		$temp[0]=intval(count($result)/$this->pagenum);
		$temp[1]=array_slice($result,0,10);
		$resultjson["three"] = $temp;
		$result=$mwantedbuy->where("wanted_type = 0")->select();
		$temp[0]=intval(count($result)/$this->pagenum);
		$temp[1]=array_slice($result,0,10);
		$resultjson["zero"] = $temp;
		$smarty=$this->smarty;
		$smarty->assign("results",$resultjson);
		$this->display("wantedbuy.html");
	}
	public function wantedbuy_page(){
		$page=$_GET["page"];
		$type=$_GET["type"];
		$min=$page*$this->pagenum;
		$mwantedbuy=new WantedbuyModel();
		$result=$mwantedbuy->where("wanted_type = $type")->limit("$min,$this->pagenum")->select();
		$smarty=$this->smarty;
		$smarty->assign("result",$result);
		$this->display("wantedbuy_page.html");
	}
	public function wantedbuy_detail(){
		$id=$_GET["id"];
		$mwantedbuy=new WantedbuyModel();
		$result=$mwantedbuy
		->field("*,(SELECT user_tel from users where username = wanted_ower) AS user_tel,(SELECT user_qq from users where username = wanted_ower) AS user_qq")
		->where("wanted_id = '$id'",null)->select();
		if(isset($_SESSION["wanted_scans"])){
			$nowsession=$_SESSION["wanted_scans"];
			if(gettype(strpos($nowsession, $id))=="boolean"){
				$_SESSION["wanted_scans"]=$nowsession.$id;
				$zhi=intval($result[0]["wanted_scans"])+1;
				$mwantedbuy->where("wanted_id = '$id'")->update(array("wanted_scans"=>$zhi));
			}
		}else{
			$_SESSION["wanted_scans"]=$id;
			$zhi=intval($result[0]["wanted_scans"])+1;
			$mwantedbuy->where("wanted_id = '$id'")->update(array("wanted_scans"=>$zhi));
		}
		//评论
		$mcomment=new CommentModel();
		$comments=$mcomment->field("*,(SELECT user_face from users where username = user_id) AS user_face")->where("goods_id='$id'")->select();
		$smarty=$this->smarty;
		$smarty->assign("result",$result[0]);
		$smarty->assign("comments",$comments);
		$this->display("wantedbuy_detail.html");
	}
}