<?php
	session_start();
	include_once("conn.inc.php");
	if(empty($_GET["id"])){
		header("location:sell_ticket.php");
	}
	$sql="select * from prices where id=$_GET[id]";
	$result=mysqli_query($link,$sql);
	while($row=mysqli_fetch_array($result)){
		$num=$row['num'];
	}
	echo $num;
?>