function form_init(){
	var opt={
			submit:{
				type:"ajax",
				handle:function(elem){
					elem.elements["kind_textarea"].value=globalvar.editor.html();
				},
				right:function(value){
					$.get("?center-center!newbuy_action.html?"+value,function(data){
						if(data=="1"){
							yibu_tishi("添加成功");
							setTimeout(function(){
								location.reload();
							},1000);
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
	form_init();
	create_kindEditor("?uploadImg!textarea_upload.html");
});