<?php session_start();?>
<!DOCTYPE html>
<html xmlns="">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=7" />
<title>世博票务</title>
<link type="text/css" href="css/reset_1.css" rel="stylesheet" />
<link type="text/css" href="css/product_1.css" rel="stylesheet" />
<link type="text/css" href="css/shadowbox_1.css" rel="stylesheet"/>
<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="js/publicnew.js"></script>
<script type="text/javascript" src="js/validform.min.js"></script>
<script type="text/javascript" src="js/jquery.minbox.js"></script>
<script type="text/javascript" src="js/newindex.js"></script>

</head>
<body>
<div id="caibei"></div>
<div id="top_ajax" class="top-w">

</div>
<div class="tongz" style="width:100%;display: none;">
<div style="width:1000px;margin:0 auto;height:23px;">
<div class="leftMsg fl" style="width:980px;text-align:center;color:#cc0001;"></div>
<div class="fl" style="padding-top:6px;"><a style="cursor: pointer;" id="header-close"><img src="" /></a></div>
</div>
<div class="cb"></div>
</div>
<div class="login_msg productnew-login undb" id="jump-login" style="z-index:90000000000000;">
</div>

<script type="text/javascript" src="js/arttemplate.all.min.js"></script>
<!--[if IE 6]>
<script type="text/javascript" src="js/png.js"></script>
<script type="text/javascript"> 
  DD_belatedPNG.fix('.quick-guide li img');  
</script> 
<![endif]-->
<?php include_once("include/header.php");?>

<div class="product-headtitle">
<a href="http://www.228.com.cn">永乐票务</a> >
<a href="http://www.228.com.cn/bj/">北京</a> >
<a href="http://www.228.com.cn/s/yanchanghui/">演唱会</a> >
<a href="http://www.228.com.cn/ticket-234938278.html">汪峰2017岁月超级巡回演唱会—北京站</a>
</div>
<div class="product-detail clearfloat" style="margin-top:0;">
<div class="product-detail-left">
<div class="product-detail-askonly">
<h2 class="product-detail-askonly-title product-askall">
在线问答
<div class="product-askall-borbotom"></div>
</h2>
<div class="product-detail-alla2">
<div class="product-detail-allc-list" style="margin-left:10px;">
<p class="product-detail-allc-list-a">
</span>
<span><a href="myask_all.php" class="c3">全部提问</a></span>
<span style="margin:0 3px;">|</span>
<span><a href="question.php" class="red">我的提问</a></span>
</p>
<div class="product-detail-allc-ask" style="margin-top:30px;">
<div class="product-detail-allc-aska">
<span>温情提示：为了您的个人信息安全，请勿在留言中透露联系方式！</span>
<!--<span class="product-detail-allc-aska2">我有意见或建议，<a href="http://www.228.com.cn/common/idea.html" target="_black" class="c5">跟永乐说说 >></a></span>-->
</div>
<div class="product-detail-allc-askb">
<form action="myask_action.php" method="post">
<input type="hidden" name="productid" value="234938278">
<table>
<tr>
<td>您的称呼：</td>
<td id="userInfo" style="padding-left:6px;">
<?php echo $_SESSION["user"]["nick_name"];?>
</td>
</tr>
<tr>
<td valign="top">您的问题：</td>
<td style="padding-left:6px;">
<textarea id="replycontent" name="info" style="width:518px;height:93px;"></textarea>
</td>
</tr>
<tr>
<td valign="top">验 证 码：</td>
<td style="padding-left:6px;">
<span class="fl product-detail-allc-askb-yzm">
<input type="text" name="vcode" style="width:87px;color:#4c4c4c;" maxlength="4"/>
</span>

<span  style="cursor: pointer;margin-left:20px;">
<img src="include/vcode.php" onclick="this.src='include/vcode.php?'+(new Date()).getTime();"/>
<span style="margin-left:20px;color:red"> 看不清？点击图片刷新！</span>
</span>
</p>
<span id="yl-error-msg" class="red" style="float: right;"></span>
</td>
</tr>
<tr><td colspan="2">
<input type="submit" name="question" value="确认提交" class="fr" style="width:60px;height:30px;"/>
</td></tr>
</table>
</form>
</div>
</div>
</div>
</div>
</div>

</div>

</div>

<script type="text/javascript" src="js/shadowbox.js"></script>

<div class="cb"></div>
<?php include_once("include/footer.php");?>
<!--[if IE 6]>
<script type="text/javascript" src="js/png.js"></script>
<script type="text/javascript"> 
    DD_belatedPNG.fix('.booking,.advance-booking,.no1,#sort h3 a,#sort h3,.quick-menu li.myyl a,.quick-menu li.guide a,.copyright a,.change-city,#main-nav li,*html #rigpic a');  
</script> 
<![endif]--><script src="js/tag.js" type="text/javascript" async></script>
<script type="text/javascript">var _ozuid ="";</script>
<script type="text/javascript" src="js/o_code.js"></script>

</body>
</html>