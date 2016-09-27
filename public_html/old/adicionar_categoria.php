<?php

	if (isSet($_POST['edt_categoria'])){
		echo "Adcionando nova categoria: ".$_POST['edt_categoria'];
	}

?>

<form action=<?php echo $_SERVER['PHP_SELF'] ;?> method="POST">
	<label for="edt_categoria">Categoria a adicionar:</label></br>
	<input type="text" name="edt_categoria" />
	<input type="submit" name="btn_add_category" value="Ok"/>
</form>