<?php
session_start();
include "connect.inc";
header("content-type:text/html;charset=utf-8;");

$true_name = $_POST['true_name'];
$true_phone = $_POST['true_phone'];
$prov = $_POST['cmbProvince'];
$city = $_POST['cmbCity'];
$area = $_POST['cmbArea'];
$street = $_POST['street'];
$zipcode = $_POST['zipcode'];
$mem_id = $_POST['mem_id'];

$addr_sql = "insert into address(true_name,true_phone,prov,city,area,street,zipcode,mem_id) values('$true_name','$true_phone','$prov','$city','$area','$street','$zipcode',$mem_id)";
//echo $addr_sql;exit;
mysql_query($addr_sql);
if(mysql_affected_rows()>=0){
    echo "<script>alert('地址保存成功');</script>";
    echo "<script>location.href='edit_address.php';</script>";
}else{
    echo "<script>alert('系统繁忙请稍后再试');</script>";
    echo "<script>location.href='edit_address.php';</script>";
}