<!DOCTYPE html>
<!-- saved from url=(0042)http://m.wpiao.cn/TicketOrder/OrderConfirm -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>确认订单</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <link href="./css/mobile.css" rel="stylesheet">
    <link href="./css/reset.css" rel="stylesheet">
    <link href="./css/tips.css" rel="stylesheet">
    <script language="javascript" type="text/javascript" src="./js/jquery.min.js"></script>
    <script language="javascript" type="text/javascript" src="./js/my.js"></script>
    <script src="./js/jquery.validate.js"></script>
    <script src="./js/tips.js"></script>
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
            <h2>碧水湾温泉度假村</h2>
                  <h3>时间：有效期至2017年5月3日</h3>

           
            
          
                  <h3>出游日期：2017-03-21</h3>
            <h3>
                    景点地址：
                广州市从化市流溪温泉旅游度假区良口
          
            </h3>

            <table border="1" width="100%" style="border:1px solid #e6e6e6;text-align:center;margin:20px 0" cellpadding="10" id="table-useli">

                <tbody><tr style="background-color:#f3f3f3">
                         <th>商品信息</th>
                         <th>价格</th>
                    <th>数量 </th>
                </tr>
                         <tr>
                            <td>95元(儿童票周一至周五)   </td>
                            <td class="li-num">95.00  </td>
                            <td>1 </td>
                        </tr>
            </tbody></table>
        </div>
        <div class="delivery-type-section">
            <div><span class="one"></span> <span class="two">配送方式</span></div>
            <div class="circle-contain">
                <div>
                    <input type="radio" name="deli-type" id="deli-e-ticket" style="display:none" value="电子票">
                    <label class="delivery-cirlce" style="left:25%;background-image:url(./images/dianzip.png)" for="deli-e-ticket"></label>
                    <label class="delivery-cirlce-red" style="left:25%;background-image:url(./images/dianzip-red.png);display:block"></label>
                    <span class="delivery-cirlce-text delivery-cirlce-text-actived" style="left:25%">电子票</span>

                    <input type="radio" name="deli-type" id="deli-kuaidi" style="display:none" value="快递">
                    <label id="deli-kuaidi-label" class="delivery-cirlce" style="left:50%;background-image:url(./images/kuaidi.png)" for="deli-kuaidi"></label>
                    <label class="delivery-cirlce-red" style="left: 50%; background-image: url(./images/kuaidi-red.png); display: none"></label>
                    <span class="delivery-cirlce-text" style="left:52%">快递</span>
                    
                    <input type="radio" name="deli-type" id="deli-shangmen" style="display:none" value="上门取票">
                    <label class="delivery-cirlce" style="left:75%;background-image:url(./images/tongcheng.png)" for="deli-shangmen"></label>
                    <label class="delivery-cirlce-red" style="left:75%;background-image:url(./images/tongcheng-red.png)"></label>
                    <span class="delivery-cirlce-text" style="left:73%">上门取票</span>
                </div>
            </div>
            <div>
                <form id="form1" action="http://m.wpiao.cn/TicketOrder/OrderConfirm" method="post">
                    <input id="orderConfirmModel_PerformName" name="orderConfirmModel.PerformName" type="hidden" value="56Kn5rC05rm+5rip5rOJ5bqm5YGH5p2R">
                    <input id="orderConfirmModel_PerformTime" name="orderConfirmModel.PerformTime" type="hidden" value="有效期至2017年5月3日">
                    <input id="orderConfirmModel_PerformAddress" name="orderConfirmModel.PerformAddress" type="hidden" value="5bm/5bee5biC5LuO5YyW5biC5rWB5rqq5rip5rOJ5peF5ri45bqm5YGH5Yy66Imv5Y+j">
                    <input id="orderConfirmModel_TicketInfo" name="orderConfirmModel.TicketInfo" type="hidden" value="[{&quot;ID&quot;:&quot;15811&quot;,&quot;TicketTime&quot;:&quot;有效期至2017年5月3日&quot;,&quot;TicketName&quot;:&quot;95元(儿童票周一至周五)&quot;,&quot;TicketPrice&quot;:&quot;95.00&quot;,&quot;TicketCount&quot;:&quot;1&quot;,&quot;IsIdCard&quot;:&quot;False&quot;}]">
                    <input id="orderConfirmModel_playdate" name="orderConfirmModel.playdate" type="hidden" value="2017-03-21">
                    <input id="orderConfirmModel_DeliveryMode" name="orderConfirmModel.DeliveryMode" type="hidden" value="1">
                    <input id="orderConfirmModel_PayMode" name="orderConfirmModel.PayMode" type="hidden" value="">
                    <input id="orderConfirmModel_PerformID" name="orderConfirmModel.PerformID" type="hidden" value="2167">
                    <input id="orderConfirmModel_TotalPrice" name="orderConfirmModel.TotalPrice" type="hidden" value="95.00">
                    <input id="orderConfirmModel_SeatOrderID" name="orderConfirmModel.SeatOrderID" type="hidden" value="">
                    <input id="orderConfirmModel_SeatNewOrderID" name="orderConfirmModel.SeatNewOrderID" type="hidden" value="">
                    <input id="orderConfirmModel_ordernum" name="orderConfirmModel.ordernum" type="hidden" value="">
                    <input id="orderConfirmModel_evencode" name="orderConfirmModel.evencode" type="hidden" value="">
                    <input id="orderConfirmModel_ordercode" name="orderConfirmModel.ordercode" type="hidden" value="">
                    <input id="orderConfirmModel_provinceCode" name="orderConfirmModel.provinceCode" type="hidden" value="">
                    <input id="orderConfirmModel_cityCode" name="orderConfirmModel.cityCode" type="hidden" value="">
                    <input id="orderConfirmModel_areaCode" name="orderConfirmModel.areaCode" type="hidden" value="">
                    <input id="orderConfirmModel_rulecode" name="orderConfirmModel.rulecode" type="hidden" value="">
                    <input id="orderConfirmModel_rulename" name="orderConfirmModel.rulename" type="hidden" value="">               
                    <input id="orderConfirmModel_seatedversion" name="orderConfirmModel.seatedversion" type="hidden" value="">
                    <input id="orderConfirmModel_sign" name="orderConfirmModel.sign" type="hidden" value="">
                    <input id="orderConfirmModel_returnId" name="orderConfirmModel.returnId" type="hidden" value="">
                    <input type="hidden" value="1" id="dmode" name="dmode">


                    <div style="margin:10px 0" class="clearfix" id="qupiaoren">
                        <span class="input-header">取票人</span>  <input id="orderConfirmModel_UserName" name="orderConfirmModel.UserName" type="text" value="">
                    </div>
                       
                    <div style="margin:10px 0" class="clearfix">
                        <span class="input-header">手机号</span>  <input id="orderConfirmModel_UserPhone" name="orderConfirmModel.UserPhone" style="width:45%" type="text" value="">
                            <input id="securityCode" class="get-verify-code" value="获取验证码" type="button">
                    </div>

                        <div id="sCode" style="margin:10px 0" class="clearfix">
                            <span class="input-header">验证码</span>  <input id="orderConfirmModel_SecurityCode" name="orderConfirmModel.SecurityCode" type="text" value="">
                        </div>
                        <div id="addrDiv" style="display:none" class="clearfix">
                        <div id="area" style="margin: 0;" class="clearfix">
                            <span class="input-header">地址</span>                          
                            <div id="addArea">
