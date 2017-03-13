<?php
	include_once("include/conn.inc.php");
	//if(empty($_GET["id"])){
	//	header("location:index.php");
	//}
	//$sql="select * from shows where id=$_GET[id]";
	$sql="select * from shows where id=1";
	$result=mysqli_query($link,$sql);
	while($show=mysqli_fetch_array($result)){
		$row=$show;
	}
	//var_dump($array["show_title"]);
	//exit();
?>
<!DOCTYPE html>
<html xmlns="">

  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title><?php echo $row["show_title"];?></title>
    <meta content="<?php echo $row["show_title"];?>" name="keywords">
    <meta content="<?php echo $row["show_title"];?>。" name="description">
    <link type="text/css" href="./css/reset.css" rel="stylesheet">
    <link type="text/css" href="./css/product201408.css" rel="stylesheet">
    <link rel="canonical" href="/ticket-231399594.html">
    <script type="text/javascript" id="veConnect" async="" src="./js/capture-apps-4.18.6.js"></script>
    <script async="" src="./js/tg.js"></script>
    <script async="" src="./js/analytics.js"></script>
    <script charset="utf-8" src="./js/v.js"></script>
    <script type="text/javascript" defer="" async="" src="./js/y.js"></script>
    <script type="text/javascript" async="" src="./js/adw.js"></script>
    <script type="text/javascript" defer="" async="" src="./js/jiuzhilan_4783.js"></script>
    <script src="./js/hm.js"></script>


    <!-- <script type="text/javascript" src="./js/publicNew.js"></script> -->
    <script type="text/javascript">function getPath() {
        return "";
      }</script>
    <script type="text/javascript">function getPath_fix() {
        return "";
      }</script>
    <!-- <script type="text/javascript" src="./js/jquery.cookie.js"></script> -->
    <!-- <script type="text/javascript" src="./js/lm.js"></script> -->
    <script type="text/javascript" src="./js/artTemplate.all.min.js"></script>
    <script type="text/javascript" src="./js/ld.js" async="true"></script>
	
	<style type="text/css">
#banner {position:relative;  border:1px solid #666; overflow:hidden;}
#banner_list img {border:0px;}
#banner_bg {position:absolute; bottom:0;background-color:#000;height:30px;filter: Alpha(Opacity=30);opacity:0.3;z-index:1000;cursor:pointer; width:478px; }
#banner_info{position:absolute; bottom:0; left:5px;height:22px;color:#fff;z-index:1001;cursor:pointer}
#banner_text {position:absolute;width:120px;z-index:1002; right:3px; bottom:3px;}
#banner ul {position:absolute;list-style-type:none;filter: Alpha(Opacity=80);opacity:0.8; border:1px solid #fff;z-index:1002;
			margin:0; padding:0; bottom:3px; right:5px;}
#banner ul li { padding:0px 8px;float:left;display:block;color:#FFF;border:#e5eaff 1px solid;background:#6f4f67;cursor:pointer}
#banner ul li.on { background:#900}
#banner_list a{position:absolute;} <!-- 让四张图片都可以重叠在一起-->
</style>
<script type="text/javascript" src="js/jquery-1.2.6.pack.js"></script>
    <script type="text/javascript">
	var t = n = 0, count;
	$(document).ready(function(){	
		count=$("#banner_list a").length;
		$("#banner_list a:not(:first-child)").hide();
		$("#banner_info").html($("#banner_list a:first-child").find("img").attr('alt'));
		$("#banner_info").click(function(){window.open($("#banner_list a:first-child").attr('href'), "_blank")});
		$("#banner li").click(function() {
			var i = $(this).text() - 1;//获取Li元素内的值，即1，2，3，4
			n = i;
			if (i >= count) return;
			$("#banner_info").html($("#banner_list a").eq(i).find("img").attr('alt'));
			$("#banner_info").unbind().click(function(){window.open($("#banner_list a").eq(i).attr('href'), "_blank")})
			$("#banner_list a").filter(":visible").fadeOut(500).parent().children().eq(i).fadeIn(1000);
			document.getElementById("banner").style.background="";
			$(this).toggleClass("on");
			$(this).siblings().removeAttr("class");
		});
		t = setInterval("showAuto()", 4000);
		$("#banner").hover(function(){clearInterval(t)}, function(){t = setInterval("showAuto()", 4000);});
	})
	
	function showAuto()
	{
		n = n >=(count - 1) ? 0 : ++n;
		$("#banner li").eq(n).trigger('click');
	}
