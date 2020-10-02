<?php
	session_start();
	include('../connection/phpconnect.php');
	$Username = $_POST['username'];
	$Password = $_POST['password'];
	$query = "SELECT * FROM `users` WHERE `username` = '$Username' AND `password` = '$Password'";
	$query2 = "SELECT * FROM `users` WHERE `username` = '$Username'";
	$query3 = "SELECT `password` FROM `users` WHERE `username` = '$Username'";
	$result = mysqli_query($db, $query);
	$result2 = mysqli_query($db, $query2);
	$result3 = mysqli_query($db, $query3);
	
	if(mysqli_num_rows($result)==1){
		$row = mysqli_fetch_array($result);

		$_SESSION["username"] = $row["username"];

		session_write_close();
		echo "<script type='text/javascript'>";
		echo "window.history.back()";
		echo "</script>";
	}
	else if(mysqli_num_rows($result2)==0)
	{
		echo "<script type='text/javascript'>";
		echo "alert('Do not have this Username');";
		echo "window.history.back()";
		echo "</script>";
	}
	else if($Password!==$result3)
	{
		echo "<script type='text/javascript'>";
		echo "alert('Password Incorrect!');";
		echo "window.history.back()";
		echo "</script>";
	}
?>