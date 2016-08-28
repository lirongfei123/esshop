// JavaScript Document
/**
身份证验证
*/
function IdCardValidate(idCard){
	var Wi = [ 7, 9, 10, 5, 8, 4, 2, 1, 6, 3, 7, 9, 10, 5, 8, 4, 2, 1 ];// 加权因子   
	var ValideCode = [ 1, 0, 10, 9, 8, 7, 6, 5, 4, 3, 2 ];// 身份证验证位值.10代
	idCard = trim(idCard.replace(/ /g, ""));   
    if (idCard.length == 15) {   
        return isValidityBrithBy15IdCard(idCard);   
    }else if (idCard.length == 18) {   
        var a_idCard = idCard.split("");// 得到身份证数组   
        if(isValidityBrithBy18IdCard(idCard)&&isTrueValidateCodeBy18IdCard(a_idCard)){   
            return true;   
        }else {   
            return false;   
        }   
    } else {   
        return false;   
    } 
	/**  
	 * 判断身份证号码为18位时最后的验证位是否正确  
	 * @param a_idCard 身份证号码数组  
	 * @return  
	 */  
	function isTrueValidateCodeBy18IdCard(a_idCard) {   
		var sum = 0; // 声明加权求和变量   
		if (a_idCard[17].toLowerCase() == 'x') {   
			a_idCard[17] = 10;// 将最后位为x的验证码替换为10方便后续操作   
		}   
		for ( var i = 0; i < 17; i++) {   
			sum += Wi[i] * a_idCard[i];// 加权求和   
		}   
		valCodePosition = sum % 11;// 得到验证码所位置   
		if (a_idCard[17] == ValideCode[valCodePosition]) {   
			return true;   
		} else {   
			return false;   
		}   
	} 
	/**  
	 * 通过身份证判断是男是女  
	 * @param idCard 15/18位身份证号码   
	 * @return 'female'-女、'male'-男  
	 */  
	function maleOrFemalByIdCard(idCard){   
		idCard = trim(idCard.replace(/ /g, ""));// 对身份证号码做处理。包括字符间有空格。   
		if(idCard.length==15){   
			if(idCard.substring(14,15)%2==0){   
				return 'female';   
			}else{   
				return 'male';   
			}   
		}else if(idCard.length ==18){   
			if(idCard.substring(14,17)%2==0){   
				return 'female';   
			}else{   
				return 'male';   
			}   
		}else{   
			return null;   
		} 
	}
	/**  
	* 验证18位数身份证号码中的生日是否是有效生日  
	* @param idCard 18位书身份证字符串  
	* @return  
	*/  
	function isValidityBrithBy18IdCard(idCard18){   
		var year =  idCard18.substring(6,10);   
		var month = idCard18.substring(10,12);   
		var day = idCard18.substring(12,14);   
		var temp_date = new Date(year,parseFloat(month)-1,parseFloat(day));   
		// 这里用getFullYear()获取年份，避免千年虫问题   
		if(temp_date.getFullYear()!=parseFloat(year)   
			  ||temp_date.getMonth()!=parseFloat(month)-1   
			  ||temp_date.getDate()!=parseFloat(day)){   
				return false;   
		}else{   
			return true;   
		}   
	}
	/**  
   * 验证15位数身份证号码中的生日是否是有效生日  
   * @param idCard15 15位书身份证字符串  
   * @return  
   */  
	function isValidityBrithBy15IdCard(idCard15){   
		var year =  idCard15.substring(6,8);   
		var month = idCard15.substring(8,10);   
		var day = idCard15.substring(10,12);   
		var temp_date = new Date(year,parseFloat(month)-1,parseFloat(day));   
		// 对于老身份证中的你年龄则不需考虑千年虫问题而使用getYear()方法   
		if(temp_date.getYear()!=parseFloat(year)   
				  ||temp_date.getMonth()!=parseFloat(month)-1   
				  ||temp_date.getDate()!=parseFloat(day)){   
					return false;   
		}else{   
				return true;   
		}   
	}   
	//去掉字符串头尾空格   
	function trim(str) {   
		return str.replace(/(^\s*)|(\s*$)/g, "");   
	}     
}
/*
选项继承
*/
function option_extend(oldopt,newopt){
	for(var i in newopt){
		if((typeof newopt[i]=="object")&&(typeof oldopt[i]!="undefined")){
			option_extend(oldopt[i],newopt[i]);
		}else{
			oldopt[i]=newopt[i];
		}
	}
}
(function($){
	$.fn.formcheck=function(option,funcOption){
		var $form=this;
		var form=this[0];
		//焦点处理方法
		function focusInit(text,info){
			if($(text).next("span.info:eq(0)").length>0){
				var nextSpan=$(text).next("span.info:eq(0)");
				nextSpan[0].className="info";
				nextSpan.text(info);
			}else{
				var nextSpan=$("<span class='info'></span>").insertAfter(text);
				nextSpan.text(info);
			}
		}
		//默认验证后的处理方法
		function checkRight(text,info){
			if($(text).next("span.info:eq(0)").length>0){
				var nextSpan=$(text).next("span.info:eq(0)");
				nextSpan.removeClass("error");
				nextSpan.addClass("right");
				nextSpan.text(info);
			}else{
				var nextSpan=$("<span class='info'></span>").insertAfter(text);
				nextSpan.removeClass("error");
				nextSpan.addClass("right");
				nextSpan.text(info);
			}
			$(text).attr("right",true);
		}
		function checkError(text,info){
			if($(text).next("span.info:eq(0)").length>0){
				var nextSpan=$(text).next("span.info:eq(0)");
				nextSpan.removeClass("right");
				nextSpan.addClass("error");
				nextSpan.text(info);
			}else{
				var nextSpan=$("<span class='info'></span>").insertAfter(text);
				nextSpan.removeClass("right");
				nextSpan.addClass("error");
				nextSpan.text(info);
			}
			$(text).attr("right",false);
		}
		//默认(自带的验证方法)
		var opt={
			submit:{
				type:"form",
				handle:function(form){
					
				},
				right:function(formstr){//这个没有解析,填写验证正确,而不是ajax验证正确
					alert("right");
				},
				error:function(){//这个没有解析,填写验证错误,而不是ajax验证错误
					alert("error");
				}	
			},
			username:{
				focus:{//获取焦点的处理
					type:"append",
					handle:function(elem){
						focusInit(elem,"用户名由字母和数字以及-_构成");
					}
				},
				blur:{//失去焦点的处理
					type:"append",
					right:function(elem,info){
						checkRight(elem,info||"正确");
					},
					error:function(elem,info){
						checkError(elem,info||"用户名格式不对");
					}
				},
				ajax:function(elem,right,error){//ajax的验证处理,不过一定要返回true或者false
					right("正确");
				}
			},
			password:{
				focus:{//获取焦点的处理
					type:"append",
					handle:function(elem){
						focusInit(elem,"密码最好包含字母和数字等其他字符");
					}
				},
				blur:{//失去焦点的处理
					type:"append",
					right:function(elem,info){
						checkRight(elem,info||"正确");
					},
					error:function(elem,info){
						checkError(elem,info||"密码至少六位");
					}
				}
			},
			email:{
				focus:{//获取焦点的处理
					type:"append",
					handle:function(elem){
						focusInit(elem,"请输入邮箱");
					}
				},
				blur:{//失去焦点的处理
					type:"append",
					right:function(elem,info){
						checkRight(elem,info||"正确");
					},
					error:function(elem,info){
						checkError(elem,info||"邮箱格式不正确");
					}
				}
			},
			tel:{
				focus:{//获取焦点的处理
					type:"append",
					handle:function(elem){
						focusInit(elem,"请输入你的真实手机号");
					}
				},
				blur:{//失去焦点的处理
					type:"append",
					right:function(elem,info){
						checkRight(elem,info||"正确");
					},
					error:function(elem,info){
						checkError(elem,info||"手机号码格式不正确");
					}
				}
			},
			identity:{
				focus:{//获取焦点的处理
					type:"append",
					handle:function(elem){
						focusInit(elem,"请输入身份证号");
					}
				},
				blur:{//失去焦点的处理
					type:"append",
					right:function(elem,info){
						checkRight(elem,info||"正确");
					},
					error:function(elem,info){
						checkError(elem,info||"身份证号格式不正确");
					}
				}
			},
			postcode:{
				focus:{//获取焦点的处理
					type:"append",
					handle:function(elem){
						focusInit(elem,"请输入邮政编码");
					}
				},
				blur:{//失去焦点的处理
					type:"append",
					right:function(elem,info){
						checkRight(elem,info||"正确");
					},
					error:function(elem,info){
						checkError(elem,info||"邮政编码不正确");
					}
				}
			},
			none:{
				focus:{//获取焦点的处理
					type:"append",
					handle:function(elem,info){
						focusInit(elem,info||"此项为必填项");
					}
				},
				blur:{//失去焦点的处理
					type:"append",
					right:function(elem,info){
						checkRight(elem,info||"正确");
					},
					error:function(elem,info){
						checkError(elem,info||"必填!");
					}
				}
			}
		};
		//读入参数
		option_extend(opt,option);
		//各种验证规则
		var func={
			must:function(value){
				if(value==""){
					return "必填项";
				}
				return true;
			},
			username:function(value){
				var reg=/^[a-z0-9_-]{3,16}$/;
				if(value.match(reg)){
					return true;	
				}
				return "用户名格式不对";
			},
			password:function(value){
				var reg=/^.{6,18}$/;
				if(value.match(reg)){
					return true;	
				}
				return "密码格式不对,至少六位";
			},
			email:function(value){
				var reg=/^([a-z0-9_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})$/;
				if(value.match(reg)){
					return true;	
				}
				return false;
			},
			tel:function(value){
				var reg=/^(13[0-9]|15[0|1|2|3|6|7|8|9]|18[0|1|2|8|9])\d{8}$/;
				if(value.match(reg)){
					return true;	
				}
				return false;
			},
			identity:function(value){
				return IdCardValidate(value);
			},
			postcode:function(value){
				var reg=/^[0-9]{6}$/;
				if(value.match(reg)){
					return true;	
				}
				return false;
			},
			none:function(){
				return true;
			}
		}
		//读入参数
		option_extend(func,funcOption);
		var funcs=";";//获取所有的验证规则
		for(var i in func){
			funcs+=i+";";	
		}
		var opts=";";//获取所有的验证选项
		for(var i in opt){
			opts+=i+";";	
		}
		var formElements=form.elements;
		for(var i=0,len=formElements.length;i<len;i++){
			var input=formElements[i];//表单元素
			var litype=input.name;//表单字段
			var reg=/text|password/g;
			var classExist=true;
			//判断需不需要验证
			if(!(input.type.match(reg)&&input.nodeName!="TEXTAREA")){//如果不是文本字段,或者没有定义验证选项跳过
				continue;	
			}else{
				if(!(opts.indexOf(";"+litype+";")>-1)){
					var yes=false;
					var classes=input.className.split(" ");
					
					for(var j=0,j_len=classes.length;j<len;j++){
						if(classes[j]!=""&&funcs.indexOf(";"+classes[j]+";")>-1){
							yes=true;
						}
					}
					if(!yes){
						classExist=false;
						if(typeof $(input).attr("prompt")=="undefined"){
							continue;
						}
					}
				}
			}
			//初始化span
			if(typeof $(input).attr("placeholder")!="undefined"){
				var placeholder=$(input).attr("placeholder");
				$(input).attr("placeholder","");
				if($(input).next("span.info:eq(0)").length>0){
					var nextSpan=$(input).next("span.info:eq(0)");
					nextSpan[0].className="info";
					nextSpan.text(placeholder);
				}else{
					var nextSpan=$("<span class='info'></span>").insertAfter(input);
					nextSpan.text(placeholder);
				}	
			}
			(function(elem){
				var type=input.name;//表单字段
				if(opts.indexOf(";"+type+";")==-1){
					type="none";	
				}
				var classes=input.className.split(" ");//表单类名 集合
				
				if(!classExist){
					classes=["none"];
				}
				if(typeof $(input).attr("prompt")!='undefined'){
					var inputprompt=$(input).attr("prompt");
				}
				//添加foucs验证
				if(opt[type].focus.type=="append"){//如果是附加验证
					$(elem).bind("focus",function(){
						opt[type].focus.handle(elem,inputprompt||null,focusInit);
					});
				}else{//如果要将自带验证覆盖
					elem.onfocus=function(){
						opt[type].focus.handle(elem,inputprompt||null,focusInit);
					}
				}
				//blur验证方法
				blurHandle=function(elem,type,classes){
					var yes=false;
					var info=null;
					//循环所有验证方法
					for(var j=0,j_len=classes.length;j<j_len;j++){
						if(funcs.indexOf(";"+classes[j]+";")>-1){
							var returnValue=func[classes[j]](elem.value);
							if(returnValue==true){
								yes=true;
							}else{
								yes=false;
								if(returnValue!=false){
									info=returnValue;
								}
								break;
							}
						}
					}
					if(yes){//填写正确的处理
						if(typeof opt[type].ajax=="function"){//如果存在ajax验证,则要验证ajax
							opt[type].ajax(elem,function(info){
								opt[type].blur.right(elem,info,checkRight);
							},function(info){
								opt[type].blur.error(elem,info,checkError);	
							});
						}else{
							opt[type].blur.right(elem,info,checkRight);
						}
					}else{//填写错误的处理
						if(info!=null){
							opt[type].blur.error(elem,info,checkError);	
						}else{
							opt[type].blur.error(elem,info,checkError);
						}
					}
				}
				//添加blur验证
				if(opt[type].blur.type=="append"){
					$(elem).bind("blur",function(){
						blurHandle(elem,type,classes);
					});	
				}else{
					elem.onblur=function(){
						blurHandle(elem,type,classes);
					}
				}
			})(input);
		}
		
		//添加提交验证
		$form.bind("submit",function(event){
			event.preventDefault();
			var yes=false;
			for(var i=0,len=formElements.length;i<len;i++){
				var input=formElements[i];//表单元素
				if(input.type=="text"||input.type=="password"){
					if($(input).attr("right")=="true"){
						yes=true;
					}else if(typeof $(input).attr("right")=="undefined"){
						input.focus();
						input.blur();
						if($(input).attr("right")=="true"){
							yes=true;
						}
					}
				}
			}
			if(yes){
				opt.submit.handle(form);
				if(opt.submit.type=="form"){
					form.submit();	
				}else{
					opt.submit.right($form.serialize());
				}
			}else{
				opt.submit.error();
			}
		});
	}
})(jQuery);
var formcheckpath=getScriptPath("formcheck.js");
import_script([formcheckpath+"json2.js"]);
import_style([formcheckpath+"formcheck.css"]);