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
<!--script src="js/jquery.mCustomScrollbar.concat.min.js"></script-->
<link rel="stylesheet" href="kindeditor/themes/default/default.css" />
<link rel="stylesheet" href="kindeditor/plugins/code/prettify.css" />
<script charset="utf-8" src="kindeditor/kindeditor.js"></script>
<script charset="utf-8" src="kindeditor/lang/zh_CN.js"></script>
<script charset="utf-8" src="kindeditor/plugins/code/prettify.js"></script>
   <style>
       .custom-date-style {
           background-color: red !important;
       }
   </style>
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
		<dd><a href="banner.php" >首页横幅</a></dd>
		<dd><a href="index.php" class="active">售票列表</a></dd>
		<dd><a href="members.php">会员列表</a></dd>
		<dd><a href="order.php">订单管理</a></dd>
		<!--<dd><a href="#">品牌管理</a></dd-->
	</dl>
  </li>
 </ul>
</aside>

<section class="rt_wrap content mCustomScrollbar" style="overflow-y:auto;">
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
		 //弹出文本性提示框
		 $("#showPopTxt").click(function(){
			 $(".pop_bg").fadeIn();
			 });
		 //弹出：确认按钮
		 $(".trueBtn").click(function(){
			 alert("你点击了确认！");//测试
			 $(".pop_bg").fadeOut();
			 });
		 //弹出：取消或关闭按钮
		 $(".falseBtn").click(function(){
			 alert("你点击了取消/关闭！");//测试
			 $(".pop_bg").fadeOut();
			 });
		 });
		 
		 
		function selectl(){
			var url = document.getElementById('select_file').files[0];
			var src = window.URL.createObjectURL(url);
			document.getElementById('select_img').src = src;
		}
		function selectl1(){
			var url = document.getElementById('select_file1').files[0];
			var src = window.URL.createObjectURL(url);
			document.getElementById('select_img1').src = src;
		}
     </script>
	 <?php 
		$sql="select * from config limit 0,1";
		$result=mysql_query($sql);
		$row=mysql_fetch_array($result);
	 ?>
		<section>
      <div class="page_title">
       <h2 class="fl">网站配置</h2>
       <a style="margin-top:5px;" href="config.php" class="fr top_rt_btn">返回</a>
      </div>
		 <section>
		  <h2><strong style="color:grey;">填写商品信息</strong></h2>
		  <form name="write_content" action="config_action.php" method="post" enctype="multipart/form-data">
			  <ul class="ulColumn2">
			   <li>
				<span class="item_name" style="width:120px;">电话：</span>
				<input type="hidden" name="id" value="<?php echo $row["id"];?>"/>
				<input type="text" class="textbox textbox_295" name="tel" required oninvalid="setCustomValidity('请填写电话!');"  oninput="setCustomValidity('');" placeholder="请输入电话" value="<?php echo $row["tel"];?>"/>
			   </li>
			   <li>
				<span class="item_name" style="width:120px;">版权号：</span>
				<input type="text" class="textbox textbox_295" name="copyright" required oninvalid="setCustomValidity('请填写版本号!');"  oninput="setCustomValidity('');" placeholder="请输入版权号" value="<?php echo $row["copyright"];?>"/>
			   </li>
               <li>
                      <span class="item_name" style="width:120px;">备案号：</span>
                      <input type="text" class="textbox textbox_295" name="records" required oninvalid="setCustomValidity('请填写备案号!');"  oninput="setCustomValidity('');" placeholder="请输入备案号" value="<?php echo $row["records"];?>"/>
               </li>
            
			   	<li>
				<span class="item_name" style="width:120px;">网站简介：</span>
				<div style="position:relative;margin-left:124px;margin-top:-20px">
					<textarea name="intro" class="textbox textbox_295" style="height:350px;width:750px" value="<?php echo $row["intro"];?>"><?php echo $row["intro"];?></textarea>
				</div>
				</li>
			   <li>
				<span class="item_name" style="width:120px;">演出说明：</span>
				<div style="position:relative;margin-left:124px;margin-top:-20px;">
					<textarea name="content" class="textbox textbox_295" style="height:350px;width:750px" value="<?php echo $row["content"];?>"><?php echo $row["content"];?></textarea>
				</div>
				</li>
			   <li style="position:relative;top:10px">
				<span class="item_name" style="width:120px;"></span>
				<input type="submit" name="edit_submit" class="link_btn"/>
			   </li>
			  </ul>
		  </form>
		 </section>
     </section>
 </div>
</section>
</body>
<script src="js/jquery.datetimepicker.full.js"></script>
<link rel="stylesheet" type="text/css" href="css/jquery.datetimepicker.css"/>

</html>
