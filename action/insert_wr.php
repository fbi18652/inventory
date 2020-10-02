<?php
date_default_timezone_set("Asia/Bangkok");
include("../connection/phpconnect.php");
$id_shelf = $_REQUEST['id_shelf'];
$id_store = $_REQUEST['id_store'];
$time = date("ymdHis");

$no = "$id_store$time";
$id_mat = $_REQUEST['id_mat'];
$id_employee = $_REQUEST['id_employee'];
$action = $_REQUEST['action'];
$amount = $_REQUEST['amount'];
$date = date("Y-m-d H:i:s");

$call="SELECT * FROM `withdraw_return` WHERE `no` = $no;";
$result = mysqli_query($db, $call);
if($result->num_rows==0)
{
	$amlo = "SELECT * FROM `location` WHERE `id_mat` = '$id_mat' AND `id_store` = '$id_store' AND `id_shelf` = '$id_shelf'";
	$reamlo = mysqli_query($db, $amlo);
	if($action=='withdraw'){
		if($reamlo->num_rows==1){
			$check = `amount` - $amount;
			if($check > 0){
				$sqlup = "UPDATE
				`location`
				SET
				`amount` = `amount` - '$amount'
				WHERE
				`id_mat` = '$id_mat' AND `id_store` = '$id_store' AND `id_shelf` = '$id_shelf'";
				$ubdate = mysqli_query($db, $sqlup);

				$sql="INSERT INTO `withdraw_return` (`no`, `id_mat`, `id_employee`, `action`, `amount`, `date`)
				VALUES ('$no','$id_mat','$id_employee','$action','$amount','$date')";
				$insert = mysqli_query($db, $sql);
				//echo $sql;
				echo "<script type='text/javascript'>";
				echo "alert('ทำรายการสำเร็จ');";
				echo "window.location = '../form_wr.php'; ";
				echo "</script>";
			}
			else
			{
				echo "<script type='text/javascript'>";
				echo "alert('อุปกรณ์มีไม่เพียงพอ กรุณาระบุจำนวนอีกครั้ง');";
				echo "window.history.back()";
				echo "</script>";
			}
		}
		if($reamlo->num_rows==0){
			echo "<script type='text/javascript'>";
			echo "alert('ไม่พบข้อมูล กรุณาทำรายการอีกครั้ง');";
			echo "window.history.back()";
			echo "</script>";
		}
	}
	if($action=='return'){
		$sql="INSERT INTO `withdraw_return` (`no`, `id_mat`, `id_employee`, `action`, `amount`, `date`)
		VALUES ('$no','$id_mat','$id_employee','$action','$amount','$date')";
		$insert = mysqli_query($db, $sql);
		//echo $sql;
		echo "<script type='text/javascript'>";
		echo "alert('ทำรายการสำเร็จ');";
		echo "window.location = '../form_wr.php'; ";
		echo "</script>";
	}
	if($action=='deposited'){
		if($reamlo->num_rows==1){
			$sqlup = "UPDATE
			`location`
			SET
			`amount` = `amount` + '$amount'
			WHERE
			`id_mat` = '$id_mat' AND `id_store` = '$id_store' AND `id_shelf` = '$id_shelf'";
			$ubdate = mysqli_query($db, $sqlup);

			$sql="INSERT INTO `withdraw_return` (`no`, `id_mat`, `id_employee`, `action`, `amount`, `date`)
			VALUES ('$no','$id_mat','$id_employee','$action','$amount','$date')";
			$insert = mysqli_query($db, $sql);
			//echo $sql;
			echo "<script type='text/javascript'>";
			echo "alert('ทำรายการสำเร็จ');";
			echo "window.location = '../form_wr.php'; ";
			echo "</script>";
		}
		if($reamlo->num_rows==0){
			$sqllo="INSERT INTO `location` (`num_lo`, `id_mat`, `id_store`, `id_shelf`, `amount`)
			VALUES ('$num_lo','$id_mat','$id_store','$id_shelf','$amount')";
			$insert1 = mysqli_query($db, $sqllo);

			$sql="INSERT INTO `withdraw_return` (`no`, `id_mat`, `id_employee`, `action`, `amount`, `date`)
			VALUES ('$no','$id_mat','$id_employee','$action','$amount','$date')";
			$insert = mysqli_query($db, $sql);
			//echo $sql;
			echo "<script type='text/javascript'>";
			echo "alert('ทำรายการสำเร็จ');";
			echo "window.location = '../form_wr.php'; ";
			echo "</script>";
		}
	}
}else
{
	echo "<script type='text/javascript'>";
	echo "alert('ไม่สามารถทำรายการได้');";
	echo "window.history.back()";
	echo "</script>";
}
?>