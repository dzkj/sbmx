<?php
session_start();
include "connect.inc";
header("Content-Type: text/html;charset=utf-8"); 

?>
<!DOCTYPE HTML>
<html>
    <head>
        <title>修改收货地址</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
        <link href="css/mobile.css" rel="stylesheet">
        <link href="css/reset.css" rel="stylesheet">
        <script src="./js/jquery.min.js"></script>
        <script src="./js/my.js"></script>
        <script type="text/javascript" src="./js/jsAddress.js"></script>  
        <style type="text/css">
            .info select {
                border: 1px solid #d3d3d3;
                height: 30px;
            }
        </style>
    </head>
    <body style="background-color:white">
        <div id="header" style="position:fixed">
            <a href="address.php"><span class="return"></span></a>
            <span>修改收货地址</span>
        </div>
        <div style="height:45px"></div>
        <div id="main">
            <form id="form1" action="addaddr_do.php" method="post">
                <div class="input-item clearfix">
                    <div class="input-header">姓名：</div>
                    <input type="text" style="padding-left:50px" value="" name="true_name" id="fallName">
                </div>
                <div class="input-item clearfix">
                    <div class="input-header">手机：</div>
                    <input type="text" style="padding-left:50px" value="" name="true_phone" id="phone">
                </div>
                <div class="input-item clearfix">

                    <div id="addArea">
                        <div class="infoo">
                            <div>
                                <select id="cmbProvince" name="cmbProvince">
                                </select>  
                                <select id="cmbCity" name="cmbCity">
                                </select>  
                                <select id="cmbArea" name="cmbArea">
                                </select>  

