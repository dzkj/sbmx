<?php
	session_start();
	include_once("conn.inc.php");
	if($_GET["id"]==""){
		$true_name = $_GET['true_name'];
		$province = $_GET['province'];
		$city = $_GET['city'];
		$district= $_GET['district'];
		$street = $_GET['street'];
		$zipcode = $_GET['zipcode'];
		$true_phone = $_GET['true_phone'];
		$email = $_GET['email'];
		$default_stauts = $_GET['default_stauts'];
		$mem_id=$_SESSION['user']['id'];
		$sql="insert into address(true_name,street,zipcode,true_phone,email,default_stauts,mem_id,prov,city,area )"."values('$true_name','$street','$zipcode','$true_phone','$email','$default_stauts','$mem_id','$province','$city','$district')";
		if(mysqli_query($link,$sql)){
			$array['alert']="保存成功";
			$array['true_name']=$true_name;
			$array['province']=$province;
			$array['city']=$city;
			$array['district']=$district;
			$array['street']=$street;
			$array['zipcode']=$zipcode;
			$array['true_phone']=$true_phone;
			$array['email']=$email;
			echo json_encode($array);
		}else{
			echo "网络连接错误!";
		}	
	}else{
		$true_name = $_GET['true_name'];
		$province = $_GET['province'];
		$city = $_GET['city'];
	    $district= $_GET['district'];
		$street = $_GET['street'];
		$zipcode = $_GET['zipcode'];
		$true_phone = $_GET['true_phone'];
		$email = $_GET['email'];
		$default_stauts = $_GET['default_stauts'];
		$id=$_GET['id'];
		$sql="update address set true_name='$true_name',street='$street',zipcode='$zipcode',true_phone='$true_phone',email='$email',default_stauts='$default_stauts',prov='$province',city='$city',area='$district' where id=$id"; 
		if(mysqli_query($link,$sql)){
			$array['alert']="修改成功";
			$array['true_name']=$true_name;
			$array['province']=$province;
			$array['city']=$city;
			$array['district']=$district;
			$array['street']=$street;
			$array['zipcode']=$zipcode;
			$array['true_phone']=$true_phone;
			$array['email']=$email;
			echo json_encode($array);
		}else{
			echo "网络连接错误!";
		}	
	}

?>