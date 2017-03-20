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

//添加票
if(isset($_POST['pub_submit'])){
    $show_title=$_POST['show_title'];
    $show_venue =$_POST['show_venue'];
    $shipping_city = $_POST['shipping_city'];
    $show_length =$_POST['show_length'];
    $enter_time = $_POST['enter_time'];
	$out_time = $_POST['out_time'];
    $show_begin = $_POST['show_begin'];
    $show_end  = $_POST['show_end'];
    $show_city = $_POST['show_city'];
	$show_stauts = "待售票";
	$show_infocontent=$_POST['content'];
	if($show_infocontent==""){
        $show_infocontent="主人太懒了,什么都没留下!";
	}
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
		switch(@$_FILES['img1']['type']){
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
					
							$gsql="insert into shows (show_title,out_time,enter_time,show_venue,shipping_city,show_length,show_begin,show_end,show_city,show_stauts,
show_infocontent,
show_imgs,show_wx_imgs)values('$show_title','$out_time','$enter_time','$show_venue','$shipping_city','$show_length','$show_begin',
'$show_end','$show_city','$show_stauts','$show_infocontent','$img','$img1')";
							$gadd=mysql_query($gsql);
							if($gadd){
								echo "<script>alert('提交成功!');</script>";
								echo "<script>location.href='index.php';</script>";
							}else{
								echo "<script>alert('提交失败!');</script>";
								echo "<script>location.href='ticket_add.php';</script>";
							}
						}
					}
				}
			}
		}else{
			echo "<script>alert('上传图片格式错误!');</script>";
			echo "<script>location.href='ticket_add.php';</script>";
		}
	}else{
		echo "<script>alert('上传图片格式错误!');</script>";
		echo "<script>location.href='ticket_add.php';</script>";
	}

?>