<?php
	include_once("include/conn.inc.php");
	//include_once("include/session.inc.php");
	session_start();
	$sql="select * from members where id=1";
	//$sql="select * from shows where id=$_SESSION[id]";
	$result=mysqli_query($link,$sql);
	while($show=mysqli_fetch_array($result)){
		$row=$show;
	}
?>
<html xmlns="">

  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <script charset="utf-8" src="./js/v.js"></script>
    <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7">
    <title>个人中心_个人信息</title>
    <link type="text/css" href="./css/reset.css" rel="stylesheet">
    <link type="text/css" href="./css/uc.css" rel="stylesheet">
    <script type="text/javascript" id="veConnect" async="" src="./js/capture-apps-4.18.6.js"></script>
    <script async="" src="./js/tg.js"></script>
    <script async="" src="./js/analytics.js"></script>
    <script type="text/javascript" defer="" async="" src="./js/y.js"></script>
    <script type="text/javascript" async="" src="./js/adw.js"></script>
    <script type="text/javascript" defer="" async="" src="./js/jiuzhilan_4783.js"></script>
    <script src="./js/hm.js"></script>
    <script type="text/javascript" src="./js/jquery-1.7.2.min.js"></script>
    <script type="text/javascript" src="./js/publicNew.js"></script>
    <script type="text/javascript" src="./js/Validform.min.js"></script>
    <script type="text/javascript" src="./js/jQuery.minBox.js"></script>

 
 
 
    <script type="text/javascript" src="./js/artTemplate.all.min.js"></script>
    <script type="text/javascript" src="./js/jQuery.minBox.js"></script>
    <script>
	var ispass = false;
      var isnickname = true;
      var iscode = true;
      var iszhiwei = true;
      var ismingxing = true;
      var isorther = true;
      var isbirthDay = false;
      var isSex = false;
      var iscity = false;
      var isattention = false;
      function saveorupdate() {
	
        var birthday = $("#birthday").val();
        if (birthday == "" || birthday == undefined) {
          alert("请填写生日！");
          isbirthDay = false;
          return;
        } else {
          isbirthDay = true;
        }
        var customercity = $("#customercity").val();
        if (customercity == "" || customercity == undefined) {
          alert("请填写所在城市！");
          iscity = false;
          return;
        } else {
          iscity = true;
        }
        ispass = isnickname && iscode && iszhiwei && ismingxing && isorther && isbirthDay && iscity && isattention;
        var radio1 = $("#RadioGroup1_0").attr("checked");
        var radio2 = $("#RadioGroup1_1").attr("checked");
        if ((radio1 != 'checked') && (radio2 != 'checked')) {
          alert("请选择性别！"); 
		  isSex = false;
		  return;
        }else{
			isSex = true;
		}
      }
      $(document).ready(function() {
        var oldNickname = $("#nickname").val();
        $("#nickname").blur(function() {
          var nickname = $(this).val();
          if (nickname != oldNickname) {
            test(nickname);
          }
        });
        $("#card").blur(function() {
          var card = $(this).val();
          var isIDCard1 = /^[1-9]\d{7}((0\d)|(1[0-2]))(([0|1|2]\d)|3[0-1])\d{3}$/;
          var reg = /^[1-9]\d{5}[1-9]\d{3}((0\d)|(1[0-2]))(([0|1|2]\d)|3[0-1])\d{4}$/;
          var reg18 = /^[1-9]\d{5}[1-9]\d{3}((0\d)|(1[0-2]))(([0|1|2]\d)|3[0-1])\d{3}((\d|X|x){1})$/;
          card = card.replace(/^\s*|\s*$/g, "");
          if (card.length == 0) {
            $("#cardshow").html("身份证格式错误!");
            iscard = false;
            return;
          }
          sBirthday = card.substr(6, 4) + "-" + Number(card.substr(10, 2)) + "-" + Number(card.substr(12, 2));
          var d = new Date(sBirthday.replace(/-/g, "/"));
          if (sBirthday != (d.getFullYear() + "-" + (d.getMonth() + 1) + "-" + d.getDate())) {
            $("#cardshow").html("身份证格式错误!");
            iscard = false;
            return;
          }
          var cards = card.replace(/x$/i, "a");
          var aCity = {
            11 : "北京",
            12 : "天津",
            13 : "河北",
            14 : "山西",
            15 : "内蒙古",
            21 : "辽宁",
            22 : "吉林",
            23 : "黑龙江",
            31 : "上海",
            32 : "江苏",
            33 : "浙江",
            34 : "安徽",
            35 : "福建",
            36 : "江西",
            37 : "山东",
            41 : "河南",
            42 : "湖北",
            43 : "湖南",
            44 : "广东",
            45 : "广西",
            46 : "海南",
            50 : "重庆",
            51 : "四川",
            52 : "贵州",
            53 : "云南",
            54 : "西藏",
            61 : "陕西",
            62 : "甘肃",
            63 : "青海",
            64 : "宁夏",
            65 : "新疆",
            71 : "台湾",
            81 : "香港",
            82 : "澳门",
            91 : "国外"
          };
          if (aCity[parseInt(cards.substr(0, 2))] == null) {
            $("#cardshow").html("身份证格式错误!");
            iscard = false;
            return;
          }
          if (reg18.test(card)) {
            $("#cardshow").html("");
            $("#cardshow").html("正确!");
            iscard = true;
            return;
          }
          if (reg.test(card)) {
            $("#cardshow").html("");
            $("#cardshow").html("正确!");
            iscard = true;
            return;
          }
          if (isIDCard1.test(card)) {
            $("#cardshow").html("");
            $("#cardshow").html("正确!");
            iscard = true;
            return;
          }
          iscard = false;
          $("#cardshow").html("身份证格式错误!");
          return;
        });
        $("#position").blur(function() {
          var position = $(this).val();
          position = position.replace(/^\s*|\s*$/g, "");
          if (position.length == 0) {
            iszhiwei = true;
            return;
          }
          var enNum = position ? position.length: 0;
          if (enNum <= 15) {
            $("#positionshow").html("正确!");
            iszhiwei = true;
            return;
          } else {
            iszhiwei = false;
            $("#positionshow").html("长度不能超过15！");
            return;
          }
        });
        $("#attentionstar").blur(function() {
          var attentionstar = $(this).val();
          attentionstar = attentionstar.replace(/^\s*|\s*$/g, "");
          if (attentionstar.length == 0) {
            ismingxing = true;
            return;
          }
          var enNum = attentionstar ? attentionstar.length: 0;
          if (enNum <= 15) {
            $("#attentionstarshow").html("正确!");
            ismingxing = true;
            return;
          } else {
            ismingxing = false;
            $("#attentionstarshow").html("长度不能超过15！");
            return;
          }
        });
        $("#interestsother").blur(function() {
          var interestsother = $(this).val();
          interestsother = interestsother.replace(/^\s*|\s*$/g, "");
          if (interestsother.length == 0) {
            isorther = true;
            return;
          }
          var enNum = interestsother ? interestsother.length: 0;
          if (enNum <= 15) {
            $("#interestsothershow").html("正确!");
            isorther = true;
            return;
          } else {
            isorther = false;
            $("#interestsothershow").html("长度不能超过15！");
            return;
          }
        });
      });
      function test(inputVal) {
        inputVal = inputVal.replace(/^\s*|\s*$/g, "");
        if (inputVal.length == 0) {
          isnickname = false;
          $("#nicknameshow").html("昵称不能为空!");
          return;
        } else {
          isnickname = true;
        }
        var enNum = inputVal ? inputVal.length: 0;
      }
      function positionTest(inputVal) {
        if (inputVal.length == 0) {
          iszhiwei = true;
          return;
        }
        var enNum = inputVal ? inputVal.length: 0;
        if (enNum <= 15) {
          $("#positionshow").html("正确!");
          isnickname = true;
          return;
        } else {
          isnickname = false;
          $("#positionshow").html("长度不能超过15！");
          return;
        }
      }</script>
    <link href="./css/WdatePicker.css" rel="stylesheet" type="text/css"></head>

  <body>
    <div id="caibei"></div>

    <div class="tongz" style="width:100%;display: none;">
      <div style="width:1000px;margin:0 auto;height:23px;">
        <div class="leftMsg fl" style="width:980px;text-align:center;color:#cc0001;"></div>
        <div class="fl" style="padding-top:6px;">
          <a style="cursor: pointer;" id="header-close">
            <img src=""></a>
        </div>
      </div>
      <div class="cb"></div>
    </div>
    <div class="login_msg productnew-login undb" id="jump-login" style="z-index:90000000000000;"></div>

    <script type="text/javascript" src="./js/artTemplate.all.min.js"></script>
    <!--[if IE 6]>
      <script type="text/javascript" src="http://static.228.com.cn/resources/js/png.js"></script>
      <script type="text/javascript">DD_belatedPNG.fix('.quick-guide li img');</script>
    <![endif]-->
