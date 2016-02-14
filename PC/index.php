<?
	include_once   "./header.php";
	$serial	= BC_getSerial();

	//$ss_media	= $_SESSION['ss_media'];
	session_unset();
	//if (!$_SESSION['ss_serial'])
		$_SESSION['ss_serial']	= $serial;

	//print_r($_SESSION['ss_serial']);
?>
<body>
<!-- <div id="rip_area">
  PK00 핑크밤 <input type="radio" name="ink_rip" value="PK00"><br />
  PK03 핑크쇼크 <input type="radio" name="ink_rip" value="PK03"><br />
  CR01 로코피치 <input type="radio" name="ink_rip" value="CR01"><br />
  OR01 베이비오렌지 <input type="radio" name="ink_rip" value="OR01"><br />
  PK01 핑크바이올렛 <input type="radio" name="ink_rip" value="PK01"><br />
  PK02 로즈피오니 <input type="radio" name="ink_rip" value="PK02"><br />
  PK04 핑크오마쥬 <input type="radio" name="ink_rip" value="PK04"><br />
  BR01 인디안로즈 <input type="radio" name="ink_rip" value="BR01"><br />
  RD01 잉크레드 <input type="radio" name="ink_rip" value="RD01"><br />
  RD02 레드씽 <input type="radio" name="ink_rip" value="RD02"><br />
  PP01 베이베리 <input type="radio" name="ink_rip" value="PP01"><br />
  PP02 톡마젠타 <input type="radio" name="ink_rip" value="PP02"><br />
  <a href="#" onclick="apply_member();return false;">지원하기</a>
</div> -->
<div id="rip_area" class="popup_wrap">
  <div class="p_main p_position">
    <div class="block_close clearfix">
      <a href="#" onclick="parent.document.location.reload(); " class="btn_close"><img src="images/popup/btn_close.png" /></a>
    </div>
    <div class="block_content">
      <div class="block_product">
        <!--첫째줄-->
        <ul class="clearfix">
          <li><a href="#" onmouseover="over_lip('PK00','1');" onmouseout="out_lip();" onclick="sel_lip('PK00','1');"><img src="images/popup/btn_ink_1.png" class="lip_thumb1" id="PK00"/></a></li>
          <li><a href="#" onmouseover="over_lip('PK03','2');" onmouseout="out_lip();" onclick="sel_lip('PK03','2');"><img src="images/popup/btn_ink_2.png" class="lip_thumb2" id="PK03" /></a></li>
          <li><a href="#" onmouseover="over_lip('CR01','3');" onmouseout="out_lip();" onclick="sel_lip('CR01','3');"><img src="images/popup/btn_ink_3.png" class="lip_thumb3" id="CR01" /></a></li>
          <li><a href="#" onmouseover="over_lip('OR01','4');" onmouseout="out_lip();" onclick="sel_lip('OR01','4');"><img src="images/popup/btn_ink_4.png" class="lip_thumb4" id="OR01" /></a></li>
        </ul>
        <!--둘째줄-->
        <ul class="clearfix">
          <li><a href="#" onmouseover="over_lip('PK01','5');" onmouseout="out_lip();" onclick="sel_lip('PK01','5');"><img src="images/popup/btn_ink_5.png" class="lip_thumb5" id="PK01" /></a></li>
          <li><a href="#" onmouseover="over_lip('PK02','6');" onmouseout="out_lip();" onclick="sel_lip('PK02','6');"><img src="images/popup/btn_ink_6.png" class="lip_thumb6" id="PK02" /></a></li>
          <li><a href="#" onmouseover="over_lip('PK04','7');" onmouseout="out_lip();" onclick="sel_lip('PK04','7');"><img src="images/popup/btn_ink_7.png" class="lip_thumb7" id="PK04" /></a></li>
          <li><a href="#" onmouseover="over_lip('BR01','8');" onmouseout="out_lip();" onclick="sel_lip('BR01','8');"><img src="images/popup/btn_ink_8.png" class="lip_thumb8" id="BR01" /></a></li>
        </ul>
        <!--셋째줄-->
        <ul class="clearfix">
          <li><a href="#" onmouseover="over_lip('RD01','9');" onmouseout="out_lip();" onclick="sel_lip('RD01','9');"><img src="images/popup/btn_ink_9.png" class="lip_thumb9" id="RD01" /></a></li>
          <li><a href="#" onmouseover="over_lip('RD02','10');" onmouseout="out_lip();" onclick="sel_lip('RD02','10');"><img src="images/popup/btn_ink_10.png" class="lip_thumb10" id="RD02" /></a></li>
          <li><a href="#" onmouseover="over_lip('PP01','11');" onmouseout="out_lip();" onclick="sel_lip('PP01','11');"><img src="images/popup/btn_ink_11.png" class="lip_thumb11" id="PP01" /></a></li>
          <li><a href="#" onmouseover="over_lip('PP02','12');" onmouseout="out_lip();" onclick="sel_lip('PP02','12');"><img src="images/popup/btn_ink_12.png" class="lip_thumb12" id="PP02" /></a></li>
        </ul>
      </div>
      <div class="btn_block">
        <a href="#" onclick="apply_member();return false;"><img src="images/popup/btn_select.png" alt=""/></a>
      </div>
    </div>
  </div>
