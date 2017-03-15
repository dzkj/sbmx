$(function(){
	if('232938078'.indexOf($("#productid").val()) == -1){
		return;
	}
	//$('.zxxz').attr('href','javascript:openLyc();');
	$.each($('#Jdate li'),function(){
		if($(this).attr("cc") != ''){
			initLyc($(this));
			return true;
		}
	});;
	$('#Jdate li').bind("click",function(){
		initLyc($(this));
	});
});
function initLyc($this){
	$('.zxxz').attr('href','javascript:openLyc();');
	$.ajax({
		url: getPath() +'/ajax/lycAjax',
		type:'post',
		data:{type:'get'},
		success:function(data){
			if(data.success == 'L'){
				$('.zxxz').attr('href','javascript:lycLogin();');
		   	    return;
			}
			if(data.success == 'Y'){
				var xzurl = $this.attr("cc");
				//location.href = xzurl + ((xzurl.indexOf("?") != -1) ? '&' : '?');
				$('.zxxz').attr('href', xzurl + ((xzurl.indexOf("?") != -1) ? '&' : '?')).show();
			}
		}
	});
}
function lycLogin(){
	location.href = getPath()+'/auth/login?redirectUrl='+location.href;
}
var gettoken=true;
function openLyc(){
	if(gettoken){
		gettoken=false;
		$.get(getPath() + '/ajax/getSeatToken',{},function(data){
			if(data == 'yes'){
				var ques = ['1a','2b','3c','4b','5a','6b','7a','8a','9b','10a','11c','12b','13a','14c','15b'];
				var menus = [
				               {
				            	 id: 1,
				            	 str: ['<div class="f14"><font></font><span style="display:none;">1</span>.压寨夫人片段是第几集？</div>',
				            	       '		    <ul class="ml20">',
				            	       '		        <li><label><input name="lyc" value="a" type="radio" /> 第一集</label></li>',
				            	       '		        <li><label><input name="lyc" value="b" type="radio" /> 第二集</label></li>',
				            	       '		        <li><label><input name="lyc" value="c" type="radio" /> 第三集</label></li>',
				            	       '		        <li><label><input name="lyc" value="d" type="radio" /> 最后一集</label></li>',
				            	       '		    </ul>'].join("")
				                },
				                {
				            	 id: 2,
				            	 str: ['<div class="f14"><font></font><span style="display:none;">2</span>.Krist中文名？</div>',
				            	       '		    <ul class="ml20">',
				            	       '		        <li><label><input name="lyc" value="a" type="radio" /> 王慧桢</label></li>',
				            	       '		        <li><label><input name="lyc" value="b" type="radio" /> 王慧侦</label></li>',
				            	       '		        <li><label><input name="lyc" value="c" type="radio" /> 王慧祯</label></li>',
				            	       '		        <li><label><input name="lyc" value="d" type="radio" /> 王慧帧</label></li>',
				            	       '		    </ul>'].join("")
				                },
				                {
				            	 id: 3,
				            	 str: ['<div class="f14"><font></font><span style="display:none;">3</span>.暖暖爱吃什么？</div>',
				            	       '		    <ul class="ml20">',
				            	       '		        <li><label><input name="lyc" value="a" type="radio" /> 清汤肉丸米粉</label></li>',
				            	       '		        <li><label><input name="lyc" value="b" type="radio" /> 冰咖啡</label></li>',
				            	       '		        <li><label><input name="lyc" value="c" type="radio" /> 大份冬阴汤面</label></li>',
				            	       '		    </ul>'].join("")
				                },
				                {
				            	 id: 4,
				            	 str: ['<div class="f14"><font></font><span style="display:none;">4</span>.剧中谁爱喝冰咖啡？</div>',
				            	       '		    <ul class="ml20">',
				            	       '		        <li><label><input name="lyc" value="a" type="radio" /> Arthit</label></li>',
				            	       '		        <li><label><input name="lyc" value="b" type="radio" /> Kongphop</label></li>',
				            	       '		        <li><label><input name="lyc" value="c" type="radio" /> Krist</label></li>',
				            	       '		    </ul>'].join("")
				                },
				                {
				            	 id: 5,
				            	 str: ['<div class="f14"><font></font><span style="display:none;">5</span>.钢炮的侄女几岁了</div>',
				            	       '		    <ul class="ml20">',
				            	       '		        <li><label><input name="lyc" value="a" type="radio" /> 3岁</label></li>',
				            	       '		        <li><label><input name="lyc" value="b" type="radio" /> 4岁</label></li>',
				            	       '		        <li><label><input name="lyc" value="c" type="radio" /> 5岁</label></li>',
				            	       '		        <li><label><input name="lyc" value="d" type="radio" /> 6岁</label></li>',
				            	       '		    </ul>'].join("")
				                },
				                {
				            	 id: 6,
				            	 str: ['<div class="f14"><font></font><span style="display:none;">6</span>.暖暖被教头学长罚跑了几圈操场？</div>',
				            	       '		    <ul class="ml20">',
				            	       '		        <li><label><input name="lyc" value="a" type="radio" /> 53圈</label></li>',
				            	       '		        <li><label><input name="lyc" value="b" type="radio" /> 54圈</label></li>',
				            	       '		        <li><label><input name="lyc" value="c" type="radio" /> 55圈</label></li>',
				            	       '		        <li><label><input name="lyc" value="d" type="radio" /> 56圈</label></li>',
				            	       '		    </ul>'].join("")
				                },
				                {
				            	 id: 7,
				            	 str: ['<div class="f14"><font></font><span style="display:none;">7</span>.钢炮参加校园先生是暖暖去现场了吗？</div>',
				            	       '		    <ul class="ml20">',
				            	       '		        <li><label><input name="lyc" value="a" type="radio" />去了</label></li>',
				            	       '		        <li><label><input name="lyc" value="b" type="radio" />没去</label></li>',
				            	       '		    </ul>'].join("")
				                },
				                {
				            	 id: 8,
				            	 str: ['<div class="f14"><font></font><span style="display:none;">8</span>.钢炮的学号</div>',
				            	       '		    <ul class="ml20">',
				            	       '		        <li><label><input name="lyc" value="a" type="radio" /> 0062 </label></li>',
				            	       '		        <li><label><input name="lyc" value="b" type="radio" /> 0206 </label></li>',
				            	       '		        <li><label><input name="lyc" value="c" type="radio" /> 0602 </label></li>',
				            	       '		    </ul>'].join("")
				                },
				                {
				            	 id: 9,
				            	 str: ['<div class="f14"><font></font><span style="display:none;">9</span>.暖暖的学号</div>',
				            	       '		    <ul class="ml20">',
				            	       '		        <li><label><input name="lyc" value="a" type="radio" />0062</label></li>',
				            	       '		        <li><label><input name="lyc" value="b" type="radio" />0206</label></li>',
				            	       '		        <li><label><input name="lyc" value="c" type="radio" />0602</label></li>',
				            	       '		    </ul>'].join("")
				                } ,
				                {
				            	 id: 10,
				            	 str: ['<div class="f14"><font></font><span style="display:none;">10</span>.剧中暖暖是谁的小名？</div>',
				            	       '		    <ul class="ml20">',
				            	       '		        <li><label><input name="lyc" value="a" type="radio" /> Arthit</label></li>',
				            	       '		        <li><label><input name="lyc" value="b" type="radio" /> Kongphop</label></li>',
				            	       '		        <li><label><input name="lyc" value="c" type="radio" /> Singto</label></li>',
				            	       '		    </ul>'].join("")
				                },
				                {
				            	 id: 11,
				            	 str: ['<div class="f14"><font></font><span style="display:none;">11</span>.学长家的狗叫什么</div>',
				            	       '		    <ul class="ml20">',
				            	       '		        <li><label><input name="lyc" value="a" type="radio" /> 狐狸</label></li>',
				            	       '		        <li><label><input name="lyc" value="b" type="radio" /> 麒麟</label></li>',
				            	       '		        <li><label><input name="lyc" value="c" type="radio" /> 孔雀</label></li>',
				            	       '		    </ul>'].join("")
				                },
				                {
				            	 id: 12,
				            	 str: ['<div class="f14"><font></font><span style="display:none;">12</span>.现实生活中谁是学长？</div>',
				            	       '		    <ul class="ml20">',
				            	       '		        <li><label><input name="lyc" value="a" type="radio" /> Arthit</label></li>',
				            	       '		        <li><label><input name="lyc" value="b" type="radio" /> Singto</label></li>',
				            	       '		        <li><label><input name="lyc" value="c" type="radio" /> Krist</label></li>',
				            	       '		    </ul>'].join("")
				                },
				                {
				            	 id: 13,
				            	 str: ['<div class="f14"><font></font><span style="display:none;">13</span>.剧中主人公住的宿舍门牌号是？</div>',
				            	       '		    <ul class="ml20">',
				            	       '		        <li><label><input name="lyc" value="a" type="radio" /> 618</label></li>',
				            	       '		        <li><label><input name="lyc" value="b" type="radio" /> 628</label></li>',
				            	       '		        <li><label><input name="lyc" value="c" type="radio" /> 638</label></li>',
				            	       '		    </ul>'].join("")
				                },
				                {
				            	 id: 14,
				            	 str: ['<div class="f14"><font></font><span style="display:none;">14</span>.定情信物是什么？</div>',
				            	       '		    <ul class="ml20">',
				            	       '		        <li><label><input name="lyc" value="a" type="radio" /> 手绳</label></li>',
				            	       '		        <li><label><input name="lyc" value="b" type="radio" /> 名牌</label></li>',
				            	       '		        <li><label><input name="lyc" value="c" type="radio" /> 齿轮</label></li>',
				            	       '		    </ul>'].join("")
				                },
				                {
				            	 id: 15,
				            	 str: ['<div class="f14"><font></font><span style="display:none;">15</span>.中国粉丝给Singto取得昵称是？</div>',
				            	       '		    <ul class="ml20">',
				            	       '		        <li><label><input name="lyc" value="a" type="radio" /> 小狼狗</label></li>',
				            	       '		        <li><label><input name="lyc" value="b" type="radio" /> 狮子</label></li>',
				            	       '		        <li><label><input name="lyc" value="c" type="radio" /> 忠犬</label></li>',
				            	       '		    </ul>'].join("")
				                }
				                
				            ]

				//弹出框
				var boxer = ['<div class="box-pop5" id="box-pop5" style="display:none;width:468px;border:3px #d3d3d3 solid; padding:2px;background:#fff;">',
				             '		<ul class="boxHeader" style="height:23px; width:458px; background:#f0f0f0; color:#4c4c4c; padding:0 0 0 10px; font-size:12px; display:block; padding-top:7px;font-weight:bold;">',
				             '		  <li class="fl">开始答题</li>',
				             '		  <li class="fr"><a class="closeBox"> </a></li>',
				             '		</ul>',
				             '		<div class="box-pop5-all" style="padding-left:10px;padding-top:10px;line-height:30px;">',
				             '		    <p class="tc pt50 pb50">加载中...</p>',
				             '		</div>',
				             '		<div class="box-pop5-info tc red">',
				             '		    <p class="">&nbsp;</p>',
				             '		</div>',
				             '	    <div class="box-pop5-but lycBtnAll undb" style="width:439px; margin: 10px auto 20px auto; border-top:1px dotted #cdcdcd; padding-top:20px; text-align:center;"><a class="lycBtn tc" href="javascript:void(0);" style="margin:0 auto;display:block;width:80px; height:30px;background:#cc0001;color:#fff;font-size:14px;line-height:30px;font-family:microsoft yahei;border-radius:2px;-moz-border-radius: 2px;-webkit-border-radius: 2px;">下一题</a></div>',
				             '	</div>'].join("");
				var titNum;   //题号
				var rest;     //答案
				var ns = 1;  //题目序号重新放置
				var ts = 3;  //取几道题目

				//题目随机排序
				menus = menus.sort(function(a,b){ return Math.random()>.5 ? -1 : 1;});

				//初始化加载题目 默认加载随机第一题
				$('body').append(boxer);
				$('.box-pop5').minBox().show();
				$('.box-pop5-all').html('').append(menus[0].str);
				$('.box-pop5-all font').html('1');
				$('.lycBtnAll').show();

			    //点击提交
				$('.lycBtn').click(function(){
					$('.box-pop5-info').html("&nbsp");
					titNum = $('.box-pop5-all span').html();
					var vals   = $(".box-pop5-all input[type='radio']:checked").attr('value');
					if(vals == undefined){
						$('.box-pop5-info').html("亲，请您选择一个答案！");
						return;
					}
					rest = titNum + vals;
					if(ques[titNum-1] === rest){    //答对了进入下一题
						if(--ts <= 0){
							$('.box-pop5-but').hide();
							$('.box-pop5-all').html('<div class="tc pt50 pb50">恭喜您通过了!</div>');
							$('.box-pop5,#pageOverlays-5000').remove();
							$.ajax({
								url: getPath() +'/ajax/lycAjax',
								type:'post',
								data:{type:'submit'},
								success:function(data){
									var li = $('#Jdate li[class=on]');
									if(data.success == 'Y'){
										var xzurl = li.attr("cc");
										location.href = xzurl + ((xzurl.indexOf("?") != -1) ? '&' : '?');
										//$('.zxxz').attr('href', xzurl + ((xzurl.indexOf("?") != -1) ? '&' : '?')).show();
										return;
									}
								}
							});
							return;
						}
						ns++;
						$('.box-pop5-all').html('').append(menus[ns-1].str);
						$('.box-pop5-all font').html(ns);
					}else{
						$('.box-pop5-info').html("亲，您答错了吆，请重新选择！");
					}
				});
			}else{
				alert_sussnew("提示！","很抱歉，项目火爆，正在排队，请再试试吧");
			}
			gettoken=true;
		});
	}else{
		alert_sussnew("提示！","很抱歉，项目火爆，正在排队，请再试试吧");
	}
}