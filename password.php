
<?php
	session_start();
	include_once("include/session.inc.php");
	include_once("include/conn.inc.php");
	$session_id=$_SESSION['user']['id'];
	$sql="select * from members where id=$session_id";
	$result=mysqli_query($link,$sql);
	while($show=mysqli_fetch_array($result)){
		$row=$show;
	}
?>
<!DOCTYPE html>
<html xmlns="">

  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <script charset="utf-8" src="./js/v.js"></script>
    <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7">
    <title>个人信息</title>
    <link type="text/css" href="./css/reset.css" rel="stylesheet">
    <link type="text/css" href="./css/uc.css" rel="stylesheet">
    <script type="text/javascript" id="veConnect" async="" src="./js/capture-apps-4.18.6.js"></script>
    <script async="" src="./js/tg.js"></script>
    <script async="" src="./js/analytics.js"></script>
    <script type="text/javascript" defer="" async="" src="./js/y.js"></script>
    <script type="text/javascript" async="" src="./js/adw.js"></script>
    <script type="text/javascript" defer="" async="" src="./js/jiuzhilan_4783.js"></script>
    <script src="./js/hm.js"></script>
    <script type="text/javascript" src="./js/jquery-1.7.2.min.js"></script>
    <script type="text/javascript" src="./js/publicNew.js"></script>
    <script type="text/javascript" src="./js/Validform.min.js"></script>
    <script type="text/javascript" src="./js/jQuery.minBox.js"></script>

 
 
 
    <script type="text/javascript" src="./js/artTemplate.all.min.js"></script>
    <script type="text/javascript" src="./js/jQuery.minBox.js"></script>
    <link href="./css/WdatePicker.css" rel="stylesheet" type="text/css"></head>
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
  <body>
    <div id="caibei"></div>

    <div class="tongz" style="width:100%;display: none;">
      <div style="width:1000px;margin:0 auto;height:23px;">
        <div class="leftMsg fl" style="width:980px;text-align:center;color:#cc0001;"></div>
        <div class="fl" style="padding-top:6px;">
          <a style="cursor: pointer;" id="header-close">
            <img src=""></a>
        </div>
      </div>
      <div class="cb"></div>
    </div>
    <div class="login_msg productnew-login undb" id="jump-login" style="z-index:90000000000000;"></div>

    <script type="text/javascript" src="./js/artTemplate.all.min.js"></script>
    <!--[if IE 6]>
      <script type="text/javascript">DD_belatedPNG.fix('.quick-guide li img');</script>
    <![endif]-->
<?php include_once("include/header.php");?>
    <div class="cb"></div>
    <p class="crumbs">
      <a href="index.php">首页</a>＞
      <a href="myinfo.php">个人信息</a></p>
    <div class="uc_w">
        <div class="uc_nav">
            <h2>交易管理</h2>
            <ul>
                <li class="center-order">
                    <a href="my_orders.php">我的订单</a></li>
            </ul>
            <h2>账户管理</h2>
            <ul>
                <li class="">
                    <a href="myinfo.php">个人信息</a></li>
				<li class="">
                    <a href="myinfo.php" class="current">修改密码</a></li>
                <li class="center-address">
                    <a href="myaddress.php">收货地址</a></li>
                <li class="center-myquestion">
                    <a href="myask.php">我的问答</a></li>
            </ul>
        </div>
      <script type="text/javascript">$('.center-personAlinFormationList a').addClass('current');</script>
      <div class="uc_main">
        <div class="status mb20 font-taho">
          <p class="uc_name fl">
            <span class="red bold fft"><?php echo $_SESSION['user']['nick_name']?></span>欢迎回来~~</p>
         <!-- <p class="uc_id_time fr">
            <span class="mr30">ID：60264493</span>最近登录：2017年03月09日 10:15:31</p>--></div>
        <div class="main mt20">
          <div class="main-t clear">
            <h2>修改密码</h2></div>
          <form id="personAlinforForm" method="post" action="myinfo_action.php">
            <table width="763" border="0" cellspacing="0" cellpadding="0" class="u_infor mt20 ml30">
              <tbody>
                <tr>
                  <th scope="row">原密码：</th>
                  <td colspan="4">
                    <input type="password" name="pwd"  style="width:195px;" placeholder="请输入原密码">
                  </td>
                </tr>
				<tr>
                  <th scope="row">新密码：</th>
                  <td colspan="4">
                     <input type="password" name="password"  style="width:195px;" id="password" placeholder="请输入新密码">
                  </td>
                </tr>
                <tr>
                <th scope="row">重新输入新密码：</th>
                  <td colspan="4">
                     <input type="password" name="password"  style="width:195px;" id="password1" placeholder="请重新输入新密码">
                  </td>
                </tr>
                <tr>
                  <th height="50" scope="row"></th>
                  <td colspan="2" valign="top">
					 <input type="submit" name="password" id="" value="保存" onclick="saveorupdate()" style="width:80px;">
                  </td>
                </tr>
              </tbody>
            </table>
          </form>
        </div>
      </div>
    </div>
    <div class="cb"></div>
	<?php include_once("include/footer.php");?>
    <!--[if IE 6]>
      <script type="text/javascript" src="http://static.228.com.cn/resources/js/png.js"></script>
      <script type="text/javascript">DD_belatedPNG.fix('.booking,.advance-booking,.no1,#sort h3 a,#sort h3,.quick-menu li.myyl a,.quick-menu li.guide a,.copyright a,.change-city,#main-nav li,*html #rigpic a');</script>
    <![endif]-->
    <script src="./js/tag.js" type="text/javascript" async=""></script>
    <script type="text/javascript">var _ozuid = "60264493";</script>
    <script type="text/javascript" src="./js/o_code.js"></script>
    <script type="text/JavaScript" src="./js/WdatePicker.js"></script>
    <script type="text/javascript"></script>
  </body>

</html>