</div>

<!--개인정보입력 작성1-->
<div id="input_area1" style="display:none" class="popup_wrap">
  <div class="p_main input_1 p_position">
    <div class="block_close clearfix">
      <a href="#" class="btn_close"><img src="images/popup/btn_close.png" /></a>
    </div>
    <div class="block_content">
      <div class="title">
        <img src="images/popup/title_sub.png" alt=""/>
      </div>
      <div class="tab_menu">
        <div class="inner clearfix">
          <div><a href="#"><img src="images/popup/tab_1_on.jpg" alt=""/></a></div>
          <div><a href="#"><img src="images/popup/tab_2_off.jpg" alt=""/></a></div>
        </div>
      </div>
      <div class="block_input">
        <div class="inner">
          <div class="txt"><img src="images/popup/txt_input_1.jpg" alt=""/></div>
          <div class="input_box">
            <ul class="clearfix">
              <li class="label"><img src="images/popup/label_name.jpg" alt=""/></li>
              <li><input type="text" name="mb_name" id="mb_name"></li>
            </ul>
            <ul class="clearfix">
              <li class="label"><img src="images/popup/label_num.jpg" alt=""/></li>
              <li class="in_num">
                <input type="tel" name="mb_phone1" id="mb_phone1"><input type="tel" name="mb_phone2" id="mb_phone2"><input type="tel" name="mb_phone3" id="mb_phone3" class="last">
              </li>
            </ul>
            <ul class="clearfix">
              <li class="label"><img src="images/popup/label_sns.jpg" alt=""/></li>
              <li><input type="text" name="mb_sns" id="mb_sns"></li>
            </ul>
          </div>
          <div class="check_box">
            <div class="inner clearfix">
              <div class="check"><a href="#" onclick="privacy_check();return false;"><img src="images/popup/check_off.jpg" alt="" name="privacy_agree" id="privacy_agree"/></a></div>
              <div class="c_t"><img src="images/popup/ct_1.jpg" alt=""/></div>
              <div class="btn"><a href="#" onclick="open_pop('privacy_agree_popup');return false;"><img src="images/popup/btn_detail.jpg" alt=""/></a></div>
            </div>
            <div class="inner clearfix">
              <div class="check"><a href="#" onclick="adver_check();return false;"><img src="images/popup/check_off.jpg" alt="" name="adver_agree" id="adver_agree"/></a></div>
              <div class="c_t"><img src="images/popup/ct_2.jpg" alt=""/></div>
              <div class="btn"><a href="#" onclick="open_pop('adver_agree_popup');return false;"><img src="images/popup/btn_detail.jpg" alt=""/></a></div>
            </div>
          </div>
        </div>
      </div>
      <div class="btn_block two">
        <div class="inner clearfix">
          <div class="left">
            <a href="index.php"><img src="images/popup/btn_before.jpg" alt=""/></a>
          </div>
          <div class="right">
            <a href="#" onclick="go_next();return false;"><img src="images/popup/btn_next.jpg" alt=""/></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--END : 개인정보입력  작성1-->

