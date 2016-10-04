<?php 

	session_start();

	if(!isSet($_SESSION['user_id']) || !isSet($_SESSION['user_name']) || !isSet($_SESSION['access_level'])){
		header("location:index.php");
	}

	require_once "../includes/header.inc.php"; 

?>

	<div class="top">
		<img src="images/logo-header.png" alt="MSP Consultoria" />

		<div class="menu">
				<ul>
					<a href="#">
						<li class="selected">
							<img src="images/icon.png" />
							<p>Dashboard</p>
						</li>
					</a>
					<a href="#">
						<li class="selected">
							<img src="images/icon.png" />
							<p>Cheques e Duplicatas</p>
						</li>
					</a>
					<a href="#">
						<li class="selected">
							<img src="images/icon.png" />
							<p>Investimentos</p>
						</li>
					</a>
					<a href="#">
						<li class="selected">
							<img src="images/icon.png" />
							<p>Investidores</p>
						</li>
					</a>
					<a href="#">
						<li class="selected">
							<img src="images/icon.png" />
							<p>Titulos</p>
						</li>
					</a>
					<a href="#">
						<li class="selected">
							<img src="images/icon.png" />
							<p>Despesas</p>
						</li>
					</a>
					<a href="#">
						<li class="selected">
							<img src="images/icon.png" />
							<p>Tarifas</p>
						</li>
					</a>
					<a href="#">
						<li class="selected">
							<img src="images/icon.png" />
							<p>Administração</p>
						</li>
					</a>
				</ul>
		</div>

		<div class="logged-user"></div>
	</div>








		<div class="top-bg">
			<div class="top">
				<img src="images/logo.png" alt="MSP Consultoria" />
				<div class="user-info">
					<a href="#" class="drop-down-menu-link"><span>Bem vindo, <?php echo $_SESSION['user_name']; ?></span></a>
					<div class="drop-down-menu">
						<a href="config.php">Configurações</a>
						<a href="logout.php">Sair</a>
					</div>
				</div>
			</div>
		</div>

		<div class="menu">
			<ul>
				<a href="dashboard.php"><li>Dashboard</li></a>
				<a href="cheques.php"><li>Cheques e Duplicatas</li></a>
				<a href="investimentos.php"><li>Investimentos</li></a>
				<a href="investidores.php"><li>Investidores</li></a>
				<a href="titulos.php"><li>Titulos</li></a>
				<a href="despesas.php"><li>Despesas</li></a>
				<a href="tarifas.php"><li>Tarifas</li></a>
				<a href="adm/index.php"><li>Administração</li></a>
			</ul>
		</div>

		<div class="content">

		</div>

 		<?php require_once "../includes/bottom.inc.php"; ?>