<html><head>
    <title>个人信息</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <link href="css/mobile.css" rel="stylesheet">
    <link href="css/reset.css" rel="stylesheet">
    <script language="javascript" type="text/javascript" src="/Scripts/jquery.min.js"></script>
    <script language="javascript" type="text/javascript" src="/Scripts/my.js"></script>
</head>
<body style="background-color:#e7e7e7;">
    <div id="header" style="position:fixed">
        <a href="javascript:history.back();"><span class="return"></span></a>
        <span>个人信息</span>
    </div>
    <div style="height:45px"></div>
    <form id="form1" action="/Account/UserInfoManage" method="post">
        <div class="userinfo-section">
            <div style="margin:10px 0" class="clearfix">
                <span class="input-header">账号</span> <input type="text" value="15063364033" readonly="readonly" style="border:none" name="userPhone">
            </div>
            <div style="margin:10px 0" class="clearfix">
                <span class="input-header">姓名</span> <input type="text" style="width:60%" name="realName" value="null">
            </div>
            <div style="margin:10px 0" class="clearfix">
                <span class="input-header">电话</span> <input type="text" style="width:60%" name="contactPhone" value="15063364033">
            </div>
        </div>
        <div class="userinfo-changepass-section">
            <a href="edit_pwd.php">
                <div class="clearfix" style="border-bottom:1px solid #d3d3d3;padding:10px 0">
                    <span class="fl">修改密码</span>
                    <span class="fr" style="font-family: 黑体, 宋体, sans-serif;">&gt;</span>
                </div>
            </a>
            <input type="submit" value="保存">
        </div>
    </form>


</body></html>