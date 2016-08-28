/**
 * 轮播器
 * @param id 轮播器容器
 * @returns {imgLunbo}
 */
function imgLunbo(id){
	var parentContent=document.getElementById(id);
	var startValue=0;
	var scrollWidth=parentContent.scrollWidth;
	var clientWidth=parentContent.clientWidth;
	var diff=scrollWidth-clientWidth;
	if(diff<=0){
		return false;
	}
	function start(){
		imgLunbo.timer=setInterval(function(){
			startValue+=2;
			parentContent.scrollLeft=startValue;
			if(parentContent.scrollLeft==diff){
				startValue=0;
			}
		},50);
	}
	EventUtil.addHandler(parentContent,"mouseover",function(){
		clearInterval(imgLunbo.timer);
	});
	EventUtil.addHandler(parentContent,"mouseout",function(){
		start();
	});
	start();
}
function load_more_goods(elem){
	var goods_list=document.getElementById("goods_list");
	var nums=elem.getAttribute("nums");
	$.get("?goods!load_more_goods.html",{nums:nums},function(data){
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
//换一换
function otherlike(){
	var goodslike_content=document.getElementById("goodslike_content");
	$(goodslike_content).load("?goods!otherlike.html");
}
$(function(){
	imgLunbo("lunbo_img");
})