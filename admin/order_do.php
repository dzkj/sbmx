<?php
session_start();
include("mysql_connect.inc");
header("Content-Type: text/html;charset=utf-8");
if(empty($_SESSION['admin'])){
	echo "<script>alert('请登录!');</script>";
	echo "<script>location.href='login.html'</script>";
}
	if(isset($_GET['del'])){
		$id=$_GET['id'];
		$sql="delete from orders where id='$id'";
		if(mysql_query($sql)){
			echo "<script>alert('删除成功!');</script>";
			echo "<script>location.href='order.php';</script>";
		}else{
			echo "<script>alert('删除失败!');</script>";
			echo "<script>location.href='order.php';</script>";
		}
	}
?>