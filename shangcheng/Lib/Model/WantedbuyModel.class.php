<?php
class WantedbuyModel extends Model{
	protected $fields=array(
			"wanted_id",
			"wanted_name",
			"wanted_ower",
			"wanted_time",
			"miaoshu",
			"wanted_price",
			"wanted_type",
			"wanted_scans",
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
?>