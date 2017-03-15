<?php
	include_once("include/conn.inc.php");
	if(empty($_GET["id"])){
		header("location:myaddress.php");
	}
	$sql="select * from address where id=$_GET[id]";
	$result=mysqli_query($link,$sql);
	while($show=mysqli_fetch_array($result)){
		$row=$show;
	}
?>
<!DOCTYPE html>
<html xmlns="">

  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>个人中心_收货地址</title>
    <link type="text/css" href="./css/reset.css" rel="stylesheet">
    <link type="text/css" href="./css/uc.css" rel="stylesheet">
    <script type="text/javascript" id="veConnect" async="" src="./js/capture-apps-4.18.6.js"></script>
    <script charset="utf-8" src="./js/v.js"></script>
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
    <script type="text/javascript" src="./js/address.js"></script>
    <script type="text/javascript" src="./js/loadRegion.js"></script>
	<!-- 省联动-->
	<script src="js/distpicker.data.js"></script>
	<script src="js/distpicker.js"></script>
	<script src="js/main.js"></script>
		<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>

<script>
        function check()
        {
            var isok = true;
			if ($("#expConsignee").val() == "") {
                alert("请输入收货人");
                return false;
            }
			if ($("#expAddressInfo").val() == "") {
                alert("请输入街道信息");
                return false;
            }
			if ($("#expPhone").val() == "") {
                alert("请输入手机号码");
                return false;
            }
			var pattern = /^1[3|4|5|7|8][0-9]\d{8}$/;
            if (!pattern.test($("#expPhone").val())) {
                alert("请输入正确的手机号码");
                return false;
            }
	    return isok;
        }					 
		$(function(){
			$("#province1 option:eq(1)").before("<option selected value='<?php echo $row['prov'];?>'><?php echo $row['prov'];?></option>");
			$("#city1 option:eq(1)").before("<option selected value='<?php echo $row['city'];?>'><?php echo $row['city'];?></option>");
			$("#district1 option:eq(1)").before("<option selected value='<?php echo $row['area'];?>'><?php echo $row['area'];?></option>");
		});
		
