<?
	include_once   "./header.php";
	$serial	= BC_getSerial();

	//$ss_media	= $_SESSION['ss_media'];
	session_unset();
	//if (!$_SESSION['ss_serial'])
		$_SESSION['ss_serial']	= $serial;

	//print_r($_SESSION['ss_serial']);
?>
<body style="overflow:auto;">
<!-- 메인 화면 -->
<div id="rip_area" class="popup_wrap">
  <div class="p_mid p_position">
    <!-- <div class="block_close clearfix">
      <a href="#" class="btn_close"><img src="images/popup/btn_close.jpg" /></a>
    </div> -->
    <div class="block_content main">
      <div class="inner">
        <div class="title img">
          <img src="images/popup/title_main.jpg" />
        </div>
        <div class="libs">
          <div class="clearfix">
            <a href="#" onclick="sel_lip('PK00','1');return false;">
              <img src="images/popup/img_lib_1.jpg" class="lip_thumb1" id="PK00" />
            </a>
            <a href="#" onclick="sel_lip('PK03','2');return false;">
              <img src="images/popup/img_lib_2.jpg" class="lip_thumb2" id="PK03" />
            </a>
            <a href="#" onclick="sel_lip('CR01','3');return false;">
              <img src="images/popup/img_lib_3.jpg" class="lip_thumb3" id="CR01" />
            </a>
            <a href="#" onclick="sel_lip('OR01','4');return false;">
              <img src="images/popup/img_lib_4.jpg" class="lip_thumb4" id="OR01" />
            </a>
            <a href="#" onclick="sel_lip('PK01','5');return false;">
              <img src="images/popup/img_lib_5.jpg" class="lip_thumb5" id="PK01" />
            </a>
            <a href="#" onclick="sel_lip('PK02','6');return false;">
              <img src="images/popup/img_lib_6.jpg" class="lip_thumb6" id="PK02" />
            </a>
            <a href="#" onclick="sel_lip('PK04','7');return false;">
              <img src="images/popup/img_lib_7.jpg" class="lip_thumb7" id="PK04" />
            </a>
            <a href="#" onclick="sel_lip('BR01','8');return false;">
              <img src="images/popup/img_lib_8.jpg" class="lip_thumb8" id="BR01" />
            </a>
            <a href="#" onclick="sel_lip('RD01','9');return false;">
              <img src="images/popup/img_lib_9.jpg" class="lip_thumb9" id="RD01" />
            </a>
            <a href="#" onclick="sel_lip('RD02','10');return false;">
              <img src="images/popup/img_lib_10.jpg" class="lip_thumb10" id="RD02" />
            </a>
            <a href="#" class="last" onclick="sel_lip('PP01','11');return false;">
              <img src="images/popup/img_lib_11.jpg" class="lip_thumb11" id="PP01" />
            </a>
            <a href="#" class="last" onclick="sel_lip('PP02','12');return false;">
              <img src="images/popup/img_lib_12.jpg" class="lip_thumb12" id="PP02" />
            </a>
          </div>
        </div>
        <div class="btn_select img">
          <a href="#" onclick="apply_member();"><img src="images/popup/btn_select.jpg" /></a>
        </div>
      </div><!--inner-->
    </div>
  </div>
</div>
<!-- 메인 화면 -->

