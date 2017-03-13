/*
 * jQuery public-min v0.3
 * Copyright (c) 2012-07-25 19:17 lijin & Jensen
 * 说明：全站通用JS
 */

	var ie  = $.browser.msie;
	var ie6 = $.browser.msie && $.browser.version < 7;
	var ie7 = $.browser.msie && $.browser.version == 7;
	var ie8 = $.browser.msie && $.browser.version == 8;
    
	/*
	 * 节点滑过下拉显示效果  
	 * @param 滑动的class节点
	 * @param 显示的节点
	 * 调用方法： slideShow({
					   hoveNode: '.tpbx',
					   showNode: '#htbxBox1'
				  });
	 */ 
	var slideShow = function(params){
		opts = $.extend({
			hoveNode: params.hoveNode,
			showNode: params.showNode
		},params);
		var sd = opts.showNode;
		$(sd).css({position:'absolute'});
		$(opts.hoveNode).hover(function(){
			var fonsSizes = parseInt($(this).css('fontSize').replace('px','')),
			    offsets = $(this).offset(),     
			    lookOffsetLeft = offsets.left + parseInt($(this).css('padding-left').replace('px','')),
			    lookOffsetTop = offsets.top + fonsSizes + 8;    //加上字的行高
			$(sd).css({left:lookOffsetLeft,top:lookOffsetTop});
			$(sd).show();
		},function(){
			$(sd).hide();
		});
		$(opts.showNode).mouseleave(function(){
			$(sd).hide();
		});
	};
	
	var clickShow = function(params){
		opts = $.extend({
			hoveNode: params.hoveNode,
			showNode: params.showNode
		},params);
		var sd = opts.showNode;
		$(sd).css({position:'absolute'});
		$(opts.hoveNode).click(function(){
			var fonsSizes = parseInt($(this).css('fontSize').replace('px','')),
			    offsets = $(this).offset(),     
			    lookOffsetLeft = offsets.left + parseInt($(this).css('padding-left').replace('px','')),
			    lookOffsetTop = offsets.top + fonsSizes + 8;    //加上字的行高
			$(sd).css({left:lookOffsetLeft,top:lookOffsetTop});
			$(sd).show();
		});
	};

	var setShow = function(params){
		opts = $.extend({
			hoveNode: params.hoveNode,
			showNode: params.showNode
		},params);
		var sd = opts.showNode;
		$(sd).css({position:'absolute'});
		var fonsSizes = parseInt($(opts.hoveNode).css('fontSize').replace('px','')),
		    offsets = $(opts.hoveNode).offset(),     
		    lookOffsetLeft = offsets.left,
		    lookOffsetTop = offsets.top + fonsSizes + 10;    //加上字的行高
		$(sd).css({left:lookOffsetLeft,top:lookOffsetTop});
		$(sd).show();
	};
    
	//下面显示的父节点的有paddding属性时候去掉
	var setShowNew = function(params){
		opts = $.extend({
			hoveNode: params.hoveNode,
			showNode: params.showNode,
			topHeight: params.topHeight,
			leftWidht: params.leftWidht
		},params);
		var sd = opts.showNode;
		$(sd).css({position:'absolute'});
		var fonsSizes = parseInt($(opts.hoveNode).css('fontSize').replace('px','')),
		    offsets = $(opts.hoveNode).offset(),     
		    lookOffsetTop = opts.topHeight + fonsSizes + 5;    //加上字的行高
		if(opts.leftWidht){
			var lookOffsetLeft = opts.leftWidht + parseInt($(opts.hoveNode).css('padding-left').replace('px',''));
		}else{
			var lookOffsetLeft = offsets.left + parseInt($(opts.hoveNode).css('padding-left').replace('px',''));
		}
		$(sd).css({left:lookOffsetLeft,top:lookOffsetTop});
		$(sd).show();
	};

