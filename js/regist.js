/*
 * 用于regist.jsp注册
 */
$(function(){
	
	//初始化每个输入框的值
	init();
	
	//邮箱输入框 自动下拉
	var email = new InputSuggest({
		width: 250,
		opacity: 1,
		input: document.getElementById('registemail'),
		data: ['qq.com','163.com','126.com','sina.com','sohu.com','hotmail.com','gmail.com','yahoo.com','msn.com']
	});
	
	//是否勾选阅读条款
	$('#registifAgrees').click(function(){
		if($('#registifAgrees').is(':checked')){
			$("#ifAgrees-msg").attr("style","display:none;");
		}else{
			$("#ifAgrees-msg").attr("style","display:block;");
		}
	});
	
	/**
	 * 后台判断返回错误标识时，对各个错误信息的处理
	 */
	//邮箱非法
	$("#registemail").focus(function(){
		$("#registemailerror").hide();
	});
	$("#registemail").blur(function(){
		$("#registemailerror").hide();
	});
	//手机号非法
	$("#registphone").focus(function(){
		$("#registphoneerror").hide();
	});
	$("#registphone").blur(function(){
		$("#registphoneerror").hide();
	});
	//邮箱已注册
	$("#registemail").focus(function(){
		$("#registemailexist").hide();
	});
	$("#registemail").blur(function(){
		$("#registemailexist").hide();
	});
	//手机号已注册
	$("#registphone").focus(function(){
		$("#registphoneexist").hide();
	});
	$("#registphone").blur(function(){
		$("#registphoneexist").hide();
	});
	//验证码输入错误
	$("#registcheckCode").focus(function(){
		$("#registcheckCodeerror").hide();
	});
	$("#registcheckCode").blur(function(){
		$("#registcheckCodeerror").hide();
	});
	//输入的密码的长度不符合要求
	$("#registpassword").focus(function(){
		$("#registpassworderror").hide();
	});
	$("#registpassword").blur(function(){
		$("#registpassworderror").hide();
	});
	//输入的确认密码的长度不符合要求
	$("#registconfirmPassword").focus(function(){
		$("#registconfirmPassworderror").hide();
	});
	$("#registconfirmPassword").blur(function(){
		$("#registconfirmPassworderror").hide();
	});
	//密码和确认密码不一致
	$("#registconfirmPassword").focus(function(){
		$("#tworegistconfirmPassworderror").hide();
	});
	$("#registconfirmPassword").blur(function(){
		$("#tworegistconfirmPassworderror").hide();
	});
	//短信验证码
	$("#smsCode").focus(function(){
		$("#registsmscodeerror").hide();
	});
	$("#smsCode").blur(function(){
		$("#registsmscodeerror").hide();
	});
	
	$.formValidator.initConfig({validatorGroup:"4",submitOnce:true,formID:"registform",
			ajaxForm:{
				type : "post",
				dataType : "json",
				async : true,
				buttons:$("#registsubmit"),
				url: getPath()+"/customer/regist",
				success:function(data){
					if(data.ajaxResponse == 1){ //ajax响应成功
						var flag = data.flag;
						if(flag == 10){//邮箱非法
							registemailerror();
						}else if(flag == 11){//手机号非法
							registphoneerror();
						}else if(flag == 12){//短信验证码错误
							registsmscodeerror();
						}else if(flag == 1){//邮箱已经存在
							registemailexist();
						}else if(flag == 9){//手机号已经存在
							registphoneexist();
						}else if(flag == 2){//验证码输入错误
							registcheckCodeerror();
						}else if(flag == 3){//输入的密码的长度不符合要求
							registpassworderror();
						}else if(flag == 4){//输入的确认密码的长度不符合要求
							registconfirmPassworderror();
						}else if(flag == 5){//密码和确认密码不一致
							tworegistconfirmPassworderror();
						}else if(flag == 6){//没有勾选同意条款
							$("#ifAgrees-msg").attr("style","display:block;");
						}else if(flag == 7){//注册成功
							saveData($.trim($("#registemail").val()));														
							$mixBox({
					  	      msgId: '#newbox',
					  	      showOverlays: true,
					          msgHead: '提示信息',  //可缺省
					          msgInfo: '注册成功',
					          msgConts: '恭喜您，注册成功！'
							});
							
							//追踪代码
							var tprm="zxid="+data.customersid;
							__ozfac2(tprm,"#regsuc");
							try{reg_adwq(data.customersid);}catch(e){}
							setTimeout(function(){		
								if(document.referrer){
									window.location.href = document.referrer;
								}else{
									window.location.href = "/";								
								}
							}, 1000);
						}else if(flag == 8){//注册失败
							$mixBox({
						  	      msgId: '#newbox',
						  	      showOverlays: true,
						          msgHead: '提示信息',  //可缺省
						          msgInfo: '注册失败',
						          msgConts: 'Sorry,注册失败！'
							});
						}
					}
					reloadImage('imageCoderegist');
					$("#registcheckCode").focus();
					return false;
				},
				error: function(jqXHR, textStatus, errorThrown){alert("服务器没有返回数据，可能服务器忙，请重试"+errorThrown);}
			},
			submitAfterAjaxPrompt : '有数据正在异步验证，请稍等...'
	});
	
	//验证邮箱
	$("#registemail").formValidator({
		validatorGroup:"4",
		onShow:"",
		onFocus:"<span style='color:#4c4c4c'>请输入邮箱</span>",
		onCorrect:" "
	})
	.regexValidator({regExp:"notempty",dataType:"enum",onError:"<span style='color:#4c4c4c'>邮箱不能为空</span>"})
	.regexValidator({regExp:"email", dataType:"enum",onError:function(data){return "<span style='color:#4c4c4c'>邮箱格式不正确</span>"}})
	.functionValidator({fun:function(){
		var yahooemail = /^[a-zA-Z0-9_]*\@yahoo\.(cn|com\.cn)$/;
		var againemail = $.trim($("#registemail").val());
		if(yahooemail.test(againemail)){//雅虎邮箱
			return "<span style='color:#4c4c4c'>雅虎邮箱已停用，不支持以雅虎邮箱做为注册账号</span>";
		}
	}})
	.ajaxValidator({
		  type : "POST",
		  dataType : "json",
		  async : true,
		  url : getPath() + "/ajax/findEmail",
		  success : function(data){
			  if(data.ajaxResponse == 1){
				  if( data.flag == 1 || data.flag == 0) return false;
					  return true;
			  }
		  },
		  error: function(jqXHR, textStatus, errorThrown){alert("服务器没有返回数据，可能服务器忙，请重试"+errorThrown);},
		  onError : "<span style='color:#4c4c4c'>邮箱地址已注册，输入新邮箱</span>或 <a class='blue' href='" + getPath() + "/customer/login.html'>登录</a>",
		  onWait : "正在对邮箱进行合法性校验，请稍候..."
	});
	//验证手机
	$("#registphone").formValidator({
		validatorGroup:"4",
		onShow:"",
		onFocus:"<span style='color:#4c4c4c'>请输入手机号</span>",
		onCorrect:""
	})
	.regexValidator({regExp:"notempty",dataType:"enum",onError:"<span style='color:#4c4c4c'>手机号不能为空</span>"})
	.inputValidator({min:7,max:11,onError:"手机号格式不正确"})
	.regexValidator({regExp:"mobile", dataType:"enum",onError:function(data){return "<span style='color:#4c4c4c'>手机号格式不正确</span>"}})
	.ajaxValidator({
		  type : "POST",
		  dataType : "json",
		  async : true,
		  url : getPath() + "/ajax/findPhone",
		  success : function(data){
			  if(data.ajaxResponse == 1){
				  if( data.flag == 1 || data.flag == 0){
					  phoneFlag=false;
					  $("#sendPhoneSMS").attr("disabled", "disabled");
					  return false;
				  } 
				  phoneFlag=true;
				  $("#sendPhoneSMS").removeAttr("disabled");
				  $("#sendPhoneSMS").val("免费获取验证码");
				  $("#sendPhoneSMS").attr("onclick","send();");
				  return true;
			  }
		  },
		  error: function(jqXHR, textStatus, errorThrown){alert("服务器没有返回数据，可能服务器忙，请重试"+errorThrown);},
		  onError : "<span style='color:#4c4c4c'>该手机号已经注册成为永乐会员&nbsp;&nbsp;<a class='blue' href='" + getPath() +"/customer/login.html'>登录</a></span>",
		  onWait : "正在对手机号码进行合法性校验，请稍候..."
	});
	
	//验证密码
	$("#registpassword").formValidator({
		validatorGroup:"4",
		onShow:"",
		onFocus:"<span style='color:#4c4c4c'>请输入密码</span>",
		onCorrect:""
	})
	.regexValidator({regExp:"notempty",dataType:"enum",onError:"<span style='color:#4c4c4c'>密码不能为空</span>"})
	.inputValidator({min:6,max:18,onError:"<span style='color:#4c4c4c'>密码由6~18位字母、数字、下划线组成，不能包含其他特殊字符</span>"})
	.regexValidator({regExp:"username",dataType:"enum",onError:"<span style='color:#4c4c4c'>密码由6~18位字母、数字、下划线组成，不能包含其他特殊字符</span>"});
	
	
	//验证确认密码
	$("#registconfirmPassword").formValidator({
		validatorGroup:"4",
		onShow:"",
		onFocus:"<span style='color:#4c4c4c'>确认密码不能为空</span>",
		onCorrect:""
	})	
	.regexValidator({regExp:"notempty",dataType:"enum",onError:"<span style='color:#4c4c4c'>确认密码不能为空</span>"})
	.inputValidator({min:6,max:18,onError:"<span style='color:#4c4c4c'>密码由6~18位字母、数字、下划线组成，不能包含其他特殊字符</span>"})
	.regexValidator({regExp:"username",dataType:"enum",onError:"<span style='color:#4c4c4c'>确认密码由6~18位字母、数字、下划线组成，不能包含其他特殊字符</span>"})
	.compareValidator({desID:"registpassword",operateor:"=",onError:"<span style='color:#4c4c4c'>两次密码输入不一致，请重新输入</span>"});
	
	//验证验证码
	$("#registcheckCode").formValidator({
		validatorGroup:"4",
		onShow:"",
		onFocus:"<span style='color:#4c4c4c'>请输入验证码</span>",
		onCorrect:""
	})
	.regexValidator({regExp:"notempty",dataType:"enum",onError:"<span style='color:#4c4c4c'>验证码不能为空</span>"})
	.inputValidator({min:4,max:4,onError:"<span style='color:#4c4c4c'>验证码输入错误</span>"})
	.ajaxValidator({
	  type : "POST",
	  dataType : "json",
	  async : true,
	  url : getPath() + "/ajax/validateCheckCode",
	  success : function(data){
		  if(data.ajaxResponse == 1){
			  if( data.flag == 2 ) return false;
				  return true;
		  }
	  },
	  error: function(jqXHR, textStatus, errorThrown){alert("服务器没有返回数据，可能服务器忙，请重试"+errorThrown);},
	  onError : "<span style='color:#4c4c4c'>验证码输入错误</span>",
	  onWait : "正在对验证码名进行合法性校验，请稍候..."
	});
	
	
	// 短信验证码
	$("#smsCode").formValidator({
		validatorGroup:"4",
		onShow:"",
		onFocus:"<span style='color:#4c4c4c'>请输入短信验证码</span>",
		onCorrect:""
	})
	.regexValidator({regExp:"notempty",dataType:"enum",onError:"<span style='color:#4c4c4c'>短信验证码不能为空</span>"})
	.inputValidator({min:4,max:6,onError:"<span style='color:#4c4c4c'>密码由4或6位数字组成，不能包含其他特殊字符</span>"})
	
	//验证是否勾选服务条款
	$("#ifAgrees").formValidator({
		validatorGroup:"4",
		onShow:"",
		onFocus:"",
		onCorrect:""})      
	.functionValidator({fun:function(){
		if(!$('#registifAgrees').is(':checked')){
			$("#ifAgrees-msg").attr("style","display:block;");
			return false;
		}else{
			return true;
		}
	}});
	
	
	//初始化输入框的值
	function init(){
		$("#registemail").val("");
		$('#registphone').val("");
		$('#registpassword').val("");
		$('#registconfirmPassword').val("");
		$('#registcheckCode').val("");
	}
	//注册完成后初始化数据和样式
	function clean(){
		$('#ifAgrees').attr("checked",false);
		init();//重新初始化各个输入框的值
		$('#registemailTip').html("");
		$('#registphoneTip').html("");
		$('#registpasswordTip').html("");
		$('#registconfirmPasswordTip').html("");
		$('#registcheckCodeTip').html("");
	}
	
	/**
	 * 后台判断返回错误标识时，清除默认样式(如绿对勾)，显示错误信息
	 */
	function registemailerror(){
		$('#registemailTip').html("");
		$("#registemailerror").show();
	}
	function registphoneerror(){
		$('#registphoneTip').html("");
		$("#registphoneerror").show();
	}
	function registsmscodeerror(){
		$('#smsCodeTip').html("");
		$("#registsmscodeerror").show();
	}
	function registemailexist(){
		$('#registemailTip').html("");
		$("#registemailexist").show();
	}
	function registphoneexist(){
		$('#registphoneTip').html("");
		$("#registphoneexist").show();
	}
	function registcheckCodeerror(){
		$('#registcheckCodeTip').html("");
		$("#registcheckCodeerror").show();
	}
	function registpassworderror(){
		$('#registpasswordTip').html("");
		$("#registpassworderror").show();
	}
	function registconfirmPassworderror(){
		$('#registconfirmPasswordTip').html("");
		$("#registconfirmPassworderror").show();
	}
	function tworegistconfirmPassworderror(){
		$('#registconfirmPasswordTip').html("");
		$("#tworegistconfirmPassworderror").show();
	}
});
/**
 * 2015-01-27 July 易博js统计
 * @param customersid
 */
