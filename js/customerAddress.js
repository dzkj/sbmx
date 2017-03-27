function modifyAddress(addressIdCustomersId){
	var html = getAjaxHtml(basePath+'order/editCustomerAddr',{addressIdCustomersId:addressIdCustomersId});
	$("#editCustomerAddr").html(html).show();
	initEvent();
	var pr = $("#editCustomerAddrForm").find("#provinceId");
	pr.find("option:[value='"+pr.attr("init")+"']").attr("selected","selected")
	pr.trigger("change");
}

function addAddress(){
	var html = getAjaxHtml(basePath+'order/addCustomerAddr',{});
	$("#editCustomerAddr").html(html).show();
	initEvent();
}
function initEvent(){
	var $form = $("#editCustomerAddrForm");
	/**
	 * 街道非空验证
	 */
	$form.find("#name").bind("blur",function(){
		if(isNull($form.find("#name").val())){
			$form.find("#nameTip").html('<span class="red">地址不能为空!</span>').show();
			return;
		}
		$form.find("#nameTip").html('').hide();
	});
	/**
	 * 邮编验证
	 */
	$form.find("#zip").bind("blur",function(){
		if(!isNull($form.find("#zip").val()) && !validateZip($(this).val())){
			$form.find("#zipTip").html('<span class="red">邮编格式不正确!</span>').show();
			return;
		}
		$form.find("#zipTip").html('').hide();
	});
	/**
	 * 收货人验证
	 */
	$form.find("#userName").bind("blur",function(){
		if(isNull($form.find("#userName").val())){
			$form.find("#userNameTip").html('<span class="red">收货人姓名不能为空!</span>').show();
			return;
		}
		$form.find("#userNameTip").html('').hide();
	});
	/**
	 * 手机验证
	 */
	$form.find("#phone").bind("blur",function(){
		if(isNull($form.find("#phone").val())){
			$form.find("#phoneTip").html('<span class="red">手机号码不能为空!</span>').show();
			return;
		}
		if(!validatePhone($form.find("#phone").val())){
			$form.find("#phoneTip").html('<span class="red">手机号码不正确!</span>').show();
			return;
		}
		$form.find("#phoneTip").html('').hide();
	}).bind("focus",function(){
		$form.find("#phoneTip").html('正确的手机有助于永乐的客服、快递人员和您联系!').show();
	});
	/**
	 * 邮箱验证
	 */
	$form.find("#email").bind("blur",function(){
		if(isNull($form.find("#email").val())){
			$form.find("#emailTip").html('<span class="red">邮箱不能为空!</span>').show();
			return;
		}
		if(!validateEmails($form.find("#email").val())){
			$form.find("#emailTip").html('<span class="red">邮箱地址不正确!</span>').show();
			return;
		}
		$form.find("#emailTip").html('').hide();
	}).bind("focus",function(){
		$form.find("#emailTip").html('用来接收订单相关邮件，便于您及时了解订单动态!').show();
	});
	
	// 省份变更事件
	$form.find("#provinceId").bind("change",function(){
		$form.find("#areaId").html('<option value="">选择区</option>');
		$form.find("#codeId").html('<option value="">选择区域</option>').hide();
		$form.find("#cityId").html('<option value="">选择市</option>');
		var provinceId = $(this).val();
		if(isNull(provinceId)){
			return;
		}
		$.ajax({
			url:basePath+'ajax/loadRangeNew',
			data:{type:'cities',typeId:provinceId},
			type:'post',
			success:function(data){
				var init = $form.find("#cityId").attr("init");
				$form.find("#cityId").removeAttr("init");
				if(data && data.rangeList){
					$.each(data.rangeList,function(i,item){
						$form.find("#cityId").append('<option value="'+item.cityId+'">'+item.name+'</option>');	
					});
					if(!isNull(init)){
						$form.find("#cityId").find("option:[value='"+init+"']").attr("selected","selected");
						$form.find("#cityId").trigger("change");
					}
				}
			}
		});
	});
	// 市变更
	$form.find("#cityId").bind("change",function(){
		$form.find("#areaId").html('<option value="">选择区</option>');
		$form.find("#codeId").html('<option value="">选择区域</option>').hide();
		var cityId = $(this).val();
		if(isNull(cityId)){
			return;
		}
		$.ajax({
			url:basePath+'ajax/loadRangeNew',
			data:{type:'areas',typeId:cityId},
			type:'post',
			success:function(data){
				var init = $form.find("#areaId").attr("init");
				$form.find("#areaId").removeAttr("init");
				if(data && data.rangeList){
					$.each(data.rangeList,function(i,item){
						$form.find("#areaId").append('<option value="'+item.areaId+'">'+item.name+'</option>');	
					});
					if(!isNull(init)){
						$form.find("#areaId").find("option:[value='"+init+"']").attr("selected","selected");
						$form.find("#areaId").trigger("change");
					}
				}
			}
		});
	});
	// 区变更
	$form.find("#areaId").bind("change",function(){
		$form.find("#codeId").html('<option value="">选择区域</option>').hide();
		var areaId = $(this).val();
		if(isNull(areaId)){
			return;
		}
		$.ajax({
			url:basePath+'ajax/loadRangeNew',
			data:{type:'codes',typeId:areaId},
			type:'post',
			success:function(data){
				var init = $form.find("#codeId").attr("init");
				$form.find("#codeId").removeAttr("init");
				if(data && data.rangeList){
					if(data.rangeList.length == 1 && isNull(data.rangeList[0].name)){
						$form.find("#codeId").html('<option value="'+data.rangeList[0].codeId+'"></option>');
						return;
					}
					$form.find("#codeId").show();
					$.each(data.rangeList,function(i,item){
						if(!isNull(item.name)){
							$form.find("#codeId").append('<option value="'+item.codeId+'">'+item.name+'</option>');	
						}
					});
					if(!isNull(init)){
						$form.find("#codeId").find("option:[value='"+init+"']").attr("selected","selected");
					}
				}
			}
		});
	});
}
/**
 * 保存客户地址
 * @param add 是否新增:true or false
 * @returns {Boolean}
 */
