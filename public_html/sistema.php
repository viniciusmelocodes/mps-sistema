<?php 

	session_start();

	if(!isSet($_SESSION['user_id']) || !isSet($_SESSION['user_name']) || !isSet($_SESSION['access_level'])){
		header("location:index.php");
	}

	require_once "../includes/header.inc.php"; 

?>

	<div class="top">
		<!-- <img src="images/logo-header.png" alt="MSP Consultoria" /> -->
		<h1>MSP</h1>

		<nav>
			<ul>
				<a href="dashboard.php"><li class="selected">Dashboard</li></a>
				<a href="titulos.php"><li>Titulos</li></a>
				<!-- <a href="cheques.php"><li>Cheques e Duplicatas</li></a> -->
				<a href="investimentos.php"><li>Investimentos</li></a>
				<a href="investidores.php"><li>Investidores</li></a>
				<a href="despesas.php"><li>Despesas</li></a>
				<a href="tarifas.php"><li>Tarifas</li></a>
				<a href="admin.php"><li>Administração</li></a>
			</ul>
		</nav>

		<div class="logged-user">
			<a href="#" class="drop-down-menu-link"><p>Bem vindo, <span><?php echo $_SESSION['user_name']; ?></span></p></a>
		</div>
		<div class="drop-down-menu">
				<a href="config.php">Configurações</a>
				<a href="logout.php">Sair</a>	
			</div>
	</div>

	<div class="container">
		<div class="content">

		<?php include "dashboard.php" ;?>

		</div>

	</div>

<?php require_once "../includes/bottom.inc.php"; ?>