<?php
include("../connection/phpconnect.php");
$id_emp = $_REQUEST['id_emp'];
$name = $_REQUEST['name'];
$department = $_REQUEST['department'];
$position = $_REQUEST['position'];
$call = "SELECT * FROM `employee` WHERE `id_emp` = $id_emp;";
$result = mysqli_query($db, $call);
if($result->num_rows==0)
{
	$sql="INSERT INTO `employee`
	VALUES ('$id_emp' ,'$name' ,'$department' ,'$position');";
	$insert = mysqli_query($db, $sql);
	//echo $sql;
	echo "<script type='text/javascript'>";
	echo "alert('เพิ่มข้อมูลสำเร็จ');";
	echo "window.location = '../form_show_emp.php'; ";
	echo "</script>";
}else if($result->num_rows==1)
{
	echo "<script type='text/javascript'>";
	echo "alert('ไม่สามารถเพิ่มข้อมูลได้');";
	echo "window.location = '../form_show_emp.php'; ";
	echo "</script>";
}
?>