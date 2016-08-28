<?php
class LoginAction extends Action{
	public function before(){
		$this->smarty->registerPlugin("block","auto_login","index_login");
	}
	public function email_check(){
		$mail=$_GET["mail"];
		$muser=new UsersModel();
		$result=$muser->field("email")->where("email='$mail'")->select();
		echo count($result);
	}
	public function username_check(){
		$username=$_GET["username"];
		$muser=new UsersModel();
		$result=$muser->field("username")->where("username='$username'")->select();
		echo count($result);
	}
	public function create_user(){
		$muser=new UsersModel();
		$user=array();
		$user["username"]=$_POST["username"];
		$user["password"]=md5($_POST["password"]);
		$user["email"]=$_POST["email"];
		$user["user_face"]=$_POST["user_face"];
		$user["user_tel"]=$_POST["user_tel"];
		$user["user_qq"]=$_POST["user_qq"];
		$user["miaoshu"]=$_POST["miaoshu"];
		$user["register_time"]="now()";
		if($muser->save($user)==1){
			$_SESSION["username"]=$user["username"];
			$this->sendRedirect("?center-center!person_center.html");
		}
	}
	public function gologin(){
		$username=$_POST["login_username"];
		$password=md5($_POST["login_password"]);
		$muser=new UsersModel();
		if(count($muser->field("password")->where("email='$username'")->select())>0||count($muser->field("password")->where("username='$username'")->select())>0){
			$result=$muser->field("password")->where("username='$username' or email='$username'")->select();
			if($result[0]["password"]==$password){
				$muser->where("username='$username'")->update(array("recent_time"=>"now()"));
				$_SESSION["username"]=$username;
				echo "ok";
			}else{
				echo "密码不匹配";
			}
		}else{
			echo "用户名不存在";
		}
	}
	public function default_login(){
		if(isset($_GET["pl_username"])){
			$username=$_GET["pl_username"];
			$_SESSION["username"]=$username;
		}
		echo "ok";
	}
	public function loginout(){
		if(isset($_GET["history"])){
			unset($_SESSION["username"]);
			$this->sendRedirect($_GET["history"]);
		}
	}
	public function modify_info(){
		$data=array();
		$data["user_face"]=$_GET["user_face"];
		$data["user_tel"]=$_GET["user_tel"];
		$data["user_qq"]=$_GET["user_qq"];
		$username=$_SESSION["username"];
		$muser=new UsersModel();
		echo $muser->where("username='$username'")->update($data);
	}
	public function modify_psd(){
		$username=$_SESSION["username"];
		$muser=new UsersModel();
		$result=$muser->field("password")->where("username='$username'")->select();
		$data=array();
		$data["password"]=md5($_GET["new_password"]);
		if($result[0]["password"]==md5($_GET["old_password"])){
			echo $muser->where("username='$username'")->update($data);
		}else{
			echo "旧密码不正确";
		}
	}
}
?>