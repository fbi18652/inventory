<?php
	session_start();
	session_destroy();
	echo "<script type='text/javascript'>";
	echo "window.history.back()";
	echo "</script>";
?>