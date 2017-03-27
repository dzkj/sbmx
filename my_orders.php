<?php
	session_start();
	include_once("include/session.inc.php");
	include_once("include/conn.inc.php");
	$session_id=$_SESSION['user']['id'];
	if (isset($_GET['where'])) {
		$a = $_GET['where'];
		$where = "and order_id like '%" . $_GET['where'] . "%'";
	} else {
		$where = "";
		$a = "";
	}
	if (isset($_GET['status'])) {
		$b = $_GET['status'];
		if($_GET['status']==2){
			$_GET['status']="等待付款";
		}
		if($_GET['status']==3){
			$_GET['status']="已支付";
		}
		if($_GET['status']==4){
			$_GET['status']="已取消";
		}
		if($_GET['status']==5){
			$_GET['status']="已付款";
		}
		$where = "and order_status like '%" . $_GET['status'] . "%'";
	} else {
		$where = "";
		$b = "";
	}
		//查出总条数
	$sql = "select count(*) from orders where buyer_id=$session_id ".$where."group by order_id";
	$row = mysqli_query($link,$sql);
	$count = mysqli_fetch_array($row)[0];
	$page_size = 10; //每页显示条数
	$total_page = ceil($count/$page_size); //算出总页数
	$page = 1; //当前要显示的页数
	if(isset($_GET["page"])){
	$page = $_GET["page"];
	if($page>$total_page)
	$page = $total_page;
		if($page<1){
			$page=1;
		}
	}		  
	$start = ($page-1)*$page_size;
	$sql = "select * from orders where buyer_id=$session_id ".$where."group by order_id  order by id desc limit $start,$page_size";
	$result = mysqli_query($link,$sql);
?>
<!DOCTYPE html>
<html xmlns="" class="yui3-js-enabled" id="yui_3_5_1_1_1489045937859_67"><div id="yui3-css-stamp" style="position: absolute !important; visibility: hidden !important" class=""></div><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<title>我的订单</title>
<link type="text/css" href="./css/reset.css" rel="stylesheet">
<link type="text/css" href="./css/uc.css" rel="stylesheet">
<link type="text/css" href="./css/qz-style.css" rel="stylesheet">
<script charset="utf-8" src="./js/v.js"></script><script type="text/javascript" id="veConnect" async="" src="./js/capture-apps-4.18.6.js"></script><script async="" src="./js/tg.js"></script><script async="" src="./js/analytics.js"></script><script type="text/javascript" defer="" async="" src="./js/y.js"></script><script type="text/javascript" async="" src="./js/adw.js"></script><script type="text/javascript" defer="" async="" src="./js/jiuzhilan_4783.js"></script><script src="./js/hm.js"></script><script type="text/javascript" src="./js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="./js/publicNew.js"></script>
<script type="text/javascript" src="./js/Validform.min.js"></script>
<script type="text/javascript" src="./js/jQuery.minBox.js"></script>
<script type="text/javascript" src="./js/myorder.js"></script>
<script type="text/javascript" src="./js/WdatePicker.js"></script><link href="./css/WdatePicker.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="./js/artTemplate.all.min.js"></script><style type="text/css">.bds_tools a{background:none !important;display:inline !important;padding:0px !important;color:#3399cc !important;float:none !important;}.bds_tools{float:none !important;}</style>
<link charset="utf-8" rel="stylesheet" id="yui_3_5_1_1_1489045937859_2" href="./css/trip-calendar.css"><script charset="utf-8" id="yui_3_5_1_1_1489045937859_4" src="./js/trip-calendar.js" async=""></script><script charset="utf-8" id="yui_3_5_1_1_1489045937859_5" src="./html_files/combo" async=""></script><script charset="utf-8" id="yui_3_5_1_1_1489045937859_6" src="./html_files/combo(1)" async=""></script><link href="./css/bdsstyle.css" rel="stylesheet" type="text/css"><script src="./js/logger.js"></script><script type="text/javascript" async="async" charset="utf-8" src="./js/zh_cn.js" data-requiremodule="lang"></script><script type="text/javascript" async="async" charset="utf-8" src="./js/chat.in.js" data-requiremodule="chatManage"></script><script type="text/javascript" async="async" charset="utf-8" src="./js/mqtt31.js" data-requiremodule="MQTT"></script><script type="text/javascript" async="async" charset="utf-8" src="./js/mqtt.chat.js" data-requiremodule="Connection"></script></head>
<body id="yui_3_5_1_1_1489045937859_66"><div id="nTalk_post_hiddenElement" style="left: -10px; top: -10px; visibility: hidden; display: none; width: 1px; height: 1px;"></div>
<div id="caibei"></div>


<div class="login_msg productnew-login undb" id="jump-login" style="z-index:90000000000000;">
</div>
<script type="text/javascript" src="./js/artTemplate.all.min.js"></script>
<!--[if IE 6]>
<script type="text/javascript" src="http://static.228.com.cn/resources/js/png.js"></script>
<script type="text/javascript">
  DD_belatedPNG.fix('.quick-guide li img');
</script>
<![endif]-->
<?php include_once("include/header.php");?>
<div class="cb"></div>
<p class="crumbs"><a href="index.php">首页</a>＞<a href="my_orders.php">我的订单</a></p>
<div class="uc_w">
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
<script type="text/javascript">$('.center-order a').addClass('current');</script>
<script src="js/jquery-1.9.1.min.js"></script>
<script>
$(function(){
     $("#middle").click(function() {
        var where = $("#nameORorderid").val();
            location.href = "my_orders.php?where=" + where;
        });
		$("#orderstatus	").change(function() {
        var status = $(this).val();
		if(status==1){
			location.href = "my_orders.php";
		}else{
            location.href = "my_orders.php?status=" + status;
		}
        });			
})
</script>



