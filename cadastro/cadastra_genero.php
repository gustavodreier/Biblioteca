<?php
	include("../head.php");

?>
	<div>
		<form action="incluir_genero.php" method="post">
		<h3>Preencha os campos abaixo</h3>
		Nome do Gênero:<input name="nome" size="20" maxlenght="20" type="text"/>
		Descrição:<input name="desc" size="31" maxlenght="100" type="text"/>
		<center><input name="enviar" type="submit" value="Enviar" class="botao"/></center>
	</div>

<?php
include("../tail.php");
?>