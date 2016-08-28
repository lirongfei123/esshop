//初始化上传插件
function init_uploadify(){
	$.get("?tools!getCurrentUser.html",function(data){
		$("#my_uploadify").uploadify({
			'buttonText':"选择文件",
			'buttonClass':"produce_face_btn",
			'multi':false,
			'fileSizeLimit':"1024KB",
			'fileTypeDesc' : 'Image Files',
	        'fileTypeExts' : '*.gif; *.jpg; *.png',
	        'formData': {"username":data},
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
					document.forms["myform"].elements["produce_face"].value=result.path;
				}else{
					yibu_tishi(result.path);
				}
			},
			'swf'      : 'public/javascript/uploadify/uploadify.swf',
			'uploader' : '?uploadImg!uploadify_upload.html'
		});
	});
	
}
function form_init(){
	var opt={
			submit:{
				type:"ajax",
				handle:function(elem){
					elem.elements["kind_textarea"].value=globalvar.editor.html();
				},
				right:function(value){
					if(document.forms["myform"].elements["produce_face"].value==""){
						yibu_tishi("别着急,给你的商品选择一张吸引人的图片吧");
						return null;
					};
					$.post("?center-center!newproduce_action.html?",value,function(data){
						if(data==1){
							yibu_tishi("添加成功");
							setTimeout(function(){
								location.reload();
							},1000);
						}else{
							yibu_tishi("对不起,添加失败,重新试试吧");
						}
					});
				},
				error:function(){
					yibu_tishi("请正确填写");
				}
			}
	}
	$("#myform").formcheck(opt);
}
$(function(){
	init_uploadify();
	form_init();
	create_kindEditor("?uploadImg!textarea_upload.html");
});
