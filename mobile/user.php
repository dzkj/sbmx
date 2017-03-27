<!DOCTYPE html>

<html>
<head>
    <title>个人信息</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <link href="css/mobile.css" rel="stylesheet" />
    <link href="css/reset.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/index.css" type="text/css">
    <link rel="stylesheet" href="css/mui.min.css">
    <script language="javascript" type="text/javascript" src="js/jquery.min.js"></script>
    <script language="javascript" type="text/javascript" src="js/my.js"></script>
</head>
<body style="background-color:#e7e7e7;">
    <div id="header" style="position:fixed">
        <!--<a href="javascript:history.back();"><span class="return"></span></a>-->
        <span>个人中心</span>
    </div>
    <div style="height:45px"></div>

<!--    <div class="user-status-section">
        <span class="user-pic">ha </span>
        <span style="line-height:100px">
                <a href="/Account/Login">登录 / 注册</a>

        </span>
        <span class="fr" style="line-height:100px;margin-right:15px;font-family: 黑体, 宋体, sans-serif;">></span>
    </div>-->
    <div class="my-stuffs-section">
        <a href="orders.php">
            <span class="my-stuff" style="top: 60px; left: 18%; margin-left; background-image: url(images/icon_order.png)"></span>
            <span class="my-stuff-text">我的订单</span>
        </a>
        <a href="user_info.php">
            <span class="my-stuff" style="top: 60px; left: 50%; margin-left; background-image: url(images/icon_e_ticket.png)"></span>
            <span class="my-stuff-text">个人信息</span>
        </a>
        <a href="address.php">
            <span class="my-stuff" style="top: 60px; left: 82%; margin-left; background-image: url(images/icon_clection.png)"></span>
            <span class="my-stuff-text">管理地址</span>
        </a>
<!--        <a href="elec_ticket.php">
            <span class="my-stuff" style="top: 150px; left: 18%; margin-left; background-image: url(images/icon_book.png)"></span>
            <span class="my-stuff-text" style="float: left;">我的电子票</span>
        </a>-->
<!--        <a href="user_info.php" style="display:none;">
            <span class="my-stuff" style="top: 150px; left: 50%; margin-left; background-image: url(images/icon_userinfo.png);"></span>
            <span class="my-stuff-text">个人信息</span>
        </a>
        <a href="address.php" style="display:none;">
            <span class="my-stuff" style="top: 150px; left: 82%; margin-left; background-image: url(images/icon_setting.png)"></span>
            <span class="my-stuff-text">管理地址</span>
        </a>-->
    </div>
    <div class="Home__Footer" style="position: fixed; bottom: 0px;width: 100%;">
        <div data-festival="false" class="Tabs--icon Footer border-1px">
          <ul class="Tabs__nav">
            <li class="Tabs__item">
              <a href="index.php" class="Tabs__link">
                <i type="home" class="Ico--home"></i>
                <!-- react-text: 49 -->首页
                <!-- /react-text --></a></li>
            <li class="Tabs__item active">
              <a href="javascript:void(0)" class="Tabs__link">
                <i type="my" class="Ico--my"></i>
                <!-- react-text: 61 -->我的
                <!-- /react-text --></a></li>
          </ul>
        </div>
    </div>
</body>
</html>
