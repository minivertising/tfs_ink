<!doctype html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta name="Generator" content="EditPlus®">
  <meta name="Author" content="">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
      <script type="text/javascript" src="../js/jquery-1.11.2.min.js"></script>
  <title>Document</title>
 </head>
 <body>
<style>
	*{
		margin:0;
		padding:0;
	}
	body{
		width:100%;
		background:#f7f5f6;
	}
	.img,
	.img img{
		width:100%;
	}
	.sec_rolling{
		position:relative;
		width:100%;
	}
	.sec_rolling .arrow{
		position:absolute;
		top:30%;
		left:2%;
		z-index:1000;
		width:30px;
	}
	.sec_rolling .arrow a{
		display:block;
	}
	.sec_rolling .arrow.right{
		left:89%;
	}
	.sec_rolling .img{
		width:96%;
		margin:0 auto;
	}

	.mnv_mask{display:none; position:absolute;top:0;left:0;width:100%;height:100%;background:url(http://www.thefaceshop-event.com/PC/images/mask_bg.png) repeat;z-index:8}

	.iframe{
		position:relative;
		width:100%;
		height:100%;
	}
	.iframe .block_close{
		display:block;
		position:absolute;
		top:10px;
		right:10px;
	}
	.iframe iframe{
		width:100%;
		height:100%;
	}

</style>
<div class="sec_top">
  <div class="http://www.thefaceshop-event.com/MOBILE/images/inner_sec_top img">
    <img src="http://www.thefaceshop-event.com/MOBILE/images/main_top.jpg">
  </div>
</div>
<div class="sec_rolling">
  <div class="arrow left"><a href="#" onclick="mnv_prev_image();return false;"><img src="http://www.thefaceshop-event.com/MOBILE/images/arrow_left.png" width="30"></a></div>
  <div class="arrow right"><a href="#" onclick="mnv_next_image();return false;"><img src="http://www.thefaceshop-event.com/MOBILE/images/arrow_right.png" width="30"></a></div>
  <div class="img" id="mnv_rolling_area1"><img src="http://www.thefaceshop-event.com/MOBILE/images/rolling_1.jpg"></div>
  <div class="img" id="mnv_rolling_area2" style="display:none;"><img src="http://www.thefaceshop-event.com/MOBILE/images/rolling_2.jpg"></div>
  <div class="img" id="mnv_rolling_area3" style="display:none;"><img src="http://www.thefaceshop-event.com/MOBILE/images/rolling_3.jpg"></div>
  <div class="img" id="mnv_rolling_area4" style="display:none;"><img src="http://www.thefaceshop-event.com/MOBILE/images/rolling_4.jpg"></div>
</div>
<div class="img">
  <img src="http://www.thefaceshop-event.com/MOBILE/images/main_detail.jpg">
</div>
<div class="img" style="background:#eee6ea;">
  <a href="#" onclick="mnv_new_window();return false;"><img src="http://www.thefaceshop-event.com/MOBILE/images/main_bottom.jpg"></a>
</div>
<div class="iframe" id="mnv_iframe" style="display:none;z-index:100">
	<div class="block_close clearfix">
        <a href="#" onclick="mnv_close_event();return false;" class="btn_close"><img src="http://www.thefaceshop-event.com/MOBILE/images/popup/btn_close.jpg" width="25" /></a>
    </div>
	<iframe src="http://www.thefaceshop-event.com/?media=tfs_event" scrolling="yes" border="0" id="mnv_iframe_content"></iframe>
 </div>

<div class="mnv_mask"></div>

<script type="text/javascript">
var mnv_rolling_num	= 1;
var mnv_height = ((document.body.scrollTop + (window.innerHeight/2)));

function mnv_new_window()
{
	//$("#mnv_iframe").show();

	if ($("#mnv_iframe").css("display") == "block")
	{
		$("mnv_iframe").hide();
		$(".mnv_mask").hide();
	}else{
		//$(".mnv_mask").width($(".bbsthumb_view_admin").width());
		//$(".mnv_mask").height($(".bbsthumb_view_admin").height());
		$(".mnv_mask").width($(document).width());
		$(".mnv_mask").height($(document).height());
		$(".mnv_mask").fadeTo(1000, 0.6);
		//$('#mnv_iframe').width($(".bbsthumb_view_admin").width());
		$('#mnv_iframe').width($(window).width());
		$('#mnv_iframe').height($(document).height()*0.2275);
		$('#mnv_iframe').css("position","absolute");
		$('#mnv_iframe').css("top","50%");
		$('#mnv_iframe').css("margin-top",-$(window).height()/2);
		$('#mnv_iframe').css("left","50%");
		$('#mnv_iframe').css("margin-left",-$(window).width()/2);

		$('#mnv_iframe').show();
		document.body.scrollTop = 0;
	}

}

function mnv_close_event()
{
	$("#mnv_iframe").hide();
	$(".mnv_mask").hide();
}

function mnv_prev_image()
{
	if (mnv_rolling_num == 1)
	{
		$("#mnv_rolling_area1").fadeOut("fast",function(){
			$("#mnv_rolling_area4").fadeIn("fast");
		})
		mnv_rolling_num = 4;
	}else if (mnv_rolling_num == 2){
		$("#mnv_rolling_area2").fadeOut("fast",function(){
			$("#mnv_rolling_area1").fadeIn("fast");
		})
		mnv_rolling_num = 1;
	}else if (mnv_rolling_num == 3){
		$("#mnv_rolling_area3").fadeOut("fast",function(){
			$("#mnv_rolling_area2").fadeIn("fast");
		})
		mnv_rolling_num = 2;
	}else if (mnv_rolling_num == 4){
		$("#mnv_rolling_area4").fadeOut("fast",function(){
			$("#mnv_rolling_area3").fadeIn("fast");
		})
		mnv_rolling_num = 3;
	}
}

function mnv_next_image()
{
	if (mnv_rolling_num == 1)
	{
		$("#mnv_rolling_area1").fadeOut("fast",function(){
			$("#mnv_rolling_area2").fadeIn("fast");
		})
		mnv_rolling_num = 2;
	}else if (mnv_rolling_num == 2){
		$("#mnv_rolling_area2").fadeOut("fast",function(){
			$("#mnv_rolling_area3").fadeIn("fast");
		})
		mnv_rolling_num = 3;
	}else if (mnv_rolling_num == 3){
		$("#mnv_rolling_area3").fadeOut("fast",function(){
			$("#mnv_rolling_area4").fadeIn("fast");
		})
		mnv_rolling_num = 4;
	}else if (mnv_rolling_num == 4){
		$("#mnv_rolling_area4").fadeOut("fast",function(){
			$("#mnv_rolling_area1").fadeIn("fast");
		})
		mnv_rolling_num = 1;
	}
}

function show_menu()
{
	if ($("#mnv_iframe").css("display") == "block")
	{
		$("mnv_iframe").hide();
		$(".mnv_mask").hide();
	}else{
		$(".mnv_mask").width($(document).width());
		$(".mnv_mask").height($(document).height());
		$(".mnv_mask").fadeTo(1000, 0.6);

		//$('#mobile_menu').css('right','-200px');
		// 이동위치값 지정
		var position = 0;
		$('#mnv_iframe').show();
	}
}

</script>


 </body>
</html>
