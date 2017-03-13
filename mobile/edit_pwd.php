<html><head>
    <title>修改密码</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <link href="css/mobile.css" rel="stylesheet">
    <link href="css/reset.css" rel="stylesheet">
    <script language="javascript" type="text/javascript" src="/Scripts/jquery.min.js"></script>
    <script language="javascript" type="text/javascript" src="/Scripts/my.js"></script>
    <script src="/Scripts/jquery.validate.js"></script>
</head>
<body style="background-color:white">
    <div id="header" style="position:fixed">
        <a href="javascript:history.back();"><span class="return"></span></a>
        <span>修改密码</span>
    </div>
    <div style="height:45px"></div>
    <div class="register-main">
        <form id="change-pass-form" action="edit_do.php" method="post" novalidate="novalidate">
            <div class="register-item clearfix">
                <div class="input-header" style="background-image: url(../../Images/lock.png)"></div>
                <input type="password" placeholder="请输入原密码" name="OldPassword" id="OldPassword">
            </div>
            <div class="register-item clearfix">
                <div class="input-header" style="background-image: url(../../Images/lock.png)"></div>
                <input type="password" placeholder="请输入新密码" name="NewPassword" id="NewPassword">
            </div>
            <div class="register-item clearfix">
                <div class="input-header" style="background-image: url(../../Images/cfmlock.png)"></div>
                <input type="password" placeholder="确认新密码" name="ConfirmPassword" id="ConfirmPassword">
            </div>
            <input type="submit" value="保存">
        </form>
    </div>


</body></html>