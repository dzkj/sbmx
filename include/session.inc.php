<?php
	if(empty($_SESSION["user"])){
		echo "<meta charset='utf-8'>";
		echo "<script>";
		echo "alert('请登入！');";
		echo "location.href='login.php'";
		echo "</script>";
}
?>