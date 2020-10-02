<?php
include("../connection/phpconnect.php");
$id_store = $_REQUEST['id_store'];
$storename = $_REQUEST['storename'];
$id_plant = $_REQUEST['id_plant'];

    $sqlup = "UPDATE
        `store`
        SET
        `id_store` = '$id_store',
		`storename` = '$storename',
		`id_plant` = '$id_plant'
        WHERE
        `id_store` = '$id_store'";
	$update = mysqli_query($db, $sqlup);
	
	if($update){
		echo "<script type='text/javascript'>";
        echo "alert('Update Succesfuly, ";
        echo "Store ID : $id_store, ";
        echo "Store Name : $storename, ";
        echo "Plant ID : $id_plant');";
		echo "window.location = '../form_show_store.php'; ";
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