<div class="uc_main">
<div class="status mb20 font-taho">
<p class="uc_name fl"><span class="red bold fft" id="nichname"><?php echo $_SESSION['user']['nick_name']?></span> 欢迎回来~~</p>
<!--<p class="uc_id_time fr"><span class="mr30">ID：60264493</span>
最近登录：2017年03月09日 10:15:31</p>-->
</div>
<ul class="tab_myorder">
<li class="choose"><a href="my_orders.php">我的订单</a></li>
</ul>
<div class="main">
<form action="" method="get" id="myorderform">
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="search">
<input type="hidden" name="orderType" value="1">
<input type="hidden" name="pageNumber" value="1">
<tbody><tr>
<td width="120" height="25" class="c-2">
<select name="orderstatus" class="w1" id="orderstatus">
<option value="1" selected="">全部订单</option>
<option value="2" <?php if($b==2){echo "selected";}?>>等待付款</option>
<option value="3" <?php if($b==3){echo "selected";}?>>已支付</option>
<option value="4" <?php if($b==4){echo "selected";}?>>已取消</option>
<option value="5" <?php if($b==5){echo "selected";}?>>已付款</option>
</select>
</td>
<td width="360"><span class="w2">
</span>
</td>
<td width="222" class="c-2">
<input type="text" name="nameORorderid" id="nameORorderid" style="width:230px;color: #AFAFAF;" placeholder="请输入订单号" value="<?php echo $a;?>">
</td>
<td width="66" ><a id="middle" href="javascript:void(0);"></a></td>
</tr>
</tbody></table>
</form>
<table width="763" border="0" cellspacing="0" cellpadding="0" class="table_slider">
<tbody><tr>
<th width="100" scope="col">订单号</th>
<th width="300" scope="col">商品名称</th>
<th width="110" scope="col">金额(元)</th>
<th width="140" scope="col">订单状态</th>
<th width="180" scope="col">操作</th>
</tr>
		<?php
			while($row = mysqli_fetch_array($result)){
					
			?>
			<tr>
			<td>
			<p class="clear order_input">
			<label for="order_1" class="ml10"><a href="#" target="_blank"><?php echo $row['order_id']?></a></label>
			</p>
			</td>
			<td>
			<p class="p_title nbb"><a href="sell_ticket.php?id=<?php echo $row['ticket_id']?>" target="_blank" class="c5"><?php echo $row['goods_name']?></a></p>
			</td>
			<td>
			<p><span class="price"><?php echo $row['order_amount']?></span></p>
			<!--<p class="garya5">[ 含快递:13.00 ]</p>-->
			</td>
			<td>
			<p><?php echo $row['order_status']?></p>
			<!--<p class="paytime" nowtime="2017-03-09 15:52:13" endtime="2017-03-09 16:05:37" os="17030444" isapply=""><font style="color:red">00</font><font style="color:red">:</font><font style="color:red">13</font><font style="color:red">:</font><font style="color:red">14</font></p>-->
			<p><a href="my_orders_detail.php?id=<?php echo $row['id'];?>" target="_blank" class="c5">详情</a>
			</p>
			</td>
			<td>
			<input type="hidden" os="17030444" name="modfy_order_yn" value="Y">
			<p class="pr"><a href="" class="pay_but" title="付款" os="17030444"></a></p>
			<p><a href="javascript:void(0);" class="modifyOrder c5" oid="17030444">取消</a></p>
			</td>
			</tr>
		<?php
		}
		?>
        </tbody></table>
        <script type="text/javascript" id="bdshare_js" data="type=tools" src="./js/bds_s_v2.js"></script>
      <!---------------------------------------->
      <!--分页开始-->
	  				<div style="margin-left:280px;">
						<div class="page-first">
						<s></s>
						<span><a href="?page=<?php echo $page>1?$page-1:1;?>">上一页</a></span>
						</div>
						<div class="page-last">
					
						<span><a href="?page=<?php echo $page<$total_page?$page+1:$page;?>">下一页</span>
						<s></s>
						</div>
				</div>
      <!--分页结束-->
    </div>
  </div>
  <!--/右侧主体-->
</div>
    <div class="cb"></div>
<!--页面底部-->
<?php include_once("include/footer.php");?>
<!--/页面底部-->
<!--[if IE 6]>
<script type="text/javascript" src="http://static.228.com.cn/resources/js/png.js"></script>
<script type="text/javascript">
    DD_belatedPNG.fix('.booking,.advance-booking,.no1,#sort h3 a,#sort h3,.quick-menu li.myyl a,.quick-menu li.guide a,.copyright a,.change-city,#main-nav li,*html #rigpic a');
</script>
<![endif]--><script src="./js/tag.js" type="text/javascript" async=""></script>
<script type="text/javascript" src="./js/o_code.js"></script>

  <!-- 维护转账信息 -->
<script type="text/javascript" src="./js/yui-min.js"></script>
<script type="text/javascript" src="./js/ylSingleDate.js"></script>
<script type="text/javascript" charset="utf-8" src="./js/10043952.js"></script><div id="doyoo_panel"></div>
<div id="doyoo_monitor"></div>
<div id="talk99_message"></div>
<div id="doyoo_share"></div>
<link rel="stylesheet" type="text/css" href="./css/oms.css">
<script type="text/javascript" src="./js/oms.js" charset="utf-8"></script>
</body></html>