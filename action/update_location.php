<meta charset="UTF-8">
<?php
include('../connection/phpconnect.php');
    $num_lo = $_REQUEST["num_lo"];
    $id_mat = $_REQUEST["id_mat"];
	$id_store = $_REQUEST["id_store"];
	$id_shelf = $_REQUEST["id_shelf"];
	$amount = $_REQUEST["amount"];

	$sql = "UPDATE `location` SET  
			num_lo='$num_lo' ,
			id_mat='$id_mat' ,
			id_store='$id_store' ,
			id_shelf='$id_shelf' ,
            amount='$amount'
			WHERE num_lo='$num_lo' ";

$result = mysqli_query($db, $sql) or die ("Error in query: $sql " . mysqli_error());
mysqli_close($db);

	if($result){
	echo "<script type='text/javascript'>";
	echo "alert('Update Succesfuly');";
	echo "window.location = '../search.php?search=&submit='; ";
	echo "</script>";
	}
	else{
	echo "<script type='text/javascript'>";
	echo "alert('Error back to Update again');";
	echo "window.location = '../search.php?search=&submit='; ";
	echo "</script>";
}
?>