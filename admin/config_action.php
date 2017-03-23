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
			$tel=$_POST['tel'];
			$copyright=$_POST['copyright'];
			$records=$_POST['records'];
			$intro=$_POST['intro'];
			$content=$_POST['content'];
			$sql="update config set tel='$tel',copyright='$copyright',records='$records',intro='$intro',content='$content' where id='$id'";
			if(mysql_query($sql)){
				echo "<script>alert('编辑成功!');</script>";
				echo "<script>location.href='config.php'</script>";
			}else{
				echo "<script>alert('编辑失败!');</script>";
				echo "<script>location.href='config.php'</script>";
			}
		}else{
			$tel=$_POST['tel'];
			$copyright=$_POST['copyright'];
			$records=$_POST['records'];
			$intro=$_POST['intro'];
			$content=$_POST['content'];
			$sql="insert into config(tel,copyright,records,intro,content) values('$tel','$copyright','$records','$intro','$content')";
			$add=mysql_query($sql);
			if($add){
				echo "<script>alert('编辑成功!');</script>";
				echo "<script>location.href='config.php'</script>";
			}else{
				echo "<script>alert('编辑失败!');</script>";
				echo "<script>location.href='config.php'</script>";
			}
		}
	}
?>