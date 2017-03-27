<?php
session_start();
include "connect.inc";
header("content-type:text/html;charset=utf-8;");

//var_dump(json_decode($_POST['data']));
$uid = 1;

/*订单信息*/
$openid = "";
$transaction_id = "";
$buyer_id = $uid;

$true_name = $_POST['true_name'];       //取票人姓名
$true_tel = $_POST['true_phone'];       //取票人电话
$receiving_info = $_POST['pcasaddr']." ".$_POST['zipcode'];     //收货地址
$take_info = $_POST['take_info'];        //取票地址

/*生成订单号*/
$ordertime = time();
$order_id = $ordertime.rand(100,999);         //订单号
$show_title = $_POST['show_title'];       //票标题
$price_id = "";         //票价 id
$goods_name = $show_title." ".$_POST['take_info'];        //票名称
$goods_price = "";       //票价
$goods_num = "";         //购买数量


$seat_info = "";        //座位信息

$order_subtotal = "";   //票价小计
$order_amount = $_POST['order_amount'];     //票价总计
$ticket_id = $_POST['show_id'];     //票id

$payment_type = $_POST['payment_type'];     //支付方式
$shipping_type = $_POST['shipping_type'];     //配送方式
$order_status = "等待付款";      //订单状态
$order_time = date("Y-m-d H:i:s",$ordertime);       //下单时间
$payment_time = "";     //付款时间



/*注入订单*/
$data = json_decode($_POST['data']); 
for($i=0;$i<count($data);$i++){
    $temp[$i] = explode('|',$data[$i]);
    
    $tseason = $temp[$i][0];    //场次
    $tprice = $temp[$i][1];     //单价
    $tnum = $temp[$i][2];       //数量
    $tprice_id = $temp[$i][3];   //价格id
    
    $goods_price = $tprice;
    $goods_num = $tnum;
    $order_subtotal = $goods_price * $goods_num;    //票小计
    
    $price_id = $tprice_id;     //价格id
    
    $sql = "insert into orders(openid,transaction_id,buyer_id,true_name,true_tel,receiving_info,take_info,order_id,price_id,goods_name,goods_price,goods_num,seat_info,order_subtotal,order_amount,ticket_id,payment_type,shipping_type,order_status,order_time,payment_time) values('$openid','$transaction_id','$buyer_id','$true_name','$true_tel','$receiving_info','$take_info','$order_id','$price_id','$goods_name','$goods_price','$goods_num','$seat_info','$order_subtotal','$order_amount','$ticket_id','$payment_type','$shipping_type','$order_status','$order_time','$payment_time')";
    mysql_query($sql);
    if(mysql_affected_rows()>0){
        //echo 1;
        /*生成订单成功 -> 进入支付处理*/
        echo "<script>location.href='pay.php?order_id=".$order_id."';</script>";
    }else{
        //echo $sql;
        //echo "insert error (order_data_do)";
        //exit;
        echo "<script>alert('系统繁忙请稍后重试');</script>";
        echo "<script>location.href='index.php';</script>";
    }
}

//var_dump($temp);
