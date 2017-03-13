<html><head>
    <title>新增收货地址</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <link href="css/mobile.css" rel="stylesheet">
    <link href="css/reset.css" rel="stylesheet">
    <script src="/Scripts/jquery.min.js"></script>
    <script src="/Scripts/my.js"></script>
    <style type="text/css">
        .info select {
            border: 1px solid #d3d3d3;
            height: 30px;
        }
    </style>
</head>
<body style="background-color:white">
    <div id="header" style="position:fixed">
        <a href="javascript:history.back();"><span class="return"></span></a>
        <span>新增收货地址</span>
    </div>
    <div style="height:45px"></div>
    <div id="main">
        <form id="form1" action="/Account/AddAddress" method="post">
            <div class="input-item clearfix">
                <div class="input-header">姓名：</div>
                <input type="text" placeholder="请输入收货人姓名" style="padding-left:50px" value="" name="fallName" id="fallName">
            </div>
            <div class="input-item clearfix">
                <div class="input-header">手机：</div>
                <input type="text" placeholder="请输入收货人手机号" style="padding-left:50px" value="" name="phone" id="phone">
            </div>
            <div class="input-item clearfix">
                
                <div id="addArea">
<div class="infoo">
    <div>
        <select id="s_province" name="s_province">
                    <option value="0000008898">广西区</option>
                    <option value="0000009036">北京市</option>
                    <option value="0000009057">天津市</option>
                    <option value="0000009078">河北省</option>
                    <option value="0000009273">山西省</option>
                    <option value="0000009415">内蒙古区</option>
                    <option value="0000009537">辽宁省</option>
                    <option value="0000009666">吉林省</option>
                    <option value="0000009744">黑龙江省</option>
                    <option value="0000009900">上海市</option>
                    <option value="0000009922">江苏省</option>
                    <option value="0000010055">浙江省</option>
                    <option value="0000010168">安徽省</option>
                    <option value="0000010308">福建省</option>
                    <option value="0000010412">江西省</option>
                    <option value="0000010534">山东省</option>
                    <option value="0000010709">河南省</option>
                    <option value="0000010903">湖北省</option>
                    <option value="0000011032">湖南省</option>
                    <option value="0000011182">广东省</option>
                    <option value="0000011344">海南省</option>
                    <option value="0000011373">重庆市</option>
                    <option value="0000011417">四川省</option>
                    <option value="0000011638">贵州省</option>
                    <option value="0000011739">云南省</option>
                    <option value="0000011893">西藏区</option>
                    <option value="0000011975">陕西省</option>
                    <option value="0000012103">甘肃省</option>
                    <option value="0000012216">青海省</option>
                    <option value="0000012269">宁夏区</option>
                    <option value="0000012301">新疆区</option>
                    <option value="0000012418">台湾省</option>
                    <option value="0000012419">香港特区</option>
                    <option value="0000012420">澳门特区</option>
        </select>
        <select id="s_city" name="s_city">
                    <option value="0000008899">南宁市</option>
                    <option value="0000008913">柳州市</option>
                    <option value="0000008925">桂林市</option>
                    <option value="0000008944">梧州市</option>
                    <option value="0000008953">北海市</option>
                    <option value="0000008959">防城港市</option>
                    <option value="0000008965">钦州市</option>
                    <option value="0000008971">贵港市</option>
                    <option value="0000008978">玉林市</option>
                    <option value="0000008986">百色市</option>
                    <option value="0000009000">贺州市</option>
                    <option value="0000009006">河池市</option>
                    <option value="0000009019">来宾市</option>
                    <option value="0000009027">崇左市</option>
        </select>
        <select id="s_county" name="s_county">
                    <option value="0000008900">市辖区</option>
                    <option value="0000008901">兴宁区</option>
                    <option value="0000008902">青秀区</option>
                    <option value="0000008903">江南区</option>
                    <option value="0000008904">西乡塘区</option>
                    <option value="0000008905">良庆区</option>
                    <option value="0000008906">邕宁区</option>
                    <option value="0000008907">武鸣县</option>
                    <option value="0000008908">隆安县</option>
                    <option value="0000008909">马山县</option>
                    <option value="0000008910">上林县</option>
                    <option value="0000008911">宾阳县</option>
                    <option value="0000008912">横县</option>
        </select>
    </div>
