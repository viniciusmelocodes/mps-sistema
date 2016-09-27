<?php

	session_start();
	//todo:: do user session validation
	$errors = array();


	//validate the user name
	if(!isSet($_POST['edt_user']) or empty($_POST['edt_user'])){
		$errors['user'] = "Favor digitar o usuário";
	} else 
	//validate the password
	if(!isSet($_POST['edt_pass']) or empty($_POST['edt_pass'])){
		$errors['user'] = "Favor digitar a senha";
	} else {

		$user = $_POST['edt_user'];
		$pass = $_POST['edt_pass'];

		require_once "../includes/class.database.php";
		$db = new Database();
		$id = $db->CheckLogin($user);
		if (!$id == false){
			$result = $db->CheckPass($id, hash('sha512', $pass));

			if ($result == true){
				if($db->CheckActive($id)){

					if($_POST['chk_remember']){
						$time = 3600
						//todo:: create a cookie
					}
					$_SESSION['user_id'] = $id;

					header("location:system.php");
				} else {
					header("location:ativar.php");
				}
			}
			
		} else {
			$errors['user'] = "Usuário não encontrado";
		}

	}

?>