<?php
	include("../head.php");

require('../include/conexao.php');

	//Valida se os dados
	$nome = $_POST['nome'];
	$desc = $_POST['desc'];
	$valido = TRUE;
	
	//INSERT INTO tabela ( ) values 
	if ($nome == '')
		$valido == FALSE;
	
	if ($valido) {
		$query = "UPDATE genero SET nome='".$nome."', descricao='".$desc."'";
		$consulta = mysql_query($query) or die(mysql_error());
		echo "Dados alterados com sucesso!!!";
	}
	include("../tail.php");
?>
