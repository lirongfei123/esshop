// JavaScript Document
function open_th_open(url,target){
		if(target=="_blank"){
			var ziyemian=window.open("about:blank",target);
			ziyemian.location.href=url;
		}else{
			window.open(url,target);
		}
}
//快捷引入脚本
function import_script(arr){
    for(var i=0,len=arr.length;i<len;i++){
       document.write("<script src='"+arr[i]+"'><\/script>");	
    }
}
//快捷引入样式
function import_style(arr){
	for(var i=0,len=arr.length;i<len;i++){
	    document.write("<link rel='stylesheet' type='text/css' href='"+arr[i]+"' />");	
	}
}
function require_script(src,func){
	var script =document.createElement("script");
	if(typeof require_script.script=="object"){
		if(require_script.script[src]==true){
			return true;
		}
	}else{
		require_script.script=new Object();
	}
	require_script.script[src]=true;
	script.type="text/javascript";
	if(script.readyState){
		script.onreadystatechange=function(){
			if(script.readyState=="loaded"||script.readyState=="complete"){
				script.onreadystatechange=null;
				if(typeof func =="function"){
					func();	
				}	
			}	
		}	
	}else{
		script.onload=function(){
			func();	
		}	
	}
	script.src=src;
	document.getElementsByTagName("head")[0].appendChild(script);	
}
/**
 * 去除空格
 */
(function trim(){
	String.prototype.trim=function(){
		var reg=/(^\s*)|(\s*$)/g;
		return this.replace(reg,"");
	}
})();
//异步提示插件
function yibu_tishi(message,parent){
	var option={
		top:"10px",
		left:"50%",
		width:"200px",
		height:"50px",
		background:"#EDFF91"	
	}
	var parent=(typeof parent== "undefined")?document:top.document;
	var div=document.createElement("div");
	div.style.position="fixed";
	div.style.bottom="-"+option.height;
	div.style.left=option.left;
	div.style.width=option.width;
	div.style.height=option.height;
	div.style.backgroundColor=option.background;
	div.style.zIndex=1000;
	div.style.marginLeft="-"+parseInt(option.width.slice(0,-2)/2)+"px";
	div.innerHTML=message;
	$(div).css({opacity:"50",textAlign:"center",paddingTop:"15px"});
	$(div).animate({opacity:"show",top:option.top},700);
	parent.body.appendChild(div);
	setTimeout(function(){
		parent.body.removeChild(div);
	},3200);
}
//onload函数
function lionload(func){
	var odd=window.onload;
	window.onload=function(){
		odd&&odd();
		func();	
	}	
}
var EventUtil = {
    addHandler: function(element, type, handler){
        if (element.addEventListener){
            element.addEventListener(type, handler, false);
        } else if (element.attachEvent){
            element.attachEvent("on" + type, handler);
        } else {
            element["on" + type] = handler;
        }
    },
    getButton: function(event){
        if (document.implementation.hasFeature("MouseEvents", "2.0")){
            return event.button;
        } else {
            switch(event.button){
                case 0:
                case 1:
                case 3:
                case 5:
                case 7:
                    return 0;
                case 2:
                case 6:
                    return 2;
                case 4: return 1;
            }
        }
    },
    getCharCode: function(event){
        if (typeof event.charCode == "number"){
            return event.charCode;
        } else {
            return event.keyCode;
        }
    },
    getClipboardText: function(event){
        var clipboardData =  (event.clipboardData || window.clipboardData);
        return clipboardData.getData("text");
    },
    getEvent: function(event){
        return event ? event : window.event;
    },
    getRelatedTarget: function(event){
        if (event.relatedTarget){
            return event.relatedTarget;
        } else if (event.toElement){
            return event.toElement;
        } else if (event.fromElement){
            return event.fromElement;
        } else {
            return null;
        }
    
    },
    getTarget: function(event){
        return event.target || event.srcElement;
    },
    getWheelDelta: function(event){
        if (event.wheelDelta){
            return (client.engine.opera && client.engine.opera < 9.5 ? -event.wheelDelta : event.wheelDelta);
        } else {
            return -event.detail * 40;
        }
    },
    preventDefault: function(event){
        if (event.preventDefault){
            event.preventDefault();
        } else {
            event.returnValue = false;
        }
    },
    removeHandler: function(element, type, handler){
        if (element.removeEventListener){
            element.removeEventListener(type, handler, false);
        } else if (element.detachEvent){
            element.detachEvent("on" + type, handler);
        } else {
            element["on" + type] = null;
        }
    },
    setClipboardText: function(event, value){
        if (event.clipboardData){
            event.clipboardData.setData("text/plain", value);
        } else if (window.clipboardData){
            window.clipboardData.setData("text", value);
        }
    },
    stopPropagation: function(event){
        if (event.stopPropagation){
            event.stopPropagation();
        } else {
            event.cancelBubble = true;
        }
    }
};
//事件委托
function delegate(receiver,typeEvent,sender,func){
	EventUtil.addHandler(receiver,typeEvent,function(event){
		event=EventUtil.getEvent(event);
		var target=EventUtil.getTarget(event);
		if(target==receiver){
			return null;	
		}
		var current=target;
		var yes=false;
		do{
			if(judge(target)){
				yes=true;
				var sendElem=target;
				break;
			}{
				var parent=target.parentNode;
				target=parent;	
			}	
		}while(parent!=receiver);
		if(yes){
			func(receiver,sendElem,current,event);
		}
	});
	function judge(elem){
		var yes=true;
		for(var i in sender){
			if(elem[i]!=sender[i]){
				yes=false;
			}
		}
		return yes;
	}
}
//得到js文件本身路径
function getScriptPath(script){
	var scripts=document.scripts;
	var srcs=new Array();
	for(var i=0,len=scripts.length;i<len;i++){
		if(scripts[i].src==null){
			continue;
		}
		var regstr="/^(.*)\\/"+script+"$/";
		var reg=eval(regstr);
		var matchs=reg.exec(scripts[i].src);
		if(matchs){
			return matchs[1]+"/";
		}
	}
}
document.write('<link rel="shortcut icon" href="public/images/favicon.ico" />');
import_script(["public/javascript/jquery.min.js","public/javascript/dom.js"]);
import_style([getScriptPath("common.js")+"../css/common.css"]);
/**
 * 注销
 */