<div class="infoo">
    <div>
        <select id="s_province" name="s_province">
                    <option value="0000008898">广西区</option>
                    <option value="0000009036">北京市</option>
                    <option value="0000009057">天津市</option>
                    <option value="0000009078">河北省</option>
                    <option value="0000009273">山西省</option>
                    <option value="0000009415">内蒙古区</option>
                    <option value="0000009537">辽宁省</option>
                    <option value="0000009666">吉林省</option>
                    <option value="0000009744">黑龙江省</option>
                    <option value="0000009900">上海市</option>
                    <option value="0000009922">江苏省</option>
                    <option value="0000010055">浙江省</option>
                    <option value="0000010168">安徽省</option>
                    <option value="0000010308">福建省</option>
                    <option value="0000010412">江西省</option>
                    <option value="0000010534">山东省</option>
                    <option value="0000010709">河南省</option>
                    <option value="0000010903">湖北省</option>
                    <option value="0000011032">湖南省</option>
                    <option value="0000011182">广东省</option>
                    <option value="0000011344">海南省</option>
                    <option value="0000011373">重庆市</option>
                    <option value="0000011417">四川省</option>
                    <option value="0000011638">贵州省</option>
                    <option value="0000011739">云南省</option>
                    <option value="0000011893">西藏区</option>
                    <option value="0000011975">陕西省</option>
                    <option value="0000012103">甘肃省</option>
                    <option value="0000012216">青海省</option>
                    <option value="0000012269">宁夏区</option>
                    <option value="0000012301">新疆区</option>
                    <option value="0000012418">台湾省</option>
                    <option value="0000012419">香港特区</option>
                    <option value="0000012420">澳门特区</option>
        </select>
        <select id="s_city" name="s_city">
                    <option value="0000008899">南宁市</option>
                    <option value="0000008913">柳州市</option>
                    <option value="0000008925">桂林市</option>
                    <option value="0000008944">梧州市</option>
                    <option value="0000008953">北海市</option>
                    <option value="0000008959">防城港市</option>
                    <option value="0000008965">钦州市</option>
                    <option value="0000008971">贵港市</option>
                    <option value="0000008978">玉林市</option>
                    <option value="0000008986">百色市</option>
                    <option value="0000009000">贺州市</option>
                    <option value="0000009006">河池市</option>
                    <option value="0000009019">来宾市</option>
                    <option value="0000009027">崇左市</option>
        </select>
        <select id="s_county" name="s_county">
                    <option value="0000008900">市辖区</option>
                    <option value="0000008901">兴宁区</option>
                    <option value="0000008902">青秀区</option>
                    <option value="0000008903">江南区</option>
                    <option value="0000008904">西乡塘区</option>
                    <option value="0000008905">良庆区</option>
                    <option value="0000008906">邕宁区</option>
                    <option value="0000008907">武鸣县</option>
                    <option value="0000008908">隆安县</option>
                    <option value="0000008909">马山县</option>
                    <option value="0000008910">上林县</option>
                    <option value="0000008911">宾阳县</option>
                    <option value="0000008912">横县</option>
        </select>
    </div>
