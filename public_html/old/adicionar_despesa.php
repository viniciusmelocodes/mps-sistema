<?php

	$errors = array();
	$data = array();

	if (empty($_POST['edt_conta'])){
		$errors['conta'] = "Necessário adicionar uma conta";
	}

	if (empty($_POST['edt_desc'])){
		$errors['desc'] = "Necessário adicionar uma descrição da despesa";
	}

	if (empty($_POST['edt_valor'])){
		$errors['valor'] = "Necessário adicionar um valor";
	}

	if (empty($_POST['edt_pagamento'])){
		$errors['pagamento'] = "Necessário adicionar um método de pagamento";
	}

	if (empty($_POST['edt_categoria'])){
		$errors['categoria'] = "Necessário selecionar uma categoria";
	}

	if (empty($_POST['edt_data'])){
		$errors['data'] = "Necessário adicionar uma data";
	}


?>

<form action=<?php echo $_SERVER['PHP_SELF'];?> method="POST">
	<input type="text" name="edt_conta" placeholder="Conta" /></br>
	<input type="text" name="edt_desc" placeholder="Descrição" /></br>
	<input type="text" name="edt_valor" placeholder="Valor" /></br>
	<input type="text" name="edt_pagamento" placeholder="Forma de pagamento" /></br>
	<input type="text" name="edt_comentarios" placeholder="Comentarios" /></br>

	<!-- TODO -->
	<!-- Query database and create a select with categoria itens-->
	
	<input type="text" name="edt_categoria" placeholder="Categoria" /></br>
	<input type="text" name="edt_data" placeholder="Data" /></br>
	<input type="submit" value="Adicionar" name="btn_add" />
</form>