<?php
include('../connection/phpconnect.php');
$strSQL = "DELETE FROM `users` ";
$strSQL .="WHERE `username` = '".$_GET["username"]."' ";
$objQuery = mysqli_query($db, $strSQL);
if($objQuery)
{
	echo "<script type='text/javascript'>";
	echo "alert('Record Deleted!');";
	echo "window.location = '../form_show_users.php'; ";
	echo "</script>";
}
else
{
	echo "<script type='text/javascript'>";
	echo "alert('Error Delete [".$strSQL."]');";
	echo "window.location = '../form_show_users.php'; ";
	echo "</script>";
	
}
mysqli_close($db);
?>