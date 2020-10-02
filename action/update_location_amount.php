<?php
include("../connection/phpconnect.php");
$id_mat = $_REQUEST['id_mat'];
$id_store = $_REQUEST['id_store'];
$id_shelf = $_REQUEST['id_shelf'];
$amount = $_REQUEST['amount'];

$sqlup = "UPDATE
`location`
SET
`amount` = '$amount'
WHERE
`id_mat` = '$id_mat' AND `id_store` = '$id_store' AND `id_shelf` = '$id_shelf'";
$update = mysqli_query($db, $sqlup);
	
	if($update){
		echo "<script type='text/javascript'>";
		echo "alert('Update Succesfuly');";
		echo "window.location = '../form_show_location.php'; ";
		echo "</script>";
		}
		else{
		echo "<script type='text/javascript'>";
		echo "alert('Error');";
		echo "window.history.back()";
		echo "</script>";
	}
	mysqli_close($db);
?>