<?php

	if(isSet($_GET['id'])){
		$user_id = $_GET['id'];
	}

	require_once "../includes/header.inc.php";

?>

<h2>Digite seu código de ativação recebido por email</h2>
<form>
	<input type="text" name="edt_active_code" placeholder="Ex: 8e80aa8666161beb9f25f5bed48f06c7" />
	<input type="submit" value="Ativar usuário" />
</form>


Caso não tenha recebido um email com o código de ativação, <a href="#">clique aqui.</a>