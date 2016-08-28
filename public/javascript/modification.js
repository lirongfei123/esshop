function form_init(){
	var opt={
		submit:{
			type:"ajax",
			right:function(str){
				$.get("?login!modify_info.html&"+str,function(data){
					if(data==1){
						yibu_tishi("修改成功");
						setTimeout(function(){
							top.location.href="http://localhost/esshop/?center-center!person_center.html";
						},1000);
					}else{
						yibu_tishi("未修改");
					}
				});
			},
			error:function(){
				yibu_tishi("请正确填写");
			}
		}
	};
	$("#modify_form_info").formcheck(opt);
}
//初始化图片上传
function uploadify_init(){
	$("#my_uploadify").uploadify({
		'buttonText':"选择文件",
		'buttonClass':"produce_face_btn",
		'multi':false,
		'fileSizeLimit':"1024KB",
		'fileTypeDesc' : 'Image Files',
        'fileTypeExts' : '*.gif; *.jpg; *.png',
		'onUploadSuccess':function(data,info){
			var result=$.parseJSON(info);
			if(result.status=="1"){
				var img_content=document.getElementById("img_content");
				img_content.innerHTML="";
				var li=document.createElement("li");
				var img=document.createElement("img");
				img.src=result.path;
				li.appendChild(img);
				img_content.appendChild(li);
				document.forms["modify_form_info"].elements["user_face"].value=result.path;
			}else{
				yibu_tishi(result.path);
			}
		},
		'swf'      : 'public/javascript/uploadify/uploadify.swf',
		'uploader' : '?uploadImg!uploadify_upload.html'
	});
}
function modify_psd(){
	var opt={
		submit:{
			type:"ajax",
			right:function(str){
				$.get("?login!modify_psd.html&"+str,function(data){
					if(data==1){
						yibu_tishi("修改成功");
						setTimeout(function(){
							top.location.href="http://localhost/esshop/?center-center!person_center.html";
						},1000);
					}else{
						yibu_tishi(data);
					}
				});
			},
			error:function(){
				yibu_tishi("请正确填写");
			}
		}
	};
	var funcOption={
		password_sure:function(value){
			var password_sure=document.forms["modify_form_psd"].elements["new_password"];
			if(password_sure.value==value){
				return true;
			}else{
				return "两次密码输入不一致";
			}
		}
	};
	$("#modify_form_psd").formcheck(opt,funcOption);
}
$(function(){
	form_init();
	uploadify_init();
	modify_psd();
});