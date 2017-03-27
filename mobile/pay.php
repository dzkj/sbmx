<?php
session_start();
include "connect.inc";
header("content-type:text/html;charset=utf-8;");


include('./WxPayPubHelper/WxPayPubHelper.php');
//使用jsapi接口
$jsApi = new \JsApi_pub();
//=========步骤1：网页授权获取用户openid============
//通过code获得openid  
if(!isset($_GET['code'])){
    //触发微信返回code码
    $loginurl = urlencode('http://' . $_SERVER['HTTP_HOST'] . "/pay.php?id=" . $_GET['id']);
    $url = $jsApi->createOauthUrlForCode($loginurl);
    Header("Location:" . $url);
}else{
    //获取code码，以获取openid
    $code = $_GET['code'];
    $jsApi->setCode($code);
    $openid = $jsApi->getOpenId();
}

//这里连接数据库查询出数据价格单号等
$msg = M("orders")->where("order_id=" . $_GET['id'])->find();


//=========步骤2：使用统一支付接口，获取prepay_id============
//使用统一支付接口
$unifiedOrder = new \UnifiedOrder_pub();

//设置统一支付接口参数
//设置必填参数
//appid已填,商户无需重复填写
//mch_id已填,商户无需重复填写
//noncestr已填,商户无需重复填写
//spbill_create_ip已填,商户无需重复填写
//sign已填,商户无需重复填写
$unifiedOrder->setParameter("openid", "$openid"); //商品描述
$unifiedOrder->setParameter("body", "世博马戏"); //商品描述
//自定义订单号，此处仅作举例
$unifiedOrder->setParameter("out_trade_no", $msg['order_id']); //商户订单号 
$unifiedOrder->setParameter("total_fee", ($msg['order_amount']) * 100); //总金额
$unifiedOrder->setParameter("notify_url", \WxPayConf_pub::NOTIFY_URL); //通知地址 
$unifiedOrder->setParameter("trade_type", "JSAPI"); //交易类型
//非必填参数，商户可根据实际情况选填
//$unifiedOrder->setParameter("sub_mch_id","XXXX");//子商户号  
//$unifiedOrder->setParameter("device_info","XXXX");//设备号 
//$unifiedOrder->setParameter("attach","XXXX");//附加数据 
//$unifiedOrder->setParameter("time_start","XXXX");//交易起始时间
//$unifiedOrder->setParameter("time_expire","XXXX");//交易结束时间 
//$unifiedOrder->setParameter("goods_tag","XXXX");//商品标记 
//$unifiedOrder->setParameter("openid","XXXX");//用户标识
//$unifiedOrder->setParameter("product_id","XXXX");//商品ID


$prepay_id = $unifiedOrder->getPrepayId();
//=========步骤3：使用jsapi调起支付============
$jsApi->setPrepayId($prepay_id);
$jsApiParameters = $jsApi->getParameters();
//$orderno = $msg['order_id'];
//$this->assign('orderno',$orderno);
//$this->assign('jsApiParameters',$jsApiParameters);
?>

<html>
    <head>
        <meta charset="utf-8">
        <link rel="icon" href="favicon.png" type="image/x-icon">
        <link rel="shortcut icon" href="favicon.png" type="image/x-icon">
        <title>在线支付</title>
        <!--<script src="__PUBLIC__/Weixin/jquery-1.7.1.min.js"></script>-->
        <script src="./Weixin/jquery.min.js"></script>
        <script type="text/javascript">
            $(function(){
                callpay();
            });
            //调用微信JS api 支付
            function jsApiCall(){
                WeixinJSBridge.invoke(
                        'getBrandWCPayRequest',
                        <?php echo $jsApiParameters; ?>,
                        function(res) {
                            WeixinJSBridge.log(res.err_msg);
                            //alert(res.err_code+res.err_desc+res.err_msg);
                            if (res.err_msg == "get_brand_wcpay_request:ok") {
                                alert("支付成功");
                                WeixinJSBridge.call('closeWindow');
                                //location.href="http://www.zui-shi-dai.com/index.php/Index/user_already";
                            } else {
                                alert("支付失败");
                                WeixinJSBridge.call('closeWindow');
                                //window.location.href="http://www.zui-shi-dai.com";
                            }
                        }
                );
            }
            function callpay(){
                if (typeof WeixinJSBridge == "undefined") {
                    if (document.addEventListener) {
                        document.addEventListener('WeixinJSBridgeReady', jsApiCall, false);
                    } else if (document.attachEvent) {
                        document.attachEvent('WeixinJSBridgeReady', jsApiCall);
                        document.attachEvent('onWeixinJSBridgeReady', jsApiCall);
                    }
                } else {
                    jsApiCall();
                }
            }
        </script>
    </head>
    <body>
    </body>
</html>
