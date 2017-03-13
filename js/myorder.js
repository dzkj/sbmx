

$(function(){
		
	//订单状态下拉框查询
	$("#orderstatus").change(function(){
		queryMyOrder();
	});
	//时间下拉框查询
	$("#ordertime").change(function(){
		queryMyOrder();
	});
	
	
	/********************维护转账信息 start *******************/
	/**
	 * 银行转账
	 */
	var phone_re = /^1[3|4|5|8]\d{9}$/;
	var money = /^(-?\d+)(\.\d{0,2})?$/;//金额
	
	$("table[id='blankinfoA'] input").focus(function(){
		if($(this).is("#bankname")){
			$("#error_bankname").hide();
		}else if($(this).is("#givemoney")){
			$("#empty_givemoney").hide();
			$("#error_givemoney").hide();
		}else if($(this).is("#cardname")){
			$("#error_cardname").hide();
		}else if($(this).is("#givetime")){
			$("#error_givetime").hide();
		}else if($(this).is("#phone")){
			$("#empty_phone").hide();
			$("#error_phone").hide();
		}else if($(this).is("#operationnumber")){
			$("#empty_operationnumber").hide();
		}
	});
	$("table[id='blankinfoA'] input").blur(function(){
		if($(this).is("#bankname")){
			var bankname = $.trim($(this).val());
			if(bankname == null || bankname == ''){
				$("#error_bankname").show();
				return false;
			}
		}else if($(this).is("#givemoney")){
			var givemoney = $.trim($(this).val());
			if(givemoney == null || givemoney == ''){
				$("#empty_givemoney").show();
				return false;
			}else if(!money.test(givemoney)){
				$("#error_givemoney").show();
				return false;
			}
		}else if($(this).is("#cardname")){
			var cardname = $.trim($(this).val());
			if(cardname == null || cardname == ''){
				$("#error_cardname").show();
				return false;
			}
		}else if($(this).is("#givetime")){
			var givetime = $.trim($(this).val());
			if(givetime == null || givetime == ''){
				$("#error_givetime").show();
				return false;
			}
		}else if($(this).is("#phone")){
			var phone = $.trim($(this).val());
			if(phone == null || phone == ''){
				$("#empty_phone").show();
				return false;
			}else if(!phone_re.test(phone)){
				$("#error_phone").show();
				return false;
			}
		}else if($(this).is("#operationnumber")){
			var operationnumber = $.trim($(this).val());
			if(operationnumber == null || operationnumber == ''){
				$("#empty_operationnumber").show();
				return false;
			}
		}
	});
	
	/**
	 * 支付平台转账
	 */
	$("table[id='blankinfoB'] input").focus(function(){
		if($(this).is("#trading")){
			$("#error_trading").hide();
		}
	});
	$("table[id='blankinfoB'] input").blur(function(){
		if($(this).is("#trading")){
			var trading = $.trim($(this).val());
			if(trading == null || trading == ''){
				$("#error_trading").show();
			}
		}
		
	});
	
	//提交
	$("#yesSubmit").click(function(){
		
		//银行转账
		var bankname = $.trim($("#bankname").val());
		var givemoney = $.trim($("#givemoney").val());
		var cardname = $.trim($("#cardname").val());
		var phone = $.trim($("#phone").val());
		var operationnumber = $.trim($("#operationnumber").val());
		var givetime = $.trim($("#givetime").val());
		
		//支付平台转账
		var trading = $.trim($("#trading").val());
		
		//remittance ： 1银行转账, 2支付平台转账
		var remittance = $.trim($("input[name='remittance']:checked").val());
		if(remittance == '1'){
			if($("input[name='methodremittance']:checked").length == 0){
				$("#chooseType").show();
				return false;
			} else if(bankname == '' || givemoney == '' || cardname == '' || phone == '' || operationnumber == '' || givetime == ''){
				$("table[id='blankinfoA'] input").trigger('blur');
			}else{
				var $bankinfoform = $("#blankinfoform");
				var url = getPath() + "/personorders/updatetransfer";
				$.get(url,$bankinfoform.serialize(),function(data){
					if(data.ajaxResponse == 1){
						if(data.flag == -1){
							$('#jump-login').minBox({});//弹出登录框
							return false;
						}else if(data.flag == 1){
							window.location.reload();
							return true;
						}
					}
				});
			}
		}else if(remittance == '2'){
			if($("input[name='payremittance']:checked").length==0){
				$("#chooseType").show();
				return false;
			} else if(trading == ''){
				$("table[id='blankinfoB'] input").trigger('blur');
			} else {
				var $bankinfoform = $("#blankinfoform");
				var url = getPath() + "/personorders/updatetransfer";
				$.get(url,$bankinfoform.serialize(),function(data){
					if(data.ajaxResponse == 1){
						if(data.flag == -1){
							$('#jump-login').minBox({});//弹出登录框
							return false;
						}else if(data.flag == 1){
							window.location.reload();
							return true;
						}
					}
				});
			}
		}
	});
	/********************维护转账信息 end *******************/
	
	//支付倒计时
	$('p.paytime').each(function(n,obj){
		//只有非申购商品才显示倒计时
		var isapply = obj.getAttribute("isapply");
		if(isapply != 1 && isapply != 2){
			SetPayTime(obj);
		}
	});
	
	//其他情况下的订单状态显示
	$('.otherStatus').each(function(i,s){
		otherStatusShow(s);
	});
	
	
	// 点击'银行转账'或'支付平台转账'
	$("input[name='remittance']").click(function(){
		//remittance ： 1银行转账, 2支付平台转账
		var remittance = $.trim($("input[name='remittance']:checked").val());
		if(remittance == '1'){
			//点击 ‘银行转账’ 隐藏‘支付平台转账’的错误提示
			$("#error_trading").hide();
			if($("input[name='methodremittance']:checked").length == 0){
				// 选中'银行转账'下的'现金存款'|'ATM转账'|'网上银行转账' 
				$("#chooseType").hide();//隐藏‘请选择转账方式’提示
				$("table[id='blankinfoA'] input:text").attr("disabled",true);//使 所有input可输入值
			} 
		} else if(remittance == '2'){
			//点击 ‘支付平台转账’ 隐藏‘银行转账’的错误提示
			$("#error_bankname").hide();
			$("#empty_givemoney").hide();
			$("#error_givemoney").hide();
			$("#error_cardname").hide();
			$("#error_givetime").hide();
			$("#empty_phone").hide();
			$("#error_phone").hide();
			$("#empty_operationnumber").hide();
			if($("input[name='payremittance']:checked").length == 0){
				// 点击'支付平台转账'下的'支付宝'|'快钱'|'银联在支付'
				$("#chooseType").hide();//隐藏‘请选择转账方式’提示
				$("table[id='blankinfoB'] input:text").attr("disabled",true);//使 所有input不可输入值
				$("#info").attr("disabled",true);
			}
		}
	});
	// 点击'银行转账'下的'现金存款'|'ATM转账'|'网上银行转账'
	$("input[name='methodremittance']").click(function(){
		// 隐藏错误提示
		$("#error_bankname").hide();
		$("#empty_givemoney").hide();
		$("#error_givemoney").hide();
		$("#error_cardname").hide();
		$("#error_givetime").hide();
		$("#empty_phone").hide();
		$("#error_phone").hide();
		$("#empty_operationnumber").hide();
		$("#chooseType").hide();//隐藏‘请选择转账方式’提示
		$("table[id='blankinfoA'] input:text").removeAttr("disabled");//使 所有input可输入值
	});
	// 点击'支付平台转账'下的'支付宝'|'快钱'|'银联在支付'
	$("input[name='payremittance']").click(function(){
		$("#error_trading").hide();// 隐藏错误提示
		$("#chooseType").hide();//隐藏‘请选择转账方式’提示
		$("table[id='blankinfoB'] input:text").removeAttr("disabled");//使 所有input可输入值
		$("#info").removeAttr("disabled");
	});
	
});



