<!DOCTYPE html>

<html>
<head>
    <title>南国之声周末音乐会</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <link href="css/mobil.css" rel="stylesheet" />
    <link href="css/reset.css" rel="stylesheet" />
    <script language="javascript" type="text/javascript" src="js/jquery.min.js"></script>
    <script src="js/jquery.validate.js"></script>
    <script language="javascript" type="text/javascript" src="js/my.js"></script>
    <script language="javascript" src="js/changci_switch_tip.js"></script>
    <script src="js/mobiscroll_002.js" type="text/javascript"></script>
    <script src="js/mobiscroll_004.js" type="text/javascript"></script>
    <link href="css/mobiscroll_002.css" rel="stylesheet" type="text/css">
    <link href="css/mobiscroll.css" rel="stylesheet" type="text/css">
    <script src="js/mobiscroll.js" type="text/javascript"></script>
    <script src="js/mobiscroll_003.js" type="text/javascript"></script>
    <script src="js/mobiscroll_005.js" type="text/javascript"></script>
    <link href="css/mobiscroll_003.css" rel="stylesheet" type="text/css">
    <style type="text/css">
        input, select {
            height: 35px;
            width: 100%;
            padding: 5px;
            margin: 8px 3px 2px 3px;
            border: 1px solid #aaa;
            box-sizing: border-box;
            /*border-radius: 5px;*/
            -moz-box-sizing: border-box;
            -webkit-box-sizing: border-box;
            /*-webkit-border-radius: 5px;*/
            color: #a5a5a5;
            font-size: 15px;
        }
        .show-tip {
             clear:both;
             display:none;
        }
        .tip-style {
            color: #F45A52;
            /*font-size: 18px;
            font-family: KaiTi;*/
        }
        .divchangci {
            float: left;
            padding: 6px 0px 3px 6px;
            
        }
        .w33 {
            width: 33.33%;
        }
        .w100 {
            
            width: 100%;
        }

        div.wrap {
            float: left;
            width: 100%;
            height: 50px;
            border: 1px solid #c1c1c1;
            margin: 0px;
            color: #a5a5a5;
            margin-bottom: 15px;
            text-align: center;
            display: table;
            *position: relative;
        }
        div.wrap-selected {            
            border: 1px solid #fe5b78;
        }

        div.subwrap {
            vertical-align: middle;
            display: table-cell;
            *position: absolute;
            *top: 50%;
        }
        
        .yanchujiage {
            float: left;
            width: 100%;
            border:0px;
            height:initial !important;
            margin:0px;
            line-height:normal !important;
            *position: relative;
            *top: -50%;
        }
        .feiyanchujiage {
            width: 100%;
        }
    </style>
</head>
<body>


    <div id="header" style="position:fixed">
        <a href="javascript:history.back();"><span class="return"></span></a>
        <span>详情页</span>
    </div>
    <div style="height:45px"></div>
    <div class="main">
        <img src="picture/2016030410384754.jpg" class="m-pic">
        
            <div class="show-info">
                <h3 id="proTitle">南国之声周末音乐会</h3>
                <hr style="height: 1px; border: none; border-bottom: 1px solid #ececec; " />

                <h4 id="proTime">时间：2016年4月—2017年12月 20:00 </h4>
                <h4>
                
                地点：广西民族宫音乐厅</h4>
                <h4>
                    票务提供商：微票 
                </h4>
              
                <h4>
                    
                状态：<span style="background-color: #ff5400; margin-left: 0px;">售票中</span>
                </h4>
                <h4>价格：<span style="font-size:16px;color:#fe5b78;padding-left:0px;margin-left:0px;" id="proPrice">￥100元</span>	</h4>
            </div>
       
                <div class="show-detail">
                <div style=" margin-bottom:12px;"><span class="one"></span> <span class="two">项目详情</span></div>
                    <p></p>
                </div>
                <div style="height:50px"></div>
                 <form id="form1" action="/TicketOrder/TOOrderConfirm?type=演出&city=南宁" method="post" >
                    <input type="hidden" id="sumVlaue" value="" name="jsonStr" />
                    <input type="hidden" id="sumInfo" value="" name="jsonInfoStr" />

                    <input type="hidden" id="proTitle" value="南国之声周末音乐会" name="proTitle" />
                    <input type="hidden" id="proTime" value="2016年4月—2017年12月 20:00" name="proTime" />
                    <input type="hidden" id="proPrice" value="100元" name="proPrice" />
                    <input type="hidden" id="proID" value="583" name="proID" />
                    <input type="hidden" id="pdate" name="pdate"/> 

                        
                    <input type="hidden" id="city" value="南宁" name="city" />
                </form>
                <form id="form3" action="/Project/onlineSeatList" method="post">
                        <input type="hidden" id="performJwId" value="20662" name="performJwId" />
                    <input type="hidden" id="pid" value="583" name="pid" />
                </form>
             </div>  
            </div> 
    <div id="footer">
        
        
                <div class="footer-btn" onclick="clickOnlineSeat()" id="footer-btn-buy">选座购买</div>
    </div>
  <!--<script src="js/z_stat.php" language="JavaScript"></script>-->
</body>
</html>
