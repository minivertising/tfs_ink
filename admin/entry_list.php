<?php

	// 설정파일
	include_once "../config.php";

/*
	if (isset($_SESSION['ss_mb_id']) == false)
	{
		//header('Location: index.php'); 
		echo "<script>location.href='index.php'</script>"; 
		exit; 
	}
*/

	include "./head.php";

	if(isset($_REQUEST['search_type']) == false)
		$search_type = "";
	else
		$search_type = $_REQUEST['search_type'];

	if(isset($_REQUEST['search_txt']) == false)
		$search_txt	= "";
	else
		$search_txt	= $_REQUEST['search_txt'];

	if(isset($_REQUEST['sDate']) == false)
		$sDate = "";
	else
		$sDate = $_REQUEST['sDate'];
	
	if(isset($_REQUEST['eDate']) == false)
		$eDate = "";
	else
		$eDate = $_REQUEST['eDate'];

	
	if(isset($_REQUEST['pg']) == false)
		$pg = "1";
	else
		$pg = $_REQUEST['pg'];
	
	if (!$pg)
		$pg = "1";
	//if(isset($pg) == false) $pg = 1;	// $pg가 없으면 1로 생성
	$page_size = 10;	// 한 페이지에 나타날 개수
	$block_size = 10;	// 한 화면에 나타낼 페이지 번호 개수

	//if (isset($search_type) == false)
	//	$search_type = "search_by_name";
?>
<script type="text/javascript">
	$(function() {
		$( "#sDate" ).datepicker();
		$( "#eDate" ).datepicker();
	});

	function checkfrm()
	{
		if ($("#sDate").val() > $("#eDate").val())
		{
			alert("검색 시작일은 종료일보다 작아야 합니다.");
			return false;
		}
	}
</script>

<div id="page-wrapper">
  <div class="container-fluid">
  <!-- Page Heading -->
    <div class="row">
      <div class="col-lg-12">
        <h1 class="page-header">이벤트 참여자 목록</h1>
      </div>
    </div>
    <!-- /.row -->
    <div class="row">
      <div class="col-lg-12">
        <div class="table-responsive">
          <ol class="breadcrumb">
            <form name="frm_execute" method="POST" onsubmit="return checkfrm()">
              <input type="hidden" name="pg" value="<?=$pg?>">
              <select name="search_type">
                <option value="mb_name" <?php if($search_type == "mb_name"){?>selected<?php }?>>이름</option>
                <option value="mb_phone" <?php if($search_type == "mb_phone"){?>selected<?php }?>>전화번호</option>
              </select>
              <input type="text" name="search_txt" value="<?php echo $search_txt?>">
              <input type="text" id="sDate" name="sDate" value="<?=$sDate?>"> - <input type="text" id="eDate" name="eDate" value="<?=$eDate?>">
              <input type="submit" value="검색">
			  <li align="right";>
			  <?
					$member = "SELECT count(idx) FROM ".$_gl['member_info_table']." WHERE mb_name <> 'admin' ";
					$res3 = mysqli_query($my_db, $member);
					list($total_count)	= @mysqli_fetch_array($res3);
					echo  "전체 참여자수 : $total_count";
				?>
			</li>
            </form>
          </ol>
          <table id="entry_list" class="table table-hover">
            <thead>
              <tr>
                <th>순번</th>
                <th>이름</th>
                <th>전화번호</th>
                <th>사진1</th>
                <th>사진2</th>
                <th>사진3</th>
                <th>사진4</th>
                <th>사진5</th>
                <th>SNS주소</th>
                <th>선택한 상품</th>
                <th>유입매체</th>
                <th>유입구분</th>
                <th>참여일자</th>
                <th>대학내일 모델 선택여부</th>
                <th>대학교</th>
                <th>전공</th>
              </tr>
            </thead>
            <tbody>
