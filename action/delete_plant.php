<?php
include('../connection/phpconnect.php');
$strSQL = "DELETE FROM `plant` ";
$strSQL .="WHERE `id` = '".$_GET["id"]."' ";
$objQuery = mysqli_query($db, $strSQL);
if($objQuery)
{
	echo "<script type='text/javascript'>";
	echo "alert('Record Deleted!');";
	echo "window.location = '../form_show_plant.php'; ";
	echo "</script>";
}
else
{
	echo "<script type='text/javascript'>";
	echo "alert('Error Delete [".$strSQL."]');";
	echo "window.location = '../form_show_plant.php'; ";
	echo "</script>";
	
}
mysqli_close($db);
?>