<?php
include("../connection/phpconnect.php");
$plant = $_REQUEST['plant'];
$id = $_REQUEST['id'];

    $sqlup = "UPDATE
        `plant`
        SET
		`plant` = '$plant'
        WHERE
        `id` = '$id'";
	$update = mysqli_query($db, $sqlup);
	
	if($update){
		echo "<script type='text/javascript'>";
		echo "alert('Update Succesfuly');";
		echo "window.location = '../form_show_plant.php'; ";
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