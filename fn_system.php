<?php

if(empty($_SESSION['user'])){
    header("Location:http://www.zui-shi-dai.com/wxlogin/fn_wx_login.php");
}else{
    print_r($_SESSION['user']);
}

?>