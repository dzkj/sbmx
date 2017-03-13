


var close_tips_changci = function (that) {
  $(".tips-cfm").click(function(){
    $(this).parent().parent().remove();
    $(".cover").remove();
    if ($(this).is('#tips-cfm-id')) {
        $("#alreadychoose").hide();
        $("#selected-box").empty();

        var $chooseType = $(that);
        var changciId = $chooseType.attr("id");
        var piaojia = $("#" + changciId + "-piaojiabox").children().length;
        var taopiao = $("#" + changciId + "-taopiaobox").children().length;
        if (piaojia > 0) {
            $("#piaojia_title").show();
        }
        else {
            $("#piaojia_title").hide();
        }
        if (taopiao > 0) {
            $("#taopiao_title").show();
        }
        else {
            $("#taopiao_title").hide();
        }
        
        $(that).parent().siblings().children().removeClass("changci-selected");
        $(that).addClass("changci-selected");

        $("#"+changciId+"-piaojiabox").show();
        $("#" + changciId + "-piaojiabox").siblings().children().children(".piaojia").removeClass("piaojia-selected");
        $("#"+changciId+"-piaojiabox").siblings().hide();

        $("#"+changciId+"-taopiaobox").show();
        $("#" + changciId + "-taopiaobox").siblings().children().children(".piaojia").removeClass("piaojia-selected");
        $("#" + changciId + "-taopiaobox").siblings().children().children(".piaojia").attr("status", "uncheck");
         $("#" + changciId + "-taopiaobox").siblings().hide();

         $("#" + changciId + "-piaojiabox").siblings().children().children(".piaojia").attr("status", "uncheck");

         $("#" + changciId + "-piaojiabox").siblings().children().children(".wrap").removeClass("wrap-selected");
         $("#" + changciId + "-piaojiabox").siblings().children().children(".wrap").children().children(".piaojia").attr("status", "uncheck");
         $("#" + changciId + "-piaojiabox").siblings().children().children(".wrap").children().children(".piaojia").removeClass("piaojia-selected");
    }
     
     if($(this).is('#tips-cancel-id')){
       //alert("取消");
     }
  })
}


function show_cover(){
    var $cover =  $('<div class="cover"></div>');
        $("body").prepend($cover);
}

function show_tips_changci(tipstring,th){
        var that = th;
        var $tips =  $('<div class="tips">'+
                         '<p>'+tipstring+'</p>'+
                          '<div style="text-align:center">'+
                            '<div class="tips-cfm" id="tips-cfm-id">确定</div>'+
                            '<div class="tips-cfm" id="tips-cancel-id">取消</div>'+
                           '</div>'+
                        '</div>');
        $("body").prepend($tips);
        show_cover();
        close_tips_changci(that);
    }
