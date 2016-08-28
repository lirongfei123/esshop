<?php
class SeeuserAction extends Action{
	public function seeUser(){
		$smarty=$this->smarty;
		$smarty->registerPlugin("modifier", "count", "tpl_count");
		
		$mgoods=new GoodsModel();
		$already_sells=$mgoods->where("disabled=1",null)->select();
		$smarty->assign("already_sells",$already_sells);
		
		$now_sells=$mgoods->where("disabled=0",null)->select();
		$smarty->assign("now_sells",$now_sells);
		
		$mbuys=new WantedbuyModel();
		$already_buys=$mbuys->where("disabled=1",null)->select();
		$smarty->assign("already_buys",$already_buys);
		
		$now_buys=$mbuys->where("disabled=0",null)->select();
		$smarty->assign("now_buys",$now_buys);
		
		$muser=new UsersModel();
		$username=$_GET["username"];
		$result=$muser->where("username='$username'")->select();
		$this->smarty->assign("result",$result[0]);
		$this->display("user.html");
	}
}