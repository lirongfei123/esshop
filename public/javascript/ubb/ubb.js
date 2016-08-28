// JavaScript Document
var fontname={
	'SimSun' : '宋体',
	'NSimSun' : '新宋体',
	'FangSong_GB2312' : '仿宋_GB2312',
	'KaiTi_GB2312' : '楷体_GB2312',
	'SimHei' : '黑体',
	'Microsoft YaHei' : '微软雅黑',
	'Arial' : 'Arial',
	'Arial Black' : 'Arial Black',
	'Times New Roman' : 'Times New Roman',
	'Courier New' : 'Courier New',
	'Tahoma' : 'Tahoma',
	'Verdana' : 'Verdana'
};
var colorTable=[
	['#E53333', '#E56600', '#FF9900', '#64451D', '#DFC5A4', '#FFE500'],
	['#009900', '#006600', '#99BB00', '#B8D100', '#60D978', '#00D5FF'],
	['#337FE5', '#003399', '#4C33E5', '#9933E5', '#CC33E5', '#EE33EE'],
	['#FFFFFF', '#CCCCCC', '#999999', '#666666', '#333333', '#000000']
];
function ubbeditor(ta_elem){
	var items=["b","i","u","a","face","h","f","s","color","bgcolor"];
	var temp=ta_elem;
	var parent=temp.parentNode;
	var textarea=temp.cloneNode(true);
	var commonInfo=new Object();
	var events=["click","keyup","select","focus"];
	for(var i=0,len=events.length;i<len;i++){
		if(document.selection){
			commonInfo.ie=true;
			EventUtil.addHandler(textarea,events[i],function(){
				commonInfo.init=true;
				commonInfo.range=document.selection.createRange();
			});
		}else{
			EventUtil.addHandler(textarea,events[i],function(){
				commonInfo.init=true;
				commonInfo.start=textarea.selectionStart;
				commonInfo.text=textarea.value.substring(commonInfo.start,textarea.selectionEnd);
			});
		}
	}
	//两个重要工具
	function replaceData(replaceText){
		if(typeof commonInfo.init=="undefined"){
			textarea.focus();
		}
		if(commonInfo.ie){
			commonInfo.range.text=replaceText;
		}else{
			var textNode=document.createTextNode(textarea.value);
			textNode.replaceData(commonInfo.start,commonInfo.text.length,replaceText);
			textarea.value=textNode.nodeValue;
		}
	}
	function insertData(insertText){
		if(typeof commonInfo.init=="undefined"){
			textarea.focus();
		}
		if(commonInfo.ie){
			commonInfo.range.text=insertText;
		}else{
			var textNode=document.createTextNode(textarea.value);
			textNode.insertData(commonInfo.start,insertText);
			textarea.value=textNode.nodeValue;
		}
	}
	editfunc={
		common:function(elem){
			if(elem.firstChild.style.visibility==""){
				elem.firstChild.style.visibility="hidden";
			}
			var details=document.getElementsByClassName("detail");
			for(var i=0,len=details.length;i<len;i++){
				if(details[i]!=elem.firstChild){
					details[i].style.visibility="hidden";
				}
			}
			var display=elem.firstChild.style.visibility!="hidden"?"hidden":"visible";
			elem.firstChild.style.visibility=display;
		},
		b:function(elem){
			var replaceText="[b]"+commonInfo.text+"[/b]";
			replaceData(replaceText);
		},
		i:function(elem){
			var replaceText="[i]"+commonInfo.text+"[/i]";
			replaceData(replaceText);
		},
		u:function(elem){
			var replaceText="[u]"+commonInfo.text+"[/u]";
			replaceData(replaceText);
		},
		a:function(elem){
			var url=prompt("请输入衔接");
			var replaceText="[url="+url+"]"+commonInfo.text+"[/url]";
			replaceData(replaceText);
		},
		face:function(elem){
			var url=elem.src;
			var replaceText="[IMG]"+url+"[/IMG]";
			insertData(replaceText);
		},
		h:function(elem){
			var name=elem.nodeName.toLowerCase();
			var replaceText="["+name+"]"+commonInfo.text+"[/"+name+"]";
			replaceData(replaceText);
		},
		f:function(elem){
			var value=elem.getAttribute("value");
			var replaceText="[font="+value+"]"+commonInfo.text+"[/font]";
			replaceData(replaceText);
		},
		s:function(elem){
			var size=elem.innerHTML;
			var replaceText="[size="+size+"]"+commonInfo.text+"[/size]";
			replaceData(replaceText);
		},
		color:function(elem){
			var color=elem.style.backgroundColor;
			var replaceText="[color="+color+"]"+commonInfo.text+"[/color]";
			replaceData(replaceText);
		},
		bgcolor:function(elem){
			var color=elem.style.backgroundColor;
			var replaceText="[bgcolor="+color+"]"+commonInfo.text+"[/bgcolor]";
			replaceData(replaceText);
		}
	}
	createfunc={
		common:function(operate,items){
			var span=document.createElement("span");
			span.className=items;
			operate.appendChild(span);
		},
		h:function(operate,items){
			var span=document.createElement("span");
			span.className=items;
			var div=document.createElement("div");
			div.className="detail";
			addListener(div);
			for(var i=0;i<5;i++){
				var h=document.createElement("h"+(i+1));
				h.className="detail_item";
				h.innerHTML="welcome";
				h.style.margin="5px 0";
				div.appendChild(h);	
			}
			span.appendChild(div);
			operate.appendChild(span);
		},
		f:function(operate,items){
			var span=document.createElement("span");
			span.className=items;
			var div=document.createElement("div");
			div.className="detail";
			addListener(div);
			for(var i in fontname){
				var font=document.createElement("div");
				font.setAttribute("value",i);
				font.className="detail_item";
				font.innerHTML=fontname[i];
				div.appendChild(font);
			}
			span.appendChild(div);
			operate.appendChild(span);
		},
		s:function(operate,items){
			var span=document.createElement("span");
			span.className=items;
			var div=document.createElement("div");
			div.className="detail";
			addListener(div);
			for(var i=12;i<20;i++){
				var size=document.createElement("div");
				size.className="detail_item";
				size.innerHTML=i+"px";
				div.appendChild(size);
			}
			span.appendChild(div);
			operate.appendChild(span);
		},
		color:function(operate,items){
			var span=document.createElement("span");
			span.className=items;
			var table=document.createElement("table");
			table.className="detail";
			addListener(table);
			for(var i=0,len=colorTable.length;i<len;i++){
				table.insertRow(i);
				for(var j=0,jlen=colorTable[i].length;j<jlen;j++){
					table.rows[i].insertCell(j);
					table.rows[i].cells[j].className="detail_item";
					table.rows[i].cells[j].style.backgroundColor=colorTable[i][j];
				}
			}
			span.appendChild(table);
			operate.appendChild(span);
		},
		face:function(operate,items){
			var span=document.createElement("span");
			span.className=items;
			var div=document.createElement("div");
			div.className="detail";
			addListener(div);
			for(var i=0;i<134;i++){
				var img=document.createElement("img");
				img.className="detail_item";
				img.src="public/javascript/ubb/images/"+i+".gif";
				div.appendChild(img);
			}
			span.appendChild(div);
			operate.appendChild(span);
		}
	}
	function addListener(elem){
		EventUtil.addHandler(elem,"click",function(event){
			event=EventUtil.getEvent(event);
			var target=EventUtil.getTarget(event);
			var span=elem.parentNode.className;
			if(target.className="detail_item"){
				editfunc[span](target);
				parent=target;
				do{
					var parent=parent.parentNode;
					if(parent.className=="detail"){
						parent.style.visibility="hidden";
					}
				}while(parent.className!="detail");
				
			}	
		});
	}
	var outerdiv=document.createElement("div");
	outerdiv.className="ubbeditor";
	var operate=document.createElement("div");
	operate.className="operate";
	outerdiv.appendChild(operate);
	EventUtil.addHandler(operate,"click",function(event){
		event=EventUtil.getEvent(event);
		var target=EventUtil.getTarget(event);
		if(target.nodeName=="SPAN"){
			if(target.className.match(/face|h|s|f|color|bgcolor/g)){
				editfunc.common(target);
			}else{
				editfunc[target.className](target);	
			}
		}
		
	});
	for(var i=0,len=items.length;i<len;i++){
		switch(items[i]){
			case "h":
			case "s":
			case "color":
			case "face":
			case "f":createfunc[items[i]](operate,items[i]);break;
			case "bgcolor":createfunc.color(operate,items[i]);break;
			default:createfunc.common(operate,items[i]);
		}
	}
	outerdiv.appendChild(textarea);
	parent.replaceChild(outerdiv,temp);
}
