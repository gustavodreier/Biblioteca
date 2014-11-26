<?php
	require("include/conexao.php");
	session_start();
	$usuario = $_POST['usuario'];
	$pass = $_POST['pass'];
	
	$consulta = mysql_query('select pass,tipo from login,pessoa 
							where login.usuario = pessoa.email
							AND usuario = "'.$usuario.'"') or die(mysql_error());
	
	$dados = mysql_fetch_array($consulta);
	if ($pass == $dados['pass']) {
		$_SESSION['name'] = $usuario;
		$_SESSION['type'] = $dados['tipo'];
		header("Location: index.php");
	} else {
		echo 'U SHALL NOT PASS!';
		
	}

?>