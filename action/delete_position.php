<?php
include('../connection/phpconnect.php');
$strSQL = "DELETE FROM `position` ";
$strSQL .="WHERE `position` = '".$_GET["position"]."' ";
$objQuery = mysqli_query($db, $strSQL);
if($objQuery)
{
	echo "<script type='text/javascript'>";
	echo "alert('Record Deleted!');";
	echo "window.location = '../form_show_position.php'; ";
	echo "</script>";
}
else
{
	echo "<script type='text/javascript'>";
	echo "alert('Error Delete [".$strSQL."]');";
	echo "window.location = '../form_show_position.php'; ";
	echo "</script>";
	
}
mysqli_close($db);
?>