function reg_adwq(customersid){
	_adwq.push(['_setAction','83uuqy',customersid+'']);
	
	reg_ag(customersid);
}

function reg_ag(customersid){
	//var _agt=_agt||[];
	_agt=[];
	_agt.push(['_atscu','AG_383620_VERK']);
	_agt.push(['_atsdomain','www.228.com.cn']);/* 请将$网站主域$替换为您嵌入代码的真实主域，例如：agrantsem.com */
	_agt.push(['_atsev','101']);
	_agt.push(['_atsusr',customersid.toString()]);/* 请将$用户名$替换为真实的用户名 */
	var ag=document.createElement('script'); 
	ag.type='text/javascript'; 
	ag.async = true;
	ag.src=(document.location.protocol=='https:'?'https':'http')+'://'+'t.agrantsem.com/js/ag.js';
	var s=document.getElementsByTagName('script')[0]; 
	s.parentNode.insertBefore(ag,s);
}

var countdown=60;

var phoneFlag=false;

function settime() {
	if (countdown == 0) {
		$("#sendPhoneSMS").removeAttr("disabled");
		$("#sendPhoneSMS").val("免费获取验证码");
		$("#sendPhoneSMS").attr("onclick","send();");
		countdown = 60;
		return;
	} else {
		$("#sendPhoneSMS").attr("disabled", true);
		$("#sendPhoneSMS").val("重新发送(" + countdown + ")");
		countdown--;
	}
	setTimeout(function() {settime();},1000);
}