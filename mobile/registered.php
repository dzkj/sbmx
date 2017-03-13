<!DOCTYPE html>

<html>
<head>
    <title>会员注册</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <link href="css/mobile.css" rel="stylesheet" />
    <link href="css/reset.css" rel="stylesheet" />
    <script language="javascript" type="text/javascript" src="js/jquery.min.js"></script>
    <script language="javascript" type="text/javascript" src="js/my.js"></script>
    <script src="js/jquery.validate.js"></script>
    <script>
        var issum = false;
        $(document).ready(function () {
            $("#securityCode").click(function () {
                if (issum) return;
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
                        var code = $("#securityCode");
                        code.addClass("msgs1");
                        var t = setInterval(function () {
                            time--;
                            code.val(time + "秒");
                            if (time == 0) {
                                issum = false;
                                clearInterval(t);
                                code.val("重新获取");
                                code.removeClass("msgs1");
                            }
                        }, 1000)
                    }
                    
                } else { alert("请输入正确的手机号"); }
            });
        });

        function check()
        {
            var isok = true;
            if ($("#phone").val() == "") {
                alert("请输入手机号码");
                return false;
            }
            var pattern = /^1[3|4|5|7|8][0-9]\d{8}$/;
            if (!pattern.test($("#phone").val())) {
                alert("请输入正确的手机号码");
                return false;
            }
            if ($("#SecurityCode").val() == "") {
                alert("请输入验证码");
                return false;
            }
            pattern = /^\d{6}$/;
            if (!pattern.test($("#SecurityCode").val())) {
                alert("请输入正确的验证码");
                return false;
            }
            if ($("#Password").val() == "") {
                alert("请输入密码");
                return false;
            }
            pattern = /^[a-zA-Z]\w{5,17}$/;
            if (!pattern.test($("#Password").val())) {
                alert("密码格式不正确，正确格式为：以字母开头，长度在6-18之间，只能包含字符、数字和下划线。");
                return false;
            }
            if ($("#ConfirmPassword").val() == "") {
                alert("请输入确认密码");
                return false;
            }
            if ($("#ConfirmPassword").val() != $("#Password").val()) {
                alert("密码与确认密码不一致，请更正。");
                return false;
            }
            return isok;
        }
    </script>
</head>
<body style="background-color:white" id="register_page">
    <div id="header" style="position:fixed">
        <!--<a href="/Account/Login"><span class="return"></span></a>-->
        <span>会员注册</span>
    </div>
    <div style="height:45px"></div>
    <div class="register-main">
        <form action="regist_do.php" method="post" onsubmit="return check();">
            <div class="register-main">
                <div class="register-item clearfix">
                    <div class="input-header" style="background-image:url(images/user.png)"></div>
                    <input id="phone" type="text" placeholder="请输入手机号码" name="phone">
                    <input id="securityCode" class="msgs" type="button" value="获取动态码">
                </div>
                <div class="register-item clearfix">
                    <div class="input-header" style="background-image: url(images/yanzhengma.png)"></div>
                    <input id="SecurityCode" type="text" placeholder="请输入短信验证码" name="SecurityCode">
                </div>
                <div class="register-item clearfix">
                    <div class="input-header" style="background-image: url(images/lock.png)"></div>
                    <input id="Password" type="password" placeholder="请设置密码" name="password">
                </div>
                <div class="register-item clearfix">
                    <div class="input-header" style="background-image: url(images/cfmlock.png)"></div>
                    <input id="ConfirmPassword" type="password" placeholder="确认密码" name="ConfirmPassword">
                </div>
                <input id="register" name="register" type="submit" value="注册">
                <span style="color:red"></span>
            </div>
        </form>
    </div>
</body>
</html>
