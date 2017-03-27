<?php
	session_start();
	include_once("include/conn.inc.php");
	if(empty($_GET["id"])){
		header("location:index.php");
	}
	$sql="select * from shows where id=$_GET[id]";
	$result=mysqli_query($link,$sql);
	while($show=mysqli_fetch_array($result)){
		$row=$show;
	}
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
	<script type="text/javascript" charset="utf-8" src="http://static.bshare.cn/b/buttonLite.js#uuid=&amp;style=3&amp;fs=4&amp;textcolor=#fff&amp;bgcolor=#F60&amp;text=分享到"></script>
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
			<ul>
				<li class="on">1</li>
				<li>2</li>
				<li>3</li>
				<li>4</li>
			</ul>
		<div id="banner_list">
		<?php
			$banner_sql="select * from banners where banner_type='pc' limit 0,4";
			$banner_result=mysqli_query($link,$banner_sql);
			while($banner_row=mysqli_fetch_array($banner_result)){
		?>
			<a href="sell_tocket.php?id=<?php echo $banner_row['banner_show_id'];?>" target="_blank"><img src="<?php echo $banner_row['banner_img'];?>"/></a>
			<?php
			}
			?>
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
      <!--<a href="javascript:void(0)" data-url="/ajax/addfavorites.json" data-id="231399594" data-count="30" class="btn-love " id="JloveBtn" title="喜欢" rel="nofollow" style="left: 610.156px; top: 18px; display: inline;">
        <s>(30)</s>
      </a>-->
	</div>
      <div class="main-l">
        <img src="<?php echo $row["show_imgs"];?>" title="<?php echo $row["show_title"];?>" alt="<?php echo $row["show_title"];?>" width="288" height="384" id="pbigimg">
        <div class="bdsharebuttonbox mt10 bdshare-button-style0-32" data-bd-bind="1489026149441">
          <span class="weibo-l"><a class="bshareDiv" href="http://www.bshare.cn/share">分享按钮</a>
		</span>
		<ul class="art-share">
			<li>
			  <a href="http://sns.qzone.qq.com/cgi-bin/qzshare/cgi_qzshare_onekey?summary=http%3A%2F%2Fcloud-tt.com%2F%3F_sc%3D1&url=http://cloud-tt.com/zwtx/article-content.php?cid=42&id=20" title="分享到微信"></a>
			</li>
			<li>
			  <a href="http://www.douban.com/recommend/?url=www.cloud-tt.com/zwtx&title=<?php echo $row['show_title']; ?>&v=1&n=1" style="background-position: -25px 0;" title="分享到豆瓣"></a>
			</li>
			<li>
			  <a href="http://service.weibo.com/share/share.php?title=<?php echo $row['show_title'];?>www.cloud-tt.com/zwtx%2F%3F_sc%3D1&url=http://www.cloud-tt.com/zwtx/?_sc=1&pic=" style="background-position: -50px 0;" title="分享到新浪微博"></a>
			</li>
			<li>
			  <a href="http://v.t.qq.com/share/share.php?title=http%3A%2F%2Fwww.cloud-tt.com/zwtx%2F%3F_sc%3D1&url=http://www.cloud-tt.com/zwtx/?_sc=1&pic=" style="background-position: -73px 0;" title="分享到腾讯微博"></a>
			</li>
			<li>
			  <a href="http://www.jiathis.com/share" style="background-position: -97px 0;" title="分享到人人网"></a>
			</li>
		</ul>
		</div>
      </div>
      <div class="main-r">
        <ul class="pro-info">
          <li>
            <label>时&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;间：</label><?php echo $row["show_begin"]."~".$row["show_end"];?></li>
          <li class="clearfix">
            <label>场&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;馆：</label>
            <a href="#" class="fl" target="_blank"><?php echo $row["show_venue"];?></a></li>
           <li class="pro-infob clearfloat">
            <label>支&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;持：</label>
           <div class="pro-own">
              <s class="s-seat"></s>
              <a rel="nofollow" href="#" title="选座" target="_blank">选座</a></div>
          </li>
          <li>
            <label>发货城市：</label><?php echo $row["shipping_city"];?></li></ul>
        <div class="favor">
          <ul>
            <li><?php echo $row["state"];?></li></ul>
        </div>
      <!--  <a href="javascript:void(0);" class="btn-price-all" id="JpriceAll"></a>-->
        <div>
          <div class="date clearfloat">
            <label>日期/场次：</label>
            <ul class="date-ul cq-heig" id="Jdate" style="height: 92px;">
			<?php 
				$seasons_sql="select * from seasons where show_id=$_GET[id] order by season_date,season_time ";
				$seasons_result=mysqli_query($link,$seasons_sql);
				while($seasons=mysqli_fetch_array($seasons_result)){
			?>
              <li type="date" class="on" event="<?php echo $seasons['id'];?>"  title="<?php echo $seasons['season_date']." ".$seasons['season_week']." ".$seasons['season_time'] ;?>" ><?php echo $seasons['season_date'];?>
                <br><?php echo $seasons['season_week'];?> <?php echo $seasons['season_time'];?></li>
				<?php
					}
				?>
             </ul>
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
				<ul class="date-ul price-ck price-l" >
				</ul>
