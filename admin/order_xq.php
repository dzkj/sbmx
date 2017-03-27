<?php
session_start();
include("mysql_connect.inc");
header("Content-Type: text/html;charset=utf-8");

if(empty($_SESSION['admin'])){
	echo "<script>alert('请登录!');</script>";
	echo "<script>location.href='login.html'</script>";
}
if(isset($_GET['did'])){
	$did=$_GET['did'];
}else{
	echo "<script>history.back();</script>";
}
$orders_sql="select * from orders where order_id=$did  limit 0,1";
$orders_result=mysql_query($orders_sql);
$orders=mysql_fetch_array($orders_result);
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<title>后台管理系统</title>
<meta name="author" content="DeathGhost" />
<link rel="stylesheet" type="text/css" href="css/style.css" />
<!--[if lt IE 9]>
<script src="js/html5.js"></script>
<![endif]-->
<script src="js/jquery.js"></script>
<script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
<script>
	$(function(){
		$("#exit").click(function(){
			location.href="login_do.php?exit=yes";
		});
	})
	(function($){
		$(window).load(function(){
			
			$("a[rel='load-content']").click(function(e){
				e.preventDefault();
				var url=$(this).attr("href");
				$.get(url,function(data){
					$(".content .mCSB_container").append(data); //load new content inside .mCSB_container
					//scroll-to appended content 
					$(".content").mCustomScrollbar("scrollTo","h2:last");
				});
			});
			
			$(".content").delegate("a[href='top']","click",function(e){
				e.preventDefault();
				$(".content").mCustomScrollbar("scrollTo",$(this).attr("href"));
			});
			
		});
	})(jQuery);
</script>
</head>
<body>
<!--header-->
<header>
 <h1><img src="images/admin_logo.png"/></h1>
 <ul class="rt_nav">
  <li><a class="quit_icon" id="exit">安全退出</a></li>
 </ul>
</header>

<!--aside nav-->
<aside class="lt_aside_nav content mCustomScrollbar">
 <ul>
  <li>
     <dl>
		<dt style="color:#19A97B">系统功能</dt>
		<!--当前链接则添加class:active-->
		<dd><a href="banner.php" >首页横幅</a></dd>
		<dd><a href="index.php" >售票列表</a></dd>
		<dd><a href="members.php">会员列表</a></dd>
		<dd><a href="order.php" class="active">订单管理</a></dd>
		<!--<dd><a href="#">品牌管理</a></dd-->
	</dl>
  </li>
 </ul>
</aside>

