<?php

session_start();

if(session_destroy()){
	if(isSet($_COOKIE['remember'])){
		setcookie("remember","",time() - 3600);
	}
	header("location:index.php");

}

?>