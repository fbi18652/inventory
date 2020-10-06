<?php
date_default_timezone_set("Asia/Bangkok");
include("../connection/phpconnect.php");
error_reporting(E_ERROR | E_WARNING | E_PARSE);
$num_lo = $_REQUEST['num_lo'];
$id_shelf = $_REQUEST['id_shelf'];
$id_store = $_REQUEST['id_store'];
$time = date("ymdHis");
$no = "$id_store$time";
$id_mat = $_REQUEST['id_mat'];
$id_emp = $_REQUEST['id_emp'];
$action = $_REQUEST['action'];
$amount = $_REQUEST['amount'];
$date = date("Y-m-d");

$call="SELECT * FROM `process_log` WHERE `no` = $no;";
$result = mysqli_query($db, $call);
if($result->num_rows==0)
{
	if($action=='withdraw'){
		$amlo = "SELECT * FROM `location` WHERE `id_mat` = '$id_mat' AND `id_store` = '$id_store' AND `id_shelf` = '$id_shelf'";
		$reamlo = mysqli_query($db, $amlo);
		if($reamlo->num_rows==1){
			while($row=$reamlo->fetch_object()){
				$echo = $row->amount;
				$del = $echo - $amount;
				if($echo < $amount){
					echo "<script type='text/javascript'>";
					echo "alert('อุปกรณ์มีไม่เพียงพอ');";
					echo "window.history.back()";
					echo "</script>";
				}
				else{
					if($del == 0){
						$sqldel = "DELETE FROM `location` WHERE `num_lo` = '$num_lo'";
						$delete = mysqli_query($db, $sqldel);
					}
					else{
						$sqlup = "UPDATE
						`location`
						SET
						`amount` = `amount` - '$amount'
						WHERE
						`id_mat` = '$id_mat' AND `id_store` = '$id_store' AND `id_shelf` = '$id_shelf'";
						$ubdate = mysqli_query($db, $sqlup);
					}
					$sql="INSERT INTO `process_log` (`no`, `id_mat`, `id_emp`, `action`, `amount`, `date`)
					VALUES ('$no','$id_mat','$id_emp','$action','$amount','$date')";
					$insert = mysqli_query($db, $sql);
					echo "<script type='text/javascript'>";
					echo "alert('ทำรายการสำเร็จ');";
					echo "window.location = '../form_show_location.php'; ";
					echo "</script>";
					echo $amount,"<br>";
					echo $echo,"<br>";
					echo $del,"<br>";
					echo $zero;
				}
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
		$amlof = "SELECT * FROM `location_fail` WHERE `id_mat` = '$id_mat' AND `id_store` = '$id_store'";
		$reamlof = mysqli_query($db, $amlof);
		if($reamlof->num_rows==1){
			$sqlup = "UPDATE
			`location_fail`
			SET
			`amount` = `amount` + '$amount'
			WHERE
			`id_mat` = '$id_mat' AND `id_store` = '$id_store' AND `id_shelf` = '$id_shelf'";
			$update = mysqli_query($db, $sqlup);
		}
		if($reamlof->num_rows==0){
			$sqllof="INSERT INTO `location_fail` (`id_mat`, `id_store`, `id_shelf`, `amount`)
			VALUES ('$id_mat','$id_store','$id_shelf','$amount')";
			$insert1 = mysqli_query($db, $sqllof);
		}
		$sql="INSERT INTO `process_log` (`no`, `id_mat`, `id_emp`, `action`, `amount`, `date`)
		VALUES ('$no','$id_mat','$id_emp','$action','$amount','$date')";
		$insert = mysqli_query($db, $sql);
		//echo $sql;
		echo "<script type='text/javascript'>";
		echo "alert('ทำรายการสำเร็จ');";
		echo "window.location = '../form_show_location_fail.php'; ";
		echo "</script>";
	}

	if($action=='deposited'){
		$amlo = "SELECT * FROM `location` WHERE `id_mat` = '$id_mat' AND `id_store` = '$id_store' AND `id_shelf` = '$id_shelf'";
		$reamlo = mysqli_query($db, $amlo);
		if($reamlo->num_rows==1){
			$sqlup = "UPDATE
			`location`
			SET
			`amount` = `amount` + '$amount'
			WHERE
			`id_mat` = '$id_mat' AND `id_store` = '$id_store' AND `id_shelf` = '$id_shelf'";
			$update = mysqli_query($db, $sqlup);
		}
		if($reamlo->num_rows==0){
			$sqllo="INSERT INTO `location` (`id_mat`, `id_store`, `id_shelf`, `amount`)
			VALUES ('$id_mat','$id_store','$id_shelf','$amount')";
			$insert1 = mysqli_query($db, $sqllo);
		}
		$sql="INSERT INTO `process_log` (`no`, `id_mat`, `id_emp`, `action`, `amount`, `date`)
		VALUES ('$no','$id_mat','$id_emp','$action','$amount','$date')";
		$insert = mysqli_query($db, $sql);
		//echo $sql;
		echo "<script type='text/javascript'>";
		echo "alert('ทำรายการสำเร็จ');";
		echo "window.location = '../form_show_location.php'; ";
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