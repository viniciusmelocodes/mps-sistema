<?php

	session_start();
	
	if(!isSet($_GET['e'])){
		?><p>Você não deveria estar aqui!</p><?php
	} else {
		if($_GET['e'] == 's_unset'){
			session_destroy();
			?><div class="error-box">
				<p>Parece que esse usuário não está mais logado no sistema. <a href="../index.php">Clique aqui</a> para ser redirecionado para a área de login</p>
			</div><?php
		}
		if($_GET['e'] == 'u_noaccess'){ ?>
			<div class="error-box">
				<p>Usuário sem permissão para acessar essa área! <a href="../sistema.php">Clique aqui</a> para voltar.</p>
			</div> <?php
		}
	}

?>

