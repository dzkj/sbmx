<?php
session_start();
include("mysql_connect.inc");
header("Content-Type: text/html;charset=utf-8");
if(empty($_SESSION['admin'])){
	echo "<script>alert('请登录!');</script>";
	echo "<script>location.href='login.html'</script>";
}
if(isset($_POST['csubmit'])){
	$did=$_POST['did'];
	$creres=mysql_query("select * from orders where order_id='$did'");
	while($crerow=mysql_fetch_array($creres)){
		mysql_query("update orders set status='1' where order_id='$did'");
	}
	if(mysql_affected_rows()>0){
		echo "<script>alert('发货成功!');</script>";
		echo "<script>history.back();</script>";
	}else{
		echo "<script>alert('系统繁忙,请稍后再试!');</script>";
		echo "<script>history.back();</script>";
	}
}else if(isset($_POST['juesubmit'])){
	$did=$_POST['did'];
	$subtotal=0;
	$creres=mysql_query("select * from orders where order_id='$did'");
	while($crerow=mysql_fetch_array($creres)){
		$subtotal+=$crerow['subtotal'];
		mysql_query("update orders set status='2' where order_id='$did'");
		$mid=$crerow['mem_id'];
	}
	if(mysql_affected_rows()>0){
		$mres=mysql_query("select * from member where id='$mid'");
		$mrow=mysql_fetch_array($mres);
		$ye=$mrow['credits']+$subtotal;
		$huizhi="订单号为 ".$did." 的订单已关闭";
		mysql_query("update member set credits='$ye' where id='$mid'");
		
		
		$tsql="insert into memcredits(credits,status,order_id,backinfo,mid,actionname,redstatus) values('$subtotal',-1,'$did','$huizhi','$mid','退单\退款','0')";
		$tadd=mysql_query($tsql);
		if($tadd){
			$is_ok=false;
			$tkres=mysql_query("select a.goods_id g_id,a.buy_num or_buy_num,b.invent g_invent,b.out_num g_out_num from orders a,goods b where a.goods_id=b.id and a.order_id='$did'");
			while($tkrow=mysql_fetch_array($tkres)){
				$gid=$tkrow['g_id'];
				$g_invent=$tkrow['g_invent']+$tkrow['or_buy_num'];
				$g_out_num=$tkrow['g_out_num']-$tkrow['or_buy_num'];
				mysql_query("update goods set invent='$g_invent',out_num='$g_out_num' where id='$gid'");
				if(mysql_affected_rows()>0){
					$is_ok=true;
				}else{
					echo "<script>alert('系统繁忙,请稍后再试!');</script>";
					echo "<script>history.back();</script>";
				}
			}
			if($is_ok){	
				echo "<script>alert('订单已关闭!');</script>";
				echo "<script>history.back();</script>";
			}else{
				echo "<script>alert('库存修改失败!');</script>";
				echo "<script>history.back();</script>";
			}
		}else{
			echo "<script>alert('系统繁忙,请稍后再试!');</script>";
			echo "<script>history.back();</script>";
		}
	}else{
		echo "<script>alert('系统繁忙,请稍后再试!');</script>";
		echo "<script>history.back();</script>";
	}
}else{
	echo "<script>history.back();</script>";
}
?>