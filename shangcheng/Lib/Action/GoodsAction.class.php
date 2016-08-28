<?php
class GoodsAction extends Action{
	public function before(){
		$this->smarty->assign("fenlei_in","?goodsSearch!withtype.html");
	}
	public function goods(){
		$smarty=$this->smarty;
		$mgoods=new GoodsModel();
		$result=$mgoods->where("disabled=0")->orderby("create_time")->limit("0,10")->select();
		$smarty->assign("goods",$result);
		//高访问量
		$result=$mgoods->where("disabled=0")->orderby("scan_num")->limit("0,20")->select();
		$smarty=$this->smarty;
		$smarty->assign("top_goods",$result);
		//最近浏览
		$result=recentScan($mgoods,$smarty);
		//猜你喜欢
		if(count($result)==0){
			$where="1=1";
		}else{
			$where="";
			foreach ($result as $item){
				$name=$item['name'];
				$where.="name like '%$name%' or ";
			}
			$where =substr($where, 0,-3);
		}
		$result=$mgoods->field("face,name,goods_id")->where($where)->orderby("rand()")->limit("0,6")->select();
		$smarty->assign("like_goods",$result);
		
		$this->display("goods.html");
	}
	public function otherlike(){
		$smarty=$this->smarty;
		$mgoods=new GoodsModel();
		//最近浏览
		$result=recentScan($mgoods,$smarty);
		//猜你喜欢
		if(count($result)==0){
			$where="1=1";
		}else{
			$where="";
			foreach ($result as $item){
				$name=$item['name'];
				$where.="name like '%$name%' or ";
			}
			$where =substr($where, 0,-3);
		}
		$result=$mgoods->field("face,name,goods_id")->where($where)->orderby("rand()")->limit("0,6")->select();
		$smarty->assign("like_goods",$result);
		$this->display("goodslike_page.html");
	}
	public function load_more_goods(){
		$nums=$_GET["nums"];
		$rand=rand(3,6);
		$mgoods=new GoodsModel();
		$result=$mgoods->orderby("create_time")->limit("$nums,$rand")->select();
		echo json_encode($result);
	}
	public function goods_detail(){
		$smarty=$this->smarty;
		$id=$_GET["goods_id"];
		$mgoods=new GoodsModel();
		$result=$mgoods
		->field("*,(SELECT user_tel from users where username = create_user) AS user_tel,
				(SELECT user_qq from users where username = create_user) AS user_qq, 
				(SELECT email from users where username = create_user) AS user_mail")->where("goods_id = '$id'",null)->select();
		$smarty->assign("result",$result[0]);
		if(isset($_SESSION["goods_scans"])){
			$nowsession=$_SESSION["goods_scans"];
			if(gettype(strpos($nowsession, $id))=="boolean"){
				$_SESSION["goods_scans"]=$nowsession.$id;
				$zhi=intval($result[0]["scan_num"])+1;
				$mgoods->where("goods_id = '$id'")->update(array("scan_num"=>$zhi));
				addRecent($id);
			}
		}else{
			$_SESSION["goods_scans"]=$id;
			$zhi=intval($result[0]["scan_num"])+1;
			$mgoods->where("goods_id = '$id'")->update(array("scan_num"=>$zhi));
			addRecent($id);
		}
		//评论
		$mcomment=new CommentModel();
		$comments=$mcomment->where("goods_id='$id'")->select();
		$user=new UsersModel();
		for ($i=0,$length=count($comments);$i<$length;$i++) {
			$u=$comments[$i]["user_id"];
			if(empty($u)||trim($u)=="游客"){
				$comments[$i]["user_face"]="public/images/face.jpeg";
				continue;
			}
			$face=$user->field("user_face")->where("username='$u'")->select();
			$comments[$i]["user_face"]=$face[0]["user_face"];
		}
		//最近浏览
		recentScan($mgoods,$smarty);
		
		$smarty->assign("comments",$comments);
		$this->display("goods_detail.html");
	}
}