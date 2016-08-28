//Dom操作
function find_prev(elem){
	while(elem.previousSibling!=null){
		elem=elem.previousSibling;
		if(elem.nodeType==1){
			return elem;
		}
	}
	return null;
}
function find_next(elem){
	while(elem.nextSibling!=null){
		elem=elem.nextSibling;
		if(elem.nodeType==1){
			return elem;
		}
	}
	return null;
}
function get_siblings(elem){
	var childrens=elem.parentNode.childNodes;
	var siblings=new Array();
	for(var i=0,len=childrens.length;i<len;i++){
		var current=childrens[i];
		if(current.nodeType==1){
			siblings.push(current);
		}
	}
	return siblings.length>0?siblings:null;
}
//添加class和删除class
function addClass(elem,value){
	var classValue=elem.className;
	if(classValue==""){
		elem.className=value;
	}else{
		classValue+=" "+value;
		elem.className=classValue;
	}
}
function removeClass(elem,value){
	var classValue=elem.className;
	if(classValue.indexOf(" ")<0){
		if(classValue==value){
			elem.className="";
		}
	}else{
		var arr=classValue.split(" ");
		for(var i=0,len=arr.length;i<len;i++){
			if(arr[i]==value){
				arr.splice(i,1);
				elem.className=arr.join(" ");
				break;
			}
		}
	}
}
function hasClass(elem,value){
	var classValue=elem.className;
	var reg=new RegExp("(?:"+value+")\\b");
	if(reg.test(classValue)){
		return true;
	}else{
		return false;
	}
}
function require_style(href){
	var link =document.createElement("link");
	if(typeof require_style.links=="object"){
		if(require_style.links[href]==true){
			return true;
		}
	}else{
		require_style.links=new Object();
	}
	require_style.links[href]=true;
	link.type="text/css";
	link.rel="stylesheet";
	link.href=href;
	document.getElementsByTagName("head")[0].appendChild(link);	
}
function getChild(elem,index){
	var childs=elem.childNodes;
	var currentIndex=0;
	for(var i=0,len=childs.length;i<len;i++){
		if(childs[i].nodeType==1){
			if(currentIndex==index){
				return childs[i];
			}else{
				currentIndex++;
			}
		}
	}
}
function getElementsByClassName(classname,parent,tag){
	if(document.getElementByClassName){
		return document.getElementsByClassName(classname);
	}else{
		var elems=new Array();
		parent=parent||document;
		tag=tag||"*";
		var childrens=parent.getElementsByTagName(tag);
		for(var i=0,len=childrens.length;i<len;i++){
			if(childrens[i].nodeType==1){
				if(childrens[i].className.indexOf(classname)>=0){
					elems.push(childrens[i]);
				}
			}
			
		}
		return elems;
	}
}