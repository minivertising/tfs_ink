var mnv_rolling_num	= 1;
var mnv_height = ((document.body.scrollTop + (window.innerHeight/2)) - (835 / 2));

function mnv_new_window()
{
	//$("#mnv_iframe").show();

	if ($("#mnv_iframe").css("display") == "block")
	{
		$("mnv_iframe").hide();
		$(".mnv_mask").hide();
	}else{
		$(".mnv_mask").width($(document).width());
		$(".mnv_mask").height($(document).height());
		$(".mnv_mask").fadeTo(1000, 0.6);
		$('#mnv_iframe').show();
		alert(mnv_height);
		document.body.scrollTop = mnv_height;
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
