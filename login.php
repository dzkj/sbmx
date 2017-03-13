<!DOCTYPE html>
<html>
    <head>
        <title>会员登录</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
        <link href="css/mobile.css" rel="stylesheet" />
        <link href="css/reset.css" rel="stylesheet" />
        <style type="text/css">
            label.error {
                color: red;
                display: inline-block;
                padding-left: 5px;
                margin-top: 5px;
                font-size: 12px;
            }

            .orther-login {
                color: #808080;
            }

            .wx-btn {
                width: 100%;
                height: 40px;
                text-align: center;
                line-height: 40px;
                /*border: 1px solid #d3d3d3;*/
                border-radius: 3px;
                margin-top: 10px;
                padding-left: 10px;
            }

            .wx-btn img {
                float: left;
                border: 0px;
            }

            .wx-btn div {
                float: left;
                height: 40px;
                line-height: 40px;
            }
        </style>
    </head>
    <body style="background-color:white">
        <div>
            <div id="header" style="position:fixed">

                <a href="javascript:history.go(-1)"><span class="return"></span></a>
                <span>会员登录</span>
            </div>
            <div style="height:45px"></div>
            <div class="login-main">
                <form action="/Account/Login" method="post" onsubmit="return check();" id="login-normal-form">
                    <!--<input name="__RequestVerificationToken" type="hidden" value="Yu_y85si2owjBQTAHebP-AcQRHFZz6QeIx7FaUBhRsBtdJJaj3OcAAzMMFc7qk0znf6rkQsqap0w5E0UGxPLy0INZ4TJFNqRLLxatDuIY6jvNUW2U7foVnx0EjEqf3motM1jKi0pBUTdPPv9LBoVSA2PtTMy8VgNBIXw_SNxcMg1" />-->
                    <ul class="login-switch clearfix">
<!--                        <li class="li-actived" id="login-switch-li-1" onclick="clickType(0)">普通登录</li>
                        <li id="login-switch-li-2" onclick="clickType(1)">手机快捷登录</li>-->
                        
                        <li class="li-actived" id="login-switch-li-1" onclick="clickType(0)">手机快捷登录</li>
                        <!--<li id="login-switch-li-2" onclick="clickType(1)"></li>-->
                    </ul>
                    <div class="login-items">
                        <div class="register-item clearfix">
                            <div class="input-header" style="background-image: url(images/user.png)"></div>
                            <input type="text" placeholder="请输入手机号码" name="PhoneNumber" id="phone">
                        </div>

                        <div class="register-item clearfix" style="border: none; display: ">
                            <div class="input-header" style="background-image: url(images/yanzhengma.png)"></div>
                            <input type="text" placeholder="请输入验证码" name="SecurityCode" id="SecurityCode" value="">
                            <input id="sCode" type="button" value="获取验证码" style="background-color: white; color: #98cd63">
                        </div>

                        <div class="register-item clearfix" style="border: none" id="normal-login-password">
                            <div class="input-header" style="background-image: url(images/cfmlock.png)"></div>
                            <input type="password" placeholder="输入密码" name="Password" id="Password">
                        </div>
                    </div>

                    <input type="submit" value="登录">
                    <a href="/Account/Register">
                        <div class="m-btn"> 新用户注册</div>
                    </a>

                    <p style="text-align: right; padding: 20px 15px 10px 0">
                        <a href="/Account/ForgetPassword" style="color: #f38686;">忘记密码?</a>
                    </p>

                    <input id="ReturnUrl" name="ReturnUrl" type="hidden" value="/Account/OrderManage" />
                    <input type="hidden" value="0" name="loginType" id="loginType" />
                </form>


            </div>
        </div>
        <script language="javascript" type="text/javascript" src="js/jquery.min.js"></script>
        <script language="javascript" type="text/javascript" src="js/my.js"></script>
        <script src="js/jquery.validate.js"></script>
        <script>
                            var issum = false;
                            $(document).ready(function() {
                                $("#sCode").click(function() {
                                    if (issum)
                                        return;
                                    var p = $("#phone").val();
                                    var pattern = /^1[3|4|5|7|8][0-9]\d{8}$/;
                                    if (pattern.test(p)) {
                                        htmlobj = $.ajax({
                                            url: "../Common/SecurityCode?phone=" + p,
                                            async: false,
                                            type: 'POST',
                                        });
                                        var jsonObject = eval('(' + htmlobj.responseText + ')');
                                        if (jsonObject.result == 0) {
                                            issum = true;
                                            //这里处理倒计时并阻止按钮交互
                                            var time = 30;
                                            var code = $("#sCode");
                                            code.addClass("msgs1");
                                            var t = setInterval(function() {
                                                time--;
                                                code.val(time + "秒");
                                                if (time == 0) {
                                                    issum = false;
                                                    clearInterval(t);
                                                    code.val("重新获取");
                                                    code.removeClass("msgs1");
                                                }
                                            }, 1000);
                                        }

                                    } else {
                                        alert("请输入正确的手机号");
                                    }
                                });
                            });

                            var type = 0;

                            function clickType(t) {
                                type = t;
                                $("#loginType").val(t);
                                $("#SecurityCode").val("");
                            }

                            function check() {
                                var isok = true;
                                if (type == 1) {
                                    if ($("#SecurityCode").val() == "") {
                                        alert("请输入手机验证码");
                                        isok = false;
                                    }
                                    var pattern = /^\d{6}$/;
                                    if (!pattern.test($("#SecurityCode").val())) {
                                        alert("请输入正确的验证码");
                                        isok = false;
                                    }
                                }
                                return isok;
                            }

                            function wxLogin() {
                                $("#Wxform").submit();
                                //$.ajax({
                                //    url: "../Wx/WxLogin",
                                //    async: false,
                                //    type: 'POST',
                                //    success: function (data) {
                                //        //console.log(data);
                                //        //if (!data.Result) {
                                //        //    show_tips(data.Message, "返回重新选定");
                                //        //}
                                //    }
                                //});
                            }
        </script>

    </body>
</html>
