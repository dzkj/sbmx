<!DOCTYPE html>
<!-- saved from url=(0052)http://m.wpiao.cn/Account/OrderDetails?oid=23973&t=1 -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>《南国炫技—快乐星期六》</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <link href="./css/mobile.css" rel="stylesheet">
    <link href="./css/reset.css" rel="stylesheet">
    <script language="javascript" type="text/javascript" src="./js/jquery.min.js"></script>
    <script language="javascript" type="text/javascript" src="./js/my.js"></script>
</head>
<body>

    <div id="header" style="position:fixed">

        <a href="javascript:history.back();"><span class="return"></span></a>
        <span>《南国炫技—快乐星期六》</span>
    </div>
        <div class="time-out-layout" style="display: block;">
            <div class="time-out time-rest">
                <span class="clock-icon">.</span>
                <span>剩余支付时间<em class="time-num" id="minute_show"><s></s>20</em>分<em class="time-num" id="second_show"><s></s>14</em>秒</span>
            </div>
        </div>
    <div style="height:45px"></div>
    <div class="main">
        <div class="od-section-1">
            <h4>姓名：张先生 </h4>
            <h4>手机号：15069098960 </h4>
                <h4>收货地址：广西区 南宁市 市辖区    </h4>

                <div class="od-show clearfix">
                        <img src="./images/2016100903410791.jpg" class="fl od-show-pic">
                    <a href="http://m.wpiao.cn/Project/ProjectDetails?id=1972&amp;flt=">
                        <p>
                            《南国炫技—快乐星期六》
                        </p>
                    </a>
                        <p>时间：2017-03-18 20:00</p>

                        <p>70.00 x 1</p>
                </div>
        </div>
        <div class="od-product-detail-section">
            <h3>产品详情</h3>
                <h4>地址：广西杂技剧场</h4>

            <h4>商家：微票</h4>
                <h4>
                    商品信息：
70元（原价90）                </h4>

            <h3>订单详情</h3>
            <h4>订单号 <span class="fr">195881501720</span></h4>
            <h4>下单时间 <span class="fr">2017-03-17 11:31:41</span></h4>



            <h4>实付款 <span class="fr">￥ 70.00</span></h4>
            <h4>订单状态 <span class="fr">待付款</span></h4>
        </div>

            <form id="form1" action="http://m.wpiao.cn/TicketOrder/OrderPay" method="post">
                <div class="pay-type-section" style="margin-bottom:0" id="zffs">
                    <div><span class="one"></span> <span class="two">支付方式</span></div>

                    <div class="pay-type-item" id="wxin" style="display: block;">
                        <label class="pay-type-label" for="wechat-pay" style="margin-top:10px" status="uncheck"></label>
                        <input type="radio" name="pay" id="wechat-pay" value="微信支付">
                        <span class="pay-icon" style="background-image:url(../../Images/wechat.png)"></span>
                        <span class="pay-type-text">微信支付</span>
                    </div>

                </div>
                <input type="hidden" id="PayMode" name="PayMode">
                <input type="hidden" id="OrderID" name="OrderID" value="23973">
            </form>
    </div>
        <script type="text/javascript">
            function updateOrder() {
                $.ajax({
                    url: "../TicketOrder/CancelOrder?OrderID=" + '195881501720',
                    async: false,
                    type: 'POST',
                    success: function (data) {
                        if (data.indexOf("Success")) {
                            location.reload();
                        }
                    }
                });
            }
        </script>
            <div style="height:80px;background-color:white"></div>
        <div id="od-footer">
            <ul class="od-footer-bar">
                <a href="http://m.wpiao.cn/TicketOrder/CancelOrder?OrderID=195881501720"><li>取消订单</li></a>
                    <li class="od-footer-bar-li-actived" onclick="clickSum()" id="footer-btn-buy">立即付款</li>
                    <li class="footer-btn" style="display:none;background-color:gray">立即付款</li>
            </ul>
        </div>
        <script>
            $(function () {
                $("#footer-btn-buy").click(function () {
                    $(this).next().show();
                    $(this).hide();
                })
            })
            function clickSum() {
                var payMode = $('.pay-type-section input[name="pay"]:checked ').val();
                $('#PayMode').val(payMode);
                $('#form1').submit();
            }

        </script>
    <script type="text/javascript">
        window.onload = function () {
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

            var ltime = parseInt('1443');
            if (ltime > 0 && ltime <= 1500 && 'False' == "False") {
                $(".time-out-layout").css("display", "block");
                timer(ltime);
            }
            else {
                $(".time-out-layout").css("display", "none");
                updateOrder();
            }
            if ($('#identifyingCode').length > 0) {
                $('#identifyingCode').html($('#identifyingCode').html().replace(/\s/g, '').replace(/(\d{4})(?=\d)/g, "$1 ")); //替换空格前4位数字为4位数字加空格
            }
        }

        function updateOrder() {

        }

        function timer(intDiff) {
            var sid = window.setInterval(function () {
                var day = 0,
                    hour = 0,
                    minute = 0,
                    second = 0;//默认值
                if (intDiff > 0) {
                    day = Math.floor(intDiff / (60 * 60 * 24));
                    hour = Math.floor(intDiff / (60 * 60)) - (day * 24);
                    minute = Math.floor(intDiff / 60) - (day * 24 * 60) - (hour * 60);
                    second = Math.floor(intDiff) - (day * 24 * 60 * 60) - (hour * 60 * 60) - (minute * 60);
                }
                if (minute <= 9) minute = '0' + minute;
                if (second <= 9) second = '0' + second;
                $('#day_show').html(day);
                $('#hour_show').html('<s id="h"></s>' + hour);
                $('#minute_show').html('<s></s>' + minute);
                $('#second_show').html('<s></s>' + second);
                if (minute == "00" && second == "00") {
                    clearInterval(sid);
                    updateOrder();
                }
                intDiff--;
            }, 1000);
        }
    </script>

</body></html>