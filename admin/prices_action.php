<?php
session_start();
include("mysql_connect.inc");
header("Content-Type: text/html;charset=utf-8");
if(empty($_SESSION['admin'])){
	echo "<script>alert('请登录!');</script>";
	echo "<script>location.href='login.html'</script>";
}
//添加票价
	if(isset($_POST['pub_submit'])){
		$show_id=$_POST['show_id'];
		$season_id=$_POST['season_id'];
		$price=$_POST['price'];
		$num=$_POST['num'];
		$state=$_POST['state'];
		$sql="insert into prices(show_id,price,num,season_id,state) values('$show_id','$price','$num','$season_id','$state')";
		$add=mysql_query($sql);
		if($add){
			echo "<script>alert('添加成功!');</script>";
			echo "<script>location.href='prices.php?show_id=$show_id & id=$season_id';</script>";
		}else{
			echo "<script>alert('添加失败!');</script>";
			echo "<script>location.href='prices.php?show_id=$show_id & id=$season_id';</script>";
		}
	}
//修改票价	
	if(isset($_POST['edit_submit'])){
		$id=$_POST['id'];
		$show_id=$_POST['show_id'];
		$season_id=$_POST['season_id'];
		$price=$_POST['price'];
		$num=$_POST['num'];
		$state=$_POST['state'];
		$sql="update prices set price='$price',num='$num',state='$state' where id='$id'";
		if(mysql_query($sql)){
			echo "<script>alert('修改成功!');</script>";
			echo "<script>location.href='prices.php?show_id=$show_id & id=$season_id';</script>";
		}else{
			echo "<script>alert('修改失败!');</script>";
			echo "<script>location.href='prices.php?show_id=$show_id & id=$season_id';</script>";
		}
	}
//删除票价
	if(isset($_GET['id'])){
		$id=$_GET['id'];
		$show_id=$_GET['id'];
		$season_id=$_GET['season_id'];
		$sql="delete from prices where id='$id'";
		if(mysql_query($sql)){
			echo "<script>alert('删除成功!');</script>";
			echo "<script>location.href='prices.php?show_id=$show_id & id=$season_id';</script>";
		}else{
			echo "<script>alert('删除失败!');</script>";
			echo "<script>location.href='prices.php?show_id=$show_id & id=$season_id';</script>";
		}
	}
?>