function saveOrUpdateCustomerAddr(add){
	var $form = $("#editCustomerAddrForm");
	var data = $form.serializeArray();
	
	//地区 省份
	if(isNull($form.find("#provinceId").val()) || $form.find("#provinceId").val() == "cityId"){
		$form.find("#provinceCityTip").html('<span class="red">请选择省份!</span>').show();
		return false;
	}
	
	//街道非空验证
	if(isNull($form.find("#cityId").val())){
		$form.find("#provinceCityTip").html('<span class="red">请选择市!</span>').show();
		return false;
	}
	
	//街道非空验证
	if(isNull($form.find("#areaId").val())){
		$form.find("#provinceCityTip").html('<span class="red">请选择区!</span>').show();
		return false;
	}
	
	//区域非空验证
	if($('#codeId option' ).length>1&&isNull($form.find("#codeId").val())){
		$form.find("#provinceCityTip").html('<span class="red">请选择区域!</span>').show();
		return false;
	}
	
	//街道非空验证
	if(isNull($form.find("#name").val())){
		$form.find("#nameTip").html('<span class="red">地址不能为空!</span>').show();
		return false;
	}
	var zip = $form.find("#zip").val();
	//邮编验证
	if(!isNull(zip) && !validateZip(zip)){
		$form.find("#zipTip").html('<span class="red">邮编格式不正确!</span>').show();
		return false;
	}
	//收货人验证
	if(isNull($form.find("#userName").val())){
		$form.find("#userNameTip").html('<span class="red">收货人姓名不能为空!</span>').show();
		return false;
	}
	// 手机验证
	if(isNull($form.find("#phone").val())){
		$form.find("#phoneTip").html('<span class="red">手机号码不能为空!</span>').show();
		return false;
	}
	if(!validatePhone($form.find("#phone").val())){
		$form.find("#phoneTip").html('<span class="red">手机号码不正确!</span>').show();
		return false;
	}
	//邮箱验证
	if(isNull($form.find("#email").val())){
		$form.find("#emailTip").html('<span class="red">邮箱不能为空!</span>').show();
		return false;
	}
	if(!validateEmails($form.find("#email").val())){
		$form.find("#emailTip").html('<span class="red">邮箱地址不正确!</span>').show();
		return false;
	}
	var url = basePath+(add?'customerAddr/create':'customerAddr/update');
	$.ajax({
		url:url,
		data:data,
		type:'post',
		success:function(result){
			alert(result.message);
			if(result && result.success){
				location.reload(true);
			}
		}
	});
}
/**
 * 邮编验证
 * @param zip
 * @returns
 */
function validateZip(zip){
	var partten = /^[1-9]\d{5}(?!\d)$/;
	return partten.test(zip);
}
/**
 * 邮箱验证
 * @param email
 * @returns
 */
function validateEmails(email){
	if($.trim(email)==""){
		return false;
	}
	var partten= /\b(^['_A-Za-z0-9-]+(\.['_A-Za-z0-9-]+)*@([A-Za-z0-9-])+(\.[A-Za-z0-9-]+)*((\.[A-Za-z0-9]{2,})|(\.[A-Za-z0-9]{2,}\.[A-Za-z0-9]{2,}))$)\b/;
	return partten.test(email);
}
/**
 * 手机验证
 * 
 * @param phone
 * @returns {Number}
 */
function validatePhone(phone){
	if($.trim(phone)==""){
		return false;
	}
	var partten = /^[1][3-8]\d{9}$|^([5|6|9])\d{7}$|^[0][9]\d{8}$|^[6]([8|6])\d{5}$/;//验证手机正则表达式
	return partten.test(phone);
}
/**
 * 固定电话验证
 * 
 * @param tel
 * @returns {Boolean}
 */
function validateTel(tel){
	var partten = /^\d{3}-\d{8}|\d{4}-\d{7}$/;
	return partten.test(tel);
}
/**
 * 证件验证
 * 
 * @param dzphone
 * @returns {Boolean}
 */
function validateDzphone(dzphone){
	//身份证正则表达式(18位)
	var partten=/^\d{6}((2000|(19|21)(0[48]|[2468][048]|[13579][26]))0229|(((20|19)\d\d)|2100)(0[13578]|10|12)(3[01]|[12]\d|0[1-9])|(0[469]|11)(30|[12]\d|0[1-9])|(02)(2[0-8]|1\d|0[1-9]))\d{3}[\dX]$/;
	return partten.test(dzphone);
}
/**
 * 判断非空
 * @param el
 */
function isNull(val){
	return val == null || val == 'undefined' || $.trim(val)=="";
}
/**
 * 更改默认地址
 * 
 * @param addressIdCustomersId
 */
function setAddressByDefault(addressIdCustomersId){
	$.ajax({
		url:basePath+'setAddressByDefault',
		data:{addressIdCustomersId:addressIdCustomersId},
		type:'post',
		success:function(result){
			alert(result.message);
			if(result && result.success){
				location.reload(true);
			}
		}
	});
}