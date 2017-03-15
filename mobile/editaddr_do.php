<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

session_start();
include "connect.inc";
header("content-type:text/html;charset=utf-8;");

$addr_id = $_POST['addr_id'];
$true_name = $_POST['true_name'];
$true_phone = $_POST['true_phone'];
$prov = $_POST['cmbProvince'];
$city = $_POST['cmbCity'];
$area = $_POST['cmbArea'];
$street = $_POST['street'];

$addr_sql = "update address set true_name='$true_name',true_phone='$true_phone',prov='$prov',city='$city',area='$area',street='$street' where id='$addr_id'";
mysql_query($addr_sql);
if(mysql_affected_rows()>=0){
    echo "<script>alert('地址保存成功');</script>";
    echo "<script>location.href='edit_address.php';</script>";
}else{
    echo "<script>alert('系统繁忙请稍后再试');</script>";
    echo "<script>location.href='edit_address.php';</script>";
}