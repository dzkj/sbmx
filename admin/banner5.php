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
li{list-style:none}
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
	<dd><a href="banner.php" class="active">首页横幅</a></dd>
    <dd><a href="index.php">商品列表</a></dd>
    <dd><a href="category.php">商品分类</a></dd>
	<dd><a href="member_wcz.php">会员积分</a></dd>
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
		 function selectl(){
			var url = document.getElementById('select_file').files[0];
			var src = window.URL.createObjectURL(url);
			document.getElementById('select_img').src = src;
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
     <section>
      <div class="page_title">
       <h2 class="fl">横幅修改</h2>
       <a href="banner5.php" style="background: #19a97b;color: #f8f8f8;margin-top:5px;margin-left:10px;" class="fr top_rt_btn">图片五</a>
       <a href="banner4.php" style="margin-top:5px;margin-left:10px;" class="fr top_rt_btn">图片四</a>
       <a href="banner3.php" style="margin-top:5px;margin-left:10px;" class="fr top_rt_btn">图片三</a>
       <a href="banner2.php" style="margin-top:5px;margin-left:10px;" class="fr top_rt_btn">图片二</a>
       <a href="banner.php" style="margin-top:5px;margin-left:10px;" class="fr top_rt_btn">图片一</a>
      </div>
      <section>
		<?php
		$sqlbanner="select * from banners where id=5";
		$resbanner=mysql_query($sqlbanner);
		$rowbanner=mysql_fetch_array($resbanner);
		?>
		<form name="write_content" action="banner_do.php" method="post" enctype="multipart/form-data">
			<input type="hidden" name="id" value="<?php echo $rowbanner['id'];?>"/>
			<h2><strong style="color:grey;">图片五</strong></h2>
			<li>
				<img src="<?php echo "../".$rowbanner['img'];?>" width="200px" style="border:1px #139667 solid;width:800px;height:200px;" id="select_img"/>
				<input type="file" name="img" id="select_file" onchange="selectl()" style="width: 800px;height: 200px;position:relative;top: -202px;left: 0px;border: 1px solid red;opacity:-9;"/>
			</li>
			<li style="position:relative;top: -180px;left: 0px;">
				<h2><strong style="color:grey;">链接地址</strong></h2>
				<input type="text" class="textbox textbox_295" name="url"  oninput="setCustomValidity('');" value="<?php echo $rowbanner['url'];?>"/>
			</li>
			<li style="position:relative;top:-150px">
				<span class="item_name" style="width:120px;"></span>
				<input type="submit" name="submit" value="修改" class="link_btn"/>
			</li>
		</form>
	  </section>
     </section>
	 
 </div>
</section>
</body>
</html>
