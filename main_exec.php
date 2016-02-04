<?php
include_once "config.php";

switch ($_REQUEST['exec'])
{
	case "insert_share_info" :
		$sns_media	= $_REQUEST['sns_media'];
		$sns_flag		= $_REQUEST['sns_flag'];

		$query 		= "INSERT INTO ".$_gl['share_info_table']."(sns_media, sns_ipaddr, sns_gubun, inner_media, sns_regdate) values('".$sns_media."','".$_SERVER['REMOTE_ADDR']."','".$gubun."','".$_SESSION['ss_media']."','".date("Y-m-d H:i:s")."')";
		$result 	= mysqli_query($my_db, $query);

		if ($result)
			$flag = "Y";
		else
			$flag = "N";

		echo $flag;

	break;

	case "insert_info" :
		$mb_name			= $_REQUEST['mb_name'];
		$mb_phone			= $_REQUEST['mb_phone'];
		$mb_sns				= $_REQUEST['mb_sns'];
		$mb_serial			= $_REQUEST['mb_serial'];
		$mb_photo1		= $_REQUEST['mb_photo1'];
		$mb_photo2		= $_REQUEST['mb_photo2'];
		$mb_photo3		= $_REQUEST['mb_photo3'];
		$mb_photo4		= $_REQUEST['mb_photo4'];
		$mb_photo5		= $_REQUEST['mb_photo5'];
		$mb_magazineYN	= $_REQUEST['mb_magazineYN'];
		$mb_university		= $_REQUEST['mb_university'];
		$mb_major			= $_REQUEST['mb_major'];
		$sel_radio			= $_REQUEST['sel_radio'];
		$media				= $_SESSION['ss_media'];

		$dupli_query 	= "SELECT * FROM ".$_gl['member_info_table']." WHERE mb_phone='".$mb_phone."'";
		$dupli_result 	= mysqli_query($my_db, $dupli_query);
		$dupli_cnt	= mysqli_num_rows($dupli_result);

		if ($dupli_cnt > 0)
		{
			$flag	= "D";
		}else{
			$query 	= "INSERT INTO ".$_gl['member_info_table']."(mb_ipaddr,mb_name,mb_phone,mb_sns,mb_photo1,mb_photo2,mb_photo3,mb_photo4,mb_photo5,mb_nominees,mb_magazineYN,mb_university,mb_major,mb_regdate,mb_serial,mb_gubun,mb_media) values('".$_SERVER['REMOTE_ADDR']."','".$mb_name."','".$mb_phone."','".$mb_sns."','".$mb_photo1."','".$mb_photo2."','".$mb_photo3."','".$mb_photo4."','".$mb_photo5."','".$sel_radio."','".$mb_magazineYN."','".$mb_university."','".$mb_major."','".date("Y-m-d H:i:s")."','".$mb_serial."','".$gubun."','".$media."')";
			$result 	= mysqli_query($my_db, $query);
			if ($result)
				$flag	= "Y";
			else
				$flag	= "N";
		}
		echo $query;
	break;

	case "use_coupon" :
		$mb_phone			= $_REQUEST['mb_phone'];

		$query 	= "UPDATE ".$_gl['member_info_table']." SET mb_use='Y', mb_usedate='".date("Y-m-d H:i:s")."' WHERE mb_phone='".$mb_phone."'";
		$result 	= mysqli_query($my_db, $query);

		if ($result)
			$flag	= "Y";
		else
			$flag	= "N";
		
		echo $flag;
	break;
}
?>