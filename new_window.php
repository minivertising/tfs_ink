<!doctype html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta name="Generator" content="EditPlus®">
  <meta name="Author" content="">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
  <title>Document</title>
      <script type="text/javascript" src="./js/jquery-1.11.2.min.js"></script>
 </head>
 <body>
  <a href="#" onclick="new_window();">아이프레임_테스트</a>
  <div id="iframe_div" style="width:300px;height:600px;display:none;">
    <iframe allowfullscreen="1" src="http://www.vdlcosmetics.kr/m/movie_upload_test.php" frameborder="0" style="width:300px;height:600px" ></iframe>
  </div>
 </body>
</html>
<script type="text/javascript">
function new_window()
{
	$("#iframe_div").show();
}
</script>