<?php
	session_start();
	// session_unset('loggedin');
	session_destroy();
	header('location: ../login.php');
?>