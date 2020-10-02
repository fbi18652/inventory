<?php
$db_server = "localhost";
$db_user = "root";
$db_pass = "";
$db_src ="inventory";
$db = new mysqli($db_server,$db_user,$db_pass,$db_src);
$db->query("set names utf8");
if ($db->connect_error) {
echo "Connection failed: " . $db->connect_error;
} 
?>