//动态改变框架高度
function change_frame_height(){
	var detail_iframe=document.getElementById("detail_iframe");
	EventUtil.addHandler(detail_iframe,"load",function(){
		detail_iframe.style.height=detail_iframe.contentWindow.document.body.scrollHeight+"px";
	});
	start_interval();
}
//启动定时器
function start_interval(){
	if(typeof globalval == "undefined"){
		globalval=new Object();
	}
	var detail_iframe=document.getElementById("detail_iframe");
	globalval.frametimer=setInterval(function(){
		detail_iframe.style.height=detail_iframe.contentWindow.document.body.scrollHeight+"px";
	},1000);
}
$(function(){
	start_interval();
});