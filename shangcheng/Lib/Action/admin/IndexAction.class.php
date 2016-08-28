<?php
class IndexAction extends Action{
	public function index(){
		$smarty=$this->smarty;
		$this->display("index.html");
	}
	public function users(){
		$u=new UsersModel();
		//$result=$u->select();
		$smarty=$this->smarty;
		$smarty->assign("fields",array_keys($u->getFields()));
		$smarty->assign("results",$u->select());
		$this->display("users.html");
	}
	public function useradd(){
		
	}
}
?>