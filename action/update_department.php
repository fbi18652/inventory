<?php
include("../connection/phpconnect.php");
$department = $_REQUEST['department'];
$department2 = $_REQUEST['department2'];

    $sqlup = "UPDATE
        `department`
        SET
		`department` = '$department'
        WHERE
        `department` = '$department2'";
	$update = mysqli_query($db, $sqlup);
	
	if($update){
		echo "<script type='text/javascript'>";
		echo "alert('Update Succesfuly');";
		echo "window.location = '../form_show_department.php'; ";
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