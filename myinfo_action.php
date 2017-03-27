<?php
session_start();
include_once("include/conn.inc.php");	
//个人信息
	if(isset($_POST["myinfo"])){
		$nick_name = $_POST['nick_name'];
		$true_name = $_POST['true_name'];
		$sex = $_POST['sex'];
	    $birthday= $_POST['birthday'];
		$marr_status = $_POST['marr_status'];
		$ident_num = $_POST['ident_num'];
		$chil_status = $_POST['chil_status'];
		$city_location = $_POST['city_location'];
		$engage_work = $_POST['engage_work'];
		$edu_level = $_POST['edu_level'];
		$Income_level = $_POST['Income_level'];
		$position_work= $_POST['position_work'];
		$id=$_SESSION['user']['id'];
		$sql="update members set nick_name='$nick_name',true_name='$true_name',sex='$sex',birthday='$birthday',marr_status='$marr_status',ident_num='$ident_num',chil_status='$chil_status',city_location='$city_location',engage_work='$engage_work',edu_level='$edu_level',Income_level='$Income_level',position_work='$position_work' where id=$id"; 
		if(mysqli_query($link,$sql)){
			echo "<meta charset='utf-8'>";
			echo "<script>";
			echo "alert('保存成功');";
			echo "location.href='myinfo.php'";
			echo "</script>";
		}else{
			echo "<meta charset='utf-8'>";
			echo "<script>";
			echo "alert('保存失败');";
			echo "location.href='myinfo.php'";
			echo "</script>";
		}	
	}
	
		
	if(isset($_POST['password'])){
		$id=$_SESSION['user']['id'];
		$pwd=$_POST['pwd'];
		$password=$_POST['password'];
		$sql="select * from  members where id='$id'";
		$result=mysqli_query($link,$sql);
		$row=mysqli_fetch_array($result);
		if($row['password']!=$pwd){
			echo "<script>alert('原密码输入错误!请重新输入!');</script>";
			echo "<script>location.href='password.php';</script>";
		}else{
			$msql="update members set password='$password' where id='$id'";
			if(mysqli_query($link,$msql)){
				echo "<script>alert('修改成功!');</script>";
				echo "<script>location.href='password.php';</script>";
			}else{
				echo "<script>alert('修改失败!');</script>";
				echo "<script>location.href='password.php';</script>";
			}
		}
	}	
	

?>