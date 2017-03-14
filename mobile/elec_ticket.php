<?php
session_start();
include "connect.inc";
header("content-type:text/html;charset=utf-8;");
?>
<html><head>
        <title>我的电子票</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
        <link href="css/mobile.css" rel="stylesheet">
        <link href="css/reset.css" rel="stylesheet">
        <script language="javascript" type="text/javascript" src="/Scripts/jquery.min.js"></script>
        <script language="javascript" type="text/javascript" src="/Scripts/my.js"></script>
    </head>
    <body style="background-color:white;">
        <div id="header" style="position:fixed">
            <a href="user.php"><span class="return"></span></a>
            <span>我的电子票</span>
        </div>
        <div style="height:45px"></div>
        <div id="main">
            
            
            <?php
//            $addrsql = "select * from address order by id";
//            $addrres = mysql_query($addrsql);
//            while($addrrow = mysql_fetch_array($addrres)){
            ?>
            <a href="/Account/UpdateAddress?id=29194 &amp;type=更改地址">
                <div class="add-item">
                    <h3>你好   &nbsp;&nbsp;&nbsp;   15063364033</h3>
                    <h4>
                        山东省 济南市  章丘市 山东省济南市
                    </h4>
                    <span style="font-family: 黑体, 宋体, sans-serif;" class="right-arrow">&gt;</span>
                </div>
            </a>
            <?php
//            }
            ?>
            
            
            <!--<a href="add_address.php"><div class="bn">添加新地址</div></a>-->
        </div>


    </body></html>