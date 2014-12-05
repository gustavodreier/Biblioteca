<?php
	include("../head.php");

?>
	<form action="incluir_autor.php" method="post">
	<h3>Preencha os campos abaixo</h3>

	<div>
		Nome do Autor:<input name="nome" size="35" maxlenght="100" type="text"/><br /><br/>
		<center><input name="enviar" type="submit" value="Enviar" class="botao"/></center>
	</div>
	</form>
<?php
include("../tail.php");
?>