$(function() {
    
	//原理是判断鼠标的坐标，超出下拉的区域的高度的时候，点击了隐藏
	var listDownX = 0;    //登陆注册下拉的高度+ 顶部导航条的高度
	listDownY = $('#panel').height() + 37;
	$('body').click(function(e){
		var pointY = e.pageY;
		if(pointY > listDownY){
			$("#panel").slideUp(200);
		}
	});
	
    
    //导航弹出
    $("#sort .sort-title").hover(function() {
        $(".list").fadeIn("fast");
        $(".list .item").removeClass().addClass('item');
        if(ie6){$('#sort .outbox').hide();} 
    });   
    
   	
	//登录下拉 -  动态加载头部校验必须JS
    $(".login").click(function(){
    	/*$("#panel").css("height","400px");
    	var showor =  $("#panel").css('display');
   	    if(showor == "none"){
   	   	   $("#panel").slideDown(200);
   	   	   $("#panel").animate({height: "380px"}, "normal");		
   	    }*/
	    
	    //用户登录时加载cookieEmail
	    //loadData();
//    	location.href = 'http://192.168.1.50:8011/cas/login?service='+location.href;
    	location.href = getPath()+'/auth/login?redirectUrl='+location.href;
    });
    
    //用户注销（清除十天内免登录用户cookie）
	$("#logout").click(function(){
		$.removeCookie("yluser",{path:'/', domain: '.228.com.cn' });//用于十天内免登录 cookie
		$.removeCookie("urlAlipay",{path:'/', domain: '.228.com.cn' });//支付宝url链接 cookie
		/*var url = getPath() + "/customer/logout";
		$.getJSON(url, function(data){
			if (data) {
				window.location.reload();
			}
		}, 'json');*/
		location.href = getPath()+'/logout?redirectUrl='+location.href;
	});
    
    $(".hide-button").click(function(){
    	$("#panel").slideUp(200);
    });
    
    //快速导航
	var $category = $('.quick-guide li:gt(2)');
		$category.hide();
        $(".quick-arrow").hover(function() {
			$category.show();
			$('.quick-guide ul').addClass('hover');
			$('.quick-arrow').addClass('hover');
		$(this).parent().hover(function() {
			$category.hide(); 
			$('.quick-guide ul').removeClass('hover');
			$('.quick-arrow').removeClass('hover');
		 });
	 });
        
    //我的永乐
    $('.login-info-my').hover(function(){
    	$('.my-yongle').next().show();
    	$('.my-yongle-box').show();
    	$('.my-yongle').addClass('my-yongle-pos');
    	$(this).children("a:first").addClass("hover");
    },function(){
    	$('.my-yongle').next().hide();
    	$('.my-yongle-box').hide();
    	$('.my-yongle').removeClass('my-yongle-pos');
    	$(this).children("a:first").removeClass("hover");
    });
    
    //永乐导航 购物车
	$(".guide").hover(function() {
		$(this).children(".guide-list").show();
		$(this).children("a:first").addClass("hover");
	},
	function() {
		$(this).children(".guide-list").hide();
		$(this).children("a:first").removeClass("hover");
	});
	$(".to-cart").hover(function() {
		$(this).children(".cart").show();
		$(this).children("a:first").addClass("hover");
	},
	function() {
		$(this).children(".cart").hide();
		$(this).children("a:first").removeClass("hover");
	});
	
	
	// 加载购物车
	$.get(getPath() + '/ajax/shopcart', function(data){
		var htmltop = template.render('_template_shopcart_top', data);
		// 头部购物车
		$('.to-cart').html(htmltop);
		// 判断是否商品页
		var isticketpage = /[ticket\-][0-9]+\.[html]/.test(location.href);
		if (isticketpage) {
			var htmlproduct = template.render('_template_shopcart_product', data);
			// 购物车页，购物车
			$('.buycar').after(htmlproduct);
			if (data.shopCartProducts) {
				$('.t-dot').show();
				$('#cart-count').text(data.shopCartProducts.length);
				$(".buycar-no").css("display",(data.shopCartProducts.length > 0) ? "none" :"block");
			}else{
				$('.buycar-yes').hide();
			}
		}
	}, 'json');
	
	//ie6下的input文本框的样式统一修复
	if(ie6){
		$('input[type=text]').css({'border':'1px solid #dfdfdf'});
		$('input[type=password]').css({'border':'1px solid #dfdfdf'});
		$('input[type=text]').each(function(){
			if($(this).hasClass('noborder')){
				$(this).css('border','0 none');
			}
		});
	};
	
	//锚点滑动
    $.fn.mailTo = function(){
		return this.each(function(){
			$(this).click(function(){
				$("html,body").animate({
					scrollTop: 0
				},{
					duration: 100,    //动画时长
					easing: "swing"    //擦除效果
				});
				return false;
			});
		});
	};
	
});
	
	//去除IE6滑动时候闪动的BUG
	if(ie6)  document.execCommand("BackgroundImageCache", false, true);
//function login(){
//	location.href = getPath()+'/auth/login?redirectUrl='+escape(encodeURI(location.href));
//}
function login(){
	location.href = getPath()+'/auth/login';
}	
function logout(){
	location.href = getPath()+'/logout?redirectUrl='+escape(encodeURI(location.href));
}