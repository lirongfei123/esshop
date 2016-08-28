function go_page(elem,str){
	var parentelem=elem.parentNode;
	var currentPage=parseInt(parentelem.getAttribute("currentPage"));
	var pages=parseInt(parentelem.getAttribute("pages"));
	var type=parseInt(parentelem.getAttribute("type"));
	if(str=="prev"){
		if(currentPage>0){
			currentPage--;
			$(parentelem.previousSibling.childNodes[1]).load("?wantedbuy!wantedbuy_page.html?page="+currentPage+"&type="+type);
		}
	}else if(str=="next"){
		if(currentPage<pages){
			currentPage++;
			$(parentelem.previousSibling.childNodes[1]).load("?wantedbuy!wantedbuy_page.html?page="+currentPage+"&type="+type);
		}
	}
	parentelem.setAttribute("currentPage",currentPage);
}