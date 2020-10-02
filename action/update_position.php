<?php
include("../connection/phpconnect.php");
$position = $_REQUEST['position'];
$position2 = $_REQUEST['position2'];

    $sqlup = "UPDATE
        `position`
        SET
		`position` = '$position'
        WHERE
        `position` = '$position2'";
	$update = mysqli_query($db, $sqlup);
	
	if($update){
		echo "<script type='text/javascript'>";
		echo "alert('Update Succesfuly');";
		echo "window.location = '../form_show_position.php'; ";
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