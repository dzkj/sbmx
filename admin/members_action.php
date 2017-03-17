<?php
session_start();
include("mysql_connect.inc");
header("Content-Type: text/html;charset=utf-8");
if(empty($_SESSION['admin'])){
	echo "<script>alert('请登录!');</script>";
	echo "<script>location.href='login.html'</script>";
}
//删除会员
	if(isset($_GET['id'])){
		$id=$_GET['id'];
		$sql="delete from members where id='$id'";
		if(mysql_query($sql)){
			echo "<script>alert('删除成功!');</script>";
			echo "<script>location.href='members.php';</script>";
		}else{
			echo "<script>alert('删除失败!');</script>";
			echo "<script>location.href='members.php';</script>";
		}
	}
	
	if(isset($_POST['edit_submit'])){
		$id=$_POST['id'];
		$password=$_POST['password'];
		$sql="update members set password='$password' where id='$id'";
		if(mysql_query($sql)){
			echo "<script>alert('修改成功!');</script>";
			echo "<script>location.href='members.php';</script>";
		}else{
			echo "<script>alert('修改失败!');</script>";
			echo "<script>location.href='members.php';</script>";
		}
	}	
?>