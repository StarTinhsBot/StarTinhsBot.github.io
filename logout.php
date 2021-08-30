<?php
	session_start();
	if(isset($_SESSION['username'])){
		session_unset();
		header("Location: /login.php?i=3");
	}
	else{
		header("Location: /login.php?i=3");
	}
?>