<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
session_start();
include "connect.inc";
header("content-type:text/html;charset=utf-8;");
if(isset($_POST['infosubmit'])){
    $true_name = $_POST['true_name'];
    $phone = $_POST['phone'];
    $id = $_POST['mid'];
    $sql = "update members set true_name='$true_name',phone='$phone' where id='$id'";
    mysql_query($sql);
    if(mysql_affected_rows()>=0){
        echo "<script>alert('保存成功');</script>";
        echo "<script>location.href='user_info.php';</script>";
    }else{
        echo "<script>alert('保存失败');</script>";
        echo "<script>location.href='user_info.php';</script>";
    }
}else{
    echo "<script>alert('修改失败2');</script>";
    echo "<script>location.href='user_info.php';</script>";
}