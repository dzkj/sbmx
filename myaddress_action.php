<?php
session_start();
include_once("include/conn.inc.php");	
//添加收货地址
	if(isset($_POST["myaddress"])){
		$true_name = $_POST['true_name'];
		$province = $_POST['province'];
		$city = $_POST['city'];
	    $district= $_POST['district'];
		$street = $_POST['street'];
		$zipcode = $_POST['zipcode'];
		$true_phone = $_POST['true_phone'];
		$email = $_POST['email'];
		if(isset($_POST['default_stauts'])){
		$default_stauts = $_POST['default_stauts'];
		}else{
		$default_stauts=0;	
		}
		$mem_id=$_SESSION['user']['id']=1;
		$sql="insert into address(true_name,street,zipcode,true_phone,email,default_stauts,mem_id,prov,city,area )"."values('$true_name','$street','$zipcode','$true_phone','$email','$default_stauts','$mem_id','$province','$city','$district')";
		if(mysqli_query($link,$sql)){
			echo "<meta charset='utf-8'>";
			echo "<script>";
			echo "alert('保存成功');";
			echo "location.href='myaddress.php'";
			echo "</script>";
		}else{
			echo "<meta charset='utf-8'>";
			echo "<script>";
			echo "alert('保存失败');";
			echo "location.href='myaddress.php'";
			echo "</script>";
		}	
	}
//修改收货地址
	if(isset($_POST["myaddress_edit"])){
		$true_name = $_POST['true_name'];
		$province = $_POST['province'];
		$city = $_POST['city'];
	    $district= $_POST['district'];
		$street = $_POST['street'];
		$zipcode = $_POST['zipcode'];
		$true_phone = $_POST['true_phone'];
		$email = $_POST['email'];
		if(isset($_POST['default_stauts'])){
			$default_stauts = $_POST['default_stauts'];
		}else{
			$default_stauts=0;	
		}
		$id=$_POST['id'];
		$sql="update address set true_name='$true_name',street='$street',zipcode='$zipcode',true_phone='$true_phone',email='$email',default_stauts='$default_stauts',prov='$province',city='$city',area='$district' where id=$id"; 
		if(mysqli_query($link,$sql)){
			echo "<meta charset='utf-8'>";
			echo "<script>";
			echo "alert('保存成功');";
			echo "location.href='myaddress.php'";
			echo "</script>";
		}else{
			echo "<meta charset='utf-8'>";
			echo "<script>";
			echo "alert('保存失败');";
			echo "location.href='myaddress_edit.php'";
			echo "</script>";
		}	
	}
	//删除收货地址
	if(isset($_GET["myaddress_del"])){
		$id=$_GET["id"];
		$sql="delete from address where id=$id";
		if(mysqli_query($link,$sql)){
			echo "<meta charset='utf-8'>";
			echo "<script>";
			echo "alert('删除成功');";
			echo "location.href='myaddress.php'";
			echo "</script>";
		}else{
			echo "<meta charset='utf-8'>";
			echo "<script>";
			echo "alert('删除失败');";
			echo "location.href='myaddress_edit.php'";
			echo "</script>";
		}
	}
?>