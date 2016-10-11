<?php
	session_start();
	if(!isSet($_SESSION['user_id']) or empty($_SESSION['user_id'])){
		header("location:index.php");
	}

	require_once "../includes/class.database.php";

	$db = new Database();
	$result = $db->SelectDespesasCat();

?>

<div class="charts">
	<div class="chart1">
		<h3>Despesas por status</h3>
	</div>

	<div class="chart2">
		<h3>Despesas por mês</h3>
	</div>
</div>

<script>
var data = {
  labels: ['Jan', 'Feb', 'Mar', 'Apr', 'Mai', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
    series: [
    [5, 4, 3, 7, 5, 10, 3, 4, 8, 10, 6, 8],
    [3, 2, 9, 5, 4, 6, 4, 6, 7, 8, 7, 4]
  ]
};

var options = {
  seriesBarDistance: 15
};

var responsiveOptions = [
  ['screen and (min-width: 641px) and (max-width: 1024px)', {
    seriesBarDistance: 10,
    axisX: {
      labelInterpolationFnc: function (value) {
        return value;
      }
    }
  }],
  ['screen and (max-width: 640px)', {
    seriesBarDistance: 5,
    axisX: {
      labelInterpolationFnc: function (value) {
        return value[0];
      }
    }
  }]
];

new Chartist.Bar('.chart1', data, options, responsiveOptions);</script>













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