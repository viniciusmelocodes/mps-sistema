<?php
	
	if(!isSet($_GET['e'])){
		//no error messages, show a wrong page message
	} else {
		if($_GET['e'] == "s_unset"){ 
			session_destroy();
		?>

		<div class="error-box">
			<p>Parece que esse usuário não está mais logado no sistema. <a href="/index.php">Clique aqui</a> para ser redirecionado para a área de login</p>
		</div>

		} else 

		if($_GET['e'] == "u_noaccess"){


		}
	}
	

?>