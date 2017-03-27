<?php
	session_start();
	include_once("include/conn.inc.php");
	include_once("include/session.inc.php");
	if(empty($_SESSION['order']['id'])){
		header("location:sell_ticket.php");
	}
	$_POST=$_SESSION['order'];
	$data=json_decode($_POST['data']);
	foreach($data as $arr){
		$row[]=explode("|",$arr);
	}
	$session_id=$_SESSION['user']['id'];
	$show_sql="select * from shows where id=$_POST[id]";
	$show_result=mysqli_query($link,$show_sql);
	$show=mysqli_fetch_array($show_result);
	
	$address_sql="select * from address where mem_id=$session_id and default_stauts=1 limit 0,1";
	$address_result=mysqli_query($link,$address_sql);
	$addres=mysqli_fetch_array($address_result);
?>
<!DOCTYPE html>
<html xmlns="">
<html >
<head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<meta content="票务,演出订票" name="keywords">
<meta http-equiv="X-UA-Compatible" content="IE=7;IE=8;IE=9;IE=edge;chrome=1">
<script src="js/jquery-1.9.1.min.js"></script>
<script async="" src="/agt.js"></script>
<script async="" src="js/analytics.js"></script>
<script async="true" type="text/javascript" src="js/event" data-owner="criteo-tag"></script>
<script type="text/javascript" defer="" async="" src="js/y.js"></script>
<script charset="utf-8" src="js/v.js"></script>
<script type="text/javascript" defer="" async="" src="js/jiuzhilan_4783.js"></script>
<script src="js/hm.js"></script>
<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="js/common.js"></script>
<!--[if lt IE 8]>
    <script src="//cdn.bootcss.com/json2/20160511/json2.min.js"></script>
<![endif]-->
<link href="css/common.css" type="text/css" rel="stylesheet">
<link href="css/reset.css" type="text/css" rel="stylesheet">
<title>订单信息</title>
<link type="text/css" href="css/order.css" rel="stylesheet">
<script type="text/javascript" src="js/jquery-1.7.2.js"></script>
<script type="text/javascript" src="js/public-min.js"></script>
<script type="text/javascript" src="js/buyProcess.js"></script>
<script type="text/javascript" src="js/customerAddress.js"></script>
<script type="text/javascript" src="js/saveGeneralOrder.js"></script>
<script type="text/javascript" src="js/json2.js"></script>
<script type="text/javascript" src="js/ld.js" async="true"></script>

	<!-- 省联动-->
	<script src="js/distpicker.data.js"></script>
	<script src="js/distpicker.js"></script>
	<script src="js/main.js"></script>
	<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
	<script>
		$(function(){
		$("#province1 option:eq(1)").before("<option selected value='<?php echo $addres['prov'];?>'><?php if($addres['prov']==""){ echo "选择省";}else{ echo $addres['prov']; } ?></option>");
		$("#city1 option:eq(1)").before("<option selected value='<?php echo $addres['city'];?>'><?php if($addres['city']==""){ echo "选择市";}else{ echo $addres['city']; } ?></option>");
		$("#district1 option:eq(1)").before("<option selected value='<?php echo $addres['area'];?>'><?php if($addres['area']==""){ echo "选择区";}else{ echo $addres['area']; } ?></option>");
	});
		</script>
</head>
<body>


	<?php
	include_once("include/header.php");
	?>

