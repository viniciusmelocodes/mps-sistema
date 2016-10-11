<?php


?>


<div class="charts">
	<!-- <div class="ct-square"></div> -->
</div>


<a href="#">Adicionar titulo</a>
<div class="add-titulo">
	<form action="adicionar_titulo.php" method="post">
		<label for="edt_venc">Vencimento:</label><br />
		<input type="text" name="edt_venc" />
		<!-- <input type="text" name="edt_desc" /> -->
		<!-- select bordero -->
		<!-- select cliente -->
		<!-- select cheque / duplicata -->
		<input type="text" name="edt_valor" />
		<!-- select situacao -->
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
			<th>Vencimento</th>
			<th>Borderô</th>
			<th>Cliente</th>
			<th>Cheque / Duplicata</th>
			<th>Valor</th>
			<th>Situação</th>
			<th>Operação</th>
			<th>Comentários</th>
		</tr>
	</table>
</div>