




















if(typeof doyoo=='undefined' || !doyoo){
var d_genId=function(){
    var id ='',ids='0123456789abcdef';
    for(var i=0;i<34;i++){ id+=ids.charAt(Math.floor(Math.random()*16));  }  return id;
};
var doyoo={
env:{
secure:false,
mon:'http://m8101.looyu.com/monitor',
chat:'http://looyuoms7623.looyu.com/chat',
file:'http://yun-static.soperson.com/131221',
compId:20000356,
confId:10043952,
vId:d_genId(),
lang:'',
fixFlash:1,
subComp:0,
_mark:'d8619a6cb9e1baab2e65b87947b56fa867ba7075630b8d88ac0a3304ac62dbc627c8be08974dec9f'
}




};

if(typeof talk99Init == 'function'){
    talk99Init(doyoo);
}
if(!document.getElementById('doyoo_panel')){
var supportJquery=typeof jQuery!='undefined';
var doyooWrite=function(html){
	document.writeln(html);
}

doyooWrite('<div id="doyoo_panel"></div>');


doyooWrite('<div id="doyoo_monitor"></div>');


doyooWrite('<div id="talk99_message"></div>')

doyooWrite('<div id="doyoo_share" style="display:none;"></div>');
doyooWrite('<lin'+'k rel="stylesheet" type="text/css" href="http://yun-static.soperson.com/131221/oms.css?170217"></li'+'nk>');
doyooWrite('<scr'+'ipt type="text/javascript" src="http://yun-static.soperson.com/131221/oms.js?170303" charset="utf-8"></scr'+'ipt>');
}
}
