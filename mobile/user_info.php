<?php
session_start();
include "connect.inc";
header("content-type:text/html;charset=utf-8;");

//if(isset($_SESSION['member'])){
//    $id = $_SESSION['member']['id'];
    $infosql = "select * from members where id='1'";
    $infores = mysql_query($infosql);
    $inforow = mysql_fetch_array($infores);
//}else{
//    echo "<script>location.href='index.php';</script>";
//}
?>
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
        <a href="user.php"><span class="return"></span></a>
        <span>个人信息</span>
    </div>
    <div style="height:45px"></div>
    <form id="form1" action="info_do.php" method="post">
        <div class="userinfo-section">
            <div style="margin:10px 0" class="clearfix">
                <span class="input-header">账号</span> <input type="text" value="<?php echo $inforow['phone'];?>" readonly="readonly" style="border:none">
            </div>
            <div style="margin:10px 0" class="clearfix">
                <span class="input-header">姓名</span> <input type="text" style="width:60%" name="true_name" value="<?php echo $inforow['true_name'];?>">
            </div>
            <div style="margin:10px 0" class="clearfix">
                <span class="input-header">电话</span> <input type="text" style="width:60%" name="phone" value="<?php echo $inforow['phone'];?>">
            </div>
        </div>
        <div class="userinfo-changepass-section">
            <a href="edit_pwd.php">
                <div class="clearfix" style="border-bottom:1px solid #d3d3d3;padding:10px 0">
                    <span class="fl">修改密码</span>
                    <span class="fr" style="font-family: 黑体, 宋体, sans-serif;">&gt;</span>
                </div>
            </a>
            <input type="hidden" value="<?php echo $id;?>" name="mid"/>
            <input type="submit" name="infosubmit" value="保存">
        </div>
    </form>


</body></html>