<?php include_once("include/header.php");?>
    <div class="cb"></div>
    <p class="crumbs">
      <a href="http://www.228.com.cn/">首页</a>＞
      <a href="http://www.228.com.cn/personorders/myorder.html">我的永乐</a>＞
      <a href="http://www.228.com.cn/personAlinForMation/deductintegrals#">个人信息</a></p>
    <div class="uc_w">
      <div class="uc_nav">
        <h2>交易管理</h2>
        <ul>
          <li class="center-order">
            <a href="http://www.228.com.cn/personorders/myorder.html">我的订单</a></li>
          <li class="center-shengou">
            <a href="http://www.228.com.cn/guoanapplylist">我的申购</a></li>
          <li class="center-purse">
            <a href="http://www.228.com.cn/electronicPurse/personalPurse.html">电子钱包</a></li>
          <li class="center-voucher">
            <a href="http://www.228.com.cn/cashCoupon/myCashCoupon/1?status=1">我的现金券</a></li>
          <li class="center-musiccard">
            <a href="http://www.228.com.cn/musiccard/queryrecord">我的乐通卡</a></li>
          <li class="center-myintegral">
            <a href="http://www.228.com.cn/myIntegral/incomerecord">我的积分</a></li>
          <li class="center-outofregister">
            <a href="http://www.228.com.cn/outOfRegister/outOfRegisterlist">缺货登记</a></li>
          <li class="center-mylikes">
            <a href="http://www.228.com.cn/myLike/mylike">我的喜欢</a></li>
        </ul>
        <h2>账户管理</h2>
        <ul>
          <li class="center-personAlinFormationList">
            <a href="http://www.228.com.cn/personAlinForMation/deductintegrals" class="current">个人信息</a></li>
          <li class="center-address">
            <a href="http://www.228.com.cn/deliveryAddress/deliveryaddress">收货地址</a></li>
          <li class="center-contact">
            <a href="http://www.228.com.cn/guoancontactlist">常用购票人</a></li>
          <li class="center-security">
            <a href="http://www.228.com.cn/securityCenter/index">安全中心</a></li>
          <li class="center-myquestion">
            <a href="http://www.228.com.cn/myQuestions/myquestionslist">我的问答</a></li>
          <li class="center-mycomment">
            <a href="http://www.228.com.cn/toCommen/tocommen">我的评论</a></li>
          <li class="center-myemail">
            <a href="http://www.228.com.cn/toEmail/toemail">我的订阅</a></li>
          <li class="center-myadvice">
            <a href="http://www.228.com.cn/common/idea.html">意见建议</a></li>
        </ul>
      </div>
      <script type="text/javascript">$('.center-personAlinFormationList a').addClass('current');</script>
      <div class="uc_main">
        <div class="status mb20 font-taho">
          <p class="uc_name fl">
            <span class="red bold fft">pinkxxcat</span>欢迎回来~~</p>
          <p class="uc_id_time fr">
            <span class="mr30">ID：60264493</span>最近登录：2017年03月09日 10:15:31</p></div>
        <div class="main mt20">
          <div class="main-t clear">
            <h2>个人信息</h2></div>
          <form id="personAlinforForm" method="post" action="myinfo_action.php">
            <input type="hidden" id="jumpBackUrl" name="jumpBackUrl" value="">
            <table width="763" border="0" cellspacing="0" cellpadding="0" class="u_infor mt20 ml30">
              <tbody>
                <tr>
                  <th width="128" scope="row">注册手机：</th>
                  <td colspan="4"><?php echo substr_replace($row['phone'], '****', 5, 4);?>
                <!--    <span>
                      <a href="http://www.228.com.cn/securityCenter/index" class="ml10 blue">修改手机</a></span>-->
                  </td>
                </tr>
                <tr>
                  <th scope="row">注册邮箱：</th>
                  <td colspan="4"><?php echo substr_replace($row['email'], '***', 2, 3);?>
                  </td>
                </tr>
              </tbody>
            </table>
            <p class="pop-tip ma mt10" style="width:710px;">完善更多个人信息，有助于我们为您提供更多个性化的服务，世博将尊重并保护您的隐私。</p>
            <span class="red" id="sexMes"></span>
            <table width="763" border="0" cellspacing="0" cellpadding="0" class="u_infor mt20 ml30">
              <tbody>
                <tr>
                  <th width="128" scope="row">
                    <span class="red">*</span>昵称：</th>
                  <td colspan="4">
                    <input type="text" name="nick_name" id="nickname" style="width:106px;padding-left:4px;" value="<?php echo $row['nick_name'];?>">
                    <span id="nicknameshow" style="color: red"></span>
                  </td>
                </tr>
                <tr>
                  <th scope="row">真实姓名：</th>
                  <td colspan="4">
                    <input type="text" name="true_name" id="truename" style="width:106px;padding-left:4px;" value="<?php echo $row['true_name'];?>"></td>
                </tr>
                <tr>
                  <th scope="row">
                    <span class="red">*</span>性别：</th>
                  <td width="76">
                    <label>
                      <input type="radio" name="sex" value="男" id="RadioGroup1_0" style="width:20px;vertical-align:middle;margin-top:-2px;margin-bottom:1px;" <?php if($row['sex']=='男'){echo "checked" ;}?>>男</label></td>
                  <td width="132">
                    <label>
                      <input type="radio" name="sex" value="女" id="RadioGroup1_1" style="width:20px;vertical-align:middle;margi-top:-2px;margin-bottom:1px;" <?php if($row['sex']=='女'){echo "checked";}?>>女</label></td>
                  <td width="336">&nbsp;</td>
                  <td>&nbsp;</td></tr>
                <tr>
                  <th scope="row">
                    <span class="red">*</span>出生日期：</th>
                  <td colspan="4">
                    <input name="birthday" id="birthday" type="date" class="inpcls" style="width:190px;" value="<?php echo $row['birthday'];?>" onfocus="WdatePicker()" >
                    <span class="red" id="birthdayMes"></span>
                  </td>
                </tr>
                <tr>
                  <th scope="row">身份证号：</th>
                  <td colspan="4">
                    <input type="text" name="ident_num" id="card" style="width:195px;" value="<?php echo $row['ident_num'];?>">
                    <span id="cardshow" style="color: red"></span>
                  </td>
                </tr>
                <tr>
                  <th scope="row">婚姻状况：</th>
                  <td colspan="4">
                    <select name="marr_status" id="maritalstatus">
                      <option value="<?php echo $row['marr_status'];?>"><?php  if($row['marr_status']==""){echo "请选择";}else{echo $row['marr_status'];}?></option>
                      <option value="单身">单身</option>
                      <option value="恋爱中">恋爱中</option>
                      <option value="已婚">已婚</option></select>
                  </td>
                </tr>
                <tr>
                  <th scope="row">子女状况：</th>
                  <td width="76">
                    <label>
                      <input type="radio" name="chil_status" value="有" id="RadioGroup1_2" style="width:20px;vertical-align:middle;margin-top:-2px;margin-bottom:1px;" <?php if($row['chil_status']=='有'){echo "checked" ;}?>>有</label></td>
                  <td width="132">
                    <label>
                      <input type="radio" name="chil_status" value="无"  id="RadioGroup1_3" style="width:20px;vertical-align:middle;margin-top:-2px;margin-bottom:1px;" <?php if($row['chil_status']=='无'){echo "checked" ;}?>>无</label></td>
                  <td width="336">&nbsp;</td>
                  <td>&nbsp;</td></tr>
                <tr>
                  <th scope="row">
                    <span class="red">*</span>所在城市：</th>
                  <td colspan="4">
                    <select name="city_location" class="gao" id="customercity">
                      <option value="<?php echo $row['city_location'];?>"><?php  if($row['city_location']==""){echo "请选择";}else{echo $row['city_location'];}?></option>
                      <option value="安康市">安康市</option>
                      <option value="安庆市">安庆市</option>
                      <option value="安顺市">安顺市</option>
                      <option value="安阳市">安阳市</option>
                      <option value="鞍山市">鞍山市</option>
                      <option value="巴彦淖尔市">巴彦淖尔市</option>
                      <option value="巴中市">巴中市</option>
                      <option value="白城市">白城市</option>
                      <option value="白山市">白山市</option>
                      <option value="白银市">白银市</option>
                      <option value="百色市">百色市</option>
                      <option value="蚌埠市">蚌埠市</option>
                      <option value="包头市">包头市</option>
                      <option value="宝鸡市">宝鸡市</option>
                      <option value="保定市">保定市</option>
                      <option value="保山市">保山市</option>
                      <option value="北海市">北海市</option>
                      <option value="北京市">北京市</option>
                      <option value="本溪市">本溪市</option>
                      <option value="滨州市">滨州市</option>
                      <option value="亳州市">亳州市</option>
                      <option value="沧州市">沧州市</option>
                      <option value="长春市">长春市</option>
                      <option value="长沙市">长沙市</option>
                      <option value="长治市">长治市</option>
                      <option value="常德市">常德市</option>
                      <option value="常州市">常州市</option>
                      <option value="巢湖市">巢湖市</option>
                      <option value="朝阳市">朝阳市</option>
                      <option value="潮州市">潮州市</option>
                      <option value="郴州市">郴州市</option>
                      <option value="成都市">成都市</option>
                      <option value="承德市">承德市</option>
                      <option value="池州市">池州市</option>
                      <option value="赤峰市">赤峰市</option>
                      <option value="重庆市">重庆市</option>
                      <option value="崇左市">崇左市</option>
                      <option value="滁州市">滁州市</option>
                      <option value="达州市">达州市</option>
                      <option value="大连市">大连市</option>
                      <option value="大庆市">大庆市</option>
                      <option value="大同市">大同市</option>
                      <option value="丹东市">丹东市</option>
                      <option value="德阳市">德阳市</option>
                      <option value="德州市">德州市</option>
                      <option value="定西市">定西市</option>
                      <option value="东莞市">东莞市</option>
                      <option value="东营市">东营市</option>
                      <option value="鄂尔多斯市">鄂尔多斯市</option>
                      <option value="鄂州市">鄂州市</option>
                      <option value="防城港市">防城港市</option>
                      <option value="佛山市">佛山市</option>
                      <option value="福州市">福州市</option>
                      <option value="抚顺市">抚顺市</option>
                      <option value="抚州市">抚州市</option>
                      <option value="阜新市">阜新市</option>
                      <option value="阜阳市">阜阳市</option>
                      <option value="赣州市">赣州市</option>
                      <option value="固原市">固原市</option>
                      <option value="广安市">广安市</option>
                      <option value="广元市">广元市</option>
                      <option value="广州市">广州市</option>
                      <option value="贵港市">贵港市</option>
                      <option value="贵阳市">贵阳市</option>
                      <option value="桂林市">桂林市</option>
                      <option value="哈尔滨市">哈尔滨市</option>
                      <option value="海口市">海口市</option>
                      <option value="邯郸市">邯郸市</option>
                      <option value="汉中市">汉中市</option>
                      <option value="杭州市">杭州市</option>
                      <option value="合肥市">合肥市</option>
                      <option value="河池市">河池市</option>
                      <option value="河源市">河源市</option>
                      <option value="菏泽市">菏泽市</option>
                      <option value="贺州市">贺州市</option>
                      <option value="鹤壁市">鹤壁市</option>
                      <option value="鹤岗市">鹤岗市</option>
                      <option value="黑河市">黑河市</option>
                      <option value="衡水市">衡水市</option>
                      <option value="衡阳市">衡阳市</option>
                      <option value="呼和浩特市">呼和浩特市</option>
                      <option value="呼伦贝尔市">呼伦贝尔市</option>
                      <option value="湖州市">湖州市</option>
                      <option value="葫芦岛市">葫芦岛市</option>
                      <option value="怀化市">怀化市</option>
                      <option value="淮安市">淮安市</option>
                      <option value="淮北市">淮北市</option>
                      <option value="淮南市">淮南市</option>
                      <option value="黄冈市">黄冈市</option>
                      <option value="黄山市">黄山市</option>
                      <option value="黄石市">黄石市</option>
                      <option value="惠州市">惠州市</option>
                      <option value="鸡西市">鸡西市</option>
                      <option value="吉安市">吉安市</option>
                      <option value="吉林市">吉林市</option>
                      <option value="济南市">济南市</option>
                      <option value="济宁市">济宁市</option>
                      <option value="佳木斯市">佳木斯市</option>
                      <option value="嘉兴市">嘉兴市</option>
                      <option value="嘉峪关市">嘉峪关市</option>
                      <option value="江门市">江门市</option>
                      <option value="焦作市">焦作市</option>
                      <option value="揭阳市">揭阳市</option>
                      <option value="金昌市">金昌市</option>
                      <option value="金华市">金华市</option>
                      <option value="锦州市">锦州市</option>
                      <option value="晋城市">晋城市</option>
                      <option value="晋中市">晋中市</option>
                      <option value="荆门市">荆门市</option>
                      <option value="荆州市">荆州市</option>
                      <option value="景德镇市">景德镇市</option>
                      <option value="九江市">九江市</option>
                      <option value="酒泉市">酒泉市</option>
                      <option value="开封市">开封市</option>
                      <option value="克拉玛依市">克拉玛依市</option>
                      <option value="昆明市">昆明市</option>
                      <option value="拉萨市">拉萨市</option>
                      <option value="来宾市">来宾市</option>
                      <option value="莱芜市">莱芜市</option>
                      <option value="兰州市">兰州市</option>
                      <option value="廊坊市">廊坊市</option>
                      <option value="乐山市">乐山市</option>
                      <option value="丽江市">丽江市</option>
                      <option value="丽水市">丽水市</option>
                      <option value="连云港市">连云港市</option>
                      <option value="辽阳市">辽阳市</option>
                      <option value="辽源市">辽源市</option>
                      <option value="聊城市">聊城市</option>
                      <option value="临沧市">临沧市</option>
                      <option value="临汾市">临汾市</option>
                      <option value="临沂市">临沂市</option>
                      <option value="柳州市">柳州市</option>
                      <option value="六安市">六安市</option>
                      <option value="六盘水市">六盘水市</option>
                      <option value="龙岩市">龙岩市</option>
                      <option value="陇南市">陇南市</option>
                      <option value="娄底市">娄底市</option>
                      <option value="泸州市">泸州市</option>
                      <option value="洛阳市">洛阳市</option>
                      <option value="漯河市">漯河市</option>
                      <option value="吕梁市">吕梁市</option>
                      <option value="马鞍山市">马鞍山市</option>
                      <option value="茂名市">茂名市</option>
                      <option value="眉山市">眉山市</option>
                      <option value="梅州市">梅州市</option>
                      <option value="绵阳市">绵阳市</option>
                      <option value="牡丹江市">牡丹江市</option>
                      <option value="南昌市">南昌市</option>
                      <option value="南充市">南充市</option>
                      <option value="南京市">南京市</option>
                      <option value="南宁市">南宁市</option>
                      <option value="南平市">南平市</option>
                      <option value="南通市">南通市</option>
                      <option value="南阳市">南阳市</option>
                      <option value="内江市">内江市</option>
                      <option value="宁波市">宁波市</option>
                      <option value="宁德市">宁德市</option>
                      <option value="攀枝花市">攀枝花市</option>
                      <option value="盘锦市">盘锦市</option>
                      <option value="平顶山市">平顶山市</option>
                      <option value="平凉市">平凉市</option>
                      <option value="萍乡市">萍乡市</option>
                      <option value="莆田市">莆田市</option>
                      <option value="濮阳市">濮阳市</option>
                      <option value="普洱市">普洱市</option>
                      <option value="七台河市">七台河市</option>
                      <option value="齐齐哈尔市">齐齐哈尔市</option>
                      <option value="潜江市">潜江市</option>
                      <option value="钦州市">钦州市</option>
                      <option value="秦皇岛市">秦皇岛市</option>
                      <option value="青岛市">青岛市</option>
                      <option value="清远市">清远市</option>
                      <option value="庆阳市">庆阳市</option>
                      <option value="曲靖市">曲靖市</option>
                      <option value="衢州市">衢州市</option>
                      <option value="泉州市">泉州市</option>
                      <option value="日照市">日照市</option>
                      <option value="三门峡市">三门峡市</option>
                      <option value="三明市">三明市</option>
                      <option value="三沙市">三沙市</option>
                      <option value="三亚市">三亚市</option>
                      <option value="汕头市">汕头市</option>
                      <option value="汕尾市">汕尾市</option>
                      <option value="商洛市">商洛市</option>
                      <option value="商丘市">商丘市</option>
                      <option value="上海市">上海市</option>
                      <option value="上饶市">上饶市</option>
                      <option value="韶关市">韶关市</option>
                      <option value="邵阳市">邵阳市</option>
                      <option value="绍兴市">绍兴市</option>
                      <option value="深圳市">深圳市</option>
                      <option value="沈阳市">沈阳市</option>
                      <option value="十堰市">十堰市</option>
                      <option value="石家庄市">石家庄市</option>
                      <option value="石嘴山市">石嘴山市</option>
                      <option value="双鸭山市">双鸭山市</option>
                      <option value="朔州市">朔州市</option>
                      <option value="四平市">四平市</option>
                      <option value="松原市">松原市</option>
                      <option value="苏州市">苏州市</option>
                      <option value="宿迁市">宿迁市</option>
                      <option value="宿州市">宿州市</option>
                      <option value="绥化市">绥化市</option>
                      <option value="随州市">随州市</option>
                      <option value="遂宁市">遂宁市</option>
                      <option value="台州市">台州市</option>
                      <option value="太原市">太原市</option>
                      <option value="泰安市">泰安市</option>
                      <option value="泰州市">泰州市</option>
                      <option value="唐山市">唐山市</option>
                      <option value="天津市">天津市</option>
                      <option value="天门市">天门市</option>
                      <option value="天水市">天水市</option>
                      <option value="铁岭市">铁岭市</option>
                      <option value="通化市">通化市</option>
                      <option value="通辽市">通辽市</option>
                      <option value="铜川市">铜川市</option>
                      <option value="铜陵市">铜陵市</option>
                      <option value="威海市">威海市</option>
                      <option value="潍坊市">潍坊市</option>
                      <option value="渭南市">渭南市</option>
                      <option value="温州市">温州市</option>
                      <option value="乌海市">乌海市</option>
                      <option value="乌兰察布市">乌兰察布市</option>
                      <option value="乌鲁木齐市">乌鲁木齐市</option>
                      <option value="无锡市">无锡市</option>
                      <option value="吴忠市">吴忠市</option>
                      <option value="芜湖市">芜湖市</option>
                      <option value="梧州市">梧州市</option>
                      <option value="武汉市">武汉市</option>
                      <option value="武威市">武威市</option>
                      <option value="西安市">西安市</option>
                      <option value="西宁市">西宁市</option>
                      <option value="厦门市">厦门市</option>
                      <option value="仙桃市">仙桃市</option>
                      <option value="咸宁市">咸宁市</option>
                      <option value="咸阳市">咸阳市</option>
                      <option value="湘潭市">湘潭市</option>
                      <option value="襄阳市">襄阳市</option>
                      <option value="孝感市">孝感市</option>
                      <option value="忻州市">忻州市</option>
                      <option value="新乡市">新乡市</option>
                      <option value="新余市">新余市</option>
                      <option value="信阳市">信阳市</option>
                      <option value="邢台市">邢台市</option>
                      <option value="徐州市">徐州市</option>
                      <option value="许昌市">许昌市</option>
                      <option value="宣城市">宣城市</option>
                      <option value="雅安市">雅安市</option>
                      <option value="烟台市">烟台市</option>
                      <option value="延安市">延安市</option>
                      <option value="盐城市">盐城市</option>
                      <option value="扬州市">扬州市</option>
                      <option value="阳江市">阳江市</option>
                      <option value="阳泉市">阳泉市</option>
                      <option value="伊春市">伊春市</option>
                      <option value="宜宾市">宜宾市</option>
                      <option value="宜昌市">宜昌市</option>
                      <option value="宜春市">宜春市</option>
                      <option value="益阳市">益阳市</option>
                      <option value="银川市">银川市</option>
                      <option value="鹰潭市">鹰潭市</option>
                      <option value="营口市">营口市</option>
                      <option value="永州市">永州市</option>
                      <option value="榆林市">榆林市</option>
                      <option value="玉林市">玉林市</option>
                      <option value="玉溪市">玉溪市</option>
                      <option value="岳阳市">岳阳市</option>
                      <option value="云浮市">云浮市</option>
                      <option value="运城市">运城市</option>
                      <option value="枣庄市">枣庄市</option>
                      <option value="湛江市">湛江市</option>
                      <option value="张家界市">张家界市</option>
                      <option value="张家口市">张家口市</option>
                      <option value="张掖市">张掖市</option>
                      <option value="漳州市">漳州市</option>
                      <option value="昭通市">昭通市</option>
                      <option value="肇庆市">肇庆市</option>
                      <option value="镇江市">镇江市</option>
                      <option value="郑州市">郑州市</option>
                      <option value="中山市">中山市</option>
                      <option value="中卫市">中卫市</option>
                      <option value="舟山市">舟山市</option>
                      <option value="周口市">周口市</option>
                      <option value="株洲市">株洲市</option>
                      <option value="珠海市">珠海市</option>
                      <option value="驻马店市">驻马店市</option>
                      <option value="资阳市">资阳市</option>
                      <option value="淄博市">淄博市</option>
                      <option value="自贡市">自贡市</option>
                      <option value="遵义市">遵义市</option>
                      <option value="阿克苏地区">阿克苏地区</option>
                      <option value="阿勒泰地区">阿勒泰地区</option>
                      <option value="阿里地区">阿里地区</option>
                      <option value="毕节地区">毕节地区</option>
                      <option value="昌都地区">昌都地区</option>
                      <option value="大兴安岭地区">大兴安岭地区</option>
                      <option value="儋州市">儋州市</option>
                      <option value="东方市">东方市</option>
                      <option value="哈密地区">哈密地区</option>
                      <option value="海东地区">海东地区</option>
                      <option value="和田地区">和田地区</option>
                      <option value="喀什地区">喀什地区</option>
                      <option value="林芝地区">林芝地区</option>
                      <option value="那曲地区">那曲地区</option>
                      <option value="琼海市">琼海市</option>
                      <option value="日喀则地区">日喀则地区</option>
                      <option value="山南地区">山南地区</option>
                      <option value="塔城地区">塔城地区</option>
                      <option value="铜仁地区">铜仁地区</option>
                      <option value="吐鲁番地区">吐鲁番地区</option>
                      <option value="万宁市">万宁市</option>
                      <option value="文昌市">文昌市</option>
                      <option value="五指山市">五指山市</option>
                      <option value="阿拉善盟">阿拉善盟</option>
                      <option value="澄迈县">澄迈县</option>
                      <option value="定安县">定安县</option>
                      <option value="临高县">临高县</option>
                      <option value="屯昌县">屯昌县</option>
                      <option value="锡林郭勒盟">锡林郭勒盟</option>
                      <option value="兴安盟">兴安盟</option>
                      <option value="阿坝藏族羌族自治州">阿坝藏族羌族自治州</option>
                      <option value="巴音郭楞蒙古自治州">巴音郭楞蒙古自治州</option>
                      <option value="白沙黎族自治县">白沙黎族自治县</option>
                      <option value="保亭黎族苗族自治县">保亭黎族苗族自治县</option>
                      <option value="博尔塔拉蒙古自治州">博尔塔拉蒙古自治州</option>
                      <option value="昌吉回族自治州">昌吉回族自治州</option>
                      <option value="昌江黎族自治县">昌江黎族自治县</option>
                      <option value="楚雄彝族自治州">楚雄彝族自治州</option>
                      <option value="大理白族自治州">大理白族自治州</option>
                      <option value="德宏傣族景颇族自治州">德宏傣族景颇族自治州</option>
                      <option value="迪庆藏族自治州">迪庆藏族自治州</option>
                      <option value="恩施土家族苗族自治州">恩施土家族苗族自治州</option>
                      <option value="甘南藏族自治州">甘南藏族自治州</option>
                      <option value="甘孜藏族自治州">甘孜藏族自治州</option>
                      <option value="果洛藏族自治州">果洛藏族自治州</option>
                      <option value="海北藏族自治州">海北藏族自治州</option>
                      <option value="海南藏族自治州">海南藏族自治州</option>
                      <option value="海西蒙古族藏族自治州">海西蒙古族藏族自治州</option>
                      <option value="红河哈尼族彝族自治州">红河哈尼族彝族自治州</option>
                      <option value="黄南藏族自治州">黄南藏族自治州</option>
                      <option value="克孜勒苏柯尔克孜自治州">克孜勒苏柯尔克孜自治州</option>
                      <option value="乐东黎族自治县">乐东黎族自治县</option>
                      <option value="凉山彝族自治州">凉山彝族自治州</option>
                      <option value="临夏回族自治州">临夏回族自治州</option>
                      <option value="陵水黎族自治县">陵水黎族自治县</option>
                      <option value="怒江傈僳族自治州">怒江傈僳族自治州</option>
                      <option value="黔东南苗族侗族自治州">黔东南苗族侗族自治州</option>
                      <option value="黔南布依族苗族自治州">黔南布依族苗族自治州</option>
                      <option value="黔西南布依族苗族自治州">黔西南布依族苗族自治州</option>
                      <option value="琼中黎族苗族自治县">琼中黎族苗族自治县</option>
                      <option value="文山壮族苗族自治州">文山壮族苗族自治州</option>
                      <option value="西双版纳傣族自治州">西双版纳傣族自治州</option>
                      <option value="湘西土家族苗族自治州">湘西土家族苗族自治州</option>
                      <option value="延边朝鲜族自治州">延边朝鲜族自治州</option>
                      <option value="伊犁哈萨克自治州">伊犁哈萨克自治州</option>
                      <option value="玉树藏族自治州">玉树藏族自治州</option>
                      <option value="洋浦经济开发区">洋浦经济开发区</option>
                      <option value="直辖市">直辖市</option>
                      <option value="澳门特别行政区">澳门特别行政区</option>
                      <option value="韩国">韩国</option>
                      <option value="马来西亚">马来西亚</option>
                      <option value="日本">日本</option>
                      <option value="神农架">神农架</option>
                      <option value="台湾省">台湾省</option>
                      <option value="泰国">泰国</option>
                      <option value="香港特别行政区">香港特别行政区</option>
                      <option value="新加坡">新加坡</option></select>
                  </td>
                </tr>
                <tr>
                  <th scope="row">从事行业：</th>
                  <td colspan="4">
                    <select name="engage_work" id="industry">
                        <option value="<?php echo $row['engage_work'];?>"><?php  if($row['engage_work']==""){echo "请选择";}else{echo $row['engage_work'];}?></option>
                      <option value="农、林、牧、渔业">农、林、牧、渔业</option>
                      <option value="采矿业">采矿业</option>
                      <option value="制造业">制造业</option>
                      <option value="电力、燃气及水的生产和供应业">电力、燃气及水的生产和供应业</option>
                      <option value="建筑业">建筑业</option>
                      <option value="交通运输、仓储和邮政业">交通运输、仓储和邮政业</option>
                      <option value="信息传输、计算机服务和软件业">信息传输、计算机服务和软件业</option>
                      <option value="批发和零售业">批发和零售业</option>
                      <option value="住宿和餐饮业">住宿和餐饮业</option>
                      <option value="金融业">金融业</option>
                      <option value="房地产业">房地产业</option>
                      <option value="租赁和商务服务业">租赁和商务服务业</option>
                      <option value="科学研究、技术服务和地质勘查业">科学研究、技术服务和地质勘查业</option>
                      <option value="水利、环境和公共设施管理业">水利、环境和公共设施管理业</option>
                      <option value="居民服务和其他服务业">居民服务和其他服务业</option>
                      <option value="教育">教育业</option>
                      <option value="卫生、社会保障和社会福利业">卫生、社会保障和社会福利业</option>
                      <option value="文化、体育和娱乐业">文化、体育和娱乐业</option>
                      <option value="公共管理与社会组织">公共管理与社会组织</option>
                      <option value="国际组织">国际组织</option></select>
                  </td>
                </tr>
                <tr>
                  <th scope="row">职位：</th>
                  <td colspan="4">
                    <input type="text" name="position_work" id="position" style="width:195px;" value="<?php echo $row['position_work'];?>">
                    <span id="positionshow" style="color: red"></span>
                  </td>
                </tr>
                <tr>
                  <th scope="row">教育程度：</th>
                  <td colspan="3">
                    <select name="edu_level" id="education">
                    <option value="<?php echo $row['edu_level'];?>"><?php  if($row['edu_level']==""){echo "请选择";}else{echo $row['edu_level'];}?></option>
                      <option value="高中">高中</option>
                      <option value="大专">大专</option>
                      <option value="大学本科">大学本科</option>
                      <option value="研究生">研究生</option>
                      <option value="高硕士">硕士</option>
                      <option value="博士">博士</option>
                      <option value="博士后">博士后</option></select>
                  </td>
                  <td>&nbsp;</td></tr>
                <tr>
                  <th scope="row">收入水平：</th>
                  <td colspan="3">
                    <select name="Income_level" id="incomelevels">
                    <option value="<?php echo $row['Income_level'];?>"><?php  if($row['Income_level']==""){echo "请选择";}else{echo $row['Income_level'];}?></option>
                      <option value="1000以下">1000以下</option>
                      <option value="1000-2999">1000-2999</option>
                      <option value="3000-4999">3000-4999</option>
                      <option value="5000-7999">5000-7999</option>
                      <option value="8000-1万">8000-1万</option>
                      <option value="1万以上">1万以上</option></select>
                  </td>
                  <td>&nbsp;</td></tr>
                <tr>
                  <th height="50" scope="row"></th>
                  <td colspan="2" valign="top">
					 <input type="submit" name="myinfo" id="" value="保存" onclick="saveorupdate()" style="width:80px;">
                  </td>
                </tr>
              </tbody>
            </table>
          </form>
        </div>
      </div>
    </div>
    <div class="cb"></div>
	<?php include_once("include/footer.php");?>
    <!--[if IE 6]>
      <script type="text/javascript" src="http://static.228.com.cn/resources/js/png.js"></script>
      <script type="text/javascript">DD_belatedPNG.fix('.booking,.advance-booking,.no1,#sort h3 a,#sort h3,.quick-menu li.myyl a,.quick-menu li.guide a,.copyright a,.change-city,#main-nav li,*html #rigpic a');</script>
    <![endif]-->
    <script src="./js/tag.js" type="text/javascript" async=""></script>
    <script type="text/javascript">var _ozuid = "60264493";</script>
    <script type="text/javascript" src="./js/o_code.js"></script>
    <script type="text/JavaScript" src="./js/WdatePicker.js"></script>
    <script type="text/javascript"></script>
  </body>

</html>