<?php
include("../connection/phpconnect.php");
$id_mat = $_REQUEST['id_mat'];
$describtion_mat = $_REQUEST['describtion_mat'];
$type = $_REQUEST['type'];

    $sqlup = "UPDATE
        `mat`
        SET
        `id_mat` = '$id_mat',
		`describtion_mat` = '$describtion_mat',
		`type` = '$type'
        WHERE
        `id_mat` = '$id_mat'";
	$update = mysqli_query($db, $sqlup);
	
	if($update){
		echo "<script type='text/javascript'>";
		echo "alert('Update Succesfuly');";
		echo "window.location = '../form_show_mat.php'; ";
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