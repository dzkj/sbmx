<?php
	include_once("include/conn.inc.php");
	$sql="select * from config limit 0,1";
	$result=mysqli_query($link,$sql);
	$row=mysqli_fetch_array($result);
?>
<html>
    <head>
        <title>世博马戏</title>
        <mate charset="utf-8"/>
        <link href="css/index.css" rel="stylesheet"/>
        <style>
            body,div{margin:0px;padding:0px;}
        </style>
    </head>
    <body>
        <div>
            <img src="img/bg1.jpg" class="bgimg1"/>
        </div>
        <div>
            <img src="img/bg2.jpg" class="bgimg1"/>
        </div>
        <div>
        	<img src="img/bg3.jpg" class="bgimg2" />
        	<p class="eluosi">
<!--世博演艺俄罗斯大马戏是由俄罗斯、哈萨克斯坦、吉尔吉斯斯坦、乌兹别克斯坦、中国等国的传统马戏团世家组成，其凭借惊险奇异的设计、高超的表演技巧技惊四座、艳压群芳。-->
<?php echo $row['intro'];?>
			</p>
        </div>

        <div>
        	<img src="img/bg4.jpg" class="bgimg4" />
        	<ul class="shoupiao1">
			<?php
				$show_sql="select * from shows order by sequence limit 0,1";
				$show_result=mysqli_query($link,$show_sql);
				while($show_row=mysqli_fetch_array($show_result)){
			?>
        		<li class="shou22"><label class="zhan"><?php echo $show_row["show_city"];?></label>
				<p><label class="zhana">
				<?php echo date('m.d',strtotime($show_row["show_begin"]));?>/<?php echo date('m.d',strtotime($show_row["show_end"]));?>
				
				</label></p>
			<?php
				if($show_row["show_stauts"]=="售票中"){
			?>
				<p style="font-size:21px;font-family:arial;"><a href="sell_ticket.php?id=<?php echo $show_row["id"];?>" style="color:#fefefe">立即购票</a></p></li>
			<?php
				}
			}
			?>
			
			<?php
				$show_sql="select * from shows order by sequence limit 1,1";
				$show_result=mysqli_query($link,$show_sql);
				while($show_row=mysqli_fetch_array($show_result)){
			?>
        		<li class="shou22"><label class="jining"><?php echo $show_row["show_city"];?></label>
				<p><label class="riqi">
				<?php echo date('m.d',strtotime($show_row["show_begin"]));?>/<?php echo date('m.d',strtotime($show_row["show_end"]));?>
				
				</label></p>
			<?php
				if($show_row["show_stauts"]=="售票中"){
			?>
				<p style="font-size:21px;font-family:arial;"><a href="sell_ticket.php?id=<?php echo $show_row["id"];?>" style="color:#fefefe">立即购票</a></p></li>
			<?php
				}
			}
			?>
			
			<?php
				$show_sql="select * from shows order by sequence limit 2,1";
				$show_result=mysqli_query($link,$show_sql);
				while($show_row=mysqli_fetch_array($show_result)){
			?>
        		<li class="shou22"><label class="jinans"><?php echo $show_row["show_city"];?></label>
				<p><label class="jinanb">
				<?php echo date('m.d',strtotime($show_row["show_begin"]));?>/<?php echo date('m.d',strtotime($show_row["show_end"]));?>
				
				</label></p>
			<?php
				if($show_row["show_stauts"]=="售票中"){
			?>
				<p style="font-size:21px;font-family:arial;"><a href="sell_ticket.php?id=<?php echo $show_row["id"];?>" style="color:#fefefe">立即购票</a></p></li>
			<?php
				}
			}
			?>
			
			<?php
				$show_sql="select * from shows order by sequence limit 3,1";
				$show_result=mysqli_query($link,$show_sql);
				while($show_row=mysqli_fetch_array($show_result)){
			?>
        		<li class="shou22"><label class="weifang"><?php echo $show_row["show_city"];?></label>
				<p><label class="weifangc">
				<?php echo date('m.d',strtotime($show_row["show_begin"]));?>/<?php echo date('m.d',strtotime($show_row["show_end"]));?>
				
				</label></p>
			<?php
				if($show_row["show_stauts"]=="售票中"){
			?>
				<p style="font-size:21px;font-family:arial;"><a href="sell_ticket.php?id=<?php echo $show_row["id"];?>" style="color:#fefefe">立即购票</a></p></li>
			<?php
				}
			}
			?>
			
			<?php
				$show_sql="select * from shows order by sequence limit 4,1";
				$show_result=mysqli_query($link,$show_sql);
				while($show_row=mysqli_fetch_array($show_result)){
			?>
        		<li class="shou22"><label class="nanjing"><?php echo $show_row["show_city"];?></label>
				<p><label class="nanjingd">
				<?php echo date('m.d',strtotime($show_row["show_begin"]));?>/<?php echo date('m.d',strtotime($show_row["show_end"]));?>
				
				</label></p>
			<?php
				if($show_row["show_stauts"]=="售票中"){
			?>
				<p style="font-size:21px;font-family:arial;"><a href="sell_ticket.php?id=<?php echo $show_row["id"];?>" style="color:#fefefe">立即购票</a></p></li>
			<?php
				}
			}
			?>
        		<!--<li class="shou22"><label class="jining">济宁站</label><label  class="riqi">04.28/06.04</label></li>
        		<li class="shou22"><label class="jinans">济宁站</label><label  class="jinanb">04.28/06.04</label></li>
        		<li class="shou22"><label class="weifang">济宁站</label><label class="weifangc">04.28/06.04</label></li>
        		<li class="shou22"><label class="nanjing">济宁站</label><label class="nanjingd">04.28/06.04</label></li>-->
        	</ul>
        	<ul class="shoupiao">
			<?php
				$show_sql="select * from shows order by sequence limit 0,5";
				$show_result=mysqli_query($link,$show_sql);
				while($show_row=mysqli_fetch_array($show_result)){
			?>
        		<li class="shou"><?php echo $show_row["show_stauts"];?></li>
			<?php
				}
			?>	
        	</ul>
        </div>

        <div>
        	<img src="img/bg5.jpg" class="bgimg1" />
        	<p class="eluosi1"><!--山东世博演艺股份有限公是国内唯一集旅游演艺、票务营销、演出经纪、剧目制作与出品、小剧场院线建设拓展、大型演出及节庆承办等业务于一体的演艺全产业链股份制公司。世博演艺自成立以来，累计演出2000余场次，观众700余万人次，实名会员30余万人，获得众多荣誉及奖项.<br/>
		    2015年11月18日，世博演艺在新三板挂牌上市，股票代码为834191，成为国内演艺板块全产业链上市第一股。<br />
		                  旅游演艺是公司的核心业务，拥有自主运营的多支马戏演出团队，演出经纪遍布俄罗斯、白俄罗斯、乌克兰、乌兹别克斯坦、阿萨克斯坦等国，并与泉城欧乐堡等主题公园签订了常年演出合同。-->
						  <?php echo $row['content'];?>
			</p>
        </div>

        <div>
        	<img src="img/bg6.jpg" class="bgimg1" />
        </div>
         <div>
        	<img src="img/bg7.jpg" class="bgimg1" />
        </div>
        <div>
        	<img src="img/bg8.jpg" class="bgimg1" />
        </div>
        <div>
        	<img src="img/bg9.jpg" class="bgimg1" />
        	<ul class="sanjiao">
			<?php
				$psql="select * from program limit 0,3";
				$presult=mysqli_query($link,$psql);
				while($prow=mysqli_fetch_array($presult)){
			?>
        		<li class="shou"><?php echo $prow['title'];?></li>
				<?php }?>
        	</ul>
        	<ul class="sanjiao2">
			<?php
				$psql="select * from program limit 4,4";
				$presult=mysqli_query($link,$psql);
				while($prow=mysqli_fetch_array($presult)){
			?>
        		<li class="shou2"><?php echo $prow['title'];?></li>
				<?php }?>

        	</ul>
        	<ul class="sanjiao3">
			<?php
				$psql="select * from program limit 8,3";
				$presult=mysqli_query($link,$psql);
				while($prow=mysqli_fetch_array($presult)){
			?>
        		<li class="shou5"><?php echo $prow['title'];?></li>
				<?php }?>
        	</ul>
        	<ul class="sanjiao4">
			<?php
				$psql="select * from program limit 11,2";
				$presult=mysqli_query($link,$psql);
				while($prow=mysqli_fetch_array($presult)){
			?>
        		<li class="shou6"><?php echo $prow['title'];?></li>
				<?php }?>
        	</ul>
        	<ul class="sanjiao5">
				<?php
				$psql="select * from program limit 13,1";
				$presult=mysqli_query($link,$psql);
				while($prow=mysqli_fetch_array($presult)){
			?>
        		<li class="shoumeng"><?php echo $prow['title'];?></li>
				<?php }?>
        	</ul>
        </div>
         <div class="clear3">
        	<img src="img/bg10.jpg" class="bgimg1" />
        	<img src="img/erwm.png"  class="erwei"/>
        	<p class="shibo">版权所有:世博演艺</p>
        </div>
    </body>
</html>