</script>
    <script src="./js/share.js"></script>
    <link rel="stylesheet" href="./css/share_style0_32.css">
    <script type="text/javascript" async="async" charset="utf-8" src="./js/zh_cn.js" data-requiremodule="lang"></script>
    <script type="text/javascript" async="async" charset="utf-8" src="./js/chat.in.js" data-requiremodule="chatManage"></script>
    <script type="text/javascript" async="async" charset="utf-8" src="./js/mqtt31.js" data-requiremodule="MQTT"></script>
    <script type="text/javascript" async="async" charset="utf-8" src="./js/mqtt.chat.js" data-requiremodule="Connection"></script>
  </head>

  <body>
    <div id="nTalk_post_hiddenElement" style="left: -10px; top: -10px; visibility: hidden; display: none; width: 1px; height: 1px;"></div>
    <input type="hidden" value="N" id="customer_loginYn">
    <div id="caibei"></div>
   
	
    <div class="tongz" style="width:100%;display: none;">
      <div style="width:1000px;margin:0 auto;height:23px;">
        <div class="leftMsg fl" style="width:980px;text-align:center;color:#cc0001;"></div>
        <div class="fl" style="padding-top:6px;">
          <a style="cursor: pointer;" id="header-close">
            <img src=""></a>
        </div>
      </div>
      <div class="cb"></div>
    </div>
    <div class="login_msg productnew-login undb" id="jump-login" style="z-index:90000000000000;"></div>
    <script type="text/javascript" src="./js/artTemplate.all.min.js"></script>
    <!--[if IE 6]>
      <script type="text/javascript" src="http://static.228.com.cn/resources/js/png.js"></script>
      <script type="text/javascript">DD_belatedPNG.fix('.quick-guide li img');</script>
    <![endif]-->
	<div style="margin-bottom:10px;"></div>
	<?php
	include_once("include/header.php");
	?>

	<div id="banner">	
		<div id="banner_bg"></div>  <!--标题背景-->
		<div id="banner_info"></div> <!--标题-->
			<ul>
				<li class="on">1</li>
				<li>2</li>
				<li>3</li>
				<li>4</li>
			</ul>
		<div id="banner_list">
			<a href="#" target="_blank"><img src="imgs/p1.jpg" title="橡树小屋的blog" alt="橡树小屋的blog" /></a>
			<a href="#" target="_blank"><img src="imgs/p5.jpg" title="橡树小屋的blog" alt="橡树小屋的blog" /></a>
			<a href="#" target="_blank"><img src="imgs/p3.jpg" title="橡树小屋的blog" alt="橡树小屋的blog" /></a>
			<a href="#" target="_blank"><img src="imgs/p4.jpg" title="橡树小屋的blog" alt="橡树小屋的blog" /></a>
		</div>
	</div>
	
	


    <div class="ac_results" style="top: 92px; left: 793.5px; display: none;">
      <ul></ul>
    </div>

    <script type="text/javascript" src="./js/jquery.flipcountdown.js"></script>
    <input type="hidden" value="戏曲综艺" id="typea1">
    <input type="hidden" value="北京" id="cityname">
    <input type="hidden" value="1" id="display">
    <input type="hidden" value="0" id="status">
    <input type="hidden" value="54" id="dnum">
    <input type="hidden" value="231399594" name="productid" id="productid">
    <input type="hidden" value="/newonline-8924.html " id="dz_path">
	
 <!--   <div class="common-tit g-20">
      <a href="/">永乐票务</a>&gt;
      <a href="/category/xiquzongyi/">戏曲综艺</a>&gt;
      <a href="/category/xiquzongyi-maxizaji/">马戏杂技</a>&gt; 史诗巨制 《Cavalia·舞马》2.0升级版2017中国巡演—北京站</div>
	  -->
    <div class="main bor">
	<div id="title">
		<?php echo mb_substr($row["show_title"],0,35,'utf-8');?><span style="color:#C60014;">[<?php echo $row["show_stauts"];?>]</span>
      <a href="javascript:void(0)" data-url="/ajax/addfavorites.json" data-id="231399594" data-count="30" class="btn-love " id="JloveBtn" title="喜欢" rel="nofollow" style="left: 610.156px; top: 18px; display: inline;">
        <s>(30)</s>
      </a>
	</div>
      <div class="main-l">
        <img src="./img/1488359902815_p1q0-0.jpg" title="<?php echo $row["show_title"];?>" alt="<?php echo $row["show_stauts"];?>" width="288" height="384" id="pbigimg">
        <div class="bdsharebuttonbox mt10 bdshare-button-style0-32" data-bd-bind="1489026149441">
          <span class="weibo-l">分享到：</span>
          <a href="/ticket-231399594.html#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a>
          <a href="/ticket-231399594.html#" class="bds_weixin" data-cmd="weixin" title="分享到微信"></a>
          <a href="/ticket-231399594.html#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a>
          <a href="/ticket-231399594.html#" class="bds_douban" data-cmd="douban" title="分享到豆瓣网"></a>
          <a href="/ticket-231399594.html#" class="bds_mshare" data-cmd="mshare" title="分享到一键分享"></a>
          <a class="bds_count" data-cmd="count" title="累计分享0次">0</a></div>
      </div>
      <div class="main-r">
        <ul class="pro-info">
          <li>
            <label>时&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;间：</label><?php echo $row["show_time"];?></li>
          <li class="clearfix">
            <label>场&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;馆：</label>
            <a href="/venue-481506.html" class="fl" target="_blank"><?php echo $row["show_venue"];?></a></li>
          <li class="pro-infob clearfloat">
            <label>支&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;持：</label>
            <div class="pro-own">
              <s class="s-seat"></s>
              <a rel="nofollow" href="/common/onlineChoose.html" title="选座" target="_blank">选座</a>
              <s class="s-inte"></s>
              <a rel="nofollow" href="/help/jfdh.html" title="返积分" target="_blank">返积分</a>
              <s class="s-pxwy"></s>
              <a rel="nofollow" href="/help/pswy.html" title="票享无忧" target="_blank">票享无忧</a>
              <s class="zqpj"></s>
              <a rel="nofollow" href="javascript:;" title="自助取票机" target="_blank">自助取票机</a></div>
          </li>
          <li>
            <label>发货城市：</label><?php echo $row["shipping_city"];?></li></ul>
        <div class="favor">
          <ul>
            <li>【限时特惠票价】4月19日/21日/26日/27日19:30场次各价位，购买同价位门票第二张免费（买一赠一）、第三张半价。
              <br>【超值套票】仅￥1200元，即可购买价值1440元三人套票(480*3)
              <br>【超值套票】仅￥1200元，即可购买价值1360元双人套票(680*2)
              <br>【超值套票】仅￥1700元，即可购买价值2040元三人套票(680*3)</li></ul>
        </div>
        <a href="javascript:void(0);" class="btn-price-all" id="JpriceAll"></a>
        <div class="price-line"></div>
        <div>
          <div class="date clearfloat">
            <label>日期/场次：</label>
            <ul class="date-ul cq-heig" id="Jdate" style="height: 92px;">
              <li type="date" event="1" d="2017-04-19 19:30" cc="/onlineSeat.html?json=BdyW0GpCildnPQtGMyUkqErboUW%2BbqPMfOzBE6PSQUvZvFLMDAXcYk93QlFLMI2VqxzjAKBk2%2BMTv8jm75IEKt7YTe5ggFlOx7n4elXoc948Swji9av9BKdypWoHD1deTu4ipW40vilKKBndpIH2K7OITGiGf10ZK0kyvjVLEg4A1vi%2FEKdDCt9kWw9v6yDd9N5ErIN8RLg3Zxx7xwXJ2DVCIlJ5gaYl" title="2017-04-19  周三 19:30" class="on">2017-04-19
                <br>周三 19:30</li>
              <li type="date" event="1" d="2017-04-21 19:30" cc="/onlineSeat.html?json=BdyW0GpCildnPQtGMyUkqErboUW%2BbqPMfOzBE6PSQUsjWWZQc0jsqE93QlFLMI2VqxzjAKBk2%2BMTv8jm75IEKt7YTe5ggFlOx7n4elXoc948Swji9av9BKdypWoHD1deTu4ipW40vilKKBndpIH2K7OITGiGf10ZK0kyvjVLEg4A1vi%2FEKdDCt9kWw9v6yDd9N5ErIN8RLg3Zxx7xwXJ2DVCIlJ5gaYl" title="2017-04-21  周五 19:30">2017-04-21
                <br>周五 19:30</li>
              <li type="date" event="1" d="2017-04-22 14:30" cc="/onlineSeat.html?json=BdyW0GpCildnPQtGMyUkqErboUW%2BbqPMfOzBE6PSQUviLB0J1CyXBk93QlFLMI2VqxzjAKBk2%2BMTv8jm75IEKt7YTe5ggFlOx7n4elXoc948Swji9av9BKdypWoHD1deTu4ipW40vilKKBndpIH2K7OITGiGf10ZK0kyvjVLEg4A1vi%2FEKdDCt9kWw9v6yDd9N5ErIN8RLg3Zxx7xwXJ2DVCIlJ5gaYl" title="2017-04-22  周六 14:30">2017-04-22
                <br>
                <b class="red">周六</b>14:30</li>
              <li type="date" event="1" d="2017-04-22 19:30" cc="/onlineSeat.html?json=BdyW0GpCildnPQtGMyUkqErboUW%2BbqPMfOzBE6PSQUu%2FcG8QhuHdjE93QlFLMI2VqxzjAKBk2%2BMTv8jm75IEKt7YTe5ggFlOx7n4elXoc948Swji9av9BKdypWoHD1deTu4ipW40vilKKBndpIH2K7OITGiGf10ZK0kyvjVLEg4A1vi%2FEKdDCt9kWw9v6yDd9N5ErIN8RLg3Zxx7xwXJ2DVCIlJ5gaYl" title="2017-04-22  周六 19:30">2017-04-22
                <br>
                <b class="red">周六</b>19:30</li>
              <li type="date" event="1" d="2017-04-23 14:30" cc="/onlineSeat.html?json=BdyW0GpCildnPQtGMyUkqErboUW%2BbqPMfOzBE6PSQUt4Tfuy21DUVk93QlFLMI2VqxzjAKBk2%2BMTv8jm75IEKt7YTe5ggFlOx7n4elXoc948Swji9av9BKdypWoHD1deTu4ipW40vilKKBndpIH2K7OITGiGf10ZK0kyvjVLEg4A1vi%2FEKdDCt9kWw9v6yDd9N5ErIN8RLg3Zxx7xwXJ2DVCIlJ5gaYl" title="2017-04-23  周日 14:30">2017-04-23
                <br>
                <b class="red">周日</b>14:30</li>
              <li type="date" event="1" d="2017-04-23 19:30" cc="/onlineSeat.html?json=BdyW0GpCildnPQtGMyUkqErboUW%2BbqPMfOzBE6PSQUudmlcoqqkKCU93QlFLMI2VqxzjAKBk2%2BMTv8jm75IEKt7YTe5ggFlOx7n4elXoc948Swji9av9BKdypWoHD1deTu4ipW40vilKKBndpIH2K7OITGiGf10ZK0kyvjVLEg4A1vi%2FEKdDCt9kWw9v6yDd9N5ErIN8RLg3Zxx7xwXJ2DVCIlJ5gaYl" title="2017-04-23  周日 19:30">2017-04-23
                <br>
                <b class="red">周日</b>19:30</li>
              <li type="date" event="1" d="2017-04-26 19:30" cc="/onlineSeat.html?json=BdyW0GpCildnPQtGMyUkqErboUW%2BbqPMfOzBE6PSQUv7bSBybvwoxk93QlFLMI2VqxzjAKBk2%2BMTv8jm75IEKt7YTe5ggFlOx7n4elXoc948Swji9av9BKdypWoHD1deTu4ipW40vilKKBndpIH2K7OITGiGf10ZK0kyvjVLEg4A1vi%2FEKdDCt9kWw9v6yDd9N5ErIN8RLg3Zxx7xwXJ2DVCIlJ5gaYl" title="2017-04-26  周三 19:30">2017-04-26
                <br>周三 19:30</li>
              <li type="date" event="1" d="2017-04-27 19:30" cc="/onlineSeat.html?json=BdyW0GpCildnPQtGMyUkqErboUW%2BbqPMfOzBE6PSQUto%2F3p25wY46E93QlFLMI2VqxzjAKBk2%2BMTv8jm75IEKt7YTe5ggFlOx7n4elXoc948Swji9av9BKdypWoHD1deTu4ipW40vilKKBndpIH2K7OITGiGf10ZK0kyvjVLEg4A1vi%2FEKdDCt9kWw9v6yDd9N5ErIN8RLg3Zxx7xwXJ2DVCIlJ5gaYl" title="2017-04-27  周四 19:30">2017-04-27
                <br>周四 19:30</li>
              <li type="date" event="1" d="2017-04-29 14:30" cc="/onlineSeat.html?json=BdyW0GpCildnPQtGMyUkqErboUW%2BbqPMfOzBE6PSQUsMQpsEdFDY7U93QlFLMI2VqxzjAKBk2%2BMTv8jm75IEKt7YTe5ggFlOx7n4elXoc948Swji9av9BKdypWoHD1deTu4ipW40vilKKBndpIH2K7OITGiGf10ZK0kyvjVLEg4A1vi%2FEKdDCt9kWw9v6yDd9N5ErIN8RLg3Zxx7xwXJ2DVCIlJ5gaYl" title="2017-04-29  周六 14:30">2017-04-29
                <br>
                <b class="red">周六</b>14:30</li>
              <li type="date" event="1" d="2017-04-29 19:30" cc="/onlineSeat.html?json=BdyW0GpCildnPQtGMyUkqErboUW%2BbqPMfOzBE6PSQUuFjUfuQ4mkAE93QlFLMI2VqxzjAKBk2%2BMTv8jm75IEKt7YTe5ggFlOx7n4elXoc948Swji9av9BKdypWoHD1deTu4ipW40vilKKBndpIH2K7OITGiGf10ZK0kyvjVLEg4A1vi%2FEKdDCt9kWw9v6yDd9N5ErIN8RLg3Zxx7xwXJ2DVCIlJ5gaYl" title="2017-04-29  周六 19:30">2017-04-29
                <br>
                <b class="red">周六</b>19:30</li>
              <li type="date" event="1" d="2017-04-30 14:30" cc="/onlineSeat.html?json=BdyW0GpCildnPQtGMyUkqErboUW%2BbqPMfOzBE6PSQUvs80kocwwxeE93QlFLMI2VqxzjAKBk2%2BMTv8jm75IEKt7YTe5ggFlOx7n4elXoc948Swji9av9BKdypWoHD1deTu4ipW40vilKKBndpIH2K7OITGiGf10ZK0kyvjVLEg4A1vi%2FEKdDCt9kWw9v6yDd9N5ErIN8RLg3Zxx7xwXJ2DVCIlJ5gaYl" title="2017-04-30  周日 14:30">2017-04-30
                <br>
                <b class="red">周日</b>14:30</li>
              <li type="date" event="1" d="2017-04-30 19:30" cc="/onlineSeat.html?json=BdyW0GpCildnPQtGMyUkqErboUW%2BbqPMfOzBE6PSQUuGq047pG%2BRK093QlFLMI2VqxzjAKBk2%2BMTv8jm75IEKt7YTe5ggFlOx7n4elXoc948Swji9av9BKdypWoHD1deTu4ipW40vilKKBndpIH2K7OITGiGf10ZK0kyvjVLEg4A1vi%2FEKdDCt9kWw9v6yDd9N5ErIN8RLg3Zxx7xwXJ2DVCIlJ5gaYl" title="2017-04-30  周日 19:30">2017-04-30
                <br>
                <b class="red">周日</b>19:30</li>
              <li type="date" event="1" d="2017-05-01 19:30" cc="/onlineSeat.html?json=BdyW0GpCildnPQtGMyUkqErboUW%2BbqPMfOzBE6PSQUtTIxzc4HGlOE93QlFLMI2VqxzjAKBk2%2BMTv8jm75IEKt7YTe5ggFlOx7n4elXoc948Swji9av9BKdypWoHD1deTu4ipW40vilKKBndpIH2K7OITGiGf10ZK0kyvjVLEg4A1vi%2FEKdDCt9kWw9v6yDd9N5ErIN8RLg3Zxx7xwXJ2DVCIlJ5gaYl" title="2017-05-01  周一 19:30">2017-05-01
                <br>周一 19:30</li></ul>
          </div>
          <div class="cq-more">
            <a href="javascript:void(0);" class="btn-cq-com cq-hide" id="JcqHide"></a>
            <a href="javascript:void(0);" class="btn-cq-com cq-show" id="JcqShow" style="display:none;"></a>
          </div>
          <div class="date price clearfloat">
            <div class="price-cont">
              <div class="productnew-header-pricea2-dot dot2" style="display:none"></div>
            </div>
            <div class="js-mobile" style="display:none;"></div>
            <label>选择价格：</label>
            <ul class="date-ul price-ck price-l" id="Jprice">
              <li pstatus="0" class="over" style="display: table; background-position: 100% -205px;" type="price" zp="180" w="0" btt="" systime="2017-03-08 23:40:25" rel="180" d="2017-04-19 19:30" s="2" t="1" n="-1" l="-1" p="232556720" title="180" xzpriceid="7" typeid="142454" productid="231399594" name="史诗巨制 《Cavalia·舞马》2.0升级版2017中国巡演—北京站" productimgpath="http://static.228.cn/upload/2017/03/01/AfterTreatment/1488359902815_p1q0-0.jpg" pinpainame="永乐票务" pinpaiid="70153" rs="rnd1">
                <span>
                  <i>180</i>
                </span>
              </li>
              <li pstatus="0" class="over" style="display: table; background-position: 100% -205px;" type="price" zp="180" w="0" btt="" systime="2017-03-08 23:40:25" rel="180" d="2017-04-19 19:30" s="2" t="2" n="-1" l="-1" p="232556731" title="180(180*2)" xzpriceid="7" typeid="142454" productid="231399594" name="史诗巨制 《Cavalia·舞马》2.0升级版2017中国巡演—北京站" productimgpath="http://static.228.cn/upload/2017/03/01/AfterTreatment/1488359902815_p1q0-0.jpg" pinpainame="永乐票务" pinpaiid="70153" rs="rnd2">
                <span>
                  <i>180(180*2)</i>
                </span>
              </li>
              <li pstatus="0" class="over" style="display: none; background-position: 100% -205px;" type="price" zp="180" w="0" btt="" systime="2017-03-08 23:40:25" rel="180" d="2017-04-21 19:30" s="2" t="1" n="-1" l="-1" p="232556738" title="180" xzpriceid="7" typeid="142454" productid="231399594" name="史诗巨制 《Cavalia·舞马》2.0升级版2017中国巡演—北京站" productimgpath="http://static.228.cn/upload/2017/03/01/AfterTreatment/1488359902815_p1q0-0.jpg" pinpainame="永乐票务" pinpaiid="70153" rs="rnd3">
                <span>
                  <i>180</i>
                </span>
              </li>
              <li pstatus="0" class="over" style="display: none; background-position: 100% -205px;" type="price" zp="180" w="0" btt="" systime="2017-03-08 23:40:25" rel="180" d="2017-04-21 19:30" s="2" t="2" n="-1" l="-1" p="232556749" title="180(180*2)" xzpriceid="7" typeid="142454" productid="231399594" name="史诗巨制 《Cavalia·舞马》2.0升级版2017中国巡演—北京站" productimgpath="http://static.228.cn/upload/2017/03/01/AfterTreatment/1488359902815_p1q0-0.jpg" pinpainame="永乐票务" pinpaiid="70153" rs="rnd4">
                <span>
                  <i>180(180*2)</i>
                </span>
              </li>
              <li pstatus="0" class="over" style="display: none; background-position: 100% -205px;" type="price" zp="180" w="0" btt="" systime="2017-03-08 23:40:25" rel="180" d="2017-04-22 14:30" s="2" t="1" n="-1" l="-1" p="232556802" title="180" xzpriceid="7" typeid="142454" productid="231399594" name="史诗巨制 《Cavalia·舞马》2.0升级版2017中国巡演—北京站" productimgpath="http://static.228.cn/upload/2017/03/01/AfterTreatment/1488359902815_p1q0-0.jpg" pinpainame="永乐票务" pinpaiid="70153" rs="rnd5">
                <span>
                  <i>180</i>
                </span>
              </li>
              <li pstatus="0" class="over" style="display: none; background-position: 100% -205px;" type="price" zp="180" w="0" btt="" systime="2017-03-08 23:40:25" rel="180" d="2017-04-22 19:30" s="2" t="1" n="-1" l="-1" p="232556792" title="180" xzpriceid="7" typeid="142454" productid="231399594" name="史诗巨制 《Cavalia·舞马》2.0升级版2017中国巡演—北京站" productimgpath="http://static.228.cn/upload/2017/03/01/AfterTreatment/1488359902815_p1q0-0.jpg" pinpainame="永乐票务" pinpaiid="70153" rs="rnd6">
                <span>
                  <i>180</i>
                </span>
              </li>
              <li pstatus="0" class="over" style="display: none; background-position: 100% -205px;" type="price" zp="180" w="0" btt="" systime="2017-03-08 23:40:25" rel="180" d="2017-04-23 14:30" s="2" t="1" n="-1" l="-1" p="232556822" title="180" xzpriceid="7" typeid="142454" productid="231399594" name="史诗巨制 《Cavalia·舞马》2.0升级版2017中国巡演—北京站" productimgpath="http://static.228.cn/upload/2017/03/01/AfterTreatment/1488359902815_p1q0-0.jpg" pinpainame="永乐票务" pinpaiid="70153" rs="rnd7">
                <span>
                  <i>180</i>
                </span>
              </li>
              <li pstatus="0" class="over" style="display: none; background-position: 100% -205px;" type="price" zp="180" w="0" btt="" systime="2017-03-08 23:40:25" rel="180" d="2017-04-23 19:30" s="2" t="1" n="-1" l="-1" p="232556812" title="180" xzpriceid="7" typeid="142454" productid="231399594" name="史诗巨制 《Cavalia·舞马》2.0升级版2017中国巡演—北京站" productimgpath="http://static.228.cn/upload/2017/03/01/AfterTreatment/1488359902815_p1q0-0.jpg" pinpainame="永乐票务" pinpaiid="70153" rs="rnd8">
                <span>
                  <i>180</i>
                </span>
              </li>
              <li pstatus="0" class="over" style="display: none; background-position: 100% -205px;" type="price" zp="180" w="0" btt="" systime="2017-03-08 23:40:25" rel="180" d="2017-04-26 19:30" s="2" t="1" n="-1" l="-1" p="232556756" title="180" xzpriceid="7" typeid="142454" productid="231399594" name="史诗巨制 《Cavalia·舞马》2.0升级版2017中国巡演—北京站" productimgpath="http://static.228.cn/upload/2017/03/01/AfterTreatment/1488359902815_p1q0-0.jpg" pinpainame="永乐票务" pinpaiid="70153" rs="rnd9">
                <span>
                  <i>180</i>
                </span>
              </li>
              <li pstatus="0" class="over" style="display: none; background-position: 100% -205px;" type="price" zp="180" w="0" btt="" systime="2017-03-08 23:40:25" rel="180" d="2017-04-26 19:30" s="2" t="2" n="-1" l="-1" p="232556767" title="180(180*2)" xzpriceid="7" typeid="142454" productid="231399594" name="史诗巨制 《Cavalia·舞马》2.0升级版2017中国巡演—北京站" productimgpath="http://static.228.cn/upload/2017/03/01/AfterTreatment/1488359902815_p1q0-0.jpg" pinpainame="永乐票务" pinpaiid="70153" rs="rnd10">
                <span>
                  <i>180(180*2)</i>
                </span>
              </li>
              <li pstatus="0" class="over" style="display: none; background-position: 100% -205px;" type="price" zp="180" w="0" btt="" systime="2017-03-08 23:40:25" rel="180" d="2017-04-27 19:30" s="2" t="1" n="-1" l="-1" p="232556774" title="180" xzpriceid="7" typeid="142454" productid="231399594" name="史诗巨制 《Cavalia·舞马》2.0升级版2017中国巡演—北京站" productimgpath="http://static.228.cn/upload/2017/03/01/AfterTreatment/1488359902815_p1q0-0.jpg" pinpainame="永乐票务" pinpaiid="70153" rs="rnd11">
                <span>
                  <i>180</i>
                </span>
              </li>
              <li pstatus="0" class="over" style="display: none; background-position: 100% -205px;" type="price" zp="180" w="0" btt="" systime="2017-03-08 23:40:25" rel="180" d="2017-04-27 19:30" s="2" t="2" n="-1" l="-1" p="232556785" title="180(180*2)" xzpriceid="7" typeid="142454" productid="231399594" name="史诗巨制 《Cavalia·舞马》2.0升级版2017中国巡演—北京站" productimgpath="http://static.228.cn/upload/2017/03/01/AfterTreatment/1488359902815_p1q0-0.jpg" pinpainame="永乐票务" pinpaiid="70153" rs="rnd12">
                <span>
                  <i>180(180*2)</i>
                </span>
              </li>
              <li pstatus="0" class="over" style="display: none; background-position: 100% -205px;" type="price" zp="180" w="0" btt="" systime="2017-03-08 23:40:25" rel="180" d="2017-04-29 14:30" s="2" t="1" n="-1" l="-1" p="232556842" title="180" xzpriceid="7" typeid="142454" productid="231399594" name="史诗巨制 《Cavalia·舞马》2.0升级版2017中国巡演—北京站" productimgpath="http://static.228.cn/upload/2017/03/01/AfterTreatment/1488359902815_p1q0-0.jpg" pinpainame="永乐票务" pinpaiid="70153" rs="rnd13">
                <span>
                  <i>180</i>
                </span>
              </li>
              <li pstatus="0" class="over" style="display: none; background-position: 100% -205px;" type="price" zp="180" w="0" btt="" systime="2017-03-08 23:40:25" rel="180" d="2017-04-29 19:30" s="2" t="1" n="-1" l="-1" p="232556832" title="180" xzpriceid="7" typeid="142454" productid="231399594" name="史诗巨制 《Cavalia·舞马》2.0升级版2017中国巡演—北京站" productimgpath="http://static.228.cn/upload/2017/03/01/AfterTreatment/1488359902815_p1q0-0.jpg" pinpainame="永乐票务" pinpaiid="70153" rs="rnd14">
                <span>
                  <i>180</i>
                </span>
              </li>
              <li pstatus="0" class="over" style="display: none; background-position: 100% -205px;" type="price" zp="180" w="0" btt="" systime="2017-03-08 23:40:25" rel="180" d="2017-04-30 14:30" s="2" t="1" n="-1" l="-1" p="232556862" title="180" xzpriceid="7" typeid="142454" productid="231399594" name="史诗巨制 《Cavalia·舞马》2.0升级版2017中国巡演—北京站" productimgpath="http://static.228.cn/upload/2017/03/01/AfterTreatment/1488359902815_p1q0-0.jpg" pinpainame="永乐票务" pinpaiid="70153" rs="rnd15">
                <span>
                  <i>180</i>
                </span>
              </li>
              <li pstatus="0" class="over" style="display: none; background-position: 100% -205px;" type="price" zp="180" w="0" btt="" systime="2017-03-08 23:40:25" rel="180" d="2017-04-30 19:30" s="2" t="1" n="-1" l="-1" p="232556852" title="180" xzpriceid="7" typeid="142454" productid="231399594" name="史诗巨制 《Cavalia·舞马》2.0升级版2017中国巡演—北京站" productimgpath="http://static.228.cn/upload/2017/03/01/AfterTreatment/1488359902815_p1q0-0.jpg" pinpainame="永乐票务" pinpaiid="70153" rs="rnd16">
                <span>
                  <i>180</i>
                </span>
              </li>
              <li pstatus="0" class="over" style="display: none; background-position: 100% -205px;" type="price" zp="180" w="0" btt="" systime="2017-03-08 23:40:25" rel="180" d="2017-05-01 19:30" s="2" t="1" n="-1" l="-1" p="232556872" title="180" xzpriceid="7" typeid="142454" productid="231399594" name="史诗巨制 《Cavalia·舞马》2.0升级版2017中国巡演—北京站" productimgpath="http://static.228.cn/upload/2017/03/01/AfterTreatment/1488359902815_p1q0-0.jpg" pinpainame="永乐票务" pinpaiid="70153" rs="rnd17">
                <span>
                  <i>180</i>
                </span>
              </li>
              <li pstatus="0" class="over" style="display: table; background-position: 100% -205px;" type="price" zp="270" w="0" btt="" systime="2017-03-08 23:40:25" rel="270" d="2017-04-19 19:30" s="2" t="2" n="-1" l="-1" p="232556737" title="270(180*3)" xzpriceid="7" typeid="142454" productid="231399594" name="史诗巨制 《Cavalia·舞马》2.0升级版2017中国巡演—北京站" productimgpath="http://static.228.cn/upload/2017/03/01/AfterTreatment/1488359902815_p1q0-0.jpg" pinpainame="永乐票务" pinpaiid="70153" rs="rnd18">
                <span>
                  <i>270(180*3)</i>
                </span>
              </li>
              <li pstatus="0" class="over" style="display: none; background-position: 100% -205px;" type="price" zp="270" w="0" btt="" systime="2017-03-08 23:40:25" rel="270" d="2017-04-21 19:30" s="2" t="2" n="-1" l="-1" p="232556755" title="270(180*3)" xzpriceid="7" typeid="142454" productid="231399594" name="史诗巨制 《Cavalia·舞马》2.0升级版2017中国巡演—北京站" productimgpath="http://static.228.cn/upload/2017/03/01/AfterTreatment/1488359902815_p1q0-0.jpg" pinpainame="永乐票务" pinpaiid="70153" rs="rnd19">
                <span>
                  <i>270(180*3)</i>
                </span>
              </li>
              <li pstatus="0" class="over" style="display: none; background-position: 100% -205px;" type="price" zp="270" w="0" btt="" systime="2017-03-08 23:40:25" rel="270" d="2017-04-26 19:30" s="2" t="2" n="-1" l="-1" p="232556773" title="270(180*3)" xzpriceid="7" typeid="142454" productid="231399594" name="史诗巨制 《Cavalia·舞马》2.0升级版2017中国巡演—北京站" productimgpath="http://static.228.cn/upload/2017/03/01/AfterTreatment/1488359902815_p1q0-0.jpg" pinpainame="永乐票务" pinpaiid="70153" rs="rnd20">
                <span>
                  <i>270(180*3)</i>
                </span>
              </li>
              <li pstatus="0" class="over" style="display: none; background-position: 100% -205px;" type="price" zp="270" w="0" btt="" systime="2017-03-08 23:40:25" rel="270" d="2017-04-27 19:30" s="2" t="2" n="-1" l="-1" p="232556791" title="270(180*3)" xzpriceid="7" typeid="142454" productid="231399594" name="史诗巨制 《Cavalia·舞马》2.0升级版2017中国巡演—北京站" productimgpath="http://static.228.cn/upload/2017/03/01/AfterTreatment/1488359902815_p1q0-0.jpg" pinpainame="永乐票务" pinpaiid="70153" rs="rnd21">
                <span>
                  <i>270(180*3)</i>
                </span>
              </li>
              <li pstatus="0" class="over" style="display: table; background-position: 100% -205px;" type="price" zp="280" w="0" btt="" systime="2017-03-08 23:40:25" rel="280" d="2017-04-19 19:30" s="2" t="1" n="-1" l="-1" p="232556721" title="280" xzpriceid="6" typeid="142454" productid="231399594" name="史诗巨制 《Cavalia·舞马》2.0升级版2017中国巡演—北京站" productimgpath="http://static.228.cn/upload/2017/03/01/AfterTreatment/1488359902815_p1q0-0.jpg" pinpainame="永乐票务" pinpaiid="70153" rs="rnd22">
                <span>
                  <i>280</i>
                </span>
              </li>
              <li pstatus="0" class="over" style="display: table; background-position: 100% -205px;" type="price" zp="280" w="0" btt="" systime="2017-03-08 23:40:25" rel="280" d="2017-04-19 19:30" s="2" t="2" n="-1" l="-1" p="232556730" title="280(280*2)" xzpriceid="6" typeid="142454" productid="231399594" name="史诗巨制 《Cavalia·舞马》2.0升级版2017中国巡演—北京站" productimgpath="http://static.228.cn/upload/2017/03/01/AfterTreatment/1488359902815_p1q0-0.jpg" pinpainame="永乐票务" pinpaiid="70153" rs="rnd23">
                <span>
                  <i>280(280*2)</i>
                </span>
              </li>
              <li pstatus="0" class="over" style="display: none; background-position: 100% -205px;" type="price" zp="280" w="0" btt="" systime="2017-03-08 23:40:25" rel="280" d="2017-04-21 19:30" s="2" t="1" n="-1" l="-1" p="232556739" title="280" xzpriceid="6" typeid="142454" productid="231399594" name="史诗巨制 《Cavalia·舞马》2.0升级版2017中国巡演—北京站" productimgpath="http://static.228.cn/upload/2017/03/01/AfterTreatment/1488359902815_p1q0-0.jpg" pinpainame="永乐票务" pinpaiid="70153" rs="rnd24">
                <span>
                  <i>280</i>
                </span>
              </li>
              <li pstatus="0" class="over" style="display: none; background-position: 100% -205px;" type="price" zp="280" w="0" btt="" systime="2017-03-08 23:40:25" rel="280" d="2017-04-21 19:30" s="2" t="2" n="-1" l="-1" p="232556748" title="280(280*2)" xzpriceid="6" typeid="142454" productid="231399594" name="史诗巨制 《Cavalia·舞马》2.0升级版2017中国巡演—北京站" productimgpath="http://static.228.cn/upload/2017/03/01/AfterTreatment/1488359902815_p1q0-0.jpg" pinpainame="永乐票务" pinpaiid="70153" rs="rnd25">
                <span>
                  <i>280(280*2)</i>
                </span>
              </li>
              <li pstatus="0" type="price" zp="280" w="0" btt="" systime="2017-03-08 23:40:25" rel="280" d="2017-04-22 14:30" s="1" t="1" n="-1" l="-1" p="232556803" title="280" style="display: none;" xzpriceid="6" typeid="142454" productid="231399594" name="史诗巨制 《Cavalia·舞马》2.0升级版2017中国巡演—北京站" productimgpath="http://static.228.cn/upload/2017/03/01/AfterTreatment/1488359902815_p1q0-0.jpg" pinpainame="永乐票务" pinpaiid="70153" rs="rnd26">
                <span>
                  <i>280</i>
                </span>
              </li>
              <li pstatus="0" type="price" zp="280" w="0" btt="" systime="2017-03-08 23:40:25" rel="280" d="2017-04-22 19:30" s="1" t="1" n="-1" l="-1" p="232556793" title="280" style="display: none;" xzpriceid="6" typeid="142454" productid="231399594" name="史诗巨制 《Cavalia·舞马》2.0升级版2017中国巡演—北京站" productimgpath="http://static.228.cn/upload/2017/03/01/AfterTreatment/1488359902815_p1q0-0.jpg" pinpainame="永乐票务" pinpaiid="70153" rs="rnd27">
                <span>
                  <i>280</i>
                </span>
              </li>
              <li pstatus="0" type="price" zp="280" w="0" btt="" systime="2017-03-08 23:40:25" rel="280" d="2017-04-23 14:30" s="1" t="1" n="-1" l="-1" p="232556823" title="280" style="display: none;" xzpriceid="6" typeid="142454" productid="231399594" name="史诗巨制 《Cavalia·舞马》2.0升级版2017中国巡演—北京站" productimgpath="http://static.228.cn/upload/2017/03/01/AfterTreatment/1488359902815_p1q0-0.jpg" pinpainame="永乐票务" pinpaiid="70153" rs="rnd28">
                <span>
                  <i>280</i>
                </span>
              </li>
              <li pstatus="0" type="price" zp="280" w="0" btt="" systime="2017-03-08 23:40:25" rel="280" d="2017-04-23 19:30" s="1" t="1" n="-1" l="-1" p="232556813" title="280" style="display: none;" xzpriceid="6" typeid="142454" productid="231399594" name="史诗巨制 《Cavalia·舞马》2.0升级版2017中国巡演—北京站" productimgpath="http://static.228.cn/upload/2017/03/01/AfterTreatment/1488359902815_p1q0-0.jpg" pinpainame="永乐票务" pinpaiid="70153" rs="rnd29">
                <span>
                  <i>280</i>
                </span>
              </li>
              <li pstatus="0" type="price" zp="280" w="0" btt="" systime="2017-03-08 23:40:25" rel="280" d="2017-04-26 19:30" s="1" t="1" n="-1" l="-1" p="232556757" title="280" style="display: none;" xzpriceid="6" typeid="142454" productid="231399594" name="史诗巨制 《Cavalia·舞马》2.0升级版2017中国巡演—北京站" productimgpath="http://static.228.cn/upload/2017/03/01/AfterTreatment/1488359902815_p1q0-0.jpg" pinpainame="永乐票务" pinpaiid="70153" rs="rnd30">
                <span>
                  <i>280</i>
                </span>
              </li>
              <li pstatus="0" type="price" zp="280" w="0" btt="" systime="2017-03-08 23:40:25" rel="280" d="2017-04-26 19:30" s="1" t="2" n="-1" l="-1" p="232556766" title="280(280*2)" style="display: none;" xzpriceid="6" typeid="142454" productid="231399594" name="史诗巨制 《Cavalia·舞马》2.0升级版2017中国巡演—北京站" productimgpath="http://static.228.cn/upload/2017/03/01/AfterTreatment/1488359902815_p1q0-0.jpg" pinpainame="永乐票务" pinpaiid="70153" rs="rnd31">
                <span>
                  <i>280(280*2)</i>
                </span>
              </li>
              <li pstatus="0" type="price" zp="280" w="0" btt="" systime="2017-03-08 23:40:25" rel="280" d="2017-04-27 19:30" s="1" t="1" n="-1" l="-1" p="232556775" title="280" style="display: none;" xzpriceid="6" typeid="142454" productid="231399594" name="史诗巨制 《Cavalia·舞马》2.0升级版2017中国巡演—北京站" productimgpath="http://static.228.cn/upload/2017/03/01/AfterTreatment/1488359902815_p1q0-0.jpg" pinpainame="永乐票务" pinpaiid="70153" rs="rnd32">
                <span>
                  <i>280</i>
                </span>
              </li>
              <li pstatus="0" type="price" zp="280" w="0" btt="" systime="2017-03-08 23:40:25" rel="280" d="2017-04-27 19:30" s="1" t="2" n="-1" l="-1" p="232556784" title="280(280*2)" style="display: none;" xzpriceid="6" typeid="142454" productid="231399594" name="史诗巨制 《Cavalia·舞马》2.0升级版2017中国巡演—北京站" productimgpath="http://static.228.cn/upload/2017/03/01/AfterTreatment/1488359902815_p1q0-0.jpg" pinpainame="永乐票务" pinpaiid="70153" rs="rnd33">
                <span>
                  <i>280(280*2)</i>
                </span>
              </li>
              <li pstatus="0" type="price" zp="280" w="0" btt="" systime="2017-03-08 23:40:25" rel="280" d="2017-04-29 14:30" s="1" t="1" n="-1" l="-1" p="232556843" title="280" style="display: none;" xzpriceid="6" typeid="142454" productid="231399594" name="史诗巨制 《Cavalia·舞马》2.0升级版2017中国巡演—北京站" productimgpath="http://static.228.cn/upload/2017/03/01/AfterTreatment/1488359902815_p1q0-0.jpg" pinpainame="永乐票务" pinpaiid="70153" rs="rnd34">
                <span>
                  <i>280</i>
                </span>
              </li>
              <li pstatus="0" type="price" zp="280" w="0" btt="" systime="2017-03-08 23:40:25" rel="280" d="2017-04-29 19:30" s="1" t="1" n="-1" l="-1" p="232556833" title="280" style="display: none;" xzpriceid="6" typeid="142454" productid="231399594" name="史诗巨制 《Cavalia·舞马》2.0升级版2017中国巡演—北京站" productimgpath="http://static.228.cn/upload/2017/03/01/AfterTreatment/1488359902815_p1q0-0.jpg" pinpainame="永乐票务" pinpaiid="70153" rs="rnd35">
                <span>
                  <i>280</i>
                </span>
              </li>
              <li pstatus="0" type="price" zp="280" w="0" btt="" systime="2017-03-08 23:40:25" rel="280" d="2017-04-30 14:30" s="1" t="1" n="-1" l="-1" p="232556863" title="280" style="display: none;" xzpriceid="6" typeid="142454" productid="231399594" name="史诗巨制 《Cavalia·舞马》2.0升级版2017中国巡演—北京站" productimgpath="http://static.228.cn/upload/2017/03/01/AfterTreatment/1488359902815_p1q0-0.jpg" pinpainame="永乐票务" pinpaiid="70153" rs="rnd36">
                <span>
                  <i>280</i>
                </span>
              </li>
              <li pstatus="0" type="price" zp="280" w="0" btt="" systime="2017-03-08 23:40:25" rel="280" d="2017-04-30 19:30" s="1" t="1" n="-1" l="-1" p="232556853" title="280" style="display: none;" xzpriceid="6" typeid="142454" productid="231399594" name="史诗巨制 《Cavalia·舞马》2.0升级版2017中国巡演—北京站" productimgpath="http://static.228.cn/upload/2017/03/01/AfterTreatment/1488359902815_p1q0-0.jpg" pinpainame="永乐票务" pinpaiid="70153" rs="rnd37">
                <span>
                  <i>280</i>
                </span>
              </li>
              <li pstatus="0" type="price" zp="280" w="0" btt="" systime="2017-03-08 23:40:25" rel="280" d="2017-05-01 19:30" s="1" t="1" n="-1" l="-1" p="232556873" title="280" style="display: none;" xzpriceid="6" typeid="142454" productid="231399594" name="史诗巨制 《Cavalia·舞马》2.0升级版2017中国巡演—北京站" productimgpath="http://static.228.cn/upload/2017/03/01/AfterTreatment/1488359902815_p1q0-0.jpg" pinpainame="永乐票务" pinpaiid="70153" rs="rnd38">
                <span>
                  <i>280</i>
                </span>
              </li>
              <li pstatus="0" class="over" style="display: table; background-position: 100% -205px;" type="price" zp="420" w="0" btt="" systime="2017-03-08 23:40:25" rel="420" d="2017-04-19 19:30" s="2" t="2" n="-1" l="-1" p="232556736" title="420(280*3)" xzpriceid="6" typeid="142454" productid="231399594" name="史诗巨制 《Cavalia·舞马》2.0升级版2017中国巡演—北京站" productimgpath="http://static.228.cn/upload/2017/03/01/AfterTreatment/1488359902815_p1q0-0.jpg" pinpainame="永乐票务" pinpaiid="70153" rs="rnd39">
                <span>
                  <i>420(280*3)</i>
                </span>
              </li>
              <li pstatus="0" class="over" style="display: none; background-position: 100% -205px;" type="price" zp="420" w="0" btt="" systime="2017-03-08 23:40:25" rel="420" d="2017-04-21 19:30" s="2" t="2" n="-1" l="-1" p="232556754" title="420(280*3)" xzpriceid="6" typeid="142454" productid="231399594" name="史诗巨制 《Cavalia·舞马》2.0升级版2017中国巡演—北京站" productimgpath="http://static.228.cn/upload/2017/03/01/AfterTreatment/1488359902815_p1q0-0.jpg" pinpainame="永乐票务" pinpaiid="70153" rs="rnd40">
                <span>
                  <i>420(280*3)</i>
                </span>
              </li>
              <li pstatus="0" type="price" zp="420" w="0" btt="" systime="2017-03-08 23:40:25" rel="420" d="2017-04-26 19:30" s="1" t="2" n="-1" l="-1" p="232556772" title="420(280*3)" style="display: none;" xzpriceid="6" typeid="142454" productid="231399594" name="史诗巨制 《Cavalia·舞马》2.0升级版2017中国巡演—北京站" productimgpath="http://static.228.cn/upload/2017/03/01/AfterTreatment/1488359902815_p1q0-0.jpg" pinpainame="永乐票务" pinpaiid="70153" rs="rnd41">
                <span>
                  <i>420(280*3)</i>
                </span>
              </li>
              <li pstatus="0" type="price" zp="420" w="0" btt="" systime="2017-03-08 23:40:25" rel="420" d="2017-04-27 19:30" s="1" t="2" n="-1" l="-1" p="232556790" title="420(280*3)" style="display: none;" xzpriceid="6" typeid="142454" productid="231399594" name="史诗巨制 《Cavalia·舞马》2.0升级版2017中国巡演—北京站" productimgpath="http://static.228.cn/upload/2017/03/01/AfterTreatment/1488359902815_p1q0-0.jpg" pinpainame="永乐票务" pinpaiid="70153" rs="rnd42">
                <span>
                  <i>420(280*3)</i>
                </span>
              </li>
              <li pstatus="0" type="price" zp="480" w="0" btt="" systime="2017-03-08 23:40:25" rel="480" d="2017-04-19 19:30" s="1" t="1" n="-1" l="-1" p="232556722" title="480" style="" xzpriceid="5" typeid="142454" productid="231399594" name="史诗巨制 《Cavalia·舞马》2.0升级版2017中国巡演—北京站" productimgpath="http://static.228.cn/upload/2017/03/01/AfterTreatment/1488359902815_p1q0-0.jpg" pinpainame="永乐票务" pinpaiid="70153" rs="rnd43">
                <span>
                  <i>480</i>
                </span>
              </li>
              <li pstatus="0" type="price" zp="480" w="0" btt="" systime="2017-03-08 23:40:25" rel="480" d="2017-04-19 19:30" s="1" t="2" n="-1" l="-1" p="232556729" title="480(480*2)" style="" xzpriceid="5" typeid="142454" productid="231399594" name="史诗巨制 《Cavalia·舞马》2.0升级版2017中国巡演—北京站" productimgpath="http://static.228.cn/upload/2017/03/01/AfterTreatment/1488359902815_p1q0-0.jpg" pinpainame="永乐票务" pinpaiid="70153" rs="rnd44">
                <span>
                  <i>480(480*2)</i>
                </span>
              </li>
              <li pstatus="0" type="price" zp="480" w="0" btt="" systime="2017-03-08 23:40:25" rel="480" d="2017-04-21 19:30" s="1" t="1" n="-1" l="-1" p="232556740" title="480" style="display: none;" xzpriceid="5" typeid="142454" productid="231399594" name="史诗巨制 《Cavalia·舞马》2.0升级版2017中国巡演—北京站" productimgpath="http://static.228.cn/upload/2017/03/01/AfterTreatment/1488359902815_p1q0-0.jpg" pinpainame="永乐票务" pinpaiid="70153" rs="rnd45">
                <span>
                  <i>480</i>
                </span>
              </li>
              <li pstatus="0" type="price" zp="480" w="0" btt="" systime="2017-03-08 23:40:25" rel="480" d="2017-04-21 19:30" s="1" t="2" n="-1" l="-1" p="232556747" title="480(480*2)" style="display: none;" xzpriceid="5" typeid="142454" productid="231399594" name="史诗巨制 《Cavalia·舞马》2.0升级版2017中国巡演—北京站" productimgpath="http://static.228.cn/upload/2017/03/01/AfterTreatment/1488359902815_p1q0-0.jpg" pinpainame="永乐票务" pinpaiid="70153" rs="rnd46">
                <span>
                  <i>480(480*2)</i>
                </span>
              </li>
              <li pstatus="0" type="price" zp="480" w="0" btt="" systime="2017-03-08 23:40:25" rel="480" d="2017-04-22 14:30" s="1" t="1" n="-1" l="-1" p="232556804" title="480" style="display: none;" xzpriceid="5" typeid="142454" productid="231399594" name="史诗巨制 《Cavalia·舞马》2.0升级版2017中国巡演—北京站" productimgpath="http://static.228.cn/upload/2017/03/01/AfterTreatment/1488359902815_p1q0-0.jpg" pinpainame="永乐票务" pinpaiid="70153" rs="rnd47">
                <span>
                  <i>480</i>
                </span>
              </li>
              <li pstatus="0" type="price" zp="480" w="0" btt="" systime="2017-03-08 23:40:25" rel="480" d="2017-04-22 19:30" s="1" t="1" n="-1" l="-1" p="232556794" title="480" style="display: none;" xzpriceid="5" typeid="142454" productid="231399594" name="史诗巨制 《Cavalia·舞马》2.0升级版2017中国巡演—北京站" productimgpath="http://static.228.cn/upload/2017/03/01/AfterTreatment/1488359902815_p1q0-0.jpg" pinpainame="永乐票务" pinpaiid="70153" rs="rnd48">
                <span>
                  <i>480</i>
                </span>
              </li>
              <li pstatus="0" type="price" zp="480" w="0" btt="" systime="2017-03-08 23:40:25" rel="480" d="2017-04-23 14:30" s="1" t="1" n="-1" l="-1" p="232556824" title="480" style="display: none;" xzpriceid="5" typeid="142454" productid="231399594" name="史诗巨制 《Cavalia·舞马》2.0升级版2017中国巡演—北京站" productimgpath="http://static.228.cn/upload/2017/03/01/AfterTreatment/1488359902815_p1q0-0.jpg" pinpainame="永乐票务" pinpaiid="70153" rs="rnd49">
                <span>
                  <i>480</i>
                </span>
              </li>
              <li pstatus="0" type="price" zp="480" w="0" btt="" systime="2017-03-08 23:40:25" rel="480" d="2017-04-23 19:30" s="1" t="1" n="-1" l="-1" p="232556814" title="480" style="display: none;" xzpriceid="5" typeid="142454" productid="231399594" name="史诗巨制 《Cavalia·舞马》2.0升级版2017中国巡演—北京站" productimgpath="http://static.228.cn/upload/2017/03/01/AfterTreatment/1488359902815_p1q0-0.jpg" pinpainame="永乐票务" pinpaiid="70153" rs="rnd50">
                <span>
                  <i>480</i>
                </span>
              </li>
              <li pstatus="0" type="price" zp="480" w="0" btt="" systime="2017-03-08 23:40:25" rel="480" d="2017-04-26 19:30" s="1" t="1" n="-1" l="-1" p="232556758" title="480" style="display: none;" xzpriceid="5" typeid="142454" productid="231399594" name="史诗巨制 《Cavalia·舞马》2.0升级版2017中国巡演—北京站" productimgpath="http://static.228.cn/upload/2017/03/01/AfterTreatment/1488359902815_p1q0-0.jpg" pinpainame="永乐票务" pinpaiid="70153" rs="rnd51">
                <span>
                  <i>480</i>
                </span>
              </li>
              <li pstatus="0" type="price" zp="480" w="0" btt="" systime="2017-03-08 23:40:25" rel="480" d="2017-04-26 19:30" s="1" t="2" n="-1" l="-1" p="232556765" title="480(480*2)" style="display: none;" xzpriceid="5" typeid="142454" productid="231399594" name="史诗巨制 《Cavalia·舞马》2.0升级版2017中国巡演—北京站" productimgpath="http://static.228.cn/upload/2017/03/01/AfterTreatment/1488359902815_p1q0-0.jpg" pinpainame="永乐票务" pinpaiid="70153" rs="rnd52">
                <span>
                  <i>480(480*2)</i>
                </span>
              </li>
              <li pstatus="0" type="price" zp="480" w="0" btt="" systime="2017-03-08 23:40:25" rel="480" d="2017-04-27 19:30" s="1" t="1" n="-1" l="-1" p="232556776" title="480" style="display: none;" xzpriceid="5" typeid="142454" productid="231399594" name="史诗巨制 《Cavalia·舞马》2.0升级版2017中国巡演—北京站" productimgpath="http://static.228.cn/upload/2017/03/01/AfterTreatment/1488359902815_p1q0-0.jpg" pinpainame="永乐票务" pinpaiid="70153" rs="rnd53">
                <span>
                  <i>480</i>
                </span>
              </li>
              <li pstatus="0" type="price" zp="480" w="0" btt="" systime="2017-03-08 23:40:25" rel="480" d="2017-04-27 19:30" s="1" t="2" n="-1" l="-1" p="232556783" title="480(480*2)" style="display: none;" xzpriceid="5" typeid="142454" productid="231399594" name="史诗巨制 《Cavalia·舞马》2.0升级版2017中国巡演—北京站" productimgpath="http://static.228.cn/upload/2017/03/01/AfterTreatment/1488359902815_p1q0-0.jpg" pinpainame="永乐票务" pinpaiid="70153" rs="rnd54">
                <span>
                  <i>480(480*2)</i>
                </span>
              </li>
              <li pstatus="0" type="price" zp="480" w="0" btt="" systime="2017-03-08 23:40:25" rel="480" d="2017-04-29 14:30" s="1" t="1" n="-1" l="-1" p="232556844" title="480" style="display: none;" xzpriceid="5" typeid="142454" productid="231399594" name="史诗巨制 《Cavalia·舞马》2.0升级版2017中国巡演—北京站" productimgpath="http://static.228.cn/upload/2017/03/01/AfterTreatment/1488359902815_p1q0-0.jpg" pinpainame="永乐票务" pinpaiid="70153" rs="rnd55">
                <span>
                  <i>480</i>
                </span>
              </li>
              <li pstatus="0" type="price" zp="480" w="0" btt="" systime="2017-03-08 23:40:25" rel="480" d="2017-04-29 19:30" s="1" t="1" n="-1" l="-1" p="232556834" title="480" style="display: none;" xzpriceid="5" typeid="142454" productid="231399594" name="史诗巨制 《Cavalia·舞马》2.0升级版2017中国巡演—北京站" productimgpath="http://static.228.cn/upload/2017/03/01/AfterTreatment/1488359902815_p1q0-0.jpg" pinpainame="永乐票务" pinpaiid="70153" rs="rnd56">
                <span>
                  <i>480</i>
                </span>
              </li>
              <li pstatus="0" type="price" zp="480" w="0" btt="" systime="2017-03-08 23:40:25" rel="480" d="2017-04-30 14:30" s="1" t="1" n="-1" l="-1" p="232556864" title="480" style="display: none;" xzpriceid="5" typeid="142454" productid="231399594" name="史诗巨制 《Cavalia·舞马》2.0升级版2017中国巡演—北京站" productimgpath="http://static.228.cn/upload/2017/03/01/AfterTreatment/1488359902815_p1q0-0.jpg" pinpainame="永乐票务" pinpaiid="70153" rs="rnd57">
                <span>
                  <i>480</i>
                </span>
              </li>
              <li pstatus="0" type="price" zp="480" w="0" btt="" systime="2017-03-08 23:40:25" rel="480" d="2017-04-30 19:30" s="1" t="1" n="-1" l="-1" p="232556854" title="480" style="display: none;" xzpriceid="5" typeid="142454" productid="231399594" name="史诗巨制 《Cavalia·舞马》2.0升级版2017中国巡演—北京站" productimgpath="http://static.228.cn/upload/2017/03/01/AfterTreatment/1488359902815_p1q0-0.jpg" pinpainame="永乐票务" pinpaiid="70153" rs="rnd58">
                <span>
                  <i>480</i>
                </span>
              </li>
              <li pstatus="0" type="price" zp="480" w="0" btt="" systime="2017-03-08 23:40:25" rel="480" d="2017-05-01 19:30" s="1" t="1" n="-1" l="-1" p="232556874" title="480" style="display: none;" xzpriceid="5" typeid="142454" productid="231399594" name="史诗巨制 《Cavalia·舞马》2.0升级版2017中国巡演—北京站" productimgpath="http://static.228.cn/upload/2017/03/01/AfterTreatment/1488359902815_p1q0-0.jpg" pinpainame="永乐票务" pinpaiid="70153" rs="rnd59">
                <span>
                  <i>480</i>
                </span>
              </li>
              <li pstatus="0" type="price" zp="680" w="0" btt="" systime="2017-03-08 23:40:25" rel="680" d="2017-04-19 19:30" s="1" t="1" n="-1" l="-1" p="232556723" title="680" style="" xzpriceid="4" typeid="142454" productid="231399594" name="史诗巨制 《Cavalia·舞马》2.0升级版2017中国巡演—北京站" productimgpath="http://static.228.cn/upload/2017/03/01/AfterTreatment/1488359902815_p1q0-0.jpg" pinpainame="永乐票务" pinpaiid="70153" rs="rnd60">
                <span>
                  <i>680</i>
                </span>
              </li>
              <li pstatus="0" type="price" zp="680" w="0" btt="" systime="2017-03-08 23:40:25" rel="680" d="2017-04-19 19:30" s="1" t="2" n="-1" l="-1" p="232556728" title="680(680*2)" style="" xzpriceid="4" typeid="142454" productid="231399594" name="史诗巨制 《Cavalia·舞马》2.0升级版2017中国巡演—北京站" productimgpath="http://static.228.cn/upload/2017/03/01/AfterTreatment/1488359902815_p1q0-0.jpg" pinpainame="永乐票务" pinpaiid="70153" rs="rnd61">
                <span>
                  <i>680(680*2)</i>
                </span>
              </li>
              <li pstatus="0" class="over" style="display: none; background-position: 100% -205px;" type="price" zp="680" w="0" btt="" systime="2017-03-08 23:40:25" rel="680" d="2017-04-21 19:30" s="2" t="1" n="-1" l="-1" p="232556741" title="680" xzpriceid="4" typeid="142454" productid="231399594" name="史诗巨制 《Cavalia·舞马》2.0升级版2017中国巡演—北京站" productimgpath="http://static.228.cn/upload/2017/03/01/AfterTreatment/1488359902815_p1q0-0.jpg" pinpainame="永乐票务" pinpaiid="70153" rs="rnd62">
                <span>
                  <i>680</i>
                </span>
              </li>
              <li pstatus="0" class="over" style="display: none; background-position: 100% -205px;" type="price" zp="680" w="0" btt="" systime="2017-03-08 23:40:25" rel="680" d="2017-04-21 19:30" s="2" t="2" n="-1" l="-1" p="232556746" title="680(680*2)" xzpriceid="4" typeid="142454" productid="231399594" name="史诗巨制 《Cavalia·舞马》2.0升级版2017中国巡演—北京站" productimgpath="http://static.228.cn/upload/2017/03/01/AfterTreatment/1488359902815_p1q0-0.jpg" pinpainame="永乐票务" pinpaiid="70153" rs="rnd63">
                <span>
                  <i>680(680*2)</i>
                </span>
              </li>
              <li pstatus="0" type="price" zp="680" w="0" btt="" systime="2017-03-08 23:40:25" rel="680" d="2017-04-22 14:30" s="1" t="1" n="-1" l="-1" p="232556805" title="680" style="display: none;" xzpriceid="4" typeid="142454" productid="231399594" name="史诗巨制 《Cavalia·舞马》2.0升级版2017中国巡演—北京站" productimgpath="http://static.228.cn/upload/2017/03/01/AfterTreatment/1488359902815_p1q0-0.jpg" pinpainame="永乐票务" pinpaiid="70153" rs="rnd64">
                <span>
                  <i>680</i>
                </span>
              </li>
              <li pstatus="0" type="price" zp="680" w="0" btt="" systime="2017-03-08 23:40:25" rel="680" d="2017-04-22 19:30" s="1" t="1" n="-1" l="-1" p="232556795" title="680" style="display: none;" xzpriceid="4" typeid="142454" productid="231399594" name="史诗巨制 《Cavalia·舞马》2.0升级版2017中国巡演—北京站" productimgpath="http://static.228.cn/upload/2017/03/01/AfterTreatment/1488359902815_p1q0-0.jpg" pinpainame="永乐票务" pinpaiid="70153" rs="rnd65">
                <span>
                  <i>680</i>
                </span>
              </li>
              <li pstatus="0" type="price" zp="680" w="0" btt="" systime="2017-03-08 23:40:25" rel="680" d="2017-04-23 14:30" s="1" t="1" n="-1" l="-1" p="232556825" title="680" style="display: none;" xzpriceid="4" typeid="142454" productid="231399594" name="史诗巨制 《Cavalia·舞马》2.0升级版2017中国巡演—北京站" productimgpath="http://static.228.cn/upload/2017/03/01/AfterTreatment/1488359902815_p1q0-0.jpg" pinpainame="永乐票务" pinpaiid="70153" rs="rnd66">
                <span>
                  <i>680</i>
                </span>
              </li>
              <li pstatus="0" type="price" zp="680" w="0" btt="" systime="2017-03-08 23:40:25" rel="680" d="2017-04-23 19:30" s="1" t="1" n="-1" l="-1" p="232556815" title="680" style="display: none;" xzpriceid="4" typeid="142454" productid="231399594" name="史诗巨制 《Cavalia·舞马》2.0升级版2017中国巡演—北京站" productimgpath="http://static.228.cn/upload/2017/03/01/AfterTreatment/1488359902815_p1q0-0.jpg" pinpainame="永乐票务" pinpaiid="70153" rs="rnd67">
                <span>
                  <i>680</i>
                </span>
              </li>
              <li pstatus="0" type="price" zp="680" w="0" btt="" systime="2017-03-08 23:40:25" rel="680" d="2017-04-26 19:30" s="1" t="1" n="-1" l="-1" p="232556759" title="680" style="display: none;" xzpriceid="4" typeid="142454" productid="231399594" name="史诗巨制 《Cavalia·舞马》2.0升级版2017中国巡演—北京站" productimgpath="http://static.228.cn/upload/2017/03/01/AfterTreatment/1488359902815_p1q0-0.jpg" pinpainame="永乐票务" pinpaiid="70153" rs="rnd68">
                <span>
                  <i>680</i>
                </span>
              </li>
              <li pstatus="0" type="price" zp="680" w="0" btt="" systime="2017-03-08 23:40:25" rel="680" d="2017-04-26 19:30" s="1" t="2" n="-1" l="-1" p="232556764" title="680(680*2)" style="display: none;" xzpriceid="4" typeid="142454" productid="231399594" name="史诗巨制 《Cavalia·舞马》2.0升级版2017中国巡演—北京站" productimgpath="http://static.228.cn/upload/2017/03/01/AfterTreatment/1488359902815_p1q0-0.jpg" pinpainame="永乐票务" pinpaiid="70153" rs="rnd69">
                <span>
                  <i>680(680*2)</i>
                </span>
              </li>
              <li pstatus="0" type="price" zp="680" w="0" btt="" systime="2017-03-08 23:40:25" rel="680" d="2017-04-27 19:30" s="1" t="1" n="-1" l="-1" p="232556777" title="680" style="display: none;" xzpriceid="4" typeid="142454" productid="231399594" name="史诗巨制 《Cavalia·舞马》2.0升级版2017中国巡演—北京站" productimgpath="http://static.228.cn/upload/2017/03/01/AfterTreatment/1488359902815_p1q0-0.jpg" pinpainame="永乐票务" pinpaiid="70153" rs="rnd70">
                <span>
                  <i>680</i>
                </span>
              </li>
              <li pstatus="0" type="price" zp="680" w="0" btt="" systime="2017-03-08 23:40:25" rel="680" d="2017-04-27 19:30" s="1" t="2" n="-1" l="-1" p="232556782" title="680(680*2)" style="display: none;" xzpriceid="4" typeid="142454" productid="231399594" name="史诗巨制 《Cavalia·舞马》2.0升级版2017中国巡演—北京站" productimgpath="http://static.228.cn/upload/2017/03/01/AfterTreatment/1488359902815_p1q0-0.jpg" pinpainame="永乐票务" pinpaiid="70153" rs="rnd71">
                <span>
                  <i>680(680*2)</i>
                </span>
              </li>
              <li pstatus="0" type="price" zp="680" w="0" btt="" systime="2017-03-08 23:40:25" rel="680" d="2017-04-29 14:30" s="1" t="1" n="-1" l="-1" p="232556845" title="680" style="display: none;" xzpriceid="4" typeid="142454" productid="231399594" name="史诗巨制 《Cavalia·舞马》2.0升级版2017中国巡演—北京站" productimgpath="http://static.228.cn/upload/2017/03/01/AfterTreatment/1488359902815_p1q0-0.jpg" pinpainame="永乐票务" pinpaiid="70153" rs="rnd72">
                <span>
                  <i>680</i>
                </span>
              </li>
              <li pstatus="0" type="price" zp="680" w="0" btt="" systime="2017-03-08 23:40:25" rel="680" d="2017-04-29 19:30" s="1" t="1" n="-1" l="-1" p="232556835" title="680" style="display: none;" xzpriceid="4" typeid="142454" productid="231399594" name="史诗巨制 《Cavalia·舞马》2.0升级版2017中国巡演—北京站" productimgpath="http://static.228.cn/upload/2017/03/01/AfterTreatment/1488359902815_p1q0-0.jpg" pinpainame="永乐票务" pinpaiid="70153" rs="rnd73">
                <span>
                  <i>680</i>
                </span>
              </li>
              <li pstatus="0" type="price" zp="680" w="0" btt="" systime="2017-03-08 23:40:25" rel="680" d="2017-04-30 14:30" s="1" t="1" n="-1" l="-1" p="232556865" title="680" style="display: none;" xzpriceid="4" typeid="142454" productid="231399594" name="史诗巨制 《Cavalia·舞马》2.0升级版2017中国巡演—北京站" productimgpath="http://static.228.cn/upload/2017/03/01/AfterTreatment/1488359902815_p1q0-0.jpg" pinpainame="永乐票务" pinpaiid="70153" rs="rnd74">
                <span>
                  <i>680</i>
                </span>
              </li>
              <li pstatus="0" type="price" zp="680" w="0" btt="" systime="2017-03-08 23:40:25" rel="680" d="2017-04-30 19:30" s="1" t="1" n="-1" l="-1" p="232556855" title="680" style="display: none;" xzpriceid="4" typeid="142454" productid="231399594" name="史诗巨制 《Cavalia·舞马》2.0升级版2017中国巡演—北京站" productimgpath="http://static.228.cn/upload/2017/03/01/AfterTreatment/1488359902815_p1q0-0.jpg" pinpainame="永乐票务" pinpaiid="70153" rs="rnd75">
                <span>
                  <i>680</i>
                </span>
              </li>
              <li pstatus="0" type="price" zp="680" w="0" btt="" systime="2017-03-08 23:40:25" rel="680" d="2017-05-01 19:30" s="1" t="1" n="-1" l="-1" p="232556875" title="680" style="display: none;" xzpriceid="4" typeid="142454" productid="231399594" name="史诗巨制 《Cavalia·舞马》2.0升级版2017中国巡演—北京站" productimgpath="http://static.228.cn/upload/2017/03/01/AfterTreatment/1488359902815_p1q0-0.jpg" pinpainame="永乐票务" pinpaiid="70153" rs="rnd76">
                <span>
                  <i>680</i>
                </span>
              </li>
              <li pstatus="0" type="price" zp="720" w="0" btt="" systime="2017-03-08 23:40:25" rel="720" d="2017-04-19 19:30" s="1" t="2" n="-1" l="-1" p="232556735" title="720(480*3)" style="" xzpriceid="5" typeid="142454" productid="231399594" name="史诗巨制 《Cavalia·舞马》2.0升级版2017中国巡演—北京站" productimgpath="http://static.228.cn/upload/2017/03/01/AfterTreatment/1488359902815_p1q0-0.jpg" pinpainame="永乐票务" pinpaiid="70153" rs="rnd77">
                <span>
                  <i>720(480*3)</i>
                </span>
              </li>
              <li pstatus="0" type="price" zp="720" w="0" btt="" systime="2017-03-08 23:40:25" rel="720" d="2017-04-21 19:30" s="1" t="2" n="-1" l="-1" p="232556753" title="720(480*3)" style="display: none;" xzpriceid="5" typeid="142454" productid="231399594" name="史诗巨制 《Cavalia·舞马》2.0升级版2017中国巡演—北京站" productimgpath="http://static.228.cn/upload/2017/03/01/AfterTreatment/1488359902815_p1q0-0.jpg" pinpainame="永乐票务" pinpaiid="70153" rs="rnd78">
                <span>
                  <i>720(480*3)</i>
                </span>
              </li>
              <li pstatus="0" type="price" zp="720" w="0" btt="" systime="2017-03-08 23:40:25" rel="720" d="2017-04-26 19:30" s="1" t="2" n="-1" l="-1" p="232556771" title="720(480*3)" style="display: none;" xzpriceid="5" typeid="142454" productid="231399594" name="史诗巨制 《Cavalia·舞马》2.0升级版2017中国巡演—北京站" productimgpath="http://static.228.cn/upload/2017/03/01/AfterTreatment/1488359902815_p1q0-0.jpg" pinpainame="永乐票务" pinpaiid="70153" rs="rnd79">
                <span>
                  <i>720(480*3)</i>
                </span>
              </li>
              <li pstatus="0" type="price" zp="720" w="0" btt="" systime="2017-03-08 23:40:25" rel="720" d="2017-04-27 19:30" s="1" t="2" n="-1" l="-1" p="232556789" title="720(480*3)" style="display: none;" xzpriceid="5" typeid="142454" productid="231399594" name="史诗巨制 《Cavalia·舞马》2.0升级版2017中国巡演—北京站" productimgpath="http://static.228.cn/upload/2017/03/01/AfterTreatment/1488359902815_p1q0-0.jpg" pinpainame="永乐票务" pinpaiid="70153" rs="rnd80">
                <span>
                  <i>720(480*3)</i>
                </span>
              </li>
              <li pstatus="0" type="price" zp="800" w="0" btt="" systime="2017-03-08 23:40:25" rel="800" d="2017-04-22 14:30" s="1" t="2" n="-1" l="-1" p="232556808" title="800(480*2)" style="display: none;" xzpriceid="5" typeid="142454" productid="231399594" name="史诗巨制 《Cavalia·舞马》2.0升级版2017中国巡演—北京站" productimgpath="http://static.228.cn/upload/2017/03/01/AfterTreatment/1488359902815_p1q0-0.jpg" pinpainame="永乐票务" pinpaiid="70153" rs="rnd81">
                <span>
                  <i>800(480*2)</i>
                </span>
              </li>
              <li pstatus="0" type="price" zp="800" w="0" btt="" systime="2017-03-08 23:40:25" rel="800" d="2017-04-22 19:30" s="1" t="2" n="-1" l="-1" p="232556798" title="800(480*2)" style="display: none;" xzpriceid="5" typeid="142454" productid="231399594" name="史诗巨制 《Cavalia·舞马》2.0升级版2017中国巡演—北京站" productimgpath="http://static.228.cn/upload/2017/03/01/AfterTreatment/1488359902815_p1q0-0.jpg" pinpainame="永乐票务" pinpaiid="70153" rs="rnd82">
                <span>
                  <i>800(480*2)</i>
                </span>
              </li>
              <li pstatus="0" type="price" zp="800" w="0" btt="" systime="2017-03-08 23:40:25" rel="800" d="2017-04-23 14:30" s="1" t="2" n="-1" l="-1" p="232556828" title="800(480*2)" style="display: none;" xzpriceid="5" typeid="142454" productid="231399594" name="史诗巨制 《Cavalia·舞马》2.0升级版2017中国巡演—北京站" productimgpath="http://static.228.cn/upload/2017/03/01/AfterTreatment/1488359902815_p1q0-0.jpg" pinpainame="永乐票务" pinpaiid="70153" rs="rnd83">
                <span>
                  <i>800(480*2)</i>
                </span>
              </li>
              <li pstatus="0" type="price" zp="800" w="0" btt="" systime="2017-03-08 23:40:25" rel="800" d="2017-04-23 19:30" s="1" t="2" n="-1" l="-1" p="232556818" title="800(480*2)" style="display: none;" xzpriceid="5" typeid="142454" productid="231399594" name="史诗巨制 《Cavalia·舞马》2.0升级版2017中国巡演—北京站" productimgpath="http://static.228.cn/upload/2017/03/01/AfterTreatment/1488359902815_p1q0-0.jpg" pinpainame="永乐票务" pinpaiid="70153" rs="rnd84">
                <span>
                  <i>800(480*2)</i>
                </span>
              </li>
              <li pstatus="0" type="price" zp="800" w="0" btt="" systime="2017-03-08 23:40:25" rel="800" d="2017-04-29 14:30" s="1" t="2" n="-1" l="-1" p="232556848" title="800(480*2)" style="display: none;" xzpriceid="5" typeid="142454" productid="231399594" name="史诗巨制 《Cavalia·舞马》2.0升级版2017中国巡演—北京站" productimgpath="http://static.228.cn/upload/2017/03/01/AfterTreatment/1488359902815_p1q0-0.jpg" pinpainame="永乐票务" pinpaiid="70153" rs="rnd85">
                <span>
                  <i>800(480*2)</i>
                </span>
              </li>
              <li pstatus="0" type="price" zp="800" w="0" btt="" systime="2017-03-08 23:40:25" rel="800" d="2017-04-29 19:30" s="1" t="2" n="-1" l="-1" p="232556838" title="800(480*2)" style="display: none;" xzpriceid="5" typeid="142454" productid="231399594" name="史诗巨制 《Cavalia·舞马》2.0升级版2017中国巡演—北京站" productimgpath="http://static.228.cn/upload/2017/03/01/AfterTreatment/1488359902815_p1q0-0.jpg" pinpainame="永乐票务" pinpaiid="70153" rs="rnd86">
                <span>
                  <i>800(480*2)</i>
                </span>
              </li>
              <li pstatus="0" type="price" zp="800" w="0" btt="" systime="2017-03-08 23:40:25" rel="800" d="2017-04-30 14:30" s="1" t="2" n="-1" l="-1" p="232556868" title="800(480*2)" style="display: none;" xzpriceid="5" typeid="142454" productid="231399594" name="史诗巨制 《Cavalia·舞马》2.0升级版2017中国巡演—北京站" productimgpath="http://static.228.cn/upload/2017/03/01/AfterTreatment/1488359902815_p1q0-0.jpg" pinpainame="永乐票务" pinpaiid="70153" rs="rnd87">
                <span>
                  <i>800(480*2)</i>
                </span>
              </li>
              <li pstatus="0" type="price" zp="800" w="0" btt="" systime="2017-03-08 23:40:25" rel="800" d="2017-04-30 19:30" s="1" t="2" n="-1" l="-1" p="232556858" title="800(480*2)" style="display: none;" xzpriceid="5" typeid="142454" productid="231399594" name="史诗巨制 《Cavalia·舞马》2.0升级版2017中国巡演—北京站" productimgpath="http://static.228.cn/upload/2017/03/01/AfterTreatment/1488359902815_p1q0-0.jpg" pinpainame="永乐票务" pinpaiid="70153" rs="rnd88">
                <span>
                  <i>800(480*2)</i>
                </span>
              </li>
              <li pstatus="0" type="price" zp="800" w="0" btt="" systime="2017-03-08 23:40:25" rel="800" d="2017-05-01 19:30" s="1" t="2" n="-1" l="-1" p="232556878" title="800(480*2)" style="display: none;" xzpriceid="5" typeid="142454" productid="231399594" name="史诗巨制 《Cavalia·舞马》2.0升级版2017中国巡演—北京站" productimgpath="http://static.228.cn/upload/2017/03/01/AfterTreatment/1488359902815_p1q0-0.jpg" pinpainame="永乐票务" pinpaiid="70153" rs="rnd89">
                <span>
                  <i>800(480*2)</i>
                </span>
              </li>
              <li pstatus="0" type="price" zp="1020" w="0" btt="" systime="2017-03-08 23:40:25" rel="1020" d="2017-04-19 19:30" s="1" t="2" n="-1" l="-1" p="232556734" title="1020(680*3)" style="" xzpriceid="4" typeid="142454" productid="231399594" name="史诗巨制 《Cavalia·舞马》2.0升级版2017中国巡演—北京站" productimgpath="http://static.228.cn/upload/2017/03/01/AfterTreatment/1488359902815_p1q0-0.jpg" pinpainame="永乐票务" pinpaiid="70153" rs="rnd90">
                <span>
                  <i>1020(680*3)</i>
                </span>
              </li>
              <li pstatus="0" class="over" style="display: none; background-position: 100% -205px;" type="price" zp="1020" w="0" btt="" systime="2017-03-08 23:40:25" rel="1020" d="2017-04-21 19:30" s="2" t="2" n="-1" l="-1" p="232556752" title="1020(680*3)" xzpriceid="4" typeid="142454" productid="231399594" name="史诗巨制 《Cavalia·舞马》2.0升级版2017中国巡演—北京站" productimgpath="http://static.228.cn/upload/2017/03/01/AfterTreatment/1488359902815_p1q0-0.jpg" pinpainame="永乐票务" pinpaiid="70153" rs="rnd91">
                <span>
                  <i>1020(680*3)</i>
                </span>
              </li>
              <li pstatus="0" type="price" zp="1020" w="0" btt="" systime="2017-03-08 23:40:25" rel="1020" d="2017-04-26 19:30" s="1" t="2" n="-1" l="-1" p="232556770" title="1020(680*3)" style="display: none;" xzpriceid="4" typeid="142454" productid="231399594" name="史诗巨制 《Cavalia·舞马》2.0升级版2017中国巡演—北京站" productimgpath="http://static.228.cn/upload/2017/03/01/AfterTreatment/1488359902815_p1q0-0.jpg" pinpainame="永乐票务" pinpaiid="70153" rs="rnd92">
                <span>
                  <i>1020(680*3)</i>
                </span>
              </li>
              <li pstatus="0" type="price" zp="1020" w="0" btt="" systime="2017-03-08 23:40:25" rel="1020" d="2017-04-27 19:30" s="1" t="2" n="-1" l="-1" p="232556788" title="1020(680*3)" style="display: none;" xzpriceid="4" typeid="142454" productid="231399594" name="史诗巨制 《Cavalia·舞马》2.0升级版2017中国巡演—北京站" productimgpath="http://static.228.cn/upload/2017/03/01/AfterTreatment/1488359902815_p1q0-0.jpg" pinpainame="永乐票务" pinpaiid="70153" rs="rnd93">
                <span>
                  <i>1020(680*3)</i>
                </span>
              </li>
              <li pstatus="0" class="over" style="display: table; background-position: 100% -205px;" type="price" zp="1080" w="0" btt="" systime="2017-03-08 23:40:25" rel="1080" d="2017-04-19 19:30" s="2" t="1" n="-1" l="-1" p="232556724" title="1080" xzpriceid="3" typeid="142454" productid="231399594" name="史诗巨制 《Cavalia·舞马》2.0升级版2017中国巡演—北京站" productimgpath="http://static.228.cn/upload/2017/03/01/AfterTreatment/1488359902815_p1q0-0.jpg" pinpainame="永乐票务" pinpaiid="70153" rs="rnd94">
                <span>
                  <i>1080</i>
                </span>
              </li>
              <li pstatus="0" class="over" style="display: table; background-position: 100% -205px;" type="price" zp="1080" w="0" btt="" systime="2017-03-08 23:40:25" rel="1080" d="2017-04-19 19:30" s="2" t="2" n="-1" l="-1" p="232556727" title="1080(1080*2)" xzpriceid="3" typeid="142454" productid="231399594" name="史诗巨制 《Cavalia·舞马》2.0升级版2017中国巡演—北京站" productimgpath="http://static.228.cn/upload/2017/03/01/AfterTreatment/1488359902815_p1q0-0.jpg" pinpainame="永乐票务" pinpaiid="70153" rs="rnd95">
                <span>
                  <i>1080(1080*2)</i>
                </span>
              </li>
              <li pstatus="0" class="over" style="display: none; background-position: 100% -205px;" type="price" zp="1080" w="0" btt="" systime="2017-03-08 23:40:25" rel="1080" d="2017-04-21 19:30" s="2" t="1" n="-1" l="-1" p="232556742" title="1080" xzpriceid="3" typeid="142454" productid="231399594" name="史诗巨制 《Cavalia·舞马》2.0升级版2017中国巡演—北京站" productimgpath="http://static.228.cn/upload/2017/03/01/AfterTreatment/1488359902815_p1q0-0.jpg" pinpainame="永乐票务" pinpaiid="70153" rs="rnd96">
                <span>
                  <i>1080</i>
                </span>
              </li>
              <li pstatus="0" class="over" style="display: none; background-position: 100% -205px;" type="price" zp="1080" w="0" btt="" systime="2017-03-08 23:40:25" rel="1080" d="2017-04-21 19:30" s="2" t="2" n="-1" l="-1" p="232556745" title="1080(1080*2)" xzpriceid="3" typeid="142454" productid="231399594" name="史诗巨制 《Cavalia·舞马》2.0升级版2017中国巡演—北京站" productimgpath="http://static.228.cn/upload/2017/03/01/AfterTreatment/1488359902815_p1q0-0.jpg" pinpainame="永乐票务" pinpaiid="70153" rs="rnd97">
                <span>
                  <i>1080(1080*2)</i>
                </span>
              </li>
              <li pstatus="0" type="price" zp="1080" w="0" btt="" systime="2017-03-08 23:40:25" rel="1080" d="2017-04-22 14:30" s="1" t="1" n="-1" l="-1" p="232556806" title="1080" style="display: none;" xzpriceid="3" typeid="142454" productid="231399594" name="史诗巨制 《Cavalia·舞马》2.0升级版2017中国巡演—北京站" productimgpath="http://static.228.cn/upload/2017/03/01/AfterTreatment/1488359902815_p1q0-0.jpg" pinpainame="永乐票务" pinpaiid="70153" rs="rnd98">
                <span>
                  <i>1080</i>
                </span>
              </li>
              <li pstatus="0" type="price" zp="1080" w="0" btt="" systime="2017-03-08 23:40:25" rel="1080" d="2017-04-22 19:30" s="1" t="1" n="-1" l="-1" p="232556796" title="1080" style="display: none;" xzpriceid="3" typeid="142454" productid="231399594" name="史诗巨制 《Cavalia·舞马》2.0升级版2017中国巡演—北京站" productimgpath="http://static.228.cn/upload/2017/03/01/AfterTreatment/1488359902815_p1q0-0.jpg" pinpainame="永乐票务" pinpaiid="70153" rs="rnd99">
                <span>
                  <i>1080</i>
                </span>
              </li>
              <li pstatus="0" type="price" zp="1080" w="0" btt="" systime="2017-03-08 23:40:25" rel="1080" d="2017-04-23 14:30" s="1" t="1" n="-1" l="-1" p="232556826" title="1080" style="display: none;" xzpriceid="3" typeid="142454" productid="231399594" name="史诗巨制 《Cavalia·舞马》2.0升级版2017中国巡演—北京站" productimgpath="http://static.228.cn/upload/2017/03/01/AfterTreatment/1488359902815_p1q0-0.jpg" pinpainame="永乐票务" pinpaiid="70153" rs="rnd100">
                <span>
                  <i>1080</i>
                </span>
              </li>
              <li pstatus="0" type="price" zp="1080" w="0" btt="" systime="2017-03-08 23:40:25" rel="1080" d="2017-04-23 19:30" s="1" t="1" n="-1" l="-1" p="232556816" title="1080" style="display: none;" xzpriceid="3" typeid="142454" productid="231399594" name="史诗巨制 《Cavalia·舞马》2.0升级版2017中国巡演—北京站" productimgpath="http://static.228.cn/upload/2017/03/01/AfterTreatment/1488359902815_p1q0-0.jpg" pinpainame="永乐票务" pinpaiid="70153" rs="rnd101">
                <span>
                  <i>1080</i>
                </span>
              </li>
              <li pstatus="0" type="price" zp="1080" w="0" btt="" systime="2017-03-08 23:40:25" rel="1080" d="2017-04-26 19:30" s="1" t="1" n="-1" l="-1" p="232556760" title="1080" style="display: none;" xzpriceid="3" typeid="142454" productid="231399594" name="史诗巨制 《Cavalia·舞马》2.0升级版2017中国巡演—北京站" productimgpath="http://static.228.cn/upload/2017/03/01/AfterTreatment/1488359902815_p1q0-0.jpg" pinpainame="永乐票务" pinpaiid="70153" rs="rnd102">
                <span>
                  <i>1080</i>
                </span>
              </li>
              <li pstatus="0" type="price" zp="1080" w="0" btt="" systime="2017-03-08 23:40:25" rel="1080" d="2017-04-26 19:30" s="1" t="2" n="-1" l="-1" p="232556763" title="1080(1080*2)" style="display: none;" xzpriceid="3" typeid="142454" productid="231399594" name="史诗巨制 《Cavalia·舞马》2.0升级版2017中国巡演—北京站" productimgpath="http://static.228.cn/upload/2017/03/01/AfterTreatment/1488359902815_p1q0-0.jpg" pinpainame="永乐票务" pinpaiid="70153" rs="rnd103">
                <span>
                  <i>1080(1080*2)</i>
                </span>
              </li>
              <li pstatus="0" type="price" zp="1080" w="0" btt="" systime="2017-03-08 23:40:25" rel="1080" d="2017-04-27 19:30" s="1" t="1" n="-1" l="-1" p="232556778" title="1080" style="display: none;" xzpriceid="3" typeid="142454" productid="231399594" name="史诗巨制 《Cavalia·舞马》2.0升级版2017中国巡演—北京站" productimgpath="http://static.228.cn/upload/2017/03/01/AfterTreatment/1488359902815_p1q0-0.jpg" pinpainame="永乐票务" pinpaiid="70153" rs="rnd104">
                <span>
                  <i>1080</i>
                </span>
              </li>
              <li pstatus="0" type="price" zp="1080" w="0" btt="" systime="2017-03-08 23:40:25" rel="1080" d="2017-04-27 19:30" s="1" t="2" n="-1" l="-1" p="232556781" title="1080(1080*2)" style="display: none;" xzpriceid="3" typeid="142454" productid="231399594" name="史诗巨制 《Cavalia·舞马》2.0升级版2017中国巡演—北京站" productimgpath="http://static.228.cn/upload/2017/03/01/AfterTreatment/1488359902815_p1q0-0.jpg" pinpainame="永乐票务" pinpaiid="70153" rs="rnd105">
                <span>
                  <i>1080(1080*2)</i>
                </span>
              </li>
              <li pstatus="0" type="price" zp="1080" w="0" btt="" systime="2017-03-08 23:40:25" rel="1080" d="2017-04-29 14:30" s="1" t="1" n="-1" l="-1" p="232556846" title="1080" style="display: none;" xzpriceid="3" typeid="142454" productid="231399594" name="史诗巨制 《Cavalia·舞马》2.0升级版2017中国巡演—北京站" productimgpath="http://static.228.cn/upload/2017/03/01/AfterTreatment/1488359902815_p1q0-0.jpg" pinpainame="永乐票务" pinpaiid="70153" rs="rnd106">
                <span>
                  <i>1080</i>
                </span>
              </li>
              <li pstatus="0" type="price" zp="1080" w="0" btt="" systime="2017-03-08 23:40:25" rel="1080" d="2017-04-29 19:30" s="1" t="1" n="-1" l="-1" p="232556836" title="1080" style="display: none;" xzpriceid="3" typeid="142454" productid="231399594" name="史诗巨制 《Cavalia·舞马》2.0升级版2017中国巡演—北京站" productimgpath="http://static.228.cn/upload/2017/03/01/AfterTreatment/1488359902815_p1q0-0.jpg" pinpainame="永乐票务" pinpaiid="70153" rs="rnd107">
                <span>
                  <i>1080</i>
                </span>
              </li>
              <li pstatus="0" type="price" zp="1080" w="0" btt="" systime="2017-03-08 23:40:25" rel="1080" d="2017-04-30 14:30" s="1" t="1" n="-1" l="-1" p="232556866" title="1080" style="display: none;" xzpriceid="3" typeid="142454" productid="231399594" name="史诗巨制 《Cavalia·舞马》2.0升级版2017中国巡演—北京站" productimgpath="http://static.228.cn/upload/2017/03/01/AfterTreatment/1488359902815_p1q0-0.jpg" pinpainame="永乐票务" pinpaiid="70153" rs="rnd108">
                <span>
                  <i>1080</i>
                </span>
              </li>
              <li pstatus="0" type="price" zp="1080" w="0" btt="" systime="2017-03-08 23:40:25" rel="1080" d="2017-04-30 19:30" s="1" t="1" n="-1" l="-1" p="232556856" title="1080" style="display: none;" xzpriceid="3" typeid="142454" productid="231399594" name="史诗巨制 《Cavalia·舞马》2.0升级版2017中国巡演—北京站" productimgpath="http://static.228.cn/upload/2017/03/01/AfterTreatment/1488359902815_p1q0-0.jpg" pinpainame="永乐票务" pinpaiid="70153" rs="rnd109">
                <span>
                  <i>1080</i>
                </span>
              </li>
              <li pstatus="0" type="price" zp="1080" w="0" btt="" systime="2017-03-08 23:40:25" rel="1080" d="2017-05-01 19:30" s="1" t="1" n="-1" l="-1" p="232556876" title="1080" style="display: none;" xzpriceid="3" typeid="142454" productid="231399594" name="史诗巨制 《Cavalia·舞马》2.0升级版2017中国巡演—北京站" productimgpath="http://static.228.cn/upload/2017/03/01/AfterTreatment/1488359902815_p1q0-0.jpg" pinpainame="永乐票务" pinpaiid="70153" rs="rnd110">
                <span>
                  <i>1080</i>
                </span>
              </li>
              <li pstatus="0" type="price" zp="1200" w="0" btt="" systime="2017-03-08 23:40:25" rel="1200" d="2017-04-22 14:30" s="1" t="2" n="-1" l="-1" p="232556809" title="1200(480*3)" style="display: none;" xzpriceid="5" typeid="142454" productid="231399594" name="史诗巨制 《Cavalia·舞马》2.0升级版2017中国巡演—北京站" productimgpath="http://static.228.cn/upload/2017/03/01/AfterTreatment/1488359902815_p1q0-0.jpg" pinpainame="永乐票务" pinpaiid="70153" rs="rnd111">
                <span>
                  <i>1200(480*3)</i>
                </span>
              </li>
              <li pstatus="0" type="price" zp="1200" w="0" btt="" systime="2017-03-08 23:40:25" rel="1200" d="2017-04-22 14:30" s="1" t="2" n="-1" l="-1" p="232556810" title="1200(680*2)" style="display: none;" xzpriceid="4" typeid="142454" productid="231399594" name="史诗巨制 《Cavalia·舞马》2.0升级版2017中国巡演—北京站" productimgpath="http://static.228.cn/upload/2017/03/01/AfterTreatment/1488359902815_p1q0-0.jpg" pinpainame="永乐票务" pinpaiid="70153" rs="rnd112">
                <span>
                  <i>1200(680*2)</i>
                </span>
              </li>
              <li pstatus="0" type="price" zp="1200" w="0" btt="" systime="2017-03-08 23:40:25" rel="1200" d="2017-04-22 19:30" s="1" t="2" n="-1" l="-1" p="232556799" title="1200(480*3)" style="display: none;" xzpriceid="5" typeid="142454" productid="231399594" name="史诗巨制 《Cavalia·舞马》2.0升级版2017中国巡演—北京站" productimgpath="http://static.228.cn/upload/2017/03/01/AfterTreatment/1488359902815_p1q0-0.jpg" pinpainame="永乐票务" pinpaiid="70153" rs="rnd113">
                <span>
                  <i>1200(480*3)</i>
                </span>
              </li>
              <li pstatus="0" type="price" zp="1200" w="0" btt="" systime="2017-03-08 23:40:25" rel="1200" d="2017-04-22 19:30" s="1" t="2" n="-1" l="-1" p="232556800" title="1200(680*2)" style="display: none;" xzpriceid="4" typeid="142454" productid="231399594" name="史诗巨制 《Cavalia·舞马》2.0升级版2017中国巡演—北京站" productimgpath="http://static.228.cn/upload/2017/03/01/AfterTreatment/1488359902815_p1q0-0.jpg" pinpainame="永乐票务" pinpaiid="70153" rs="rnd114">
                <span>
                  <i>1200(680*2)</i>
                </span>
              </li>
              <li pstatus="0" type="price" zp="1200" w="0" btt="" systime="2017-03-08 23:40:25" rel="1200" d="2017-04-23 14:30" s="1" t="2" n="-1" l="-1" p="232556829" title="1200(480*3)" style="display: none;" xzpriceid="5" typeid="142454" productid="231399594" name="史诗巨制 《Cavalia·舞马》2.0升级版2017中国巡演—北京站" productimgpath="http://static.228.cn/upload/2017/03/01/AfterTreatment/1488359902815_p1q0-0.jpg" pinpainame="永乐票务" pinpaiid="70153" rs="rnd115">
                <span>
                  <i>1200(480*3)</i>
                </span>
              </li>
              <li pstatus="0" type="price" zp="1200" w="0" btt="" systime="2017-03-08 23:40:25" rel="1200" d="2017-04-23 14:30" s="1" t="2" n="-1" l="-1" p="232556830" title="1200(680*2)" style="display: none;" xzpriceid="4" typeid="142454" productid="231399594" name="史诗巨制 《Cavalia·舞马》2.0升级版2017中国巡演—北京站" productimgpath="http://static.228.cn/upload/2017/03/01/AfterTreatment/1488359902815_p1q0-0.jpg" pinpainame="永乐票务" pinpaiid="70153" rs="rnd116">
                <span>
                  <i>1200(680*2)</i>
                </span>
              </li>
              <li pstatus="0" type="price" zp="1200" w="0" btt="" systime="2017-03-08 23:40:25" rel="1200" d="2017-04-23 19:30" s="1" t="2" n="-1" l="-1" p="232556819" title="1200(480*3)" style="display: none;" xzpriceid="5" typeid="142454" productid="231399594" name="史诗巨制 《Cavalia·舞马》2.0升级版2017中国巡演—北京站" productimgpath="http://static.228.cn/upload/2017/03/01/AfterTreatment/1488359902815_p1q0-0.jpg" pinpainame="永乐票务" pinpaiid="70153" rs="rnd117">
                <span>
                  <i>1200(480*3)</i>
                </span>
              </li>
              <li pstatus="0" type="price" zp="1200" w="0" btt="" systime="2017-03-08 23:40:25" rel="1200" d="2017-04-23 19:30" s="1" t="2" n="-1" l="-1" p="232556820" title="1200(680*2)" style="display: none;" xzpriceid="4" typeid="142454" productid="231399594" name="史诗巨制 《Cavalia·舞马》2.0升级版2017中国巡演—北京站" productimgpath="http://static.228.cn/upload/2017/03/01/AfterTreatment/1488359902815_p1q0-0.jpg" pinpainame="永乐票务" pinpaiid="70153" rs="rnd118">
                <span>
                  <i>1200(680*2)</i>
                </span>
              </li>
              <li pstatus="0" type="price" zp="1200" w="0" btt="" systime="2017-03-08 23:40:25" rel="1200" d="2017-04-29 14:30" s="1" t="2" n="-1" l="-1" p="232556849" title="1200(480*3)" style="display: none;" xzpriceid="5" typeid="142454" productid="231399594" name="史诗巨制 《Cavalia·舞马》2.0升级版2017中国巡演—北京站" productimgpath="http://static.228.cn/upload/2017/03/01/AfterTreatment/1488359902815_p1q0-0.jpg" pinpainame="永乐票务" pinpaiid="70153" rs="rnd119">
                <span>
                  <i>1200(480*3)</i>
                </span>
              </li>
              <li pstatus="0" type="price" zp="1200" w="0" btt="" systime="2017-03-08 23:40:25" rel="1200" d="2017-04-29 14:30" s="1" t="2" n="-1" l="-1" p="232556850" title="1200(680*2)" style="display: none;" xzpriceid="4" typeid="142454" productid="231399594" name="史诗巨制 《Cavalia·舞马》2.0升级版2017中国巡演—北京站" productimgpath="http://static.228.cn/upload/2017/03/01/AfterTreatment/1488359902815_p1q0-0.jpg" pinpainame="永乐票务" pinpaiid="70153" rs="rnd120">
                <span>
                  <i>1200(680*2)</i>
                </span>
              </li>
              <li pstatus="0" type="price" zp="1200" w="0" btt="" systime="2017-03-08 23:40:25" rel="1200" d="2017-04-29 19:30" s="1" t="2" n="-1" l="-1" p="232556839" title="1200(480*3)" style="display: none;" xzpriceid="5" typeid="142454" productid="231399594" name="史诗巨制 《Cavalia·舞马》2.0升级版2017中国巡演—北京站" productimgpath="http://static.228.cn/upload/2017/03/01/AfterTreatment/1488359902815_p1q0-0.jpg" pinpainame="永乐票务" pinpaiid="70153" rs="rnd121">
                <span>
                  <i>1200(480*3)</i>
                </span>
              </li>
              <li pstatus="0" type="price" zp="1200" w="0" btt="" systime="2017-03-08 23:40:25" rel="1200" d="2017-04-29 19:30" s="1" t="2" n="-1" l="-1" p="232556840" title="1200(680*2)" style="display: none;" xzpriceid="4" typeid="142454" productid="231399594" name="史诗巨制 《Cavalia·舞马》2.0升级版2017中国巡演—北京站" productimgpath="http://static.228.cn/upload/2017/03/01/AfterTreatment/1488359902815_p1q0-0.jpg" pinpainame="永乐票务" pinpaiid="70153" rs="rnd122">
                <span>
                  <i>1200(680*2)</i>
                </span>
              </li>
              <li pstatus="0" type="price" zp="1200" w="0" btt="" systime="2017-03-08 23:40:25" rel="1200" d="2017-04-30 14:30" s="1" t="2" n="-1" l="-1" p="232556869" title="1200(480*3)" style="display: none;" xzpriceid="5" typeid="142454" productid="231399594" name="史诗巨制 《Cavalia·舞马》2.0升级版2017中国巡演—北京站" productimgpath="http://static.228.cn/upload/2017/03/01/AfterTreatment/1488359902815_p1q0-0.jpg" pinpainame="永乐票务" pinpaiid="70153" rs="rnd123">
                <span>
                  <i>1200(480*3)</i>
                </span>
              </li>
              <li pstatus="0" type="price" zp="1200" w="0" btt="" systime="2017-03-08 23:40:25" rel="1200" d="2017-04-30 14:30" s="1" t="2" n="-1" l="-1" p="232556870" title="1200(680*2)" style="display: none;" xzpriceid="4" typeid="142454" productid="231399594" name="史诗巨制 《Cavalia·舞马》2.0升级版2017中国巡演—北京站" productimgpath="http://static.228.cn/upload/2017/03/01/AfterTreatment/1488359902815_p1q0-0.jpg" pinpainame="永乐票务" pinpaiid="70153" rs="rnd124">
                <span>
                  <i>1200(680*2)</i>
                </span>
              </li>
              <li pstatus="0" type="price" zp="1200" w="0" btt="" systime="2017-03-08 23:40:25" rel="1200" d="2017-04-30 19:30" s="1" t="2" n="-1" l="-1" p="232556859" title="1200(480*3)" style="display: none;" xzpriceid="5" typeid="142454" productid="231399594" name="史诗巨制 《Cavalia·舞马》2.0升级版2017中国巡演—北京站" productimgpath="http://static.228.cn/upload/2017/03/01/AfterTreatment/1488359902815_p1q0-0.jpg" pinpainame="永乐票务" pinpaiid="70153" rs="rnd125">
                <span>
                  <i>1200(480*3)</i>
                </span>
              </li>
              <li pstatus="0" type="price" zp="1200" w="0" btt="" systime="2017-03-08 23:40:25" rel="1200" d="2017-04-30 19:30" s="1" t="2" n="-1" l="-1" p="232556860" title="1200(680*2)" style="display: none;" xzpriceid="4" typeid="142454" productid="231399594" name="史诗巨制 《Cavalia·舞马》2.0升级版2017中国巡演—北京站" productimgpath="http://static.228.cn/upload/2017/03/01/AfterTreatment/1488359902815_p1q0-0.jpg" pinpainame="永乐票务" pinpaiid="70153" rs="rnd126">
                <span>
                  <i>1200(680*2)</i>
                </span>
              </li>
              <li pstatus="0" type="price" zp="1200" w="0" btt="" systime="2017-03-08 23:40:25" rel="1200" d="2017-05-01 19:30" s="1" t="2" n="-1" l="-1" p="232556879" title="1200(480*3)" style="display: none;" xzpriceid="5" typeid="142454" productid="231399594" name="史诗巨制 《Cavalia·舞马》2.0升级版2017中国巡演—北京站" productimgpath="http://static.228.cn/upload/2017/03/01/AfterTreatment/1488359902815_p1q0-0.jpg" pinpainame="永乐票务" pinpaiid="70153" rs="rnd127">
                <span>
                  <i>1200(480*3)</i>
                </span>
              </li>
              <li pstatus="0" type="price" zp="1200" w="0" btt="" systime="2017-03-08 23:40:25" rel="1200" d="2017-05-01 19:30" s="1" t="2" n="-1" l="-1" p="232556880" title="1200(680*2)" style="display: none;" xzpriceid="4" typeid="142454" productid="231399594" name="史诗巨制 《Cavalia·舞马》2.0升级版2017中国巡演—北京站" productimgpath="http://static.228.cn/upload/2017/03/01/AfterTreatment/1488359902815_p1q0-0.jpg" pinpainame="永乐票务" pinpaiid="70153" rs="rnd128">
                <span>
                  <i>1200(680*2)</i>
                </span>
              </li>
              <li pstatus="0" class="over" style="display: table; background-position: 100% -205px;" type="price" zp="1280" w="0" btt="" systime="2017-03-08 23:40:25" rel="1280" d="2017-04-19 19:30" s="2" t="1" n="-1" l="-1" p="232556725" title="1280" xzpriceid="2" typeid="142454" productid="231399594" name="史诗巨制 《Cavalia·舞马》2.0升级版2017中国巡演—北京站" productimgpath="http://static.228.cn/upload/2017/03/01/AfterTreatment/1488359902815_p1q0-0.jpg" pinpainame="永乐票务" pinpaiid="70153" rs="rnd129">
                <span>
                  <i>1280</i>
                </span>
              </li>
              <li pstatus="0" class="over" style="display: table; background-position: 100% -205px;" type="price" zp="1280" w="0" btt="" systime="2017-03-08 23:40:25" rel="1280" d="2017-04-19 19:30" s="2" t="2" n="-1" l="-1" p="232556726" title="1280(1280*2)" xzpriceid="2" typeid="142454" productid="231399594" name="史诗巨制 《Cavalia·舞马》2.0升级版2017中国巡演—北京站" productimgpath="http://static.228.cn/upload/2017/03/01/AfterTreatment/1488359902815_p1q0-0.jpg" pinpainame="永乐票务" pinpaiid="70153" rs="rnd130">
                <span>
                  <i>1280(1280*2)</i>
                </span>
              </li>
              <li pstatus="0" class="over" style="display: none; background-position: 100% -205px;" type="price" zp="1280" w="0" btt="" systime="2017-03-08 23:40:25" rel="1280" d="2017-04-21 19:30" s="2" t="1" n="-1" l="-1" p="232556743" title="1280" xzpriceid="2" typeid="142454" productid="231399594" name="史诗巨制 《Cavalia·舞马》2.0升级版2017中国巡演—北京站" productimgpath="http://static.228.cn/upload/2017/03/01/AfterTreatment/1488359902815_p1q0-0.jpg" pinpainame="永乐票务" pinpaiid="70153" rs="rnd131">
                <span>
                  <i>1280</i>
                </span>
              </li>
              <li pstatus="0" class="over" style="display: none; background-position: 100% -205px;" type="price" zp="1280" w="0" btt="" systime="2017-03-08 23:40:25" rel="1280" d="2017-04-21 19:30" s="2" t="2" n="-1" l="-1" p="232556744" title="1280(1280*2)" xzpriceid="2" typeid="142454" productid="231399594" name="史诗巨制 《Cavalia·舞马》2.0升级版2017中国巡演—北京站" productimgpath="http://static.228.cn/upload/2017/03/01/AfterTreatment/1488359902815_p1q0-0.jpg" pinpainame="永乐票务" pinpaiid="70153" rs="rnd132">
                <span>
                  <i>1280(1280*2)</i>
                </span>
              </li>
              <li pstatus="0" type="price" zp="1280" w="0" btt="" systime="2017-03-08 23:40:25" rel="1280" d="2017-04-22 14:30" s="1" t="1" n="-1" l="-1" p="232556807" title="1280" style="display: none;" xzpriceid="2" typeid="142454" productid="231399594" name="史诗巨制 《Cavalia·舞马》2.0升级版2017中国巡演—北京站" productimgpath="http://static.228.cn/upload/2017/03/01/AfterTreatment/1488359902815_p1q0-0.jpg" pinpainame="永乐票务" pinpaiid="70153" rs="rnd133">
                <span>
                  <i>1280</i>
                </span>
              </li>
              <li pstatus="0" type="price" zp="1280" w="0" btt="" systime="2017-03-08 23:40:25" rel="1280" d="2017-04-22 19:30" s="1" t="1" n="-1" l="-1" p="232556797" title="1280" style="display: none;" xzpriceid="2" typeid="142454" productid="231399594" name="史诗巨制 《Cavalia·舞马》2.0升级版2017中国巡演—北京站" productimgpath="http://static.228.cn/upload/2017/03/01/AfterTreatment/1488359902815_p1q0-0.jpg" pinpainame="永乐票务" pinpaiid="70153" rs="rnd134">
                <span>
                  <i>1280</i>
                </span>
              </li>
              <li pstatus="0" type="price" zp="1280" w="0" btt="" systime="2017-03-08 23:40:25" rel="1280" d="2017-04-23 14:30" s="1" t="1" n="-1" l="-1" p="232556827" title="1280" style="display: none;" xzpriceid="2" typeid="142454" productid="231399594" name="史诗巨制 《Cavalia·舞马》2.0升级版2017中国巡演—北京站" productimgpath="http://static.228.cn/upload/2017/03/01/AfterTreatment/1488359902815_p1q0-0.jpg" pinpainame="永乐票务" pinpaiid="70153" rs="rnd135">
                <span>
                  <i>1280</i>
                </span>
              </li>
              <li pstatus="0" type="price" zp="1280" w="0" btt="" systime="2017-03-08 23:40:25" rel="1280" d="2017-04-23 19:30" s="1" t="1" n="-1" l="-1" p="232556817" title="1280" style="display: none;" xzpriceid="2" typeid="142454" productid="231399594" name="史诗巨制 《Cavalia·舞马》2.0升级版2017中国巡演—北京站" productimgpath="http://static.228.cn/upload/2017/03/01/AfterTreatment/1488359902815_p1q0-0.jpg" pinpainame="永乐票务" pinpaiid="70153" rs="rnd136">
                <span>
                  <i>1280</i>
                </span>
              </li>
              <li pstatus="0" type="price" zp="1280" w="0" btt="" systime="2017-03-08 23:40:25" rel="1280" d="2017-04-26 19:30" s="1" t="1" n="-1" l="-1" p="232556761" title="1280" style="display: none;" xzpriceid="2" typeid="142454" productid="231399594" name="史诗巨制 《Cavalia·舞马》2.0升级版2017中国巡演—北京站" productimgpath="http://static.228.cn/upload/2017/03/01/AfterTreatment/1488359902815_p1q0-0.jpg" pinpainame="永乐票务" pinpaiid="70153" rs="rnd137">
                <span>
                  <i>1280</i>
                </span>
              </li>
              <li pstatus="0" type="price" zp="1280" w="0" btt="" systime="2017-03-08 23:40:25" rel="1280" d="2017-04-26 19:30" s="1" t="2" n="-1" l="-1" p="232556762" title="1280(1280*2)" style="display: none;" xzpriceid="2" typeid="142454" productid="231399594" name="史诗巨制 《Cavalia·舞马》2.0升级版2017中国巡演—北京站" productimgpath="http://static.228.cn/upload/2017/03/01/AfterTreatment/1488359902815_p1q0-0.jpg" pinpainame="永乐票务" pinpaiid="70153" rs="rnd138">
                <span>
                  <i>1280(1280*2)</i>
                </span>
              </li>
              <li pstatus="0" type="price" zp="1280" w="0" btt="" systime="2017-03-08 23:40:25" rel="1280" d="2017-04-27 19:30" s="1" t="1" n="-1" l="-1" p="232556779" title="1280" style="display: none;" xzpriceid="2" typeid="142454" productid="231399594" name="史诗巨制 《Cavalia·舞马》2.0升级版2017中国巡演—北京站" productimgpath="http://static.228.cn/upload/2017/03/01/AfterTreatment/1488359902815_p1q0-0.jpg" pinpainame="永乐票务" pinpaiid="70153" rs="rnd139">
                <span>
                  <i>1280</i>
                </span>
              </li>
              <li pstatus="0" type="price" zp="1280" w="0" btt="" systime="2017-03-08 23:40:25" rel="1280" d="2017-04-27 19:30" s="1" t="2" n="-1" l="-1" p="232556780" title="1280(1280*2)" style="display: none;" xzpriceid="2" typeid="142454" productid="231399594" name="史诗巨制 《Cavalia·舞马》2.0升级版2017中国巡演—北京站" productimgpath="http://static.228.cn/upload/2017/03/01/AfterTreatment/1488359902815_p1q0-0.jpg" pinpainame="永乐票务" pinpaiid="70153" rs="rnd140">
                <span>
                  <i>1280(1280*2)</i>
                </span>
              </li>
              <li pstatus="0" type="price" zp="1280" w="0" btt="" systime="2017-03-08 23:40:25" rel="1280" d="2017-04-29 14:30" s="1" t="1" n="-1" l="-1" p="232556847" title="1280" style="display: none;" xzpriceid="2" typeid="142454" productid="231399594" name="史诗巨制 《Cavalia·舞马》2.0升级版2017中国巡演—北京站" productimgpath="http://static.228.cn/upload/2017/03/01/AfterTreatment/1488359902815_p1q0-0.jpg" pinpainame="永乐票务" pinpaiid="70153" rs="rnd141">
                <span>
                  <i>1280</i>
                </span>
              </li>
              <li pstatus="0" type="price" zp="1280" w="0" btt="" systime="2017-03-08 23:40:25" rel="1280" d="2017-04-29 19:30" s="1" t="1" n="-1" l="-1" p="232556837" title="1280" style="display: none;" xzpriceid="2" typeid="142454" productid="231399594" name="史诗巨制 《Cavalia·舞马》2.0升级版2017中国巡演—北京站" productimgpath="http://static.228.cn/upload/2017/03/01/AfterTreatment/1488359902815_p1q0-0.jpg" pinpainame="永乐票务" pinpaiid="70153" rs="rnd142">
                <span>
                  <i>1280</i>
                </span>
              </li>
              <li pstatus="0" type="price" zp="1280" w="0" btt="" systime="2017-03-08 23:40:25" rel="1280" d="2017-04-30 14:30" s="1" t="1" n="-1" l="-1" p="232556867" title="1280" style="display: none;" xzpriceid="2" typeid="142454" productid="231399594" name="史诗巨制 《Cavalia·舞马》2.0升级版2017中国巡演—北京站" productimgpath="http://static.228.cn/upload/2017/03/01/AfterTreatment/1488359902815_p1q0-0.jpg" pinpainame="永乐票务" pinpaiid="70153" rs="rnd143">
                <span>
                  <i>1280</i>
                </span>
              </li>
              <li pstatus="0" type="price" zp="1280" w="0" btt="" systime="2017-03-08 23:40:25" rel="1280" d="2017-04-30 19:30" s="1" t="1" n="-1" l="-1" p="232556857" title="1280" style="display: none;" xzpriceid="2" typeid="142454" productid="231399594" name="史诗巨制 《Cavalia·舞马》2.0升级版2017中国巡演—北京站" productimgpath="http://static.228.cn/upload/2017/03/01/AfterTreatment/1488359902815_p1q0-0.jpg" pinpainame="永乐票务" pinpaiid="70153" rs="rnd144">
                <span>
                  <i>1280</i>
                </span>
              </li>
              <li pstatus="0" type="price" zp="1280" w="0" btt="" systime="2017-03-08 23:40:25" rel="1280" d="2017-05-01 19:30" s="1" t="1" n="-1" l="-1" p="232556877" title="1280" style="display: none;" xzpriceid="2" typeid="142454" productid="231399594" name="史诗巨制 《Cavalia·舞马》2.0升级版2017中国巡演—北京站" productimgpath="http://static.228.cn/upload/2017/03/01/AfterTreatment/1488359902815_p1q0-0.jpg" pinpainame="永乐票务" pinpaiid="70153" rs="rnd145">
                <span>
                  <i>1280</i>
                </span>
              </li>
              <li pstatus="0" class="over" style="display: table; background-position: 100% -205px;" type="price" zp="1620" w="0" btt="" systime="2017-03-08 23:40:25" rel="1620" d="2017-04-19 19:30" s="2" t="2" n="-1" l="-1" p="232556733" title="1620(1080*3)" xzpriceid="3" typeid="142454" productid="231399594" name="史诗巨制 《Cavalia·舞马》2.0升级版2017中国巡演—北京站" productimgpath="http://static.228.cn/upload/2017/03/01/AfterTreatment/1488359902815_p1q0-0.jpg" pinpainame="永乐票务" pinpaiid="70153" rs="rnd146">
                <span>
                  <i>1620(1080*3)</i>
                </span>
              </li>
              <li pstatus="0" class="over" style="display: none; background-position: 100% -205px;" type="price" zp="1620" w="0" btt="" systime="2017-03-08 23:40:25" rel="1620" d="2017-04-21 19:30" s="2" t="2" n="-1" l="-1" p="232556751" title="1620(1080*3)" xzpriceid="3" typeid="142454" productid="231399594" name="史诗巨制 《Cavalia·舞马》2.0升级版2017中国巡演—北京站" productimgpath="http://static.228.cn/upload/2017/03/01/AfterTreatment/1488359902815_p1q0-0.jpg" pinpainame="永乐票务" pinpaiid="70153" rs="rnd147">
                <span>
                  <i>1620(1080*3)</i>
                </span>
              </li>
              <li pstatus="0" type="price" zp="1620" w="0" btt="" systime="2017-03-08 23:40:25" rel="1620" d="2017-04-26 19:30" s="1" t="2" n="-1" l="-1" p="232556769" title="1620(1080*3)" style="display: none;" xzpriceid="3" typeid="142454" productid="231399594" name="史诗巨制 《Cavalia·舞马》2.0升级版2017中国巡演—北京站" productimgpath="http://static.228.cn/upload/2017/03/01/AfterTreatment/1488359902815_p1q0-0.jpg" pinpainame="永乐票务" pinpaiid="70153" rs="rnd148">
                <span>
                  <i>1620(1080*3)</i>
                </span>
              </li>
              <li pstatus="0" type="price" zp="1620" w="0" btt="" systime="2017-03-08 23:40:25" rel="1620" d="2017-04-27 19:30" s="1" t="2" n="-1" l="-1" p="232556787" title="1620(1080*3)" style="display: none;" xzpriceid="3" typeid="142454" productid="231399594" name="史诗巨制 《Cavalia·舞马》2.0升级版2017中国巡演—北京站" productimgpath="http://static.228.cn/upload/2017/03/01/AfterTreatment/1488359902815_p1q0-0.jpg" pinpainame="永乐票务" pinpaiid="70153" rs="rnd149">
                <span>
                  <i>1620(1080*3)</i>
                </span>
              </li>
              <li pstatus="0" type="price" zp="1700" w="0" btt="" systime="2017-03-08 23:40:25" rel="1700" d="2017-04-22 14:30" s="1" t="2" n="-1" l="-1" p="232556811" title="1700(680*3)" style="display: none;" xzpriceid="4" typeid="142454" productid="231399594" name="史诗巨制 《Cavalia·舞马》2.0升级版2017中国巡演—北京站" productimgpath="http://static.228.cn/upload/2017/03/01/AfterTreatment/1488359902815_p1q0-0.jpg" pinpainame="永乐票务" pinpaiid="70153" rs="rnd150">
                <span>
                  <i>1700(680*3)</i>
                </span>
              </li>
              <li pstatus="0" type="price" zp="1700" w="0" btt="" systime="2017-03-08 23:40:25" rel="1700" d="2017-04-22 19:30" s="1" t="2" n="-1" l="-1" p="232556801" title="1700(680*3)" style="display: none;" xzpriceid="4" typeid="142454" productid="231399594" name="史诗巨制 《Cavalia·舞马》2.0升级版2017中国巡演—北京站" productimgpath="http://static.228.cn/upload/2017/03/01/AfterTreatment/1488359902815_p1q0-0.jpg" pinpainame="永乐票务" pinpaiid="70153" rs="rnd151">
                <span>
                  <i>1700(680*3)</i>
                </span>
              </li>
              <li pstatus="0" type="price" zp="1700" w="0" btt="" systime="2017-03-08 23:40:25" rel="1700" d="2017-04-23 14:30" s="1" t="2" n="-1" l="-1" p="232556831" title="1700(680*3)" style="display: none;" xzpriceid="4" typeid="142454" productid="231399594" name="史诗巨制 《Cavalia·舞马》2.0升级版2017中国巡演—北京站" productimgpath="http://static.228.cn/upload/2017/03/01/AfterTreatment/1488359902815_p1q0-0.jpg" pinpainame="永乐票务" pinpaiid="70153" rs="rnd152">
                <span>
                  <i>1700(680*3)</i>
                </span>
              </li>
              <li pstatus="0" type="price" zp="1700" w="0" btt="" systime="2017-03-08 23:40:25" rel="1700" d="2017-04-23 19:30" s="1" t="2" n="-1" l="-1" p="232556821" title="1700(680*3)" style="display: none;" xzpriceid="4" typeid="142454" productid="231399594" name="史诗巨制 《Cavalia·舞马》2.0升级版2017中国巡演—北京站" productimgpath="http://static.228.cn/upload/2017/03/01/AfterTreatment/1488359902815_p1q0-0.jpg" pinpainame="永乐票务" pinpaiid="70153" rs="rnd153">
                <span>
                  <i>1700(680*3)</i>
                </span>
              </li>
              <li pstatus="0" type="price" zp="1700" w="0" btt="" systime="2017-03-08 23:40:25" rel="1700" d="2017-04-29 14:30" s="1" t="2" n="-1" l="-1" p="232556851" title="1700(680*3)" style="display: none;" xzpriceid="4" typeid="142454" productid="231399594" name="史诗巨制 《Cavalia·舞马》2.0升级版2017中国巡演—北京站" productimgpath="http://static.228.cn/upload/2017/03/01/AfterTreatment/1488359902815_p1q0-0.jpg" pinpainame="永乐票务" pinpaiid="70153" rs="rnd154">
                <span>
                  <i>1700(680*3)</i>
                </span>
              </li>
              <li pstatus="0" type="price" zp="1700" w="0" btt="" systime="2017-03-08 23:40:25" rel="1700" d="2017-04-29 19:30" s="1" t="2" n="-1" l="-1" p="232556841" title="1700(680*3)" style="display: none;" xzpriceid="4" typeid="142454" productid="231399594" name="史诗巨制 《Cavalia·舞马》2.0升级版2017中国巡演—北京站" productimgpath="http://static.228.cn/upload/2017/03/01/AfterTreatment/1488359902815_p1q0-0.jpg" pinpainame="永乐票务" pinpaiid="70153" rs="rnd155">
                <span>
                  <i>1700(680*3)</i>
                </span>
              </li>
              <li pstatus="0" type="price" zp="1700" w="0" btt="" systime="2017-03-08 23:40:25" rel="1700" d="2017-04-30 14:30" s="1" t="2" n="-1" l="-1" p="232556871" title="1700(680*3)" style="display: none;" xzpriceid="4" typeid="142454" productid="231399594" name="史诗巨制 《Cavalia·舞马》2.0升级版2017中国巡演—北京站" productimgpath="http://static.228.cn/upload/2017/03/01/AfterTreatment/1488359902815_p1q0-0.jpg" pinpainame="永乐票务" pinpaiid="70153" rs="rnd156">
                <span>
                  <i>1700(680*3)</i>
                </span>
              </li>
              <li pstatus="0" type="price" zp="1700" w="0" btt="" systime="2017-03-08 23:40:25" rel="1700" d="2017-04-30 19:30" s="1" t="2" n="-1" l="-1" p="232556861" title="1700(680*3)" style="display: none;" xzpriceid="4" typeid="142454" productid="231399594" name="史诗巨制 《Cavalia·舞马》2.0升级版2017中国巡演—北京站" productimgpath="http://static.228.cn/upload/2017/03/01/AfterTreatment/1488359902815_p1q0-0.jpg" pinpainame="永乐票务" pinpaiid="70153" rs="rnd157">
                <span>
                  <i>1700(680*3)</i>
                </span>
              </li>
              <li pstatus="0" type="price" zp="1700" w="0" btt="" systime="2017-03-08 23:40:25" rel="1700" d="2017-05-01 19:30" s="1" t="2" n="-1" l="-1" p="232556881" title="1700(680*3)" style="display: none;" xzpriceid="4" typeid="142454" productid="231399594" name="史诗巨制 《Cavalia·舞马》2.0升级版2017中国巡演—北京站" productimgpath="http://static.228.cn/upload/2017/03/01/AfterTreatment/1488359902815_p1q0-0.jpg" pinpainame="永乐票务" pinpaiid="70153" rs="rnd158">
                <span>
                  <i>1700(680*3)</i>
                </span>
              </li>
              <li pstatus="0" class="over" style="display: table; background-position: 100% -205px;" type="price" zp="1920" w="0" btt="" systime="2017-03-08 23:40:25" rel="1920" d="2017-04-19 19:30" s="2" t="2" n="-1" l="-1" p="232556732" title="1920(1280*3)" xzpriceid="2" typeid="142454" productid="231399594" name="史诗巨制 《Cavalia·舞马》2.0升级版2017中国巡演—北京站" productimgpath="http://static.228.cn/upload/2017/03/01/AfterTreatment/1488359902815_p1q0-0.jpg" pinpainame="永乐票务" pinpaiid="70153" rs="rnd159">
                <span>
                  <i>1920(1280*3)</i>
                </span>
              </li>
              <li pstatus="0" class="over" style="display: none; background-position: 100% -205px;" type="price" zp="1920" w="0" btt="" systime="2017-03-08 23:40:25" rel="1920" d="2017-04-21 19:30" s="2" t="2" n="-1" l="-1" p="232556750" title="1920(1280*3)" xzpriceid="2" typeid="142454" productid="231399594" name="史诗巨制 《Cavalia·舞马》2.0升级版2017中国巡演—北京站" productimgpath="http://static.228.cn/upload/2017/03/01/AfterTreatment/1488359902815_p1q0-0.jpg" pinpainame="永乐票务" pinpaiid="70153" rs="rnd160">
                <span>
                  <i>1920(1280*3)</i>
                </span>
              </li>
              <li pstatus="0" type="price" zp="1920" w="0" btt="" systime="2017-03-08 23:40:25" rel="1920" d="2017-04-26 19:30" s="1" t="2" n="-1" l="-1" p="232556768" title="1920(1280*3)" style="display: none;" xzpriceid="2" typeid="142454" productid="231399594" name="史诗巨制 《Cavalia·舞马》2.0升级版2017中国巡演—北京站" productimgpath="http://static.228.cn/upload/2017/03/01/AfterTreatment/1488359902815_p1q0-0.jpg" pinpainame="永乐票务" pinpaiid="70153" rs="rnd161">
                <span>
                  <i>1920(1280*3)</i>
                </span>
              </li>
              <li pstatus="0" type="price" zp="1920" w="0" btt="" systime="2017-03-08 23:40:25" rel="1920" d="2017-04-27 19:30" s="1" t="2" n="-1" l="-1" p="232556786" title="1920(1280*3)" style="display: none;" xzpriceid="2" typeid="142454" productid="231399594" name="史诗巨制 《Cavalia·舞马》2.0升级版2017中国巡演—北京站" productimgpath="http://static.228.cn/upload/2017/03/01/AfterTreatment/1488359902815_p1q0-0.jpg" pinpainame="永乐票务" pinpaiid="70153" rs="rnd162">
                <span>
                  <i>1920(1280*3)</i>
                </span>
              </li>
            </ul>
          </div>
          <p class="pl10 pt5 red">注：选择已售完票价可进行缺货登记，建议您购买现货商品。</p>
          <div class="date mt30" id="JchoosePrice" style="">
            <label class="mno">您已选择：</label>
            <div class="relt-list" id="JreltList">
              <ul class="dznew relt clearfloat">
                <li class="relt-1">2017-04-19 周三 19:30</li>
                <li class="relt-2">"480"</li>
                <li>
                  <dl>
                    <a href="javascript:void(0);" n="30" class="relt-prev" onclick="num(1, 30, this, false);"></a>
                    <input type="text" class="yl-order" maxlength="2" value="1" n="30" ppid="232556722" onkeyup="setValuesInt(this,1, 30, false);">
                    <a href="javascript:void(0);" class="relt-next" n="30" onclick="num(2, 30, this, false);"></a>
                  </dl>
                </li>
                <li>
                  <a href="javascript:void(0);" class="relt-3" rel="rnd43" onclick="delPrice(this,this.rel);">删除</a></li>
                <li>
                  <div class="relt-msg">最多可订购30张!
                    <s></s>
                  </div>
                </li>
              </ul>
            </div>
          </div>
          <div class="buy-btns">
            <a rel="nofollow" class="btn-seat-buy zxxz" title="选座购买" href="javascript:getSeatFunction();"></a>
            <input type="hidden" value="0" id="customerFlag">
            <input type="hidden" value="0" id="isRobTicket">
            <input type="hidden" value="0" id="isLimit">
            <a href="javascript:void(0);" rel="nofollow" class="btn-now-buy" pid="231399594" title="立即购买"></a>
            <div class="error_berfor_msg" style="color: red;padding-left: 80px;margin-top: 50px;display: none;">此商品不能上门自取，并且演出前三天无法快递配送，目前已不能购买，给您带来的不便，敬请谅解。</div></div>
        </div>
      </div>
    </div>
    <div class="boxer" id="JpriceBoxer">
      <div class="tit clearfloat">
        <span>全部演出详情</span>
        <a href="javascript:void(0);" class="close box-closes"></a>
      </div>
      <div class="prices-selt">
        <ul class="selt-hd clearfloat">
          <li class="selt-hd-l">日期/场次</li>
          <li class="selt-hd-r">选择价格</li></ul>
        <div class="price-all-bd" id="prices-all" style="height: 566px;">
          <dl class="prices-show clearfloat">
            <dt>
              <p>2017-04-19 周三 19:30
                <br></p></dt>
            <dd>
              <ul class="date-ul price price-l price-ck">
                <li class="over" style="background-position:100% -205px;" pstatus="0" type="price" zp="180" rel="180" d="2017-04-19 19:30" s="2" t="1" n="-1" l="-1" p="232556720" title="180" rs="rnd163">
                  <span>
                    <i>180</i>
                  </span>
                </li>
                <li class="over" style="background-position:100% -205px;" pstatus="0" type="price" zp="180" rel="180" d="2017-04-19 19:30" s="2" t="2" n="-1" l="-1" p="232556731" title="180(180*2)" rs="rnd164">
                  <span>
                    <i>180(180*2)</i>
                  </span>
                </li>
                <li class="over" style="background-position:100% -205px;" pstatus="0" type="price" zp="270" rel="270" d="2017-04-19 19:30" s="2" t="2" n="-1" l="-1" p="232556737" title="270(180*3)" rs="rnd165">
                  <span>
                    <i>270(180*3)</i>
                  </span>
                </li>
                <li class="over" style="background-position:100% -205px;" pstatus="0" type="price" zp="280" rel="280" d="2017-04-19 19:30" s="2" t="1" n="-1" l="-1" p="232556721" title="280" rs="rnd166">
                  <span>
                    <i>280</i>
                  </span>
                </li>
                <li class="over" style="background-position:100% -205px;" pstatus="0" type="price" zp="280" rel="280" d="2017-04-19 19:30" s="2" t="2" n="-1" l="-1" p="232556730" title="280(280*2)" rs="rnd167">
                  <span>
                    <i>280(280*2)</i>
                  </span>
                </li>
                <li class="over" style="background-position:100% -205px;" pstatus="0" type="price" zp="420" rel="420" d="2017-04-19 19:30" s="2" t="2" n="-1" l="-1" p="232556736" title="420(280*3)" rs="rnd168">
                  <span>
                    <i>420(280*3)</i>
                  </span>
                </li>
                <li pstatus="0" type="price" zp="480" rel="480" d="2017-04-19 19:30" s="1" t="1" n="-1" l="-1" p="232556722" title="480" rs="rnd169">
                  <span>
                    <i>480</i>
                  </span>
                </li>
                <li pstatus="0" type="price" zp="480" rel="480" d="2017-04-19 19:30" s="1" t="2" n="-1" l="-1" p="232556729" title="480(480*2)" rs="rnd170">
                  <span>
                    <i>480(480*2)</i>
                  </span>
                </li>
                <li pstatus="0" type="price" zp="680" rel="680" d="2017-04-19 19:30" s="1" t="1" n="-1" l="-1" p="232556723" title="680" rs="rnd171">
                  <span>
                    <i>680</i>
                  </span>
                </li>
                <li pstatus="0" type="price" zp="680" rel="680" d="2017-04-19 19:30" s="1" t="2" n="-1" l="-1" p="232556728" title="680(680*2)" rs="rnd172">
                  <span>
                    <i>680(680*2)</i>
                  </span>
                </li>
                <li pstatus="0" type="price" zp="720" rel="720" d="2017-04-19 19:30" s="1" t="2" n="-1" l="-1" p="232556735" title="720(480*3)" rs="rnd173">
                  <span>
                    <i>720(480*3)</i>
                  </span>
                </li>
                <li pstatus="0" type="price" zp="1020" rel="1020" d="2017-04-19 19:30" s="1" t="2" n="-1" l="-1" p="232556734" title="1020(680*3)" rs="rnd174">
                  <span>
                    <i>1020(680*3)</i>
                  </span>
                </li>
                <li class="over" style="background-position:100% -205px;" pstatus="0" type="price" zp="1080" rel="1080" d="2017-04-19 19:30" s="2" t="1" n="-1" l="-1" p="232556724" title="1080" rs="rnd175">
                  <span>
                    <i>1080</i>
                  </span>
                </li>
                <li class="over" style="background-position:100% -205px;" pstatus="0" type="price" zp="1080" rel="1080" d="2017-04-19 19:30" s="2" t="2" n="-1" l="-1" p="232556727" title="1080(1080*2)" rs="rnd176">
                  <span>
                    <i>1080(1080*2)</i>
                  </span>
                </li>
                <li class="over" style="background-position:100% -205px;" pstatus="0" type="price" zp="1280" rel="1280" d="2017-04-19 19:30" s="2" t="1" n="-1" l="-1" p="232556725" title="1280" rs="rnd177">
                  <span>
                    <i>1280</i>
                  </span>
                </li>
                <li class="over" style="background-position:100% -205px;" pstatus="0" type="price" zp="1280" rel="1280" d="2017-04-19 19:30" s="2" t="2" n="-1" l="-1" p="232556726" title="1280(1280*2)" rs="rnd178">
                  <span>
                    <i>1280(1280*2)</i>
                  </span>
                </li>
                <li class="over" style="background-position:100% -205px;" pstatus="0" type="price" zp="1620" rel="1620" d="2017-04-19 19:30" s="2" t="2" n="-1" l="-1" p="232556733" title="1620(1080*3)" rs="rnd179">
                  <span>
                    <i>1620(1080*3)</i>
                  </span>
                </li>
                <li class="over" style="background-position:100% -205px;" pstatus="0" type="price" zp="1920" rel="1920" d="2017-04-19 19:30" s="2" t="2" n="-1" l="-1" p="232556732" title="1920(1280*3)" rs="rnd180">
                  <span>
                    <i>1920(1280*3)</i>
                  </span>
                </li>
              </ul>
            </dd>
          </dl>
          <dl class="prices-show clearfloat">
            <dt>
              <p>2017-04-21 周五 19:30
                <br></p></dt>
            <dd>
              <ul class="date-ul price price-l price-ck">
                <li class="over" style="background-position:100% -205px;" pstatus="0" type="price" zp="180" rel="180" d="2017-04-21 19:30" s="2" t="1" n="-1" l="-1" p="232556738" title="180" rs="rnd181">
                  <span>
                    <i>180</i>
                  </span>
                </li>
                <li class="over" style="background-position:100% -205px;" pstatus="0" type="price" zp="180" rel="180" d="2017-04-21 19:30" s="2" t="2" n="-1" l="-1" p="232556749" title="180(180*2)" rs="rnd182">
                  <span>
                    <i>180(180*2)</i>
                  </span>
                </li>
                <li class="over" style="background-position:100% -205px;" pstatus="0" type="price" zp="270" rel="270" d="2017-04-21 19:30" s="2" t="2" n="-1" l="-1" p="232556755" title="270(180*3)" rs="rnd183">
                  <span>
                    <i>270(180*3)</i>
                  </span>
                </li>
                <li class="over" style="background-position:100% -205px;" pstatus="0" type="price" zp="280" rel="280" d="2017-04-21 19:30" s="2" t="1" n="-1" l="-1" p="232556739" title="280" rs="rnd184">
                  <span>
                    <i>280</i>
                  </span>
                </li>
                <li class="over" style="background-position:100% -205px;" pstatus="0" type="price" zp="280" rel="280" d="2017-04-21 19:30" s="2" t="2" n="-1" l="-1" p="232556748" title="280(280*2)" rs="rnd185">
                  <span>
                    <i>280(280*2)</i>
                  </span>
                </li>
                <li class="over" style="background-position:100% -205px;" pstatus="0" type="price" zp="420" rel="420" d="2017-04-21 19:30" s="2" t="2" n="-1" l="-1" p="232556754" title="420(280*3)" rs="rnd186">
                  <span>
                    <i>420(280*3)</i>
                  </span>
                </li>
                <li pstatus="0" type="price" zp="480" rel="480" d="2017-04-21 19:30" s="1" t="1" n="-1" l="-1" p="232556740" title="480" rs="rnd187">
                  <span>
                    <i>480</i>
                  </span>
                </li>
                <li pstatus="0" type="price" zp="480" rel="480" d="2017-04-21 19:30" s="1" t="2" n="-1" l="-1" p="232556747" title="480(480*2)" rs="rnd188">
                  <span>
                    <i>480(480*2)</i>
                  </span>
                </li>
                <li class="over" style="background-position:100% -205px;" pstatus="0" type="price" zp="680" rel="680" d="2017-04-21 19:30" s="2" t="1" n="-1" l="-1" p="232556741" title="680" rs="rnd189">
                  <span>
                    <i>680</i>
                  </span>
                </li>
                <li class="over" style="background-position:100% -205px;" pstatus="0" type="price" zp="680" rel="680" d="2017-04-21 19:30" s="2" t="2" n="-1" l="-1" p="232556746" title="680(680*2)" rs="rnd190">
                  <span>
                    <i>680(680*2)</i>
                  </span>
                </li>
                <li pstatus="0" type="price" zp="720" rel="720" d="2017-04-21 19:30" s="1" t="2" n="-1" l="-1" p="232556753" title="720(480*3)" rs="rnd191">
                  <span>
                    <i>720(480*3)</i>
                  </span>
                </li>
                <li class="over" style="background-position:100% -205px;" pstatus="0" type="price" zp="1020" rel="1020" d="2017-04-21 19:30" s="2" t="2" n="-1" l="-1" p="232556752" title="1020(680*3)" rs="rnd192">
                  <span>
                    <i>1020(680*3)</i>
                  </span>
                </li>
                <li class="over" style="background-position:100% -205px;" pstatus="0" type="price" zp="1080" rel="1080" d="2017-04-21 19:30" s="2" t="1" n="-1" l="-1" p="232556742" title="1080" rs="rnd193">
                  <span>
                    <i>1080</i>
                  </span>
                </li>
                <li class="over" style="background-position:100% -205px;" pstatus="0" type="price" zp="1080" rel="1080" d="2017-04-21 19:30" s="2" t="2" n="-1" l="-1" p="232556745" title="1080(1080*2)" rs="rnd194">
                  <span>
                    <i>1080(1080*2)</i>
                  </span>
                </li>
                <li class="over" style="background-position:100% -205px;" pstatus="0" type="price" zp="1280" rel="1280" d="2017-04-21 19:30" s="2" t="1" n="-1" l="-1" p="232556743" title="1280" rs="rnd195">
                  <span>
                    <i>1280</i>
                  </span>
                </li>
                <li class="over" style="background-position:100% -205px;" pstatus="0" type="price" zp="1280" rel="1280" d="2017-04-21 19:30" s="2" t="2" n="-1" l="-1" p="232556744" title="1280(1280*2)" rs="rnd196">
                  <span>
                    <i>1280(1280*2)</i>
                  </span>
                </li>
                <li class="over" style="background-position:100% -205px;" pstatus="0" type="price" zp="1620" rel="1620" d="2017-04-21 19:30" s="2" t="2" n="-1" l="-1" p="232556751" title="1620(1080*3)" rs="rnd197">
                  <span>
                    <i>1620(1080*3)</i>
                  </span>
                </li>
                <li class="over" style="background-position:100% -205px;" pstatus="0" type="price" zp="1920" rel="1920" d="2017-04-21 19:30" s="2" t="2" n="-1" l="-1" p="232556750" title="1920(1280*3)" rs="rnd198">
                  <span>
                    <i>1920(1280*3)</i>
                  </span>
                </li>
              </ul>
            </dd>
          </dl>
          <dl class="prices-show clearfloat">
            <dt>
              <p>2017-04-22 周六 14:30
                <br></p></dt>
            <dd>
              <ul class="date-ul price price-l price-ck">
                <li class="over" style="background-position:100% -205px;" pstatus="0" type="price" zp="180" rel="180" d="2017-04-22 14:30" s="2" t="1" n="-1" l="-1" p="232556802" title="180" rs="rnd199">
                  <span>
                    <i>180</i>
                  </span>
                </li>
                <li pstatus="0" type="price" zp="280" rel="280" d="2017-04-22 14:30" s="1" t="1" n="-1" l="-1" p="232556803" title="280" rs="rnd200">
                  <span>
                    <i>280</i>
                  </span>
                </li>
                <li pstatus="0" type="price" zp="480" rel="480" d="2017-04-22 14:30" s="1" t="1" n="-1" l="-1" p="232556804" title="480" rs="rnd201">
                  <span>
                    <i>480</i>
                  </span>
                </li>
                <li pstatus="0" type="price" zp="680" rel="680" d="2017-04-22 14:30" s="1" t="1" n="-1" l="-1" p="232556805" title="680" rs="rnd202">
                  <span>
                    <i>680</i>
                  </span>
                </li>
                <li pstatus="0" type="price" zp="800" rel="800" d="2017-04-22 14:30" s="1" t="2" n="-1" l="-1" p="232556808" title="800(480*2)" rs="rnd203">
                  <span>
                    <i>800(480*2)</i>
                  </span>
                </li>
                <li pstatus="0" type="price" zp="1080" rel="1080" d="2017-04-22 14:30" s="1" t="1" n="-1" l="-1" p="232556806" title="1080" rs="rnd204">
                  <span>
                    <i>1080</i>
                  </span>
                </li>
                <li pstatus="0" type="price" zp="1200" rel="1200" d="2017-04-22 14:30" s="1" t="2" n="-1" l="-1" p="232556809" title="1200(480*3)" rs="rnd205">
                  <span>
                    <i>1200(480*3)</i>
                  </span>
                </li>
                <li pstatus="0" type="price" zp="1200" rel="1200" d="2017-04-22 14:30" s="1" t="2" n="-1" l="-1" p="232556810" title="1200(680*2)" rs="rnd206">
                  <span>
                    <i>1200(680*2)</i>
                  </span>
                </li>
                <li pstatus="0" type="price" zp="1280" rel="1280" d="2017-04-22 14:30" s="1" t="1" n="-1" l="-1" p="232556807" title="1280" rs="rnd207">
                  <span>
                    <i>1280</i>
                  </span>
                </li>
                <li pstatus="0" type="price" zp="1700" rel="1700" d="2017-04-22 14:30" s="1" t="2" n="-1" l="-1" p="232556811" title="1700(680*3)" rs="rnd208">
                  <span>
                    <i>1700(680*3)</i>
                  </span>
                </li>
              </ul>
            </dd>
          </dl>
          <dl class="prices-show clearfloat">
            <dt>
              <p>2017-04-22 周六 19:30
                <br></p></dt>
            <dd>
              <ul class="date-ul price price-l price-ck">
                <li class="over" style="background-position:100% -205px;" pstatus="0" type="price" zp="180" rel="180" d="2017-04-22 19:30" s="2" t="1" n="-1" l="-1" p="232556792" title="180" rs="rnd209">
                  <span>
                    <i>180</i>
                  </span>
                </li>
                <li pstatus="0" type="price" zp="280" rel="280" d="2017-04-22 19:30" s="1" t="1" n="-1" l="-1" p="232556793" title="280" rs="rnd210">
                  <span>
                    <i>280</i>
                  </span>
                </li>
                <li pstatus="0" type="price" zp="480" rel="480" d="2017-04-22 19:30" s="1" t="1" n="-1" l="-1" p="232556794" title="480" rs="rnd211">
                  <span>
                    <i>480</i>
                  </span>
                </li>
                <li pstatus="0" type="price" zp="680" rel="680" d="2017-04-22 19:30" s="1" t="1" n="-1" l="-1" p="232556795" title="680" rs="rnd212">
                  <span>
                    <i>680</i>
                  </span>
                </li>
                <li pstatus="0" type="price" zp="800" rel="800" d="2017-04-22 19:30" s="1" t="2" n="-1" l="-1" p="232556798" title="800(480*2)" rs="rnd213">
                  <span>
                    <i>800(480*2)</i>
                  </span>
                </li>
                <li pstatus="0" type="price" zp="1080" rel="1080" d="2017-04-22 19:30" s="1" t="1" n="-1" l="-1" p="232556796" title="1080" rs="rnd214">
                  <span>
                    <i>1080</i>
                  </span>
                </li>
                <li pstatus="0" type="price" zp="1200" rel="1200" d="2017-04-22 19:30" s="1" t="2" n="-1" l="-1" p="232556799" title="1200(480*3)" rs="rnd215">
                  <span>
                    <i>1200(480*3)</i>
                  </span>
                </li>
                <li pstatus="0" type="price" zp="1200" rel="1200" d="2017-04-22 19:30" s="1" t="2" n="-1" l="-1" p="232556800" title="1200(680*2)" rs="rnd216">
                  <span>
                    <i>1200(680*2)</i>
                  </span>
                </li>
                <li pstatus="0" type="price" zp="1280" rel="1280" d="2017-04-22 19:30" s="1" t="1" n="-1" l="-1" p="232556797" title="1280" rs="rnd217">
                  <span>
                    <i>1280</i>
                  </span>
                </li>
                <li pstatus="0" type="price" zp="1700" rel="1700" d="2017-04-22 19:30" s="1" t="2" n="-1" l="-1" p="232556801" title="1700(680*3)" rs="rnd218">
                  <span>
                    <i>1700(680*3)</i>
                  </span>
                </li>
              </ul>
            </dd>
          </dl>
          <dl class="prices-show clearfloat">
            <dt>
              <p>2017-04-23 周日 14:30
                <br></p></dt>
            <dd>
              <ul class="date-ul price price-l price-ck">
                <li class="over" style="background-position:100% -205px;" pstatus="0" type="price" zp="180" rel="180" d="2017-04-23 14:30" s="2" t="1" n="-1" l="-1" p="232556822" title="180" rs="rnd219">
                  <span>
                    <i>180</i>
                  </span>
                </li>
                <li pstatus="0" type="price" zp="280" rel="280" d="2017-04-23 14:30" s="1" t="1" n="-1" l="-1" p="232556823" title="280" rs="rnd220">
                  <span>
                    <i>280</i>
                  </span>
                </li>
                <li pstatus="0" type="price" zp="480" rel="480" d="2017-04-23 14:30" s="1" t="1" n="-1" l="-1" p="232556824" title="480" rs="rnd221">
                  <span>
                    <i>480</i>
                  </span>
                </li>
                <li pstatus="0" type="price" zp="680" rel="680" d="2017-04-23 14:30" s="1" t="1" n="-1" l="-1" p="232556825" title="680" rs="rnd222">
                  <span>
                    <i>680</i>
                  </span>
                </li>
                <li pstatus="0" type="price" zp="800" rel="800" d="2017-04-23 14:30" s="1" t="2" n="-1" l="-1" p="232556828" title="800(480*2)" rs="rnd223">
                  <span>
                    <i>800(480*2)</i>
                  </span>
                </li>
                <li pstatus="0" type="price" zp="1080" rel="1080" d="2017-04-23 14:30" s="1" t="1" n="-1" l="-1" p="232556826" title="1080" rs="rnd224">
                  <span>
                    <i>1080</i>
                  </span>
                </li>
                <li pstatus="0" type="price" zp="1200" rel="1200" d="2017-04-23 14:30" s="1" t="2" n="-1" l="-1" p="232556829" title="1200(480*3)" rs="rnd225">
                  <span>
                    <i>1200(480*3)</i>
                  </span>
                </li>
                <li pstatus="0" type="price" zp="1200" rel="1200" d="2017-04-23 14:30" s="1" t="2" n="-1" l="-1" p="232556830" title="1200(680*2)" rs="rnd226">
                  <span>
                    <i>1200(680*2)</i>
                  </span>
                </li>
                <li pstatus="0" type="price" zp="1280" rel="1280" d="2017-04-23 14:30" s="1" t="1" n="-1" l="-1" p="232556827" title="1280" rs="rnd227">
                  <span>
                    <i>1280</i>
                  </span>
                </li>
                <li pstatus="0" type="price" zp="1700" rel="1700" d="2017-04-23 14:30" s="1" t="2" n="-1" l="-1" p="232556831" title="1700(680*3)" rs="rnd228">
                  <span>
                    <i>1700(680*3)</i>
                  </span>
                </li>
              </ul>
            </dd>
          </dl>
          <dl class="prices-show clearfloat">
            <dt>
              <p>2017-04-23 周日 19:30
                <br></p></dt>
            <dd>
              <ul class="date-ul price price-l price-ck">
                <li class="over" style="background-position:100% -205px;" pstatus="0" type="price" zp="180" rel="180" d="2017-04-23 19:30" s="2" t="1" n="-1" l="-1" p="232556812" title="180" rs="rnd229">
                  <span>
                    <i>180</i>
                  </span>
                </li>
                <li pstatus="0" type="price" zp="280" rel="280" d="2017-04-23 19:30" s="1" t="1" n="-1" l="-1" p="232556813" title="280" rs="rnd230">
                  <span>
                    <i>280</i>
                  </span>
                </li>
                <li pstatus="0" type="price" zp="480" rel="480" d="2017-04-23 19:30" s="1" t="1" n="-1" l="-1" p="232556814" title="480" rs="rnd231">
                  <span>
                    <i>480</i>
                  </span>
                </li>
                <li pstatus="0" type="price" zp="680" rel="680" d="2017-04-23 19:30" s="1" t="1" n="-1" l="-1" p="232556815" title="680" rs="rnd232">
                  <span>
                    <i>680</i>
                  </span>
                </li>
                <li pstatus="0" type="price" zp="800" rel="800" d="2017-04-23 19:30" s="1" t="2" n="-1" l="-1" p="232556818" title="800(480*2)" rs="rnd233">
                  <span>
                    <i>800(480*2)</i>
                  </span>
                </li>
                <li pstatus="0" type="price" zp="1080" rel="1080" d="2017-04-23 19:30" s="1" t="1" n="-1" l="-1" p="232556816" title="1080" rs="rnd234">
                  <span>
                    <i>1080</i>
                  </span>
                </li>
                <li pstatus="0" type="price" zp="1200" rel="1200" d="2017-04-23 19:30" s="1" t="2" n="-1" l="-1" p="232556819" title="1200(480*3)" rs="rnd235">
                  <span>
                    <i>1200(480*3)</i>
                  </span>
                </li>
                <li pstatus="0" type="price" zp="1200" rel="1200" d="2017-04-23 19:30" s="1" t="2" n="-1" l="-1" p="232556820" title="1200(680*2)" rs="rnd236">
                  <span>
                    <i>1200(680*2)</i>
                  </span>
                </li>
                <li pstatus="0" type="price" zp="1280" rel="1280" d="2017-04-23 19:30" s="1" t="1" n="-1" l="-1" p="232556817" title="1280" rs="rnd237">
                  <span>
                    <i>1280</i>
                  </span>
                </li>
                <li pstatus="0" type="price" zp="1700" rel="1700" d="2017-04-23 19:30" s="1" t="2" n="-1" l="-1" p="232556821" title="1700(680*3)" rs="rnd238">
                  <span>
                    <i>1700(680*3)</i>
                  </span>
                </li>
              </ul>
            </dd>
          </dl>
          <dl class="prices-show clearfloat">
            <dt>
              <p>2017-04-26 周三 19:30
                <br></p></dt>
            <dd>
              <ul class="date-ul price price-l price-ck">
                <li class="over" style="background-position:100% -205px;" pstatus="0" type="price" zp="180" rel="180" d="2017-04-26 19:30" s="2" t="1" n="-1" l="-1" p="232556756" title="180" rs="rnd239">
                  <span>
                    <i>180</i>
                  </span>
                </li>
                <li class="over" style="background-position:100% -205px;" pstatus="0" type="price" zp="180" rel="180" d="2017-04-26 19:30" s="2" t="2" n="-1" l="-1" p="232556767" title="180(180*2)" rs="rnd240">
                  <span>
                    <i>180(180*2)</i>
                  </span>
                </li>
                <li class="over" style="background-position:100% -205px;" pstatus="0" type="price" zp="270" rel="270" d="2017-04-26 19:30" s="2" t="2" n="-1" l="-1" p="232556773" title="270(180*3)" rs="rnd241">
                  <span>
                    <i>270(180*3)</i>
                  </span>
                </li>
                <li pstatus="0" type="price" zp="280" rel="280" d="2017-04-26 19:30" s="1" t="1" n="-1" l="-1" p="232556757" title="280" rs="rnd242">
                  <span>
                    <i>280</i>
                  </span>
                </li>
                <li pstatus="0" type="price" zp="280" rel="280" d="2017-04-26 19:30" s="1" t="2" n="-1" l="-1" p="232556766" title="280(280*2)" rs="rnd243">
                  <span>
                    <i>280(280*2)</i>
                  </span>
                </li>
                <li pstatus="0" type="price" zp="420" rel="420" d="2017-04-26 19:30" s="1" t="2" n="-1" l="-1" p="232556772" title="420(280*3)" rs="rnd244">
                  <span>
                    <i>420(280*3)</i>
                  </span>
                </li>
                <li pstatus="0" type="price" zp="480" rel="480" d="2017-04-26 19:30" s="1" t="1" n="-1" l="-1" p="232556758" title="480" rs="rnd245">
                  <span>
                    <i>480</i>
                  </span>
                </li>
                <li pstatus="0" type="price" zp="480" rel="480" d="2017-04-26 19:30" s="1" t="2" n="-1" l="-1" p="232556765" title="480(480*2)" rs="rnd246">
                  <span>
                    <i>480(480*2)</i>
                  </span>
                </li>
                <li pstatus="0" type="price" zp="680" rel="680" d="2017-04-26 19:30" s="1" t="1" n="-1" l="-1" p="232556759" title="680" rs="rnd247">
                  <span>
                    <i>680</i>
                  </span>
                </li>
                <li pstatus="0" type="price" zp="680" rel="680" d="2017-04-26 19:30" s="1" t="2" n="-1" l="-1" p="232556764" title="680(680*2)" rs="rnd248">
                  <span>
                    <i>680(680*2)</i>
                  </span>
                </li>
                <li pstatus="0" type="price" zp="720" rel="720" d="2017-04-26 19:30" s="1" t="2" n="-1" l="-1" p="232556771" title="720(480*3)" rs="rnd249">
                  <span>
                    <i>720(480*3)</i>
                  </span>
                </li>
                <li pstatus="0" type="price" zp="1020" rel="1020" d="2017-04-26 19:30" s="1" t="2" n="-1" l="-1" p="232556770" title="1020(680*3)" rs="rnd250">
                  <span>
                    <i>1020(680*3)</i>
                  </span>
                </li>
                <li pstatus="0" type="price" zp="1080" rel="1080" d="2017-04-26 19:30" s="1" t="1" n="-1" l="-1" p="232556760" title="1080" rs="rnd251">
                  <span>
                    <i>1080</i>
                  </span>
                </li>
                <li pstatus="0" type="price" zp="1080" rel="1080" d="2017-04-26 19:30" s="1" t="2" n="-1" l="-1" p="232556763" title="1080(1080*2)" rs="rnd252">
                  <span>
                    <i>1080(1080*2)</i>
                  </span>
                </li>
                <li pstatus="0" type="price" zp="1280" rel="1280" d="2017-04-26 19:30" s="1" t="1" n="-1" l="-1" p="232556761" title="1280" rs="rnd253">
                  <span>
                    <i>1280</i>
                  </span>
                </li>
                <li pstatus="0" type="price" zp="1280" rel="1280" d="2017-04-26 19:30" s="1" t="2" n="-1" l="-1" p="232556762" title="1280(1280*2)" rs="rnd254">
                  <span>
                    <i>1280(1280*2)</i>
                  </span>
                </li>
                <li pstatus="0" type="price" zp="1620" rel="1620" d="2017-04-26 19:30" s="1" t="2" n="-1" l="-1" p="232556769" title="1620(1080*3)" rs="rnd255">
                  <span>
                    <i>1620(1080*3)</i>
                  </span>
                </li>
                <li pstatus="0" type="price" zp="1920" rel="1920" d="2017-04-26 19:30" s="1" t="2" n="-1" l="-1" p="232556768" title="1920(1280*3)" rs="rnd256">
                  <span>
                    <i>1920(1280*3)</i>
                  </span>
                </li>
              </ul>
            </dd>
          </dl>
          <dl class="prices-show clearfloat">
            <dt>
              <p>2017-04-27 周四 19:30
                <br></p></dt>
            <dd>
              <ul class="date-ul price price-l price-ck">
                <li class="over" style="background-position:100% -205px;" pstatus="0" type="price" zp="180" rel="180" d="2017-04-27 19:30" s="2" t="1" n="-1" l="-1" p="232556774" title="180" rs="rnd257">
                  <span>
                    <i>180</i>
                  </span>
                </li>
                <li class="over" style="background-position:100% -205px;" pstatus="0" type="price" zp="180" rel="180" d="2017-04-27 19:30" s="2" t="2" n="-1" l="-1" p="232556785" title="180(180*2)" rs="rnd258">
                  <span>
                    <i>180(180*2)</i>
                  </span>
                </li>
                <li class="over" style="background-position:100% -205px;" pstatus="0" type="price" zp="270" rel="270" d="2017-04-27 19:30" s="2" t="2" n="-1" l="-1" p="232556791" title="270(180*3)" rs="rnd259">
                  <span>
                    <i>270(180*3)</i>
                  </span>
                </li>
                <li pstatus="0" type="price" zp="280" rel="280" d="2017-04-27 19:30" s="1" t="1" n="-1" l="-1" p="232556775" title="280" rs="rnd260">
                  <span>
                    <i>280</i>
                  </span>
                </li>
                <li pstatus="0" type="price" zp="280" rel="280" d="2017-04-27 19:30" s="1" t="2" n="-1" l="-1" p="232556784" title="280(280*2)" rs="rnd261">
                  <span>
                    <i>280(280*2)</i>
                  </span>
                </li>
                <li pstatus="0" type="price" zp="420" rel="420" d="2017-04-27 19:30" s="1" t="2" n="-1" l="-1" p="232556790" title="420(280*3)" rs="rnd262">
                  <span>
                    <i>420(280*3)</i>
                  </span>
                </li>
                <li pstatus="0" type="price" zp="480" rel="480" d="2017-04-27 19:30" s="1" t="1" n="-1" l="-1" p="232556776" title="480" rs="rnd263">
                  <span>
                    <i>480</i>
                  </span>
                </li>
                <li pstatus="0" type="price" zp="480" rel="480" d="2017-04-27 19:30" s="1" t="2" n="-1" l="-1" p="232556783" title="480(480*2)" rs="rnd264">
                  <span>
                    <i>480(480*2)</i>
                  </span>
                </li>
                <li pstatus="0" type="price" zp="680" rel="680" d="2017-04-27 19:30" s="1" t="1" n="-1" l="-1" p="232556777" title="680" rs="rnd265">
                  <span>
                    <i>680</i>
                  </span>
                </li>
                <li pstatus="0" type="price" zp="680" rel="680" d="2017-04-27 19:30" s="1" t="2" n="-1" l="-1" p="232556782" title="680(680*2)" rs="rnd266">
                  <span>
                    <i>680(680*2)</i>
                  </span>
                </li>
                <li pstatus="0" type="price" zp="720" rel="720" d="2017-04-27 19:30" s="1" t="2" n="-1" l="-1" p="232556789" title="720(480*3)" rs="rnd267">
                  <span>
                    <i>720(480*3)</i>
                  </span>
                </li>
                <li pstatus="0" type="price" zp="1020" rel="1020" d="2017-04-27 19:30" s="1" t="2" n="-1" l="-1" p="232556788" title="1020(680*3)" rs="rnd268">
                  <span>
                    <i>1020(680*3)</i>
                  </span>
                </li>
                <li pstatus="0" type="price" zp="1080" rel="1080" d="2017-04-27 19:30" s="1" t="1" n="-1" l="-1" p="232556778" title="1080" rs="rnd269">
                  <span>
                    <i>1080</i>
                  </span>
                </li>
                <li pstatus="0" type="price" zp="1080" rel="1080" d="2017-04-27 19:30" s="1" t="2" n="-1" l="-1" p="232556781" title="1080(1080*2)" rs="rnd270">
                  <span>
                    <i>1080(1080*2)</i>
                  </span>
                </li>
                <li pstatus="0" type="price" zp="1280" rel="1280" d="2017-04-27 19:30" s="1" t="1" n="-1" l="-1" p="232556779" title="1280" rs="rnd271">
                  <span>
                    <i>1280</i>
                  </span>
                </li>
                <li pstatus="0" type="price" zp="1280" rel="1280" d="2017-04-27 19:30" s="1" t="2" n="-1" l="-1" p="232556780" title="1280(1280*2)" rs="rnd272">
                  <span>
                    <i>1280(1280*2)</i>
                  </span>
                </li>
                <li pstatus="0" type="price" zp="1620" rel="1620" d="2017-04-27 19:30" s="1" t="2" n="-1" l="-1" p="232556787" title="1620(1080*3)" rs="rnd273">
                  <span>
                    <i>1620(1080*3)</i>
                  </span>
                </li>
                <li pstatus="0" type="price" zp="1920" rel="1920" d="2017-04-27 19:30" s="1" t="2" n="-1" l="-1" p="232556786" title="1920(1280*3)" rs="rnd274">
                  <span>
                    <i>1920(1280*3)</i>
                  </span>
                </li>
              </ul>
            </dd>
          </dl>
          <dl class="prices-show clearfloat">
            <dt>
              <p>2017-04-29 周六 14:30
                <br></p></dt>
            <dd>
              <ul class="date-ul price price-l price-ck">
                <li class="over" style="background-position:100% -205px;" pstatus="0" type="price" zp="180" rel="180" d="2017-04-29 14:30" s="2" t="1" n="-1" l="-1" p="232556842" title="180" rs="rnd275">
                  <span>
                    <i>180</i>
                  </span>
                </li>
                <li pstatus="0" type="price" zp="280" rel="280" d="2017-04-29 14:30" s="1" t="1" n="-1" l="-1" p="232556843" title="280" rs="rnd276">
                  <span>
                    <i>280</i>
                  </span>
                </li>
                <li pstatus="0" type="price" zp="480" rel="480" d="2017-04-29 14:30" s="1" t="1" n="-1" l="-1" p="232556844" title="480" rs="rnd277">
                  <span>
                    <i>480</i>
                  </span>
                </li>
                <li pstatus="0" type="price" zp="680" rel="680" d="2017-04-29 14:30" s="1" t="1" n="-1" l="-1" p="232556845" title="680" rs="rnd278">
                  <span>
                    <i>680</i>
                  </span>
                </li>
                <li pstatus="0" type="price" zp="800" rel="800" d="2017-04-29 14:30" s="1" t="2" n="-1" l="-1" p="232556848" title="800(480*2)" rs="rnd279">
                  <span>
                    <i>800(480*2)</i>
                  </span>
                </li>
                <li pstatus="0" type="price" zp="1080" rel="1080" d="2017-04-29 14:30" s="1" t="1" n="-1" l="-1" p="232556846" title="1080" rs="rnd280">
                  <span>
                    <i>1080</i>
                  </span>
                </li>
                <li pstatus="0" type="price" zp="1200" rel="1200" d="2017-04-29 14:30" s="1" t="2" n="-1" l="-1" p="232556849" title="1200(480*3)" rs="rnd281">
                  <span>
                    <i>1200(480*3)</i>
                  </span>
                </li>
                <li pstatus="0" type="price" zp="1200" rel="1200" d="2017-04-29 14:30" s="1" t="2" n="-1" l="-1" p="232556850" title="1200(680*2)" rs="rnd282">
                  <span>
                    <i>1200(680*2)</i>
                  </span>
                </li>
                <li pstatus="0" type="price" zp="1280" rel="1280" d="2017-04-29 14:30" s="1" t="1" n="-1" l="-1" p="232556847" title="1280" rs="rnd283">
                  <span>
                    <i>1280</i>
                  </span>
                </li>
                <li pstatus="0" type="price" zp="1700" rel="1700" d="2017-04-29 14:30" s="1" t="2" n="-1" l="-1" p="232556851" title="1700(680*3)" rs="rnd284">
                  <span>
                    <i>1700(680*3)</i>
                  </span>
                </li>
              </ul>
            </dd>
          </dl>
          <dl class="prices-show clearfloat">
            <dt>
              <p>2017-04-29 周六 19:30
                <br></p></dt>
            <dd>
              <ul class="date-ul price price-l price-ck">
                <li class="over" style="background-position:100% -205px;" pstatus="0" type="price" zp="180" rel="180" d="2017-04-29 19:30" s="2" t="1" n="-1" l="-1" p="232556832" title="180" rs="rnd285">
                  <span>
                    <i>180</i>
                  </span>
                </li>
                <li pstatus="0" type="price" zp="280" rel="280" d="2017-04-29 19:30" s="1" t="1" n="-1" l="-1" p="232556833" title="280" rs="rnd286">
                  <span>
                    <i>280</i>
                  </span>
                </li>
                <li pstatus="0" type="price" zp="480" rel="480" d="2017-04-29 19:30" s="1" t="1" n="-1" l="-1" p="232556834" title="480" rs="rnd287">
                  <span>
                    <i>480</i>
                  </span>
                </li>
                <li pstatus="0" type="price" zp="680" rel="680" d="2017-04-29 19:30" s="1" t="1" n="-1" l="-1" p="232556835" title="680" rs="rnd288">
                  <span>
                    <i>680</i>
                  </span>
                </li>
                <li pstatus="0" type="price" zp="800" rel="800" d="2017-04-29 19:30" s="1" t="2" n="-1" l="-1" p="232556838" title="800(480*2)" rs="rnd289">
                  <span>
                    <i>800(480*2)</i>
                  </span>
                </li>
                <li pstatus="0" type="price" zp="1080" rel="1080" d="2017-04-29 19:30" s="1" t="1" n="-1" l="-1" p="232556836" title="1080" rs="rnd290">
                  <span>
                    <i>1080</i>
                  </span>
                </li>
                <li pstatus="0" type="price" zp="1200" rel="1200" d="2017-04-29 19:30" s="1" t="2" n="-1" l="-1" p="232556839" title="1200(480*3)" rs="rnd291">
                  <span>
                    <i>1200(480*3)</i>
                  </span>
                </li>
                <li pstatus="0" type="price" zp="1200" rel="1200" d="2017-04-29 19:30" s="1" t="2" n="-1" l="-1" p="232556840" title="1200(680*2)" rs="rnd292">
                  <span>
                    <i>1200(680*2)</i>
                  </span>
                </li>
                <li pstatus="0" type="price" zp="1280" rel="1280" d="2017-04-29 19:30" s="1" t="1" n="-1" l="-1" p="232556837" title="1280" rs="rnd293">
                  <span>
                    <i>1280</i>
                  </span>
                </li>
                <li pstatus="0" type="price" zp="1700" rel="1700" d="2017-04-29 19:30" s="1" t="2" n="-1" l="-1" p="232556841" title="1700(680*3)" rs="rnd294">
                  <span>
                    <i>1700(680*3)</i>
                  </span>
                </li>
              </ul>
            </dd>
          </dl>
          <dl class="prices-show clearfloat">
            <dt>
              <p>2017-04-30 周日 14:30
                <br></p></dt>
            <dd>
              <ul class="date-ul price price-l price-ck">
                <li class="over" style="background-position:100% -205px;" pstatus="0" type="price" zp="180" rel="180" d="2017-04-30 14:30" s="2" t="1" n="-1" l="-1" p="232556862" title="180" rs="rnd295">
                  <span>
                    <i>180</i>
                  </span>
                </li>
                <li pstatus="0" type="price" zp="280" rel="280" d="2017-04-30 14:30" s="1" t="1" n="-1" l="-1" p="232556863" title="280" rs="rnd296">
                  <span>
                    <i>280</i>
                  </span>
                </li>
                <li pstatus="0" type="price" zp="480" rel="480" d="2017-04-30 14:30" s="1" t="1" n="-1" l="-1" p="232556864" title="480" rs="rnd297">
                  <span>
                    <i>480</i>
                  </span>
                </li>
                <li pstatus="0" type="price" zp="680" rel="680" d="2017-04-30 14:30" s="1" t="1" n="-1" l="-1" p="232556865" title="680" rs="rnd298">
                  <span>
                    <i>680</i>
                  </span>
                </li>
                <li pstatus="0" type="price" zp="800" rel="800" d="2017-04-30 14:30" s="1" t="2" n="-1" l="-1" p="232556868" title="800(480*2)" rs="rnd299">
                  <span>
                    <i>800(480*2)</i>
                  </span>
                </li>
                <li pstatus="0" type="price" zp="1080" rel="1080" d="2017-04-30 14:30" s="1" t="1" n="-1" l="-1" p="232556866" title="1080" rs="rnd300">
                  <span>
                    <i>1080</i>
                  </span>
                </li>
                <li pstatus="0" type="price" zp="1200" rel="1200" d="2017-04-30 14:30" s="1" t="2" n="-1" l="-1" p="232556869" title="1200(480*3)" rs="rnd301">
                  <span>
                    <i>1200(480*3)</i>
                  </span>
                </li>
                <li pstatus="0" type="price" zp="1200" rel="1200" d="2017-04-30 14:30" s="1" t="2" n="-1" l="-1" p="232556870" title="1200(680*2)" rs="rnd302">
                  <span>
                    <i>1200(680*2)</i>
                  </span>
                </li>
                <li pstatus="0" type="price" zp="1280" rel="1280" d="2017-04-30 14:30" s="1" t="1" n="-1" l="-1" p="232556867" title="1280" rs="rnd303">
                  <span>
                    <i>1280</i>
                  </span>
                </li>
                <li pstatus="0" type="price" zp="1700" rel="1700" d="2017-04-30 14:30" s="1" t="2" n="-1" l="-1" p="232556871" title="1700(680*3)" rs="rnd304">
                  <span>
                    <i>1700(680*3)</i>
                  </span>
                </li>
              </ul>
            </dd>
          </dl>
          <dl class="prices-show clearfloat">
            <dt>
              <p>2017-04-30 周日 19:30
                <br></p></dt>
            <dd>
              <ul class="date-ul price price-l price-ck">
                <li class="over" style="background-position:100% -205px;" pstatus="0" type="price" zp="180" rel="180" d="2017-04-30 19:30" s="2" t="1" n="-1" l="-1" p="232556852" title="180" rs="rnd305">
                  <span>
                    <i>180</i>
                  </span>
                </li>
                <li pstatus="0" type="price" zp="280" rel="280" d="2017-04-30 19:30" s="1" t="1" n="-1" l="-1" p="232556853" title="280" rs="rnd306">
                  <span>
                    <i>280</i>
                  </span>
                </li>
                <li pstatus="0" type="price" zp="480" rel="480" d="2017-04-30 19:30" s="1" t="1" n="-1" l="-1" p="232556854" title="480" rs="rnd307">
                  <span>
                    <i>480</i>
                  </span>
                </li>
                <li pstatus="0" type="price" zp="680" rel="680" d="2017-04-30 19:30" s="1" t="1" n="-1" l="-1" p="232556855" title="680" rs="rnd308">
                  <span>
                    <i>680</i>
                  </span>
                </li>
                <li pstatus="0" type="price" zp="800" rel="800" d="2017-04-30 19:30" s="1" t="2" n="-1" l="-1" p="232556858" title="800(480*2)" rs="rnd309">
                  <span>
                    <i>800(480*2)</i>
                  </span>
                </li>
                <li pstatus="0" type="price" zp="1080" rel="1080" d="2017-04-30 19:30" s="1" t="1" n="-1" l="-1" p="232556856" title="1080" rs="rnd310">
                  <span>
                    <i>1080</i>
                  </span>
                </li>
                <li pstatus="0" type="price" zp="1200" rel="1200" d="2017-04-30 19:30" s="1" t="2" n="-1" l="-1" p="232556859" title="1200(480*3)" rs="rnd311">
                  <span>
                    <i>1200(480*3)</i>
                  </span>
                </li>
                <li pstatus="0" type="price" zp="1200" rel="1200" d="2017-04-30 19:30" s="1" t="2" n="-1" l="-1" p="232556860" title="1200(680*2)" rs="rnd312">
                  <span>
                    <i>1200(680*2)</i>
                  </span>
                </li>
                <li pstatus="0" type="price" zp="1280" rel="1280" d="2017-04-30 19:30" s="1" t="1" n="-1" l="-1" p="232556857" title="1280" rs="rnd313">
                  <span>
                    <i>1280</i>
                  </span>
                </li>
                <li pstatus="0" type="price" zp="1700" rel="1700" d="2017-04-30 19:30" s="1" t="2" n="-1" l="-1" p="232556861" title="1700(680*3)" rs="rnd314">
                  <span>
                    <i>1700(680*3)</i>
                  </span>
                </li>
              </ul>
            </dd>
          </dl>
          <dl class="prices-show clearfloat" style="border: none;">
            <dt>
              <p>2017-05-01 周一 19:30
                <br></p></dt>
            <dd>
              <ul class="date-ul price price-l price-ck">
                <li class="over" style="background-position:100% -205px;" pstatus="0" type="price" zp="180" rel="180" d="2017-05-01 19:30" s="2" t="1" n="-1" l="-1" p="232556872" title="180" rs="rnd315">
                  <span>
                    <i>180</i>
                  </span>
                </li>
                <li pstatus="0" type="price" zp="280" rel="280" d="2017-05-01 19:30" s="1" t="1" n="-1" l="-1" p="232556873" title="280" rs="rnd316">
                  <span>
                    <i>280</i>
                  </span>
                </li>
                <li pstatus="0" type="price" zp="480" rel="480" d="2017-05-01 19:30" s="1" t="1" n="-1" l="-1" p="232556874" title="480" rs="rnd317">
                  <span>
                    <i>480</i>
                  </span>
                </li>
                <li pstatus="0" type="price" zp="680" rel="680" d="2017-05-01 19:30" s="1" t="1" n="-1" l="-1" p="232556875" title="680" rs="rnd318">
                  <span>
                    <i>680</i>
                  </span>
                </li>
                <li pstatus="0" type="price" zp="800" rel="800" d="2017-05-01 19:30" s="1" t="2" n="-1" l="-1" p="232556878" title="800(480*2)" rs="rnd319">
                  <span>
                    <i>800(480*2)</i>
                  </span>
                </li>
                <li pstatus="0" type="price" zp="1080" rel="1080" d="2017-05-01 19:30" s="1" t="1" n="-1" l="-1" p="232556876" title="1080" rs="rnd320">
                  <span>
                    <i>1080</i>
                  </span>
                </li>
                <li pstatus="0" type="price" zp="1200" rel="1200" d="2017-05-01 19:30" s="1" t="2" n="-1" l="-1" p="232556879" title="1200(480*3)" rs="rnd321">
                  <span>
                    <i>1200(480*3)</i>
                  </span>
                </li>
                <li pstatus="0" type="price" zp="1200" rel="1200" d="2017-05-01 19:30" s="1" t="2" n="-1" l="-1" p="232556880" title="1200(680*2)" rs="rnd322">
                  <span>
                    <i>1200(680*2)</i>
                  </span>
                </li>
                <li pstatus="0" type="price" zp="1280" rel="1280" d="2017-05-01 19:30" s="1" t="1" n="-1" l="-1" p="232556877" title="1280" rs="rnd323">
                  <span>
                    <i>1280</i>
                  </span>
                </li>
                <li pstatus="0" type="price" zp="1700" rel="1700" d="2017-05-01 19:30" s="1" t="2" n="-1" l="-1" p="232556881" title="1700(680*3)" rs="rnd324">
                  <span>
                    <i>1700(680*3)</i>
                  </span>
                </li>
              </ul>
            </dd>
          </dl>
        </div>
      </div>
      <div class="price-all-sel clearfloat">
        <p>您已选择：</p>
        <div class="relt-list all-relt"></div>
        <div class="buy-btns price-all-btn">
          <a rel="nofollow" class="btn-seat-buy" title="选座购买"></a>
          <a href="javascript:void(0);" pid="231399594" class="btn-now-buy" title="立即购买"></a>
        </div>
      </div>
    </div>
    <script type="text/javascript" src="./js/priceSelectTwo.js"></script>
    <div class="shows g-20">
      <div class="g-15 ml0">
        <div class="lives bor" id="Jlives" style="position: relative; z-index: 4800; padding-top: 0px;">
          <div class="lives-hd" id="JlivesHd" style="position: static;">
            <ul class="nav-comn clearfloat fl ui-tab" id="liveNav">
              <li>
                <a href="javascript:void(0);" class="on" rel="nofollow">演出信息</a></li>
              <li>
                <a href="javascript:void(0);" rel="nofollow">购票说明</a></li>
              <li id="JnavAsk">
                <a href="javascript:void(0);" rel="nofollow">在线问答</a></li>
            </ul>
            <p id="float-button" class="fr pr15" style="display:none;">
              <a href="/ticket-231399594.html#pbigimg" rel="nofollow" class="f-btn-now-buy fr mgl10" pid="231399594" title="立即购买" onclick="floatButton();"></a>
              <a rel="nofollow" class="f-btn-seat-buy zxxz fr mgl10" title="选座购买" href="javascript:getSeatFunction();"></a>
            </p>
          </div>
          <div id="liveNav_1">
            <div class="lives-info" style="display: block;">
              <h3>基本信息</h3>
              <div class="lives-info-pa clearfloat">
                <p>
                  <label>演出时间：</label><?php echo $row["show_time"];?></p>
                <p>
                  <label>演出场馆：</label><?php echo $row["show_venue"];?></p>
                <p>
                  <label>演出时长：</label><?php echo $row["show_length"];?></p>
                <p>
                  <label>入场时间：</label><?php echo $row["enter_time"];?></p>
                <div class="xgzc"></div>
                <label class="fl">注意事项：</label>
                <span class="fl">a)演出详情仅供参考，具体信息以现场为准；
                  <br>b)儿童一律持票入场；
                  <br>c)演出票品具有唯一性、时效性等特殊属性，如非活动变更、活动取消、票品错误的原因外，不提供退换票品服务，购票时请务必仔细核对并审慎下单。</span></div>
              <h3 class="mt20">演出详情</h3>
			  
			  
			  
              <div class="lhg26">
			  <?php echo $row["show_infocontent"];?>
              </div>
				
				
				
            </div>
            <div class="lives-info" style="display: none;" id="livesShow">
              <iframe id="addrContent" width="678px" class="share_self" frameborder="0" scrolling="no" src="./html_files/buyDescribe-231399594.html" style="height: 1536px;"></iframe>
            </div>
            <div class="lives-info" id="JlivesCont" style="display:none;">
              <div id="JonlineAll">
                <div class="online-hd">
                  <span>
                    <a href="/moreask/231399594-0.html" id="right_faq">FAQ问答</a></span>
                  <span class="gary5a">|</span>
                  <span>
                    <a href="/moreask/231399594-1.html" id="right_all" class="red">全部提问</a></span>
                  <span class="gary5a">|</span>
                  <span>
                    <a href="/moreask/231399594-2.html">我的提问</a></span>
                </div>
                <div id="online_ask_right">
				<ul><li><div class="faq-box-divbox"><span></span><div class="faq-box-div"><div class="faq-box-div-top"></div><div class="faq-box-div-con">请问订购成功后我的座位如何安排 ？如何查看座位信息？</div><div class="faq-box-div-bot"></div></div></div><div class="faq-box-divbox1"><span></span><div class="faq-box-div1">选座订单按照订单位置进行出票，不能选座的商品按照订单支付顺序依次出票。</div></div></li><li><div class="faq-box-divbox"><span></span><div class="faq-box-div"><div class="faq-box-div-top"></div><div class="faq-box-div-con">请问购票中的华泰保险如果后期不想观看演出了，如何退票退款呢？</div><div class="faq-box-div-bot"></div></div></div><div class="faq-box-divbox1"><span></span><div class="faq-box-div1">请参考网页相关介绍，网址为：http://www.228.com.cn/help/pswy.html或致电华泰保险全国24小时客服电话400-609-5509进行咨询。</div></div></li><li><div class="faq-box-divbox"><span></span><div class="faq-box-div"><div class="faq-box-div-top"></div><div class="faq-box-div-con">请问买票后不想观看了，是否可以退票呢？</div><div class="faq-box-div-bot"></div></div></div><div class="faq-box-divbox1"><span></span><div class="faq-box-div1">由于演出票品具有唯一性、时效性等特殊属性，如非活动变更、活动取消、票品错误的原因外，不提供退换票品服务，感谢您的支持。</div></div></li><li><div class="faq-box-divbox"><span></span><div class="faq-box-div"><div class="faq-box-div-top"></div><div class="faq-box-div-con">请问订单支付成功后几天可以配送到？</div><div class="faq-box-div-bot"></div></div></div><div class="faq-box-divbox1"><span></span><div class="faq-box-div1">票品发货后，同城1-3天送达，异地2-7天送达，如遇到天气原因影响，送达时间会有所延迟，具体送达时间以快递为准。</div></div></li><li><div class="faq-box-divbox"><span></span><div class="faq-box-div"><div class="faq-box-div-top"></div><div class="faq-box-div-con">请问我购买的票是不是挨在一起？</div><div class="faq-box-div-bot"></div></div></div><div class="faq-box-divbox1"><span></span><div class="faq-box-div1">一笔订单同等价位默认都是连座出票的，后期有问题会及时联系您（如果该演出有套票区域，可能会出现同价位的套票和单价票不在同一区域，导致无法连座的情况，请您知晓）。