<?php 
	$where = "";

	if ($sDate != "")
		$where	.= " AND mb_regdate >= '".$sDate."' AND mb_regdate <= '".$eDate." 23:59:59'";
	
	if ($search_txt != "")
	{
		$where	.= " AND ".$search_type." like '%".$search_txt."%'";
	}
	$buyer_count_query = "SELECT count(*) FROM ".$_gl['member_info_table']." WHERE mb_name <> 'admin' ".$where."";

	list($buyer_count) = @mysqli_fetch_array(mysqli_query($my_db, $buyer_count_query));
	$PAGE_CLASS = new Page($pg,$buyer_count,$page_size,$block_size);

	$BLOCK_LIST = $PAGE_CLASS->blockList();
	$PAGE_UNCOUNT = $PAGE_CLASS->page_uncount;
	$buyer_list_query = "SELECT * FROM ".$_gl['member_info_table']." WHERE mb_name <> 'admin' ".$where." Order by idx DESC LIMIT $PAGE_CLASS->page_start, $page_size";

	$res = mysqli_query($my_db, $buyer_list_query);

	while ($buyer_data = @mysqli_fetch_array($res))
	{
		$buyer_info[] = $buyer_data; 
	}

	foreach($buyer_info as $key => $val)
	{
		//$shop_query = "SELECT shop_name FROM ".$_gl['shop_info_table']." WHERE idx='".$buyer_info[$key]['mb_shop']."'";
		//$shop_res = mysqli_query($my_db, $shop_query);
		//$shop_name = mysqli_fetch_array(mysqli_query($my_db, $shop_query));
		$mb_photo1_arr	= explode(".",$buyer_info[$key]['mb_photo1']);
		if ($mb_photo1_arr[1])
			$mb_photo1	= $buyer_info[$key]['mb_photo1'];
		$mb_photo2_arr	= explode(".",$buyer_info[$key]['mb_photo2']);
		if ($mb_photo2_arr[1])
			$mb_photo2	= $buyer_info[$key]['mb_photo2'];
		$mb_photo3_arr	= explode(".",$buyer_info[$key]['mb_photo3']);
		if ($mb_photo3_arr[1])
			$mb_photo3	= $buyer_info[$key]['mb_photo3'];
		$mb_photo4_arr	= explode(".",$buyer_info[$key]['mb_photo4']);
		if ($mb_photo4_arr[1])
			$mb_photo4	= $buyer_info[$key]['mb_photo4'];
		$mb_photo5_arr	= explode(".",$buyer_info[$key]['mb_photo5']);
		if ($mb_photo5_arr[1])
			$mb_photo5	= $buyer_info[$key]['mb_photo5'];
?>
              <tr>
                <td><?php echo $PAGE_UNCOUNT--?></td>	<!-- No. 하나씩 감소 -->
                <td><?php echo $buyer_info[$key]['mb_name']?></td>
                <td><?php echo $buyer_info[$key]['mb_phone']?></td>
                <td>
<?
	if ($mb_photo1)
	{
?>
				  <a href="../files/<?=$buyer_info[$key]['mb_serial']?>/<?php echo $buyer_info[$key]['mb_photo1']?>" target="_blank"><img src="../files/<?=$buyer_info[$key]['mb_serial']?>/thumbnail/<?php echo $buyer_info[$key]['mb_photo1']?>"></a>
<?
	}
?>
				</td>
                <td>
<?
	if ($mb_photo2)
	{
?>
				  <a href="../files/<?=$buyer_info[$key]['mb_serial']?>/<?php echo $buyer_info[$key]['mb_photo2']?>" target="_blank"><img src="../files/<?=$buyer_info[$key]['mb_serial']?>/thumbnail/<?php echo $buyer_info[$key]['mb_photo2']?>"></a>
<?
	}
?>
				</td>
                <td>
<?
	if ($mb_photo3)
	{
?>
				  <a href="../files/<?=$buyer_info[$key]['mb_serial']?>/<?php echo $buyer_info[$key]['mb_photo3']?>" target="_blank"><img src="../files/<?=$buyer_info[$key]['mb_serial']?>/thumbnail/<?php echo $buyer_info[$key]['mb_photo3']?>"></a>
<?
	}
?>
				</td>
                <td>
<?
	if ($mb_photo4)
	{
?>
				  <a href="../files/<?=$buyer_info[$key]['mb_serial']?>/<?php echo $buyer_info[$key]['mb_photo4']?>" target="_blank"><img src="../files/<?=$buyer_info[$key]['mb_serial']?>/thumbnail/<?php echo $buyer_info[$key]['mb_photo4']?>"></a>
<?
	}
?>
				</td>
                <td>
<?
	if ($mb_photo5)
	{
?>
				  <a href="../files/<?=$buyer_info[$key]['mb_serial']?>/<?php echo $buyer_info[$key]['mb_photo5']?>" target="_blank"><img src="../files/<?=$buyer_info[$key]['mb_serial']?>/thumbnail/<?php echo $buyer_info[$key]['mb_photo5']?>"></a>
<?
	}
?>
				</td>
                <td><?php echo $buyer_info[$key]['mb_sns']?></td>
                <td><?php echo $buyer_info[$key]['mb_nominees']?></td>
                <td><?php echo $buyer_info[$key]['mb_media']?></td>
                <td><?php echo $buyer_info[$key]['mb_gubun']?></td>
                <td><?php echo $buyer_info[$key]['mb_regdate']?></td>
                <td><?php echo $buyer_info[$key]['mb_magazineYN']?></td>
                <td><?php echo $buyer_info[$key]['mb_university']?></td>
                <td><?php echo $buyer_info[$key]['mb_major']?></td>
              </tr>
<?php 
	}
?>

              <tr><td colspan="10"><div class="pageing"><?php echo $BLOCK_LIST?></div></td></tr>
            </tbody>
          </table>
        </div>
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
  </div>
  <!-- /#page-wrapper -->
</div>
<!-- /#wrapper -->
</body>

</html>



<script type="text/javascript">
 
function pageRun(num)
{
	f = document.frm_execute;
	f.pg.value = num;
	f.submit();
}

$(document).ready(function(){
	$("#page-wrapper").width($(window).width()+225);
});

</script>