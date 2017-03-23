<?php
session_start();
include("mysql_connect.inc");
header("Content-Type: text/html;charset=utf-8");
if(empty($_SESSION['admin'])){
	echo "<script>alert('请登录!');</script>";
	echo "<script>location.href='login.html'</script>";
}
//修改购票说明	
	if(isset($_POST['edit_submit'])){
		if($_POST['id']!=""){
			$id=$_POST['id'];
			$state=$_POST['content'];
			$sql="update description set state='$state' where id='$id'";
			if(mysql_query($sql)){
				echo "<script>alert('修改成功!');</script>";
				echo "<script>location.href='explain.php'</script>";
			}else{
				echo "<script>alert('修改失败!');</script>";
				echo "<script>location.href='explain.php'</script>";
			}
		}else{
			$state=$_POST['content'];
			$sql="insert into description(state) values('$state')";
			$add=mysql_query($sql);
			if($add){
				echo "<script>alert('添加成功!');</script>";
				echo "<script>location.href='explain.php'</script>";
			}else{
				echo "<script>alert('添加失败!');</script>";
				echo "<script>location.href='explain.php'</script>";
			}
		}
	}
?>