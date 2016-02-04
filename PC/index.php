<?
	include_once   "./header.php";
	$serial	= BC_getSerial();

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
<input type="checkbox" name="mb_check" id="mb_check"> <a href="#">개인정보 취급동의/광고 동의</a><br />
<input type="checkbox" name="mb_meet_check" id="mb_meet_check"> <a href="#">면접 동의</a><br />
<a href="#" onclick="go_submit();return false;">지원하기</a>
</div>
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
function go_submit()
{
	var mb_name				= $("#mb_name").val();
	var mb_phone1				= $("#mb_phone1").val();
	var mb_phone2				= $("#mb_phone2").val();
	var mb_phone3				= $("#mb_phone3").val();
	var mb_phone				= mb_phone1 + mb_phone2 + mb_phone3;
	var mb_sns					= $("#mb_sns").val();
	var mb_photo1				= img_name1;
	var mb_photo2				= img_name2;
	var mb_photo3				= img_name3;
	var mb_photo4				= img_name4;
	var mb_photo5				= img_name5;
	mb_magazineYN		= $(':radio[name="mb_magazine"]:checked').val();
	var mb_university			= $("#mb_university").val();
	var mb_major				= $("#mb_major").val();

	if (mb_name == "")
	{
		alert('이름을 입력해 주세요.');
		$("#mb_name").focus();
		//chk_ins = 0;
		return false;
	}

	if (mb_phone1 == "")
	{
		alert('전화번호를 입력해주세요.');
		$("#mb_phone1").focus();
		//chk_ins = 0;
		return false;
	}

	if (mb_phone2 == "")
	{
		alert('전화번호를 입력해주세요.');
		$("#mb_phone2").focus();
		//chk_ins = 0;
		return false;
	}

	if (mb_phone3 == "")
	{
		alert('전화번호를 입력해주세요.');
		$("#mb_phone3").focus();
		//chk_ins = 0;
		return false;
	}

	if (mb_sns == "")
	{
		alert('SNS 주소를 입력해 주세요.');
		$("#mb_sns").focus();
		//chk_ins = 0;
		return false;
	}

	if (mb_sns == "")
	{
		alert('SNS 주소를 입력해 주세요.');
		$("#mb_sns").focus();
		//chk_ins = 0;
		return false;
	}

	if (mb_photo1 === null && mb_photo2 === null && mb_photo3 === null && mb_photo4 === null && mb_photo5 === null )
	{
		alert('사진을 1장 이상 첨부해 주세요.');
		//chk_ins = 0;
		return false;
	}

	if (mb_magazineYN === undefined)
	{
		alert('대학내일 표지 모델 응모 여부를 선택해 주세요.');
		//chk_ins = 0;
		return false;
	}

	if (mb_magazineYN == "Y" && mb_university == "")
	{
		alert('대학교를 선택해 주세요.');
		$("#mb_university").focus();
		//chk_ins = 0;
		return false;
	}

	if (mb_magazineYN == "Y" && mb_major == "")
	{
		alert('전공을 선택해 주세요.');
		$("#mb_major").focus();
		//chk_ins = 0;
		return false;
	}

/*
	if (chk_mb_flag == 0)
	{
		alert("개인정보 취급 동의/광고동의를 안 하셨습니다");
		//chk_ins = 0;
		return false;
	}
*/
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
			"mb_magazineYN"		: mb_magazineYN,
			"mb_university"			: mb_university,
			"mb_major"				: mb_major,
			"sel_radio"				: sel_radio,
			"mb_serial"				: "<?=$_SESSION['ss_serial']?>"
		},
		url: "../main_exec.php",
		success: function(response){
			console.log(response);
		}
	});
}