<!--개인정보입력  작성2-->
<div id="input_area2" style="display:none" class="popup_wrap">
  <div class="p_main input_1 p_position">
    <div class="block_close clearfix">
      <a href="#" class="btn_close"><img src="images/popup/btn_close.png" /></a>
    </div>
    <div class="block_content">
      <div class="title">
        <img src="images/popup/title_sub.png" alt=""/>
      </div>
      <div class="tab_menu">
        <div class="inner clearfix">
          <div><a href="#"><img src="images/popup/tab_1_off.jpg" alt=""/></a></div>
          <div><a href="#"><img src="images/popup/tab_2_on.jpg" alt=""/></a></div>
        </div>
      </div>
      <div class="block_input">
        <div class="inner">
          <div class="txt"><img src="images/popup/txt_input_2.jpg" alt=""/></div>
          <div class="upload_pic">
            <div class="thumb">
              <div class="inner_thumbs">
                <div class="label"><img src="images/popup/label_thumb.jpg" alt=""/></div>
                <div class="pics">
                  <div class="inner_pics clearfix">
                    <div id="files" class="pic files"></div>
                    <div id="files2" class="pic files"></div>
                    <div id="files3" class="pic files"></div>
                    <div id="files4" class="pic files"></div>
                    <div id="files5" class="pic files"></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="upload">
              <div class="inner_upload clearfix">
                <div class="label"><img src="images/popup/label_file.jpg" alt=""/></div>
                <div class="inputs">
                  <div class="one">
                    <div class="one_inner clearfix">
                      <div><input type="text" alt="셀카1" id="image_up_name1"></div>
                      <div>
                        <!-- <a href="#"><img src="images/popup/btn_sear.jpg" alt=""/></a> -->
                        <span class="btn btn-success fileinput-button">
                          <i class="glyphicon glyphicon-plus"></i>
                          <span><a href="#"><img src="images/popup/btn_sear.jpg" alt=""/></a></span>
                          <!-- The file input field used as target for the file upload widget -->
                          <input id="fileupload" type="file" name="files[]" >
                        </span>
                        <!-- The global progress bar -->
                        <div id="progress" class="progress">
                          <div class="progress-bar progress-bar-success"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="one second">
                    <div class="one_inner clearfix">
                      <div><input type="text"  alt="셀카2" id="image_up_name2"></div>
                      <div>
                        <!-- <a href="#"><img src="images/popup/btn_sear.jpg" alt=""/></a> -->
                        <span class="btn btn-success fileinput-button">
                          <i class="glyphicon glyphicon-plus"></i>
                          <span><a href="#"><img src="images/popup/btn_sear.jpg" alt=""/></a></span>
                          <!-- The file input field used as target for the file upload widget -->
                          <input id="fileupload2" type="file" name="files[]" >
                        </span>
                        <!-- The global progress bar -->
                        <div id="progress" class="progress">
                          <div class="progress-bar progress-bar-success"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div><!--inputs-->
                <div class="inputs right">
                  <div class="one">
                    <div class="one_inner clearfix">
                      <div><input type="text" alt="타인이 찍어준 사진1" id="image_up_name3"></div>
                      <div>
                        <!-- <a href="#"><img src="images/popup/btn_sear.jpg" alt=""/></a> -->
                        <span class="btn btn-success fileinput-button">
                          <i class="glyphicon glyphicon-plus"></i>
                          <span><a href="#"><img src="images/popup/btn_sear.jpg" alt=""/></a></span>
                          <!-- The file input field used as target for the file upload widget -->
                          <input id="fileupload3" type="file" name="files[]" >
                        </span>
                        <!-- The global progress bar -->
                        <div id="progress" class="progress">
                          <div class="progress-bar progress-bar-success"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="one second">
                    <div class="one_inner clearfix">
                      <div><input type="text" alt="타인이 찍어준 사진2" id="image_up_name4"></div>
                      <div>
                        <!-- <a href="#"><img src="images/popup/btn_sear.jpg" alt=""/></a> -->
                        <span class="btn btn-success fileinput-button">
                          <i class="glyphicon glyphicon-plus"></i>
                          <span><a href="#"><img src="images/popup/btn_sear.jpg" alt=""/></a></span>
                          <!-- The file input field used as target for the file upload widget -->
                          <input id="fileupload4" type="file" name="files[]" >
                        </span>
                        <!-- The global progress bar -->
                        <div id="progress" class="progress">
                          <div class="progress-bar progress-bar-success"></div>
                        </div>
                      </div>
                    </div>
                  </div><!--one second-->
                  <div class="one second">
                    <div class="one_inner clearfix">
                      <div><input type="text" alt="입술 노메이크업 무보정 사진" id="image_up_name5"></div>
                      <div>
                        <!-- <a href="#"><img src="images/popup/btn_sear.jpg" alt=""/></a> -->
                        <span class="btn btn-success fileinput-button">
                          <i class="glyphicon glyphicon-plus"></i>
                          <span><a href="#"><img src="images/popup/btn_sear.jpg" alt=""/></a></span>
                          <!-- The file input field used as target for the file upload widget -->
                          <input id="fileupload5" type="file" name="files[]" >
                        </span>
                        <!-- The global progress bar -->
                        <div id="progress" class="progress">
                          <div class="progress-bar progress-bar-success"></div>
                        </div>
                      </div>
                    </div>
                  </div><!--one second-->
                </div><!--inputs right-->
              </div><!--inner_upload-->
            </div><!--upload-->
          </div>
        </div>
      </div>
      <div class="txt_notice">
        <img src="images/popup/txt_notice.png" alt=""/>
      </div>
      <div class="btn_block two">
        <div class="inner clearfix">
          <div class="left">
            <a href="index.php"><img src="images/popup/btn_before.jpg" alt=""/></a>
          </div>
          <div class="right">
            <a href="#" onclick="go_comp();return false;"><img src="images/popup/btn_comp.jpg" alt=""/></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--개인정보입력  작성2-->

