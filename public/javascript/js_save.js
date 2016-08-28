// JavaScript Document
/*
author:李荣飞-成都信息工程学院
getItem:得到值
setItem:设置值
removeItem:移除值
*/
var CookieUtil = {
    getItem: function (name){
		name=location.host+name;
        var cookieName = encodeURIComponent(name) + "=",
            cookieStart = document.cookie.indexOf(cookieName),
            cookieValue = null,
            cookieEnd;
        if (cookieStart > -1){
            cookieEnd = document.cookie.indexOf(";", cookieStart);
            if (cookieEnd == -1){
                cookieEnd = document.cookie.length;
            }
            cookieValue = decodeURIComponent(document.cookie.substring(cookieStart + cookieName.length, cookieEnd));
        } 
        return cookieValue;
    },
    setItem: function (name, value) {
		name=location.host+name;
        var cookieText = encodeURIComponent(name) + "=" + encodeURIComponent(value);
    	var date=new Date();  
		date.setTime(date.getTime()+30*24*3600); 
        cookieText+="; expires="+date.toGMTString();
        document.cookie = cookieText;
    },
    removeItem: function (name){
		name=location.host+name;
        this.setItem(name,"",new Date(0));
    }
};
var jssave=function(){
	if(typeof localStorage=="object"){
		return localStorage;
	}else if(typeof globalStorage=="object"){
		return globalStorage[location.host];	
	}else{
		return CookieUtil;	
	}
}();