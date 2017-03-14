<?php
session_start();
include "connect.inc";
header("content-type:text/html;charset=utf-8;");

if(isset($_SESSION['member'])){
    
}else{
    
}
?>
<html><head>
        <title>修改密码</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
        <link href="css/mobile.css" rel="stylesheet">
        <link href="css/reset.css" rel="stylesheet">
        <script language="javascript" type="text/javascript" src="/Scripts/jquery.min.js"></script>
        <script language="javascript" type="text/javascript" src="/Scripts/my.js"></script>
        <script src="/Scripts/jquery.validate.js"></script>
    </head>
    <body style="background-color:white">
        <div id="header" style="position:fixed">
            <a href="user_info.php"><span class="return"></span></a>
            <span>修改密码</span>
        </div>
        <div style="height:45px"></div>
        <div class="register-main">
            <form id="change-pass-form" action="edit_do.php" method="post" novalidate="novalidate">
                <div class="register-item clearfix">
                    <div class="input-header" style="background-image: url(../../Images/lock.png)"></div>
                    <input type="password" placeholder="请输入原密码" name="yspwd" id="OldPassword">
                </div>
                <div class="register-item clearfix">
                    <div class="input-header" style="background-image: url(../../Images/lock.png)"></div>
                    <input type="password" placeholder="请输入新密码" name="newpwd" id="NewPassword">
                </div>
                <div class="register-item clearfix">
                    <div class="input-header" style="background-image: url(../../Images/cfmlock.png)"></div>
                    <input type="password" placeholder="确认新密码" name="renewpwd" id="ConfirmPassword">
                </div>
                <input type="hidden" value="<?php echo $_SESSION['member'];?>" name="mid"/>
                <input type="submit" name="pwdsubmit" value="保存">
            </form>
        </div>

        <script>
//        function checkspwd(){
//            var yspwd = $("#OldPassword").val();
//            var newpwd = $("#NewPassword").val();
//            var renewpwd = $("#ConfirmPassword").val();
//            if(yspwd!="" && newpwd!="" && renewpwd!=""){
//                $.post("edit_do.php",{"yspwd":yspwd,"newpwd":newpwd,"renewpwd":renewpwd},
//                    function(data){
//                        if(data==0){
//                            //修改失败
//                            alert("修改失败");
//                        }else if(data==-2){
//                            //重复密码不一致
//                            alert("重复密码不一致");
//                        }
//                    }
//                );
//            }
//        }
        </script>

    </body></html>