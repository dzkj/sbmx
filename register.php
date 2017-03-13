﻿
<html xmlns="">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>会员注册</title>
<meta content="" name="keywords" />
<meta http-equiv="X-UA-Compatible" content="IE=7" />
<link type="text/css" href="css/reset.css" rel="stylesheet" />
<link type="text/css" href="css/other.css" rel="stylesheet" />

<script type="text/javascript" src="js/publicnew.js"></script>
<script type="text/javascript" src="js/validform.min.js"></script>
<script type="text/javascript" src="js/jquery.minbox.js"></script>
<script type="text/javascript" src="js/autocomplete.js"></script>
<script type="text/javascript" src="js/regist.js"></script>
<script type="text/javascript" src="js/jquery.minbox.js"></script>




<script type="text/javascript" src="js/arttemplate.all.min.js"></script>
<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>

<script>
        function check()
        {
            var isok = true;
			if ($("#registemail").val() == "") {
                alert("请输入邮箱地址");
                return false;
            }
			var filter  = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
			 if (!filter.test($("#registemail").val())) {
                alert("请输入正确的邮箱地址");
                return false;
            }
		if ($("#registphone").val() == "") {
                alert("请输入手机号码");
                return false;
            }
		  var pattern = /^1[3|4|5|7|8][0-9]\d{8}$/;
            if (!pattern.test($("#registphone").val())) {
                alert("请输入正确的手机号码");
                return false;
            }
			 if ($("#registpassword").val() == "") {
                alert("请输入密码");
                return false;
            }
            pattern = /^[a-zA-Z]\w{5,17}$/;
            if (!pattern.test($("#registpassword").val())) {
                alert("密码格式不正确，正确格式为：以字母开头，长度在6-18之间，只能包含字符、数字和下划线。");
                return false;
            }
            if ($("#registconfirmPassword").val() == "") {
                alert("请输入确认密码");
                return false;
            }
            if ($("#registconfirmPassword").val() != $("#registpassword").val()) {
                alert("密码与确认密码不一致，请更正。");
                return false;
            }
	    return isok;
        }
</script>
</head>
<body>
<div id="caibei"></div>
	<div style="margin-bottom:10px;"></div>
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

