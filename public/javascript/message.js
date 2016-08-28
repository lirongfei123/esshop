function getChecked(){
	var checks=getElementsByClassName("message_check",document,"input");
	var checked=new Array();
	map(checks,function(item){
		if(item.checked){
			checked.push(item);
		}
	});
	return checked;
}
function reply_message(){
	var checks=getChecked();
	if(checks.length==0){
		yibu_tishi("请选择要操作的项");
	}else if(checks.length>1){
		yibu_tishi("请选择一项");
	}else{
		window.open("?center-message!message_new.html?id="+checks[0].id,"detail_iframe");
	}
}
function del_message(){
	var checks=getChecked();
	if(checks.length==0){
		yibu_tishi("请选择要操作的项");
	}else{
		var ids="";
		map(checks,function(item){
			ids+=item.id+",";
		});
		$.get("?center-message!message_del.html?ids="+ids,function(data){
			if(parseInt(data)>0){
				yibu_tishi("删除成功");
				map(checks,function(item){
					var tbody=item.parentNode.parentNode.parentNode;
					tbody.removeChild(item.parentNode.parentNode);
				});
			}else{
				yibu_tishi("删除失败,请重试");
			}
		});
	}
}
function already_message(){
	var checks=getChecked();
	if(checks.length==0){
		yibu_tishi("请选择要操作的项");
	}else{
		var ids="";
		map(checks,function(item){
			ids+=item.id+",";
		});
		$.get("?center-message!already_message.html?ids="+ids,function(data){
			if(parseInt(data)>0){
				map(checks,function(item){
					item.checked=false;
					addClass(getChild(find_next(item.parentNode),0),"already");
					yibu_tishi("标记成功");
				});
			}else{
				yibu_tishi("对不起,未知错误,你可以再试一次");
			}
		});
	}
}
window.onload=function(){
	
}