<?php
include("../connection/phpconnect.php");
$Username = $_REQUEST['Username'];
$Email = $_REQUEST['Email'];
$Password = $_REQUEST['Password'];
$call1="SELECT * FROM `users` WHERE `username` = '$Username';";
$call2="SELECT * FROM `users` WHERE `email` = '$Email';";
$call3="SELECT * FROM `users` WHERE `username` = '$Username' OR `email` = '$Email';";
$result1 = mysqli_query($db, $call1);
$result2 = mysqli_query($db, $call2);
$result3 = mysqli_query($db, $call3);
if($result3->num_rows==0)
{
	$sql="INSERT INTO 
	users VALUES ('$Username', 
	'$Email', 
	'$Password');";
	
	$insert = mysqli_query($db, $sql);
	echo $sql;
	echo "<script type='text/javascript'>";
	echo "alert('เพิ่มข้อมูลสำเร็จ');";
	echo "window.history.back()";
	echo "</script>";
}else if ($result1->num_rows==1)
{
	echo "<script type='text/javascript'>";
	echo "alert('Usersname ถูกใช้แล้ว');";
	echo "window.history.back()";
	echo "</script>";
}else if ($result2->num_rows==1)
{
	echo "<script type='text/javascript'>";
	echo "alert('Email ถูกใช้แล้ว');";
	echo "window.history.back()";
	echo "</script>";
}
?>