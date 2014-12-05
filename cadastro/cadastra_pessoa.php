<?php
	include("../head.php");

?>
	<div>
		<form action="incluir_pessoa.php" method="post">
		<h3>Preencha os campos abaixo</h3>
		<!--
		id int(10) NOT NULL auto_increment,
		nome varchar (50) NOT NULL,
		email varchar (50) NOT NULL,
		login -> pass
		rg int (10) NOT NULL,
		telefone int (12),
		endereco varchar (75),
		cidade varchar (25),
		tipo int(1);
		
		-->
		<p>Nome:<input name="nome" size="20" maxlenght="50" type="text"/>
		<p>Email:<input name="email" size="20" maxlenght="50" type="text"/><br/>
		<p>Senha:<input name="pass" size="20" maxlenght="30" type="password"/><br/>
		<p>RG:<input name="rg" size="10" maxlenght="10" type="text"/>
		<p>Telefone:<input name="telefone" size="10" maxlenght="9" type="text"/>
		<p>Endereço:<input name="endereco" size="20" maxlenght="20" type="text"/>
		<p>Cidade:<input name="cidade" size="20" maxlenght="20" type="text"/>
		<p>Tipo de usuario:<select name="tipo">
			<option value="1">Usuario</option>
			<option value="0">Bibliotecario</option>
		</select>
		
		<center><input name="enviar" type="submit" value="Enviar" class="botao"/></center>
	</div>

<?php
include("../tail.php");
?>