<!--개인정보입력 작성1-->
<div id="input_area1" style="display:none;" class="popup_wrap">
  <div class="p_mid p_position">
    <!-- <div class="block_close clearfix">
      <a href="#" class="btn_close"><img src="images/popup/btn_close.jpg" /></a>
    </div> -->
    <div class="block_content main">
      <div class="inner">
        <div class="title img">
          <img src="images/popup/title_sub.jpg" />
        </div>
        <div class="tab img">
          <img src="images/popup/tab_menu_1.jpg" />
        </div>
        <div class="input_block">
          <div class="inner_input_block">
            <div class="txt">
              <img src="images/popup/txt_input.jpg" />
            </div>
            <div class="input_one">
              <div class="inner_input_one clearfix">
                <div class="label"><img src="images/popup/label_name.jpg" width="85" /></div>
                <div class="input"><input type="text" name="mb_name" id="mb_name"></div>
              </div>
            </div>
            <div class="input_one second">
              <div class="inner_input_one clearfix">
                <div class="label"><img src="images/popup/label_num.jpg" width="85" /></div>
                <div class="input tel"><input type="tel" name="mb_phone1" id="mb_phone1" onkeyup="only_num(this);chk_len(this.value);return false;"><input type="tel" name="mb_phone2" id="mb_phone2" onkeyup="only_num(this);chk_len2(this.value);return false;"><input type="tel" name="mb_phone3" id="mb_phone3" onkeyup="only_num(this);chk_len3(this.value);return false;"></div>
              </div>
            </div>
            <div class="input_one second">
              <div class="inner_input_one clearfix">
                <div class="label"><img src="images/popup/label_sns.jpg" width="85" /></div>
                <div class="input"><input type="text" name="mb_sns" id="mb_sns"></div>
              </div>
            </div>
          </div>
          <div class="check_block">
            <div class="inner_check_block clearfix">
              <div class="check"><a href="#" onclick="privacy_check();return false;"><img src="images/popup/check_off.jpg" width="20" name="privacy_agree" id="privacy_agree" /></a></div>
              <div class="txt"><img src="images/popup/agree_1.jpg" width="170" /></div>
              <div class="btn_detail"><a href="#" onclick="open_pop('privacy_agree_popup');return false;"><img src="images/popup/btn_detail.jpg" width="55" /></a></div>
            </div>
            <div class="inner_check_block clearfix">
              <div class="check"><a href="#" onclick="adver_check();return false;"><img src="images/popup/check_off.jpg" width="20" name="adver_agree" id="adver_agree" /></a></div>
              <div class="txt"><img src="images/popup/agree_2.jpg" width="170" /></div>
              <div class="btn_detail"><a href="#" onclick="open_pop('adver_agree_popup');return false;"><img src="images/popup/btn_detail.jpg" width="55" /></a></div>
            </div>
          </div>                        
        </div>
        <div class="btn_block two">
          <div class="inner_btn_block clearfix">
            <div class="left"><a href="index.php"><img src="images/popup/btn_before.jpg" /></a></div>
            <div class="right"><a href="#" onclick="go_next();return false;"><img src="images/popup/btn_next.jpg" /></a></div>
          </div>
        </div>
        <div class="bottom img">
          <img src="images/popup/bottom.jpg" />
        </div>
      </div><!--inner-->
    </div>
  </div>
</div>
<!--개인정보입력 작성1-->

