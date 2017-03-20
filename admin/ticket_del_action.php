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
		$sql="delete from shows where id='$id'";
		if(mysql_query($sql)){
			$sql1="delete from seasons where show_id='$id'";
			if(mysql_query($sql1)){		
			$sql2="delete from prices where show_id='$id'";
				if(mysql_query($sql2)){
					echo "<script>alert('删除成功!');</script>";
					echo "<script>location.href='index.php';</script>";
				}
			}
		}else{
			echo "<script>alert('删除失败!');</script>";
			echo "<script>location.href='index.php';</script>";
		}
	}
	//修改票状态
	if(isset($_GET['show_stauts'])){
		$id=$_GET['id'];
		if($_GET['show_stauts']==1){
			$show_stauts="待售票";
		}else if($_GET['show_stauts']==2){
			$show_stauts="售票中";
		}else if($_GET['show_stauts']==3){
			$show_stauts="已下架";
		}
		$sql="update shows set show_stauts='$show_stauts' where id='$id' ";
			$res=mysql_query($sql);
			if($res){
				echo "<script>alert('修改售票状态成功!');</script>";
				echo "<script>location.href='index.php';</script>";
			}else{	
				echo "<script>alert('修改售票状态失败!');</script>";
				echo "<script>location.href='index.php';</script>";
			}
	}

?>