//模糊查询提交
function queryMyOrder(){
	$("#myorderform").submit();
}

//点击 维护转账信息
function payInfo(ordersid){
	
	//remittance ： 1银行转账, 2支付平台转账
	var remittance = $.trim($("input[name='remittance']:checked").val());
	if(remittance == '1'){
		if($("input[name='methodremittance']:checked").length == 0){
			$("table[id='blankinfoA'] input:text").attr("disabled",true);
		} 
	} else if(remittance == '2'){
		if($("input[name='payremittance']:checked").length == 0){
			$("table[id='blankinfoB'] input:text").attr("disabled",true);
			$("#info").attr("disabled",true);
		}
	}
	
    //调用显示弹出框
    var url = getPath() + "/personorders/dialogPersontransfer?orderid=" + ordersid;
    $.getJSON(url, function (data){
    	 if(data.loginStatus == "0"){//用户session已过期
    		 $('#jump-login').minBox({});//弹出登录框
    	 }else{
    		 $('#pid').text(data.ordersid);
    		 $('#orderId').val(data.ordersid);
    		 $('#uname').text(data.username);
    		 $('#price').text(data.ysprice);
    		 //使用其他支付方式链接
    		 $('#otherPayStyle').attr('href',"${pathNew}/payNew/toPay.html?orderId=" + data.ordersid);
    		 
    		 if(data.cpay != null && data.cpay != ''){
    			 $.each(data.cpay,function(i,o){
    				 //初始化值
    				 /*	银行转账 	*/
    				 $("#bankname").html("");
    				 $("#givemoney").html("");
    				 $("#givetime").html("");
    				 $("#cardname").html("");
    				 $("#phone").html("");
    				 $("#operationnumber").html("");
    				 /*	支付平台转账 	*/
    				 $("#trading").html("");
    				 $("#info").html("");
    				 
    				 var remittance = o.REMITTANCE;
    				 if(remittance == '1'){//银行转账
    					 //银行转账-子选项默认选中
    					 var methodremittance = o.METHODREMITTANCE;
						 if(methodremittance == '1'){
							 $('input[name="methodremittance"][value="1"]').attr('checked', true);
						 } else if(methodremittance == '2'){
							 $('input[name="methodremittance"][value="2"]').attr('checked', true);
						 } else if(methodremittance == '3'){
							 $('input[name="methodremittance"][value="3"]').attr('checked', true);
						 }
    					
    					 //给各个input赋值
    					 $("#bankname").val(o.OPENBUCK);
    					 $("#givemoney").val(o.ZPIRCE);
    					 $("#givetime").val(o.TRANSFERDATE);
    					 $("#cardname").val(o.USERNAME);
    					 $("#phone").val(o.CUSTOMERPHONE);
    					 $("#operationnumber").val(o.SEQUENCESID);
    				 }else if(remittance == '2'){//支付平台转账 
    					 //隐藏银行转账项及子选项
    					 $('.methodremittance').hide();
    					 $('.remittanceTypeA').hide();
    					 //显示支付平台转账项及子选项
    					 $('.payremittance').show();
    					 $('.remittanceTypeB').show();
    					 //默认支付平台转账项选中
    					 $('input[name="remittance"][value="2"]').attr('checked', true);
    					 //默认支付平台转账项-子选项选中
    					 var payremittance = o.PAYREMITTANCE;
    					 if(payremittance == '1'){
    						 $('input[name="payremittance"][value="1"]').attr('checked', true);
    					 }else if(payremittance == '2'){
    						 $('input[name="payremittance"][value="2"]').attr('checked', true);
    					 }else if(payremittance == '3'){
    						 $('input[name="payremittance"][value="3"]').attr('checked', true);
    					 }
    					 //给各个input赋值
    					 $("#trading").val(o.TRADING);
    					 $("#info").val(o.INFO);
    				 }
    			 });
    		 }
    		 if(data.ptransfer != null && data.ptransfer != ''){
    			 //遍历赋值-转入永乐账号项
    			 $.each(data.ptransfer,function(i,o){
    				 $("#bankinfo").html("");
    				 var cityname = o.CITYNAME;
    				 cityname = cityname.replace('市','');
    				 $("#ylbankname").val(o.YLBANKNAME);//传后台使用
    				 var name = '';
    				 if(cityname == '北京'){
    					 name = '总部';
    				 }else{
    					 name = '分站';
    				 }
    				 $("#bankinfo").append("<p>" + o.BANKNAME+ " [ " + cityname + name + "账号 ]</p><p>" + o.YLBANKNAME + "</p>");
    			 });
    		 }
    		 $('#box-pop2').minBox({});
    	 }
    });
 }