<!--개인정보입력 작성2-->
<div id="input_area2" style="display:none" class="popup_wrap">
  <div class="p_mid p_position">
    <div class="block_close clearfix">
      <a href="#" class="btn_close"><img src="images/popup/btn_close.jpg" /></a>
    </div>
    <div class="block_content main">
      <div class="inner">
        <div class="title img">
          <img src="images/popup/title_sub.jpg" />
        </div>
        <div class="tab img">
          <img src="images/popup/tab_menu_2.jpg" />
        </div>
        <div class="block_upload">
          <div class="inner_block_upload">
            <div class="img_exam">
              <img src="images/popup/img_exam.jpg" />
            </div>
            <div class="upload_file">
              <div class="inner_upload_file clearfix">
                <div class="label">첨부파일</div>
                <div class="btn_up">
                  <div style="padding-bottom:2px">
                    <!-- <a href="#">셀카사진1 사진업로드</a> -->
                    <span class="btn btn-success fileinput-button">
                      <i class="glyphicon glyphicon-plus"></i>
                      <span><a href="#"><img src="images/popup/btn_img_1.jpg" /></a></span>
                      <!-- The file input field used as target for the file upload widget -->
                      <input id="fileupload" type="file" name="files[]" >
                    </span>
                    <!-- The global progress bar -->
                    <!-- <div id="progress" class="progress">
                      <div class="progress-bar progress-bar-success"></div>
                    </div> -->
                  </div>
                  <div style="padding-bottom:2px">
                    <!-- <a href="#">셀카사진2 사진업로드</a> -->
                    <span class="btn btn-success fileinput-button">
                      <i class="glyphicon glyphicon-plus"></i>
                      <span><a href="#"><img src="images/popup/btn_img_2.jpg" /></a></span>
                      <!-- The file input field used as target for the file upload widget -->
                      <input id="fileupload2" type="file" name="files[]" >
                    </span>
                    <!-- The global progress bar -->
                    <!-- <div id="progress" class="progress">
                      <div class="progress-bar progress-bar-success"></div>
                    </div> -->
                  </div>
                  <div style="padding-bottom:2px">
                    <!-- <a href="#">타인이 찍어준 사진1 사진업로드</a> -->
                    <span class="btn btn-success fileinput-button">
                      <i class="glyphicon glyphicon-plus"></i>
                      <span><a href="#"><img src="images/popup/btn_img_3.jpg" /></a></span>
                      <!-- The file input field used as target for the file upload widget -->
                      <input id="fileupload3" type="file" name="files[]" >
                    </span>
                    <!-- The global progress bar -->
                    <!-- <div id="progress" class="progress">
                      <div class="progress-bar progress-bar-success"></div>
                    </div> -->
                  </div>
                  <div style="padding-bottom:2px">
                    <!-- <a href="#">타인이 찍어준 사진2 사진업로드</a> -->
                    <span class="btn btn-success fileinput-button">
                      <i class="glyphicon glyphicon-plus"></i>
                      <span><a href="#"><img src="images/popup/btn_img_4.jpg" /></a></span>
                      <!-- The file input field used as target for the file upload widget -->
                      <input id="fileupload4" type="file" name="files[]" >
                    </span>
                    <!-- The global progress bar -->
                    <!-- <div id="progress" class="progress">
                      <div class="progress-bar progress-bar-success"></div>
                    </div> -->
                  </div>
                  <div style="padding-bottom:2px">
                    <!-- <a href="#">입술 노메이크업 무보정 사진업로드</a> -->
                    <span class="btn btn-success fileinput-button">
                      <i class="glyphicon glyphicon-plus"></i>
                      <span><a href="#"><img src="images/popup/btn_img_5.jpg" /></a></span>
                      <!-- The file input field used as target for the file upload widget -->
                      <input id="fileupload5" type="file" name="files[]" >
                    </span>
                    <!-- The global progress bar -->
                    <!-- <div id="progress" class="progress">
                      <div class="progress-bar progress-bar-success"></div>
                    </div> -->
                  </div>
                </div>
              </div>
            </div>
            <div class="img_thumb">
              <div class="inner_img_thumb clearfix">
                <div class="label">미리보기</div>
                <div class="imgs">
                  <div class="inner_imgs clearfix">
                    <div id="files" class="img"></div>
                    <div id="files2" class="img"></div>
                    <div id="files3" class="img"></div>
                    <div id="files4" class="img"></div>
                    <div id="files5" class="img"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="btn_block two">
          <div class="inner_btn_block clearfix">
            <div class="left"><a href="#" onclick="go_prev('1');return false;"><img src="images/popup/btn_before.jpg" /></a></div>
            <div class="right"><a href="#" onclick="go_comp();return false;"><img src="images/popup/btn_comp.jpg" /></a></div>
          </div>
        </div>
        <div class="bottom img">
          <img src="images/popup/bottom.jpg" />
        </div>
      </div><!--inner-->
    </div>
  </div>
</div>
<!--개인정보입력 작성2-->

<!--개인정보입력 완료 및 대학내일 지원여부 선택-->
<div id="input_area3" style="display:none;" class="popup_wrap">
  <div class="p_mid p_position noti">
    <div class="block_close clearfix">
      <a href="#" class="btn_close"><img src="images/popup/btn_close.jpg" /></a>
    </div>
    <div class="block_content main">
      <div class="inner">
        <div class="title img">
          <img src="images/popup/title_sub.jpg" />
        </div>
        <div class="block_box">
          <div class="inner_block_box">
            <div class="sub_title">
              <img src="images/popup/txt_dhni.jpg" />
            </div>
            <div class="btns">
              <div class="btn"><a href="#" onclick="comp_proc('1');return false;"><img src="images/popup/btn_dhni.jpg" /></a></div>
              <div class="btn"><a href="#" onclick="comp_proc('2');return false;"><img src="images/popup/btn_no.jpg" /></a></div>
            </div>
            <div class="txt_notice">
              <img src="images/popup/txt_notice.jpg" />
            </div>
          </div>
        </div>
      </div><!--inner-->
    </div>
  </div>
