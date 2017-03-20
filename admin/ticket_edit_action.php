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

	//修改票
	if(isset($_POST['edit_submit'])){
		$show_title=$_POST['show_title'];
		$show_venue =$_POST['show_venue'];
		$shipping_city = $_POST['shipping_city'];
		$show_length =$_POST['show_length'];
		$enter_time = $_POST['enter_time'];
		$out_time = $_POST['out_time'];
		$show_begin = $_POST['show_begin'];
		$show_end  = $_POST['show_end'];
		$show_city = $_POST['show_city'];
		$show_infocontent=$_POST['content'];
		$id=$_POST['id'];
		$old_img=$_POST['old_img'];
		$old_img1=$_POST['old_img1'];
		if($show_infocontent==""){
			$show_infocontent="主人太懒了,什么都没留下!";
		}
		$ok=0;
		$ok1=0;
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
		if($_FILES["img"]["tmp_name"]!=""){
			$size = getimagesize($_FILES["img"]["tmp_name"]);
			$width = $size[0];
			$height = $size[1];
			if($width!=300 || $height!=300){
			echo "<script>alert('上传图片大小错误!电脑端图片大小为300*300!请重新上传!');</script>";
			echo "<script>location.href='ticket_edit.php?id=$id';</script>";
			exit();
			}
		}
		switch(@$_FILES['img1']['type']){
			case "image/jpeg":$ok1=1;
			break;
			case "image/gif":$ok1=1;
			break;
			case "image/png":$ok1=1;
			break;
			default:$ok1=0;
			break;
		}
		if($_FILES["img1"]["tmp_name"]!=""){
			$size1 = getimagesize($_FILES["img1"]["tmp_name"]);
			$width1 = $size1[0];
			$height1 = $size1[1];
			if($width1!=300 || $height1!=300){
			echo "<script>alert('上传图片大小错误!电脑端图片大小为300*300!请重新上传!');</script>";
			echo "<script>location.href='ticket_edit.php?id=$id';</script>";
			exit();
			}
		}
		if($ok==1&&$ok1==0){
			$file = $_FILES["img"];
			if (is_uploaded_file($file["tmp_name"])) {
				$filename = $file["name"];
				$hz = substr($filename, strrpos($filename, "."));
				$filename = time() . $hz;
				$dir = "../images/banner/" . $filename;
				$img="../images/banner/" . $filename;
				if (move_uploaded_file($file["tmp_name"], $dir)) {
					$sql="update shows set show_title='$show_title',enter_time='$enter_time',show_venue='$show_venue',shipping_city='$shipping_city',show_length='$show_length',show_begin='$show_begin',show_end='$show_end',show_city='$show_city',
show_infocontent='$show_infocontent',
show_imgs='$img',show_wx_imgs='$old_img1',out_time='$out_time' where id='$id'";
				$gadd=mysql_query($sql);
					if($gadd){
						echo "<script>alert('修改成功!');</script>";
						echo "<script>location.href='index.php';</script>";
					}else{
						echo "<script>alert('修改失败!');</script>";
						echo "<script>location.href='ticket_edit.php?id=$id';</script>";
					}
				}
			}
		}else if($ok==0&&$ok1==1){
			$file1 = $_FILES["img1"];
					if (is_uploaded_file($file1["tmp_name"])) {
						$filename1 = $file1["name"];
						$hz = substr($filename1, strrpos($filename1, "."));
						$filename1 = time() . $hz . 8526942;
						$dir1 = "../images/show/" . $filename1;
						$img1="../images/show/" . $filename1;
				if (move_uploaded_file($file1["tmp_name"], $dir1)) {
					$sql="update shows set show_title='$show_title',enter_time='$enter_time',show_venue='$show_venue',shipping_city='$shipping_city',show_length='$show_length',show_begin='$show_begin',show_end='$show_end',show_city='$show_city',
show_infocontent='$show_infocontent',
show_imgs='$old_img',show_wx_imgs='$img1',out_time='$out_time' where id='$id'";
				$gadd=mysql_query($sql);
					if($gadd){
						echo "<script>alert('修改成功!');</script>";
						echo "<script>location.href='index.php';</script>";
					}else{
						echo "<script>alert('修改失败!');</script>";
						echo "<script>location.href='ticket_edit.php?id=$id';</script>";
					}
				}
			}
		}else if($ok!=0&&$ok1!=0){
			$file = $_FILES["img"];
			if (is_uploaded_file($file["tmp_name"])) {
				$filename = $file["name"];
				$hz = substr($filename, strrpos($filename, "."));
				$filename = time() . $hz;
				$dir = "../images/show/" . $filename;
				$img="../images/show/" . $filename;
				if (move_uploaded_file($file["tmp_name"], $dir)) {
					$file1 = $_FILES["img1"];
					if (is_uploaded_file($file1["tmp_name"])) {
						$filename1 = $file1["name"];
						$hz = substr($filename1, strrpos($filename1, "."));
						$filename1 = time() . $hz . 8526942;
						$dir1 = "../images/show/" . $filename1;
						$img1="../images/show/" . $filename1;
						if (move_uploaded_file($file1["tmp_name"], $dir1)) {
							$sql="update shows set show_title='$show_title',enter_time='$enter_time',show_venue='$show_venue',shipping_city='$shipping_city',show_length='$show_length',show_begin='$show_begin',show_end='$show_end',show_city='$show_city',
show_infocontent='$show_infocontent',
show_imgs='$img',show_wx_imgs='$img1',out_time='$out_time' where id='$id'";
							$gadd=mysql_query($sql);
							if($gadd){
								echo "<script>alert('修改成功!');</script>";
								echo "<script>location.href='index.php';</script>";
							}else{
								echo "<script>alert('修改失败!');</script>";
								echo "<script>location.href='ticket_edit.php?id=$id';</script>";
							}
						}
					}
				}
			}
		}else{
			$sql="update shows set show_title='$show_title',enter_time='$enter_time',show_venue='$show_venue',shipping_city='$shipping_city',show_length='$show_length',show_begin='$show_begin',show_end='$show_end',show_city='$show_city',
show_infocontent='$show_infocontent',
show_imgs='$old_img',show_wx_imgs='$old_img1',out_time='$out_time' where id='$id'";
			$gadd=mysql_query($sql);
			if($gadd){
				echo "<script>alert('修改成功!');</script>";
				echo "<script>location.href='index.php';</script>";
			}else{
				echo "<script>alert('修改失败!');</script>";
				echo "<script>location.href='ticket_edit.php?id=$id';</script>";
			}
		}
	}else{
		echo "<script>alert('上传图片格式错误!');</script>";
		echo "<script>location.href='index.php';</script>";
	}
?>