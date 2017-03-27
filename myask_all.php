<?php
	session_start();
	include_once("include/conn.inc.php");
?>
<!DOCTYPE html>
<html xmlns="">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=7" />
<title>世博票务</title>
<meta content="" name="keywords" />
<meta content="" name="description" />
<link type="text/css" href="css/reset.css" rel="stylesheet" />
<link type="text/css" href="css/product.css" rel="stylesheet" />
<link type="text/css" href="css/shadowbox.css" rel="stylesheet"/>
<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="js/publicnew.js"></script>
<script type="text/javascript" src="js/validform.min.js"></script>
<script type="text/javascript" src="js/jquery.minbox.js"></script>

<script type="text/javascript" src="js/newindex.js"></script>

</head>
<body>
<div id="caibei"></div>
<div id="top_ajax" class="top-w">
</div>
<div class="tongz" style="width:100%;display: none;">
<div style="width:1000px;margin:0 auto;height:23px;">
<div class="leftMsg fl" style="width:980px;text-align:center;color:#cc0001;"></div>
<div class="fl" style="padding-top:6px;"><a style="cursor: pointer;" id="header-close"><img src="" /></a></div>
</div>
<div class="cb"></div>
</div>
<div class="login_msg productnew-login undb" id="jump-login" style="z-index:90000000000000;">
</div>

<script type="text/javascript" src="js/arttemplate.all.min.js"></script>
<!--[if IE 6]>
<script type="text/javascript" src="js/png.js"></script>
<script type="text/javascript"> 
  DD_belatedPNG.fix('.quick-guide li img');  
</script> 
<![endif]-->
<?php include_once("include/header.php");?>

<div class="product-headtitle">
<a href="index.php">首页</a> >
<a href="myask_all.php">全部提问</a> >
</div>
<div class="product-detail clearfloat" style="margin-top:0;">
<div class="product-detail-left">
<div class="product-detail-askonly">
<h2 class="product-detail-askonly-title product-askall">
在线问答
<div class="product-askall-borbotom"></div>
</h2>
<div class="product-detail-alla2">
<div class="product-detail-allc-list" style="margin-left:10px;">
<p class="product-detail-allc-list-a">
<span><a href="http://www.228.com.cn/moreask/234938278-1.html" class="red">全部提问</a></span>
<span style="margin:0 3px;">|</span>
<span><a href="question.php" class="c3">我要提问</a></span>
</p>
					<?php
							//查出总条数
							$sql = "select count(*) from faqs";
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
					$sql = "select * from faqs order by id desc limit $start,$page_size ";					
					$result = mysqli_query($link,$sql);
					while($row = mysqli_fetch_array($result)){
				?>
					<div class="product-detail-allc-list-b clearfloat">
					<span class="product-detail-allc-list-b1"><?php echo $row["ask_name"];?>&nbsp;&nbsp;提问：</span>
					<span class="product-detail-allc-list-b2 garya5">
					<?php echo $row["ask_date"];?>
					&nbsp;&nbsp;&nbsp;&nbsp;
					</span>
					</div>
					<div class="product-detail-allc-list-c"><?php echo $row["ask_quest"]?></div>
					<div class="product-detail-allc-list-d">
					<p><p style="margin-top:5px;margin-right:0;margin-bottom:5px;margin-left: 0"><?php echo $row["ask_reply"];?></p><p><br/></p></p>
					<p class="product-detail-allc-list-d2">世博客服 回答于：  <?php echo $row["ask_replydate"];?></p>
					<div class="product-detail-allc-list-dlt"></div>
					<div class="product-detail-allc-list-drt"></div>
					<div class="product-detail-allc-list-dlb"></div>
					<div class="product-detail-allc-list-drb"></div>
					<div class="product-detail-allc-list-djiao"></div>
					</div>
					<div class="product-detail-allc-list-line"></div>
				<?php
				}
				?>
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
</div>

<script type="text/javascript" src="js/shadowbox.js"></script>

<div class="cb"></div>
<?php include_once("include/footer.php");?>
<script src="js/tag.js" type="text/javascript" async></script>
<script type="text/javascript">var _ozuid ="";</script>
<script type="text/javascript" src="js/o_code.js"></script>
</body>
</html>