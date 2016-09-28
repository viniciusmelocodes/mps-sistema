<?php

	$config = array(
		'host' => 'localhost',
		'database' => 'msp',
		'user' => 'msp_connect',
		'pass' => 'aD05fgH'
	);

	try{

		$db = new PDO('mysql:host='.$config['host'].';dbname='.$config['database'],$config['user'],$config['pass']);

	} catch(PDOException $e){
		var_dump($e);
	}
	
	function user_available($login){
		$sql = "SELECT COUNT(`id`) AS CNT FROM `users` WHERE `user`=:login";

		$statement = $db->prepare($sql);
		$statement->bindParam('login', $login, PDO::PARAM_STR);
		$statement->execute();

		$result = $statement->fetch();

		return (!empty($result['CNT']))? false : true;
	}

?>