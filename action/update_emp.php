<?php
include("../connection/phpconnect.php");
$id_emp = $_REQUEST['id_emp'];
$name = $_REQUEST['name'];
$department = $_REQUEST['department'];
$position = $_REQUEST['position'];

    $sqlup = "UPDATE
        `employee`
        SET
        `id_emp` = '$id_emp',
		`name` = '$name',
		`department` = '$department',
		`position` = '$position'
        WHERE
        `id_emp` = '$id_emp'";
	$update = mysqli_query($db, $sqlup);
	
	if($update){
		echo "<script type='text/javascript'>";
		echo "alert('Update Succesfuly');";
		echo "window.location = '../form_show_emp.php'; ";
		echo "</script>";
		}
		else{
		echo "<script type='text/javascript'>";
		echo "alert('Error');";
		echo "window.history.back()";
		echo "</script>";
	}
	mysqli_close($db);
?>