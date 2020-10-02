<?php
include("../connection/phpconnect.php");
$id_store = $_REQUEST['id_store'];
$storename = $_REQUEST['storename'];
$id_plant = $_REQUEST['id_plant'];
$call = "SELECT * FROM `store` WHERE `id_store` = $id_store;";
$result = mysqli_query($db, $call);
if($result->num_rows==0)
{
	$sql="INSERT INTO `store` 
	VALUES ('$id_store' ,'$storename' ,'$id_plant');";
	$insert = mysqli_query($db, $sql);
	//echo $sql;
	echo "<script type='text/javascript'>";
	echo "alert('เพิ่มข้อมูลสำเร็จ');";
	echo "window.location = '../form_show_store.php'; ";
	echo "</script>";
}else if($result->num_rows==1)
{
	echo "<script type='text/javascript'>";
	echo "alert('ไม่สามารถเพิ่มข้อมูลได้');";
	echo "window.location = '../form_show_store.php'; ";
	echo "</script>";
}
?>