<?php
$db_server = "db";
$db_user = "root";
$db_pass = "rmuti@rootPassW0rd";
$db_src ="inventory";
$db = new mysqli($db_server,$db_user,$db_pass,$db_src);
$db->query("set names utf8");
if ($db->connect_error) {
echo "Connection failed: " . $db->connect_error;
} 
?>