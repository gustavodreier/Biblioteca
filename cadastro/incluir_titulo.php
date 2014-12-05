<?php
	include("../head.php");

	require('../include/conexao.php');

	//Valida se os dados
	$nome = $_POST['nome'];
	$desc = $_POST['desc'];
	$dados['genero'] = (int) $_POST['genero'];
	$dados['autor'] = (int) $_POST['autor'];
	$valido = TRUE;
	
	//INSERT INTO tabela ( ) values 
	if ($nome == '' || $desc == '' || $dados['genero'] || $dados['autor'])
		$valido == FALSE;
	
	if ($valido) {
		$query = "INSERT INTO titulo (nome, descricao) VALUES ('".$nome."','".$desc."')";
		$consulta = mysql_query($query) or die(mysql_error());
		
		//retorna id do ultimo insert
		$id = (int) mysql_insert_id();
	
		$query = "INSERT INTO genero_do_titulo (id_genero, id_titulo) VALUES (".$dados['genero'].",".$id.")";
		mysql_query($query) or die("Error 2 - ".mysql_error());
		
		$query = "INSERT INTO autor_do_titulo(id_autor, id_titulo) VALUES (".$dados['autor'].",".$id.")";
		mysql_query($query) or die("Error 3 - ".mysql_error());
	
		echo "Dados inseridos com sucesso!!!";

	}

	include("../tail.php");
?>