//操作、 删除：更新订单状态为 10: 用户已删除
function updateOrderIdStarusToDel(ids){
	var url = getPath() + "/personorders/updateOrderIdStarus?ordersid="+ids;
	$.get(url,{type:1}, function(data){
		if(data.ajaxResponse == 1){
			if(data.flag == 1 || data.flag == 2){
				window.location.reload();
				return true;
			}else{
				$('#jump-login').minBox({});//弹出登录框
				return false;
			}
		}
	});
}

//操作、批量删除
function updateOrderIdStarusToAllDel(){
	$("[name='order_1']:checked").each(function(){
		updateOrderIdStarusToDel($(this).val());
	});
}


//操作、取消 ：更新订单状态为 7:无效
function updateOrderIdStarusToCancel(ids){
	var url = getPath() + "/personorders/updateOrderIdStarus?ordersid="+ids;
	$.get(url, function(data){
		if(data.ajaxResponse == 1){
			if(data.flag == 1){
				//订单状态改变成功
				 window.location.reload();
				 return true;
			}else{
				alert(data.message);
			}
		}
	});
}

//操作 、批量取消
function updateOrderIdStarusToAllCancel(){
	$("[name='order_1']:checked").each(function(){
		updateOrderIdStarusToCancel($(this).val());
	});
}



