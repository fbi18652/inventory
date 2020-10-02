<?php
include("../connection/phpconnect.php");
$id_shelf = $_REQUEST['id_shelf'];
$name = $_REQUEST['name'];
$id_store = $_REQUEST['id_store'];
$call = "SELECT * FROM `shelf` WHERE `id_shelf` = $id_shelf;";
$result = mysqli_query($db, $call);
if($result->num_rows==0)
{
	$sql="INSERT INTO `shelf` 
	VALUES ('$id_shelf' ,'$name' ,'$id_store');";
	$insert = mysqli_query($db, $sql);
	//echo $sql;
	echo "<script type='text/javascript'>";
	echo "alert('เพิ่มข้อมูลสำเร็จ');";
	echo "window.location = '../form_show_shelf.php'; ";
	echo "</script>";
}else if($result->num_rows==1)
{
	echo "<script type='text/javascript'>";
	echo "alert('ไม่สามารถเพิ่มข้อมูลได้');";
	echo "window.location = '../form_show_shelf.php'; ";
	echo "</script>";
}
?>