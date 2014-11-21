<?php

	require("conexao.inc");
	$usuario = $_POST['usuario'];
	$pass = $_POST['pass'];
	
	$consulta = mysql_query('select pass from login where usuario = '.$usuario.'');
	
	if (mysql_num_rows($consulta) == '') {
		echo 'BOMBANDO!';
	} else {
		echo 'U SHALL NOT PASS!';
	}
	


?>