<p class="buyCar-title">首页 &gt; 确认订单信息</p>
<div class="orderSure clearfloat">
<!--<div class="buyCar-hedpic">
<img src="img/buyProcess-1.jpg">
</div>-->
<p class="orderSure-title">
<span>确认送货方式</span>
</p>
<div class="orderSure-sendStyles clearfloat">
<table class="orderSure-sendStyles-tab">
<tbody><tr>
<td width="35"><input type="radio" name="sendStyle" value="1" rel="0" onclick="clickExpress();" checked="checked"></td>
<td class="orderSure-sendStyles-pad">
<a href="javascript:void(0)" class="orderSure-senda" rel="0" onclick="clickExpress();"></a>
<p style="font-weight: bold;">快递配送</p>
</td>
<td width="35"><input type="radio" name="sendStyle" value="2" rel="1" onclick="clickDoor();" id="doorRadio"></td>
<td class="orderSure-sendStyles-pad">
<a href="javascript:void(0)" class="orderSure-sendb" rel="1" onclick="clickDoor();"></a>
<p style="font-weight: normal;">上门自取</p>
</td>
</tr>
</tbody></table>
</div>
<p class="orderSure-title">
<span>确认收货人信息</span>
</p>
<div class="orderSu re-personinfo orderSure-personinfo" id="expressAddress" style="display: block;">
<ul class="orderSure-address" id="cusAddress">
<li class="select" aid="11287059">
<input type="radio" id="address_1" name="address" class="orderSure-address-input" checked="checked" value="11287059">
<label class="orderSure-addressa">
<?php 
	echo $addres['prov']." ".$addres['city']." ".$addres['area'];
 ?>
</label>
<span class="orderSure-addressb"><?php echo $addres['true_name'];?></span>
<span class="orderSure-addressc"><?php echo $addres['true_phone'];?>&nbsp;&nbsp;&nbsp;&nbsp;</span>
<?php if($addres['id']!=""){  ?>
<span class="orderSure-addressd1"><a href="javascript:void(0);" class="c5">默认地址 </a></span>
<?php
}
?>
<span class="orderSure-addresse undb" style="display: inline;"><a  class="orderSure-address-addbtn c5" href="javascript:void(0);" class="c5" name="modifyAdd"><?php if($addres['id']==""){ echo "添加";}else{echo "修改";} ?>本地址</a></span>
</li>
</ul>
<!--<p class="orderSure-address-add"><a href="javascript:void(0)" onclick="addAddress();" class="orderSure-address-addbtn c5" id="addAddress">添加新收货地址</a></p>-->
</div>
<div class="orderSure-address-info" id="editCustomerAddr" style="display: none;">

<table class="orderSure-address-info-table" style="margin-left:60px;_margin-left:80px;margin-top:30px;">
<tbody><tr>
<td width="65">地&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;区：</td>
<td>
<div data-toggle="distpicker">
	  <select class="form-control" name="province" id="province1">
	  <option selected="selected">选择省</option>
	  </select>
	  <select class="form-control" name="city" id="city1">
	  <option selected="selected">选择市</option>
	  </select>
	  <select class="form-control" name="district" id="district1">
	  <option selected="selected">选择区</option>
	  </select>
</div>
<span id="provinceCityTip"></span>
</td>
</tr>
<tr>
<td>街&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;道：</td>
<td>
<input type="text" id="street" name="street" class="orderSure-input" style="width:365px;" value="<?php echo $addres['street'];?> ">
<span id="nameTip"></span>
</td>
</tr><tr>
<td>邮&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;编：</td>
<td>
<input type="text" id="zipcode" name="zipcode" class="orderSure-input" style="width:100px;" value="<?php echo $addres['zipcode'];?>">
<span id="zipTip"></span>
</td>
</tr>
<tr>
<td>送货时间：</td>
<td>
<select style="width:220px" id="delivery" name="delivery">
<option value="1">无限制</option>
<option value="2">只工作日送货(双休日、节假日不送)</option>
<option value="3">只双休日、节假日送货(工作日不送)</option>
</select>
</td>
</tr>
<tr><td colspan="2" class="orderSure-address-info-tableline"></td></tr>
<tr>
<td class="orderSure-address-pt12">姓　　名：</td>
<td class="orderSure-address-pt12">
<input type="text" class="orderSure-input" style="width:110px;" name="true_name" id="true_name" value="<?php echo $addres['true_name'];?>">
<span id="userNameTip"></span>
</td>
</tr>
<tr>
<td>手机号码：</td>
<td>
<input type="text" class="orderSure-input" style="width:180px;" name="true_phone" id="true_phone" value="<?php echo $addres['true_phone'];?>">
<span id="phoneTip"></span>
</td>
</tr>
<tr>
<td>邮箱地址：</td>
<td><input type="text" class="orderSure-input" style="width:180px;" name="email" id="email" value="<?php echo $addres['email'];?>">
	<input type="hidden" name="id"  id="addres_id" value="<?php echo $addres['id'];?>">