</script>
  </head>

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
 <?php include_once("include/header.php");?>
    <div class="ac_results" style="top: 292px; left: 794.5px; display: none;">
      <ul></ul>
    </div>
    <div class="cb"></div>
    <div class="uc_w">
      <p class="crumbs">
        <a href="http://www.228.com.cn/">首页</a>＞
        <a href="http://www.228.com.cn/personorders/myorder.html">我的永乐</a>＞
        <a href="http://www.228.com.cn/deliveryAddress/deliveryaddress#">收货地址</a></p>
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
            <a href="http://www.228.com.cn/personAlinForMation/deductintegrals">个人信息</a></li>
          <li class="center-address">
            <a href="http://www.228.com.cn/deliveryAddress/deliveryaddress" class="current">收货地址</a></li>
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
      <script type="text/javascript">$('.center-address a').addClass('current');</script>
      <div class="uc_main">
        <div class="status mb20 font-taho">
          <p class="uc_name fl">
            <span class="red bold fft">pinkxxcat</span>欢迎回来~~</p>
          <p class="uc_id_time fr">
            <span class="mr30">ID：60264493</span>最近登录：2017年03月09日 10:15:31</p></div>
        <div class="main mt20">
          <div class="main-t clear">
            <h2>收货地址</h2></div>  
          <div class="adress">
            <div id="addAddress" class="changeAddress">修改收货地址
              <span class="garya5">（带*为必填项）</span></div>
            <div class="address-info">
              <form id="editAddressForm" action="myaddress_action.php" method="post" onsubmit="return check();">
                <div class="address-tabbox">
                  <table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tbody>
                      <tr>
                        <th width="116" align="right" scope="row" class="tr">
                          <span class="red mr5">*</span>收货人：</th>
                        <td colspan="2">
                          <input class="height" type="text" name="true_name" id="expConsignee" style="width:110px;" value="<?php echo $row["true_name"];?>">
                          <span id="expConsigneeTip"></span>
                        </td>
                      </tr>
					  <tr>
                        <th align="right" scope="row" class="tr">
                          <span class="red mr5">*</span>所在地区：</th>
                        <td colspan="2">
					        <div data-toggle="distpicker">
								  <select class="form-control" name="province" id="province1">
								  <option selected="selected">选择省</option>
								  </select>
								  <select class="form-control" name="city" id="city1">
								  <option selected="selected">选择市</option>
								  </select>
								  <select class="form-control" name="district" id="district1">
								  <option selected="selected">选择区</option>
								  </select>
							</div>
					    </td>
                      </tr>
                      <tr>
                        <th align="right" scope="row" class="tr">
                          <span class="red mr5" id="provinceId">*</span>街道：</th>
                        <td colspan="2">
                          <input class="height" type="text" name="street" id="expAddressInfo" style="width:398px;" value="<?php echo $row["street"];?>">
                          <span id="expAddressInfoTip"></span>
                        </td>
                      </tr>
                      <tr>
                        <th align="right" scope="row" class="tr">邮政编码：</th>
                        <td colspan="2">
                          <input class="height" type="text" name="zipcode" id="expZip" value="<?php echo $row["zipcode"];?>">
                          <span id="expZipTip"></span>
                        </td>
                      </tr>
                      <tr>
                        <th align="right" scope="row" class="tr">
                          <span class="red mr5">*</span>手机号码：</th>
                        <td colspan="2">
                          <input class="height" name="true_phone" type="text" id="expPhone" value="<?php echo $row["true_phone"];?>">
                          <span id="expPhoneTip"></span>
                        </td>
                      </tr>
                      <tr>
                        <th align="right" scope="row" class="tr">邮箱地址：</th>
                        <td colspan="2">
                          <input class="height" name="email" type="text" id="email" value="<?php echo $row["email"];?>">
                          <span id="emails"></span>
                        </td>
                      </tr>
                      <tr>
                        <th rowspan="2" scope="row"></th>
                        <td colspan="2" valign="middle" style="height:30px;">
                          <input type="checkbox" name="default_stauts" value="1" id="mrdz" <?php if($row["default_stauts"]==1) {echo "checked";}?>/>
                          <label for="mrdz">
                            <span style="position:relative; left:2px; top:-1px;">设置为默认地址</span></label>
                        </td>
                      </tr>
                      <tr>
                        <td colspan="3" valign="middle">
						<input type="hidden" name="id" value="<?php echo $row["id"];?>"/>
						  <input type="submit" value="保存" name="myaddress_edit" style="width:60px;height:30px;" onclick="saveorupdate()"/>
						  </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
				</form>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script type="text/javascript">$(".cancel_box a").toggle(function() {
        $(this).next().fadeIn(500);
      },
      function() {
        $(this).next().fadeOut(500);
      });
      function deleteaddress(addressid) {
        $("#Address").attr("rel", addressid);
      }
      function deleteAddress(addressid) {
        var url = getPath() + "/deliveryAddress/deleteAddress";
        $.post(url, {
          addressid: addressid
        },
        function(data) {
          if (data) {
            document.location.reload();
          } else {
            $('#jump-login').minBox1({});
          }
        },
        'json');
      }
      $('#dd').show();
      $(function() {
        $("#codeId").empty().hide();
        $('.addressDel').click(function() {
          var pos = $(this).offset();
          var _left = pos.left - $('.buyCar-shanc').width() / 2 + 6;
          var _top = pos.top + $(this).height() + 3;
          $('.buyCar-shanc').css({
            left: _left,
            top: _top
          }).show();;
          if (ie6) {
            $('.buyCar-shanc').css({
              left: _left,
              top: _top,
              'background': 'url("http://static.228.com.cn/resources/images/newproduct-ie6.png") -5px -100px  no-repeat transparent;'
            }).show();
          }
        }) $('.buyCar-delno').click(function() {
          $('.buyCar-shanc').hide();
        })
      });</script>
    <div class="cb"></div>
   <?php include_once("include/footer.php");?>
    <script src="./js/tag.js" type="text/javascript" async=""></script>
    <script type="text/javascript">var _ozuid = "60264493";</script>
    <script type="text/javascript" src="./js/o_code.js"></script>
  </body>

</html>