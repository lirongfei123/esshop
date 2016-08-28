<?php
class GoodsModel extends Model{
	protected $fields=array("name",
			"face",
			"onesay",
			"price",
			"miaoshu",
			"create_time",
			"create_user",
			"goods_type",
			"des_type",
			"goods_id",
			"scan_num",
			"disabled"
	);
	public function where($str,$isable=true){
		if(empty($isable)){
			$this->asql.="where $str ";
		}else if($isable){
			$this->asql.="where $str and disabled=0 ";
		}else{
			$this->asql.="where $str and disabled=1 ";
		}
		return $this;
	}
}