<?php
session_start();
include "connect.inc";
header("content-type:text/html;charset=utf-8;");

$season_id = $_GET['season_id'];
$price_sql = "select * from prices where season_id='".$season_id."' order by price";
$price_res = mysql_query($price_sql);
while($price_row = mysql_fetch_array($price_res)){
?>
<div style="float: left; padding: 0 6px;" class="w100">
    <div class="piaojia" data-showtime="True" onclick="price_list_apend(<?php echo $price_row['id'];?>)" id="piaojia_<?php echo $price_row['id'];?>">
<!--        <span class="num-lack" numlack="no"></span>
        <span class="max-buy-num" maxbuynum="0"></span>-->
        <span class="ticket-price" price=""><?php echo $price_row['price'];?><?php if($price_row['state']!=""){echo "(".$price_row['state'].")";} ?></span>
        <input type="hidden" value="<?php echo $price_row['price'];?>" />
        <input type="hidden" value="<?php echo $price_row['price'];?>" />
    </div>
</div>
<?php
}
?>

<script language="javascript" type="text/javascript" src="js/jquery.min.js"></script>
<script>

$(document).ready(function () {
    

//            $("#jian_").click(function () {
//                if ($(this).next().find("input").val() > 1) {
//                    var $countInput = $(this).next().find("input");
//                    var num = parseInt($countInput.val());
//                    num = num - 1;
//                    if (num < 1) {
//                        num = 1;
//                    }
//                    $countInput.val(num);
//                }
//            });
//
//            $("#jia_").click(function () {
//                alert(3);
//                var $countInput = $(this).prev().find("input");
//                var num = parseInt($countInput.val());
//                num = num + 1;
//                if (num > 10) {
//                    num = 10;
//                }
//                $countInput.val(num);
//            });


    $("#book-li").click(function () {
        $(this).addClass("book-lack-tab-actived");
        $(this).siblings().removeClass("book-lack-tab-actived");
        $("#book-content").show();
        $("#lack-content").hide();

    })

    $("#lack-li").click(function () {
        $(this).addClass("book-lack-tab-actived");
        $(this).siblings().removeClass("book-lack-tab-actived");
        $("#book-content").hide();
        $("#lack-content").show();
    })
    
    //$("#piaojia_title").hide();
    var pj = $("#day0-piaojiabox").children().length;
    var tj = $("#day0-taopiaobox").children().length;
    if (pj == 0 || typeof (pj) == "undefined")
    {
        $("#piaojia_title").hide();
      
    }
    if (tj == 0 || typeof (tj) == "undefined") {
        $("#taopiao_title").hide();
    }

    //下单场次切换
    var selecteDate = $(".changci-selected").find(".changci-date").text();
    var selecteDayTime = $(".changci-selected").find(".changci-day-time").text();
    
    $(".changci").click(function () {
        if ($("#selected-box").children().length > 0) {
            if (!$(this).hasClass("changci-selected")) {
//                show_tips_changci('只能选择一个场次，是否删除原选择场次', $(this));
            } 
        }
        else {
            
            var $chooseType = $(this);
            var changciId = $chooseType.attr("id");
            var piaojia = $("#" + changciId + "-piaojiabox").children().length;
            var taopiao = $("#" + changciId + "-taopiaobox").children().length;
            if (piaojia > 0)
            {
                $("#piaojia_title").show(); 
            }
            else
            {
                $("#piaojia_title").hide();
            }
            if (taopiao > 0) {
                $("#taopiao_title").show();
            }
            else
            {
                $("#taopiao_title").hide();
            }
            
            $(this).parent().siblings().children().removeClass("changci-selected");
            $(this).addClass("changci-selected");
            $("#" + changciId + "-piaojiabox").show();
            $("#" + changciId + "-piaojiabox").siblings().children().children(".piaojia").removeClass("piaojia-selected");
            $("#" + changciId + "-piaojiabox").siblings().children().children(".piaojia").attr("status", "uncheck");
            $("#" + changciId + "-piaojiabox").siblings().hide();

            $("#" + changciId + "-taopiaobox").show();
            $("#" + changciId + "-taopiaobox").siblings().children().children(".piaojia").removeClass("piaojia-selected");
            $("#" + changciId + "-taopiaobox").siblings().children().children(".piaojia").attr("status", "uncheck");
            $("#" + changciId + "-taopiaobox").siblings().hide();

            $("#performJwId").val($(this).attr("name"));
        }
    });

    //计数器函数
    var counter = function () {
        //$('.counter-jian').unbind("click");
        //$(".counter-jian").click(function () {

        //    if ($(this).next().find("input").val() > 1) {
        //        var $countInput = $("#" + $(this).attr("tag"));
        //        var num = parseInt($countInput.val());
        //        num = num - 1;
        //        $countInput.val(num);

        //    } 
        //});

        //$('.counter-jia').unbind("click");
        //$(".counter-jia").click(function () {
        //    var inputvalue = $(this).prev().find("input").val();
        //    //alert(inputvalue);

        //    var rest_num = $(this).parent().attr("restnum");
        //    //alert(rest_num);

        //    var max_buy_num = $(this).parent().attr("maxnum");
        //    //alert(max_buy_num);

        //    var $countInput = $("#" + $(this).attr("tag"));
        //    var num = parseInt($countInput.val());
        //    num = num + 1;
        //    $(this).parents(".selected-div").find("#maxbuy").css("display", "none");
        //        if (rest_num == "NaN" || rest_num == 0) {
        //            $(this).parents(".selected-div").find("#maxbuy").css("display", "none");
        //        }

        //    $countInput.val(num);
        //});



        //计数器函数 
        $('.counter-jian').unbind("click");
        $(".counter-jian").click(function () {
            if ($(this).next().find("input").val() > 1) {
                var $countInput = $("#" + $(this).attr("tag"));
                var num = parseInt($countInput.val());
                num = num - 1;
                $countInput.val(num);
                $("#buy_num").val(num);
//                $(this).parents(".selected-div").find("#restnum").hide();
//                $(this).parents(".selected-div").find("#maxbuy").hide();
            }
        });

        $('.counter-jia').unbind("click");
        $(" .counter-jia").click(function () {
            var inputvalue = $(this).prev().find("input").val(); 
            var rest_num = $("#priceTypeundefined").val(); 
            var max_buy_num = $(this).parent().attr("maxnum"); 
            
            if(rest_num >= 10){
                alert("超过最大购票张数");
            }else{
                var buy_num = rest_num*1+1;
                $("#priceTypeundefined").val(buy_num);
                $("#buy_num").val(buy_num);
            }
            
//            if (rest_num == "NaN" || rest_num == 0) {
////                $(this).parents(".selected-div").find("#restnum").show();
//            }
//            else {
//                if (max_buy_num <= 0) {
//                    if (inputvalue < parseInt(rest_num)) {
//                        var $countInput = $("#" + $(this).attr("tag"));
//                        var num = parseInt($countInput.val());
//                        num = num + 1;
//                        $countInput.val(num);
//                    } else {
////                        $(this).parents(".selected-div").find("#restnum").show();
//                    }
//                }
//                else {
//                    if (inputvalue < parseInt(max_buy_num)) {
//            
//                        if (inputvalue < parseInt(rest_num)) {
//                            var $countInput = $("#" + $(this).attr("tag"));
//                            var num = parseInt($countInput.val());
//                            num = num + 1;
//                            $countInput.val(num);
//                        } else {
////                            $(this).parents(".selected-div").find("#restnum").show();
//                        }
//                    }
//                    else
//                    {
////                        $(this).parents(".selected-div").find("#maxbuy").show();
//                    }
//                }
//            }
        });
    }



    //下单选择票价
//    $(".piaojia").click(function(e) {
//        //被选中的状态
//        if($(this).attr("class") == "piaojia piaojia-selected"){
//            alert($(this).attr("class"));
//            $(".piaojia").removeClass("piaojia-selected");
//        }
//        //$(".piaojia").removeClass("piaojia-selected");
//        $(this).addClass("piaojia-selected");
//        $("#selected-box").css('display','block');
//        $("#price__").text($(this).children().next().text());
//        var a = $(this).find("input").val();
//        var b = $(this).children().next().text();
//        
//        $("#price").val(a);
//        $("#price_info").val(b);
//        
//        
////        alert($(this).attr("class"));
////        alert($(this).children().next().text());
//        
//        $('#alreadychoose').css('display','block');
//        var $chooseType = $(this);
//        var title = $chooseType.attr("title");
//        var priceId = $chooseType.attr("id");
//        var status = $chooseType.attr("status");
//        //var price = $chooseType.attr("name"); //旧
//        var price = $chooseType.text(); //新
//        selecteDate = $(".changci-selected").find(".changci-date").text();
//        selecteDayTime = $(".changci-selected").find(".changci-day-time").text();
//        var pri = $chooseType.attr("name");
//        var oid = $chooseType.attr("objid");
//        var isidcard = $chooseType.attr("isidcard");
//       
//        var rest_num = parseInt($chooseType.attr("restnum"));
//
//        var max_buy_num = parseInt($chooseType.find(".max-buy-num").attr("maxbuynum"));
//        var num_lack = $chooseType.find(".num-lack").attr("numlack");
//        var $numlack = '';
//        var $nummax = '';
//        var $warm = '<span class="red-circle">!</span>';
//
//
//        if (max_buy_num > 0) {
//            $nummax = '<span id="buy-max">该票价最多可购买<em style="color:#fe5b78">' + max_buy_num + '</em>张票 !</span> ';
//        }
//         
//        if (max_buy_num <= 0 && num_lack == 'no') {
//            $warm = '';
//        }
//
//        if (isNaN(rest_num)) {
//            rest_num = 0;
//        }
//
//      
//
////        if (status == 'uncheck') {
////            if (($("#selected-box").children().length) == 0) {
////              
////                var choose_div = '<div class="selected-div clearfix"  id="' + priceId + '-selected-div">' +
////                                    '<div class="changci  changciorther" style="width: 60%;margin-right:0;border:none;height:10%">' +
////                                       '<h6 >' + selecteDate + '</h6>' +
////                                       '<h6 >' + selecteDayTime + '</h6>' +
////                                    '</div>' +
////                                     '<div class="piaojia" style="width: 65%;margin:0;border:none;overflow:hidden">' + price + '</div>' +
////                                     '<div class="counter" style="padding-top: 10px;float: left;width: 30%;height: 50px; margin-right: 27px;margin-left: 35px;">' +
////                                       '<table border="1" >' +
                                              '<tr restnum="' + rest_num + '" maxnum="' + max_buy_num + ' ">' +
                                               '<td class="counter-jian" id="jian_" tag="priceType' + priceId + '">-</td>' +
                                               '<td class="li-num"> <input type="text" id="priceType' + priceId + '" objID="' + oid + '" price="' + pri + '" isidcard="' + isidcard + '" class="TicketBuyCount" readonly="readonly" value="1" name="priceCount"> </td>' +
                                               '<td class="counter-jia" id="jia_" tag="priceType' + priceId + '" >+ </td> ' +
                                            '</tr>' +
                                       '</table>' +
                                      '</div>' +
//                                  '<div class="dele" id="dele' + priceId + '"></div>' +
                                  '<div class="show-tip" id="maxbuy"><span class="tip-style">' + "该票价最多可购买" + max_buy_num + "张票！" + '</span></div>' +
                                  '<div class="show-tip" id="restnum"><span class="tip-style">余票不足!</span></div>' +
                                '</div>';
                $("#selected-box").append(choose_div);
                $(this).addClass("piaojia-selected");
                $chooseType.attr("status", "check");
                
                if ($(this).parent().parent().hasClass("wrap")) { $(this).parent().parent().addClass("wrap-selected") };
            } else {
                var which_day_div = $("#selected-box>:first").attr("id");
                var which_day = (which_day_div.substr(0, 4));
                // alert(which_day);
                var this_day = $(this).attr("id").substr(0, 4);
                // alert(this_day);

                if (this_day == which_day) {
                    // alert('ok');
                    var choose_div = '<div class="selected-div clearfix"  id="' + priceId + '-selected-div">' +
                                        '<div class="changci changciorther" style="margin-right:0;border:none;height:10%">' +
                                           '<h6 >' + selecteDate + '</h6>' +
                                           '<h6 >' + selecteDayTime + '</h6>' +
                                        '</div>' +
                                         '<div class="piaojia" style="width:22%;margin:0;border:none;overflow:hidden">' + price + '</div>' +
                                         '<div class="counter">' +
                                           '<table border="1" >' +
                                                   '<tr restnum="' + rest_num + '" maxnum="' + max_buy_num + ' ">' +
                                                   '<td class="counter-jian" id="jian_" tag="priceType' + priceId + '">-</td>' +
                                                   '<td class="li-num"> <input type="text" id="priceType' + priceId + '" objID="' + oid + '" price="' + pri + '" isidcard="' + isidcard + '" class="TicketBuyCount" readonly="readonly" value="1" name="priceCount"> </td>' +
                                                   '<td class="counter-jia" id="jia_" tag="priceType' + priceId + '" >+ </td> ' +
                                                '</tr>' +
                                           '</table>' +
                                          '</div>' +
                                      '<div class="dele" id="dele' + priceId + '"></div>' +
                                    '<div class="show-tip" id="maxbuy"><span class="tip-style">' + "该票价最多可购买" + max_buy_num + "张票！" + '</span></div>' +
                                    '<div class="show-tip" id="restnum" ><span class="tip-style">余票不足!</span></div>' +
////                                    '</div>';
////                    $("#selected-box").append(choose_div);
////                    $(this).addClass("piaojia-selected");
////                    $chooseType.attr("status", "check");
////                    if ($(this).parent().parent().hasClass("wrap")) { $(this).parent().parent().addClass("wrap-selected") };
////                };
////            }
////        }
////        else {
////            $(this).removeClass("piaojia-selected");
////            if ($(this).parent().parent().hasClass("wrap")) { $(this).parent().parent().removeClass("wrap-selected") };
////            $chooseType.attr("status", "uncheck");
////            $("#dele" + priceId).parent().remove();
////            var jwselect = $("#selected-box").children().length;
////            if (jwselect == 0 || typeof (jwselect) == "undefined") {
////                $("#alreadychoose").hide();
////            }
////            else { $("#alreadychoose").show(); }
////        }
//       counter();
//        //删除已选类型车票,先解除监听，再绑定。不然代码重复运行会绑定多个监听，事件重复。
//        $('.dele').unbind("click");
//        $(".dele").click(function () {
//            var id = $(this).attr("id");
//            id = id.replace("dele", "");
//            $("#" + id).trigger("click");
//
//        });
//    })


    //选择支付方式
    $(".pay-type-label").click(function () {
        if ($(this).attr("status") == 'uncheck') {
            $(this).attr("status", "check");
            $(this).addClass("label-checked");
            $(this).css("border", "none");

            $(this).parent().siblings().find("label").attr("status", "uncheck");
            $(this).parent().siblings().find("label").removeClass("label-checked");
            $(this).parent().siblings().find("label").css("border", "1px solid gray");

        }
    })

    //选择交易方式
    $(".delivery-cirlce").click(function () {

        $(this).hide();
        $(this).next().show();
        $(this).next().next().css("color", "#fe5b78");
        $(this).parent().siblings().find(".delivery-cirlce-red").hide();
        $(this).parent().siblings().find(".delivery-cirlce").show();
        $(this).parent().siblings().find(".delivery-cirlce-text").css("color", "#9f9f9f");

    })

    $("#deli-e-ticket").click(function () {
        $("#input-item-user").show();
        $("#input-item-cellphone").show();
        $("#input-item-verify").show();
        $("#input-item-add").hide();
        $("#input-item-detail-add").hide();

        $("#tip-e-ticket").show();
        $("#qupiaoren").show();
        $("#tip-kuaidi").hide();
        $("#tip-shangmen").hide();
        $("#area").hide();
        $("#addr").hide(); $("#addrDiv").hide();

        $("#dmode").val("1");

        var et_total_num = fmoney($("#et-total-num").text()); //不含快递价格
        $('#orderConfirmModel_deliverPrice').val("0.00");
        $("#yfei").text("¥0.00元");
        $("#kuaidi-total-num").text(et_total_num);
        $(".kuaidi-total-Money").text(et_total_num);
        $("#orderConfirmModel_TotalPrice").val(et_total_num);
    })
    $("#deli-kuaidi").click(function () {
        $("#input-item-user").show();
        $("#input-item-cellphone").show();
        $("#input-item-verify").show();
        $("#input-item-add").show();
        $("#input-item-detail-add").show();

        $("#tip-e-ticket").hide();
        $("#qupiaoren").show();
        $("#tip-kuaidi").show();
        $("#tip-shangmen").hide();
        $("#area").show();
        $("#addr").show(); $("#addrDiv").show();
        $("#dmode").val("2");

        var et_total_num = parseFloat($("#et-total-num").text()); //不含快递价格
        //var kd = 10.00;
        var kd = 0.00;
        var uc = $("#orderConfirmModel_UserCity").val().replace("市", "");
        if ($("#current_city").val() == uc) {
        } else {
            //kd = 20.00;

            var kd = 0.00;  
        }
        //var kuaidi_total_num = fmoney(et_total_num + kd);
        var kuaidi_total_num = fmoney(et_total_num );
        $('#orderConfirmModel_deliverPrice').val(fmoney(kd));
        $("#yfei").text("¥" + fmoney(kd) + "元");
        $("#kuaidi-total-num").text(kuaidi_total_num);
        $(".kuaidi-total-Money").text(kuaidi_total_num);
        $("#orderConfirmModel_TotalPrice").val(kuaidi_total_num);
    })
    $("#deli-shangmen").click(function () {
        $("#input-item-user").show();
        $("#input-item-cellphone").show();
        $("#input-item-verify").show();
        $("#input-item-add").hide();
        $("#input-item-detail-add").hide();

        $("#tip-e-ticket").hide();
        $("#qupiaoren").show();
        $("#tip-kuaidi").hide();
        $("#tip-shangmen").show();
        $("#area").hide();
        $("#addr").hide(); $("#addrDiv").hide();
        $("#dmode").val("3");

        var et_total_num = fmoney($("#et-total-num").text()); //不含快递价格
        $('#orderConfirmModel_deliverPrice').val("0.00");
        $("#yfei").text("¥0.00元");
        $("#kuaidi-total-num").text(et_total_num);
        $(".kuaidi-total-Money").text(et_total_num);
        $("#orderConfirmModel_TotalPrice").val(et_total_num);
    })

    $("#deli-bujiming").click(function () {
        $("#input-item-user").show();
        $("#input-item-cellphone").show();
        $("#input-item-verify").show();
        $("#input-item-add").hide();
        $("#input-item-detail-add").hide();

        $("#tip-e-ticket").show();
        $("#qupiaoren").hide();
        $("#tip-kuaidi").hide();
        $("#tip-shangmen").hide();
        $("#area").hide();
        $("#addr").hide(); $("#addrDiv").hide();

        $("#dmode").val("4");

        var et_total_num = fmoney($("#et-total-num").text()); //不含快递价格
        $('#orderConfirmModel_deliverPrice').val("0.00");
        $("#yfei").text("¥0.00元");
        $("#kuaidi-total-num").text(et_total_num);
        $(".kuaidi-total-Money").text(et_total_num);
        $("#orderConfirmModel_TotalPrice").val(et_total_num);
    })

    //登录切换
    $(".login-switch li").click(function () {
        if (!$(this).hasClass("li-actived")) {
            $(this).addClass("li-actived");
            $(this).siblings().removeClass("li-actived");
        }
    })


    $("#login-switch-li-1").click(function () {

        $("#normal-login-password").show();
        $("#quick-login-verify").hide();

    })

    $("#login-switch-li-2").click(function () {

        $("#normal-login-password").hide();
        $("#quick-login-verify").show();

    })

    //$(".orders-tab li").click(function () {
    //    $(this).addClass("orders-tab-actived");
    //    $(this).siblings().removeClass("orders-tab-actived");
    //})

    //var current = "all";
    //var click1 = false;
    //var click2 = false;
    //$("#all-li").click(function () {
    //    $("#orders-tbpay").show();
    //    $("#orders-paid").show();
    //    $("#orders-cancel").show();
    //    current = "all";
    //})
    //$("#paid-li").click(function () {
    //    $("#orders-tbpay").hide();
    //    $("#orders-paid").show();
    //    $("#orders-cancel").hide();
    //    current = "pay";
        
    //    if (click1 == false) {
    //        //处理加载
    //        click1 = true;
    //    }
    //})
    //$("#tbpay-li").click(function () {
    //    $("#orders-tbpay").show();
    //    $("#orders-paid").hide();
    //    $("#orders-cancel").hide();
    //    current = "cancel";
    //    if (click2 == false) {
    //        //处理加载
    //       // .html(data)
    //        click2 = true;
    //    }
    //})



    var counter_one = function () {

        $(".counter-jian").click(function () {
            if ($(this).next().find("input").val() > 1) {
                var $countInput = $(this).next().find("input");
                var num = parseInt($countInput.val());
                num = num - 1;
                if (num < 1) {
                    num = 1;
                }
                $countInput.val(num);
                // num =num;
            }
        });


        $(".counter-jia").click(function () {

            var $countInput = $(this).prev().find("input");
            var num = parseInt($countInput.val());
            num = num + 1;
            if (num > 10) {
                num = 10;
            }
            $countInput.val(num);
        });
    }

    //counter_one();


    $("#city_input").focus(function () {
        $(".city-selector").show();
    })

    $(".close").click(function () {
        $(".city-selector").hide();

    })


    $(".sub-span").click(function () {

        $("#index-search-sub").show();
        $("#index-search").fadeIn();
        $("#index-search").css("width", "50%");

    })


    //注册页 文本框失去焦点后
    $('#register_page .register-main form :input').blur(function () {
        var $parent = $(this).parent().parent();
        $parent.find(".formtips").remove();
        //验证手机
        if ($(this).is('#phone')) {
            if ((this.value != "" && (/^1[3|4|5|8][0-9]\d{8}$/.test(this.value)))) {
                $parent.find(".formtips").remove();
            } else {

                var errorMsg = '请输入正确的手机号.';
                $parent.append('<span class="formtips onError">' + errorMsg + '</span>');

            }
        }
        //验证短信验证码
        if ($(this).is('#SecurityCode')) {
            if (this.value == "" || this.value.length < 6) {

                var errorMsg = '请输入至少6位的验证码.';
                $parent.append('<span class="formtips onError">' + errorMsg + '</span>');
            } else {
                var okMsg = '输入正确.';
                $parent.append('<span class="formtips onSuccess">' + okMsg + '</span>');
            }
        }
        //验证密码
        if ($(this).is('#Password')) {
            if (this.value == "" || this.value.length < 6) {
                var errorMsg = '请输入至少6位数密码.';
                $parent.append('<span class="formtips onError">' + errorMsg + '</span>');
            } else {
                $parent.find(".formtips").remove();
            }
        }

        //确认密码
        if ($(this).is('#ConfirmPassword')) {

            if (this.value == "" || this.value.length < 6) {
                var errorMsg = '请输入至少6位数密码.';
                $parent.append('<span class="formtips onError">' + errorMsg + '</span>');
            }
            else {
                if (this.value != $("#password").val()) {
                    var errorMsg = '密码不一致.';
                    $parent.append('<span class="formtips onError">' + errorMsg + '</span>');
                }


            }
        }

    }).keyup(function () {
        var $parent = $(this).parent().parent();
        //验证手机
        if ($(this).is('#phone')) {
            if ((this.value != "" && (/^1[3|4|5|8][0-9]\d{8}$/.test(this.value)))) {
                $parent.find(".formtips").remove();
            }
        }
    });//end blur


    //自定义手机号或邮箱验证方法
    $.validator.addMethod("mobile_num", function (value, element) {

        if ((value != "" && (/^1[3|5|7|8][0-9]\d{8}$/.test(value)))) {
            return true;
        } else {
            return false;
        }
    }, "请输入正确的手机号");



    //登录验证
    $("#login-normal-form").validate({

        rules: {
            PhoneNumber: {
                required: true,
                mobile_num: {}
            },
            Password: {
                required: true,
                minlength: 6
            }
        },

        messages: {
            PhoneNumber: {
                required: "不能为空",
                mobile_num: "请输入正确的手机号",
            },
            Password: {
                required: "请输入密码",
            }
        }

    });

    //修改密码验证
    $("#change-pass-form").validate({

        rules: {

            OldPassword: {
                required: true,
                minlength: 6
            },

            NewPassword: {
                required: true,
                minlength: 6
            },

            ConfirmPassword: {
                required: true,
                minlength: 6,
                equalTo: "#NewPassword"
            },


        },

        messages: {
            OldPassword: {
                required: "请输入密码",
                minlength: "密码不能小于6个字符"
            },

            NewPassword: {
                required: "请输入新密码",
                minlength: "确认密码不能小于6个字符"
            },
            ConfirmPassword: {
                required: "请确认新密码",
                minlength: "确认密码不能小于6个字符",
                equalTo: "两次输入密码不一致"
            }
        }

    });

    //找回密码验证
    $("#find-pass-form").validate({

        rules: {

            phone: {
                required: true,
                mobile_num: {}
            },

            SecurityCode: {
                required: true,
                minlength: 6
            },
            Password: {
                required: true,
                minlength: 6
            },

            ConfirmPassword: {
                required: true,
                minlength: 6,
                equalTo: "#Password"
            },


        },

        messages: {

            phone: {
                required: "请输入手机号",
                mobile_num: "请输入正确的手机号"
            },

            SecurityCode: {
                required: "请输入短信验证码",
                minlength: "短信验证码不能等于6个字符"
            },
            Password: {
                required: "请输入新密码",
                minlength: "确认密码不能小于6个字符"
            },
            ConfirmPassword: {
                required: "请确认新密码",
                minlength: "确认密码不能小于6个字符",
                equalTo: "两次输入密码不一致"
            }
        }

    });


})

function fmoney(s, n) {
    n = n > 0 && n <= 20 ? n : 2;
    s = parseFloat((s + "").replace(/[^\d\.-]/g, "")).toFixed(n) + "";
    var l = s.split(".")[0].split("").reverse(),
    r = s.split(".")[1];
    t = "";
    for (i = 0; i < l.length; i++) {
        t += l[i] + ((i + 1) % 3 == 0 && (i + 1) != l.length ? "," : "");
    }
    return t.split("").reverse().join("") + "." + r;
}






</script>