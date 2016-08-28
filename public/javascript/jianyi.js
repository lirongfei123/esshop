$(function(){
	var jianyi_form=document.forms["jianyi_form"];
	jianyi_form.onsubmit=function(event){
		event=EventUtil.getEvent(event);
		EventUtil.preventDefault(event);
		var user=jianyi_form.elements["user"].value;
		var detail=jianyi_form.elements["detail"].value;
		$.get("?index!jianyi_action.html",{user:user,detail:detail},function(data){
			yibu_tishi("发送成功,马上跳回主页");
			setTimeout(function(){
				location.href="?index!index.html";
			},500);
		});
	}
});