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
		$title=$_POST['title'];
		$sql="insert into program(title) values('$title')";
		$add=mysql_query($sql);
		if($add){
			echo "<script>alert('添加成功!');</script>";
			echo "<script>location.href='program.php';</script>";
		}else{
			echo "<script>alert('添加失败!');</script>";
			echo "<script>location.href='program_add.php';</script>";
		}
	}
//修改票价	
	if(isset($_POST['edit_submit'])){
		$id=$_POST['id'];
		$title=$_POST['title'];
		$sql="update program set title='$title' where id='$id'";
		if(mysql_query($sql)){
			echo "<script>alert('修改成功!');</script>";
			echo "<script>location.href='program.php';</script>";
		}else{
			echo "<script>alert('修改失败!');</script>";
			echo "<script>location.href='program_edit.php?id=$id';</script>";
		}
	}
//删除票价
	if(isset($_GET['id'])){
		$id=$_GET['id'];
		$sql="delete from program where id='$id'";
		if(mysql_query($sql)){
			echo "<script>alert('删除成功!');</script>";
			echo "<script>location.href='program.php';</script>";
		}else{
			echo "<script>alert('删除失败!');</script>";
			echo "<script>location.href='program.php';</script>";
		}
	}
?>