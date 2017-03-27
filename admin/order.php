 <?php
session_start();
include("mysql_connect.inc");
header("Content-Type: text/html;charset=utf-8");

if(empty($_SESSION['admin'])){
	echo "<script>alert('请登录!');</script>";
	echo "<script>location.href='login.html'</script>";
}
if (isset($_GET['where'])) {
    $a = $_GET['where'];
    $where = "where order_id like '%" . $_GET['where'] . "%'";
} else {
    $a = "";
    $where = "";
}
if (isset($_GET['status'])) {
		$b = $_GET['status'];
		if($_GET['status']==1){
			header("location:order.php");
		}
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
		$where = "where order_status like '%" . $_GET['status'] . "%'";
	} else {
		$where = "";
		$b = "";
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
                    $(document).ready(function() {
                        /*/弹出文本性提示框
                         $("#showPopTxt").click(function(){
                         $(".pop_bg").fadeIn();
                         });*/
                        //弹出：确认按钮
                        $(".trueBtn").click(function() {
                            var id = $("#del_id").val();
                            location.href = "order_do.php?del=yes&id=" + id;
                            $(".pop_bg").fadeOut(0.1);
                        });
                        //弹出：取消或关闭按钮
                        $(".falseBtn").click(function() {
                            //alert("你点击了取消/关闭！");//测试
                            $(".pop_bg").fadeOut();
                        });
                        $("#find").click(function() {
                            var where = $("#likefind").val();
                            //alert(where);
                            location.href = "index.php?where=" + where;
                        });
                    });
                    function delgoods(gid) {
                        $(".pop_bg").fadeIn();
                        $("#del_id").val(gid);
                    }
                </script>
<script>
	$(function(){
		$("#exit").click(function(){
			location.href="login_do.php?exit=yes";
		});
		$("#orderstatus	").change(function() {
        var status = $(this).val();
            location.href = "order.php?status=" + status;
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

		<?php
		//分页开始
		$perNumber=15; //每页显示的记录数
		if (isset($_GET['page']))   
			$page=$_GET['page']; //获得当前的页面值
		else
			$page=1;
		$gres=mysql_query("SELECT count(*) from orders ".$where." group by order_id"); //获得记录总数
		$grs=mysql_fetch_array($gres); 
		$totalNumber=$grs[0];

		$totalPage=ceil($totalNumber/$perNumber); //计算出总页数

		$startCount=($page-1)*$perNumber; //分页开始,根据此方法计算出开始的记录

		$result=mysql_query("SELECT * from orders ".$where." group by order_id order by order_time desc limit $startCount,$perNumber"); //根据前面的计算出开始的记录和记录数
		?>
     <section>
      <div class="page_title">
		   <h2 class="fl">订单列表</h2>
		   <select name="orderstatus" class="textbox " id="orderstatus" style="margin-left:15px;height:30px;">
				<option value="1" <?php if($b==1){echo "selected";}?>>全部订单</option>
				<option value="2" <?php if($b==2){echo "selected";}?>>等待付款</option>
				<option value="3" <?php if($b==3){echo "selected";}?>>已支付</option>
				<option value="4" <?php if($b==4){echo "selected";}?>>已取消</option>
				<option value="5" <?php if($b==5){echo "selected";}?>>已付款</option>
			</select>
	   <input style="margin-left:15px;height:18px;" type="text" id="likefind" value="<?php echo $a; ?>" class="textbox textbox_225" placeholder="请输入订单号"/>
        <input style="margin-left:5px;height:30px;line-height:30px" id="find" type="button" value="搜索" class="group_btn"/>
		<a href="order_action.php?status=<?php echo $b; ?>" style="margin-top:5px;margin-left:10px;" class="fr top_rt_btn">导出excel</a>
		<!--<a href="order.php" style="margin-top:5px;background:#19a97b;color:#fff;" class="fr top_rt_btn">待处理</a>-->
      </div>
      <table class="table">
       <tr>
        <th>订单号</th>
		<th>收货(取票)人</th>
		<th>票名</th>
		<th>总价</th>
		<th>配送方式</th>
		<th>支付方式</th>
		<th>下单时间</th>
		<th>状态</th>
		<th>操作</th>
       </tr>
	   <?php
		while($row = mysql_fetch_array($result)){
		?>
		   <tr>
			<td style="width:100px;"><div style="width:120px;cursor:pointer" title="查看详情" class="cut_title ellipsis"><a href="order_xq.php?did=<?php echo $row['order_id'];?>"><?php echo $row['order_id'];?></a></div></td>
			<td><?php echo $row['receiving_name'];?></td>
			
			<td style="width:150px;"><div style="width:200px;" class="cut_title ellipsis"><?php echo $row['goods_name']?></div></td>
			<td><?php echo $row['order_amount'];?></td>
			<td style="width:150px;"><?php echo $row['shipping_type']?></td>
			<td><?php echo $row['payment_type'];?></td>
			<td><?php echo $row['order_time'];?></td>
			<td><?php echo $row['order_status'];?></td>
			<td style="min-width:180px;width:200px;">
			<?php if($row['order_status']=="已取消"){?>
			 <a href="#" id="showPopTxt" onclick="delgoods(<?php echo $row['id']; ?>)" class="inner_btn">删除</a>
			<?php }else{?>
			<a href="order_xq.php?did=<?php echo $row['order_id'];?>" id="showPopTxt"  class="inner_btn">查看详情</a>
			<?php }?>
			</td>
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
	 <?php
	 if($totalPage==0){
		 echo "暂无信息!";
	 }
	 ?>
 </div>
</section>
</body>
</html>
