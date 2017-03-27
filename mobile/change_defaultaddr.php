<?php
session_start();
include "connect.inc";
header("content-type:text/html;charset=utf-8;");

$aid = $_POST['aid'];
$sql = "select * from address where id='$aid'";
$res = mysql_query($sql);
$row = mysql_fetch_array($res);
$data = json_encode($row);
echo $data;