<!--                                <input type="hidden" name="prov" value=""/>
                                <input type="hidden" name="city" value=""/>
                                <input type="hidden" name="area" value=""/>-->
                                
                                <script type="text/javascript">
                                    addressInit('cmbProvince', 'cmbCity', 'cmbArea');  
                                </script>
                                
                            </div>
                        </div>

                        <script>
                            $(document).ready(function() {
                                var city_Text;//地址城市
                                var current_city = $("#orderConfirmModel_PerformCity").val(); //定位城市
                                var et_total_num = parseFloat($("#et-total-num").text()); //不含快递价格
                                var kd = 10.00;

                                $('#s_province').change(function() {
                                    $.ajax({
                                        url: "/Account/AddressSelect?province=" + $(this).children('option:selected').val() + "&ua=addArea" + "&view=AddressSelectInOrder",
                                        async: false,
                                        type: 'GET',
                                        success: function(data) {
                                            $("#addArea").html(data);
                                        }
                                    });

                                    city_Text = $('#s_city').find("option:selected").text().replace("市", "");
                                    if (current_city == city_Text) {
                                        //kuaidi_total_num = fmoney(et_total_num + 10);
                                        kuaidi_total_num = fmoney(et_total_num);
                                    }
                                    else {
                                        //kuaidi_total_num = fmoney(et_total_num + 20);
                                        //kd = 20.00;

                                        kuaidi_total_num = fmoney(et_total_num);
                                        kd = 0.00;
                                    }
                                    //$("#kuaidi-total-num").text("￥ " + kuaidi_total_num + " 元 (含快递费：" + kd + ")");
                                    $(".kuaidi-total-Money").text(kuaidi_total_num);
                                    $("#orderConfirmModel_TotalPrice").val(kuaidi_total_num);
                                    //$("#orderConfirmModel_deliverPrice").val(kd);

                                })

                                $('#s_city').change(function() {
                                    var p = $("#s_province").val();
                                    $.ajax({
                                        url: "/Account/AddressSelect?province=" + p + "&city=" + $(this).children('option:selected').val() + "&pid=s_province" + "&cid=s_city" + "&aid=s_county" + "&ua=addArea" + "&view=AddressSelectInOrder",
                                        async: false,
                                        type: 'GET',
                                        success: function(data) {
                                            $("#addArea").html(data);
                                        }
                                    });

                                    city_Text = $(this).find("option:selected").text().replace("市", "");
                                    if (current_city == city_Text) {
                                        //kuaidi_total_num = fmoney(et_total_num + 10);
                                        kuaidi_total_num = fmoney(et_total_num);
                                    }
                                    else {
                                        //kuaidi_total_num = fmoney(et_total_num + 20);
                                        //kd = 20.00;
                                        kuaidi_total_num = fmoney(et_total_num);
                                        kd = 0.00;
                                    }
                                    //$("#kuaidi-total-num").text("￥ " + kuaidi_total_num + " 元 (含快递费：" + kd + ")");
                                    $(".kuaidi-total-Money").text(kuaidi_total_num);
                                    $("#orderConfirmModel_TotalPrice").val(kuaidi_total_num);
                                    //$("#orderConfirmModel_deliverPrice").val(kd);
                                })
                                //alert($('#s_city').find("option:selected").text().replace("市", "") +"--"+ $("#orderConfirmModel_PerformCity").val())
                                //if ($('#s_city').find("option:selected").text().replace("市", "") == $("#orderConfirmModel_PerformCity").val()) {
                                //    $("#kuaidi-total-num").text("￥ " + (et_total_num + 10) + " 元 (含运费 10.00)");
                                //} else {
                                //    $("#kuaidi-total-num").text("￥ " + (et_total_num + 20) + " 元 (含运费 20.00)");
                                //}
                            })
                        </script>                
                    </div>
                        <!--                <input id="area" name="area" type="hidden" value="">
                                        <input id="city" name="city" type="hidden" value="">
                                        <input id="province" name="province" type="hidden" value="">-->
                </div>
                <div class="input-item clearfix">
                    <div class="input-header">邮编：</div>
                    <input type="text" style="padding-left:80px" value="" name="zipcode" id="zipcode">
                </div>
                <div class="input-item clearfix">
                    <div class="input-header">详细地址：</div>
                    <input type="text" style="padding-left:80px" value="" name="street" id="address">
                </div>
                <div class="bn" onclick="clickSum()">保存地址</div>
                <!--<input id="id" name="id" type="hidden" value="">-->
                <input type="hidden" name="mem_id" value="1"/>
            </form>
        </div>
        <script language="javascript" type="text/javascript" src="./js/jquery.min.js"></script>
        <script language="javascript" type="text/javascript" src="./js/my.js"></script>
        <script src="./js/jquery.validate.js"></script>
        <script type="text/javascript">
                    //默认地址设置
                    function default_checkbox(aid){
                        var default_checkbox = $("#defaultoptions").attr("checked_list");
                        //alert(default_checkbox);
                        if(default_checkbox == "true"){
                            $("#defaultoptions").attr("checked_list","false");
                        }else{
                            $("#defaultoptions").attr("checked_list","true");
                        }
//                        alert(default_checkbox);
                        $.post("default_do.php",{"addr_id":aid,"default_checkbox":default_checkbox},
                            function(data){
                                if(data==-1 || data==0){
                                    alert("系统繁忙请稍后再试");
                                }
                            }
                        );
                    }
                
                    var close_tips = function() {
                        $(".tips-cfm").click(function() {
                            $(this).parent().parent().remove();
                            $(".cover").remove();
                            if ($(this).is('#tips-cfm-id')) {
                                //alert("确定");
                                location.href = "../Account/DeleteAddress?id=";
                            }
                            if ($(this).is('#tips-cancel-id')) {
                                //alert("取消");
                            }
                        });
                    }

                    function show_cover() {
                        var $cover = $('<div class="cover"></div>');
                        $("body").prepend($cover);
                    }

                    function show_tips() {
                        var $tips = $('<div class="tips">' +
                                '<p>确定删除该收货地址吗？</p>' +
                                '<div style="text-align:center">' +
                                '<div class="tips-cfm" id="tips-cfm-id">确定</div>' +
                                '<div class="tips-cfm" id="tips-cancel-id">取消</div>' +
                                '</div>' +
                                '</div>');
                        $("body").prepend($tips);
                        show_cover();
                        close_tips();
                    }


                    function clickSum() {
                        if ($('#fallName').val() == "") {
                            alert("请输入姓名。");
                            return;
                        }
                        if ($('#phone').val() == "") {
                            alert("请输入联系手机号。");
                            return;
                        }
                        if ($('#address').val() == "") {
                            alert("请输入详细地址。");
                            return;
                        }

                        if ($('#s_province option:selected').text() == "省份") {
                            alert("请选择地址所在省份。");
                            return;
                        }
                        if ($('#s_city option:selected').text() == "地级市") {
                            alert("请选择地址所在地级市。");
                            return;
                        }
                        if ($('#s_county option:selected').text() == "市、县级市") {
                            alert("请选择地址所在市、县级市。");
                            return;
                        }

                        $('#province').val($('#s_province option:selected').val());
                        $('#city').val($('#s_city option:selected').val());
                        $('#area').val($('#s_county option:selected').val());

                        $('#form1').submit();
                    }
                    var Gid = document.getElementById;
                    var showArea = function() {
                        Gid('show').innerHTML = "<h3>省" + Gid('s_province').value + " - 市" +
                                Gid('s_city').value + " - 县/区" +
                                Gid('s_county').value + "</h3>"
                    }
//                    Gid('s_county').setAttribute('onchange', 'showArea()');
        </script>


    </body></html>