</div>
          <p class="pl10 pt5 red">注：选择已售完票价可进行缺货登记，建议您购买现货商品。</p>
          <div class="date mt30" id="JchoosePrice" style="">
            <label class="mno">您已选择：</label>
            <div class="relt-list" id="JreltList">
             <!-- <ul class="dznew relt clearfloat">
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
              </ul>-->
            </div>
          </div>
		  
		  <?php 
		  if($row["show_stauts"]=="售票中"){
			?>
		<form method="post" action="order_action.php" id="form1">
          <div class="buy-btns">
            <a rel="nofollow" class="btn-seat-buy zxxz" title="选座购买" href="javascript:getSeatFunction();"></a>
            <input type="hidden" value="" name="data" id="isLimit">
			 <input type="hidden" value="<?php echo $_GET['id'];?>" name="id">
			 <input type="hidden" value="" name="button">
            <a href="javascript:void(0);" rel="nofollow" class="btn-now-buy" onclick="gobuy();" pid="231399594" title="立即购买"></a>
			</div>
			</form>	
		
		
		<?php
		  }else{
		?>
		<div class="buy-btns">
		</div>
		<?php
		  }
		?>
		</div>
      </div>
    </div>
    <!--<div class="boxer" id="JpriceBoxer">
      <div class="tit clearfloat">
        <span>全部演出详情</span>
        <a href="javascript:void(0);" class="close box-closes"></a>
      </div>
      <div class="price-all-sel clearfloat">
        <p>您已选择：</p>
        <div class="relt-list all-relt"></div>
        <div class="buy-btns price-all-btn">
          <a rel="nofollow" class="btn-seat-buy" title="选座购买"></a>
          <a href="javascript:void(0);"  class="btn-now-buy" title="立即购买"></a>
        </div>
      </div>
    </div>-->
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
            <!--  <li id="JnavAsk">
                <a href="javascript:void(0);" rel="nofollow">在线问答</a></li>-->
            </ul>
           <!-- <p id="float-button" class="fr pr15" style="display:none;">
              <a href="/ticket-231399594.html#pbigimg" rel="nofollow" class="f-btn-now-buy fr mgl10" pid="231399594" title="立即购买" onclick="floatButton();"></a>
              <a rel="nofollow" class="f-btn-seat-buy zxxz fr mgl10" title="选座购买" href="javascript:getSeatFunction();"></a>
            </p>-->
          </div>
          <div id="liveNav_1">
            <div class="lives-info" style="display: block;" id="show_detail">
              <h3>基本信息</h3>
              <div class="lives-info-pa clearfloat">
                <p>
                  <label>演出时间：</label><?php echo $row["show_begin"]."~".$row["show_end"];?></p>
                <p>
                  <label>演出场馆：</label><?php echo $row["show_venue"];?></p>
                <p>
                  <label>演出时长：</label><?php echo $row["show_length"];?></p>
                <p>
                  <label>入场时间：</label><?php echo $row["enter_time"];?></p>
                <div class="xgzc"></div>
                <!--<label class="fl">注意事项：</label>
                <span class="fl">a)演出详情仅供参考，具体信息以现场为准；
                  <br>b)儿童一律持票入场；
                  <br>c)演出票品具有唯一性、时效性等特殊属性，如非活动变更、活动取消、票品错误的原因外，不提供退换票品服务，购票时请务必仔细核对并审慎下单。</span>--></div>
              <h3 class="mt20">演出详情</h3>
			  
			  
			  
              <div class="lhg26">
			  <?php echo $row["show_infocontent"];?>
              </div>
				
            </div>
			<div class="lives-info" style="display:none;" id="livesShow">
			<?php
				$des_sql="select * from description limit 0,1";
				$des_result=mysqli_query($link,$des_sql);
				while($des_row=mysqli_fetch_array($des_result)){
					echo $des_row["state"];
				}
				?>
			</div>
          </div>
        </div>
		
		
       <div class="tour online bor mt10 pb20" id="JonlineAsk">
			<h2>在线问答</h2>
			<div id="JonlineAll">
		<!--	<div class="online-hd">
			<span><a href="http://www.228.com.cn/moreask/234938278-0.html" id="down_faq" class="red">FAQ问答</a></span>
			<span class="gary5a">|</span>
			<span><a href="http://www.228.com.cn/moreask/234938278-1.html" id="down_all">全部提问</a></span>
			<span class="gary5a">|</span>
			<span><a href="http://www.228.com.cn/moreask/234938278-2.html">我的提问</a></span>
			</div>-->
				<div id="online_ask_down">
				<?php
				$sql="select * from faqs limit 0,10";
				$resurt=mysqli_query($link,$sql);
				while($row=mysqli_fetch_array($resurt)){
				?>
					<div class="online-ask">
					<dl class="ask-dl pb10 clearfloat">
					<dd class="ask-dla"><?php echo $row["ask_date"];?> 提问：</dd>
					<dd class="ask-dlb"><?php echo $row["ask_name"];?>
					&nbsp;&nbsp;&nbsp;&nbsp;
					
					</dd>
					</dl>
					<p><?php echo $row["ask_quest"]?></p>
					<div class="online-reply">
					<p></p><p style="margin-top:5px;margin-right:0;margin-bottom:5px;margin-left: 0"><?php echo $row["ask_reply"];?></p><p><br></p><p></p>
					<p class="red pt5 tr">世博客服 回答于： <?php echo $row["ask_replydate"];?></p>
					<s class="mi lt"></s><s class="mi rt"></s><s class="mi lb"></s><s class="mi rb"></s><s class="dot"></s>
					</div>
					</div>
				<?php
				}
				?>
					</div>
			<span id="look_all_span2"><p class="tr clearfloat"><a href="myask_all.php" class="reply-more blue">查看全部  &gt;&gt;</a></p></span>
			<div class="online-sub">
			<p class="garya5">
			<!--<span class="fr">我有意见或建议，<a href="http://www.228.com.cn/common/idea.html" class="blue">跟永乐说说 &gt;&gt;</a></span>-->
			<span>温情提示：为了您的个人信息安全，请勿在留言中透露联系方式！ </span>
			</p>
			<form action="myask_action.php" method="post">
			<p class="mt20">
			<label class="f4c" id="onlineName2">您的称呼：</label>
			<?php 
			if(isset($_SESSION["user"])){
			?>
			<span id="noLogin2"><?php echo $_SESSION["user"]["nick_name"];?><span>
			<?php 
				}else{
			?>
			<span id="noLogin2">
			请登录后提交发表<a href="login.php" class="blue ml10" rel="nofollow">登录</a> | <a href="register.php" class="blue" rel="nofollow">注册</a>
			</span>
			<?php 	
				}
			?>
			</p>
			<div class="mt20 clearfloat myreplycontent">
			<label class="fl f4c">您的问题：</label>
			<textarea class="fl" id="replycontent" onfocus="replycontentshow(this);" name="info" placeholder="请在此留下您的问题，最多只能输入100个字" style="width:543px;height:100px;margin-left:3px;"></textarea>
			<input type="hidden" name="show_id" value="<?php echo $_GET["id"];?>"/>
			</div>
			<div class="mt20 clearfloat">
			<p style="height:30px;line-height:30px;">
			<label class="fl f4c">验证码：</label>
			<input type="text" name="vcode"/>
			<p style="margin-left:50px;"><img src="include/vcode.php" onclick="this.src='include/vcode.php?'+(new Date()).getTime();"/>
			<span style="margin-left:20px;line-height:70px;height:70px;color:red"> 看不清？点击图片刷新！</span></p>
			</p>
			<span class="red yl-error-msg" style="float: right;">
			
			</span>
			</div>
			<p class="clearfloat">
			<?php 
			if(isset($_SESSION["user"])){
			?>
			<input type="submit" name="myask" value="确认提交" class="fr" style="width:60px;height:30px;"/>
			<?php 
				}else{
			?>
			<input type="button" name="myask" value="确认提交" class="fr" style="width:60px;height:30px;"/>
			<?php 	
				}
			?>
			</p>
			</form>
			</div>
			</div>
			</div>
		
		
      </div>
    </div>
    <script type="text/javascript" src="./js/shadowbox.js"></script>
    <script type="text/javascript" src="./js/productTwo.js"></script>
    <script type="text/javascript" src="./js/jquery.lazyload.mini.js"></script>
    <script type="text/javascript" src="./js/newindex.js"></script>
    <script type="text/javascript" src="./js/jquery.placeholder.js"></script>
    <script type="text/javascript" src="./js/lyc.js"></script>
    <div class="cb"></div>
	<?php
	include_once("include/footer.php");
	?>	

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
   <script src="js/jquery-1.9.1.min.js"></script>
  <script>
 
  $(function(){
		  var price_id=$("#Jdate li:first").attr("event");
		  var season=$("#Jdate li:first").attr("title");
		  $.getJSON("include/ajax.php",{id:price_id},function(json){
				$.each(json,function(index, obj){
					if(obj.num==0||obj.num==null){
						var over="over";
					}else{
						var over="";
					}
					if(obj.state==null||obj.state==""){
						var state="";
					}else{
						var state="("+obj.state+")";
					}
					var price ="<li  id='"+obj.id+"' num='"+obj.num+"' class='"+over+"' title='"+obj.price+"'><span><i>"+obj.price+state+"</i></span></li>";
					$(".price-ck").append(price);
				});
					$(".price-ck li").click(function(){
						if($(this).attr("class")=="on"){
							if($(this).removeClass("on")){
								var price=$(this).attr("title");
								$(".clearfloat").each(function(){
									var uprice=$(this).attr("price");
									if(price==uprice){
										$(this).remove();
									}
								})
							}
						}else{
								$(this).addClass("on");
								var price=$(this).attr("title");
								var id=$(this).attr("id");
								var num=$(this).attr("num");
								var result="<ul class='dznew relt clearfloat' price="+price+">";
									result+="<li class='relt-1'>"+season+"</li>";
									result+=" <li class='relt-2'>"+price+"</li><li><dl>";
									result+="  <a href='javascript:void(0);' class='relt-prev' onclick='prev_num("+id+")' id='prev_"+id+"' pid='"+id+"'></a>";
									result+="  <input type='text' class='yl-order' maxlength='3' id='price_num_"+id+"' value='1' n='30' pid='"+id+"' onkeyup='setValuesInt();' onKeyPress='if (event.keyCode < 48 || event.keyCode > 57) event.returnValue = false;'>";
									result+="  <a href='javascript:void(0);' class='relt-next' onclick='next_num("+id+")' pid='"+id+"'></a> </dl></li><li>";
									result+="</li>";
									result+="<li> <div class='relt-msg'>最多可订购<span class='price_num'>"+num+"</span>张! <s></s> </div> </li></ul>";
									$("#JreltList").append(result);
										if($(this).attr("class")=="over on"){
											if($(this).removeClass("on")){
										var price=$(this).attr("title");
										$(".clearfloat").each(function(){
											var uprice=$(this).attr("price");
											if(price==uprice){
												$(this).remove();
											}
										})
									}
											
								}
								
							}
							$(".yl-order").keyup(function(){
									var setValues=$(this).val();
									if(setValues<1){
										$(this).val(1);
									}
								})
					})
			});
	  $("#Jdate li").click(function(){
		  	$("#JreltList").empty();
		  var season=$(this).attr("title");
		  var id=$(this).attr("event");
		  $(".price-ck").empty();
		  $.getJSON("include/ajax.php",{id:id},function(json){
				$.each(json,function(index, obj){
					if(obj.num==0||obj.num==null){
						var over="over";
					}else{
						var over="";
					}
					if(obj.state==null || obj.state==""){
						var state="";
					}else{
						var state="("+obj.state+")";
					}
					var price ="<li  id='"+obj.id+"' num='"+obj.num+"' class='"+over+"' title='"+obj.price+"'><span><i>"+obj.price+state+"</i></span></li>";
					$(".price-ck").append(price);
				});
					$(".price-ck li").click(function(){
						if($(this).attr("class")=="on"){
							if($(this).removeClass("on")){
								var price=$(this).attr("title");
								$(".clearfloat").each(function(){
									var uprice=$(this).attr("price");
									if(price==uprice){
										$(this).remove();
									}
								})
							}
						}else{
								$(this).addClass("on");
								var price=$(this).attr("title");
								var id=$(this).attr("id");
								var num=$(this).attr("num");
								var result="<ul class='dznew relt clearfloat' price="+price+">";
									result+="<li class='relt-1'>"+season+"</li>";
									result+=" <li class='relt-2'>"+price+"</li><li><dl>";
									result+="  <a href='javascript:void(0);' class='relt-prev' onclick='prev_num("+id+")' id='prev_"+id+"' pid='"+id+"'></a>";
									result+="  <input type='text' class='yl-order' maxlength='3' id='price_num_"+id+"' value='1' n='30' pid='"+id+"' onkeyup='setValuesInt();' onKeyPress='if (event.keyCode < 48 || event.keyCode > 57) event.returnValue = false;'>";
									result+="  <a href='javascript:void(0);' class='relt-next' onclick='next_num("+id+")' pid='"+id+"'></a> </dl></li><li>";
									result+="</li>";
									result+="<li> <div class='relt-msg'>最多可订购<span class='price_num'>"+num+"</span>张! <s></s> </div> </li></ul>";
									$("#JreltList").append(result);
										if($(this).attr("class")=="over on"){
											if($(this).removeClass("on")){
										var price=$(this).attr("title");
										$(".clearfloat").each(function(){
											var uprice=$(this).attr("price");
											if(price==uprice){
												$(this).remove();
											}
										})
									}
											
								}
							}

							$(".yl-order").keyup(function(){
								var setValues=$(this).val();
								if(setValues<1){
									$(this).val(1);
								}
							})
					})
			});
		})
		 $(".nav-comn li a").click(function(){
			 $(".nav-comn li a").removeClass("on");
			 $(this).addClass("on");
			switch($(this).text()){
				case "演出信息":
					$("#livesShow").css("display","none");
					$("#show_detail").css("display","block");
					break;
				case "购票说明":
					$("#livesShow").css("display","block");
					$("#show_detail").css("display","none");
					break;
			}
		 })

  })
  
  function prev_num(pid){
	  var a = $("#price_num_"+pid).val();
	  if(a-1 < 1){
		  $("#price_num_"+pid).val(1);
	  }else{
		$("#price_num_"+pid).val(a-1);
	  }
  }
  
  
  function next_num(pid){
	  var a = $("#price_num_"+pid).val();
	  var prev=$(this).parent().find("input").val();
		$.get("include/num.php",{id:pid},function(data){
			var dataNum=Number(data);
			if(a>=dataNum){
				$("#price_num_"+pid).val(dataNum);
			}else{
				$("#price_num_"+pid).val(++a);
			}
	  
		})
  }
  
 function gobuy(){
            var data = new Array();
            $("#JreltList ul").each(function(s){
                data[s] = $.trim($(this).find(".relt-1").text()) +"|"+ $.trim($(this).find(".relt-2").text())  +"|"+ $.trim($(this).find("input").val())+"|"+$.trim($(this).find(".relt-prev").attr("pid"));
            });

            var datas = JSON.stringify(data);
			var price_id=$(".relt-next").attr("pid");
            if(price_id ==undefined){
				 alert("请选择您要购买的场次和价格!");
            }else{
                 $("#isLimit").val(datas);
                $("#form1").submit();
            }
        } 



  </script>

</html>









