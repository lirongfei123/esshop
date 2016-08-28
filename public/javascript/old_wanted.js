function delete_elem(elem){
	var produce_list=elem.parentNode.parentNode.parentNode;
	var current=elem.parentNode.parentNode;
	produce_list.removeChild(current);
}