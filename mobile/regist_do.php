<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include "connect.inc";
header("content-type:text/html;charset=utf-8;");
if(isset($_POST['register'])){
    print_r($_POST);
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    $sescode = $_POST['SecurityCode'];
    //查询手机和openid重复性
    $m_sql = "select * from members where phone=$phone or openid=$openid";
    $m_res = mysql_query($m_sql);
    if(mysql_num_rows($m_res)>0){
        echo "<script>alert('此手机已经被注册过了');</script>";
        echo "<script>history.back();</script>";
    }else{
        
    }
}