$(function () {
    'use strict';
    // Change this to the location of your server-side upload handler:
    var url = 'file_upload.php';
    $('#fileupload').fileupload({
        url: url,
        dataType: 'json',
        autoUpload: false,
        acceptFileTypes: /(\.|\/)(gif|jpe?g|png)$/i,
        maxFileSize: 99900000,
        // Enable image resizing, except for Android and Opera,
        // which actually support image resizing, but fail to
        // send Blob objects via XHR requests:
        disableImageResize: /Android(?!.*Chrome)|Opera/
            .test(window.navigator.userAgent),
        previewMaxWidth: 100,
        previewMaxHeight: 100,
        previewCrop: false
    }).on('fileuploadadd', function (e, data) {
		// 파일 삭제
		//del_fileview();
		$("#files").html("");
        data.context = $('<div/>').appendTo('#files');
        $.each(data.files, function (index, file) {
			console.log(file);
			img_name1 = file.name;
            var node = $('<p/>');
                   // .append($('<span/>').text(file.name));
			  //$("#image_up_name").val(file.name);
            if (!index) {
                //node
                  //  .append('<br>')
                    //.append(uploadButton.clone(true).data(data));
				//uploadButton.clone(true).data(data);
				data.submit();
            }

            node.appendTo(data.context);
        });
    }).on('fileuploadprocessalways', function (e, data) {
        var index = data.index,
            file = data.files[index],
            node = $(data.context.children()[index]);
        if (file.preview) {
            node
                .prepend('<br>')
                .prepend(file.preview);
        }
        if (file.error) {
            node
                .append('<br>')
                .append($('<span class="text-danger"/>').text(file.error));
        }
        if (index + 1 === data.files.length) {
            data.context.find('button')
                .text('Upload')
                .prop('disabled', !!data.files.error);
        }
    }).on('fileuploadprogressall', function (e, data) {
        var progress = parseInt(data.loaded / data.total * 100, 10);
        $('#progress .progress-bar').css(
            'width',
            progress + '%'
        );
		//$(".loading").show();
		//$("html body").css("overflow","hidden");
		//Timer();
    }).on('fileuploaddone', function (e, data) {
        $.each(data.result.files, function (index, file) {
            if (file.url) {
                var link = $('<a>')
                    .attr('target', '_blank')
                    .prop('href', file.url);
                $(data.context.children()[index])
                    .wrap(link);
            } else if (file.error) {
                var error = $('<span class="text-danger"/>').text(file.error);
                $(data.context.children()[index])
                    .append('<br>')
                    .append(error);
            }
        });
    }).prop('disabled', !$.support.fileInput)
        .parent().addClass($.support.fileInput ? undefined : 'disabled');
});

$(function () {
    'use strict';
    // Change this to the location of your server-side upload handler:
    var url = 'file_upload2.php';
    $('#fileupload2').fileupload({
        url: url,
        dataType: 'json',
        autoUpload: false,
        acceptFileTypes: /(\.|\/)(gif|jpe?g|png)$/i,
        maxFileSize: 99900000,
        // Enable image resizing, except for Android and Opera,
        // which actually support image resizing, but fail to
        // send Blob objects via XHR requests:
        disableImageResize: /Android(?!.*Chrome)|Opera/
            .test(window.navigator.userAgent),
        previewMaxWidth: 100,
        previewMaxHeight: 100,
        previewCrop: false
    }).on('fileuploadadd', function (e, data) {
		// 파일 삭제
		//del_fileview();
		$("#files2").html("");
        data.context = $('<div/>').appendTo('#files2');
        $.each(data.files, function (index, file) {
			img_name2 = file.name;
            var node = $('<p/>');
                   // .append($('<span/>').text(file.name));
			  //$("#image_up_name").val(file.name);
            if (!index) {
                //node
                  //  .append('<br>')
                    //.append(uploadButton.clone(true).data(data));
				//uploadButton.clone(true).data(data);
				data.submit();
            }

            node.appendTo(data.context);
        });
    }).on('fileuploadprocessalways', function (e, data) {
        var index = data.index,
            file = data.files[index],
            node = $(data.context.children()[index]);
        if (file.preview) {
            node
                .prepend('<br>')
                .prepend(file.preview);
        }
        if (file.error) {
            node
                .append('<br>')
                .append($('<span class="text-danger"/>').text(file.error));
        }
        if (index + 1 === data.files.length) {
            data.context.find('button')
                .text('Upload')
                .prop('disabled', !!data.files.error);
        }
    }).on('fileuploadprogressall', function (e, data) {
        var progress = parseInt(data.loaded / data.total * 100, 10);
        $('#progress .progress-bar').css(
            'width',
            progress + '%'
        );
		//$(".loading").show();
		//$("html body").css("overflow","hidden");
		//Timer();
    }).on('fileuploaddone', function (e, data) {
        $.each(data.result.files, function (index, file) {
            if (file.url) {
                var link = $('<a>')
                    .attr('target', '_blank')
                    .prop('href', file.url);
                $(data.context.children()[index])
                    .wrap(link);
            } else if (file.error) {
                var error = $('<span class="text-danger"/>').text(file.error);
                $(data.context.children()[index])
                    .append('<br>')
                    .append(error);
            }
        });
    }).prop('disabled', !$.support.fileInput)
        .parent().addClass($.support.fileInput ? undefined : 'disabled');
});

