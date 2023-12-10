<?php
	session_start();
	
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	// Cek username dan password
	if ($username == 'admin' && $password == '123456') {
		$_SESSION['login'] = true;
		header('Location: data-kriminal.php');
		exit();
	} else {
		header('Location: login.php?error=1');
		exit();
	}
?>