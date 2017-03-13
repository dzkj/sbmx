<?php  
  
    $appid = "wx8818d44923e4cefd";  
    $url = 'https://open.weixin.qq.com/connect/oauth2/authorize?appid='.$appid.'&redirect_uri=http%3a%2f%2fwww.zui-shi-dai.com%2fwxlogin%2ffn_callback.php&response_type=code&scope=snsapi_userinfo&state=STATE#wechat_redirect';  
    header("Location:".$url);  
  
?>  