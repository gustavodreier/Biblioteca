<?php
	include("../head.php");

require('../include/conexao.php');

	//Valida se os dados
	$nome = $_POST['nome'];
	$valido = TRUE;
	
	//INSERT INTO tabela ( ) values 
	if ($nome == '')
		$valido == FALSE;
	
	if ($valido) {
		$query = "UPDATE autor SET nome='".$nome."'";
		$consulta = mysql_query($query) or die(mysql_error());
		echo "Dados alterados com sucesso!!!";
	}
	include("../tail.php");
?>
