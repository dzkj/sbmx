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

if(isset($_POST['pub_submit'])){
	$gid=$_POST['gid'];
	$title=$_POST['title'];
	$invent=$_POST['invent'];
	$price=$_POST['price'];
	$category=$_POST['category'];
	$contents=$_POST['content'];
	if($contents==""){
		$contents="主人太懒了,什么都没留下!";
	}
	if($category<0){
		echo "<script>alert('请选择分类!');</script>";
		echo "<script>history.back();</script>";
	}else{
	
		$ok=0;
		switch(@$_FILES['img']['type']){
			case "image/jpeg":$ok=1;
			break;
			case "image/gif":$ok=1;
			break;
			case "image/png":$ok=1;
			break;
			default:$ok=0;
			break;
		}

		if($ok){
			$file = $_FILES["img"];
			if (is_uploaded_file($file["tmp_name"])) {
				$filename = $file["name"];
				$hz = substr($filename, strrpos($filename, "."));
				$filename = time() . $hz;
				$dir = "../images/" . $filename;
				$img="images/" . $filename;
				if (move_uploaded_file($file["tmp_name"], $dir)) {
					//$_SESSION["imgdir"] = $dir;
					$sql="update goods set title='$title',invent='$invent',price='$price',img='$img',contents='$contents',cid='$category' where id='$gid'";
					//echo $sql;
					mysql_query($sql);
					if(mysql_affected_rows()>=0){
						echo "<script>alert('修改成功!');</script>";
						echo "<script>history.back();</script>";
					}else{
						echo "<script>alert('系统繁忙,请稍后再试!');</script>";
						echo "<script>history.back();</script>";
					}
				}
			}
		}else{
			//var_dump($_POST);
			$sql="update goods set title='$title',invent='$invent',price='$price',contents='$contents',cid='$category' where id='$gid'";
			//echo $sql;
			mysql_query($sql);
			if(mysql_affected_rows()>=0){
				echo "<script>alert('修改成功!');</script>";
				echo "<script>history.back();</script>";
			}else{
				echo "<script>alert('系统繁忙,请稍后再试!');</script>";
				echo "<script>history.back();</script>";
			}
		}
	}
}else{
	echo "<script>history.back();</script>";
}

?>