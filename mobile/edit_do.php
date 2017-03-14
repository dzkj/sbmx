<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

session_start();
include "connect.inc";
header("content-type:text/html;charset=utf-8;");

if(isset($_POST['pwdsubmit'])){
    $id = $_SESSION['member']['id'];
    $yspwd = $_POST['yspwd'];
    $newpwd = $_POST['newpwd'];
    $renewpwd = $_POST['renewpwd'];
    $sql = "select * from members where id='$id' and password='$yspwd'";
    $res = mysql_query($sql);
    if(mysql_num_rows($res)>0){
        if($newpwd == $renewpwd){
            $sql = "update members set password='$newpwd' where id='$id'";
            mysql_query($sql);
            if(mysql_affected_rows()>=0){
                //修改成功
                echo "<script>alert('修改成功');</script>";
                echo "<script>location.href='edit_pwd.php';</script>";
            }else{
                //失败
                echo "<script>alert('修改失败');</script>";
                echo "<script>history.back();</script>";
            }
        }else{
            //重复密码不一致
            echo "<script>alert('重复密码不一致');</script>";
            echo "<script>history.back();</script>";
        }
    }else{
        //原始密码不一致
        echo "<script>alert('原始密码不一致');</script>";
        echo "<script>history.back();</script>";
    }
}else{
    //非法进入
    echo "<script>alert('非法进入');</script>";
    echo "<script>history.back();</script>";
}