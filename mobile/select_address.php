<?php
//session_start();
include "connect.inc";
//header("content-type:text/html;charset=utf-8;");
?>
<html>
    <head>
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
            <a href="javascript:$('#select_addr').css('display','none');"><span class="return"></span></a>
            <span>地址管理</span>
        </div>
        <div style="height:45px"></div>
        <div id="main">
            <?php
            $addrsql = "select * from address order by id";
            $addrres = mysql_query($addrsql);
            while($addrrow = mysql_fetch_array($addrres)){
            ?>
            <a href="javascript:void(0);" onclick="change_defaultaddr(<?php echo $addrrow['id'];?>)">
                <div class="add-item">
                    <h3><?php echo $addrrow['true_name'];?>   &nbsp;&nbsp;&nbsp;   <?php echo $addrrow['true_phone'];?>   &nbsp;&nbsp;&nbsp;   
                        <?php if($addrrow['default_stauts']==1){echo "<span style='color:red;'>默认地址</span>";}?></h3>
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
        <script>
            function change_defaultaddr(aid){
                $.post("change_defaultaddr.php",{"aid":aid},
                    function(data){
                        $('#select_addr').css('display','none');
                        var data = JSON.parse(data);
                        var html = '<p style="width: 82%;color: #999;margin: auto;" id="address_content">  送票地址: <span>'+data.prov+data.city+data.area+data.street+'</span><br><br>联系电话: <span>'+data.true_phone+'</span><br><br>邮政编码: <span>'+data.zipcode+'</span><br><br>收货人: <span>'+data.true_name+'</span></p>';
                        $("#address_content").remove();
                        $("#addr_content").append(html);
                    }
                );
            }
        </script>


    </body>
</html>