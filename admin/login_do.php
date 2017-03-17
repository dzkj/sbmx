<?php
session_start();
include("mysql_connect.inc");
header("Content-Type: text/html;charset=utf-8");

if (isset($_POST['login'])) {
    $name = $_POST['name'];
    $pwd = $_POST['pwd'];
    if ($name != "") {
        if ($pwd != "") {
            $sql = "SELECT * FROM admins WHERE name='$name' and pwd='$pwd'";
            $res = mysql_query($sql);
            $row = mysql_affected_rows();
            if ($row > 0) {
                $user = mysql_fetch_array($res);
                $_SESSION['admin'] = $user;
                echo "<script>location.href='index.php'</script>";
            } else {
                echo "<script>alert('用户名或密码错误!');</script>";
                echo "<script>location.href='login.html'</script>";
            }
        } else {
            echo "<script>alert('请输入密码!');</script>";
            echo "<script>location.href='login.html'</script>";
        }
    } else {
        echo "<script>alert('请输入用户名!');</script>";
        echo "<script>location.href='login.html'</script>";
    }
}

if (isset($_GET['exit'])) {
    unset($_SESSION['admin']);
    echo "<script>location.href='login.html'</script>";
}