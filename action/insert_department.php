<?php
include("../connection/phpconnect.php");
$department = $_REQUEST['department'];
$call = "SELECT * FROM `department` WHERE `department` = $department;";
$result = mysqli_query($db, $call);
if($result->num_rows==0)
{
	$sql="INSERT INTO `department` 
	VALUES ('$department');";
	$insert = mysqli_query($db, $sql);
	//echo $sql;
	echo "<script type='text/javascript'>";
	echo "alert('เพิ่มข้อมูลสำเร็จ');";
	echo "window.location = '../form_show_department.php'; ";
	echo "</script>";
}else if($result->num_rows==1)
{
	echo "<script type='text/javascript'>";
	echo "alert('ไม่สามารถเพิ่มข้อมูลได้');";
	echo "window.location = '../form_show_department.php'; ";
	echo "</script>";
}
?>