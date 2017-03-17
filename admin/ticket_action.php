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

		if($ok){
			$file = $_FILES["img"];
			if (is_uploaded_file($file["tmp_name"])) {
				$filename = $file["name"];
				$hz = substr($filename, strrpos($filename, "."));
				$filename = time() . $hz;
				$dir = "../images/show/" . $filename;
				$img="../images/show/" . $filename;
				if (move_uploaded_file($file["tmp_name"], $dir)) {
					$gsql="insert into shows (show_title,enter_time,show_venue,shipping_city,show_length,show_begin,show_end,show_city,show_stauts,
show_infocontent,
show_imgs)values('$show_title','$enter_time','$show_venue','$shipping_city','$show_length','$show_begin',
'$show_end','$show_city','$show_stauts','$show_infocontent','$img')";
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
		}else{
			echo "<script>alert('上传图片格式错误!');</script>";
			echo "<script>location.href='ticket_add.php';</script>";
		}
	}

	//修改票
	if(isset($_POST['edit_submit'])){
		$show_title=$_POST['show_title'];
		$show_venue =$_POST['show_venue'];
		$shipping_city = $_POST['shipping_city'];
		$show_length =$_POST['show_length'];
		$enter_time = $_POST['enter_time'];
		$show_begin = $_POST['show_begin'];
		$show_end  = $_POST['show_end'];
		$show_city = $_POST['show_city'];
		$show_infocontent=$_POST['content'];
		$id=$_POST['id'];
		$old_img=$_POST['old_img'];
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

		if($ok){
			$file = $_FILES["img"];
			if (is_uploaded_file($file["tmp_name"])) {
				$filename = $file["name"];
				$hz = substr($filename, strrpos($filename, "."));
				$filename = time() . $hz;
				$dir = "../images/show/" . $filename;
				$img="../images/show/" . $filename;
				if (move_uploaded_file($file["tmp_name"], $dir)) {
					$sql="update shows set show_title='$show_title',enter_time='$enter_time',show_venue='$show_venue',shipping_city='$shipping_city',show_length='$show_length',show_begin='$show_begin',show_end='$show_end',show_city='$show_city',
show_infocontent='$show_infocontent',
show_imgs='$img' where id='$id'";
					$gadd=mysql_query($sql);
					if($gadd){
						echo "<script>alert('修改成功!');</script>";
						echo "<script>location.href='index.php';</script>";
					}else{
						echo "<script>alert('修改失败!');</script>";
						echo "<script>location.href='index.php';</script>";
					}
				}
			}
		}else{
			$sql="update shows set show_title='$show_title',enter_time='$enter_time',show_venue='$show_venue',shipping_city='$shipping_city',show_length='$show_length',show_begin='$show_begin',show_end='$show_end',show_city='$show_city',
show_infocontent='$show_infocontent',
show_imgs='$old_img' where id='$id'";
			$gadd=mysql_query($sql);
			if($gadd){
				echo "<script>alert('修改成功!');</script>";
				echo "<script>location.href='index.php';</script>";
			}else{
				echo "<script>alert('修改失败!');</script>";
				echo "<script>location.href='index.php';</script>";
			}
		}
	}
	//删除票
	if(isset($_GET['del'])){
		$id=$_GET['id'];
		$sql="delete from shows where id='$id'";
		if(mysql_query($sql)){
			$sql1="delete from seasons where show_id='$id'";
			if(mysql_query($sql1)){		
			$sql2="delete from prices where show_id='$id'";
				if(mysql_query($sql2)){
					echo "<script>alert('删除成功!');</script>";
					echo "<script>location.href='index.php';</script>";
				}
			}
		}else{
			echo "<script>alert('删除失败!');</script>";
			echo "<script>location.href='index.php';</script>";
		}
	}
	//修改票状态
	if(isset($_GET['show_stauts'])){
		$id=$_GET['id'];
		if($_GET['show_stauts']==1){
			$show_stauts="待售票";
		}else if($_GET['show_stauts']==2){
			$show_stauts="售票中";
		}else if($_GET['show_stauts']==3){
			$show_stauts="已下架";
		}
		$sql="update shows set show_stauts='$show_stauts' where id='$id' ";
			$res=mysql_query($sql);
			if($res){
				echo "<script>alert('修改售票状态成功!');</script>";
				echo "<script>location.href='index.php';</script>";
			}else{	
				echo "<script>alert('修改售票状态失败!');</script>";
				echo "<script>location.href='index.php';</script>";
			}
	}

?>