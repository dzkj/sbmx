<?php
session_start();
include("mysql_connect.inc");
header("Content-Type: text/html;charset=utf-8");

if(empty($_SESSION['admin'])){
	echo "<script>alert('请登录!');</script>";
	echo "<script>location.href='login.html'</script>";
}
if(isset($_GET['gid'])){
	$gid=$_GET['gid'];
	$sql="delete from goods where id='$gid'";
	mysql_query($sql);
	if(mysql_affected_rows()>0){
		//echo "<script>alert('删除成功!');</script>";
		echo "<script>history.back();</script>";
	}else{
		echo "<script>alert('无法删除，此商品已加入购物车');</script>";
		echo "<script>history.back();</script>";
	}
}
?>