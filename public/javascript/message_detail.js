function handle_message(event){
	event=EventUtil.getEvent(event);
	var target=EventUtil.getTarget(event);
	if(target.className=="del"){
		var ids=document.getElementById("message_id").value;
		$.get("?center-message!message_del.html?ids="+ids+",",function(data){
			if(parseInt(data)>0){
				yibu_tishi("删除成功");
				setTimeout(function(){
					history.go(-1);
				},500);
			}else{
				yibu_tishi("删除失败,请重试");
			}
		});
	}else if(target.className=="back"){
		history.go(-1);
	}else if(target.className=="reply"){
		var id=document.getElementById("message_id").value;
		window.open("?center-message!message_new.html?id="+id,"detail_iframe");
	}
}