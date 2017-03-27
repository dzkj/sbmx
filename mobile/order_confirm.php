<?php
session_start();
include "connect.inc";
header("content-type:text/html;charset=utf-8;");

//var_dump(json_decode($_POST['data']));
$data = json_decode($_POST['data']);
for($i=0;$i<count($data);$i++){
    $temp[$i] = explode('|',$data[$i]);
}

$id = $_POST['show_id'];
$sql = "select * from shows where id='$id'";
$res = mysql_query($sql);
$show_row = mysql_fetch_array($res);
?>
<!DOCTYPE html>
<!-- saved from url=(0042)http://m.wpiao.cn/TicketOrder/OrderConfirm -->
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>确认订单</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <link href="./css/mobile.css" rel="stylesheet">
    <link href="./css/reset.css" rel="stylesheet">
    <!--<link href="./css/tips.css" rel="stylesheet">-->
    <script language="javascript" type="text/javascript" src="./js/jquery.min.js"></script>
    <script language="javascript" type="text/javascript" src="./js/my.js"></script>
    <script src="./js/jquery.validate.js"></script>
    <!--<script src="./js/tips.js"></script>-->
    <script>
        var issum = false;
        $(document).ready(function () {
            $("#securityCode").click(function () {
                if (issum) return;
                var p = $("#orderConfirmModel_UserPhone").val();
                var pattern = /^1[3|4|5|7|8][0-9]\d{8}$/;
                if (pattern.test(p)) {
                    htmlobj = $.ajax({
                        url: "../Common/SecurityCode?phone=" + p,
                        async: false,
                        type: 'POST',
                    });
                    var jsonObject = eval('(' + htmlobj.responseText + ')');
                    if (jsonObject.result == 0) {
                        issum = true;
                        //这里处理倒计时并阻止按钮交互
                        var time = 30;
                        var code = $("#securityCode");
                        code.addClass("msgs1");
                        var t = setInterval(function () {
                            time--;
                            code.val(time + "秒");
                            if (time == 0) {
                                issum = false;
                                clearInterval(t);
                                code.val("重新获取");
                                code.removeClass("msgs1");
                            }
                        }, 1000)
                    }

                } else { alert("请输入正确的手机号"); }
            });
        });
    </script>
    <style type="text/css">
        .info select {
            border: 1px solid #d3d3d3;
            height: 30px;
        }
        .delivery-type-section .input-header {
            
            width: 56px;
        }
    </style>
