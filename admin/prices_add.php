<?php
session_start();
include("mysql_connect.inc");
header("Content-Type: text/html;charset=utf-8");
if(empty($_SESSION['admin'])){
	echo "<script>alert('请登录!');</script>";
	echo "<script>location.href='login.html'</script>";
}
if(isset($_GET['id'])){
	$show_id=$_GET['show_id'];
	$id=$_GET['id'];
}else{
	echo "<script>history.back();</script>";
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
<!--script src="js/jquery.mCustomScrollbar.concat.min.js"></script-->

<script>
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
  <li><a href="login.html" class="quit_icon">安全退出</a></li>
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
    <dd><a href="category.php" class="active">商品分类</a></dd>
	<dd><a href="member_wcz.php">会员积分</a></dd>
	<dd><a href="order.php">订单管理</a></dd>
    <!--<dd><a href="#">品牌管理</a></dd-->
   </dl>
  </li>
 </ul>
</aside>

<section class="rt_wrap content mCustomScrollbar" style="overflow-y:auto;">
 <div class="rt_content">
     <!--结束加载-->
		<section>
      <div class="page_title">
       <h2 class="fl">添加场次</h2>
	   <a style="margin-top:5px;margin-left:10px;" onclick="javascript:<?php echo 'history.back()';?>;" class="fr top_rt_btn">返回</a>
      </div>
		 <section>
		  <h2><strong style="color:grey;">填写场次信息</strong></h2>
		  <form action="prices_action.php" method="post">
			  <ul class="ulColumn2">
			   <li>
			   	<input type="hidden" value="<?php echo $id;?>" name="season_id"/>
			    <input type="hidden" value="<?php echo $show_id;?>" name="show_id"/>
				<span class="item_name" style="width:120px;">场次价格：</span>
				<input type="text" class="textbox textbox_295" name="price" required oninvalid="setCustomValidity('请填写场次价格!');"  oninput="setCustomValidity('');" placeholder="请输入场次价格"/>
			   </li>
			   <li>
				<span class="item_name" style="width:120px;">数量：</span>
				<input type="text" class="textbox textbox_295" name="num" placeholder="请输入数量"/>
			   </li>
			   <li>
				<span class="item_name" style="width:120px;"></span>
				<input type="submit" name="pub_submit" class="link_btn"/>
			   </li>
			  </ul>
		  </form>
		 </section>
     </section>
 </div>
</section>
</body>
</html>