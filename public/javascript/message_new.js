$(function(){
	create_kindEditor("?uploadImg!textarea_upload.html");
	register_from();
});
function register_from(){
	var form=document.forms["message_new"];
	form.onsubmit=function(event){
		event=EventUtil.getEvent(event);
		EventUtil.preventDefault(event);
		var receiver=form.elements["receiver"].value;
		var sender=form.elements["sender"].value;
		if(receiver==sender){
			yibu_tishi("你不能给自己发送消息");
			return false;
		}
		var subject=form.elements["subject"].value;
		var message=globalvar.editor.html();
		$.post("?usermessage!receive_message.html",{sender:sender,receiver:receiver,subject:subject,message:message},function(data){
			if(data=="ok"){
				yibu_tishi("发送成功");
				setTimeout(function(){
					top.location.href="?center-center!person_center.html";
				},2000);
			}
		});
	}
	
}