<?php
class UploadImgAction extends Action{
	public function textarea_upload(){
		$filename=$_SESSION["username"].time()."textarea_upload";
		$filepath="upload/textarea/{$_SESSION['username']}";
		if(!is_dir($filepath)){
			mkdir($filepath);
		}
		$uploadfile=new UploadFileHandle("imgFile",$filename,$filepath,"图片大小不要超过1M");
		$result=$uploadfile->upload();
		$json=array();
		if($result=="success"){
			$json["error"]=0;
			$json["url"]=$uploadfile->finalpath;
		}else{
			$json["error"]=1;
			$json["message"]=$result;
		}
		echo json_encode($json);
	}
	public function uploadify_upload(){
		$username=isset($_POST["username"])?$_POST["username"]:"users";
		$filename=$username.time()."uploadify_upload";
		$filepath="upload/uploadify/$username";
		if(!is_dir($filepath)){
			mkdir($filepath);
		}
		$uploadfile=new UploadFileHandle("Filedata",$filename,$filepath,"图片大小不要超过1M");
		$result=$uploadfile->upload();
		$json=array();
		if($result=="success"){
			$json["status"]=1;
			$json["path"]=$uploadfile->finalpath;
		}else{
			$json["status"]=0;
			$json["path"]=$result;
		}
		echo json_encode($json);
	}
}
?>