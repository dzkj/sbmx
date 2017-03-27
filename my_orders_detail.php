<?php
	session_start();
	include_once("include/session.inc.php");
	include_once("include/conn.inc.php");
	if(empty($_GET["id"])){
		header("location:my_orders.php");
	}
	$sql="select * from orders where id=$_GET[id]";
	$result=mysqli_query($link,$sql);
	while($show=mysqli_fetch_array($result)){
		$row=$show;
	}
?>
<!DOCTYPE html>
<html xmlns="">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>普通订单详情</title>
    <link type="text/css" href="./css/reset.css" rel="stylesheet">
    <link type="text/css" href="./css/uc.css" rel="stylesheet">
    <script charset="utf-8" src="./js/v.js"></script>
    <script type="text/javascript" id="veConnect" async="" src="./js/capture-apps-4.18.6.js"></script>
    <script async="" src="./js/tg.js"></script>
    <script async="" src="./js/analytics.js"></script>
    <script type="text/javascript" defer="" async="" src="./js/y.js"></script>
    <script type="text/javascript" async="" src="./js/adw.js"></script>
    <script type="text/javascript" defer="" async="" src="./js/jiuzhilan_4783.js"></script>
    <script src="./js/hm.js"></script>
    <script type="text/javascript" src="./js/jquery-1.7.2.min.js"></script>
    <script type="text/javascript" src="./js/publicNew.js"></script>
    <script type="text/javascript" src="./js/Validform.min.js"></script>
    <script type="text/javascript" src="./js/jQuery.minBox.js"></script>
    <script type="text/javascript" src="./js/mustache.min.js"></script>
    <script type="text/javascript" src="./js/artTemplate.all.min.js"></script>
  </head>

  <body>
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
<?php include_once("include/header.php")?>
    <div class="ac_results" style="top: 192px; left: 794.5px; display: none;">
      <ul></ul>
    </div>
    <div class="cb"></div>
    <p class="crumbs">
      <a href="index.php">首页</a>＞
      <a href="my_orders.php">我的订单</a>＞
      <a href="my_orders_detail.php">订单详情</a></p>
    <div class="uc_w">
      <div class="uc_nav">
           <div class="uc_nav">
            <h2>交易管理</h2>
            <ul>
                <li class="center-order">
                    <a href="my_orders.php">我的订单</a></li>
            </ul>
            <h2>账户管理</h2>
            <ul>
                <li class="center-personAlinFormationList">
                    <a href="myinfo.php" class="current">个人信息</a></li>
				<li class=""><a href="password.php" >修改密码</a></li>	
                <li class="center-address">
                    <a href="myaddress.php">收货地址</a></li>
                <li class="center-myquestion">
                    <a href="myask.php">我的问答</a></li>
            </ul>
        </div>
      </div>
      <div class="uc_main">
        <div class="status mb20 font-taho">
          <p class="uc_name fl">
            <span class="red bold fft"><?php echo $_SESSION['user']['nick_name']?></span>欢迎回来~~</p>
          <!--<p class="uc_id_time fr">
            <span class="mr30">ID：60264493</span>最近登录：2017年03月09日 10:15:31</p>--></div>
        <div class="main mt20">
          <div class="main-t clear">
            <h2>订单号：<?php echo $row["order_id"];?></h2>
            <p class="fr f13 bold">[ 订单状态：
              <span class="red" id="fstaus"><?php echo $row["order_status"];?></span>]</p></div>
         <!-- <ul class="eticket_process mt20">
            <li class="node_on">
              <p>等待付款</p>
            </li>
            <li class="bar">
              <p>
              </p>
            </li>
            <li class="node">
              <p>款项到达</p>
            </li>
            <li class="bar">
              <p>
              </p>
            </li>
            <li class="node">
              <p>项目预售，等待开票</p>
            </li>
          </ul>-->
         <!--  <div class="pop-tip">
            <i>
            </i>
            <p class="cd">
              <span>订单未完成支付，为了保证您能及时观看演出，请尽快完成付款。</span>
              <a class="a_href_pay_yn" href="http://www.228.com.cn/payNew/toPay.html?orderId=17030444" onclick="return _payButClick(this,17030444);"></a>
              <span class="red fft f20" id="timeleft">倒计时 00:12:42</span></p>
          </div>-->
          <h3 class="nbb">订单追踪</h3>
          <div class="pop-tip">
            <i>
            </i>
            <ul class="bbed pb10">
              <li>下单时间：
                <span class="gary4c"><?php echo $row["order_time"];?></span></li>
            </ul>
          </div>
          <h3>订单详情</h3>
          <ul class="order_infor">
            <li>收货信息：<?php echo $row["receiving_name"];?>，<?php echo $row["receiving_tel"];?>，<?php echo $row["receiving_info"];?><?php echo $row["take_info"];?>，</li>
            <li>送货时间：周一到周五</li>
           </ul>
          <div class="bted pb10 pt10 mt20">
            <span>商品类型：纸质票</span>
            <span class="ml30 mr30">付款方式：<?php echo $row["receiving_name"];?></span>
            <span>配送方式：<?php echo $row["shipping_type"];?></span></div>
          <table width="763" border="0" cellspacing="0" cellpadding="0" class="table_slider">
            <tbody>
              <tr>
                <th width="329" scope="col">商品名称</th>
                <th width="97" scope="col">单价</th>
                <th width="90" scope="col">数量</th>
                <th width="77" scope="col">小计(元)</th></tr>
		<?php
		$sql="select * from orders where order_id='$row[order_id]'";
		$result=mysqli_query($link,$sql);
			while($orders = mysqli_fetch_array($result)){
					
			?>
              <tr>
                <td>
                  <p class="p_title nbb">
                    <a href="sell_ticket.php?id=<?php echo $orders['ticket_id'];?>" target="_blank" class="c5"><?php echo $orders["goods_name"];?></a></p>
                 <!-- <p class="tl ml20">[
                    <a href="#" target="_blank"></a>]-->
                    <br></p></td>
                <td><?php echo $orders["goods_price"];?>
                  <br></td>
                <td height="42"><?php echo $orders["goods_num"];?></td>
                <td>
                  <span class="red bold"><?php echo $orders["order_subtotal"];?></span></td>
              </tr>
			  <?php
			}
			  ?>
              <tr>
                <td height="81" colspan="10">
                  <p class="tl ml15" style="line-height:2;">
                    <br>合计(含运费)：商品金额
                    <!--<span>588.00</span>元 + 运费
                    <span>13.00</span>元 + 保险
                    <span>0.00</span>元 -现金券
                    <span>0.00</span>元 =-->
                    <span class="red bold"><?php echo $row["order_amount"];?></span>元</p></td>
              </tr>
            </tbody>
          </table>
          <table width="763" border="0" cellspacing="0" cellpadding="0" class="mt20" style="*margin-bottom:20px;">
            <tbody>
              <tr>
                <td style="padding-right:0;">
                  <a href="http://www.228.com.cn/payNew/toPay.html?orderId=17030444" class="pay_now fr ml20" onclick="return _payButClick(this,17030444);"></a>
                  <input type="hidden" id="modfy_price_yn" value="Y">
                  <div class="pop-tip3 fr">
                    <i>
                    </i>
                    <p class="f18 font-yh">还需要支付：
                      <span class="red fft"><?php echo $row["order_amount"];?></span>元</p></div>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <div class="cb"></div>
   <?php include_once("include/footer.php")?>
    <!--[if IE 6]>
      <script type="text/javascript" src="http://static.228.com.cn/resources/js/png.js"></script>
      <script type="text/javascript">DD_belatedPNG.fix('.booking,.advance-booking,.no1,#sort h3 a,#sort h3,.quick-menu li.myyl a,.quick-menu li.guide a,.copyright a,.change-city,#main-nav li,*html #rigpic a');</script>
    <![endif]-->
    <script src="./js/tag.js" type="text/javascript" async=""></script>
    <script type="text/javascript">var _ozuid = "60264493";</script>
    <script type="text/javascript" src="./js/o_code.js"></script>
    <iframe id="veUtilsIframe" width="0" height="0" style="visibility: hidden; display: none; border: none;"></iframe>
    <iframe id="1489045957069" tabindex="-1" src="./html_files/iframeStorage.html" style="display: none;"></iframe>
  </body>

</html>