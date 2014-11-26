<?php
require('include/conexao.php');
session_start();
if(!isset($_SESSION['name'])) 
	//Se nao existir uma sessao ativa redireciona para o login
        header("Location: login.php");
?>
<head>
	<title>Página inicial</title>
	 <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	 <head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script>
	// Copyright 2006-2007 javascript-array.com

	var timeout     = 500;
	var closetimer  = 0;
	var ddmenuitem  = 0;

	// open hidden layer
	function mopen(id)
	{
			// cancel close timer
			mcancelclosetime();

			// close old layer
			if(ddmenuitem) ddmenuitem.style.visibility = 'hidden';

			// get new layer and show it
			ddmenuitem = document.getElementById(id);
			ddmenuitem.style.visibility = 'visible';

	}
	// close showed layer
	function mclose()
	{
			if(ddmenuitem) ddmenuitem.style.visibility = 'hidden';
	}

	// go close timer
	function mclosetime()
	{
			closetimer = window.setTimeout(mclose, timeout);
	}

	// cancel close timer
	function mcancelclosetime()
	{
			if(closetimer)
			{
					window.clearTimeout(closetimer);
					closetimer = null;
			}
	}

	// close layer when click-out
	document.onclick = mclose;
	</script>
</head>
<head>
<body>
	<ul id="sddm">
	<li><a href="#"
		onmouseover="mopen('m1')"
		onmouseout="mclosetime()">Cadastrar</a>
		<div id="m1"
			onmouseover="mcancelclosetime()"
			onmouseout="mclosetime()">
			<a href="aplic/incluir.php?tabela=autor">Autor</a>
			<a href="aplic/incluir.php?tabela=emprestimo">Emprestimo</a>
			<a href="aplic/incluir.php?tabela=genero">Genero</a>
			<a href="aplic/incluir.php?tabela=livro">Livro</a>
			<!--
			<a href="aplic/incluir.php?tabela=">Gênero do título</a>
			<a href="aplic/incluir.php?tabela=autor_do_titulo">Autor do título</a>
			<a href="#">LOGIN</a>
			<a href="#">MULTA</a>
			-->
			<a href="aplic/incluir.php?tabela=pessoa">Pessoa</a>
			<a href="aplic/incluir.php?tabela=titulo">Título</a>
		</div>
	</li>
	<li><a href="#"
		onmouseover="mopen('m2')"
		onmouseout="mclosetime()">Alterar</a>
		<div id="m2"
			onmouseover="mcancelclosetime()"
			onmouseout="mclosetime()">
			<a href="aplic/alterar.php?tabela=autor">Autor</a>
			<a href="aplic/alterar.php?tabela=emprestimo">Emprestimo</a>
			<a href="aplic/alterar.php?tabela=genero">Genero</a>
			<a href="aplic/alterar.php?tabela=livro">Livro</a>
			<a href="aplic/alterar.php?tabela=login">Senha</a>
			<!--
			<a href="aplic/alterar.php?tabela=">Gênero do título</a>
			<a href="aplic/alterar.php?tabela=autor_do_titulo">Autor do título</a>
			
			<a href="#">MULTA</a>
			-->
			<a href="aplic/alterar.php?tabela=pessoa">Pessoa</a>
			<a href="aplic/alterar.php?tabela=titulo">Título</a>
		</div>
	</li>
	<li><a href="#"
		onmouseover="mopen('m3')"
		onmouseout="mclosetime()">Excluir</a>
		<div id="m3"
			onmouseover="mcancelclosetime()"
			onmouseout="mclosetime()">
			<!--
			<a href="aplic/excluir.php?tabela=autor">Autor</a>
			<a href="aplic/excluir.php?tabela=emprestimo">Emprestimo</a>
			<a href="aplic/excluir.php?tabela=genero">Genero</a>
			-->
			<a href="aplic/excluir.php?tabela=livro">Livro</a>
			<!--
			<a href="aplic/excluir.php?tabela=">Gênero do título</a>
			<a href="aplic/excluir.php?tabela=autor_do_titulo">Autor do título</a>
			<a href="#">LOGIN</a>
			<a href="#">MULTA</a>
			-->
			<a href="aplic/excluir.php?tabela=pessoa">Pessoa</a>
			<!--
			<a href="aplic/excluir.php?tabela=titulo">Título</a>
			-->
		</div>
	</li>
	<li><a href="#"
		onmouseover="mopen('m4')"
		onmouseout="mclosetime()">Consultar</a>
		<div id="m4"
			onmouseover="mcancelclosetime()"
			onmouseout="mclosetime()">
			<a href="aplic/consultar.php?tabela=autor">Autor</a>
			<a href="aplic/consultar.php?tabela=emprestimo">Emprestimo</a>
			<a href="aplic/consultar.php?tabela=genero">Genero</a>
			<a href="aplic/consultar.php?tabela=livro">Livro</a>
			<!--
			<a href="aplic/consultar.php?tabela=">Gênero do título</a>
			<a href="aplic/consultar.php?tabela=autor_do_titulo">Autor do título</a>
			<a href="#">LOGIN</a>
			-->
			<a href="aplic/consultar.php?tabela=">Multa</a>
			<a href="aplic/consultar.php?tabela=pessoa">Pessoa</a>
			<a href="aplic/consultar.php?tabela=titulo">Título</a>
		</div>
	</li>
	<li><a href="deslogar.php">Deslogar</a></li>
	</ul>
	<div style="clear:both"></div>
</body>
