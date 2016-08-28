function chooose_face(event){
	var event=EventUtil.getEvent(event);
	var target=EventUtil.getTarget(event);
	if(target.className=="face_item"){
		var type=target.lang;
		change_face(type);
	}else if(target.nodeName=="IMG"){
		li_execCommand("insertimage",target.src);
	}
}
//改变表情框中的表情
function change_face(type){
	if(typeof change_face.caches=="undefined"){
		change_face.caches=new Array();
	}
	for(var i=0,len=change_face.caches.length;i<len;i++){
		if(change_face.caches[i].type==type){
			run(change_face.caches[i].imgs);
			return true;
		}
	}
	$.get("?index!choose_face",{type:type},function(data){
		if(data=="false"){
			return false;
		}
		var imgs=$.parseJSON(data);
		change_face.caches.push({type:type,imgs:imgs});
		run(imgs);
	});
	function run(imgs){
		var face_img_content=document.getElementById("face_img_content");
		face_img_content.innerHTML="";
		var frag=document.createDocumentFragment();
		for(var i=0,len=imgs.length;i<len;i++){
			var img=document.createElement("img");
			img.src="public/images/"+type+"/"+imgs[i];
			frag.appendChild(img);
		}
		face_img_content.appendChild(frag);
	}
}
//发送消息
function send_info(str){
	var frame=document.getElementById(str);
	var text=frame.contentWindow.document.body.innerHTML;
	if(text==""){
		return false;
	}
	var time=new Date();
	time=time.getTime();
	$.get("?index!save_info.html",{message:text,time:time},function(data){
		if(data=="ok"){
			read_info();
			frame.contentWindow.document.body.innerHTML="";
		}
	});
}
//保持滚动条一直在底部
function keep_scroll(id){
	if(typeof arguments.callee.div=="undefined"){
		arguments.callee.div=document.getElementById(id);
	}
	var keep_scroll_elem=arguments.callee.div;
	keep_scroll_elem.scrollTop=keep_scroll_elem.scrollHeight+"px";
}
//初始化消息
function init_info(){
	$.get("?index!init_info.html",function(data){
		display_info($.parseJSON(data));
		read_info();
		keep_scroll("info_content");
	});
}
//动态读取消息
function read_info(){
	clearTimeout(read_info.timer);
	var info_content=document.getElementById("info_content");
	function run(){
		var time=info_content.lastChild.firstChild.lang;
		$.get("?index!read_info.html",{lastInfo:time},function(data){
			var json=$.parseJSON(data);
			if(json.length==0){
				return null;
			}
			display_info(json);
		});
		read_info.timer=setTimeout(run,10000);
	}
	run();
}
function display_info(json){
	var info_content=document.getElementById("info_content");
	var frag=document.createDocumentFragment();
	for(var i=0,len=json.length;i<len;i++){
		var li=document.createElement("li");
		var span=document.createElement("span");
		span.className="user inline_block";
		span.lang=json[i].time;
		li.appendChild(span);
		span.innerHTML=json[i].user+"说:";
		span=document.createElement("span");
		span.className="inline_block";
		span.innerHTML=json[i].message;
		li.appendChild(span);
		frag.appendChild(li);
	}
	info_content.appendChild(frag);
}
$(function(){
	change_face("ali");
	init_info();
})