function common_loginout(){
	require_script("public/javascript/js_save.js",function(){
		jssave.removeItem("pl_username");
		var t_history=location.href;
		location.href="?login!loginout.html?history="+t_history;
	});
}
/**
 * 创建元素
 * @param obj
 * @returns
 */
function createElem(obj){
	var elem=document.createElement(obj.nodeName);
	for(var i in obj){
		if(i == "nodeName"){
			continue;
		}else if(i == "childs"){
			var tmp_obj=obj[i];
			for(var j=0,len=tmp_obj.length;j<len;j++){
				elem.appendChild(createElem(tmp_obj[j]));
			}
		}else if(typeof elem[i]!="undefined"){
			elem[i]=obj[i];
		}else{
			elem.setAttribute(i,obj[i]);
		}
	}
	return elem;
}
//常用map函数
function map(arr,func){
	for(var i=0,len=arr.length;i<len;i++){
		func(arr[i],i);
	}
}
//搜索函数
function top_search(elem,event){
	event=EventUtil.getEvent(event);
	EventUtil.preventDefault(event);
	var q=$.trim(elem.elements["q"].value);
	if(q==""){
		yibu_tishi("输入为空");
		return null;
	}
	var type=null;
	var radios=elem.elements["search_type"];
	map(radios,function(item){
		if(item.checked){
			type=item.value;
		}
	});
	location.href="?topSearch!search.html?q="+q+"&type="+type;
}