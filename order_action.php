<?php
session_start();
include_once("include/session.inc.php");
include_once("include/conn.inc.php");	
	if(isset($_POST["button"])){
		if(isset($_SESSION["order"])){
			unset($_SESSION["order"]);
		}
		$_SESSION["order"]=$_POST;
		header("location:order.php");
	}
//添加收货地址
	if(isset($_POST["addorder"])){
		$show_id = $_POST['id'];
		$mem_id=$_SESSION['user']['id'];
		$object = json_decode($_POST['address']);
		foreach($object as $arr){
			$address=explode("|",$arr);
		}
		$data=json_decode($_POST['data']);
		foreach($data as $arr){
			$array[]=explode("|",$arr);
		}
		if($address[7]==1){
			//配送方式
			$shipping_type="快递配送";
			//收货人名称
			$receiving_name=$address[4];
			//收货电话
			$receiving_tel=$address[5];
			$take_info="";
		}else{
			$shipping_type="上门自取";
			//收货人名称
			$receiving_name=$address[8];
			//收货电话
			$receiving_tel=$address[9];
			//取货地址
			$take_info=$_POST['show_venue'];
		}
		//购买人id
		$buyer_id=$_SESSION["user"]["id"];
		//收货地址
		$receiving_info=$address[0]."".$address[1]."".$address[2]."".$address[3]."".$address[6];
		//订单号
		$order_id=time().rand(100,999);
		//商品名称
		$goods_name=$_POST["show_title"];
		//票id
		$ticket_id=$_POST["id"];
		//支付方式
		$payment_type="支付宝";
		//订单状态
		$order_status="等待付款";
		//下单时间
		$order_time=date('Y-m-d H:i:s',time());
		//总价
		$order_amount=$address[10];
		foreach($array as $row){
			//单价
			$goods_price=$row[1];
			//数量
			$goods_num=$row[2];
			//小计
			$order_subtotal=$row[3];
			//价格id
			$price_id=$row[4];
			$sql="insert into orders(buyer_id,receiving_info,order_id,goods_name,ticket_id,payment_type,order_status,order_time, goods_price,goods_num,order_subtotal,shipping_type,receiving_name,receiving_tel,take_info,price_id,order_amount)"."values('$buyer_id','$receiving_info','$order_id','$goods_name','$ticket_id','$payment_type','$order_status','$order_time','$goods_price','$goods_num','$order_subtotal','$shipping_type','$receiving_name','$receiving_tel','$take_info','$price_id','$order_amount')";
			if(mysqli_query($link,$sql)){
				$sql_price="select num from prices where id=$price_id";
				$result=mysqli_query($link,$sql_price);
				$price=mysqli_fetch_array($result);
				$num=$price['num'];
				if($num==0){
					$num==0;
				}else{
					$num=$num-1;
				}
				$price_sql="update prices set num=$num where id=$price_id";
				mysqli_query($link,$price_sql);
			}
		}
	}
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
?>