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
<style>
#a{width:100px;font-size:15px;display:block;text-align:center;text-decoration:none;}	
#nav li{width:100px;position:relative;margin-top:5px;margin-bottom:5px;float:left;text-align:center;}	
#nav li ul{background: #fff;position:absolute;left:0px;top:30px;display:none;width:100px;border:1px solid #19A97B}	
#nav li:hover ul{ display:block;}
</style>
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
	<dd><a href="#" class="active">会员积分</a></dd>
	<dd><a href="order.php">订单管理</a></dd>
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
		$gres=mysql_query("select count(*) from memcredits where status='0' and actionname='提现'"); //获得记录总数
		$grs=mysql_fetch_array($gres); 
		$totalNumber=$grs[0];

		$totalPage=ceil($totalNumber/$perNumber); //计算出总页数

		$startCount=($page-1)*$perNumber; //分页开始,根据此方法计算出开始的记录

		$result=mysql_query("select a.bydate,a.credits as acredits,a.id as aid,b.* from memcredits as a,member as b where a.mid=b.id and a.status='0' and a.actionname='提现' order by bydate desc limit $startCount,$perNumber"); //根据前面的计算出开始的记录和记录数

		?>
     <section>
      <div class="page_title">
       <h2 class="fl">提现</h2>
		<ul style="margin-top:5px;margin-left:5px;" class="fr top_rt_btn" id="nav">
			<li style="margin-top:0px;">
				<a id="a">已处理</a>
				<ul>
					<li><a href="member_ycz.php">充值</a></li>
					<li><a href="member_ytx.php">提现</a></li>
				</ul>
			</li>
		</ul>
		<ul style="margin-top:5px;background: #19a97b;" class="fr top_rt_btn" id="nav">
			<li style="margin-top:0px;">
				<a style="color:#fff;" id="a">待处理</a>
				<ul>
					<li><a href="member_wcz.php">充值</a></li>
					<li><a href="member_wtx.php">提现</a></li>
				</ul>
			</li>
		</ul>
      </div>
      <table class="table">
       <tr>
        <th style="width:200px;">会员名<br><font style="color: #F7460E;">(悬浮查看详情)</font></th>
        <th>提现积分</th>
		<th>提现银行卡</th>
		<th>回执信息</th>
		<th>申请时间</th>
		<th>操作</th>
       </tr>
	   <?php
		while($prow = mysql_fetch_array($result)){
		?>
		<form action="member_wtx_do.php" method="post" enctype="multipart/form-data">
		   <tr>
			<input type="hidden" value="<?php echo $prow['aid'];?>" name="cre_id"/>
			<td><div style="width:200px;cursor:pointer" title="电话:<?php echo $prow['tel'];?>" class="cut_title ellipsis"><?php echo $prow['name'];?></div></td>
			<td><input type="text" value="<?php echo $prow['acredits']?>" name="acredits"/></td>
			<td><input type="text" style="width:180px;" value="<?php echo $prow['bank']?>" name="bank"/></td>
			<td><input type="text" style="width:280px;" name="backinfo" placeholder="请填写回执信息(可不填)"/></td>
			<td style="width:150px;"><?php echo $prow['bydate']?></td>
			<td style="min-width:180px;width:200px;">
			 <input name="csubmit" style="border:0px;" type="submit" class="inner_btne" value="确定提现"/>
			 <input name="juesubmit" style="border:0px;" type="submit" class="inner_btnee" value="拒绝"/>
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
