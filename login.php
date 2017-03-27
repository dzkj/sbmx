<?php
	session_start();
	include_once("include/conn.inc.php");
?>
<!DOCTYPE html>
<html xmlns=""><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="stylesheet" href="css/reset.css">
<link rel="stylesheet" href="css/login.css">
<title>永乐票务统一认证中心</title>
<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
<script>

        function check()
        {
            var isok = true;
			if ($("#username").val() == "") {
                alert("请输入手机号");
                return false;
            }
			 if ($("#password").val() == "") {
                alert("请输入密码");
                return false;
            }
	    return isok;
        }
</script>
</head>
<body>
	<div style="margin-bottom:10px;"></div>
	<?php
	include_once("include/header.php");
	?>	
<div class="login-cont">
<div class="login-cont-left">
	<?php
			$banner_sql="select * from banners where banner_type='pc' limit 0,1";
			$banner_result=mysqli_query($link,$banner_sql);
			while($banner_row=mysqli_fetch_array($banner_result)){
		?>
<a href="" target="_blank"><img src="<?php echo $banner_row['banner_img'];?>" height="340" width="400"></a>
		<?php
			}
			?>
</div>
<input type="hidden" id="serviceURL" value="">
<div class="login_msg login-cont-right" id="login_contents">
<form id="fm1" name="loginIndexForm" class="cookieForm" action="login_action.php" method="post" onsubmit="return check();">
<div class="login-cont-righta" style="background-color:#dfdfdf">
<div style="float:left;color:#CD0000;font-size:15px;margin-left:5px"><h3>会员登入</h3></div>
<a class="blue" href="register.php">新用户注册</a>
</div>
<div class="login-cont-rightb">
<div class="login-cont-rightb-email">
<input id="username" name="username" class="required login-cont-inp1" tabindex="1" accesskey="u" type="text" value="" size="25" autocomplete="false" placeholder="手机号">
<p id="loginclose" class="login-cont-rightb-close login-single-ps" style="display:none" onclick="delcookie()">
</p>
</div>
<div class="mt15">
<input id="password" name="password" type="password" value="" class="login-cont-inp1" tabindex="2" placeholder="请输入密码">
</div>
<div id="errorLogin" class="login-error-cont clearfix">

<a class="blue fr" href="#"></a>
</div>
<div class="pt10"><input type="submit" class="login-submit" id="loginsubmit" tabindex="4" value="" name="login"></div>
<div class="login-hezuo">
<!--<p>合作账号登录</p>
<ul class="login-hezuo-ul clearfix">
<li><a class="login-qq" href="http://www.228.com.cn/unite_qq/login?LoginReferUrl=http://www.228.com.cn" title="QQ"></a></li>
<li><a class="login-weibo" href="http://www.228.com.cn/unite_sina/login?LoginReferUrl=http://www.228.com.cn" title="新浪微博"></a></li>
<li><a class="login-zhifubao" href="http://www.228.com.cn/unite_alipay/login?LoginReferUrl=http://www.228.com.cn" title="支付宝"></a></li>
<li><a class="login-renren" href="http://www.228.com.cn/unite_renren/login?LoginReferUrl=http://www.228.com.cn" title="人人"></a></li>
<li><a class="login-baidu" href="http://www.228.com.cn/unite_baidu/login?LoginReferUrl=http://www.228.com.cn" title="百度"></a></li>
<li><a class="login-weixin" target="_blank" href="http://www.228.com.cn/weixin/login?LoginReferUrl=http://www.228.com.cn" title="微信"></a></li>
</ul>-->
</div>
<div class="login-email-info"><b id="email-info"></b></div>
<div class="login-password-info"><b id="pwd-info"></b></div>
<div class="login-yzm-info"><b id="yzm-info"></b></div>
</div>
<div class="login-cont-rightc"></div>
<div>
</div></form></div>
<div class="cb"></div>
</div>
	<?php
	include_once("include/footer.php");
	?>	
</body></html>