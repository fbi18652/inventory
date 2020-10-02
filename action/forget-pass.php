<?php
include("../connection/phpconnect.php");
error_reporting(E_ERROR | E_WARNING | E_PARSE);
$to = $_REQUEST['email'];
$sql = "SELECT * FROM `users` WHERE `email` = $to;";
$result = mysqli_query($db, $sql);
if($result->num_rows==1){
    while($rows=$result->fetch_object()){
        $username = $rows->username;
        $password = $rows->password;
        $subject = "Forget-Pass";
        $txt = "$username<br>$password";
        $headers = "From: hame456@gmail.com" . "\r\n" .
        "CC: $to";
        mail($to,$subject,$txt,$headers);
        echo "<script type='text/javascript'>";
		echo "alert('ทำรายการสำเร็จ');";
		//echo "window.location = '../forget-pass.html';";
		echo "</script>";
    }
}
else{
    echo $to,"<br>";
    echo $username,"<br>";
    echo $password;
    echo "<script type='text/javascript'>";
    echo "alert('ไม่สามารถทำรายการได้');";
    //echo "window.history.back()";
    echo "</script>";
}
?>