<span id="emailTip"></span>
</td>
</tr>
<tr>
<td></td>
<td>
<input type="checkbox" style="*margin-left:-4px;" id="default_stauts" name="orders" value="1" checked="checked">&nbsp;&nbsp;设置为默认地址
</td>
</tr>
<tr>
<td></td>
<td class="pt5">
<a href="javascript:void(0)" onclick="saveOrUpdateCustomerAddr(true);" class="orderSure-address-submit" title="确认收货信息" id="beSureCusAdd"></a>
<span id="addCusAddTip"></span>
</td>
</tr>
</tbody></table>

</div>
<div class="orderSure-selfGet orderSure-personinfo undb" style="display: none ;">
<table class="orderSure-selfGet-tab">
<tbody><tr>
<td width="62">姓&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;名：</td>
<td>
<input type="text" class="orderSure-input" id="doorUserName" name="doorUserName" style="width:130px;" onchange="if(this.value.length==1){this.value=this.value.replace(/[^\u4e00-\u9FFF\u2022_a-zA-Z\.]/g,'')}else{this.value=this.value.replace(/[^\u4e00-\u9FFF\u2022_a-zA-Z\.]/g,'')}">
<span id="selfGetNameTip"><span class="red">取票时请携带和所填姓名一致的身份证!</span></span>
</td>
</tr>
<tr>
<td>手&nbsp;&nbsp;机&nbsp;号：</td>
<td>
<input type="text" class="orderSure-input" id="doorUserPhone" name="doorUserPhone" style="width:130px;">
<span id="selfGetPhoneTip"><span class="red"></span></span>
</td>
</tr>
<tr>
<td height="40">取货地址：</td>
<td><?php echo $show['show_venue'];?> </td>
</tr>
<tr>
<td height="20">取货时间：</td>
<td>周一至周五 9:00—17:00</td>
</tr>
</tbody></table>
</div>
<p class="orderSure-title">
<span>确认购买信息</span>
</p>
<div class="orderSure-orderDetail">
<p class="orderSure-cityname">发货城市：
<?php echo $show['shipping_city'];?>
</p>
<table class="buyCar-table" style="width:888px;margin-left:0;" id="border_data">
<tbody><tr>
<th width="280">商品信息</th>
<th width="80">日期/场次</th>
<th width="80">单价</th>
<th width="80">数量</th>
<th style="width:100px;_width:85px;">小计(元)</th>
</tr>
<?php 
	foreach ($row as $price){
?>
	<tr class="arr_insPrice">
	<td class="buyCar-table-proinfo" style="text-align:left;">
	<span class="buyCar-table-proinfo-sp2" style="width:340px">
	<strong class="red">
	[<?php echo $show['show_stauts'];?>]
	</strong>
	<a href="sell_ticket.php?id=<?php echo $_POST['id'];?>" class="c2" title=""><?php echo $show['show_title'];?></a><br>
	<a href="#" class="c2">[<?php echo $show['show_venue'];?>]</a></span>
	</td>
	<td class="arr_seasons"><?php echo $price[0];?></td>
	<td class="arr_price"><span class="buyCar-table-nub"><?php echo $price[1];?></span>元</td>
	<td style="width:60px;" class="arr_num"><?php echo $price[2];?></td>
	<td><span class="buyCar-table-nub order_subtotal arr_subtotal"><?php echo $price[1] * $price[2];?></span>元 </td>
	<td class="font-taho insPrice arr_pid" name="insPrice" style="display:none;"><?php echo $price[3];?></td>
	</tr>
<?php 
}
?>
	<tr>
