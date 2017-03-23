<?php
	session_start();
	include_once("conn.inc.php");
	if(empty($_GET["id"])){
		header("location:sell_ticket.php");
	}
	$sql="select * from prices where season_id=$_GET[id] order by price";
	$result=mysqli_query($link,$sql);
	while($row=mysqli_fetch_array($result)){
		$array[]=$row;
	}
	echo json_encode($array);
?>