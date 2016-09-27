<?php

	$config = array(
		'host' => 'localhost',
		'database' => 'msp',
		'user' => 'msp_connection',
		'pass' => 'aD05fgH'
	);

	include_once "../../includes/database.class.php";

	$data = new Database();

	$db = new PDO('mysql:host='.$config['host'].';dbname='.$config['database'],$config['user'],$config['pass']);
	
	function user_available($db, $login){
		$sql = "SELECT COUNT(`id`) AS CNT FROM `operadores` WHERE `login`=:login";

		$statement = $db->prepare($sql);
		$statement->bindParam('login', $login, PDO::PARAM_STR);
		$statement->execute();

		$result = $statement->fetch();

		return (!empty($result['CNT']))? false : true;
	}

	if (user_available($db, "admin")){
		echo("Usuário livre");
	}

	if(!eregi("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$", $email)){
	    // Return Error - Invalid Email
	}else{
	    // Return Success - Valid Email
	}

	// function insert_new_user($db, $login, $name, $pass, $email, $access_lvl){

	// 	$pass = sha1($pass);
	// 	$creation_date = date.now();


	// 	$sql = """INSERT INTO `operadores` (`login`,`senha`,`nome`,`email`,`data_criacao`,`level_permissao_id`)
	// 			  VALUES(:login,:pass,:name,:email,:creation_date,:permission_level)""";
	// 	$statment = $db->prepare($sql);
	// 	$statment->bindParam('login',$login, PDO::PARAM_STR);
	// 	$statment->bindParam('')
	// }


?>

<!DOCTYPE HTML>
<html>
	<head>
		<meta charset = "utf-8">
		<meta name="description" content="" />
	  	<meta name="keywords" content="" />
		<meta name="robots" content="" />
		<title>MSP Consultoria - Admin</title>
		<link rel="stylesheet" href="styles/reset.css">
		<link rel="stylesheet" href="styles/main.css">
		<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>
	</head>

	<body>
 		 			
 		<form class="form" action=<?php echo $_SERVER['PHP_SELF'];?> method="POST" >
			
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

			<input type="submit" name="create_user" value="Criar usuário"/>
			
		</form>

		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
		<!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
		<script scr ="script/script.js"></script>

	</body>
</html>	