	<style>
	#banner{
		width: 998px;
		height:300px;
		margin:5px auto;
		border:1px solid #ccc;
	}
	#header_l {
		float:right;
		margin-top:20px
	}
	#header_l ul{
		margin-bottom:10px;
	}
	#header_l ul li {
		width:80px;
		height:30px;
		font-size:20px;
		border:1px solid #C60014;
		line-height:30px;
		float:left;
		text-align:center;
	}
	#title{
		margin-bottom:10px;
		font-size:18px;
		font-weight:900;
	}
	</style>
    <div class="header-w" style="border-bottom: 3px solid #cc0001;height:121px;">
      <div id="header">
		  <img src="img/login.png"/>
		<div id="header_l">
		<?php
			if(empty($_SESSION["user"])){
				$config_sql="select * from config limit 0,1";
				$config_result=mysqli_query($link,$config_sql);
				$config_row=mysqli_fetch_array($config_result);
		?>
		<img src="img/telephone.png" style="width:25px;herght:30px;"/><span style="color:#C60014;font-size:20px;"><?php echo $config_row['tel'];?></span>
			<ul>
				<li style="background-color:#C60014;"><a style="color:#fff;" href="login.php">登入</a></li>
				<li ><a style="color:#C60014;" href="register.php">注册</a></li>
			</ul>
		<?php
			}else{
		?>
			
			<p style="margin-top:10px;height:30px">
			<span style="font-size:17px;margin-right:10px;">欢迎! <?php echo $_SESSION["user"]["nick_name"]?></span>
			<a style="border:1px solid #ccc;background-color:#C60014;height:50px;line-height:50px;text-align:center;font-size:15px;color:#fff;padding:3px;" href="login_action.php?exit=yes">退出</a>
			</p>
			<p style="height:40px;margin-top:10px;">
			<span style="height:40px;margin-left:27px;"><img src="img/MAIL.png" style="width:30px;height:22px;"/></span>
			<span style="height:40px;margin-left:17px;"><a style="height:40px;padding:3px;border:1px solid #ccc;background-color:#C60014;font-size:15px;color:#fff; position:relative;top:-5px;" href="myinfo.php">个人中心</a></span>
			</p>
			
		<?php
			}
		?>
		</div>
      </div>
	 </div>	