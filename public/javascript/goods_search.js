/**
 * 生成一个goods
 * @param goods_list 列表容器
 */
function load_more_goods(elem){
	var goods_list=document.getElementById("goods_list");
	var nums=elem.getAttribute("nums");
	$.get(location.search,{nums:nums},function(data){
		var jsondata=$.parseJSON(data);
		if(jsondata.length<=0){
			elem.innerHTML="没有可以加载数据";
			return null;
		}
		elem.setAttribute("nums",parseInt(nums)+jsondata.length);
		for(var i=0,len=jsondata.length;i<len;i++){
			var li=document.createElement("li");
			var dl=document.createElement("dl");
			dl.className="item";
			li.appendChild(dl);
			var dt=document.createElement("dt");
			dt.className="item_title";
			var img=document.createElement("img");
			img.src=jsondata[i].face;
			dt.appendChild(img);
			dl.appendChild(dt);
			var dd=document.createElement("dd");
			var a=document.createElement("a");
			a.className="goods_href";
			a.href="?goods!goods_detail.html?goods_id="+jsondata[i].goods_id;
			a.innerHTML=jsondata[i].name;
			dd.appendChild(a);
			dl.appendChild(dd);
			var dd=document.createElement("dd");
			dd.className="xiushi";
			dd.innerHTML='<span class="caption">跳骚价:</span>'+jsondata[i].price+'元<span class="caption">浏览量:</span>'+jsondata[i].scan_num+'次';	
			dl.appendChild(dd);
			goods_list.appendChild(li);
		}
	});
}
$(function(){
	foreverScroll(function(){
		load_more_goods(document.getElementById("load_more_goods"));	
	});
});