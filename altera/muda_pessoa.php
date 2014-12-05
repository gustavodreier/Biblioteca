<?php
	include("../head.php");

require('../include/conexao.php');

	//Valida se os dados
	$dados['nome'] = $_POST['nome'];
	$dados['email'] = $_POST['email'];
	$dados['rg'] = (int) $_POST['rg'];
	$dados['telefone'] = (int) $_POST['telefone'];
	$dados['endereco'] = $_POST['endereco'];
	$dados['cidade'] = $_POST['cidade'];
	$dados['tipo'] = (int) $_POST['tipo'];
	$valido = TRUE;
	
	//INSERT INTO tabela ( ) values 
	foreach ($dados AS $dado) {
		if ($dado == "")
			$valido == FALSE;
	}
	
	if ($valido) {
		$query = "UPDATE pessoa SET nome='".$dados['nome']."',
					email='".$dados['email']."',
					rg='".$dados['rg']."',
					telefone='".$dados['telefone']."',
					endereco='".$dados['endereco']."',
					cidade='".$dados['cidade']."',
					tipo='".$dados['tipo']."'";
		$consulta = mysql_query($query) or die(mysql_error());
		echo "Dados alterados com sucesso!!!";
	}
	include("../tail.php");
?>
