<?php

	$hash = hash('sha512',$_GET['pass']);
	echo $hash;

?>