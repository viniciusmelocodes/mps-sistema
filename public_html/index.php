<?php
	session_start();
	header('Content-type: text/html; charset=utf-8');
	
	if(isSet($_SESSION['user_id']) and isSet($_SESSION['user_name'])){
		header("location:sistema.php");
	}

	if(isSet($_COOKIE['remember'])){
		$_SESSION['user_id'] = $_COOKIE['user_id'];
		$_SESSION['user_name'] = $_COOKIE['user_name'];
	}
?>

		<?php require_once "../includes/header.inc.php";?>
 		 			
 		<form class="form" action="login.php" method="POST" >
 			<img src="images/logo.png" alt="MSP Consultoria" />
			<input type="text" name="edt_user" placeholder="Usuário" /></br>
 			<input type="password" name="edt_pass" placeholder="Senha" /></br>
 			<input type="checkbox" name="chk_remember" value=1/><span>Mantenha-me conectado</span>
 			<input type="submit" value="Autenticar" /></br>
 			<a href="#">Recuperar senha</a>

		</form>

		<div class="login-message">
			
		</div>

		<?php require_once "../includes/bottom.inc.php";?>