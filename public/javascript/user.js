lionload(function(){
	register_detail();
	form_init();
});
//初始化表单
function form_init(){
	var login_form=document.forms["login_form"];
	login_form.onsubmit=function(event){
		event=EventUtil.getEvent(event);
		EventUtil.preventDefault(event);
		var login_username=login_form.elements["login_username"].value;
		var login_password=login_form.elements["login_password"].value;
		$.post("?login!gologin.html",{login_username:login_username,login_password:login_password},function(data){
			if(data=="ok"){
				global_var.login_window.close();
				go_send_message();
			}else{
				yibu_tishi(data);
			}
		});
	}
}
function register_detail(){
	var opendetails=getElementsByClassName("open_detail",document.getElementById("main_body"),"dt");
	for(var i=0,len=opendetails.length;i<len;i++){
		var item=false;
		(function(elem,state){
			EventUtil.addHandler(elem,"click",function(){
				if(state==false){
					find_next(elem).style.display="block";
					state=true;
				}else{
					find_next(elem).style.display="none";
					state=false;
				}
				
			});
		})(opendetails[i],item);
	}
}
var global_var=new Object();
KindEditor.ready(function(K) {
	global_var.kindeditor = K.create('textarea[name="send_message"]', {
		resizeType :2,
		items : [
			'fontname', 'fontsize', '|', 'forecolor', 'hilitecolor', 'bold', 'italic', 'underline',
			'removeformat', '|', 'justifyleft', 'justifycenter', 'justifyright', 'insertorderedlist',
			'insertunorderedlist', '|', 'emoticons', 'link']
	});
});
function go_send_message(){
	$.get("?usermessage!login_sure.html",function(data){
		if(data!="0"){
			send_message(data);
		}else{
			var login_content=document.getElementById("login_content");
			global_var.login_window=new create_window({content:login_content});
			global_var.login_window.display();
		}
	});
}
function send_message(sender){
	var receiver=document.getElementById("scan_user").innerHTML;
	var subject=document.getElementById("message_subject").value;
	receiver=$.trim(receiver);
	var message=global_var.kindeditor.html();
	if(subject==""||message==""){
		yibu_tishi("发送内容和主题不能为空");
		return false;
	}
	$.post("?usermessage!receive_message.html",{sender:sender,receiver:receiver,subject:subject,message:message},function(data){
		if(data=="ok"){
			yibu_tishi("发送成功");
			setTimeout(function(){
				location.reload();
			},2000);
		}
	});
}