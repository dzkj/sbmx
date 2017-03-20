<?php
session_start();
include_once("include/conn.inc.php");
//注册
	if(isset($_POST["register"])){
		$email=$_POST["email"];
		$phone=$_POST["phone"];
		$password=$_POST["password"];
		$sql="select * from members where email='$email'or phone='$phone'";
		$result=mysqli_query($link,$sql);
		if(mysqli_fetch_array($result)){
			echo "<meta charset='utf-8'>";
				echo "<script>";
				echo "alert('该手机号或者邮箱已被注册,请重新输入！');";
				echo "location.href='register.php'";
				echo "</script>";
		}else{
				$sql="insert into members(phone,email,password,nick_name)"."values('$phone','$email','$password','$phone')";
			if(mysqli_query($link,$sql)){
					echo "<meta charset='utf-8'>";
					echo "<script>";
					echo "alert('注册成功');";
					echo "location.href='login.php'";
					echo "</script>";
			}else{
					echo "<meta charset='utf-8'>";
					echo "<script>";
					echo "alert('注册失败');";
					echo "location.href='login.php'";
					echo "</script>";
			}
		}	
	}

	
//登入
	if(isset($_POST["login"])){
	    $username = $_POST['username'];
		$password = $_POST['password'];
		$sql="select * from members where email='$username'or phone='$username'";
		$result=mysqli_query($link,$sql);
		$user=mysqli_fetch_array($result);
		if($user){
			if($user['password']==$password){
				$_SESSION['user'] = $user;
				echo "<meta charset=\"utf-8\">";
				echo "<script>";
				echo "alert('登录成功');";
				echo "location.href='index.php';";
				echo "</script>";
			}else{
				echo "<meta charset=\"utf-8\">";
				echo "<script>";
				echo "alert('您输入的密码错误,请重新输入！');";
				echo "location.href='login.php';";
				echo "</script>";			
			}
		}else{
			echo "<meta charset=\"utf-8\">";
			echo "<script>";
			echo "alert('您输入的用户名/邮箱/手机号错误,请重新输入！');";
			echo "location.href='login.php';";
			echo "</script>";
		}	
	}
	

?>