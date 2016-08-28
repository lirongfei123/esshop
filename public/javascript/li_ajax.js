function createXHR(){
            if (typeof XMLHttpRequest != "undefined"){
                return new XMLHttpRequest();
            } else if (typeof ActiveXObject != "undefined"){
                if (typeof arguments.callee.activeXString != "string"){
                    var versions = ["MSXML2.XMLHttp.6.0", "MSXML2.XMLHttp.3.0",
                                    "MSXML2.XMLHttp"],
                        i, len;
            
                    for (i=0,len=versions.length; i < len; i++){
                        try {
                            new ActiveXObject(versions[i]);
                            arguments.callee.activeXString = versions[i];
                            break;
                        } catch (ex){
                            //skip
                        }
                    }
                }
            
                return new ActiveXObject(arguments.callee.activeXString);
            } else {
                throw new Error("No XHR object available.");
            }
}
//ajax请求
var li_ajax={
	get:function(url,json,func,type){
		var param=this.getParam(json);
		url=url+"?"+param;
		var xhr=new XMLHttpRequest();
		xhr.onreadystatechange=function(){
			if(xhr.readyState==4){
				if(xhr.status>=200&&xhr.status<300||xhr.status==304){
					func(xhr.responseText);
				}
			}
		}
		xhr.open("get",url,type)
		xhr.send(null);
	},
	post:function(url,json,func,type){
		var param=this.getParam(json);
		var xhr=new XMLHttpRequest();
		xhr.onreadystatechange=function(){
			if(xhr.readyState==4){
				if(xhr.status>=200&&xhr.status<300||xhr.status==304){
					func(xhr.responseText);
				}
			}
		}
		xhr.open("post",url,type)
		xhr.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
		xhr.send(param);
	},
	getParam:function(json){
		var param=[];
		for(var i in json){
			param.push(encodeURIComponent(i)+"="+encodeURIComponent(json[i]));
		}
		return param.join("&");
	}
};