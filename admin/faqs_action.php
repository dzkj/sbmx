<?php
session_start();
include("mysql_connect.inc");
header("Content-Type: text/html;charset=utf-8");
if(empty($_SESSION['admin'])){
	echo "<script>alert('请登录!');</script>";
	echo "<script>location.href='login.html'</script>";
}
//修改问题	
	if(isset($_POST['pub_submit'])){
		$id=$_POST['id'];
		$ask_reply=$_POST['content'];
		$ask_replydate= date("y-m-d h:i:s",time());
		$state=1;
		$sql="update faqs set ask_reply='$ask_reply',state='$state',ask_replydate='$ask_replydate' where id='$id'";
		echo $sql;
		if(mysql_query($sql)){
			echo "<script>alert('回复成功!');</script>";
			echo "<script>location.href='faqs.php';</script>";
		}else{
			echo "<script>alert('回复失败!');</script>";
			echo "<script>location.href='faqs.php';</script>";
		}
	}
//删除问题
	if(isset($_GET['del'])){
		$id=$_GET['id'];
		$sql="delete from faqs where id='$id'";
		if(mysql_query($sql)){
			echo "<script>alert('删除成功!');</script>";
			echo "<script>location.href='faqs.php';</script>";
		}else{
			echo "<script>alert('删除失败!');</script>";
			echo "<script>location.href='faqs.php';</script>";
		}
	}
?>