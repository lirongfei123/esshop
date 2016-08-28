//简单的函数节流思想
function thottle(fn,content,time){
	clearTimeout(fn.timer);
	fn.timer=setTimeout(function(){
		fn.call(content);
	},time||200);	
}
function foreverScroll(fn){
	var ready=function(){
		var top=document.documentElement.scrollTop;
		var height=document.documentElement.scrollHeight;
		var clientheight=document.documentElement.clientHeight;
		if(height-top<clientheight+20){
			fn();
		}
	}
	window.onscroll=function(){
		thottle(ready);
	}
	ready();
}
