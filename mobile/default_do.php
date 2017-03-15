<?php
session_start();
include "connect.inc";
header("content-type:text/html;charset=utf-8;");

$addr_id = $_POST['addr_id'];
$default_checkbox = $_POST['default_checkbox'];

if($default_checkbox == "false"){
    $sql = "update address set default_stauts='0'";
    mysql_query($sql);
    if(mysql_affected_rows()>=0){
        $sql = "update address set default_stauts='1' where id='$addr_id'";
        mysql_query($sql);
        if(mysql_affected_rows()>=0){
            echo 1;
        }else{
            echo 0;
        }
    }else{
        echo -1;
    }
}else{
    $sql = "update address set default_stauts='0'";
    mysql_query($sql);
    if(mysql_affected_rows()>=0){
        echo 1;
    }else{
        echo 0;
    }    
}