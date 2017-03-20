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
//修改广告横幅	
if(isset($_POST['edit_submit'])){
	$id=$_POST['id'];
	$banner_type=$_POST['banner_type'];
    $old_img=$_POST['old_img'];
    $banner_show_id =$_POST['banner_show_id'];
		$ok=false;
		switch(@$_FILES['img']['type']){
			case "image/jpeg":$ok=true;
			break;
			case "image/gif":$ok=true;
			break;
			case "image/png":$ok=true;
			break;
			default:$ok=false;
			break;
		}
		if($ok){
			if($banner_type=="pc"){
				$size = getimagesize($_FILES["img"]["tmp_name"]);
				$width = $size[0];
				$height = $size[1];
				if($width!=998 || $height!=300){
					echo "<script>alert('上传图片大小错误!电脑端图片大小为998*300!请重新上传!');</script>";
					echo "<script>location.href='banner_edit.php?id=$id';</script>";
				}else{
					$file = $_FILES["img"];
					if (is_uploaded_file($file["tmp_name"])) {
						$filename = $file["name"];
						$hz = substr($filename, strrpos($filename, "."));
						$filename = time() . $hz;
						$dir = "../images/banner/" . $filename;
						$img="../images/banner/" . $filename;
						if (move_uploaded_file($file["tmp_name"], $dir)) {
							$gsql="update banners set banner_type='$banner_type',banner_show_id='$banner_show_id',banner_img='$img' where id='$id'";
							$gadd=mysql_query($gsql);
							if($gadd){
								echo "<script>alert('修改成功!');</script>";
								echo "<script>location.href='banner.php';</script>";
							}else{
								echo "<script>alert('修改失败!');</script>";
								echo "<script>location.href='banner_edit.php?id=$id';</script>";
							}
						}
					}
				}
			}else if($banner_type=="wx"){
				$size = getimagesize($_FILES["img"]["tmp_name"]);
				$width = $size[0];
				$height = $size[1];
				if($width!=620 || $height!=320){
					echo "<script>alert('上传图片大小错误!微信端图片大小为620*320!请重新上传!');</script>";
					echo "<script>location.href='banner_edit.php?id=$id';</script>";
				}else{
					$file = $_FILES["img"];
					if (is_uploaded_file($file["tmp_name"])) {
						$filename = $file["name"];
						$hz = substr($filename, strrpos($filename, "."));
						$filename = time() . $hz;
						$dir = "../images/banner/" . $filename;
						$img="../images/banner/" . $filename;
						if (move_uploaded_file($file["tmp_name"], $dir)) {
							$gsql="update banners set banner_type='$banner_type',banner_show_id='$banner_show_id',banner_img='$img' where id='$id'";
							$gadd=mysql_query($gsql);
							if($gadd){
								echo "<script>alert('修改成功!');</script>";
								echo "<script>location.href='banner.php';</script>";
							}else{
								echo "<script>alert('修改失败!');</script>";
								echo "<script>location.href='banner_edit.php?id=$id';</script>";
							}
						}
					}
				}
			}
		}else{
			$sql="update banners set banner_type='$banner_type',banner_show_id='$banner_show_id',banner_img='$old_img' where id='$id'";
			$gadd=mysql_query($sql);
			if($gadd){
				echo "<script>alert('修改成功!');</script>";
				echo "<script>location.href='banner.php';</script>";
			}else{
				echo "<script>alert('修改失败!');</script>";
				echo "<script>location.href='banner_edit.php?id=$id';</script>";
			}
		}
	}else{
		echo "<script>alert('上传图片格式错误!');</script>";
		echo "<script>location.href='banner.php';</script>";
	}
?>