<?php
class EvaluateAction extends Action{
	public function newevaluate(){
		if(!isset($_SESSION["username"])){
			echo "nologin";
			return null;
		}
		$data["goods_id"]=$_POST["goods_id"];
		$data["user_id"]=$_SESSION["username"];
		$value=htmlentities($_POST["detail"],ENT_COMPAT,"UTF-8");
		$data["time"]="now()";
		if(isset($_POST["oldvalue"])){
			$user=$_SESSION["username"];
			$value="<fieldset><legend>$user</legend>".$_POST["oldvalue"]."</fieldset>".$value;
		}
		$data["detail"]=$value;
		$mevaluate=new CommentModel();
		echo $mevaluate->save($data);
	}
}