<?
	include_once   "./header.php";
	$serial	= BC_getSerial();

	$ss_media	= $_SESSION['ss_media'];
	session_unset();
	//if (!$_SESSION['ss_serial'])
		$_SESSION['ss_serial']	= $serial;

	print_r($_SESSION['ss_serial']);
?>
<body>
<div id="rip_area">
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
</div>
<div id="input_area" style="display:none">
이름 : <input type="text" name="mb_name" id="mb_name"><br />
전화번호 : <input type="text" name="mb_phone1" id="mb_phone1"> - <input type="text" name="mb_phone2" id="mb_phone2"> - <input type="text" name="mb_phone3" id="mb_phone3"><br />
SNS주소 : <input type="text" name="mb_sns" id="mb_sns"><br />
첨부파일 :
    셀카1
<div class="inner_file clearfix">
                <div class="btn">
                  <span class="btn btn-success fileinput-button">
                    <i class="glyphicon glyphicon-plus"></i>
                    <span><a href="#"><img src="images/popup/pre_img.jpg" alt=""/></a></span>
                    <!-- The file input field used as target for the file upload widget -->
                    <input id="fileupload" type="file" name="files[]" >
                  </span>
                  <!-- The global progress bar -->
                  <div id="progress" class="progress">
                    <div class="progress-bar progress-bar-success"></div>
                  </div>
                  <!-- <a href="#"><img src="images/popup/btn_select_file.png" alt=""/></a> -->
                </div>
              </div>
              <div class="pre_img" style="width:175px;height:109px">
                <!-- The container for the uploaded files -->
                <div id="files" class="files">
                  <img src="images/popup/pre_img.jpg" alt=""/>
                </div>
              </div>
<br />
    셀카2
<div class="inner_file clearfix">
                <div class="btn">
                  <span class="btn btn-success fileinput-button">
                    <i class="glyphicon glyphicon-plus"></i>
                    <span><a href="#"><img src="images/popup/pre_img.jpg" alt=""/></a></span>
                    <!-- The file input field used as target for the file upload widget -->
                    <input id="fileupload2" type="file" name="files[]" >
                  </span>
                  <!-- The global progress bar -->
                  <div id="progress" class="progress">
                    <div class="progress-bar progress-bar-success"></div>
                  </div>
                  <!-- <a href="#"><img src="images/popup/btn_select_file.png" alt=""/></a> -->
                </div>
              </div>
              <div class="pre_img" style="width:175px;height:109px">
                <!-- The container for the uploaded files -->
                <div id="files2" class="files">
                  <img src="images/popup/pre_img.jpg" alt=""/>
                </div>
              </div>
<br />
    타인이 찍어준 사진1
<div class="inner_file clearfix">
                <div class="btn">
                  <span class="btn btn-success fileinput-button">
                    <i class="glyphicon glyphicon-plus"></i>
                    <span><a href="#"><img src="images/popup/pre_img.jpg" alt=""/></a></span>
                    <!-- The file input field used as target for the file upload widget -->
                    <input id="fileupload3" type="file" name="files[]" >
                  </span>
                  <!-- The global progress bar -->
                  <div id="progress" class="progress">
                    <div class="progress-bar progress-bar-success"></div>
                  </div>
                  <!-- <a href="#"><img src="images/popup/btn_select_file.png" alt=""/></a> -->
                </div>
              </div>
              <div class="pre_img" style="width:175px;height:109px">
                <!-- The container for the uploaded files -->
                <div id="files3" class="files">
                  <img src="images/popup/pre_img.jpg" alt=""/>
                </div>
              </div>
<br />
    타인이 찍어준 사진2
<div class="inner_file clearfix">
                <div class="btn">
                  <span class="btn btn-success fileinput-button">
                    <i class="glyphicon glyphicon-plus"></i>
                    <span><a href="#"><img src="images/popup/pre_img.jpg" alt=""/></a></span>
                    <!-- The file input field used as target for the file upload widget -->
                    <input id="fileupload4" type="file" name="files[]" >
                  </span>
                  <!-- The global progress bar -->
                  <div id="progress" class="progress">
                    <div class="progress-bar progress-bar-success"></div>
                  </div>
                  <!-- <a href="#"><img src="images/popup/btn_select_file.png" alt=""/></a> -->
                </div>
              </div>
              <div class="pre_img" style="width:175px;height:109px">
                <!-- The container for the uploaded files -->
                <div id="files4" class="files">
                  <img src="images/popup/pre_img.jpg" alt=""/>
                </div>
              </div>
<br />
    타인이 찍어준 사진3
<div class="inner_file clearfix">
                <div class="btn">
                  <span class="btn btn-success fileinput-button">
                    <i class="glyphicon glyphicon-plus"></i>
                    <span><a href="#"><img src="images/popup/pre_img.jpg" alt=""/></a></span>
                    <!-- The file input field used as target for the file upload widget -->
                    <input id="fileupload5" type="file" name="files[]" >
                  </span>
                  <!-- The global progress bar -->
                  <div id="progress" class="progress">
                    <div class="progress-bar progress-bar-success"></div>
                  </div>
                  <!-- <a href="#"><img src="images/popup/btn_select_file.png" alt=""/></a> -->
                </div>
              </div>
              <div class="pre_img" style="width:175px;height:109px">
                <!-- The container for the uploaded files -->
                <div id="files5" class="files">
                  <img src="images/popup/pre_img.jpg" alt=""/>
                </div>
              </div>
<br />
대학내일 표지 모델 응모여부 : 네 <input type="radio" name="mb_magazine" value="Y">    아니요 <input type="radio" name="mb_magazine" value="N"><br />
대학교 : <input type="text" name="mb_university" id="mb_university"><br />
전공 : <input type="text" name="mb_major" id="mb_major"><br />
<input type="checkbox" name="mb_privacy_check" id="mb_privacy_check"> <a href="#" onclick="open_pop('privacy_agree_popup');return false;">개인정보 취급동의</a><br />
<input type="checkbox" name="mb_adver_check" id="mb_adver_check"> <a href="#" onclick="open_pop('adver_agree_popup');return false;">광고성 정보전송 동의</a><br />
<input type="checkbox" name="mb_meet_check" id="mb_meet_check"> <a href="#">면접 동의</a><br />
<a href="#" onclick="go_submit();return false;">지원하기</a>
</div>
<?
	include_once   "./popup_div.php";
?>

</body>
</html>
<script type="text/javascript">
var img_name1		= null;
var img_name2		= null;
var img_name3		= null;
var img_name4		= null;
var img_name5		= null;
var sel_radio			= null;
var mb_magazineYN = null;

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


</script>