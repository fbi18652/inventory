<?php
include('../connection/phpconnect.php');
$strSQL = "DELETE FROM `employee` ";
$strSQL .="WHERE `id_emp` = '".$_GET["id_emp"]."' ";
$objQuery = mysqli_query($db, $strSQL);
if($objQuery)
{
	echo "<script type='text/javascript'>";
	echo "alert('Record Deleted!');";
	echo "window.location = '../form_show_emp.php'; ";
	echo "</script>";
}
else
{
	echo "<script type='text/javascript'>";
	echo "alert('Error Delete [".$strSQL."]');";
	echo "window.location = '../form_show_emp.php'; ";
	echo "</script>";
	
}
mysqli_close($db);
?>