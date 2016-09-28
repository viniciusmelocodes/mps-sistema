<?php

	session_start();
	header('Content-type: text/html; charset=utf-8');

	if(isset($_POST['edt_user']) && isset($_POST['edt_pass'])){
		echo "User logged";
		$_SESSION['user_id'] = "Randy";
	}

	if(isset($_SESSION['user_id'])){
		header("location:../public_html/sistema.php");
	}

?>