</div></div></li><li><div class="faq-box-divbox"><span></span><div class="faq-box-div"><div class="faq-box-div-top"></div><div class="faq-box-div-con">请问上门自取订单订购成功后什么时间可以上门自取呢？可以代取吗？</div><div class="faq-box-div-bot"></div></div></div><div class="faq-box-divbox1"><span></span><div class="faq-box-div1">订购成功后订单显示“已发货”并收到取票码短信后您可携带收货本人的有效证件、订单号码或收货手机号、取票码到对应分公司前台进行取票（请您注意分公司营业时间）
可以代取，代取需提供订单号或收货手机号、收货人身份证原件、代取人身份证原件及取票码。</div></div></li><li><div class="faq-box-divbox"><span></span><div class="faq-box-div"><div class="faq-box-div-top"></div><div class="faq-box-div-con">请问缺货登记之后，后期一定会有票吗？</div><div class="faq-box-div-bot"></div></div></div><div class="faq-box-divbox1"><span></span><div class="faq-box-div1">登记之后如果有票联系您，无票不打扰哦！</div></div></li></ul>
                 <!-- <div class="online-ask">
                    <dl class="ask-dl pb10 clearfloat">
                      <dd class="ask-dla">Cici Li 提问：</dd>
                      <dd class="ask-dlb">2017-03-07 12:14:32 &nbsp;&nbsp;&nbsp;&nbsp;来自 永乐官网</dd></dl>
                    <p>请问1米以内的宝宝需要买票么</p>
                    <div class="online-reply">
                      <p>
                      </p>
                      <p style="margin-top:5px;margin-right:0;margin-bottom:5px;margin-left: 0">
                        <span style="font-size: 12px">亲！需要的哦，演出场馆规定：</span>
                        <span style="font-size: 12px">儿童一律持票入场</span>
                        <span style="font-size: 12px">。感谢支持，</span>
                        <a href="/zhuanti/app2014/index.html">
                          <span style="font-size:12px;color:red">下载永乐APP</span></a>
                        <span style="font-size: 12px">尽享多彩生活！</span></p>
                      <p>
                        <br></p>
                      <p>
                      </p>
                      <p class="red pt5 tr">永乐客服 回答于： 2017-03-07 17:00:16</p>
                      <s class="mi lt"></s>
                      <s class="mi rt"></s>
                      <s class="mi lb"></s>
                      <s class="mi rb"></s>
                      <s class="dot"></s>
                    </div>
                  </div>
                  <div class="online-ask">
                    <dl class="ask-dl pb10 clearfloat">
                      <dd class="ask-dla">wap150****5801 提问：</dd>
                      <dd class="ask-dlb">2017-02-28 16:11:15 &nbsp;&nbsp;&nbsp;&nbsp;来自 WAP站</dd></dl>
                    <p>请问，套票都包含什么内容</p>
                    <div class="online-reply">
                      <p>
                      </p>
                      <p style="margin-top:5px;margin-right:0;margin-bottom:5px;margin-left: 0">亲！套票有2人套票和3人套票。感谢支持，
                        <a href="/zhuanti/app2014/index.html">
                          <span style=";color:red">下载永乐APP</span></a>尽享多彩生活！b</p>
                      <p>
                        <br></p>
                      <p>
                      </p>
                      <p class="red pt5 tr">永乐客服 回答于： 2017-03-01 13:47:56</p>
                      <s class="mi lt"></s>
                      <s class="mi rt"></s>
                      <s class="mi lb"></s>
                      <s class="mi rb"></s>
                      <s class="dot"></s>
                    </div>
                  </div>
                  <div class="online-ask">
                    <dl class="ask-dl pb10 clearfloat">
                      <dd class="ask-dla">沛田_qja 提问：</dd>
                      <dd class="ask-dlb">2017-02-27 17:36:32 &nbsp;&nbsp;&nbsp;&nbsp;来自 WAP站</dd></dl>
                    <p>演出大概多长时间</p>
                    <div class="online-reply">
                      <p>
                      </p>
                      <p style="margin-top:5px;margin-right:0;margin-bottom:5px;margin-left: 0">亲！时长90分钟左右，以现场为准哦。感谢支持，
                        <a href="/zhuanti/app2014/index.html">
                          <span style=";color:red">下载永乐APP</span></a>尽享多彩生活！</p>
                      <p>
                        <br></p>
                      <p>
                      </p>
                      <p class="red pt5 tr">永乐客服 回答于： 2017-03-01 13:48:57</p>
                      <s class="mi lt"></s>
                      <s class="mi rt"></s>
                      <s class="mi lb"></s>
                      <s class="mi rb"></s>
                      <s class="dot"></s>
                    </div>
                  </div>
				  -->
                </div>
                <span id="look_all_span1"></span>
                <div class="online-sub">
                  <p class="garya5">
                    <span class="fr">我有意见或建议，
                      <a href="/common/idea.html" class="blue">跟永乐说说 &gt;&gt;</a></span>
                    <span>温情提示：为了您的个人信息安全，请勿在留言中透露联系方式！</span></p>
                  <form action="/ajax/addonlinereply.json" method="post">
                    <input type="hidden" name="productid" value="231399594">
                    <p class="mt20">
                      <label class="f4c" id="onlineName1">
                        <label class="f4c">您的称呼：</label>
                        <span class="red">pinkxxcat</span></label>
                      <span id="noLogin1" style="display: none;">请登录后提交发表
                        <a href="javascript:void(0);" onclick="poplogin();" class="blue ml10" rel="nofollow">登录</a>|
                        <a href="/customer/reg.html" class="blue" rel="nofollow">注册</a></span>
                    </p>
                    <div class="mt20 clearfloat myreplycontent">
                      <label class="fl f4c">您的问题：</label>
                      <textarea class="fl" id="replycontent" onfocus="replycontentshow(this);" name="info" placeholder="请在此留下您的问题，最多只能输入100个字" style="width:543px;height:100px;margin-left:3px;"></textarea>
                    </div>
                    <div class="mt20 clearfloat">
                      <span class="red yl-error-msg" style="float: right;"></span>
                    </div>
                    <p class="clearfloat">
                      <a href="javascript:void(0)" class="btn-sub fr" id="btn-sub" rel="nofollow"></a>
                      <a href="javascript:$(&#39;.italk&#39;).click()" class="btn-offer fr"></a>
                    </p>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="tour online bor mt10 pb20" id="JonlineAsk">
          <h2>在线问答</h2>
          <div id="JonlineAll">
            <div class="online-hd">
              <span>
                <a href="/moreask/231399594-0.html" id="down_faq">FAQ问答</a></span>
              <span class="gary5a">|</span>
              <span>
                <a href="/moreask/231399594-1.html" id="down_all" class="red">全部提问</a></span>
              <span class="gary5a">|</span>
              <span>
                <a href="/moreask/231399594-2.html">我的提问</a></span>
            </div>
            <div id="online_ask_down">
              <div class="online-ask">
                <dl class="ask-dl pb10 clearfloat">
                  <dd class="ask-dla">Cici Li 提问：</dd>
                  <dd class="ask-dlb">2017-03-07 12:14:32 &nbsp;&nbsp;&nbsp;&nbsp;来自 永乐官网</dd></dl>
                <p>请问1米以内的宝宝需要买票么</p>
                <div class="online-reply">
                  <p>
                  </p>
                  <p style="margin-top:5px;margin-right:0;margin-bottom:5px;margin-left: 0">
                    <span style="font-size: 12px">亲！需要的哦，演出场馆规定：</span>
                    <span style="font-size: 12px">儿童一律持票入场</span>
                    <span style="font-size: 12px">。感谢支持，</span>
                    <a href="/zhuanti/app2014/index.html">
                      <span style="font-size:12px;color:red">下载永乐APP</span></a>
                    <span style="font-size: 12px">尽享多彩生活！</span></p>
                  <p>
                    <br></p>
                  <p>
                  </p>
                  <p class="red pt5 tr">永乐客服 回答于： 2017-03-07 17:00:16</p>
                  <s class="mi lt"></s>
                  <s class="mi rt"></s>
                  <s class="mi lb"></s>
                  <s class="mi rb"></s>
                  <s class="dot"></s>
                </div>
              </div>
              <div class="online-ask">
                <dl class="ask-dl pb10 clearfloat">
                  <dd class="ask-dla">wap150****5801 提问：</dd>
                  <dd class="ask-dlb">2017-02-28 16:11:15 &nbsp;&nbsp;&nbsp;&nbsp;来自 WAP站</dd></dl>
                <p>请问，套票都包含什么内容</p>
                <div class="online-reply">
                  <p>
                  </p>
                  <p style="margin-top:5px;margin-right:0;margin-bottom:5px;margin-left: 0">亲！套票有2人套票和3人套票。感谢支持，
                    <a href="/zhuanti/app2014/index.html">
                      <span style=";color:red">下载永乐APP</span></a>尽享多彩生活！b</p>
                  <p>
                    <br></p>
                  <p>
                  </p>
                  <p class="red pt5 tr">永乐客服 回答于： 2017-03-01 13:47:56</p>
                  <s class="mi lt"></s>
                  <s class="mi rt"></s>
                  <s class="mi lb"></s>
                  <s class="mi rb"></s>
                  <s class="dot"></s>
                </div>
              </div>
              <div class="online-ask">
                <dl class="ask-dl pb10 clearfloat">
                  <dd class="ask-dla">沛田_qja 提问：</dd>
                  <dd class="ask-dlb">2017-02-27 17:36:32 &nbsp;&nbsp;&nbsp;&nbsp;来自 WAP站</dd></dl>
                <p>演出大概多长时间</p>
                <div class="online-reply">
                  <p>
                  </p>
                  <p style="margin-top:5px;margin-right:0;margin-bottom:5px;margin-left: 0">亲！时长90分钟左右，以现场为准哦。感谢支持，
                    <a href="/zhuanti/app2014/index.html">
                      <span style=";color:red">下载永乐APP</span></a>尽享多彩生活！</p>
                  <p>
                    <br></p>
                  <p>
                  </p>
                  <p class="red pt5 tr">永乐客服 回答于： 2017-03-01 13:48:57</p>
                  <s class="mi lt"></s>
                  <s class="mi rt"></s>
                  <s class="mi lb"></s>
                  <s class="mi rb"></s>
                  <s class="dot"></s>
                </div>
              </div>
            </div>
            <span id="look_all_span2"></span>
            <div class="online-sub">
              <p class="garya5">
                <span class="fr">我有意见或建议，
                  <a href="/common/idea.html" class="blue">跟永乐说说 &gt;&gt;</a></span>
                <span>温情提示：为了您的个人信息安全，请勿在留言中透露联系方式！</span></p>
              <form action="/ajax/addonlinereply.json" method="post">
                <input type="hidden" name="productid" value="231399594">
                <p class="mt20">
                  <label class="f4c" id="onlineName2">
                    <label class="f4c">您的称呼：</label>
                    <span class="red">pinkxxcat</span></label>
                  <span id="noLogin2" style="display: none;">请登录后提交发表
                    <a href="javascript:void(0);" onclick="poplogin();" class="blue ml10" rel="nofollow">登录</a>|
                    <a href="/customer/reg.html" class="blue" rel="nofollow">注册</a></span>
                </p>
                <div class="mt20 clearfloat myreplycontent">
                  <label class="fl f4c">您的问题：</label>
                  <textarea class="fl" id="replycontent" onfocus="replycontentshow(this);" name="info" placeholder="请在此留下您的问题，最多只能输入100个字" style="width:543px;height:100px;margin-left:3px;"></textarea>
                </div>
                <div class="mt20 clearfloat">
                  <span class="red yl-error-msg" style="float: right;"></span>
                </div>
                <p class="clearfloat">
                  <a href="javascript:void(0)" class="btn-sub fr" id="btn-sub" rel="nofollow"></a>
                  <a href="javascript:$(&#39;.italk&#39;).click()" class="btn-offer fr"></a>
                </p>
              </form>
            </div>
          </div>
        </div>
      </div>
	  <!--
      <div class="shows-r g-5 mr0">
        <div class="p-r-a-q">
          <a href="/zhuanti/app2014/?spm=003" target="_blank">
            <img src="./img/1467350796603_p1s4_m1.jpg" width="250" height="142" alt="永乐票务APP下载"></a>
        </div>
        <div class="m-mod" id="m-mod" style="">
          <h2 class="m-mod-bor">最近浏览</h2>
          <ul class="m-mod-ul">
            <li>
              <a href="/productOrFilm-231399594.html" title="史诗巨制 《Cavalia·舞马》2.0升级版2017中国巡演—北京站">史诗巨制 《Cavalia·舞马》2.0升级版2017中国巡演—北京站</a></li>
            <li>
              <a href="/productOrFilm-216612390.html" title="非常林奕华作品—舞台剧《红楼梦》北京站">非常林奕华作品—舞台剧《红楼梦》北京站</a></li>
            <li>
              <a href="/productOrFilm-223061507.html" title="Twins LOL 世界巡回演唱会—福州站">Twins LOL 世界巡回演唱会—福州站</a></li>
            <li>
              <a href="/productOrFilm-198242676.html" title="献给成年人的童话：中国首部奇幻装置舞台剧《爸爸的时光机》">献给成年人的童话：中国首部奇幻装置舞台剧《爸爸的时光机》</a></li>
            <li>
              <a href="/productOrFilm-232954505.html" title="2017「如果」田馥甄巡回演唱会PLUS 重庆站">2017「如果」田馥甄巡回演唱会PLUS 重庆站</a></li>
            <li>
              <a href="/productOrFilm-222401532.html" title="2017林忆莲PRANAVA造乐者世界巡回演唱会 昆明站">2017林忆莲PRANAVA造乐者世界巡回演唱会 昆明站</a></li>
          </ul>
        </div>
        <div class="m-mod">
          <h2 class="m-mod-bor">您可能喜欢的演出</h2>
          <div class="m-show-bd buying clearfloat">
            <dl>
              <dt>
                <a href="/ticket-231399594.html" title="史诗巨制 《Cavalia·舞马》2.0升级版2017中国巡演—北京站" alt="史诗巨制 《Cavalia·舞马》2.0升级版2017中国巡演—北京站" target="_blank">
                  <img class="lazy" src="./img/1488359902815_p1q0-1.jpg" title="史诗巨制 《Cavalia·舞马》2.0升级版2017中国巡演—北京站" alt="史诗巨制 《Cavalia·舞马》2.0升级版2017中国巡演—北京站" width="90" heigth="120"></a>
              </dt>
              <dd class="bd-dd1">
                <a href="/ticket-231399594.html" class="c2" title="史诗巨制 《Cavalia·舞马》2.0升级版2017中国巡演—北京站">史诗巨制 《Cavalia·舞马》2.0升级版201...</a></dd>
              <dd class="bd-dd2">2017.04.19 - 05.01</dd>
              <dd class="bd-dd3">
                <a href="/venue-481506.html" title="朝阳公园" target="_blank">朝阳公园</a></dd>
              <dd class="bd-dd4">
                <a href="/ticket-231399594.html" target="_blank" rel="nofollow">立即购买 &gt;&gt;</a></dd>
            </dl>
            <dl>
              <dt>
                <a href="/ticket-226640313.html" title="" 天桥•华人春天艺术节 "=" " 昆曲《春江花月夜》"="" alt="" target="_blank">
                  <img class="lazy" src="./img/1486347223647_y0o2-1.jpg" title="" 天桥•华人春天艺术节 "=" " 昆曲《春江花月夜》"="" alt="" width="90" heigth="120"></a>
              </dt>
              <dd class="bd-dd1">
                <a href="/ticket-226640313.html" class="c2" title="" 天桥•华人春天艺术节 "=" " 昆曲《春江花月夜》"="">"天桥•华人春天艺术节" 昆曲《春江花月夜》</a></dd>
              <dd class="bd-dd2">2017.03.17 - 03.18</dd>
              <dd class="bd-dd3">
                <a href="/venue-62285012.html" title="天桥艺术中心" target="_blank">天桥艺术中心</a></dd>
              <dd class="bd-dd4">
                <a href="/ticket-226640313.html" target="_blank" rel="nofollow">立即购买 &gt;&gt;</a></dd>
            </dl>
            <dl>
              <dt>
                <a href="/ticket-232056928.html" title="嘻哈包袱铺安贞相声专场演出（3月场）" alt="嘻哈包袱铺安贞相声专场演出（3月场）" target="_blank">
                  <img class="lazy" src="./img/1487736543679_x8s9-1.jpg" title="嘻哈包袱铺安贞相声专场演出（3月场）" alt="嘻哈包袱铺安贞相声专场演出（3月场）" width="90" heigth="120"></a>
              </dt>
              <dd class="bd-dd1">
                <a href="/ticket-232056928.html" class="c2" title="嘻哈包袱铺安贞相声专场演出（3月场）">嘻哈包袱铺安贞相声专场演出（3月场）</a></dd>
              <dd class="bd-dd2">2017.03.01 - 03.31</dd>
              <dd class="bd-dd3">
                <a href="/venue-481906.html" title="嘻哈包袱铺安贞剧场" target="_blank">嘻哈包袱铺安贞剧场</a></dd>
              <dd class="bd-dd4">
                <a href="/ticket-232056928.html" target="_blank" rel="nofollow">立即购买 &gt;&gt;</a></dd>
            </dl>
            <dl>
              <dt>
                <a href="/ticket-232109224.html" title="嘻哈包袱铺交道口相声专场演出（3月场）" alt="嘻哈包袱铺交道口相声专场演出（3月场）" target="_blank">
                  <img class="lazy" src="./img/1487737057711_f1i2-1.jpg" title="嘻哈包袱铺交道口相声专场演出（3月场）" alt="嘻哈包袱铺交道口相声专场演出（3月场）" width="90" heigth="120"></a>
              </dt>
              <dd class="bd-dd1">
                <a href="/ticket-232109224.html" class="c2" title="嘻哈包袱铺交道口相声专场演出（3月场）">嘻哈包袱铺交道口相声专场演出（3月场）</a></dd>
              <dd class="bd-dd2">2017.03.01 - 03.31</dd>
              <dd class="bd-dd3">
                <a href="/venue-57640701.html" title="嘻哈包袱铺交道口店" target="_blank">嘻哈包袱铺交道口店</a></dd>
              <dd class="bd-dd4">
                <a href="/ticket-232109224.html" target="_blank" rel="nofollow">立即购买 &gt;&gt;</a></dd>
            </dl>
            <dl class="last">
              <dt>
                <a href="/ticket-227566378.html" title="德云红酒之夜德云社成立二十周年郭德纲暨德云社相声专场系列演出闭幕式" alt="德云红酒之夜德云社成立二十周年郭德纲暨德云社相声专场系列演出闭幕式" target="_blank">
                  <img class="lazy" src="./img/1486455981492_a4q1-1.jpg" title="德云红酒之夜德云社成立二十周年郭德纲暨德云社相声专场系列演出闭幕式" alt="德云红酒之夜德云社成立二十周年郭德纲暨德云社相声专场系列演出闭幕式"></a>
              </dt>
              <dd class="bd-dd1">
                <a href="/ticket-227566378.html" class="c2" title="德云红酒之夜德云社成立二十周年郭德纲暨德云社相声专场系列演出闭幕式">德云红酒之夜德云社成立二十周年郭德纲暨...</a></dd>
              <dd class="bd-dd2">2017.03.11</dd>
              <dd class="bd-dd3">
                <a href="/venue-143512.html" title="北京展览馆剧场" target="_blank">北京展览馆剧场</a></dd>
              <dd class="bd-dd4">
                <a href="/ticket-227566378.html" target="_blank" rel="nofollow">立即购买 &gt;&gt;</a></dd>
            </dl>
          </div>
        </div>
        <div class="m-mod">
          <h2 class="m-mod-bor">永乐微博</h2>
          <iframe width="228" height="520" class="share_self" frameborder="0" scrolling="no" src="./html_files/index.html"></iframe>
        </div>
        <div class="m-mod" id="newshow">
          <h2 class="m-mod-bor">最新北京戏曲综艺</h2>
          <ul class="m-mod-ul">
            <li>
              <a href="/ticket-235263700.html">全国舞台艺术优秀剧目展演 北京市剧院运营服务平台演出剧目 淮剧《小镇》</a></li>
            <li>
              <a href="/ticket-235256204.html">全国舞台艺术优秀剧目展演 北京市剧院运营服务平台演出剧目湘剧《月亮耙耙》</a></li>
            <li>
              <a href="/ticket-235247477.html">长安大戏院5月6日演出 京剧《春闺梦》</a></li>
            <li>
              <a href="/ticket-235243236.html">长安大戏院5月7日演出 京剧《金山寺•断桥•祭塔》</a></li>
            <li>
              <a href="/ticket-235231185.html">长安大戏院5月17日演出 《万紫千红 春色满园•"张派"名家名段演唱会》</a></li>
            <li>
              <a href="/ticket-235220731.html">长安大戏院5月16日演出 《万紫千红 春色满园•"张派"名家名段演唱会》</a></li>
            <li>
              <a href="/ticket-233258987.html">京剧《龙凤呈祥》</a></li>
            <li>
              <a href="/ticket-232828539.html">北方昆曲剧院建院60周年系列演出—昆曲《红楼梦》（6日上本•7日下本）</a></li>
            <li>
              <a href="/ticket-232795476.html">“昆曲荣耀”北方昆曲剧院60华诞系列演出—昆曲《牡丹亭》</a></li>
            <li>
              <a href="/ticket-232792680.html">“昆曲荣耀”北方昆曲剧院60华诞系列演出—昆曲《孔子之入卫铭》</a></li>
          </ul>
        </div>
      </div>
	  -->
    </div>
    <script type="text/javascript" src="./js/shadowbox.js"></script>
    <script type="text/javascript" src="./js/productTwo.js"></script>
    <script type="text/javascript" src="./js/jquery.lazyload.mini.js"></script>
    <form id="qhdj_form">
      <div class="boxer notick" id="JqueBoxer">
        <input id="qhdj_productplayid" name="productplayid" type="hidden">
        <div class="tit boxHeader clearfloat">
          <span>缺货登记</span>
          <a href="javascript:void(0);" class="close box-closes"></a>
        </div>
        <div class="notick-bd">
          <ul class="notick-bd-ul">
            <li>* 此票价暂时缺货，您可以进行缺货登记。</li>
            <li>* 我们将记录你的基本信息，待到货后我们将第一时间通知您。</li>
            <li>* 若始终缺货，永乐票务将不做另行通知。</li></ul>
          <div class="notick-name clearfloat">
            <label class="fl f4c">登记商品：</label>
            <input type="hidden" name="productplayid" id="productplayid">
            <input type="hidden" name="productcount" id="productcount">
            <div class="notick-name-tit">史诗巨制 《Cavalia·舞马》2.0升级版2017中国巡演—北京站</div></div>
          <div class="notick-name clearfloat">
            <label class="fl f4c">已登记场次：</label>
            <div class="fl" id="qhdj_already">
          
            </div>
          </div>
          <div class="notick-name clearfloat">
            <label class="fl f4c">新登记场次：</label>
            <ul class="fl notick-cq-item">
              <li id="qhdj_productplaytime" class="item-w1"></li>
              <li id="qhdj_productprice" class="item-w2"></li>
              <li id="qhdj_productnum" class="item-w2"></li>
            </ul>
          </div>
          <div class="notick-name clearfloat">
            <label class="fl f4c">数量：</label>
            <div class="fl relt">
              <a href="javascript:void(0);" id="qhdj_subduction" class="relt-prev"></a>
              <input type="text" id="qhdj_num" class="yl-order" maxlength="2" value="1">
              <a href="javascript:void(0);" id="qhdj_add" class="relt-next"></a>
              <span class="garya5 ml10">(最多可登记30张)</span></div>
          </div>
          <p class="tel mt15">
            <label class="fl f4c">手机号码：</label>
            <input type="text" id="qhdj_phone" name="phone" value="">
            <span id="expPhoneTip" class="garya5 ml10">请正确输入号码方便我们与您联系</span></p>
          <div class="mt15 clearfloat">
            <label class="fl f4c">附言：</label>
            <textarea id="qhdj_text" name="info" onfocus="if(this.value==&#39;附言信息请不要超过100个字&#39;){this.value=&#39;&#39;;}this.style.color=&#39;#333&#39;;" onblur="if(this.value==&#39;&#39;) {this.value=&#39;附言信息请不要超过100个字&#39;;this.style.color=&#39;#cccccc&#39;;}" class="fl notick-fy">附言信息请不要超过100个字</textarea></div>
          <div id="qhdj_MsgTip" style="margin: 18px;float: right;"></div>
          <p class="mt15">
            <label class="fl f4c">&nbsp;</label>
            <a href="javascript:void(0);" id="qhdj_submitTwo" class="btn-sub notick-btn box-closes"></a>
          </p>
        </div>
      </div>
    </form>
    <div class="boxer tobuy" id="JtoByCar">
      <div class="tit boxHeader clearfloat">
        <span>购物车</span>
        <a href="javascript:void(0);" class="close box-closes" onclick="window.location.reload();"></a>
      </div>
      <div class="notick-bd" style="height:auto;">
        <div class="tobuy-bd clearfloat">
          <s>
          </s>
          <span>票品已成功加入购物车！</span></div>
        <p class="tobuy-bd-p">购物车共有
          <em id="box-shopcar-count"></em>件商品，合计
          <em id="box-shopcar-pirce"></em>元</p>
        <div class="tobuy-ft">
          <a href="javascript:void(0);" onclick="window.location.reload();" class="btn-tobuy-goto"></a>
          <a href="/shopCart/shopCart.html" class="btn-tobuy-pay ml20"></a>
        </div>
      </div>
    </div>
    <div id="ghost" class="tgm-box" style="z-index:6001;display:none;">
      <div class="tgm-box-l">
        <input id="ghostCode" type="text" value="" onkeyup="this.value=this.value.toUpperCase()"></div>
      <div class="tgm-box-r">
        <a id="ghostClick" href="javascript:void(0);"></a>
      </div>
      <div class="cb"></div>
      <div id="ghostMsg" class="tgm-wz"></div>
    </div>
    <div id="golf" class="tgm-box-golf" style="z-index:6001;display:none;">
      <div class="tgm-box-l-golf">
        <input id="golfCode" type="text" value="" onkeyup="this.value=this.value.toUpperCase()"></div>
      <div class="tgm-box-r-golf">
        <a id="golfClick" href="javascript:void(0);"></a>
      </div>
      <div class="cb"></div>
      <div id="golfMsg" class="tgm-wz-golf"></div>
    </div>
    <a href="javascript:;" class="g-20 hot-recomd pt20">
      <span class="fl redfont">热门推荐</span>
      <i class="hot-recomd-i"></i>
    </a>
    <div class="hot-city" style="display:none;">
      <dl class="link_hot">
        <h2>
          <dt>近期热门演出推荐</dt></h2>
        <dd style="width: 19.99%;float: left;">
          <a href="/hot/mofahuainvwu/" style="text-align: left">魔法坏女巫音乐剧</a></dd>
        <dd style="width: 19.99%;float: left;">
          <a href="/hot/fayuansi/" style="text-align: left">话剧北京法源寺</a></dd>
        <dd style="width: 19.99%;float: left;">
          <a href="/category/sz-yanchanghui/" style="text-align: left">深圳演唱会</a></dd>
        <dd style="width: 19.99%;float: left;">
          <a href="/hot/changandaxiyuan/" style="text-align: left">长安大戏院</a></dd>
        <dd style="width: 19.99%;float: left;">
          <a href="/hot/sanzhixiaozhu/" style="text-align: left">三只小猪</a></dd>
        <dd style="width: 19.99%;float: left;">
          <a href="/hot/kaleilasi/" style="text-align: left">卡雷拉斯音乐会</a></dd>
        <dd style="width: 19.99%;float: left;">
          <a href="/category/gz-huajuwutaiju-huaju/" style="text-align: left">广州话剧演出信息</a></dd>
        <dd style="width: 19.99%;float: left;">
          <a href="/category/nj-yanchanghui/" style="text-align: left">南京演唱会</a></dd>
        <dd style="width: 19.99%;float: left;">
          <a href="/hot/bayicba/" style="text-align: left">八一男篮比赛门票</a></dd>
        <dd style="width: 19.99%;float: left;">
          <a href="/hot/chunzhisheng/" style="text-align: left">维也纳春之声交响乐团演出</a></dd>
        <dd style="width: 19.99%;float: left;">
          <a href="/hot/cba/" style="text-align: left">CBA比赛</a></dd>
        <dd style="width: 19.99%;float: left;">
          <a href="/hot/era/" style="text-align: left">ERA时空之旅</a></dd>
        <dd style="width: 19.99%;float: left;">
          <a href="/hot/fenghuajuedai/" style="text-align: left">风华绝代舞台剧</a></dd>
        <dd style="width: 19.99%;float: left;">
          <a href="/hot/wudao/" style="text-align: left">舞蹈演出</a></dd>
        <dd style="width: 19.99%;float: left;">
          <a href="/hot/tianehubalei/" style="text-align: left">天鹅湖芭蕾舞</a></dd>
      </dl>
    </div>
    <script type="text/javascript" src="./js/newindex.js"></script>
    <script type="text/javascript" src="./js/jquery.placeholder.js"></script>
    <script type="text/javascript" src="./js/lyc.js"></script>
    <script type="text/javascript">var _ozprm = "cid99=47802465";</script>
    <div class="cb"></div>
	<?php
	include_once("include/footer.php");
	?>	

    <!--[if IE 6]>
      <script type="text/javascript" src="http://static.228.com.cn/resources/js/png.js"></script>
      <script type="text/javascript">DD_belatedPNG.fix('.booking,.advance-booking,.no1,#sort h3 a,#sort h3,.quick-menu li.myyl a,.quick-menu li.guide a,.copyright a,.change-city,#main-nav li,*html #rigpic a');</script>
    <![endif]-->
    <script src="./js/tag.js" type="text/javascript" async=""></script>
    <script type="text/javascript">var _ozuid = "";</script>
    <script type="text/javascript" src="./js/o_code.js"></script>
    <script type="text/javascript" charset="utf-8" src="./js/10043952.js"></script>
    <iframe id="veUtilsIframe" width="0" height="0" style="visibility: hidden; display: none; border: none;"></iframe>
    <iframe id="1489026148531" tabindex="-1" src="./html_files/iframeStorage.html" style="display: none;"></iframe>
    <div id="doyoo_panel"></div>
    <div id="doyoo_monitor"></div>
    <div id="talk99_message"></div>
    <div id="doyoo_share" style="display: block;">
      <iframe src="./html_files/saved_resource.html" id="shareWrapper"></iframe>
      <iframe src="./html_files/s.html"></iframe>
    </div>
    <link rel="stylesheet" type="text/css" href="./css/oms.css">
    <script type="text/javascript" src="./js/oms.js" charset="utf-8"></script>
    <div id="sb-container">
      <div id="sb-overlay"></div>
      <div id="sb-wrapper">
        <div id="sb-title">
          <div id="sb-title-inner"></div>
        </div>
        <div id="sb-wrapper-inner">
          <div id="sb-body">
            <div id="sb-body-inner"></div>
            <div id="sb-loading">
              <div id="sb-loading-inner">
                <span>loading</span></div>
            </div>
          </div>
        </div>
        <div id="sb-info">
          <div id="sb-info-inner">
            <div id="sb-counter"></div>
            <div id="sb-nav">
              <a id="sb-nav-close" title="Close" onclick="Shadowbox.close()"></a>
              <a id="sb-nav-next" title="Next" onclick="Shadowbox.next()"></a>
              <a id="sb-nav-play" title="Play" onclick="Shadowbox.play()"></a>
              <a id="sb-nav-pause" title="Pause" onclick="Shadowbox.pause()"></a>
              <a id="sb-nav-previous" title="Previous" onclick="Shadowbox.previous()"></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>

</html>