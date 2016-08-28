function Map(arr,func){
	for(var i=0;i<arr.length;i++){
  	 	func(i,arr[i]);
  	}
}
function menu_focus_move(id,time){
	time=time||30;
	var timer=null;
	var menu=document.getElementById(id);
	var lis=new Array();
	var focus_elem=null;
	Map(menu.childNodes,function(key,value){
		if(value.nodeName=="LI"){
			lis.push(value);
		}else if(value.className=="focus_elem"){
			focus_elem=value;
		}
	});
	var initLeft=focus_elem.offsetLeft;
	var initWidth=focus_elem.offsetWidth;
	var left=null,width=null;
	var change=false;
	Map(lis,function(key,value){
		EventUtil.addHandler(value,"mouseover",function(event){
			clearTimeout(timer);
			change=false;
			var currentLeft=focus_elem.offsetLeft;
			var currentWidth=focus_elem.offsetWidth;
			left=value.offsetLeft;
			width=value.offsetWidth;
			var i=0;
			_run=function(){
				var run_left=Tween.Cubic.easeOut(i,currentLeft,left,time);
				var run_width=Tween.Cubic.easeOut(i,currentWidth,width,time);
				focus_elem.style.left=run_left+"px";
				focus_elem.style.width=run_width+"px";
				if(i<time){
					setTimeout(_run,10);
				}
				i++;
			}
			timer=setTimeout(_run,10);
		});
		EventUtil.addHandler(value,"mouseout",function(event){
			clearTimeout(timer);
			if(change){
				return false;	
			}
			var i=0;
			_run=function(){
				var run_left=Tween.Cubic.easeOut(i,left,initLeft,time);
				var run_width=Tween.Cubic.easeOut(i,width,initWidth,time);
				focus_elem.style.left=run_left+"px";
				focus_elem.style.width=run_width+"px";
				if(i<time){
					setTimeout(_run,10);
				}
				i++;
			}
			timer=setTimeout(_run,10);
		});
		EventUtil.addHandler(value,"click",function(event){
			change=true;
			initLeft=value.offsetLeft;
			initWidth=value.offsetWidth;
			var siblings=get_siblings(value);
			for(var i=0,len=siblings.length;i<len;i++){
				if(siblings[i].className!="focus_elem"){
					siblings[i].className="";
				}
			}
			value.className="focus_menu";
		});		
	});
}
/**
 * 发表评论
 */
function reply_evaluate(elem){
	var reply_content=document.getElementById("reply_evaluate_content");
	reply_content.style.display="block";
	elem.parentNode.parentNode.appendChild(reply_content);
}
function newevaluate(type){
	var id=document.getElementById("goods_id").value;
	if(type=='new'){
		var textarea=document.getElementById("release_evaluate_value");
		var value=textarea.value;
		if(value==""){
			return null;
		}
		$.post("?evaluate!newevaluate.html",{goods_id:id,detail:value},function(data){
			if(data==1){
				yibu_tishi("发表成功");
				setTimeout(function(){
					location.href=location.href+"#2";
					location.reload();
				},1000);
			}else if(data=="nologin"){
				yibu_tishi("请先登录");
			}else{
				yibu_tishi("未知错误");
			}
		});
		
	}else if(type=='reply'){
		var textarea=document.getElementById("release_replay_evaluate_value");
		if(textarea.value==""){
			return null;
		}
		var oldvalue=find_prev(textarea.parentNode).innerHTML.trim();
		var value=textarea.value;
		$.post("?evaluate!newevaluate.html",{goods_id:id,oldvalue:oldvalue,detail:value},function(data){
			if(data==1){
				yibu_tishi("发表成功");
				setTimeout(function(){
					location.href=location.href+"#2";
					location.reload();
				},1000);
			}else if($.trime(data)=="nologin"){
				yibu_tishi("请先登录");
			}else{
				yibu_tishi("未知错误");
			}
		});
	}
	
}
/**
 * tab切换
 */
function tab_switch(str1,str2){
	document.getElementById(str1).style.display="block";
	document.getElementById(str2).style.display="none";
}
$(function(){
	menu_focus_move("evaluate_menu_content");
	if(location.hash!=""){
		document.getElementById("evaluate_button").click();
	}
});