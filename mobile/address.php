<?php
session_start();
include "connect.inc";
header("content-type:text/html;charset=utf-8;");
?>
<html><head>
        <title>地址管理</title>
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
            <span>地址管理</span>
        </div>
        <div style="height:45px"></div>
        <div id="main">
            
            
            <?php
            $addrsql = "select * from address order by id";
            $addrres = mysql_query($addrsql);
            while($addrrow = mysql_fetch_array($addrres)){
            ?>
            <a href="edit_address.php?addr_id=<?php echo $addrrow['id'];?>">
                <div class="add-item">
                    <h3><?php echo $addrrow['true_name'];?>   &nbsp;&nbsp;&nbsp;   <?php echo $addrrow['true_phone'];?>   &nbsp;&nbsp;&nbsp;   
                        <?php if($addrrow['default_stauts']==1){echo "<span style='color:red;'>默认地址</span>";}?></h3>
                    <!--<h3><?php //echo $addrrow['true_name'];?>   &nbsp;&nbsp;&nbsp;   <?php //echo $addrrow['true_phone'];?></h3>-->
                    <h4>
                        <?php echo $addrrow['prov']." ".$addrrow['city']." ".$addrrow['area']." ".$addrrow['street'];?>
                    </h4>
                    <span style="font-family: 黑体, 宋体, sans-serif;" class="right-arrow">&gt;</span>
                </div>
            </a>
            <?php
            }
            ?>
            <a href="add_address.php"><div class="bn">添加新地址</div></a>
        </div>


    </body></html>