<!--<td colspan="7">
<div class="fl pl10">
<strong class="redbigfont">促销信息：</strong><span class="sale-span">不使用活动优惠</span>
</div>
<div class="salink-box fl">
<a href="javascript:;" class="sale-link">更多促销
<i class="sale-linki-down"></i>
<em class="sale-link-border"></em>
</a>
<div class="salshow-box" style="display:none;">
<ul>
<li>
<div class="fl">
<input type="radio" name="promoDis" class="fl" value="1" rules="[zPrice-bPrice-yPrice>30]" forms="zPrice-30" promoname="浦发活动A-立减30元" disabled="disabled"> <span class="salshow-box-spanfont spanfont-gray">促销</span>
</div>
<span class="salispan fl">
浦发活动A-立减30元 <br>
<em>购票采用浦发信用卡支付，可享受立减30元优惠。具体详见活动说明。</em>
</span>
</li>
<li>
<div class="fl">
<input type="radio" name="promoDis" class="fl" value="2" rules="[1483113600000>sysTime, 1483066740000<sysTime, zPrice-bPrice-yPrice>30, ticNum<=2]" forms="ticNum*30+bPrice+yPrice" promoname="浦发活动B-30元抢票" disabled="disabled"> <span class="salshow-box-spanfont spanfont-gray">促销</span>
</div>
<span class="salispan fl">
浦发活动B-30元抢票 <br>
<em>指定商品购票采用浦发信用卡支付，可享受30元购票机会。具体详见活动说明。</em>
</span>
</li>
<li>
<div class="fl">
<input type="radio" name="promoDis" value="-1" promoname="不使用活动优惠" rules="" forms="zPrice" checked="checked" class="fl inputradio">
</div>
<span class="salispan fl">
不使用活动优惠
</span>
</li>
</ul>
<div class="pri-btn-box">
<input type="button" class="submitpromo fl">
<input type="button" class="cancelpromo fr">
</div>
</div>
</div>
</td>-->
</tr>
<!--<tr>
<td colspan="8" style="text-align:left;height:auto;padding-bottom:20px;">
<div class="mt15 ml10" id="insuredDiv">
<span><input type="checkbox" id="insuredStatus" name="insuredStatus" value="0" style="vertical-align:text-top;"></span>
<span class="orderSure-money-sp1">购买退票保险</span>
<span class="ml20"><a href="http://www.228.com.cn/help/pswy.html" class="c5" target="_blank">什么是购买退票保险？</a></span>
</div>
<div class="mt10 ml30 mb10" id="insuredStatusAndZeRenDiv" style="display: none;">
<span><input type="checkbox" id="insuredStatusAndZeRen" name="insuredStatusAndZeRen" value="0" style="vertical-align:text-top;"></span>
<span class="orderSure-money-sp1">我已阅读并同意</span>
<span class="ml20"><a href="http://www.228.com.cn/about-tpfwtk.html" class="c5" target="_blank">保险条款及免除责任须知</a></span>
</div>
<div class="invoices">
<h4 class="ml10"><label><input class="mr5" type="checkbox" id="getTicket" name="getTicket" value="1">需要发票</label></h4>
<div class="ask-invoices">
<p class="explains">
<span class="icons">随票配送的客户联商品清单即为消费证明。</span>
<span>如需报销发票，将在演出/活动结束后统一由演出主办方按照订单票面实际金额开具。</span>
<span>中国大陆以外地区演出/活动无法提供发票。</span>
</p>
<div class="invoinces-conter">
<div class="invoinces-header clear mb10">
<label class="fl">发票抬头：</label>
<input id="invoice" name="invoice" class="fl wh300 ml10" type="text" value="请填写公司发票抬头" maxlength="20" onfocus="if(this.value=='请填写公司发票抬头'){this.value='';}this.style.color='#333';" onblur="if(this.value=='') {this.value='请填写公司发票抬头';this.style.color='#cccccc';}">
</div>
<div class="invoinces-collect">
<label class="fl">收取方式：</label>
<div class="invoinces-sty fl clear">
<p class="invoinces-styh">
<label><input type="radio" name="sendStyleDigitalid" value="20" onclick="selfGetDigitalidNew(this);">上门自取<i></i></label>
<label><input type="radio" name="sendStyleDigitalid" value="10" onclick="selfGetDigitalidNew(this);">快递配送<em class="red">（到付）</em><i></i></label>
</p>
</div>
</div>
<div class="invoices-con ml60 " id="selfGetDigitalidShow" style="display: none;">
<p class="clear"><span class="zqdz fl">自取地址：广东省广州市越秀区广州大道北新达城广场北座1003号 <a href="http://www.228.com.cn/venues-map.html?zqaddress=广东省广州市越秀区广州大道北新达城广场北座1003号" class="blue ml10" target="_blank">[ 查看地图 ]</a></span></p>
<p class="clear"><span class="zqsj fl">自取时间：周一至周日 9:00—18:00</span></p>
<p class="clear">
<em class="fl red">*</em>
<span class="zqtel fl">取票人手机：</span>
<b class="hover fl"><input type="text" id="userDigitalidPhone" name="userDigitalidPhone" value="15063364033"><span id="selfGetPhoneTipDigitalid" style="padding-left: 0px;"></span><em class="db sred">我们将在发票开出后通知您</em></b>
</p>
</div>
<div class="invoices-con" id="cashOnDeliveryDigitalidShow" style="display: none;">
<label class="fl">发票邮寄地址：</label>
<div class="fl address">
<p>
<label>
<input class="radios" name="addressDigitalid" type="radio" value="11287059"><span class="pl10">山东省</span><span>济南市</span><span>章丘市</span><span></span><span>绣惠镇</span><span>这个世界不太懂</span><span>15063364033</span><span></span>
</label>
</p>
<p class="ml15"><span class="pl10 gary9">发票配送地址可选项来自收货地址，如需新增或修改，请维护收货地址！</span></p>
</div>
</div>
</div>
</div>
</div>
</td>
</tr>
<tr>
<td colspan="8" style="text-align:left;height:auto;padding-bottom:20px;">
<ul class="orderSure-money-total">
<li class="orderSure-money-totala">
<span class="fl ml10">级别：普通会员
（无折扣）
</span>
<span class="ml10">此单可获积分：7760分</span>
</li>
</ul>
</td>
</tr>-->
</tbody></table>
<ul class="orderSure-money-total">
<!--<li class="orderSure-money-totalb"><strong>合计(货到付款)：</strong>商品总金额：<span class="red fw" id="productPrice">7760.0</span>元 + 运费：<span class="red fw" id="freight">22</span>元 + 保费：<span class="red fw" id="premium">0</span>元 = <span class="red fw" id="total">7782.00</span>元</li>-->
<li class="orderSure-money-totalb"><strong>合计(货到付款)：</strong>商品总金额：<span class="" class="endVal" id="endVal"></span>元 
</ul>
</div>
<div class="pl30 mt20 clearfloat">
<table id="sendsty-tab">
<tbody><tr>
<td class="fw">选择支付方式：</td>
<td width="35"><input type="radio" name="sendSty1" checked="checked" rel="0" value="0"></td>
<td class="orderSure-sendStyles-pad">在线支付</td>
<td width="35" class="cashOnDelivery" style="display:none;"><input type="radio" name="sendSty1" rel="1" value="1" id="hdfkInptRadio"></td>
<td class="orderSure-sendStyles-pad cashOnDelivery" style="display:none;">货到付款</td>
</tr>
</tbody></table>
</div>
<div id="con-all">
<!--<div class="pl30">
<div class="pt10 fw">支付详情</div>
<div class="mt15">
<span><input type="checkbox" class="ticketuse" id="ticketuse"></span>
<span class="orderSure-money-sp2">使用现金券 </span>
<span><label class="red pl20">提示：</label>现金券属一次性消费券，每次仅限使用一张，过期无效，不支持货到付款</span>
</div>
<div class="orderSure-money-ticket clearfloat" style="display:none">
<div style="height:5px;_height:2px;overflow:hidden;"></div>
<p class="orderSure-money-ticketa" style="margin-top:2px;*margin-top:5px;">使用现金券：</p>
<div class="orderSure-money-ticketb">
<table class="orderSure-money-ticketb-tab">
<tbody><tr>
<td>
<input type="hidden" id="cashNo" name="cashCoupNo">
<input type="text" class="orderSure-input" style="width:175px" id="cashCouponNo" name="cashCoupNo">
</td>
<td class="pl10">
<a href="javascript:void(0);" class="orderSure-money-ticketb-submit" id="queryCashCoup"></a>
</td>
<td class="pl20">
<div class="orderSure-money-ticketb-time" style="display:none;" id="cashCoupInfo" cash="">
金额：<span class="red fw" id="cashCoupMoney">0</span> 元 有效期：<span id="cashCoupEndDate"></span>
<div class="orderSure-money-ticketb-time-dot"></div>
</div>
</td>
<td class="pl10" style="display:none;" id="useCashCoupSb">
<a href="javascript:void(0);" class="orderSure-money-ticketb-use" id="useCashCoup"></a>
</td>
<td><a href="javascript:void(0)" class="c5 ml20" id="cancelCashCoup" style="display:none;">取消</a></td>
<td id="cashCoupTip" class="pl20"></td>
</tr>
</tbody></table>
</div>
<div class="orderSure-money-ticket-dot"></div>
</div>
</div>-->
<div class="orderSure-line1"></div>
<p class="orderSure-allTotal-money">应付款：<span class="orderSure-allTotal-moneya" class="endVal" id="endVal1"></span> 元 </p>
<div class="mt15 ml20 p10 fw" style="width:940px; background:#fafafa; border:1px solid #ededed; overflow:hidden;">
<p class="fr f16">还需要支付总金额：<label class="red" class="endVal" id="endVal2"></label> 元</p>
<!--<p class="fr f16" style="padding-right:200px;">已优惠金额：<label class="red" id="promoVal">0</label>元</p>-->
<p class="tc f16">商品已支付：<label class="red" id="alreadyVal">0</label> 元</p>
</div>
<div class="payNew-all">
<div class="payNew-head">
<p>选择支付方式</p>
</div>
<div class="payNew-all-block">
<div class="payNew-style clearfix">
<ul class="payNew-style-right" id="zidTabs">
<!--<li tid="#idTab1" genre="1" tp="网上银行" name="pay_class" style="position:relative;zoom:1;overflow:visible;_overflow:hidden;" class="select">网上银行</li>-->
<li tid="#idTab2" genre="2" tp="在线支付" name="pay_class" style="position:relative;zoom:1;overflow:visible;_overflow:hidden;" class="">支付平台</li>
<!--<li tid="#idTab3" genre="3" tp="乐通卡" name="pay_class" id="ltk" class="">乐通卡</li>-->
</ul>
</div>
<div class="payNew-conts">
<div class="payNew-conts-show" id="payNew-conts-show">
<!--<div class="payNew-conts-showa">
<div style="border-bottom:1px dotted #ccc;margin-bottom:20px;width:800px;"></div>
<ul>
<li>
<input type="radio" name="bank" value="101159688" id="pay_400" payname="浦发信用卡">
<img src="http://pay.228.com.cn/icon/pf.png" title="spdbank" width="121" height="40">
</li>
</ul>
</div>-->
<div class="payNew-conts-showa">
<ul>
<li>
<input type="radio" name="bank" value="2217200" checked payname="支付宝">
<img src="img/alipay.jpg"/>
</li>
</ul>
<div class="payNew-conts-showa-dot" style="display:none;"></div>
</div>
<!--<div class="payNew-conts-showa undb" style="padding-left:40px;">
<div class="payNew-conts-showa-t1">
<table class="pay-xianj-tab">
<tbody><tr>
<td>乐通卡号：<input type="hidden" name="totalprice" id="totalprice" val="50"> </td>
<td width="170">
<input type="text" id="ltkno" name="ltkno" class="orderSure-input" style="width:140px;">
</td>
<td>密码：</td>
<td width="160">
<input type="password" id="ltkpwd" name="ltkpwd" class="orderSure-input" style="width:140px;">
</td>
</tr>
</tbody>
</table>
<div class="payNew-conts-showa-dot payNew-conts-showa-dot1"></div>
</div>
<div class="payNew-conts-showa-t2">
<p id="yl-ltk-info-default" class="red">
<b class="info-warn" style="display:none">请输入正确的乐通卡号或密码</b>
<b class="info-false" style="display:none;">乐通卡卡号或密码输入错误。</b>
</p>
<p id="yl-ltk-info-query" class="undb">
<span class="fl">乐通卡号：<span id="yl-ltk-no">0000 0000 0000 0000</span></span>
<span class="fl payNew-conts-showa-t2-sp2">余额：<span id="yl-ltk-price" class="red fw font-taho" style="display: none;">0</span> 元</span>
<span class="fl payNew-conts-showa-t2-sp3">
<b id="yl-ltk-info-query-ok" class="info-true-r">可全额支付</b>
<b id="yl-ltk-info-query-no" class="info-false" style="display:none;">卡内余额不足以全额支付本单，请使用其他方式支付。</b>
</span>
</p>
</div>
<div class="payNew-conts-showa-dot" style="display:none;"></div>
</div>-->
</div>
</div>
</div>
</div>
</div>
<div class="orderSure-allTotal-goto">
<!--<span class="orderSure-allTotal-gotoa"><a href="javascript:void(0)" class="orderSure-bom-submit" id="saveOrder"></a></span>
<span class="orderSure-allTotal-gotob"><input type="checkbox" id="iAgreeClause" name="iAgreeClause" value="1" checked="checked">&nbsp;&nbsp;我已阅读并同意 <a href="http://www.228.com.cn/about-fwtk.html" target="_blank" class="c5">永乐票务用户服务协议</a> <font id="returnTicketSureAgree" style="display: none;">和 <a href="http://www.228.com.cn/about-tpfwtk.html" class="c5">退票保险服务条款</a></font></span>-->
<form method="post" action="order_action.php" id="form1">
<input type="hidden" name="id" value="<?php echo $_POST["id"];?>"/>
<input type="hidden" name="show_title" value="<?php echo $show["show_title"];?>"/>
<input type="hidden" name="show_venue" value="<?php echo $show["show_venue"];?>"/>
<input type="hidden" name="data" value="" id="isLimit_data"/>
<input type="hidden" name="address" value="" id="isLimit_address"/>
<input type="hidden" name="addorder"/>
<a href="javascript:void(0)" style="margin-left:410px" class="orderSure-bom-submit" id="saveOrder"></a>
</form>
</div>
<div class="cb"></div>
<div class="orderSure-error-msg" id="orderSureError" style="display:none;">
<ul class="orderSure-error-msg-ul">
<li class="orderSure-error-msg-ulli" id="errorMsg"></li>
</ul>
</div>
</div>
<div class="lookaddress">
<div class="lookaddress-a">
北京市东城区王家园胡同16号 儿童福利大厦7层 （周一至周日 9:00—18:00）
<div class="lookaddress-dot"></div>
</div>
</div>
<script>(function(){var aBtn=document.getElementById('zidTabs').children;var aCon=document.getElementById('payNew-conts-show').children;for(var i=0;i<aBtn.length;i++)
{aBtn[i].index=i;aBtn[i].onclick=function(){for(var i=0;i<aBtn.length;i++)
{aBtn[i].className="";aCon[i].className="payNew-conts-showa undb";}
this.className="select";aCon[this.index].className="payNew-conts-showa";};}
})();(function(){var aBtn=document.getElementById('sendsty-tab').getElementsByTagName('input');var oCon=document.getElementById('con-all')
aBtn[0].onclick=function(){if(aBtn[0].checked==true)
{oCon.style.display="block";}
};aBtn[1].onclick=function(){if(aBtn[1].checked==true)
{oCon.style.display="none";}
};})();</script>
	<?php
	include_once("include/footer.php");
	?>
