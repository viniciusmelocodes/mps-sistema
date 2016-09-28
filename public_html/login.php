<?php

	session_start();
	$errors = array();

	//TODO::do the remember me function validation

	//validate the user name
	if(!isSet($_POST['edt_user']) or empty($_POST['edt_user'])){
		$errors['n_user'] = "Favor digitar o usuário";
		echo $errors['n_user'];
	} else 
	//validate the password
	if(!isSet($_POST['edt_pass']) or empty($_POST['edt_pass'])){
		$errors['n_pass'] = "Favor digitar a senha";
		echo $errors['n_pass'];
	} else {

		$user = $_POST['edt_user'];
		//pass hashed
		$pass = hash('sha512', $_POST['edt_pass']);

		require_once "../includes/class.database.php";
		$db = new Database();
		
		$result = $db->CheckLoginPass($user, $pass);

		if (!$result == false){
			if($result['ativo'] == 1){
				if($result['bloqueado'] == 0){
					$_SESSION['user_id'] = $result['id'];
					$_SESSION['user_name'] = $result['nome'];
					$_SESSION['access_level'] = $result['level_permissao_id'];
					//TODO:: verify remember me option and set the cookies
					header("location:sistema.php");	
				} else {
					$errors['b_user'] = "Usuário bloqueado!";
					echo $errors['b_user'];
				}
			} else {
				//TODO:: create ativar page, with a form to insert the code and a link to send a new email
				$errors['i_user'] = "Usuário não ativado";
				echo $errors['i_user'];
			}
		} else {
			$errors['w_userpass'] = "Usuário não encontrado ou senha inválida!";
			echo $errors['w_userpass'];
		}
	}
?>