<?php
include("../connection/phpconnect.php");
$type = $_REQUEST['type'];
$type2 = $_REQUEST['type2'];

    $sqlup = "UPDATE
        `mattype`
        SET
		`type` = '$type'
        WHERE
        `type` = '$type2'";
	$update = mysqli_query($db, $sqlup);
	
	if($update){
		echo "<script type='text/javascript'>";
		echo "alert('Update Succesfuly');";
		echo "window.location = '../form_show_mattype.php'; ";
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