</head>
<body>
    <div id="header" style="position:fixed">
            <a href="javascript:history.back(-1);"><span class="return"></span></a>
        
        <span>确认订单</span>
    </div>
    <div style="height:45px"></div>
    <div class="main">
        <div class="order-meta-section">
            <h2><?php echo $show_row['show_title'];?></h2>
                  <h3>时间：有效期至 <?php echo date('Y年m月d日',strtotime($show_row['show_end']));?></h3>
                  <h3>演出场馆: <?php echo $show_row['show_venue'];?></h3>
                  <h3>演出城市: <?php echo $show_row['show_city']?> </h3>
                   
            <table border="1" width="100%" style="border:1px solid #e6e6e6;text-align:center;margin:20px 0" cellpadding="10" id="table-useli">

                <tbody>
                    <tr style="background-color:#f3f3f3">
                        <th>商品信息</th>
                        <th>价格</th>
                        <th>数量 </th>
                    </tr>
                    <?php
                    $total = 0;
                    for($i=0;$i<count($temp);$i++){
                        $total += $temp[$i][1]*$temp[$i][2];
                    ?>
                    <tr class="table_tr">
                        <td><?php echo $temp[$i][0];?> </td>
                        <td class="li-num"><?php echo $temp[$i][1];?> </td>
                        <td><?php echo $temp[$i][2];?> </td>
                        <td style="display: none;"><?php echo $temp[$i][3];?></td>
                    </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
        <div class="delivery-type-section">
            <div><span class="one"></span> <span class="two">配送方式</span></div>
            <div class="circle-contain">
                <div id="psfs_seleced">
                    <ul>
<!--                        <li>
                            <input type="radio" name="deli-type" id="deli-e-ticket" style="display:none" value="电子票">
                            <label class="delivery-cirlce" style="left:25%;background-image:url(./images/dianzip.png)" for="deli-e-ticket"></label>
                            <label class="delivery-cirlce-red" style="left:25%;background-image:url(./images/dianzip-red.png);display:block"></label>
                            <span class="delivery-cirlce-text delivery-cirlce-text-actived" style="left:25%">电子票</span>
                        </li>-->
                        <li>
                            <input type="radio" name="deli-type" id="deli-kuaidi" style="display:block" value="快递">
                            <label id="deli-kuaidi-label" class="delivery-cirlce" style="left:25%;background-image:url(./images/kuaidi.png)" for="deli-kuaidi"></label>
                            <label class="delivery-cirlce-red" style="left: 25%; background-image: url(./images/kuaidi-red.png); display: block"></label>
                            <span class="delivery-cirlce-text" style="left: 28%;">快递</span>
                        </li>
                        <li>
                            <input type="radio" name="deli-type" id="deli-shangmen" style="display:none" value="上门取票">
                            <label class="delivery-cirlce" style="left:75%;background-image:url(./images/tongcheng.png)" for="deli-shangmen"></label>
                            <label class="delivery-cirlce-red" style="left:75%;background-image:url(./images/tongcheng-red.png)"></label>
                            <span class="delivery-cirlce-text" style="left:73%">上门取票</span>
                        </li>
                    </ul>

                </div>
            </div>
            <div>
                <form id="form1" action="order_data_do.php" method="post">
                    
                    <input type="hidden" value="<?php echo $id;?>" id="show_id" name="show_id"/>
                    <input type="hidden" value="" id="data" name="data"/>
                    
                    <input type="hidden" value="" id="pcasaddr" name="pcasaddr"/>
                    <input type="hidden" value="" id="true_phone" name="true_phone"/>
                    <input type="hidden" value="" id="zipcode" name="zipcode"/>
                    <input type="hidden" value="" id="true_name" name="true_name"/>
                    
                    <input type="hidden" value="微信支付" id="payment_type" name="payment_type"/>
                    <input type="hidden" value="快递" id="shipping_type" name="shipping_type"/>
                    <input type="hidden" value="<?php echo $total;?>" id="order_amount" name="order_amount"/>
                    
                    <input type="hidden" value="<?php echo $show_row['show_venue'];?>" id="take_info" name="take_info"/>
                    <input type="hidden" value="<?php echo $show_row['show_title'];?>" id="show_title" name="show_title"/>
                    
                    <div style="margin:10px 0" class="clearfix" id="qupiaoren">
                        <span class="input-header">取票人</span>  <input id="orderConfirmModel_UserName" name="orderConfirmModel.UserName" type="text" value="">
                    </div>
                       
                    <div style="margin:10px 0" class="clearfix">
                        <span class="input-header">手机号</span>  <input id="orderConfirmModel_UserPhone" name="orderConfirmModel.UserPhone" type="text" value="">
                            <!--<input id="securityCode" class="get-verify-code" value="获取验证码" type="button">-->
                    </div>

<!--                        <div id="sCode" style="margin:10px 0" class="clearfix">
                            <span class="input-header">验证码</span>  <input id="orderConfirmModel_SecurityCode" name="orderConfirmModel.SecurityCode" type="text" value="">
                        </div>-->
                        <div id="addrDiv" style="display:block" class="clearfix">
                            
                            <div id="addr_content" style="margin: 25px 0;border-top: 2px solid #FE5B78;padding-top: 10px;" class="clearfix">
                                <span class="input-header" style="width:60px"></span>
                                <p style="width: 82%;color: #999;margin: auto;" id="address_content">
                                <?php
                                $addsql = "select * from address where mem_id=1 and default_stauts=1";
                                $addres = mysql_query($addsql);
                                $addrow = mysql_fetch_array($addres);
                                echo "送票地址: <span>".$addrow['prov']." ".$addrow['city']." ".$addrow['area']." ".$addrow['street']."</span>";
                                echo "<br/>";
                                echo "<br/>";
                                echo "联系电话: <span>".$addrow['true_phone']."</span>";
                                echo "<br/>";
                                echo "<br/>";
                                echo "邮政编码: <span>".$addrow['zipcode']."</span>";
                                echo "<br/>";
                                echo "<br/>";
                                echo "收货人: <span>".$addrow['true_name']."</span>";
                                ?>
                                </p>
                            </div>
                            
                            <div id="addr" style="margin:10px 0;/*border-bottom: 2px solid #FE5B78;*/" class="clearfix">
                                <span class="input-header" style="width: 98%;color:#FF7272;border: 1px dashed #ff7272;text-align: center;">选择地址</span>
                                <p style="width: 89%;color: #999;">
                                </p>
                            </div>
                        </div>
                </form>
            </div>
<!--            <p class="warm-tips" id="tip-e-ticket">
                温馨提示：电子票为系统直接发送购买商品信息到客户手机,客户可凭有效电子票信息到现场兑换商品,或根据现场指导直接检验电子票入场。 
            </p>-->
            <p class="warm-tips" id="tip-kuaidi" style="display:block">温馨提示：同城快递收取10元快递费，非同城快递20元。</p>
            <p class="warm-tips" id="tip-shangmen" style="display:none">
                取票地址：<?php echo $show_row['show_venue'];?>
            </p>
        </div>
                <div class="pay-type-section" id="zffs">
                    <div><span class="one"></span> <span class="two">支付方式</span></div>

                    <div class="pay-type-item" id="wxin" display="block;">
                        <label class="pay-type-label label-checked" for="wechat-pay" style="margin-top: 10px;" status="check"></label>
                        <input type="radio" name="pay" id="wechat-pay" value="微信支付">
                        <span class="pay-icon" style="background-image:url(./images/wechat.png)"></span>
                        <span class="pay-type-text">微信支付</span>
                    </div>
<!--                    <div class="pay-type-item" id="zfb">
                        <label class="pay-type-label" for="ali-pay" style="margin-top: 10px; margin-left: 12px;" status="uncheck"></label>
                        <input type="radio" name="pay" id="ali-pay" value="支付宝">
                        <span class="pay-icon" style="background-image:url(./images/ali.png)"></span>
                        <span class="pay-type-text">支付宝</span>
                    </div>                  -->
                </div>
        <div class="total-section">

            <div class="total-section-item clearfix">
                <span class="fl">合计</span>
                <span class="fr total-money">¥<span class="kuaidi-total-Money1"><?php echo $total;?></span> 元</span>
            </div>
        </div>

        <div style="height:40px"></div>
    </div>
    
    <div style="display:none;position:fixed; top: 0%;width:100%;height:100%;margin:auto;overflow-y: scroll;background:#fff;z-index: 99999;" id="select_addr">
        <?php
            include "select_address.php";
        ?>
    </div>
    
    <div id="footer">
        <span style="color:#333;font-size:18px">应付：</span>
        <span class="total-money" style="line-height: 50px; display: none;" id="et-total">¥<span id="et-total-num"><?php echo $total;?></span> 元 </span>
        <span class="total-money" style="line-height: 50px;" id="kuaidi-total2">¥<span id="kuaidi-total-num1"><?php echo $total;?></span> 元</span>
        
        <div class="footer-btn" onclick="clickSum()" id="footer-btn-buy">立即支付</div>
        <div class="footer-btn" style="display: none; background-color: gray">立即支付</div>
    </div>
   
    <script type="text/javascript">
        $(function(){
           $("#addr").click(function(){
               $("#select_addr").css("display","block");
           });
           $("#psfs_seleced li").click(function(){
               var index = $(this).index();
               if(index == 0){
                   $("#shipping_type").val("快递");
               }else{
                   $("#shipping_type").val("上门取票");
               }
           });
        });

//        var city_Text; //地址城市
//        var current_city = $("#current_city").val(); //定位城市
//        var kuaidi_total_num; // 快递方式总价
//
//        var ispayagain = false;
//
//        $(function () {
//            if ($("#deliveryTypeId").val() == 4) {
//                $("#qupiaoren").hide();
//                $("#tip-e-ticket").show();
//                $("#tip-kuaidi").hide();
//                $("#tip-shangmen").hide();
//                $("#addrDiv").hide();
//            }
//            if ($("#deliveryTypeId").val() == 3) {
//                $("#qupiaoren").show();
//                $("#tip-e-ticket").hide();
//                $("#tip-kuaidi").hide();
//                $("#tip-shangmen").show();
//                $("#addrDiv").hide();
//            }
//            if ($("#deliveryTypeId").val() == 2) {
//                $("#qupiaoren").show();
//                $('#deli-kuaidi-label').trigger("click");
//                $('#addr').show(); $("#addrDiv").show();
//                $('#dmode').val(2);
//                var et_total_num = parseFloat($("#et-total-num").text()); //不含快递价格
//         
//                var kd =  0.00;
//                var uc = $("#orderConfirmModel_UserCity").val().replace("市", "");
//                if ($("#current_city").val() == uc) {
//                } else {
//          
//                    var kd = 0.00;
//                }
//                $("#tip-e-ticket").hide();
//                $("#tip-kuaidi").show();
//                $("#tip-shangmen").hide();
//                var kuaidi_total_num = fmoney(et_total_num + kd) ;
//                $('#orderConfirmModel_deliverPrice').val(fmoney(kd));
//          
////                $("#kuaidi-total-num").text(kuaidi_total_num);
////                $(".kuaidi-total-Money").text(kuaidi_total_num);
//                $("#orderConfirmModel_TotalPrice").val(kuaidi_total_num);
//            }
//            $("#s_city").change(function () {
//                var city_Text;//地址城市
//                var current_city = $("#current_city").val(); //定位城市
//                var et_total_num = parseFloat($("#et-total-num").text()); //不含快递价格
//                city_Text = $(this).find("option:selected").text().replace("市", "");
//            
//                var kd = 0.00;
//                if (current_city == city_Text) {
//         
//                    kuaidi_total_num = et_total_num;
//                }
//                else {
//            
//                    kuaidi_total_num = et_total_num ;
//                    kd = 0;
//                }
//                kuaidi_total_num = fmoney(kuaidi_total_num);
//            
//                $('#orderConfirmModel_deliverPrice').val(fmoney(kd));
////                $("#kuaidi-total-num").text(kuaidi_total_num);
////                $(".kuaidi-total-Money").text(kuaidi_total_num);
//                $("#orderConfirmModel_TotalPrice").val(kuaidi_total_num);
//            });
//            $("#et-total").show();
//            $("#kuaidi-total").hide();
//            $("#et-total").hide();
//            $("#kuaidi-total").show();
//        });
//
          function clickSum() {

              if ($("#dmode").val()!="4" && $('#orderConfirmModel_UserName').val() == "")
            {
                alert("请输入取票人名称。");
                return;
            }
            if ($('#orderConfirmModel_UserPhone').val() == "") {
                alert("请输入联系手机号。");
                return;
            }
            var pattern = /^1[3|4|5|7|8][0-9]\d{8}$/;
            if (!pattern.test($('#orderConfirmModel_UserPhone').val())) {
                alert("请输入正确的手机号。");
                return;
            }

                if ($('#orderConfirmModel_SecurityCode').val() == "") {
                    alert("请输入验证码。");
                    return;
                }
//                var pattern = /^\d{6}$/;
//                if (!pattern.test($("#orderConfirmModel_SecurityCode").val())) {
//                    alert("请输入正确的验证码");
//                    return false;
//                }
                if ($('#dmode').val() == 2)
                {
                    if ($('#s_province option:selected').text() == "省份") {
                            alert("请选择地址所在省份。");
                            return;
                        }
                        if ($('#s_city option:selected').text() == "地级市") {
                            alert("请选择地址所在地级市。");
                            return;
                        }
                        if ($('#s_county option:selected').text() == "市、县级市") {
                            alert("请选择地址所在市、县级市。");
                            return;
                        }
                        if ($("#orderConfirmModel_UserAddress").val() == "")
                        {
                            alert("请输入收货的详细地址。");
                            return;
                        }
                  }

            var payMode = $('.pay-type-section input[name="pay"]:checked ').val();

//            if (ispay == 1) {
//                if (typeof (payMode) == "undefined") {
//                    alert("请选择支付方式。");
//                    return;
//                }
//            }
            if ('' == "" || '' == null) {
                var flt = false;
                $.ajax({
                    url: '../Stock/ValidateMaxNum?vphone=' + $("#orderConfirmModel_UserPhone").val() + "&pid=" + $("#orderConfirmModel_PerformID").val(),
                    async: false,
                    type: 'GET',
                    success: function (data) {
                        if (!data.Result) {
                            flt = true;
                            show_tips(data.Message, "返回重新选定");
                        }
                    }
                });
                if (flt) {
                    return false;
                }
            }

//            var deliveryMode = $('#dmode').val();

//            if (typeof (deliveryMode) == "undefined" || deliveryMode == "") {
//                alert("请选择配送方式。");
//                return;
//            }

//            $('#orderConfirmModel_PayMode').val(payMode);
//            $('#orderConfirmModel_DeliveryMode').val(deliveryMode);
//      
//            $('#orderConfirmModel_UserProvince').val($('#s_province option:selected').val());
//            $('#orderConfirmModel_UserCity').val($('#s_city option:selected').val());
//            $('#orderConfirmModel_UserArea').val($('#s_county option:selected').val());
//            $("#footer-btn-buy").next().show();
//            $("#footer-btn-buy").hide();

            //堆积数据
            var data = new Array();
            $("#table-useli .table_tr").each(function(s){
                data[s] = $.trim($(this).find("td").eq(0).text()) +"|"+  $.trim($(this).find("td").eq(1).text())  +"|"+  $.trim($(this).find("td").eq(2).text())  +"|"+  $.trim($(this).find("td").eq(3).text());
            });
            
            //票场次信息+票单价+购买数量 信息收集
            var datas = JSON.stringify(data);
            $("#data").val(datas);
            
            //快递送票地址数据收集
            $("#address_content span").each(function(s){
                switch(s){
                    case 0:
                        $("#pcasaddr").val($.trim($(this).eq(0).text()));
                        break;
                    case 1:
                        $("#true_phone").val($.trim($(this).eq(0).text()));
                        break;
                    case 2:
                        $("#zipcode").val($.trim($(this).eq(0).text()));
                        break;
                    case 3:
                        $("#true_name").val($.trim($(this).eq(0).text()));
                        break
                }
            });
            
            $('#form1').submit();
        }
//
//        var isl = 'False';
//          window.onload = function () {
//              if ($("#dmode").val() == 2) {
//                  $("#addrDiv").show();
//                  $("#tip-e-ticket").hide();
//                  $("#tip-kuaidi").show();
//                  $("#tip-shangmen").hide();
//                  $("#qupiaoren").show();
//              }
//              if ($("#dmode").val() == 3) {
//                  $("#addrDiv").hide();
//                  $("#tip-e-ticket").hide();
//                  $("#tip-kuaidi").hide();
//                  $("#tip-shangmen").show();
//                  $("#qupiaoren").show();
//              }
//              if ($("#dmode").val() == 4) {                  
//                  $("#addrDiv").hide();
//                  $("#tip-e-ticket").hide();
//                  $("#tip-kuaidi").hide();
//                  $("#tip-shangmen").hide();
//                  $("#qupiaoren").hide();
//              }
//              if (isl == 'True') {
//                  $('#sCode').hide();
//                  $('#securityCode').hide();
//              }
//              var ua = navigator.userAgent.toLowerCase();
//              if (ua.match(/MicroMessenger/i) == "micromessenger") {
//                  $("#zffs").hide();
//                  $("input[id='wechat-pay']").eq(0).attr("checked", "checked");
//                  $("input[id='wechat-pay']").eq(0).click();
//                  //return alert("微信环境" + $("input[id='wechat-pay']").eq(0).val());
//              } else {
//                  //return alert("非微信环境");
//                  //$("#wxin").hide();
//              }
//          }

//          function checkCardId(socialNo) { if (socialNo == "") { alert("输入身份证号码不能为空!"); return (false); } if (socialNo.length != 15 && socialNo.length != 18) { alert("输入身份证号码格式不正确!"); return (false); } var area = { 11: "北京", 12: "天津", 13: "河北", 14: "山西", 15: "内蒙古", 21: "辽宁", 22: "吉林", 23: "黑龙江", 31: "上海", 32: "江苏", 33: "浙江", 34: "安徽", 35: "福建", 36: "江西", 37: "山东", 41: "河南", 42: "湖北", 43: "湖南", 44: "广东", 45: "广西", 46: "海南", 50: "重庆", 51: "四川", 52: "贵州", 53: "云南", 54: "西藏", 61: "陕西", 62: "甘肃", 63: "青海", 64: "宁夏", 65: "新疆", 71: "台湾", 81: "香港", 82: "澳门", 91: "国外" }; if (area[parseInt(socialNo.substr(0, 2))] == null) { alert("身份证号码不正确(地区非法)!"); return (false); } if (socialNo.length == 15) { pattern = /^\d{15}$/; if (pattern.exec(socialNo) == null) { alert("15位身份证号码必须为数字！"); return (false); } var birth = parseInt("19" + socialNo.substr(6, 2)); var month = socialNo.substr(8, 2); var day = parseInt(socialNo.substr(10, 2)); switch (month) { case '01': case '03': case '05': case '07': case '08': case '10': case '12': if (day > 31) { alert('输入身份证号码不格式正确!'); return false; } break; case '04': case '06': case '09': case '11': if (day > 30) { alert('输入身份证号码不格式正确!'); return false; } break; case '02': if ((birth % 4 == 0 && birth % 100 != 0) || birth % 400 == 0) { if (day > 29) { alert('输入身份证号码不格式正确!'); return false; } } else { if (day > 28) { alert('输入身份证号码不格式正确!'); return false; } } break; default: alert('输入身份证号码不格式正确!'); return false; } var nowYear = new Date().getYear(); if (nowYear - parseInt(birth) < 15 || nowYear - parseInt(birth) > 100) { alert('输入身份证号码不格式正确!'); return false; } return (true); } var Wi = new Array(7, 9, 10, 5, 8, 4, 2, 1, 6, 3, 7, 9, 10, 5, 8, 4, 2, 1); var lSum = 0; var nNum = 0; var nCheckSum = 0; for (i = 0; i < 17; ++i) { if (socialNo.charAt(i) < '0' || socialNo.charAt(i) > '9') { alert("输入身份证号码格式不正确!"); return (false); } else { nNum = socialNo.charAt(i) - '0'; } lSum += nNum * Wi[i]; } if (socialNo.charAt(17) == 'X' || socialNo.charAt(17) == 'x') { lSum += 10 * Wi[17]; } else if (socialNo.charAt(17) < '0' || socialNo.charAt(17) > '9') { alert("输入身份证号码格式不正确!"); return (false); } else { lSum += (socialNo.charAt(17) - '0') * Wi[17]; } if ((lSum % 11) == 1) { return true; } else { alert("输入身份证号码格式不正确!"); return (false); } }
</script>
    
</body>
</html>