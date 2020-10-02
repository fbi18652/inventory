<?php
include("../connection/phpconnect.php");
$id = $_REQUEST['id'];
$plant = $_REQUEST['plant'];
$call = "SELECT * FROM `plant` WHERE `id` = $id;";
$result = mysqli_query($db, $call);
if($result->num_rows==0)
{
	$sql="INSERT INTO `plant` 
	VALUES ('$id','$plant');";
	$insert = mysqli_query($db, $sql);
	//echo $sql;
	echo "<script type='text/javascript'>";
	echo "alert('เพิ่มข้อมูลสำเร็จ');";
	echo "window.location = '../form_show_plant.php'; ";
	echo "</script>";
}else if($result->num_rows==1)
{
	echo "<script type='text/javascript'>";
	echo "alert('ไม่สามารถเพิ่มข้อมูลได้');";
	echo "window.location = '../form_show_plant.php'; ";
	echo "</script>";
}
?>