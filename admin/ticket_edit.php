<?php
session_start();
include("mysql_connect.inc");
header("Content-Type: text/html;charset=utf-8");
if(empty($_SESSION['admin'])){
	echo "<script>alert('请登录!');</script>";
	echo "<script>location.href='login.html'</script>";
}
if(isset($_GET['id'])){
	$id=$_GET['id'];
	$res=mysql_query("select * from shows where id='$id'");
	$row=mysql_fetch_array($res);
}else{
	echo "<script>history.back();</script>";
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<title>后台管理系统</title>
<meta name="author" content="DeathGhost" />
<link rel="stylesheet" type="text/css" href="css/style.css" />
<!--[if lt IE 9]>
<script src="js/html5.js"></script>
<![endif]-->
<script src="js/jquery.js"></script>
<!--script src="js/jquery.mCustomScrollbar.concat.min.js"></script-->
<link rel="stylesheet" href="kindeditor/themes/default/default.css" />
<link rel="stylesheet" href="kindeditor/plugins/code/prettify.css" />
<script charset="utf-8" src="kindeditor/kindeditor.js"></script>
<script charset="utf-8" src="kindeditor/lang/zh_CN.js"></script>
<script charset="utf-8" src="kindeditor/plugins/code/prettify.js"></script>
<script>
KindEditor.ready(function(K) {
	var editor1 = K.create('textarea[name="content"]', {
		width: "800px", //编辑器的宽度
		height: "400px", //编辑器的高度
		filterMode: false, //不会过滤HTML代码
		resizeType: 0,
		cssPath : 'kindeditor/plugins/code/prettify.css',
		uploadJson : 'kindeditor/php/upload_json.php',
		fileManagerJson : 'kindeditor/php/file_manager_json.php',
		allowFileManager : true,
		afterCreate : function() {
			var self = this;
			K.ctrl(document, 13, function() {
				self.sync();
				K('form[name=write_content]')[0].submit();
			});
			K.ctrl(self.edit.doc, 13, function() {
				self.sync();
				K('form[name=write_content]')[0].submit();
			});
		}
	});
	prettyPrint();
});
</script>
<script>
KindEditor.ready(function(K) {
	var editor1 = K.create('textarea[name="state"]', {
		width: "800px", //编辑器的宽度
		height: "400px", //编辑器的高度
		filterMode: false, //不会过滤HTML代码
		resizeType: 0,
		cssPath : 'kindeditor/plugins/code/prettify.css',
		uploadJson : 'kindeditor/php/upload_json.php',
		fileManagerJson : 'kindeditor/php/file_manager_json.php',
		allowFileManager : true,
		afterCreate : function() {
			var self = this;
			K.ctrl(document, 13, function() {
				self.sync();
				K('form[name=write_content]')[0].submit();
			});
			K.ctrl(self.edit.doc, 13, function() {
				self.sync();
				K('form[name=write_content]')[0].submit();
			});
		}
	});
	prettyPrint();
});
</script>
<script>
	(function($){
		$(window).load(function(){
			
			$("a[rel='load-content']").click(function(e){
				e.preventDefault();
				var url=$(this).attr("href");
				$.get(url,function(data){
					$(".content .mCSB_container").append(data); //load new content inside .mCSB_container
					//scroll-to appended content 
					$(".content").mCustomScrollbar("scrollTo","h2:last");
				});
			});
			
			$(".content").delegate("a[href='top']","click",function(e){
				e.preventDefault();
				$(".content").mCustomScrollbar("scrollTo",$(this).attr("href"));
			});
			
		});
	})(jQuery);
</script>
</head>
<body>
<!--header-->
<header>
 <h1><img src="images/admin_logo.png"/></h1>
 <ul class="rt_nav">
  <li><a href="login.html" class="quit_icon">安全退出</a></li>
 </ul>
</header>

<!--aside nav-->
<aside class="lt_aside_nav content mCustomScrollbar">
 <ul>
  <li>
     <dl>
		<dt style="color:#19A97B">系统功能</dt>
		<!--当前链接则添加class:active-->
		<dd><a href="banner.php" >首页横幅</a></dd>
		<dd><a href="index.php" class="active">售票列表</a></dd>
		<dd><a href="members.php">会员列表</a></dd>
		<dd><a href="order.php">订单管理</a></dd>
		<!--<dd><a href="#">品牌管理</a></dd-->
	</dl>
  </li>
 </ul>
</aside>

<section class="rt_wrap content mCustomScrollbar" style="overflow-y:auto;">
 <div class="rt_content">
     <!--弹出框效果-->
     <script>
     $(document).ready(function(){
		 //弹出文本性提示框
		 $("#showPopTxt").click(function(){
			 $(".pop_bg").fadeIn();
			 });
		 //弹出：确认按钮
		 $(".trueBtn").click(function(){
			 alert("你点击了确认！");//测试
			 $(".pop_bg").fadeOut();
			 });
		 //弹出：取消或关闭按钮
		 $(".falseBtn").click(function(){
			 alert("你点击了取消/关闭！");//测试
			 $(".pop_bg").fadeOut();
			 });
		 });
		 
		 
		function selectl(){
			var url = document.getElementById('select_file').files[0];
			var src = window.URL.createObjectURL(url);
			document.getElementById('select_img').src = src;
		}
		function selectl1(){
			var url = document.getElementById('select_file1').files[0];
			var src = window.URL.createObjectURL(url);
			document.getElementById('select_img1').src = src;
		}
     </script>
		<section>
      <div class="page_title">
       <h2 class="fl">发布商品</h2>
       <a style="margin-top:5px;" href="index.php" class="fr top_rt_btn">返回</a>
      </div>
	  <?php
	  $flsql="select * from category where ca_id!=0";
	  $flres=mysql_query($flsql);
	  
	  ?>
		 <section>
		  <h2><strong style="color:grey;">填写商品信息</strong></h2>
		  <form name="write_content" action="ticket_edit_action.php" method="post" enctype="multipart/form-data">
			 	  <ul class="ulColumn2">
			   <li>
				<span class="item_name" style="width:120px;">商品标题：</span>
				<input type="text" class="textbox textbox_295" name="show_title" required oninvalid="setCustomValidity('请填写商品标题!');"  oninput="setCustomValidity('');" placeholder="请输入商品标题" value="<?php echo $row["show_title"];?>"/>
			   </li>
			   <li>
				<span class="item_name" style="width:120px;">演出场馆：</span>
				<input type="text" class="textbox textbox_295" name="show_venue" required oninvalid="setCustomValidity('请填写演出场馆!');"  oninput="setCustomValidity('');" placeholder="请输入演出场馆" value="<?php echo $row["show_venue"];?>"/>
			   </li>
               <li>
                      <span class="item_name" style="width:120px;">发货城市：</span>
                      <input type="text" class="textbox textbox_295" name="shipping_city" required oninvalid="setCustomValidity('请填写发货城市!');"  oninput="setCustomValidity('');" placeholder="请输入发货城市" value="<?php echo $row["shipping_city"];?>"/>
               </li>
               <li>
                      <span class="item_name" style="width:120px;">演出时长：</span>
                      <input type="text" class="textbox textbox_295" name="show_length" required oninvalid="setCustomValidity('请填写演出时长!');"  oninput="setCustomValidity('');" placeholder="请输入演出时长" value="<?php echo $row["show_length"];?>"/>
               </li>
               <li>
                      <span class="item_name" style="width:120px;">入场时间：</span>
                      <input type="text" class="textbox textbox_295" id="datetimepicker" name="enter_time" required oninvalid="setCustomValidity('请填写入场时间!');"  oninput="setCustomValidity('');" placeholder="请输入入场时间" value="<?php echo $row["enter_time"];?>"/>
               </li>
			                  <li>
                      <span class="item_name" style="width:120px;">出场时间：</span>
                      <input type="text" class="textbox textbox_295" id="datetimepickera" name="out_time" required oninvalid="setCustomValidity('请填写入场时间!');"  oninput="setCustomValidity('');" placeholder="请输入出场时间" value="<?php echo $row["out_time"];?>"/>
               </li>
			   	<li>
				<span class="item_name" style="width:120px;">演出顺序：</span>
				<input type="text" class="textbox textbox_295" name="sequence" required oninvalid="setCustomValidity('请填写演出顺序!');"  oninput="setCustomValidity('');" placeholder="请输入演出顺序" value="<?php echo $row["sequence"];?>"/>
			   </li>
			   <li>
				<span class="item_name" style="width:120px;">演出站点：</span>
				<input type="text" class="textbox textbox_295" name="show_city" required oninvalid="setCustomValidity('请填写演出站点!');"  oninput="setCustomValidity('');" placeholder="请输入演出站点" value="<?php echo $row["show_city"];?>"/>
			   </li>
               <li>
                      <span class="item_name" style="width:120px;">演出开始时间：</span>
                      <input type="date" class="textbox textbox_295" name="show_begin" required oninvalid="setCustomValidity('请填写开始时间!');"  oninput="setCustomValidity('');" placeholder="请输入开始时间" value="<?php echo $row["show_begin"];?>"/>
               </li>
               <li>
                      <span class="item_name" style="width:120px;">演出结束时间：</span>
                      <input type="date" class="textbox textbox_295" name="show_end" required oninvalid="setCustomValidity('请填写结束时间!');"  oninput="setCustomValidity('');" placeholder="请输入结束时间" value="<?php echo $row["show_end"];?>"/>
               </li>
			   <li>
				<span class="item_name" style="width:120px;">原图片：</span>
				<?php if($row["show_imgs"]!=""){?>
				 <img src="../<?php echo $row["show_imgs"];?>" style="border:1px #139667 solid;width:200px;height:200px;"/>
				<?php } ?>
				 
			   </li>
			   	<li style="height:200px">
				<span class="item_name" style="width:120px;">上传图片：</span>
				 <img src="images/jia.png" style="border:1px #139667 solid;width:200px;height:200px;" id="select_img"/>
				 <input type="file" name="img" id="select_file" onchange="selectl()" style="width: 200px;height: 200px;position:relative;left: -205px;border: 1px solid red;opacity:-9;"/>
				 <span style="color:red;font-size:15px">*电脑端详情页(微信端列表页)图片</span>
			   </li>
			   <li>
				<span class="item_name" style="width:120px;">原图片：</span>
				<?php if($row["show_wx_imgs"]!=""){?>
				 <img src="../<?php echo $row["show_wx_imgs"];?>" style="border:1px #139667 solid;width:200px;height:200px;"/>
				<?php } ?>
				 
			   </li>			   
			   <li style="height:200px">
				<span class="item_name" style="width:120px;">上传图片：</span>
				 <img src="images/jia.png" style="border:1px #139667 solid;width:200px;height:200px;" id="select_img1"/>
				 <input type="file" name="img1" id="select_file1" onchange="selectl1()" style="width: 200px;height: 200px;position:relative;left: -205px;border: 1px solid red;opacity:-9;"/>
				  <span style="color:red;font-size:15px">*微信端详情页图片</span>
			   </li>
			   	<li>
				<span class="item_name" style="width:120px;">优惠说明：</span>
				<div style="position:relative;margin-left:124px;margin-top:-20px">
					<textarea name="state" value="<?php echo $row["state"];?>"><?php echo $row["state"];?></textarea>
				</div>
				</li>
			   <li>
				<span class="item_name" style="width:120px;">商品详情：</span>
				<div style="position:relative;top:-15px;margin-left:124px;">
					<textarea name="content" value="<?php echo $row["show_infocontent"];?>"><?php echo $row["show_infocontent"];?></textarea>
					<input type="hidden" name="id" value="<?php echo $id?>"/>
					<input type="hidden" name="old_img" value="<?php echo $row["show_imgs"];?>"/>
					<input type="hidden" name="old_img1" value="<?php echo $row["show_wx_imgs"];?>"/>
				</div>
				</li>
			   <li style="position:relative;top:10px">
				<span class="item_name" style="width:120px;"></span>
				<input type="submit" name="edit_submit" class="link_btn"/>
			   </li>
			  </ul>
		  </form>
		 </section>
     </section>
 </div>
</section>
</body>
<script src="js/jquery.datetimepicker.full.js"></script>
<link rel="stylesheet" type="text/css" href="css/jquery.datetimepicker.css"/>
<script>/*
     window.onerror = function(errorMsg) {
     $('#console').html($('#console').html()+'<br>'+errorMsg)
     }*/

    $.datetimepicker.setLocale('en');

    $('#datetimepicker_format').datetimepicker({value:'2015/04/15 05:03', format: $("#datetimepicker_format_value").val()});
    console.log($('#datetimepicker_format').datetimepicker('getValue'));

    $("#datetimepicker_format_change").on("click", function(e){
        $("#datetimepicker_format").data('xdsoft_datetimepicker').setOptions({format: $("#datetimepicker_format_value").val()});
    });
    $("#datetimepicker_format_locale").on("change", function(e){
        $.datetimepicker.setLocale($(e.currentTarget).val());
    });

    $('#datetimepicker').datetimepicker({
        dayOfWeekStart : 1,
        lang:'en',
        disabledDates:['1986/01/08','1986/01/09','1986/01/10'],
        startDate:	'2017/03/20'
    });
	$('#datetimepickera').datetimepicker({
        dayOfWeekStart : 1,
        lang:'en',
        disabledDates:['1986/01/08','1986/01/09','1986/01/10'],
        startDate:	'2017/03/20'
    });
    $('.some_class').datetimepicker();

    $('#default_datetimepicker').datetimepicker({
        formatTime:'H:i',
        formatDate:'d.m.Y',
        //defaultDate:'8.12.1986', // it's my birthday
        defaultDate:'+03.01.1970', // it's my birthday
        defaultTime:'10:00',
        timepickerScrollbar:false
    });

    $('#datetimepicker10').datetimepicker({
        step:5,
        inline:true
    });
    $('#datetimepicker_mask').datetimepicker({
        mask:'9999/19/39 29:59'
    });

    $('#datetimepicker1').datetimepicker({
        datepicker:false,
        format:'H:i',
        step:5
    });
    $('#datetimepicker2').datetimepicker({
        yearOffset:222,
        lang:'ch',
        timepicker:false,
        format:'d/m/Y',
        formatDate:'Y/m/d',
        minDate:'-1970/01/02', // yesterday is minimum date
        maxDate:'+1970/01/02' // and tommorow is maximum date calendar
    });
    $('#datetimepicker3').datetimepicker({
        inline:true
    });
    $('#datetimepicker4').datetimepicker();
    $('#open').click(function(){
        $('#datetimepicker4').datetimepicker('show');
    });
    $('#close').click(function(){
        $('#datetimepicker4').datetimepicker('hide');
    });
    $('#reset').click(function(){
        $('#datetimepicker4').datetimepicker('reset');
    });
    $('#datetimepicker5').datetimepicker({
        datepicker:false,
        allowTimes:['12:00','13:00','15:00','17:00','17:05','17:20','19:00','20:00'],
        step:5
    });
    $('#datetimepicker6').datetimepicker();
    $('#destroy').click(function(){
        if( $('#datetimepicker6').data('xdsoft_datetimepicker') ){
            $('#datetimepicker6').datetimepicker('destroy');
            this.value = 'create';
        }else{
            $('#datetimepicker6').datetimepicker();
            this.value = 'destroy';
        }
    });
    var logic = function( currentDateTime ){
        if (currentDateTime && currentDateTime.getDay() == 6){
            this.setOptions({
                minTime:'11:00'
            });
        }else
            this.setOptions({
                minTime:'8:00'
            });
    };
    $('#datetimepicker7').datetimepicker({
        onChangeDateTime:logic,
        onShow:logic
    });
    $('#datetimepicker8').datetimepicker({
        onGenerate:function( ct ){
            $(this).find('.xdsoft_date')
                .toggleClass('xdsoft_disabled');
        },
        minDate:'-1970/01/2',
        maxDate:'+1970/01/2',
        timepicker:false
    });
    $('#datetimepicker9').datetimepicker({
        onGenerate:function( ct ){
            $(this).find('.xdsoft_date.xdsoft_weekend')
                .addClass('xdsoft_disabled');
        },
        weekends:['01.01.2014','02.01.2014','03.01.2014','04.01.2014','05.01.2014','06.01.2014'],
        timepicker:false
    });
    var dateToDisable = new Date();
    dateToDisable.setDate(dateToDisable.getDate() + 2);
    $('#datetimepicker11').datetimepicker({
        beforeShowDay: function(date) {
            if (date.getMonth() == dateToDisable.getMonth() && date.getDate() == dateToDisable.getDate()) {
                return [false, ""]
            }

            return [true, ""];
        }
    });
    $('#datetimepicker12').datetimepicker({
        beforeShowDay: function(date) {
            if (date.getMonth() == dateToDisable.getMonth() && date.getDate() == dateToDisable.getDate()) {
                return [true, "custom-date-style"];
            }

            return [true, ""];
        }
    });
    $('#datetimepicker_dark').datetimepicker({theme:'dark'})
</script>
</html>
