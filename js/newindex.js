/*
 * jQuery newindex v0.1
 * Copyright (c) 2012-04-17 17:02 Jensen
 * 说明：城市首页效果
 */

var ie  = $.browser.msie;
var ie6 = $.browser.msie && $.browser.version < 7;

(function($){
	
	/* tab切换，自动播放*/
	blockAutoChange = function(params){ 
	 	var opts = $.extend({
	 		scrollId: params.scrollId,   //滑动字体父节点
	 		scrollPageId: params.scrollPageId || false,    //分页的父节点
	 		autoPlay: params.autoPlay || true,    //是否自动播放
	 		speed: params.speed || 5   //播放速度/秒
	 	},params)
	 	var len = $(opts.scrollId + ' li').length;
	 	var s = -1;
	 	var _scrollObj;
	 	$(opts.scrollId + ' li').hide().eq(0).show();
	 	$(opts.scrollPageId + ' li').click(function(){
	 		var nub = $(this).index();
	 		if(!$(this).hasClass('selected')){
	 			$(opts.scrollPageId + ' li').removeClass('selected');
	 			$(this).addClass('selected');
	 		}
	 		$(opts.scrollId + ' li').hide().eq(nub).show();
	 		s = 0;
	 		if(opts.autoPlay){slide(nub)};
	 	})
	 	if(opts.autoPlay){     //判断是否自动播放
	 		var slide = function(j){
		 		s += j;
		 		if(s >= len){
		 			s = 0;
		 		}
		 		$(opts.scrollId + ' li').hide().eq(s).show();
		 		$(opts.scrollPageId + ' li').removeClass().eq(s).addClass('selected');
		 	}
		 	var play = function(){
		 		_scrollObj = setInterval(function(){
		 			slide(1);
		 		},opts.speed*1000)
		 	}
		 	var stop = function(){
		 		clearInterval(_scrollObj);
		 	}
		 	$(opts.scrollId+' li').bind('mouseover',function(){stop()});
		 	$(opts.scrollId+' li').bind('mouseout',function(){play()});
		 	$(opts.scrollPageId+' li').bind('mouseover',function(){stop()});
		 	$(opts.scrollPageId+' li').bind('mouseout',function(){play()});
		 	
		 	play();
	 	}
	 }
	 
	 /* tab切换，自动播放*/
	blockAutoChangea = function(params){ 
	 	var opts = $.extend({
	 		scrollId: params.scrollId,   //滑动字体父节点
	 		scrollPageId: params.scrollPageId || false,    //分页的父节点
	 		autoPlay: params.autoPlay || true,    //是否自动播放
	 		speed: params.speed || 5   //播放速度/秒
	 	},params)
	 	var len = $(opts.scrollId + ' li').length;
	 	var s = -1;
	 	var _scrollObj;
	 	$(opts.scrollId + ' li').hide().eq(0).show();
	 	$(opts.scrollPageId + ' li').click(function(){
	 		var nub = $(this).index();
	 		if(!$(this).hasClass('selected')){
	 			$(opts.scrollPageId + ' a').removeClass('selected');
	 			$(this).find('a').addClass('selected');
	 		}
	 		$(opts.scrollId + ' li').hide().eq(nub).show();
	 		s = 0;
	 		if(opts.autoPlay){slide(nub)};
	 	})
	 	if(opts.autoPlay){     //判断是否自动播放
	 		var slide = function(j){
		 		s += j;
		 		if(s >= len){
		 			s = 0;
		 		}
		 		$(opts.scrollId + ' li').hide().eq(s).show();
		 		$(opts.scrollPageId + ' a').removeClass().eq(s).addClass('selected');
		 	}
		 	var play = function(){
		 		_scrollObj = setInterval(function(){
		 			slide(1);
		 		},opts.speed*1000)
		 	}
		 	var stop = function(){
		 		clearInterval(_scrollObj);
		 	}
		 	$(opts.scrollId+' li').bind('mouseover',function(){stop()});
		 	$(opts.scrollId+' li').bind('mouseout',function(){play()});
		 	$(opts.scrollPageId+' li').bind('mouseover',function(){stop()});
		 	$(opts.scrollPageId+' li').bind('mouseout',function(){play()});
		 	
		 	play();
	 	}
	 }
	 
	 /*tab切换，菜单选择position定位,自动播放*/
	 tabSortChanges = function(params){ 
	 	var opts = $.extend({
	 		scrollId: params.scrollId,   //滑动模块父节点
	 		scrollPageId: params.scrollPageId || false,    //分页的父节点
	 		backId: params.backId || false,    //定位的背景块节点
	 		autoPlay: params.autoPlay || true,    //是否自动播放
	 		speed: params.speed || 5   //播放速度/秒
	 	},params)
	 	var len = $(opts.scrollId).length;
	 	var s = -1;
	 	var _scrollObj;
	 	var rvClassName = opts.backId.replace('.','');
	 	$(opts.scrollId).hide().eq(0).show();
	 	$(opts.scrollPageId + ' li').click(function(){
	 		var nub = $(this).index();
	 		if(!$(this).hasClass('select')){
	 			$(opts.scrollPageId + ' li').removeClass('select');
	 			$(this).addClass('select');
	 		}
	 		for(var i = 1, j = len; i <= j; i++){
	 			$(opts.backId).removeClass(rvClassName + '-pos' + i);
	 		}
	 		$(opts.scrollPageId + ' li').removeClass('select').eq(nub).addClass('select');
	 		$(opts.backId).addClass(rvClassName + '-pos' + (nub+1));
	 		$(opts.scrollId).hide().eq(nub).show();
	 		s = 0;
	 		if(opts.autoPlay){slide(nub)};
	 	})
	 	var slide = function(j){
	 		s += j;
	 		if(s >= len){
	 			s = 0;
	 		}
	 		$(opts.scrollId).hide().eq(s).show();
	 		for(var i = 1, j = len; i <= j; i++){
	 			$(opts.backId).removeClass(rvClassName + '-pos' + i);
	 		}
	 		$(opts.scrollPageId + ' li').removeClass('select').eq(s).addClass('select');
	 		$(opts.backId).addClass(rvClassName + '-pos' + (s+1));
	 	}
	 	if(opts.autoPlay){     //判断是否自动播放
		 	var play = function(){
		 		_scrollObj = setInterval(function(){
		 			slide(1);
		 		},opts.speed*1000)
		 	}
		 	var stop = function(){
		 		clearInterval(_scrollObj);
		 	}
		 	$(opts.scrollId).bind('mouseover',function(){stop()});
		 	$(opts.scrollId).bind('mouseout',function(){play()});
		 	$(opts.scrollPageId+' li').bind('mouseover',function(){stop()});
		 	$(opts.scrollPageId+' li').bind('mouseout',function(){play()});
		 	
		 	play();
	 	}
	 }
	 
	 /* 图片轮换效果一无限左右移动切换(无线循环) ,无分页显示*/
	 picsScrolling = function(params){ 
	 	var opts = $.extend({
	 		scrollId: params.scrollId,   //滑动字体父节点
	 		childeId: params.childeId,   //滑动字体父节点
	 		showNumberId: params.childeId,   //滑动字体父节点
	 		lMoveId: params.lMoveId,    //左边切换按钮
	 		rMoveId: params.rMoveId,    //右边切换按钮
	 		autoPlay: params.autoPlay || true,    //是否自动播放
	 		speed: params.speed || 300   //播放速度/秒
	 	},params)
	 	var len = $(opts.scrollId + ' '+ opts.childeId).length;
	 	var wid = $(opts.scrollId + ' '+ opts.childeId).width();
	 	var _scrollTimeObj;
		var s = 0;     //记录自动播放时的页数
		$(opts.scrollId + ' '+ opts.childeId).each(function(i){
			$(this).attr('rel',i);
		})
	 	$(opts.lMoveId).click(function(){    //左边按钮效果
	 		pageTo(-1);
	 	});
	 	$(opts.rMoveId).click(function(){    //右边按钮效果
	 		pageTo(1);
	 	});
	 	var pageTo = function(n){    //分页自动切换样式显示
			if($(opts.scrollId).is(":animated")==false){
				s += n;
				if(s != -1 && s != len){    //向右滑动
					$(opts.scrollId).animate({'marginLeft':-wid*s+'px'},opts.speed*100);
					var rel = $(opts.scrollId + ' '+ opts.childeId).eq(s).attr('rel');
					showNum(rel);
				}else if(s == -1){   //向左滑动
					s = len-1;
					for(var i=len-1;i>0;i--){
						$(opts.scrollId + ' '+ opts.childeId).eq(len-1).prependTo($(opts.scrollId));
					}
					$(opts.scrollId).css({'marginLeft':-wid*s+'px'});
					$(opts.scrollId).animate({'marginLeft':-wid*(s-1)+'px'},opts.speed*100);
					s = len-1-1; 
					var rel = $(opts.scrollId + ' '+ opts.childeId).eq(s).attr('rel');
					showNum(rel);
				}else if(s == len){    //向左滑动到最大值时转变
					s = 1;    //修复s的值
					$(opts.scrollId).css({'marginLeft':0+'px'});    //将列表图片滑动到初始位置
					for(var i=len-1;i>0;i--){    //将列表图片位置按图片rel切换0 1 2 3 （3为当前显示的图片） ==>3 0 1 2 （3为当前显示的图片）
						$(opts.scrollId).append($(opts.scrollId + ' '+ opts.childeId).eq(0));
					}
					$(opts.scrollId).animate({'marginLeft':-wid+'px'},opts.speed*100);
					var rel = $(opts.scrollId + ' '+ opts.childeId).eq(s).attr('rel');
					showNum(rel);
			    }
			}
		}
		var showNum = function(j){
			var showNub = parseInt(j) + 1 + '/' + len + '';
			$(opts.showNumberId).html(showNub);
		}
 		var play = function(){    //播放
			_scrollTimeObj = setInterval(function(){
				pageTo(1)
			},opts.speed*1000)
		};
		var stop = function(){    //停止
			clearInterval(_scrollTimeObj)
		}
		if(opts.autoPlay){play()};  //是否自动播放
	 	$(opts.lMoveId).bind('mouseover',function(){stop()});
	 	$(opts.lMoveId).bind('mouseout',function(){play()});
	 	$(opts.rMoveId).bind('mouseover',function(){stop()});
	 	$(opts.rMoveId).bind('mouseout',function(){play()});
	 	$(opts.scrollId + ' '+ opts.childeId).bind('mouseover',function(){stop()});
	 	$(opts.scrollId + ' '+ opts.childeId).bind('mouseout',function(){play()});
	 }
	 
	 /* 图片轮换效果一无限左右移动切换(无线循环) ,右下角同步数字显示张数并左右翻页*/
	 picsPageScrolling = function(params){ 
		 var opts = $.extend({
		 		scrollId: params.scrollId,   //滑动字体父节点
		 		lMoveId: params.lMoveId,    //左边切换按钮
		 		rMoveId: params.rMoveId,    //右边切换按钮
		 		autoPlay: params.autoPlay || true,    //是否自动播放
		 		speed: params.speed || 300,   //播放速度/秒
		 		pageId: params.pageId || false,      //分页的父节点
		 		dotOnclassname: params.dotOnclassname || 'on'    //分页被选中样式
		 	},params)
		 	
	 	var len = $(opts.scrollId+' li').length;
	 	var wid = $(opts.scrollId+' li').width();
	 	var _scrollTimeObj;
		var s = 0;     //记录自动播放时的页数
		
		if(len == 1) return false;
		
		if(opts.pageId){    //判断是否有分页
			for(var i=0;i<len;i++){
				var pageSpan = $('<span></span>').attr('rel',i).append(i+1);    //创建分页子节点
				$(opts.pageId).append(pageSpan);
			};
			$(opts.pageId+' span').removeClass().eq(0).addClass(opts.dotOnclassname);
		};
		$(opts.scrollId+' li').each(function(i){
			$(this).attr('rel',i);
		})
		var cons = $(opts.scrollId).clone().html();
	 	$(opts.lMoveId).click(function(){    //左边按钮效果
	 		pageTo(-1);
	 	});
	 	$(opts.rMoveId).click(function(){    //右边按钮效果
	 		pageTo(1);
	 	});
	 	
	 	$(opts.scrollId).parent().hover(function(){
	 		$(opts.lMoveId).show();
	 		$(opts.rMoveId).show();
	 	},function(){
	 		$(opts.lMoveId).hide();
	 		$(opts.rMoveId).hide();
	 	});
	 	
	 	var pageTo = function(n){    //分页自动切换样式显示
			if($(opts.scrollId).is(":animated")==false){
				s += n;
				if(s != -1 && s != len){    //向右滑动
					$(opts.scrollId).animate({'marginLeft':-wid*s+'px'},opts.speed*100);
					var rel = $(opts.scrollId+' li').eq(s).attr('rel');
					slide(rel);
				}else if(s == -1){   //向左滑动
					s = len-1;
					for(var i=len-1;i>0;i--){
						$(opts.scrollId+' li:last').prependTo($(opts.scrollId));
					}
					$(opts.scrollId).css({'marginLeft':-wid*s+'px'});
					$(opts.scrollId).animate({'marginLeft':-wid*(s-1)+'px'},opts.speed*100);
					s = len-1-1; 
					var rel = $(opts.scrollId+' li').eq(s).attr('rel');
					slide(rel);
				}else if(s == len){    //向左滑动到最大值时转变
					s = 1;    //修复s的值
					$(opts.scrollId).css({'marginLeft':0+'px'});    //将列表图片滑动到初始位置
					for(var i=len-1;i>0;i--){    //将列表图片位置按图片rel切换0 1 2 3 （3为当前显示的图片） ==>3 0 1 2 （3为当前显示的图片）
						$(opts.scrollId).append($(opts.scrollId+' li:first'));
					}
					$(opts.scrollId).animate({'marginLeft':-wid+'px'},opts.speed*100);
					var rel = $(opts.scrollId+' li').eq(s).attr('rel');
					slide(rel);
			    }
			}
		}
		if(opts.pageId){
			function slide(m){
				$(opts.pageId+' span').removeClass().eq(m).addClass(opts.dotOnclassname);    //分页样式指定显示
			}
			$(opts.pageId+' span').click(function(){
				s = parseInt($(this).attr('rel'));    //转换字符串为数字类型
			    fade(s);
			    slide(s);
			});
			function fade(j){
				$(opts.scrollId+' li').remove();
				$(opts.scrollId).append(cons);    //初始化图片列表
				$(opts.scrollId).css("marginLeft",-wid*j+"px");
				$(opts.scrollId).fadeOut(0,function(){
					$(opts.scrollId).fadeIn(500);
				})
			}
		}
 		var play = function(){    //播放
			_scrollTimeObj = setInterval(function(){
				pageTo(1)
			},opts.speed*1000)
		};
		var stop = function(){    //停止
			clearInterval(_scrollTimeObj)
		}
		if(opts.autoPlay){play()};  //是否自动播放
	 	$(opts.lMoveId).bind('mouseover',function(){stop()});
	 	$(opts.lMoveId).bind('mouseout',function(){play()});
	 	$(opts.rMoveId).bind('mouseover',function(){stop()});
	 	$(opts.rMoveId).bind('mouseout',function(){play()});
	 	$(opts.scrollId+' li').bind('mouseover',function(){stop()});
	 	$(opts.scrollId+' li').bind('mouseout',function(){play()});
	 	$(opts.pageId+' span').bind('mouseover',function(){stop()});
	 	$(opts.pageId+' span').bind('mouseout',function(){play()});
	 }
	 
	 
})(jQuery)

    function indexBigPic(){
		picsPageScrolling({
	        scrollId: "#newx-pics-allpic",
	        lMoveId: ".newx-pics-allshow .prev",
	        rMoveId: ".newx-pics-allshow .next",
	        pageId: "#numInner",
	        autoPlay: true,
	        speed: 4
	    });
    };
    indexBigPic()
