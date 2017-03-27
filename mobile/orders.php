<?php
session_start();
include "connect.inc";
header("content-type:text/html;charset=utf-8;");
?>
<html><head>
        <title>我的订单</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
        <link href="css/mobile.css" rel="stylesheet">
        <link href="css/reset.css" rel="stylesheet">
        <script language="javascript" type="text/javascript" src="/Scripts/jquery.min.js"></script>
        <script language="javascript" type="text/javascript" src="/Scripts/my.js"></script>
        <script src="/Scripts/jquery.validate.js"></script>
    </head>
    <body>
        <div id="header" style="position:fixed">
            <a href="user.php"><span class="return"></span></a>
            <span>我的订单</span>
        </div>
        <div style="height:45px"></div>
        <div class="main">
            <div>
                <ul class="orders-tab clearfix" style=" margin-bottom:10px;">
                    <li class="orders-tab-actived" id="all-li"><a href="orders.php">全部</a></li>
                    <li id="paid-li"><a href="orders_over.php">已付款</a></li>
                    <li id="tbpay-li"><a href="orders_wait.php">等待付款</a></li>
                </ul>
            </div>
            <div style="height:35px"></div>
            <div class="orders" id="orders-tbpay">
                
                <?php
                $ordersql = "select * from orders group by order_id order by order_time desc";
                $orderres = mysql_query($ordersql);
                while($orderrow = mysql_fetch_array($orderres)){
                ?>
                <div class="one-order">
                    <div class="order-item-section">
                        <h3>订单号：<?php echo $orderrow['order_id'];?><span class="fr not-used"><?php if($orderrow['order_status']=='已付款'){echo '已付款';}else if($orderrow['order_status']=='等待付款'){echo '等待付款';}else{echo '已取消';}?></span></h3>
                        <h4>下单时间  <?php echo $orderrow['order_time'];?></h4>
                    </div>

                    <a href="/Account/OrderDetails?oid=23881&amp;t=1">

                        <?php
                        $show_id = $orderrow['ticket_id'];
                        $ticketsql = "select * from shows where id='$show_id'";
                        $res = mysql_query($ticketsql);
                        while($row = mysql_fetch_array($res)){
                        ?>
                            <div class="od-show clearfix">
                                <img src="<?php echo $row['show_wx_imgs'];?>" class="fl od-show-pic">
                                <p>
                                    <?php echo $row['show_title'];?> <?php echo $row['show_city'];?>
                                </p>
                                <p>时间：<?php echo $row['show_begin'];?></p>

                                <p><?php echo $row['show_venue'];?>：<?php echo $orderrow['seat_info'];?></p>
                            </div>
                        <?php
                        }
                        ?>
                        
                    </a>
                    <div class="order-item-section clearfix">

                        <?php
                        $numsql = "select * from orders where order_status='等待付款'";
                        $numres = mysql_query($numsql);
                        $numsum = 0;
                        while($numrow = mysql_fetch_array($numres)){
                            $numsum += $numrow['goods_num'];
                        }
                        ?>
                        <h4 class="fr">共 <?php echo $numsum;?> 张票  合计：<span style="color:#fe5b78;font-size:16px">￥ <?php echo $orderrow['order_amount'];?></span> </h4>
                    </div>
                </div>
                <?php
                }
                ?>


            </div>
            <div class="orders" id="orders-paid">
            </div>
            <div class="orders" id="orders-cancel">

            </div>

            <div style="height:40px"></div>
        </div>

        <input value="1" style="display:none" id="TypeId">
        <script type="text/javascript">
            $(function() {
                if ($("#TypeId").val() == 2) {
                    $('#paid-li').trigger("click");
                    $('#orders-paid').show();
                    $('#orders-tbpay').hide();
                    $('#orders-cancel').hide();
                }
                if ($("#TypeId").val() == 3) {
                    $('#tbpay-li').trigger("click");
                    $('#orders-paid').hide();
                    $('#orders-tbpay').show();
                    $('#orders-cancel').hide();
                }
            });
            $(".orders-tab li")
                    .click(function() {
                        $(this).addClass("orders-tab-actived");
                        $(this).siblings().removeClass("orders-tab-actived");
                    })
            var current = "1";
            var click1 = false;
            var click2 = false;
            $("#all-li")
                    .click(function() {
                        $("#orders-tbpay").show();
                        $("#orders-paid").show();
                        $("#orders-cancel").show();
                        current = "1";
                    })
            $("#paid-li")
                    .click(function() {
                        $("#orders-tbpay").hide();
                        $("#orders-paid").show();
                        $("#orders-cancel").hide();
                        current = "2";
                        if (click1 == false) {
                            $.ajax({
                                url: "/Account/OrderManage?t=" + current +
                                        "&view=OrderManage1" +
                                        "&i=1&s=3&ot=2",
                                async: false,
                                type: 'GET',
                                success: function(data) {
                                    $("#orders-paid").html(data);
                                }
                            });
                            click1 = true;
                        }
                    })
            $("#tbpay-li")
                    .click(function() {
                        $("#orders-tbpay").hide();
                        $("#orders-paid").hide();
                        $("#orders-cancel").show();
                        current = "3";
                        if (click2 == false) {
                            $.ajax({
                                url: "/Account/OrderManage?t=" + current +
                                        "&view=OrderManage1" +
                                        "&i=1&s=3&ot=3",
                                async: false,
                                type: 'GET',
                                success: function(data) {
                                    $("#orders-cancel").html(data);
                                }
                            });
                            // .html(data)
                            click2 = true;
                        }
                    })
            var main = $("#order-list");
            var loading = false;
            var allindex = 1;
            var payindex = 1;
            var cancelindex = 1;
            var pagesize = 3;
            $(function() {
                if (loading == false) {
                    loading = true;
                    //alert(loading);
                    var wh = $(window).height();
                    var st = $(document).scrollTop();
                    $(window)
                            .scroll(function() {
                                // 然后判断窗口的滚动条是否接近页面底部，这里的20可以自定义
                                //alert($(window).height());
                                //alert($(document).height());
                                //alert($(document).scrollTop());
                                if ($(document).scrollTop() >= $(document).height() - $(window).height()) {
                                    var index = 1;
                                    var ot = 1;
                                    if (current == "1") {
                                        allindex += 1;
                                        index = allindex;
                                        main = $("#orders-tbpay");
                                    }
                                    if (current == "2") {
                                        payindex += 1;
                                        index = payindex;
                                        main = $("#orders-paid");
                                    }
                                    if (current == "3") {
                                        cancelindex += 1;
                                        index = cancelindex;
                                        main = $("#orders-cancel");
                                    }
                                    ot = current;
                                    var dht = $(document).height();
                                    $.ajax({
                                        url: "/Account/OrderManage?t=" + 1 + "&view=OrderManage1" + "&i=" + index + "&s=3&ot=" + ot,
                                        async: false,
                                        type: 'GET',
                                        success: function(data) {
                                            if (data == null) {

                                            }
                                            else {
                                                main.append(data);
                                                loading = false;
                                            }
                                        }
                                    });
                                }
                            });
                }
            });

        </script>


    </body></html>