$(function () {
    'use strict';
    // Change this to the location of your server-side upload handler:
    var url = 'file_upload3.php';
    $('#fileupload3').fileupload({
        url: url,
        dataType: 'json',
        autoUpload: false,
        acceptFileTypes: /(\.|\/)(gif|jpe?g|png)$/i,
        maxFileSize: 99900000,
        // Enable image resizing, except for Android and Opera,
        // which actually support image resizing, but fail to
        // send Blob objects via XHR requests:
        disableImageResize: /Android(?!.*Chrome)|Opera/
            .test(window.navigator.userAgent),
        previewMaxWidth: 100,
        previewMaxHeight: 100,
        previewCrop: false
    }).on('fileuploadadd', function (e, data) {
		// 파일 삭제
		//del_fileview();
		$("#files3").html("");
        data.context = $('<div/>').appendTo('#files3');
        $.each(data.files, function (index, file) {
			img_name3 = file.name;
            var node = $('<p/>');
                   // .append($('<span/>').text(file.name));
			  //$("#image_up_name").val(file.name);
            if (!index) {
                //node
                  //  .append('<br>')
                    //.append(uploadButton.clone(true).data(data));
				//uploadButton.clone(true).data(data);
				data.submit();
            }

            node.appendTo(data.context);
        });
    }).on('fileuploadprocessalways', function (e, data) {
        var index = data.index,
            file = data.files[index],
            node = $(data.context.children()[index]);
        if (file.preview) {
            node
                .prepend('<br>')
                .prepend(file.preview);
        }
        if (file.error) {
            node
                .append('<br>')
                .append($('<span class="text-danger"/>').text(file.error));
        }
        if (index + 1 === data.files.length) {
            data.context.find('button')
                .text('Upload')
                .prop('disabled', !!data.files.error);
        }
    }).on('fileuploadprogressall', function (e, data) {
        var progress = parseInt(data.loaded / data.total * 100, 10);
        $('#progress .progress-bar').css(
            'width',
            progress + '%'
        );
		//$(".loading").show();
		//$("html body").css("overflow","hidden");
		//Timer();
    }).on('fileuploaddone', function (e, data) {
        $.each(data.result.files, function (index, file) {
            if (file.url) {
                var link = $('<a>')
                    .attr('target', '_blank')
                    .prop('href', file.url);
                $(data.context.children()[index])
                    .wrap(link);
            } else if (file.error) {
                var error = $('<span class="text-danger"/>').text(file.error);
                $(data.context.children()[index])
                    .append('<br>')
                    .append(error);
            }
        });
    }).prop('disabled', !$.support.fileInput)
        .parent().addClass($.support.fileInput ? undefined : 'disabled');
});
$(function () {
    'use strict';
    // Change this to the location of your server-side upload handler:
    var url = 'file_upload4.php';
    $('#fileupload4').fileupload({
        url: url,
        dataType: 'json',
        autoUpload: false,
        acceptFileTypes: /(\.|\/)(gif|jpe?g|png)$/i,
        maxFileSize: 99900000,
        // Enable image resizing, except for Android and Opera,
        // which actually support image resizing, but fail to
        // send Blob objects via XHR requests:
        disableImageResize: /Android(?!.*Chrome)|Opera/
            .test(window.navigator.userAgent),
        previewMaxWidth: 100,
        previewMaxHeight: 100,
        previewCrop: false
    }).on('fileuploadadd', function (e, data) {
		// 파일 삭제
		//del_fileview();
		$("#files4").html("");
        data.context = $('<div/>').appendTo('#files4');
        $.each(data.files, function (index, file) {
			img_name4 = file.name;
            var node = $('<p/>');
                   // .append($('<span/>').text(file.name));
			  //$("#image_up_name").val(file.name);
            if (!index) {
                //node
                  //  .append('<br>')
                    //.append(uploadButton.clone(true).data(data));
				//uploadButton.clone(true).data(data);
				data.submit();
            }

            node.appendTo(data.context);
        });
    }).on('fileuploadprocessalways', function (e, data) {
        var index = data.index,
            file = data.files[index],
            node = $(data.context.children()[index]);
        if (file.preview) {
            node
                .prepend('<br>')
                .prepend(file.preview);
        }
        if (file.error) {
            node
                .append('<br>')
                .append($('<span class="text-danger"/>').text(file.error));
        }
        if (index + 1 === data.files.length) {
            data.context.find('button')
                .text('Upload')
                .prop('disabled', !!data.files.error);
        }
    }).on('fileuploadprogressall', function (e, data) {
        var progress = parseInt(data.loaded / data.total * 100, 10);
        $('#progress .progress-bar').css(
            'width',
            progress + '%'
        );
		//$(".loading").show();
		//$("html body").css("overflow","hidden");
		//Timer();
    }).on('fileuploaddone', function (e, data) {
        $.each(data.result.files, function (index, file) {
            if (file.url) {
                var link = $('<a>')
                    .attr('target', '_blank')
                    .prop('href', file.url);
                $(data.context.children()[index])
                    .wrap(link);
            } else if (file.error) {
                var error = $('<span class="text-danger"/>').text(file.error);
                $(data.context.children()[index])
                    .append('<br>')
                    .append(error);
            }
        });
    }).prop('disabled', !$.support.fileInput)
        .parent().addClass($.support.fileInput ? undefined : 'disabled');
});
$(function () {
    'use strict';
    // Change this to the location of your server-side upload handler:
    var url = 'file_upload5.php';
    $('#fileupload5').fileupload({
        url: url,
        dataType: 'json',
        autoUpload: false,
        acceptFileTypes: /(\.|\/)(gif|jpe?g|png)$/i,
        maxFileSize: 99900000,
        // Enable image resizing, except for Android and Opera,
        // which actually support image resizing, but fail to
        // send Blob objects via XHR requests:
        disableImageResize: /Android(?!.*Chrome)|Opera/
            .test(window.navigator.userAgent),
        previewMaxWidth: 100,
        previewMaxHeight: 100,
        previewCrop: false
    }).on('fileuploadadd', function (e, data) {
		// 파일 삭제
		//del_fileview();
		$("#files5").html("");
        data.context = $('<div/>').appendTo('#files5');
        $.each(data.files, function (index, file) {
			img_name5 = file.name;
            var node = $('<p/>');
                   // .append($('<span/>').text(file.name));
			  //$("#image_up_name").val(file.name);
            if (!index) {
                //node
                  //  .append('<br>')
                    //.append(uploadButton.clone(true).data(data));
				//uploadButton.clone(true).data(data);
				data.submit();
            }

            node.appendTo(data.context);
        });
    }).on('fileuploadprocessalways', function (e, data) {
        var index = data.index,
            file = data.files[index],
            node = $(data.context.children()[index]);
        if (file.preview) {
            node
                .prepend('<br>')
                .prepend(file.preview);
        }
        if (file.error) {
            node
                .append('<br>')
                .append($('<span class="text-danger"/>').text(file.error));
        }
        if (index + 1 === data.files.length) {
            data.context.find('button')
                .text('Upload')
                .prop('disabled', !!data.files.error);
        }
    }).on('fileuploadprogressall', function (e, data) {
        var progress = parseInt(data.loaded / data.total * 100, 10);
        $('#progress .progress-bar').css(
            'width',
            progress + '%'
        );
		//$(".loading").show();
		//$("html body").css("overflow","hidden");
		//Timer();
    }).on('fileuploaddone', function (e, data) {
        $.each(data.result.files, function (index, file) {
            if (file.url) {
                var link = $('<a>')
                    .attr('target', '_blank')
                    .prop('href', file.url);
                $(data.context.children()[index])
                    .wrap(link);
            } else if (file.error) {
                var error = $('<span class="text-danger"/>').text(file.error);
                $(data.context.children()[index])
                    .append('<br>')
                    .append(error);
            }
        });
    }).prop('disabled', !$.support.fileInput)
        .parent().addClass($.support.fileInput ? undefined : 'disabled');
});

function apply_member()
{
	sel_radio 		= $(':radio[name="ink_rip"]:checked').val();

	if (sel_radio === undefined)
	{
		alert('모델에 지원하실 잉크 젤스특 상품을 선택해 주세요.');
		return false;
	}

	$("#rip_area").hide();
	$("#input_area").show();
}

</script>