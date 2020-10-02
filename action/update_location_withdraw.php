<?php
date_default_timezone_set("Asia/Bangkok");
include("../connection/phpconnect.php");

$time = date("ymdHis");
$id_mat = $_REQUEST['id_mat'];
$id_store = $_REQUEST['id_store'];
$no = "$id_store$time";
$id_shelf = $_REQUEST['id_shelf'];
$id_employee = $_REQUEST['id_employee'];
$amount = $_REQUEST['amount'];
$date = date("Y-m-d H:i:s");

$call="SELECT * FROM `withdraw_return` WHERE `no` = $no;";
$result = mysqli_query($db, $call);

if($result->num_rows==0)
{
	$amlo = "SELECT * FROM `location` WHERE `id_mat` = '$id_mat' AND `id_store` = '$id_store' AND `id_shelf` = '$id_shelf'";
	$reamlo = mysqli_query($db, $amlo);
	if($reamlo->num_rows==1){
		$cc = "SELECT `amount` FROM `location` WHERE `id_mat` = '$id_mat' AND `id_store` = '$id_store' AND `id_shelf` = '$id_shelf'";
		$recc = mysqli_query($db, $cc);
		$ch = $recc - $amount;
		
			$sqlup = "UPDATE
			`location`
			SET
			`amount` = `amount` - '$amount'
			WHERE
			`id_mat` = '$id_mat' AND `id_store` = '$id_store' AND `id_shelf` = '$id_shelf'";
			$ubdate = mysqli_query($db, $sqlup);

			$sql="INSERT INTO `withdraw_return` (`no`, `id_mat`, `id_employee`, `action`, `amount`, `date`)
			VALUES ('$no','$id_mat','$id_employee','withdraw','$amount','$date')";
			$insert = mysqli_query($db, $sql);
			echo $ch;
			echo "<script type='text/javascript'>";
			echo "alert('ทำรายการสำเร็จ');";
			//echo "window.location = '../search.php?search=&submit='; ";
			echo "</script>";
		
	}
	if($reamlo->num_rows==0){
		echo "<script type='text/javascript'>";
		echo "alert('ไม่พบข้อมูล กรุณาทำรายการอีกครั้ง');";
		echo "window.history.back()";
		echo "</script>";
	}
}else
{
	echo "<script type='text/javascript'>";
	echo "alert('ไม่สามารถทำรายการได้');";
	echo "window.history.back()";
	echo "</script>";
}
?>