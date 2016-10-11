<?php

	session_start();

	if(!isSet($_SESSION['user_id']) OR !isSet($_SESSION['user_name']) OR !isSet($_SESSION['access_level'])){
		header("location:erro.php?e=s_unset");
	}

	if($_SESSION['access_level'] != 0){
		header("location:erro.php?e=u_noaccess");	
	} else {

	}
	




?>

<form class="form" action="criar_usuario.php" method="POST" >
	<label for="edt_user">Usuário:</label>
	<input type="text" name="edt_user" />

	<label for="edt_user">Nome Completo:</label>
	<input type="text" name="edt_name" />

	<label for="edt_user">Email:</label>
	<input type="text" name="edt_email" />
	
	<label for="edt_user">Senha:</label>
	<input type="password" name="edt_pass" />

	<label for="edt_user">Confirmar senha:</label>
	<input type="password" name="edt_pass_confirmation" />

	<label for="ddm_level">Level de acesso do usuário:</label></br>
	<select name="ddm_level">
		<option value="1">Administrador</option>
		<option value="2">Operador</option>
	</select>

	<input type="submit" name="btn_submit" value="Criar usuário"/>
</form>