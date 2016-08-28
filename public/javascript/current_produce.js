function mark_old(elem,id){
	$.get("?center-goodadmin!current_mark.html?id="+id,function(data){
		if(parseInt(data)>0){
			yibu_tishi("标记成功");
			delete_elem(elem);
		}else{
			yibu_tishi("未知错误,试试刷新重试吧");
		}
	});
}
function del_good(elem,id){
	$.get("?center-goodadmin!del_good.html?id="+id,function(data){
		if(parseInt(data)>0){
			yibu_tishi("删除成功");
			delete_elem(elem);
		}else{
			yibu_tishi("未知错误,试试刷新重试吧");
		}
	});
}
function delete_elem(elem){
	var produce_list=document.getElementById("produce_list");
	var current=elem.parentNode.parentNode.parentNode.parentNode;
	produce_list.removeChild(current);
}