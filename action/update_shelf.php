<?php
include("../connection/phpconnect.php");
$id_shelf = $_REQUEST['id_shelf'];
$name = $_REQUEST['name'];
$id_store = $_REQUEST['id_store'];

    $sqlup = "UPDATE
        `shelf`
        SET
        `id_shelf` = '$id_shelf',
		`name` = '$name',
		`id_store` = '$id_store'
        WHERE
        `id_shelf` = '$id_shelf'";
	$update = mysqli_query($db, $sqlup);
	
	if($update){
		echo "<script type='text/javascript'>";
        echo "alert('Update Succesfuly, ";
        echo "Store ID : $id_shelf, ";
        echo "Store Name : $name, ";
        echo "Plant ID : $id_store');";
		echo "window.location = '../form_show_shelf.php'; ";
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