<!--개인정보입력 완료 및 대학내일 지원여부 선택-->
<div id="input_area3" style="display:none" class="popup_wrap">
  <div class="p_main input_2 p_position">
    <div class="block_close clearfix">
      <a href="#" class="btn_close"><img src="images/popup/btn_close.png" /></a>
    </div>
    <div class="block_content">
      <div class="title comp">
        <img src="images/popup/title_sub.png" alt=""/>
      </div>
      <div class="block_input">
        <div class="inner">
          <div class="txt"><img src="images/popup/txt_comp.jpg" alt=""/></div>
          <div class="btns">
            <div class="btn"><a href="#" onclick="comp_proc('1');return false;"><img src="images/popup/btn_dhni.jpg" alt=""/></a></div>
            <div class="btn"><a href="#" onclick="comp_proc('2');return false;"><img src="images/popup/btn_dhni_no.jpg" alt=""/></a></div>
          </div>
          <div class="txt"><img src="images/popup/txt_notice_2.jpg" alt=""/></div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--개인정보입력 완료 및 대학내일 지원여부 선택-->

<!--대학내일 지원 정보 입력 -->
<div id="input_area4" style="display:none;" class="popup_wrap">
  <div class="p_main input_2 p_position">
    <div class="block_close clearfix">
      <a href="#" class="btn_close"><img src="images/popup/btn_close.png" /></a>
    </div>
    <div class="block_content">
      <div class="title comp">
        <img src="images/popup/title_sub.png" alt=""/>
      </div>
      <div class="block_input">
        <div class="inner dhni">
          <div class="txt"><img src="images/popup/title_dhni.jpg" alt=""/></div>
          <div class="input_dhni">
            <div class="one">
              <div class="inner_one clearfix">
                <div class="label"><img src="images/popup/label_college.jpg" alt=""/></div>
                <div class="input"><input type="text" name="mb_university" id="mb_university"></div>
              </div>
            </div>
            <div class="one">
              <div class="inner_one clearfix">
                <div class="label"><img src="images/popup/label_major.jpg" alt=""/></div>
                <div class="input"><input type="text" name="mb_major" id="mb_major"></div>
              </div>
            </div>
          </div>
        </div>
      </div><!--block_input-->
      <div class="txt_notice dhni">
        <img src="images/popup/txt_notice_more.jpg" alt=""/>
      </div>
      <div class="btn_block two">
        <div class="inner clearfix">
          <div class="left">
            <a href="index.php"><img src="images/popup/btn_before.jpg" alt=""/></a>
          </div>
          <div class="right">
            <a href="#" onclick="go_dhni_comp();return false;"><img src="images/popup/btn_comp.jpg" alt=""/></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--대학내일 지원 정보 입력 -->

<!--개인정보입력 완료 ( 대학내일 지원정보 완료 ) -->
<div id="comp_area2" style="display:none;" class="popup_wrap">
  <div class="p_main input_2 p_position">
    <div class="block_close clearfix">
      <a href="#" class="btn_close"><img src="images/popup/btn_close.png" /></a>
    </div>
    <div class="block_content">
      <div class="title comp">
        <img src="images/popup/title_sub.png" alt=""/>
      </div>
      <div class="block_input">
        <div class="inner comp2">
          <div class="txt"><img src="images/popup/txt_comp_dhni.jpg" alt=""/></div>
          <div class="btn_in">
            <a href="index.php"><img src="images/popup/btn_ok.jpg" alt=""/></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--개인정보입력 완료 ( 대학내일 지원정보 완료 ) -->


<!--개인정보입력 완료 ( 대학내일 지원안함 ) -->
<div id="comp_area1" style="display:none;" class="popup_wrap">
  <div class="p_main input_2 p_position">
    <div class="block_close clearfix">
      <a href="#" class="btn_close"><img src="images/popup/btn_close.png" /></a>
    </div>
    <div class="block_content">
      <div class="title comp">
        <img src="images/popup/title_sub.png" alt=""/>
      </div>
      <div class="block_input">
        <div class="inner comp2">
          <div class="txt"><img src="images/popup/txt_comp_model.jpg" alt=""/></div>
          <div class="btn_in">
            <a href="index.php"><img src="images/popup/btn_ok.jpg" alt=""/></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--개인정보입력 완료 ( 대학내일 지원안함 ) -->

