<?php
session_start();
include("mysql_connect.inc");
header("Content-Type: text/html;charset=utf-8");
if(empty($_SESSION['admin'])){
	echo "<script>alert('请登录!');</script>";
	echo "<script>location.href='login.html'</script>";
}
//添加场次
	if(isset($_POST['pub_submit'])){
		$show_id=$_POST['show_id'];
		$season_week=$_POST['season_week'];
		$season_date=$_POST['season_date'];
		$season_time=$_POST['season_time'];
		$sql="insert into seasons(show_id,season_week,season_time,season_date) values('$show_id','$season_week','$season_time','$season_date')";
		$add=mysql_query($sql);
		if($add){
			echo "<script>alert('添加成功!');</script>";
			echo "<script>location.href='seasons.php?show_id=$show_id';</script>";
		}else{
			echo "<script>alert('添加失败!');</script>";
			echo "<script>location.href='seasons.php?show_id=$show_id';</script>";
		}
	}
//修改场次	
	if(isset($_POST['edit_submit'])){
		$id=$_POST['id'];
		$show_id=$_POST['show_id'];
		$season_week=$_POST['season_week'];
		$season_date=$_POST['season_date'];
		$season_time=$_POST['season_time'];
		$sql="update seasons set season_week='$season_week',season_time='$season_time',season_date='$season_date' where id='$id'";
		if(mysql_query($sql)){
			echo "<script>alert('修改成功!');</script>";
			echo "<script>location.href='seasons.php?show_id=$show_id';</script>";
		}else{
			echo "<script>alert('修改失败!');</script>";
			echo "<script>location.href='seasons.php?show_id=$show_id';</script>";
		}

	}
//删除场次
	if(isset($_GET['id'])){
		$id=$_GET['id'];
		$show_id=$_GET['id'];
		$sql="delete from seasons where id='$id'";
		if(mysql_query($sql)){
			$sql="delete from prices where season_id='$id'";
			if(mysql_query($sql)){
				echo "<script>alert('删除成功!');</script>";
				echo "<script>location.href='seasons.php?show_id=$show_id';</script>";
			}
		}else{
			echo "<script>alert('删除失败!');</script>";
			echo "<script>location.href='seasons.php?show_id=$show_id';</script>";
		}
	}
?>