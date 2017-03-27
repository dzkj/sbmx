<?php
session_start();
include "connect.inc";
header("content-type:text/html;charset=utf-8;");
$findkey = $_POST['findkey'];
?>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta itemprop="name" content="微信演出票，演出购票快人一步" id="meta-title">
    <meta itemprop="image" content="//res.wxmovie.com/images/share_icon_show.png">
    <meta name="description" itemprop="description" id="meta-description" content="">
    <meta name="format-detection" content="telephone=no">
    <link rel="stylesheet" href="css/index.css" type="text/css">
    <link rel="stylesheet" href="css/mui.min.css">
    <script src="js/mui.min.js"></script>
    <title>搜索演出</title>
    <!-- Hawkeye Analytics -->
    <!-- End Hawkeye Analytics -->
    <!-- Google Analytics -->
    <!-- End Google Analytics -->
    <!-- <script>window.onerror = function (e, a, b, col) {alert(JSON.stringify(e+'|'+a+'|'+b+'|'+col))}</script> -->
  </head>

  <body>
    <div id="app">
      <div data-reactroot="" class="Home flex flex-columns">
        <div class="Home__Header">
          <div class="Header flex-auto flex flex-center">
            <div class="SearchPicker flex flex-auto">
                <a class="flex-auto" href="find.php">
                <i type="search" class="Ico--search"></i>
                <!-- react-text: 24 -->请输入关键字...
                <!-- /react-text -->
                </a>
            </div>
            <div class="CityPicker">
              <!--<a class="city" href="select_city.php">济南</a>-->
              <a href="javascript:location.href='index.php';" class="return" style="font-size:12px;padding-left: 10px;color:#29cc6d;"> 取消 </a>
            </div>
          </div>
        </div>
        <div class="Home__Content flex-auto">
          
          <div class="Concerts--Tip-Con">
            <div class="Ads__Components">
              <div class="Ads">
                <div class="Ads__Item ">
                  <!--<span class="Ads__Item__Title flex">演出站点</span>-->
<!--                  <div class="flex">
                    <div class="Ads__Item__Detail flex flex-1-3">
                        <a href="part_details.php">
                            <img src="https://static.show.wepiao.com/upload/1/ad7/1accd/1ad771accd8f7bc9b1062a9380c8c0c1.jpg" class="Ads__Item__Detail__Image">
                            <p class="Ads__Item__Detail__Title">[深圳]2017 COCO李玟18世界巡回演唱会-深圳站（预售）</p>
                            <p class="Ads__Item__Detail__Date">2017年5月6日 19:30</p>
                        </a>
                    </div>
                  </div>-->
                </div>
              </div>
            </div>
<!--            <div class="Concerts--hot">
              <p class="Concerts--hot__p">热门</p>
            </div>-->
          </div>
            
          
          <?php
          $showsql = "select * from shows where show_title like '%".$findkey."%' or shipping_city like '%".$findkey."%' or show_city like '%".$findkey."%'";
          $showres = mysql_query($showsql);
          while($showrow = mysql_fetch_array($showres)){
          ?>
          <div class="Concerts__List" id="Concerts__List">
            <div class="Concerts__List__Bottom">
              <div class="Concerts__Item">
                <img src="<?php echo $showrow['show_imgs'];?>" class="lazyimage Concerts__Item__img">
                <div class="Concerts__Info flex-columns">
                  <div class="Concerts__Info__Detail">
                    <span class="Concerts__Info__Name">[<?php echo $showrow['show_city'];?>]<?php echo $showrow['show_title'];?></span>
                    <p class="Concerts__Info__ShowTime Concerts__Info__p"><?php echo $showrow['show_begin'];?>~<?php echo $showrow['show_end'];?></p>
                    <p class="Concerts__Info__VenueName Concerts__Info__p"><?php echo $showrow['show_venue'];?></p>
                    <span>
                      <b class="Concerts__Info__Charge">
                        <span>￥</span>
                        <?php
                        $pricesql1 = "select * from prices where show_id=".$showrow['id']." order by price limit 1";
                        $priceres1 = mysql_query($pricesql1);
                        $pricerow1 = mysql_fetch_array($priceres1);
                        $pricesql2 = "select * from prices where show_id=".$showrow['id']." order by price desc limit 1";
                        $priceres2 = mysql_query($pricesql2);
                        $pricerow2 = mysql_fetch_array($priceres2);
                        ?>
                        <i>
                          <span>
                            <span class="Concerts__Info__Price"><?php echo $pricerow1['price'];?></span>
                            <span>
                              <i class="Concerts__Info__Symbol">~</i>
                              <span class="Concerts__Info__Price"><?php echo $pricerow2['price'];?></span></span>
                          </span>
                        </i>
                      </b>
                      <button class="Button Button--inverse Concerts__Info__Buy" onclick="javascript:location.href='part_details.php?show_id=<?php echo $showrow['id'];?>';">购票</button></span>
                  </div>
<!--                  <div class="Concerts__Info__EditorView ">
                    <span>
                       react-text: 137 “
                       /react-text 
                      <label>Queen of Hearts</label>
                       react-text: 139 ”
                       /react-text </span></div>-->
                </div>
              </div>
            </div>
          </div>
          <?php
          }
          ?>
            
            
            
            
<!--          <div class="LoadMore">
            <span class="Loading">加载更多</span></div>
          <div class="Service">
            <div class="Service__Link">
              <a href="http://m.gewara.com/touch/showappdownload/mobile/movie.xhtml" class="download">
                <i>
                </i>
                 react-text: 31 下载客户端
                 /react-text </a>
              <a class="feedback" data-he="help_feedback" href="/service">
                <i>
                </i>
                 react-text: 34 帮助与反馈
                 /react-text </a>
              <a href="tel:4001338888" class="cooperation" data-he="help_cooperation">
                <i>
                </i>
                 react-text: 37 商业合作
                 /react-text </a></div>
            <p class="Service__We">
               react-text: 39 客服热线：
               /react-text 
              <a href="tel:4001338888">400-133-8888</a>
               react-text: 41 (09:00-21:00)
               /react-text </p>
            <p class="Service__We">电影演出票服务由北京微影时代提供</p></div>-->
        </div>
<!--        <div class="Home__Footer">
          <div data-festival="false" class="Tabs--icon Footer border-1px">
            <ul class="Tabs__nav">
              <li class="Tabs__item active">
                <a href="javascript:void(0)" class="Tabs__link">
                  <i type="home" class="Ico--home"></i>
                   react-text: 49 首页
                   /react-text </a></li>
              <li class="Tabs__item">
                <a href="user.php" class="Tabs__link">
                  <i type="my" class="Ico--my"></i>
                   react-text: 61 我的
                   /react-text </a></li>
            </ul>
          </div>
        </div>-->
      </div>
    </div>
    <script>
        var gallery = mui(".mui-slider");
        gallery.slider({
            interval:3000
        });
    </script>
  </body>

</html>