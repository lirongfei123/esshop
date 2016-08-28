<?php
class DatatestAction extends Action{
	public function testSave(){
		$mboy=new BoyModel();
		$boy=array();
		$boy["id"]=13;
		$boy["name"]="yangdanping";
		$mboy->save($boy);
	}
	public function testSelect(){
		$mboy=new BoyModel();
		print_r($mboy->select());
	}
	public function testUpdate(){
		$mboy=new BoyModel();
		$update=array("name"=>"lirongfei");
		$mboy->where("id=11")->update($update);
	}
	public function testDelete(){
		$mboy=new BoyModel();
		$mboy->where("id=10")->delete();
	}
	public function testField(){
		$mboy=new BoyModel();
		print_r($mboy->field("id")->limit(3)->select());
	}
}
?>