<?php
	include("../head.php");

	require('../include/conexao.php');

	/*
	nome varchar (50) NOT NULL,
	email varchar (50) NOT NULL,
	login -> pass
	rg int (10) NOT NULL,
	telefone int (12),
	endereco varchar (75),
	cidade varchar (25),
	tipo int(1);
	*/
	//Valida se os dados
	$dados['nome'] = $_POST['nome'];
	$dados['email'] = $_POST['email'];
	$dados['pass'] = $_POST['pass'];
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
		$query = "INSERT INTO pessoa 
		(nome, email, rg, telefone, endereco, cidade, tipo) 
		VALUES ('".$dados['nome']."','".$dados['email']."',".$dados['rg'].",".$dados['telefone'].",
		'".$dados['endereco']."','".$dados['cidade']."',".$dados['tipo'].")";
		
		$consulta = mysql_query($query) or die("Erro 1 - ".mysql_error());
	
		$query = "INSERT INTO login (usuario, pass) VALUES ('".$dados['email']."','".$dados['pass']."')";
		mysql_query($query) or die("Error 2 - ".mysql_error());
	
		echo "Dados inseridos com sucesso!!!";

	}

	include("../tail.php");
?>