<?php
/**
* 	配置账号信息
*/

class WxPayConf_pub
{

    //=======【基本信息设置】=====================================
    //微信公众号身份的唯一标识。审核通过后，在微信发送的邮件中查看
    const APPID = 'wx8818d44923e4cefd';
    //受理商ID，身份标识
    const MCHID = '1380961502';
    //商户支付密钥Key。审核通过后，在微信发送的邮件中查看
    const KEY = 'zuishidai66666666666666666666666';
    //JSAPI接口中获取openid，审核后在公众平台开启开发模式后可查看
    const APPSECRET = '16328ce5c08d094b1907d2122feb1581';
    
    //=======【证书路径设置】=====================================
    //证书路径,注意应该填写绝对路径
    const SSLCERT_PATH = '';
    const SSLKEY_PATH = '';
    
    //=======【异步通知url设置】===================================
    //异步通知url，商户根据实际开发过程设定
    const NOTIFY_URL = 'http://www.zui-shi-dai.com/index.php/Index/index/notify';
    
    //=======【curl超时设置】===================================
    //本例程通过curl使用HTTP POST方法，此处可修改其超时时间，默认为30秒
    const CURL_TIMEOUT = 30;
    
}
	
?>