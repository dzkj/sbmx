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
	
	$sql="update category set name='$name',intro='$intro' where id='$ca_id'";
	mysql_query($sql);
	if(mysql_affected_rows()>=0){
		echo "<script>alert('修改成功!');</script>";
		echo "<script>history.back();</script>";
	}else{
		echo "<script>alert('系统繁忙,请稍后再试!');</script>";
		echo "<script>history.back();</script>";
	}

}else{
	echo "<script>history.back();</script>";
}

?>