<?php
session_start();
//验证码
//1、背景
//定义验证码的宽
$width = 70;
//定义验证码的高
$height = 24;
$img = imagecreatetruecolor($width,$height);
//颜色
$bg_color = imagecolorallocate($img,rand(225,255),rand(225,255),rand(225,255));
//画图
imagefill($img,0,0,$bg_color);

//输出干扰
//随机输出100个不同颜色的点
for($i=0;$i<=100;$i++){
	$point_color=imagecolorallocate(
			$img,rand(100,225),rand(100,225),rand(100,225));
	
	$x = rand(1,79);
	$y = rand(1,29);
	imagesetpixel($img,$x,$y,$point_color);
}
/* //随机输出10个不同颜色的线
for($i=0;$i<10;$i++){
	$point_color=imagecolorallocate(
			$img,rand(100,225),rand(100,225),rand(100,225));
	$x = rand(1,79);
	$y = rand(1,29);
	imageline($img,$x,$y,rand(1,79),rand(1,29),$point_color);
} */

//输出随机文字
//给出基础字符串  
$codes = "1234567890abcdefghig";
//定义验证码的长度
$num = 4;
//获取验证码
$code = "";
//ImageTTFText($img, 20, 0, 10, 20, $black, "BRLNSR.TTF",$code);
$session_code = "";
for($i=0;$i<$num;$i++){
	$start=rand(0,strlen($codes)-1);
	$code=substr($codes,$start,1);
	$session_code=$session_code.$code;
	$x = ($width/$num)*$i+5;
	$y = rand(3,8);
	$color = imagecolorallocate($img,
			 rand(0,120),
			 rand(0,120),
			 rand(0,120));
	imagestring($img,7,$x,$y,$code,$color);
}
$_SESSION['trueCode']=$session_code;


//输出验证码
header("Content-Type:image/gif");
imagegif($img);


//5、销毁资源
imagedestroy($img);
?>










