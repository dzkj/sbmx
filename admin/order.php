<?php
session_start();
include("mysql_connect.inc");
header("Content-Type: text/html;charset=utf-8");

if(empty($_SESSION['admin'])){
	echo "<script>alert('请登录!');</script>";
	echo "<script>location.href='login.html'</script>";
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<title>冠驰shop后台管理系统</title>
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
	<dd><a href="banner.php">首页横幅</a></dd>
    <dd><a href="index.php">商品列表</a></dd>
    <dd><a href="category.php">商品分类</a></dd>
	<dd><a href="member_wcz.php">会员积分</a></dd>
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
			 var order_id = $("#del_id").val();
			 var huizhi=$("#huizhi").val();
			 location.href="order_do.php?order_id="+order_id+"&huizhi="+huizhi;
			 $(".pop_bg").fadeOut(0.1);
			 });
		 //弹出：取消或关闭按钮
		 $(".falseBtn").click(function(){
			 //alert("你点击了取消/关闭！");//测试
			 $(".pop_bg").fadeOut();
			 });
		 });
		 function gbdd(order_id){
			 $(".pop_bg").fadeIn();
			 $("#del_id").val(order_id);
		 }
     </script>
	<section class="pop_bg">
	  <input type="hidden" id="del_id" value=""/>
      <div class="pop_cont">
       <!--title-->
       <h3>关闭订单</h3>
       <!--content-->
       <div class="pop_cont_input">
        <ul>
         <li>
          <span>确定关闭！</span>
         </li>
         <li>
          <span class="ttl">回执信息</span>
          <input id="huizhi" type="text" placeholder="请填回执信息" class="textbox"/>
         </li>
        </ul>
       </div>
       <!--bottom:operate->button-->
       <div class="btm_btn">
        <input type="button" value="确认" class="input_btn trueBtn"/>
        <input type="button" value="关闭" class="input_btn falseBtn"/>
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
		$gres=mysql_query("SELECT count(*) from orders where status=0 group by order_id"); //获得记录总数
		$grs=mysql_fetch_array($gres); 
		$totalNumber=$grs[0];

		$totalPage=ceil($totalNumber/$perNumber); //计算出总页数

		$startCount=($page-1)*$perNumber; //分页开始,根据此方法计算出开始的记录

		$result=mysql_query("SELECT a.*,b.* from orders as a,member as b where status=0 group by order_id order by bydate desc limit $startCount,$perNumber"); //根据前面的计算出开始的记录和记录数
		?>
     <section>
      <div class="page_title">
       <h2 class="fl">待处理订单</h2>
		<a href="order_y.php" style="margin-top:5px;margin-left:10px;" class="fr top_rt_btn">已处理</a>
		<a href="order.php" style="margin-top:5px;background:#19a97b;color:#fff;" class="fr top_rt_btn">待处理</a>
      </div>
      <table class="table">
       <tr>
        <th>订单号</th>
        <th>收货信息</th>
		<th>会员名</th>
		<th>购买时间</th>
		<th>操作</th>
       </tr>
	   <?php
		while($prow = mysql_fetch_array($result)){
		?>
		<form action="order_do.php" method="post" enctype="multipart/form-data">
		   <tr>
			<input type="hidden" value="<?php echo $prow['order_id'];?>" name="did"/>
			<td style="width:100px;"><div style="width:120px;cursor:pointer" title="查看详情" class="cut_title ellipsis"><a href="order_xq.php?did=<?php echo $prow['order_id'];?>"><?php echo $prow['order_id'];?></a></div></td>
			<td><?php echo $prow['addrs']?></td>
			<td style="width:150px;"><div style="width:150px;" class="cut_title ellipsis"><?php echo $prow['name']?></div></td>
			<td style="width:150px;"><?php echo $prow['bydate']?></td>
			<td style="min-width:180px;width:200px;">
			 <input name="csubmit" style="border:0px;" type="submit" class="inner_btne" value="发货"/>
			 <input name="juesubmit" style="border:0px;" type="submit" class="inner_btnee" value="关闭订单"/>
			</td>
		   </tr>
		</form>
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
	 <?php
	 if($totalPage==0){
		 echo "暂无信息!";
	 }
	 ?>
 </div>
</section>
</body>
</html>
