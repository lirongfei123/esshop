/**
 * 生成一个goods
 * @param goods_list 列表容器
 */
function load_more_goods(elem){
	var goods_list=document.getElementById("wantedbuy_list");
	var nums=elem.getAttribute("nums");
	$.get(location.search,{nums:nums},function(data){
		var jsondata=$.parseJSON(data);
		if(jsondata.length<=0){
			elem.innerHTML="没有可以加载数据";
			return null;
		}
		elem.setAttribute("nums",parseInt(nums)+jsondata.length);
		for(var i=0,len=jsondata.length;i<len;i++){
			var tr=document.createElement("tr");
			var td=document.createElement("td");
			td.className="td1";
			var a=document.createElement("a");
			a.className="inline_block addDian";
			a.href="?wantedbuy!wantedbuy_detail.html?id="+jsondata[i].wanted_id;
			a.innerHTML=jsondata[i].wanted_name;
			td.appendChild(a);
			tr.appendChild(td);
			
			var td=document.createElement("td");
			td.className="td2";
			td.innerHTML=jsondata[i].wanted_price+"元";
			tr.appendChild(td);
			
			var td=document.createElement("td");
			td.innerHTML=jsondata[i].wanted_scans+"次";
			tr.appendChild(td);
			
			var td=document.createElement("td");
			td.className="td4";
			td.innerHTML=jsondata[i].wanted_ower;
			tr.appendChild(td);
			
			var td=document.createElement("td");
			td.innerHTML=jsondata[i].wanted_time;
			tr.appendChild(td);
			
			goods_list.appendChild(tr);
		}
	});
}
$(function(){
	foreverScroll(function(){
		load_more_goods(document.getElementById("load_more_goods"));	
	});
});