<?php
include_once("include/header.php");
?>
<div class="regisiter-all">
<div class="regisiter-cont">
<h1 class="regisiter-cont-h1">新用户注册<s></s></h1>
<form class="registform" name="registform" id="registform" action="login_action.php" method="post" onsubmit="return check();">
<div class="regisiter-cont-tab">
<p>
<span class="regisiter-sp"><label>邮箱地址：</label></span>
<input type="text" style="width:250px;" name="email" id="registemail" datatype="e" maxlength="30" autocomplete="off" sucmsg="用户名验证通过！" nullmsg="请输入用户名！" errormsg="请用邮箱或手机号码注册！"/>
<b id="registemailTip"></b>
<b class='info-msg-false' id="registemailexist" style="display: none;background-position:-3px -120px;margin-left:7px;">
<span style='color:#4c4c4c'>邮箱地址已注册，请输入新邮箱</span>或 <a class='blue' href="http://www.228.com.cn/customer/login.html">登录</a>
</b>
<b class='info-msg-false' id="registemailerror" style="display: none;background-position:-3px -120px;margin-left:7px;">
<span style='color:#4c4c4c'>邮箱地址非法，请重新输入</span>
</b>
</p>
<p>
<span class="regisiter-sp"><label>手机号码：</label></span>
<input type="text" style="width:250px;" name="phone" id="registphone"/>
<b id="registphoneTip"></b>
<b class='info-msg-false' id="registphoneexist" style="display: none;background-position:-3px -120px;margin-left:7px;">
<span style='color:#4c4c4c'>该手机号已经注册成为永乐会员&nbsp;&nbsp;<a class='blue' href="http://www.228.com.cn/customer/login.html">登录</a></span>
</b>
<b class='info-msg-false' id="registphoneerror" style="display: none;background-position:-3px -120px;margin-left:7px;">
<span style='color:#4c4c4c'>手机号非法，请重新输入</span>
</b>
</p>
<p>
<span class="regisiter-sp"><label>设置密码：</label></span>
<input type="password" style="width:250px;" name="password" id="registpassword"/>
<b id="registpasswordTip"></b>
<b class='info-msg-warn' id="registpassworderror" style="display: none;background-position:-3px -120px;margin-left:7px;"><span style='color:#4c4c4c'>请输入6~16位字母、数字、下划线组成的密码</span></b>
</p>
<p>
<span class="regisiter-sp"><label>确认密码：</label></span>
<input type="password" style="width:250px;" name="confirmPassword" id="registconfirmPassword"/>
<b id="registconfirmPasswordTip"></b>
<b class='info-msg-warn' id="registconfirmPassworderror" style="display: none;background-position:-3px -120px;margin-left:7px;"><span style='color:#4c4c4c'>请输入6~16位字母、数字、下划线组成的确认密码</span></b>
<b class='info-msg-warn' id="tworegistconfirmPassworderror" style="display: none;background-position:-3px -120px;margin-left:7px;"><span style='color:#4c4c4c'>两次密码输入不一致，请重新输入</span></b>
</p>
<!--
<p>
<span class="regisiter-sp"><label>验&nbsp;&nbsp;证&nbsp;&nbsp;码：</label></span>
<input type="text" style="width:150px;" name="checkCode" id="registcheckCode" maxlength="4"/>
<span class="regisiter-yzm">
<a href="javaScript:reloadImage('imageCoderegist');">
<img id="imageCoderegist" align="middle" src="picture/image.jsp" class="imagCode"/>
</a>
</span>
<span class="ml100" style="left: 900px;">
<b id="registcheckCodeTip"></b>
<b class='info-msg-false' id="registcheckCodeerror" style="display: none;background-position:-3px -120px;margin-left:7px;"><span style='color:#4c4c4c'>验证码错误</span></b>
</span>
</p>
<p>
<span class="regisiter-sp"><label>短信验证：</label></span>
<input type="text" class="phone-input-left" id="smsCode" name="smsCode" maxlength="6"/>
<input type="button" class="phone-button" id="sendPhoneSMS" value="免费获取验证码" disabled="disabled"/>
<b id="smsCodeTip"></b>
<b class='info-msg-false' id="registsmscodeerror" style="display: none;background-position:-3px -120px;margin-left:7px;">
<span style='color:#4c4c4c'>短信验证码错误</span>
</b>
</p>-->
<div>
<input type='submit' class="reisiter-submit" style="border:0 none;height:30px;margin-left:63px;cursor:pointer;background-color:#CD0000;color:#fff;font-weight:600;font-size:13px;" id="registsubmit" name="register" value="新用户注册"/>
</div>
</div>
<div class="regisiter-shenm">
<p>
<span><input style="*margin-left:-4px;" type="checkbox" id="registifAgrees" name="ifAgrees" value="1" checked="checked" /> 我已经阅读并同意以下服务协议</span>
</p>
<div class="regisiter-shenm-conts">
<p class="tc fs-14 accent-black mb20">
<strong>永乐票务用户服务协议</strong>
</p>
<div>
<strong>一、协议的确认和接受</strong>
</div>
<div class="t-indt2em">
1. 本服务协议为您与永乐票务网站（网址：www.228.com.cn，以下简称为“本站”）的所有者（北京春秋永乐文化传播股份有限公司，以下简称为“永乐票务”）之间就使用永乐票务网站服务等相关事宜所订立的契约。
</div>
<div>
2. <strong>请您仔细阅读本服务协议，对于本服务协议中以加粗字体显示的内容，您应重点阅读。如果您访问或使用永乐票务网站提供的服务，即表示您接受并同意本服务协议各项条款的约定，本服务协议即构成对双方有约束力的法律文件。</strong>
</div>
<div>
3. 本服务协议内容包括协议正文及所有永乐票务网站已经发布的或将来可能发布或更新的各类规则，所有规则为本协议不可分割的组成部分，与本协议正文具有同等法律效力。<strong>永乐票务有权根据需要不时地制订、修改本服务协议及/或各类规则，并以网站上刊载公告的方式进行公示，不再单独通知您，您有义务不时关注并阅读最新版的协议及网站公告。修订后的协议或将来可能发布或更新的各类规则，一经在网站公示后，立即自动生效。如您不同意协议及各类规则的变更，请立即停止使用永乐票务网站提供的服务；无论事实上您是否认真阅读了本协议，如您继续使用永乐票务网站的服务，即表示您已接受经修订或增补的协议及各类规则。</strong>除本站另行明确声明外，任何使“服务”范围扩大或功能增强的新内容均受本服务协议约束。
</div>
<div class="t-indt2em">
4. 本站各项服务的所有权及知识产权归永乐票务所有，本站提供的服务将完全按照永乐票务发布的服务条款和操作规则严格执行。<strong>使用永乐票务网站服务的用户必须具有享受本站服务、下单购物等相应的权利能力和行为能力，能够独立承担法律责任，如果您在18周岁以下或不具备相应的权利能力和行为能力，您只能在监护人的监护参与下才能使用本站。</strong>如您不具有享受本站服务、下单购物等相应的权利能力和行为能力，永乐票务有权在中华人民共和国法律法规允许的范围内独自决定进行拒绝服务、关闭账户、清除或编辑内容、取消订单等操作。
</div>
<div>
&nbsp;
</div>
<div>
<strong>二、服务简介</strong>
</div>
<div class="t-indt2em">
5. 本站运用自己的操作系统通过国际互联网络为用户提供网上交易及相关服务，用户可在本站查询、浏览商品或服务的相关信息，订购商品，参加本站的有关活动及使用其它服务，用户须自行准备如下设备并承担相关费用：
</div>
<div class="t-indt2em">
5.1自行配备上网所需设备，包括并不限于电脑或其它上网终端、调制解调器及其它必备上网装置。
</div>
<div class="t-indt2em">
5.2自行负担上网费用，包括但不限于手机流量费用、上网设备租用费用、网络接入费用。
</div>
<div class="t-indt2em">
6. 永乐票务网站根据实际情况提供下列服务：
</div>
<div class="t-indt2em">
6.1 提供演出门票、体育赛事门票、景点参观门票、电影票、电子兑换券及其它相关周边商品的销售、预订、在线选座、短信/邮件通知等服务。
</div>
<div class="t-indt2em">
6.2 提供在线客服、资讯信息、问答评论等服务。
</div>
<div class="t-indt2em">
7. 永乐票务网站保留根据实际情况随时调整所提供的服务种类、形式的权利，永乐票务不承担因业务调整给用户造成的损失。
</div>
<div>
&nbsp;
</div>
<div>
<strong>三、用户信息</strong>
</div>
<div class="t-indt2em">
8. 为便于向用户及时提供各项服务，用户应自行诚信向本站提供相关资料，用户同意向本站提供相关资料并保证所提供的资料真实、准确、完整、合法有效，用户提供的资料如有变动时，应及时进行资料更新。如用户提供的资料不合法、不真实、不准确、不详尽的，用户需承担因此引起的相应责任及后果，永乐票务保留终止用户使用永乐票务网站各项服务的权利。
</div>
<div class="t-indt2em">
9. 用户在本站进行浏览、下单购物、参加活动等操作时，涉及用户真实姓名、名称、地址、联系方式等隐私信息的，本站将予以严格保密，下列情形除外：
</div>
<div class="t-indt2em">
9.1用户书面授权披露个人信息资料的；
</div>
<div class="t-indt2em">
9.2根据法律的有关规定，或者行政、司法机关的要求，须向第三方或者行政、司法机关披露的；
</div>
<div class="t-indt2em">
9.3因用户有违反中国法律或网站政策的情形，需要向第三方披露的；
</div>
<div class="t-indt2em">
9.4为向用户提供其所要求的产品和服务，而必须将用户的个人信息告知第三方的；
</div>
<div class="t-indt2em">
9.5其它本站根据法律、法规或者本站政策，认为应当披露的。
</div>
<div class="t-indt2em">
10. 用户在本站进行会员注册成功后，将产生用户名和密码等账户信息，用户应妥善保管该账户的用户名和密码，并对在其账户项下发生的所有行为负责。用户若发现任何非法使用用户账户或存在安全漏洞的情况时，请立即通知本站并向公安机关报案。
</div>
<div class="t-indt2em">
11. 用户不得以任何形式转让或授权他人使用自己在永乐票务网站的账户，否则用户应承担由此产生的全部责任，并与实际使用人承担连带责任。
</div>
<div class="t-indt2em">
12.<strong> 用户同意，永乐票务拥有通过邮件、短信、电话等形式，与在本站注册、购物用户、收货人进行联系或发送订单信息、促销活动等告知信息的权利。如果用户访问永乐票务网站，或在永乐票务网站注册、购物及使用其它服务，则表明用户已同意接收该等信息，如用户不希望接收来自于永乐票务网站除了通知、订单信息以外的电子邮件和/或短信，永乐票务网站可根据用户申请办理退阅。</strong>
</div>
<div class="t-indt2em">
13. 用户同意，永乐票务有权使用用户的注册信息、用户名、密码等信息，登录进入用户的注册账户，进行证据保全，包括但不限于公证、见证等。
</div>
<div>
&nbsp;
</div>
<div>
<strong>四、商品交易及服务规则</strong>
</div>
<div class="t-indt2em">
14.商品信息变动规则：为表述便利，商品和服务简称为“商品”。本站上的商品价格、数量、是否有货等信息随时都有可能发生变动，本站不作特别通知。由于网站上商品信息的数量极其庞大，虽然本站会尽最大努力保证您所浏览商品信息的准确性，但由于众所周知的互联网技术因素等客观原因存在，本站网页显示的信息可能会有一定的滞后性或差错，对此情形请您知悉并理解，永乐票务欢迎纠错，并会视情况给予纠错者一定的奖励。
</div>
<div class="t-indt2em">
15. 商品缺货或变更规则：由于市场变化及各种以合理商业努力难以控制因素的影响，永乐票务网站无法承诺用户通过提交订单所希望购买的商品（包括并不限于在售、预订、预售商品）都会有货或不会出现变更，如果用户订购的商品发生缺货，或出现演出活动变更、取消等情况，用户和永乐票务皆有权取消该订单，用户也可选择更换为其它商品，因更换商品产生货款差额时，按多退少补原则处理，永乐票务网站需全额或差额向用户退款时，永乐票务网站将于订单取消操作完成或用户确认更换商品操作完成之日起7日内为用户办理退回订单相应款项操作。
</div>
<div class="t-indt2em">
16. 订单规则：<strong>除法律另有强制性规定外，本站展示的商品和价格等信息仅为要约邀请，用户下订单时请仔细确认所购商品的名称、价格、数量、型号、规格等信息，用户须填写希望购买的商品数量、确认价款及支付方式、收货人、联系方式、收货方式及收货地址等内容。系统生成的订单信息是计算机信息系统根据用户填写的内容自动生成的数据，是用户向本站发出的合同要约，本站收到用户的订单信息后，只有在将用户订单中订购的商品从仓库实际向用户发出时（以订单发货状态为标志），方视为本站与用户之间就实际向用户发出的商品建立了合同关系，订单中订购多种商品须分批发出时，本站与用户之间就每次实际发货的商品分批建立合同关系。</strong>用户可随时登录在本站注册的账户，查询用户的订单状态。订单取消规则：
</div>
<div class="t-indt2em">
16.1 用户有权在下列情况下取消订单：用户和本站协商达成一致的；本站对用户订单做出承诺之前；演出或赛事活动变更、取消的；本站上公布的商品价格发生变化或错误，用户在本站发货之前通知本站的。
</div>
<div class="t-indt2em">
16.2 本站在下列情况下可以取消用户订单：本站和用户协商达成一致的；本站上显示的商品信息错误或缺货的；用户订单信息明显错误或用户订购数量超出本站购买数量要求的；演出或赛事活动变更、取消的；因不可抗力导致本站系统发生故障或遭受第三方攻击，以及其它本站无法控制的情形，根据本站判断需要取消用户订单的；经本站判断，用户订购行为不符合公平原则或诚实信用原则的（如同一用户多次无理由拒收订购商品）；根据本站已经发布的或将来可能发布或更新的各类规则，可取消用户订单的其它情形。
</div>
<div class="t-indt2em">
17. 配送及费用规则：用户可以在下订单时选择通过快递配送、用户自取、电子券现场兑换等多种方式获得商品。用户自取和电子券现场兑换不涉及送货和运费。如用户选择快递配送方式时，订单配送运费由用户承担，请清楚准确地填写收货人的真实姓名、送货地址及联系方式，收货人与用户本人不一致的，收货人的行为和意思表示视为用户的行为和意思表示，用户应对收货人的行为及意思表示的法律后果承担连带责任。因如下情况造成订单延迟或无法配送等，本站将不负迟延配送的责任：
</div>
<div class="t-indt2em">
17.1用户提供错误信息和不详细的地址；
</div>
<div class="t-indt2em">
17.2货物送达无人签收，由此造成的重复配送所产生的费用及相关的后果；
</div>
<div class="t-indt2em">
17.3不可抗力因素导致的，例如：自然灾害、交通戒严、突发战争等。
</div>
<div class="t-indt2em">
18. 退换货规则：
</div>
<div class="t-indt2em">
18.1 <strong>因本站所售各类票品具有有效时间及有限数量的特殊性质，在售出后将影响二次销售，因此本站所售各类票品（包括并不限于演出门票、体育赛事门票、景点参观门票、电影票以及各类电子票等）如非活动变更、活动取消、票品错误的原因外，不提供退换票品服务。</strong>
</div>
<div class="t-indt2em">
18.2 为尽量降低用户不能退换票品的损失，本站与华泰保险合作推出“票享无忧”退票保险服务，用户下单购票时可选择购买“票享无忧”服务，由于保险合同约定的承保范围内原因，导致用户无法出席演出或活动时，华泰保险公司将按保险合同约定向用户进行保险赔偿。
</div>
<div class="t-indt2em">
18.3 如因活动变更、活动取消、票品错误的原因发生退换货，产生的退换货配送运费由永乐票务承担，用户发出快递后可联系永乐票务客服人员，永乐票务向用户返还实际发生的配送运费，非上述原因产生退换货的配送运费由用户承担。
</div>
<div class="t-indt2em">
18.4 已付款订单因发生退换货需全额或差额向用户退款时，永乐票务网站将于收到用户退回商品之日起7日内为用户办理退回订单相应款项操作。
</div>
<div>
&nbsp;
</div>
<div>
<strong>五、依法言行义务</strong>
</div>
<div class="t-indt2em">
19. 本协议依据国家相关法律法规规章制定，用户同意严格遵守以下义务：
</div>
<div class="t-indt2em">
19.1不得发布煽动、抗拒、破坏宪法和法律、行政法规实施的言论；
</div>
<div class="t-indt2em">
19.2 不得发布煽动颠覆国家政权，推翻社会主义制度，煽动、分裂国家，破坏国家统一，损害国家荣誉和利益的言论；
</div>
<div class="t-indt2em">
19.3 不得发布煽动民族仇恨、民族歧视，破坏民族团结，对种族、性别、宗教、地域等歧视的言论；
</div>
<div class="t-indt2em">
19.4 不得捏造或者歪曲事实，散布谣言，扰乱社会秩序；
</div>
<div class="t-indt2em">
19.5 不得发布封建迷信、邪教、淫秽、色情、赌博、暴力、凶杀、恐怖、教唆犯罪的言论；
</div>
<div class="t-indt2em">
19.6 不得侮辱他人或者捏造事实诽谤他人，不得进行其它恶意攻击；
</div>
<div class="t-indt2em">
19.7 不得发布任何侵犯他人著作权、商标权等知识产权或合法权利的内容；
</div>
<div class="t-indt2em">
19.8 不得干扰本站的正常运转，不得侵入本站及国家计算机信息系统；
</div>
<div class="t-indt2em">
19.9 不得利用本站进行洗钱、窃取商业秘密、窃取个人信息等违法犯罪活动；
</div>
<div class="t-indt2em">
19.10 不得利用在本站注册的账户进行牟利性经营活动。
</div>
<div class="t-indt2em">
20. 用户在本站发表评论及其它内容时，除遵守本条款外，还应遵守永乐票务网站的其它相关规定，不得恶意中伤永乐票务公司及永乐票务网站，未经永乐票务网站同意，禁止用户在永乐票务网站上发布任何形式的广告。
</div>
<div class="t-indt2em">
21. 用户应不时关注并遵守本站不时公布或修改的各类合法规则及规定。
</div>
<div class="t-indt2em">
22. 本站有权删除站内各类不符合法律政策或不真实的信息内容，而无须通知用户。
</div>
<div class="t-indt2em">
23. 若用户未遵守以上规定，本站有权作出独立判断并采取暂停或关闭用户账户等措施，用户须对自己在网上的言论和行为承担法律责任。
</div>
<div>
&nbsp;
</div>
<div>
<strong>六、服务的变更、中断和终止：</strong>
</div>
<div class="t-indt2em">
24. 永乐票务保留根据实际情况随时调整永乐票务网站提供的服务种类、形式的权利，永乐票务不承担因业务调整给用户造成的损失。
</div>
<div class="t-indt2em">
25. 在下列情况下，永乐票务可以在发出通知或不发出通知的情况下，随时终止向用户提供服务并注销（不再保存）用户在本站的注册账户及相关的任何资料，单方解除本协议：
</div>
<div class="t-indt2em">
25.1 用户违反本服务协议相关规定的，或因用户违反本服务协议相关规定被本站暂停或终止提供服务后，用户再一次直接或间接或以他人名义注册为本站用户的；
</div>
<div class="t-indt2em">
25.2 本站通过用户在本站填写的联系信息进行联系时，发现用户的联系信息已不存在或无法使用，经本站以其它联系方式（如有）通知用户更改，而用户在7个工作日内仍未能进行信息更新的；
</div>
<div class="t-indt2em">
25.3 用户在本站中填写的信息内容是虚假的；
</div>
<div class="t-indt2em">
25.4 本服务协议修改或更新时，用户不愿接受新的服务协议的；
</div>
<div class="t-indt2em">
25.5 永乐票务认为需终止服务的其它情况。
</div>
<div class="t-indt2em">
26. 如用户向本站提出注销账户申请，经本站审核同意后，由本站注销该用户账户，此时用户与永乐票务间的本服务协议关系即告终止，但在注销该用户账户后，永乐票务仍保留下列权利：
</div>
<div class="t-indt2em">
26.1保留该用户的注册信息及过往的全部交易和行为记录；
</div>
<div class="t-indt2em">
26.2如用户在账户注销前在永乐票务网站上存在违法行为或违反本协议约定的行为，永乐票务仍可行使本服务协议所规定的权利。
</div>
<div>
&nbsp;
</div>
<div>
<strong>七、知识产权</strong>
</div>
<div class="t-indt2em">
27. 永乐票务网站服务内容及信息（包括但不限于文字、软件、声音、图片、录象、图表、广告中的全部内容、电子邮件的全部内容以及本站为用户提供的其它信息）著作权归永乐票务所有，受中国知识产权法规和国际知识产权公约的保护，未经永乐票务许可，任何人不得使用、复制或用作其它用途。
</div>
<div class="t-indt2em">
28. 在永乐票务网站上出现的其它商标是其商标权利人各自的财产，未经永乐票务或相关商标所有人的书面许可，任何第三方都不得使用。
</div>
<div class="t-indt2em">
29. 用户在永乐票务网站上发表的文章及图片（包括转贴的文章及图片）版权仅归属原作者所有，若作者有版权声明或原作从其它网站转载而附带有原版权声明者，其版权归属以附带声明为准。用户应保证其引用该文章及图片已经得到权利人的许可，否则给永乐票务造成损失的，应当予以赔偿。用户在永乐票务网站上发表的内容仅代表作者本人观点，与永乐票务网站立场无关。
</div>
<div class="t-indt2em">
30. <strong>永乐票务及其关联方有权将用户在本站发表的商品使用体验、商品讨论或图片进行使用或者与其他人合作使用，使用范围包括但不限于网站、电视、电子杂志、杂志、刊物及其它宣传媒体，使用时需为作者署名，以用户发表文章时注明的署名为准，文章有附带版权声明者除外。</strong>
</div>
<div>
&nbsp;
</div>
<div>
<strong>八、 责任限制</strong>
</div>
<div class="t-indt2em">
31. 除非法律规定或者永乐票务网站上另有明确的书面说明，本站及其所包含的或以其它方式通过本站提供给用户的全部信息、内容、材料、产品（包括软件）和服务，均是在“按现状”和“按现有”的基础上提供的，永乐票务不对本站的运营及包含在本站上的信息、内容、材料、产品（包括软件）或服务做任何形式的、明示或默示的声明或担保。
</div>
<div class="t-indt2em">
32. 永乐票务不对本站提供的商品的适用性或满足用户特定需求和目的进行任何明示或者默示的担保，请用户在购买前确认自己的需求，同时仔细阅读商品说明。
</div>
<div class="t-indt2em">
33. 本协议任何一方违反本协议规定的内容，给另一方造成损害的，应当承担违约责任，赔偿另一方因此而遭受的损失，包括但不限于物质损失、利息损失、因追索或诉讼而支出的诉讼费、合理的通讯费、交通费、住宿费、律师费等。
</div>
<div class="t-indt2em">
34.<strong>协议一方违反协议规定内容给另一方造成损害的，受损害一方应当采取合理措施避免损失扩大的，因防止损失扩大而支出的合理费用，由违约方承担。一方没有采取合理措施避免损失扩大的，对损失扩大部分违约方不承担赔偿责任。</strong>如果因为不可抗力或其它本站无法控制的原因使本站系统故障或者遭受黑客攻击导致交易无法完成或丢失有关的信息、记录等，永乐票务会合理地尽力协助处理善后事宜，尽最大努力使用户免受或减少损失，但永乐票务不就此损失承担责任。
</div>
<div>
<strong>&nbsp;</strong>
</div>
<div>
<strong>九、法律管辖和适用</strong>
</div>
<div class="t-indt2em">
35. 本服务协议的订立、执行和解释及争议的解决均应适用中华人民共和国大陆地区适用之有效法律。
</div>
<div class="t-indt2em">
36. 如发生本服务协议与适用之法律相抵触时，则这些条款将完全按法律规定重新解释，而其它有效条款继续有效。
</div>
<div class="t-indt2em">
37. 如双方就本服务协议内容或其执行发生任何争议，双方应尽力友好协商解决；协商不成或不愿意协商时，任何一方均应向永乐票务所在地人民法院提起诉讼。
</div>
<div>
<strong>&nbsp;</strong>
</div>
<div>
<strong>十、其它</strong>
</div>
<div class="t-indt2em">
38. 永乐票务尊重用户和消费者的合法权利，本服务协议及本站上发布的各类规则、声明及其它内容，均是为了更好的、更加便利的为用户和消费者提供服务，本站欢迎用户和社会各界提出意见和建议，永乐票务将虚心接受并适时修改本服务协议及本站上的各类规则。
</div>
</div>
<div class="regisiter-noselect" style="display:none;" id="ifAgrees-msg"><div class="regisiter-noselecta"><p>您还未同意服务条款</p><s></s></div></div>
</div>
</form>
</div>
</div>
	<?php
	include_once("include/footer.php");
	?>	
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