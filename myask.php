<?php 
	session_start();
	include_once("include/conn.inc.php");
	$ask_id=$_SESSION["user"]["id"];
	$sql="select count(*) from faqs where ask_id=$ask_id";
	$resurt=mysqli_query($link,$sql);
	$count = mysqli_fetch_array($resurt)[0];
	$page_size = 5; //每页显示条数
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
	$mysql="select * from faqs where ask_id=$ask_id order by ask_date desc limit $start,$page_size";
	$res=mysqli_query($link,$mysql);
?>
<!DOCTYPE html>
<html xmlns="">

  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>个人中心_我的问答</title>
    <link type="text/css" href="./css/reset.css" rel="stylesheet">
    <link type="text/css" href="./css/uc.css" rel="stylesheet">
    <script type="text/javascript" id="veConnect" async="" src="./js/capture-apps-4.18.6.js"></script>
    <script async="" src="./js/tg.js"></script>
    <script async="" src="./js/analytics.js"></script>
    <script charset="utf-8" src="./js/v.js"></script>
    <script type="text/javascript" defer="" async="" src="./js/y.js"></script>
    <script type="text/javascript" async="" src="./js/adw.js"></script>
    <script type="text/javascript" defer="" async="" src="./js/jiuzhilan_4783.js"></script>
    <script src="./js/hm.js"></script>
    <script type="text/javascript" src="./js/jquery-1.7.2.min.js"></script>
    <script type="text/javascript" src="./js/publicNew.js"></script>
    <script type="text/javascript" src="./js/Validform.min.js"></script>
    <script type="text/javascript" src="./js/jQuery.minBox.js"></script>
    <script type="text/javascript" src="./js/artTemplate.all.min.js"></script>
  </head>

  <body>
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
<?php include_once("include/header.php")?>
    <div class="ac_results" style="top: 92px; left: 794.5px;">
      <ul></ul>
    </div>
    <div class="cb"></div>
   
    <p class="crumbs">
      <a href="index.php">首页</a>＞
      <a href="myask.php">我的问答</a></p>
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
            <a href="myinfo.php">个人信息</a></li>
          <li class="center-address">
            <a href="myaddress.php">收货地址</a></li>
          <li class="center-myquestion">
            <a href="myask.php" class="current" >我的问答</a></li>
        </ul>
      </div>
      <script type="text/javascript">$('.center-myquestion a').addClass('current');</script>
      <div class="uc_main">
        <div class="status mb20 font-taho">
          <p class="uc_name fl">
            <span class="red bold fft"><?php echo $_SESSION['user']['nick_name']?></span>欢迎回来~~</p>
         <!-- <p class="uc_id_time fr">
            <span class="mr30">ID：60264493</span>最近登录：2017年03月09日 10:15:31</p>
			-->
			</div>
			<div class="main">
				<div class="main-t clear">
				<h2>我的问答<span>（共 <?php echo $count;?> 条）</span></h2>
				</div>
				<table width="100%" border="0" cellspacing="0" cellpadding="0" class="mt15 mb15">
				<tbody>
				<!--
				<tr>
				<td width="120" height="25">
				<select name="sort">
				<option value="0">最近提问优先</option>
				<option value="1" selected="">最近回答优先</option>
				</select>
				</td>
				<td width="504"></td>
				<td width="144"><input name="checks" type="checkbox" value="0" checked="">只看有回答的提问</td>
				</tr>-->
				</tbody></table>
				<table width="763" border="0" cellspacing="0" cellpadding="0" class="table_slider ask">
				<tbody><tr>
				<th width="149" scope="col">商品</th>
				<th width="453" scope="col">我的问答</th>
				<th width="161" scope="col">提问 / 回复时间</th>
				</tr>
				</tbody></table>
				<div class="bbed">
				<table width="100%" border="0" cellspacing="0" cellpadding="0" class="table_like">
				<tbody>
				 <?php
				while($row =mysqli_fetch_array($res)){
					$show="select * from shows where id=$row[show_id]";
					$re=mysqli_query($link,$show);
					$row_show =mysqli_fetch_array($re);
				 ?>
				 
					<tr>
					<td width="20%" rowspan="3"><div class="ask_img"><a href="sell_ticket.php?id=<?php echo $row_show["id"];?>" target="_blank"><img src="http://static.228.cn/upload/2017/01/16/AfterTreatment/1484543209356_g7y5-0.jpg" width="120" height="160"></a></div></td>
					<td colspan="2"><p class="ask_title"><a href="sell_ticket.php?id=<?php echo $row_show["id"];?>" target="_blank"><?php echo $row_show["show_title"]?></a></p></td>
					</tr>
					<tr>
					<td width="61%"><p class="garya as tl">问：<?php echo $row["ask_quest"];?></p></td>
					<td width="19%"><span class="garya"><?php echo $row["ask_date"];?></span></td>
					</tr>
					<tr>
					<td><p class="red an tl">答：</p><p><?php echo $row["ask_reply"];?></p><p></p></td>
					<td><span class="garya"><?php echo $row["ask_replydate"];?></span></td>
					</tr>
				<?php
				}
				?>
				</tbody></table>
				</div>
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
			</div>
      </div>
    </div>
    <div class="cb"></div>
  <?php include_once("include/footer.php");?>
    <!--[if IE 6]>
      <script type="text/javascript" src="http://static.228.com.cn/resources/js/png.js"></script>
      <script type="text/javascript">DD_belatedPNG.fix('.booking,.advance-booking,.no1,#sort h3 a,#sort h3,.quick-menu li.myyl a,.quick-menu li.guide a,.copyright a,.change-city,#main-nav li,*html #rigpic a');</script>
    <![endif]-->
    <script src="./js/tag.js" type="text/javascript" async=""></script>
    <script type="text/javascript">var _ozuid = "60264493";</script>
    <script type="text/javascript" src="./js/o_code.js"></script>
  </body>

</html>