<section class="rt_wrap content mCustomScrollbar">
 <div class="rt_content">
     <!--点击加载-->
     <script>
     $(document).ready(function(){
		$("#loading").click(function(){
			$(".loading_area").fadeIn();
             $(".loading_area").fadeOut(1500);
			});
		 });
     </script>
     <section class="loading_area">
      <div class="loading_cont">
       <div class="loading_icon"><i></i><i></i><i></i><i></i><i></i></div>
       <div class="loading_txt"><mark>数据正在加载，请稍后！</mark></div>
      </div>
     </section>
     <!--结束加载-->
     <!--弹出框效果-->
     <script>
     $(document).ready(function(){
		 /*/弹出文本性提示框
		 $("#showPopTxt").click(function(){
			 $(".pop_bg").fadeIn();
			 });*/
		 //弹出：确认按钮
		 $(".trueBtn").click(function(){			 
			 var gid = $("#del_id").val();
			 location.href="goods_del.php?gid="+gid;
			 $(".pop_bg").fadeOut(0.1);
			 });
		 //弹出：取消或关闭按钮
		 $(".falseBtn").click(function(){
			 //alert("你点击了取消/关闭！");//测试
			 $(".pop_bg").fadeOut();
			 });
		 });
		 function delgoods(gid){
			 $(".pop_bg").fadeIn();
			 $("#del_id").val(gid);
		 }
     </script>
	 
	  <section class="pop_bg">
	  <input type="hidden" id="del_id" value=""/>
      <div class="pop_cont">
       <!--title-->
       <h3>删除</h3>
       <!--content-->
       <div class="pop_cont_text">
        确定删除！
       </div>
       <!--bottom:operate->button-->
       <div class="btm_btn">
        <input type="button" value="确认" class="input_btn trueBtn"/>
        <input type="button" value="取消" class="input_btn falseBtn"/>
       </div>
      </div>
     </section>
	 
		<?php
		//分页开始
		$perNumber=15; //每页显示的记录数
		if (isset($_GET['page']))   
			$page=$_GET['page']; //获得当前的页面值
		else
			$page=1;
		$gres=mysql_query("SELECT count(*) from orders where order_id='$did'"); //获得记录总数
		$grs=mysql_fetch_array($gres); 
		$totalNumber=$grs[0];

		$totalPage=ceil($totalNumber/$perNumber); //计算出总页数

		$startCount=($page-1)*$perNumber; //分页开始,根据此方法计算出开始的记录

		$result=mysql_query("SELECT * from orders  where order_id='$did' limit $startCount,$perNumber"); //根据前面的计算出开始的记录和记录数
		?>
     <section>
      <div class="page_title">
       <h2 class="fl">订单号:<font style="font-weight:lighter;"><?php echo $did;?></font>&nbsp;&nbsp;</h2>
		<a style="margin-top:5px;" onclick="javascript:<?php echo 'history.back()';?>;" class="fr top_rt_btn">返回</a>
      </div>

	   <h2><strong style="color:grey;">姓名&nbsp;&nbsp;<font style="font-weight:lighter;"><?php echo $orders['receiving_name'];?></font></strong></h2>
	    <h2><strong style="color:grey;">电话&nbsp;&nbsp;<font style="font-weight:lighter;"><?php echo $orders['receiving_tel'];?></font></strong></h2>
		<h2><strong style="color:grey;"><?php if($orders['shipping_type']=="上门自取"){ echo "取货信息&nbsp;&nbsp;<font style='font-weight:lighter;'>".$orders['take_info']."</font>" ;}else{echo "收货信息&nbsp;&nbsp;<font style='font-weight:lighter;'>".$orders['receiving_info']."</font>";}?></strong></h2>
		<h2><strong style="color:grey;">配送方式&nbsp;&nbsp;<font style="font-weight:lighter;"><?php echo $orders['shipping_type'];?></font></strong></h2>
	  <h2><strong style="color:grey;"><font color="red">订单总价:￥<?php echo $orders['order_amount'];?></font></strong></h2>
      <table class="table">
       <tr>
        <th>商品</th> 
		<th>单价</th>
		<th>数量</th>
		<th>小计</th>
       </tr>
	   <?php
		while($prow = mysql_fetch_array($result)){
		?>
		   <tr>
		   	<td style="width:220px;"><div style="width:220px;cursor:pointer" class="cut_title ellipsis"><?php echo $prow['goods_name'];?></div></td>
			<td style="width:200px;"><?php echo $prow['goods_price'];?></td>
			<td><?php echo $prow['goods_num'];?></td>
			<td style="width:200px;"><?php echo $prow['order_subtotal'];?></td>
		   </tr>
		<?php 
		}
		?>
      </table>
      <aside class="paging">
	<?php 
	if ($page != 1) { //页数不等于1
	?>
	<a href="?page=<?php echo $page - 1;?>">上一页</a> <!--显示上一页-->
	<?php
	}
	for ($i=1;$i<=$totalPage;$i++) {  //循环显示出页面

		if ($i !=$page){

	?>
	<a href="?page=<?php echo $i;?>"><?php echo $i ;?></a>
	<?php

		}else{?>
			<a style="background: rgb(25, 169, 123);"><?php echo $i ;?></a>
		<?php
		}
	}
	if ($page<$totalPage) { //如果page小于总页数,显示下一页链接
	?>
	<a href="?page=<?php echo $page + 1;?>">下一页</a>
	<?php }?>&nbsp;<font>共<?php echo $totalPage?>页</font>
      </aside>
     </section>
 </div>
</section>
</body>
</html>
