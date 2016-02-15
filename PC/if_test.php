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
<div style="width:900px;height:800px">
  <a href="#" onclick="mnv_new_window();return false;">iframe테스트</a>
  <div id="iframe_div" style="width:300px;height:600px;display:none;">
    <iframe allowfullscreen="1" src="http://www.thefaceshop-event.com/?media=tfs_main" frameborder="0" style="width:860px;height:735px" id="lip_event"></iframe>
  </div>
  <div id="close_div" style="position:absolute;top:30px;left:550px;display:none;">
    <a href="#" onclick="mnv_close_event();return false;">닫기</a>
  </div>
</div>
<script type="text/javascript">
function mnv_new_window()
{
	$("#iframe_div").show();
	$("#close_div").show();
}

function mnv_close_event()
{
	$("#close_div").hide();
	$("#iframe_div").hide();
}

</script>
 </body>
</html>