</div>
<!--개인정보입력 완료 및 대학내일 지원여부 선택-->

<!--대학내일 지원 정보 입력 -->
<div id="input_area4" style="display:none;" class="popup_wrap">
  <div class="p_mid p_position">
    <div class="block_close clearfix">
      <a href="#" class="btn_close"><img src="images/popup/btn_close.jpg" /></a>
    </div>
    <div class="block_content">
      <div class="inner">
        <div class="title img">
          <img src="images/popup/title_sub.jpg" />
        </div>
        <div class="block_box">
          <div class="inner_block_box dhni">
            <div class="sub_title">
              <img src="images/popup/sub_title_dhni.jpg" />
            </div>
            <div class="inputs">
              <div class="inner_inputs clearfix">
                <div class="label">대학교</div>
                <div class="input"><input type="text" name="mb_university" id="mb_university"></div>
              </div>
              <div class="inner_inputs clearfix">
                <div class="label">전공</div>
                <div class="input"><input type="text" name="mb_major" id="mb_major"></div>
              </div>
            </div>
            <div class="txt_notice dhni">
              <img src="images/popup/txt_notice_dhni.jpg" />
            </div>
          </div>
        </div>
        <div class="notice_more img">
          <img src="images/popup/txt_notice_more.jpg" />
        </div>
        <div class="btn_block two">
          <div class="inner_btn_block clearfix">
            <div class="left"><a href="index.php"><img src="images/popup/btn_before.jpg" /></a></div>
            <div class="right"><a href="#" onclick="go_dhni_comp();return false;"><img src="images/popup/btn_comp.jpg" /></a></div>
          </div>
        </div>                    
      </div><!--inner-->
    </div>
  </div>
</div>
<!--대학내일 지원 정보 입력 -->

<!--개인정보입력 완료 ( 대학내일 지원정보 완료 ) -->
<div id="comp_area2" style="display:none;" class="popup_wrap">
  <div class="p_mid p_position noti">
    <div class="block_close clearfix">
      <a href="#" class="btn_close"><img src="images/popup/btn_close.jpg" /></a>
    </div>
    <div class="block_content main">
      <div class="inner">
        <div class="title img">
          <img src="images/popup/title_sub.jpg" />
        </div>
        <div class="block_box">
          <div class="inner_block_box only_txt">
            <div class="sub_title">
              <img src="images/popup/txt_comp_2.jpg" />
            </div>
            <div class="btn">
              <a href="index.php"><img src="images/popup/btn_ok.jpg" /></a>
            </div>
          </div>
        </div>
      </div><!--inner-->
    </div>
  </div>
</div>
<!--개인정보입력 완료 ( 대학내일 지원정보 완료 ) -->


<!--개인정보입력 완료 ( 대학내일 지원안함 ) -->
<div id="comp_area1" style="display:none;" class="popup_wrap">
  <div class="p_mid p_position noti">
    <div class="block_close clearfix">
      <a href="#" class="btn_close"><img src="images/popup/btn_close.jpg" /></a>
    </div>
    <div class="block_content main">
      <div class="inner">
        <div class="title img">
          <img src="images/popup/title_sub.jpg" />
        </div>
        <div class="block_box">
          <div class="inner_block_box only_txt">
            <div class="sub_title">
              <img src="images/popup/txt_comp.jpg" />
            </div>
            <div class="btn">
              <a href="index.php"><img src="images/popup/btn_ok.jpg" /></a>
            </div>
          </div>
        </div>
      </div><!--inner-->
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
	if (mb_photo1 === null && mb_photo2 === null && mb_photo3 === null && mb_photo4 === null && mb_photo5 === null )
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

function sel_lip(param1, param2)
{
	sel_radio	= param1;
	sel_value	= param2;
	lip_selYN		= "Y";

	$("#"+param1).attr("src","images/popup/img_lib_"+param2+"_on.jpg");
	for (var i=1; i<13; i++)
	{
		if (i == param2)
		{
			continue;
		}

		$(".lip_thumb"+i).attr("src","images/popup/img_lib_"+i+".jpg");
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