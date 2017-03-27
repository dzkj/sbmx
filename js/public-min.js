/*
 * jQuery public-min v0.1
 * Copyright (c) 2012-04-17 17:02 lijin
 * 说明：全站通用JS
 */

var ie  = $.browser.msie;
var ie6 = $.browser.msie && $.browser.version < 7;

$(document).ready(function() {
	
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
	
    //tab栏更多城市下拉
	$(".city-list .more a").hover(function() {
        $(".allcity").slideDown("fast");
		$(this).addClass("more-hover");
		
		$(".allcity").hover(function() {
		}, function(){	
			$(this).slideUp('fast'); 
		    $(".city-list .more a").removeClass("more-hover");
		});
    
    });
	
    //垂直分类
    $(".list .item").hover(function() {
        $(this).addClass("menu-item-onhover");
    },
    function() {
        $(this).removeClass("menu-item-onhover");
    });
    //
    $(".change-city").hover(function() {
        $(".change-city-list").show(100);
        $(".change-city").addClass("hover");
        $(".change-city").css({'background-position':'60px -606px'});
    });
    
    $(".city").mouseleave(function(){
    	$(".change-city-list").hide(100);
    	$(".change-city").removeClass("hover");
    	$(".change-city").css({'background-position':'-349px -214px', '*background-position':'-348px -214px'});
    })
    // function() {
        // $(".change-city-list").hide(100);
        // $(".change-city").removeClass("hover");
    // }
    
    $(".login").click(function(){
    	$("#panel").css("height","400px");
    	var showor =  $("#panel").css('display');
	   	   if(showor == "none"){
	   	   	   $("#panel").slideDown(200);
	   	   	   $("#panel").animate({height: "380px"}, "normal");		
	   	   }else if(showor == "block"){
	   	   	   $("#panel").slideUp(200);
	   	}
    })
    $(".hide-button").click(function(){
    	$("#panel").slideUp(200);
    })
    
    $('body').bind('click',function(e){
		e = e || window.event;
		var target = e.target || e.srcElement;
		//console.log(target);
		if(target.tagName != 'BODY'){
			if( (target.className && target.className != 'login' || !target.className) 
				&& (target.id && target.id != 'panel' || !target.id) 
				&& (target.parentNode.id && target.parentNode.id != 'panel' || !target.parentNode.id)
				&& (target.parentNode.className && target.parentNode.className != 'panel_table_tr' || !target.parentNode.className)
				&& (target.parentNode.parentNode.className && target.parentNode.parentNode.className != 'panel_table_tr' || !target.parentNode.parentNode.className)
				&& (target.parentNode.parentNode.parentNode.className && target.parentNode.parentNode.parentNode.className != 'panel_table_tr'|| !target.parentNode.parentNode.parentNode.className)){
				$("#panel").slideUp(200);
			}
		}else{
			$("#panel").slideUp(200);
		}

	})
	
	//导航弹出
    $(".sort-title").hover(function() {
        $(".list").fadeIn("fast");
		$(".list").hover(function() {
		}, function(){	
			$(".list").css({"display": "none"});
		});
    });

	//回到顶部
	var av_height = $(window).height();
	var av_width = $(window).width();
	var go_top= $("#go_top");
	var Gotop_w = go_top.width()+2;
	var Gotop_h = go_top.height()+2;
	var doc_width = 1230;
	var Gotop_x = (av_width>doc_width?0.5*av_width+0.5*doc_width:av_width-Gotop_w);
	var Gotop_y = av_height-Gotop_h;
	var ie6Hack = "<style>.go_top{position:absolute; top:expression(documentElement.scrollTop+documentElement.clientHeight - this.offsetHeight-50);</style>}";
	if ($.browser.msie && ($.browser.version == "6.0")){
			$("body").append(ie6Hack);
		}
	function setGotop(){
		av_height = $(window).height();
		av_width = $(window).width();
		Gotop_y = av_height-Gotop_h-50;
		Gotop_x = (av_width>doc_width?0.5*av_width+0.5*doc_width:av_width-Gotop_w);
		if($(window).scrollTop()>0){
		go_top.fadeIn(500);
		}else{
			go_top.fadeOut(500);
			}
		if ($.browser.msie && ($.browser.version == "6.0")){
			go_top.animate({"left":Gotop_x},0);
			return false;
			}
		go_top.animate({"left":Gotop_x,"top":Gotop_y},0);
	}
	setGotop();
	$(window).resize(function(){
		setGotop();	
		})
	$(window).scroll(function(){
		setGotop();	
		})
	go_top.click(function(){
		$("html , body").animate({scrollTop:"0"},100);
		})
		
	$('.page-midul li').click(function(){
   	   $('.page-midul li').css({'background-color':'#fff','border-color':'#e1e1e1','color':'#4c4c4c'});
   	   $(this).css({'background-color':'#cc0001','border':'1px solid #cc0001','color':'#fff'});
    });
    
    //通用选项卡
    tabChanges = function(params){
		var opts = $.extend({
			parentId: params.parentId,                     //选项卡parent id或class
			childId: params.childId,                       //内容展示child id或class
			chooseClass: params.chooseClass || 'select'    // 选中的CLASS  	child class
		},params);
		$(opts.parentId).children().siblings().click(function(){
			var num = $(this).index();   //取得点击节点的下标数
			$(opts.parentId).children().siblings().removeClass().eq(num).addClass(opts.chooseClass);
			$(opts.childId).hide().eq(num).show();
		});
	};
});

	function Trim(s){    //去除左右边空格
		return s.replace(/(^\s*)|(\s*$)/g,"");
	}
	
	//去除IE6滑动时候闪动的BUG
	if(ie6)  document.execCommand("BackgroundImageCache", false, true);