</div></body>
<script>
var order_amount=0;
$(function(){
	$(".order_subtotal").each(function(){
		var dataNum=Number($(this).text());
		order_amount += Number($(this).text());
	})
	$("#endVal").html(order_amount);
	$("#endVal1").html(order_amount);
	$("#endVal2").html(order_amount);
	
	$(".orderSure-address-addbtn").click(function(){
		$("#editCustomerAddr").css("display","block"); 
	})
	//添加新收货地址
	$(".orderSure-address-submit").click(function(){
		var province1=$("#province1").val();
		var city1=$("#city1").val();
		var district1=$("#district1").val();
		var street=$("#street").val();
		var zipcode=$("#zipcode").val();
		var true_name=$("#true_name").val();
		var true_phone=$("#true_phone").val();
		var email=$("#email").val();
		var default_stauts=$("#default_stauts").val();
		var addres_id=$("#addres_id").val();
		$.getJSON("include/address.php",{province:province1,city:city1,district:district1,street:street,zipcode:zipcode,true_name:true_name,true_phone:true_phone,email:email,default_stauts:default_stauts,id:addres_id},function(json){
				alert(json.alert);
				$("#province1").val(json.province);
				$("#city1").val(json.city);
				$("#district1").val(json.district);
				$("#street").val(json.street);
				$("#zipcode").val(json.zipcode);
				$("#true_name").val(json.true_name);
				$("#true_phone").val(json.true_phone);
				$("#email").val(json.email);
				$(".orderSure-addressa").html(json.province+" "+json.city+" "+json.district);
				$(".orderSure-addressb").html(json.true_name);
				$(".orderSure-addressc").html(json.true_phone);
		})
	})
	
	$("#saveOrder").click(function(){
		var province1=$("#province1").val();
		var city1=$("#city1").val();
		var district1=$("#district1").val();
		var street=$("#street").val();
		var true_name=$("#true_name").val();
		var true_phone=$("#true_phone").val();
		var zipcode=$("#zipcode").val();
		var sendStyle=$("input[name='sendStyle']:checked").val(); 
		var doorUserPhone=$("#doorUserPhone").val();	
		var doorUserName=$("#doorUserName").val();
		var order_amount=$("#endVal1").html();		
		/*
		var arr_seasons=$("#arr_seasons").text();
		var arr_price=$("#arr_price").text();
		var arr_num=$("#arr_num").text();
		var arr_subtotal=$("#arr_subtotal").text();
		var arr_pid=$("#arr_pid").text();
		var obj={
			 province:province1,
			 city:city1,
			 district:district1,
			 street:street,
			 true_name:true_name,
			 true_phone:true_phone, 
			 zipcode:zipcode
		}*/
		  var obj = new Array();
			obj[0] = $.trim(province1) +"|"+ $.trim(city1)  +"|"+ $.trim(district1)+"|"+$.trim(street)+"|"+$.trim(true_name)+"|"+$.trim(true_phone)+"|"+$.trim(zipcode)+"|"+$.trim(sendStyle)+"|"+$.trim(doorUserName)+"|"+$.trim(doorUserPhone)+"|"+$.trim(order_amount);
		var objs = JSON.stringify(obj);
		$("#isLimit_address").val(objs);
            var data = new Array();
            $("#border_data	 .arr_insPrice").each(function(s){
				data[s] = $.trim($(this).find(".arr_seasons").text()) +"|"+ $.trim($(this).find(".arr_price").text())  +"|"+ $.trim($(this).find(".arr_num").text())+"|"+$.trim($(this).find(".arr_subtotal").text())+"|"+$.trim($(this).find(".arr_pid").text());
            });
		var datas = JSON.stringify(data);	
		$("#isLimit_data").val(datas);
		$("#form1").submit();
	})
	
	 $("#doorRadio").click(function(){
		$("#editCustomerAddr").css("display","none"); 
	 }) 
	
	
	
	
	
	
	
	
})
</script>

</html>