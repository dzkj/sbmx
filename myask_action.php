<?php
session_start();
include_once("include/conn.inc.php");	
//添加问题
	if(isset($_POST["myask"])){
		$ask_quest = $_POST['info'];
		$show_id = $_POST['show_id'];
		$vcode = $_POST['vcode'];
		$ask_id=$_SESSION['user']['id'];
		$ask_name=$_SESSION['user']['nick_name'];
		if($vcode==$_SESSION['trueCode']){
			$sql="insert into faqs(ask_id,ask_quest,ask_name,show_id)"."values('$ask_id','$ask_quest','$ask_name','$show_id')";
			if(mysqli_query($link,$sql)){
				echo "<meta charset='utf-8'>";
				echo "<script>";
				echo "alert('提交成功');";
				echo "location.href='sell_ticket.php'";
				echo "</script>";
			}else{
				echo "<meta charset='utf-8'>";
				echo "<script>";
				echo "alert('提交失败');";
				echo "location.href='sell_ticket.php'";
				echo "</script>";
			}	
		}else{
				echo "<meta charset='utf-8'>";
				echo "<script>";
				echo "alert('验证码错误！请重新输入！');";
				echo "location.href='sell_ticket.php'";
				echo "</script>";	
		}
	}
	if(isset($_POST["question"])){
		$ask_quest = $_POST['info'];
		$vcode = $_POST['vcode'];
		$ask_id=$_SESSION['user']['id'];
		$ask_name=$_SESSION['user']['nick_name'];
		if($vcode==$_SESSION['trueCode']){
			$sql="insert into faqs(ask_id,ask_quest,ask_name)"."values('$ask_id','$ask_quest','$ask_name')";
			if(mysqli_query($link,$sql)){
				echo "<meta charset='utf-8'>";
				echo "<script>";
				echo "alert('提交成功');";
				echo "location.href='question.php'";
				echo "</script>";
			}else{
				echo "<meta charset='utf-8'>";
				echo "<script>";
				echo "alert('提交失败');";
				echo "location.href='question.php'";
				echo "</script>";
			}	
		}else{
				echo "<meta charset='utf-8'>";
				echo "<script>";
				echo "alert('验证码错误！请重新输入！');";
				echo "location.href='question.php'";
				echo "</script>";	
		}
	}
?>