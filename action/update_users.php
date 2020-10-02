<?php
include("../connection/phpconnect.php");
$username = $_REQUEST['username'];
$email = $_REQUEST['email'];
$password = $_REQUEST['password'];

    $sqlup = "UPDATE
        `users`
        SET
		`email` = '$email',password = '$password'
        WHERE
        `username` = '$username'";
	$update = mysqli_query($db, $sqlup);
	
	if($update){
		echo "<script type='text/javascript'>";
		echo "alert('Update Succesfuly');";
		echo "window.location = '../form_show_users.php'; ";
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