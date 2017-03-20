<?php
session_start();
include("mysql_connect.inc");
header("Content-Type: text/html;charset=utf-8");
if(empty($_SESSION['admin'])){
	echo "<script>alert('请登录!');</script>";
	echo "<script>location.href='login.html'</script>";
}
if(isset($_GET['id'])){
	$id=$_GET['id'];
	$res=mysql_query("select * from members where id='$id'");
	$row=mysql_fetch_array($res);
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
<link rel="stylesheet" href="kindeditor/themes/default/default.css" />
<link rel="stylesheet" href="kindeditor/plugins/code/prettify.css" />
<script charset="utf-8" src="kindeditor/kindeditor.js"></script>
<script charset="utf-8" src="kindeditor/lang/zh_CN.js"></script>
<script charset="utf-8" src="kindeditor/plugins/code/prettify.js"></script>
<script>
KindEditor.ready(function(K) {
	var editor1 = K.create('textarea[name="content"]', {
		width: "800px", //编辑器的宽度
		height: "400px", //编辑器的高度
		filterMode: false, //不会过滤HTML代码
		resizeType: 0,
		cssPath : 'kindeditor/plugins/code/prettify.css',
		uploadJson : 'kindeditor/php/upload_json.php',
		fileManagerJson : 'kindeditor/php/file_manager_json.php',
		allowFileManager : true,
		afterCreate : function() {
			var self = this;
			K.ctrl(document, 13, function() {
				self.sync();
				K('form[name=write_content]')[0].submit();
			});
			K.ctrl(self.edit.doc, 13, function() {
				self.sync();
				K('form[name=write_content]')[0].submit();
			});
		}
	});
	prettyPrint();
});
</script>
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
<script>
$(function(){
	$("form").submit(function(){
	var pwd=$('#password').val();
	var pwd1=$('#password1').val();
	if(pwd!=pwd1){
			alert("两次密码输入不一致,请重新输入密码!");
			return false;
		}
	})
})
</script>

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
		<dd><a href="index.php" >售票列表</a></dd>
		<dd><a href="members.php" class="active">会员列表</a></dd>
		<dd><a href="order.php" >订单管理</a></dd>
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
     </script>
		<section>
      <div class="page_title">
       <h2 class="fl">重置密码</h2>
       <a style="margin-top:5px;" href="index.php" class="fr top_rt_btn">返回</a>
      </div>
		 <section>
		  <h2><strong style="color:grey;">修改密码</strong></h2>
		  <form name="write_content" action="members_action.php" method="post" enctype="multipart/form-data" id="form">
			<ul class="ulColumn2">
			   <li>
			   <input name="id" type="hidden" value="<?php echo $id;?>"/>
				<span class="item_name" style="width:120px;">请输入原密码：</span>
				<input type="text" class="textbox textbox_295" name="old_password" required oninvalid="setCustomValidity('请输入原密码!');"  oninput="setCustomValidity('');" placeholder="请输入原密码" value="<?php echo $row['password'];?>"/>
			   </li>
			   <li>
				<span class="item_name" style="width:120px;">请输入密码：</span>
				<input type="password" id="password" class="textbox textbox_295" name="password" required oninvalid="setCustomValidity('请输入密码!');"  oninput="setCustomValidity('');" placeholder="请输入密码" value=""/>
			   </li>
			   <li>
				<span class="item_name" style="width:120px;">请重新输入密码：</span>
				<input type="password"  id="password1" class="textbox textbox_295" name="password" required oninvalid="setCustomValidity('请重新输入密码!');"  oninput="setCustomValidity('');" placeholder="请重新输入密码" value=""/>
			   </li>
			   <li>
				<span class="item_name" style="width:120px;"></span>
				<input type="submit" name="edit_submit" class="link_btn" id="button"/>
			   </li>
			 </ul>
		  </form>
		 </section>
     </section>
 </div>
</section>
</body>
</html>
