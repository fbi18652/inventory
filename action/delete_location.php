<?php
include('../connection/phpconnect.php');
$del = $_GET['num_lo'];
$strSQL = "DELETE FROM `location` WHERE `num_lo` = $del";
$objQuery = mysqli_query($db, $strSQL);
if($objQuery)
{
	echo "<script type='text/javascript'>";
	echo "alert('Record Deleted!');";
	echo "window.location = '../form_show_location.php'; ";
	echo "</script>";
}
else
{
	echo "<script type='text/javascript'>";
	echo "alert('Error Delete $strSQL');";
	echo "window.location = '../form_show_location.php'; ";
	echo "</script>";
	
}
mysqli_close($db);
?>