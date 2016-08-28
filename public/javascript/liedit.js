//使元素可编辑
function editInit(id){
	var element,offset;
	var f_document=document.getElementById(id).contentWindow.document;
	f_document.designMode="on";
	
	//即时得到光标元素以及偏移量
	function getCursor(){
		if(document.getSelection){
			var selection=f_document.getSelection();
			element=selection.anchorNode;
			offset=selection.focusOffset;
		}else{
			if(document.selection.type=="None"||document.selection.type=="Text"){
				var selection=f_document.selection;
				var range=selection.createRange();//------------这一步得到选区
			}
			element=range;
		}	
	}
	$(f_document).bind("focus keyup mousedown keydown mouseup select",function(){
		getCursor();
	});
	//折叠到终点
	function range_collapse(elem){
		if(document.createRange){
			elem.focus();
			var selection=f_document.getSelection();
			selection.collapse(elem,1);
		}else{
			var range=f_document.body.createTextRange();
			range.moveToElementText(elem);
			range.collapse(false);
			range.select();
			elem.focus();
		}
		
	}
	//回复光标位置
	function huifuCursor(){
		if(typeof element=="undefined"){
			range_collapse(f_document.body);
		}else{
			if(document.getSelection){
				var selection=f_document.getSelection();
				try{
					selection.collapse(element,offset);
				}catch(ex){
					range_collapse(f_document.body);
				}
			}else{
				element.select();
			}
			f_document.body.focus();//这个一定要放到最后
		}
	}
	return function(key,value){
		var reg=/insertimage|inserthorizontalrule/;
		if(reg.test(key)){
			huifuCursor();
		}
		f_document.execCommand(key,false,value);
		getCursor();
	}
}
var li_execCommand=null;
function frame_editable(){
	$(function(){
		li_execCommand=editInit("liedit_iframe");
	});
}