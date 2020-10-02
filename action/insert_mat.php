<?php
include("../connection/phpconnect.php");
$id_mat = $_REQUEST['id_mat'];
$describtion_mat = $_REQUEST['describtion_mat'];
$type = $_REQUEST['type'];
$call = "SELECT * FROM `mat` WHERE `id_mat` = $id_mat;";
$result = mysqli_query($db, $call);
if($result->num_rows==0)
{
	$sql="INSERT INTO `mat` 
	VALUES ('$id_mat' ,'$describtion_mat' ,'$type');";
	$insert = mysqli_query($db, $sql);
	//echo $sql;
	echo "<script type='text/javascript'>";
	echo "alert('เพิ่มข้อมูลสำเร็จ');";
	echo "window.location = '../form_show_mat.php'; ";
	echo "</script>";
}else if($result->num_rows==1)
{
	echo "<script type='text/javascript'>";
	echo "alert('ไม่สามารถเพิ่มข้อมูลได้');";
	echo "window.location = '../form_show_mat.php'; ";
	echo "</script>";
}
?>