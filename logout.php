<?php
	session_start();
	session_destroy();

	if (isset($_COOKIE["user"]) AND isset($_COOKIE["pass"])){
		setcookie("user", '', time() - (86400 * 30));
		setcookie("pass", '', time() - (86400 * 30));
	}

	header('location:index.php');

?>