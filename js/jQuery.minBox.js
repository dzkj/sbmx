/*
 * jQuery minBox v0.7
 * Copyright (c) 2013-06-20 15:57 Jensen
 * 说明：遮罩层-不带滚动条效果
 */

(function($){
	
	/*
	 * 遮罩层效果--静态弹出弹出框
	 * 提示：指定页面弹出框的调用
	 * 调用方法：$("#bb").minBox({opacity: 70,background: '#666'}); 
	 *          $(".dd").closeMinbox(); 
	 *          $.closepageOverlays();
	 */
	
	var ie  = $.browser.msie;
	var ie6 = $.browser.msie && $.browser.version < 7;
	 
	$.fn.minBox = function(params){
		
		opts = $.extend({
			opacity: params.opacity || 67,
			background: params.background || "#000",
			zIndex: params.zIndex || 5000,
			showOverlays: params.showOverlays || true    //是否显示遮罩层
		},params);
		
		return this.each(function(){
			//单点登录跳转
	        if($(this).attr('id') === 'jump-login'){
	        	location.href = getPath()+'/auth/login?redirectUrl='+escape(location.href);
				return false;
	        };
			
			var $s = $(this);
			var boxSize = function(){
			    bdWidth = $("body").width(),
		        docHeig = $(document).height(),
		        winHeig = $(window).height(), 
		        winWidth = $(window).width(), 
			    wid = $s.width(),
			    heig = $s.height(),
			    leftWid = parseInt((bdWidth-wid)/2-6),    //6(弹出框定位修复)
			    topHeig = parseInt((winHeig-heig)/2-6)
			};
			boxSize();
			if(ie6){    //ie6背景层宽度 修复
			    winWidth = $(window).width() + 18 + 'px';
			}else{
				winWidth = '100%';
			}
			$s.css({position:'fixed','z-index':opts.zIndex+10,left:leftWid,top:topHeig});    //设置弹出框属性定位
			//ie6 时样式调整
		    if(ie6){  
		    	var nodeId = '#' + $s.attr('id');
		    	topHeig += $(document).scrollTop;    //+滚动条滚动的高度
		    	$s.css({position:'absolute',top:topHeig});
		    	//$(nodeId)[0]切换到原生js对象
		    	$(nodeId)[0].style.setExpression('top', '(document.documentElement.clientHeight || document.body.clientHeight) / 2 - (this.offsetHeight / 2) + (blah = document.documentElement.scrollTop ? document.documentElement.scrollTop : document.body.scrollTop) + "px"');
		    };
		    if(ie){
		    	$('embed').attr('wmode','opaque');
			    $('embed, object, select').css({'visibility':'hidden'});   //视频IE下BUG，遮罩层显示优先级没embed, object, select高
		    }
			//$(window).scroll(function(){
			   //$('embed, object, select').css({'visibility':'hidden'});
			//})
			//遮罩层设置
			if(opts.showOverlays){
				var pageOverHtml = '<div id="pageOverlays" style="position:absolute;display:none;top:0;left:0;background-color:'+opts.background+';z-index:'+opts.zIndex+';width:'+winWidth+';height:'+docHeig+'px;filter:alpha(opacity='+opts.opacity+');opacity:'+opts.opacity/100+';overflow:hidden;"></div>';
				$('body').append(pageOverHtml);
				$('#pageOverlays').show();
				$('body').css({height:winHeig+$(document).scrollTop,overflow:'hidden'});    //隐藏滚动条
			    $('html').css({overflow:'hidden'});
			}
			$s.show();
		    $(window).resize(function(){    //页面大小变化时弹框位置和背景大小改变
		    	boxSize();
		    	if(ie6){
		    		topHeig += $(document).scrollTop;
		    	}
				$('#pageOverlays').css({width:winWidth,height:docHeig});
				$s.css({left:leftWid,top:topHeig});
			});
		    $s.find('.box-closes').click(function(){
		    	scrollFun();
		    	$("#pageOverlays").remove();
		    	$s.hide();
		    });
		    $s.find('.box-closes1').click(function(){
		    	scrollFun();
		    	$("#pageOverlays").remove();
		    	$s.hide();
		    });
		})
	}	
	
	$.fn.minBox1 = function(params){
		
		opts = $.extend({
			opacity: params.opacity || 67,
			background: params.background || "#000",
			zIndex: params.zIndex || 5100,
			hasScroll: params.hasScroll || false,
			showOverlays: params.showOverlays || true    //是否显示遮罩层
		},params);
		
		return this.each(function(){
			//单点登录跳转
			if($(this).attr('id') === 'jump-login'){
	        	location.href = getPath()+'/auth/login?redirectUrl='+escape(location.href);
				return false;
	        };
			var $s = $(this);
			var boxSize = function(){
			    bdWidth = $("body").width(),
		        docHeig = $(document).height(),
		        winHeig = $(window).height(), 
		        winWidth = $(window).width(), 
			    wid = $s.width(),
			    heig = $s.height(),
			    leftWid = parseInt((bdWidth-wid)/2-6),    //6(弹出框定位修复)
			    topHeig = parseInt((winHeig-heig)/2-6)
			};
			boxSize();
			if(ie6){    //ie6背景层宽度 修复
			    winWidth = $(window).width() + 'px';
			}else{
				winWidth = '100%';
			}
			$s.css({position:'fixed','z-index':opts.zIndex+10,left:leftWid,top:topHeig});    //设置弹出框属性定位
			//ie6 时样式调整
		    if(ie6){  
		    	var nodeId = '#' + $s.attr('id');
		    	topHeig += $(document).scrollTop;    //+滚动条滚动的高度
		    	$s.css({position:'absolute',top:topHeig});
		    	//$(nodeId)[0]切换到原生js对象
		    	$(nodeId)[0].style.setExpression('top', '(document.documentElement.clientHeight || document.body.clientHeight) / 2 - (this.offsetHeight / 2) + (blah = document.documentElement.scrollTop ? document.documentElement.scrollTop : document.body.scrollTop) + "px"');
		    };
		    if(ie){
		    	$('embed').attr('wmode','opaque');
			    $('embed, object, select').css({'visibility':'hidden'});   //视频IE下BUG，遮罩层显示优先级没embed, object, select高
		    }
			//$(window).scroll(function(){
			   //$('embed, object, select').css({'visibility':'hidden'});
			//})
			//遮罩层设置
			if(opts.showOverlays){
				var pageOverHtml = '<div id="pageOverlays1" style="position:absolute;display:none;top:0;left:0;background-color:'+opts.background+';z-index:'+opts.zIndex+';width:'+winWidth+';height:'+docHeig+'px;filter:alpha(opacity='+opts.opacity+');opacity:'+opts.opacity/100+';overflow:hidden;"></div>';
				$('body').append(pageOverHtml);
				$('#pageOverlays1').show();
				if(opts.hasScroll){
					$('body').css({height:winHeig+$(document).scrollTop,overflow:'hidden'});    //隐藏滚动条
			        $('html').css({overflow:'hidden'});
				}
			}
			$s.show();
		    $(window).resize(function(){    //页面大小变化时弹框位置和背景大小改变
		    	boxSize();
		    	if(ie6){
		    		topHeig += $(document).scrollTop;
		    	}
				$('#pageOverlays1').css({width:winWidth,height:docHeig});
				$s.css({left:leftWid,top:topHeig});
			});
		})
	}
	
	function scrollFun(){    //显示滚动条
		$('body').css({height:'auto',overflow:'auto'});    
		$('html').css({overflow:'auto'});
		if(ie6){    //ie6bug修复
			$('body').css({width:'100%'});
            $('body').css({width:$(window).width()-2});
		}
	}
	
	//等待弹出框
	$waitingBox = function(){
	    var waitBox = '<div id="waitBox" class="waitBox" style="width:180px;height:42px;border:2px solid #436787;line-height:36px;background-color:#fff;border-radius:5px;-moz-border-radius:5px;-webkit-border-radius:5px; "><img style="padding-left:10px;padding-top:8px;float:left" src="images/ajax-loader.gif"><font style="float:left;padding-left:10px;padding-top:5px;">正在加载中，请稍候...</font></div>';
	    $('body').append(waitBox);
	    $('#waitBox').minBox({});
	}
	
	$.fn.closeMinbox = function(){    //关闭遮罩层和弹出窗口
		if(ie){
		 	$('embed, object, select').css({'visibility':'visible'});
		}
		$("#pageOverlays").remove();
		if(opts.showOverlays){ scrollFun();}   //滚动条恢复
		return this.each(function(){
			$(this).hide();
		})
	}
	
	$.closepageOverlays = function(){    //关闭遮罩层
		if(ie){
		 	$('embed, object, select').css({'visibility':'visible'});
		}
		$("#pageOverlays").remove();
		if(opts.showOverlays){ scrollFun();}
	}
	
	$.fn.closeMinbox1 = function(){    //关闭遮罩层和弹出窗口1
		if(ie){
		 	$('embed, object, select').css({'visibility':'visible'});
		}
		$("#pageOverlays1").remove();
		if(opts.showOverlays && opts.hasScroll){ scrollFun();}   //滚动条恢复
		return this.each(function(){
			$(this).hide();
		})
	}
	
	$.closepageOverlays1 = function(){    //关闭遮罩层1
		if(ie){
		 	$('embed, object, select').css({'visibility':'visible'});
		}
		$("#pageOverlays1").remove();
		if(opts.showOverlays && opts.hasScroll){ scrollFun();}
	}
	
	
	/*
	 * 遮罩层效果 --动态插入弹出框
	 * 提示：通用弹出框的传参调用
	 * 调用方法：$mixBox({
					opacity: 70,   //可缺省
					background: '#666',    //可缺省
					boxStyle: 'confirm',   // confirm:boxConfirmId和boxConfirmAction不能为空，"感叹号"提醒图片，有确定和取消按钮;  默认是sucess,可缺省
					                          msg: "感叹号"提醒图片，只有确定按钮
					                          error: "叉"提醒图片，只有确定按钮
					                          sucess:  "勾"提醒图片，只有确定按钮
					boxConfirmId: '#actionsub',    //提交表单 id,可缺省
					boxConfirmAction: 'http://127.0.0.1:8020/jqueryWorks/minBox/demo.html#',    //提交表单 action,可缺省
					msgHead: '提示信息',    //可缺省
					msgInfo: '确定删除确？',    //可缺省
					msgConts: '您确定要删除订单号吗，删除后将不能恢复！'    //可缺省
				});
	 */
	$mixBox = function(params){
		
		opts = $.extend({
			opacity: params.opacity || 65,
			background: params.background || "#000",
			zIndex: params.zIndex || 5000,
			showOverlays: params.showOverlays || true,    //是否显示遮罩层
			boxStyle: params.boxStyle || 'defaults',     //弹出框类型
			boxConfirmId: params.boxConfirmId,    //提交表单 id
			boxConfirmAction: params.boxConfirmAction,    //提交表单action
			msgHead: params.msgHead || '提示信息',
			msgInfo: params.msgInfo || '操作成功',
			msgConts: params.msgConts || '恭喜您，操作成功！',
			msgClass: 'remind'
		},params);
		    //console.log(opts);
		    var rnValue = 0;
		    if(opts.boxStyle == 'confirm' || opts.boxStyle == 'msg') {opts.msgClass = 'remind';rnValue = 1}
		    if(opts.boxStyle == 'error') opts.msgClass = 'fail';
		    if(opts.boxStyle == 'sucess' || opts.boxStyle == 'defaults' ) opts.msgClass = 'ok';
		    $('body').append('<div class="box-pop" id="box-pop" style="display:none"><ul><li class="fl">'+opts.msgHead+'</li><li class="fr"><a class="box-closes" style="margin-right:8px;"  onclick="$closemixBox()"> </a></li></ul><div class="c2"><table style="margin:0 auto;text-align:center"><tr><td><span class='+opts.msgClass+'> </span></td><td>'+opts.msgInfo+'</td></tr></table></div><p>'+opts.msgConts+'</p><div class="box-pop-but"> <a class="queding" onclick="$closemixBox1('+rnValue+')"> </a><a class="cancel mixboxCancel" onclick="$closemixBox()"></a></div></div>')
			if(opts.boxStyle == 'error' || opts.boxStyle == 'sucess' || opts.boxStyle == 'defaults' || opts.boxStyle == 'msg') $('.mixboxCancel').remove();
			var $s = $('#box-pop');
			var boxSize = function(){
			    bdWidth = $("body").width(),
		        docHeig = $(document).height(),
		        winHeig = $(window).height(),
		        winWidth = $(window).width(), 
			    wid = $s.width(),
			    heig = $s.height(),
			    leftWid = parseInt((bdWidth-wid)/2-6),    //6(弹出框定位修复)
			    topHeig = parseInt((winHeig-heig)/2-6)  
			};
			boxSize();
			if(ie6){    //ie6背景层宽度 修复
			    winWidth = $(window).width() + 'px';
			}else{
				winWidth = '100%';
			}
			//遮罩层设置
			$s.css({position:'fixed','z-index':opts.zIndex+10,left:leftWid,top:topHeig});    //设置弹出框属性定位
			//ie6 时样式调整
		    if(ie6){  
		    	var nodeId = '#' + $s.attr('id');
		    	topHeig += $(document).scrollTop;    //+滚动条滚动的高度
		    	$s.css({position:'absolute',top:topHeig});
		    	$(nodeId)[0].style.setExpression('top', '(document.documentElement.clientHeight || document.body.clientHeight) / 2 - (this.offsetHeight / 2) + (blah = document.documentElement.scrollTop ? document.documentElement.scrollTop : document.body.scrollTop) + "px"')
		    };
			if(ie){
		    	$('embed').attr('wmode','opaque');
			    $('embed, object, select').css({'visibility':'hidden'});   //视频IE6下BUG，遮罩层显示优先级没embed, object, select高
		    }
			//$(window).scroll(function(){
			   //$('embed, object, select').css({'visibility':'hidden'});
			//})
			$('body').append(pageOverHtml);    //隐藏，添加后显示
			//遮罩层设置
			if(opts.showOverlays){
				var pageOverHtml = '<div id="pageOverlays" style="position:absolute;display:none;top:0;left:0;background-color:'+opts.background+';z-index:'+opts.zIndex+';width:'+winWidth+';height:'+docHeig+'px;filter:alpha(opacity='+opts.opacity+');opacity:'+opts.opacity/100+';overflow:hidden;"></div>';
				$('body').append(pageOverHtml);
				$('#pageOverlays').show();
				$('body').css({height:winHeig+$(document).scrollTop,overflow:'hidden'});    //隐藏滚动条
			    $('html').css({overflow:'hidden'});
			    $('#pageOverlays').show();
			}
			$('#box-pop').show();
		    $(window).resize(function(){    //页面大小变化时弹框位置和背景大小改变
		    	boxSize();
		    	if(ie6){
		    		topHeig += $(document).scrollTop;
		    	}
				$('#pageOverlays').css({width:winWidth,height:docHeig});
				$s.css({left:leftWid,top:topHeig});
			});
	}
	
	$closemixBox = function(){
		if(ie){
		 	$('embed, object, select').css({'visibility':'visible'});
		}
		$("#pageOverlays,#box-pop").remove();
		if(opts.showOverlays){ scrollFun();}
	}
	
	$closemixBox1 = function(n){  
		if(ie){
		 	$('embed, object, select').css({'visibility':'visible'});
		}
		$("#pageOverlays,#box-pop").remove();
		if(n){
			if(opts.boxConfirmId && opts.boxConfirmAction){
				$(opts.boxConfirmId).attr('action',opts.boxConfirmAction);
				$(opts.boxConfirmId).submit();
			}
		}
		if(opts.showOverlays){ scrollFun();}
	}
	
	/*
	 * 遮罩层效果 --动态插入指定的弹出框
	 * 
	 * 提示：通用弹出框的传参调用
	 * 调用方法：$mixBoxr({
	 * 	            msgId: '#peop-load',
	 *              msgHead: '提示信息',    //可缺省
					opacity: 70,   //可缺省
					background: '#666'    //可缺省
					
				});
	 */
	$mixBoxr = function(params){
		opts = $.extend({
			msgId: params.msgId,
			msgHead: params.msgHead || '提示信息',
			opacity: params.opacity || 67,
			background: params.background || "#000",
			zIndex: params.zIndex || 5500
		},params);
		    var msgConts = $(opts.msgId).clone(true).html();
		    var msgWidth = $(opts.msgId).width();
			var msgHeight = $(opts.msgId).height();
		    $('body').append('<div class="box-pop2" id="box-pop2" style="display:none"><div id="box-pop2-ul" class="box-pop2-ul"><span class="box-pop2-span1">'+opts.msgHead+'</span><span class="box-pop2-span2"><a class="box-closes" style="cursor:pointer;margin-top:4px;margin-right:8px;" onclick="$closemixBox2()"> </a></span></div><div class="cb"></div><div class="box-pop-allCont" id="box-pop-allCont">'+msgConts+'</div></div>')
			var $s = $('#box-pop2');
			var boxSize = function(){
			    bdWidth = $('body').width();  
			    docHeig = $(document).height(),
		        winHeig = $(window).height(); 
		        winWidth = $(window).width(), 
			    wid = $s.width();
			    heig = $s.height();
			    leftWid = parseInt((bdWidth-msgWidth)/2);    
			    topHeig = parseInt((winHeig-msgHeight)/2);  
			};
			boxSize();
			if(ie6){    //ie6背景层宽度 修复
			    winWidth = $(window).width() + 'px';
			}else{
				winWidth = '100%';
			}
			$s.css({position:'fixed','z-index':opts.zIndex+10,left:leftWid,top:topHeig,width:msgWidth,height:msgHeight});    //设置弹出框属性定位
			//ie6 时样式调整
		    if(ie){  
		    	if(ie6){
		    		var nodeId = '#' + $s.attr('id');
			    	topHeig += $(document).scrollTop;    //+滚动条滚动的高度
			    	$s.css({position:'absolute',left:leftWid,top:topHeig});
			    	//$(nodeId)[0]切换到原生js对象
			    	$(nodeId)[0].style.setExpression('top', '(document.documentElement.clientHeight || document.body.clientHeight) / 2 - (this.offsetHeight / 2) + (blah = document.documentElement.scrollTop ? document.documentElement.scrollTop : document.body.scrollTop) + "px"');
		    	}
				$('embed').attr('wmode','opaque');
				$('embed, object, select').css({'visibility':'hidden'});   //视频IE6下BUG，遮罩层显示优先级没embed, object, select高
			};
			//遮罩层设置
			var pageOverHtml = '<div id="pageOverlays3" style="position:absolute;display:none;top:0;left:0;background-color:'+opts.background+';z-index:'+opts.zIndex+';width:'+winWidth+';height:'+docHeig+'px;filter:alpha(opacity='+opts.opacity+');opacity:'+opts.opacity/100+';overflow:hidden;"></div>';
		    $('body').append(pageOverHtml);    //隐藏，添加后显示
		    $('#pageOverlays3').show();
			$('#box-pop2').show();
			$('body').css({height:winHeig+$(document).scrollTop,overflow:'hidden'});    //隐藏滚动条
			$('html').css({overflow:'hidden'});
		    $(window).resize(function(){    //页面大小变化时弹框位置和背景大小改变
		    	boxSize();
				$('#pageOverlays3').css({width:winWidth,height:docHeig});
				$s.css({left:leftWid,top:topHeig});
			});
		    $s.find('.box-closes').click(function(){
		    	$("#pageOverlays3").remove();
		    	$s.remove();
		    })
	}
	
	$closemixBox2 = function(){
		$('embed, object, select').css({'visibility':'visible'});
		$('embed, object, select').css({'visibility':'visible'});
		$("#pageOverlays3").remove();
		$("#box-pop2").remove();
		scrollFun();   //滚动条恢复
	}
	
})(jQuery)

