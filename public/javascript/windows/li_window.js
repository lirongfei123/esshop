// JavaScript Document
//得到偏移量
function get_offset(elem){
	var left=elem.offsetLeft;
	var top=elem.offsetTop;
	var parent=elem.offsetParent;
	while(parent!==null){
		left+=parent.offsetLeft;
		top+=parent.offsetTop;
		parent=parent.offsetParent;
	}
	return {
		left:left,
		top:top
	}
}
//得到最终样式
function o_computedStyle(elem,yangshi){
	var computedstyle=null;
	if(elem.currentStyle){
		computedstyle=elem.currentStyle;
	}else{
		var computedstyle=document.defaultView.getComputedStyle(elem);
	}
	var result= computedstyle[yangshi];
	var reg=/(\d*)\w/g;
	return result.replace(reg,"$1");
}
function get_window_size(){
	return{
		width:Math.max(document.body.clientWidth,document.documentElement.clientWidth),
		height:Math.max(document.body.clientHeight,document.documentElement.clientHeight)
	}
}
//可拖动
var dragable=function(){
	var dragging=null;
	var mover=null;
	var diffX=0;
	var diffY=0;
	//改变之前的鼠标位置
	var nowX=0;
	var nowY=0;
	//改变大小之前的长宽
	var oldWidth=0;
	var oldHieht=0;
	//改变大小之前的位置
	var oldLeft=0;
	var oldTop=0;
	//活动范围
	var maxX=0;
	var maxY=0;
	//遮罩窗口
	var wid=null;
	function handlerEvent(event){//这也是一个非常好的简化思想，按平常就应该是每个事件单独写，现在都写在一起，更容易维护
		event=EventUtil.getEvent(event);
		var target=EventUtil.getTarget(event);
		switch(event.type){
			case "mousedown":
				var reg=/dragable|resizeableTop|resizeableBottom|resizeableLeft|resizeableRight|resizeable/g;
				if(reg.test(target.className)){//-----------亮点之二----判断是否需要初始化拖动元素
					dragging=target;//获取拖动元素
					mover=dragging.parentNode;
					//得到鼠标相对title位置
					var offset=get_offset(target);
					diffX=event.clientX-offset.left;
					diffY=event.clientY-offset.top;
					//计算活动范围
					var window_size=get_window_size();
					maxX=window_size.width-oldWidth+diffX;
					maxY=window_size.height-oldHieht+diffY;
					
					if(dragging.className.match(/dragable/g)){//如果是简单的拖动,下面的就不用计算了
						return false;	
					}
					dragging.ondragstart=function(event){
						event=EventUtil.getEvent(event);
						EventUtil.preventDefault(event);//-----------------------亮点之一-----禁止鼠标在网页上拖动，不能用event.preventDefault;
					}
					//当前窗口位置
					oldLeft=parseInt(o_computedStyle(mover,"left"));
					oldTop=parseInt(o_computedStyle(mover,"top"));
					//改变之前的大小
					oldWidth=mover.offsetWidth;
					oldHieht=mover.offsetHeight;
					//当前鼠标位置
					nowX=event.clientX;
					nowY=event.clientY;
				}
				break;
			case "mousemove":
				if(mover!=null){//这里要判断mover,而不是dragging
					var classname=dragging.className;
					runwindow[classname](event);
					if (document.selection && document.selection.empty) {
						document.selection.empty();  //IE
					}else if(window.getSelection) {
						window.getSelection().removeAllRanges(); //火狐
					}
				}
				break;
			case "mouseup":
				dragging=null;
				mover=null;
				document.body.selectstart=function(){};
				break;
		};
		//运用状态模式进行改变
		runwindow={
			dragable:function(event){
				var mouseX=event.clientX;
				var mouseY=event.clientY;
				if(mouseX>=0&&mouseX<maxX){
					mover.style.left=(mouseX-diffX)+"px";
				}
				if(mouseY>0&&mouseY<maxY){
					mover.style.top=(mouseY-diffY)+"px";
				}
			},
			resizeableTop:function(event){
				var chaY=event.clientY-nowY;
				mover.style.top=oldTop+chaY+"px";
				mover.style.height=oldHieht-chaY+"px";
			},
			resizeableBottom:function(event){
				var chaY=event.clientY-nowY;
				mover.style.height=oldHieht+chaY+"px";
			},
			resizeableLeft:function(event){
				var chaX=event.clientX-nowX;
				mover.style.left=oldLeft+chaX+"px";
				mover.style.width=oldWidth-chaX+"px";
			},
			resizeableRight:function(event){
				var chaX=event.clientX-nowX;
				mover.style.width=oldWidth+chaX+"px";
			},
			resizeable:function(event){
				var chaX=event.clientX-nowX;
				mover.style.width=oldWidth+chaX+"px";
				var chaY=event.clientY-nowY;
				mover.style.height=oldHieht+chaY+"px";
			}
		};
	}
	return {
		enable:function(){
			EventUtil.addHandler(document,"mousedown",handlerEvent);
			EventUtil.addHandler(document,"mousemove",handlerEvent);
			EventUtil.addHandler(document,"mouseup",handlerEvent);
		},          
		disable:function(){
			EventUtil.removeHandler(document,"mousedown",handlerEvent);
			EventUtil.removeHandler(document,"mousemove",handlerEvent);
			EventUtil.removeHandler(document,"mouseup",handlerEvent);
		}
	}
}();
dragable.enable();
/*
选项继承
*/
function option_extend(oldopt,newopt){
	for(var i in newopt){
		oldopt[i]=newopt[i];
	}
}
function create_window(option){
	var opts={
		title:"欢迎",
		resizeable:false,
		width:400,
		height:200,
		destory:false
	}
	option_extend(opts,option);
	this.parent=document.body;
	//创建遮罩层
	var shade=document.createElement("div");
	shade.className="dragshade";
	document.body.appendChild(shade);
	this.lishade=shade;
	var window_mover=document.createElement("div");
	this.liwindow=window_mover;
	window_mover.className="window_mover";
	//设置窗口样式
	window_mover.style.left=get_window_size().width/2-opts.width/2+"px";
	window_mover.style.top=get_window_size().height/2-opts.height/2-25+"px";
	//添加标题栏
	var dragable=document.createElement("div");
	dragable.className="dragable";
	
	var span=document.createElement("span");
	span.className="title_caption";
	span.innerHTML=opts.title;
	dragable.appendChild(span);

	span=document.createElement("span");
	span.className="title_close";
	span.innerHTML="关闭";
	dragable.appendChild(span);
	thatthis=this;
	EventUtil.addHandler(span,"click",function(event){
		thatthis.close();
	});

	window_mover.appendChild(dragable);
	//添加内容
	opts.content.style.width=opts.width+"px";
	opts.content.style.height=opts.height+"px";
	opts.content.style.display="block";
	window_mover.appendChild(opts.content);
	//添加四周
	if(opts.resizeable){
		var div=document.createElement("div");
		div.className="resizeableTop";
		window_mover.appendChild(div);
	
		div=document.createElement("div");
		div.className="resizeableRight";
		window_mover.appendChild(div);
	
		div=document.createElement("div");
		div.className="resizeableBottom";
		window_mover.appendChild(div);
	
		div=document.createElement("div");
		div.className="resizeableLeft";
		window_mover.appendChild(div);
	
		div=document.createElement("div");
		div.className="resizeable";
		window_mover.appendChild(div);
	}
	this.parent.appendChild(window_mover);
	if(typeof this.display!="function"){
		create_window.prototype.display=function(){
			this.lishade.style.display="block";
			this.liwindow.style.display="block";
			this.liwindow.style.left=get_window_size().width/2-opts.width/2+"px";
			this.liwindow.style.top=get_window_size().height/2-opts.height/2-25+"px";
		}	
	}
	if(typeof this.close!="function"){
		create_window.prototype.close=function(){
			if(opts.destory){
				this.parent.removeChild(this.lishade);
				this.parent.removeChild(this.liwindow);
			}else{
				this.lishade.style.display="none";
				this.liwindow.style.display="none";
			}
		}	
	}
}