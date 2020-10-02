<?php
include('../connection/phpconnect.php');
$strSQL = "DELETE FROM `mat` ";
$strSQL .="WHERE `id_mat` = '".$_GET["id_mat"]."' ";
$objQuery = mysqli_query($db, $strSQL);
if($objQuery)
{
	echo "<script type='text/javascript'>";
	echo "alert('Record Deleted!');";
	echo "window.location = '../form_show_mat.php'; ";
	echo "</script>";
}
else
{
	echo "<script type='text/javascript'>";
	echo "alert('Error Delete [".$strSQL."]');";
	echo "window.location = '../form_show_mat.php'; ";
	echo "</script>";
	
}
mysqli_close($db);
?>