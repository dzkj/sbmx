<?php
session_start();
include("mysql_connect.inc");
header("Content-Type: text/html;charset=utf-8");
if(empty($_SESSION['admin'])){
	echo "<script>alert('请登录!');</script>";
	echo "<script>location.href='login.html'</script>";
}

if(isset($_POST['pub_submit'])){
	$ca_id=$_POST['cid'];
	$name=$_POST['name'];
	$intro=$_POST['intro'];
	if($intro==""){
		$intro="暂无简介";
	}
	
	$gsql="insert into category(name,intro,ca_id) values('$name','$intro','$ca_id')";
	//echo $gsql;
	$gadd=mysql_query($gsql);
	if($gadd){
		echo "<script>alert('添加成功!');</script>";
		echo "<script>history.back();</script>";
	}else{
		echo "<script>alert('系统繁忙,请稍后再试!');</script>";
		echo "<script>history.back();</script>";
	}

}else{
	echo "<script>history.back();</script>";
}

?>