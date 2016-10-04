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

	//TODO::do the remember me function validation
?>

		<?php require_once "../includes/header.inc.php";?>
		<div class="login-form">
 			<img src="images/logo.png" alt="MSP Consultoria" />

 			<div class="login-messages">
				<p></p>
 			</div>


 			<form class="form" action="login.php" method="POST" >
 			
				<input type="text" name="edt_user" id="edt_user" placeholder="Usuário" /></br>
	 			<input type="password" name="edt_pass" id="edt_pass" placeholder="Senha" /></br>
	 			<input type="checkbox" name="chk_remember" id="chk_remember" />
	 			<label for="chk_remember">Mantenha-me conectado</label>
	 			<input type="submit" value="Autenticar" name="submit" id="btn_login"/></br>
	 			<a href="#">Recuperar senha</a>

			</form>
		</div>
		
		<?php require_once "../includes/bottom.inc.php";?>