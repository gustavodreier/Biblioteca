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
	$dados['pass'] = $_POST['pass'];
	$dados['newPass'] = $_POST['newPass'];
	$dados['newPass2'] = $_POST['newPass2'];
	
	$valido = TRUE;
	
	//INSERT INTO tabela ( ) values 
	foreach ($dados AS $dado) {
		if ($dado == "")
			$valido == FALSE;
	}
	
	if ($valido) {
		//valida se a senha é correspondente
		$query = "SELECT usuario FROM login WHERE pass='".$dados['pass']."'";
		$consulta = mysql_query($query) or die("Erro 1 - ".mysql_error());
		$array = mysql_fetch_array($consulta);
		if (($array['usuario'] != $_SESSION['name']) || ($dados['newPass'] != $dados['newPass2'])) {
			
			echo "As senhas não coincidem!!!";
		} else {	
		
			$query = "UPDATE login SET pass='".$dados['newPass']."' WHERE usuario='".$_SESSION['name']."'";
			mysql_query($query) or die("Error 2 - ".mysql_error());
			echo "Dados alterados com sucesso!!!";
		}
	}

	include("../tail.php");
?>