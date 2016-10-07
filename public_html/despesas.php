<?php
	session_start();
	if(!isSet($_SESSION['user_id']) or empty($_SESSION['user_id'])){
		header("location:index.php");
	}

	require_once "../includes/class.database.php";

	$db = new Database();
	$result = $db->SelectDespesasCat();

?>


<h1>Despesas</h1>
<a href="adicionar_despesa.php">Adicionar despesa</a></br>
<div class="add-despesa">
	<form action="adicionar_despesa.php" method="post">
		<input type="text" name="edt_conta" />
		<input type="text" name="edt_desc" />
		<input type="text" name="edt_valor" />
		<input type="text" name="edt_forma" />
		<input type="text" name="edt_comentarios" />
		<input type="text" name="edt_categoria" />
		<input type="text" name="edt_data" />
		<input type="submit" name="btn_submit" value="Adicionar" />
	</form>
</div>

<div class="table-filter">
</div>

<div class="table">
	<table>
		<tr>
			<th>Conta</th>
			<th>Descrição</th>
			<th>Valor</th>
			<th>Forma de pagamento</th>
			<th>Comentários</th>
			<th>Categoria</th>
			<th>Data</th>
		</tr>
		<?php foreach($result as $rst){ ?>
		<tr>
			<td><?php echo $rst['conta'];?></td>
			<td><?php echo $rst['descricao'];?></td>
			<td><?php echo $rst['valor'];?></td>
			<td><?php echo $rst['forma_pagamento'];?></td>
			<td><?php echo $rst['comentarios'];?></td>
			<td><?php echo $rst['titulo'];?></td>
			<td><?php echo $rst['data'];?></td>
		</tr>
		<?php }?>
	</table>
</div>