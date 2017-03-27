/*
 * jQuery buyProcess v0.1
 * Copyright (c) 2012-04-17 17:02 Jensen
 * 说明：购买流程页效果
 */

var ie  = $.browser.msie;
var ie6 = $.browser.msie && $.browser.version < 7;
	
$(function(){

	//选择收货人地址
   $('.orderSure-address').find('.select').find('.orderSure-addresse').show();
   $('.orderSure-address').find('.select').find('input').attr('checked','checked');
   $('.orderSure-address li').click(function(){
   	   $('.orderSure-addresse,.orderSure-addressd1').hide();
   	   $('.orderSure-address li').removeClass('select');
   	   $('.orderSure-address li').find('input').removeAttr('checked');
   	   $(this).addClass('select');
   	   $(this).find('.orderSure-addresse,.orderSure-addressd1').show();
   	   $(this).find('input').attr('checked','checked');
   	   var aid;
   	   aid = $(this).attr("aid");
   	   var val=$('input:radio[name="sendStyle"]:checked').val();
   	   if(val == 1){
   			 getFreightByCusAdd(aid);
   	   } 
   });
   
   //查看自取地址
   $('.look-btn').hover(function(){
   	   var pos = $(this).offset();
   	   var _left = pos.left - $('.lookaddress').width()/2 + 185;
   	   var _top = pos.top + $(this).height() + 6;
   	   $('.lookaddress').css({left:_left,top:_top}).show();;
   },function(){
   	   $('.lookaddress').hide();
   })
   
   
   //选择快递方式
   $('.orderSure-sendStyles-tab a').click(function(){
   	   $('.orderSure-sendStyles-tab p').css({'font-weight':'normal'});
   	   $(this).parent().prev().find('input').attr('checked','checked');
   	   $(this).next().css({'font-weight':'bold'});
   	   var _index = $(this).attr('rel');
   	   $('.orderSure-personinfo').hide();
   	   $('.orderSure-personinfo').eq(_index).show();
   })
    $('.orderSure-sendStyles-tab input').click(function(){
       $('.orderSure-sendStyles-tab p').css({'font-weight':'normal'});
   	   $(this).parent().next().find('p').css({'font-weight':'bold'});
   	   var _index = $(this).attr('rel');
   	   $('.orderSure-personinfo').hide();
   	   $('.orderSure-personinfo').eq(_index).show();
   })
   
   //电子票/身份证选择
   $('.eticket-inp1').click(function(){
   	   $('.orderSure-eticket-sfz').show();
   	   $('.eticket-pos').css({'left':'45px'});
   	   if(ie)  $('.eticket-pos').css({'left':'52px'});
   	   $('.orderSure-eticket-phone td').css({'padding-bottom':'20px'});
   })
   
   $('.eticket-inp2').click(function(){
	   $('#eTicketDzTypeTip').html("");
   	   $('.orderSure-eticket-sfz').hide();
   	   $('.eticket-pos').css({'left':'138px'});
   	   if(ie)  $('.eticket-pos').css({'left':'158px'});
   	   $('.orderSure-eticket-phone td').css({'padding-bottom':'0'});
   })
   
   //索取发票
   $('.getTicket').click(function(){
   	   var showor =  $('.orderSure-boma').css('display');
   	   if(showor == 'none'){
   	   	   $('.orderSure-boma').slideDown(300);
   	   }else if(showor == 'block'){
   	   	   $('.orderSure-boma').slideUp(300);
   	   }
   })
   
    //给永乐留言
   $('.ylquetion').click(function(){
   	   var showor =  $('.orderSure-boma-area').css('display');
   	   if(showor == 'none'){
   	   	   $('.orderSure-boma-area').slideDown(300);
   	   }else if(showor == 'block'){
   	   	   $('.orderSure-boma-area').slideUp(300);
   	   }
   })

})	
	