<?
	include_once   "./popup_div.php";
?>

</body>
</html>
<script type="text/javascript">
var img_name1			= null;
var img_name2			= null;
var img_name3			= null;
var img_name4			= null;
var img_name5			= null;
var sel_radio				= null;
var mb_magazineYN = null;
var lip_selYN			= "N";
var sel_value			= 0;
var chk_privacy_flag	= 0;
var chk_adver_flag		= 0;

var mb_name				= null;
var mb_phone1				= null;
var mb_phone2				= null;
var mb_phone3				= null;
var mb_phone				= null;
var mb_sns					= null;
var mb_photo1				= null;
var mb_photo2				= null;
var mb_photo3				= null;
var mb_photo4				= null;
var mb_photo5				= null;
var mb_university			= null;
var mb_major				= null;


$(document).ready(function() {
	$("#cboxTopLeft").hide();
	$("#cboxTopRight").hide();
	$("#cboxBottomLeft").hide();
	$("#cboxBottomRight").hide();
	$("#cboxMiddleLeft").hide();
	$("#cboxMiddleRight").hide();
	$("#cboxTopCenter").hide();
	$("#cboxBottomCenter").hide();
});

function go_comp()
{
	mb_photo1				= img_name1;
	mb_photo2				= img_name2;
	mb_photo3				= img_name3;
	mb_photo4				= img_name4;
	mb_photo5				= img_name5;
	if (mb_photo1 === null || mb_photo2 === null || mb_photo3 === null || mb_photo4 === null || mb_photo5 === null )
	{
		alert('셀카 2장, 타인이 찍어준 사진 2장, 입술 노메이크업 무보정 사진 1장을 업로드해주세요.');
		//chk_ins = 0;
		return false;
	}

	$.ajax({
		type:"POST",
		data:{
			"exec"					: "insert_info",
			"mb_name"				: mb_name,
			"mb_phone"				: mb_phone,
			"mb_sns"					: mb_sns,
			"mb_photo1"			: mb_photo1,
			"mb_photo2"			: mb_photo2,
			"mb_photo3"			: mb_photo3,
			"mb_photo4"			: mb_photo4,
			"mb_photo5"			: mb_photo5,
			"sel_radio"				: sel_radio,
			"mb_serial"				: "<?=$_SESSION['ss_serial']?>",
			"mb_media"				: "<?=$ss_media?>"
		},
		url: "../main_exec.php",
		success: function(response){
			alert(response);
			if (response == "Y")
			{
				$("#input_area2").hide();
				$("#input_area3").show();
			}else{
				alert("참여자가 많아 지연되고 있습니다. 다시 응모해 주세요.");
				location.href="index.php";
			}
		}
	});

}

function over_lip(param1, param2)
{
	$("#"+param1).attr("src","images/popup/btn_ink_"+param2+"_on.png");
	for (var i=1; i<13; i++)
	{
		if (i == param2 || i == sel_value)
		{
			continue;
		}

		$(".lip_thumb"+i).attr("src","images/popup/btn_ink_"+i+".png");
	}
}

function out_lip()
{
	for (var i=1; i<13; i++)
	{
		if (lip_selYN == "Y" && sel_value == i)
		{
			continue;
		}
		$(".lip_thumb"+i).attr("src","images/popup/btn_ink_"+i+".png");
	}
}

function sel_lip(param1, param2)
{
	sel_radio	= param1;
	sel_value	= param2;
	lip_selYN		= "Y";

	for (var i=1; i<13; i++)
	{
		if (i == param2)
		{
			continue;
		}

		$(".lip_thumb"+i).attr("src","images/popup/btn_ink_"+i+".png");
	}
}

function privacy_check()
{
	if (chk_privacy_flag == 0)
	{
		$("#privacy_agree").attr("src","images/popup/check_on.jpg");
		chk_privacy_flag = 1;
	}else{
		$("#privacy_agree").attr("src","images/popup/check_off.jpg");
		chk_privacy_flag = 0;
	}
}

function adver_check()
{
	if (chk_adver_flag == 0)
	{
		$("#adver_agree").attr("src","images/popup/check_on.jpg");
		chk_adver_flag = 1;
	}else{
		$("#adver_agree").attr("src","images/popup/check_off.jpg");
		chk_adver_flag = 0;
	}
}

</script>