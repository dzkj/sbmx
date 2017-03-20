<?php
session_start();
include("mysql_connect.inc");
header("Content-Type: text/html;charset=utf-8");
if(empty($_SESSION['admin'])){
	echo "<script>alert('请登录!');</script>";
	echo "<script>location.href='login.html'</script>";
}
/* php文件上传设置 */
ini_set("max_execution_time", "0");
ini_set("post_max_size", "100M");
ini_set("upload_max_filesize", "50M");
ini_set("max_file_uploads", "20");

	//删除票
	if(isset($_GET['del'])){
		$id=$_GET['id'];
		$sql="delete from banners where id='$id'";
		if(mysql_query($sql)){
			echo "<script>alert('删除成功!');</script>";
			echo "<script>location.href='banner.php';</script>";
			}else{
			echo "<script>alert('删除失败!');</script>";
			echo "<script>location.href='banner.php';</script>";
		}
	}
?>