</div>

<script>
    $(document).ready(function () {
        var city_Text;//地址城市
        var current_city = $("#orderConfirmModel_PerformCity").val(); //定位城市
        var et_total_num = parseFloat($("#et-total-num").text()); //不含快递价格
        var kd = 10.00;

        $('#s_province').change(function () {
            $.ajax({
                url: "/Account/AddressSelect?province=" + $(this).children('option:selected').val() + "&ua=addArea" + "&view=AddressSelectInOrder",
                async: false,
                type: 'GET',
                success: function (data) {
                    $("#addArea").html(data);
                }
            });
            
            city_Text = $('#s_city').find("option:selected").text().replace("市", "");
            if (current_city == city_Text) {
                //kuaidi_total_num = fmoney(et_total_num + 10);
                kuaidi_total_num = fmoney(et_total_num  );
            }
            else {
                //kuaidi_total_num = fmoney(et_total_num + 20);
                //kd = 20.00;

                kuaidi_total_num = fmoney(et_total_num );
                kd = 0.00;
            }
            //$("#kuaidi-total-num").text("¥ " + kuaidi_total_num + " 元 (含快递费：" + kd + ")");
            $(".kuaidi-total-Money").text(kuaidi_total_num);
            $("#orderConfirmModel_TotalPrice").val(kuaidi_total_num);
            //$("#orderConfirmModel_deliverPrice").val(kd);

        })

        $('#s_city').change(function () {
            var p = $("#s_province").val();
            $.ajax({
                url: "/Account/AddressSelect?province=" + p + "&city=" + $(this).children('option:selected').val() + "&pid=s_province" + "&cid=s_city" + "&aid=s_county" + "&ua=addArea" + "&view=AddressSelectInOrder",
                async: false,
                type: 'GET',
                success: function (data) {
                    $("#addArea").html(data);
                }
            });
           
            city_Text = $(this).find("option:selected").text().replace("市", "");
            if (current_city == city_Text) {
                //kuaidi_total_num = fmoney(et_total_num + 10);
                kuaidi_total_num = fmoney(et_total_num  );
            }
            else {
                //kuaidi_total_num = fmoney(et_total_num + 20);
                //kd = 20.00;
                kuaidi_total_num = fmoney(et_total_num  );
                kd =  0.00;
            }
            //$("#kuaidi-total-num").text("¥ " + kuaidi_total_num + " 元 (含快递费：" + kd + ")");
            $(".kuaidi-total-Money").text(kuaidi_total_num);
            $("#orderConfirmModel_TotalPrice").val(kuaidi_total_num);
            //$("#orderConfirmModel_deliverPrice").val(kd);
        })
        //alert($('#s_city').find("option:selected").text().replace("市", "") +"--"+ $("#orderConfirmModel_PerformCity").val())
        //if ($('#s_city').find("option:selected").text().replace("市", "") == $("#orderConfirmModel_PerformCity").val()) {
        //    $("#kuaidi-total-num").text("¥ " + (et_total_num + 10) + " 元 (含运费 10.00)");
        //} else {
        //    $("#kuaidi-total-num").text("¥ " + (et_total_num + 20) + " 元 (含运费 20.00)");
        //}
    })
