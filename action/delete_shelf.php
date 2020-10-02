<?php
include('../connection/phpconnect.php');
$del = $_REQUEST['id_shelf'];
$strSQL = "DELETE
FROM
    `shelf`
WHERE
    `id_shelf` = $del";

$objQuery = mysqli_query($db, $strSQL);
if($objQuery)
{
	echo "<script type='text/javascript'>";
	echo "alert('Record Deleted!');";
	echo "window.location = '../form_show_shelf.php'; ";
	echo "</script>";
}
else
{
	echo "<script type='text/javascript'>";
	echo "alert('Error Delete [".$strSQL."]');";
	echo "window.location = '../form_show_shelf.php'; ";
	echo "</script>";
	
}
mysqli_close($db);
?>