</div>

<script>
    $(document).ready(function () {
        var city_Text;//地址城市
        var current_city = $("#orderConfirmModel_PerformCity").val(); //定位城市
        var et_total_num = parseFloat($("#et-total-num").text()); //不含快递价格
        var kd = 10.00;

        $('#s_province').change(function () {
            $.ajax({
                url: "/Account/AddressSelect?province=" + $(this).children('option:selected').val() + "&ua=addArea" + "&view=AddressSelectInOrder",
                async: false,
                type: 'GET',
                success: function (data) {
                    $("#addArea").html(data);
                }
            });
            
            city_Text = $('#s_city').find("option:selected").text().replace("市", "");
            if (current_city == city_Text) {
                //kuaidi_total_num = fmoney(et_total_num + 10);
                kuaidi_total_num = fmoney(et_total_num  );
            }
            else {
                //kuaidi_total_num = fmoney(et_total_num + 20);
                //kd = 20.00;

                kuaidi_total_num = fmoney(et_total_num );
                kd = 0.00;
            }
            //$("#kuaidi-total-num").text("￥ " + kuaidi_total_num + " 元 (含快递费：" + kd + ")");
            $(".kuaidi-total-Money").text(kuaidi_total_num);
            $("#orderConfirmModel_TotalPrice").val(kuaidi_total_num);
            //$("#orderConfirmModel_deliverPrice").val(kd);

        })

        $('#s_city').change(function () {
            var p = $("#s_province").val();
            $.ajax({
                url: "/Account/AddressSelect?province=" + p + "&city=" + $(this).children('option:selected').val() + "&pid=s_province" + "&cid=s_city" + "&aid=s_county" + "&ua=addArea" + "&view=AddressSelectInOrder",
                async: false,
                type: 'GET',
                success: function (data) {
                    $("#addArea").html(data);
                }
            });
           
            city_Text = $(this).find("option:selected").text().replace("市", "");
            if (current_city == city_Text) {
                //kuaidi_total_num = fmoney(et_total_num + 10);
                kuaidi_total_num = fmoney(et_total_num  );
            }
            else {
                //kuaidi_total_num = fmoney(et_total_num + 20);
                //kd = 20.00;
                kuaidi_total_num = fmoney(et_total_num  );
                kd =  0.00;
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
</script>                </div>
                <input id="area" name="area" type="hidden" value="">
                <input id="city" name="city" type="hidden" value="">
                <input id="province" name="province" type="hidden" value="">
            </div>
            <div class="input-item clearfix">
                <div class="input-header">详细地址：</div>
                <input type="text" placeholder="请输入详细的收货地址" style="padding-left:80px" value="" name="address" id="address">
            </div>
                <input type="checkbox" style="margin-top:10px" name="defaultoptions">
            设为默认地址 
            <div class="bn" onclick="clickSum()">保存地址</div>
            <input id="id" name="id" type="hidden" value="">
        </form>
</div>
    <script language="javascript" type="text/javascript" src="/Scripts/jquery.min.js"></script>
    <script language="javascript" type="text/javascript" src="/Scripts/my.js"></script>
    <script src="/Scripts/jquery.validate.js"></script>
    <script type="text/javascript">
    
    var close_tips = function () {
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
            alert("请输入取票人名称。");
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
    var showArea = function () {
        Gid('show').innerHTML = "<h3>省" + Gid('s_province').value + " - 市" +
        Gid('s_city').value + " - 县/区" +
        Gid('s_county').value + "</h3>"
    }
    Gid('s_county').setAttribute('onchange', 'showArea()');
    </script>


</body></html>