</script>
                            </div>
                            <input id="orderConfirmModel_UserProvince" name="orderConfirmModel.UserProvince" type="hidden" value="">
                            <input id="orderConfirmModel_UserCity" name="orderConfirmModel.UserCity" type="hidden" value="">
                            <input id="orderConfirmModel_UserArea" name="orderConfirmModel.UserArea" type="hidden" value="">      
                        </div>
                        <div id="addr" style="margin:10px 0;" class="clearfix">
                            <span class="input-header" style="width:60px">详细地址</span>  <input id="orderConfirmModel_UserAddress" name="orderConfirmModel.UserAddress" style="width:70%" type="text" value="">
                        </div>
                        </div>
                </form>
            </div>
            <p class="warm-tips" id="tip-e-ticket">
                温馨提示：电子票为系统直接发送购买商品信息到客户手机,客户可凭有效电子票信息到现场兑换商品,或根据现场指导直接检验电子票入场。 
            </p>
            <p class="warm-tips" id="tip-kuaidi" style="display:none"><!--温馨提示：同城快递收取10元快递费，非同城快递20元。--></p>
            <p class="warm-tips" id="tip-shangmen" style="display:none">
                取票地址：广州市越秀区广州大道北新达城广场北座1003室
            </p>
        </div>
                <div class="pay-type-section" id="zffs">
                    <div><span class="one"></span> <span class="two">支付方式</span></div>

                    <div class="pay-type-item" id="wxin" style="display: none;">
                        <label class="pay-type-label" for="wechat-pay" style="margin-top: 10px;" status="uncheck"></label>
                        <input type="radio" name="pay" id="wechat-pay" value="微信支付">
                        <span class="pay-icon" style="background-image:url(./images/wechat.png)"></span>
                        <span class="pay-type-text">微信支付</span>
                    </div>
                    <div class="pay-type-item" id="zfb">
                        <label class="pay-type-label" for="ali-pay" style="margin-top: 10px; margin-left: 12px;" status="uncheck"></label>
                        <input type="radio" name="pay" id="ali-pay" value="支付宝">
                        <span class="pay-icon" style="background-image:url(./images/ali.png)"></span>
                        <span class="pay-type-text">支付宝</span>
                    </div>                  
                </div>
        <div class="total-section">

            <div class="total-section-item clearfix">
                <span class="fl">合计</span>
                <span class="fr total-money">¥<span class="kuaidi-total-Money">95.00</span> 元</span>
            </div>
        </div>

        <div style="height:40px"></div>
    </div>
    <div id="footer">
        <span style="color:#333;font-size:18px">应付：</span>
                        <span class="total-money" style="line-height: 50px; display: none;" id="et-total">¥<span id="et-total-num">95.00</span> 元 </span>
                     <span class="total-money" style="line-height: 50px;" id="kuaidi-total">¥<span id="kuaidi-total-num">95.00</span> 元</span>

            <div class="footer-btn" onclick="clickSum(1)" id="footer-btn-buy">立即支付</div>
            <div class="footer-btn" style="display: none; background-color: gray">立即支付</div>
    </div>
    <input value="1" style="display:none" id="deliveryTypeId">
    <input type="text" value="广州" id="current_city" style="display:none">
    <script type="text/javascript">




        var city_Text; //地址城市
        var current_city = $("#current_city").val(); //定位城市
        var kuaidi_total_num; // 快递方式总价

        var ispayagain = false;

        $(function () {
            if ($("#deliveryTypeId").val() == 4) {
                $("#qupiaoren").hide();
                $("#tip-e-ticket").show();
                $("#tip-kuaidi").hide();
                $("#tip-shangmen").hide();
                $("#addrDiv").hide();
            }
            if ($("#deliveryTypeId").val() == 3) {
                $("#qupiaoren").show();
                $("#tip-e-ticket").hide();
                $("#tip-kuaidi").hide();
                $("#tip-shangmen").show();
                $("#addrDiv").hide();
            }
            if ($("#deliveryTypeId").val() == 2) {
                $("#qupiaoren").show();
                $('#deli-kuaidi-label').trigger("click");
                $('#addr').show(); $("#addrDiv").show();
                $('#dmode').val(2);
                var et_total_num = parseFloat($("#et-total-num").text()); //不含快递价格
         
                var kd =  0.00;
                var uc = $("#orderConfirmModel_UserCity").val().replace("市", "");
                if ($("#current_city").val() == uc) {
                } else {
          
                    var kd = 0.00;
                }
                $("#tip-e-ticket").hide();
                $("#tip-kuaidi").show();
                $("#tip-shangmen").hide();
                var kuaidi_total_num = fmoney(et_total_num + kd) ;
                $('#orderConfirmModel_deliverPrice').val(fmoney(kd));
          
                $("#kuaidi-total-num").text(kuaidi_total_num);
                $(".kuaidi-total-Money").text(kuaidi_total_num);
                $("#orderConfirmModel_TotalPrice").val(kuaidi_total_num);
            }
            $("#s_city").change(function () {
                var city_Text;//地址城市
                var current_city = $("#current_city").val(); //定位城市
                var et_total_num = parseFloat($("#et-total-num").text()); //不含快递价格
                city_Text = $(this).find("option:selected").text().replace("市", "");
            
                var kd = 0.00;
                if (current_city == city_Text) {
         
                    kuaidi_total_num = et_total_num;
                }
                else {
            
                    kuaidi_total_num = et_total_num ;
                    kd = 0;
                }
                kuaidi_total_num = fmoney(kuaidi_total_num);
            
                $('#orderConfirmModel_deliverPrice').val(fmoney(kd));
                $("#kuaidi-total-num").text(kuaidi_total_num);
                $(".kuaidi-total-Money").text(kuaidi_total_num);
                $("#orderConfirmModel_TotalPrice").val(kuaidi_total_num);
            });
            $("#et-total").show();
            $("#kuaidi-total").hide();
            $("#et-total").hide();
            $("#kuaidi-total").show();
        });

          function clickSum(ispay) {

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
                var pattern = /^\d{6}$/;
                if (!pattern.test($("#orderConfirmModel_SecurityCode").val())) {
                    alert("请输入正确的验证码");
                    return false;
                }
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

            if (ispay == 1) {
                if (typeof (payMode) == "undefined") {
                    alert("请选择支付方式。");
                    return;
                }
            }
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


            var deliveryMode = $('#dmode').val();

            if (typeof (deliveryMode) == "undefined" || deliveryMode == "") {
                alert("请选择配送方式。");
                return;
            }

            
            
            $('#orderConfirmModel_PayMode').val(payMode);
            $('#orderConfirmModel_DeliveryMode').val(deliveryMode);
      
            $('#orderConfirmModel_UserProvince').val($('#s_province option:selected').val());
            $('#orderConfirmModel_UserCity').val($('#s_city option:selected').val());
            $('#orderConfirmModel_UserArea').val($('#s_county option:selected').val());
            $("#footer-btn-buy").next().show();
            $("#footer-btn-buy").hide();
            $('#form1').submit();
        }

        var isl = 'False';
          window.onload = function () {
              if ($("#dmode").val() == 2) {
                  $("#addrDiv").show();
                  $("#tip-e-ticket").hide();
                  $("#tip-kuaidi").show();
                  $("#tip-shangmen").hide();
                  $("#qupiaoren").show();
              }
              if ($("#dmode").val() == 3) {
                  $("#addrDiv").hide();
                  $("#tip-e-ticket").hide();
                  $("#tip-kuaidi").hide();
                  $("#tip-shangmen").show();
                  $("#qupiaoren").show();
              }
              if ($("#dmode").val() == 4) {                  
                  $("#addrDiv").hide();
                  $("#tip-e-ticket").hide();
                  $("#tip-kuaidi").hide();
                  $("#tip-shangmen").hide();
                  $("#qupiaoren").hide();
              }
              if (isl == 'True') {
                  $('#sCode').hide();
                  $('#securityCode').hide();
              }
              var ua = navigator.userAgent.toLowerCase();
              if (ua.match(/MicroMessenger/i) == "micromessenger") {
                  $("#zffs").hide();
                  $("input[id='wechat-pay']").eq(0).attr("checked", "checked");
                  $("input[id='wechat-pay']").eq(0).click();
                  //return alert("微信环境" + $("input[id='wechat-pay']").eq(0).val());
              } else {
                  //return alert("非微信环境");
                  $("#wxin").hide();
              }
          }

          function checkCardId(socialNo) { if (socialNo == "") { alert("输入身份证号码不能为空!"); return (false); } if (socialNo.length != 15 && socialNo.length != 18) { alert("输入身份证号码格式不正确!"); return (false); } var area = { 11: "北京", 12: "天津", 13: "河北", 14: "山西", 15: "内蒙古", 21: "辽宁", 22: "吉林", 23: "黑龙江", 31: "上海", 32: "江苏", 33: "浙江", 34: "安徽", 35: "福建", 36: "江西", 37: "山东", 41: "河南", 42: "湖北", 43: "湖南", 44: "广东", 45: "广西", 46: "海南", 50: "重庆", 51: "四川", 52: "贵州", 53: "云南", 54: "西藏", 61: "陕西", 62: "甘肃", 63: "青海", 64: "宁夏", 65: "新疆", 71: "台湾", 81: "香港", 82: "澳门", 91: "国外" }; if (area[parseInt(socialNo.substr(0, 2))] == null) { alert("身份证号码不正确(地区非法)!"); return (false); } if (socialNo.length == 15) { pattern = /^\d{15}$/; if (pattern.exec(socialNo) == null) { alert("15位身份证号码必须为数字！"); return (false); } var birth = parseInt("19" + socialNo.substr(6, 2)); var month = socialNo.substr(8, 2); var day = parseInt(socialNo.substr(10, 2)); switch (month) { case '01': case '03': case '05': case '07': case '08': case '10': case '12': if (day > 31) { alert('输入身份证号码不格式正确!'); return false; } break; case '04': case '06': case '09': case '11': if (day > 30) { alert('输入身份证号码不格式正确!'); return false; } break; case '02': if ((birth % 4 == 0 && birth % 100 != 0) || birth % 400 == 0) { if (day > 29) { alert('输入身份证号码不格式正确!'); return false; } } else { if (day > 28) { alert('输入身份证号码不格式正确!'); return false; } } break; default: alert('输入身份证号码不格式正确!'); return false; } var nowYear = new Date().getYear(); if (nowYear - parseInt(birth) < 15 || nowYear - parseInt(birth) > 100) { alert('输入身份证号码不格式正确!'); return false; } return (true); } var Wi = new Array(7, 9, 10, 5, 8, 4, 2, 1, 6, 3, 7, 9, 10, 5, 8, 4, 2, 1); var lSum = 0; var nNum = 0; var nCheckSum = 0; for (i = 0; i < 17; ++i) { if (socialNo.charAt(i) < '0' || socialNo.charAt(i) > '9') { alert("输入身份证号码格式不正确!"); return (false); } else { nNum = socialNo.charAt(i) - '0'; } lSum += nNum * Wi[i]; } if (socialNo.charAt(17) == 'X' || socialNo.charAt(17) == 'x') { lSum += 10 * Wi[17]; } else if (socialNo.charAt(17) < '0' || socialNo.charAt(17) > '9') { alert("输入身份证号码格式不正确!"); return (false); } else { lSum += (socialNo.charAt(17) - '0') * Wi[17]; } if ((lSum % 11) == 1) { return true; } else { alert("输入身份证号码格式不正确!"); return (false); } }
</script>
    


</body></html>