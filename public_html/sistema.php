<?php 

	session_start();

	if(!isSet($_SESSION['user_id']) || !isSet($_SESSION['user_name']) || !isSet($_SESSION['access_level'])){
		header("location:index.php");
	}

	require_once "../includes/header.inc.php"; 

?>

 		<div class="top">
 			<img src="images/logo.png" alt="MSP Consultoria" />
 			<div class="user_info">
 				<a href="#" class="drop-down-menu-link"><p>Bem vindo, <?php echo $_SESSION['user_name']; ?></p></a>
 				<div class="drop-down-menu"> 
 					<a href="config.php">Configurações</a>
 					<a href="logout.php">Sair</a>
				</div>
 			</div>
 			<ul>
 				<li class="selected"><a href="dashboard.php">Dashboard</a></li>
 				<li><a href="#">Cheques e Duplicadas</a></li>
 				<li><a href="investimentos.php">Investimentos</a></li>
 				<li><a href="investidores.php">Invertidores</a></li>
 				<li><a href="titulos.php">Titulos</a></li>
 				<li><a href="despesas.php">Despesas</a></li>
 				<li><a href="tarifas.php">Tarifas</a></li>
 				<li><a href="adm/index.php">Administração</a></li>
 			<ul>
 		</div>
 		<div class="content">
 			<?php include_once "dashboard.php"; ?>		
 		</div>

 		<?php require_once "../includes/bottom.inc.php"; ?>