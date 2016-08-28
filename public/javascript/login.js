function default_login(){
	var pl_username=jssave.getItem("pl_username");
	if(pl_username!=null&&(typeof pl_username !="undefined")){
		$.ajax({
			async:"false",
			url:"?login!default_login.html?pl_username="+pl_username,
			success:function(data){
				if(data=="ok"){
					location.href="?center-center!person_center.html";
				}
			}
		});
	}
}
default_login();
function login_init(){
	var opt={
		submit:{
			type:"ajax",
			right:function(formstr){
				var login_data={};
				var params=formstr.split("&");
				for(var i=0,len=params.length;i<len;i++){
					var param=params[i].split("=");
					login_data[param[0]]=param[1];
				}
				$.post("?login!gologin.html?",login_data,function(data){
					if(data=="ok"){
						var form=document.getElementById("login_form");
						if(form.elements["keep_login"].checked){
							jssave.setItem("pl_username",form.elements["login_username"].value);
						}
						location.href="?center-center!person_center.html";
					}else{
						yibu_tishi(data);
					}
				});
			},
			error:function(){
				yibu_tishi("请正确填写");
			}
		}
	}
	$("#login_form").formcheck(opt);
}
$(function(){
	login_init();
});