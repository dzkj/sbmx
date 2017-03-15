//静态化导致无法从java拦截联盟的状态，导致无法正常记录联盟
function GetQueryString(name)
{
     var reg = new RegExp("(^|&)"+ name +"=([^&]*)(&|$)");
     var r = window.location.search.substr(1).match(reg);
     if(r!=null)
    	 return unescape(r[2]); 
     return null;
}

String.prototype.endWith=function(str){
	if(str==null||str==""||this.length==0||str.length>this.length)
		return false;
	if(this.substring(this.length-str.length)==str)
		return true;
	else
		return false;
	return true;
}

String.prototype.startWith=function(str){
	if(str==null||str==""||this.length==0||str.length>this.length)
		return false;
	if(this.substr(0,str.length)==str)
		return true;
	else
		return false;
	return true;
}
function isNullOrEmpty(strVal) {
	strVal = $.trim(strVal);
	if (strVal == '' || strVal == null || strVal == undefined) {
		return true;
	} else {
		return false;
	}
}

var $source = GetQueryString("source");
var $unionmsg = GetQueryString("subid");
var $tge = GetQueryString("tge");
var expiresDate= new Date();
var t = 1;
var  unionList= new Array("fst","yimadsp","wushuangdsp","wushuangdsp1","wushuangdsp2","wushuangdsp3","wushuangdsp4","brtr");//
var  unionList2 = new Array("weiyi","zhitui","caibei","duomai","LTINFO","yiqifa");
if(!isNullOrEmpty($source) && !$source.endWith("login")){
	$.cookie("unionId", null,{path:"/", expires:-1, domain:".228.com.cn" });
	if(unionList.join(',').indexOf($source)>=0){
		t = 7;
	}
	if(unionList2.join(',').indexOf($source)>=0){
		t = 30;
	}
	expiresDate.setTime(expiresDate.getTime() + (t * 24 * 60 * 60 * 1000));
	$.cookie("source", $source,{path:"/", expires:expiresDate, domain:".228.com.cn" });		
	if(isNullOrEmpty($unionmsg)){
		$unionmsg ='';
	}
	$.cookie("unionmsg", $unionmsg,{path:"/", expires:expiresDate, domain:".228.com.cn" });	
	if(!isNullOrEmpty($tge)){
		$.cookie("tge", $tge,{path:"/", expires:expiresDate, domain:".228.com.cn" });	
	}else{
		$.cookie("tge", $tge,{path:"/", expires:-1, domain:".228.com.cn" });	
	}
}
//STORY #2181::完善用户注册、登录行为的记录
var $activityId = GetQueryString("activityId");
if(isNullOrEmpty($activityId)){
	$activityId ='';
}else{
	expiresDate.setTime(expiresDate.getTime() + (24 * 60 * 60 * 1000));//活动ID的注册行为，活动ID存在一天
	$.cookie("activityId", $activityId,{path:"/", expires:expiresDate, domain:".228.com.cn" });	
}
//STORY #2888::PC端搜索页、商品页支持纪录联盟订单来源
var $unionId = GetQueryString("unionId");
if(!isNullOrEmpty($unionId) && !$unionId.endWith("login")){
	$.cookie("unionId", $unionId,{path:"/", domain:".228.com.cn" });
	$.cookie("source", null,{path:"/", expires:-1, domain:".228.com.cn" });		
	$.cookie("unionmsg", null,{path:"/", expires:-1, domain:".228.com.cn" });	
	$.cookie("tge", null,{path:"/", expires:-1, domain:".228.com.cn" });	
}