//支付倒计时
function SetPayTime(obj) { 
	var nowTime = new Date($(obj).attr('nowTime').replace(/-/g, "/"));//系统时间
    var endTime = new Date($(obj).attr('endTime').replace(/-/g, "/"));//支付结束时间
    var orderid = $(obj).attr('os'); 
    var temp = endTime.getTime() - nowTime.getTime();
    if(temp < 0){
    	return;
    }
	timeRun(function(){
		var nMS = endTime.getTime() - nowTime.getTime();
		var nD  = Math.floor(nMS/(1000 * 60 * 60 * 24));   
		var nH  = Math.floor(nMS/(1000*60*60)) % 24;   
		var nM  = Math.floor(nMS/(1000*60)) % 60;   
		var nS  = Math.floor(nMS/1000) % 60;   
		var hD	= nD.toString().length==1?"0"+nD:nD;
		var hH	= nH.toString().length==1?"0"+nH:nH;
		var hM	= nM.toString().length==1?"0"+nM:nM;
		var hS	= nS.toString().length==1?"0"+nS:nS;
		
		if(nD >= 0){ 
			$(obj).html("<font style='color:red'>" + hH + "</font>" + "<font style='color:red'>:</font>" + "<font style='color:red'>" + hM + "</font>" + "<font style='color:red'>:</font>" + "<font style='color:red'>" + hS + "</font>");//支付倒计时
			nowTime = new Date(nowTime.valueOf() + 1000);
			return true; 
		}else{
//			支付时间已过，则把订单状态置成无效（暂不使用）
//			var ids = $(obj).attr('ordersid');
//			//支付时间已过，更新订单状态为无效
//			var url = getPath() + "/personorders/updateOrderIdStarus?ordersid="+ids;
//			$.get(url, function(data){
//				if(data.ajaxResponse == 1){
//					if(data.flag == 1 || data.flag == 2){
//						 window.location.reload();//刷新当前页
//						 return false; 
//					}
//				}
//			});
			//支付时间已过，更新订单状态为无效
		    var pid = $(obj).attr('pid');//701301
			if(pid){
				var url = getPath() + "/ajax/qzPath.html?oidstr="+orderid+'&productsid='+pid;
				$.get(url, function(data){ 
					var objBtn = $('#qzbtn'+orderid); //qzbtn11959487
					objBtn.removeClass('disabled');
					objBtn.attr('href',data); 
				});				
			}else{
				var url = getPath() + "/personorders/updateOrderIdStarus?ordersid="+orderid;
				$.get(url, function(data){
					if(data.ajaxResponse == 1){
						if(data.flag == 1){
							 window.location.reload();
							 return true;
						}else{
							alert(data.message);
						}
					}
				});					
			}
	
		//	window.location.reload();//刷新当前页
		//	return false; 
		}
	},1000);
}


//订单状态文字化
function otherStatusShow(obj){
	
	var s = $(obj).attr('status');
	//产品非要显示成配货中,订单状态明明是已审核,唉
	var qzs = $(obj).attr('qzstatus');
	if(s == '1'){
		$(obj).html("未审核");
	}else if(s == '2'){
		if(qzs == '3'){
			$(obj).html("配货中");
		}else{
			$(obj).html("已审核");
		}
	}else if(s == '3'){
		$(obj).html("配票中");
	}else if(s == '4'){
		$(obj).html("发货中");
	}else if(s == '5'){
		$(obj).html("已发货");
	}else if(s == '6'){
		$(obj).html("已完成");
	}else if(s == '7'){
		$(obj).html("无效");
	}else if(s == '8'){
		$(obj).html("已退票");
	}else if(s == '9'){
		$(obj).html("已处理");
	}else if(s == '10'){
		$(obj).html("用户已删除");
	}else if(s == '11'){
		$(obj).html("审核至前台");
	}else if(s == '12'){
		$(obj).html("无票");
	}else if(s == '13'){
		$(obj).html("退票中");
	}else if(s == '15'){
		$(obj).html("退款中");
	}else if(s == '16'){
		$(obj).html("退款已审核");
	}else if(s == '17'){
		$(obj).html("已退款");
	}else if(s == '18'){
		$(obj).html("退票、退款中");
	}else if(s == '19'){
		$(obj).html("已退票、退款中");
	}else if(s == '20'){
		$(obj).html("已退票、退款已审核");
	}else if(s == '21'){
		$(obj).html("已退票、已退款");
	}else{
		$(obj).html("--");
	}
	
}
