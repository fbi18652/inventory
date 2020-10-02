<?php
include('../connection/phpconnect.php');
$del = $_REQUEST['id_store'];
$strSQL = "DELETE
FROM
    `store`
WHERE
    `id_store` = $del";

$objQuery = mysqli_query($db, $strSQL);
if($objQuery)
{
	echo "<script type='text/javascript'>";
	echo "alert('Record Deleted!');";
	echo "window.location = '../form_show_store.php'; ";
	echo "</script>";
}
else
{
	echo "<script type='text/javascript'>";
	echo "alert('Error Delete [".$strSQL."]');";
	echo "window.location = '../form_show_store.php'; ";
	echo "</script>";
	
}
mysqli_close($db);
?>